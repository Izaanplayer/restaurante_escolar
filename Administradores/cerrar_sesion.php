<?php 
session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
	echo "<script>alert('Usted no tiene autorización');
  window.location.href='../cerrar_sesion.php';</script>";
  die();
}

session_destroy();
header("Location: ../usuarios.php");



 ?>