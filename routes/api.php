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

    Route::match(['post','get'],'/users', [APIController::class, 'users']);

    Route::match(['post','get'],'/userStore', [APIController::class, 'user_store']);
    
    Route::match(['post','get'],'/tripStore', [APIController::class, 'trip_store']);

    Route::match(['post','get'],'/announcements', [APIController::class, 'announcements']);

    Route::match(['post','get'],'/announcementStore', [APIController::class, 'announcement_store']);

    Route::match(['post','get'],'/notifications', [APIController::class, 'notifications']);

    Route::match(['post','get'],'/notificationStore', [APIController::class, 'notification_store']);

});

Route::match(['post','get'],'/login', [APIController::class, 'user_login']);

Route::match(['get', 'post'], '/register', [APIController::class, 'register']);
