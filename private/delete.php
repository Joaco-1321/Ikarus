<?php
$tabla = $_GET['tabla'];
$id = $_GET['id'];
require_once('../db/Database.php');
Database::delete($id);
if ($tabla == 'perifericos') {
    header('Location: tablaPerifericos.php');
} else if ($tabla == 'videojuegos') {
    header('Location: tablaVideojuegos.php');
}
