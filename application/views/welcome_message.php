<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WBERPACK</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="/js/my.js"></script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #555;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      /* left: 20px; */
      width: 280px;
      float: left;
    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }
  </style>

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon1.png" rel="icon'); ?>">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png" rel="apple-touch-icon'); ?>">

  <!-- Google Fonts -->
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i'); ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet'); ?>">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css" rel="stylesheet'); ?>">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet'); ?>">
  <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css" rel="stylesheet'); ?>">
  <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet'); ?>">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css" rel="stylesheet'); ?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css" rel="stylesheet'); ?>">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Shuffle - v2.2.0
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<header id="header">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="index.html"><img src="<?php echo base_url('assets/img/team/logo.png'); ?>"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="<?php echo site_url('Welcome/Index'); ?>">Home</a></li>
        <li><a href="<?php echo site_url('Welcome/VAbout'); ?>">About Us</a></li>
        <li class="drop-down"><a href="">Product</a>
          <ul>
            <?php
            if (!empty($DataKategori)) {
              foreach ($DataKategori as $ReadDS) {
            ?>
                <li><a href="<?php echo site_url('Welcome/VProduct?kd_kategori=' . $ReadDS->kd_kategori); ?>"><?php echo $ReadDS->nama_kategori; ?></a></li>
            <?php
              }
            }
            ?>
            <!-- <li><a href="<?php echo site_url('Welcome/VProduct'); ?>">Honeycomb</a></li>
            <li><a href="<?php echo site_url('Welcome/VProduct'); ?>">Carton</a></li>
            <li><a href="<?php echo site_url('Welcome/VProduct'); ?>">Paper Pallet</a></li>
            <li><a href="<?php echo site_url('Welcome/VProduct'); ?>">Edge Protector</a></li> -->
          </ul>
        </li>
        <li><a href="<?php echo site_url('Welcome/VContact'); ?>">Contact Us</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->


<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <?php
          for ($i = 0; $i < count($slide); $i++) {
          ?>
            <div class="carousel-item <?php ($i == 0) ? print 'active' : print ''; ?>">
              <div class="carousel-background"><img src="<?= base_url('backend/upload/slide/' . $slide[$i]->foto); ?>" alt=""></div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown"><?= $slide[$i]->judul; ?></h2>
                  <p class="animate__animated animate__fadeInUp"><?= $slide[$i]->deskripsi; ?></p>
                  <a href="<?php echo site_url('Welcome/VAbout'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                </div>
              </div>
            </div>

          <?php

          }
          ?>

          <!-- Slide 2 -->
          <!-- <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url('assets/img/slide/4.jpg'); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">KAMI MENYEDIAKAN KEMASAN YANG ANDA BUTUHKAN</h2>
                <p class="animate__animated animate__fadeInUp">Kami menyediakan produk kemasan dengan layanan yang bermutu dan dapat diandalkan, yang dapat menjadi solusi pengemasan Anda</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div> -->

          <!-- Slide 3 -->
          <!-- <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets/img/slide/5.jpg'); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">TENTANG WBERPACK</h2>
                <p class="animate__animated animate__fadeInUp">Kami bergerak dibidang manufaktur dan distribusi produk. Kami memproduksi produk kemasan berbahan dasar kertas dengan jenis produk Paper Core,
                  Corrugated Carton, Honeycomb, Karton Box, Layer Bundar, Paper Core Tabung, Paper Pallet, dan Edge Protector </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div> -->

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <?php
  $this->load->view($content);
  ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>WberPack</h3>
            <p>
              Jl. Raya Mayor Oking Jaya Atmaja No.158, Cirimekar, Cibinong, Bogor, Jawa Barat 16918 <br><br>
              <strong>Phone:</strong> (021) 83714629<br>
              <strong>Email:</strong> info@wberpack.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4> -->


          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-sticky/jquery.sticky.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/waypoints/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/counterup/counterup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>