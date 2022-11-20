<?php 
include "../../config.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM category_name WHERE id='$id'");
header("location: category.php");
