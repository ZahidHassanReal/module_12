<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketController;

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
    return view('welcome');
});
Route::get('/trips', [TripController::class, 'index']);


Route::get('/trips/create', [TripController::class, 'create']);


Route::post('/trips', [TripController::class, 'store']);

Route::get('/tickets', [TicketController::class, 'index']);


Route::post('/tickets/purchase', [TicketController::class, 'purchase']);


Route::get('/user/{user}/tickets', [TicketController::class, 'show']);

Route::delete('/tickets/{ticket}', [TicketController::class, 'cancelTicket']);
