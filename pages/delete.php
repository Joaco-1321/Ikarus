<?php
    $id = $_GET['id'];
    require_once('../php/Database.php');
    Database::delete($id);
    header('Location: tablaVideojuegos.php');
?>