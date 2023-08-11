<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\MonitoringController;
use App\Http\Controllers\web\NasabahController;
use App\Http\Controllers\web\SampahController;
use App\Http\Controllers\web\TransaksiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    Route::get('/', 'index');
});

Route::controller(NasabahController::class)->group(function () {
    Route::get('/nasabah', 'index')->name('nasabah.index');
    Route::get('/nasabah/create', 'create')->name('nasabah.create');
});

Route::controller(SampahController::class)->group(function () {
    Route::get('/sampah', 'index')->name('sampah.index');
});

Route::controller(TransaksiController::class)->group(function () {
    Route::get('/transaksi', 'index')->name('transaksi.index');
});

Route::controller(MonitoringController::class)->group(function () {
    Route::get('/monitoring', 'index')->name('monitoring.index');
});
