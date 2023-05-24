<?php

  $user = $_POST['nombre'];
  $old_pass = $_POST['oldPass'];
  $new_pass = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
  $correo = $_POST['correo'];

  $correoEvaluar = $_POST['correoParaEvaluar'];

  $datos = [$user, $correo, $new_pass];

  require_once('../db/Database.php');
  $resultado = Database::login($correo, $old_pass);
  if ($resultado == null) {
    header('Location: login.php');
  } else {
    Database::updateUser($datos, $correoEvaluar);
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