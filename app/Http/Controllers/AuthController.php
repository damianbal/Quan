<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.login');
    }

    public function signUp()
    {   
        return view('auth.register');
    }

    public function signOut()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
