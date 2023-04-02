 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Tambah User</h1>
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
               <form action="<?php echo site_url('Welcome/AddDataUser'); ?>" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                   <div class="form-group">
                     <label>Username</label>
                     <input type="text" class="form-control" name="username" placeholder="Username">
                   </div>
                   <!-- Password -->
                   <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                   </div>
                   <div class="form-group">
                     <label>Akses Level</label>
                     <div class="radio">
                       <label>
                         <input type="radio" value="User" name="acc_lvl" id="optionsRadios1" required>
                         User
                       </label>
                       <label>
                         <input type="radio" value="Admin" name="acc_lvl" id="optionsRadios1" required>
                         Admin
                       </label>
                     </div>
                   </div>


                   <div class="form-group">
                     <label for="exampleInputFile">File input</label>
                     <input type="file" name="userfile" />
                     <!-- <p class="help-block">Example block-level help text here.</p> -->
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