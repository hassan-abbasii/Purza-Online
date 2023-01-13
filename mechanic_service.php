<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mechanic dashboard</title>
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
include('mechanic_header.php');
?>
</div>
<div class="container-fluid">
    <div class="row dash-cont">
        <div class="col dash">
            <h2 >Dashboard</h2>
            <div class="aboutdiv-heading-border bg-light" ><br>
    </div>
    <div>
         <ul class="list-unstyled px-2">
                <li ><a href="#" 
                        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between ">
                        <span> <i class="bi bi-diagram-3"></i> Profile</span>
                        <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
                    </a></li>
              
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block "><i class="bi bi-receipt"></i>
                        Booking Requests</a></li>
                
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block "><i class="bi bi-person"></i> Services</a></li>

                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block active"><i class="bi bi-receipt"></i> Reviews</a></li>

                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block "><i class="bi bi-bell"></i> Notifications</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-bell"></i>
                        Log Out</a></li>
            </ul>
    </div>
        </div>
        <div class="col">
            <div style="display: flex; flex-direction: row;">


<div class="dealer1">
    <h2>Add Service Details</h2>
    <label>Choose Service</label><br>
    <select>
        <option>Tyre-Special</option>
        <option>Engine</option>
        <option>Gear</option>
        <option>Electrician</option>
    </select><br>
    <label>Choose Sub Service</label><br>
    <select>
        <option>Tyre Puncture</option>
        <option>Basic Tunning</option>
        <option>Oil Change</option>
        <option>Head Light</option>
    </select><br>
    <label>Select Make</label><br>
    <select>
      <option>Honda</option>
        <option>Kia</option>
        <option>Toyota</option>
        <option>Engine oil</option>
        </select><br>
        <label>Select Model</label><br>
        <select>
      <option>2000</option>
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        </select><br><br>
    <label>Service Description</label><br>
    <input type="text" name=""><br>
    <label>Enter Price</label><br>
    <input type="number" name=""><br>
    <br><br>
        <button class="btn btn-primary">Add Detail</button>
</div>


</div>

<div class="productdealer">
    <h1>Details of Service Categories that User can Search</h1>
    <table class="table table-striped thead-dark">
        <thead class="">
            <th>Service</th>
            <th>Service-type</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tr>
            <td>Tyre</td>
            <td>Puncture</td>
            <td>Honda</td>
            <td>2001</td>
            <td>PKR. 100</td>
            <td><button class="btn btn-danger">Delete</button></td>

        </tr>
         <tr>
       <td>Tyre</td>
            <td>Puncture</td>
            <td>Honda</td>
            <td>2001</td>
            <td>PKR. 100</td>
            <td><button class="btn btn-danger">Delete</button></td>

        </tr>
         <tr>
            <td>Tyre</td>
            <td>Puncture</td>
            <td>Honda</td>
            <td>2001</td>
            <td>PKR. 100</td>
            <td><button class="btn btn-danger">Delete</button></td>

        </tr>
    </table>
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