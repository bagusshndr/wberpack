 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<div class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1 class="m-0 text-dark">Edit Data Jenis Produk</h1>
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
 							<form action="<?php echo site_url('Welcome/UpdateDataJenisProduk'); ?>" method="post" enctype="multipart/form-data">
 								<div class="card-body">
 									<div class="form-group">
 										<label>Nama Produk</label>
 										<input type="hidden" name="kd_jenis" class="form-control" value="<?php echo $detail['kd_jenis']; ?>">
 										<input type="text" name="jenis_produk" value="<?php echo $detail['jenis_produk']; ?>" class="form-control" placeholder="Nama Produk" required>
 									</div>

 									<div class="form-group">
 										<label>Kategori</label>
 										<select class="form-control" name="kd_kategori" required>
 											<option selected disabled>Kategori</option>
 											<?php
												foreach ($nama_kategori as $ReadDS) {
													if ($ReadDS->kd_jenis == $detail['kd_jenis_produk']) {
												?>
 													<option value="<?php echo $ReadDS->kd_kategori; ?>" selected> <?php echo $ReadDS->nama_kategori; ?></option>
 												<?php } else {
													?>
 													<option value="<?php echo $ReadDS->kd_kategori; ?>"> <?php echo $ReadDS->nama_kategori; ?></option>
 											<?php
													}
												}
												?>
 										</select>
 									</div>

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