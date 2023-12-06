-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2023 a las 02:41:57
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidom` varchar(30) DEFAULT NULL,
  `apellidop` varchar(30) DEFAULT NULL,
  `ciudadn` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apellidom`, `apellidop`, `ciudadn`) VALUES
(1, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(2, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(3, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(4, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(5, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(6, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(7, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(8, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(9, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(10, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(11, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(12, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(13, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(14, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(15, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(16, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(17, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(18, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(19, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(20, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(21, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(22, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(23, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(24, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(25, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(26, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(27, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(28, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(29, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(30, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(31, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(32, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(33, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(34, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(35, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(36, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(37, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(38, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(39, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(40, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(41, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(42, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(43, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(44, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(45, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(46, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(47, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(48, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(49, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(50, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(51, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(52, 'Rodrigo', 'Benitez', 'Roa', 'Libertad'),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
