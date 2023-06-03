<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::where('user_id','=',auth()->user()->id)->get();
        return view('Profile', compact('transaksi'));
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $path = public_path() . '/upload/foto-profile/';
        File::makeDirectory($path, $mode = 0777, true, true);

        $foto = $request->foto->getClientOriginalName() . '-' . time() . '- Profile -'
            . '.' . $request->foto->extension();
        $request->foto->move($path, $foto);

        $user->foto = $foto;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return back();
    }
}
