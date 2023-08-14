<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\KategoriSampah;
use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class SampahController extends Controller
{

    public function index()
    {
        $sampah = Sampah::with(["kategorisampah"])->get();
        return view('pages.sampah.index', compact('sampah'));
    }

    public function create()
    {
        $kategori_sampah = KategoriSampah::all();
        return view('pages.sampah.create', compact('kategori_sampah'));
    }

    public function store(Request $request)
    {
        App::setLocale("id");
        $request->validate([
            "nama_sampah" => "required|unique:sampah,nama_sampah",
            "kategori_sampah_id" => "required",
            "satuan" => "required",
            "harga_satuan" => "required|numeric"
        ]);

        DB::beginTransaction();
        try {
            $sampah = new Sampah;
            $sampah->nama_sampah = $request->nama_sampah;
            $sampah->kategori_sampah_id = $request->kategori_sampah_id;
            $sampah->satuan = $request->satuan;
            $sampah->harga_per_satuan = $request->harga_satuan;
            $sampah->save();
            DB::commit();
            return redirect()->route('sampah.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $sampah = Sampah::where('id', $id)->first();
        $kategori_sampah = KategoriSampah::all();
        return view('pages.sampah.edit', compact('sampah', 'kategori_sampah'));
    }

    public function update(Request $request, $id)
    {
        App::setLocale("id");
        $request->validate([
            "nama_sampah" => "required|unique:sampah,nama_sampah",
            "kategori_sampah_id" => "required",
            "satuan" => "required",
            "harga_satuan" => "required|numeric"
        ]);

        DB::beginTransaction();
        try {
            $sampah = Sampah::where('id', $id)->first();
            $sampah->nama_sampah = $request->nama_sampah;
            $sampah->kategori_sampah_id = $request->kategori_sampah_id;
            $sampah->satuan = $request->satuan;
            $sampah->harga_per_satuan = $request->harga_satuan;
            $sampah->save();
            DB::commit();
            return redirect()->route('sampah.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Sampah::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('sampah.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            echo $ex->getMessage();
        }
    }
}
