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

   <!-- ======= Header ======= -->
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
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
               data-aos="fade-up" data-aos-delay="200">
               <h1>Daftar Buku</h1>
               <h2>Kami Memiliki Beberapa Daftar Buku yang Lumayan Komplit</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
               <img src="{{ asset('assets/assets/img/buku-1.png') }}" class="img-fluid animated" alt="">
            </div>
         </div>
      </div>

   </section><!-- End Hero -->

   <main id="main">
      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
         <div class="container" data-aos="fade-up">

            <div class="section-title">
               <h2>Daftar Buku</h2>
               <p>Berikut Adalah Berbagai Macam Buku Yang Ada Di Perpustakaan Kami</p>
            </div>

            <div class="row">
               <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                     <img
                        src="https://sahabatgemainsani.id/files/products/3079/Cover_WEB_Komik_Anak_Sehat_Hidup_Bersama_Dr_Dian.jpg"
                        class="card-img-top" alt="komik">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Anak Sehat, Hidup Sehat Bersama dr. Dian</h5>
                        <p class="card-text mt-3">Kalau tubuh kita sehat, nantinya ibadah, belajar, dan bermain jadi
                           lebih
                           semangat! Betul apa betul? Tapi, gimana ya caranya supaya anak bisa lebih peduli dengan
                           kesehatannya tanpa merasa dipaksa? 🤔

                           Komik Anak Sehat: Hidup Sehat Bersama dr. Dian bisa jadi solusi yang tepat untuk membantu si
                           kecil menerapkan hidup sehat dengan cara yang asyik! Dikemas dalam cerita komik yang seru dan
                           dekat dengan keseharian anak sehingga informasi yang disampaikan lebih ringan diterima.👍🏻
                        </p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                  data-aos-delay="200">
                  <div class="icon-box">
                     <img src="https://sahabatgemainsani.id/files/products/2736/Komik_Puber_Siapa_Takut.jpg"
                        class="card-img-top" alt="komik">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Puber Siapa Takut</h5>
                        <p class="card-text mt-3">Komik anak Komik Puber Siapa Takut menghadirkan kisah Ara dan Nizam
                           yang
                           sudah mulai beranjak dewasa. Ara dan Nizam. Di dalamnya membahas tentang tanda-tanda aqil
                           baligh, bagaimana cara menjaga suasana emosi, apa yang harus dilakukan oleh Muslim dan
                           Muslimah, bagaimana cara membersihkan najis saat sudah aqil baligh, hingga tips menjaga wajah
                           agar tetap sehat dan terawat.</p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                  data-aos-delay="300">
                  <div class="icon-box">
                     <img src="https://sahabatgemainsani.id/files/products/2400/Komik_Sirah_Rasul_Madinah.jpg"
                        class="card-img-top" alt="komik">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Sirah Rasulullah Periode Madinah</h5>
                        <p class="card-text mt-3">Komik anak Komik Sirah Rasulullah saw. Periode Madinah merupakan
                           komik
                           anak yang berisi kisah Nabi Muhammad saw. sejak hijrah ke Madinah hingga beliau wafat. Komik
                           ini juga menjelaskan sifat dan kepribadian Nabi Muhammad saw. .</p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                  data-aos-delay="400">
                  <div class="icon-box">
                     <img src="https://sahabatgemainsani.id/files/products/1637/Cerita_Si_Ayam.jpg"
                        class="card-img-top" alt="komik">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Cerita Si Ayam</h5>
                        <p class="card-text mt-3">Buku cerita anak tentang hewan ini adalah salah satu cara untuk
                           memperkenalkan sains tentang makhluk hidup pada anak. Membantu proses imajinasi dan
                           kreativitas sang anak agar peduli dengan apa yang ada di lingkungan sekitarnya dan
                           menumbuhkan rasa kasih sayang terhadap sesama makhluk hidup.

                           Gambar dan warna-warna yang menarik pada buku cerita anak bergambar dapat menarik
                           keingintahuan anak.</p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
               </div>
            </div>
            {{-- Batas Row --}}
            <div class="row mt-5">
               <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                     <img src="https://cdn.gramedia.com/uploads/items/9786020523316_Melangkah_UV_Spot_R4-1.jpg"
                        class="card-img-top" alt="novel">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Melangkah</h5>
                        <p class="card-text mt-3">
                        <p>Listrik padam di seluruh Jawa dan Bali secara misterius. Ancaman
                           nyata kekuatan baru yang hendak menaklukkan Nusantara.</p> <br>

                        <p>Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta
                           manusia ada di tangan mereka! Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan
                           berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi
                           bertopeng pahlawan yang punya rencana mengerikan.</p> <br>
                        </p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                  data-aos-delay="200">
                  <div class="icon-box">
                     <img src="https://cdn.gramedia.com/uploads/items/9789792281415_Gadis_Kretek_.jpg"
                        class="card-img-top" alt="novel">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Gadis Kretek</h5>
                        <p class="card-text mt-3">
                        <p>Pak Raja sekarat. Dalam menanti ajal, ia memanggil satu nama perempuan
                           yang bukan istrinya; Jeng Yah. Tiga anaknya, pewaris Kretek Djagad Raja, dimakan gundah. Sang
                           ibu pun terbakar cemburu terlebih karena permintaan terakhir suaminya ingin bertemu Jeng Yah.
                           Maka berpacu dengan malaikat maut, Lebas, Karim, dan Tegar, pergi ke pelosok Jawa untuk
                           mencari Jeng Yah, sebelum ajal menjemput sang Ayah.</p><br>

                        <p>Perjalanan itu bagai napak tilas bisnis dan rahasia keluarga. Lebas, Karim, dan Tegar bertemu
                           dengan pelinting tua dan menguak asal-usul Kretek Djagad Raja hingga menjadi kretek nomor 1
                           di Indonesia. Lebih dari itu, ketiganya juga mengetahui kisah cinta ayah mereka dengar; Jeng
                           Yah, yang ternyata adalah pemilik Kretek Gadis, kretek lokal Kota M yang terkenal pada
                           zamannya.</p>
                        </p>
                        <a href="{{ url('gadis_kretek') }}" class="stretched-link"></a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                  data-aos-delay="300">
                  <div class="icon-box">
                     <img src="https://cdn.gramedia.com/uploads/items/Atomic_Habits_C-FRONT_HC_-_Mockup.png"
                        class="card-img-top" alt="novel">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa
                        </h5>
                        <p class="card-text mt-3">Sebuah sistem revolusioner untuk menjadi 1 persen lebih baik setiap
                           hari.
                           Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun
                           pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain. Ia tahu
                           bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil—dari mengerjakan dua
                           push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon.
                           Ia menyebut semua tadi atomic habits. Dalam buku terobosan ini, Clear pada hakikatnya
                           mengungkapkan bagaimana perubahan perubahan sangat remeh ini dapat tumbuh menjadi hasil-hasil
                           yang sangat mengubah hidup. Ia menyingkap beberapa trik sederhana dalam hidup kita (seni
                           Menumpuk Kebiasaan yang terlupakan, kekuatan tak terduga Aturan Dua Menit, atau trik untuk
                           masuk ke dalam Zona Goldilocks),
                        </p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                  data-aos-delay="400">
                  <div class="icon-box">
                     <img src="https://cdn.gramedia.com/uploads/items/9786020638393.jpg" class="card-img-top"
                        alt="novel">
                     <div class="card-body">
                        <h5 class="card-title mt-2">Good Habits Bad Habits</h5>
                        <p class="card-text mt-3">
                        <p>Buku acuan tentang cara kita membentuk kebiasaan dan apa yang bisa
                           kita lakukan dengannya untuk membuat perubahan positif.</p><br>

                        <p>Kita menghabiskan 43% hari kita melakukan tindakan tanpa memikirkannya. Cara kita merespons
                           orang dan membawa diri dalam rapat, apa yang kita beli, serta kapan dan bagaimana kita
                           berolahraga, makan, dan minum—semua itu kita lakukan tanpa sadar sebagai hasil dari
                           kebiasaan. Namun, ketika ingin mengubah diri, kita berharap diri sadar kita, keteguhan dan
                           niat kita, cukup untuk menghasilkan perubahan yang positif. Itulah sebabnya, kita hampir
                           selalu gagal.</p> <br>
                        <p>Lalu bagaimana kalau kita bisa mengasah kekuatan luar biasa pikiran bawah sadar, yang sudah
                           menentukan begitu banyak tindakan kita, agar kita benar-benar mencapai sasaran yang kita
                           tetapkan? Berdasarkan penelitian selama tiga dekade, Wendy Wood menunjukkan—dari segi ilmiah
                           yang menarik—bagaimana kita membentuk kebiasaan dan menawarkan cara memanfaatkan kebiasaan
                           itu untuk melakukan perubahan.</p>
                        </p>
                        <a href="#" class="stretched-link"></a>
                     </div>
                  </div>
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
