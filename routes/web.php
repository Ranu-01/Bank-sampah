<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\NasabahController;

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

Route::get('/regis', function () {
    return view('pages.registration.index');
});

Route::get('/log', function () {
    return view('pages.login.index');
});

Route::get('/nas', [NasabahController::class, 'index']);

Route::get('/tambah-nasabah', function () {
    return view('pages.nasabah.create');
});

Route::get('/t', function () {
    return view('pages.transaksi.index');
});

Route::get('/sampah', function () {
    return view('pages.sampah.index');
});

Route::get('/mon', function () {
    return view('pages.monitor.index');
});
Route::get('/coba', function () {
    return view('pages.nasabah.create');
});
