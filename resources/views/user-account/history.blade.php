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
  <div class="row">
    <div class="col-3">
    <div class="container-fluid pt-5 ">
      <h1 class="py-3 fw-bold">PROFIL SAYA</h1>
       <ul class="sidebar rounded">
     
      <li><a href="/"><i class="bi bi-house me-3"></i>Beranda</a></li>
      <li><a href="profile"><i class="bi bi-person-circle me-3"></i>Profil Saya</a></li>
      <li><a href="history"><i class="bi bi-clock-history me-3"></i>Riwayat</a></li>
      <li><a href="/"> <i class="bi bi-box-arrow-right me-3"></i>Logout</a></li>
      <hr width="90%">
      </ul>
      </div>
    </div>
    

    <div class="col">
      <div class="container-fluid pt-5 ">
        <div class="row">
          <div class="col-1 me-5 pt-5">
          <img src="img/akun.jpg" alt="akun" width="80" class="rounded-circle mt-5">
          </div>
          <div class="col-10 pt-5">
          <h3 class="mt-5 fw-bold">Alex Benjamin</h3>
         <p>benjaminclay44@gmail.com</p>
          </div>
        </div>
        <hr>
        <div class="filter py-5">
        <button type="submit" id="login" class="btn position-absolute end-0 fs-5"><i class="bi bi-sliders2-vertical me-2"></i>Filter</button>
        </div>
        <table class="table table-borderless">
            <tr align="center">
                <th><h4>Tanggal</h4></th>
                <th width="500px"><h4>Event</h4></th>
                <th><h4>Status</h4></th>
                <th><h4 class="pe-5">Lokasi</h4></th>
            </tr>
            <tr>
                <td class="pt-5">
                    <h2>14</h2>
                    <p>desember senin</p>
                </td class="pt-5">
                <td class="pt-5">
                <div class="row">
                    <div class="col-6 col-sm-3 me-2"><img src="" alt="img" width="120"></div>
                    <div class="col-6 col-sm-8">
                        <h4>Cara Menggunakan Google Meet Untuk Rapat </h4>
                        <p>Speaker</p>
                        <p>Andre jahilani M.kom</p>
                    </div>
                </div>
                </td class="pt-5">
                <td class="pt-5"><button type="button" class="btn btn-success" disabled>Diterima</button></td class="pt-5">
                <td class="pt-5"><p>Aula Diskopindag Kota Malang   </p></td class="pt-5">
            </tr>

            <tr>
                <td class="pt-5">
                    <h2>14</h2>
                    <p>desember senin</p>
                </td class="pt-5">
                <td class="pt-5">
                <div class="row">
                    <div class="col-6 col-sm-3 me-2"><img src="" alt="img" width="120"></div>
                    <div class="col-6 col-sm-8">
                        <h4>Cara Menggunakan Google Meet Untuk Rapat </h4>
                        <p>Speaker</p>
                        <p>Andre jahilani M.kom</p>
                    </div>
                </div>
                </td class="pt-5">
                <td class="pt-5"><button type="button" class="btn btn-success" disabled>Diterima</button></td class="pt-5">
                <td class="pt-5"><p>Aula Diskopindag Kota Malang   </p></td class="pt-5">
            </tr>
        </table>
      </div>
    </div>
  </div>
      


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h555rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>