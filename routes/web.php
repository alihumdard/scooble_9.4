<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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



Route::controller(UserController::class)->group(function () {

    Route::get('/', 'index');

    Route::get('/client', 'clients');

    Route::get('/drivers', 'drivers');

    Route::get('/routes', 'routes');

    Route::get('/calender', 'calender');

    Route::get('/users', 'users');

    Route::get('/notifications', 'notifications');

    Route::get('/announcmnents', 'announcmnents');

    Route::get('/settings', 'settings');

    Route::get('/edit/{id}', 'user_edit');

    Route::post('/user_store', 'user_store');
    Route::post('/lang_change', 'lang_change');

    Route::post('/login', 'user_login');

    Route::match(['get', 'post'], '/forgot_password', 'forgot_password');

    Route::match(['get', 'post'], '/set_password', 'set_password');

    Route::match(['get', 'post'], '/register', 'user_register');
    
    Route::match(['get', 'post'], '/logout', 'logout');
});

