<?php

    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;

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

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth', 'verified'])->name('dashboard');
//
//    Route::middleware('auth')->group(function () {
//        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//    });
//
//    Route::middleware('auth:api')->get('/user', function ($request) {
//        return $request->user();
//    });

    require __DIR__ . '/auth.php';
    require __DIR__ . '/api.php';
//    require __DIR__ . '/jwt.php';


//    Route::post('/api/login', [App\Http\Controllers\JwtController::class, 'login']);
//    Route::get('/api/login', [App\Http\Controllers\JwtController::class, 'login']);

//    Route::post('jwt/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('jwt.login');
//    Route::get('jwt/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('jwt.login');
//    Route::post('jwt/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->middleware('auth:api');
//    Route::get('jwt/user', [App\Http\Controllers\UserController::class, 'user'])->middleware('auth:api');

    //Dynamic route generation for controllers.
    //Mappings are defined in config/table_controller_mappings.php.
    //This approach helps keep our routing organized and scalable as the project grows.
    //The mappings are defined in a config file, which is then loaded in the RouteServiceProvider.
    //The RouteServiceProvider is a good place to define route groups, middleware, and other route-related configurations.
    //The RouteServiceProvider is loaded in the bootstrap/app.php file.


    foreach (config('crud_routes') as $table => $controller) {
        //var_dump($table, $controller);
        Route::prefix($table)->name($table . '.')->group(function () use ($table, $controller) {
            // Standard CRUD Routes
            Route::get('/', [$controller, 'index'])->name('index')->middleware('permission:read_' . $table)->middleware('role:admin');
            Route::get('/create', [$controller, 'create'])->name('create')->middleware('permission:create_' . $table)->middleware('role:admin');
            Route::post('/', [$controller, 'store'])->name('store')->middleware('permission:create_' . $table)->middleware('role:admin');
            Route::get('/{id}', [$controller, 'show'])->name('show')->middleware('permission:read_' . $table)->middleware('role:admin');
            Route::get('/{id}/edit', [$controller, 'edit'])->name('edit')->middleware('permission:update_' . $table)->middleware('role:admin');
            Route::put('/{id}', [$controller, 'update'])->name('update')->middleware('permission:update_' . $table)->middleware('role:admin');
            Route::delete('/{id}', [$controller, 'destroy'])->name('destroy')->middleware('permission:delete_' . $table)->middleware('role:admin');

            // SEARCHES
            Route::get('/search/{search}', [$controller, 'search'])->name('search')->middleware('permission:search_' . $table)->middleware('role:admin');
            Route::get('/{fields}/{exact_search}', [$controller, 'exact_search'])->name('search.exact')->middleware('permission:search_' . $table)->middleware('role:admin');


            // ALERT Routes
            Route::get('/alert', [$controller, 'alert'])->name('alert.index')->middleware('permission:alert_' . $table)->middleware('role:admin');
            Route::get('/alert/{livello}', [$controller, 'alert'])->name('alert.level')->middleware('permission:alert_' . $table)->middleware('role:admin');
        });
    }

    //    get (tabella)                                       // index
    //    get (tabella/{id})                                  // show
    //    get (tabella/search/{search}                        // search
    //    get (tabella/{field}/{exact_search}                 // exact search
    //    get (tabella/{field}/search/{search}                // field search
    //    get (alert_tabella/{id_veicolo}                     // alert show
    //    get (alert_tabella/search/{search}                  // alert search
    //    get (alert_tabella/{field}/{exact_search}           // alert exact search
    //    get (alert_tabella/{field}/search/{search}          // alert field search
    //
    //
    //    // Standard CRUD Routes
    //    get (tabella/list)                                  // index
    //    get (tabella/create)                                // create form
    //    post (tabella/store)                                // store
    //    get (tabella/{id}/edit)                             // edit form
    //    put (tabella/{id})                                  // update
    //    get (tabella/{id}/delete)                           // delete form
    //    delete (tabella/{id})                               // destroy
    //
    //    // Alert Routes
    //    get (alert/list)                                    // index
    //    get (alert/{table})                                 // show
    //
    //    // Custom Routes
    //    get (import_veicolo)                                // import xml form
    //    post (import_veicolo)                               // store xml
    //
    //    // Maybe Routes
    //    get (tabella/{id}/restore)                          // restore
    //    get (tabella/{id}/delete)                           // delete
    //    get (tabella/{id}/force_delete)                     // force delete
    //    get (tabella/{id}/alert)                            // alert show


    //php artisan make:model Assicurazione --all
    //php artisan make:model Atp --all
    //php artisan make:model Bollo --all
    //php artisan make:model Bombole --all
    //php artisan make:model ImpostazioneAlimentazioneVeicolo --all
    //php artisan make:model ImpostazioneAllestimentoVeicolo --all
    //php artisan make:model ImpostazioneAsseVeicolo --all
    //php artisan make:model ImpostazioneAssicurazioneVeicolo --all
    //php artisan make:model ImpostazioneBrokerAssicurazione --all
    //php artisan make:model ImpostazioneCambioVeicolo --all
    //php artisan make:model ImpostazioneCaselloPedaggio --all
    //php artisan make:model ImpostazioneControparteDecorazione --all
    //php artisan make:model ImpostazioneDestinazioneVeicolo --all
    //php artisan make:model ImpostazioneDisponibilitaVeicolo --all
    //php artisan make:model ImpostazioneEnteVeicolo --all
    //php artisan make:model ImpostazioneFilialeVeicolo --all
    //php artisan make:model ImpostazioneIntestatarioVeicolo --all
    //php artisan make:model ImpostazioneManutenzioneVeicolo --all
    //php artisan make:model ImpostazioneMarcaVeicolo --all
    //php artisan make:model ImpostazioneModelloVeicolo --all
    //php artisan make:model ImpostazionePolizzaVeicolo --all
    //php artisan make:model ImpostazioneProprietarioVeicolo --all
    //php artisan make:model ImpostazioneScadenzaAssicurazione --all
    //php artisan make:model ImpostazioneSocietaLeasing --all
    //php artisan make:model ImpostazioneSocietaVeicolo --all
    //php artisan make:model ImpostazioneStatoAssicurazione --all
    //php artisan make:model ImpostazioneStatoMulta --all
    //php artisan make:model ImpostazioneStatoPedaggio --all
    //php artisan make:model ImpostazioneStatoSinistro --all
    //php artisan make:model ImpostazioneStatoVeicolo --all
    //php artisan make:model ImpostazioneTipoCliente --all
    //php artisan make:model ImpostazioneTipoSocieta --all
    //php artisan make:model ImpostazioneTipoVeicolo --all
    //php artisan make:model Intervento --all
    //php artisan make:model Multa --all
    //php artisan make:model Revisione --all
    //php artisan make:model Sinistro --all
    //php artisan make:model Tachigrafo --all
    //php artisan make:model Tagliando --all
    //php artisan make:model Targa --all
    //php artisan make:model Telaio --all
    //php artisan make:model Veicolo --all

