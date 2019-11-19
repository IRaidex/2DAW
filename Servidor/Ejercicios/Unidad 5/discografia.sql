-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 22:24:58
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `discografia`
--
CREATE DATABASE IF NOT EXISTS `discografia` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `discografia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

DROP TABLE IF EXISTS `albumes`;
CREATE TABLE `albumes` (
  `codigo` int(8) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `grupo` int(8) NOT NULL,
  `anyo` int(4) NOT NULL,
  `formato` enum('vinilo','cd','dvd','mp3') NOT NULL,
  `fechacompra` date NOT NULL,
  `precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`codigo`, `titulo`, `grupo`, `anyo`, `formato`, `fechacompra`, `precio`) VALUES
(1, 'Mismo sitio, distinto lugar', 1, 2017, 'cd', '2018-11-09', '21.99'),
(2, 'La deriva', 1, 2014, 'vinilo', '2019-01-20', '18.45'),
(3, 'Un día en el mundo', 1, 2008, 'cd', '2018-07-08', '17.50'),
(4, 'En la espiral', 3, 2017, 'cd', '2019-04-15', '15.90'),
(5, 'Impronta', 3, 2013, 'mp3', '2019-02-26', '13.50'),
(6, 'Autoterapia', 2, 2018, 'cd', '2019-04-16', '14.25'),
(7, 'Aurora', 4, 2016, 'mp3', '2018-12-29', '12.80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

DROP TABLE IF EXISTS `canciones`;
CREATE TABLE `canciones` (
  `codigo` int(8) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `album` int(8) NOT NULL,
  `duracion` int(8) NOT NULL,
  `posicion` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`codigo`, `titulo`, `album`, `duracion`, `posicion`) VALUES
(1, 'Deséame suerte', 1, 230, 1),
(2, 'El discurso del rey', 1, 222, 2),
(3, 'Palmeras en la mancha', 1, 218, 3),
(4, 'Consejo de sabios', 1, 318, 4),
(5, '23 de junio', 1, 207, 5),
(6, 'Guerra civil', 1, 215, 6),
(7, 'Te lo digo a ti', 1, 147, 7),
(8, 'Punto sin retorno', 1, 281, 8),
(9, 'La vieja escuela', 1, 253, 9),
(10, 'Mismo sitio, distinto lugar', 1, 222, 10),
(11, 'La deriva', 2, 211, 1),
(12, 'Golpe maestro', 2, 228, 2),
(13, 'La mosca en tu pared', 2, 224, 3),
(14, 'Fuego', 2, 245, 4),
(15, 'Fiesta mayor', 2, 216, 5),
(16, '¡Alto!', 2, 194, 6),
(17, 'La grieta', 2, 226, 7),
(18, 'Pirómanos', 2, 220, 8),
(19, 'Las salas de espera', 2, 221, 9),
(20, 'Cuarteles de invierno', 2, 236, 10),
(21, 'Tour de francia', 2, 255, 11),
(22, 'Una sonata fantasma', 2, 230, 12),
(23, 'Autocrítica', 3, 282, 1),
(24, 'Sálvese quien pueda', 3, 203, 2),
(25, 'Un día en el mundo', 3, 252, 3),
(26, 'Copenhague', 3, 304, 4),
(27, 'Valiente', 3, 209, 5),
(28, 'La marea', 3, 223, 6),
(29, 'Pequeño desastre animal', 3, 214, 7),
(30, 'La cuadratura del círculo', 3, 216, 8),
(31, 'Año nuevo', 3, 267, 9),
(32, 'Rey sol', 3, 208, 10),
(33, 'Saharabbey road', 3, 278, 11),
(34, 'Al respirar', 3, 215, 12),
(35, 'Vértigo I', 4, 282, 1),
(36, 'Evoluación', 4, 310, 2),
(37, 'Pierdo el control', 4, 273, 3),
(38, 'Todo lo que dicen de ti', 4, 212, 4),
(39, 'Zona de confort', 4, 362, 5),
(40, 'Organizaciones peligrosas', 4, 236, 6),
(41, 'Océanos', 4, 266, 7),
(42, '1981', 4, 225, 8),
(43, 'Eternidad', 4, 241, 9),
(44, 'Siempre brilla el sol', 4, 219, 10),
(45, 'Un nuevo horizonte', 4, 235, 11),
(46, 'No estoy solo', 4, 175, 12),
(47, 'Vértigo II', 4, 251, 13),
(48, 'Planilandia', 5, 221, 1),
(49, 'El tiempo pasará', 5, 243, 2),
(50, 'Huracán', 5, 240, 3),
(51, 'Impronta', 5, 264, 4),
(52, 'Emborracharme', 5, 212, 5),
(53, 'Deshielo', 5, 241, 6),
(54, 'Una señal', 5, 203, 7),
(55, 'Tengo un plan', 5, 234, 8),
(56, 'Zen', 5, 206, 9),
(57, 'A-sinte-odio', 5, 203, 10),
(58, 'De los nervios', 5, 206, 11),
(59, 'Despedirse', 5, 230, 12),
(60, 'Autoterapia', 6, 277, 1),
(61, 'El pozo', 6, 235, 2),
(62, 'Ruido blanco', 6, 183, 3),
(63, 'Bill Murray', 6, 340, 4),
(64, 'Pausa', 6, 173, 5),
(65, 'Santa paz', 6, 163, 6),
(66, 'Canción para nadie', 6, 207, 7),
(67, 'La increible historia del hombre que podía volar p', 6, 289, 8),
(68, 'El temblor', 6, 267, 9),
(69, 'Temas amables', 6, 230, 10),
(70, 'Variables', 6, 143, 11),
(71, 'Burning', 7, 275, 1),
(72, 'Salvaje', 7, 231, 2),
(73, 'Corazón', 7, 161, 3),
(74, 'Toda la vida', 7, 217, 4),
(75, 'La primavera', 7, 307, 5),
(76, 'Not true', 7, 244, 6),
(77, 'El viento', 7, 244, 7),
(78, 'El todo y la nada', 7, 312, 8),
(79, 'Today', 7, 301, 9),
(80, 'Mi secreto', 7, 301, 10),
(81, 'Medina', 7, 296, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `codigo` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`codigo`, `nombre`) VALUES
(1, 'Vetusta Morla'),
(2, 'Izal'),
(3, 'Lori Meyers'),
(4, 'Fuel Fandango');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `grupo` (`grupo`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `album` (`album`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `codigo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `codigo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `codigo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `albumes_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`album`) REFERENCES `albumes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

GRANT USAGE ON *.* TO 'discografia'@'localhost' IDENTIFIED BY PASSWORD '*09A6FA5D2C03C461F5174DAEB4185F7E1EF72A9F';

GRANT ALL PRIVILEGES ON `discografia`.* TO 'discografia'@'localhost' WITH GRANT OPTION;