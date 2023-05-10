<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard');
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
}
