<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//Usuarios Admin

session_start();
$_SESSION['usuario'] = $usuario;

//conexion

//$conexion = mysqli_connect('localhost', 'promosena', 'Pr9Neiva%X;', 'promosen_restaurante');
$conexion = mysqli_connect('localhost', 'root', 'eRvlmV47F%SL97gW2EZ4@iJkF', 'restaurante');
$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas > 0) {
  header("location: Administradores/inicio.php"/*Después de ingresar lo dirige a bienvenido.html*/);
} else {
  echo "<script>alert('Error en la autenticación, intenta nuevamente.');
  window.location.href='usuarios.php';</script>";
  die();
}
mysqli_free_result($resultado);
mysqli_close($conexion);
