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

INSERT INTO usuarios (nombre,usuario,contrasena,activo,tipo) VALUES ('Angelica Moreno','angelica','123',1,'root');
INSERT INTO usuarios (nombre,usuario,contrasena,activo,tipo) VALUES ('Angelica Moreno','angelica','123',1,'root');

CREATE TABLE Rutas (
	id_ruta INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(55) NOT NULL COMMENT 'Nombre de la ruta',
	descripcion VARCHAR(255) NOT NULL COMMENT 'Descripcion de la ruta',
	activo BOOLEAN NOT NULL COMMENT 'Estado de la ruta',
	asignacion BOOLEAN NOT NULL COMMENT 'Usuario Asiganada',
	disponible  BOOLEAN NOT NULL COMMENT 'Saber si esta asiganada o no',
	id_usuario INT NOT NULL COMMENT 'usuario que agrego la ruta',
	PRIMARY KEY (id_ruta),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario)
);

CREATE TABLE Unidades(
	id_unidad  INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) NOT NULL COMMENT 'Nombre de la unidad',
	activo BOOLEAN NOT NULL COMMENT 'Estado de la unidad',
	marca VARCHAR(255) NOT NULL COMMENT 'marca de la unidad',
	modelo VARCHAR(255) NOT NULL COMMENT 'modelo de la unidad',
	placas VARCHAR(255) NOT NULL COMMENT 'placas de la unidad',
	año INT NOT NULL COMMENT 'año de la unidad',
	tipo VARCHAR(255) NOT NULL COMMENT 'tipo de la unidad',
	id_usuario INT NOT NULL COMMENT 'Usuario que lo agrego',
	empresa VARCHAR(3)  NOT NULL COMMENT 'Empresa a la que pertenece',
	asignada BOOLEAN NOT NULL COMMENT 'Si la unidad esta asignada o no',
	PRIMARY KEY (id_unidad),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario)
);

CREATE TABLE Conductor(
	id_conductor INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) NOT NULL COMMENT 'Nombre del conductor',
	activo BOOLEAN NOT NULL COMMENT 'Estado del conductor',
	departamento VARCHAR(200)  NOT NULL COMMENT 'Departamento al que pertenece',
	id_ruta INT COMMENT 'Id de la ruta asignada',
	empresa VARCHAR(3)  NOT NULL COMMENT 'Empresa a la que pertenece',
	id_usuario INT NOT NULL COMMENT 'Usuario que lo agrego',
	fecha DATE NOT	NULL COMMENT 'Fecha y hora en que se agrego',
	tipolic VARCHAR(3) NOT NULL COMMENT 'Tipo de licencia del conductor',
	fechalic DATE NOT NULL COMMENT 'Fecha en la que vence la licencia',
	id_unidad INT NOT NULL COMMENT 'Unidad asignada',
	PRIMARY KEY (id_conductor),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario),
	FOREIGN KEY (id_ruta) REFERENCES Rutas (id_ruta),
	FOREIGN KEY (id_unidad) REFERENCES Unidades (id_unidad)
);

CREATE TABLE Departamentos(
	id_departamento INT NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
	nombre VARCHAR(255) NOT NULL COMMENT 'Nombre de la unidad',
	activo BOOLEAN NOT NULL COMMENT 'Estado de la unidad',
	id_usuario INT NOT NULL COMMENT 'Usuario que lo agrego',
	PRIMARY KEY (id_departamento),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios (id_usuario)
);

INSERT INTO departamentos (nombre,activo,id_usuario) VALUES ('Sistemas',1,1);
INSERT INTO departamentos (nombre,activo,id_usuario) VALUES ('Ventas',1,1);
INSERT INTO departamentos (nombre,activo,id_usuario) VALUES ('Contabilidad',1,1);

/* Insert obligatorio para la ruta Sin Asignar */
INSERT INTO Rutas (id_ruta,nombre,descripcion,activo,asignacion,disponible,id_usuario) VALUES (1,'Sin Ruta','Ruta creada por el sistema para usuarios sin asignacion',1,0,0,1);

/* Insert obligatorio para la unidad Sin Asignar */
INSERT INTO Unidades (nombre,activo,marca,modelo,placas,año,tipo,id_usuario,empresa,asignada) VALUES ('Sin unidad',1,'Sin marca','Sin modelo','0000',0,'Sin tipo',1,'CBA',0); 

/* Insert Obligatorio para el conductor Sin Conductor */
INSERT INTO Conductor (nombre,activo,departamento,id_ruta,empresa,id_usuario,fecha,tipolic,fechalic,id_unidad) VALUES ('Sin Conductor',1,'Sin Departamento',1,'Sin Empresa',1,'0000/00/00','X','0000/00/00',1);