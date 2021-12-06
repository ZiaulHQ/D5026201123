@extends('layout.happy')
@section('title', 'Pegawai')
@section('judulhalaman', 'Edit Pegawai Perusahaan')

@section('konten')
    <br>
    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />


            Nama <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            <br />

            Jabatan <input type="text" class="form-control" required="required" name="jabatan"
                value="{{ $p->pegawai_jabatan }}"> <br />

            Umur <input type="number" class="form-control" required="required" name="umur"
                value="{{ $p->pegawai_umur }}"> <br />

            Alamat <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            <br />

            <input type="submit" class="btn btn-primary" value="Simpan Data">

        </form>
    @endforeach
@endsection
