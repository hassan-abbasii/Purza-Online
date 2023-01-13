<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
    
	<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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
                        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between active">
                        <span> <i class="bi bi-person-lines-fill"></i> Profile</span>
                        <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
                    </a></li>
              
                <li class=""><a href="car_profile.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-receipt"></i>
                        Car Profile</a></li>
                <li class=""><a href="reservations.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i>
                        Reservations</a></li>
                <li class=""><a href="bookings.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i> Bookings</a></li>

                <li class=""><a href="review.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-receipt"></i> Reviews</a></li>

                <li class=""><a href="notification.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-bell"></i> Notifications</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-bell"></i>
                        Log Out</a></li>
            </ul>
    </div>
        </div>
        <div class="col cont">
<h1 style="text-align: center; font-family: sans-serif;">User-Profile</h1>
<div class="cont-user">

    <div class="conatiner">
        <div class="row" style="background-color: white;">
            <div class="col-md-4">
                <div class="userp justify-content-center">
                    <div class="back">
                        <h3 style="color: white; text-align: center;">Hassan Zaib Abbasi</h3>
                    </div>

                    <img src="images/avatar.png">
                    <p> 4.0&nbsp;   <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp; (20)</p>
                    <label><i class="bi bi-envelope-at-fill"></i> Email</label>
                    <p> hassanzaib661@gmail.com</p>
                    <label>Address</label>
                    <p>i-14, Islamabad</p>
                    <label>Phone No.</label>
                    <p>+92 313 532 0661</p>
                    <label>Gender</label>
                    <p>Male</p>
<button class="btn btn-primary">Edit <i class="bi bi-pencil-square"></i></button>
                </div>

            </div>
             <div class="col-md-8">
                <div class="abot1">
                 <div class="abot">
                     <p>Total Reservations</p>
                     <p class="p2"></p><p class="p1">2+</p>
                 </div>
                 <div class="abot">
                    <p>Total Reviews</p>
                    <p class="p2"></p>
                     <p class="p1">9+</p>
                 </div>
                 <div class="abot">
                    <p >Total Notifications</p>
                    <p class="p2"></p>
                     <p class="p1">9+</p>
                 </div>
                 <div class="abot">
                    <p >Total Bookings</p>
                    <p class="p2"></p>
                     <p class="p1">10+</p>
                 </div>
             </div>
             </div>
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