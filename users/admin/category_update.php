<?php 
include "../../config.php";

date_default_timezone_set("Asia/Jakarta");





$id = $_POST['id'];
$name = $_POST['name'];

$date = date('Y-m-d  H:i:s');
mysqli_query($conn,"UPDATE category_name SET name='$name', create_date='$date' WHERE id='$id'");
header("location: category.php");

?>