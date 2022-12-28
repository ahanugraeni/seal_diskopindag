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
@include('partials.navbar-login');

<!-- slider -->
@include('partials.carousel');

 <!-- daftar event & galeri-->
@include('partials.daftar-event');

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