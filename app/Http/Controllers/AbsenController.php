<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
    	// $absen = DB::table('absen')->get();
        $absen = DB::table('absen')
        ->join('pegawai', 'absen.ID', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(3);


    	// mengirim data absen ke view index
    	return view('absen.index',['absen' => $absen]);

    }

// method untuk menampilkan view form tambah absen
// method untuk menampilkan view form tambah absen
public function tambah()
{
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

	// memanggil view tambah
	return view('absen.tambah',['pegawai' => $pegawai]);

}

// method untuk insert data ke table absen
public function store(Request $request)
{
	// insert data ke table absen
	DB::table('absen')->insert([
		'IDPegawai' => $request->idpegawai,
		'Tanggal' => $request->tanggal,
		'Status' => $request->status
	]);
	// alihkan halaman ke halaman absen
	return redirect('/absen');

}

// method untuk edit data absen
public function edit($id)
{
	// mengambil data absen berdasarkan id yang dipilih
	$absen = DB::table('absen')->where('ID',$id)->get();

    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

    $status = "Sedang Mengedit" ;

	// passing data absen yang didapat ke view edit.blade.php
	return view('absen.edit',['absen' => $absen,'pegawai' => $pegawai,'status' => $status]);

}


// update data pegawai
public function update(Request $request)
{
	// update data absen
	DB::table('absen')->where('ID',$request->id)->update([
		'IDPegawai' => $request->idpegawai,
		'Tanggal' => $request->tanggal,
		'Status' => $request->status
	]);
	// alihkan halaman ke halaman awal
	return redirect('/absen');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('absen')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

}
