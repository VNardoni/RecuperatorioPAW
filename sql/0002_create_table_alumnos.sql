USE Recuperatorio;

CREATE TABLE alumnos (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT NOT NULL,
    email TEXT NOT NULL,
    nota1 INT NOT NULL,
    nota2 INT NOT NULL,
    nota3 INT NOT NULL,
    promedio double
    
);
