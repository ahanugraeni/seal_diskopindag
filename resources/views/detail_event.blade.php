<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website resmi Dinas Koperasi, Perindustrian dan Perdagangan Kota Malang">
  <meta name="keywords" content="malang,dinas,koperasi,dagang,indsutri,diskopindag,perdagangan,pasar">
  <title>Diskopindag Kota Malang | Beranda</title>
  <link rel="icon" href="https://diskopindag.malangkota.go.id/image/site/1622779402_malkot_logo_32x32.png" sizes="32x32">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/tiny-slider.css">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/styles.min.css">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/boxicons.min.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- css  -->
  <link rel="stylesheet" href="css/style.css" />
  
  <!-- CDN Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
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
    <h3 class="text-center mt-3 mb-5" >DETAIL EVENT</h3>
    <div class="row">
      <div class="col-6">
        <h4 class="fw-bold mb-3">MGN Stage Malang </h4>
        <p> MGN Stage merupakan bagian dari rangkaian program kepemudaan yang diselenggarakan oleh Media Gorup Network dengan tujuan membangkitkan semangat para pemuda, khususnya dalam menghadapi disrupsi yang terjadi saat ini. "Kita harus siap dengan perubahan. Jangan pernah mengubah mimpinya. Tapi caranya yang diubah untuk selalu siap beradaptasi” </p>
       <div class="row" id="dates" >
        <div class="col-4">
          <h4>Lokasi</h4>
          <p><i class="bi bi-geo-alt text-primary"></i>Aula Diskopindag Kota Malang</p>
            <a href="/konfirmasi"><button type="button" id="login" class="btn">Daftar</button></a>
        </div>
        <div class="col-8 ps-5">
        <h4>Tangggal Dan Waktu</h4>
          <p><i class="bi bi-calendar-event text-primary"></i> 25 Desember 2022 <br> 09-00 WIB-selesai</p>
        </div>
       </div>
      </div>
      <div class="col-6" >
        <img src="https://i.ytimg.com/vi/65XYaODDPPU/maxresdefault.jpg" alt="media" class="rounded mt-3" width="500">
      </div>
    </div>
  </div>
 </header>

 <!-- pemateri -->
 <section>
  <div class="container my-5 ">
  <div class="row">
    <div class="col-4">
      <img src="https://cdn0-production-images-kly.akamaized.net/J1jZnbzsDAwv5Flgib8I09skwXk=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2992291/original/002285300_1575978620-20191210-Wali-Kota-Malang-SUTIAJI-5.jpg" class="rounded-circle" width="300" height="300" alt="mc">
    </div>
    <div class="col-8">
      <h3> Drs. H. Sutiaji </h3>
      <p class="fst-italic mb-3 text-primary"> Wali Kota Malang</p>
      <p>Sutiaji mengajak anak muda terus meningkatkan literasi serta berkarya. 
        Karena ini saatnya untuk menunjukkan aksi nyata bukan hanya sebuah ucapan. “Kita tunjukkan bahwa kita adalah orang yang berprestasi, kita berkarya yang membawa manfaat bagi bangsa. Pastikan kapasitas teknis diimbangi dengan kapasitas moral, integritas dan budaya. Karena integritas dan moral yang menguatkan kita.</p>
      <p class="fw-bold">Follow</p>
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
  <div class="containers pt-5 " style="margin-left:100px; margin-right:100px">
    <h4 class=" text-center ">Rincian Kegiatan</h4>
    <p class= "text-center my-5">Berikut rincian kegiatan yang dilakukan : </p>
    <table class="table table-light table-borderless rounded">
      <tr>
        <td class="ps-5" width="300px">Peserta melakukan pendaftaran di website</td>
        <td class="ps-5"><h5>Validasi Peserta</h5></td>
        <td><i class="bi bi-clock-fill text-primary"></i> 07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Peserta memindai kode QR sebelum masuk ke ruangan </td>
        <td class="ps-5"><h5>Presensi Peserta</h5></td>
        <td><i class="bi bi-clock-fill text-primary"></i> 07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Kegiatan dilaksanakan dan penyampaian materi pelatihan</td>
        <td class="ps-5"><h5>Pembukaan</h5></td>
        <td><i class="bi bi-clock-fill text-primary"></i> 07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Kegiatan ditutup dan peserta meninggalkan ruangan</td>
        <td class="ps-5"><h5>Acara Inti</h5></td>
        <td><i class="bi bi-clock-fill text-primary"></i> 07.00 - 07.30 WIB</td>
      </tr>
      <tr>
        <td class="ps-5">Peserta melakukan pendaftaran di website</td>
        <td class="ps-5"><h5>Penutupan</h5></td>
        <td><i class="bi bi-clock-fill text-primary"></i> 07.00 - 07.30 WIB</td>
      </tr>
    </table>
  </div>
</section>
     
</body>
 <!-- footer -->
 <footer class="footer" id="kontak">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="footer__about">
            <p class="footer__desc">
              Dinas Koperasi, Perindustrian dan Perdagangan merupakan lembaga bertipe A yang menyelenggarakan urusan pemerintahan bidang koperasi, bidang perindustrian, bidang usaha mikro, dan bidang perdagangan.
            </p>

            <ul class="footer__contact">
              <li>
                <span>
                Jl. Simpang Terusan Danau Sentani No.3 Malang 65138
                </span>
              </li>
              <li>
                <span>
                diskopindag.kotamalang@gmail.com
                </span>
              </li>
              <li>
                <span>
                (0341) 716546
                </span>
              </li>
            </ul>

            <p>
              <a href=""><i class="bi bi-twitter text-primary me-3"></i></a>
              <a href=""><i class="bi bi-linkedin text-primary me-3"></i></a>
              <a href=""><i class="bi bi-instagram text-primary me-3"></i></a>
              <a href=""><i class="bi bi-facebook text-primary me-3"></i></a>
            </p>

            <p class="footer__copy">
              copyright 2021 - Diskopindag Malang
            </p>
          </div>
        </div>
        <div class="col-lg-5 position-relative">
          <div class="footer__map">
            <div class="footer__divider"></div>
            <h1 class="footer__diskopindag-title">Lokasi Diskopindag Malang</h1>
            <div class="footer__diskopindag-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.260539779671!2d112.66837231474214!3d-7.972003094258327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628f700181a8d%3A0x65508a920d48e0da!2sDinas%20Koperasi%20Perindustrian%20dan%20Perdagangan%20Kota%20Malang!5e0!3m2!1sen!2sid!4v1622169972691!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</html>
