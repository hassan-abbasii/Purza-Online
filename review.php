<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>User Reviews</title>
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
                        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between  ">
                        <span> <i class="bi bi-diagram-3"></i> Profile</span>
                        <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
                    </a></li>
              
                <li class=""><a href="car_profile.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-receipt"></i>
                        Car Profile</a></li>
                <li class=""><a href="reservations.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i>
                        Reservations</a></li>
                <li class=""><a href="bookings.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i> Bookings</a></li>

                <li class=""><a href="review.php" class="text-decoration-none px-3 py-2 d-block active"><i class="bi bi-receipt"></i> Reviews</a></li>

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

<h1 style="text-align: center; font-family: serif;">All Reviews</h1>

<div class="notif">
    <div class="revew">
       
        <img src="images/avatar.png" alt="profile">
        <h3>Riphah Auto Parts</h3>
        <p style="color: grey;"> <i class="fa fa-star"></i> spare part dealer</p>
        <br>
        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> &nbsp; 23-01-2022</p>
        <p style="color: black"> This user is trusted!</p>
        <button id="reply"><i class="fa fa-message"></i>write a reply</button><button>Like&nbsp;<i class="fa fa-heart"></i></button>
    
    </div>
    <div class="revew"> 
       
        <img src="images/avatar.png" alt="profile">
        <h3>Riphah Auto Store</h3>
        <p style="color: grey;"> <i class="fa fa-star"></i> Mechanic</p>
        <br>
        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> &nbsp; 23-01-2022</p>
        <p style="color: black"> This user is trusted!</p>
        <button id="reply"><i class="fa fa-message"></i>write a reply</button><button>Like&nbsp;<i class="fa fa-heart"></i></button>
    
    </div>
</div>

            </div>
        </div>
    </div>
    <div class="popup">
        <div class="popup-content">
           <img src="images/close.png" class="close" alt="close">
            <h1> Replying to Riphah Auto Parts Review</h1>
            <p style="color: grey; margin-left: 10px;">Reviewed on: 22-02-2022</p>
            <h1 style="font-weight: bold;">User Name</h1>
            <textarea></textarea>
            <p style="font-size:10px; color:grey;">This dealer would be notified about your reply.</p>
            <button class="btn btn-primary">Reply</button>
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
    <script type="text/javascript">
        document.getElementById("reply").addEventListener("click",function(){
            document.querySelector(".popup").style.display="flex";
        })
         document.querySelector(".close").addEventListener("click",function(){
            document.querySelector(".popup").style.display="none";
        })
    </script>
  
</body>
</html>