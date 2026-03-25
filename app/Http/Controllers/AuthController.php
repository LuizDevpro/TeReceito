<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){

        $data = [
            'subtitle' => 'Cadastrar-se'
        ];

        return view('user.auth.register_frm', $data);

    }

    public function login(){

        $data = [
            'subtitle' => 'Entrar'
        ];

        return view('user.auth.login_frm', $data);

    }
}
