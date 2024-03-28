<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Pagination\LengthAwarePaginator;
	use Illuminate\Support\Carbon;
	use Illuminate\Support\Facades\Cache;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Redis;
	use Illuminate\Support\Facades\Validator;

	class AlertBase extends Shared\BaseModel
	{
		use HasFactory;
		protected $table = 'assicurazione'; // Default table
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
		public static function validatePartialUseless(array $data)
		{
			$rules = self::validationRules();

			$applicableRules = [];
			foreach ($data as $key => $value) {
				if (array_key_exists($key, $rules)) {
					$applicableRules[$key] = $rules[$key];
				}
			}

			return Validator::make($data, $applicableRules, self::validationMessages())->validate();
		}
		public static function clearCache($all=false) {

			if($all) {
				Cache::flush();
			} else {
				$table=(new static)->getTable();

				$valid = 'valid_' . $table . '_list';
				$next = 'startingNext_' . $table . '_list';
				$expired = 'expired_' . $table . '_list';

				Cache::forget($valid);
				Cache::forget($next);
				Cache::forget($expired);
				Cache::forget('alerts');
			}
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
	}
