<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
	echo "<script>alert('Usted no tiene autorización');
	window.location.href='../expulsar.php';</script>";
	die();
}

//Hacemos la conexion a la base de datos

$conexion = mysqli_connect("localhost", "root", "12345678");

mysqli_select_db($conexion, "restaurante");

mysqli_query($conexion, "TRUNCATE TABLE no_almuerzan");

mysqli_close($conexion);

// Cerramos la conexion con la base de datos

echo '<script>alert("Se han limpiado los datos de los usuarios que no almuerzan correctamente.");
window.location.href="index-iniciar.php";</script>';
