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

Route::get('tugas4', function () {
    return view('tugas4js') ;
});

Route::get('praktikum2', function () {
    return view('praktikum2') ;
});

Route::get('ets2021',"ViewController@showETS") ;

Route::get('tugasphp2021',"ViewController@tugasPHP") ;

/* contoh untuk penggunaan post
Route::get('greetings',"ViewController@showGreetings") ;
Route::post('sayhi',"ViewController@sayHi") ;
*/

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/detail/{id}','PegawaiController@view');


//route CRUD pendapatan
Route::get('/pendapatan','PendapatanController@home');

Route::get('/pendapatan/add','PendapatanController@add');

Route::post('/pendapatan/save','PendapatanController@save');

Route::get('/pendapatan/edit/{id}','PendapatanController@edit');

Route::post('/pendapatan/update','PendapatanController@update');

Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route Absen
Route::get('/absen','AbsenController@index');

Route::get('/absen/tambah','AbsenController@tambah');

Route::post('/absen/store','AbsenController@store');

Route::get('/absen/edit/{id}','AbsenController@edit');

Route::post('/absen/update','AbsenController@update');

Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route lipstick
Route::get('/lipstick','LipstickController@index');

Route::get('/lipstick/tambah','LipstickController@tambah');

Route::post('/lipstick/store','LipstickController@store');

Route::get('/lipstick/edit/{id}','LipstickController@edit');

Route::post('/lipstick/update','LipstickController@update');

Route::get('/lipstick/hapus/{id}','LipstickController@hapus');

Route::get('/lipstick/detail/{id}','LipstickController@view');

Route::get('/lipstick/cari','LipstickController@cari');

//route karyawan1
Route::get('/karyawan1','Karyawan1Controller@index');

Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');

Route::post('/karyawan1/store','Karyawan1Controller@store');

Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');
