<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WBERPACK</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
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
            <h1 class="text-light"><a href="index.html"><img src="<?php echo base_url('assets/img/logo.png'); ?>"></a></h1>
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
                    </ul>
                </li>
                <li><a href="<?php echo site_url('Welcome/VContact'); ?>">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->


<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Product Detail</h2>
                <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol> -->
            </div>

        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <?php
                    $fotoDetails = json_decode($DetailProduk->foto_detail);
                    $fotoBanner = $DetailProduk->foto;
                    // echo $fotoBanner;
                    echo "<img src='$fotoBanner' style='width:900; height:600px;' alt=''>";
                    if ($fotoDetails !=''){
                        foreach ($fotoDetails as $fotoDetail) {

                            echo "<img src='$fotoDetail' style='width:900; height:600px;' alt=''>";
                        }
                    }
                    
                    ?>

                    <!-- <img src="<?php echo base_url('assets/img/slide/2.jpeg'); ?>" style="width:900; height:600px;" alt=""> -->
                    <!-- <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" style="width:900; height:500px;" alt=""> -->

                </div>

                <div class="portfolio-info">
                    <h3><?php echo $DetailProduk->nama_produk; ?></h3>
                    <ul>
                        <li><strong>Kategori </strong>: <?php echo $DetailKategori->nama_kategori; ?></li>
                        <li><strong>Jenis Produk </strong>: <?php echo $DetailProduk->jenis_produk; ?></li>
                        <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>This is an example of product detail</h2>
                <p>
                    <?php echo $DetailProduk->keterangan; ?>
                </p>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
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
                    <h4>Our Newsletter</h4>


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


</body>

</html>