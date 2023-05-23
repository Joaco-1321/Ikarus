<?php
class Generate
{
  public const INDEX = ['index.php', 'auth/login.php', 'auth/logout.php', 'public/perifericos.php', 'public/videojuegos.php', 'public/contacto.php'];
  public const PUBLIC = ['../index.php', '../auth/login.php', '../auth/logout.php', 'perifericos.php', 'videojuegos.php', 'contacto.php'];
  public const PRIVATE = ['../index.php', '../auth/login.php', '../auth/logout.php', 'tablaPerifericos.php', 'tablaVideojuegos.php', '../public/contacto.php'];
  public const AUTH = ['../index.php', 'login.php', '../auth/logout.php', '../public/perifericos.php', '../public/videojuegos.php', '../public/contacto.php'];

  public static function generateNav($nombre, $arr)
  {
    return <<<END
      <nav class="contenedor">
        <div class="contenedor" id="miniHeader">
          <a href="$arr[0]" class="contenedor">
            <img src="">
            <h1>Ikarus</h1>
          </a>
          <form action="" class="contenedor">
            <input type="text" placeholder="Busca">
          </form>
          <div class="contenedor" id="usuarioCarrito">
            <a href="#" class="contenedor"><i class="fas fa-shopping-bag"></i></a>
            <div class="contenedor" id="usuario">
              <i class="fas fa-user"></i>
              <p>$nombre</p>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Ver perfil</a>
              <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Ajustes</a>
              <a class="dropdown-item" href="$arr[2]"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
            </div>
        </div>
          </div>
        </div>
        <div class="contenedor" id="miniNav">
          <ul class="contenedor">
            <a href="$arr[3]" class="contenedor">
              <li>Periféricos <i class="fas fa-headset"></i></i></li>
            </a>
            <a href="$arr[4]" class="contenedor">
              <li>Videojuegos <i class="fas fa-gamepad"></i></li>
            </a>
          </ul>
        </div>
      </nav>
    END;
  }

  public static function generateFooter($arr)
  {
    $footer = <<<END
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
        <h5><a href="$arr[5]">Contáctanos</a></h5>
      </div>
      <div class="contenedor" id="avisos">
        <span><a href="#">Aviso legal</a>, <a href="#">Términos y condiciones</a>, <a href="#">Privacidad</a>, <a href="#">Cookies</a>.</span>
        <p>Copyright © 2022 Tienda de videojuegos. Todos los derechos reservados. SA “Empresa Chula”, C/ Bernardino
          Obregón 25, 28012. Madrid, España</p>
      </div>
    </footer>
    END;
    return $footer;
  }
}
