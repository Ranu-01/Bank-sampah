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
    return view('pages.dashboard.index');
});

Route::get('/regis', function () {
    return view('pages.registration.index');
});

Route::get('/log', function () {
    return view('pages.login.index');
});

Route::get('/nas', function () {
    return view('pages.nasabah.index');
});

Route::get('/t', function () {
    return view('pages.transaksi.index');
});
