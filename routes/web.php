<?php

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

Auth::routes();

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/petugas', [App\Http\Controllers\PetugasController::class, 'index'])->middleware('auth');
Route::get('/petugas/create', [App\Http\Controllers\PetugasController::class, 'create'])->middleware('auth');
Route::post('/petugas', [App\Http\Controllers\PetugasController::class, 'store']);
Route::get('/petugas/{id}/edit', [App\Http\Controllers\PetugasController::class, 'edit'])->middleware('auth');
Route::patch('/petugas/{id}', [App\Http\Controllers\PetugasController::class, 'update']);
Route::delete('/petugas/{id}', [App\Http\Controllers\PetugasController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index'])->middleware('auth');
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create'])->middleware('auth');
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit'])->middleware('auth');
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/sampah', [App\Http\Controllers\SampahController::class, 'index'])->middleware('auth');
Route::get('/sampah/create', [App\Http\Controllers\SampahController::class, 'create'])->middleware('auth');
Route::post('/sampah', [App\Http\Controllers\SampahController::class, 'store']);
Route::get('/sampah/{id}/edit', [App\Http\Controllers\SampahController::class, 'edit'])->middleware('auth');
Route::patch('/sampah/{id}', [App\Http\Controllers\SampahController::class, 'update']);
Route::delete('/sampah/{id}', [App\Http\Controllers\SampahController::class, 'destroy']);
