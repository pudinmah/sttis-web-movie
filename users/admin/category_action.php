<?php
include "../../config.php";
date_default_timezone_set("Asia/Jakarta");


$name = $_POST['name'];

$date = date('Y-m-d  H:i:s');


// echo "$name <br>";
// echo $date;

mysqli_query($conn,"INSERT INTO category_name VALUES('','$name','$date') ");
header("location:category.php");
?>