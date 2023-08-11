<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index()
    {
        return view('pages.sampah.index');
    }
}
