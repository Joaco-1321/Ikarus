DROP DATABASE IF EXISTS ikarus;
CREATE DATABASE IF NOT EXISTS ikarus; 
USE ikarus;

CREATE TABLE IF NOT EXISTS rol (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL UNIQUE
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS usuario (
	id INT PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR(45) NOT NULL UNIQUE,
	email VARCHAR(45) NOT NULL UNIQUE,
	contrasena VARCHAR(45) NOT NULL,
	rol_id INT NOT NULL,
	nombre VARCHAR(45),
	apellidos VARCHAR(45),
	direccion VARCHAR(100),
	movil VARCHAR(45),
	FOREIGN KEY(rol_id) REFERENCES rol(id)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS pedido (
	id INT PRIMARY KEY AUTO_INCREMENT,
	fechaRealizacion DATETIME NOT NULL,
	fechaEnvio DATE,
	usuario_id INT NOT NULL,
	FOREIGN KEY(usuario_id) REFERENCES usuario(id)
)ENGINE = INNODB;

CREATE TABLE if NOT EXISTS proveedor (
	id INT PRIMARY KEY AUTO_INCREMENT,
	CIF VARCHAR(15) NOT NULL UNIQUE,
	nombre VARCHAR(45) NOT NULL,
	dirección VARCHAR(45),
	telefono VARCHAR(45)
)ENGINE = INNODB;

CREATE TABLE if NOT EXISTS producto (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(45) NOT NULL,
	tipo ENUM('videojuego', 'periférico') NOT NULL,
	precio DECIMAL(10, 2) NOT NULL,
	stock INT NOT NULL,
	review INT,
	ruta VARCHAR(50) NOT NULL UNIQUE,
	proveedor_id INT NOT NULL,
	FOREIGN KEY(proveedor_id) REFERENCES proveedor(id)
)ENGINE = INNODB;

CREATE TABLE if NOT EXISTS pedido_has_producto (
	pedido_id INT NOT NULL,
	producto_id INT NOT NULL,
	cantidad INT NOT NULL,
	FOREIGN KEY(Pedido_id) REFERENCES Pedido(id),
	FOREIGN KEY(Producto_id) REFERENCES Producto(id),
	PRIMARY KEY(Pedido_id, Producto_id)
)ENGINE = INNODB;

INSERT INTO rol VALUES(NULL, 'usuario');
INSERT INTO rol VALUES(NULL, 'admin');

INSERT INTO usuario (usuario, email, contrasena, rol_id) VALUES ('JoaquinAdmin', 'joaquin@imf.com', 'joaquin1234', 2);
INSERT INTO usuario (usuario, email, contrasena, rol_id) VALUES ('JonasAdmin', 'jonas@imf.com', 'jonas1234', 2);
INSERT INTO usuario (usuario, email, contrasena, rol_id, nombre, apellidos, direccion, movil) VALUES ('userChulo', 'correoChulo@gmail.com', '12345678', 1, 'Jose', 'Nogales', 'calle chula, 2 Madrid', 123456789);
INSERT INTO usuario (usuario, email, contrasena, rol_id, direccion) VALUES ('carlosRufiangel', 'carlosrufi@gmail.com', 'springboot', 1, 'casa de carlos');

INSERT INTO pedido (fechaRealizacion, fechaEnvio, usuario_id) VALUES (NOW(), '2023-04-22', 1);
INSERT INTO pedido (fechaRealizacion, fechaEnvio, usuario_id) VALUES (NOW(), '2023-04-23', 1);
INSERT INTO pedido (fechaRealizacion, usuario_id) VALUES (NOW(), 2);
INSERT INTO pedido (fechaRealizacion, usuario_id) VALUES (NOW(), 2);

INSERT INTO proveedor VALUES (null, 'A692547853G4', 'Game', 'Islazul Madrid', 987654321);
INSERT INTO proveedor VALUES (null, 'R666886653U4', 'PC Componentes', 'Callo', 956843221);
INSERT INTO proveedor VALUES (null, 'Y692321113O4', 'Electronicas', 'Plaza Eliptica', 9624781354);
INSERT INTO proveedor VALUES (null, 'K676355853H4', 'Media Markt', 'Nasica', 9647863225);

INSERT INTO producto (nombre, tipo, precio, stock, proveedor_id, ruta) VALUES ('Logitech', 'Periferico', 24.99, 34, 2, 'img/logitech.png');
INSERT INTO producto (nombre, tipo, precio, stock, proveedor_id, ruta) VALUES ('GTA V', 'VideoJuego', 14.99, 56, 1, 'img/GTAV.jpeg');
INSERT INTO producto (nombre, tipo, precio, stock, review, proveedor_id, ruta) VALUES ('Elden Ring', 'VideoJuego', 59.99, 67, 10, 3, 'img/EldenRing.jpeg');
INSERT INTO producto (nombre, tipo, precio, stock, review, proveedor_id, ruta) VALUES ('Corsair', 'Periferico', 29.99, 49, 6, 2, 'img/corsair.jpeg');

INSERT INTO pedido_has_producto VALUES (3, 1, 3);
INSERT INTO pedido_has_producto VALUES (4, 2, 2);
INSERT INTO pedido_has_producto VALUES (1, 4, 3);
INSERT INTO pedido_has_producto VALUES (2, 3, 1);