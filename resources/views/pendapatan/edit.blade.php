@extends('layout.happy')
@section('title', 'Pegawai')
@section('judulhalaman', 'Edit Pendapatan Pegawai')

@section('konten')
    <br>
    <a href="/pendapatan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pendapatan as $p)
        <form action="/pendapatan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->ID }}"> <br />
            IDPegawai <input type="number" class="form-control" required="required" name="idpegawai"
                value="{{ $p->IDPegawai }}"> <br />

            Bulan <input type="number" class="form-control" required="required" name="bulan" value="{{ $p->Bulan }}">
            <br />

            Tahun <input type="number" class="form-control" required="required" name="tahun" value="{{ $p->Tahun }}">
            <br />

            Gaji <input type="number" class="form-control" required="required" name="gaji" value="{{ $p->Gaji }}">
            <br />

            Tunjangan <input type="number" class="form-control" required="required" name="tunjangan"
                value="{{ $p->Tunjangan }}"> <br />

            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </form>
    @endforeach
@endsection
