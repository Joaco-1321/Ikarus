<?php
class Database
{
  public const PERIFERICOS = 1;
  public const VIDEOJUEGOS = 2;

  public static function conectar()
  {
    $drvr = 'mysql';
    $db = 'ikarus';
    $host = 'localhost';
    $user = 'root';
    $pswd = '';
    $port = '3306';

    $dns = "$drvr:dbname=$db;host=$host;port=$port";

    try {
      $dbh = new PDO($dns, $user, $pswd);
      // echo 'conectado correctamente';
    } catch (PDOException $e) {
      echo 'falló la conexión' . $e->getMessage();
    }
    return $dbh;
  }

  public static function getAll($tabla)
  {
    if ($tabla == 1) {
      $sql = "SELECT * FROM producto where tipo='periferico'";
      $resultado = self::conectar()->query($sql);
    }
    if ($tabla == 2) {
      $sql = "SELECT * FROM producto where tipo='videojuego'";
      $resultado = self::conectar()->query($sql);
    }
    return $resultado;
  }

  public static function findById($id)
  {
    $sql = "SELECT * FROM producto WHERE id = $id";
    $ordenador = self::conectar()->query($sql);
    return $ordenador->fetch(PDO::FETCH_ASSOC);
  }

  public static function save($arr)
  {
    $sql = "INSERT INTO producto(nombre, tipo, precio, stock, review, ruta) VALUES('$arr[0]', '$arr[1]', $arr[2], $arr[3], '$arr[4]', '$arr[5]')";
    self::conectar()->query($sql);
  }

  public static function update($arr)
  {
    $sql = "UPDATE producto SET nombre = '$arr[1]', tipo = '$arr[2]', precio = $arr[3], stock = $arr[4], review = $arr[5], ruta='$arr[6]' WHERE id = $arr[0]";
    self::conectar()->query($sql);
  }

  public static function delete($id)
  {
    $sql = "DELETE FROM producto WHERE id = $id";
    self::conectar()->query($sql);
  }

  public static function login($email, $password)
  {
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND contrasena = '$password'";

    $user = self::conectar()->query($sql);

    if ($user != null) {
      return $user->fetch(PDO::FETCH_ASSOC);
    } else {
      return null;
    }
  }
}
