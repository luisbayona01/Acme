-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-03-2023 a las 21:50:58
-- Versión del servidor: 5.7.40
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--
CREATE DATABASE IF NOT EXISTS `acme` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `acme`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

DROP TABLE IF EXISTS `conductores`;
CREATE TABLE IF NOT EXISTS `conductores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(11) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` VALUES(1, '1024482240', 'juanassa', 'galindo', 'asa', 'asasasa', 'asas', 'asas');
INSERT INTO `conductores` VALUES(13, 'as', 'A', 'as', 'pulido', 'kr 77   no 65  g 36', '3127938280', 'SUCRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
CREATE TABLE IF NOT EXISTS `propietarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(11) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` VALUES(2, 'as', 'as', 'as', 'A', 'kr 77   no 65  g 36', '3145771044', 'SUCRE');
INSERT INTO `propietarios` VALUES(3, '123456', 'jui', 'as', 'as', 'as', 'as', 'as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(45) NOT NULL,
  `color` varchar(20) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `tipo_vehiculo` enum('particular','publico') NOT NULL,
  `conductor_id` int(11) DEFAULT NULL,
  `propietario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `placa` (`placa`),
  KEY `conductor_id` (`conductor_id`),
  KEY `propietario_id` (`propietario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` VALUES(1, 'm425', 'negro', 'vwm', 'publico', 1, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`conductor_id`) REFERENCES `conductores` (`id`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`propietario_id`) REFERENCES `propietarios` (`id`);
COMMIT;

create view vehiculosPropietariosConductores as SELECT V.placa, V.color,marca, V.tipo_vehiculo,V.id, CONCAT (C.primer_nombre,'',C.apellidos) nombreconductor, CONCAT (P.primer_nombre,'',P.apellidos) nombrepropietario FROM vehiculos V 
  inner join conductores C on C.id=V.conductor_id inner join propietarios P on P.id=V.propietario_id;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
