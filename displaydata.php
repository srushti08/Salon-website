<?php
include("config.php");
//session_start();



//display data accourding to user id

if ($row = $result->fetch_assoc()){
    $res=" SELECT * FROM bookingdetail WHERE user ='$user' "; 
}

$query= mysqli_query($mysqli,$res);

echo "$query";
?>