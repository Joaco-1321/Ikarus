<?php
require_once('../db/Database.php');
require_once('Generate.php');
$nombre = 'Usuario';
$sesion = 'Iniciar';

session_start();

if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['rol_id'] == 2) {
    header('Location: ../private/tablaVideojuegos.php');
  } else if ($_SESSION['user']['rol_id'] == 1) {
    $nombre = $_SESSION['user']['usuario'];
    $sesion = 'Cerrar';
  }
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
  <link rel="stylesheet" type="text/css" href="../styles/contacto.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <Title>Contacto</Title>
</head>

<body>
  <?php
  echo Generate::generateNav($nombre, $sesion, Generate::PUBLIC);
  ?>
  <main>
    <div id="principal">
      <label for="caja">
        <div id="caja1"><span id="texto">COMPRA DE PRODUCTO DIGITAL</span></div>
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
  <?php
  echo Generate::generateFooter(Generate::PUBLIC);
  ?>
</body>

</html>