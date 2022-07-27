-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2022 a las 16:51:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `negocio_p`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `contrasenaP` varchar(50) DEFAULT NULL,
  `rolArrendador` varchar(3) DEFAULT NULL,
  `rolArrendatario` varchar(3) DEFAULT NULL,
  `aceptaPoliticas` varchar(3) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `apellidos`, `correo`, `contrasena`, `contrasenaP`, `rolArrendador`, `rolArrendatario`, `aceptaPoliticas`, `fecha_registro`) VALUES
(1, 'eee', 'bbbb', 'nkkkn@gmail.com', 'kkkk', 'kkkk', 'on', 'on', 'on', '2022-07-26 15:17:02'),
(2, 'fff', 'fffff', 'fffff@gg.com', 'ffff', 'ffff', 'on', 'on', 'on', '2022-07-26 15:25:24'),
(3, 'wwww', 'wwww', 'wwwwd@gmail.com', 'dddd', 'dddd', 'on', 'on', 'on', '2022-07-26 15:28:54'),
(5, 'wwww', 'wwww', 'wwwwed@gmail.com', 'hhhh', 'hhhh', 'on', 'on', 'on', '2022-07-26 14:32:27'),
(6, 'wwww', 'wwww', 'whhhwed@gmail.com', 'hhhhh', 'hhhhh', 'on', 'on', 'on', '2022-07-26 14:38:24'),
(7, 'marcos', 'perez', 'marcos@gmail.com', 'qqqqq', 'qqqqq', 'on', 'on', 'on', '2022-07-26 14:46:12'),
(8, 'maria', 'perez', 'maria@gmail.com', 'hhhhh', 'hhhhh', 'on', 'on', 'on', '2022-07-26 14:59:58'),
(9, 'jose', 'carmona', 'josecarmona@gmail.com', 'fffff', 'fffff', 'on', 'on', 'on', '2022-07-26 15:04:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
