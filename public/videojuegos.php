<?php
require_once('../db/Database.php');
require_once('Generate.php');
$nombre = 'Usuario';
$sesion = 'Iniciar';

session_start();

if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['rol_id'] == 2) {
    header('Location: ../private/tablaVideojuegos.php');
  } else if ($_SESSION['user']['rol_id'] == 1) {
    $nombre = $_SESSION['user']['usuario'];
    $sesion = 'Cerrar';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Joaquin Napan y Jonas Gómez">
  <meta name="description" content="Tienda de videojuegos y periféricos Online">
  <meta name="keywords" content="Videojuegos, Steam, Periféricos, ">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>Tienda de videojuegos</title>
  <link type="text/css" rel="stylesheet" href="./../styles/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, $sesion, Generate::PUBLIC);
  ?>
  <main>
    <section>
      <h2>Nuevos Juegos</h2>
      <div class="contenedor">
        <div class="contenedor card">
          <div class="card-imagen" id="uno"></div>
          <div class="contenedor card-texto">
            <p>Elden Ring</p>
            <p>juego chulo</p>
            <p>39.99€</p>
          </div>
        </div>
        <div class="contenedor card">
          <div class="card-imagen" id="dos"></div>
          <div class="contenedor card-texto">
            <p>GTA V</p>
            <p>juego chulo</p>
            <p>99.99€</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  echo Generate::generateFooter(Generate::PUBLIC);
  ?>
</body>

</html>