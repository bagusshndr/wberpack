<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:image" content="https://industry.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico" type="image/x-icon"'); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png"'); ?>">
	
	<!-- PAGE TITLE HERE -->
	<title>Wberpack</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
		<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins.css"'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/skin/skin-1.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/templete.css'); ?>">
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
	</style>
	
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/revolution/revolution/css/revolution.min.css'); ?>">
	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header mo-left header">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion logo-dark">
						<a href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
						</div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header d-md-block d-lg-none">
							<a href="index.html"><img src="<?php echo base_url('assets/logo.png'); ?>" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<!-- <li class="active has-mega-menu"> <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a> -->
                            <li><a href="<?php echo site_url('Welcome/Index'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('Welcome/VAbout'); ?>">About Us</a></li>
							<li>
								<a href="javascript:;">Products<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu tab-content">
								<?php
            					if (!empty($DataKategori)) {
            					  foreach ($DataKategori as $ReadDS) {
            					?>
            					    <li><a href="<?php echo site_url('Welcome/VProduct?kd_kategori=' . $ReadDS->kd_kategori); ?>"><?php echo $ReadDS->nama_kategori; ?></a></li>
            					<?php
            					  }
            					}
            					?>
									<!-- <li>
										<a href="javascript:;">Header Light <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="header-style-1.html">Header 1</a></li>
											<li><a href="header-style-2.html">Header 2</a></li>
											<li><a href="header-style-3.html">Header 3</a></li>
											<li><a href="header-style-4.html">Header 4</a></li>
											<li><a href="header-style-5.html">Header 5</a></li>
											<li><a href="header-style-6.html">Header 6</a></li>
										</ul>
									</li> -->
								</ul>
							</li>
                            <li><a href="index.html">Contact Us</a></li>
						</ul>		
						<div class="dlab-social-icon">
							<ul>
								<li><a class="site-button facebook circle-sm outline fa fa-facebook" href="javascript:void(0);"></a></li>
								<li><a class="site-button twitter circle-sm outline fa fa-twitter" href="javascript:void(0);"></a></li>
								<li><a class="site-button linkedin circle-sm outline fa fa-linkedin" href="javascript:void(0);"></a></li>
								<li><a class="site-button instagram circle-sm outline fa fa-instagram" href="javascript:void(0);"></a></li>
							</ul>
						</div>
					</div>
				 </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <?php
  $this->load->view($content);
  ?>
    </div>
    <!-- Content END-->
    <!-- Footer -->

	<!-- Footer -->
  <footer class="site-footer footer-full">
	<div class="dlab-newsletter">
		<div class="container">
			<div class="ft-contact wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
				<div class="ft-contact-bx">
					<img src="<?php echo base_url('assets/images/icon/icon1.png'); ?>" alt=""/>
					<h4 class="title">Address</h4>
					<p>Jl. L. Sukami No 111 Kp. Jati Pondok RT 03/ RW 05 , Ds. Tonjong Kec. Tajur Halang
						Kab. Bogor - Jawa Barat 16320</p>
				</div>
				<div class="ft-contact-bx">
					<img src="<?php echo base_url('assets/images/icon/icon2.png'); ?>" alt=""/>
					<h4 class="title">Phone</h4>
					<p>(021) 8587897
					</p>
				</div>
				<div class="ft-contact-bx">
					<img src="<?php echo base_url('assets/images/icon/icon3.png'); ?>" alt=""/>
					<h4 class="title">Email Contact</h4>
					<p> sales@wberpack.com</p>
				</div>
			</div>
		</div>
	</div>
	<div class="p-tb60 bg-black">
	  <div class="container">
		<div class="row">
		  <div class="col-md-6 text-md-left text-center footer-logo">
			<img src="<?php echo base_url('assets/logo-white.png'); ?>" alt="" width="100">
			<p class="m-b0 m-t10">Copyright © 2017 DexignZone</p>
		  </div>
		  <div class="col-md-6 text-md-right text-center">
			<div class="widget-link "> 
			  <ul>
				<li><a href="index.html">Home</a></li> 
				<li><a href="about-2.html">About us</a></li> 
				<li><a href="help-desk.html">Help Desk</a></li> 
				<li><a href="privacy-policy.html">Privacy Policy</a></li> 
				<li><a href="contact-1.html">Contact Us</a></li> 
			  </ul>
			</div>
			<ul class="list-inline m-b0 m-t10">
			  <li><a href="javascript:void(0);" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="javascript:void(0);" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
			  <li><a href="javascript:void(0);" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
			  <li><a href="javascript:void(0);" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
			  <li><a href="javascript:void(0);" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
  </footer>
  <!-- Footer END -->
  
  
    <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/wow/wow.js'); ?>"></script><!-- WOW JS -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js'); ?>"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo base_url('assets/plugins/bootstrap-select/bootstrap-select.min.js'); ?>"></script><!-- FORM JS -->
<script src="<?php echo base_url('assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js'); ?>"></script><!-- FORM JS -->
<script src="<?php echo base_url('assets/plugins/magnific-popup/magnific-popup.js'); ?>"></script><!-- MAGNIFIC POPUP JS -->
<script src="<?php echo base_url('assets/plugins/counter/waypoints-min.js'); ?>"></script><!-- WAYPOINTS JS -->
<script src="<?php echo base_url('assets/plugins/counter/counterup.min.js'); ?>"></script><!-- COUNTERUP JS -->
<script src="<?php echo base_url('assets/plugins/imagesloaded/imagesloaded.js'); ?>"></script><!-- IMAGESLOADED -->
<script src="<?php echo base_url('assets/plugins/masonry/masonry-3.1.4.js'); ?>"></script><!-- MASONRY -->
<script src="<?php echo base_url('assets/plugins/masonry/masonry.filter.js'); ?>"></script><!-- MASONRY -->
<script src="<?php echo base_url('assets/plugins/owl-carousel/owl.carousel.js'); ?>"></script><!-- OWL SLIDER -->
<script src="<?php echo base_url('assets/plugins/lightgallery/js/lightgallery-all.min.js'); ?>"></script><!-- Lightgallery -->
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?php echo base_url('assets/js/dz.carousel.min.js'); ?>"></script><!-- SORTCODE FUCTIONS  -->
<script src="<?php echo base_url('assets/plugins/countdown/jquery.countdown.js'); ?>"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="<?php echo base_url('assets/js/dz.ajax.js'); ?>"></script><!-- CONTACT JS  -->
<script src="<?php echo base_url('assets/plugins/rangeslider/rangeslider.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/jquery.lazy.min.js'); ?>"></script>
<!-- REVOLUTION JS FILES -->
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js'); ?>"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/rev.slider.js'); ?>"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_2();	
	$('.lazy').Lazy();
});	/*ready*/
</script>
</body>
</html>