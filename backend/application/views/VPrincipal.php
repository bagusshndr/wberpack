 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="col-sm-6">
         <h1 class="m-0 text-dark">Data Principal</h1>
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
                 <div class="card-header">
                   <a href="<?php echo site_url('Welcome/VFormAddPrincipal'); ?>" class="btn btn-success">
                     Tambah data
                   </a>

                   <div class="card-tools">
                     <div class="input-group input-group-sm" style="width: 150px;">
                       <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                       <div class="input-group-append">
                         <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body table-responsive p-0" style="height: 300px;">
                   <table class="table table-head-fixed text-nowrap">
                     <thead>
                       <tr>
                         <th>Kode Principal</th>

                         <th>Gambar Principal</th>

                         <th>Tools</th>
                         <th>
                           &nbsp;
                         </th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php
                        if (!empty($DataPrincipal)) {
                          foreach ($DataPrincipal as $ReadDS) {
                        ?>
                           <tr>
                             <td><?php echo $ReadDS->kd_principal; ?></td>
                             <td><img width="50px" height="50px" src="<?php echo base_url('upload/principal/') . $ReadDS->foto; ?>"></td>
                             <td>
                               <a href="<?php echo site_url('Welcome/DataPrincipal/' . $ReadDS->kd_principal . '/view'); ?>" class="btn btn-xs btn-info">
                                 Edit
                               </a>
                               <a href="<?php echo site_url('Welcome/DeleteDataPrincipal/' . $ReadDS->kd_principal); ?>" class="btn btn-xs btn-danger">
                                 Delete
                               </a>

                             </td>
                           </tr>
                       <?php
                          }
                        } ?>

                     </tbody>
                   </table>
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