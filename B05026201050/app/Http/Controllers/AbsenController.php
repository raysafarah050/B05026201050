<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$absen = DB::table('absen')->get();
        $absen = DB::table('absen')
       ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
       ->select('absen.*', 'pegawai.pegawai_nama')
       ->paginate(5) ;

        // mengirim data pegawai ke view index
        return view('absen.index', ['absen' => $absen]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$absen = DB::table('absen')
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
		->where('pegawai.pegawai_nama','like',"%".$cari."%")
        ->orWhere('absen.Tanggal','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('absen.index',['absen' => $absen]);

	}

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        return view('absen.tambah', ['pegawai' => $pegawai]);
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        //DB::table()->insert();
        // insert data ke table pegawai
        DB::table('absen')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('ID', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $judul = "Haloo Apa Kabar";

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.edit', ['absen' => $absen, 'pegawai' => $pegawai, 'judul' => $judul]);
    }

    //method untuk melihat data detail pegawai
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        //$absen = DB::table('absen')->where('ID', $id)->get();
        $absen = DB::table('absen')
        ->where('ID', $id)
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.detail', ['absen' => $absen]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('absen')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('absen')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }
}
