<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\LogoutController;
    use App\Http\Controllers\UserController;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */
    // Public routes

//    Route::post('jwt/login', [LoginController::class, 'login']);
//    Route::get('jwt/login', [LoginController::class, 'login']);
//    Route::post('jwt/logout', [LogoutController::class, 'logout'])->middleware('auth:api');
//    Route::get('jwt/user', [UserController::class, 'user'])->middleware('auth:api');

//        Route::middleware('auth:api')->get('/user', function (Request $request) {
//            // Place your protected routes here
//            Route::get('/profile', function (Request $request) {
//                return response()->json($request->user());
//            });
//        });

