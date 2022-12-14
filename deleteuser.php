<?php
include ("config.php");

$id=$_GET['id'];
$q = "DELETE FROM `userdetail` WHERE id = $id";
mysqli_query($mysqli,$q);
header('location:userdetail.php');
?>