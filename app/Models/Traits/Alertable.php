<?php
namespace App\Models\Traits;

use App\Models\Alert;
use App\Models\AlertBase;
use App\Models\Targa;
use App\Models\Veicolo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

trait Alertable
{
    use HasFactory;
    //Parameterized values for alert levels
    public static int $firstThreshold = 7;
    public static int $secondThreshold = 15;
    public static int $thirdThreshold = 30;

    public static function getCurrentValidList ($calculateNewCachedData = false) : mixed
    {
        $table=(new static)->getTable();
        $cacheKey = 'valid_' . $table . '_list';



        if ($calculateNewCachedData || !Cache::has($cacheKey)) {

            $query = DB::table($table)
                ->select([
                    'id AS current_valid_id',
                    'id_veicolo',
                    'inizio_validita AS current_valid_inizio_validita',
                    'fine_validita AS current_valid_fine_validita'
                ])
                ->where('fine_validita', '>', DB::raw('DATE_SUB(CURDATE(), INTERVAL 1 DAY)'))
                ->where('inizio_validita', '<', DB::raw('DATE_ADD(CURDATE(), INTERVAL 1 DAY)'))
                ->orderBy('id_veicolo', 'ASC');
            $results=$query->get();

            $Dictionary=[];

            foreach ($results as $item) {
                if (!isset($Dictionary[$item->id_veicolo])) {
                    $Dictionary[$item->id_veicolo] = [];
                }

                $Dictionary[$item->id_veicolo][] = $item;
            }

            Cache::put($cacheKey, $Dictionary, 60 * 60);
        } else {
            $Dictionary = Cache::get($cacheKey);
        }

        return $Dictionary;
    }
    public static function getStartingNextList ($calculateNewCachedData = false) : mixed
    {
        $table=(new static)->getTable();
        $cacheKey = 'startingNext_' . $table . '_list';

        if ($calculateNewCachedData || !Cache::has($cacheKey)) {
            $results = DB::table($table)
                ->select(['id AS next_id','id_veicolo','inizio_validita AS next_inizio_validita','fine_validita AS next_fine_validita'])
                ->where('inizio_validita', '>=', now())
                ->orderBy('id_veicolo', 'ASC')
                ->get();

            $Dictionary=[];

            foreach ($results as $item) {
                if (!isset($Dictionary[$item->id_veicolo])) {
                    $Dictionary[$item->id_veicolo] = [];
                }

                $Dictionary[$item->id_veicolo][] = $item;
            }

            Cache::put($cacheKey, $Dictionary, 60 * 60);
        } else {

            $Dictionary = Cache::get($cacheKey);
        }

        return $Dictionary;
    }
    public static function getExpiredList($calculateNewCachedData = false) : mixed {
        $table=(new static)->getTable();
        $cacheKey = 'expired_' . $table . '_list';

        if ($calculateNewCachedData || !Cache::has($cacheKey)) {
            $results = DB::table($table)
                ->select(['id AS expired_id',
                    'id_veicolo',
                    'inizio_validita AS expired_inizio_validita',
                    'fine_validita AS expired_fine_validita'])
                ->where('fine_validita', '<=', now())
                ->orderBy('id_veicolo', 'ASC')
                ->orderBy('fine_validita', 'DESC')
                ->get();

            $Dictionary=[];

            foreach ($results as $item) {
                if (!isset($Dictionary[$item->id_veicolo])) {
                    $Dictionary[$item->id_veicolo] = [];
                }

                $Dictionary[$item->id_veicolo][] = $item;
            }

            Cache::put($cacheKey, $Dictionary, 60 * 60);
        } else {
            $Dictionary = Cache::get($cacheKey);
        }

        return $Dictionary;
    }

    public static function getAggregatedAlertsList($search=null,$order='livello',$page=1,$slice=true): LengthAwarePaginator
    {
        $valid = static::getCurrentValidList();
        $expired = static::getExpiredList();
        $startingNext = static::getStartingNextList();

        //Checks the order
        $order=self::setOrder($order);
        $orderBy=$order['orderBy'];
        $orderDirection=$order['orderDirection'];

        //Get all the vehicles considering the search
        $result=self::getFilteredVehicles($search, $page, $orderBy, $orderDirection);

        foreach($result as $key => $vehicle) {
            $vehicle->livello = null;
            $vehicle->next = null;
            $vehicle->id = null;

            if(@isset($valid[$vehicle->id_veicolo])) {
                $vehicle->valid = $valid[$vehicle->id_veicolo];
                foreach ($vehicle->valid as $contract) {
                    $livello = Carbon::parse($contract->current_valid_fine_validita)->addDay()->diffInDays(Carbon::now()) + 1;
                    if($livello>$vehicle->livello) {
                        $vehicle->livello = $livello;
                        $vehicle->inizio_validita = $contract->current_valid_inizio_validita;
                        $vehicle->fine_validita = $contract->current_valid_fine_validita;
                        $vehicle->id = $contract->current_valid_id;
                    }
                }
            } else {
                $vehicle->valid = false;
            }

            if(@isset($startingNext[$vehicle->id_veicolo])) {
                $vehicle->startingNext = $startingNext[$vehicle->id_veicolo];
                foreach ($vehicle->startingNext as $contract) {
                    $next = Carbon::parse($contract->next_inizio_validita)->diffInDays(Carbon::now());
                    if($next<$vehicle->next) {
                        $vehicle->next = $next;
                        $vehicle->inizio_validita = $contract->next_inizio_validita;
                        $vehicle->fine_validita = $contract->next_fine_validita;
                        $vehicle->id = $contract->next_id;
                    }
                }
            } else {
                $vehicle->startingNext = false;
            }

            if(@isset($expired[$vehicle->id_veicolo])) {
                $vehicle->expired = $expired[$vehicle->id_veicolo];
                if($vehicle->livello===null) {
                    foreach ($vehicle->expired as $contract) {
                        $livello = -(Carbon::now()->diffInDays($contract->expired_fine_validita));
                        if($livello>$vehicle->livello) {
                            $vehicle->livello = $livello;
                            $vehicle->inizio_validita = $contract->expired_inizio_validita;
                            $vehicle->fine_validita = $contract->expired_fine_validita;
                            $vehicle->id = $contract->expired_id;
                        }
                    }
                }
            } else {
                $vehicle->expired = false;
            }

            if($vehicle->livello > Alert::$thirdThreshold) {
                unset($result[$key]);
            }
        }

        if ($orderBy=='livello') {
            if($orderDirection=='DESC') {
                $result=($result->sortByDesc('livello'));
            } else {
                $result=($result->sortBy('livello'));
            }
        }

        return self::resultToPagination($result,$page,$slice);
    }

//
//		public static function getAggregatedAlertsListNew($search=null,$order='livello',$page=1,$slice=true): LengthAwarePaginator
//		{
//			//CHECK CACHE
//			//GET ALL VEHICLES
//			//UPDATE VEHICLES WITH VALID CONTRACTS
//			//UPDATE VEHICLES WITH EXPIRED CONTRACTS
//			//UPDATE VEHICLES WITH STARTING NEXT CONTRACTS
//			//CREATE DICTIONARY
//			//ADD TO CACHE
//			//RETURN
//
//
//
//			/*
//			$valid = static::getCurrentValidList();
//			$expired = static::getExpiredList();
//			$startingNext = static::getStartingNextList();
//
//			//Checks the order
//			$order=self::setOrder($order);
//			$orderBy=$order['orderBy'];
//			$orderDirection=$order['orderDirection'];
//
//			//Get all the vehicles considering the search
//			$result=self::getFilteredVehicles($search, $page, $orderBy, $orderDirection);
//
//			foreach($result as $key => $vehicle) {
//				$vehicle->livello = null;
//				$vehicle->next = null;
//				$vehicle->id = null;
//
//				if(@isset($valid[$vehicle->id_veicolo])) {
//					$vehicle->valid = $valid[$vehicle->id_veicolo];
//					foreach ($vehicle->valid as $contract) {
//						$livello = Carbon::parse($contract->current_valid_fine_validita)->addDay()->diffInDays(Carbon::now()) + 1;
//						if($livello>$vehicle->livello) {
//							$vehicle->livello = $livello;
//							$vehicle->inizio_validita = $contract->current_valid_inizio_validita;
//							$vehicle->fine_validita = $contract->current_valid_fine_validita;
//							$vehicle->id = $contract->current_valid_id;
//						}
//					}
//				} else {
//					$vehicle->valid = false;
//				}
//
//				if(@isset($startingNext[$vehicle->id_veicolo])) {
//					$vehicle->startingNext = $startingNext[$vehicle->id_veicolo];
//					foreach ($vehicle->startingNext as $contract) {
//						$next = Carbon::parse($contract->next_inizio_validita)->diffInDays(Carbon::now());
//						if($next<$vehicle->next) {
//							$vehicle->next = $next;
//							$vehicle->inizio_validita = $contract->next_inizio_validita;
//							$vehicle->fine_validita = $contract->next_fine_validita;
//							$vehicle->id = $contract->next_id;
//						}
//					}
//				} else {
//					$vehicle->startingNext = false;
//				}
//
//				if(@isset($expired[$vehicle->id_veicolo])) {
//					$vehicle->expired = $expired[$vehicle->id_veicolo];
//					if($vehicle->livello===null) {
//						foreach ($vehicle->expired as $contract) {
//							$livello = -(Carbon::now()->diffInDays($contract->expired_fine_validita));
//							if($livello>$vehicle->livello) {
//								$vehicle->livello = $livello;
//								$vehicle->inizio_validita = $contract->expired_inizio_validita;
//								$vehicle->fine_validita = $contract->expired_fine_validita;
//								$vehicle->id = $contract->expired_id;
//							}
//						}
//					}
//				} else {
//					$vehicle->expired = false;
//				}
//
//				if($vehicle->livello > Alert::$thirdThreshold) {
//					unset($result[$key]);
//				}
//			}
//
//			if ($orderBy=='livello') {
//				if($orderDirection=='DESC') {
//					$result=($result->sortByDesc('livello'));
//				} else {
//					$result=($result->sortBy('livello'));
//				}
//			}
//
//			return self::resultToPagination($result,$page,$slice);
//			*/
//		}
//
//
    public static function getAggregatedAlertsListWorking($search=null,$order='livello',$page=1,$slice=true): LengthAwarePaginator
    {
        $valid = static::getCurrentValidList();
        $expired = static::getExpiredList();
        $startingNext = static::getStartingNextList();

        $page = intval($page);
        if ($page <= 0 || !is_int($page)) {
            $page = 1;
        }

        $order=explode('_',$order);

        switch (strtolower($order[0])) {
            case 'marca':
                $orderBy = 'marca.nome';
                break;
            case 'modello':
                $orderBy = 'modello.nome';
                break;
            case 'targa':
                $orderBy = 'targa.targa';
                break;
            default:
                $orderBy = 'livello';
                break;
        }

        if(array_key_exists(1,$order,)&&strtolower($order[1])=='desc') {
            $orderDirection='DESC';
        } else {
            $orderDirection='ASC';
        }

        $query = DB::table(Veicolo::getTableName())
            ->leftJoin(Marca::getTableName(), Veicolo::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id')
            ->leftJoin(Modello::getTableName(), function ($join) {
                $join->on(Veicolo::getTableName() . '.id_modello', '=', Modello::getTableName() . '.id')
                    ->on(Modello::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id');
            })
            ->leftJoin(Targa::getTableName(), Targa::getTableName() . '.id_veicolo', '=', Veicolo::getTableName() . '.id')
            ->select([
                Marca::getTableName() . '.id as id_marca',
                Marca::getTableName() . '.nome as marca',
                Modello::getTableName() . '.id as id_modello',
                Modello::getTableName() . '.nome as modello',
                Veicolo::getTableName() . '.id as id_veicolo'
            ]);

        if ($search !== null) {
            $query->where(function ($query) use ($search) {
                $query->where('targa.targa', 'LIKE', '%' . $search . '%')
                    ->orWhere('marca.nome', 'LIKE', '%' . $search . '%')
                    ->orWhere('modello.nome', 'LIKE', '%' . $search . '%');
            });
        }

        //$query->offset(($page - 1) * AlertBase::$itemsPerPage)->limit(AlertBase::$itemsPerPage);

        if ($orderBy!=='livello') {
            $result = $query->orderBy($orderBy, $orderDirection)->get();
        } else {
            $result = $query->orderBy(Veicolo::getTableName() . '.id', 'ASC')->get();
        }

        foreach($result as $key => $vehicle) {
            $vehicle->livello = null;
            $vehicle->next = null;
            $vehicle->id = null;

            if(@isset($valid[$vehicle->id_veicolo])) {
                $vehicle->valid = $valid[$vehicle->id_veicolo];
                foreach ($vehicle->valid as $contract) {






                    //	$livello = Carbon::parse($contract->current_valid_fine_validita)->diffInDays(Carbon::now());
                    $livello = Carbon::parse($contract->current_valid_fine_validita)->addDay()->diffInDays(Carbon::now()) + 1;





                    if($livello>$vehicle->livello) {
                        $vehicle->livello = $livello;
                        $vehicle->inizio_validita = $contract->current_valid_inizio_validita;
                        $vehicle->fine_validita = $contract->current_valid_fine_validita;
                        $vehicle->id = $contract->current_valid_id;
                    }
                }
            } else {
                $vehicle->valid = false;
            }

            if(@isset($startingNext[$vehicle->id_veicolo])) {
                $vehicle->startingNext = $startingNext[$vehicle->id_veicolo];
                foreach ($vehicle->startingNext as $contract) {
                    $next = Carbon::parse($contract->next_inizio_validita)->diffInDays(Carbon::now());
                    if($next<$vehicle->next) {
                        $vehicle->next = $next;
                        $vehicle->inizio_validita = $contract->next_inizio_validita;
                        $vehicle->fine_validita = $contract->next_fine_validita;
                        $vehicle->id = $contract->next_id;
                    }
                }
            } else {
                $vehicle->startingNext = false;
            }

            if(@isset($expired[$vehicle->id_veicolo])) {
                $vehicle->expired = $expired[$vehicle->id_veicolo];
                if($vehicle->livello===null) {
                    foreach ($vehicle->expired as $contract) {
                        $livello = -(Carbon::now()->diffInDays($contract->expired_fine_validita));
                        if($livello>$vehicle->livello) {
                            $vehicle->livello = $livello;
                            $vehicle->inizio_validita = $contract->expired_inizio_validita;
                            $vehicle->fine_validita = $contract->expired_fine_validita;
                            $vehicle->id = $contract->expired_id;
                        }
                    }
                }
            } else {
                $vehicle->expired = false;
            }

            if($vehicle->livello > Alert::$thirdThreshold) {
                unset($result[$key]);
            }
        }

        if ($orderBy=='livello') {
            if($orderDirection=='DESC') {
                $result=($result->sortByDesc('livello'));
            } else {
                $result=($result->sortBy('livello'));
            }
        }

//		foreach($result as $row) {
//			if($row->id===1456) {
//				var_dump($row);
//				die();
//			}
//		}

        // Manually slice the results for pagination
        $offset = ($page - 1) * AlertBase::$itemsPerPage;
        if($slice) {
            $itemsForCurrentPage = $result->slice($offset, AlertBase::$itemsPerPage);
        } else {
            $itemsForCurrentPage = $result;
        }

        return new LengthAwarePaginator(
            $itemsForCurrentPage,
            $result->count(),
            AlertBase::$itemsPerPage,
            $page,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
    }















    use HasFactory;



    public static function getAllAggregatedAlertsSummary()
    {
        $query = DB::table('dettaglio_veicolo')
            ->leftJoin('revisione', function ($join) {
                $join->on('revisione.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('revisione.inizio_validita', '<=', now())
                    ->where('revisione.fine_validita', '>=', now());
            })
            ->leftJoin('bollo', function ($join) {
                $join->on('bollo.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('bollo.inizio_validita', '<=', now())
                    ->where('bollo.fine_validita', '>=', now());
            })
            ->leftJoin('bombole', function ($join) {
                $join->on('bombole.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('bombole.inizio_validita', '<=', now())
                    ->where('bombole.fine_validita', '>=', now());
            })
            ->leftJoin('atp', function ($join) {
                $join->on('atp.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('atp.inizio_validita', '<=', now())
                    ->where('atp.fine_validita', '>=', now());
            })
            ->leftJoin('noleggio', function ($join) {
                $join->on('noleggio.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('noleggio.inizio_validita', '<=', now())
                    ->where('noleggio.fine_validita', '>=', now());
            })
            ->leftJoin('multa', function ($join) {
                $join->on('multa.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('multa.inizio_validita', '<=', now())
                    ->where('multa.fine_validita', '>=', now());
            })
            ->leftJoin('assicurazione', function ($join) {
                $join->on('assicurazione.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('assicurazione.inizio_validita', '<=', now())
                    ->where('assicurazione.fine_validita', '>=', now());
            })
            ->leftJoin('tachigrafo', function ($join) {
                $join->on('tachigrafo.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('tachigrafo.inizio_validita', '<=', now())
                    ->where('tachigrafo.fine_validita', '>=', now());
            })
            ->leftJoin('tagliando', function ($join) {
                $join->on('tagliando.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('tagliando.inizio_validita', '<=', now())
                    ->where('tagliando.fine_validita', '>=', now());
            })
            ->select([
                DB::raw("DATE_FORMAT(revisione.fine_validita, '%d-%m-%Y') as revisione_fine_validita"),
                DB::raw("DATE_FORMAT(tachigrafo.fine_validita, '%d-%m-%Y') as tachigrafo_fine_validita"),
                DB::raw("DATE_FORMAT(tagliando.fine_validita, '%d-%m-%Y') as tagliando_fine_validita"),
                DB::raw("DATE_FORMAT(bollo.fine_validita, '%d-%m-%Y') as bollo_fine_validita"),
                DB::raw("DATE_FORMAT(bombole.fine_validita, '%d-%m-%Y') as bombole_fine_validita"),
                DB::raw("DATE_FORMAT(atp.fine_validita, '%d-%m-%Y') as atp_fine_validita"),
                DB::raw("DATE_FORMAT(multa.fine_validita, '%d-%m-%Y') as multa_fine_validita"),
                DB::raw("DATE_FORMAT(noleggio.fine_validita, '%d-%m-%Y') as noleggio_fine_validita"),
                DB::raw("DATE_FORMAT(assicurazione.fine_validita, '%d-%m-%Y') as assicurazione_fine_validita"),
                //'revisione.fine_validita as revisione_fine_validita_a',
                //'tachigrafo.fine_validita as tachigrafo_fine_validita_a',
                //'bollo.fine_validita as bollo_fine_validita_a',
                //'bombole.fine_validita as bombole_fine_validita_a',
                //'cronotachigrafo.fine_validita as cronotachigrafo_fine_validita_a',
                'dettaglio_veicolo.*'
            ])
            ->selectRaw("
				CASE
					WHEN revisione.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(revisione.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(revisione.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(revisione.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(revisione.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS revisione_alert_level,
				CASE
					WHEN bollo.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(bollo.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(bollo.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(bollo.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(bollo.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS bollo_alert_level,
				CASE
					WHEN bombole.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(bombole.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(bombole.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(bombole.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(bombole.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS bombole_alert_level,
				CASE
					WHEN atp.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(atp.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(atp.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(atp.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(atp.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS atp_alert_level,
				CASE
					WHEN multa.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(multa.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(multa.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(multa.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(multa.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS multa_alert_level,
				CASE
					WHEN noleggio.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS noleggio_alert_level,
				CASE
					WHEN assicurazione.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS assicurazione_alert_level,
				CASE
					WHEN tachigrafo.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS tachigrafo_alert_level,
				CASE
					WHEN tagliando.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(tagliando.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(tagliando.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(tagliando.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(tagliando.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS tagliando_alert_level", [
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold
            ])
            ->orderBy('dettaglio_veicolo.id', 'ASC');

        $revisione = Revisione::getAggregatedAlertsList(null, 'livello', 1, false);
        $tachigrafo = Tachigrafo::getAggregatedAlertsList(null, 'livello', 1, false);
        $tagliando = Tagliando::getAggregatedAlertsList(null, 'livello', 1, false);
        $bollo = Bollo::getAggregatedAlertsList(null, 'livello', 1, false);
        $bombole = Bombole::getAggregatedAlertsList(null, 'livello', 1, false);
        $atp = Atp::getAggregatedAlertsList(null, 'livello', 1, false);
        $multa = Multa::getAggregatedAlertsList(null, 'livello', 1, false);
        $noleggio = Noleggio::getAggregatedAlertsList(null, 'livello', 1, false);
        $assicurazione = Assicurazione::getAggregatedAlertsList(null, 'livello', 1, false);

        $revisione = Alert::getAlertLevels($revisione);
        $tachigrafo = Alert::getAlertLevels($tachigrafo);
        $tagliando = Alert::getAlertLevels($tagliando);
        $bollo = Alert::getAlertLevels($bollo);
        $bombole = Alert::getAlertLevels($bombole);
        $atp = Alert::getAlertLevels($atp);
        $noleggio = Alert::getAlertLevels($noleggio);
        $multa = Alert::getAlertLevels($multa);
        $assicurazione = Alert::getAlertLevels($assicurazione);

        $count_alerts = array('revisione' => $revisione[0], 'tachigrafo' => $tachigrafo[0], 'tagliando' => $tagliando[0], 'bollo' => $bollo[0], 'bombole' => $bombole[0], 'atp' => $atp[0],
            'multa' => $multa[0], 'noleggio' => $noleggio[0], 'assicurazione' => $assicurazione[0]);
        $color_alerts = array('revisione' => $revisione[1], 'tachigrafo' => $tachigrafo[1], 'tagliando' => $tagliando[1], 'bollo' => $bollo[1], 'bombole' => $bombole[1], 'atp' => $atp[1],
            'multa' => $multa[1], 'noleggio' => $noleggio[1], 'assicurazione' => $assicurazione[1]);

        $returnz = $query->get(
            is_array(['*']) ? ['*'] : func_get_args()
        );

        $returnz = array(0 => $color_alerts, 1 => $count_alerts);
        return $returnz;
    }

    public static function getAlertLevels($list)
    {
        $count = 0;
        $color = 0;


        foreach ($list as $item) {

            if ($item->livello === null) {
                $count++;
                $color = 5;
            } else if ($item->livello <= Alert::$firstThreshold) {
                $count++;
                if ($color < 4) {
                    $color = 4;
                }
            } else if ($item->livello <= Alert::$secondThreshold) {
                $count++;
                if ($color < 3) {
                    $color = 3;
                }
            } else if ($item->livello <= Alert::$thirdThreshold) {
                $count++;
                if ($color < 2) {
                    $color = 2;
                }
            }
        }

        return (array(0 => $color, 1 => $count));
    }


    public static function getAllAggregatedAlertsOLD($columns = ['*'])
    {
        $query = DB::table('dettaglio_veicolo')
            ->leftJoin('revisione', function ($join) {
                $join->on('revisione.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('revisione.inizio_validita', '<=', now())
                    ->where('revisione.fine_validita', '>=', now());
            })
            ->leftJoin('bollo', function ($join) {
                $join->on('bollo.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('bollo.inizio_validita', '<=', now())
                    ->where('bollo.fine_validita', '>=', now());
            })
            ->leftJoin('bombole', function ($join) {
                $join->on('bombole.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('bombole.inizio_validita', '<=', now())
                    ->where('bombole.fine_validita', '>=', now());
            })
            ->leftJoin('atp', function ($join) {
                $join->on('atp.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('atp.inizio_validita', '<=', now())
                    ->where('atp.fine_validita', '>=', now());
            })
            ->leftJoin('noleggio', function ($join) {
                $join->on('noleggio.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('noleggio.inizio_validita', '<=', now())
                    ->where('noleggio.fine_validita', '>=', now());
            })
            ->leftJoin('assicurazione', function ($join) {
                $join->on('assicurazione.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('assicurazione.inizio_validita', '<=', now())
                    ->where('assicurazione.fine_validita', '>=', now());
            })
            ->leftJoin('tachigrafo', function ($join) {
                $join->on('tachigrafo.id_veicolo', '=', 'dettaglio_veicolo.id')
                    ->where('tachigrafo.inizio_validita', '<=', now())
                    ->where('tachigrafo.fine_validita', '>=', now());
            })
            ->select([
                DB::raw("DATE_FORMAT(revisione.fine_validita, '%d-%m-%Y') as revisione_fine_validita"),
                DB::raw("DATE_FORMAT(tachigrafo.fine_validita, '%d-%m-%Y') as tachigrafo_fine_validita"),
                DB::raw("DATE_FORMAT(bollo.fine_validita, '%d-%m-%Y') as bollo_fine_validita"),
                DB::raw("DATE_FORMAT(bombole.fine_validita, '%d-%m-%Y') as bombole_fine_validita"),
                DB::raw("DATE_FORMAT(atp.fine_validita, '%d-%m-%Y') as atp_fine_validita"),
                DB::raw("DATE_FORMAT(noleggio.fine_validita, '%d-%m-%Y') as noleggio_fine_validita"),
                DB::raw("DATE_FORMAT(assicurazione.fine_validita, '%d-%m-%Y') as assicurazione_fine_validita"),
                //'revisione.fine_validita as revisione_fine_validita_a',
                //'tachigrafo.fine_validita as tachigrafo_fine_validita_a',
                //'bollo.fine_validita as bollo_fine_validita_a',
                //'bombole.fine_validita as bombole_fine_validita_a',
                //'cronotachigrafo.fine_validita as cronotachigrafo_fine_validita_a',
                'dettaglio_veicolo.*'
            ])
            ->selectRaw("
				CASE
					WHEN revisione.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(revisione.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(revisione.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(revisione.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(revisione.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS revisione_alert_level,
				CASE
					WHEN bollo.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(bollo.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(bollo.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(bollo.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(bollo.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS bollo_alert_level,
				CASE
					WHEN bombole.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(bombole.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(bombole.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(bombole.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(bombole.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS bombole_alert_level,
				CASE
					WHEN atp.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(atp.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(atp.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(atp.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(atp.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS atp_alert_level,
				CASE
					WHEN noleggio.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(noleggio.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS noleggio_alert_level,
				CASE
					WHEN assicurazione.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(assicurazione.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS assicurazione_alert_level,
				CASE
					WHEN tachigrafo.fine_validita IS NULL THEN 4
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
					WHEN DATEDIFF(tachigrafo.fine_validita, NOW()) >= ? THEN 0
					ELSE 4
				END AS tachigrafo_alert_level", [
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold,
                Alert::$firstThreshold, Alert::$firstThreshold + 1, Alert::$secondThreshold, Alert::$secondThreshold + 1, Alert::$thirdThreshold, Alert::$thirdThreshold
            ])
            ->orderBy('dettaglio_veicolo.id', 'ASC');

        return $query->get(
            is_array($columns) ? $columns : func_get_args()
        );
    }


    public static function getAllAlerts()
    {
        self::getAssicurazioneAlerts();
        self::getAtpAlerts();
        self::getBolloAlerts();
        self::getBomboleAlerts();
        self::getDecorazioneAlerts();
        self::getMulteAlerts();
        self::getRevisioneAlerts();
        self::getTachigrafoAlerts();
        self::getTagliandoAlerts();
    }

    private static function getAssicurazioneAlerts()
    {
        return self::getAlerts(Assicurazione::class);
    }

    private static function getAtpAlerts()
    {
        return self::getAlerts(Atp::class);
    }

    private static function getBolloAlerts()
    {
        return self::getAlerts(Bollo::class);
    }

    private static function getBomboleAlerts()
    {
        return self::getAlerts(Bombole::class);
    }

    private static function getDecorazioneAlerts()
    {
        return self::getAlerts(Decorazione::class);
    }

    private static function getMulteAlerts()
    {
        return self::getAlerts(Multe::class);
        /*
         *
         *
         *
         *
         */
    }

    private static function getRevisioneAlerts()
    {
        return self::getAlerts(Revisione::class);
    }

    private static function getTachigrafoAlerts()
    {
        return self::getAlerts(Tachigrafo::class);
    }

    private static function getTagliandoAlerts()
    {
        return self::getAlerts(Tagliando::class);
    }


    public static function getAlerts(Model $Model)
    {
        $modelName = $Model->getTable();
        $veicoloTableName = Veicolo::class->getTable();

        return Veicolo::with([$modelName])
            ->select($veicoloTableName . '.*',
                $modelName . '.fine_validita as ' . $modelName . '_fine_validita',
                DB::raw('
            CASE
							WHEN ' . $modelName . '.fine_validita IS NULL THEN 4
							WHEN DATEDIFF(' . $modelName . '.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
							WHEN DATEDIFF(' . $modelName . '.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
							WHEN DATEDIFF(' . $modelName . '.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
							WHEN DATEDIFF(' . $modelName . '.fine_validita, NOW()) >= ? THEN 0
							ELSE 4
            END AS ' . $modelName . '_alert_level
        ')
            )
            ->leftJoin($modelName, $modelName . '.id_veicolo', '=', $veicoloTableName, '.id')
            ->get();
    }
}
