<?php
require_once('db/Database.php');
require_once('public/Generate.php');
$nombre = 'Usuario';

session_start();

if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['rol_id'] == 1) {
    header('Location: private/tablaVideojuegos.php');
  } else if ($_SESSION['user']['rol_id'] == 2) {
    $nombre = $_SESSION['user']['usuario'];
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de videojuegos</title>
  <link type="text/css" rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/fontawesome/css/all.css">
  <link rel="shortcut icon" href="#" type="image/x-icon">
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, Generate::INDEX);
  ?>
  <header>
    <img src="img/Banner.jpg" alt="">
  </header>
  <main>
    <section>
      <h2>Nuevos Juegos</h2>
      <div class="contenedor">
        <?php
        $videojuegos = Database::getAll(Database::VIDEOJUEGOS);
        foreach ($videojuegos as $fila) {
          echo '<div class ="contenedor card">';
          echo '<div class ="card-imagen" style="background-image:url(\'' . $fila['ruta'] . '\')"></div>';
          echo '<div class= "contenedor card-texto">';
          echo '<p>' . $fila['nombre'] . '</p>';
          echo '<p>juego chulo</p>';
          echo '<p>' . $fila['precio'] . '€</p>';
          echo '</div>';
          echo '</div>';
        };
        ?>
      </div>
    </section>
    <section>
      <h2>Nuevos periféricos</h2>
      <div class="contenedor">
        <?php
        $perifericos = Database::getAll(Database::PERIFERICOS);
        foreach ($perifericos as $fila) {
          echo '<div class ="contenedor card">';
          echo '<div class ="card-imagen" style="background-image:url(\'' . $fila['ruta'] . '\')"></div>';
          echo '<div class= "contenedor card-texto">';
          echo '<p>' . $fila['nombre'] . '</p>';
          echo '<p>periférico chulo</p>';
          echo '<p>' . $fila['precio'] . '€</p>';
          echo '</div>';
          echo '</div>';
        };
        ?>
      </div>
    </section>
  </main>
  <?php
  echo Generate::generateFooter(Generate::INDEX);
  ?>
</body>

</html>