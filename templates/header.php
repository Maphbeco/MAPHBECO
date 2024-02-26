<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trucking Business</title>
	<link rel="stylesheet" href="./css/header.css">
</head>

<body>
	<section class="cover-container d-flex w-100 vh-100 mx-auto flex-column" id="cover">
		<!-- Navbar-Stick -->
		<header class="mb-auto" id="nav">
			<nav class="d-flex p-4 align-items-center container-xl">
				<div>
					<a href="#"><img src="https://htmljstemplates.com/static_files/images/logos/famousCompanyLogo.png" height="80" alt="Company Logo"></a>
				</div>

				<div class="ms-auto d-lg-none d-md-block">
					<i class="fas fa-bars" onclick="toggleMenu('showMenu')"></i>
				</div>
				<div class="ms-auto d-lg-block d-none" id="menuHolder">
					<div class="d-flex text-uppercase justify-content-end" id="subMenu">
						<i class="fas fa-times text-white fs-3 float-end" onclick="toggleMenu('hideMenu')"></i>
						<div class="nav-item mx-2"><a class="nav-link" href="#">FACEBOOK</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#">INSTAGRAM</a></div>
						<!-- <div class="d-lg-block d-none nav-item mx-2"><a class="nav-link customFont" href="#"><i class="fas fa-phone-alt me-2"></i> 900-012-1234</a></div>
				<div class="d-lg-block d-none nav-item mx-2"><a class="nav-link" href="#"><i class="fas fa-phone-alt me-2"></i> trucking-business@gmail.com</a></div> -->
					</div>
					<div class="d-flex text-uppercase justify-content-end customFont" id="mainMenu">
						<!-- <div class="nav-item mx-2"><a class="nav-link" href="#cover">Home</a></div> -->
						<div class="nav-item mx-2"><a class="nav-link" href="#second">Services</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#third">Pricing</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#fourth">About</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#fifth">Contact</a></div>
					</div>
				</div>
			</nav>
		</header>

		<main class="text-center" id="cover-text">
			<h1 class="text-white">Cover your page.</h1>
			<p class="lead text-white">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
			<p class="lead">
				<a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
			</p>
		</main>

		<div class="mt-auto"></div>
	</section>

	<!-- Navbar-Show-When-Scrolling -->
	<div class="d-xs-block d-sm-block d-md-block d-none" id="scrollNav">
		<div class="container-xl">
			<nav class="d-flex p-4 align-items-center">
				<div>
					<a href="#"><img src="https://htmljstemplates.com/static_files/images/logos/famousCompanyLogo.png" height="80" alt="Company Logo"></a>
				</div>

				<div class="ms-auto d-lg-none d-md-block">
					<i class="fas fa-bars" onclick="toggleMenu('showMenu')"></i>
				</div>
				<div class="ms-auto d-lg-block d-none" id="menuHolder">
					<div class="d-flex text-uppercase justify-content-end" id="subMenu">
						<i class="fas fa-times text-white fs-3 float-end" onclick="toggleMenu('hideMenu')"></i>
						<div class="nav-item mx-2"><a class="nav-link" href="#">FACEBOOK</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#">INSTAGRAM</a></div>
						<!-- <div class="d-lg-block d-none nav-item mx-2"><a class="nav-link customFont" href="#"><i class="fas fa-phone-alt me-2"></i> 900-012-1234</a></div>
			<div class="d-lg-block d-none nav-item mx-2"><a class="nav-link" href="#"><i class="fas fa-phone-alt me-2"></i> trucking-business@gmail.com</a></div> -->
					</div>
					<div class="d-flex text-uppercase justify-content-end customFont" id="mainMenu">
						<div class="nav-item mx-2"><a class="nav-link" href="#">Home</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#second">Services</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#third">Pricing</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#fourth">About</a></div>
						<div class="nav-item mx-2"><a class="nav-link" href="#fifth">Contact</a></div>
					</div>
				</div>
			</nav>
		</div>

		<!-- Below-Navbar-When-Screen-Is-Small-And-Medium -->
		<div class="d-lg-none d-md-flex d-sm-flex d-flex text-white text-center customFont ls-1">
			<div class="p-3 flex-fill flare1">
				<i class="fas fa-pencil-ruler me-2"><a href="https://www.facebook.com" target="_blank">FACEBOOK</a></i>
			</div>
			<div class="p-3 flex-fill flare2">
				<i class="fas fa-phone-alt me-2"><a href="https://www.instagram.com" target="_blank">INSTAGRAM</a></i>
			</div>
		</div>
	</div>