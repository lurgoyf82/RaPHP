<?php

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

    //require __DIR__ . '/auth.php';
    //require __DIR__ . '/api.php';
    //require __DIR__ . '/jwt.php';
