CREATE TABLE usuarios (
idu bigint,
nombres varchar(32) NOT NULL,
fnacimiento	date NOT NULL,
correo varchar(32) NULL,
rol varchar(16) NOT NULL DEFAULT 'Aprendiz',
estado varchar(16) NOT NULL DEFAULT 'Activo',
UNIQUE (correo)
PRIMARY KEY(idu) 
);

CREATE TABLE notas (
idn int AUTO_INCREMENT,
nt1 float(2) NOT NULL,
nt2 float(2) NOT NULL,
nt3 float(2) NOT NULL,
uid bigint NOT NULL,
FOREIGN KEY(uid) REFERENCES usuarios(idu),
PRIMARY KEY(idn)
);

CREATE TABLE materias (
 idm int AUTO_INCREMENT,
 nombre varchar(32) NOT NULL,
 PRIMARY KEY(idm)
);