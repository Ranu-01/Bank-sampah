<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function validatorLoginHelper($request)
    {
        App::setLocale("id");
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $validator = Validator::make($request, $rules);

        return $validator;
    }

    public function login(Request $request)
    {
        $validator = $this->validatorLoginHelper($request->all());
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
}
