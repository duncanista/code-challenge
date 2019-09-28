-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-09-2019 a las 07:30:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codeChallenge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `idStudent` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pendiente',
  `password` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'principiante',
  `major` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`idStudent`, `name`, `lastName`, `email`, `status`, `password`, `campus`, `level`, `major`) VALUES
(15, 'Luis Alfonso', 'AlcÃ¡ntara LÃ³pez Ortega', 'alcantaraluisalfonso@gmail.com', 'pendiente', '25d55ad283aa400af464c76d713c07ad', 'cem', 'avanzado', 'isc'),
(16, 'Jordan', 'Gonzalez Bustamante', 'j@itesm.mx', 'pendiente', '3ec3baf3455d78bfa771616fd0713aaa', 'cem', 'intermedio', 'isc'),
(17, 'Jordan', 'Gonzalez Bustamante', 'j@itesm.mx', 'pendiente', '3ec3baf3455d78bfa771616fd0713aaa', 'cem', 'intermedio', 'isc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studentTeam`
--

CREATE TABLE `studentTeam` (
  `idST` int(11) NOT NULL,
  `idStudent` int(11) NOT NULL,
  `idTeam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `idTeam` int(11) NOT NULL,
  `nameTeam` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idStudent`);

--
-- Indices de la tabla `studentTeam`
--
ALTER TABLE `studentTeam`
  ADD PRIMARY KEY (`idST`),
  ADD KEY `fk_student` (`idStudent`),
  ADD KEY `team` (`idTeam`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idTeam`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `studentTeam`
--
ALTER TABLE `studentTeam`
  MODIFY `idST` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `idTeam` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `studentTeam`
--
ALTER TABLE `studentTeam`
  ADD CONSTRAINT `fk_student` FOREIGN KEY (`idStudent`) REFERENCES `student` (`idStudent`),
  ADD CONSTRAINT `team` FOREIGN KEY (`idTeam`) REFERENCES `team` (`idTeam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
