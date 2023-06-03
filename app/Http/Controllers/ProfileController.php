<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::where('user_id','=',auth()->user()->id)->get();
        return view('Profile', compact('transaksi'));
    }
}
