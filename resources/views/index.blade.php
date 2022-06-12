<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TPQ Al-Hikmah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.5.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">TPQ Al-Hikmah</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim</a></li>
          <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
          @auth
            <li class="dropdown"><a href="#"><span>Halo, {{ auth()->user()->nama }}</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/dashboard-index">Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form id="form1" action="/logout" method="post">
                    @csrf
                    <a href="javascript:;" onclick="document.getElementById('form1').submit();">Logout</a>
                    <input type="hidden" name="mess" value="Logout">
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="dropdown"><a href="#"><span>Bergabung</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="register">Daftar</a></li>
                <li><a href="login">Login</a></li>
              </ul>
            </li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <br>
          <h1>Solusi yang Tepat untuk Generasi Anda</h1>
          <h2>Menyiapkan Generasi Muslim yang Beriman, Berakhlakul Karimah, dan Mecintai Al-Quran</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Mulai</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="img/hero-ngaji.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12">
            <p>
              Mengawali semester 3, <strong>TPQ AL-HIKMAH</strong> yang berlokasi di Universitas Airlangga Kampus C, Mulyorejo, Surabaya lahir dengan Metode Ummi dan sistem mutunya. Sebagai metode yang baru hadir di tengah–tengah banyaknya metode lain yang sudah ada, Metode Ummi mencoba mengambil positioning sebagai mitra terbaik sekolah atau lembaga pendidikan dalam menjamin kualitas baca Al-Quran santri. Diperkuat dengan diferensiasi sebagai metode yang mudah, cepat, dan berkualitas. Strategi yang digunakan agar <strong>TPQ AL-HIKMAH</strong> tumbuh cepat adalah dengan memberdayakan SDM daerah sehingga mereka bisa mengembangkan Metode Ummi di wilayah masing-masing. Sistem manajemen mutu terus dikembangkan agar terjaga kualitas proses dan produknya seiring dengan tumbuh pesatnya pengguna Metode Ummi.
            </p>
          </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Program Unggulan <strong>TPQ AL-HIKMAH</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Tahfiz Al-Quran Juz 30 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Memberikan bimbingan agar santri dapat menghafal dengan mudah surat-surat yang ada di Al-Quran, terutama Juz 30.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Metode Ummi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Direct method (langsung), repetition (diulang-ulang), dan affection (kasih sayang yang tulus).
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Mengaji Al-Quran dari Dasar <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Program yang cocok bagi santri yang baru memulai belajar mengaji.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Pembinaan Adab <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Pembinaan adab sesuai dengan Al-Quran dan As-Sunnah agar dapat diterapkan di kehidupan sehari-hari.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("img/hero-ngaji.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="img/skill-ngaji.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <br><br><br><br><br><br><br>
            <h3>Mengapa Harus di TPQ AL-HIKMAH?</h3>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Letak Strategis <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Layanan <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Fasilitas <i class="val">87%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Total Rating <i class="val">91%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fasilitas</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="" style="pointer-events: none">Tempat Bermain</a></h4>
              <p>Tempat bermain yang aman dan nyaman disertai dengan taman untuk melepaskan penat</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4><a href="" style="pointer-events: none">Perpustakaan</a></h4>
              <p>Tersedia lebih dari 5.000 buku untuk menambah wawasan tentang Islam</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-wifi"></i></div>
              <h4><a href="" style="pointer-events: none">Internet</a></h4>
              <p>Akses internet cepat untuk menunjang pembelajaran</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-building"></i></div>
              <h4><a href="" style="pointer-events: none">Fasilitas Lainnya</a></h4>
              <p>Dapatkan fasilitas menarik lainnya yang tersedia di <strong>TPQ AL-HIKMAH</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-12 text-center text-lg-start">
            <h3 class="text-center">خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ</h3>
            <br>
            <h3 class="text-center">"Sebaik-baik kalian adalah orang yang belajar Al-Quran dan mengajarkannya."</h3>
            <br><br>
            <h3  class="text-center"><strong>- HR. Bukhori -</strong></h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tim</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="img/team/Faisal.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Faisal Maulana</h4>
                <span>Chief Executive Officer - Back End</span>
                <p>Universitas Airlangga</p>
                <p>D3-Sistem Informasi | 152011513009</p>
                <div class="social">
                  <a href="https://www.instagram.com/_faisalmputra_" target="_blank"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="img/team/Agif.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Agiftsany Azhar</h4>
                <span>Product Manager - Front End</span>
                <p>Universitas Airlangga</p>
                <p>D3-Sistem Informasi | 152011513020</p>
                <div class="social">
                  <a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="https://www.instagram.com/agiftsanyazhar" target="_blank"><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/agiftsany-azhar-25418821a" target="_blank"><i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Donasi</h2>
          <p>Dengan berdonasi di <strong>TPQ AL-HIKMAH</strong> Anda membantu mendukung pengembangan <strong>TPQ AL-HIKMAH</strong>  di masa depan. Langganan membantu kami membayar server kami dan biaya operasional lainnya. Anda bebas membatalkan kapan saja jika perlu.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Gratis</h3>
              <h4><sup>Rp</sup>0<span>per bulan</span></h4>
              <a href="register" class="buy-btn">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Reguler</h3>
              <h4><sup>Rp</sup>500.000<span>per bulan</span></h4>
              <a href="register" class="buy-btn">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Seikhlasnya</h3>
              <h4><sup>Rp</sup>Bebas<span>per bulan</span></h4>
              <a href="register" class="buy-btn">Daftar</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah Belajar di <strong>TPQ AL-HIKMAH</strong> Gratis?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Ya, belajar di <strong>TPQ AL-HIKMAH</strong> tidak dipungut biaya apapun. Namun, Anda tetap dapat berdonasi untuk keperluan pengembangan kami.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa Saja Syarat Mendaftar di <strong>TPQ AL-HIKMAH</strong>?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Berusia minimal 5 tahun saat mendaftar, melengkapi administrasi pendaftaran sesuai ketentuan, dan siap mematuhi serta mengikuti aturan di <strong>TPQ AL-HIKMAH</strong>.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apa itu Metode Ummi?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Kata 'Ummi' berasal dari bahasa Arab 'Ummun' yang bermakna 'Ibuku' dengan penambahan 'Ya Mutakallim'. Pemilihan nama Ummi juga untuk menghormati dan mengingat jasa ibu. Tiada orang yang paling berjasa pada kita semua kecuali orang tua kita terutama ibu. Ibulah yang mengajarkan banyak hal pada kita dan orang yang sukses mengajarkan bahasa di dunia ini adalah ibu. Pendekatan yang digunakan dalam pembelajaran Al-Quran Metode Ummi adalah pendekatan bahasa ibu.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah Santri yang Tidak Bisa Membaca Al-Quran Boleh Mendaftar di <strong>TPQ AL-HIKMAH</strong>? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Jangan khawatir. Semua santri nantinya akan dibimbing oleh ustaz/ustazah profesional di bidangnya.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apakah Ada Program selain yang Disebutkan di Atas?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Ya, ada program lain. Nantinya semua santri akan mengikuti semua progragram yang ada di <strong>TPQ AL-HIKMAH</strong>.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hubungi Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Kampus C, Mulyorejo, Surabaya 60115</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>cs@tpq-alhikmah.my.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>0812-3456-7890</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7558000629956!2d112.78179431459495!3d-7.26860659475346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa21a3515291%3A0x3edf1522ff735924!2sUniversitas%20Airlangga%20-%20Kampus%20C!5e0!3m2!1sid!2sid!4v1634210807868!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan terkirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Berlangganan untuk Mendapatkan Berita Terbaru</h4>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Email"><input type="submit" value="Berlangganan">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>TPQ Al-Hikmah</h3>
            <p>
              Kampus C,<br>
              Mulyorejo, Surabaya 60115,<br>
              Indonesia<br><br>
              <strong>Telepon: </strong>0812-3456-7890<br>
              <strong>Email: </strong>cs@tpq-alhikmah.my.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="useful-links/terms-of-service">Terms of Service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="useful-links/privacy-policy">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Program</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="program/">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="program/">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="program/">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="program/">Marketing</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Media Sosial</h4>
            <div class="social-links mt-3">
              <a href="https://www.twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.skype.com" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>