<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use App\Models\Assicurazione;
use App\Models\Atp;
use App\Models\Bollo;
use App\Models\Bombole;
use App\Models\Decorazione;
use App\Models\Multe;
use App\Models\Revisione;
use App\Models\Tachigrafo;
use App\Models\Tagliando;

class Alert extends AlertBase
{
	use HasFactory;

	//Parameterized values for alert levels
	public static int $firstThreshold = 7;
	public static int $secondThreshold = 15;
	public static int $thirdThreshold = 30;


	public static function getAllAggregatedAlertsSummary() {
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

		$revisione=Revisione::getAggregatedAlertsList(null,'livello',1,false);
		$tachigrafo=Tachigrafo::getAggregatedAlertsList(null,'livello',1,false);
		$tagliando=Tagliando::getAggregatedAlertsList(null,'livello',1,false);
		$bollo=Bollo::getAggregatedAlertsList(null,'livello',1,false);
		$bombole=Bombole::getAggregatedAlertsList(null,'livello',1,false);
		$atp=Atp::getAggregatedAlertsList(null,'livello',1,false);
		$multa=Multa::getAggregatedAlertsList(null,'livello',1,false);
		$noleggio=Noleggio::getAggregatedAlertsList(null,'livello',1,false);
		$assicurazione=Assicurazione::getAggregatedAlertsList(null,'livello',1,false);

		$revisione=Alert::getAlertLevels($revisione);
		$tachigrafo=Alert::getAlertLevels($tachigrafo);
		$tagliando=Alert::getAlertLevels($tagliando);
		$bollo=Alert::getAlertLevels($bollo);
		$bombole=Alert::getAlertLevels($bombole);
		$atp=Alert::getAlertLevels($atp);
		$noleggio=Alert::getAlertLevels($noleggio);
		$multa=Alert::getAlertLevels($multa);
		$assicurazione=Alert::getAlertLevels($assicurazione);

		$count_alerts = array('revisione' => $revisione[0], 'tachigrafo' => $tachigrafo[0], 'tagliando' => $tagliando[0], 'bollo' => $bollo[0], 'bombole' => $bombole[0], 'atp' => $atp[0],
			'multa' => $multa[0], 'noleggio' => $noleggio[0], 'assicurazione' => $assicurazione[0]);
		$color_alerts = array('revisione' => $revisione[1], 'tachigrafo' => $tachigrafo[1], 'tagliando' => $tagliando[1], 'bollo' => $bollo[1], 'bombole' => $bombole[1], 'atp' => $atp[1],
			'multa' => $multa[1], 'noleggio' => $noleggio[1], 'assicurazione' => $assicurazione[1]);

		$returnz=$query->get(
			is_array(['*']) ? ['*'] : func_get_args()
		);

		$returnz=array(0=>$color_alerts,1=>$count_alerts);
		return $returnz;
	}

	public static function getAlertLevels($list) {
		$count=0;
		$color=0;


		foreach($list as $item) {

			if($item->livello === null) {
				$count++;
				$color = 5;
			}
			else if($item->livello <= Alert::$firstThreshold) {
				$count++;
				if($color < 4) {
					$color = 4;
				}
			}
			else if($item->livello <= Alert::$secondThreshold) {
				$count++;
				if($color < 3) {
					$color = 3;
				}
			}
			else if($item->livello <= Alert::$thirdThreshold) {
				$count++;
				if($color < 2) {
					$color = 2;
				}
			}
		}

		return(array(0=>$color,1=>$count));
	}
















































	public static function getAllAggregatedAlertsOLD($columns = ['*']) {
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


	public static function getAllAlerts() {
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

	private static function getAssicurazioneAlerts() {
		return self::getAlerts(Assicurazione::class);
	}

	private static function getAtpAlerts() {
		return self::getAlerts(Atp::class);
	}

	private static function getBolloAlerts() {
		return self::getAlerts(Bollo::class);
	}

	private static function getBomboleAlerts() {
		return self::getAlerts(Bombole::class);
	}

	private static function getDecorazioneAlerts() {
		return self::getAlerts(Decorazione::class);
	}

	private static function getMulteAlerts() {
		return self::getAlerts(Multe::class);
		/*
		 *
		 *
		 *
		 *
		 */
	}

	private static function getRevisioneAlerts() {
		return self::getAlerts(Revisione::class);
	}

	private static function getTachigrafoAlerts() {
		return self::getAlerts(Tachigrafo::class);
	}
	private static function getTagliandoAlerts() {
		return self::getAlerts(Tagliando::class);
	}


	public static function getAlerts(Model $Model) {
		$modelName = $Model->getTable();
		$veicoloTableName=Veicolo::class->getTable();

		return Veicolo::with([$modelName])
			->select($veicoloTableName.'.*',
				$modelName.'.fine_validita as '.$modelName.'_fine_validita',
				DB::raw('
            CASE
							WHEN '.$modelName.'.fine_validita IS NULL THEN 4
							WHEN DATEDIFF('.$modelName.'.fine_validita, NOW()) BETWEEN 0 AND ? THEN 3
							WHEN DATEDIFF('.$modelName.'.fine_validita, NOW()) BETWEEN ? AND ? THEN 2
							WHEN DATEDIFF('.$modelName.'.fine_validita, NOW()) BETWEEN ? AND ? THEN 1
							WHEN DATEDIFF('.$modelName.'.fine_validita, NOW()) >= ? THEN 0
							ELSE 4
            END AS '.$modelName.'_alert_level
        ')
			)
			->leftJoin($modelName, $modelName.'.id_veicolo', '=', $veicoloTableName,'.id')
			->get();
	}
}
