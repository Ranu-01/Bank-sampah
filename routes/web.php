<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\KategoriSampahController;
use App\Http\Controllers\web\MonitoringController;
use App\Http\Controllers\web\NasabahController;
use App\Http\Controllers\web\SampahController;
use App\Http\Controllers\web\TransaksiController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard.index');
});

Route::controller(NasabahController::class)->group(function () {
    Route::get('/nasabah', 'index')->name('nasabah.index');
    Route::get('/nasabah/create', 'create')->name('nasabah.create');
});

Route::controller(SampahController::class)->group(function () {
    Route::get('/sampah', 'index')->name('sampah.index');
    Route::get('/sampah/create', 'create')->name('sampah.create');
    Route::post('/sampah/store', 'store')->name('sampah.store');
});

Route::controller(TransaksiController::class)->group(function () {
    Route::get('/transaksi', 'index')->name('transaksi.index');
});

Route::controller(MonitoringController::class)->group(function () {
    Route::get('/monitoring', 'index')->name('monitoring.index');
});

Route::controller(KategoriSampahController::class)->group(function () {
    Route::get('/kategori-sampah', 'index')->name('kategori-sampah.index');
    Route::get('/kategori-sampah/create', 'create')->name('kategori-sampah.create');
    Route::post('/kategori-sampah/store', 'store')->name('kategori-sampah.store');
    Route::get('/kategori-sampah/edit/{id}', 'edit')->name('kategori-sampah.edit');
    Route::post('/kategori-sampah/update/{id}', 'update')->name('kategori-sampah.update');
    Route::get('/kategori-sampah/destroy/{id}', 'destroy')->name('kategori-sampah.destroy');
});
