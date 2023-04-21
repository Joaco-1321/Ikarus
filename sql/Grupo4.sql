drop database if exists tiendavideojuegos;
create database if not exists tiendavideojuegos;
use tiendavideojuegos;

create table if not exists Cliente (
	id int not null auto_increment,
    DNI varchar(10) not null,
    Email varchar(45) not null,
    Usuario varchar(45) not null,
    Contraseña varchar(45) not null,
    Nombre varchar(45),
    Apellidos varchar(45),
    Móvil varchar(45),
    primary key(id),
    unique(DNI),
    unique(Email),
    unique(Usuario)
)engine = InnoDB; 

create table if not exists Pedido (
	id int not null auto_increment,
    `Fecha de realización` datetime not null,
    `Fecha de envío` date,
    Clientes_id int not null,
    primary key(id),
    foreign key(Clientes_id) references Cliente(id)
)engine = InnoDB; 

create table if not exists Proveedor (
	id int not null auto_increment,
    CIF varchar(15) not null,
    Nombre varchar(45) not null,
    Dirección varchar(45),
    Teléfono varchar(45),
    primary key(id),
    unique(CIF)
)engine = InnoDB;

create table if not exists Producto (
	id int not null auto_increment,
    Nombre varchar(45) not null,
    Tipo enum('videojuego', 'periférico') not null,
    Precio decimal(10, 2) not null,
    Stock int not null,
    Review int,
    Proveedor_id int not null,
    primary key(id),
    foreign key(Proveedor_id) references Proveedor(id)
)engine = InnoDB; 

create table if not exists Pedido_has_Producto (
	Pedido_id int not null,
    Producto_id int not null,
    Cantidad int not null,
    foreign key(Pedido_id) references Pedido(id),
    foreign key(Producto_id) references Producto(id),
    primary key(Pedido_id, Producto_id)
)engine = InnoDB;

insert into Cliente value (null, "123456799L", "pacosanz@gmail.com", "pacosanz", "paquito123", "Paco", "Sanz", 123456799);
insert into Cliente value (null, "123456788L", "lauragimenez@gmail.com", "lauragim", "gimenezz", "Laura", "Gimenez", 123456788);
insert into Cliente value (null, "123456777L", "juanlotillas@gmail.com", "juantole", "lotillas", "Juan", "Lotillas", 123456777);
insert into Cliente value (null, "123456778L", "josenogales@gmail.com", "jositonoga", "nogalesjose", "Jose", "Nogales", 123456778);

insert into Pedido value (null, "2022-08-27 13:15:20", "2022-09-03", 1);
insert into Pedido value (null, "2022-09-10 17:45:35", "2022-09-15", 2);
insert into Pedido value (null, "2022-09-05 09:25:40", "2022-09-07", 3);
insert into Pedido value (null, "2022-08-30 21:03:26", "2022-09-03", 1);

insert into Proveedor value (null, "A692547853G4", "Game", "Islazul Madrid", 987654321);
insert into Proveedor value (null, "R666886653U4", "PC Componentes", "Callo", 956843221);
insert into Proveedor value (null, "Y692321113O4", "Electronicas", "Plaza Eliptica", 9624781354);
insert into Proveedor value (null, "K676355853H4", "Media Markt", "Nasica", 9647863225);

insert into Producto values (null, "Logitech", "Periferico", 24.99, 34, 7, 2);
insert into Producto values (null, "GTA", "VideoJuego", 14.99, 56, 10, 1);
insert into Producto values (null, "Elden Ring", "VideoJuego", 59.99, 67, 10, 3);
insert into Producto values (null, "Corsair", "Periferico", 29.99, 49, 6, 2);

insert into Pedido_has_Producto values (3, 1, 3);
insert into Pedido_has_Producto values (4, 2, 2);
insert into Pedido_has_Producto values (1, 4, 3);
insert into Pedido_has_Producto values (2, 3, 1);