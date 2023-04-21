<?php
require_once('php/Database.php');
$db = new Database();
$db->conectar('root', '');
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
  <nav class="contenedor">
    <div class="contenedor" id="miniHeader">
      <a href="index.php" class="contenedor">
        <img src="">
        <h1>Tienda de videojuegos</h1>
      </a>
      <form action="" class="contenedor">
        <input type="text" placeholder="Busca">
      </form>
      <div class="contenedor" id="usuarioCarrito">
        <a href="#" class="contenedor"><i class="fas fa-shopping-bag"></i></a>
        <a href="pages/login.html" class="contenedor">
          <i class="fas fa-user"></i>
          <p>Usuario</p>
        </a>
      </div>
    </div>
    <div class="contenedor" id="miniNav">
      <ul class="contenedor">
        <a href="pages/perifericos.html" class="contenedor">
          <li>Periféricos <i class="fas fa-headset"></i></i></li>
        </a>
        <a href="pages/videojuegos.html" class="contenedor">
          <li>Videojuegos <i class="fas fa-gamepad"></i></li>
        </a>
      </ul>
    </div>
  </nav>
  <header>
    <img src="img/Banner.jpg" alt="">
  </header>
  <main>
    <section>
      <h2>Nuevos Juegos</h2>
      <div class="contenedor">
        <?php
        $videojuegos = $db->getVideojuegos();
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
        $perifericos = $db->getPerifericos();
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
  <footer class="contenedor">
    <div class="contenedor" id="redes">
      <div class="contenedor" id="vainas">
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-twitter-square"></i>
        <i class="fab fa-reddit-square"></i>
        <i class="fab fa-youtube-square"></i>
        <i class="fab fa-whatsapp-square"></i>
      </div>
    </div>
    <div class="contenedor" id="contacto">
      <h5><a href="pages/contacto.html">Contáctanos</a></h5>
    </div>
    <div class="contenedor" id="avisos">
      <span><a href="">Aviso legal</a>, <a href="">Términos y condiciones</a>, <a href="">Privacidad</a>, <a href="">Cookies</a>.</span>
      <p>Copyright © 2022 Tienda de videojuegos. Todos los derechos reservados. SA “Empresa Chula”, C/ Bernardino
        Obregón 25, 28012. Madrid, España</p>
    </div>
  </footer>
</body>

</html>