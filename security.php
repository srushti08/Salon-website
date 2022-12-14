<?php
session_start();
include('config.php');

if($mysqli)
{
    // echo "Database Connected";
}
else
{
    header("Location:config.php");
}
?>