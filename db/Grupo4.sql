DROP DATABASE IF EXISTS ikarus;
CREATE DATABASE IF NOT EXISTS ikarus; 
USE ikarus;

CREATE TABLE IF NOT EXISTS rol (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL UNIQUE
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS usuario (
	id INT PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR(10) NOT NULL UNIQUE,
	email VARCHAR(45) NOT NULL UNIQUE,
	contrasena VARCHAR(200) NOT NULL,
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


CREATE TABLE if NOT EXISTS producto (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(45) NOT NULL,
	tipo ENUM('videojuego', 'periférico') NOT NULL,
	precio DECIMAL(10, 2) NOT NULL,
	stock INT NOT NULL,
	review INT,
	ruta VARCHAR(50) NOT NULL UNIQUE
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

-- Joaquin_1234
INSERT INTO usuario (usuario, email, contrasena, rol_id) VALUES ('Admin_K', 'joaquin@imf.com', '$2y$10$aUIeoBuohaVacisv1Nje8.BTv45bMYZy0jhB94gwCNjA3VYC.ojju', 2);
-- Jonas_1234
INSERT INTO usuario (usuario, email, contrasena, rol_id) VALUES ('Admin_J', 'jonas@imf.com', '$2y$10$h35Ht/ur7Jpy7qI/hE2ILui0L55x3rnb6chiSVfytzaZPgl8NC1q2', 2);
-- Chulo_1234
INSERT INTO usuario (usuario, email, contrasena, rol_id, nombre, apellidos, direccion, movil) VALUES ('userChulo', 'correoChulo@gmail.com', '$2y$10$rmF0DDnVgmpLa1.dAyDIe.DOgFvCuRBj16gd7YnmWJTVhrrBSkyru', 1, 'Jose', 'Nogales', 'calle chula, 2 Madrid', 123456789);
-- JavaSpringBoot_1234
INSERT INTO usuario (usuario, email, contrasena, rol_id, direccion) VALUES ('Crufi', 'carlosrufi@gmail.com', '$2y$10$kxcw38WbT3cOdg81.rmDousucCY/hViCKi/iUGcQ1ebPbTTu.eyLi', 1, 'casa de carlos');

INSERT INTO pedido (fechaRealizacion, fechaEnvio, usuario_id) VALUES (NOW(), '2023-04-22', 1);
INSERT INTO pedido (fechaRealizacion, fechaEnvio, usuario_id) VALUES (NOW(), '2023-04-23', 1);
INSERT INTO pedido (fechaRealizacion, usuario_id) VALUES (NOW(), 2);
INSERT INTO pedido (fechaRealizacion, usuario_id) VALUES (NOW(), 2);

INSERT INTO producto (nombre, tipo, precio, stock, ruta) VALUES ('Logitech', 'Periferico', 24.99, 34, 'img/logitech.png');
INSERT INTO producto (nombre, tipo, precio, stock, ruta) VALUES ('GTA V', 'VideoJuego', 14.99, 56, 'img/GTAV.jpeg');
INSERT INTO producto (nombre, tipo, precio, stock, review, ruta) VALUES ('Elden Ring', 'VideoJuego', 59.99, 67, 10, 'img/EldenRing.jpeg');
INSERT INTO producto (nombre, tipo, precio, stock, review, ruta) VALUES ('Corsair', 'Periferico', 29.99, 49, 6, 'img/corsair.jpeg');

INSERT INTO pedido_has_producto VALUES (3, 1, 3);
INSERT INTO pedido_has_producto VALUES (4, 2, 2);
INSERT INTO pedido_has_producto VALUES (1, 4, 3);
INSERT INTO pedido_has_producto VALUES (2, 3, 1);

select * from usuario;