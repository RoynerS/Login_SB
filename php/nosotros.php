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
            <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nosotros</h1>
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="../index.html">Inicio</a></span> <span>Nosotros</span></p>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="../index.html">PEFECCIÓN</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="../index1.php" class="nav-link">Inicio</a></li>
	          <li class="nav-item active"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="servicios.php" class="nav-link">Servicios</a></li>
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
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex ftco-animate">
    				<div class="img img-about align-self-stretch" style="background-image: url(../images/bg_3.jpg); width: 100%;"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate">
    				<h2 class="mb-4">Bienvenidos al sitio web de nuestro centro de belleza STEFFY BEAUTY.</h2>
    				<p>Somos un centro de belleza creado en el año 2022, que busca de resaltar la belleza de sus clientes y darles un buen servicio.</p>
    				<p>Nuestros trabajadores en su mayoría son jóvenes estudiantes con ganas de salir adelante y aquí se les brinda el apoyo necesario para que puedan cumplir.</p>
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
					<img src="../images/persona1.jpg" alt="" width="150" height="145" />
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
					<img src="../images/persona2.jpg" alt="" width="150" height="145" />
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
					<img src="../images/persona3.jpg" alt="" width="150" height="145" />
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
					<img src="../images/persona4.jpg" alt="" width="150" height="145" />
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