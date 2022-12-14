<?php
include("config.php");
if(isset($_POST['submit'])){
    $id = $_GET['id'];

    $name= $_POST['user'];
    $email= $_POST['email'];
    $pass= $_POST['password'];

/*$s= "UPDATE `userdetail` SET id='$id',user='$name',email='$email', password ='$pass' WHERE id='$id' ";
$s="UPDATE `userdetail` SET `id`='[$id]',`user`='[$name]',`email`='[$email]',`password`='[$pass]',`creation_date`='[value-5]' WHERE id=$id ";
$s="UPDATE `userdetail` SET `user`='$name',`email`='$email',`password`='$pass' WHERE id=$id ";*/
$q = "UPDATE userdetail SET user='$name',email='$email' ,password='$pass' where id=$id  ";
$result=mysqli_query($mysqli,$q);
header('location:userdetail.php');}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>UPDATE page</title>
</head>

<body>
    <div class="container">
        <div class="form-box">
        
            <div class="button-box" id="btn">
               <button type="button" class="toggle-btn ">UPDATE FORM</button>
            </div>
            <div class="social-icon">
                <img src="image/facebook.jpg" alt="facebook icon">
                <img src="image/twitter.jpg" alt="tw ">
                <img src="image/google.jpg" alt="google icon">
            </div>
            
            <form id="register" class="input-group"  onsubmit="return vali()" method="POST">
                <input type="text" name="user" id="userid" class="input-field" placeholder=" Enter User Id" required>
                <input type="email" name="email" class="input-field" placeholder=" Enter emaild-id" required>
                <input type="password" name="password" id="pwd" class="input-field" placeholder="Enter password" required>
                <!--<input type="checkbox" class="check-box"> <span> I agree terms and conditions </span>-->
                <button type="submit" name ="submit"class="submit-btn"> UPDATE</button>
            </form>
        </div>

    </div>
    <script>
        
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        var pwd = document.getElementById("pwd");

        

        

        function vali() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            var upperCaseLetters = /[A-Z]/g;
            var numbers = /[0-9]/g;
            var symbols = /[@&*!$#]/g;
            if (pwd.value.match(lowerCaseLetters)) {
                if (pwd.value.match(upperCaseLetters)) {
                    if (pwd.value.match(numbers)) {
                        if (pwd.value.match(symbols)) {
                            if (pwd.value.length >= 8) {
                                return true;
                            } else {
                                alert("Password Must Be Greater Than 8 Character!");
                                pwd.focus();
                                return false;
                            }
                        } else {
                            alert("Password Must Contain Atleast One of These Symbols[@ # $ & * !]");
                            pwd.focus();
                            return false;
                        }
                    } else {
                        pwd.focus();
                        alert("Password Must Contain Atleast One Number!");
                        return false;
                    }
                } else {
                    pwd.focus();
                    alert("Password Must Contain Atleast One UpperCase!");
                    return false;
                }
            } else {
                pwd.focus();
                alert("Password Must Contain Atleast One LowerCase!");
                return false;
            }

            // Validate capital letters


            // Validate length
            if (pwd.value.length >= 8) {
                pass
            } else {
                pwd.focus();
            }
        }
    </script>

</body>

</html>