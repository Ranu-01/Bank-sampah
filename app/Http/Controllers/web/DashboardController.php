<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\KategoriSampah;
use App\Models\Nasabah;
use App\Models\Sampah;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $data = Sampah::with(['kategorisampah'])->get();
        $data = Transaksi::with(['nasabah.user', 'detailtransaksi.sampah.kategorisampah'])->get();
        // dd($data);
        return $data;
    }
}
