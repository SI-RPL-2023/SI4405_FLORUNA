<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function donate(Request $request)
    {
        $donasi = Donasi::find($request->donasi_id);
        $donasi->terkumpul = $donasi->terkumpul + $request->jumlah;
        $donasi->save();

        $transaksi = new Transaksi();
        $transaksi->user_id = auth()->user()->id;
        $transaksi->donasi_id = $donasi->id;
        $transaksi->donasi = $request->jumlah;
        $transaksi->pembayaran = $request->pembayaran;
        $transaksi->save();

        return back();
    }
}
