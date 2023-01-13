<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>deatailView</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="leaflet/leaflet.css">
	<script type="text/javascript" src="leaflet/leaflet.js"></script>
<script type="text/javascript" src="data/country.geojson"></script>


</head>
<body>
	<div>
<?php
include('header.php');
?>
</div>


<div class="container-fluid  ">
	<div class="row mapd mt-1 "  >
		<div class="col-md-4 detailView  " style="padding:0px; height :545px; overflow-y: auto; ">
	<img src="images/part.jpg" alt="cover photo">
<div class="detailView-div">
	<h4>Riphah Auto Solutions</h4>
	<div style="display: flex; flex-direction: row;">
	<p> 5.0&nbsp;  <p style="color: #ffd700;"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>&nbsp; (20)</p></div>
		<p><i class="fa fa-map-marker" style="color: blue;"></i>&nbsp;&nbsp;I-14, Islamabad</p>

<p style="border-top: 2px solid black; margin-left: -10px;"></p><p><i class="fa fa-phone" style="color: blue;"></i>&nbsp;&nbsp;+92 313 5320661</p> 
<p ><i class="fa fa-heart" style="color: red; "></i>&nbsp;&nbsp;Add to Favorite !</p>
<button style="color:white; background-color: black;" id="query1">Send Query Request</button><br><br>
<button id="reply1">Write a review&nbsp;&nbsp;<i class="fa fa-comment"></i> </button><br><br>

<h4 style="text-align: center;">All Reviews</h4>
<div class="media" >
	<div style="display: flex; flex-direction: row;">
	<img src="images/avatar.png" alt="profile" class="mr-3">
	<h5>Hassan Abbasi</h5><br>
	<p style="color: #ffd700;">&nbsp; <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p><p>&nbsp;4.0</p>
</div>
	<div class="media-body">
		
		<p>Purza Online is a platform where you can find your desiradsades!</p>
	</div>
</div>



<div class="media" >
	<div style="display: flex; flex-direction: row;">
	<img src="images/avatar.png" alt="profile" class="mr-3">
	<h5>Hassan Zaib Abbasi</h5><br>
	<p style="color: #ffd700;">&nbsp; <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p><p>&nbsp;3.0</p>
</div>
	<div class="media-body">
		
		<p>Purza Online is a platform where you can find your desires!</p>
	</div>
</div>


		</div>
	</div>
	
 
<div class="col-md-8" style="height: 545px;" id="mapview">
	
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
            <p style="font-size:10px; color:grey;">This person would be notified about your reply.</p>
            <button class="btn btn-primary">Reply</button>
        </div>
    </div>

<div class="popupQ">
	<div class="popupQ-content">
	<img src="images/close.png" class="close1" alt="close">
	<h1>Sending Query For Product Availability</h1>
	<form>
		<label>Select Product</label><br>
		<select>
			<option>Tyre</option>
			<option>Rim</option>
			<option>Engine Plug</option>
		</select><br>
		<label>Select Make</label><br>
		<select>
			<option>Kia</option>
			<option>Mercedes</option>
			<option>Honda</option>
		</select><br>
		<label>Select Variant</label><br>
		<select>
			<option>sportage</option>
			<option>civic</option>
			<option>civic-x</option>
		</select><br>
		<label>Select Model</label><br>
		<select>
			<option>2022</option>
			<option>2001</option>
			<option>2003</option>
		</select><br><br>
		<button class="btn btn-primary">Submit</button>

	</form>
	</div>
</div>


<script  >
	function initMap(){
		var options={
			zoom:12,
			center:{lat:33.738045,lng:73.084488},
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
    <script type="text/javascript">
        document.getElementById("query1").addEventListener("click",function(){
            document.querySelector(".popupQ").style.display="flex";
        })
         document.querySelector(".close1").addEventListener("click",function(){
            document.querySelector(".popupQ").style.display="none";
        })
    </script>
</body>
</html>