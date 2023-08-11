<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $data_nasabah = Nasabah::with(['user', 'rt.rw'])->get();
        // dd($data_nasabah);

        return view('pages.nasabah.index', compact('data_nasabah'));
    }

    public function create()
    {
        return view('pages.nasabah.create');
    }
}
