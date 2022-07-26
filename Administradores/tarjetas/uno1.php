<?php
include '../includes/conexion.php';

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
	<title>Tarjetas.</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
</head>
</head>

<body>
	<?php
	$codigo = $_POST["Id"];

	$registro = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE codigo = '$codigo'");

	while ($reg = mysqli_fetch_array($registro)) {
	?>
		<div class="tarjeta">
			<div class="arriba">
				<img id="uno" src="../images/icons/favicon.png">
				<img id="dos" src="barcode.php?text=<?php echo $reg['codigo']; ?>&size=50&orientation=horizontal&print=true&sizefactor=1">
				<div class="abajo">
					<p><?php echo $reg['nombre']; ?></p>
					<hr style="background-color: white;">
					<p>Grado: <?php echo $reg['grado']; ?></p>
					<hr style="background-color: white;">
					<p>T.I: <?php echo $reg['codigo']; ?></p>
					<hr style="background-color: white;">
					<p id="num">ID: <?php echo $reg['id']; ?></p>
				</div>
			</div>
		</div>

	<?php } ?>
</body>

</html>