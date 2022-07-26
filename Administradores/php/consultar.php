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

      <div class="menu-link">
        <ul>
          <li><a href="../inicio.php">Inicio</a></li>
          <li><a href="insertar.php">Insertar</a></li>
          <li><a href="activar.php">Activar</a></li>
          <li><a href="../crud/index.php">Modificar</a></li>
          <li><a href="../reportes/seleccion.php">Reportes</a></li>
          <li><a href="../tarjetas/index.php">Tarjetas</a></li>
          <li><a href="index-iniciar.php">Inicio Dia</a></li>
          <li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <br><br>
  <div class="bg-contact2" style="background-image: url('http://lorempixel.com/800/500/food/');">
    <div class="container-contact2">
      <div class="wrap-contact2">
        <form method="post" action="consulta.php" class="contact2-form validate-form" autocomplete="off">
          <span class="contact2-form-title">
            Consultar Usuario
          </span>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="number" id="Id" name="Id" maxlength="10" required>
            <span class="focus-input2" data-placeholder="NÚMERO DE IDENTIFICACIÓN"></span>
          </div>

          <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
              <div class="contact2-form-bgbtn"></div>
              <button class="contact2-form-btn">
                CONSULTAR
              </button>
            </div>
          </div>
          <br>
          <span style="margin-left: 38%; font-size: 12px;">VER TODOS LOS USUARIOS</span><br>
          <a style="text-decoration: none; margin-left: 45%; font-size: 10px;" target="_blank" href="tabla.php" class="btn-enviar">Click Aquí</a>

        </form>
      </div>
    </div>
  </div>



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