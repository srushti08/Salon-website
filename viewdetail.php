<?php
include('config.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="viewdetail.css">

    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
   
     

   

    

  
  

    <link rel="stylesheet" type="text/css"

        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8"

        src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


</head>

<body>
    <div class="container">

        <div class="navbar">
            <img src="image/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
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
error_reporting(E_ALL ^ E_WARNING);
session_start();
if ($_SESSION['username']) {
?>
          <!--<li><a style="color: #ff8d00;"><?php echo strtoupper($_SESSION['username']); ?></a></li>-->
          <li><a  href="logout.php">Logout</a></li>
        <?php
}
else {
?>
        <li><a href="login.php">Log In</a></li>
        <?php
}?>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="loginadmin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
      
    </div>
    <div class="container2">

<style>

.container2 {

    padding-top: 0px;

}

</style>

<div class="detailtable">

    <br><br>

    <h1 class="heading">Booking </h1>

    <br>

    <table class="table table-bordered" id="dataTable" width="60%" cellspacing="0">

    <thead>

        <tr >


            <th> Id </th>

            <th> User Name </th>

            <th> Date </th>

            <th> Time </th>

           

            <th> Service </th>

            <th> Artist </th>

            



        </tr>
    </thead>


        

    
    
                       
                            <?php
$query = "SELECT * FROM bookingdetail";
$query_run = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_array($query_run)) {
?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['user']; ?></td>
                                   
                                 
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td><?php echo $row['services']; ?></td>
                                    <td><?php echo $row['artist']; ?></td>
                                   
                                   
                                </tr>
                            <?php
}

?>
                      
                            </table>
                            </div>
    
    <script type="text/javascript">

    $(document).ready(function() {

        $('#dataTable').DataTable();

    })

    </script>

    
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



  