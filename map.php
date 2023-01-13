<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>practice</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="leaflet/leaflet.css">
	<script type="text/javascript" src="leaflet/leaflet.js"></script>
<script type="text/javascript" src="data/country.geojson"></script>


</head>
<body>
	<div>
		<h1>my map</h1>
		<div id="map" style="height:400px;">
			
		</div>
	</div>
<script type="text/javascript">
	var map=L.map('map').setView([43.8476, 18.3564], 23);
	var countries=L.geojson(country).addTo(map);
	map.fitBounds(countries.getBounds());
</script>
</body>
</html>