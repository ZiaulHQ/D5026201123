<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        $karyawan1 = DB::table('karyawan1')->paginate(5);

        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }

    public function tambah()
    {
        return view('karyawan1.tambah');
    }

    public function store(Request $request)
    {
        DB::table('karyawan1')->insert([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji
        ]);
        return redirect('/karyawan1');
    }

    public function hapus($id)
    {
        DB::table('karyawan1')->where('NIP', $id)->delete();

        return redirect('/karyawan1');
    }
}
