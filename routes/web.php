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
    return view('index');
});
Route::get('/client', function () {
    return view('clients');
});
Route::get('/drivers', function () {
    return view('drivers');
});
Route::get('/routes', function () {
    return view('routes');
});
Route::get('/calender', function () {
    return view('calender');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/announcmnents', function () {
    return view('announcmnents');
});
Route::get('/settings', function () {
    return view('settings');
});