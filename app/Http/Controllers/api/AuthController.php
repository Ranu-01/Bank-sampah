<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function validatorHelper($request, $type)
    {
        App::setLocale("id");
        if ($type == "login") {
            $rules = [
                'email' => 'required|email',
                'password' => 'required'
            ];

            $validator = Validator::make($request, $rules);

            return $validator;
        } else if ($type == "register") {
            $rules = [
                "name" => "required",
                "email" => "required|unique:users,email|email",
                "password" => "required|min:6",
                "role" => "required",
                "nik" => "required|unique:nasabah,nik",
                "no_kk" => "required",
                "handphone" => "required|unique:nasabah,handphone",
                "alamat" => "required",
                "rt_id" => "required"
            ];

            $validator = Validator::make($request, $rules);

            return $validator;
        }
    }

    public function login(Request $request)
    {
        $validator = $this->validatorHelper($request->all(), "login");
        if ($validator->fails()) {
            $data = ['message' => $validator->getMessageBag()];
            return response()->json($data, 400);
        }

        if (!Auth::attempt($request->all())) {
            return response()->json(['message' => 'Unathorized'], 401);
        }

        $user = User::where('email', $request->email)->first();

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ];

        return response()->json($data, 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(["message" => 'Logged Out'], 200);
    }

    public function register(Request $request)
    {
        $validator = $this->validatorHelper($request->all(), "register");

        if ($validator->fails()) {
            $data = ['message' => $validator->getMessageBag()];
            return response()->json($data, 400);
        }

        DB::beginTransaction();
        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = "nasabah";
            $user->save();

            $nasabah = new Nasabah;
            $nasabah->user_id = $user->id;
            $nasabah->nik = $request->nik;
            $nasabah->no_kk = $request->no_kk;
            $nasabah->handphone = $request->handphone;
            $nasabah->alamat = $request->alamat;
            $nasabah->rt_id = $request->rt_id;
            $nasabah->save();

            DB::commit();
            return response()->json(["message" => "Registrasi berhasil"], 202);
        } catch (\Exception $ex) {

            DB::rollBack();
            return response()->json(["message" => $ex->getMessage()], 500);
        }
    }
}
