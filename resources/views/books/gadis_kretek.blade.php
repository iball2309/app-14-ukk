<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>The Library</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{ asset('assets/assets/img/ikon.png') }}" rel="icon">
   <link href="{{ asset('assets/assets/img/ikon.png') }}" rel="ikon">

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{ asset('assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
   <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

         <h1 class="logo me-auto"><a href="index.html">The Libraries</a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav id="navbar" class="navbar">
            <ul>
               <li><a class="nav-link scrollto active" href="/">Home</a></li>
               <li><a class="nav-link scrollto" href="{{ url('/') }}">About</a></li>
               <li><a class="nav-link scrollto" href="{{ url('/') }}">Services</a></li>
               {{-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> --}}
               {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
               <li class="dropdown"><a href="#"><span>Book</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                     <li><a href="{{ url('/book') }}">Lihat Semua Buku</a></li>
                     <li class="dropdown"><a href="#"><span>Kategori</span> <i
                              class="bi bi-chevron-right"></i></a>
                        <ul>
                           <li><a href="#">Komik</a></li>
                           <li><a href="#">Novel</a></li>
                           <li><a href="#">Koran</a></li>
                           <li><a href="#">Artikel</a></li>
                           <li><a href="#">Ensiklopedia</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li><a class="nav-link scrollto" href="#contact">Alamat</a></li>
               <li><a class="getstarted scrollto" href="{{ url('/login') }}">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

      </div>
   </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

      <div class="container">
         <div class="row">
            <div class="col d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
               style="text-align: center" data-aos="fade-up" data-aos-delay="200">
               <h1>Gadis Kretek</h1>
               <h2>Berikut adalah Synopsis Dari Gadis Kretek</h2>
            </div>
         </div>
      </div>

   </section><!-- End Hero -->
   <main id="main">
      <!-- ======= Services Section ======= -->
      <section id="about" class="about">
         <div class="container">
            <div class="text-center">
               <img src="https://cdn.gramedia.com/uploads/items/9789792281415_Gadis_Kretek_.jpg" width="400px"
                  height="400px" class="img-fluid" alt="gadis_kretek">
            </div>
            <hr>
            <b>Deskripsi Buku</b>
            <p>Soeraja yang sedang sakit keras sedang mengalami sekarat. Namun ada satu nama yang seringkali disebutnya,
               yaitu Jeng Yah. Nama ini membuat ketiga anaknya, Tegar, Karim, dan Lebas mengaduk-ngaduk kota di Jawa
               Tengah untuk mencari sosok Jeng Yah dan berusaha mempertemukan mereka. Anak-anak Soeraja benar-benar
               terkejut, selama pencarian berlangsung mereka semakin mengetahui sejarah berdirinya Pabrik Kretek Djagad
               Raja, milik ayah mereka (Penggabungan dari Soedjagad dan Soeraja yang adalah singkatan dari nama kakek
               dan ayah mereka yang diabadikan menjadi pabrik rokok).</p> <br>

            <p>Kisah pencarian mereka membawa kembali pada masa muda Soejagad dan Idroes Moeria, seorang rival sejak
               awal memulai karir mereka mendalami rokok kretek. Mereka merupakan pekerja di perusahaan rokok klobot
               milik Trisno. Penjajahan Jepang akhinya membuat bisnis Trisno bangkrut. Trisno menjual semua sisa harta
               dan bisnisnya. Idroes Moeria melihat peluang emas lalu membeli sisa tembakau Trisno dengan harga murah.
               Dengan sedikit pengetahuan selama mengikuti Trisno, Idroes memulai bisnis dengan menjual rokok klobot.
               Soejagad iri dengan keberhasilan Idroes. Dia juga mendirikan usaha rokok klobot sendiri. Sejak itulah
               mereka saling bersaing menjadi yang terbaik. Persaingan semakin memuncak ketika Soedjagad gagal melamar
               Roemaisa gara-gara dia tidak dapat membaca. Di lain pihak, Idroes berhasil mempersunting Roemaisa.</p>
            <br>
            <p>Soedjagad menikahi Lilis dan dikaruniai anak perempuan bernama Purwati. Sementara Idroes mempunyai anak
               bernama Dasiyah dan Rukayah. Dasiyah sangat berbakat menangani masalah kretek. Rokok buatannya selalu
               disukai ayahnya. Setiap hari, Dasiyah membersihkan noda-noda tembakau di tangannya saat melinting rokok,
               untuk dijadikan campuran rokok untuk ayahnya. Mula-mula jumlahnya banyak, tetapi kemudian Idroes heran,
               karena jumlah rokok yang dibuat Dasiyah berkurang. Suatu hari, Idroes tahu bahwa rokok jatahnya diberikan
               kepada seorang pemuda Soeraja. Ternyata Dasiyah jatuh cinta padanya.</p><br>
            <div class="row content">
               <div class="col">
                  <a href="{{ url('/book') }}" class="btn-learn-back">Kembali</a>
                  <a href="{{ url('/login') }}" class="btn-learn-more">Keranjang</a>
               </div>
            </div>

         </div>
      </section><!-- End Services Section -->
   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">




      <div class="container footer-bottom clearfix">
         <div class="copyright">
            &copy; Copyright <strong><span>The Libraries</span></strong>. All Rights Reserved
         </div>
         <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
         </div>
      </div>
   </footer><!-- End Footer -->

   <div id="preloader"></div>
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="{{ asset('assets/assets/vendor/aos/aos.js') }}"></script>
   <script src="{{ asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
   <script src="{{ asset('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
   <script src="{{ asset('assets/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
   <script src="{{ asset('assets/assets/vendor/php-email-form/validate.js') }}"></script>

   <!-- Template Main JS File -->
   <script src="{{ asset('assets/assets/js/main.js') }}"></script>

</body>

</html>
