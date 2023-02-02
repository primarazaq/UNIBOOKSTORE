<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengadaanController;
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


Route::controller(BukuController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'index');
});
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/admin/kelolabuku', 'indexbuku');
    Route::get('/admin/kelolapenerbit', 'indexpenerbit');
});
Route::controller(PengadaanController::class)->group(function () {
    Route::get('/pengadaan', 'index');
});
