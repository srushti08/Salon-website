<?php
include("config.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service list</title>
    <link rel="stylesheet" href="reviewlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>
    <div id="mysidenav" class="sidenav">
        <div class="logo"> <img src="image/logo.png" id="logoimg" alt="logo"> </div>
        <!--<a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard</a>-->
        <a href="userdetail.php" class="icon-a"><i class="fa fa-sign-in icons"></i>&nbsp;&nbsp; Accounts</a>
        <a href="bookeddetail.php" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp; Customer</a>
        <a href="servicelist.php" class="icon-a"><i class="fa fa-shopping-cart icons"></i>&nbsp;&nbsp; Services</a>
        <a href="artistlist.php" class="icon-a"><i class="fa fa-list icons"></i>&nbsp;&nbsp; Artist</a>
        <a href="reviewlist.php" class="icon-a"><i class="fa fa-circle"></i>&nbsp;&nbsp; Reviews</a>
        <a href="adminlogout.php" class="icon-a"><i class="fa fa-sign-out icons"></i>&nbsp;&nbsp; Logouts</a>
    </div>
    <div class="headline">
        <h1>REVIEWS</h1>
    </div>
   
    <table  id="dataTable" width="60%" cellspacing="0" border="1">
    <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th>Email </th>
                                <th>Phone-Number</th>
                                <th>Review</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM contactus";
                            $query_run = mysqli_query($mysqli, $query);
                           
                                while($row = mysqli_fetch_array($query_run))
                                {
                            ?>
                                <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['name']; ?></td>
                                    <td><?php  echo $row['email']; ?></td>
                                    <td><?php  echo $row['phnumber']; ?></td>
                                    <td><?php  echo $row['msg']; ?></td>
                                    
                                </tr>
                            <?php
                                } 
                            
                            ?>
                        </tbody>
                    </table>
                    <script type="text/javascript">

                    $(document).ready(function() {

                    $('#dataTable').DataTable();

                    })

    </script>
</body>
</html>