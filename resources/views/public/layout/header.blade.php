<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
					<a class="nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#">Pesanan</a>
					<a class="nav-link" href="#">Akun</a>
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</div>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom nav-mobile">
		<div class="container justify-content-center">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="{{url('/pesanan')}}" class="nav-link">
						<img src="assets/img/icon/news.png" width="45" class="icon-nav-pesanan">
					</a>
				</li>

				<li class="nav-item">
					<a href="{{url('/')}}" class="nav-link">
						<img src="assets/img/icon/house.png" width="45" class="icon-nav-beranda">
					</a>
				</li>

				<li class="nav-item">
					<a href="{{url('/login')}}" class="nav-link">
						<img src="assets/img/icon/user.png" width="45" class="icon-nav-profile">
					</a>
				</li>
			</ul>
		</div>
	</nav>