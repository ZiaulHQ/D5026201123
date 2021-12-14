<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LipstickController extends Controller
{
    public function index()
    {
        $lipstick = DB::table('lipstick')->paginate(5);

        return view('lipstick.index', ['lipstick' => $lipstick]);
    }

    public function tambah()
    {
        return view('lipstick.tambah');
    }

    public function store(Request $request)
    {
        DB::table('lipstick')->insert([
            'merklipstick' => $request->merk,
            'stocklipstick' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/lipstick');
    }

    public function edit($id)
    {
        $lipstick = DB::table('lipstick')->where('kodelipstick', $id)->get();
        return view('lipstick.edit', ['lipstick' => $lipstick]);
    }

    public function view($id)
    {
        $lipstick = DB::table('lipstick')->where('kodelipstick', $id)->get();

        return view('lipstick.detail', ['lipstick' => $lipstick]);
    }

    public function update(Request $request)
    {
        DB::table('lipstick')->where('kodelipstick', $request->kode)->update([
            'merklipstick' => $request->merk,
            'stocklipstick' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/lipstick');
    }

    public function hapus($id)
    {
        DB::table('lipstick')->where('kodelipstick', $id)->delete();

        return redirect('/lipstick');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $lipstick = DB::table('lipstick')
            ->where('merklipstick', 'like', "%" . $cari . "%")
            ->paginate();

        return view('lipstick.index', ['lipstick' => $lipstick]);
    }
}
