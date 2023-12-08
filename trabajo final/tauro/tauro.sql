-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2023 a las 01:35:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tauro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(12) NOT NULL,
  `ApellidoNombre` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` int(25) NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `contacto` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `ApellidoNombre`, `dni`, `fechaNacimiento`, `telefono`, `direccion`, `contacto`, `id_curso`, `activo`) VALUES
(1, 'sanchez marcos', '458963', '1988-08-28', 78966, 'colon 912', 'sanchez@gmail.com', 0, 0),
(2, 'lucio juan', '25878777', '2007-10-08', 425874, 'san martin 369', 'lucio@gmail.com', 0, 0),
(3, 'diaz esteban', '29874521', '2000-12-14', 4568723, 'belgrano 897', 'diaz@gmail.com', 0, 1),
(5, 'loren lorena', '39547821', '1996-01-31', 4582135, 'bolivar 587', 'loren@gmail.com', 0, 1),
(7, 'lopez paola', '43258741', '2001-02-23', 4561231, 'junin 247', 'lopez@gmail.com', 0, 1),
(8, 'abadia carlos', '1935733', '1980-09-01', 4369874, 'necochea 369', 'abadia@gmail.com', 0, 1),
(11, 'salto jose', '24023987', '1989-05-21', 436547, 'jujuy 256', 'salto@gmail.com', 0, 1),
(14, 'casal juan jose', '25873285', '1991-09-15', 4259851, 'necochea 1254', 'casal@sgmail.com', 0, 1),
(15, 'roca juana', '22458768', '2002-10-05', 4852369, 'belgrano 23', 'rocajuana@sgmail.com', 0, 1),
(16, 'roca roque', '24364444', '2004-11-09', 4852369, 'belgrano 23', 'rocaroque@sgmail.com', 0, 1),
(17, 'riquelme juan', '34875421', '1994-10-13', 425879, 'boquita 324', 'riquelme@sgmail.com', 0, 1),
(18, 'olivera julian', '23659874', '1993-03-27', 4258691, 'burgos 351', 'olivera@sgmail,cim', 0, 1),
(19, 'santillan miguel', '19258136', '1974-03-16', 485236, 'colon 84', 'santillan@sgmail.com', 0, 1),
(20, 'valdez victor', '30582364', '1980-04-14', 423158, 'formosa 100', 'valdez@sgmail.com', 0, 1),
(21, 'ibarra marcelo', '27369854', '1979-09-12', 471258, 'formosa 508', 'ibarra@sgmail.com', 0, 1),
(22, 'barrientos sergio', '21576147', '1987-07-30', 473258, 'misiones 641', 'barrientos@sgmail.com', 0, 1),
(23, 'mansilla roberto', '38641397', '2003-06-03', 412356, '25 de mayo 587', 'mansilla@sgmail.com', 0, 1),
(24, 'malacalza maria', '16287134', '1981-04-23', 476584, '25 de mayo 1124', 'malacalza@sgmail.com', 0, 1),
(25, 'anchorena julia', '46284254', '2004-05-29', 425874, 'san martin 3455', 'anchorena@sgmail.com', 0, 1),
(26, 'rufino alejandra', '34058732', '1992-02-24', 426147, 'alvear 1587', 'rufino@sgmail.com', 0, 0),
(27, 'lore', 'maria alejandra', '0000-00-00', 4369871, '25 de mayo 777', 'lore@gmail.com', 0, 1),
(28, 'fuentejuan estela', '27321489', '1992-08-23', 4258736, 'colon 32', 'fuentejuan@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(25) NOT NULL,
  `nombre_curso` varchar(80) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `id_turno`, `activo`) VALUES
(1, 'tango', 0, 1),
(2, 'ecxel', 0, 1),
(3, 'reparacion de pc', 0, 1),
(4, 'redes', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id_inscripcion`, `id_alumno`, `id_profesor`, `id_curso`, `id_turno`, `activo`) VALUES
(1, 1, 0, 4, 0, 1),
(2, 2, 0, 1, 0, 1),
(3, 3, 0, 2, 0, 1),
(4, 5, 0, 3, 0, 1),
(5, 7, 0, 4, 0, 1),
(6, 8, 0, 1, 0, 1),
(7, 11, 0, 3, 0, 1),
(8, 14, 0, 4, 0, 1),
(9, 15, 0, 1, 0, 1),
(10, 16, 0, 2, 0, 1),
(11, 17, 0, 3, 0, 1),
(12, 18, 0, 2, 0, 1),
(13, 19, 0, 3, 0, 1),
(14, 20, 0, 4, 0, 1),
(15, 21, 0, 2, 0, 1),
(16, 22, 0, 1, 0, 1),
(17, 5, 0, 0, 0, 1),
(18, 6, 0, 1, 1, 1),
(19, 20, 0, 4, 0, 1),
(20, 11, 0, 4, 2, 1),
(21, 20, 0, 1, 1, 1),
(22, 27, 0, 2, 2, 1),
(23, 27, 0, 4, 1, 1),
(24, 3, 0, 2, 1, 1),
(25, 0, 20, 1, 1, 1),
(26, 0, 11, 2, 1, 1),
(27, 0, 12, 3, 1, 1),
(28, 0, 13, 2, 2, 1),
(29, 0, 14, 3, 1, 1),
(30, 0, 18, 4, 1, 1),
(31, 0, 19, 4, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `id_nacionalidad` int(20) NOT NULL,
  `nombre_pais` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`id_nacionalidad`, `nombre_pais`, `activo`) VALUES
(1, 'Argentina', 1),
(2, 'Uruguay', 1),
(3, 'Chile', 1),
(4, 'Paraguay', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(15) NOT NULL,
  `ApellidoNombreProf` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `contacto` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_nacionalidad` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `ApellidoNombreProf`, `dni`, `fechaNacimiento`, `telefono`, `direccion`, `contacto`, `id_nacionalidad`, `id_curso`, `activo`) VALUES
(11, 'cornec esteban', '17369841', '1970-11-01', '435874', 'mesura 594', 'cornec@gmail.com', 1, 0, 1),
(12, 'rodriguez victor', '25321478', '1989-10-09', '43698524', 'olavarria 698', 'rodriguezvictor@gmail.com', 1, 0, 1),
(13, 'trelles alejandra', '30854785', '1992-11-24', '458714', 'colon 98', 'trelles@gmail.com', 3, 0, 1),
(14, 'porteño carlos', '39547812', '1996-05-30', '4587258', 'bolivar 361', 'porteño@gmail.com', 1, 0, 1),
(18, 'reyes chiquito', '20456987', '1981-07-30', '458956', 'santa cruz 954', 'reyes@gmail.com', 4, 0, 1),
(19, 'sanmatias juan', '29654125', '1979-05-15', '447856', 'bolivar 254', 'sanmatias@gmail.com', 1, 0, 1),
(20, 'castillo mercedes', '37321456', '1994-01-31', '48521', 'leyria 56', 'castillo@gmail.com', 4, 0, 1),
(21, 'caceres natalia', '20987357', '1995-12-25', '436146', 'cadral 697', 'caceresnatalia@gmail.com', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL,
  `turnoH` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `turnoH`) VALUES
(1, 'turno mañana'),
(2, 'turno tarde');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_turno` (`id_turno`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`);

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`id_nacionalidad`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `id_nacionalidad` (`id_nacionalidad`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `id_nacionalidad` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
