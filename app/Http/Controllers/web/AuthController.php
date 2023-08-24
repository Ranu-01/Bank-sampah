<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('pages.login.index');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('/'); // Ganti dengan halaman yang sesuai
        } else {
            // Jika login gagal
            return redirect()->intended('/auth')->with('error', 'Invalid credentials');
        }
    }

    // Menangani proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }
}
