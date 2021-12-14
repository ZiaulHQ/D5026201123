@extends('layout.happy')
@section('title', 'Pegawai')
@section('judulhalaman', 'Detail Pegawai Perusahaan')

@section('konten')
    <br>
    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)

            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />


            <label class="col-md-2 col-sm-4 control-label">Nama</label> {{ $p->pegawai_nama }} <br>
            <br />
            <label class="col-md-2 col-sm-4 control-label">Jabatan</label>{{ $p->pegawai_jabatan }} <br>
            <br />
            <label class="col-md-2 col-sm-4 control-label">Umur</label>{{ $p->pegawai_umur }} <br>
            <br />
            <label class="col-md-2 col-sm-4 control-label">Alamat</label>{{ $p->pegawai_alamat }} <br>
            <br />

    @endforeach
@endsection
