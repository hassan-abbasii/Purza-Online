<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Mechanic Booking</title>
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
		<div class="row">
			<div class="col-md-3 mbook">
				<div class="card">
				<img src="images/logo.png" class="card-img-top" alt="dealers Profile Photo">
				<div class="card-body">
					
					<div >
						<div class="card-title dp">
						<h4 >Riphah</h4> 
						<img  src="images/avatar.png" alt="profile">
						</div>
						<div class="userd align-items-baseline">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<p>&nbsp;(5)</p>
					</div>
					<div class="card-subtitle cards ">
						<i class="fa fa-map-marker"></i>&nbsp;
						<p>I-14, Islamabad</p>
					</div>
					</div>

					<p class="card-text my-0">
						<i class="fa fa-phone">&nbsp;&nbsp;0312 1212121</i>
					<ul>
						<li>Radiator Specialist</li>
						<li>All Makes </li><br>
						<p style="font-weight: bold;"> shop Opening Hours</p>
						<li>08:00 to 18:00</li>
					</ul> </p>
					<button id="reply1" class="btn btn-primary">Write a review</button>
				</div>
			</div>
			</div>
			<div class="col-md-4 mbook">
				<h2>Book Mechanic Now</h2>
				<label>Select Date</label><br>
				<input type="date" name=""><br><br>
				<label>Select Service</label><br>
				<select>
					<option>Radiator Wash</option>
					<option>Radiator Airing</option>
				</select><br><br>
					<label>Select Service Type</label><br>
				<select>
					<option>Basic</option>
					<option>Full Service</option>
				</select><br><br><br>
				<button class="btn btn-primary">Book Now</button>
				 <p style="font-size: 15px; color: grey;">*See Notification window for response update.</p>	
				</div>


				
				</div>
		</div>
	</div>
	
<div class="popup">
        <div class="popup-content">
           <img src="images/close.png" class="close" alt="close">
            <h1> Reviewing to Riphah Auto Parts </h1>
            <p style="color: #ffd700; margin-left: 10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
            <h1 style="font-weight: bold;">User Name</h1>
            <textarea></textarea>
            <p style="font-size:10px; color:grey;">This person would be notified about your review.</p>
            <button class="btn btn-primary">Review</button>
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
<script type="text/javascript">
        document.getElementById("reply1").addEventListener("click",function(){
            document.querySelector(".popup").style.display="flex";
        })
         document.querySelector(".close").addEventListener("click",function(){
            document.querySelector(".popup").style.display="none";
        })
    </script>
</body>
</html>