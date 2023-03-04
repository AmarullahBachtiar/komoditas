<?php

use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProduksiController;
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
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/komoditas', [KomoditasController::class, 'index']);
Route::resource('/komoditas', KomoditasController::class);
Route::get('/komoditas/edit', 'KomoditasController@edit')->name('edit');
Route::get('/komoditas/show', 'KomoditasController@show')->name('show');
Route::resource('/produksi', ProduksiController::class);
