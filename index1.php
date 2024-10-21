<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>STEFFY BEAUTTY</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="images/logo.png" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<div class="icon">
						<a href="index.html" class="logo">
							<span class="flaticon-flower"></span>
							<h1>Glamour</h1>
						</a>
					</div>
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sala de belleza</h1>

					<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="html/servicios.html" class="btn btn-white btn-outline-white px-4 py-3">Ver nuestros servicios</a></p>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Perfección</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
					<li class="nav-item"><a href="php/nosotros.php" class="nav-link">Nosotros</a></li>
					<li class="nav-item"><a href="php/servicios.php" class="nav-link">Servicios</a></li>
					<li class="nav-item"><a href="php/contacto.php" class="nav-link">Contacto</a></li>
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
							<li class ="nav-item"><a href="	logout.php" class="nav-link">Salir</a></li>
							<?php
								}else{

								}
							?>
							
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<img src="images/manicure.jpg" alt="" width="162" height="180" />
						<div class="media-body">
							<h3 class="heading">Manicure y Pedicure</h3>
							<p>Realizamos varios estilos y tipos de uñas: Semi, Gel, Aclíricas y Esculpidas.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<img src="images/maquillaje.jpg" alt="" width="158" height="175" />
						<div class="media-body">
							<h3 class="heading">Maquillaje Profesional</h3>
							<p>Somos expertos en todo tipo de maquillaje y para cualquier ocasión como: Graduación, Matrimonios y Cumpleaños.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<img src="images/peinado.png" alt="" width="162" height="180" />
						<div class="media-body">
							<h3 class="heading">Peinados</h3>
							<p>Peinados de cualquier estilo, de tu gusto y preferencia por nuestros profesionales capacitados. ¡Estás en las mejores manos!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4">Nuestros Expertos.</h2>
					<p>Son jóvenes con la capacitación necesaria para brindar nuestros servicios a los clientes y que se sientan satisfechos con nuestro trabajo.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<img src="images/persona1.jpg" alt="" width="150" height="145" />
						<div class="info text-center">
							<h3><a href="teacher-single.html">Mayra Lloreda</a></h3>
							<span class="position">Propietaria</span>
							<div class="text">
								<p>Creadora y dueña de STEFFY BEAUTY, es una excelente administradora de empresas y con conocimiento del mundo de la belleza.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<img src="images/persona2.jpg" alt="" width="150" height="145" />
						<div class="info text-center">
							<h3><a href="teacher-single.html">Dilys Nagle</a></h3>
							<span class="position">Manicurista</span>
							<div class="text">
								<p>Tiene cursos certificados en manicure y pedicure además de contar con buena disciplina y labor.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<img src="images/persona3.jpg" alt="" width="150" height="145" />
						<div class="info text-center">
							<h3><a href="teacher-single.html">Aura Martínez</a></h3>
							<span class="position">Maquilladora Profesional</span>
							<div class="text">
								<p>Excelente servicio y habilidad en maquillaje y cuidado facial, con Aura quedas perfecta para cualquier ocasión.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<img src="images/persona4.jpg" alt="" width="150" height="145" />
						<div class="info text-center">
							<h3><a href="teacher-single.html">Luvis Correa</a></h3>
							<span class="position">Estilista de peinados</span>
							<div class="text">
								<p>Luvis, al igual que nuestros demás expertos, realiza cualquier tipo de peinados y tiene buenas reseñas por parte de los clientes.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-discount img" style="background-image: url(images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-5 discount ftco-animate">
					<h3>Ahorre hasta un 20% </h3>
					<h2 class="mb-4">Descuento Para Estudiantes De la FUCLA.</h2>
					<p class="mb-4">Por la fidelidad de nuestros clientes realizamos descuento cada mes, van desde el 10% hasta el 20% si eres estudiante de la FUCLA en Quibdó.</p>
					<p><a href="#" class="btn btn-white btn-outline-white px-4 py-3">Reservar Ahora</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Nuestro Trabajo</h2>
					<p>Estas son algunas de tantas cosas que tenemos para ofrecerles en nuestro salón, son siempre bienvenidos.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<a href="#" class="work-entry">
						<img src="images/cliente1.jpg" alt="" width="349.98" height="409.73" />
						<div class="info d-flex align-items-center">
							<div>
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
									<span class="icon-search"></span>
								</div>
								<h3>Maquillaje</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 ftco-animate">
					<a href="#" class="work-entry">
						<img src="images/cliente2.jpg" alt="" width="349.98" height="409.73" />
						<div class="info d-flex align-items-center">
							<div>
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
									<span class="icon-search"></span>
								</div>
								<h3>Manicure</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 ftco-animate">
					<a href="#" class="work-entry">
						<img src="images/cliente3.jpg" alt="" width="349.98" height="409.73" />
						<div class="info d-flex align-items-center">
							<div>
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
									<span class="icon-search"></span>
								</div>
								<h3>Peinado</h3>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">RANGO DE PRECIOS</h2>
					<p>Estos son los valores de nuestros servicios divididos en diferentes combos y categorías:</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<div>
							<h3 class="mb-4">Básico</h3>
							<p><span class="price">$150.000</span> <span class="per"></span></p>
						</div>
						<ul>
							<li>Manicure y pedicure</li>
							<li>Estilo de gusanillos</li>
							<li>Maquillaje natural</li>
						</ul>
						<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Agendar Ahora</a></p>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<div>
							<h3 class="mb-4">Platino</h3>
							<p><span class="price">$210.000</span> <span class="per"></span></p>
						</div>
						<ul>
							<li>Manicure y pedicure en aclírico</li>
							<li>Trenzas en Kanekalon</li>
							<li>Maquillaje para fiesta</li>
							<li>Limpieza facial</li>
						</ul>

						<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Agendar Ahora</a></p>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<div>
							<h3 class="mb-4">Premium</h3>
							<p><span class="price">$280.000</span> <span class="per"></span></p>
						</div>
						<ul>
							<li>Puesta de extensión</li>
							<li>Uñas semipermanentes</li>
							<li>Masaje y limpieza facial</li>
							<li>Maquillaje social</li>
						</ul>
						<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Agendar Ahora</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>



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


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>