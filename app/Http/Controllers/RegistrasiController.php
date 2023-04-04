<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('Registrasi');
    }

    public function register(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'tipe' => 'required'
        ]);

        $user = new User();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->tipe;
        $user->save();

        return redirect('/login');
    }
}
