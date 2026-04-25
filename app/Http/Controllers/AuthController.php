<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        // return Hash::make('password123'); // Contoh hashing password
        return view('auth.login');
    }

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate(); 
        return redirect()->intended('/admin');
    }

    return back()->withErrors([
        'email' => 'Login gagal, periksa email dan password.',
    ])->withInput();
}
}
