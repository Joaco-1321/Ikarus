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
  <nav class="contenedor">
    <div class="contenedor" id="miniHeader">
      <a href="index.html" class="contenedor">
        <img src="" />
        <h1>Tienda de videojuegos</h1>
      </a>
      <form action="" class="contenedor">
        <input type="text" placeholder="Busca" />
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
          <li>Periféricos <i class="fas fa-headset"></i></li>
        </a>
        <a href="videojuegos.html" class="contenedor">
          <li>Videojuegos <i class="fas fa-gamepad"></i></li>
        </a>
      </ul>
    </div>
  </nav>
  <main class="contenedor">
    <div class="contenedor" id="login">
      <form action="../php/comprobar.php" method="post">
        <label for="usuario">usuario</label>
        <input type="text" name="user" />
        <label for="psswd">contraseña</label>
        <input type="password" name="pass" />
        <input type="submit" value="enviar" />
      </form>
      <button onclick="cambio()">regístrate</button>
    </div>
    <div class="contenedor" id="registrarse">
      <form action="" method="">
        <label for="correo">correo</label>
        <input type="text" name="correo" />
        <label for="usuario">usuario</label>
        <input type="text" name="usuario" />
        <label for="psswd">contraseña</label>
        <input type="password" name="psswd" id="contraseña" onblur="contrasena()" required/>
        <div class="contra"></div>
        <div class="pruebas">
          <span id="minuscula">Una letra <b>minúscula</b></span>
          <span id="mayuscula">Una letra <b>mayúscula</b></span>
          <span id="dosseguidos"><b>Dos</b> dígitos seguidos</span>
          <span id="signo">Un cáracter <b>especial</b> (- _ . + @)</span>
          <span id="longitud">Longitud <b>mínima</b> de 10 dígitos</span>
        </div>
        <input type="submit" value="enviar" />
      </form>
      <button onclick="cambio()">logeate</button>
    </div>
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
      <span><a href="">Aviso legal</a>, <a href="">Términos y condiciones</a>,
        <a href="">Privacidad</a>, <a href="">Cookies</a>.</span>
      <p>
        Copyright © 2022 Tienda de videojuegos. Todos los derechos reservados.
        SA “Empresa Chula”, C/ Bernardino Obregón 25, 28012. Madrid, España
      </p>
    </div>
  </footer>
</body>

</html>