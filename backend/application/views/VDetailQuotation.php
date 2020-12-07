 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<div class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1 class="m-0 text-dark">Detail Quotation</h1>
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
 							<!-- <form action="<?php echo site_url('Welcome/UpdateDataProduk'); ?>" method="post" enctype="multipart/form-data"> -->
 							<div class="box-body">
 								<div class="form-group">
 									<label>nama</label>
 									<input type="text" name="nama" value="<?php echo $detail['nama']; ?>" class="form-control" disabled>
 								</div>

 								<div class="form-group">
 									<label>Perusahaan</label>
 									<input type="text" name="perusahaan" value="<?php echo $detail['perusahaan']; ?>" class="form-control" disabled>
 								</div>
 								<div class="form-group">
 									<label>email</label>
 									<input type="text" name="email" value="<?php echo $detail['email']; ?>" class="form-control" disabled>
 								</div>
 								<div class="form-group">
 									<label>Perusahaan</label>
 									<input type="text" name="number" value="<?php echo $detail['number']; ?>" class="form-control" disabled>
 								</div>
 								<div class="form-group">
 									<label>Perusahaan</label>
 									<input type="text" name="subject" value="<?php echo $detail['subject']; ?>" class="form-control" disabled>
 								</div>
 								<div class="box-body pad">
 									<label>Message</label>
 									<textarea class="textarea" name="message" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" readonly disabled>
										 <?php echo $detail['message']; ?>
										</textarea>




 								</div>
 								<div class="form-group">
 									<label>Status</label>
 									<input type="text" name="status" value="<?php echo $detail['status']; ?>" class="form-control" disabled>
 								</div>
 								<!-- <div class="form-group">
 									<button type="submit" class="btn btn-primary">Submit</button>
 								</div> -->
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