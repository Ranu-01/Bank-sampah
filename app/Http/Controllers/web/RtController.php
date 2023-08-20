<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class RtController extends Controller
{
    public function index()
    {
        $rt = Rt::with(["rw"])->get();

        return view('pages.rt.index', compact('rt'));
    }

    public function create()
    {
        $rw = Rw::all();
        return view('pages.rt.create', compact('rw'));
    }

    public function store(Request $request)
    {
        App::setLocale("id");
        $request->validate([
            "rt" => "required|unique:rt,rt",
            "rw_id" => "required"
        ]);

        DB::beginTransaction();
        try {
            $rt = new Rt;
            $rt->rt = $request->rt;
            $rt->rw_id = $request->rw_id;
            $rt->save();
            DB::commit();
            return redirect()->route('rt.index')->with("message", "Berhasil menambahkan data rt");
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $rw = Rw::all();
        $data = Rt::where('id', $id)->first();

        return view('pages.rt.edit', compact('rw', 'data'));
    }

    public function update(Request $request, $id)
    {
        App::setLocale("id");
        $request->validate([
            "rt" => "required|unique:rt,rt",
            "rw_id" => "required"
        ]);

        DB::beginTransaction();
        try {
            $rt = Rt::where('id', $id)->first();
            $rt->rt = $request->rt;
            $rt->rw_id = $request->rw_id;
            $rt->save();
            DB::commit();
            return redirect()->route('rt.index')->with("message", "Berhasil mengubah data rt");
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
            Rt::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('rt.index')->with("message", "Berhasil menghapus data rt");
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }
}
