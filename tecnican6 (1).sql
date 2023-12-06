-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 02:03:10
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnican6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL COMMENT 'id',
  `id_c` int(11) NOT NULL COMMENT 'id_c',
  `nombre` varchar(50) DEFAULT NULL COMMENT 'nombre',
  `apellido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `id_c`, `nombre`, `apellido`) VALUES
(1, 11, 'jonas', 'lugo'),
(2, 34, 'eli', 'lombana'),
(3, 35, 'sebastian', 'alonso'),
(4, 42, 'franco', 'rosito'),
(5, 41, 'thiago', 'quinteros'),
(6, 17, 'adil', 'paniagua'),
(7, 46, 'fiama', 'fretes'),
(8, 45, 'santiago', 'ledezma'),
(9, 43, 'mariana', 'cabrera'),
(10, 19, 'micaela', 'cabrera'),
(11, 37, 'ariel', 'chambi'),
(12, 13, 'camila', 'moncini'),
(13, 52, 'tobias', 'milla'),
(14, 47, 'Lautaro', 'Vargas'),
(15, 47, 'Rodrigo', 'Roa'),
(16, 47, 'Alejo', 'Navoni'),
(17, 47, 'Rocio', 'Nuniez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `año` varchar(1) DEFAULT NULL,
  `division` varchar(1) DEFAULT NULL,
  `id_espe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `año`, `division`, `id_espe`) VALUES
(1, '1', '1', 1),
(2, '1', '2', 1),
(3, '1', '3', 1),
(4, '1', '4', 1),
(5, '1', '5', 1),
(6, '1', '6', 1),
(7, '1', '7', 1),
(8, '1', '8', 1),
(9, '2', '1', 1),
(10, '2', '2', 1),
(11, '2', '3', 1),
(12, '2', '4', 1),
(13, '2', '5', 1),
(14, '2', '6', 1),
(15, '2', '7', 1),
(16, '2', '8', 1),
(17, '3', '1', 1),
(18, '3', '2', 1),
(19, '3', '3', 1),
(20, '3', '4', 1),
(21, '3', '5', 1),
(22, '3', '6', 1),
(23, '3', '7', 1),
(24, '3', '8', 1),
(25, '4', '1', 3),
(26, '4', '2', 2),
(27, '4', '3', 5),
(28, '4', '4', 3),
(29, '4', '5', 2),
(30, '4', '6', 4),
(31, '4', '7', 5),
(33, '5', '1', 3),
(34, '5', '2', 2),
(35, '5', '3', 5),
(36, '5', '4', 3),
(37, '5', '5', 2),
(38, '5', '6', 4),
(39, '5', '7', 5),
(41, '6', '1', 3),
(42, '6', '2', 2),
(43, '6', '3', 5),
(44, '6', '4', 3),
(45, '6', '5', 2),
(46, '6', '6', 4),
(47, '6', '7', 5),
(50, '7', '2', 2),
(51, '7', '3', 4),
(52, '7', '4', 5),
(53, '7', '5', 3),
(54, '7', '6', 5),
(55, '7', '1', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`) VALUES
(1, 'basico'),
(2, 'automotor'),
(3, 'electromecanica'),
(4, 'informatica'),
(5, 'programacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_c` (`id_c`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_espe` (`id_espe`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `curso` (`id`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_espe`) REFERENCES `especialidad` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
