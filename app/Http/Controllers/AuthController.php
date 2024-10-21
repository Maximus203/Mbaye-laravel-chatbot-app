<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('authentication.register');
    }

    public function showLoginForm()
    {
        return view('authentication.login');
    }
}
