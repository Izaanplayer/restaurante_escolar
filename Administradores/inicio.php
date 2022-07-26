<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
  echo "<script>alert('Usted no tiene autorización');
  window.location.href='expulsar.php';</script>";
  die();
}


?>
<!DOCTYPE html>
<html lang="ES">
<head>
  <title>Inicio.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>

  <header>
    <nav class="menu">
      <div class="container-menu">
        <div class="logo">
          <div class="logo-name">
            <img src="images/icons/favicon.png" alt="">
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
          <li><a href="php/insertar.php">Insertar</a></li>
          <li><a href="php/consultar.php">Consultar</a></li>
          <li><a href="php/activar.php">Activar</a></li>
          <li><a href="crud/index.php">Modificar</a></li>
          <li><a href="reportes/seleccion.php">Reportes</a></li>
          <li><a href="tarjetas/index.php">Tarjetas</a></li>
          <li><a href="php/index-iniciar.php">Inicio Dia</a></li>
          <li><a style="color: red;" href="cerrar_sesion.php">Salir</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <br><br>
  <div class="bg-contact2" style="background-image: url('http://lorempixel.com/800/500/food/');">
    <div class="container-contact2">
      <div class="wrap-contact2">
        <form method="post" action="activa.php" class="contact2-form validate-form" autocomplete="off">
          <span class="contact2-form-title">
            ¡Hola!
          </span>
          <p style="text-align: center; font-size: 20px;">Utiliza nuestro menú de navegación para desplazarte por el programa ^_^.</p>
        </div>
      </div>
    </form>
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
