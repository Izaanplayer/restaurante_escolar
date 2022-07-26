<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
	echo "<script>alert('Usted no tiene autorización');
	window.location.href='../expulsar.php';</script>";
	die();
}


?>
<!DOCTYPE html>
<html lang="ES">

<head>
	<title>Iniciar día.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.png" />
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>

<body>

	<header>
		<nav class="menu">
			<div class="container-menu">
				<div class="logo">
					<div class="logo-name">
						<img src="../images/icons/favicon.png" alt="">
						<a href="../inicio.php">Restaurante Escolar</a>
					</div>
					<div class="icon-menu">
						<a href="#" id="btn-menu" class="btn-menu"><span class="fa fa-bars"></span>
						</a>
					</div>
				</div>
			</div>

			<div class="menu-link">
				<ul>
					<li><a href="../inicio.php">Inicio</a></li>
					<li><a href="insertar.php">Insertar</a></li>
					<li><a href="activar.php">Activar</a></li>
					<li><a href="consultar.php">Consultar</a></li>
					<li><a href="../crud/index.php">Modificar</a></li>
					<li><a target="_about" href="../reportes/seleccion.php">Reportes</a></li>
					<li><a target="_blank" href="../tarjetas/index.php">Tarjetas</a></li>
					<li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<script language="JavaScript">
		function pregunta() {
			return confirm('¿Estas seguro de hacer esta acción?');
		}
	</script>
	<br><br>
	<div class="bg-contact2" style="background-image: url('http://lorempixel.com/800/500/food/');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form method="post" action="activa.php" class="contact2-form validate-form" autocomplete="off">
					<span class="contact2-form-title">
						Inicio de día
						<p>Selecciona una opción</p>
						<hr>
						<a href="iniciar.php" onclick="return pregunta()" style="text-decoration: none;">Cambiar el estado de todos a <p style="color: red;">No almorzaron</p></a><br>
						<hr>

						<p><b>Limpiar registros.</b></p>
						<p style="text-align: justify;"><b style="color: red;">Advertencia: </b>Cuando limpies los registros los datos se eliminarán, ten mucho cuidado al eliminar alguno qué no sea el deseado.</p>
						<a href="eliminar-base-almuerzos.php" onclick="return pregunta()" style="text-decoration: none; margin-left: 30px;"><b style="color: red;">-</b> Limpiar registros de todos los qué almuerzan</a><br>
						<a href="eliminar-base-noalmuerzan.php" onclick="return pregunta()" style="text-decoration: none; margin-left: 30px;"><b style="color: red;">-</b> Limpiar registros de todos los qué no almuerzan</a><br>
						<a href="eliminar-base-repitentes.php" onclick="return pregunta()" style="text-decoration: none; margin-left: 30px;"><b style="color: red;">-</b> Limpiar registros de todos los qué repiten almuerzo</a>
					</span>
			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="../js/jquery-3.4.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../js/main.js"></script>
	<!--===============================================================================================-->
	<script src="../js/menu.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>