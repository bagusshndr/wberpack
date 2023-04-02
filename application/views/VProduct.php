  <!-- ======= Our Portfolio Section ======= -->

  <section id="portfolio" class="portfolio section-bg">
      <div class="container">

          <div class="section-title">
              <h2>Our Product</h2>
              <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                        in iste officiis commodi quidem hic quas.</p> -->
          </div>

          <div class="row">

              <div class="col-lg-12 d-flex justify-content-center">

                  <?php if (count($DataJenis) > 0) {
                    ?>
                      <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active">All</li>
                          <?php
                            if (!empty($DataJenis)) {
                                foreach ($DataJenis as $ReadDS) {
                            ?>
                                  <li data-filter=".filter-app-<?php echo $ReadDS->kd_jenis; ?>"><?php echo $ReadDS->jenis_produk; ?></li>
                                  <!-- <li data-filter=".filter-card">Card</li> -->
                          <?php
                                }
                            }

                            ?>
                      </ul>
                  <?php } else {
                    ?>
                      <p style="font-size: 30px;">Product Not Found</p>
                  <?php } ?>
              </div>
          </div>

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
                                  <a href="<?php echo base_url('backend/upload/produk/') . $ReadDS->foto; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                  <a href="<?php echo site_url('Welcome/VProductDetail?id=' . $ReadDS->kd_produk); ?>" title="More Details"><i class="bx bx-link"></i></a>
                              </div>
                          </div>
                      </div>
              <?php
                    }
                }
                ?>

          </div>
      </div>

  </section>