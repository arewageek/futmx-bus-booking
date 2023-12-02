<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bookings;
use App\Http\Controllers\Paystack;

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


Route::get('/log', function () {
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


Route::get('/signup', function () {
    return view('register');
});

Route::get('/user_dashboard_booking', function () {
    return view('user_dashboard_booking');
});


Route::get('/user_dashboard_transactions', function () {
    return view('user_dashboard_transactions');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/transactions', function (){
        return view('user.dashboard');
    });

    Route::get('/booking', function (){
        return view('user.book');
    });

    Route::prefix('api') -> group(function () {
        Route::get('/paystack/verify/{trxid}/{amount}', [Paystack::class, 'verify']);
        Route::post('/booking/new', [Bookings::class, 'create']);
    });
    
});
