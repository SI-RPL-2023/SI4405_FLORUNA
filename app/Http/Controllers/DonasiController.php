<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DonasiController extends Controller
{
    public function index()
    {
        $donasi = Donasi::where('status','=','Terkonfirmasi')->get();
        return view('Donasi', compact('donasi'));
    }

    public function open()
    {
        return view('Donasi_Open');
    }

    public function donasi_kom()
    {
        $donasi = Donasi::where('komunitas_id','=',auth()->user()->id)->get();
        return view('Donasi_Komunitas', compact('donasi'));
    }

    public function donasi_adm()
    {
        $donasi = Donasi::all();
        return view('Admin.Data_Donasi', compact('donasi'));
    }

    public function add()
    {
        return view('Admin.Data_Donasi_Add');
    }

    public function post_kom(Request $request)
    {
        $donasi = new Donasi();

        $path = public_path() . '/upload/Donasi/';
        File::makeDirectory($path, $mode = 0777, true, true);

        $foto = $request->foto->getClientOriginalName() . '-' . time() . '- Postingan -'
            . '.' . $request->foto->extension();
        $request->foto->move($path, $foto);

        $donasi->judul = $request->judul;
        $donasi->komunitas_id = auth()->user()->id;
        $donasi->email = $request->email;
        $donasi->keterangan = $request->keterangan;
        $donasi->target = $request->target;
        $donasi->foto = $foto;
        $donasi->tutup = $request->tutup;

        $donasi->save();

        return redirect('/komunitas/donation');
    }

    public function post_adm(Request $request)
    {
        $donasi = new Donasi();

        $path = public_path() . '/upload/Donasi/';
        File::makeDirectory($path, $mode = 0777, true, true);

        $foto = $request->foto->getClientOriginalName() . '-' . time() . '- Postingan -'
            . '.' . $request->foto->extension();
        $request->foto->move($path, $foto);

        $donasi->judul = $request->judul;
        $donasi->email = $request->email;
        $donasi->keterangan = $request->keterangan;
        $donasi->target = $request->target;
        $donasi->foto = $foto;
        $donasi->tutup = $request->tutup;
        $donasi->status = "Terkonfirmasi";

        $donasi->save();

        return redirect('/data/donasi');
    }

    public function detail_adm($id)
    {
        $donasi = Donasi::find($id);
        return view('Admin.Detail_Donasi', compact('donasi'));
    }

    public function konfirmasi($id)
    {
        $donasi = Donasi::find($id);
        $donasi->status = "Terkonfirmasi";
        $donasi->save();

        return back();
    }
}
