@extends('layout.happy')
@section('title', 'Pegawai')
@section('judulhalaman', 'Tambah Pegawai Perusahaan')

@section('konten')
    <br>
    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        Nama <input type="text" class="form-control" name="nama" required="required"> <br />

        Jabatan <input type="text" class="form-control" name="jabatan" required="required"> <br />

        Umur <input type="number" class="form-control" name="umur" required="required"> <br />

        Alamat <textarea name="alamat" class="form-control" required="required"></textarea> <br />

        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
@endsection
