@extends('layout.happy')
@section('title', 'Pendapatan')
@section('judulhalaman', 'Tambah Pendapatan Pegawai')

@section('konten')
    <br>
    <a href="/pendapatan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/pendapatan/save" method="post">
        {{ csrf_field() }}
        IDPegawai <input type="number" class="form-control" name="idpegawai" required="required"> <br />

        Bulan <input type="number" class="form-control" name="bulan" required="required"> <br />

        Tahun <input type="number" class="form-control" name="tahun" required="required"> <br />

        Gaji <input type="number" class="form-control" name="gaji" required="required"> <br />

        Tunjangan <input type="number" class="form-control" name="tunjangan" required="required"><br />

        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
@endsection
