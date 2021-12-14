@extends('layout.happy')
@section('title', 'Lipstick')
@section('judulhalaman', 'Edit Data Lipstick')

@section('konten')
    <br>
    <a href="/lipstick" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($lipstick as $p)
        <form action="/lipstick/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kode" value="{{ $p->kodelipstick }}">

            <div class="container">
                <div class="row">
                    <div class='col-lg-9'>
                        <div class="form-group">
                            <div class="col-sm-2 control-label"><b>Merk Lipstick </b></div>
                            <div class="col-lg-1"><b>:<b></div>
                            <div class="col-sm-4 input-group date" id="merk">
                                <input type="text" class="form-control" name="merk" required="required" value="{{ $p->merklipstick }}"> <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-9'>
                        <div class="form-group">
                            <div class="col-sm-2 control-label"><b>Stock </b></div>
                            <div class="col-lg-1"><b>:<b></div>
                            <div class="col-sm-4 input-group date" id="stock">
                                <input type="number" class="form-control" name="stock" required="required" value="{{ $p->stocklipstick }}"> <br />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class='col-lg-9'>
                        <div class="form-group">
                            <div class="col-sm-2 control-label"><b>Tersedia</b></div>
                            <div class="col-lg-1"><b>:<b></div>
                            <div class="col-sm-4 input-group date" id="tersedia">
                                <input type="radio" id="a" name="tersedia" value="A" @if ($p->tersedia === 'A') checked="checked" @endif>

                                <label for="a">Available</label><br>

                                <input type="radio" id="n" name="tersedia" value="N" @if ($p->tersedia === 'N') checked="checked" @endif>

                                <label for="n">Not Available</label><br>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </form>
    @endforeach
@endsection
