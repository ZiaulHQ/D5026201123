@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'Edit Absensi Pegawai')

@section('konten')

    <br />
    <a href="/absen" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($absen as $a)
        <form action="/absen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->ID }}">
            <div class="container">

                <div class="row">
                    <div class='col-lg-9'>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-lg-1"><b>:<b></div>
                            <div class='col-sm-4 input-group date' id='nama'>
                                <select class="form-control" name="idpegawai">
                                    @foreach ($pegawai as $p)
                                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>
                                            {{ $p->pegawai_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class='col-lg-9'>
                        <div class="form-group">
                            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-lg-1"><b>:<b></div>
                            <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                                <input type='text' class="form-control" name="tanggal" required="required"
                                    value="{{ $a->Tanggal }}" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function() {
                            $('#dtpickerdemo').datetimepicker({
                                format: "YYYY-MM-DD hh:mm:ss",
                                "defaultDate": new Date(),
                                locale: "id"
                            });
                        });
                    </script>
                </div>
                <div class="row">
                    <div class='col-lg-9'>
                        <div class="form-group">
                            <div class="col-sm-2 control-label"><b>Status</b></div>
                            <div class="col-lg-1"><b>:<b></div>
                            <div class="col-sm-4 input-group date" id="status">
                                <input type="radio" id="h" name="status" value="H" @if ($a->Status === 'H') checked="checked" @endif>

                                <label for="h">HADIR</label><br>

                                <input type="radio" id="a" name="status" value="A" @if ($a->Status === 'A') checked="checked" @endif>

                                <label for="a">TIDAK HADIR</label><br>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </form>
    @endforeach

@endsection
