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
						<li><a href="almuerzo.php">Volver</a></li>
						<li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<?php

		date_default_timezone_set('America/Bogota');

		$fecha = date("N");

		$activar = date("d/m/Y " . " h:i:s");

		// esta variable llega del formulario consulta.php

		$codigo = $_POST["Id"];

		// Se realiza la conexion con el servidor mysql

		include '../includes/conexion.php';

		// conecto a la tabla estudiantes y consulto por codigo

		$consulta = mysqli_query($conexion, "SELECT * FROM estudiantes where codigo=$codigo")
			or die("error al extraer los datos");

		if (mysqli_num_rows($consulta) == 0) {
			echo "<script>alert('Este usuario no existe, intenta nuevamente...')</script>";
		} else {
		?>



			<?php
			while ($persona = $consulta->fetch_assoc()) {
			?>
				<br><br>
				<form method="post" action="activar2.php" class="contact2-form validate-form" autocomplete="off" style="text-align: center;">
					<label>Nombre del estudiante</label>
					<input class="input2" id="nombre" name="nombre" value="<?php echo $persona['nombre']; ?>" readonly="readonly" style="text-align: center;">
					</div>

					<input class="input2" name="codigo" id="codigo" value="<?php echo $persona['codigo']; ?>" readonly="readonly" style="visibility: hidden; display: none;">

					<label>Especialidad</label>
					<input class="input2" name="especialidad" id="especialidad" value="<?php echo $persona['especialidad']; ?>" readonly="readonly" style="text-align: center;">

					<label>Grado</label>
					<input class="input2" name="grado" id="grado" value="<?php echo $persona['grado']; ?>" readonly="readonly" style="text-align: center;">

					<input class="input2" name="activacion" id="activacion" value="<?php echo $activar ?>" readonly="readonly" style="visibility: hidden; display: none;">

					<input class="input2" name="fecha" id="fecha" value="<?php echo $fecha; ?>" readonly="readonly" style="visibility: hidden; display: none;">

					<div class="wrap-input2 validate-input">
						<p style="text-align: center;">
							<?php
							switch ($fecha) {
								case '1':
									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1003") {
										echo "Electronica décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1002") {
										echo "Contabilidad décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1104") {
										echo "Sistemas ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1004") {
										echo "Sistemas décimo puede almorzar hoy.";
									}

									/*NO PUEDEN ALMORZAR LUNES*/

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1103") {
										echo "Electronica ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1102") {
										echo "Contabilidad ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Ingles" and $persona['grado'] == "1001") {
										echo "Ingles décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}
									break;

								case '2':
									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1004") {
										echo "Sistemas décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1102") {
										echo "Contabilidad ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1103") {
										echo "Electrónica ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Ingles" and $persona['grado'] == "1001") {
										echo "Inglés décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1003") {
										echo "Electrónica décimo puede almorzar hoy.";
									}

									/*NO PUEDEN ALMORZAR MARTES*/

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1104") {
										echo "Sistemas ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1002") {
										echo "Contabilidad décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}
									break;

								case '3':
									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1004") {
										echo "Sistemas décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1003") {
										echo "Electrónica décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1002") {
										echo "Contabilidad décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1104") {
										echo "Sistemas ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Ingles" and $persona['grado'] == "1001") {
										echo "Inglés décimo puede almorzar hoy.";
									}

									/*NO PUEDEN ALMORZAR MIÉRCOLES*/

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1103") {
										echo "Electrónica ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1102") {
										echo "Contabilidad ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}
									break;

								case '4':
									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1103") {
										echo "Electrónica ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1104") {
										echo "Sistemas ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1004") {
										echo "Contabilidad décimo puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Ingles" and $persona['grado'] == "1001") {
										echo "Inglés décimo puede almorzar hoy.";
									}

									/*NO PUEDEN ALMORZAR JUEVES*/

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1102") {
										echo "Contabilidad ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1003") {
										echo "Electrónica décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1004") {
										echo "Sistemas décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}
									break;

								case '5':
									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1103") {
										echo "Electrónica ónce puede almorzar hoy.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1102") {
										echo "Contabilidad ónce puede almorzar hoy.";
									}

									/*NO PUEDEN ALMORZAR VIERNES*/

									if ($persona['especialidad'] == "Electronica" and $persona['grado'] == "1003") {
										echo "Electrónica décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Contabilidad" and $persona['grado'] == "1002") {
										echo "Contabilidad décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1004") {
										echo "Sistemas décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Sistemas" and $persona['grado'] == "1104") {
										echo "Sistemas ónce no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}

									if ($persona['especialidad'] == "Ingles" and $persona['grado'] == "1001") {
										echo "Inglés décimo no puede almorzar hoy. <br><strong>Razón</strong>: Hoy no es él día de ellos.";
									}
									break;
							}

							?>
						</p>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								ACTIVAR
							</button>
					<?php
				}
			}
					?>
						</div>
					</div>
				</form>



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