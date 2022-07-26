<!DOCTYPE html>
<html>

<head>
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



include '../includes/conexion.php';

$codigo = $_POST['Id'];
$nombre = strtoupper($_POST['Nombre']);
$grado = $_POST['Grado'];
$estado = $_POST['Estado'];
$especialidad = ucfirst($_POST['Especialidad']);


// Consulta para insertar

$insertar = "INSERT INTO estudiantes(codigo, nombre, grado, estado, especialidad) VALUES ('$codigo' ,'$nombre', '$grado', '$estado', '$especialidad')";

//No se repitan los usuarios
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE codigo = '$codigo'");
if (mysqli_num_rows($verificar_usuario) > 0) {
  echo "<script>alert('Él usuario ya está registrado');
  window.location.href='insertar.php';</script>";
  die();
}

//ejecurtar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
  echo "<script>alert('Error al registrarse');</script>
  ";
} else {
  echo "<script>alert('Datos Ingresados Exitosamante!!');
  window.location.href='../inicio.php';</script>
  ";
}

?>