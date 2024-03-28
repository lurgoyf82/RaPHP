<?php
    use Illuminate\Support\Facades\Route;

    // In routes/web.php or routes/api.php
    Route::get('/csrf-token', function () {
        return response()->json(['csrf_token' => csrf_token()]);
    });

    /*
    * Dynamic route generation for controllers.
    * Mappings are defined in config/table_controller_mappings.php.
    * This approach helps keep our routing organized and scalable as the project grows.
    * The mappings are defined in a config file, which is then loaded in the RouteServiceProvider.
    * The RouteServiceProvider is a good place to define route groups, middleware, and other route-related configurations.
    * The RouteServiceProvider is loaded in the bootstrap/app.php file.
    */
    foreach (config('get_only_routes') as $table => $controller) {
        Route::prefix($table)->name($table . '.')->group(function () use ($table, $controller) {
            Route::get('/', [$controller, 'index'])->name('index');//->middleware('permission:read_' . $table);//->middleware('role:admin');
            Route::get('/{id}', [$controller, 'show'])->name('show')->where('id', '[0-9]+');//->middleware('permission:read_' . $table);//->middleware('role:admin');
        });
    }
    foreach (config('crud_routes') as $table => $controller) {
        Route::prefix($table)->name($table . '.')->group(function () use ($table, $controller) {
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
            //Route::get('/migrate', [$controller, 'migrateThis'])->name('migrate');//->middleware('permission:read_' . $table);//->middleware('role:admin');
        });
    }


	//this section of code only works in local environment
	if (env('APP_ENV') !== 'local') {
		return;
	}

    Route::post('/veicolo', [\App\Http\Controllers\VeicoloController::class, 'store']);
    Route::get('form', [\App\Http\Controllers\OmniRouteController::class, 'index']);
    Route::get('/omniroute/forminator', [\App\Http\Controllers\OmniRouteController::class, 'forminator']);
    Route::get('form_veicolo',function() { return view('form_veicolo'); });
    Route::get('/omniroute', [\App\Http\Controllers\OmniRouteController::class, 'index']);
