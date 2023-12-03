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
        if(Auth() -> user() -> role == 'admin'){
            return redirect('/admin');
        }
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/transactions', function (){
        return view('user.dashboard');
    });

    Route::get('/booking', function (){
        return view('user.book');
    });

    Route::get('/map', function (){
        return view('user.map');
    });


    Route::middleware([
        'admin',
    ]) -> prefix('admin') -> group(function(){
        Route::get('/', function(){
            return view('admin.dashboard');
        });
    });

    Route::prefix('api') -> group(function () {
        Route::get('/paystack/verify/{trxid}/{amount}', [Paystack::class, 'verify']);
        Route::get('/booking/new', [Bookings::class, 'create']);
        Route::get('/booking/list', [Bookings::class, 'list']);
        Route::get('/admin/bookings', [Bookings::class, 'adminlist']);
        Route::get('/admin/bookings/confirm/{id}', [Bookings::class, 'approve']);
        Route::get('/admin/bookings/cancel/{id}', [Bookings::class, 'delete']);
    });
    
});
