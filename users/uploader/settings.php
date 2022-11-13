<?php include 'header.php'; ?>





      <div id="content-wrapper">
         <div class="container-fluid upload-details">
            <div class="row">
               <div class="col-lg-12">
                  <div class="main-title">
                     <h6 class="text-white">Settings</h6>
                  </div>


                  <form action="proses/registerProses.php" method="post" enctype="multipart/form-data">
                     <?php

                     $username = $_SESSION['berhasil'];
                     //  echo $username;
                     $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

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
                           <label>Status *</label>
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

                        <div class="col-md-6">
                           <label for="">Address *</label>
                           <textarea name="address" class="form-control">
                           <?php echo $users['address']; ?>
                        </textarea>
                        </div>

                     </div>



                     <!-- <div class="form-row"></div> -->


                     <!-- <button type="submit" class="btn btn-danger btn-sm float-right mt-3 ml-1">Cancel</button> -->
                     <button type="submit" name="submit" class="btn btn-primary btn-sm float-right mt-3">Submit</button>

                     <?php
                     //  }
                     ?>
                  </form>

               </div>
            </div>



         </div>
         <!-- /.container-fluid -->

         <br><br>

         <!-- Sticky Footer -->
         
      </div>

      <!-- /.content-wrapper -->
   </div>
   <!-- /#wrapper -->
   <!-- Scroll to Top Button-->


   <?php include 'footer.php'; ?>