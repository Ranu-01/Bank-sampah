<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\KategoriSampah;
use App\Models\Nasabah;
use App\Models\Sampah;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // $data = Sampah::with(['kategorisampah'])->get();
        $total_nasabah = count(Nasabah::with(['user'])->get());
        // dd($data);
        return view('pages.dashboard.index', compact('total_nasabah'));
    }
}
