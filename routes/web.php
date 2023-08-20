<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\KategoriSampahController;
use App\Http\Controllers\web\MonitoringController;
use App\Http\Controllers\web\NasabahController;
use App\Http\Controllers\web\PetugasController;
use App\Http\Controllers\web\RtController;
use App\Http\Controllers\web\RwController;
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
    Route::get('/nasabah/changeStatus/{id}', 'changeStatus')->name('nasabah.changeStatus');
});

Route::controller(SampahController::class)->group(function () {
    Route::get('/sampah', 'index')->name('sampah.index');
    Route::get('/sampah/create', 'create')->name('sampah.create');
    Route::post('/sampah/store', 'store')->name('sampah.store');
    Route::get('/sampah/edit/{id}', 'edit')->name('sampah.edit');
    Route::post('/sampah/update/{id}', 'update')->name('sampah.update');
    Route::get('/sampah/destroy/{id}', 'destroy')->name('sampah.destroy');
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

Route::controller(RwController::class)->group(function () {
    Route::get('/rw', 'index')->name('rw.index');
    Route::get('/rw/create', 'create')->name('rw.create');
    Route::post('/rw/store', 'store')->name('rw.store');
    Route::get('/rw/edit/{id}', 'edit')->name('rw.edit');
    Route::post('/rw/update/{id}', 'update')->name('rw.update');
    Route::get('/rw/destroy/{id}', 'destroy')->name('rw.destroy');
});

Route::controller(RtController::class)->group(function () {
    Route::get('/rt', 'index')->name('rt.index');
    Route::get('/rt/create', 'create')->name('rt.create');
    Route::post('/rt/store', 'store')->name('rt.store');
    Route::get('/rt/edit/{id}', 'edit')->name('rt.edit');
    Route::post('/rt/update/{id}', 'update')->name('rt.update');
    Route::get('/rt/destroy/{id}', 'destroy')->name('rt.destroy');
});

Route::controller(PetugasController::class)->group(function () {
    Route::get('/petugas', 'index')->name('petugas.index');
    Route::get('/petugas/create', 'create')->name('petugas.create');
    Route::post('/petugas/store', 'store')->name('petugas.store');
    Route::get('/petugas/changeStatus/{id}', 'changeStatus')->name('petugas.changeStatus');
    Route::get('/petugas/destroy/{id}', 'destroy')->name('petugas.destroy');
    Route::get('/petugas/edit/{id}', 'edit')->name('petugas.edit');
    Route::post('/petugas/update/{id}', 'update')->name('petugas.update');
});
