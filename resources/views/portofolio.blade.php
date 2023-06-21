@extends('template')
@section('content')

<style type="text/css">
    .pagination li{
        float: left;
        list-style-type:none ;
        margin: 15px;
    }
</style>
{{-- <form action="{{ url('siswa/cari') }}" method="get">
    <input type="search" name="cari" id="cari" value="{{ $cari }}">
    <input type="submit" value="Cari">
</form> --}}
<a href="{{ url('portofolio/add') }}">Tambah Data</a>
<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    @foreach ($portofolio as $key => $item)
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $item->nama_portofolio}}</td>
            <td>{{ $item->kategori}}</td>
            <td>{{ $item->deskripsi}}</td>
            <td>
                <img src="/storage/{{ $item->gambar }}" alt="" width="100">
            </td>
            <td>
                <a href="/portofolio/hapus/{{ $item->id }}" onclick="return window.confirm('hapus data ini?')">Hapus</a>
                <a href="/portofolio/edit/{{ $item->id }}" >Edit</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection