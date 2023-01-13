<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Product Reservation</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
<?php
include('header_session.php');
?>
<div class="container-fluid" style="background-color: #f8f9fa;">
	 <div class="container">
	 	<div class="row col justify-content-center">
	 		<h1 style="text-align: center;color: #14213d; font-family: serif;">Product Reservation Dashboard</h1>
	 	</div>
	 	<div class="row justify-content-around">

	 		<div class="col-md-4 reservp">
	 			<img src="images/part.jpg" alt="profile">
	 			<h2>
	 				Riphah Auto Solutions
	 			</h2>
	 			<p>
	 				No reviews
	 			</p>
	 			<button class="btn btn-primary">Get Directions</button><br><br>
	 			<label><i class="fa fa-map-marker"></i>&nbsp;From </label>
	 			<input type="text" name=""><br>
	 			<label><i class="fa fa-map-marker"></i>&nbsp;To </label>
	 			<input type="text" name=""><br><br>
	 			<div id="mapview" style="height:200px;"></div>
	 		</div>
	 		<div class="col-md-4 reservp res2 " style="height: 300px;">
	 			 <h2>Enter details</h2>
	 			 <label style="font-weight: bold;">Select Quantity To Reserve</label><br>
	 			 <input type="number" name="" placeholder="Enter Your Quantity"><br><br>
	 			 <p>Note* Reservation would be made for only 3 days</p>
	 			 <p>You would be notified for reservation status</p>
	 			 <button class="btn btn-primary">Reserve Now</button>
	 		</div>
	 		<div class="col-md-3 reservp" style="height: 380px;">
	 			<div class="card">
				<img src="images/logo.png" class="card-img-top" alt="dealers Profile Photo">
				<div class="card-body">
					
					<div >
						<div class="card-title ">
						<h4 >Alloy Rim</h4> 

						</div>
						<div class="userd align-items-baseline">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<p>&nbsp;(5)</p>
					</div>
					<div class="card-subtitle cards ">
						
						<p style="text-align: center; font-weight: bold; color: black;">PKR. 1200 /-</p>
					</div>
					</div>

					<p class="card-text my-0">
					<ul>
						<li>Honda</li>
						<li>Tyre Rim</li>
					</ul> </p>
					
				</div>
	 		</div>
	 	</div>
	 	
	 </div>
</div>



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