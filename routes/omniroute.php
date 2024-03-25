<?php
    use Illuminate\Support\Facades\Route;

    // In routes/web.php or routes/api.php
    Route::get('/csrf-token', function () {
        return response()->json(['csrf_token' => csrf_token()]);
    });


    Route::post('/veicolo', [\App\Http\Controllers\VeicoloController::class, 'store']);

    /*
    * Dynamic route generation for controllers.
    * Mappings are defined in config/table_controller_mappings.php.
    * This approach helps keep our routing organized and scalable as the project grows.
    * The mappings are defined in a config file, which is then loaded in the RouteServiceProvider.
    * The RouteServiceProvider is a good place to define route groups, middleware, and other route-related configurations.
    * The RouteServiceProvider is loaded in the bootstrap/app.php file.
    */

    Route::get('form', [\App\Http\Controllers\OmniRouteController::class, 'autoform']);

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

            //Use the function RaPHPController::migrateThis on the current table
            Route::get('/migrate', [$controller, 'migrateThis'])->name('migrate');//->middleware('permission:read_' . $table);//->middleware('role:admin');
        });
    }

	//this section of code only works in local environment
	if (env('APP_ENV') !== 'local') {
		return;
	}

	\Illuminate\Support\Facades\Route::get('/omniroute', [\App\Http\Controllers\OmniRouteController::class, 'index']);

