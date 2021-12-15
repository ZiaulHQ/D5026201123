@extends('layout.happy')
@section('title', 'Karyawan1')
@section('judulhalaman', 'Tambah Karyawan1')

@section('konten')
    <br>
    <a href="/karyawan1" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan1/store" method="post">
        {{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <div class="col-sm-2 control-label"><b>NIP </b></div>
                        <div class="col-lg-1"><b>:<b></div>
                        <div class="col-sm-4 input-group date" id="nip">
                            <input type="number" class="form-control" name="nip" required="required"> <br />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <div class="col-sm-2 control-label"><b>Nama </b></div>
                        <div class="col-lg-1"><b>:<b></div>
                        <div class="col-sm-4 input-group date" id="nama">
                            <input type="text" class="form-control" name="nama" required="required"> <br />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <div class="col-sm-2 control-label"><b>Pangkat </b></div>
                        <div class="col-lg-1"><b>:<b></div>
                        <div class="col-sm-4 input-group date" id="pangkat">
                            <input type="text" class="form-control" name="pangkat" required="required"> <br />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <div class="col-sm-2 control-label"><b>Gaji </b></div>
                        <div class="col-lg-1"><b>:<b></div>
                        <div class="col-sm-4 input-group date" id="gaji">
                            <input type="number" class="form-control" name="gaji" required="required"> <br />
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
    </form>
@endsection
