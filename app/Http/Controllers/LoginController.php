<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'Admin') {
                return redirect()->intended('/dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'error cuk',
        ])->onlyInput('email');
    }
}
