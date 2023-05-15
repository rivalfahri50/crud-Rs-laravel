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
    return view('index')->middleware('hakAkses');

});


Route::resource('/perawat', App\Http\Controllers\PerawatController::class)->middleware('Ceklogin');
Route::resource('/dokter', App\Http\Controllers\DokterController::class)->middleware('Ceklogin');
Route::resource('/no_antrian', App\Http\Controllers\NoAntrianController::class)->middleware('Ceklogin');
Route::resource('/pasien', App\Http\Controllers\PasienController::class)->middleware('Ceklogin');
Route::resource('/obat', App\Http\Controllers\ObatController::class)->middleware('Ceklogin')    ;



Route::get('/', [CustomAuthController::class, 'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('hakAkses');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
