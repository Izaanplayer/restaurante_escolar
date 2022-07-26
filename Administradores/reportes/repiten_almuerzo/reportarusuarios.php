<?php 
include '../includes/conexion.php';
$consulta = noAlmuerzan();

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
  echo "<script>alert('Usted no tiene autorización');
  window.location.href='../usuarios.php';</script>";
  die();
}


?>
<!DOCTYPE html>
<html lang="ES">
<head>
  <title>Todos los usuarios.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <meta http-equiv="refresh" content="3;URL=no_almuerzan.php" />
</head>
<body>
  <br><br>
        <span class="contact2-form-title">
          REPORTANDO USUARIOS
        </span>
        <p style="text-align: center; font-size: 25px;">Espere por favor...</p>



  <script src="js/jquery-3.4.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->
  <script src="js/menu.js"></script>

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
