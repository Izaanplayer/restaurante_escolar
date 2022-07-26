<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
	echo "<script>alert('Usted no tiene autorización');
	window.location.href='../expulsar.php';</script>";
	die();
}


?>
<!DOCTYPE html>
<html lang="ES">
<head>
	<title>Activar usuario.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../logo.png"/>
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

			<script language="JavaScript">
				function pregunta(){
					return confirm('¿Estas seguro de enviar este formulario?');
				}
			</script>

			<div class="menu-link">
				<ul>
					<li><a href="../seleccion.php">Volver</a></li>
					<li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<br><br>
	<script language="JavaScript">
        function pregunta(){
          return confirm('¿Estas seguro de reportar estos usuarios?');
        }
      </script>
	<div class="bg-contact2" style="background-image: url('http://lorempixel.com/800/500/food/');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form method="post" action="activa.php" class="contact2-form validate-form" autocomplete="off">
					<span class="contact2-form-title">
						Reportes
						<p>Selecciona una opción</p>
						<br>
						<hr>
						<a href="no_almuerzan.php" style="text-decoration: none;">Mostrar reporte de usuarios que no almorzaron</a><br>
						<a href="index.php" target="_blank" style="text-decoration: none; margin-left: 30px;">Mostrar reporte de usuarios que no almorzaron (.pdf)</a><br><br>
						<hr>
						<a href="reportarusuarios.php" onclick="return pregunta()" style="text-decoration: none; color: red;">Reportar usuarios que no almorzaron</a>
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
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>

	</body>
	</html>
