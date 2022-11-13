<?php include 'header.php'; ?>




<body id="page-top">


   <div id="wrapper">
      <!-- Sidebar -->
      <ul class="warna-navbar sidebar  navbar-nav">
         <li class="nav-item active">
            <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
            </a>
         </li>

         <li class="nav-item">
            <a class="nav-link" href="video-page.php">
               <i class="fas fa-fw fa-video"></i>
               <span>Video Page</span>
            </a>
         </li>

         <li class="nav-item">
            <a class="nav-link" href="upload-video.php">
               <i class="fas fa-fw fa-upload"></i>
               <span>Upload Video</span>
            </a>
         </li>

         

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="categories.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Categories</span>
            </a>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="categories.php">Movie</a>
               <a class="dropdown-item" href="categories.php">Music</a>
               <a class="dropdown-item" href="categories.php">Television</a>
            </div>
         </li>

         <li class="nav-item  channel-sidebar-list"></li>

         <li class="nav-item">
            <a class="nav-link " href="../../logout.php" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
         </li>


      </ul>

      <div id="content-wrapper">
         <div class="container-fluid upload-details">
            <div class="row">
               <div class="col-lg-12">
                  <div class="main-title">
                     <h6 class="text-white">My account</h6>
                  </div>
               </div>
            </div>
            <form action="proses/registerProses.php" method="post" enctype="multipart/form-data">
               <?php

               $email = $_SESSION['email'];
               //  echo $email;
               $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

               $users = mysqli_fetch_array($query);

               ?>

               <div class="">
                  <label class="" for="">Foto Profile *</label>
                  <img src="..." class="img-thumbnail" alt="..." width="">
               </div>



               <div class="form-group">
                  <label>Full Name *</label>
                  <input type="text" value="<?php echo $users['full_name']; ?>" class="form-control">
               </div>

               <div class="form-row">
                  <div class="col-md-6">
                     <label>Username *</label>
                     <input type="text" name="username" value="<?php echo $users['username']; ?>" placeholder="username" class="form-control" />
                  </div>
                  <div class="col-md-6">
                     <label>Date Of Birth *</label>
                     <input type="date" name="date_of_birth" value="<?php echo $users['date_of_birth']; ?>" placeholder="date of birth" class="form-control" />
                  </div>
               </div>

               <div class="form-row">
                  <div class="col-md-6">
                     <label>Email *</label>
                     <input type="email" name="email" value="<?php echo $users['email']; ?>" class="form-control" placeholder="Enter Email Address" />
                  </div>
                  <div class="col-md-6">
                     <label>Phone *</label>
                     <input type="number" name="phone" value="<?php echo $users['phone']; ?>" class="form-control" placeholder="phone " />
                  </div>
               </div>

               <div class="form-row">
                  <div class="col-md-6">
                     <label for="">role name *</label>
                     <select name="role_name" class="form-control">
                        <option value="">- pilih -</option>
                        <option value="Viewer" <?php if ($users['role_name'] == 'Viewer') {
                                                   echo 'selected="selected"';
                                                } ?>>Viewer</option>
                        <option value="Uploader" <?php if ($users['role_name'] == 'Uploader') {
                                                      echo 'selected="selected"';
                                                   } ?>>Uploader</option>
                        <option value="Admin" <?php if ($users['role_name'] == 'Admin') {
                                                   echo 'selected="selected"';
                                                } ?>>Admin</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label>Account Status *</label>
                     <select name="account_status" class="form-control">
                        <option value="">- pilih -</option>
                        <option value="Mahasiswa" <?php if ($users['account_status'] == 'Mahasiswa') {
                                                      echo 'selected="selected"';
                                                   } ?>>Mahasiswa</option>
                        <option value="Umum" <?php if ($users['account_status'] == 'Umum') {
                                                echo 'selected="selected"';
                                             } ?>>Umum</option>
                     </select>
                  </div>

               </div>



               <div class="form-row">
                  <div class="col-md-6">
                     <label for="">Address *</label>
                     <textarea name="address" class="form-control">
                           <?php echo $users['address']; ?>
                        </textarea>
                  </div>

               </div>


               <!-- <button type="submit" class="btn btn-danger btn-sm float-right mt-3 ml-1">Cancel</button> -->
               <button type="submit" name="submit" class="btn btn-primary btn-sm float-right mt-3">Submit</button>

               <?php
               //  }
               ?>
            </form>
         </div>
         <!-- /.container-fluid -->

         <br><br>

         <!-- Sticky Footer -->
         <footer class="sticky-footer mt-5">
            <div class="container">
               <div class="row no-gutters">
                  <div class="col-lg-6 col-sm-6">
                     <p class="mt-1 mb-0">
                        <strong class="text-dark">Vidoe</strong>.
                        <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://templatespoint.net/">TemplatesPoint</a> </small>
                     </p>
                  </div>
                  <div class="col-lg-6 col-sm-6 text-right">
                     <div class="app">
                        <a href="#"><img alt="" src="../../assets/img/google.png" /></a>
                        <a href="#"><img alt="" src="../../assets/img/apple.png" /></a>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>

      <!-- /.content-wrapper -->
   </div>
   <!-- /#wrapper -->
   <!-- Scroll to Top Button-->


   <?php include 'footer.php'; ?>