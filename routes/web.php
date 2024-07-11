<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('espalda', [AuthController::class, 'espalda'])->name('espalda');
Route::get('añadir', [AuthController::class, 'añadir'])->name('añadir');
Route::get('pecho', [AuthController::class, 'pecho'])->name('pecho');
Route::get('pierna', [AuthController::class, 'pierna'])->name('pierna');
Route::get('biceps', [AuthController::class, 'biceps'])->name('biceps');
Route::get('triceps', [AuthController::class, 'triceps'])->name('triceps');
Route::get('hombro', [AuthController::class, 'hombro'])->name('hombro');
Route::get('showLogin', [AuthController::class, 'showLogin'])->name('showLogin');
Route::get('home', [AuthController::class, 'home'])->name('home');
Route::post('nuevo', [AuthController::class, 'nuevo'])->name('nuevo');
// Route::get('registro', [Registro::class, 'metodo'])->name('registro');
