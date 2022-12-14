<?php

session_start();
include("config.php");
/*$con2=mysqli_connect('localhost','root','','salon');*/

$name= $_POST['user'];
$pass= $_POST['password'];
$email= $_POST['email'];

$s= "SELECT * from userdetail where user='$name'";

$result=mysqli_query($mysqli,$s);

$num=mysqli_num_rows($result);

if($num==1){
	echo "<script>alert('username already taken')</script>"; 
	
}
else{
	$reg="insert into userdetail (user,email,password) values ('$name','$email,','$pass')";
	mysqli_query($mysqli,$reg);
	$_SESSION['username'] = $name;
    header('location:index.php?status=register');
	
}
?>