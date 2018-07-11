CREATE DATABASE If not exists masterunir;


use masterunir;

CREATE TABLE if not exists control (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	control VARCHAR(30) NOT NULL,
	date TIMESTAMP
);

CREATE TABLE if not exists clientes (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(100) NOT NULL,
	correo VARCHAR(30) NOT NULL,
	edad VARCHAR(50) NOT NULL,
	date TIMESTAMP
);


CREATE TABLE if not exists hoteles (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	nombre VARCHAR(50) NOT NULL,
	direccion VARCHAR(100) NOT NULL,
	precio VARCHAR(30) NOT NULL,
	ubicacion VARCHAR(50) NOT NULL,
	valoracion INT(3),
	date TIMESTAMP
);

CREATE TABLE if not exists gastronomia (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	restaurante VARCHAR(50) NOT NULL,
	direccion VARCHAR(30) NOT NULL,
	precio VARCHAR(30) NOT NULL,
	ubicacion VARCHAR(30) NOT NULL,
	tipococina VARCHAR(30) NOT NULL,
	tenedores VARCHAR(30) NOT NULL,
	valoracion VARCHAR(30) NOT NULL,
	date TIMESTAMP
);

insert into control (control) values ('conectado');


insert into clientes (nombre, apellido, correo, edad) values ('Sergio', 'Lopez Cruz', 'sergio.es@gmail.com', '30');
insert into clientes (nombre, apellido, correo, edad) values ('Luis', 'Martinez Caro', 'luis.es@gmail.com', '34');
insert into clientes (nombre, apellido, correo, edad) values ('Marta', 'Gomez Pelaez', 'marta.es@gmail.com', '45');



insert into hoteles (nombre, direccion, precio, ubicacion, valoracion) values ('ARAGON', 'Calle Aragon 12', '60 €', 'Centro', '4');
insert into hoteles (nombre, direccion, precio, ubicacion, valoracion) values ('BASCONIA', 'Calle Urgel 230', '100 €', 'Gracia', '3');
insert into hoteles (nombre, direccion, precio, ubicacion, valoracion) values ('PESCARA', 'Calle Perez 2', '40 €', 'Sarria', '5');
insert into hoteles (nombre, direccion, precio, ubicacion, valoracion) values ('HILTON', 'Calle Corts 122', '140 €', 'Centro', '5');
insert into hoteles (nombre, direccion, precio, ubicacion, valoracion) values ('PARETA', 'Calle Mallorca 34', '86 €', 'Eixample', '4');
insert into hoteles (nombre, direccion, precio, ubicacion, valoracion) values ('MIRAMAR', 'Calle Maritimo 152', '90 €', 'Centro', '2');






insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Antigua', 'Calle Maria Cubi 59', '20 Eur', 'centro', 'creativa', '3', '8');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Mirandoalmar', 'Calle Moll de Espana 5', '38 €', 'puerto', 'mediterranea', '3', '9');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Linea', 'Gran via les corts 629', '30 €', 'centro', 'mediterranea', '2', '7');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Twenty', 'Calle Muntaner 103', '28 €', 'centro', 'italiana', '2', '7');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Marea Alta', 'Av drassanes 6', '45 €', 'puerto', 'mediterranea', '4', '9');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Botafumeiro', 'Gran de gracia 81', '75 €', 'sarria', 'marisqueria', '4', '9');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Lomo Alto', 'Calle Aragon 283', '65 €', 'eixample', 'asador', '5', '9');
insert into gastronomia (restaurante, direccion, precio, ubicacion, tipococina, tenedores, valoracion) values ('Hofmann', 'Calle granada de penedes 14', '70 €', 'les corts', 'creativa', '4', '8');






