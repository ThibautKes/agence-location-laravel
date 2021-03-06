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

Route::get('/', function (){
    return redirect('/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\AeroportController::class, 'index'])->name('home');

Route::get('/cars', [App\Http\Controllers\VoitureController::class, 'index'])->name('voiture');

Route::get('/reservations', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation');

Route::post('/addReserve', [App\Http\Controllers\VoitureController::class, 'store']);

Route::post('/deleteReservation', [App\Http\Controllers\ReservationController::class, 'delete']);


