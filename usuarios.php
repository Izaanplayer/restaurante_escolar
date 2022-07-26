<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión. </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="icon" type="image/png" href="images/logo.png" />
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>

<body>
  <div id="bg">
    <marquee width=200 direction=right></marquee>
  </div>
  <form action="usuario.php" method="post" autocomplete="off">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario." class="email" required>
    <label for="contraseña">Contraseña:</label>
    <input type="password" name="clave" id="clave" placeholder="Ingrese su contraseña." class="pass" required>
    <button type="submit">Ingresar</button>
  </form>
  <div class="reportar-problema">
    <a href="#" style="text-decoration: none; color: white;">REPORTAR ALGÚN PROBLEMA.</a>
  </div>
</body>

</html>