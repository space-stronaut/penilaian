<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PenilaianController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan', [KaryawanController::class, 'store']);
Route::get('/karyawan/delete/{id}', [KaryawanController::class, 'destroy']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::put('/karyawan/update/{id}', [KaryawanController::class, 'update']);

Route::get('/Category', [CategoryController::class, 'index']);
Route::get('/Category/create', [CategoryController::class, 'create']);
Route::post('/Category', [CategoryController::class, 'store']);
Route::get('/Category/delete/{id}', [CategoryController::class, 'destroy']);
Route::get('/Category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/Category/update/{id}', [CategoryController::class, 'update']);

Route::get('/detail', [DetailController::class, 'index']);
Route::post('/detail', [DetailController::class, 'store']);
Route::get('/detail/create', [DetailController::class, 'create']);
Route::get('/detail/delete/{id}', [DetailController::class, 'destroy']);
Route::get('/detail/edit/{id}', [DetailController::class, 'edit']);
Route::put('/detail/update/{id}', [DetailController::class, 'update']);

Route::get('/penilaian', [PenilaianController::class, 'index']);
Route::post('/penilaian', [PenilaianController::class, 'store']);
Route::get('/penilaian/create', [PenilaianController::class, 'create']);
Route::get('/penilaian/delete/{id}', [PenilaianController::class, 'destroy']);
Route::get('/penilaian/edit/{id}', [PenilaianController::class, 'edit']);
Route::put('/penilaian/update/{id}', [PenilaianController::class, 'update']);
Route::get('/penilaian/cari', [PenilaianController::class, 'search']);
