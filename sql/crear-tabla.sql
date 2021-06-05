-- Crear tabla
/*
CREATE TABLE usuarios(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(255) NOT NULL,
    apellido varchar(255) DEFAULT 'No sabe / No contesta',
    email varchar(255) NOT NULL,
    password varchar(255)
);*/


CREATE TABLE usuarios(
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(255) NOT NULL,
    apellido varchar(255) DEFAULT 'No sabe / No contesta',
    email varchar(255) NOT NULL,
    password varchar(255)
    CONSTRAINT pk_usuarios PRIMARY KEY(id);
);
