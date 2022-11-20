<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>VIDOE - Video Streaming Website php Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap core CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="assets/css/osahan.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css">
  </head>

  <body id="page-top">

    <div class="col-md-5 mx-auto">
      <div class="container-fluid">


        <div class="panel mt-5">
          <div class="col-md-4 mx-auto">
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "kosong") {
                echo "<div class='text-danger'>Email belum terdaftar!</div>";
              }
            }

            ?>

          </div>


          <div class="panel-heading text-white">
            <h4 class="text-white">Forgot Password</h4>
          </div>
          <div class="panel-body">



            <form method="post" action="proses/send_email.php">
              <div class="form-group">
                <label>Inputkan Password Anda</label>
                <input type="password" name="password" class="form-control" placeholder="@gmail.com">
              </div>
              
              <div class="form-group">
                <label>Inputkan Password Anda</label>
                <input type="password" name="password" class="form-control" placeholder="@gmail.com">
              </div>

              <br />

              <button type="submit" class="btn btn-primary" name="submit_email">Submit</button>
            </form>


          </div>
        </div>
      </div>

    </div>





    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->

    <?php include "footer.php"; ?>