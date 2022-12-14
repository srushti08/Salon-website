



<?php
session_start();

include("config.php");

/*$con=mysqli_connect('localhost','root','','salon');*/
$name= $_POST['user'];
$pass= $_POST['password'];

$s= "select * from userdetail where user='$name' && password='$pass'";
$result=mysqli_query($mysqli,$s);
$num=mysqli_num_rows($result);
echo "<script>alert('before if')</script>";

/*if($name == 'admin' and $pass == '123456'){
 echo "<script>console.log('inside if')</script>";
 $_SESSION['username'] = $name;

     echo 'hi';

    header('location:admin.php');

}
*/


if($num==1){

    $_SESSION['username'] = $name;

    // $_SESSION['status'] = "login";

    echo 'hi';

    header('location:index.php?status=login');

}

else{

    header('location:login.php');

}



?>