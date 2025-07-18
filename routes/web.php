<?php

use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\jenisController;

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
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Data Pelanggan
Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [pelangganController::class, 'create']);
Route::post('/pelanggan', [pelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [pelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [pelangganController::class, 'update']);
Route::resource('/pelanggan', pelangganController::class);

//Data Jenis
Route::get('/jenis', [jenisController::class, 'index']);
Route::get('/jenis/tambah', [jenisController::class, 'create']);
Route::post('/jenis', [jenisController::class, 'store']);
Route::get('/jenis/edit/{id}', [jenisController::class, 'edit']);
Route::put('/jenis/{id}', [jenisController::class, 'update']);
Route::resource('/jenis', jenisController::class);