<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function index()
    {
        // mengambil data dari table mutasi
        //$mutasi = DB::table('mutasi')->get();
        $mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.mutasi_idpegawai', '=', 'pegawai.pegawai_id')
        ->select('mutasi.*', 'pegawai.pegawai_nama')
        ->paginate(5) ;

        // mengirim data mutasi ke view index
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.mutasi_idpegawai', '=', 'pegawai.pegawai_id')
		->where('pegawai.pegawai_nama','like',"%".$cari."%")
        ->orWhere('mutasi.mutasi_departemen', 'like', "%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mutasi.index',['mutasi' => $mutasi]);

	}

    public function tambah()
    {

        // memanggil view tambah
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('mutasi.tambah', ['pegawai' => $pegawai]);
    }

    public function store(Request $request)
    {
        // insert data ke table mutasi
        DB::table('mutasi')->insert([
            'mutasi_idpegawai' => $request->idpegawai,
            'mutasi_departemen' => $request->departemen,
            'mutasi_subdepartemen' => $request->subdepartemen,
            'mutasi_mulaibertugas' => $request->mulaibertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }

    public function edit($id)
    {
        // mengambil data mutasi berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('mutasi_id', $id)->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        // passing data mutasi yang didapat ke view edit.blade.php
        return view('mutasi.edit', ['mutasi' => $mutasi, 'pegawai' => $pegawai]);
    }

    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        //$absen = DB::table('absen')->where('ID', $id)->get();
        $mutasi = DB::table('mutasi')
        ->where('mutasi_id', $id)
        ->join('pegawai', 'mutasi.mutasi_idpegawai', '=', 'pegawai.pegawai_id')
        ->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('mutasi.detail', ['mutasi' => $mutasi]);
    }

    public function update(Request $request)
    {
        // update data mutasi
        DB::table('mutasi')->where('mutasi_id', $request->id)->update([
            'mutasi_idpegawai' => $request->idpegawai,
            'mutasi_departemen' => $request->departemen,
            'mutasi_subdepartemen' => $request->subdepartemen,
            'mutasi_mulaibertugas' => $request->mulaibertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }

    public function hapus($id)
    {
        // menghapus data mutasi berdasarkan id yang dipilih
        DB::table('mutasi')->where('mutasi_id', $id)->delete();

        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
}
