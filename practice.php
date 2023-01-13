<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>practice</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
		<link rel="stylesheet" type="text/css" href="Css/style1.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
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


<div class="maim-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-center">
                <h1 class="fs-4"><span
                        class="text-white">Dashboard</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="bi bi-list"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active"><a href="#"
                        class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                        <span> <i class="bi bi-diagram-3"></i> Products</span>
                        <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">02</span> -->
                    </a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-cart"></i> Reservations</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i>
                        Mechanics</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i>
                        Spare Parts Dealers</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person"></i> Car
                        Owners</a></li>

                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-receipt"></i> Manage Ads</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-bell"></i>
                        Notify</a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light"
        >
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <a class="navbar-brand fs-4" href="#">Dashboard</a>
                        <button class="btn px-1 py-0 open-btn"><i class="bi bi-list"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:600px;">
                        <ul class="navbar-nav mb-2 mb-lg-0" style="
                margin-left: -135px;">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Manage Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">View Products</a></li>
                                    <li><a class="dropdown-item" href="#">Uplaod Products</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Products</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Mechanics</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Dealers</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Car Owners</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".sidebar ul li").on('click', function () {
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });

        $('.open-btn').on('click', function () {
            $('.sidebar').addClass('active');
        });

        $('.close-btn').on('click', function () {
            $('.sidebar').removeClass('active');
        });
    </script>
</body>
</html>