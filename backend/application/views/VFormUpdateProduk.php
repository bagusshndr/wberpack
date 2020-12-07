 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<div class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1 class="m-0 text-dark">Edit Data Produk</h1>
 				</div>
 				<!-- <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Dashboard v1</li>
                     </ol>
                 </div>/.col -->
 			</div><!-- /.row -->
 		</div><!-- /.container-fluid -->
 	</div>
 	<!-- /.content-header -->

 	<!-- Main content -->
 	<section class="content">
 		<div class="container-fluid">
 			<!-- Small boxes (Stat box) -->
 			<div class="box">
 				<div class="box-header with-border">
 					<div class="row">
 						<div class="col-12">
 							<form action="<?php echo site_url('Welcome/UpdateDataProduk'); ?>" method="post" enctype="multipart/form-data">
 								<div class="box-body">
 									<div class="form-group">
 										<label>Jenis Produk</label>
 										<input type="hidden" name="kd_produk" class="form-control" value="<?php echo $detail['kd_produk']; ?>">

 										<select class="form-control" name="kd_jenis_produk" required>

 											<option selected disabled>Jenis Produk</option>
 											<?php
												foreach ($jenis_produk as $ReadDS) {
													if ($ReadDS->kd_jenis == $detail['kd_jenis_produk']) {
												?>
 													<option value="<?php echo $ReadDS->kd_jenis; ?>" selected><?php echo $ReadDS->jenis_produk; ?></option>
 												<?php } else { ?>
 													<option value="<?php echo $ReadDS->kd_jenis; ?>"><?php echo $ReadDS->jenis_produk; ?></option>
 											<?php
													}
												}
												?>
 										</select>
 									</div>
 									<div class="form-group">
 										<label>Nama Produk</label>
 										<input type="text" name="nama_produk" value="<?php echo $detail['nama_produk']; ?>" class="form-control" placeholder="Nama Produk" required>
 									</div>

 									<div class="form-group">
 										<label>Foto Sebelumnnya</label><br>
 										<img src="<?php echo base_url('upload/produk/') . $detail['foto']; ?>" width="200px" height="200px" style="border-radius: 100%;"><br>
 										<label for="exampleInputFile">Update Image Banner</label>
 										<input type="file" name="userfile" />
 										<!-- <p class="help-block">Example block-level help text here.</p> -->
 									</div>
 									<div class="form-group">
 										<label>Foto Sebelumnnya</label><br>
 										<?php
											$images = $detail['foto_detail'];
											if ($images != null) {
												$imageList = json_decode($images);
												foreach ($imageList as $image) {
													echo "<img src='$image' class='img-fluid mb-2' alt='white sample' />";
												}
											}
											//  

											?>
 										<!-- <p class="help-block">Example block-level help text here.</p> -->
 									</div>
 									<div>
 										<label>Upload Detail Image</label>
 										<input type="file" name="files[]" multiple><br>
 									</div>
 									<div class="box-body pad">
 										<label>Keterangan</label>
 										<textarea class="textarea" name="keterangan" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
										 <?php echo $detail['keterangan']; ?>
										</textarea>




 									</div>

 									<div class="form-group">
 										<button type="submit" class="btn btn-primary">Submit</button>
 									</div>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 	</section>
 </div>

 <script>
 	window.onload = function() {
 		/** Your code here. **/

 		if (localStorage.getItem("user_id") != null) {
 			var userID = document.getElementsByName("user_id");
 			var username = document.getElementsByName("userlogin");
 			for (var x = 0; x < userID.length; x++) // comparison should be "<" not "<="
 			{
 				userID[x].value = localStorage.getItem("user_id");
 			}

 			for (var x = 0; x < username.length; x++) // comparison should be "<" not "<="
 			{
 				username[x].value = localStorage.getItem("username");
 			}

 		}


 	}
 </script>