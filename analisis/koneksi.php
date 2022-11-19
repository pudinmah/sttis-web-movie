<?php
$conn = mysqli_connect("localhost","root","","projek_kampus");
//Check connection
if (mysqli_connect_error()){
    echo "Failed to connect to Mysql" . mysqli_connect_error();
    exit();
}

?>