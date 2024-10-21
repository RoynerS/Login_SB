<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>STEFFY BEAUTTY</title>
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
            <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Servicios</h1>
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="../index.html">Inicio</a></span> <span>Servicios</span></p>
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
	          <li class="nav-item active"><a href="services.php" class="nav-link">Servicios</a></li>
	          <li class="nav-item"><a href="contacto.php" class="nav-link">Contacto</a></li>
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
							<li class ="nav-item"><a href="	../logout.php" class="nav-link">Salir</a></li>
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
				<img src="../images/manicure.jpg" alt="" width="162" height="180" />
              <div class="media-body">
                <h3 class="heading">Manicure y Pedicure</h3>
                <p>Realizamos varios estilos y tipos de uñas: Semi, Gel, Aclíricas y Esculpidas.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
				<img src="../images/maquillaje.jpg" alt="" width="158" height="175" />
              <div class="media-body">
                <h3 class="heading">Maquillaje Profesional</h3>
                <p>Somos expertos en todo tipo de maquillaje y para cualquier ocasión como: Graduación, Matrimonios y Cumpleaños.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
				<img src="../images/peinado.png" alt="" width="162" height="180" />
              <div class="media-body">
                <h3 class="heading">Peinados</h3>
                <p>Peinados de cualquier estilo, de tu gusto y preferencia por nuestros profesionales capacitados. ¡Estás en las mejores manos!</p>
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
 <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Steffy Beautty</p></div>
			<div class="credits">
					Diseñado por Mayra Steffany Cuesta</a>
      </div>
        </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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