<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return ['Laravel' => app()->version()];
    });

    /*
    * Dynamic route generation for controllers.
    * Mappings are defined in config/table_controller_mappings.php.
    * This approach helps keep our routing organized and scalable as the project grows.
    * The mappings are defined in a config file, which is then loaded in the RouteServiceProvider.
    * The RouteServiceProvider is a good place to define route groups, middleware, and other route-related configurations.
    * The RouteServiceProvider is loaded in the bootstrap/app.php file.
    */

    foreach (config('crud_routes') as $table => $controller) {
        Route::prefix($table)->name($table . '.')->group(function () use ($table, $controller) {
                //// Standard CRUD Routes
                //Route::get('/', [$controller, 'index'])->name('index');//->middleware('permission:read_' . $table);//->middleware('role:admin');
                //Route::get('/create', [$controller, 'create'])->name('create');//->middleware('permission:create_' . $table);//->middleware('role:admin');
                //Route::post('/', [$controller, 'store'])->name('store');//->middleware('permission:create_' . $table);//->middleware('role:admin');
                ////Route::get('/{id}', [$controller, 'show'])->name('show');//->middleware('permission:read_' . $table);//->middleware('role:admin');
                //Route::patch('/{id}', [$controller, 'edit'])->name('edit');//->middleware('permission:update_' . $table);//->middleware('role:admin');
                //Route::put('/{id}', [$controller, 'update'])->name('update');//->middleware('permission:update_' . $table);//->middleware('role:admin');
                //Route::delete('/{id}', [$controller, 'destroy'])->name('destroy');//->middleware('permission:delete_' . $table);//->middleware('role:admin');
                //
                //// SEARCHES
                //Route::get('/search/{search}', [$controller, 'search'])->name('search');//->middleware('permission:search_' . $table);//->middleware('role:admin');
                //Route::get('/{fields}/{exact_search}', [$controller, 'exact_search'])->name('search.exact');//->middleware('permission:search_' . $table);//->middleware('role:admin');
                //
                //// ALERT Routes
                //Route::get('/alert', [$controller, 'alert'])->name('alert.index');//->middleware('permission:alert_' . $table);//->middleware('role:admin');
                //Route::get('/alert/{livello}', [$controller, 'alert'])->name('alert.level');//->middleware('permission:alert_' . $table);//->middleware('role:admin');
                //
                ////FRONTEND Endpoints
                //Route::get('/getAll', [$controller, 'getAll'])->name('getAll');//->middleware('permission:read_' . $table);//->middleware('role:admin');


                //RESTful API Default Routes

                //Lists all records in the table
                Route::get('/', [$controller, 'index'])->name('index');//->middleware('permission:read_' . $table);//->middleware('role:admin');

                //Creates a new record in the table
                Route::post('/', [$controller, 'store'])->name('store');//->middleware('permission:create_' . $table);//->middleware('role:admin');

                //Shows a single record in the table
                Route::get('/{id}', [$controller, 'show'])->name('show')->where('id', '[0-9]+');//->middleware('permission:read_' . $table);//->middleware('role:admin');

                //Updates completely a single record in the table
                Route::put('/{id}', [$controller, 'update'])->name('update')->where('id', '[0-9]+');//->middleware('permission:read_' . $table);//->middleware('role:admin');

                //Partially updates a record in the table
                Route::patch('/{id}', [$controller, 'update'])->name('update')->where('id', '[0-9]+');//->middleware('permission:read_' . $table);//->middleware('role:admin');

                //Deletes a single record in the table
                 Route::delete('/{id}', [$controller, 'destroy'])->name('destroy')->where('id', '[0-9]+');//->middleware('permission:read_' . $table);//->middleware('role:admin');

                //Searches for a record in the table
                Route::get('/search', [$controller, 'search'])->name('search');//->middleware('permission:read_' . $table);//->middleware('role:admin');

                //Lists all records in the table close to the expiration date
                Route::get('/alert', [$controller, 'alert'])->name('alert');//->middleware('permission:read_' . $table);//->middleware('role:admin');




            });
    }

    require __DIR__ . '/auth.php';
    require __DIR__ . '/omniroute.php';

    /*
http://dev.backend.torental.bentraining.it/_ignition/execute-solution
http://dev.backend.torental.bentraining.it/_ignition/health-check
http://dev.backend.torental.bentraining.it/_ignition/update-config
http://dev.backend.torental.bentraining.it/alimentazione_veicolo/getAll
http://dev.backend.torental.bentraining.it/allestimento_veicolo/getAll
http://dev.backend.torental.bentraining.it/api/user
http://dev.backend.torental.bentraining.it/asse_veicolo/getAll
http://dev.backend.torental.bentraining.it/assicurazione/getAll
http://dev.backend.torental.bentraining.it/assicurazione_veicolo/getAll
http://dev.backend.torental.bentraining.it/atp/getAll
http://dev.backend.torental.bentraining.it/bollo/getAll
http://dev.backend.torental.bentraining.it/bombole/getAll
http://dev.backend.torental.bentraining.it/broker_assicurazione/getAll
http://dev.backend.torental.bentraining.it/cambio_veicolo/getAll
http://dev.backend.torental.bentraining.it/casello_pedaggio/getAll
http://dev.backend.torental.bentraining.it/controparte_decorazione/getAll
http://dev.backend.torental.bentraining.it/destinazione_veicolo/getAll
http://dev.backend.torental.bentraining.it/disponibilita_veicolo/getAll
http://dev.backend.torental.bentraining.it/ente_veicolo/getAll
http://dev.backend.torental.bentraining.it/filiale_veicolo/getAll
http://dev.backend.torental.bentraining.it/intervento/getAll
http://dev.backend.torental.bentraining.it/intestatario_veicolo/getAll
http://dev.backend.torental.bentraining.it/manutenzione_veicolo/getAll
http://dev.backend.torental.bentraining.it/marca_veicolo/getAll
http://dev.backend.torental.bentraining.it/modello_veicolo/getAll
http://dev.backend.torental.bentraining.it/multa/getAll
http://dev.backend.torental.bentraining.it/polizza_veicolo/getAll
http://dev.backend.torental.bentraining.it/proprietario_veicolo/getAll
http://dev.backend.torental.bentraining.it/revisione/getAll
http://dev.backend.torental.bentraining.it/sanctum/csrf-cookie
http://dev.backend.torental.bentraining.it/scadenza_assicurazione/getAll
http://dev.backend.torental.bentraining.it/sinistro/getAll
http://dev.backend.torental.bentraining.it/societa_leasing/getAll
http://dev.backend.torental.bentraining.it/societa_veicolo/getAll
http://dev.backend.torental.bentraining.it/stato_assicurazione/getAll
http://dev.backend.torental.bentraining.it/stato_multa/getAll
http://dev.backend.torental.bentraining.it/stato_pedaggio/getAll
http://dev.backend.torental.bentraining.it/stato_sinistro/getAll
http://dev.backend.torental.bentraining.it/stato_veicolo/getAll
http://dev.backend.torental.bentraining.it/tachigrafo/getAll
http://dev.backend.torental.bentraining.it/tagliando/getAll
http://dev.backend.torental.bentraining.it/targa/getAll
http://dev.backend.torental.bentraining.it/telaio/getAll
http://dev.backend.torental.bentraining.it/tipo_cliente/getAll
http://dev.backend.torental.bentraining.it/tipo_societa/getAll
http://dev.backend.torental.bentraining.it/tipo_veicolo/getAll
http://dev.backend.torental.bentraining.it/veicolo/getAll
    */
