<?php
require_once('../db/Database.php');
require_once('../public/Generate.php');
$nombre = 'Usuario';

session_start();

if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['rol_id'] == 1) {
    header('Location: ../private/tablaVideojuegos.php');
  } else if ($_SESSION['user']['rol_id'] == 2) {
    header('Location: ../index.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="./../styles/style.css" />
  <link rel="stylesheet" href="./../styles/login.css" />
  <link rel="stylesheet" href="./../styles/fontawesome/css/all.css" />
  <link rel="shortcut icon" href="#" type="image/x-icon" />
  <script defer src="../js/login.js"></script>
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, Generate::AUTH);
  ?>
  <main class="contenedor">
    <div class="contenedor" id="login">
      <form action="comprobar.php" method="post">
        <label for="usuario">usuario</label>
        <input type="text" name="user" />
        <label for="psswd">contraseña</label>
        <input type="password" name="pass" />
        <input type="submit" value="enviar" />
      </form>
      <button onclick="cambio()">regístrate</button>
    </div>
    <div class="contenedor" id="registrarse">
      <form action="registro.php" method="post">
        <label for="correo">correo</label>
        <input type="text" name="correo" />
        <label for="usuario">usuario</label>
        <input type="text" name="usuario" />
        <label for="psswd">contraseña</label>
        <input type="password" name="psswd" id="contraseña" onblur="contrasena()" required />
        <div class="contra"></div>
        <div class="pruebas">
          <span id="minuscula">Una letra <b>minúscula</b></span>
          <span id="mayuscula">Una letra <b>mayúscula</b></span>
          <span id="dosseguidos"><b>Dos</b> dígitos seguidos</span>
          <span id="signo">Un cáracter <b>especial</b> (- _ . + @)</span>
          <span id="longitud">Longitud <b>mínima</b> de 10 dígitos</span>
        </div>
        <input type="submit" value="enviar" id="botonEnviar" />
      </form>
      <button onclick="cambio()">logeate</button>
    </div>
  </main>
  <?php
  echo Generate::generateFooter(Generate::AUTH);
  ?>
</body>

</html>