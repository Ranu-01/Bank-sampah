<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function validatorHelper($request)
    {
        App::setLocale("id");
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $validator = Validator::make($request, $rules);

        return $validator->getMessageBag();
    }

    public function login(Request $request)
    {
        $validator = $this->validatorHelper($request->all());
        $data = ['message' => $validator];
        return response()->json($data, 200);
    }
}
