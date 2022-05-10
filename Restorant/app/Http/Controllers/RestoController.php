<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel mahasiswa
        $restorant= DB::table('restorant')->get();

        // mengirim ke halaman restorant untuk ditampilkan data
        return view('datarestorant',['restorant'=>$restorant]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('restorant')->insert([
            'jumlah_pelanggan' => $request->jumlah_pelanggan,
            'nama_pemesan' => $request->nama_pemesan,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'harga_total' => $request->harga_total,
            'jadwal_reservasi' => $request->jadwal_reservasi
        ]);

        return redirect('/tampildata');
    }

    public function edit($nama_pemesan)
    {
        #ambil data restorant berdasarkan nama_pemesan
        $restorant = DB::table('restorant')->where('nama_pemesan', $nama_pemesan)->get();

        #passing data
        return view('edit', ['restorant' => $restorant]);
    }

    public function update(Request $request)
    {
        DB::table('restorant')->where('nama_pemesan', $request->nama_pemesan)->update([
            'jumlah_pelanggan' => $request->nama,
            'nama_pemesan' => $request->nama_pemesan,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'harga_total' => $request->harga_total,
            'jadwal_reservasi' => $request->jadwal_reservasi
        ]);

        return redirect('/tampildata');
    }

    public function hapus($nama_pemesan)
    {
        DB::table('restorant')->where('nama_pemesan', $nama_pemesan)->delete();
        return redirect('/tampildata');
    }

}
