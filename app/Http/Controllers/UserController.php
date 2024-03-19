<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function login(Request $request){
    }

    public function create(Request $request){
        $datosVerificados = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
            'birthday'=>'required',
        ]);

        if (User::create($datosVerificados)){
            return redirect('/');
        }

        return back()->withErrors([
            'email'=>'Correo incorrecto',
            'password'=>'No es tu contraseña'


        ]);

    }
}


