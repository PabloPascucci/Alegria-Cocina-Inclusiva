
-- Base de Datos.

CREATE TABLE `carne`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pollo`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pescado`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pasta`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `vegano`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;