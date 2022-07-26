<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
  echo "<script>alert('Usted no tiene autorización');
  window.location.href='../expulsar.php';</script>";
  die();
}

date_default_timezone_set('America/Bogota');

$activar = date("d/m/Y " . " h:i:s");

?>
<!DOCTYPE html>
<html lang="ES">

<head>
  <title>Activar usuario.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../images/icons/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>

<body>
  <form method="post" action="activa.php" class="contact2-form validate-form" autocomplete="off">
    <br><br>
    <div class="wrap-input2 validate-input">
      <input class="input2" type="number" id="estado" name="estado" maxlength="10" required>
      <span class="focus-input2" data-placeholder="NÚMERO DE IDENTIFICACIÓN"></span>
    </div>

    <label>Fecha/Hora de almuerzo recibido</label>
    <input class="input2" name="activacion" id="activacion" value="<?php echo $activar ?>" readonly="readonly">

    <div class="container-contact2-form-btn">
      <div class="wrap-contact2-form-btn">
        <div class="contact2-form-bgbtn"></div>
        <button class="contact2-form-btn">
          ACTIVAR
        </button>
      </div>
    </div>
  </form>



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