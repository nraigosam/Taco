-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2019 a las 02:19:35
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentar`
--

CREATE TABLE `comentar` (
  `id` int(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `comentario` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentar`
--

INSERT INTO `comentar` (`id`, `correo`, `comentario`) VALUES
(8, 'nose', 'dcsa'),
(9, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id` int(20) NOT NULL,
  `nota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id`, `nota`) VALUES
(1, 'Casa'),
(2, 'Casa'),
(3, 'Casa'),
(4, 'Casa'),
(5, 'Casa'),
(6, 'Casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `id` int(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `telefono` int(20) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`id`, `tipo`, `ubicacion`, `foto`, `telefono`, `lat`, `lng`) VALUES
(59, 'Casa', 'calle caldas', 'casa.jpg', 5316835, -6.37829, -75.4483),
(60, 'Obra_negra', 'calle Cordoba', 'obraN.jpg', 5316835, 6.37829, -75.4487),
(62, 'Casa', 'Parque', 'casa2.jpg', 35342, 43.23, 213.54),
(63, 'Apartamento', 'La ferrereria', 'Apartamento.jpg', 5633721, 6.3784, -75.4499);

--
-- Disparadores `vivienda`
--
DELIMITER $$
CREATE TRIGGER `nuevo` AFTER INSERT ON `vivienda` FOR EACH ROW INSERT INTO notificacion VALUES(null,"Casa")
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentar`
--
ALTER TABLE `comentar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentar`
--
ALTER TABLE `comentar`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
