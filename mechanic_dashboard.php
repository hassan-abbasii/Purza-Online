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
    <label>Add shop Location lat. long. From Map</label>
    <input type="number" name="" ><input type="number" name=""><button class="btn btn-primary">Add</button>
    
    <h2>Add Shop Details</h2>
    <label>Shop Name</label><br>
    <input type="text" name=""><br>

    <label>Choose Day</label><br>
    <select>
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
    </select><br>
    <label>Choose Open Hour</label><br>
    <select>
        <option>00</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
    </select><br>
    <label>Choose Close Hour</label><br>
    <select>
        <option>00</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
    </select><br>
    <br><br>
        <button class="btn btn-primary">Add Detail</button>
</div>
<div id="mapview" class="mapview1">
   
</div>
<div class="product1 justify-content-center">
    <i class="fa fa-user" ></i>
    <h2>002</h2>
    <p>Total Requests</p>
</div>
<div class="product1 justify-content-center">
    <i class="fa fa-user" ></i>
    <h2>0</h2>
    <p>Total Reviews</p>
</div>
            
        </div>
<div class="productdealer">
    <h1>Shop Details</h1>
    <table class="table table-striped thead-dark">
        <thead class="">
            <th>Shop Name</th>
            <th>Phone Number</th>
            <th>Day</th>
            <th>Open Hour</th>
            <th>Close Hour</th>
            <th>Action</th>
        </thead>
        <tr>
           <td> Riphah Parts</td>
           <td>0313 0000922</td>
           <td>Monday</td>
           <td>00</td>
           <td>14</td>
            <td><button class="btn btn-primary">Edit</button></td>

        </tr>
         <tr>
            <td> Riphah Parts</td>
           <td>0313 0000922</td>
           <td>Monday</td>
           <td>00</td>
           <td>14</td>
            <td><button class="btn btn-primary">Edit</button></td>

        </tr>
         <tr>
            <td> Riphah Parts</td>
           <td>0313 0000922</td>
           <td>Monday</td>
           <td>00</td>
           <td>14</td>
            <td><button class="btn btn-primary">Edit</button></td>

        </tr>
    </table>
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
    <script  >
    function initMap(){
        var options={
            zoom:16,
            center:{lat:33.617214,lng:72.972060},
              mapTypeControl: false,

        }
          var map = new google.maps.Map(document.getElementById('mapview'), options);
    }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnx1mXV_r_JGdfM4GGf-p9e7uQGCg8a1I&callback=initMap" >
// Initialize and add the map
/*
var map=L.map('mapview').setView([33.738045, 73.084488], 23);
    var countries=L.geoJson(country).addTo(map);
    map.fitBounds(countries.getBounds());
    */
</script>
</body>
</html>