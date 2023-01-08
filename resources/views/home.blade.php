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
<header class="header home p-5" id="beranda">
    <div class="container mb-5">
      <h1 class="event text-center p-5">Event Terbaru</h1>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
      <div style="background-image: url(https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg); height: 500px; width: 1250px; border-radius: 10px; padding:100px">
            <div class="container">
            <div class="card" style="width: 26rem; height: 18rem; ">
            <div class="card-body">
              <div class="slider text-primary">
                <i class="bi bi-calendar-event"></i> 25 Desember 2022<span id="tanggalwaktu"></span>
                <div class="card-body"><h5 class="card-title">Cara Mengguunakan Google Meet</h5>
                  <div class="home-greetings__buttons mt-3">
                  <div class="row" id="dates" >
                  <div class="col-4">
                  <h4>Lokasi</h4>
                  <p><i class="bi bi-geo-alt text-primary"></i>Aula Diskopindag Kota Malang</p>  
                  </div>

                  <div class="col-8 ps-5">
                  <h4>Tangggal Dan Waktu</h4>
                  <p><i class="bi bi-calendar-event text-primary"></i> 25 Desember 2022 <br> 09-00 WIB-selesai</p>
                  </div>
                  <a id="btn" class="nav-link" href="detail_event"><button type="button" class="btn btn-outline-primary">Daftar Event</button></a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</header>


 <!-- daftar event & galeri-->
 <section class="daftar-event m-5">
    <h1 class=" text-center">Daftar Event</h1>
    <div class="nav-list m-5">
      <nav class="mynav">
        <ul>
          <li><a href="">BISNIS</a></li>
          <li><a href="">TEKNOLOGI</a></li>
          <li><a href="">MARKETING</a></li>
          <li><a href="">PERTANIAN</a></li>
        </ul>
      </nav>
      <span class="target"></span>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="card-title">Event Malang Mbois </h5>  
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="card-title">Event Malang Mbois </h5>  
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            </div>
          </div>
        </div>
      </div>
  </section>

<!-- Galeri Event -->
<section class="daftar-event m-5">
  <h1 class=" text-center ">Galeri Event</h1>
   <div class="nav-list m-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
          <div class="card" style="width: 20rem; height: 25rem;">
            <img src="http://risetcdn.jatimtimes.com/images/2021/02/08/Eksplor-Skill-Pelaku-UMKM-di-Bidang-Kecantikan-Diskopindag-Kota-Malang-Gelar-Pelatihan-Make-Up281b09a8566def564.jpg" style="width: 318px; height: 286px;">
            <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="card-title">Event Malang Mbois </h5>  
          </div>
          </div>
        </div>

    
        <div class="col">
          <div class="card" style="width: 20rem; height: 25rem;">
            <img src="http://risetcdn.jatimtimes.com/images/2021/02/08/Eksplor-Skill-Pelaku-UMKM-di-Bidang-Kecantikan-Diskopindag-Kota-Malang-Gelar-Pelatihan-Make-Up281b09a8566def564.jpg" style="width: 318px; height: 286px;">
            <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="card-title">Event Malang Mbois </h5>  
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 20rem; height: 25rem;">
            <img src="http://risetcdn.jatimtimes.com/images/2021/02/08/Eksplor-Skill-Pelaku-UMKM-di-Bidang-Kecantikan-Diskopindag-Kota-Malang-Gelar-Pelatihan-Make-Up281b09a8566def564.jpg" style="width: 318px; height: 286px;">
            <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="card-title">Event Malang Mbois </h5>  
          </div>
          </div>
        </div>
    </div>
  </section>
    
  <!-- F&Q -->
  <div class="faq text-center pt-5">
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
    @include('partials.footer');
</html>