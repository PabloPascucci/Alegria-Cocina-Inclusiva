
-- Base de Datos.

CREATE TABLE `hamburguesas`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sandwich`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `empanada`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `piza`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pastas`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `regional`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `carnes`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `dulce`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `vegano` BOOLEAN NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `vino`(
    `id_producto` int(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `ingrediente` varchar(255) NOT NULL,
    `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;