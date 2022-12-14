<?php
include("config.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body>
    <div class="container">

        <div class="navbar">
            <img src="image/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="index.php">Services</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="hairstyle&cutting.php">Hairstyle & Cutting</a></li>
                                <li><a href="makeup.php">makeup</a></li>
                                <li><a href="facialspa.php">facial & Spa</a></li>

                            </ul>
                        </div>
                    </li>

                    <li><a href="appointment.html">Appointment</a></li>
                    <li><a href="viewdetail.php">Bookings</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="loginadmin.php">Admin</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                </ul>
            </nav>

        </div>
    </div>
    <section>
    </section>
    <div class="content">
        <h1>About Us</h1>
    </div>
    <br><br>
    <div class="description">
        <h1> OUR ARTIST</h1>
    </div>

    <br><br><br><br>
    <div class="ourartist">
        <div class="artist">
            <img src="image/makeup-artist.jpg" alt=" makeup artist">
            <div class="desc"> Emily John <br> Makeup Artist</div>
        </div>
        <div class="artist">
            <img src="image/hairdresser.jpg" alt="hairdresser">
            <div class="desc">Kayla Wood <br> Hairdresser</div>
        </div>
        <div class="artist">
            <img src="image/spaspecialist.jpg" alt="spa specialist">
            <div class="desc">Karla Rojas <br> Spa Specialist
            </div>
        </div>
        <div class="artist">
            <img src="image/mens-hairdresser.jpg" alt=" Men's hairdresser">
            <div class="desc"> Jack <br> Professional Barber</div>
        </div>
    </div>
    <br><br><br><br>



    <div class="about-section">
        <div class="aboutus-container">
            <div class="content-section">
                <div class="title">
                    <h1>ABOUT US</h1> <br><br>

                </div>
                <div class="about-us-content">
                    <h3>
                        OUR PROMISE <br> Superior service, personalized attention <br></h3> <br>
                    <p>
                        We're proud to offer the highest quality, most unique merchandise on the market today. From our family to yours, we put lots of love and careful attention in each item. We hope you enjoy our work as much as we enjoy bringing it to you.
                    </p>

                </div>

            </div>
            <div class="image-section"></div>
            <img src="image/abtus.jpg" alt="staff pic">
        </div>
    </div>
    <div class="contact-section">
        <h1>Contact Us</h1>
        <form class="contact-form"  method="POST">
            <input type="text"  name="name" class="contact-form-text" placeholder="Type Your Name">
            <input type="email" name="email" class="contact-form-text" placeholder="Type Your Email">
            <input type="number" name="phnumber" class="contact-form-text" placeholder="Type Your Phone-no">
            <textarea class="contact-form-text" name="msg" placeholder="Type Your Message.."></textarea>
            <input type="submit" name="submit" class="contact-form-btn" value="Send">
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $name =  $_POST['name'];
            $email = $_POST['email'];
            $phnumber =  $_POST['phnumber'];
            $msg = $_POST['msg'];
           

            $result = mysqli_query($mysqli,"INSERT into contactus values('','$name','$email','$phnumber','$msg')");
            if($result)
            {
                echo"Reported";
            }else{
                echo"Try again";
            }
           
            
        }
   ?>

    </div>



</body>
<footer>
    <div class="footer">
        <div class="logoimg">
            <img src="image/logo.png" alt="logo img" id="logo"></div>
        <h1>GLAMIFIED SALON</h1>

        <br><br> <br><br> <br><br> <br><br><br>
        <div class="seperate"></div>
        <p>Follow us on</p> <br><br><br>

        <div class="social-icon">
            <img src="image/facebook.jpg" alt="facebook icon">
            <img src="image/twitter.jpg" alt="tw ">
            <img src="image/google.jpg" alt="google icon">
        </div>
        <div class="footeradd">
            <p>2694, Hinkle Deegan Lake Road, Syracuse ,NEWYORK <br> <br> 607-279-0860 <br> <br>Copyright TheGlamifiedSalon.com 2020 </p>
        </div>


    </div><br><br> <br><br> <br><br>
</footer>

</html>