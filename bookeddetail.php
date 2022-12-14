<?php
include('security.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdetail</title>
    <link rel="stylesheet" href="bookeddetail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>
    <div id="mysidenav" class="sidenav">
        <div class="logo"> <img src="image/logo.png" id="logoimg" alt="logo"> </div>
        <!--<a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard</a>-->
        <a href="userdetail.php" class="icon-a"><i class="fa fa-sign-in icons"></i>&nbsp;&nbsp; Accounts</a>
        <a href="bookeddetail.php" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp; Customer</a>
        <a href="servicelist.php" class="icon-a"><i class="fa fa-shopping-cart icons"></i>&nbsp;&nbsp; Services</a>
        <a href="artistlist.php" class="icon-a"><i class="fa fa-list icons"></i>&nbsp;&nbsp; Artist</a>
        <a href="reviewlist.php" class="icon-a"><i class="fa fa-circle"></i>&nbsp;&nbsp; Reviews</a>
        <a href="adminlogout.php" class="icon-a"><i class="fa fa-sign-out icons"></i>&nbsp;&nbsp; Logouts</a>

    </div>
    <!--<div id="main">
        <div class="head"></div>
    </div>-->

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <?php
                    
                ?>
                    <table class="table table-bordered" id="dataTable" width="60%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> User </th>
                                <th>Address </th>
                                <th>Phone-Number</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Services</th>
                                <th>Artist</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM bookingdetail";
                            $query_run = mysqli_query($mysqli, $query);
                           
                                while($row = mysqli_fetch_array($query_run))
                                {
                            ?>
                                <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['user']; ?></td>
                                    <td><?php  echo $row['address']; ?></td>
                                    <td><?php  echo $row['phnumber']; ?></td>
                                    <td><?php  echo $row['date']; ?></td>
                                    <td><?php  echo $row['time']; ?></td>
                                    <td><?php  echo $row['services']; ?></td>
                                    <td><?php  echo $row['artist']; ?></td>
                                    <td>
                                        <button class ="btn-danger btn"><a href="deletebooking.php?id=<?php echo $row['id'];?>"
                                          class="text-white">DELETE</a></button>
                                        
                                    </td>
                                    <td>
                                       
                                            <button class ="btn-primary btn"><a href="updatebooking.php?id=<?php echo $row['id'];?>"
                                          class="text-white">UPDATE</a></button>
                                       
                                    </td>
                                    
                                </tr>
                            <?php
                                } 
                            
                            ?>
                        </tbody>
                    </table>
    
                </div>
            </div>
        </div>
    
    </div>
    <script type="text/javascript">

    $(document).ready(function() {

        $('#dataTable').DataTable();

    })

    </script>
</body>

</html>