-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2022 a las 18:37:00
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
-- Base de datos: `negocio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendador`
--

CREATE TABLE `arrendador` (
  `id_arrendador` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arrendador`
--

INSERT INTO `arrendador` (`id_arrendador`, `persona_id`, `fecha_registro`) VALUES
(1, 1, '0000-00-00 00:00:00'),
(2, 666, '0000-00-00 00:00:00'),
(3, 5555, '2022-07-22 20:03:58'),
(4, 888, '2022-07-22 20:05:12'),
(5, 5556, '2022-07-22 20:29:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendatario`
--

CREATE TABLE `arrendatario` (
  `id_arrendatario` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arrendatario`
--

INSERT INTO `arrendatario` (`id_arrendatario`, `persona_id`, `fecha_registro`) VALUES
(1, 2, '0000-00-00 00:00:00'),
(2, 2, '0000-00-00 00:00:00'),
(3, 1111, '0000-00-00 00:00:00'),
(4, 4444, '0000-00-00 00:00:00'),
(5, 666, '0000-00-00 00:00:00'),
(6, 888, '0000-00-00 00:00:00'),
(7, 4445, '0000-00-00 00:00:00'),
(8, 777, '2022-07-22 20:03:27'),
(9, 5555, '2022-07-22 20:03:58'),
(10, 5556, '2022-07-22 20:29:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(11) NOT NULL,
  `arrendador_id` int(11) DEFAULT NULL,
  `arrendatario_id` int(11) DEFAULT NULL,
  `propiedad_id` int(11) DEFAULT NULL,
  `fecha_registro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `arrendador_id`, `arrendatario_id`, `propiedad_id`, `fecha_registro`) VALUES
(1, 1, 1, 1, ''),
(2, 3, 5, 4, NULL),
(3, 3, 6, 3, NULL),
(4, 3, 5, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `contrato_id` int(11) DEFAULT NULL,
  `monto_pago` decimal(10,0) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `contrato_id`, `monto_pago`, `fecha_registro`) VALUES
(1, 1, '5555', '2022-07-27 16:14:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  `contrasenaP` varchar(15) NOT NULL,
  `cedula` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `rolArrendador` int(3) NOT NULL DEFAULT 0,
  `rolArrendatario` int(3) NOT NULL DEFAULT 0,
  `aceptaPoliticas` varchar(3) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `apellidos`, `correo`, `contrasena`, `contrasenaP`, `cedula`, `celular`, `direccion`, `rolArrendador`, `rolArrendatario`, `aceptaPoliticas`, `fecha_registro`) VALUES
(1, 'oscar', 'gonzalez', '', '', '', '1090384538', '3228858439', 'Mz C4 casa 21 torcoroma 2', 0, 0, '', '0000-00-00 00:00:00'),
(2, 'Manuel', 'Sanchez', '', '', '', '1090384545', '3134563202', 'Mz C4 casa 16 aniversario 2', 0, 0, '', '0000-00-00 00:00:00'),
(3, 'maria', 'cifuentes', '', '', '', '446262462', '3112245368', 'mz 14 casa22 Grisales', 0, 1, '', '0000-00-00 00:00:00'),
(666, 'carlos', 'martinez', '', '', '', '1090343457', '3224534566', 'mz 14 casa22 Campo Alegre', 1, 1, '', NULL),
(777, 'maria', 'angustina', '', '', '', '1090342367', '3224567677', 'mz 14 casa22 Conjunto las flores', 0, 1, '', '2022-07-22 20:03:27'),
(888, 'ridrigo', 'bonillla', '', '', '', '109023456', '3224567899', 'mz 14 casa 34 Monte Alegre', 0, 1, '', NULL),
(1111, 'camilo', 'daza', '', '', '', '1090344656', '3224567856', 'mz 14 casa22 centro', 0, 0, '', '0000-00-00 00:00:00'),
(4444, '444', '444', '', '', '', '4444', '444', '4444', 0, 0, '', NULL),
(4445, '999', '999', '', '', '', '999', '999', '9999', 0, 1, '', '2022-07-22 19:59:30'),
(5555, 'carlos', 'montiel', '', '', '', '1090345648', '3224567455', 'mz 14 casa22 Campo Alegre', 1, 1, '', '2022-07-22 20:03:58'),
(5556, 'maria', 'jose', '', '', '', '1122234344', '3224545678', 'mz 14 casa44 Campo Alegre', 1, 1, '', '2022-07-22 20:29:37'),
(5557, 'oscar', 'gonzalez', 'gonzalez@gmail.com', 'wwwww', 'wwwww', NULL, NULL, NULL, 0, 0, 'on', '2022-07-27 15:51:40'),
(5558, 'maria', 'bustos', 'carvajal@gmail.com', '2222', '2222', NULL, NULL, NULL, 0, 0, 'on', '2022-07-27 16:17:33'),
(5559, 'aaaa', 'aaaa', 'aaaa@aadaf.com', 'rrrr', 'rrrr', NULL, NULL, NULL, 0, 0, 'on', '2022-07-27 16:32:44'),
(5560, 'dddd', 'dddd', 'gonzalez@gmail.com', 'dddd', 'dddd', NULL, NULL, NULL, 0, 0, 'on', '2022-07-27 16:36:39');

--
-- Disparadores `persona`
--
DELIMITER $$
CREATE TRIGGER `insertar_arrendador` AFTER INSERT ON `persona` FOR EACH ROW IF NEW.rolArrendador = 1 THEN
INSERT INTO `arrendador`(`id_arrendador`, `persona_id`) VALUES (Null, NEW.id_persona);
END IF
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_arrendatario` AFTER INSERT ON `persona` FOR EACH ROW IF NEW.rolArrendatario = 1 THEN
INSERT INTO `arrendatario`(`id_arrendatario`, `persona_id`) VALUES (Null, NEW.id_persona);
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `id_propiedad` int(11) NOT NULL,
  `arrendador_id` int(11) DEFAULT NULL,
  `ciudad` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`id_propiedad`, `arrendador_id`, `ciudad`, `barrio`, `direccion`, `fecha_registro`) VALUES
(1, 1, 'cucuta', 'torcoroma2', 'mz c4 L21 torcoroma2', '0000-00-00 00:00:00'),
(3, 3, 'cucuta', 'centro', '', '2022-07-22 20:07:43'),
(4, 3, 'cucuta', 'las florez', '', '2022-07-22 20:08:01'),
(5, 4, 'cucuta', 'centro alfaro', '', '2022-07-22 20:08:15');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_arrendadores`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_arrendadores` (
`id_arrendador` int(11)
,`nombres` varchar(50)
,`apellidos` varchar(50)
,`cedula` varchar(50)
,`celular` varchar(50)
,`direccion` varchar(50)
,`reg_persona` timestamp
,`reg_arrendador` timestamp
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_arrendatarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_arrendatarios` (
`id_arrendatario` int(11)
,`nombres` varchar(50)
,`apellidos` varchar(50)
,`cedula` varchar(50)
,`celular` varchar(50)
,`direccion` varchar(50)
,`reg_peronsa` timestamp
,`reg_arrendador` timestamp
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_contratos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_contratos` (
`id_contrato` int(11)
,`cedula_arrendador` varchar(50)
,`cedula_arrendatario` varchar(50)
,`ciudad` varchar(50)
,`barrio` varchar(50)
,`direccion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_pagos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_pagos` (
`id_pago` int(11)
,`cedula` varchar(50)
,`nombres` varchar(50)
,`apellidos` varchar(50)
,`celular` varchar(50)
,`monto_pago` decimal(10,0)
,`ciudad` varchar(50)
,`barrio` varchar(50)
,`direccion` varchar(100)
,`fecha_registro` timestamp
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_propiedad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_propiedad` (
`cedula` varchar(50)
,`ciudad` varchar(50)
,`barrio` varchar(50)
,`direccion` varchar(100)
,`fecha_registro` timestamp
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_arrendadores`
--
DROP TABLE IF EXISTS `vista_arrendadores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_arrendadores`  AS SELECT `arrendador`.`id_arrendador` AS `id_arrendador`, `persona`.`nombres` AS `nombres`, `persona`.`apellidos` AS `apellidos`, `persona`.`cedula` AS `cedula`, `persona`.`celular` AS `celular`, `persona`.`direccion` AS `direccion`, `persona`.`fecha_registro` AS `reg_persona`, `arrendador`.`fecha_registro` AS `reg_arrendador` FROM (`arrendador` join `persona`) WHERE `arrendador`.`persona_id` = `persona`.`id_persona``id_persona`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_arrendatarios`
--
DROP TABLE IF EXISTS `vista_arrendatarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_arrendatarios`  AS SELECT `arrendatario`.`id_arrendatario` AS `id_arrendatario`, `persona`.`nombres` AS `nombres`, `persona`.`apellidos` AS `apellidos`, `persona`.`cedula` AS `cedula`, `persona`.`celular` AS `celular`, `persona`.`direccion` AS `direccion`, `persona`.`fecha_registro` AS `reg_peronsa`, `arrendatario`.`fecha_registro` AS `reg_arrendador` FROM (`arrendatario` join `persona`) WHERE `arrendatario`.`persona_id` = `persona`.`id_persona``id_persona`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_contratos`
--
DROP TABLE IF EXISTS `vista_contratos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_contratos`  AS SELECT `contrato`.`id_contrato` AS `id_contrato`, (select `persona`.`cedula` from (`arrendador` join `persona`) where `arrendador`.`persona_id` = `persona`.`id_persona` and `arrendador`.`id_arrendador` = `contrato`.`arrendador_id`) AS `cedula_arrendador`, (select `persona`.`cedula` from (`arrendatario` join `persona`) where `arrendatario`.`persona_id` = `persona`.`id_persona` and `arrendatario`.`id_arrendatario` = `contrato`.`arrendatario_id`) AS `cedula_arrendatario`, `propiedad`.`ciudad` AS `ciudad`, `propiedad`.`barrio` AS `barrio`, `propiedad`.`direccion` AS `direccion` FROM (`contrato` join `propiedad`) WHERE `contrato`.`propiedad_id` = `propiedad`.`id_propiedad``id_propiedad`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_pagos`
--
DROP TABLE IF EXISTS `vista_pagos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_pagos`  AS SELECT `pago`.`id_pago` AS `id_pago`, `persona`.`cedula` AS `cedula`, `persona`.`nombres` AS `nombres`, `persona`.`apellidos` AS `apellidos`, `persona`.`celular` AS `celular`, `pago`.`monto_pago` AS `monto_pago`, `propiedad`.`ciudad` AS `ciudad`, `propiedad`.`barrio` AS `barrio`, `propiedad`.`direccion` AS `direccion`, `pago`.`fecha_registro` AS `fecha_registro` FROM ((((`pago` join `contrato`) join `arrendatario`) join `propiedad`) join `persona`) WHERE `pago`.`contrato_id` = `contrato`.`id_contrato` AND `arrendatario`.`id_arrendatario` = `contrato`.`arrendatario_id` AND `propiedad`.`id_propiedad` = `contrato`.`propiedad_id` AND `persona`.`id_persona` = `arrendatario`.`persona_id``persona_id`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_propiedad`
--
DROP TABLE IF EXISTS `vista_propiedad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_propiedad`  AS SELECT (select `persona`.`cedula` from `persona` where `persona`.`id_persona` = (select `arrendador`.`persona_id` from `arrendador` where `arrendador`.`id_arrendador` = `propiedad`.`arrendador_id`)) AS `cedula`, `propiedad`.`ciudad` AS `ciudad`, `propiedad`.`barrio` AS `barrio`, `propiedad`.`direccion` AS `direccion`, `propiedad`.`fecha_registro` AS `fecha_registro` FROM `propiedad``propiedad`  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arrendador`
--
ALTER TABLE `arrendador`
  ADD PRIMARY KEY (`id_arrendador`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `arrendatario`
--
ALTER TABLE `arrendatario`
  ADD PRIMARY KEY (`id_arrendatario`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `arrendador_id` (`arrendador_id`),
  ADD KEY `arrendatario_id` (`arrendatario_id`),
  ADD KEY `propiedad_id` (`propiedad_id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `contrato_id` (`contrato_id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD PRIMARY KEY (`id_propiedad`),
  ADD KEY `arrendador_id` (`arrendador_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arrendador`
--
ALTER TABLE `arrendador`
  MODIFY `id_arrendador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `arrendatario`
--
ALTER TABLE `arrendatario`
  MODIFY `id_arrendatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5561;

--
-- AUTO_INCREMENT de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  MODIFY `id_propiedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arrendador`
--
ALTER TABLE `arrendador`
  ADD CONSTRAINT `arrendador_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `arrendatario`
--
ALTER TABLE `arrendatario`
  ADD CONSTRAINT `arrendatario_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`arrendador_id`) REFERENCES `arrendador` (`id_arrendador`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`arrendatario_id`) REFERENCES `arrendatario` (`id_arrendatario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contrato_ibfk_3` FOREIGN KEY (`propiedad_id`) REFERENCES `propiedad` (`id_propiedad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`contrato_id`) REFERENCES `contrato` (`id_contrato`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD CONSTRAINT `propiedad_ibfk_1` FOREIGN KEY (`arrendador_id`) REFERENCES `arrendador` (`id_arrendador`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
