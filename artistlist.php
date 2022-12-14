<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtistList</title>
    <link rel="stylesheet" href="artistlist.css">
</head>

<body>
    <div id="mysidenav" class="sidenav">
        <div class="logo"> <img src="image/logo.png" id="logoimg" alt="logo"> </div>
       <!-- <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard</a>-->
        <a href="userdetail.php" class="icon-a"><i class="fa fa-sign-in icons"></i>&nbsp;&nbsp; Accounts</a>
        <a href="bookeddetail.php" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp; Customer</a>
        <a href="servicelist.html" class="icon-a"><i class="fa fa-shopping-cart icons"></i>&nbsp;&nbsp; Services</a>
        <a href="artistlist.php" class="icon-a"><i class="fa fa-list icons"></i>&nbsp;&nbsp; Artist</a>
        <a href="reviewlist.php" class="icon-a"><i class="fa fa-circle"></i>&nbsp;&nbsp; Reviews</a>
        <a href="adminlogout.php" class="icon-a"><i class="fa fa-sign-out icons"></i>&nbsp;&nbsp; Logouts</a>
    </div>
    <div class="headline">
        <h1>Artist Information</h1>
    </div>
    <table id="artistlist" style="width:60%" border="1">
        <tr>
            <th>Artist Name</th>
            <th>Artist Speciality</th>
            <th>Salary</th>
        </tr>
        <tr>
            <td>Emily John</td>
            <td>Makeup Artist</td>
            <td>25000</td>
        </tr>
        <tr>
            <td>Sandhya Shekar</td>
            <td>Makeup Artist</td>
            <td>26000</td>
        </tr>
        <tr>
            <td>Kayla Wood</td>
            <td>Hairdresser</td>
            <td>20000</td>
        </tr>
        <tr>
            <td>Adhuna Akhtar </td>
            <td>Hairdresser</td>
            <td>22000</td>
        </tr>

        <tr>
            <td>Karla Rojas</td>
            <td>Spa Specialist</td>
            <td>32000</td>
        </tr>
        <tr>
            <td>Jack</td>
            <td>Professional Barber</td>
            <td>23000</td>
        </tr>
    </table>
</body>

</html>