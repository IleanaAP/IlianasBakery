-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-12-2020 a las 06:48:18
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ibakery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `idUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombreR` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidoR` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `emailR` char(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idUsuario`, `fechaRegistro`, `nombreR`, `apellidoR`, `emailR`) VALUES
(1, '2020-12-02 05:00:44', '', '', ''),
(2, '2020-12-02 05:02:15', '', '', ''),
(3, '2020-12-02 05:03:46', 'prueba', 'prueba', 'prueba@prueba.com'),
(4, '2020-12-02 05:58:05', 'prueba2', 'prueba2', 'prueba2@hotmail.com'),
(5, '2020-12-02 06:01:14', 'prueba2', 'prueba2', 'prueba2@hotmail.com'),
(6, '2020-12-02 06:01:47', 'prueba2', 'prueba2', 'prueba2@hotmail.com'),
(7, '2020-12-02 06:06:31', 'Luisa', 'Navarro', 'ln@correo.com'),
(8, '2020-12-02 06:07:22', 'Luisa', 'Navarro', 'ln@correo.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
