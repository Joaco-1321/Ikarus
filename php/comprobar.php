<?php

//Fichero que se encarga de recibir los datos del 
// formulario y llamar al login

// 1. Recoger las variables del formulario
$user = $_POST['user'];
$pass = $_POST['pass'];

// 2. Importar la clase Database
require_once('Database.php');

// 3. Llamar a la funcion login de la clase Database
$resultado = Database::login($user, $pass);


// 4. Realzar comprobacion del retorno
if ($resultado == null) {
  header('Location: ../pages/login.php');
} else {
  if ($resultado['rol_id'] == 1) {
    session_start();
    $_SESSION['user'] = $resultado;
    header('Location: ../pages/tablaPerifericos.php');
  } else if ($resultado['rol_id'] == 2) {
    session_start();
    $_SESSION['user'] = $resultado;
    header('Location: ../index.php');
  } else {
    header('Location: ../pages/login.php');
  }
}
