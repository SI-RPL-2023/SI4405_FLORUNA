<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Postingan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $donasi = Donasi::latest()->get();
        $news = Postingan::latest()->get();
        return view('Admin.Dashboard', compact('donasi','news'));
    }

    public function data_user()
    {
        $user = User::where('role', '=', 'Personal User')->get();
        return view('Admin.Data_User', compact('user'));
    }

    public function detail_user($id)
    {
        $user = User::find($id);
        return view('Admin.Detail_Data_User', compact('user'));

    }

    public function data_comunity()
    {
        $user = User::where('role', '=', 'Comunity')->get();
        return view('Admin.Data_Comunity', compact('user'));
    }

    public function detail_Comunity($id)
    {
        $user = User::find($id);
        return view('Admin.Detail_Comunity', compact('user'));

    }

    public function data_postingan()
    {
        $postingan = Postingan::all();
        return view('Admin.Data_Postingan', compact('postingan'));
    }

    public function detail_posting($id)
    {
        $posting = Postingan::find($id);
        return view('Detail_Postingan', compact('posting'));

    }

    public function transaksi()
    {
        $transaksi = Transaksi::all();
        return view('Admin.Data_Transaksi',compact('transaksi'));
    }

}
