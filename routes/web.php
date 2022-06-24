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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/golongan', [\App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/golongan/create', [\App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/golongan/store', [\App\Http\Controllers\GolonganController::class, 'store']);
Route::get('/golongan/edit/{id}', [\App\Http\Controllers\GolonganController::class, 'edit']);
Route::put('/golongan/update/{id}', [\App\Http\Controllers\GolonganController::class, 'update']);
Route::get('/golongan/destroy/{id}', [\App\Http\Controllers\GolonganController::class, 'destroy']);

Route::get('/pelanggan', [\App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [\App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan/store', [\App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [\App\Http\Controllers\PelangganController::class, 'edit']);
Route::post('/pelanggan/update/{id}', [\App\Http\Controllers\PelangganController::class, 'update']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('/user/store', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/logout', [\App\Http\Controllers\UserController::class, 'logout']);
Route::get('/user/login', [\App\Http\Controllers\UserController::class, 'login']);

