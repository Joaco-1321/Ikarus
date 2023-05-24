<?php
  session_start();
  require_once('../db/Database.php');
  require_once('../public/Generate.php');
  $nombre = 'Usuario';

  if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['rol_id'] == 1) {
      header('Location: ../index.php');
    } else if ($_SESSION['user']['rol_id'] == 2) {
      $nombre = $_SESSION['user']['usuario'];
    }
  } else {
    header('Location: ../auth/login.php');
  }  
  $usuario = Database::findByUser($nombre);
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
  <link rel="stylesheet" type="text/css" href="./../styles/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <Title>Tabla Periféricos</Title>
</head>
<body>
  <?php
  echo Generate::generateNav($nombre,'Cerrar', Generate::PRIVATE);
  ?>
  <main>
    <form action="../auth/comprobarUser.php" method="POST">
      <input  type="hidden" name="correoParaEvaluar" value="<?php echo $usuario['email'] ?>">
      <div class="usuario">Usuario: <br><input type="text" name="nombre" value="<?php echo $usuario['usuario'] ?>"></div>
      <div class="email">Correo: <br><input  type="text" name="correo" value="<?php echo $usuario['email'] ?>"></div>
      <div class="password">Contraseña antigua: <br><input type="text" name="oldPass" value=""></div>
      <div class="newpass"> Contraseña nueva: <br><input type="text" name="newPass" value=""></div>
      <button class="boton" type="submit">Actualizar</button>
    </form>
  </main>
  <?php
  echo Generate::generateFooter(Generate::PRIVATE);
  ?>
</body>
</html>