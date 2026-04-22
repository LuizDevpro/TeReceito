<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $data = [
            'subtitle' => 'Administração'
        ];

        return view('admin.admin_home', $data);

    }
}
