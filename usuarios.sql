-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-12-2020 a las 23:44:50
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15456491_campito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'voluntario',
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'voluntario',
  `celular` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `apellido`, `nombre`, `usuario`, `clave`, `celular`, `email`) VALUES
(1, 'Álvarez', 'Josefina', 'joseal', 'voluntario', '(011) 4521-5698', 'josefa2@patitassolidarias.org'),
(2, 'Figueredo', 'Soledad', 'solefi', 'voluntario', '(011) 5412-6547', 'solefi@patitassolidarias.org'),
(3, 'Ramírez', 'Paula', 'pauram', 'voluntario', '(011) 8745-5412', 'pauram@patitassolidarias.org'),
(4, 'Ortega', 'Sebastián', 'sebi', 'voluntario', '(011) 7854-4577', 'sebi@patitassolidarias.org'),
(7, 'Molares', 'Regina Noemí', 'regina', '$2y$10$.3UUrVrht89JUCTX1mGVaeYmj19xPa50xk1e4rQoENhxEZG24sgba', '(011) 5474-7804', 'regina@patitassolidarias.org'),
(8, 'Gómez', 'Anahí', 'anahi_g', 'voluntario', '(011) 5487-9654', 'j.bauer@ctu.gov'),
(9, 'Zapata', 'Alejandro', 'alejandro', 'voluntario', '(011) 4444-4444', 'az.2020@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
