@extends('layout.happy')
@section('title', 'Absen')
@section('judulhalaman', 'Absensi Pegawai')

@section('konten')
    <br />
    <a href="/absen/tambah" class="btn btn-info"> + Tambah Absen Baru</a>

    <br />
    <br />

    <table border="1">
        <tr>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($absen as $a)
            <tr>
                <td>{{ $a->pegawai_nama }}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status }}</td>
                <td>
                    <a href="/absen/edit/{{ $a->ID }}" class="btn btn-default btn-sm" role="button">Edit</a>

                    <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-default btn-sm" role="button">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $absen->links() }}

@endsection

</body>

</html>
