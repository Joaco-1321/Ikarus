<?php
class Database
{
  public static function conectar()
  {
    $drvr = 'mysql';
    $db = 'ikarus';
    $host = 'localhost';
    $user = 'root';
    $pswd = '';

    $dns = "$drvr:dbname=$db;host=$host";

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
    $sql = "SELECT * FROM $tabla";
    return self::conectar()->query($sql);
  }

  public static function findById($id)
  {
    $sql = "SELECT * FROM produco WHERE id = $id";
    $ordenador = self::conectar()->query($sql);
    return $ordenador->fetch(PDO::FETCH_ASSOC);
  }

  public static function save($arr)
  {
    $sql = "INSERT INTO productos(nombre, tipo, precio, stock, review, ruta) VALUES('$arr[0]', '$arr[1]', $arr[2], '$arr[3]')";
    return self::conectar()->query($sql);
  }

  public static function update($arr)
  {
    $sql = "UPDATE ordenadores SET marca = '$arr[1]', modelo = '$arr[2]', precio = $arr[3], descripcion = '$arr[4]' WHERE id = $arr[0]";
    return self::conectar()->query($sql);
  }

  public static function delete($id)
  {
    $sql = "DELETE FROM ordenadores WHERE id = $id";
    return self::conectar()->query($sql);
  }

  public static function login($email, $password)
  {
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $user = self::conectar()->query($sql);

    if ($user != null) {
      return $user->fetch(PDO::FETCH_ASSOC);
    } else {
      return null;
    }
  }
}
