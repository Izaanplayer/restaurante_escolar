<?php

$consulta=ConsultarUsuario($_GET['id']);

function ConsultarUsuario( $no_usuario )
{
 include 'conexion.php';
 $sentencia="SELECT * FROM estudiantes WHERE id='".$no_usuario."' ";
 $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
 $fila=$resultado->fetch_assoc();

 return [
  $fila['codigo'],
  $fila['nombre'],
  $fila['grado'],
  $fila['estado'],
  $fila['especialidad'],
  $fila['fecha']
];
}

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
  echo "<script>alert('Usted no tiene autorización');
  window.location.href='../expulsar.php';</script>";
  die();
}
?>
<!DOCTYPE html>
<html lang="ES">
<head>
  <title>Insertar usuario.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
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
          <li><a href="index.php">Volver</a></li>
          <li><a href="#"></a></li>
          <li><a style="color: red;" href="../cerrar_sesion.php">Salir</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <br><br>
  <div class="bg-contact2" style="background-image: url('http://lorempixel.com/800/500/food/');">
    <div class="container-contact2">
      <div class="wrap-contact2">
        <form method="post" action="modificar_user.php" class="contact2-form validate-form" autocomplete="off">
          <span class="contact2-form-title">
            Modificar Usuario
          </span>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="number" id="id" name="id" value="<?php echo $_GET['id'] ?>" readonly="readonly">
          </div>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="text" id="codigo" name="codigo" value="<?php echo $consulta[0] ?>">
          </div>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="text" id="nombre" name="nombre" value="<?php echo $consulta[1] ?>">
          </div>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="text" id="grado" name="grado" value="<?php echo $consulta[2] ?>">
          </div>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="text" id="estado" name="estado" value="<?php echo $consulta[3] ?>">
          </div>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="text" id="especialidad" name="especialidad" value="<?php echo $consulta[4] ?>">
          </div>

          <div class="wrap-input2 validate-input">
            <input class="input2" type="text" id="fecha" name="fecha" value="<?php echo $consulta[5] ?>">
          </div>

          <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
              <div class="contact2-form-bgbtn"></div>
              <button class="contact2-form-btn">
                INSERTAR
              </button>
            </div>
          </div>
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
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

</body>
</html>
