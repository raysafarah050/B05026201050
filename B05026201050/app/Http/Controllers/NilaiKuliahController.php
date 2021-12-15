<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilai kuliah
        //$nilaikuliah = DB::table('nilaikuliah')->get();

        $nilaikuliah = DB::table('nilaikuliah')->paginate(5) ;

        // mengirim data tumbuhan ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah');
    }

    // method untuk insert data ke table nilai kuliah
    public function store(Request $request)
    {
        // insert data ke table nilai kuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);
        // alihkan halaman ke halaman nilai kuliah
        return redirect('/nilaikuliah');
    }
}
