<?php
class Database
{
	private static $dbh;

	public function conectar($user, $pswd)
	{
		if (!(static::$dbh instanceof PDO)) {
			$drvr = 'mysql';
			$db = 'ikarus';
			$host = 'localhost';

			$dns = "$drvr:dbname=$db;host=$host";

			try {
				static::$dbh = new PDO($dns, $user, $pswd);
			} catch (PDOException $e) {
				echo 'falló la conexión' . $e->getMessage();
			}
		}
		return static::$dbh;
	}

	public function getAll($tabla)
	{
		$sql = 'SELECT * FROM ' . $tabla;
		return static::$dbh->query($sql);
	}

	public function getVideojuegos() {
		$sql = 'SELECT nombre, precio, ruta FROM producto WHERE tipo=\'videojuego\'';
		return static::$dbh->query($sql);
	}

	public function getPerifericos() {
		$sql = 'SELECT nombre, precio, ruta FROM producto WHERE tipo=\'periferico\'';
		return static::$dbh->query($sql);
	}
}
