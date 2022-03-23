<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/reservas', [App\Http\Controllers\EventoController::class, 'index'])->middleware('auth');

Route::get('/reservas/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/reservas/agregar', [App\Http\Controllers\EventoController::class, 'store']);

Route::resource('eventos', App\Http\Controllers\AgendaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
