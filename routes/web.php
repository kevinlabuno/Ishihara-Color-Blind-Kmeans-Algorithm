<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgoritmaController;
use App\Http\Controllers\TesController;
use App\Http\Contollers\LoginController;
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
})->name('beranda');

Route::get('algoritma', [AlgoritmaController::class, 'index'])->name('algoritma');
Route::get('tes', [TesController::class, 'index'])->name('tes');
Route::post('tespost', [TesController::class, 'post'])->name('tes_post');
Route::get('hasil_tes', [TesController::class, 'hasil_tes'])->name('hasil_tes');
Route::get('tesuser', [TesController::class, 'tesuser'])->name('tesuser');
Route::get('login', [LoginController::class, 'index'])->name('login');