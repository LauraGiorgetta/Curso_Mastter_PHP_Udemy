-- Renombrar tabla
ALTER TABLE usuarios RENAME TO users;

-- Renombrar nombre de columna
ALTER TABLE users CHANGE apellido apellidos varchar(100) NOT NULL;

-- Modificar columna

ALTER TABLE users MODIFY apellidos varchar(50) NOT NULL;

-- Agregar columna
ALTER TABLE users ADD website varchar(100) NULL;

-- Agregar restriccion a columna

ALTER TABLE users ADD CONSTRAINT uq_email UNIQUE(email);

-- Borrar columna

ALTER TABLE users DROP website;
