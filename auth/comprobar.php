<?php

  $user = $_POST['user'];
  $pass = $_POST['pass'];
  require_once('../db/Database.php');
  $resultado = Database::login($user, $pass);
  if ($resultado == null) {
    header('Location: login.php');
  } else {
    if ($resultado['rol_id'] == 1) {
      session_start();
      $_SESSION['user'] = $resultado;
      header('Location: ../private/tablaPerifericos.php');
    } else if ($resultado['rol_id'] == 2) {
      session_start();
      $_SESSION['user'] = $resultado;
      header('Location: ../index.php');
    } else {
      header('Location: login.php');
    }
  }

?>