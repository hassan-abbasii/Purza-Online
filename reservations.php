<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Reservation</title>
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
                <li class=""><a href="reservations.php" class="text-decoration-none px-3 py-2 d-block active"><i class="bi bi-person"></i>
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
<h1 style="text-align: center; font-family: sans-serif;">User-Reservations</h1>
<div class="cont-user">

    <div class="conatiner">
        <div class="row">
            <div class="col">
                <div class=" justify-content-center reserv " style="height:380px;">
                   <table class="table table-striped thead-dark" >
                       <thead>
                           <tr>
                               <th>Product id</th>
                               <th>Dealer id</th>
                               <th>Product Name</th>
                               <th>Dealer Name</th>
                               <th>Product Qty.</th>
                               <th>Res. Date</th>
                               <th>Pending Bill</th>
                               <th>Expire On</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tr>
                           <td>001</td>
                           <td>0101</td>
                           <td>Tyre</td>
                           <td>Riphah Parts</td>
                           <td> 1</td>
                           <td>01/02/2023</td>
                           <td>PKR. 1250</td>
                           <td>05/02/2023</td>
                           <td>Expired</td>
                           <td><div class="justify-content-around"><button class="btn btn-primary">Edit</button ><button class="btn btn-danger">Cancel</button></div></td>
                       </tr>
                       <tr>
                           <td>001</td>
                           <td>0101</td>
                           <td>Tyre</td>
                           <td>Riphah Parts</td>
                           <td> 1</td>
                           <td>01/02/2023</td>
                           <td>PKR. 1250</td>
                           <td>05/02/2023</td>
                           <td>Expired</td>
                           <td><div class="justify-content-around"><button class="btn btn-primary">Edit</button ><button class="btn btn-danger">Cancel</button></div></td>
                       </tr>
                       <tr>
                           <td>001</td>
                           <td>0101</td>
                           <td>Tyre</td>
                           <td>Riphah Parts</td>
                           <td> 1</td>
                           <td>01/02/2023</td>
                           <td>PKR. 1250</td>
                           <td>05/02/2023</td>
                           <td>Expired</td>
                           <td><div class="justify-content-around"><button class="btn btn-primary">Edit</button ><button class="btn btn-danger">Cancel</button></div></td>
                       </tr>
                   </table>
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