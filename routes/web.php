<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\UserController;




// //Route::get('/', function () {
//    return view('welcome');
//});


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

Route::get('/dashboard', function () {
    return view('index')->middleware=('hakAkses');

});
Route::middleware([ 'hakAkses'])->group(function () {
    Route::resource('/perawat', App\Http\Controllers\PerawatController::class);
    Route::resource('/dokter', App\Http\Controllers\DokterController::class);
    Route::resource('/no_antrian', App\Http\Controllers\NoAntrianController::class);
    Route::resource('/pasien', App\Http\Controllers\PasienController::class);
    Route::resource('/obat', App\Http\Controllers\ObatController::class)  ;
    Route::resource('/satpam', App\Http\Controllers\SatpamController::class)  ;
    Route::resource('/ruang_operasi', App\Http\Controllers\RuangOperasiController::class)  ;
    Route::resource('/pembayaran', App\Http\Controllers\PembayaranController::class)  ;
    Route::resource('/kunjungan', App\Http\Controllers\KunjunganController::class)  ;
    Route::resource('/jadwal_dokter', App\Http\Controllers\JadwalDokterController::class)  ;
    Route::resource('/alat_kesehatan', App\Http\Controllers\AlatKesehatanController::class)  ;
    Route::put('/ruang_operasi/{id}', 'RuangOperasiController@update')->name('ruang_operasi.update');






});




Route::get('/', [CustomAuthController::class, 'home']);
Route::get('/registration',[CustomAuthController::class,'signup'])->name('registration');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('hakAkses');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
