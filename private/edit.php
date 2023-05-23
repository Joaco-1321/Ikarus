<?php
require_once('../db/Database.php');
require_once('../public/Generate.php');

$id = $_GET['id'];
$tabla = $_GET['tabla'];
$producto = Database::findById($id);
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
  <link rel="stylesheet" href="./../styles/fontawesome/css/all.css">
  <Title>Tabla Periféricos</Title>
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, Generate::PRIVATE);
  ?>
  <main>
    <form action="update.php" method="POST" class="crear">
      <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
      <input type="hidden" name="tabla" value="<?php echo $tabla ?>">
      <input type="text" name="nombre" value="<?php echo $producto['nombre'] ?>" placeholder="Inserta un nombre">
      <input type="text" name="tipo" value="<?php echo $producto['tipo'] ?>" placeholder="Inserta un tipo">
      <input type="text" name="precio" value="<?php echo $producto['precio'] ?>" placeholder="Inserta un precio">
      <input type="text" name="stock" value="<?php echo $producto['stock'] ?>" placeholder="Inserta un stock">
      <input type="text" name="review" value="<?php echo $producto['review'] ?>" placeholder="Inserta una review">
      <input type="text" name="ruta" value="<?php echo $producto['ruta'] ?>" placeholder="Inserta una ruta">
      <button type="submit">Actualizar</button>
    </form>
  </main>
  <?php
  echo Generate::generateFooter(Generate::PRIVATE);
  ?>
</body>

</html>