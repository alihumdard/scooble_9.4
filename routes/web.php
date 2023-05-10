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
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/set_password', function () {
    return view('set_password');
});

Route::get('/create_trip', function () {
    return view('create_trip');
});

Route::get('/driver_map', function () {
    return view('driver_map');
});
