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
<!-- navbar -->
@include('partials.navbar');

<!-- slider -->
@include('partials.carousel');

 <!-- daftar event -->
@include('partials.daftar-event');

<!-- Galeri Event -->
<section class="daftar-event m-5">
  <h1 class=" text-center ">Galeri Event</h1>
   <div class="nav-list m-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg"class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
    
      <div class="col">
        <div class="card">
          <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- F&Q -->
  <div class="faq text-center pt-3">
    <h4 class="mb-5">APAKAH ADA YANG INGIN DITANYAKAN ?</h4>
    <h1 class="mb-5">Beberapa pertanyaan yang sering muncul  </h1>
    <h4 class="mt-5">Bagaimana cara mendaftar event ? 
      <hr class="mt-5">
    <h4 class="mt-5">Bagaimana cara mendaftar event ? 
      <hr class="mt-5">
    <h4 class="mt-5">Bagaimana cara mendaftar event ? 
      <hr class="mt-5">
  </div>

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