<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\APIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {

    // Route::get('/clients', [APIController::class, 'clients']);

    // Route::get('/admin/drivers', [APIController::class, 'drivers']);

    Route::get('/users', [APIController::class, 'users']);

    Route::post('/userStore', [APIController::class, 'user_store']);


});

Route::post('/login', [APIController::class, 'user_login']);

Route::match(['get', 'post'], '/register', [APIController::class, 'register']);
