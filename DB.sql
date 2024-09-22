
CREATE DATABASE inventario;

USE inventario;

CREATE TABLE TableName (
  idProd INT(20) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) COLLATE utf8mb4_general_ci NOT NULL,
  precio FLOAT NOT NULL,
  existencia INT(11) NOT NULL,
  PRIMARY KEY (idProd)
);
