-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2019 a las 20:43:40
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombre` varchar(20) NOT NULL,
  `apellido1` varchar(20) DEFAULT NULL,
  `apellido2` varchar(20) DEFAULT NULL,
  `fNac` date DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasenya` varchar(20) DEFAULT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombre`, `apellido1`, `apellido2`, `fNac`, `usuario`, `contrasenya`, `rol`) VALUES
('Alejandro', 'Salcedo', 'Santamaria', '1996-02-13', 'alex', 'alex', 'admin'),
('Jorge', 'Jimenez', 'Martinez', '1999-07-27', 'jjomega', 'jjomega', 'user'),
('Pau', 'Llorens', 'Martinex', '1999-01-21', 'pau2199', 'pau2199', 'user'),
('rafa', 'rafa', 'rafa', '1996-02-13', 'rafa', 'rafa', 'user'),
('Sandra', 'Alcudia', 'Palomo', '1996-12-03', 'samkay', 'samkay', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
