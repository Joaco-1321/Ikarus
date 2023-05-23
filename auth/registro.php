<?php 
    // 12We@ertye

    require_once('../db/Database.php');
    $correo = $_POST['correo'];
    $user = $_POST['usuario'];
    $passwd = $_POST['psswd'];
    $datos = [$_POST['correo'], $_POST['usuario'], $_POST['psswd']];

    $resultado = Database::findByEmail($correo, $user);

    if($resultado != null){
        header('Location: login.php');
    } else {
       Database::nuevoUser($datos);
       $resultadoLogin = Database::login($correo, $passwd);

       if ($resultadoLogin == null) {
        echo 'es null';
        exit();
        header('Location: login.php');
        } else {
          session_start();
          $_SESSION['user'] = $resultadoLogin;
          header('Location: ../index.php');
      }
    }

?>