<?php

	use App\Http\Controllers\AlertController;
	use App\Http\Controllers\AssegnamentoGpsController;
	use App\Http\Controllers\DecorazioneController;
	use App\Http\Controllers\DettaglioVeicoloController;
	use App\Http\Controllers\GpsController;
	use App\Http\Controllers\ImportVeicoloController;
	use App\Http\Controllers\MultaController;
	use App\Http\Controllers\NoleggioController;
	use App\Http\Controllers\TachigrafoController;
	use Illuminate\Support\Facades\Route;

	use App\Http\Controllers\AtpController;
	use App\Http\Controllers\BomboleController;
	use App\Http\Controllers\UserController;
	use App\Http\Controllers\VeicoloController;
	use App\Http\Controllers\LeasingController;
	use App\Http\Controllers\AssicurazioneController;
	use App\Http\Controllers\BolloController;
	use App\Http\Controllers\RevisioneController;
	use App\Http\Controllers\TagliandoController;
	use App\Http\Controllers\SocietaController;
	use App\Http\Controllers\ModelloController;
	use Illuminate\Support\Facades\Redis;


	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider and all of them will
	| be assigned to the "web" middleware group. Make something great!
	|
	*/


	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/dashboard', function () {
		return view('dashboard');
	})->middleware(['auth', 'verified'])->name('dashboard');

	Route::middleware('auth')->group(function () {
		//Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
		//Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
		//Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

		//Dashboard Test
		Route::get('dashtest', [AlertController::class, 'dashtest'])->name('dashtest');

		//
		//


		//alert revisione meccanica
		Route::get('alert_revisione_meccanica', [RevisioneController::class, 'listExpiringRevisioniMeccaniche']);
		//alert revisione bombole
		Route::get('alert_revisione_bombole', [BomboleController::class, 'listExpiringRevisioniBombole']);
		//alert revisione atp
		Route::get('alert_revisione_atp', [AtpController::class, 'listExpiringRevisioniAtp']);
		//alert revisione tachigrafo
		Route::get('alert_revisione_tachigrafo', [TachigrafoController::class, 'listExpiringRevisioniTachigrafi']);
		//alert contratto noleggio
		Route::get('alert_contratto_noleggio', [NoleggioController::class, 'listExpiringContrattiNoleggio']);
		//alert polizza assicurativa
		Route::get('alert_polizza_assicurativa', [AssicurazioneController::class, 'listExpiringPolizzeAssicurative']);
		Route::get('alert_polizza_assicurativa', [AssicurazioneController::class, 'listExpiringPolizzeAssicurativeNEW'])->defaults('level', '3')->name('alert_polizza_assicurativa_danger');
		//alert scadenza bollo
		Route::get('alert_scadenza_bollo', [BolloController::class, 'listExpiringScadenzeBolli']);


		/************************************  IMPORT EXCEL  ************************************/

//		Route::get('import_veicolo', [ImportVeicoloController::class, 'import_veicolo'])->name('import_veicolo');
//		Route::post('import_veicolo', [ImportVeicoloController::class, 'store_veicolo'])->name('store_veicolo');
//
//		Route::get('import_scadenze', [ImportScadenzeController::class, 'import_scadenze'])->name('import_scadenze');
//		Route::post('import_scadenze', [ImportScadenzeController::class, 'store_scadenze'])->name('store_scadenze');

		// Routes for ImportVeicolo
		Route::get('import_veicolo', [ImportVeicoloController::class, 'create'])->name('import_veicolo.create');
		Route::post('import_veicolo', [ImportVeicoloController::class, 'store'])->name('import_veicolo.store');

		// Routes for ImportScadenze
		//Route::get('import_scadenze', [ImportScadenzeController::class, 'create'])->name('import_scadenze.create');
		//Route::post('import_scadenze', [ImportScadenzeController::class, 'store'])->name('import_scadenze.store');



		/**************************************  VEICOLO  **************************************/

		// Display the form for creating a new veicolo
		Route::get('create_veicolo', [DettaglioVeicoloController::class, 'create'])->name('create_veicolo');
		// Display a list of veicoli
		//Route::get('list_veicolo', [DettaglioVeicoloController::class, 'list_veicolo'])->name('list_veicolo');
		Route::get('list_veicolo', [DettaglioVeicoloController::class, 'index'])->name('list_veicolo');

//		// Show the form for editing a veicolo
//		Route::get('update_veicolo/{id}', [DettaglioVeicoloController::class, 'edit'])->name('update_veicolo');
//
//		// Update the specified veicolo
//		Route::put('update_veicolo/{id}', [DettaglioVeicoloController::class, 'update_veicolo']);

		// Show the form for editing a veicolo
		Route::get('update_veicolo/{id}', [DettaglioVeicoloController::class, 'edit'])->name('update_veicolo');

		// Update the specified veicolo
		Route::put('update_veicolo/{id}', [DettaglioVeicoloController::class, 'update'])->name('update_veicolo');


		// Delete the specified veicolo
		Route::delete('delete_veicolo/{id}', [DettaglioVeicoloController::class, 'destroy'])->name('delete_veicolo');

		// Store a newly created veicolo
		Route::post('store_veicolo', [DettaglioVeicoloController::class, 'store'])->name('store_veicolo');

		// Search by general criteria
		Route::get('veicolo/search/{search}', [DettaglioVeicoloController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('veicolo/id/{search}', [DettaglioVeicoloController::class, 'search'])->defaults('searchField', 'id');

		// Search by id_veicolo
		Route::get('veicolo/targa/{search}', [DettaglioVeicoloController::class, 'search'])->defaults('searchField', 'targa');

		// Fallback for accessing store_veicolo via GET
		Route::get('store_veicolo', function () {
			return redirect()->route('create_veicolo');
		});

		/**************************************  DECORAZIONE  ************************************** /

		// Display the form for creating a new decorazione
		Route::get('create_decorazione', [DecorazioneController::class, 'create'])->name('create_decorazione');

		// Display a list of decorazione
		Route::get('list_decorazione', [DecorazioneController::class, 'index'])->name('list_decorazione');

		// Show the form for editing a decorazione
		Route::get('update_decorazione/{id}', [DecorazioneController::class, 'edit'])->name('update_decorazione');

		// Update the specified decorazione
		Route::put('update_decorazione/{id}', [DecorazioneController::class, 'update_decorazione']);

		// Delete the specified decorazione
		Route::delete('delete_decorazione/{id}', [DecorazioneController::class, 'destroy'])->name('delete_decorazione');

		// Store a newly created decorazione
		Route::post('store_decorazione', [DecorazioneController::class, 'store'])->name('store_decorazione');

		// Fallback for accessing store_decorazione via GET
		Route::get('store_decorazione', function () {
			return redirect()->route('create_decorazione');
		});

		/**************************************  ASSICURAZIONE  **************************************/

		// Display the form for creating a new assicurazione
		Route::get('create_assicurazione', [AssicurazioneController::class, 'create'])->name('create_assicurazione');

		Route::get('create_assicurazione/{id_veicolo}', [AssicurazioneController::class, 'create'])->name('create_assicurazione_with_id');

		// Display a list of assicurazione
		Route::get('list_assicurazione', [AssicurazioneController::class, 'index'])->name('list_assicurazione');

		// Show the form for editing a assicurazione
		Route::get('update_assicurazione/{id}', [AssicurazioneController::class, 'edit'])->name('update_assicurazione');

		// Update the specified assicurazione
		Route::put('update_assicurazione/{id}', [AssicurazioneController::class, 'update_assicurazione']);

		// Delete the specified assicurazione
		Route::delete('delete_assicurazione/{id}', [AssicurazioneController::class, 'destroy'])->name('delete_assicurazione');

		// Store a newly created assicurazione
		Route::post('store_assicurazione', [AssicurazioneController::class, 'store'])->name('store_assicurazione');

		// Search by general criteria
		Route::get('assicurazione/search/{search}', [AssicurazioneController::class, 'search'])->defaults('searchField', false);

		// Search by id assicurazione
		Route::get('assicurazione/id/{search}', [AssicurazioneController::class, 'search'])->defaults('searchField', 'id');

		// Search by id veicolo
		Route::get('assicurazione/id_veicolo/{search}', [AssicurazioneController::class, 'search'])->defaults('searchField', 'id_veicolo');

		// Fallback for accessing store_assicurazione via GET
		Route::get('store_assicurazione', function () {
			return redirect()->route('create_assicurazione');
		});
		/**************************************  ATP  **************************************/

		// Display the form for creating a new atp
		Route::get('create_atp', [AtpController::class, 'create'])->name('create_atp');

		Route::get('create_atp/{id_veicolo}', [AtpController::class, 'create'])->name('create_atp_with_id');

		// Display a list of atp
		Route::get('list_atp', [AtpController::class, 'index'])->name('list_atp');

		// Show the form for editing a atp
		Route::get('update_atp/{id}', [AtpController::class, 'edit'])->name('update_atp');

		// Update the specified atp
		Route::put('update_atp/{id}', [AtpController::class, 'update_atp']);

		// Delete the specified atp
		Route::delete('delete_atp/{id}', [AtpController::class, 'destroy'])->name('delete_atp');

		// Store a newly created atp
		Route::post('store_atp', [AtpController::class, 'store'])->name('store_atp');

		// Search by general criteria
		Route::get('atp/search/{search}', [AtpController::class, 'search'])->defaults('searchField', false);

		// Search by id atp
		Route::get('atp/id/{search}', [AtpController::class, 'search'])->defaults('searchField', 'id');

		// Search by id veicolo
		Route::get('atp/id_veicolo/{search}', [AtpController::class, 'search'])->defaults('searchField', 'id_veicolo');

		// Fallback for accessing store_atp via GET
		Route::get('store_atp', function () {
			return redirect()->route('create_atp');
		});

		/**************************************  BOLLO  **************************************/

		// Display the form for creating a new assicurazione
		Route::get('create_bollo', [BolloController::class, 'create'])->name('create_bollo');

		Route::get('create_bollo/{id_veicolo}', [BolloController::class, 'create'])->name('create_bollo_with_id');

		// Display a list of assicurazione
		Route::get('list_bollo', [BolloController::class, 'index'])->name('list_bollo');

		// Show the form for editing a assicurazione
		Route::get('update_bollo/{id}', [BolloController::class, 'edit'])->name('update_bollo');

		// Update the specified assicurazione
		Route::put('update_bollo/{id}', [BolloController::class, 'update_bollo']);

		// Delete the specified assicurazione
		Route::delete('delete_bollo/{id}', [BolloController::class, 'destroy'])->name('delete_bollo');

		// Store a newly created assicurazione
		Route::post('store_bollo', [BolloController::class, 'store'])->name('store_bollo');

		// Search by general criteria
		Route::get('bollo/search/{search}', [BolloController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('bollo/id/{search}', [BolloController::class, 'search'])->defaults('searchField', true);

		// Fallback for accessing store_bollo via GET
		Route::get('store_bollo', function () {
			return redirect()->route('create_bollo');
		});

		/**************************************  BOMBOLE  **************************************/

		// Display the form for creating a new bombole
		Route::get('create_bombole', [BomboleController::class, 'create'])->name('create_bombole');

		Route::get('create_bombole/{id_veicolo}', [BomboleController::class, 'create'])->name('create_bombole_with_id');

		// Display a list of bombole
		Route::get('list_bombole', [BomboleController::class, 'index'])->name('list_bombole');

		// Show the form for editing a bombole
		Route::get('update_bombole/{id}', [BomboleController::class, 'edit'])->name('update_bombole');

		// Update the specified bombole
		Route::put('update_bombole/{id}', [BomboleController::class, 'update_bombole']);

		// Delete the specified bombole
		Route::delete('delete_bombole/{id}', [BomboleController::class, 'destroy'])->name('delete_bombole');

		// Store a newly created bombole
		Route::post('store_bombole', [BomboleController::class, 'store'])->name('store_bombole');

		// Search by general criteria
		Route::get('bombole/search/{search}', [BomboleController::class, 'search'])->defaults('searchField', false);

		// Search by id bombole
		Route::get('bombole/id/{search}', [BomboleController::class, 'search'])->defaults('searchField', 'id');

		// Search by id veicolo
		Route::get('bombole/id_veicolo/{search}', [BomboleController::class, 'search'])->defaults('searchField', 'id_veicolo');

		// Fallback for accessing store_bombole via GET
		Route::get('store_bombole', function () {
			return redirect()->route('create_bombole');
		});

		/**************************************  TAGLIANDO  **************************************/

		// Display the form for creating a new tagliando
		Route::get('create_tagliando', [TagliandoController::class, 'create'])->name('create_tagliando');

		Route::get('create_tagliando/{id_veicolo}', [TagliandoController::class, 'create'])->name('create_tagliando_with_id');

		// Display a list of tagliando
		Route::get('list_tagliando', [TagliandoController::class, 'index'])->name('list_tagliando');

		// Show the form for editing a tagliando
		Route::get('update_tagliando/{id}', [TagliandoController::class, 'edit'])->name('update_tagliando');

		// Update the specified tagliando
		Route::put('update_tagliando/{id}', [TagliandoController::class, 'update_tagliando']);

		// Delete the specified tagliando
		Route::delete('delete_tagliando/{id}', [TagliandoController::class, 'destroy'])->name('delete_tagliando');

		// Store a newly created tagliando
		Route::post('store_tagliando', [TagliandoController::class, 'store'])->name('store_tagliando');

		// Search by general criteria
		Route::get('tagliando/search/{search}', [TagliandoController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('tagliando/id/{search}', [TagliandoController::class, 'search'])->defaults('searchField', true);

		// Fallback for accessing store_tagliando via GET
		Route::get('store_tagliando', function () {
			return redirect()->route('create_tagliando');
		});

		/**************************************  TACHIGRAFO  **************************************/

		// Display the form for creating a new assicurazione
		Route::get('create_tachigrafo', [TachigrafoController::class, 'create'])->name('create_tachigrafo');

		Route::get('create_tachigrafo/{id_veicolo}', [TachigrafoController::class, 'create'])->name('create_tachigrafo_with_id');

		// Display a list of assicurazione
		Route::get('list_tachigrafo', [TachigrafoController::class, 'index'])->name('list_tachigrafo');

		// Show the form for editing a assicurazione
		Route::get('update_tachigrafo/{id}', [TachigrafoController::class, 'edit'])->name('update_tachigrafo');

		// Update the specified assicurazione
		Route::put('update_tachigrafo/{id}', [TachigrafoController::class, 'update_tachigrafo']);

		// Delete the specified assicurazione
		Route::delete('delete_tachigrafo/{id}', [TachigrafoController::class, 'destroy'])->name('delete_tachigrafo');

		// Store a newly created assicurazione
		Route::post('store_tachigrafo', [TachigrafoController::class, 'store'])->name('store_tachigrafo');

		// Search by general criteria
		Route::get('tachigrafo/search/{search}', [TachigrafoController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('tachigrafo/id/{search}', [TachigrafoController::class, 'search'])->defaults('searchField', true);

		// Fallback for accessing store_tachigrafo via GET
		Route::get('store_tachigrafo', function () {
			return redirect()->route('create_tachigrafo');
		});

		/**************************************  GPS  **************************************/

		// Display the form for creating a new assicurazione
		Route::get('create_gps', [GpsController::class, 'create'])->name('create_gps');

		Route::get('create_gps/{id_veicolo}', [GpsController::class, 'create'])->name('create_gps_with_id');

		// Display a list of assicurazione
		Route::get('list_gps', [GpsController::class, 'index'])->name('list_gps');

		// Show the form for editing a assicurazione
		Route::get('update_gps/{id}', [GpsController::class, 'edit'])->name('update_gps');

		// Update the specified assicurazione
		Route::put('update_gps/{id}', [GpsController::class, 'update_gps']);

		// Delete the specified assicurazione
		Route::delete('delete_gps/{id}', [GpsController::class, 'destroy'])->name('delete_gps');

		// Store a newly created assicurazione
		Route::post('store_gps', [GpsController::class, 'store'])->name('store_gps');

		// Search by general criteria
		Route::get('gps/search/{search}', [GpsController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('gps/id/{search}', [GpsController::class, 'search'])->defaults('searchField', true);

		// Fallback for accessing store_gps via GET
		Route::get('store_gps', function () {
			return redirect()->route('create_gps');
		});

		/**************************************  ASSEGNAMENTO_GPS  **************************************/

//		// Display the form for creating a new assicurazione
//		Route::get('create_assegnamento_gps', [AssegnamentoGpsController::class, 'create'])->name('create_assegnamento_gps');
//
//		Route::get('create_assegnamento_gps/{id_veicolo}', [AssegnamentoGpsController::class, 'create'])->name('create_assegnamento_gps_with_id');
//
//		// Display a list of assicurazione
//		Route::get('list_assegnamento_gps', [AssegnamentoGpsController::class, 'index'])->name('list_assegnamento_gps');
//
//		// Show the form for editing a assicurazione
//		Route::get('update_assegnamento_gps/{id}', [AssegnamentoGpsController::class, 'edit'])->name('update_assegnamento_gps');
//
//		// Update the specified assicurazione
//		Route::put('update_assegnamento_gps/{id}', [AssegnamentoGpsController::class, 'update_assegnamento_gps']);
//
//		// Delete the specified assicurazione
//		Route::delete('delete_assegnamento_gps/{id}', [AssegnamentoGpsController::class, 'destroy'])->name('delete_assegnamento_gps');
//
//		// Store a newly created assicurazione
//		Route::post('store_assegnamento_gps', [AssegnamentoGpsController::class, 'store'])->name('store_assegnamento_gps');
//
		// Search by general criteria
		Route::get('assegnamento_gps/search/{search}', [AssegnamentoGpsController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('assegnamento_gps/id/{search}', [AssegnamentoGpsController::class, 'search'])->defaults('searchField', 'id');

		// Search by id_veicolo
		Route::get('assegnamento_gps/id_veicolo/{search}', [AssegnamentoGpsController::class, 'search'])->defaults('searchField', 'id_veicolo');

		// Search by id_veicolo
		Route::get('assegnamento_gps/targa/{search}', [AssegnamentoGpsController::class, 'search'])->defaults('searchField', 'targa');

//
//		// Fallback for accessing store_assegnamento_gps via GET
//		Route::get('store_assegnamento_gps', function () {
//			return redirect()->route('create_assegnamento_gps');
//		});

		/**************************************  MULTA  **************************************/

		// Display the form for creating a new assicurazione
		Route::get('create_multa', [MultaController::class, 'create'])->name('create_multa');

		Route::get('create_multa/{id_veicolo}', [MultaController::class, 'create'])->name('create_multa_with_id');

		// Display a list of assicurazione
		Route::get('list_multa', [MultaController::class, 'index'])->name('list_multa');

		// Show the form for editing a assicurazione
		Route::get('update_multa/{id}', [MultaController::class, 'edit'])->name('update_multa');

		// Update the specified assicurazione
		Route::put('update_multa/{id}', [MultaController::class, 'update_multa']);

		// Delete the specified assicurazione
		Route::delete('delete_multa/{id}', [MultaController::class, 'destroy'])->name('delete_multa');

		// Store a newly created assicurazione
		Route::post('store_multa', [MultaController::class, 'store'])->name('store_multa');

		// Search by general criteria
		Route::get('multa/search/{search}', [MultaController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('multa/id/{search}', [MultaController::class, 'search'])->defaults('searchField', true);

		// Fallback for accessing store_multa via GET
		Route::get('store_multa', function () {
			return redirect()->route('create_multa');
		});

		/**************************************  REVISIONE  **************************************/

		// Display the form for creating a new assicurazione
		Route::get('create_revisione', [RevisioneController::class, 'create'])->name('create_revisione');

		Route::get('create_revisione/{id_veicolo}', [RevisioneController::class, 'create'])->name('create_revisione_with_id');

		// Display a list of assicurazione
		Route::get('list_revisione', [RevisioneController::class, 'index'])->name('list_revisione');

		// Show the form for editing a assicurazione
		Route::get('update_revisione/{id}', [RevisioneController::class, 'edit'])->name('update_revisione');

		// Update the specified assicurazione
		Route::put('update_revisione/{id}', [RevisioneController::class, 'update_revisione']);

		// Delete the specified assicurazione
		Route::delete('delete_revisione/{id}', [RevisioneController::class, 'destroy'])->name('delete_revisione');

		// Store a newly created assicurazione
		Route::post('store_revisione', [RevisioneController::class, 'store'])->name('store_revisione');

		// Search by general criteria
		Route::get('revisione/search/{search}', [RevisioneController::class, 'search'])->defaults('searchField', false);

		// Search by ID
		Route::get('revisione/id/{search}', [RevisioneController::class, 'search'])->defaults('searchField', true);


		// Fallback for accessing store_revisione via GET
		Route::get('store_revisione', function () {
			return redirect()->route('create_revisione');
		});

		/**************************************  STAZIONAMENTO  ************************************** /

		// Display the form for creating a new decorazione
		Route::get('create_stazionamento', [StazionamentoController::class, 'create'])->name('create_stazionamento');

		// Display a list of decorazioni
		Route::get('list_stazionamento', [StazionamentoController::class, 'index'])->name('list_stazionamento');

		// Show the form for editing a decorazione
		Route::get('update_stazionamento/{id}', [StazionamentoController::class, 'edit'])->name('update_stazionamento');

		// Update the specified decorazione
		Route::put('update_stazionamento/{id}', [StazionamentoController::class, 'update_stazionamento']);

		// Delete the specified decorazione
		Route::delete('delete_stazionamento/{id}', [StazionamentoController::class, 'destroy'])->name('delete_stazionamento');

		// Store a newly created decorazione
		Route::post('store_stazionamento', [StazionamentoController::class, 'store'])->name('store_stazionamento');

		// Fallback for accessing store_stazionamento via GET
		Route::get('store_stazionamento', function () {
			return redirect()->route('create_stazionamento');
		});

		/**************************************  STAZIONAMENTO  **************************************/






		/**************************************  ATP  **************************************/

//		// Search by general criteria
//		Route::get('atp/search/{search}', [AtpController::class, 'search'])->defaults('searchField', false);
//
//		// Search by ID
//		Route::get('atp/id/{search}', [AtpController::class, 'search'])->defaults('searchField', 'id');
//
//		// Search by id_veicolo
//		Route::get('atp/id_veicolo/{search}', [AtpController::class, 'search'])->defaults('searchField', 'id_veicolo');
//
//		// Search by id_veicolo
//		Route::get('atp/targa/{search}', [AtpController::class, 'search'])->defaults('searchField', 'targa');


















		// General Fallback Route for MethodNotAllowed and NotFound HTTP exceptions
		Route::fallback(function () {
			// Redirect to a specific route or return a custom error view
			return response()->view('dashboard', [], 404); // Ensure you have an errors.404 view
		});



		Route::get('get-modello-by-marca/{id}', [ModelloController::class, 'getModelloByMarca']);

		//route for assign_role to a user with Spatie
		Route::get('assign_role', [UserController::class, 'index']);

	});

	require __DIR__ . '/auth.php';
