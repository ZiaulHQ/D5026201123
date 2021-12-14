@extends('layout.happy')
@section('title', 'Lipstick')
@section('judulhalaman', 'Detail Lipstick')

@section('konten')
    <br>
    <a href="/lipstick" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($lipstick as $p)

            <input type="hidden" name="id" value="{{ $p->kodelipstick }}"> <br />


            <label class="col-md-2 col-sm-4 control-label">Merk</label> {{ $p->merklipstick }} <br>
            <br />
            <label class="col-md-2 col-sm-4 control-label">Stock</label>{{ $p->stocklipstick }} <br>
            <br />
            <label class="col-md-2 col-sm-4 control-label">Tersedia</label>{{ $p->tersedia }} <br>
            <br />

    @endforeach
@endsection
