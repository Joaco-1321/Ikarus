DROP DATABASE IF EXISTS ikarus;
CREATE DATABASE IF NOT EXISTS ikarus; 
USE ikarus;

CREATE TABLE IF NOT EXISTS 4_rol (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL UNIQUE
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS 4_usuario (
	id INT PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR(10) NOT NULL UNIQUE,
	email VARCHAR(45) NOT NULL UNIQUE,
	contrasena VARCHAR(200) NOT NULL,
	rol_id INT NOT NULL,
	nombre VARCHAR(45),
	apellidos VARCHAR(45),
	direccion VARCHAR(100),
	movil VARCHAR(45),
	FOREIGN KEY(rol_id) REFERENCES 4_rol(id)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS 4_pedido (
	id INT PRIMARY KEY AUTO_INCREMENT,
	fechaRealizacion DATETIME NOT NULL,
	fechaEnvio DATE,
	usuario_id INT NOT NULL,
	FOREIGN KEY(usuario_id) REFERENCES 4_usuario(id)
)ENGINE = INNODB;


CREATE TABLE if NOT EXISTS 4_producto (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(45) NOT NULL,
	tipo ENUM('videojuego', 'periférico') NOT NULL,
	precio DECIMAL(10, 2) NOT NULL,
	stock INT NOT NULL,
	review INT,
	ruta VARCHAR(50) NOT NULL UNIQUE
)ENGINE = INNODB;

CREATE TABLE if NOT EXISTS 4_pedido_has_producto (
	pedido_id INT NOT NULL,
	producto_id INT NOT NULL,
	cantidad INT NOT NULL,
	FOREIGN KEY(pedido_id) REFERENCES 4_pedido(id),
	FOREIGN KEY(producto_id) REFERENCES 4_producto(id),
	PRIMARY KEY(pedido_id, producto_id)
)ENGINE = INNODB;

INSERT INTO 4_rol VALUES(NULL, 'usuario');
INSERT INTO 4_rol VALUES(NULL, 'admin');

-- Joaquin_1234
INSERT INTO 4_usuario (usuario, email, contrasena, rol_id) VALUES ('Admin_K', 'joaquin@imf.com', '$2y$10$aUIeoBuohaVacisv1Nje8.BTv45bMYZy0jhB94gwCNjA3VYC.ojju', 2);
-- Jonas_1234
INSERT INTO 4_usuario (usuario, email, contrasena, rol_id) VALUES ('Admin_J', 'jonas@imf.com', '$2y$10$h35Ht/ur7Jpy7qI/hE2ILui0L55x3rnb6chiSVfytzaZPgl8NC1q2', 2);
-- Chulo_1234
INSERT INTO 4_usuario (usuario, email, contrasena, rol_id, nombre, apellidos, direccion, movil) VALUES ('userChulo', 'correoChulo@gmail.com', '$2y$10$rmF0DDnVgmpLa1.dAyDIe.DOgFvCuRBj16gd7YnmWJTVhrrBSkyru', 1, 'Jose', 'Nogales', 'calle chula, 2 Madrid', 123456789);
-- JavaSpringBoot_1234
INSERT INTO 4_usuario (usuario, email, contrasena, rol_id, direccion) VALUES ('Crufi', 'carlosrufi@gmail.com', '$2y$10$kxcw38WbT3cOdg81.rmDousucCY/hViCKi/iUGcQ1ebPbTTu.eyLi', 1, 'casa de carlos');

INSERT INTO 4_pedido (fechaRealizacion, fechaEnvio, usuario_id) VALUES (NOW(), '2023-04-22', 1);
INSERT INTO 4_pedido (fechaRealizacion, fechaEnvio, usuario_id) VALUES (NOW(), '2023-04-23', 1);
INSERT INTO 4_pedido (fechaRealizacion, usuario_id) VALUES (NOW(), 2);
INSERT INTO 4_pedido (fechaRealizacion, usuario_id) VALUES (NOW(), 2);

INSERT INTO 4_producto (nombre, tipo, precio, stock, ruta) VALUES ('Logitech', 'Periferico', 24.99, 34, 'img/logitech.png');
INSERT INTO 4_producto (nombre, tipo, precio, stock, ruta) VALUES ('GTA V', 'VideoJuego', 14.99, 56, 'img/GTAV.jpeg');
INSERT INTO 4_producto (nombre, tipo, precio, stock, review, ruta) VALUES ('Elden Ring', 'VideoJuego', 59.99, 67, 10, 'img/EldenRing.jpeg');
INSERT INTO 4_producto (nombre, tipo, precio, stock, review, ruta) VALUES ('Corsair', 'Periferico', 29.99, 49, 6, 'img/corsair.jpeg');

INSERT INTO 4_pedido_has_producto VALUES (3, 1, 3);
INSERT INTO 4_pedido_has_producto VALUES (4, 2, 2);
INSERT INTO 4_pedido_has_producto VALUES (1, 4, 3);
INSERT INTO 4_pedido_has_producto VALUES (2, 3, 1);