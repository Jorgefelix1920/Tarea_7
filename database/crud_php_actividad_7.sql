-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2020 a las 23:53:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_php_actividad_7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea_7_crud`
--

CREATE TABLE `tarea_7_crud` (
  `orden` int(11) NOT NULL,
  `productos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuarios` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roles` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `permisos` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_Prod` text COLLATE utf8_unicode_ci NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tarea_7_crud`
--

INSERT INTO `tarea_7_crud` (`orden`, `productos`, `usuarios`, `roles`, `permisos`, `descripcion_Prod`, `fechaCreacion`) VALUES
(14, 'Jabon', 'Jorge Felix Gonzalez ', 'Nivel 3', 'admin', 'Jabon para bañarse', '2020-07-06 01:20:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `contraseña`, `fechacreacion`) VALUES
(1, 'Jorge Felix ', 'jorgefelix1920@hotmail.com', '12345', '2020-07-19 18:16:36'),
(2, 'Marquidia Almanzar', 'Marquidia@gmail.com', '12345', '2020-07-19 20:26:18'),
(3, 'Marquidia Almanzar', 'Marquidia@gmail.com', '12345', '2020-07-19 20:28:37'),
(4, 'Jose Ramon', 'jose@gmail.com', '12345', '2020-07-19 20:29:08'),
(5, 'Jose Ramon Alcantara', 'alcantarajose@gmail.com', '12345', '2020-07-19 20:29:53'),
(6, 'Antonino Rodriguez', 'Antonio@gmail.com', '12345', '2020-07-19 20:33:32'),
(7, 'Antonio Joaquin', 'antonio1@gmail.com', '12345', '2020-07-19 20:35:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarea_7_crud`
--
ALTER TABLE `tarea_7_crud`
  ADD PRIMARY KEY (`orden`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarea_7_crud`
--
ALTER TABLE `tarea_7_crud`
  MODIFY `orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
