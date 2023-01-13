<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/homepage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
	<div>
<?php
include('header.php');
?>
</div>
<div class="container-fluid" style="padding: none;">
	

	<div class="container ">
		<div class="row mt-5 mb-5 justify-content-around">
			<div class="col-md-3">
				<div class="homecard">
					
					<img src="images/product.png" alt="profile"><br>
					<a href="products.php"><h2>Products</h2></a>
				<p>
					Find and reserve your desired product from the list.
				</p>
				<h1>999+</h1>
				</div>
			</div>
			<div class="col-md-3">
				<div class="homecard">
					<img src="images/dealr.png" alt="profile"><br>
				<a href="dealers.php"><h2>Dealers</h2></a>
<p>
	Get your desired product from multiple availability ooptions.
</p>
<h1>003</h1>
				</div>
			</div>
			<div class="col-md-3">
				<div class="homecard">
						<img src="images/mcanic.png" alt="profile"><br>
				<a href="mechanics.php"><h2>Mechanics</h2></a>
				<p>
					Fix or maintain your cars from experienced mechanics.
				</p>
				<h1>063</h1>
				</div>
			</div>
		</div>
		
</div>

<div class="container-fluid  ">
	<div class="row py-3 mt-5  searchbox ">
			<div class="col justify-content-around">
				
				<select>
				<option>Select Product</option>
				<option>b</option>
			</select>
			<select>
				<option>Select Make</option>
				<option>b</option>
			</select>
			 <select>
				<option>Select Model</option>
				<option>b</option>
			</select>
			<select>
				<option>Select Variant</option>
				<option>b</option>
			</select>
			<select>
				<option>Select Location</option>
				<option>b</option>
			</select>

			<button class="maps btn btn-primary" style="margin-left: 20px;">Search&nbsp;<i class="fa fa-search"></i></button>
			
		</div>
	</div>
	<div class="row map mt-0">
		 
		<div class="col-md-4 item " style="padding:0px; height :600px; overflow-y: auto; ">
	<div>
		<h6>Search Results...</h6><br>
	 
	</div>
	<div class="searchview">
		<img src="images/logo.png" alt="logo"> 
		<div class="info">
		<h3><a href="detailview1.php">Abbasi Auto Parts</a></h3>
		<p style="font-size:15px;">Dealer(Registered)</p>
		<p> 5.0&nbsp;   <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp; (20)</p>
		<p style="color:blue;"><i class="fa fa-map-marker"></i>&nbsp;I-14, Islamabad</p>
		<p >
					<ul>
						<li>Honda, Toyota</li>
						<li>Tyre Accessories</li>
					</ul> </p>
		</div>
	</div>
	<div class="searchview">
		<img src="images/part.jpg" alt="logo"> 
		<div class="info">
		<h3><a href="detailview2.php">Riphah Solutions</a></h3>
		<p style="font-size:15px;">Dealer(Registered <i style="color: blue;" class="fa fa-check"></i>)</p>
		<p>No reviews</p>
		<p style="color:blue;"><i class="fa fa-map-marker"></i>&nbsp;I-14, Islamabad</p>
		<p >
					<ul>
						<li>Honda, Toyota</li>
						<li>Tyre Accessories</li>
					</ul> </p>
		</div>
	</div>
	<div class="searchview">
		<img src="images/logo.png" alt="logo"> 
		<div class="info">
		<h3><a href="detailview.php">Purza Online</a></h3>
		<p style="font-size:15px;">Dealer(Not Registered)</p>
		<p> 4.0&nbsp;   <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp; (20)</p>
		<p style="color:blue;"><i class="fa fa-map-marker"></i>&nbsp;G-8/4, Islamabad</p>
		<p >
					<ul>
						<li>Honda, Toyota</li>
						<li>Tyre Accessories</li>
					</ul> </p>
		</div>
	</div>
	<div class="searchview">
		<img src="images/logo.png" alt="logo"> 
		<div class="info">
		<h3><a href="detailview.php">Purza Online</a></h3>
		<p style="font-size:15px;">Dealer(Not Registered)</p>
		<p> 4.0&nbsp;   <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp; (20)</p>
		<p style="color:blue;"><i class="fa fa-map-marker"></i>&nbsp;G-8/4, Islamabad</p>
		<p >
					<ul>
						<li>Honda, Toyota</li>
						<li>Tyre Accessories</li>
					</ul> </p>
		</div>
	</div>
	<div class="searchview">
		<img src="images/logo.png" alt="logo"> 
		<div class="info">
		<h3><a href="detailview.php">Purza Online</a></h3>
		<p style="font-size:15px;">Dealer(Not Registered)</p>
		<p> 4.0&nbsp;   <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp; (20)</p>
		<p style="color:blue;"><i class="fa fa-map-marker"></i>&nbsp;G-8/4, Islamabad</p>
		<p >
					<ul>
						<li>Honda, Toyota</li>
						<li>Tyre Accessories</li>
					</ul> </p>
		</div>
	</div>
	
	
	
</div>

<div class="col-md-8 map1" id="mapview">
	
</div>
	</div>


	<div style="height: auto;">
		<br><br><br><br>
		<div style="height: auto;">
		<section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">Provides best solution for your auto parts and maintenance.  </h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                              
                                <h4 class="subheading" >Car-Owner</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Purza Online provides best solution to car owners to find desired car-parts according to your choice. System provides multiple ways to find your desired part online. It provides map functionalty to find and get directions to a particular store.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                           
                                <h4 class="subheading">Spare Part Dealer</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Purza Online provides a platform to Spare part dealers to manage their inventory online. This provides their customer to browse online their products and get them reserved. It also provides functionality to send query request to the dealer for availability of a product.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading" style="color: white;">
                                
                                <h4 class="subheading">Mechanic</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Purza Online provides platform to mechanics to enhance their business. It provides an opportunity to get connected with more and more customers and get their feedback and response.</p></div>
                        </div>
                    </li>
                        
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                       <a style="text-decoration:none;"href="products.php">     <h4>
                                 View
                                 <br>
                                 Products
                         </h4></a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
	</div>
<br><br><br>
	<div class="conatiner">
	<h1 style="text-align: center; font-family: serif;">Feedback From Our Happy Customers</h1>
<div class="containern">

  <div class="testimonial-card">
    <div class="text">I found this website as most efficient for finding my car part. It took me towards the exact locationof the shop where I found the part which i desired!
    	Thank You!
    	<i class="fas fa-quote-right quote"></i></div>
    
    
    
    <div class="footer">
      <div class="image">
       <img src="images/avatr.jpg" alt="profile">
      </div>
       <h3 class='person'>Riphah </h3>
      
      
    </div>
  </div>
  <div class="testimonial-card">
    <div class="text">I found this website as most efficient for finding my car part. It took me towards the exact locationof the shop where I found the part which i desired!
    	Thank You!
    	<i class="fas fa-quote-right quote"></i></div>
    
    
    
    <div class="footer">
      <div class="image">
       <img src="images/avatr.jpg" alt="profile">
      </div>
       <h3 class='person'>Riphah</h3>
      
      
    </div>
  </div>
</div>
	</div>
	
</div>




</div>
<br><br>
<div>
	<?php
include('footer.php');
	?>
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