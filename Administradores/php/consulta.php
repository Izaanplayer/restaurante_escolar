<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
  echo "<script>alert('Usted no tiene autorización');
  window.location.href='../usuarios.php';</script>";
  die();
}


?>
<!DOCTYPE html>
<html lang="ES">

<head>
  <title>Consultar usuario.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../images/icons/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
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
  <?php

  // esta variable llega del formulario consulta.php

  $codigo = $_POST["Id"];

  // Se realiza la conexion con el servidor mysql

  include '../includes/conexion.php';

  // conecto a la tabla estudiantes y consulto por codigo

  $consulta = mysqli_query($conexion, "SELECT * FROM estudiantes where codigo=$codigo")
    or die("error al extraer los datos");

  if (mysqli_num_rows($consulta) == 0) {
    echo "<script>alert('Este usuario no existe, intenta nuevamente...');
    window.location.href='consultar.php';</script>";
  } else {
  ?>

    <header>
      <nav class="menu">
        <div class="container-menu">
          <div class="logo">
            <div class="logo-name">
              <img src="../images/icons/favicon.png" alt="">
              <a href="inicio.php">Restaurante Escolar</a>
            </div>
            <div class="icon-menu">
              <a href="#" id="btn-menu" class="btn-menu"><span class="fa fa-bars"></span>
              </a>
            </div>
          </div>
        </div>

        <div class="menu-link">
          <ul>
            <li><a href="insertar.php">Insertar</a></li>
            <li><a href="consultar.php">Consultar</a></li>
            <li><a href="activar.php">Activar</a></li>
            <li><a href="../crud/index.php" target="_blank">Modificar</a></li>
            <li><a target="_about" href="../reportes/index.php">Reportes</a></li>
            <li><a target="_blank" href="../tarjetas/index.php">Tarjetas</a></li>
            <li><a href="Iniciar.php" onclick="return(alert('Seguro que desea cambiar el estado para todos?'))">Inicio Dia</a></li>
            <li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <br><br>
    <div class="bg-contact2" style="background-image: url('http://lorempixel.com/800/500/food/');">
      <div class="container-contact2">
        <div class="wrap-contact2">
          <table class="table table-striped" style="text-align: center;">
            <thead>
              <tr>
                <th width="250">Código</th>
                <th width="250">Nombre</th>
                <th width="250">Grado</th>
                <th width="250">Estado</th>
                <th width="350">Último almuerzo</th>
                <th width="250">Especialidad</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($persona = $consulta->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo $persona['codigo']; ?></td>
                  <td><?php echo $persona['nombre']; ?></td>
                  <td><?php echo $persona['grado']; ?></td>
                  <td><?php echo "S-" . $persona['estado']; ?></td>
                  <td><?php echo $persona['fecha']; ?></td>
                  <td><?php echo $persona['especialidad']; ?></td>
                </tr>
            <?php
              }
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>



    <script src="js/jquery-3.4.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!--===============================================================================================-->
    <script src="js/menu.js"></script>

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