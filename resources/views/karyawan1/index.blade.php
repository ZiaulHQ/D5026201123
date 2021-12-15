@extends('layout.happy')
@section('title', 'Karyawan1')
@section('judulhalaman', 'Karyawan1')

@section('konten')
    <br>
    <a href="/karyawan1/tambah" class="btn btn-info"> + Tambah karyawan1</a>
    <br />
    <br />

    <table border="1">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan1 as $p)
            <tr>
                <td>{{ $p->NIP }}</td>
                <td>{{ $p->Nama }}</td>
                <td>{{ $p->Pangkat }}</td>
                <td>{{ number_format($p->Gaji) }} </td>
                <td>

                    <a href="/karyawan1/hapus/{{ $p->NIP }}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm" role="button">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $karyawan1->links() }}
@endsection
