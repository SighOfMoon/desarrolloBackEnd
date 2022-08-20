<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = array('response' => '', 'success' => false);

        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            $response['response'] = "Datos incorrectos";
        } else {
            $user = User::select()->where("email", '=', $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $response['success'] = true;
                    $response['response'] = ["name" => $user->name, "rol" => 1]; //numero de rol
                } else {
                    $response['response'] = "Datos incorrectos";
                }
            } else {
                $response['response'] = "No existe usuario registrado.";
            }
        }

        return response()->json($response);
    }
}
