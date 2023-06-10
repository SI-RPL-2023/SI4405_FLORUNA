<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Postingan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donasi = Donasi::where('status','=','Terkonfirmasi')->get();
        $first = Postingan::where('status', '=', 'Terkonfirmasi')->latest()->first();
        return view('Homepage',compact('donasi','first'));
    }
}
