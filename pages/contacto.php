<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Jonás Gómez y Joaquin Napan">
  <meta name="description" content="Página conctacto para la tienda e videojuegos">
  <meta name="keywords" content="Contacto, Tienda, Videojuegos, Online">
  <meta name="viewport" content="width=device-width,intial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles/contacto.css">
  <link rel="stylesheet" href="../styles/fontawesome/css/all.css">
  <Title>Contacto</Title>
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
    <div id="principal">
      <label for="caja">
        <div id="caja1"><span id="texto">COMPRA DE PRODUCRO DIGITAL</span></div>
      </label>
      <label for="cajafisico">
        <div id="caja2"><span id="texto">COMPRA DE PRODUCTO FISICO</span></div>
      </label>
    </div>
    <div>
      <input type="radio" name="a" id="caja" style="display: none;">
      <div id="caja12" class="aparece">
        <div id="alineacion"><span>ACTIVACIÓN DEL PRODUCTO</span></div>
      </div>
      <div id="caja13" class="aparece">
        <div id="alineacion"><span>PAGO</span></div>
      </div>
      <div id="caja14" class="aparece">
        <div id="alineacion"><span>ENTREGA DEL PRODUCTO</span></div>
      </div>
      <div id="caja15" class="aparece">
        <div id="alineacion"><span>OTRO</span></div>
      </div>
    </div>
    <div>
      <input type="radio" name="a" id="cajafisico" style="display: none;">
      <div id="caja16" class="aparece2">
        <div id="alineacion"><span>CALIDAD DEL PRODUCTO</span></div>
      </div>
      <div id="caja17" class="aparece2">
        <div id="alineacion"><span>OTRO</span></div>
      </div>
      <div id="caja18" class="aparece2">
        <div id="alineacion"><span>PAGO</span></div>
      </div>
      <div id="caja19" class="aparece2">
        <div id="alineacion"><span>ENTREGA DEL PRODUCTO</span></div>
      </div>
    </div>
    <div id="cajaformulario">
      <div id="cajaformulario2">
        <div id="formulario">
          <form action="">
            <label for="">Nombre y Apellidos:</label> <br>
            <textarea cols="30" rows="1" placeholder="Introduce tu nombre y apellidos: "></textarea>
            <p></p>
            <label>Problema: <br>
              <input type="text" list="problema">
              <datalist id="problema"> <br>
                <option>Activación del Producto</option>
                <option>Entrega del Producto</option>
                <option>Calidad del Producto</option>
                <option>Pago</option>
              </datalist></label>
            <p></p>
            <label for="">Email:</label> <br>
            <textarea cols="30" rows="1" placeholder="Introduce tu email:"></textarea>
            <p></p>
            <label for="">ID del Pedido</label> <br>
            <textarea cols="30" rows="1" placeholder="Introduce el ID del Pedido " type="number"></textarea>
            <p></p>
            <label for="">Mensaje:</label> <br>
            <textarea cols="40" rows="4" placeholder="Describe el problema: "></textarea> <br> <br>
            <button type="submit" value="Enviar">Enviar</button>
            <button type="reset" value="Restablecer">Restablecer</button>
          </form>
        </div>
        <div id="icono"><i class="fab fa-wpforms"></i></div>
      </div>
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
      <span><a href="">Aviso legal</a>, <a href="">Términos y condiciones</a>, <a href="">Privacidad</a>, <a
          href="">Cookies</a>.</span>
      <p>Copyright © 2022 Tienda de videojuegos. Todos los derechos reservados. SA “Empresa Chula”, C/ Bernardino
        Obregón 25, 28012. Madrid, España</p>
    </div>
  </footer>
</body>

</html>