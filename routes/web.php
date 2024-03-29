<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\SessionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/',[SessionController::class, 'index']);
Route::resource('guru', GuruController::class);
Route::resource('dosen', DosenController::class);
Route::get('/login',[SessionController::class, 'index']);
Route::get('sesi',[SessionController::class, 'index']);
Route::post('sesi/login',[SessionController::class, 'login']);
Route::get('sesi/logout',[SessionController::class, 'index']);
