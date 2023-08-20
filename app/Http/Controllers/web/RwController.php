<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class RwController extends Controller
{
    public function index()
    {
        $rw = Rw::all();

        return view('pages.rw.index', compact('rw'));
    }

    public function create()
    {
        return view('pages.rw.create');
    }

    public function store(Request $request)
    {
        App::setLocale("id");
        $request->validate([
            "rw" => "required|unique:rw,rw"
        ]);

        DB::beginTransaction();
        try {
            $rw = new Rw;
            $rw->rw = $request->rw;
            $rw->save();
            DB::commit();
            return redirect()->route('rw.index')->with("message", "Berhasil menambahkan data rw");
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $data = Rw::where('id', $id)->first();

        return view('pages.rw.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        App::setLocale("id");
        $request->validate([
            "rw" => "required|unique:rw,rw"
        ]);

        DB::beginTransaction();
        try {
            $rw = Rw::where('id', $id)->first();
            $rw->rw = $request->rw;
            $rw->save();
            DB::commit();
            return redirect()->route('rw.index')->with("message", "Berhasil mengubah data rw");
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
            Rw::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('rw.index')->with("message", "Berhasil menghapus data rw");
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }
}
