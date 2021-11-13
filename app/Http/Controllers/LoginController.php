<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // login/indeks, diganti titik untuk masuk kedalam folder
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
}
