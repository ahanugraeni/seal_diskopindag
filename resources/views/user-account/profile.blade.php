<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- sidebar -->
  <div class="row pt-5">
    <div class="col-3">
    <div class="container-fluid pt-5 ">
      <h1 class="pt-3 pb-3 fw-bold">PROFIL SAYA</h1>
       <ul class="sidebar rounded">
     
      <li><a href="/"><i class="bi bi-house me-3"></i>Beranda</a></li>
      <li><a href="profile"><i class="bi bi-person-circle me-3"></i>Profil Saya</a></li>
      <li><a href="history"><i class="bi bi-clock-history me-3"></i>Riwayat</a></li>
      <li><a href="/"> <i class="bi bi-box-arrow-right me-3"></i>Logout</a></li>
      <hr width="90%">
      </ul>
      </div>
    </div>
    

    <div class="col-8">
      <div class="container-fluid pt-5 ">
        <div class="row">
          <div class="col-1 me-5 pt-5">
          <img src="img/akun.jpg" alt="akun" width="80" class="rounded-circle mt-5">
          </div>
          <div class="col-10 pt-5">
          <h1 class="mt-5 fw-bold">Alex Benjamin</h1>
         <a href=""><p>Edit Foto Profil</p></a>
          </div>
        </div>
        <hr>

        <!-- form input -->
        <form  action="">
        <div class="row">
          <div class="col-6">
          <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Nama Depan</label>
              <input type="text" placeholder="Masukan Nama anda" class="form-control " id="exampleInputtext1">
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Alamat lengkap</label>
              <input type="text" placeholder="Masukan alamat anda" class="form-control " id="exampleInputtext1">
            </div>
            <div class="row">
              <div class="col-2">
              <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Tanggal</label>
              <input type="text" class="form-control " id="exampleInputtext1">
            </div>
              </div>
              <div class="col-2">
              <div class="mb-3">
              <label for="exampleInputtext1" class="form-label"> bulan </label>
              <input type="text"class="form-control " id="exampleInputtext1">
            </div>
              </div>
              <div class="col-3">
              <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Tahun</label>
              <input type="text" class="form-control " id="exampleInputtext1">
            </div>
              </div>
              <div class="col-5">
              <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Jenis kelamin</label>
              <select class="form-select" aria-label="Default select example">
              <option selected>Pilih Jenis kelamin</option>
              <option value="1">Laki-laki</option>
              <option value="2">Perempuan</option>
            </select>
            </div>
              </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label mb-2">Password</label>
                <input type="password" placeholder="Buat Password" class="form-control "
                  id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label mb-2">Konfirmasi Password</label>
                <input type="password" placeholder="Konfirmasi Password" class="form-control "
                  id="exampleInputPassword1">
              </div>

          </div>
         
            
          <div class="col-6">
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Nama Belakang</label>
              <input type="text" placeholder="Masukan nama anda" class="form-control " id="exampleInputtext1">
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Kota</label>
              <input type="text" placeholder="Masukan kota anda" class="form-control " id="exampleInputtext1">
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">Kontak / WhatsApp</label>
              <input type="text" placeholder="Masukan nomor Kontak / WhatsApp anda" class="form-control " id="exampleInputtext1">
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label mb-2">NIK</label>
              <input type="text" placeholder="Masukan nomor induk keluarga anda" class="form-control " id="exampleInputtext1">
          </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">E-Mail</label>
              <input type="text" placeholder="Masukan alamat E-mail anda" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-1">
            <a class="nav-link" href="profile"><button type="button" class="btn btn-outline-primary">Batal</button></a>
            </div>
            <div class="col">
            <a class="nav-link" href=""><button type="submit" id="login" class="btn">Simpan Perubahan</button></a>
            </div>
          </div>
        </div>
      </form>
       
      </div>
    </div>
  </div>
      


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>