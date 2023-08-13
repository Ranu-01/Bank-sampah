<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\KategoriSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class KategoriSampahController extends Controller
{
    public function index()
    {
        $kategori_sampah = KategoriSampah::all();

        return view('pages.kategori-sampah.index', compact('kategori_sampah'));
    }

    public function create()
    {
        return view('pages.kategori-sampah.create');
    }

    public function store(Request $request)
    {
        App::setLocale("id");
        $request->validate([
            "nama_kategori" => "required|unique:kategori_sampah,nama_kategori"
        ]);

        DB::beginTransaction();
        try {
            $kategori_sampah = new KategoriSampah;
            $kategori_sampah->nama_kategori = $request->nama_kategori;
            $kategori_sampah->save();
            DB::commit();
            return redirect()->route('kategori-sampah.index');
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $data = KategoriSampah::where('id', $id)->first();

        return view('pages.kategori-sampah.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        App::setLocale("id");
        $request->validate([
            "nama_kategori" => "required|unique:kategori_sampah,nama_kategori"
        ]);

        DB::beginTransaction();
        try {
            $kategori_sampah = KategoriSampah::where('id', $id)->first();
            $kategori_sampah->nama_kategori = $request->nama_kategori;
            $kategori_sampah->save();
            DB::commit();
            return redirect()->route('kategori-sampah.index');
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
            KategoriSampah::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('kategori-sampah.index');
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }
}
