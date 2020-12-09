  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact section-bg">

  	<div class="container">
  		<div class="section-title">
  			<h2>Contact Us</h2>
  			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p> -->
  		</div>
  	</div>

  	<div class="col-lg-12 ">
  		<iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=PT%20Wahana%20Bermuda%20Nusantara%20(PT%20WBN)&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
  	</div>
  	<div class="container-fluid">

  		<div class="row">


  			<div class="row" data-aos="fade-up" data-aos-delay="200">
  				<div class="col-lg-6 d-flex align-items-stretch infos">
  					<div class="row">
  						<div class="col-lg-6 info d-flex flex-column align-items-stretch">
  							<i class="bx bx-map"></i>
  							<h4>Address</h4>
  							<p> Jl. Raya Mayor Oking Jaya Atmaja No.158, Cirimekar, Cibinong, Bogor, Jawa Barat 16918</p>
  						</div>
  						<div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
  							<a href="#"><i class="bx bx-phone"></i></a>
  							<a href="#">
  								<h4 style="color: black;">Call Us</h4>
  							</a>
  							<p>(021) 83714629</p>
  						</div>
  						<div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
  							<a href="#"> <i class="bx bx-envelope"></i></a>
  							<a href="mailto:bagussuhendri19@gmail.com">
  								<h4 style="color: black;">Email Us</h4>
  							</a>

  							</a>
  							<p>contact@example.com<br>info@example.com</p>
  						</div>
  						<div class="col-lg-6 info d-flex flex-column align-items-stretch">
  							<i class="bx bx-time-five"></i>
  							<h4>Working Hours</h4>
  							<p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
  						</div>
  					</div>

  				</div>

  				<div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
  					<form action="<?php echo site_url('Welcome/AddDataContact'); ?>" method="post" enctype="multipart/form-data" class="php-email-form" id="myForm">
  						<div class="form-row">
  							<!-- <div class="form-group ">
                                  <?php if (isset($success)) { ?>
                                      <label style="color: black;">Your message has been sent successfully. Our support team will get back to you.
                                      </label>
                                  <?php } ?>
                              </div> -->
  							<div class="col-md-6 form-group">
  								<label for="name">Your Name</label>
  								<input type="text" name="nama" class="form-control" id="nama" data-rule="required" data-msg="Please enter your name" />
  								<div class="validate"></div>
  							</div>
  							<div class="col-md-6 form-group">
  								<label for="email">Your Email</label>
  								<input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
  								<div class="validate"></div>
  							</div>
  						</div>
  						<div class="form-row">
  							<div class="col-md-6 form-group">
  								<label for="number">Your phone Number</label>
  								<input type="number" name="number" class="form-control" id="number" data-rule="required" data-msg="Please enter your number" />
  								<div class="validate"></div>
  							</div>
  							<div class="col-md-6 form-group">
  								<label for="perusahaan">Your Company</label>
  								<input type="text" class="form-control" name="perusahaan" id="perusahaan" data-rule="required" data-msg="Please enter a valid Company" />
  								<div class="validate"></div>
  							</div>
  						</div>
  						<div class="form-group">
  							<label for="subject">Subject</label>
  							<input type="text" class="form-control" name="subject" id="subject" data-rule="required" data-msg="Please enter at least 8 chars of subject" />
  							<div class="validate"></div>
  						</div>
  						<div class="form-group">
  							<label for="message">Message</label>
  							<textarea class="form-control" name="message" rows="8" id="message" data-rule="required" data-msg="Please write something for us"></textarea>
  							<div class="validate"></div>
  						</div>
  						<input type="hidden" class="form-control" name="status" id="status" value="Belum Dibalas" />
  						<!-- <div class="mb-3">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div> -->
  						<div class="text-center"><button id="loginbtn" type="submit" onclick="simpan()">Send Message</button></div>
  					</form>
  				</div>

  			</div>

  		</div>
  </section><!-- End Contact Us Section -->

  <script>
  	// $('#loginbtn').on('click', function(e) {
  	// 	e.preventDefault();

  	// 	// 	var x, text;

  	// 	// 	// Get the value of the input field with id="numb"
  	// 	// 	x = document.getElementById("nama").value;

  	// 	// 	// If x is Not a Number or less than one or greater than 10
  	// 	// 	if (isNaN(x) || x < 1 || x > 10) {
  	// 	// 		text = "Input not valid";
  	// 	// 	} else {
  	// 	// 		text = "Input OK";
  	// 	// 	}
  	// 	// 	document.getElementById("demo").innerHTML = text;
  	// 	// }
  	// });

  	function simpan() {

  		if (document.getElementById("nama").value != '' &&
  			document.getElementById("number").value != '' &&
  			document.getElementById("email").value != '' &&
  			document.getElementById("perusahaan").value != '' &&
  			document.getElementById("subject").value != '' &&
  			document.getElementById("message").value != '') {


  			var data = $('#myForm').serialize();
  			debugger
  			var base_url = '<?php echo base_url(); ?>'
  			$.ajax({
  				url: base_url + 'index.php/Welcome/AddDataContact',
  				type: 'POST',
  				data: data,
  				success: function(data) {

  					alert('Your message has been sent successfully. Our support team will get back to you.'); // here what you want to do with response
  					document.getElementById("nama").value = '';
  					document.getElementById("number").value = '';
  					document.getElementById("email").value = '';
  					document.getElementById("perusahaan").value = '';
  					document.getElementById("subject").value = '';
  					document.getElementById("message").value = '';
  				}

  			});
  			return false;
  		}


  	}
  </script>