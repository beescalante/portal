-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2020 a las 23:56:24
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal`
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
  `applan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`, `grado`, `bloques`, `director`, `escuela_id`, `apcarrera`, `applan`) VALUES
(1, 'Bachillerato en Administración de Negocios con énfasis en Contaduría', 'Bachillerato', 8, 'Jimmy Carballo', 3, '296-96', '880-20'),
(2, 'Bachillerato en Administración de Negocios con énfasis en Gestión Municipal', 'Bachillerato', 8, 'Jimmy Carballo', 3, '328-97', '328-97'),
(3, 'Bachillerato en Administración de Negocios con énfasis en Mercadeo', 'Bachillerato', 8, 'Jimmy Carballo', 3, '296-96', '880-20'),
(4, 'Bachillerato en Administración de Negocios con énfasis en Recursos Humanos', 'Bachillerato', 8, 'Jimmy Carballo', 3, '354-98', '880-20'),
(5, 'Bachillerato en Administración de Sistemas de Información en Salud', 'Bachillerato', 8, 'Jimmy Carballo', 2, '327-97', '327-97'),
(6, 'Bachillerato en Ciencias de la Educación con énfasis en I y II Ciclos', 'Bachillerato', 8, 'Carmen Meneses', 1, '340-98    ', '340-98    '),
(7, 'Bachillerato en Enfermería', 'Bachillerato', 8, 'Rosa Maria Vargas', 2, '297-96 ', '650-2010'),
(8, 'Licenciatura en Administración de Recursos Humanos', 'Licenciatura', 2, 'Jimmy Carballo', 3, '359-98', '359-98'),
(9, 'Licenciatura en Ciencias de la Educación con Énfasis en Administración Educativa', 'Licenciatura', 2, 'Carmen Meneses', 1, '368-99', '368-99'),
(10, 'Licenciatura en Ciencias de la Educación con Énfasis en I y II Ciclos', 'Licenciatura', 2, 'Carmen Meneses', 1, '368-99  ', '368-99 '),
(11, 'Licenciatura en Contaduría Pública', 'Licenciatura', 2, 'Jimmy Carballo', 3, '325-97', '377-99'),
(12, 'Licenciatura en Derecho', 'Licenciatura', 11, 'Evelio Pacheco', 4, '324-97', '447-2001'),
(13, 'Licenciatura en Enfermería', 'Licenciatura', 2, 'Rosa Maria Vargas', 2, '296-96', '349-98'),
(14, 'Licenciatura en Mercadeo', 'Licenciatura', 2, 'Jimmy Carballo', 3, '322-97', '325-97'),
(15, 'Licenciatura en Registros y Sistemas de Información en Salud', 'Licenciatura', 2, 'Rosa Maria Vargas', 2, '486-2003', '486-2003'),
(16, 'Maestría en Administración de Negocios con énfasis en Gerencia', 'Maestría', 4, 'Jimmy Carballo', 5, '296-96', '296-96'),
(17, 'Maestría en Administración de Negocios con énfasis en Mercadeo Gerencial', 'Maestría', 4, 'Jimmy Carballo', 5, '296-96', '296-96'),
(18, 'Maestría en Administración de Negocios con énfasis en Recursos Humanos', 'Maestría', 4, 'Jimmy Carballo', 5, '296-96', '296-96'),
(19, 'Maestría en Administración de Negocios con énfasis en Reingeniería Administrativa', 'Maestría', 4, 'Jimmy Carballo', 5, '320-97', '320-97'),
(20, 'Maestría en Administración de Negocios con énfasis en Relaciones Económicas Internacionales', 'Maestría', 4, 'Jimmy Carballo', 5, '320-97', '320-97'),
(21, 'Maestría en Administración de Servicios de Salud', 'Maestría', 4, 'Rosa Maria Vargas', 5, '297-96', '297-96'),
(22, 'Maestría en Auditoría de Procesamiento Electrónico de Datos', 'Maestría', 4, 'Jimmy Carballo', 5, '327-97', '325-99'),
(23, 'Maestría en Materno Infantil y Obstetricia', 'Maestría', 3, 'Estrella Madrigal', 5, '340-98', '379-99'),
(24, 'Maestría en Salud Mental y Psiquiatría', 'Maestría', 3, 'Estrella Madrigal', 5, '502-04', '502-04'),
(25, 'Maestría en Salud Pública', 'Maestría', 3, 'Rosa Maria Vargas', 5, '335-97', '335-97'),
(26, 'Maestría en Salud Pública con énfasis en Epidemiología', 'Maestría', 3, 'Rosa Maria Vargas', 5, '369-99', '369-99'),
(27, 'Técnico en Asistente Administrativo', 'Técnico', 6, 'N/A', 6, '', ''),
(28, 'Técnico en Comercio Exterior y Aduanas', 'Técnico', 6, 'N/A', 6, '', ''),
(29, 'Técnico en Contratación Administrativa', 'Técnico', 6, 'N/A', 6, '', ''),
(30, 'Técnico en Control de la Calidad', 'Técnico', 6, 'N/A', 6, '', ''),
(31, 'Técnico en Salud Ocupacional', 'Técnico', 6, 'N/A', 6, '', '');

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
(129, 5, 7, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE `cobros` (
  `id` int(11) NOT NULL,
  `cedula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `concepto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` float(11,2) NOT NULL,
  `impuesto` float(11,2) NOT NULL,
  `descuento` float(11,2) NOT NULL,
  `total` float(11,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `sede_id` int(11) NOT NULL,
  `referencia` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` date NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `director` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id`, `nombre`, `director`) VALUES
(1, 'Ciencias de la Educación', NULL),
(2, 'Ciencias de la Salud', NULL),
(3, 'Ciencias Económicas y Sociales', NULL),
(4, 'Ciencias Jurídicas', NULL),
(5, 'Estudios de Postgrado', NULL),
(6, 'Técnicos', NULL),
(7, 'Especialidades', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `cedula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emailp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emailu` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidade_id` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `sede_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `conape` tinyint(1) NOT NULL,
  `condicion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '',
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `creditos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `carrera_id` int(11) DEFAULT NULL,
  `requisitos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `codigo`, `nombre`, `bloque`, `creditos`, `carrera_id`, `requisitos`) VALUES
(1, 'E-101', 'Anatomía', 1, '4', 7, ''),
(2, 'E-102', 'Antropología Cultural en Costa Rica', 1, '4', 7, ''),
(3, 'E-103', 'Estadística', 1, '4', 7, ''),
(4, 'E-104', 'Historia y Filosofía de Enfermería', 1, '4', 7, ''),
(5, 'E-105', 'Bioquímica', 2, '4', 7, ''),
(6, 'E-106', 'Fisiología', 2, '4', 7, ''),
(7, 'E-107', 'Principios Científicos de Enfermería', 2, '4', 7, ''),
(8, 'E-108', 'Epidemiología', 2, '4', 7, ''),
(9, 'E-109', 'Historia de la Cultura', 3, '2', 7, ''),
(10, 'E-110', 'Nutrición', 3, '4', 7, 'E-101 E-106'),
(11, 'E-111', 'Enfermeria I', 3, '4', 7, 'E-101 E-105 E-106 E-107'),
(12, 'E-111CC', 'Enfermeria I', 3, '0', 7, ''),
(13, 'E-112', 'Psicología General', 3, '4', 7, ''),
(14, 'E-113', 'Metodología Educativa', 3, '4', 7, ''),
(15, 'E-114', 'Farmacología', 4, '4', 7, 'E-105'),
(16, 'E-115', 'Enfermeria Salud Mental y Psiquiatria', 4, '4', 7, 'E-101 E-111'),
(17, 'E-115CC', 'Enfermeria Salud Mental y Psiquiatria', 4, '0', 7, ''),
(18, 'E-116', 'Biofísica', 4, '4', 7, ''),
(19, 'E-117', 'Psicología Crecimiento y Desarrollo Humano', 4, '4', 7, 'E-112'),
(20, 'E-118', 'Teorias de Enfermería y Desarrollo Personal', 5, '4', 7, 'E-107 E-111 E-115 E-117'),
(21, 'E-119', 'Microbiología y Parasitología', 5, '4', 7, 'E-105'),
(22, 'E-120', 'Enfermería Materno Infantil', 5, '6', 7, 'E-111 E-117'),
(23, 'E-120CC', 'Enfermería Materno Infantil', 5, '0', 7, ''),
(24, 'E-121', 'Enfermería del Nino y del Adolescente', 5, '4', 7, 'E-117'),
(25, 'E-122', 'Médico Quirúrgico I', 6, '8', 7, 'E-107 E-111'),
(26, 'E-123', 'Enfermería de Salud Publica', 6, '4', 7, 'E-103 E-108 E-114 E-120'),
(27, 'E-123CC', 'Enfermería de Salud Pública', 6, '0', 7, ''),
(28, 'E-124', 'Ética', 6, '4', 7, ''),
(29, 'E122CC', 'Médico Quirúrgico I', 6, '0', 7, ''),
(30, 'E-125', 'Administración para Enfermería', 7, '4', 7, 'E-122 E-123'),
(31, 'E-126', 'Médico Quirúrgico II', 7, '8', 7, 'E-122'),
(32, 'E-126CC', 'Médico Quirúrgico II', 7, '0', 7, ''),
(33, 'E-127', 'Enfermería en Geriatría', 7, '4', 7, 'E-122'),
(34, 'E-127CC', 'Enfermeria en Geriatría', 7, '0', 7, ''),
(35, 'E-128A', 'Métodos de Investigación', 8, '4', 7, ''),
(36, 'E-128B', 'Administración en los Servicios de Enfermería', 8, '4', 7, 'E-125'),
(37, 'E-128BCC', 'Administración en los Servicios de Enfermería', 8, '0', 7, ''),
(38, 'E-128C', 'Urgencias en Enfermeria', 8, '4', 7, 'E-126'),
(39, 'E-128CCC', 'Urgencias en Enfermeria', 8, '0', 7, ''),
(40, 'E-128D', 'Enfermería Pediátrica', 8, '4', 7, 'E-120 E-117 E-121'),
(41, 'E-128DCC', 'Enfermería Pediátrica', 8, '0', 7, ''),
(42, 'E-129', 'Enfermería Comunitaria', 1, '4', 13, ''),
(43, 'E-130', 'Gerencia en los Servicios de Salud', 1, '4', 13, ''),
(44, 'E-131', 'Salud Ocupacional', 1, '4', 13, ''),
(45, 'E-132', 'Investigacion', 1, '4', 13, ''),
(46, 'E-01PG', 'Gerencia en Servicios de Salud', 2, '0', 13, ''),
(47, 'E-02PG', 'Enfermería Comunitaria', 2, '0', 13, ''),
(48, 'E-03PG', 'Salud Ocupacional', 2, '0', 13, ''),
(49, 'E-04PG', 'Salud Mental', 2, '0', 13, ''),
(50, 'E-05PG', 'Enfermería en Desastres', 2, '0', 13, ''),
(51, 'E-133', 'Fundamentos de Computacion', 2, '4', 13, ''),
(52, 'E-134', 'Enfermería en Desastres', 2, '4', 13, ''),
(53, 'E-135', 'Salud Mental', 2, '8', 13, ''),
(54, 'LEDU-01', 'Ética Profesional', 1, '4', 10, ''),
(55, 'LEDU-02', 'Educación Ambiental', 1, '4', 10, ''),
(56, 'LEDU-03', 'Metodología de la Investigacion', 1, '4', 10, ''),
(57, 'LEDU-04', 'Adecuación Curricular II', 1, '6', 10, ''),
(58, 'A-01PG', 'Primera Prueba de Grado', 2, '0', 10, ''),
(59, 'A-02PG', 'Segunda Prueba de Grado', 2, '0', 10, ''),
(60, 'A-03PG', 'Tercera Prueba de Grado', 2, '0', 10, ''),
(61, 'LEDU-05', 'Comunicación Escuela-Comunidad', 2, '5', 10, ''),
(62, 'LEDU-06', 'Diseño de Multimedios de Apoyo a la Educación', 2, '5', 10, ''),
(63, 'LEDU-07', 'Sociología', 2, '4', 10, ''),
(64, 'A-1', 'Administración I', 1, '3', 1, ''),
(65, 'A-2', 'Introducción a la Informática I', 1, '4', 1, ''),
(66, 'A-3', 'Matemática General', 1, '4', 1, ''),
(67, 'A-4', 'Contabilidad I', 1, '4', 1, ''),
(68, 'A-5', 'Administración II', 2, '4', 1, 'A-1'),
(69, 'A-6', 'Contabilidad II', 2, '4', 1, 'A-4'),
(70, 'A-7', 'Estadística I', 2, '4', 1, ''),
(71, 'A-8', 'Introducción a la Informática ', 2, '4', 1, 'A-2'),
(72, 'A-9', 'Introducción al Mercadeo', 3, '4', 1, ''),
(73, 'A-10', 'Estadística II', 3, '4', 1, 'A-7'),
(74, 'C-1', 'Contabilidad III', 3, '4', 1, ''),
(75, 'A-11', 'Derecho Laboral', 3, '4', 1, ''),
(76, 'A-12', 'Matemática Financiera', 4, '4', 1, 'A-8'),
(77, 'A-13', 'Derecho Fiscal', 4, '4', 1, ''),
(78, 'A-14', 'Mercadeo Avanzado', 4, '4', 1, 'A-9'),
(79, 'C-2', 'Contabilidad IV', 4, '4', 1, 'C-1'),
(80, 'A-15', 'Derecho Mercantil', 5, '4', 1, ''),
(81, 'A-16', 'Admon. Personal', 5, '4', 1, 'A-5'),
(82, 'A-17', 'Fundamentos de Economía I', 5, '4', 1, ''),
(83, 'A-18', 'Costos I', 5, '4', 1, 'C-2'),
(84, 'A-19', 'Auditoría I', 6, '4', 1, 'A-6'),
(85, 'A-20', 'Finanzas I', 6, '4', 1, 'C-1'),
(86, 'A-21', 'Fundamentos de Economía II', 6, '4', 1, 'A-17'),
(87, 'C-3', 'Contabilidad Adv. y Financiera', 6, '4', 1, 'C-2 A-18'),
(88, 'A-22', 'Métodos Cuant. para la toma dec.', 7, '4', 1, 'A-8 A-20'),
(89, 'A-23', 'Comercio y Relaciones Internacionales', 7, '4', 1, 'A-21'),
(90, 'C-4', 'Finanzas II', 7, '4', 1, ''),
(91, 'C-5', 'Costos II', 7, '4', 1, 'A-18'),
(92, 'A-24', 'Gerencia de Decisiones', 8, '4', 1, 'A-22'),
(93, 'A-25', 'Evaluación de Proyectos', 8, '4', 1, 'C-4'),
(94, 'A-26', 'Gerencia de Operaciones', 8, '4', 1, 'A-22'),
(95, 'A-27', 'Ética de los Negocios', 8, '4', 1, 'C-4 C-5 A-22 A-23'),
(96, 'A-1', 'Administración I', 1, '3', 2, ''),
(97, 'A-2', 'Introducción a la Informática I', 1, '4', 2, ''),
(98, 'A-3', 'Matemática General', 1, '2', 2, ''),
(99, 'A-4', 'Contabilidad ', 1, '4', 2, ''),
(100, 'A-6', 'Contabilidad II', 2, '4', 2, 'A-4'),
(101, 'A-7', 'Estadística I', 2, '4', 2, ''),
(102, 'A-8', 'Introducción a la Informática II', 2, '4', 2, 'A-2'),
(103, 'GM-1', 'Administración Pública', 2, '4', 2, 'A-1'),
(104, 'A-10', 'Estadística II', 3, '4', 2, 'A-7'),
(105, 'A-11', 'Derecho Laboral', 3, '3', 2, ''),
(106, 'A-9', 'Introducción al Mercadeo', 3, '4', 2, 'A-7'),
(107, 'GM-2', 'Administración Municipal', 3, '4', 2, ''),
(108, 'A-12', 'Matemática Financiera', 4, '4', 2, 'A-3'),
(109, 'A-13', 'Derecho Fiscal', 4, '3', 2, ''),
(110, 'A-14', 'Mercadeo Avanzado', 4, '4', 2, 'A-9'),
(111, 'GM-3', 'Impues. Tasas y Contribuciones Municipales', 4, '4', 2, ''),
(112, 'A-15', 'Derecho Mercantil', 5, '3', 2, 'GM-1'),
(113, 'A-16', 'Adición de Personal', 5, '3', 2, ''),
(114, 'A-17', 'Fundamentos de Economía I', 5, '3', 2, 'GM-3'),
(115, 'GM-4', 'Presupuesto Publico y Munic.', 5, '4', 2, ''),
(116, 'A-18', 'Costos I', 6, '4', 2, ''),
(117, 'A-19', 'Auditoría I', 6, '4', 2, 'A-18'),
(118, 'A-20', 'Finanzas I', 6, '4', 2, 'A-18'),
(119, 'A-21', 'Fundamentos de Economía II', 6, '4', 2, ''),
(120, 'A-22', 'Métodos Cuantitativos para la toma de Decisiones', 7, '3', 2, ''),
(121, 'A-23', 'Comercio y Relaciones Internacionales', 7, '4', 2, 'A-21'),
(122, 'A-24', 'Gerencia de Decisiones', 7, '4', 2, 'A-20'),
(123, 'GM-5', 'Legislación Municipal', 7, '4', 2, ''),
(124, 'A-26', 'Gerencia de Operaciones', 8, '4', 2, 'A-22'),
(125, 'A-27', 'Ética ', 8, '3', 2, ''),
(126, 'GM-6', 'Seminario sobre Gerencia Municipal y Análisis de Problemas Municipales', 8, '4', 2, 'A-24'),
(127, 'GM-7', 'Evaluación de Proyectos de Desarrollo Local', 8, '4', 2, 'A-24'),
(128, 'A-1', 'Administración I', 1, '3', 3, ''),
(129, 'A-2', 'Introducción a la Informática I', 1, '4', 3, ''),
(130, 'A-3', 'Matemática General', 1, '2', 3, ''),
(131, 'A-4', 'Contabilidad I', 1, '4', 3, ''),
(132, 'A-5', 'Administración II', 2, '4', 3, 'A-1'),
(133, 'A-6', 'Contabilidad II', 2, '4', 3, 'A-4'),
(134, 'A-7', 'Estadística I', 2, '4', 3, ''),
(135, 'A-8', 'Introducción a la Informatica ', 2, '4', 3, 'A-2'),
(136, 'A-10', 'Estadística II', 3, '4', 3, 'A-7'),
(137, 'A-11', 'Derecho Laboral', 3, '3', 3, ''),
(138, 'A-9', 'Introducción al Mercadeo', 3, '4', 3, 'A-7'),
(139, 'ME-1', 'Conducta del Consumidor', 3, '4', 3, ''),
(140, 'A-12', 'Matemática Financiera', 4, '4', 3, 'A-8'),
(141, 'A-13', 'Derecho Fiscal', 4, '3', 3, ''),
(142, 'A-14', 'Mercadeo Avanzado', 4, '4', 3, 'A-9'),
(143, 'ME-2', 'Investigación de Mercados', 4, '4', 3, 'C-1'),
(144, 'A-15', 'Derecho Mercantil', 5, '3', 3, ''),
(145, 'A-16', 'Admon. Personal', 5, '4', 3, 'A-5'),
(146, 'A-17', 'Fundamentos de Economía I', 5, '3', 3, ''),
(147, 'ME-3', 'Publicidad', 5, '4', 3, 'ME-2'),
(148, 'A-18', 'Costos I', 6, '4', 3, 'A-6'),
(149, 'A-19', 'Auditoría I', 6, '4', 3, 'A-6'),
(150, 'A-20', 'Finanzas I', 6, '4', 3, 'A-6'),
(151, 'A-21', 'Fundamentos de Economía II', 6, '3', 3, 'A-17'),
(152, 'A-22', 'Métodos Cuant. para la toma de Decisiones', 7, '3', 3, 'A-8 A-20'),
(153, 'A-23', 'Comercio y Relaciones Internacionales', 7, '4', 3, 'A-21'),
(154, 'ME-4', 'Promoción de Ventas', 7, '4', 3, 'ME-2'),
(155, 'ME-5', 'Administración de Ventas', 7, '4', 3, 'ME-2'),
(156, 'A-24', 'Gerencia de Decisiones', 8, '4', 3, 'A-20 A-22'),
(157, 'A-25', 'Evaluación de Proyectos', 8, '4', 3, 'A-20'),
(158, 'A-26', 'Gerencia de Operaciones', 8, '4', 3, 'A-22'),
(159, 'A-27', 'Ética de los Negocios', 8, '3', 3, 'ME-4 ME-5 A-22 A-23'),
(160, 'A-1', 'Administración I', 1, '3', 4, ''),
(161, 'A-2', 'Introducción Informática ', 1, '4', 4, ''),
(162, 'A-3', 'Matemática General', 1, '2', 4, ''),
(163, 'A-4', 'Contabilidad I', 1, '4', 4, ''),
(164, 'A-5', 'Administración II', 2, '4', 4, ''),
(165, 'A-6', 'Contabilidad II', 2, '4', 4, ''),
(166, 'A-7', 'Estadística I', 2, '4', 4, ''),
(167, 'A-8', 'Introducción a la Informática II', 2, '4', 4, ''),
(168, 'A-10', 'Estadística II', 3, '4', 4, ''),
(169, 'A-11', 'Derecho Laboral', 3, '3', 4, ''),
(170, 'A-9', 'Introducción al Mercadeo', 3, '4', 4, ''),
(171, 'RH-1', 'Sociología y Cultura Organizacional', 3, '4', 4, ''),
(172, 'A-12', 'Matemática Financiera', 4, '4', 4, ''),
(173, 'A-13', 'Derecho Fiscal', 4, '3', 4, ''),
(174, 'A-14', 'Mercadeo Avanzado', 4, '4', 4, ''),
(175, 'RH-2', 'Psicología Organizacional', 4, '4', 4, ''),
(176, 'A-15', 'Derecho Mercantil', 5, '3', 4, ''),
(177, 'A-16', 'Administración de Personal', 5, '4', 4, ''),
(178, 'A-17', 'Fundamentos de Economia I', 5, '3', 4, ''),
(179, 'RH-3', 'Teorías Motivacionales', 5, '4', 4, ''),
(180, 'A-18', 'Costos I', 6, '4', 4, ''),
(181, 'A-19', 'Auditoria I', 6, '4', 4, ''),
(182, 'A-20', 'Finanzas I', 6, '4', 4, ''),
(183, 'A-21', 'Fundamentos de Economia II', 6, '3', 4, ''),
(184, 'A-22', 'Métodos Cuantitativos para la Toma de Decisiones', 7, '3', 4, ''),
(185, 'A-23', 'Comercio y Relaciones Economicas Internacionales', 7, '4', 4, ''),
(186, 'RH-4', 'Reclutamiento y Selección de Personal', 7, '4', 4, ''),
(187, 'RH-5', 'Análisis y Clasificacion de Puestos', 7, '4', 4, ''),
(188, 'A-24', 'Gerencia de Decisiones', 8, '4', 4, ''),
(189, 'A-25', 'Evaluación de Proyectos', 8, '4', 4, ''),
(190, 'A-26', 'Gerencia de Operaciones', 8, '4', 4, ''),
(191, 'A-27', 'Ética de los Negocios', 8, '3', 4, ''),
(192, 'A-1', 'Administración I', 1, '3', 5, ''),
(193, 'A-2', 'Informática I', 1, '4', 5, ''),
(194, 'SIS-1', 'Planeamiento Didáctico', 1, '3', 5, ''),
(195, 'SIS-2', 'Introd. a Ciencias de la Salud', 1, '3', 5, ''),
(196, 'A-3', 'Matemática General', 2, '3', 5, ''),
(197, 'E-103', 'Estadística Descriptiva', 2, '4', 5, ''),
(198, 'E-108', 'Epidemiología', 2, '4', 5, ''),
(199, 'SIS-3', 'Adm. de Sist. Servicios de Salud', 2, '4', 5, ''),
(200, 'A-8', 'Informática II', 3, '4', 5, ''),
(201, 'SIS-4', 'Estadística Sist. de Inform. en Salud ', 3, '5', 5, ''),
(202, 'SIS-5', 'Registros Médicos I', 3, '4', 5, ''),
(203, 'SIS-6', 'Inglés Instrumental I', 3, '3', 5, ''),
(204, 'E-106', 'Fisiología', 4, '4', 5, ''),
(205, 'SIS-7', 'Estad. p/ Sist. de Inf. Salud II', 4, '5', 5, ''),
(206, 'SIS-8', 'Registros Médicos II', 4, '3', 5, ''),
(207, 'SIS-9', 'Inglés II', 4, '4', 5, ''),
(208, 'A-20', 'Finanzas I', 5, '4', 5, ''),
(209, 'A-5', 'Administración General II', 5, '3', 5, ''),
(210, 'SIS-10', 'Terminología Médica', 5, '4', 5, ''),
(211, 'SIS-11', 'Estadística Demográfica', 5, '4', 5, ''),
(212, 'A-11', 'Derecho Laboral', 6, '3', 5, ''),
(213, 'A-16', 'Administ. Rec. Humanos', 6, '3', 5, ''),
(214, 'C-4', 'Finanzas II', 6, '4', 5, ''),
(215, 'E-101', 'Anatomía', 6, '4', 5, ''),
(216, 'A-13', 'Derecho Administ. y Fiscal', 7, '3', 5, ''),
(217, 'M-5', 'Metodología Investigativa', 7, '4', 5, ''),
(218, 'SIS-12', 'Registros Médicos III', 7, '4', 5, ''),
(219, 'SIS-13', 'Administ. Presupuest.', 7, '4', 5, ''),
(220, 'A-25', 'Evaluación de Proyectos', 8, '4', 5, ''),
(221, 'E-105', 'Psicología General', 8, '4', 5, ''),
(222, 'M-4', 'Contabilidad Gerencial', 8, '4', 5, ''),
(223, 'SIS-15', 'Clasif. Int. Est. Enfermedades', 8, '4', 5, ''),
(224, 'BED01', 'Fund. Filosof. de la Educación', 1, '4', 6, ''),
(225, 'BED02', 'Fund. Psicol. de la Educación', 1, '4', 6, ''),
(226, 'BED03', 'Impostación de la Voz', 1, '4', 6, ''),
(227, 'BED04', 'Inglés Técnico', 1, '4', 6, ''),
(228, 'BED05', 'Didáctica General I', 2, '4', 6, ''),
(229, 'BED06', 'Educ. Salud y Nutrición', 2, '4', 6, ''),
(230, 'BED07', 'Español para I Ciclo', 2, '4', 6, ''),
(231, 'BED08', 'Ciencias para I Ciclo', 2, '4', 6, ''),
(232, 'BED09', 'Orientación Educativa', 3, '4', 6, ''),
(233, 'BED10', 'Didáctica de la Lecto escritura', 3, '4', 6, ''),
(234, 'BED11', 'Español para II Ciclo', 3, '4', 6, ''),
(235, 'BED12', 'Ciencias para II Ciclo', 3, '4', 6, ''),
(236, 'BED13', 'Psicología del niño en edad escolar', 4, '4', 6, ''),
(237, 'BED14', 'Materiales y recursos', 4, '4', 6, ''),
(238, 'BED15', 'Matemática para I Ciclo', 4, '4', 6, ''),
(239, 'BED16', 'Est. Sociales para I Ciclo', 4, '4', 6, ''),
(240, 'BED17', 'Currículum', 5, '4', 6, ''),
(241, 'BED18', 'Estimul. niño edad escolar', 5, '4', 6, ''),
(242, 'BED19', 'Matemática para II Ciclo', 5, '4', 6, ''),
(243, 'BED20', 'Est. Sociales p/II Ciclo', 5, '4', 6, ''),
(244, 'BED21', 'Diseño Curricular I', 6, '4', 6, ''),
(245, 'BED22', 'Evaluación I y II Ciclo', 6, '4', 6, ''),
(246, 'BED23', 'Detección de Problemas de Aprendizaje', 6, '4', 6, ''),
(247, 'BED24', 'Literatura Infantil', 6, '4', 6, ''),
(248, 'BED25', 'Legislación Educativa', 7, '4', 6, ''),
(249, 'BED26', 'Tecnología Educativa', 7, '4', 6, ''),
(250, 'BED27', 'Planeamiento didáctico', 7, '4', 6, ''),
(251, 'BED28', 'Adecuación Curricular', 7, '4', 6, ''),
(252, 'BED29', 'Dinámica de grupos', 8, '4', 6, ''),
(253, 'BED30', 'Administración Educativa', 8, '4', 6, ''),
(254, 'BED31', 'Informática Educativa', 8, '4', 6, ''),
(255, 'BED32', 'Práctica Profesional Supervisada', 8, '4', 6, ''),
(256, 'RH-6', 'Economía del Trabajo', 1, '4', 8, ''),
(257, 'RH-7', 'Liderazgo Empresarial', 1, '4', 8, ''),
(258, 'RH-8', 'Métodos de Trabajo', 1, '4', 8, ''),
(259, 'RH-9', 'Presupuesto y Control de Salarios', 1, '4', 8, ''),
(260, 'A-01PG', 'Primera Prueba de Grado', 2, '0', 8, ''),
(261, 'A-02PG', 'Segunda Prueba de Grado', 2, '0', 8, ''),
(262, 'A-03PG', 'Tercera Prueba de Grado', 2, '0', 8, ''),
(263, 'RH-10', 'Diseño de Estructuras Organizacionales', 2, '4', 8, ''),
(264, 'RH-11', 'Auditoría de Personal', 2, '4', 8, ''),
(265, 'RH-12', 'Salud e Higiene Ocupacional', 2, '4', 8, ''),
(266, 'RH-13', 'Sistemas de Información', 2, '4', 8, ''),
(267, 'LEDU-01', 'Ética Profesional', 1, '4', 9, ''),
(268, 'LEDU-02', 'Educación Ambiental', 1, '4', 9, ''),
(269, 'LEDU-03', 'Metodología de la Investigacion', 1, '4', 9, ''),
(270, 'LEDU-08', 'Administración Educativa', 1, '6', 9, ''),
(271, 'A-01PG', 'Primera Prueba de Grado', 2, '0', 9, ''),
(272, 'A-02PG', 'Segunda Prueba de Grado', 2, '0', 9, ''),
(273, 'A-03PG', 'Tercera Prueba de Grado', 2, '0', 9, ''),
(274, 'LEDU-09', 'Procedimientos Administrativos aplicados a la Legislación Educativa', 2, '4', 9, ''),
(275, 'LEDU-10', 'Administración de Recursos Humanos', 2, '4', 9, ''),
(276, 'LEDU-11', 'Formulación y Evaluación de Proyectos Educativos', 2, '6', 9, ''),
(277, 'A-12', 'Sistemas de Información Contables', 1, '4', 11, ''),
(278, 'A-28', 'Control Interno', 1, '4', 11, ''),
(279, 'C-7', 'Auditoría II', 1, '4', 11, ''),
(280, 'C-9', 'Efectos de la Inflación en los Estados Financieros', 1, '4', 11, ''),
(281, 'C-01PG', 'Auditoría Teórico', 2, '0', 11, ''),
(282, 'C-02PG', 'Auditoría Práctico', 2, '0', 11, ''),
(283, 'C-03PG', 'Tópicos de Contabilidad Avanzada', 2, '0', 11, ''),
(284, 'C-04PG', 'Sistemas de Información Contables', 2, '0', 11, ''),
(285, 'C-05PG', 'Exposición de Temas de Auditoría', 2, '0', 11, ''),
(286, 'C-14', 'Auditoría Interna y Operacional', 2, '4', 11, ''),
(287, 'C-16', 'Auditoría de Estados Financieros', 2, '4', 11, ''),
(288, 'C-17', 'Auditoría de Sistemas', 2, '4', 11, ''),
(289, 'C-19', 'Seminario de Auditoría', 2, '4', 11, ''),
(290, 'D-1-1', 'Historia del Derecho', 1, '4', 12, ''),
(291, 'D-1-2', 'Introduccion al Derecho I', 1, '4', 12, ''),
(292, 'D-1-3', 'Derecho Romano I', 1, '4', 12, ''),
(293, 'D-1-4', 'Principios de Derecho Privado I', 1, '2', 12, ''),
(294, 'D-2-1', 'Informática Jurídica', 2, '2', 12, ''),
(295, 'D-2-2', 'Derecho Romano II', 2, '2', 12, ''),
(296, 'D-2-3', 'Principios de Derecho Privado II', 2, '4', 12, ''),
(297, 'D-2-4', 'Introduccion al Derecho II', 2, '4', 12, ''),
(298, 'D-3-1', 'Derecho Publico', 3, '4', 12, ''),
(299, 'D-3-2', 'Derecho Agrario', 3, '4', 12, ''),
(300, 'D-3-3', 'Derechos Reales I', 3, '4', 12, ''),
(301, 'D-3-4', 'Teoría General del Proceso', 3, '4', 12, ''),
(302, 'D-4-1', 'Derechos Reales II', 4, '4', 12, ''),
(303, 'D-4-2', 'Derecho Constitucional I', 4, '4', 12, ''),
(304, 'D-4-3', 'Derecho de Familia I', 4, '4', 12, ''),
(305, 'D-4-4', 'Derecho Laboral I', 4, '4', 12, ''),
(306, 'D-5-1', 'Derecho Constitucional II', 5, '4', 12, ''),
(307, 'D-5-2', 'Derecho de Obligaciones I', 5, '4', 12, ''),
(308, 'D-5-3', 'Derecho Laboral I', 5, '4', 12, ''),
(309, 'D-5-4', 'Derecho de Familia I', 5, '4', 12, ''),
(310, 'D-6-1', 'Derecho de Obligaciones I', 6, '4', 12, ''),
(311, 'D-6-2', 'Derecho de Contratos I', 6, '4', 12, ''),
(312, 'D-6-3', 'Derecho Penal I', 6, '4', 12, ''),
(313, 'D-6-4', 'Derecho Comercial I', 6, '4', 12, ''),
(314, 'D-7-1', 'Derecho Penal II', 7, '4', 12, ''),
(315, 'D-7-2', 'Derecho Comercial II', 7, '4', 12, ''),
(316, 'D-7-3', 'Derecho Administrativo I', 7, '4', 12, ''),
(317, 'D-7-4', 'Derecho de Contratos II', 7, '4', 12, ''),
(318, 'D-8-1', 'Derecho Comercial III', 8, '4', 12, ''),
(319, 'D-8-2', 'Derecho Penal III', 8, '4', 12, ''),
(320, 'D-8-3', 'Derecho Administrativo II', 8, '4', 12, ''),
(321, 'D-8-4', 'Derecho Procesal Civil I', 8, '4', 12, ''),
(322, 'D-9-1', 'Derecho Penal IV', 9, '4', 12, ''),
(323, 'D-9-2', 'Derecho Procesal Civil I', 9, '4', 12, ''),
(324, 'D-9-3', 'Derecho Procesal Penal I', 9, '4', 12, ''),
(325, 'D-9-4', 'Procedimientos Administrativos', 9, '4', 12, ''),
(326, 'D-10-1', 'Derecho Procesal Penal II', 10, '4', 12, ''),
(327, 'D-10-2', 'Derecho Financiero Tributario', 10, '4', 12, ''),
(328, 'D-10-3', 'Juicios Universales I', 10, '4', 12, ''),
(329, 'D-10-4', 'Derecho Notarial y Registral I', 10, '4', 12, ''),
(330, 'D-11-1', 'Ética Profesional', 11, '4', 12, ''),
(331, 'D-11-2', 'Derecho Notarial y Registral II', 11, '4', 12, ''),
(332, 'D-11-3', 'Juicios Universales II', 11, '4', 12, ''),
(333, 'D-11-4', 'Derecho Internacional', 11, '4', 12, ''),
(334, 'D-PG01', 'Prueba de Grado Derecho Civil General', 11, '0', 12, ''),
(335, 'D-PG02', 'Prueba de Grado Penal General', 11, '0', 12, ''),
(336, 'D-PG03', 'Prueba de Grado Derecho Procesal Civil', 11, '0', 12, ''),
(337, 'D-PG04', 'Prueba de Grado Derecho de Familia', 11, '0', 12, ''),
(338, 'D-PG05', 'Prueba de Grado Derecho Laboral', 11, '0', 12, ''),
(339, 'ME-10', 'Relaciones Públicas', 1, '4', 14, ''),
(340, 'ME-12', 'Estadística Aplicada al Mercadeo', 1, '4', 14, ''),
(341, 'ME-6', 'Mercadeo Estratégico', 1, '4', 14, ''),
(342, 'ME-7', 'Gestión de Compras', 1, '4', 14, ''),
(343, 'ME-01PG', 'Conducta del Consumidor', 2, '0', 14, ''),
(344, 'ME-02PG', 'Investigación de Mercados', 2, '0', 14, ''),
(345, 'ME-03PG', 'Tópicos de Mercadeo Avanzados', 2, '0', 14, ''),
(346, 'ME-04PG', 'Sistemas de Información de Mercadeo', 2, '0', 14, ''),
(347, 'ME-05PG', 'Plataforma Publicitaria', 2, '0', 14, ''),
(348, 'ME-13', 'Legislación Aplicada al Mercadeo', 2, '4', 14, ''),
(349, 'ME-15', 'Mercadeo Internacional', 2, '4', 14, ''),
(350, 'ME-17', 'Sistemas de Información Mercadotécnia', 2, '4', 14, ''),
(351, 'ME-19', 'Análisis y toma de Decisiones en mercadeo', 2, '4', 14, ''),
(352, 'SIS-16', 'Registros de Salud avanzados', 1, '4', 15, ''),
(353, 'SIS-17', 'Planificación Estratégica', 1, '4', 15, ''),
(354, 'SIS-18', 'Evaluacion epidemiológica de los sistemas de informacion y base de datos', 1, '4', 15, ''),
(355, 'SIS-19', 'Salud Pública', 1, '4', 15, ''),
(356, 'SIS-01PG', 'Registros Avanzados', 2, '0', 15, ''),
(357, 'SIS-02PG', 'Epidemiologia Avanzada y Estadistica Inferencial', 2, '0', 15, ''),
(358, 'SIS-03PG', 'Salud Publica', 2, '0', 15, ''),
(359, 'SIS-20', 'Epidemiología Avanzada', 2, '4', 15, ''),
(360, 'SIS-21', 'Estadística Inferencial', 2, '6', 15, ''),
(361, 'SIS-22', 'Supervisión capacitante', 2, '4', 15, ''),
(362, 'SIS-23', 'Seminario de calidad en los registros y sistemas de información en Salud', 2, '4', 15, ''),
(363, 'M-5', 'Metodología Investigativa', 1, '4', 16, ''),
(364, 'M-6', 'Gerencia de Recursos Humanos', 1, '4', 16, ''),
(365, 'M-7', 'Estructuras y Procesos Organizacionales', 1, '4', 16, ''),
(366, 'M-8', 'Gerencia de Mercadeo Avanzado', 1, '4', 16, ''),
(367, 'M-10', 'Gerencia y Planeación Estratégica', 2, '4', 16, ''),
(368, 'M-11', 'Planificación Institucional', 2, '4', 16, ''),
(369, 'M-12', 'Teoría de la Decisión', 2, '4', 16, ''),
(370, 'M-9', 'Admon. Empresarial', 2, '4', 16, ''),
(371, 'M-13', 'Liderazgo Gerencial', 3, '4', 16, ''),
(372, 'M-14', 'Sistemas de Información Gerencial', 3, '4', 16, ''),
(373, 'M-15', 'Administración de Calidad', 3, '4', 16, ''),
(374, 'M-16', 'Control Estratégico', 3, '4', 16, ''),
(375, 'MSCP', 'Práctica Profesional', 4, '12', 16, ''),
(376, 'M-5', 'Metodología Investigativa', 1, '4', 20, ''),
(377, 'M-6', 'Gerencia de Recursos Humanos', 1, '4', 20, ''),
(378, 'M-7', 'Estructuras y Procesos Organizacionales', 1, '4', 20, ''),
(379, 'M-8', 'Gerencia de Mercadeo Avanzado', 1, '4', 20, ''),
(380, 'M-10', 'Gerencia y Planeación Estratégica', 2, '4', 20, ''),
(381, 'M-29', 'Política Económica', 2, '4', 20, ''),
(382, 'M-30', 'Relaciones Económicas Internacionales', 2, '4', 20, ''),
(383, 'M-9', 'Administración Empresarial', 2, '4', 20, ''),
(384, 'M-31', 'Negociacion Internacional', 3, '4', 20, ''),
(385, 'M-32', 'Cooperacion Internacional', 3, '4', 20, ''),
(386, 'M-33', 'Operaciones de Mecado a Futuro', 3, '4', 20, ''),
(387, 'M-34', 'Promoción de Exportación', 3, '4', 20, ''),
(388, 'MSCP', 'Práctica Profesional', 4, '12', 20, ''),
(389, 'M-2', 'Economía', 1, '4', 21, ''),
(390, 'M-5', 'Metodología Investigativa', 1, '4', 21, ''),
(391, 'MS-1', 'Contabilidad y Finanzas', 1, '4', 21, ''),
(392, 'MS-2', 'Introducción Sector Salud', 1, '4', 21, ''),
(393, 'M-12', 'Teoría de la Decisión', 2, '4', 21, ''),
(394, 'M-6', 'Gerencia de Recursos Humanos', 2, '4', 21, ''),
(395, 'M-7', 'Estructuras y Procesos Organizacionales', 2, '4', 21, ''),
(396, 'M-8', 'Gerencia de Mercadeo Avanzado', 2, '4', 21, ''),
(397, 'M-47', 'Sistemas de Información', 3, '4', 21, ''),
(398, 'M-48', 'Admon. de Centros y Servicios de Salud', 3, '4', 21, ''),
(399, 'M-49', 'Desarrollo Humano Sostenible', 3, '4', 21, ''),
(400, 'M-50', 'Desarrollo y Evaluación Proyectos Sociales', 3, '4', 21, ''),
(401, 'MSCP', 'Práctica Profesional', 4, '12', 21, ''),
(402, 'M-47', 'Desarrollo y Operación del Ciclo de Vida de los Sistem.', 1, '4', 22, ''),
(403, 'M-48', 'Administración y Evaluación de Recursos Informáticos', 1, '4', 22, ''),
(404, 'M-49', 'Auditoría Informática', 1, '4', 22, ''),
(405, 'M-50', 'Inglés técnico Computac.', 1, '4', 22, ''),
(406, 'M-51', 'Sistemas de Información', 2, '4', 22, ''),
(407, 'M-52', 'Estructuras de Programación', 2, '6', 22, ''),
(408, 'M-53', 'Auditoría del Procesamiento Electrónico de Datos I', 2, '4', 22, ''),
(409, 'M-54', 'Desarrollo del Proyecto de Sistemas de Información', 2, '4', 22, ''),
(410, 'M-55', 'Auditoría de Bases de Datos', 3, '4', 22, ''),
(411, 'M-56', 'Auditoría del Procesamiento Electronico de Datos II', 3, '6', 22, ''),
(412, 'M-57', 'Controles Operacionales de Seguridad y Utilitarios', 3, '4', 22, ''),
(413, 'M-58', 'Herramientas de Alto Nivel Computacional', 4, '6', 22, ''),
(414, 'M-59', 'Auditoría en Telemática', 4, '4', 22, ''),
(415, 'M-60', 'Auditoría del Procesamiento Electrónico de Datos III', 4, '6', 22, ''),
(416, 'MMI-101', 'Anatomia Obstétrica', 1, '4', 23, ''),
(417, 'MMI-102', 'Enfermeria Materno-Infantil I', 1, '8', 23, ''),
(418, 'MMI-102CC', 'Materno Infantil I (Prenatales)', 1, '0', 23, ''),
(419, 'MMI-103', 'Investigación', 1, '4', 23, ''),
(420, 'MMI-104', 'Fisiología Obstétrica', 1, '4', 23, ''),
(421, 'MMI-105', 'Enfermería Materno-Infantil II', 2, '8', 23, ''),
(422, 'MMI-105CC', 'Materno Infantil II (Materno Infantil II)', 2, '0', 23, ''),
(423, 'MMI-106', 'Nutrición y Farmacología en Salud Materno Infantil', 2, '4', 23, ''),
(424, 'MMI-107', 'Medicina Materno-Fetal', 3, '8', 23, ''),
(425, 'MMI-108', 'Enfermeria Ginecológica', 3, '4', 23, ''),
(426, 'MMI-109', 'Salud Reproductiva, Clasificación de Riesgo en Planificación Familiar', 3, '4', 23, ''),
(427, 'MMI-CCI', 'CC Internado', 3, '0', 23, ''),
(428, 'MSM-101', 'Psicología: Conducta y Personalidad', 1, '4', 24, ''),
(429, 'MSM-102', 'Salud Mental y Psiquiatría I', 1, '8', 24, ''),
(430, 'MSM-102CC', 'Salud Mental y Psiquiatría I', 1, '0', 24, ''),
(431, 'MSM-103', 'Análisis Conceptual en Enfermería', 1, '4', 24, ''),
(432, 'MSM-104', 'Investigación', 1, '4', 24, ''),
(433, 'MSM-105', 'Neurosicología', 2, '4', 24, ''),
(434, 'MSM-106', 'Psicopatología', 2, '4', 24, ''),
(435, 'MSM-107', 'Salud Mental y Psiquiatría II', 2, '8', 24, ''),
(436, 'MSM-107CC', 'Salud Mental y Psiquiatria II', 2, '0', 24, ''),
(437, 'MSM-108', 'Cálculo para Estadística Inferencial', 3, '4', 24, ''),
(438, 'MSM-109', 'Desarrollo Personal', 3, '4', 24, ''),
(439, 'MSM-110', 'Salud Mental y Psiquiatría III', 3, '8', 24, ''),
(440, 'MSM-110CC', 'Salud Mental y Psiquiatría III', 3, '0', 24, ''),
(441, 'MSM-111', 'Psicología Educativa', 3, '4', 24, ''),
(442, 'SP-1', 'Salud y Sociedad', 1, '4', 25, ''),
(443, 'SP-2', 'Introducción Salud Pública', 1, '4', 25, ''),
(444, 'SP-3', 'Políticas Sociales', 1, '4', 25, ''),
(445, 'SP-4', 'Epidemiología y Demografía', 1, '4', 25, ''),
(446, 'SP-5', 'Estadística para Ciencias de la Salud', 1, '4', 25, ''),
(447, 'SP-6', 'Salud Ambiental', 2, '4', 25, ''),
(448, 'SP-7', 'Epidemiologia Avanzada', 2, '4', 25, ''),
(449, 'SP-8', 'Laboratorio recolección datos: Epi Info', 2, '4', 25, ''),
(450, 'SP-9', 'Desarrollo estratégico Recursos Humanos en Salud', 2, '4', 25, ''),
(451, 'SP-10', 'Economía de la Salud', 3, '4', 25, ''),
(452, 'SP-11', 'Salud Ocupacional', 3, '4', 25, ''),
(453, 'SP-12', 'Gerencia Servicio de Salud', 3, '4', 25, ''),
(454, 'SP-13', 'Taller de Investigación', 3, '4', 25, ''),
(455, 'SP-1', 'Salud y Sociedad', 1, '4', 26, ''),
(456, 'SP-2', 'Introducción a la Salud Pública', 1, '4', 26, ''),
(457, 'SP-3', 'Políticas Sociales', 1, '4', 26, ''),
(458, 'SP-4', 'Epidemiología y Demografía', 1, '4', 26, ''),
(459, 'SP-5', 'Estadística para Ciencias de la Salud', 1, '4', 26, ''),
(460, 'SP-10', 'Economía de la Salud', 2, '4', 26, ''),
(461, 'SP-6', 'Salud Ambiental', 2, '4', 26, ''),
(462, 'SPE-1', 'Evaluación Epidemiológica de los Sistemas de Información en Salud y Base de Datos', 2, '4', 26, ''),
(463, 'SPE-2', 'Epidemiología de las Enfermedades de Declaración Obligatoria', 2, '4', 26, ''),
(464, 'SP-12', 'Gerencia en los Servicios de Salud', 3, '4', 26, ''),
(465, 'SP-13', 'Taller de Investigación', 3, '4', 26, ''),
(466, 'SPE-3', 'Seminario de Casos Multidisciplinarios', 3, '4', 26, ''),
(467, 'SPE-4', 'Sistemas de Información para el estudio epidemiológico del cáncer y de las Enfermedades Crónico Degenerativas', 3, '4', 26, ''),
(468, 'M-5', 'Metodología Investigativa', 1, '4', 17, ''),
(469, 'M-6', 'Gerencia de Recursos Humanos', 1, '4', 17, ''),
(470, 'M-7', 'Estructuras y Procesos Organizacionales', 1, '4', 17, ''),
(471, 'M-8', 'Gerencia de Mercadeo Avanzado', 1, '4', 17, ''),
(472, 'M-10', 'Gerencia y Planeación Estratégica', 2, '4', 17, ''),
(473, 'M-23', 'Toma de Desiciones en Mercadeo', 2, '4', 17, ''),
(474, 'M-24', 'Mercadeo de Productos Agropecuarios', 2, '4', 17, ''),
(475, 'M-9', 'Admon. Empresarial', 2, '4', 17, ''),
(476, 'M-25', 'Investigación de Mercados aplicada al consumidor', 3, '4', 17, ''),
(477, 'M-26', 'Sistema de Inteligenc de Mercadeo', 3, '4', 17, ''),
(478, 'M-27', 'Mercadeor de Servicios Financieros', 3, '4', 17, ''),
(479, 'M-28', 'Admon.  de Franquicias y Telemarketing', 3, '4', 17, ''),
(480, 'MSCP', 'Práctica Profesional', 4, '12', 17, ''),
(481, 'M-5', 'Metodología Investigativa', 1, '4', 18, ''),
(482, 'M-6', 'Gerencia de Recursos Humanos', 1, '4', 18, ''),
(483, 'M-7', 'Estructuras y Procesos Organizacionales', 1, '4', 18, ''),
(484, 'M-8', 'Gerencia de Mercadeo Avanzado', 1, '4', 18, ''),
(485, 'M-10', 'Gerencia y Planeación Estratégica', 2, '4', 18, ''),
(486, 'M-41', 'Capacitación y Desarrollo de Personal', 2, '4', 18, ''),
(487, 'M-42', 'Sistemas de Información Aplicados ', 2, '4', 18, ''),
(488, 'M-9', 'Admon. Empresarial', 2, '4', 18, ''),
(489, 'M-43', 'Planificación Estratégica de R.H', 3, '4', 18, ''),
(490, 'M-44', 'Seguridad Ocupacional', 3, '4', 18, ''),
(491, 'M-45', 'Comportamiento Organizacional', 3, '4', 18, ''),
(492, 'M-46', 'Legislación y Ética Profesional', 3, '4', 18, ''),
(493, 'MSCP', 'Practica Profesional', 4, '12', 18, ''),
(494, 'M-5', 'Metodología Investigativa', 1, '4', 19, ''),
(495, 'M-6', 'Gerencia de Recursos Humanos', 1, '4', 19, ''),
(496, 'M-7', 'Estructuras y Procesos organizacionales', 1, '4', 19, ''),
(497, 'M-8', 'Gerencia de Mercadeo avanzado', 1, '4', 19, ''),
(498, 'M-10', 'Gerencia y Planeación Estratégica', 2, '4', 19, ''),
(499, 'M-17', 'Diagnóstico', 2, '4', 19, ''),
(500, 'M-18', 'Reestructuración Empresarial', 2, '4', 19, ''),
(501, 'M-9', 'Administración Empresarial', 2, '4', 19, ''),
(502, 'M-19', 'Reingeniería de Procesos', 3, '4', 19, ''),
(503, 'M-20', 'Reingeniería de Sistemas', 3, '4', 19, ''),
(504, 'M-21', 'Planificación del cambio organizacional', 3, '4', 19, ''),
(505, 'M-22', 'Desarrollo y Evaluación Proyectos de Reing.', 3, '4', 19, ''),
(506, 'MSCP', 'Práctica Profesional', 4, '12', 19, ''),
(507, '001', 'Seminario de Graduación', 2, '0', 10, NULL),
(508, '001', 'Seminario de Graduación', 2, '0', 9, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `matriculacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(2, 'Docente'),
(3, 'Estudiante');

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
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `horario`, `telefono`, `direccion`, `correo`) VALUES
(1, 'Sede Central', 'Lunes a Viernes: 8:00 am a 8:00pm y Sábados: 8:00am a 12:00pm', '2257-4552', 'De las oficinas centrales de la CCSS 200 mts norte  y 50 mts este, Edificio Universitario Santa Lucía.', 'infocentral@usl.ac.cr'),
(2, 'Sede Alajuela', 'Lunes a Viernes: 9:00am a 7:45pm y Sábados: 8:00am a 11:45am', '2440-4545', '200 metros este y 100 sur del Hospital San Rafael de Alajuela', 'info@usl.ac.cr'),
(3, 'Sede Cartago', 'Lunes a Viernes: 9:00am a 8:00pm y Sábados: 8:00am a 2:00pm', '2551-9967', 'Costado sur de la Escuela Jesús Jiménez, Cartago Centro.', 'infocartago@usl.ac.cr'),
(4, 'Sede Puntarenas', 'Lunes a Viernes: 1:00pm a 8:00pm y Sábados: 7:30am a 5:30 pm', '2664-4296', 'Diagonal al Hospital Monseñor Sanabria, Edificio Universitario Santa Lucía.', 'infopuntarenas@usl.ac.cr'),
(5, 'Aula Desconcentrada de Puriscal', 'Luneas a Viernes: 3:00pm a 8:00pm y Sábados: 8:00am a 12:00pm', '2416-0003', 'Calle 6, Barrio Corazón de Jesús, Santiago de Puriscal.', 'infopuriscal@usl.ac.cr'),
(6, 'Sede San Carlos', 'Lunes a Viernes: 10:00am a 8:00pm y Sábados: 8:00am a 12:00pm', '2460-1922', 'Segunda Planta del Edificio Coopesancarlos R.L. Ciudad Quesada.', 'infosancarlos@usl.ac.cr'),
(7, 'Sede Guápiles', 'Sábados: 8:00am a 4:00pm', '2257-4436', 'Centro Educativo Green Valley, 500 metros sur de los Tribunales de Justicia, Pococí, Guapiles, Limon', 'infocentral@usl.ac.cr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cedula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `sede_id` int(11) NOT NULL,
  `periodo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_materias`
--

CREATE TABLE `solicitudes_materias` (
  `id` int(11) NOT NULL,
  `solicitude_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `creator` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `created` date NOT NULL,
  `modifier` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `passkey` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `timeout` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `photo_dir` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `firstime` tinyint(1) NOT NULL DEFAULT '0',
  `sede_id` int(11) NOT NULL,
  `estudiante_id` int(11) DEFAULT NULL,
  `docente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `nombre`, `apellido`, `role_id`, `status`, `creator`, `created`, `modifier`, `modified`, `passkey`, `timeout`, `photo`, `photo_dir`, `firstime`, `sede_id`, `estudiante_id`, `docente_id`) VALUES
(1, '$2y$10$lAwxuSkqxxMQXYXRPTL0a.QPGSLnJXbRB3DxhYMdfF2bos5PK2XBG', 'admin@admin.com', 'Administrador', 'de Todo', 1, 1, 'admin', '2019-04-06', 'admin', '2019-04-07', '', '2019-06-04 20:59:01', 'user.png', 'default', 1, 7, NULL, NULL);

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
-- Indices de la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
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
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_materias`
--
ALTER TABLE `solicitudes_materias`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `carreras_sedes`
--
ALTER TABLE `carreras_sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes_materias`
--
ALTER TABLE `solicitudes_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
