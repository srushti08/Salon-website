<?php
include("config.php");
if(isset($_POST['submit'])){
    $id = $_GET['id'];

    $address = $_POST['address'];
    $phnumber =  $_POST['phnumber'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $services = $_POST['services'];
    $artist = $_POST['artist'];
    


$q = "UPDATE bookingdetail SET address='$address',phnumber='$phnumber' ,date='$date',time='$time',services='$services',artist='$artist' where id=$id  ";
$result=mysqli_query($mysqli,$q);
header('location:bookeddetail.php');}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update booking Page</title>
    <link rel="stylesheet" href="appointment.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">



</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Appointment Form </h1>
        </div>
        <form class="form" name="form" id="form" method="POST"  onsubmit="return validation()">
       
        
            <div class="form-control">
                <label>Address</label> <br>
                <input type="text" name="address" id="address" placeholder="Enter Your Address" autocomplete="off">
                <i class="far fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="form-control">
                <label> PhoneNo</label> <br>
                <input type="mobile" name="phnumber" id="phnumber" placeholder="Enter Your Phone-No" autocomplete="off">
                <i class="far fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>ErrorMsg</small>
            </div>
            <div class="form-control">
                <label>Date</label>
                <input type="date"  name="date" id="date">
            </div>
            <div class="form-control">
                <label>Time</label>
                <input type="time"  name="time" id="time">
            </div>
            <div class="form-control">
                <label>Services</label> <br>
                <select name="services" id="selectservice" >
                        <option >--Select Services--</option>
                        <optgroup label="HAIRS AND CUTTING">
                        <option value="WOMEN'S CUT = Rs.400-500 ">WOMEN'S CUT = Rs.400-500</option>
                        <option value=" MEN'S SCISSOR CUT = Rs.350-400">MEN'S SCISSOR CUT = Rs.350-400 </option>
                        <option value="KIDS CUTS (AGE 10 OR BELOW) = Rs.150-200  ">WOMEN'S CUT = Rs.400-500</option>
                        <option value="COLOR WASh = Rs.1000-1500 ">COLOR WASh = Rs.1000-1500 </option>
                        <option value="FULL HIGHLIGHT = Rs.3000-3500 ">FULL HIGHLIGHT = Rs.3000-3500</option>
                    </optgroup>
                    <optgroup label="MAKEUP">
                        <option value="THREADING EYEBROWS = Rs.70">THREADING EYEBROWS = Rs.70</option>
                        <option value="WATER BASED  AIR BRUSH MAKEUP = Rs.4000">WATER BASED  AIR BRUSH MAKEUP = Rs.4000 </option>
                        <option value="HIGH DEFINATION  BRIDE MAKEUP = Rs.13000-16000">HIGH DEFINATION  BRIDE MAKEUP = Rs.13000-16000</option>
                        <option value="GLOSSY NATURAL MAKEUP   Rs.8000-11000">GLOSSY NATURAL MAKEUP   Rs.8000-11000 </option>
                    </optgroup>
                    <optgroup label="FACIAL AND SPA">
                        <option value="AROMATHERAPY FACIAL =  RS.4000-5000
                        ">AROMATHERAPY FACIAL =  RS.4000-5000
                    </option>
                        <option value="DAIMOND FACIAL = RS.3500-4000
                        ">DAIMOND FACIAL = RS.3500-4000
                    </option>
                        <option value="GOLD FACIAL = RS.3500-4000
                        ">GOLD FACIAL = RS.3500-4000
                    </option>
                        <option value="FULL BODY MUD MASK  = RS.3000 FOR 30 MIN
                        ">FULL BODY MUD MASK  = RS.3000 FOR 30 MIN
                    </option>
                        <option value="AYURVEDIC SPA = RS.4400-5000 FOR 45 MIN">AYURVEDIC SPA = RS.4400-5000 FOR 45 MIN</option>
                    </optgroup>
                        
                    </select>
            </div>
            <div class="form-control">
                <label>ARTIST</label> <br>
                <select name="artist" id="selectartist">
                    <option >--Select Artist</option>
                    <option value="Emily John_Makeup Artist">Emily_John Makeup Artist</option>
                    <option value="Kayla Wood_Hairdresser">Kayla Wood_Hairdresser</option>
                    <option value="Karla Rojas_Spa Specialist">Karla Rojas_Spa Specialist</option>
                    <option value="Jack_Professional Barber">Jack_Professional Barber</option>
      
                </select>
            </div>
            <div class="book">
                <button type="submit"name="submit" class="bookbtn">UPDATE</button>
            </div>
        </form>
   

    </div>

   <script>
       function validation() {
           var phnumber = document.forms['form']['phnumber'];

           if(isNaN(phnumber.value) || phnumber.value.length!=10)
           {
               alert('Enter Valid Phone.no');
               return false;
           }
           return true;
       }
   </script>
</body>
</html>