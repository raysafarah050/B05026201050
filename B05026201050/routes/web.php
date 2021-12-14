<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});
//ulangi cara diatas untuk tugas 4

Route::get('tugas4', function () {
    return view('tugas4web');
});

Route::get('praktikum2','ViewController@showPraktikum2');
Route::get('ETS','ViewController@showETS');
Route::get('inputform','ViewController@showForm');
Route::get('sumofsquares','ViewController@sumofSqs');
//ulangi cara ini untuk ETS dan tugas PHP
//2 versi = ada yg 2 file, ada yg 1
//bagi yang 2 file, harus membuat 2 route identifier

//pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');


//mutasi_tugasweek13
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');
Route::get('/mutasi/view/{id}','MutasiController@detail');

//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/view/{id}','AbsenController@detail');

//tumbuhan (praktikum)
Route::get('/tumbuhan','TumbuhanController@index');
Route::get('/tumbuhan/tambah','TumbuhanController@tambah');
Route::post('/tumbuhan/store','TumbuhanController@store');
Route::get('/tumbuhan/edit/{id}','TumbuhanController@edit');
Route::post('/tumbuhan/update','TumbuhanController@update');
Route::get('/tumbuhan/hapus/{id}','TumbuhanController@hapus');
Route::get('/tumbuhan/cari','TumbuhanController@cari');
Route::get('/tumbuhan/view/{id}','TumbuhanController@detail');
