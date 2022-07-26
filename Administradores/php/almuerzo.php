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
	<title>Activar usuario.</title>
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

			<script language="JavaScript">
				function pregunta() {
					return confirm('¿Estas seguro de enviar este formulario?');
				}
			</script>

			<div class="menu-link">
				<ul>
					<li><a href="activar.php">Volver</a></li>
					<li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<?php

	date_default_timezone_set('America/Bogota');

	$fecha = date("N");
	?>
	<p style="text-align: center;">
		<?php

		switch ($fecha) {
			case '1':
				echo "Dia actual: <strong>Lunes</strong>";
				break;

			case '2':
				echo "Dia actual: <strong>Martes</strong>";
				break;

			case '3':
				echo "Dia actual: <strong>Miércoles</strong>";
				break;

			case '4':
				echo "Dia actual: <strong>Jueves</strong>";
				break;

			case '5':
				echo "Dia actual: <strong>Viernes</strong>";
				break;
		}

		?>

	</p>
	<div class="container-contact2">
		<div class="wrap-contact2">
			<br><br>
			<h1 style="text-align: center;">Almuerzos</h1>
			<br><br>
			<form method="post" action="almuerzo2.php" class="contact2-form validate-form" autocomplete="off">
				<div class="wrap-input2 validate-input">
					<input class="input2" type="number" id="Id" name="Id" maxlength="10" required autofocus="autofocus">
					<span class="focus-input2" data-placeholder="NÚMERO DE IDENTIFICACIÓN"></span>
				</div>

				<div class="container-contact2-form-btn">
					<div class="wrap-contact2-form-btn">
						<div class="contact2-form-bgbtn"></div>
						<button class="contact2-form-btn">
							CONSULTAR
						</button>
					</div>
				</div>
			</form>
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