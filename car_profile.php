<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Car Profile</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
		
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
                        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between  ">
                        <span> <i class="bi bi-diagram-3"></i> Profile</span>
                        <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
                    </a></li>
              
                <li class=""><a href="car_profile.php" class="text-decoration-none px-3 py-2 d-block active"><i class="bi bi-receipt"></i>
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
<h1 style="text-align: center; font-family: serif;">User-Car-Profile</h1>
<div class="cont-user">

    <div class="conatiner">
        <div class="row" style="background-color: white;">
            <div class="col-md-4">
                <div class="userp justify-content-center form1" style="height:380px;">
                    <form>
                        <h2>Add Log</h2>
                        <label>Select Service Date</label><br>
                        <input type="date" name=""> <br>
                        <label>Enter Current Mileage</label><br>
                        <input type="number" name=""> <br>
                        <label>Enter Cost</label><br>
                        <input type="number" name=""><br>
                        <label>Select Service Type</label><br>
                       <select>
                           <option>- select service -</option>
                           <option>Fuel Refil</option>
                           <option>Tyre Service</option>
                           <option>Car Wash</option>
                           <option>Tunning</option>
                       </select><br><br>
                        <button class="btn btn-primary">Submit </button>

                    </form>
                </div>

            </div>



             <div class="col-md-8">

                 <div id="chart_div" class="justify-content-center" style=" height: 120px;">
                     <p>Reports Generated From your available logs.</p>
                 </div>
                 <div class="suggest">
                     <h2>Suggestion Based your car Logs</h2>

                         <p>Since your last petrol fill, this time average was greater upto 5km/h.</p>
                        <p>10 days have gone, since you last serviced your car.</p>
                        <p>According to data you should next service your car on 12/01/2023.</p>
                 </div>

             </div>
             <div class="col">
                 <div class="car-result">
                    <h2>All Record</h2>
                     <table class=" table  table-striped thead-dark table-bordered">
                         <thead style="color: white; text-align: center;" class="bg-dark">
                             <tr>
                                 <th>Service Id</th>
                                 <th>User Name</th>
                                 <th>Service Date</th>
                                 <th>Mileage</th>
                                 <th>Petrol Price</th>
                                 <th>Service Type</th>
                                 <th>Actions</th>

                             </tr>
                         </thead>
                         <tr>
                             <td>001</td>
                             <td>Abbasi</td>
                             <td>12/02/2022</td>
                             <td>10309</td>
                             <td>223.3</td>
                             <td>Petrol Refil</td>
                             <td ><div class="justify-content-around"><button class="btn btn-primary">Edit</button ><button class="btn btn-danger">Delete</button></div></td>
                         </tr>
                          <tr>
                             <td>001</td>
                             <td>Abbasi</td>
                             <td>12/02/2022</td>
                             <td>10309</td>
                             <td>223.3</td>
                             <td>Petrol Refil</td>
                             <td><button class="btn btn-primary">Edit</button ><button class="btn btn-danger">Delete</button></td>
                         </tr>
                          <tr>
                             <td>001</td>
                             <td>Abbasi</td>
                             <td>12/02/2022</td>
                             <td>10309</td>
                             <td>223.3</td>
                             <td>Petrol Refil</td>
                             <td><button class="btn btn-primary">Edit</button ><button class="btn btn-danger">Delete</button></td>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Petrol Avg.', 10],
          ['Tunning Days', 13],
          ['Car Wash', 68]
        ]);

        var options = {
          width: 400, height: 120,
          redFrom: 40, redTo: 40,
          yellowFrom:30, yellowTo: 40,
          minorTicks: 15
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

       
      }
    </script>
</body>
</html>