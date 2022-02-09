<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('assets/owlcarousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/owlcarousel/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/css/app.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>

</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light d-none d-sm-block">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="assets/img/brand/brand.jpg" width="70"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#">Features</a>
					<a class="nav-link" href="#">Pricing</a>
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</div>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom nav-mobile">
		<div class="container justify-content-center">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="pesanan.php" class="nav-link">
						<img src="assets/img/icon/news.png" width="45" class="icon-nav-pesanan">
					</a>
				</li>

				<li class="nav-item">
					<a href="{{url('/')}}" class="nav-link">
						<img src="assets/img/icon/house.png" width="45" class="icon-nav-beranda">
					</a>
				</li>

				<li class="nav-item">
<<<<<<< HEAD:resources/views/public/layout/header.blade.php
					<a href="{{url('/login')}}" class="nav-link">
						<img src="assets/img/icon/user.png" width="45"  class="icon-nav-profile">
=======
					<a href="login.php" class="nav-link">
						<img src="assets/img/icon/user.png" width="45" class="icon-nav-profile">
>>>>>>> 73d132179453262b0042b91f94535f508129bd11:resources/views/public/home/header.blade.php
					</a>
				</li>
			</ul>
		</div>
	</nav>