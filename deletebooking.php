<?php
include ("config.php");

$id=$_GET['id'];
$q = "DELETE FROM `bookingdetail` WHERE id = $id";
mysqli_query($mysqli,$q);
header('location:bookeddetail.php');
?>