

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body>
    <div class="container">

        <div class="navbar">
            <img src="image/logo.png" class="logo">
            <nav>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="index.php">Services</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="hairstyle&cutting.php">Hairstyle & Cutting</a></li>
                                <li><a href="makeup.php">makeup</a></li>
                                <li><a href="facialspa.php">facial & Spa</a></li>

                            </ul>
                        </div>
                    </li>

                    <li><a href="appointment.php">Appointment</a></li>
                    <li><a href="viewdetail.php">Bookings</a></li>
                    <?php
    
    session_start();
    if (isset($_SESSION['first_name'])) {
        echo "<li><a href='logout.php'>Log out </a></li>". $_SESSION['first_name'] ;
    }else{
        echo " <li><a href='login.php'>Log In</a></li>";
    }
?>
                    <li><a href="loginadmin.php">Admin</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                </ul>
            </nav>

        </div>
    </div>

    <section>
        <video src="image/bgvideo.mp4" muted loop autoplay></video>
    </section>
    <div class="content">
        <h1>Think Beauty Think Us</h1>
    </div>


    <div class="Description">
        <h2>ENJOY PROFESSIONAL BEAUTY SERVICES</h2><br><br>
        <p>Do You want to look gorgeous?! alright, you came right place! glamified salon provides lots of different services which help you not only to look good but also to have healthy skin.
            <br>Book your appointment and visit our salon!</p>
    </div>

    <div class="imagecol">
        <img src="image/homepg-makeup.jpg" alt="makeupimg" id="img1">

        <img src="image/homepg-hairs.jpg" alt="hairsimg" id="img1">
        <img src="image/homepg-spa.jpg" alt="spaimage" id="img1">
        <br><br><br><br><br><br>
    </div>

    <div class="booking">

        <h6>CAN'T WAIT TO SEE YOU :)</h6>
        <button class="button" onclick="window.location.href = 'appointment.php';"> BOOK NOW ! !!</button>
    </div>
    <br><br><br><br><br><br>

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







