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

Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
