CREATE DATABASE dentalgroup;
	use ControlUnidades;

CREATE TABLE Usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) COMMENT 'Nombre del usuario',
	usuario VARCHAR(255) COMMENT 'Usuario para logear',
	contrasena VARCHAR(255) COMMENT 'Contraseña del usuario',
	activo BOOLEAN COMMENT 'Estado de la categoria',
	tipo VARCHAR(100) COMMENT 'Tipo de usuario que es',
	PRIMARY KEY (id_usuario)
);

CREATE TABLE Conductor(
	id_conductor INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) NOT NULL COMMENT 'Nombre del conductor',
	activo BOOLEAN NOT NULL COMMENT 'Estado del conductor',
	departamento VARCHAR(200)  NOT NULL COMMENT 'Departamento al que pertenece',
	empresa VARCHAR(3)  NOT NULL COMMENT 'Empresa a la que pertenece',
	id_usuario INT NOT NULL COMMENT 'Usuario que lo agrego',
	fecha DATE NOT	NULL COMMENT 'Fecha y hora en que se agrego',
	PRIMARY KEY (id_conductor),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario)
);