@extends('layout.happy')
@section('title', 'Pegawai')
@section('judulhalaman', 'Pegawai Perusahaan')

@section('konten')
    <br>
    <a href="/pegawai/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

    <br />
    <br />

    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>

                    <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View Detail</a>

                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">Edit</a>

                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links()  }}
@endsection
