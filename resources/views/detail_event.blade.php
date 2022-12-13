@extends('partials.main')
@section("detail_event")
<!-- Detail Event -->  
<br>
  <header class="header home" id="beranda">
    <div class="container">
    <h1 class=" text-center text-primary">Detail Event</h1>

            <table>
            <td>
            <h3>Cara Menggunakan Google Meet Untuk Rapat</h3>
            <p> Google Meet adalah aplikasi rapat dalam jaringan (daring) yang bisa dilakukan oleh semua kalangan. Google Meet memberikan wadah untuk semua pengguna melakukan kegiatan yang berbentuk daring. Aplikasi ini membuat kegiatan terasa ringan dengan cukup melakukan kegiatan di depan layar. </p>
            <br>

            <row>
              <h4  class=" text-primary">Lokasi</h4>
              <p  class=" text-primary"> Aula Diskopindag Kota Malang</p>
            </row>

            <br>
              <h4  class="text-primary">Waktu</h4>
              <p  class="text-primary"> 25 Desember 2022</p>
            

            <div class="home-greetings__buttons">
              <a class="btn btn-primary me-3" href="/profile">Daftar</a>
            </div>
            </td>
            
            <td>
            <div class="gambar_event">
            <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" alt="" style="width: 80%; height: 80%">
            </div>
        </td>
        </table>
      </div>
    </div>

    <div class="overlay__wave">
        <svg viewBox="0 0 1440 135" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1440 0.844691V135H0V0.844691C238.272 55.7142 478.272 83.1489 720 83.1489C961.728 83.1489 1201.73 55.7142 1440 0.844691Z" fill="white"></path>
        </svg>
      </div>
  </header>
<br>
<br>
<!-- End Detail Event -->

  <div class="row gx-lg-5 justify-content-center align-items-center" style="padding: 120px; padding-bottom: 0px; padding-top: 0px;">
    <div class="col-lg-5">
     <img src="https://gmedia.net.id/upload/foto_artikel/20210705FkVktopple.jpg" class="card-img" alt="Kepala Dinas" id="kadisImg">
      </div>
        <div class="col-lg-7 col-xl-7">
          <h5 class="card-subtitle">Cara Menggunakan Goggle Meet</h5>
          <div class="card-body">
            <p class="card-text mb-4">
            Google Meet adalah aplikasi rapat dalam jaringan (daring) yang bisa dilakukan oleh semua kalangan. Google Meet memberikan wadah untuk semua pengguna melakukan kegiatan yang berbentuk daring. Aplikasi ini membuat kegiatan terasa ringan dengan cukup melakukan kegiatan di depan layar.
            </p>
      </div>
    </div>
  </div>

      <!-- Rincian Kegiatan -->
      <br>
      <br>
    
      <h4 class=" text-center text-primary">Rincian Kegiatan</h4>
      <p class= "text-center">Berikut rincian kegiatan yang dilakukan : </p>
    
      <div style="text-align: center; margin: 140px; margin-top:50px; margin-bottom:50px; background-color:#F6F6F6">
       <table>
          
          <p>Peserta melakukan <br> pendaftaran di website</p>
          <h4  class="text-center text-primary"> Validasi Peserta</h4>
          <hr> 

          <p>Peserta memindai kode QR  <br> sebelum masuk ke ruangan</p>
          <h4  class="text-center text-primary"> Presensi Peserta </h4>
          <hr>

          <p>Kegiatan dilaksanakan dan  <br> penyampaian materi pelatihan</p>
          <h4  class="text-center text-primary"> Pembukaan </h4>
          <hr>

          <p>Kegiatan ditutup dan  <br> peserta meninggalkan ruangan</p>
          <h4  class="text-center text-primary"> Penutupan </h4>
          <hr>
        </table>
      </div>

  </body>
</html>
@endsection
