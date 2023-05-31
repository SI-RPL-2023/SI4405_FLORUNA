<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostinganController extends Controller
{
    public function allpost()
    {
        $first = Postingan::where('status','=','Terkonfirmasi')->latest()->first();
        if (!$first) {
            $postingan = Postingan::all();
        }else{
            $postingan = Postingan::where('id','!=',$first->id)->where('status','=','Terkonfirmasi')->latest()->get();
        }
        return view('News', compact('postingan','first'));
    }

    public function detail_news($id)
    {
        $news = Postingan::find($id);
        return view('News_Detail', compact('news'));
    }

    public function index()
    {
        return view('Postingan');
    }

    public function upload(Request $request)
    {
        $posting = new Postingan();

        $path = public_path() . '/upload/Postingan/';
        File::makeDirectory($path, $mode = 0777, true, true);

        $foto = $request->foto->getClientOriginalName() . '-' . time() . '- Postingan -'
            . '.' . $request->foto->extension();
        $request->foto->move($path, $foto);

        $posting->komunitas_id = auth()->user()->id;
        $posting->judul = $request->judul;
        $posting->lokasi = $request->lokasi;
        $posting->keterangan = $request->keterangan;
        $posting->gambar = $foto;
        $posting->save();

        return redirect('/komunitas/posting');
    }

    public function data_posting()
    {
        $posting = Postingan::where('komunitas_id', '=', auth()->user()->id)->get();
        return view('Data_Postingan_Komunitas', compact('posting'));
    }

    public function detail($id)
    {
        $posting = Postingan::find($id);
        return view('Detail_Postingan', compact('posting'));

    }

    public function konfirmasi($id)
    {
        $posting = Postingan::find($id);

        $posting->status = "Terkonfirmasi";
        $posting->save();

        return back();
    }

    public function delete($id)
    {
        $posting = Postingan::find($id);

        $posting->delete();

        return back();
    }
}
