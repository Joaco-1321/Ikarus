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
  <nav class="contenedor">
    <div class="contenedor" id="miniHeader">
      <a href="../index.php" class="contenedor">
        <img src="">
        <h1>Tienda de videojuegos</h1>
      </a>
      <form action="" class="contenedor">
        <input type="text" placeholder="Busca">
      </form>
      <div class="contenedor" id="usuarioCarrito">
        <a href="#" class="contenedor"><i class="fas fa-shopping-bag"></i></a>
        <a href="login.html" class="contenedor">
          <i class="fas fa-user"></i>
          <p>Usuario</p>
        </a>
      </div>
    </div>
    <div class="contenedor" id="miniNav">
      <ul class="contenedor">
        <a href="perifericos.html" class="contenedor">
          <li>Periféricos <i class="fas fa-headset"></i></i></li>
        </a>
        <a href="videojuegos.html" class="contenedor">
          <li>Videojuegos <i class="fas fa-gamepad"></i></li>
        </a>
      </ul>
    </div>
  </nav>
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
      <h5><a href="contacto.html">Contáctanos</a></h5>
    </div>
    <div class="contenedor" id="avisos">
      <span><a href="">Aviso legal</a>, <a href="">Términos y condiciones</a>, <a href="">Privacidad</a>, <a href="">Cookies</a>.</span>
      <p>Copyright © 2022 Tienda de videojuegos. Todos los derechos reservados. SA “Empresa Chula”, C/ Bernardino
        Obregón 25, 28012. Madrid, España</p>
    </div>
  </footer>
</body>

</html>