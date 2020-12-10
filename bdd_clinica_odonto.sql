-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2020 a las 22:38:48
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_clinica_odonto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `ID_DOC` int(11) NOT NULL,
  `CI_DOC` bigint(11) NOT NULL,
  `ID_EXP` int(4) NOT NULL,
  `NOMBRE_DOC` varchar(50) NOT NULL,
  `AP_PATERNO_DOC` varchar(50) DEFAULT NULL,
  `AP_MATERNO_DOC` varchar(50) DEFAULT NULL,
  `DIRECCION_DOC` varchar(350) DEFAULT NULL,
  `CELULAR_DOC` int(11) DEFAULT NULL,
  `ID_SEXO` int(4) DEFAULT NULL,
  `FECHA_NAC_DOC` date DEFAULT NULL,
  `EDAD_DOC` int(11) DEFAULT NULL,
  `ID_ESP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `ID_ESP` int(11) NOT NULL,
  `DESCRIPCION_ESP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`ID_ESP`, `DESCRIPCION_ESP`) VALUES
(1, 'Ortodoncia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedido`
--

CREATE TABLE `expedido` (
  `ID_EXP` int(11) NOT NULL,
  `ABR_EXP` varchar(11) NOT NULL,
  `DEPARTAMENTO_EXP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expedido`
--

INSERT INTO `expedido` (`ID_EXP`, `ABR_EXP`, `DEPARTAMENTO_EXP`) VALUES
(1, 'CH', 'Chuquisaca'),
(2, 'LP', 'La Paz'),
(3, 'SC', 'Santa Cruz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `ID_PAC` int(11) NOT NULL,
  `CI_PAC` bigint(11) NOT NULL,
  `ID_EXP` int(6) NOT NULL,
  `NOMBRE_PAC` varchar(50) NOT NULL,
  `AP_PATERNO_PAC` varchar(50) DEFAULT NULL,
  `AP_MATERNO_PAC` varchar(50) DEFAULT NULL,
  `DIRECCION_PAC` varchar(350) DEFAULT NULL,
  `CELULAR` int(11) DEFAULT NULL,
  `ID_SEXO` int(4) DEFAULT NULL,
  `FECHA_NAC_PAC` date DEFAULT NULL,
  `EDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`ID_PAC`, `CI_PAC`, `ID_EXP`, `NOMBRE_PAC`, `AP_PATERNO_PAC`, `AP_MATERNO_PAC`, `DIRECCION_PAC`, `CELULAR`, `ID_SEXO`, `FECHA_NAC_PAC`, `EDAD`) VALUES
(1, 12345, 1, 'Juan', 'Lopez', 'Mamani', 'Av. Puma El Alto #2456', 76545896, 1, '1990-07-14', 30),
(3, 0, 1, '', '', '', '', 0, 1, '0000-00-00', 0),
(4, 0, 1, '', '', '', '', 0, 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_ROL` int(11) NOT NULL,
  `DESCRIPCION_ROL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `DESCRIPCION_ROL`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `ID_SEXO` int(11) NOT NULL,
  `ABR_SEXO` varchar(11) NOT NULL,
  `SEXO_NOMBRE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`ID_SEXO`, `ABR_SEXO`, `SEXO_NOMBRE`) VALUES
(1, 'F', 'Femenino'),
(2, 'M', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `ID_DOC` int(11) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ID_ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`ID_DOC`),
  ADD KEY `ID_EXP` (`ID_EXP`),
  ADD KEY `ID_SEXO` (`ID_SEXO`),
  ADD KEY `ID_ESP` (`ID_ESP`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`ID_ESP`);

--
-- Indices de la tabla `expedido`
--
ALTER TABLE `expedido`
  ADD PRIMARY KEY (`ID_EXP`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`ID_PAC`),
  ADD KEY `ID_EXP` (`ID_EXP`),
  ADD KEY `ID_SEXO` (`ID_SEXO`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`ID_SEXO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ID_ROL` (`ID_ROL`),
  ADD KEY `ID_DOC` (`ID_DOC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `ID_DOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `ID_ESP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `expedido`
--
ALTER TABLE `expedido`
  MODIFY `ID_EXP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `ID_PAC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `ID_SEXO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD CONSTRAINT `doctores_ibfk_1` FOREIGN KEY (`ID_EXP`) REFERENCES `expedido` (`ID_EXP`),
  ADD CONSTRAINT `doctores_ibfk_2` FOREIGN KEY (`ID_SEXO`) REFERENCES `sexo` (`ID_SEXO`),
  ADD CONSTRAINT `doctores_ibfk_3` FOREIGN KEY (`ID_ESP`) REFERENCES `especialidad` (`ID_ESP`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`ID_EXP`) REFERENCES `expedido` (`ID_EXP`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`ID_SEXO`) REFERENCES `sexo` (`ID_SEXO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_DOC`) REFERENCES `doctores` (`ID_DOC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
