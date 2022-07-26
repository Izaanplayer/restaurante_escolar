<?php
include '../includes/conexion.php';
$consulta = laConsulta();

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
<html>

<head>
	<link rel="icon" type="image/png" href="../images/icons/favicon.png" />
	<title>Todos los usuarios.</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
</head>
</head>

<body>
	<?php
	while ($persona = $consulta->fetch_assoc()) {
	?>
		<div class="tarjeta">
			<div class="arriba">
				<img id="uno" src="../images/icons/favicon.png">
				<img id="dos" src="barcode.php?text=<?php echo $persona['codigo']; ?>&size=50&orientation=horizontal&print=true&sizefactor=1">
				<div class="abajo">
					<p><?php echo $persona['nombre']; ?></p>
					<hr style="background-color: white;">
					<p>Grado: <?php echo $persona['grado']; ?></p>
					<hr style="background-color: white;">
					<p>T.I: <?php echo $persona['codigo']; ?></p>
					<hr style="background-color: white;">
					<p id="num">ID: <?php echo $persona['id']; ?></p>
				</div>
			</div>
		</div>
	<?php
	}
	?>
</body>

</html>