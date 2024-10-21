<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contacto</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="../images/logo.png" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/aos.css">

	<link rel="stylesheet" href="../css/ionicons.min.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">


	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>

	<div class="hero-wrap js-fullheight" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<div class="icon">
						<a href="../index.html" class="logo">
							<span class="flaticon-flower"></span>
							<h1>Glamour</h1>
						</a>
					</div>
					<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contacto</h1>
					<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="../index.html">Inicio</a></span> <span>Contacto</span></p>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="../index.html">Perfección</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../index1.php" class="nav-link">Inicio</a></li>
					<li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
					<li class="nav-item"><a href="servicios.php" class="nav-link">Servicios</a></li>
					<li class="nav-item active"><a href="contacto.php" class="nav-link">Contacto</a></li>
					<li class="nav-item"><a href="index.php" class="nav-link">
							<?php
							if (isset($_SESSION['user_nombre'])) {
								echo	$_SESSION['user_nombre'] ;
							} else {
								echo "Inicia Sesion";
							}  ?></a></li>

							<?php
								if(isset($_SESSION['user_nombre'])){

							?>
							<li class ="nav-item"><a href="../logout.php" class="nav-link">Salir</a></li>
							<?php
								}else{

								}
							?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="ftco-section ftco-appointment">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-md-flex align-items-center">
				<div class="col-md-2"></div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="appointment-info text-center p-5">
						<div class="mb-4">
							<h3 class="mb-3">Dirección</h3>
							<p> Carrera #6, Calle #24. Barrio Yescagrande.</p>
						</div>
						<div class="mb-4">
							<h3 class="mb-3">Teléfono</h3>
							<p class="day"><strong>305 277 9744</strong> o <strong>322 466 4169</strong></p>
						</div>
						<div>
							<h3 class="mb-3">Horario</h3>
							<p class="day"><strong>Lunes - Sábados</strong></p>
							<span>08:30am - 09:00pm</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 appointment pl-md-5 ftco-animate">
					<h3 class="mb-3">CITAS</h3>
					<form action="#" class="appointment-form">
						<div class="row form-group d-flex">
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Primer Nombre">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Apellido">
							</div>
						</div>
						<div class="row form-group d-flex">
							<div class="col-md-6">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" id="appointment_date" class="form-control" placeholder="Fecha">
								</div>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Teléfono">
							</div>
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Mensaje"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Ordenar" class="btn btn-white btn-outline-white py-3 px-4">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer text-faded text-center py-5">
		<div class="container">
			<p class="m-0 small">Copyright &copy; Steffy Beautty</p>
		</div>
		<div class="credits">
			Diseñado por Mayra Steffany Cuesta</a>
		</div>
	</footer>


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.stellar.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/aos.js"></script>
	<script src="../js/jquery.animateNumber.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/jquery.timepicker.min.js"></script>
	<script src="../js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="../js/google-map.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>