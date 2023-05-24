<?php
require_once('../db/Database.php');
require_once('../public/Generate.php');

$nombre = 'Usuario';
$resultado = Database::getAll(Database::VIDEOJUEGOS);

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
  <link rel="stylesheet" type="text/css" href="./../styles/tablaPerifericos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <Title>Tabla Videojuegos</Title>
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, 'Cerrar', Generate::PRIVATE);
  ?>
  <main>
    <button class="crear"><a href="create.php">Crear</a></button>
    <table>
      <?php
      echo '<thead>';
      echo '<th>' . 'id' . '</th>';
      echo '<th>' . 'Nombre' . '</th>';
      echo '<th>' . 'Tipo' . '</th>';
      echo '<th>' . 'Precio' . '</th>';
      echo '<th>' . 'Stock' . '</th>';
      echo '<th>' . 'Review' . '</th>';
      echo '<th>' . 'Acciones' . '</th>';
      echo '</thead>';
      echo '<tbody>';
      foreach ($resultado as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['tipo'] . '</td>';
        echo '<td>' . $row['precio'] . '</td>';
        echo '<td>' . $row['stock'] . '</td>';
        echo '<td>' . $row['review'] . '</td>';
        echo "<td> <a href='edit.php?tabla=videojuegos&id=" . $row['id'] . "'>Editar</a> 
                      <a href='delete.php?tabla=videojuegos&id=" . $row['id'] . "'>Eliminar</a> </td>";
        echo '</tr>';
      }
      echo '</tbody>';
      ?>
    </table>

  </main>
  <?php
  echo Generate::generateFooter(Generate::PRIVATE);
  ?>
</body>

</html>