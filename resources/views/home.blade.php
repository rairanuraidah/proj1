<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio | Raira Nuraidah</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial bold;
            background-color: rgba(246, 242, 235, 0.951);
        }
        .form-label>span{
          color: red;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(49, 44, 4, 0.615)">
  <div class="container">
    <a class="navbar-brand" href="#">Raira Nuraidah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}" aria-current="page" href="#profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::segment(1)=='about'?'active':'' }}" href="#about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }}" href="#portofolio">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::segment(1)=='contact'?'active':'' }}" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir navbar -->

<!-- Home -->

<section id="profil">
        <div class="container">
            <div class="p-5">
              <div class="row">
                <h1 class="text-center p-3">Profil</h1>
                <div class="col-md-6">
                  <img src="/storage/{{ $profil->foto}}" alt="" width="400" height="400">
                </div>
                <div class="col-md-6">
                  <div class="justify-content-center py-5">
                    <div class="p-5">
                      <div class="mb-3">  
                        <p class="fs-5">Nis :{{ $profil->nis }}</p>
                        <p class="fs-5">Nama :{{ $profil->nama }}</p>
                        <p class="fs-5">Tempat Tanggal Lahir :{{ $profil->ttl }}</p>
                        <p class="fs-5">Sekolah :{{ $profil->sekolah }}</p>
                        <p class="fs-5">Alamat :{{ $profil->alamat }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Home -->

<!-- About Me -->
<section id="about" class="pt-5">
  <div class="container">
    <div class="p-5 text-center ">
      <h3 class="fw-bold mb-3">About Me</h3>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <p>{{ $profil->about }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir About Me -->
<!-- section#home.pt-5>.container>.p-5.text-center>.fw-bold.mb-3{about me}>.col-md-4*2 -->
<!-- My Project -->
<section id="portofolio" class="pt-5">
  <div class="container">
    <div class="p-5 text-center">
      <h3 class="fw-bold mb-3">Portofolio</h3>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            @foreach ($portofolio as $item)
            <img src="/storage/{{ $item->gambar}}" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <p class="card-text">Nama Portofolio :{{ $item->nama_portofolio }}</p>
              <p class="card-text">Kategori :{{ $item->kategori }}</p>
              <p class="card-text">Deskripsi :{{ $item->deskripsi }}</p>
            </div>
          </div>
        </div>
       @endforeach
      </div>
    </div>
  </div>
</section>
<!-- Akhir My Project -->
<!-- Contact -->
<section id="contact">
  <div class="container p-5">
    <h3 class="fw-bold text-center mb-3">Contact</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Nama Lengkap <span>*</span></label>
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" >
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email <span>*</span></label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Pesan <span>*</span></label>
              <input type="text" name="pesan" id="pesan" class="form-control">
            </div>
            <div class="mb-3">
               <input type="submit" value="Kirim" class="btn btn-primary">
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Contact -->
<div class="container-fluid">
  <footer class="py-3 my-3 border-top">
    <p class="text-center">&copy;2023 <a href="" class="fw-bold text-decoration-none">Raira Nuraidah</a></p>
  </footer>
</div>
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>