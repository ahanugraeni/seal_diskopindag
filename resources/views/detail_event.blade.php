<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskopindag Kota Malang | Beranda</title>
  <link rel="icon" href="https://diskopindag.malangkota.go.id/image/site/1622779402_malkot_logo_32x32.png" sizes="32x32">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script type="text/javascript" src="diskopindag.css"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/tiny-slider.css">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/styles.min.css">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/boxicons.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- css  -->
  <link rel="stylesheet" href="css/style.css" />
  
  <!-- CDN Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
</head>

</head>

<body id="body" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="0" tabindex="0">

  <!-- Preloader-->
  <div id="preloader" class="preloader" style="opacity: 0; visibility: hidden;">
    <div class="preloader__inner">
      <div class="preloader__spinner"></div>
      <span class="preloader__text">Memuat...</span>
    </div>
  </div>

  @include('partials.navbar');

<!-- Detail Event -->   
<header class="py-5 mt-5">
  <div class="container pt-5">
    <h1 class="text-center mt-3 mb-5" >DETAIL EVENT</h1>
    <div class="row">
      <div class="col-6">
        <h1 class="fw-bold mb-3">Cara Menggunakan Google Meet Untuk Rapat </h1>
        <p>Google Meet adalah aplikasi rapat dalam jaringan (daring) yang bisa dilakukan oleh semua kalangan. Google Meet memberikan wadah untuk semua pengguna melakukan kegiatan yang berbentuk daring. Aplikasi ini membuat kegiatan terasa ringan dengan cukup melakukan kegiatan di depan layar. </p>
       <div class="row" id="dates" >
        <div class="col-4">
          <h4>Lokasi</h4>
          <p><i class="bi bi-geo-alt text-primary"></i>Aula Diskopindag Kota Malang</p>
            <a href="daftar-event"><button type="button" id="login" class="btn">Daftar</button></a>
        </div>
        <div class="col-8 ps-5">
        <h4>Tangggal Dan Waktu</h4>
          <p><i class="bi bi-calendar-event text-primary"></i>25 Desember 2022, 09-00 WIB-selesai</p>
        </div>
       </div>
      </div>
      <div class="col-6" >
        <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" alt="media" class="rounded mt-3" width="500">
      </div>
    </div>
  </div>
 </header>

 <!-- pemateri -->
 <section>
  <div class="container my-5 ">
  <div class="row">
    <div class="col-4">
      <img src="img/akun.jpg" class="rounded-circle" width="300" alt="mc">
    </div>
    <div class="col-8">
      <h1>Andre jahilani M.kom</h1>
      <p class="fst-italic mb-3 text-primary">CEO Makansehat.com</p>
      <p>Andre merupakan ahli di bidang ekonomi mulai dari tahun 2015 sampai saat ini, beliau memulai bisnis ditahun 2010 dan sudah memiliki 500 cabang FnB di seluruh Indonesia dengan menerapakan meet memakai GGmeet dengan efektif.</p>
      <p class="fw-bold">Folow</p>
      <p>
        <a href=""><i class="bi bi-twitter text-primary me-3"></i></a>
        <a href=""><i class="bi bi-linkedin text-primary me-3"></i></a>
        <a href=""><i class="bi bi-instagram text-primary me-3"></i></a>
        <a href=""><i class="bi bi-facebook text-primary me-3"></i></a>
      </p>
    </div>
  </div>
  </div>
 </section>

<!-- Rincian Kegiatan -->
<section>
  <div class="containers pt-5 ">
    <h4 class=" text-center ">Rincian Kegiatan</h4>
    <p class= "text-center my-5">Berikut rincian kegiatan yang dilakukan : </p>
    <table class="table table-light table-borderless rounded">
      <tr>
        <td class="ps-5" width="300px">Peserta melakukan pendaftaran di website</td>
        <td class="ps-5"><h3>Validasi Peserta</h3></td>
        <td><i class="bi bi-clock-fill text-primary"></i>07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Peserta memindai kode QR sebelum masuk ke ruangan </td>
        <td class="ps-5"><h3>Presensi Peserta</h3></td>
        <td><i class="bi bi-clock-fill text-primary"></i>07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Kegiatan dilaksanakan dan penyampaian materi pelatihan</td>
        <td class="ps-5"><h3>Pembukaan</h3></td>
        <td><i class="bi bi-clock-fill text-primary"></i>07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Kegiatan ditutup dan peserta meninggalkan ruangan</td>
        <td class="ps-5"><h3>Acara Inti</h3></td>
        <td><i class="bi bi-clock-fill text-primary"></i>07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Peserta melakukan pendaftaran di website</td>
        <td class="ps-5"><h3>Penutupan</h3></td>
        <td><i class="bi bi-clock-fill text-primary"></i>07.00 - 07.30 WIB</td>
      </tr>
    </table>
    
  </div>

</section>
     
</body>
<!-- Footer -->
<footer class="footer" id="kontak">
    <div class="container">
        <div class="col-lg-5">
            <p class="footer__desc">
              Dinas Koperasi, Perindustrian dan Perdagangan merupakan lembaga bertipe A yang menyelenggarakan urusan pemerintahan bidang koperasi, bidang perindustrian, bidang usaha mikro, dan bidang perdagangan.
            </p>

            <ul class="footer__contact">
              <li>
              <i class="bi bi-geo-alt-fill"></i>
                <span>
                Jl. Simpang Terusan Danau Sentani No.3 Malang 65138
                </span>
              </li>
              <li>
              <i class="bi bi-envelope-at-fill"></i>
                <span>
                diskopindag.kotamalang@gmail.com
                </span>
              </li>
              <li>
              <i class="bi bi-telephone-fill"></i>
                <span>
                (0341) 716546
                </span>
              </li>
            </ul>

            <p class="footer__copy">
            <i class="bi bi-c-circle"></i>
              copyright 2021 - Diskopindag Malang
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
</html>
