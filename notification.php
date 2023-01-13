<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Notification</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
		
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="leaflet/leaflet.css">
	<script type="text/javascript" src="leaflet/leaflet.js"></script>
<script type="text/javascript" src="data/country.geojson"></script>


</head>
<body>
	<div>
<?php
include('header_session.php');
?>
</div>
<div class="container-fluid">
    <div class="row dash-cont">
        <div class="col dash">
            <h2>Dashboard</h2>
            <div class="aboutdiv-heading-border bg-light" ><br>
    </div>
    <div>
         <ul class="list-unstyled px-2">
                <li ><a href="user_dashboard.php" 
                        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between ">
                        <span> <i class="bi bi-diagram-3"></i> Profile</span>
                        <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
                    </a></li>
              
                <li class=""><a href="car_profile.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-receipt"></i>
                        Car Profile</a></li>
                <li class=""><a href="reservations.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i>
                        Reservations</a></li>
                <li class=""><a href="bookings.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i> Bookings</a></li>

                <li class=""><a href="review.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-receipt"></i> Reviews</a></li>

                <li class=""><a href="notification.php" class="text-decoration-none px-3 py-2 d-block active"><i class="bi bi-bell"></i> Notifications</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-bell"></i>
                        Log Out</a></li>
            </ul>
    </div>
        </div>
        <div class="col cont">
<h1 style="text-align: center; font-family: serif;">All Notifications </h1>

<div class="notif">
   <div class="notif-s">
    <img src="images/avatar.png" alt="dp">
   <i class="fa fa-circle " style="color: #64dfdf; margin-left: 10px;"></i>
   <div style="height: 50px; overflow: hidden; word-wrap: no-wrap">
    <p class="p1" style="margin-left: 20px; font-weight: bold; color:#219ebc;">  Your password has been successfully changedYour password has been successfully changedYour password has been successfully changedYour password has been successfully changedYour password has been successfully changed.</p> 
  </div>
    <div style="display: flex; flex-direction: row;">
    <p style="color: grey;">Date: 31-02-2023 Time: 04:03 pm</p><p style="float: right; margin-left: 30px;">Admin</p>
  </div>
  </div>
  <div class="notif-s">
    <img src="images/avatar.png" alt="dp">
    
   <i class="fa fa-circle " style="color: #64dfdf; margin-left: 10px;"></i>
   <div style="height: 50px; overflow: hidden; word-wrap: no-wrap">
    <p class="p1" style="margin-left: 20px; font-weight: bold; color: #219ebc;">  Your reserved product is available.</p> 
  </div>
    <div style="display: flex; flex-direction: row;">
    <p style="color: grey;">Date: 31-02-2023 Time: 04:03 pm</p><p style="float: right; margin-left: 30px;">Admin</p>
  </div>
  </div>
  <div class="notif-s">
    <img src="images/avatar.png" alt="dp">
    
   <i class="fa fa-circle " style="color: #64dfdf; margin-left: 10px;"></i>
   <div style="height: 50px; overflow: hidden; word-wrap: no-wrap">
    <p class="p1" style="margin-left: 20px; font-weight: bold; color: #219ebc;">  Your reserved product is available.</p> 
  </div>
    <div style="display: flex; flex-direction: row;">
    <p style="color: grey;">Date: 31-02-2023 Time: 04:03 pm</p><p style="float: right; margin-left: 30px;">Admin</p>
  </div>
  </div>
  <div class="notif-s">
    <img src="images/avatar.png" alt="dp">
    
   <i class="fa fa-circle " style="color: #64dfdf; margin-left: 10px;"></i>
   <div style="height: 50px; overflow: hidden; word-wrap: no-wrap">
    <p class="p1" style="margin-left: 20px; font-weight: bold; color: #219ebc;">  Your reserved product is available.</p> 
  </div>
    <div style="display: flex; flex-direction: row;">
    <p style="color: grey;">Date: 31-02-2023 Time: 04:03 pm</p><p style="float: right; margin-left: 30px;">Admin</p>
  </div>
  </div>
  <div class="notif-s">
    <img src="images/avatar.png" alt="dp">
    
   <i class="fa fa-circle " style="color: #64dfdf; margin-left: 10px;"></i>
   <div style="height: 50px; overflow: hidden; word-wrap: no-wrap">
    <p class="p1" style="margin-left: 20px; font-weight: bold; color: #219ebc;">  Your reserved product is available.</p> 
  </div>
    <div style="display: flex; flex-direction: row;">
    <p style="color: grey;">Date: 31-02-2023 Time: 04:03 pm</p><p style="float: right; margin-left: 30px;">Admin</p>
  </div>
  </div>
  <div class="notif-s">
    <img src="images/avatar.png" alt="dp">
    
   <i class="fa fa-circle " style="color: #64dfdf; margin-left: 10px;"></i>
   <div style="height: 50px; overflow: hidden; word-wrap: no-wrap">
    <p class="p1" style="margin-left: 20px; font-weight: bold; color: #219ebc;">  Your reserved product is available.</p> 
  </div>
    <div style="display: flex; flex-direction: row;">
    <p style="color: grey;">Date: 31-02-2023 Time: 04:03 pm</p><p style="float: right; margin-left: 30px;">Admin</p>
  </div>
  </div>
</div>

            </div>
        </div>
    </div>





 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".dash a").on('click', function () {
            $(".dash a.active").removeClass('active');
            $(this).addClass('active');
        });

       
    </script>
  
</body>
</html>