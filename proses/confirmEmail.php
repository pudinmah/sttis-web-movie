<?php
    require('../config.php');

    

    $code = $_GET['code'];
    if(isset($_GET['code'])){
        $query = mysqli_query($conn,"SELECT * FROM users where verif_code = '$code'");

        echo mysqli_num_rows($query);
        
        if(mysqli_num_rows($query) > 0){

            $user = mysqli_fetch_assoc($query);

            $id = $user['id'];

            $query = mysqli_query($conn,"UPDATE users set status='active', is_verified=1 where id=$id");


            if($query){
                header("location: ../login.php?pesan=ver_suc");

            }else{
                echo "VERIFIKASI GAGAL ERROR : ".$query;
            }
        }else {
            echo "CODE TIDAK DITEMUKAN ATAU TIDAK VALID";
        }
    }else {
        echo "code ga nih";
    }

?> 