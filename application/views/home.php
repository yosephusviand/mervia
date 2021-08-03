<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mervia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/img/logomervia2.png" rel="icon" type="image/png">
  <!-- <link href="<?= base_url()?>assets/img/logomervia2.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= base_url()?>assets/img/mervia.jpg" >
        <!-- <img src="<?= base_url()?>assets/img/logomervia2.png" alt="" class="img-fluid rounded-circle"> -->
        <h1 class="text-light" style="font-size: 16px; text-align: center;">
          <a href="<?= base_url()?>welcome/index">Yosephus Wahyu Eko Novianto, S.Kom</a>
        </h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/yosephusviand" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/yosephusviand" class="facebook" target="_blank"><i class="bx bxl-facebook" target="_blank"></i></a>
          <a href="https://www.instagram.com/yosephusviand/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://api.whatsapp.com/send?phone=+6282320003832" class="whatsapp" target="_blank"><i class="bx bxl-whatsapp"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul >
          <li class="active"><a href="#hero"><i class="bx bx-home" style="font-size: 16px"></i> 
            <span style="font-size: 16px">Home</span></a>
          </li>
          <li> <a href="#about"><i class="bx bx-user" style="font-size: 16px"></i> 
            <span style="font-size: 16px">Tentang</span></a>
          </li>
          <li><a href="#kemampuan"><i class="bx bx-tachometer" style="font-size: 16px"></i> 
            <span style="font-size: 16px">Kemampuan</span></a>
          </li>
          <li><a href="#resume"><i class="bx bx-file-blank" style="font-size: 16px"></i>
           <span style="font-size: 16px">Pendidikan</span></a>
         </li>
         <li><a href="#portfolio"><i class="bx bx-book-content" style="font-size: 16px"></i>
           <span style="font-size: 16px">Portofolio</span></a>
         </li>
       </ul>
     </nav>
     <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

   </div>
 </header>

 <main id="main">
   <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1 style="font-size: 50px">Yosephus Wahyu Eko N, S.Kom</h1>
      <p>I'm <span class="typed" data-typed-items="Web Developer, DBA"></span></p>
    </div>
  </section>
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Tentang</h2>

      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="<?= base_url()?>assets/img/mervia.jpg" class="img-fluid" alt="" width="260">
        </div>
        <div class="col-lg-8 pt- pt-lg-0 content" >
          <h3 data-aos="fade-left" > Web Developer &amp; DBA.</h3>
          <?php 
          $umur = date('Y')-1993;
          ?>
          <div class="row">
            <div class="col-lg-12">
              <ul>
                <li data-aos="fade-left"><i class="icofont-rounded-right" ></i> <strong>Tanggal Lahir :</strong> 14 November 1993</li>
                <li data-aos="fade-right"><i class="icofont-rounded-right" ></i> <strong>Jenis Kelamin :</strong> Laki-laki</li>
                <li data-aos="fade-left"><i class="icofont-rounded-right" ></i> <strong>Hobi :</strong> Olahraga, Musik, Game</li>
                <li data-aos="fade-right"><i class="icofont-rounded-right" ></i> <strong>Website :</strong> www.mervia.my.id</li>
                <li data-aos="fade-left"><i class="icofont-rounded-right" ></i> <strong>Nomor HP :</strong> +62823-2000-3832</li>
                <li data-aos="fade-right"><i class="icofont-rounded-right" ></i> <strong>Alamat :</strong> Sudimoro 03/01 Kelor, Karangmojo, Gunungkidul, Yogyakarta</li>
                <li data-aos="fade-left"><i class="icofont-rounded-right" ></i> <strong>Usia :</strong> <?= $umur ?> </li>
                <li data-aos="fade-right"><i class="icofont-rounded-right" ></i> <strong>Pendidikan :</strong> Sarjana Komputer</li>
                <li data-aos="fade-left"><i class="icofont-rounded-right" ></i> <strong>Email :</strong> yosephus93@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section>
    <div class="container">

    </div>
  </section>

  <!-- ======= Facts Section ======= -->
    <!-- <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <section id="kemampuan" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kemampuan</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress" data-aos="fade-up">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-up">
              <span class="skill">Java <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-up">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-up">
              <span class="skill">JQuery <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress"  data-aos="fade-up">
              <span class="skill">Oracle <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-up">
              <span class="skill">Nginx <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-up">
              <span class="skill">Windows <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-down" data-aos-delay="100">

            <div class="progress" data-aos="fade-down">
              <span class="skill">PHP <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-down">
              <span class="skill">CodeIgniter <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-down">
              <span class="skill">Laravel <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-down">
              <span class="skill">CorelDraw <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-down">
              <span class="skill">PostgreSQL <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-down">
              <span class="skill">MySQL <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress" data-aos="fade-down">
              <span class="skill">Apache <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress" data-aos="fade-down">
              <span class="skill">Linux Ubuntu & CentOS <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>
    <section>
      <div class="container">

      </div>
    </section>
    <section>
      <div class="container">

      </div>
    </section>

    <section id="resume" class="resume">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="section-title">
              <h2>Formal</h2>
            </div>
            <div class="resume-item">
              <h4>Sarjana</h4>
              <h5>2013 - 2017</h5>
              <p><em>Universitas Sanata Dharma</em></p>
              <ul>
                <li>Teknik Informatika</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sekolah Menegah Kejuruan</h4>
              <h5>2010 - 2013</h5>
              <p><em>SMK Negeri 3 Wonosari</em></p>
              <ul>
                <li>Jurusan Elektronika Industri</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sekolah Menegah Pertama</h4>
              <h5>2007 - 2010</h5>
              <p><em>SMP Negeri 1 Ponjong</em></p>
            </div>
            <div class="resume-item">
              <h4>Sekolah Dasar</h4>
              <h5>2001 - 2007</h5>
              <p><em>SD Kanisius 2 Wonosari</em></p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="section-title">
              <h2>Non Formal</h2>
            </div>
            <div class="resume-item">
              <h4>Sub Karang Taruna</h4>
              <h5>2017 - Sekarang</h5>
              <p><em>Sudimoro, Kelor, Karangmojo, Gunungkidul, DIY</em></p>
              <ul>
                <li>Anggota</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Panitia Lomba Blog Nasional</h4>
              <h5>2013</h5>
              <p><em>Universitas Sanata Dharma</em></p>
              <ul>
                <li>Divisi Humas</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Panitia Festival Sanata Dharma</h4>
              <h5>2015</h5>
              <p><em>Universitas Sanata Dharma</em></p>
              <ul>
                <li>Divisi Lomba</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portofolio</h2>
          
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <!-- <li data-filter="*" class="filter-active">All</li> -->
              <!-- <li data-filter=".filter-app">App</li> -->
              <!-- <li data-filter=".filter-card">Card</li> -->
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/sipapah/login.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/sipapah/login.PNG" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url()?>welcome/detail" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/dashboard/home.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/dashboard/home.PNG" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url()?>welcome/dashboard" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/siip/login.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/siip/login.PNG" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url()?>welcome/siip" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/rest/rest.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/rest/rest.PNG" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url()?>welcome/rest" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/bpn/login.PNG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/bpn/login.PNG" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url()?>welcome/bpn" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/gaspol/homegaspol.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/gaspol/homegaspol.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url()?>welcome/gaspol" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

         <!--  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url()?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url()?>assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mervia 2020</span></strong>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>

  <script src="<?= base_url()?>assets/js/main.js"></script>

</body>

</html>