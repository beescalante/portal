-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2021 a las 00:22:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sedacfolios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `grado` varchar(255) DEFAULT NULL,
  `bloques` int(11) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `escuela_id` int(11) DEFAULT NULL,
  `apcarrera` varchar(255) DEFAULT NULL,
  `applan` varchar(255) DEFAULT NULL,
  `corto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`, `grado`, `bloques`, `director`, `escuela_id`, `apcarrera`, `applan`, `corto`) VALUES
(1, 'Bachillerato en Administración de Negocios con énfasis en Contaduría', 'Bachillerato', 8, 'Jimmy Carballo', 3, '296-96', '880-20', 'Bachillerato en Administracion de Negocios con enf en Contaduria'),
(2, 'Bachillerato en Administración de Negocios con énfasis en Gestión Municipal', 'Bachillerato', 8, 'Jimmy Carballo', 3, '328-97', '328-97', 'Bachillerato en Admin de Negocios con enf en Gestion Municipal'),
(3, 'Bachillerato en Administración de Negocios con énfasis en Mercadeo', 'Bachillerato', 8, 'Jimmy Carballo', 3, '296-96', '880-20', 'Bachillerato en Administracion de Negocios con enf en Mercadeo'),
(4, 'Bachillerato en Administración de Negocios con énfasis en Recursos Humanos', 'Bachillerato', 8, 'Jimmy Carballo', 3, '354-98', '880-20', 'Bachillerato en Admin de Negocios con enf Recursos Humanos'),
(5, 'Bachillerato en Administración de Sistemas de Información en Salud', 'Bachillerato', 8, 'Jimmy Carballo', 2, '327-97', '327-97', 'Bachillerato en Admin de Sistemas de Informacion en Salud'),
(6, 'Bachillerato en Ciencias de la Educación con énfasis en I y II Ciclos', 'Bachillerato', 8, 'Carmen Meneses', 1, '340-98    ', '340-98    ', 'Bachillerato en Ciencias de la Educ con enf en I y II Ciclos'),
(7, 'Bachillerato en Enfermería', 'Bachillerato', 8, 'Rosa Maria Vargas', 2, '297-96 ', '650-2010', 'Bachillerato en Enfermeria'),
(8, 'Licenciatura en Administración de Recursos Humanos', 'Licenciatura', 2, 'Jimmy Carballo', 3, '359-98', '359-98', 'Licenciatura en Administracion de Recursos Humanos'),
(9, 'Licenciatura en Ciencias de la Educación con Énfasis en Administración Educativa', 'Licenciatura', 2, 'Carmen Meneses', 1, '368-99', '368-99', 'Licenciatura en Cs de Educ con enf en Administracion Educativa'),
(10, 'Licenciatura en Ciencias de la Educación con Énfasis en I y II Ciclos', 'Licenciatura', 2, 'Carmen Meneses', 1, '368-99  ', '368-99 ', 'Licenciatura en Cs de la Educacion con enf en I y II Ciclos'),
(11, 'Licenciatura en Contaduría Pública', 'Licenciatura', 2, 'Jimmy Carballo', 3, '325-97', '377-99', 'Licenciatura en Contaduria Publica'),
(12, 'Licenciatura en Derecho', 'Licenciatura', 11, 'Evelio Pacheco', 4, '324-97', '447-2001', 'Licenciatura en Derecho'),
(13, 'Licenciatura en Enfermería', 'Licenciatura', 2, 'Rosa Maria Vargas', 2, '296-96', '349-98', 'Licenciatura en Enfermeria'),
(14, 'Licenciatura en Mercadeo', 'Licenciatura', 2, 'Jimmy Carballo', 3, '322-97', '325-97', 'Licenciatura en Mercadeo'),
(15, 'Licenciatura en Registros y Sistemas de Información en Salud', 'Licenciatura', 2, 'Rosa Maria Vargas', 2, '486-2003', '486-2003', 'Licenciatura en Registros y Sistemas de Informacion en Salud'),
(16, 'Maestría en Administración de Negocios con énfasis en Gerencia', 'Maestría', 4, 'Jimmy Carballo', 5, '296-96', '296-96', 'Maestria en Administracion de Negocios con enfasis en Gerencia'),
(17, 'Maestría en Administración de Negocios con énfasis en Mercadeo Gerencial', 'Maestría', 4, 'Jimmy Carballo', 5, '296-96', '296-96', 'Maestria en Admin de Negocios con enf en Mercadeo Gerencial'),
(18, 'Maestría en Administración de Negocios con énfasis en Recursos Humanos', 'Maestría', 4, 'Jimmy Carballo', 5, '296-96', '296-96', 'Maestria en Admin de Negocios con enf en Recursos Humanos'),
(19, 'Maestría en Administración de Negocios con énfasis en Reingeniería Administrativa', 'Maestría', 4, 'Jimmy Carballo', 5, '320-97', '320-97', 'Maestria en Admin de Negocios enf en Reingenieria Administrativa'),
(20, 'Maestría en Administración de Negocios con énfasis en Relaciones Económicas Internacionales', 'Maestría', 4, 'Jimmy Carballo', 5, '320-97', '320-97', 'Maestria en Admin de Negocios enf en Rel Econ Internacionales'),
(21, 'Maestría en Administración de Servicios de Salud', 'Maestría', 4, 'Rosa Maria Vargas', 5, '297-96', '297-96', 'Maestria en Administracion de Servicios de Salud'),
(22, 'Maestría en Auditoría de Procesamiento Electrónico de Datos', 'Maestría', 4, 'Jimmy Carballo', 5, '327-97', '325-99', 'Maestria en Auditoria de Procesamiento Electronico de Datos'),
(23, 'Maestría en Materno Infantil y Obstetricia', 'Maestría', 3, 'Estrella Madrigal', 5, '340-98', '379-99', 'Maestria en Materno Infantil y Obstetricia'),
(24, 'Maestría en Salud Mental y Psiquiatría', 'Maestría', 3, 'Estrella Madrigal', 5, '502-04', '502-04', 'Maestria en Salud Mental y Psiquiatria'),
(25, 'Maestría en Salud Pública', 'Maestría', 3, 'Rosa Maria Vargas', 5, '335-97', '335-97', 'Maestria en Salud Publica'),
(26, 'Maestría en Salud Pública con énfasis en Epidemiología', 'Maestría', 3, 'Rosa Maria Vargas', 5, '369-99', '369-99', 'Maestria en Salud Publica con enfasis en Epidemiologia'),
(27, 'Técnico en Asistente Administrativo', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Asistente Administrativo'),
(28, 'Técnico en Comercio Exterior y Aduanas', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Comercio Exterior y Aduanas'),
(29, 'Técnico en Contratación Administrativa', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Contratacion Administrativa'),
(30, 'Técnico en Control de la Calidad', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Control de la Calidad'),
(31, 'Técnico en Salud Ocupacional', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Salud Ocupacional'),
(32, 'Técnico Auxiliar en Contabilidad y Finanzas', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico Aux en Contabilidad y Finanzas'),
(33, 'Técnico en Marketing y Ventas', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Marketing y Ventas'),
(34, 'Técnico en Gestion del Talento y Recurso Humano', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Gest Talento y Recurso Humano'),
(35, 'Técnico en Secretariado Ejecutivo', 'Técnico', 6, 'N/A', 6, '', '', 'Tecnico en Secretariado Ejecutivo'),
(36, 'Técnico en Diseño y Desarrollo Web', 'Técnico', 3, 'N/A', 6, '', '', 'Tecnico en Diseno y Desarrollo Web'),
(37, 'Curso Libre de Ofimática (Nivel Básico)', 'Curso Libre', 1, 'N/A', 8, '', '', 'Curso Libre de Ofimatica'),
(38, 'Bachillerato en Administración de Negocios', 'Bachillerato', 8, 'N/A', 3, '', '', 'Bachillerato en Administracion de Negocios'),
(39, 'Tecnico en Gestion de Desastres', 'Técnico', 6, '', 6, '', '', 'Tecnico en Gestion de Desastres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras_sedes`
--

CREATE TABLE `carreras_sedes` (
  `id` int(11) NOT NULL,
  `carrera_id` int(11) DEFAULT NULL,
  `sede_id` int(11) DEFAULT NULL,
  `coordinador` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `carreras_sedes`
--

INSERT INTO `carreras_sedes` (`id`, `carrera_id`, `sede_id`, `coordinador`) VALUES
(1, 1, 1, NULL),
(2, 2, 1, NULL),
(3, 3, 1, NULL),
(4, 4, 1, NULL),
(5, 5, 1, NULL),
(6, 6, 1, NULL),
(7, 7, 1, NULL),
(8, 8, 1, NULL),
(9, 9, 1, NULL),
(10, 10, 1, NULL),
(11, 11, 1, NULL),
(12, 12, 1, NULL),
(13, 13, 1, NULL),
(14, 14, 1, NULL),
(15, 15, 1, NULL),
(16, 16, 1, NULL),
(17, 17, 1, NULL),
(18, 18, 1, NULL),
(19, 19, 1, NULL),
(20, 20, 1, NULL),
(21, 21, 1, NULL),
(22, 22, 1, NULL),
(23, 23, 1, NULL),
(24, 24, 1, NULL),
(25, 25, 1, NULL),
(26, 26, 1, NULL),
(27, 1, 2, NULL),
(28, 2, 2, NULL),
(29, 3, 2, NULL),
(30, 4, 2, NULL),
(31, 5, 2, NULL),
(32, 6, 2, NULL),
(33, 7, 2, NULL),
(34, 8, 2, NULL),
(35, 9, 2, NULL),
(36, 10, 2, NULL),
(37, 11, 2, NULL),
(38, 12, 2, NULL),
(39, 13, 2, NULL),
(40, 14, 2, NULL),
(41, 15, 2, NULL),
(42, 16, 2, NULL),
(43, 17, 2, NULL),
(44, 18, 2, NULL),
(45, 19, 2, NULL),
(46, 20, 2, NULL),
(47, 21, 2, NULL),
(48, 22, 2, NULL),
(49, 23, 2, NULL),
(50, 24, 2, NULL),
(51, 25, 2, NULL),
(52, 26, 2, NULL),
(53, 1, 3, NULL),
(54, 2, 3, NULL),
(55, 3, 3, NULL),
(56, 4, 3, NULL),
(57, 5, 3, NULL),
(58, 6, 3, NULL),
(59, 7, 3, NULL),
(60, 8, 3, NULL),
(61, 9, 3, NULL),
(62, 10, 3, NULL),
(63, 11, 3, NULL),
(64, 12, 3, NULL),
(65, 13, 3, NULL),
(66, 14, 3, NULL),
(67, 15, 3, NULL),
(68, 16, 3, NULL),
(69, 17, 3, NULL),
(70, 18, 3, NULL),
(71, 19, 3, NULL),
(72, 20, 3, NULL),
(73, 21, 3, NULL),
(74, 22, 3, NULL),
(75, 23, 3, NULL),
(76, 24, 3, NULL),
(77, 25, 3, NULL),
(78, 26, 3, NULL),
(79, 7, 4, NULL),
(80, 13, 4, NULL),
(81, 10, 4, NULL),
(82, 5, 4, NULL),
(83, 9, 4, NULL),
(84, 15, 4, NULL),
(85, 21, 4, NULL),
(86, 23, 4, NULL),
(87, 24, 4, NULL),
(88, 26, 4, NULL),
(89, 7, 5, NULL),
(90, 13, 5, NULL),
(91, 10, 5, NULL),
(92, 6, 5, NULL),
(93, 9, 5, NULL),
(94, 1, 6, NULL),
(95, 2, 6, NULL),
(96, 3, 6, NULL),
(97, 4, 6, NULL),
(98, 5, 6, NULL),
(99, 6, 6, NULL),
(100, 7, 6, NULL),
(101, 8, 6, NULL),
(102, 9, 6, NULL),
(103, 10, 6, NULL),
(104, 11, 6, NULL),
(105, 13, 6, NULL),
(106, 14, 6, NULL),
(107, 15, 6, NULL),
(108, 16, 6, NULL),
(109, 17, 6, NULL),
(110, 18, 6, NULL),
(111, 19, 6, NULL),
(112, 20, 6, NULL),
(113, 21, 6, NULL),
(114, 22, 6, NULL),
(115, 7, 7, NULL),
(116, 9, 7, NULL),
(117, 13, 7, NULL),
(118, 15, 7, NULL),
(119, 21, 7, NULL),
(120, 23, 7, NULL),
(121, 24, 7, NULL),
(122, 25, 7, NULL),
(123, 26, 7, NULL),
(124, 27, 2, NULL),
(125, 28, 2, NULL),
(126, 29, 2, NULL),
(127, 30, 2, NULL),
(128, 31, 2, NULL),
(129, 5, 7, NULL),
(130, 1, 4, ''),
(131, 3, 4, ''),
(132, 4, 4, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Master'),
(2, 'Admin'),
(3, 'Expedientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `horario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '',
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `corto` varchar(255) COLLATE utf8_bin DEFAULT '',
  `abrev` varchar(255) COLLATE utf8_bin DEFAULT '',
  `soporte` varchar(255) COLLATE utf8_bin DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `horario`, `telefono`, `direccion`, `correo`, `corto`, `abrev`, `soporte`) VALUES
(1, 'Sede Central', 'Lunes a Viernes: 8:00 am a 8:00pm y Sábados: 8:00am a 12:00pm', '2257-4552', 'De las oficinas centrales de la CCSS 200 mts norte  y 50 mts este, Edificio Universitario Santa Lucía.', 'infocentral@usl.ac.cr', 'San Jose', 'SJ', 'soportecentral@usl.ac.cr'),
(2, 'Sede Alajuela', 'Lunes a Viernes: 9:00am a 7:45pm y Sábados: 8:00am a 11:45am', '2440-4545', '200 metros este y 100 sur del Hospital San Rafael de Alajuela', 'info@usl.ac.cr', 'Alajuela', 'AL', 'falajuela@usl.ac.cr'),
(3, 'Sede Cartago', 'Lunes a Viernes: 9:00am a 8:00pm y Sábados: 8:00am a 2:00pm', '2551-9967', 'Costado sur de la Escuela Jesús Jiménez, Cartago Centro.', 'infocartago@usl.ac.cr', 'Cartago', 'CA', 'soportecentral@usl.ac.cr'),
(4, 'Sede Puntarenas', 'Lunes a Viernes: 1:00pm a 8:00pm y Sábados: 7:30am a 5:30 pm', '2664-4296', 'Diagonal al Hospital Monseñor Sanabria, Edificio Universitario Santa Lucía.', 'infopuntarenas@usl.ac.cr', 'Puntarenas', 'PT', 'soportepuntarenas@usl.ac.cr'),
(5, 'Aula Desconcentrada de Puriscal', 'Luneas a Viernes: 3:00pm a 8:00pm y Sábados: 8:00am a 12:00pm', '2416-0003', 'Calle 6, Barrio Corazón de Jesús, Santiago de Puriscal.', 'infopuriscal@usl.ac.cr', 'Puriscal', 'PR', 'soportepuriscal@usl.ac.cr'),
(6, 'Sede San Carlos', 'Lunes a Viernes: 10:00am a 8:00pm y Sábados: 8:00am a 12:00pm', '2460-1922', 'Segunda Planta del Edificio Coopesancarlos R.L. Ciudad Quesada.', 'infosancarlos@usl.ac.cr', 'San Carlos', 'SC', 'soporteit@usl.ac.cr'),
(7, 'Sede Guápiles', 'Sábados: 8:00am a 4:00pm', '2257-4436', 'Centro Educativo Green Valley, 500 metros sur de los Tribunales de Justicia, Pococí, Guapiles, Limon', 'infocentral@usl.ac.cr', 'Guapiles', 'GU', 'soportecentral@usl.ac.cr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `telefono` int(11) NOT NULL,
  `creator` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `created` date NOT NULL,
  `modifier` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `passkey` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `timeout` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `photo_dir` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `firstime` tinyint(1) NOT NULL DEFAULT 0,
  `sede_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `nombre`, `apellido`, `role_id`, `status`, `telefono`, `creator`, `created`, `modifier`, `modified`, `passkey`, `timeout`, `photo`, `photo_dir`, `firstime`, `sede_id`) VALUES
(1, 'admin', '$2y$10$lAwxuSkqxxMQXYXRPTL0a.QPGSLnJXbRB3DxhYMdfF2bos5PK2XBG', 'admin@admin.com', 'Administrador', 'de Todo', 1, 1, 12345678, 'admin', '2019-04-06', 'admin', '2019-04-07', '', '2020-09-04 22:45:40', 'user.png', 'default', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras_sedes`
--
ALTER TABLE `carreras_sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `carreras_sedes`
--
ALTER TABLE `carreras_sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
