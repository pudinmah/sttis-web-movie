<?php include "header.php"; ?>

    <div id="content-wrapper">
        <div class="container-fluid upload-details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title ">
                        <h6 class="text-white">Content Channels</h6>
                    </div>


                </div>

            </div>

            
            <div class=".table-responsive{-sm|-md|-lg|-xl}">
            <table class="table table-responsive table-bordered table-striped table-hover">
                <tr>
                    <th>Img</th>
                    <th>Visibilitas</th>
                    <th>Tanggal Upload</th>
                    <th>Tayang</th>
                    <th width="15%">Opsi</th>
                </tr>

                <?php
                $uploader = mysqli_query($conn, "SELECT * FROM video_upload");
                while ($up = mysqli_fetch_assoc($uploader)) {

                ?>

                    <tr>
                        <td><img src="files/<?= $up["url_img"]; ?>" class="img-fluid" width="80" height="80"></td>
                        <td><?= $up['visibility']; ?></td>
                        <td><?= $up['date'] ?></td>
                        <td>-</td>
                        <td>
                            <a href="video-page.php?id=<?= $up['id']; ?>"><i class="fas fa-eye text-white mr-3"></i></a>
                            <a href="#.php?id=<?= $up['id']; ?>"><i class="fas fa-fw fa-pen text-white mr-3"></i></a>
                            <a href="#.php?id=<?= $up['id']; ?>"><i class="fas fa-fw fa-trash text-white"></i></a>
                        </td>

                    </tr>
                <?php } ?>
            </table>
            </div>
            
            <hr>
            <br>




        </div>
    </div>


    <?php include "footer.php"; ?>