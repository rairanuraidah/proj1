@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <form action="{{ $action }}">
            <h4>Setting Profil</h4>
            <div class="mb-2">
                <label for="" class="form-label">Nis</label>
                <input type="text" name="nis" id="nis" class="form-control" value="{{ $nis }}" placeholder="Masukan Nis">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $nama }}" placeholder="Masukan Nama">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $ttl }}" placeholder="Masukan Tempat Tanggal Lahir">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Sekolah</label>
                <input type="text" name="sekolah" id="sekolah" class="form-control" value="{{ $sekolah }}" placeholder="Masukan Sekolah">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alamat }}" placeholder="Masukan Alamat">
            </div>
            {{-- <div class="mb-2">
                <label for="" class="form-label">Jenis Kelamin</label>
                <select name="" class="form-select">
                    <option value="{{ $jk }}">Pilih Jenis Kelamin</option>
                    <option value="">Laki-laki</option>
                    <option value="">Perempuan</option>
                </select>
            </div> --}}
            <div class="mb-2">
                <label for="" class="form-label">Foto</label>
                <img src="/storage/{{ $foto }}" alt="" width="200">
                <input type="file" name="foto" id="foto" class="form-control" value="foto">
            </div>
            <div>
                <label for="" class="form-label">About</label>
                <input type="text" name="about" id="about" class="form-control" value="{{ $about }}" placeholder="Masukan About">
            </div>
            <div class="mb-2">
                <input type="submit" value="Simpan" class="btn btn-primary form-control">
            </div>
        </form>
    </form>
</body>
</html>
@endsection