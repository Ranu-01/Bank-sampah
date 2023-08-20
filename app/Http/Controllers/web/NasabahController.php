<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            return redirect()->route('nasabah.index')->with("message", 'Berhasil mengubah status nasabah');
        } catch (\Exception $ex) {
            //throw $th;
            DB::rollBack();
            echo $ex->getMessage();
        }
    }
}
