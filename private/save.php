<?php 

    $datos = [$_POST['nombre'],$_POST['tipo'],$_POST['precio'],$_POST['stock'],$_POST['review'], $_POST['ruta']];
    require_once('../db/Database.php');
    Database::save($datos);
    if($_POST['tipo'] == 'periferico'){
        header('Location: tablaPerifericos.php');
    } else if($_POST['tipo'] == 'videojuego'){
        header('Location: tablaVideojuegos.php');
    }

?>