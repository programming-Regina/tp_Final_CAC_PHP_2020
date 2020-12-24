-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-12-2020 a las 09:50:32
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
-- Estructura de tabla para la tabla `difusion`
--

CREATE TABLE `difusion` (
  `id_nota` int(11) NOT NULL,
  `titulo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `foto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `novedad` tinyint(1) DEFAULT NULL,
  `prensa` tinyint(1) DEFAULT NULL,
  `obsoleto` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `difusion`
--

INSERT INTO `difusion` (`id_nota`, `titulo`, `descripcion`, `link`, `fecha`, `foto`, `novedad`, `prensa`, `obsoleto`) VALUES
(1, 'Habiliten formalmente el Campito Felino', 'Estamos pidiendo que el terreno esté a disposición de los gatitos...', 'https://www.change.org/p/habiliten-formalmente-el-campitofelino-horaciorlarreta-yolosdefiendo', '2020-12-24 08:27:15', 'change01.jpg', 0, 1, 0),
(2, 'El Campito Felino', 'Un centro de rescate y adopción, con el solo fin de salvar animales y prolongarles la vida...', 'https://expertas.supermercadosdia.com.ar/el-campito-felino/', '2020-12-24 08:27:15', 'difusion01.jpg', 0, 1, 0),
(3, 'Arturo Pozzali visitó el Campito Felino', 'El Defensor del Pueblo adjunto se acercó a la ONG de la Comuna 13 para extender la ayuda de la Defensoría...', 'https://www.defensoria.org.ar/noticias/arturo-pozzali-visito-el-campito-felino/', '2018-07-31 03:00:00', 'defensoria01.png', 0, 1, 0),
(4, 'Quieren desalojar un refugio para gatos de Belgrano', 'Se trata de el Campito Felino, que funciona en el mismo lugar hace dos décadas...', 'https://tn.com.ar/sociedad/quieren-desalojar-un-refugio-para-gatos-de-belgrano_953743/', '2020-12-24 08:32:31', 'desalojar01.jpg', 0, 1, 0),
(5, 'Calendarios El Campito Felino 2021', NULL, NULL, '2020-10-24 08:32:31', 'calendarios.jpg', 1, 0, 0),
(6, 'Colecta Solidaria', 'Estaremos recolectando artículos reciclables, donaciones y habrá venta de calendarios, remeras y artículos artesanales de nuestra tienda.', NULL, '2020-12-13 08:33:37', 'colecta.jpg', 1, 0, 0);

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
(2, 'Lunita', 'Hembra', 'Mestiza tricolor carey', 2018, '2020-12-22', 'Nacida en el refugio. Sus hermanitos fueron todos adoptados.', 0, 0, 0, '2.jpg', 3, 0, 0),
(3, 'Hannah', 'Hembra', 'Mestiza negra', 2018, '2020-10-12', 'Su mamá falleció y nadie de la familia la quiso. Socializada y mansa. Se deja alzar.', 1, 0, 1, '3.jpg', 3, 1, 0),
(4, 'Mr Chip', 'Macho', 'Mestizo atigrado naranja', 2016, '2020-01-13', 'Abandonado por mudanza. Muy buen estado y sociable. Vocaliza mucho.', 1, 1, 1, '4.jpg', 1, 0, 0),
(5, 'Doña Pataca', 'Hembra', 'Mestiza naranja con manchas blancas. Pelo largo.', 2015, '2020-02-03', 'Está perdida o fue abandonada cerca de la fecha de ingreso. Nadie preguntó por ella. Muy buen estado de salud. Poco sociable, pero no agresiva.', 1, 1, 1, '5.jpg', 2, 1, 0),
(6, 'Atún', 'Macho', 'Atigrado gris, oreja derecha recortada', 2016, '2020-12-04', '', 0, 0, 1, '6.jpg', 3, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_art` int(11) NOT NULL,
  `articulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `foto_art` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `contacto` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `en_stock` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_art`, `articulo`, `descripcion`, `foto_art`, `precio`, `contacto`, `en_stock`) VALUES
(1, 'Gatitos de madera', 'Porta-anillos o simplemente decorativos. 10 cm de alto', 'gatitos.jpg', 200, 'María: m_aniello@gmail.com', 1),
(2, 'Llaveros', 'Fabricados en madera. 4 cm. Consultar colores.', 'llaveros.jpg', 150, 'Jorge: 011 5412-2254. Zona Congreso, CABA', 1),
(3, 'Calendarios', 'Calendarios 2021, con fotos de los gatitos del refugio. Varios modelos', 'calendarios.jpg', 200, 'Valeria (sólo WhatsApp): 011 8888-8888. ', 1),
(4, 'Reloj', 'Reloj de pared pintado a mano. Lleva 1 pila AA. 25 cm de diámetro. Consultar modelos.', 'reloj.jpg', 500, 'Zulema: 011 6665-5555', 1),
(5, 'Portarrollos', 'Portarrollos para papel higiénico. Varios modelos.', 'portarrollo.jpg', 350, 'Selva: selva_2020@gmmaik.com', 1),
(6, 'Delantal', 'Delantal de cocina con motivos gatitos. Tela repele manchas.', 'delantal.jpg', 600, 'Sandra: 011 8885-9999 A partir de mediodía', 1),
(7, 'Juego de cerámica', 'Jarrito y plato pintados a mano. Varios modelos y colores.', 'jarrito_plato.jpg', 700, 'Aníbal: el_number_one@topolino.com.ar', 1),
(8, 'Cortina para baño', 'Cortina para ducha, con protector antihongos.', 'cortina.jpg', 1100, 'Jimena: 011 5222-2222 Por la tarde.', 1),
(9, 'Latas multiuso', 'Latas multipropósito. 20 x 13 x 10 cm. Diversos motivos', 'latas.jpg', 300, 'Ángel: angelp_2514@cielo.com.ar', 1);

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
(2, 'Figueredo', 'Soledad', 'solefi', '$2y$10$Q3m27mSkd8oUVhjuf8YAcOZPSld4KOuoe5hSxsoeMS.I07q9jWap2', '(011) 5412-6547', 'solefi@patitassolidarias.org'),
(3, 'Ramírez', 'Paula', 'pauram', 'voluntario', '(011) 8745-5412', 'pauram@patitassolidarias.org'),
(4, 'Ortega', 'Sebastián', 'sebi', 'voluntario', '(011) 7854-4577', 'sebi@patitassolidarias.org'),
(7, 'Molares', 'Regina Noemí', 'regina', '$2y$10$.3UUrVrht89JUCTX1mGVaeYmj19xPa50xk1e4rQoENhxEZG24sgba', '(011) 5474-7804', 'regina@patitassolidarias.org'),
(8, 'Gómez', 'Anahí', 'anahi_g', 'voluntario', '(011) 5487-9654', 'j.bauer@ctu.gov'),
(9, 'Zapata', 'Alejandro', 'alejandro', '$2y$10$cO6/rZxPGiF3zFCfezdUievgCyEt7J/FS.AHs57Y6B9rXmM9gckSO', '(011) 4444-4444', 'az.2020@gmail.com'),
(10, 'unApellido', 'unNombre', 'user01', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(11, 'unApellido', 'unNombre', 'user02', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(12, 'unApellido', 'unNombre', 'user03', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(13, 'unApellido', 'unNombre', 'user04', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(14, 'unApellido', 'unNombre', 'user05', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(15, 'unApellido', 'unNombre', 'user06', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(16, 'unApellido', 'unNombre', 'user07', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(17, 'unApellido', 'unNombre', 'user08', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(18, 'unApellido', 'unNombre', 'user09', 'voluntario', '01188888888', 'unEmail@algunaParte.com'),
(19, 'unApellido', 'unNombre', 'user10', 'voluntario', '01188888888', 'unEmail@algunaParte.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `difusion`
--
ALTER TABLE `difusion`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `gatos`
--
ALTER TABLE `gatos`
  ADD PRIMARY KEY (`id_gato`),
  ADD KEY `mentor` (`mentor`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_art`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `difusion`
--
ALTER TABLE `difusion`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `gatos`
--
ALTER TABLE `gatos`
  MODIFY `id_gato` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
