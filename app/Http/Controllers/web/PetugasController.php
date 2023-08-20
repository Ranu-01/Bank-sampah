<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::with(['user'])->get();
        return view('pages.petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('pages.petugas.create');
    }

    public function store(Request $request)
    {
        App::setLocale("id");
        $request->validate([
            "nama_petugas" => "required",
            "handphone" => "required|numeric",
            "alamat" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required"
        ]);

        DB::beginTransaction();
        try {
            $user = new User;
            $user->name = $request->nama_petugas;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = "petugas";
            $user->save();
            $petugas = new Petugas;
            $petugas->user_id = $user->id;
            $petugas->handphone = $request->handphone;
            $petugas->alamat = $request->alamat;
            $petugas->save();
            DB::commit();
            return redirect()->route('petugas.index')->with('message', 'Berhasil menambahkan data petugas');
        } catch (\Exception $ex) {
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function changeStatus($id)
    {
        $user = User::where('id', $id)->first();
        DB::beginTransaction();
        try {
            if ($user->status == 1) {
                $user->status = 0;
                $user->save();
            } else {
                $user->status = 1;
                $user->save();
            }
            DB::commit();
            return redirect()->route('petugas.index')->with("message", 'Berhasil mengubah status petugas');
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            User::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('petugas.index')->with('message', 'Berhasil menghapus data petugas');
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $data = Petugas::with(['user'])->where('user_id', $id)->first();
        return view('pages.petugas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        App::setLocale("id");
        $request->validate([
            "nama_petugas" => "required",
            "handphone" => "required|numeric",
            "alamat" => "required",
            "email" => "required|email|unique:users,email",
        ]);

        $user = User::where('id', $id)->first();
        $petugas = Petugas::where('user_id', $id)->first();
        DB::beginTransaction();
        try {
            $user->name = $request->nama_petugas;
            $user->email = $request->email;
            if (!empty($request->password)) {
                $user->password = bcrypt($request->password);
            }
            $user->save();
            $petugas->handphone = $request->handphone;
            $petugas->alamat = $request->alamat;
            $petugas->save();
            DB::commit();
            return redirect()->route('petugas.index')->with('message', 'Berhasil mengubah data petugas');
        } catch (\Exception $ex) {
            DB::rollBack();
            echo $ex->getMessage();
        }
    }
}
