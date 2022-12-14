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
                <button type="button" class="toggle-btn " onclick="register()">Register</button>
            </div>
            <div class="social-icon">
                <img src="image/facebook.jpg" alt="facebook icon">
                <img src="image/twitter.jpg" alt="tw ">
                <img src="image/google.jpg" alt="google icon">
            </div>
            <form id="login" class="input-group" action="logindone.php" method="POST">
                <input type="text" name="user" class="input-field" placeholder="User Id" required>
                <input type="password" name="password" class="input-field" placeholder="Enter password" required>
                <!--<input type="checkbox" class="check-box"> <span> Remember me </span>-->
                <button type="submit" class="submit-btn"> Log In</button>
            </form>
            <form id="register" class="input-group" action="registerdone.php" onsubmit="return vali()" method="POST">
                <input type="text" name="user" id="userid" class="input-field" placeholder=" Enter User Id" required>
                <input type="email" name="email" class="input-field" placeholder=" Enter emaild-id" required>
                <input type="password" name="password" id="pwd" class="input-field" placeholder="Enter password" required>
                <!--<input type="checkbox" class="check-box"> <span> I agree terms and conditions </span>-->
                <button type="submit" class="submit-btn"> Register</button>
            </form>
        </div>

    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        var pwd = document.getElementById("pwd");

        function register() {

            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

        }

        function login() {

            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";

        }

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