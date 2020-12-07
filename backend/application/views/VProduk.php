 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<div class="content-header">
 		<div class="container-fluid">
 			<div class="col-sm-6">
 				<h1 class="m-0 text-dark">Data Produk</h1>
 			</div>
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
 							<div class="card-body">
 								<form id="form1" method="POST">
 									<div class="card-header">
 										<a href="<?php echo site_url('Welcome/VFormAddProduk'); ?>" class="btn btn-success">
 											Tambah data
 										</a>
 										<div class="card-tools">
 											<div class="input-group input-group-sm" style="width: 150px;">
 												<a href="#" class="btn btn-xs btn-danger">
 													Delete
 												</a>
 											</div>
 										</div>
 									</div>
 									<table class="table table-bordered table-striped">
 										<thead>
 											<tr>
 												<th><input type="checkbox" id="select-all" /></th>
 												<th>No</th>
 												<th>Jenis Produk</th>
 												<th>Nama Produk</th>
 												<th>Gambar Produk</th>

 												<th>Keterangan</th>
 												<th>Tools</th>

 											</tr>
 										</thead>
 										<tbody>
 											<?php
												if (!empty($DataProduk)) {
													foreach ($DataProduk as $index => $ReadDS) {
														$index = $index + 1;
												?>
 													<tr>
 														<td> <input type="checkbox" name="check" /></td>
 														<td><?php echo $index ?></td>
 														<td><?php echo $ReadDS->jenis_produk; ?></td>
 														<td><?php echo $ReadDS->nama_produk; ?></td>
 														<td><img width="50px" height="50px" src="<?php echo base_url('upload/produk/') . $ReadDS->foto; ?>"></td>
 														<td><?php echo $ReadDS->keterangan; ?></td>
 														<td>
 															<a href="<?php echo site_url('Welcome/DataProduk/' . $ReadDS->kd_produk . '/view'); ?>" class="btn btn-xs btn-info">
 																Edit
 															</a>
 															<a href="<?php echo site_url('Welcome/DeleteDataProduk/' . $ReadDS->kd_produk); ?>" class="btn btn-xs btn-danger">
 																Delete
 															</a>

 														</td>
 													</tr>
 											<?php
													}
												}
												?>

 										</tbody>
 									</table>
 								</form>
 							</div>
 							<!-- /.card-body -->
 						</div>
 						<!-- /.card -->
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
 			var username = document.getElementsByName("username");
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
 	$(document).ready(function() {
 		$("#form1 #select-all").click(function() {
 			$("#form1 input[type='checkbox']").prop('checked', this.checked);
 		});
 	});
 </script>