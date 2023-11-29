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
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    return view('logout');
});


Route::get('/payment', function () {
    return view('payment');
});


Route::get('/qr', function () {
    return view('qr');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/user_dashboard_booking', function () {
    return view('user_dashboard_booking');
});


Route::get('/user_dashboard_transactions', function () {
    return view('user_dashboard_transactions');
});

