 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<div class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1 class="m-0 text-dark">Tambah Data Produk</h1>
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
 							<form action="<?php echo site_url('Welcome/AddDataProduk'); ?>" method="post" enctype="multipart/form-data">
 								<div class="form-group">
 									<label>Jenis Produk</label>
 									<select class="form-control" name="kd_jenis_produk" required>
 										<option selected disabled>Jenis Produk</option>
 										<?php
											foreach ($jenis_produk as $ReadDS) {
											?>
 											<option value="<?php echo $ReadDS->kd_jenis; ?>"><?php echo $ReadDS->jenis_produk; ?></option>
 										<?php
											}
											?>
 									</select>
 								</div>

 								<div class="form-group">
 									<label>Nama Produk</label>
 									<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
 								</div>

 								<div class="box-body pad">
 									<label>Keterangan</label>
 									<textarea class="textarea" name="keterangan" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

									</textarea>

 								</div>
 								<div>
 									<label>Upload Image</label>
 									<input type="file" name="userfile"><br>
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

 <!-- <script>
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
 </script> -->