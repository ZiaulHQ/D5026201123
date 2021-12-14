@extends('layout.happy')
@section('title','Pegawai')
@section('judulhalaman', 'Pedapatan Pegawai')

@section('konten')
    <br>
	<a href="/pendapatan/add" class="btn btn-info"> + Tambah Data pendapatan</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}" class="btn btn-default btn-sm" role="button">Edit</a>

				<a href="/pendapatan/hapus/{{ $p->ID }}" class="btn btn-default btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
    </table>
    {{ $pendapatan->links()  }}
@endsection
