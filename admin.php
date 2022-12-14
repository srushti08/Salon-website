<?php
include("config.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>
    <div id="mysidenav" class="sidenav">
        <div class="logo"> <img src="image/logo.png" id="logoimg" alt="logo"> </div>
       <!-- <a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard</a>-->
        <a href="userdetail.php" class="icon-a"><i class="fa fa-sign-in icons"></i>&nbsp;&nbsp; Accounts</a>
        <a href="bookeddetail.php" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp; Customer</a>
        <a href="servicelist.php" class="icon-a"><i class="fa fa-shopping-cart icons"></i>&nbsp;&nbsp; Services</a>
        <a href="artistlist.php" class="icon-a"><i class="fa fa-list icons"></i>&nbsp;&nbsp; Artist</a>
        <a href="reviewlist.php" class="icon-a"><i class="fa fa-circle"></i>&nbsp;&nbsp; Reviews</a>
        <a href="adminlogout.php" name="logout" class="icon-a"><i class="fa fa-sign-out icons"></i>&nbsp;&nbsp; Logouts</a>

    </div>
    <div id="main">
        <div class="head">
            <h1>Dashboard</h1>

            <div class="clearfix"></div>
        </div>
     <!--<div class="content">
            <div class="chart">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Work', 11],
                            ['Eat', 2],
                            ['Commute', 2],
                            ['Watch TV', 2],
                            ['Sleep', 7]
                        ]);


                        var options = {
                            title: 'My Daily Activities',
                            width: 40,
                            height: 20
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                        chart.draw(data, {
                            backgroundColor: {
                                fill: "#0A090B"
                            }
                        })
                    }
                </script>
                <div id="piechart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>-->

    </div>

</body>
</html>