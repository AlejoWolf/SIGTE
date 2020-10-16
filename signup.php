<?php 

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Registrarse</title>
		<meta charset="utf-8" />
		<link rel="icon" href="assets/multimedia/iconos/25años.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">SIGTE | Sistema Gesto de Tramites Estudiantiles</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="aboutus.html">Sobre nosotros</a></li>
							<li><a href="login.php" class="button primary">Inicia Sesión</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Crea tu Usuario</h2>
							<p>Registra aqui tus datos para comenzar a utilizar el sistema SIGTE, este proceso de creacion de cuenta es unicamente para estudianties, no para docentes ni administrativos.</p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<section id="content">
										<a  class="image fit"><img src="assets/multimedia/images/matriculacion.jpg" alt="Registro" /></a>
										<h3>Datos Personales para la cuenta</h3>
										<form method="post" action="#">
											<div class="row gtr-uniform gtr-50">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="name" id="name" value="" placeholder="Ingresa tus dos Nombres" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="text" name="lastname" id="lastname" value="" placeholder="Ingresa tus dos Apellidos" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="text" name="ci" id="ci" value="" placeholder="Ingresa tu cedula de identificación" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="email" name="email" id="email" value="" placeholder="Email" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="password" name="password" id="password" value="" placeholder="Ingrese su contraseña" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="password" name="cpass" id="cpass" value="" placeholder="Confirmar la contraseña" />
												</div> 
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" value="Registrar" class="primary" />
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Inicia Sesión</h3>
											<p>Si ya tienes una cuenta ingresa para que puedas realizar tus tramites de manera rapida y sensilla, solo dale click en el boton e inicia Sesión.</p>
											<footer>
												<ul class="actions">
													<li><a href="login.php" class="button">Iniciar Sesión</a></li>
												</ul>
											</footer>
										</section>
										<hr />
										<section>
											<a href="#" class="image fit"><img src="assets/multimedia/images/tramites.jpg" alt="" /></a>
										</section>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/dylan.jaramillosoria/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.linkedin.com/in/dylan-jaramillo-soria-b61261153/" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://www.instagram.com/dylan_ajs/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/AlejoWolf" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; SIGTE</li><li>Design: Dylan A. Jaramillo</a></li>
					</ul>
				</footer>
		</div>
		<!-- Scripts -->
		<div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		</div>
	</body>
</html>