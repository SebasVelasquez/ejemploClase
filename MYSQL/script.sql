CREATE DATABASE proyectopruebasebas;
USE proyectopruebasebas;

CREATE USER 'svelasquez'@'localhost' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON proyectopruebasebas.* TO 'svelasquez'@'localhost';

CREATE TABLE IF NOT EXISTS usuarios (
    idUsuario int NOT NULL AUTO_INCREMENT,
    usuario varchar(50),
	pass varchar(50),
    PRIMARY KEY (idUsuario)
);

INSERT INTO usuarios(idUsuario, usuario, pass) VALUES ( null, 'sebas123', '123' );
