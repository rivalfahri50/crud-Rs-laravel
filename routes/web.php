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
    return view('welcome');
});

Route::get('/nyoba', function () {
    return view('index');
});

Route::resource('/perawat', App\Http\Controllers\PerawatController::class);
Route::resource('/dokter', App\Http\Controllers\DokterController::class);
Route::resource('/no_antrian', App\Http\Controllers\NoAntrianController::class);
Route::resource('/pasien', App\Http\Controllers\PasienController::class);
Route::resource('/obat', App\Http\Controllers\ObatController::class);
