-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 22:29:44
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdaplicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nif` varchar(9) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) DEFAULT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` int(12) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `rol_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nif`, `nombre`, `apellido1`, `apellido2`, `imagen`, `login`, `password`, `email`, `telefono`, `direccion`, `rol_id`) VALUES
(90, '78990856R', 'alex', 'Crow', 'Crow', NULL, 'alex', '123', 'asd@g.com', 952824877, 'malaga', 1),
(108, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', NULL, NULL, NULL, 0),
(109, '7894561R', 'Juan', 'Cortes', 'Cortes', NULL, 'juanCortes', '123', 'juan@g.com', 952854785, 'malaga', 1),
(111, '78945612R', 'Laura', 'Cortes', 'Cortes', NULL, 'Laura21', '123', 'b@a.com', 952824870, 'malaga', 1),
(112, '12345678Z', 'Sofia', 'Reyes', 'Sevillano', NULL, 'sofia1', 'asdASD123', 'sofia@g.com', 952884477, 'Marbella', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `nif` (`nif`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
