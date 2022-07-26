<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<?php session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion = '') {
		echo "<script>alert('Usted no tiene autorización');
  window.location.href='../expulsar.php';</script>";
		die();
	} ?>
</body>

</html>
<?php

// Se realiza la conexion con el servidor mysql

include '../includes/conexion.php';


// conecto a la tabla estudiantes y cambio estado a 0


$borrar = mysqli_query($conexion, "UPDATE estudiantes SET estado=0 where estado=1") or die("error al extraer los datos");

echo "<script>alert('Se ha iniciado el día de almuerzo para todos');
	window.location.href='index-iniciar.php';</script>";


?>