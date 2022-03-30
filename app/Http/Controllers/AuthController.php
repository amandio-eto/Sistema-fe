<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/Dasboard');
        }
        return redirect('/auth/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}
