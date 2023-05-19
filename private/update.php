<?php

    $tabla = $_POST['tabla'];
    $datos = [$_POST['id'], $_POST['nombre'], $_POST['tipo'], $_POST['precio'], $_POST['stock'], $_POST['review'], $_POST['ruta']];
    require_once('../db/Database.php');
    Database::update($datos);
    if($tabla == 'perifericos'){
        header('Location: tablaPerifericos.php');
    } else if($tabla == 'videojuegos'){
        header('Location: tablaVideojuegos.php');
    }
