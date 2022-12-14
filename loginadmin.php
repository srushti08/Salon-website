<?php 






include("config.php");
/*
$con=mysqli_connect('localhost','root','','salon');
$name= $_POST['user'];
$pass= $_POST['pass'];

$s= "SELECT * from admindetail where user='$name' && pass='$pass'";
$result=mysqli_query($mysqli,$s);
$num=mysqli_num_rows($result);
echo "<script>alert('before if')</script>";

if($name == 'admin' and $pass == '123456'){
 echo "<script>console.log('inside if')</script>";
 $_SESSION['username'] = $name;

     echo 'hi';

    header('location:admin.php');

}



if($num==1){

    $_SESSION['username'] = $name;

    // $_SESSION['status'] = "login";

    echo 'hi';

    header('location:admin.php?status=login');

}

else{

    header('location:loginadmin.php');

}


*/
?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
               
            </div>
            <div class="social-icon">
                <img src="image/facebook.jpg" alt="facebook icon">
                <img src="image/twitter.jpg" alt="tw ">
                <img src="image/google.jpg" alt="google icon">
            </div>
            <form id="login" class="input-group"  method="POST">
                <input type="text" name="user" class="input-field" placeholder="User Id" required>
                <input type="password" name="pass" class="input-field" placeholder="Enter password" required>
                <!--<input type="checkbox" class="check-box"> <span> Remember me </span>-->
                <button type="submit" name="submit" class="submit-btn"> Log In</button>
            </form>
            
        </div>

    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $name= $_POST['user'];
        $pass= $_POST['pass'];

        $q="SELECT * from `admindetail` WHERE user='$name' && pass='$pass'";
        $result=mysqli_query($mysqli,$q);
        $num=mysqli_num_rows($result);
        if($num==1){
            session_start();
        
            $_SESSION['adminloginid'] = $_POST["admindetail"];
            header('location:userdetail.php');

        }
        else{
            echo"Incorrect Password";
        }

    }
    ?>
    <!--<script>
        var x = document.getElementById("login");
       
        var z = document.getElementById("btn");
       

        
        function login() {

            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";

        }-->

       
</body>

</html>