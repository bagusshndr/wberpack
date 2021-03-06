<a href="https://api.whatsapp.com/send?phone=628111180699"><button class="open-button">Contact Now</button></a>
<!-- <button class="open-button" onclick="openForm()">Contact Now</button> -->
<div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
        <h3>Contact Now</h3>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b> Your Number</b></label>
        <input type="text" placeholder="Enter Your Number" name="psw" required>


        <div class="row">
            <div class="col-lg-6">
                <button type="submit" class="btn">Send</button>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </div>
        </div>
    </form>
</div>


<main id="main">


    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
            <div class="section-title">
                <h2>New Product</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->
            <div class="row portfolio-container">
                <?php
                if (!empty($DataProduk)) {
                    foreach ($DataProduk as $ReadDS) {
                ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app-<?php echo $ReadDS->kd_jenis_produk; ?>">

                    <div class="portfolio-wrap">

                        <img src="<?php echo $ReadDS->foto; ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo $ReadDS->nama_produk; ?></h4>
                            <p><?php echo $ReadDS->jenis_produk; ?></p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo base_url('backend/upload/produk/') . $ReadDS->foto; ?>"
                                data-gall="portfolioGallery" class="venobox"
                                title="<?php echo $ReadDS->nama_produk; ?>"><i class="bx bx-plus"></i></a>
                            <a href="<?php echo site_url('Welcome/VProductDetail?id=' . $ReadDS->kd_produk); ?>"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
            <!-- <div class="col-md-8 offset-md-2 text-center">
        <a href="product.php" class="btn btn-primary">View All</a>
      </div> -->
    </section><!-- End Our Portfolio Section -->

    <!-- <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg'); ?>" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->
    <!-- End Our Portfolio Section -->


    <!-- ======= Cta Section ======= -->
    <section class="cta">
        <div class="container">

            <div class="text-center">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est
                    laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>WberPack</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url('assets/img/1.jpg'); ?>"
                            alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h4 class="card-title text-center">Pengiriman Cepat</h4>
                            <p class="card-text">TESTING</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url('assets/img/1.jpg'); ?>"
                            alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h4 class="card-title text-center">Kualitas Terbaik</h4>
                            <p class="card-text">TESTING</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo base_url('assets/img/1.jpg'); ?>"
                            alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h4 class="card-title text-center">Harga Terjangkau</h4>
                            <p class="card-text">TESTING</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Our Services Section -->

</main><!-- End #main -->

<!-- ======= Clients Section ======= -->
<!-- <section id="clients" class="clients section-bg">
    <div class="container">

        <div class="row">
            <?php
            if (!empty($DataClient)) {
                foreach ($DataClient as $ReadDS) {
            ?>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                        <img src="<?php echo base_url('backend/upload/costumer/') . $ReadDS->foto; ?>" class="img-fluid" alt="">
                    </div>
            <?php
                }
            }
            ?>

        </div>


    </div>
</section> -->
<!-- <main id="main"> -->
<!-- End Clients Section -->

<!-- ======= Clients Section ======= -->
<!-- <section id="clients" class="clients section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Our Client</h2>
            <p>WberPack</p>
        </div>
        <div class="row">
            <?php
            if (!empty($DataClient)) {
                foreach ($DataClient as $ReadDS) {
            ?>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="<?php echo $ReadDS->foto; ?>" class="img-fluid" alt="">
            </div>
            <?php
                }
            }
            ?>

        </div>


    </div>
</section>
<main id="main"> -->
<!-- End Clients Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container">
        <h2 class="text-center">Our Client</h2>
        <section class="customer-logos slider">
            <?php
                if (!empty($DataClient)) {
                    foreach ($DataClient as $ReadDS) {
                ?>
            <div class="slide"> <img src="<?php echo $ReadDS->foto; ?>" class="img-fluid" alt=""></div>
            <?php
                    }
                }
                ?>
        </section>
    </div>
</section>
<!-- End Clients Section -->



<script>
$(document).ready(function() {
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>