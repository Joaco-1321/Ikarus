<?php
require_once('../public/Generate.php');

$nombre = 'Usuario';
session_start();

if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['rol_id'] == 1) {
    header('Location: ../index.php');
  } else if ($_SESSION['user']['rol_id'] == 2) {
    $nombre = $_SESSION['user']['usuario'];
  }
} else {
  header('Location: ../auth/login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Jonás Gómez y Joaquin Napan">
  <meta name="description" content="Página conctacto para la tienda e videojuegos">
  <meta name="keywords" content="Contacto, Tienda, Videojuegos, Online">
  <meta name="viewport" content="width=device-width,intial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" type="text/css" href="./../styles/crear.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <Title>Tabla Periféricos</Title>
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, Generate::PRIVATE);
  ?>
  <main>
    <form action="save.php" method="POST" class="crear">
      <input type="text" name="nombre" placeholder="Inserta un nombre">
      <input type="text" name="tipo" placeholder="Inserta un tipo">
      <input type="text" name="precio" placeholder="Inserta un precio">
      <input type="text" name="stock" placeholder="Inserta un stock">
      <input type="text" name="review" placeholder="Inserta una review">
      <input type="text" name="ruta" placeholder="Inserta una ruta">
      <button type="submit">Crear</button>
    </form>
  </main>
  <?php
  echo Generate::generateFooter(Generate::PRIVATE);
  ?>
</body>

</html>