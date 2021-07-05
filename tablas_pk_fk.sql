-- Tabla usuarios con pk id
CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(16) NOT NULL,
    fecha date NOT NULL,
    PRIMARY KEY(id)
);
-- Tabla categorias con pk id
CREATE TABLE categorias (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre int

);

--Tabla entradas con pk y fk

CREATE TABLE entradas (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuarios_id int NOT NULL,
    categorias_id int NOT NULL,
    titulo varchar(100) NOT NULL,
    descripcion MEDIUMTEXT NOT NULL,
    fecha date NOT NULL,
    CONSTRAINT fk_entradas_usuarios FOREIGN KEY (usuarios_id)
    REFERENCES usuarios(id),
    CONSTRAINT fk_entradas_categorias FOREIGN KEY (categorias_id)
    REFERENCES categorias(id)
);

--agregar PRIMARY KEY con ALTER
ALTER TABLE usuarios ADD PRIMARY KEY(id);

-- poner auto increment 
ALTER TABLE usuarios MODIFY id int not null AUTO_INCREMENT;

-- Poner foreing key despues de crear la TABLE_NAME

ALTER TABLE entradas 
ADD CONSTRAINT fk_entradas_usuarios FOREIGN KEY(usuarios_id)
REFERENCES usuarios(id),
ADD CONSTRAINT fk_entradas_categorias FOREIGN KEY(categorias_id)
REFERENCES categorias(id)
;