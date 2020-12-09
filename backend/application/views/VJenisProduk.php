<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Data Jenis Produk</h1>
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
							<div class="card">
								<form id="form1" method="POST" action="<?php echo site_url('Welcome/DeleteDataJenisProduk'); ?>">
									<div class="row">
										<div class="card-header">
											<a href="<?php echo site_url('Welcome/VFormAddJenisProduk'); ?>" class="btn btn-success">
												Tambah data
											</a>
										</div>
									</div>
									<!-- /.card-header -->

									<table class="table table-head-fixed text-nowrap">
										<thead>
											<tr>
												<th><input type="checkbox" id="check-all" /> </th>
												<th>No</th>
												<th>Jenis Produk</th>
												<th>Kategori</th>
												<th>Tools</th>

											</tr>
										</thead>
										<tbody>

											<?php
											if (!empty($DataJenisProduk)) {
												foreach ($DataJenisProduk as $index => $ReadDS) {
													$index = $index + 1;
											?>

													<tr>
														<td> <input type="checkbox" name="kd_jenis[]" value=" <?php echo $ReadDS->kd_jenis; ?>" /></td>
														<td><?php echo $index; ?></td>
														<td><?php echo $ReadDS->jenis_produk; ?></td>
														<td><?php echo $ReadDS->nama_kategori; ?></td>
														<td>
															<a href="<?php echo site_url('Welcome/DataJenisProduk/' . $ReadDS->kd_jenis . '/view'); ?>" class="btn btn-xs btn-info">
																Edit
															</a>
															<!-- <a href="<?php echo site_url('Welcome/DeleteDataJenisProduk/' . $ReadDS->kd_jenis); ?>" class="btn btn-xs btn-danger">
																Delete
															</a> -->

														</td>
													</tr>
											<?php
												}
											} ?>

										</tbody>
									</table>
									<button type="button" id="btn-delete" class="btn btn-xs btn-danger">DELETE</button>
									<!-- /.card-body -->
							</div>
							</form>
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
		$("#form1 #check-all").click(function() {
			$("#form1 input[type='checkbox']").prop('checked', this.checked);
		});
	});
</script>
<Script>
	$(document).ready(function() { // When the page is ready (already loaded)
		$("#check-all").click(function() { // When the user checks the checkbox all
			if ($(this).is(":checked")) // If checkbox all is checked
				$(".check-item").prop("checked", true); // check all student checkboxes with "check-item" classes
			else // If checkbox all is not checked
				$(".check-item").prop("checked", false); // un-check all student checkboxes with "check-item" classes
		});

		$("#btn-delete").click(function() { // When the user clicks the delete button
			var confirm = window.confirm("Are you sure you want to delete these data?"); // Create a confirmation alert

			if (confirm) // If the user clicks the "Ok" button
				$("#form1").submit(); // Submit form
		});
	});
</script>
