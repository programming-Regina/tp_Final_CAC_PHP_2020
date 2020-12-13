-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-12-2020 a las 23:46:25
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
-- Estructura de tabla para la tabla `gatos`
--

CREATE TABLE `gatos` (
  `id_gato` smallint(6) NOT NULL,
  `nom_gato` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(6) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `raza_color` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `agno_nacim` smallint(4) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `historia` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `vacunado` tinyint(1) NOT NULL,
  `desparasitado` tinyint(1) NOT NULL,
  `castrado` tinyint(1) NOT NULL,
  `foto` varchar(200) COLLATE utf8_spanish_ci DEFAULT '0.jpg',
  `mentor` int(11) NOT NULL,
  `apto_adopc` tinyint(1) NOT NULL,
  `adoptado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gatos`
--

INSERT INTO `gatos` (`id_gato`, `nom_gato`, `sexo`, `raza_color`, `agno_nacim`, `fecha_ingreso`, `historia`, `vacunado`, `desparasitado`, `castrado`, `foto`, `mentor`, `apto_adopc`, `adoptado`) VALUES
(1, 'Alvaro', 'Macho', 'Mestizo tuxedo. Botitas y punta de la cola blancas.', 2014, '2020-12-15', 'Encontrado en un garage de Caballito. Creemos tuvo un hogar.', 1, 1, 1, '1.jpg', 4, 1, 0),
(2, 'Lunita', 'Hembra', 'Mestiza tricolor carey', 2018, '2020-12-22', 'Nacida en el refugio. Sus hermanitos fueron todos adoptados.', 0, 0, 0, '2.jpg', 1, 0, 0),
(3, 'Hannah', 'Hembra', 'Mestiza negra', 2018, '2020-10-12', 'Su mamá falleció y nadie de la familia la quiso. Socializada y mansa. Se deja alzar.', 1, 0, 1, '3.jpg', 3, 1, 0),
(4, 'Mr Chip', 'Macho', 'Mestizo atigrado naranja', 2016, '2020-01-13', 'Abandonado por mudanza. Muy buen estado y sociable. Vocaliza mucho.', 1, 1, 1, '4.jpg', 1, 0, 0),
(5, 'Doña Pataca', 'Hembra', 'Mestiza naranja con manchas blancas. Pelo largo.', 2015, '2020-02-03', 'Está perdida o fue abandonada cerca de la fecha de ingreso. Nadie preguntó por ella. Muy buen estado de salud. Poco sociable, pero no agresiva.', 1, 1, 1, '5.jpg', 2, 1, 0),
(7, 'Atún', 'Macho', 'Atigrado gris, oreja derecha recortada', 2016, '2020-12-04', '', 0, 0, 1, '0.jpg', 3, 0, 0);

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
-- Indices de la tabla `gatos`
--
ALTER TABLE `gatos`
  ADD PRIMARY KEY (`id_gato`),
  ADD KEY `mentor` (`mentor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gatos`
--
ALTER TABLE `gatos`
  MODIFY `id_gato` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gatos`
--
ALTER TABLE `gatos`
  ADD CONSTRAINT `gatos_ibfk_1` FOREIGN KEY (`mentor`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;