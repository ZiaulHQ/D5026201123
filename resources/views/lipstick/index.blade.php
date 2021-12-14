@extends('layout.happy')
@section('title', 'Lipstick')
@section('judulhalaman', 'Lipstick')

@section('konten')
    <br>
    <a href="/lipstick/tambah" class="btn btn-info"> + Tambah Lipstick</a>
    <br />
    <br />

    <p>Cari Merk Lipstick :</p>
    <form action="/lipstick/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Lipstick</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($lipstick as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->kodelipstick }}</td>
                <td>{{ $p->merklipstick }}</td>
                <td>{{ $p->stocklipstick }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>

                    <a href="/lipstick/detail/{{ $p->kodelipstick }}" class="btn btn-default btn-sm" role="button">View
                        Detail</a>

                    <a href="/lipstick/edit/{{ $p->kodelipstick }}" class="btn btn-default btn-sm" role="button">Edit</a>

                    <a href="/lipstick/hapus/{{ $p->kodelipstick }}" class="btn btn-default btn-sm" role="button">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $lipstick->links() }}
@endsection
