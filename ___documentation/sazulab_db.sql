-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-09-2023 a las 19:59:08
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sazulab_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `img_listado` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `es_caso` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `titulo`, `orden`, `url`, `descripcion`, `img_listado`, `estado`, `es_caso`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CASO TEKNIPLEX', 1, 'casetekniplex', 'Reducir la alta accidentalidad de uno de los líderes en fabricación de empaques por medio de una estrategia de comunicación.', '/storage/cards/1690248269_slider2.png', 1, 1, '2023-07-25 01:10:48', '2023-07-25 04:40:28', NULL),
(2, 'CASO CCD', 2, 'caseccd', 'Proteger los derechos de la población migrante venezolana y promover su integración e inclusión\r\n          social en el territorio colombiano.', '/storage/cards/1690248481_slider3.png', 1, 1, '2023-07-25 01:28:01', '2023-07-25 01:28:01', NULL),
(3, 'BOSQUENIBLE', 3, 'estrategia', 'Definir una propuesta de valor y un modelo de negocio viable en el ecosistema de consultoría en\r\n          sostenibilidad.', '/storage/cards/1690248736_slider4.jpg', 1, 0, '2023-07-25 01:28:51', '2023-07-25 01:36:14', NULL),
(4, 'ORIGO PRODUCTIONS', 4, 'branding', 'Estrategia de marca, proceso de naming y una identidad visual para una empresa de entretenimiento cultural.', '/storage/cards/1690248755_slider5.jpg', 1, 0, '2023-07-25 01:29:26', '2023-07-25 01:36:01', NULL),
(5, 'PERNOD RICARD', 5, 'contenido', 'Diseñamos experiencias a partir de productos para que acompañen al público en sus mejores momentos.', '/storage/cards/1690248769_slider6.jpg', 1, 0, '2023-07-25 01:30:27', '2023-07-25 01:35:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

DROP TABLE IF EXISTS `casos`;
CREATE TABLE IF NOT EXISTS `casos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_cards` bigint DEFAULT NULL,
  `imagen_background` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `header` mediumtext COLLATE utf8mb4_general_ci,
  `titulo` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `texto` mediumtext COLLATE utf8mb4_general_ci,
  `col1` mediumtext COLLATE utf8mb4_general_ci,
  `col2` mediumtext COLLATE utf8mb4_general_ci,
  `col3` mediumtext COLLATE utf8mb4_general_ci,
  `contexto` mediumtext COLLATE utf8mb4_general_ci,
  `img_left` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `img_right` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `iframe` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_casos_cards1_idx` (`id_cards`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`id`, `id_cards`, `imagen_background`, `header`, `titulo`, `texto`, `col1`, `col2`, `col3`, `contexto`, `img_left`, `img_right`, `iframe`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'TEKNIPLEX / PHOENIX', 'Reducir la alta accidentalidad de uno de los líderes en fabricación de empaques por medio de una estrategia de comunicación.', '<p><img class=\"mb-3\" src=\"_/images/phoenix.svg\" alt=\"\"> <img src=\"_/images/teknilogo.svg\" alt=\"\"></p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Empaques</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Bogot&aacute; y Cartagena,<br>Colombia</p>', '<p>Estrategia de comunicaci&oacute;n <br>Creaci&oacute;n de campa&ntilde;a <br>Contenido audiovisual <br>Contenido gr&aacute;fico <br>Intervenci&oacute;n de espacios</p>', '<h4>CONTEXTO</h4>\r\n<h5>Tekniplex, l&iacute;der en el dise&ntilde;o, fabricaci&oacute;n y comercializaci&oacute;n de empaques en Am&eacute;rica ten&iacute;a un reto: <strong style=\"color: #5b4cff;\">reducir la accidentalidad en sus f&aacute;bricas de Colombia.</strong> <br><br>&iquest;La causa? Una alta rotaci&oacute;n del personal dificultaba la transmisi&oacute;n y apropiaci&oacute;n de cultura de seguridad y cuidado personal.</h5>', '/storage/casos/1690259844_grupo1tek.jpg', '/storage/casos/1690259844_grupo2tek.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/PF9pso5AAFk\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:17:06', '2023-07-25 04:37:24'),
(2, 2, NULL, NULL, 'CCD/PACT', 'Visibilizar las iniciativas del programa Conectando Caminos por los Derechos de Pact. Para proteger los derechos de la población migrante venezolana y promover su integración e inclusión social en el territorio colombiano.', '<p><img src=\"../../assets/front/images/logopact.svg\" alt=\"\"></p>\r\n<div class=\"mt-3 c_resplandor_f\">\r\n<h5><strong>Estatus:</strong> Finalizado</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Organizaci&oacute;n internacional sin &aacute;nimo de lucro.</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Colombia</p>', '<h5>SERVICIO</h5>\r\n<p>Estrategia de comunicaci&oacute;n. <br>Producci&oacute;n de contenido <br>audiovisual y gr&aacute;fico. <br>Relaciones p&uacute;blicas. <br>Gesti&oacute;n en prensa.</p>', '<h4>CONTEXTO</h4>\r\n<h5>Conectando Caminos por los Derechos (CCD) es uno de los programas de PACT. Este busca <strong style=\"color: #5b4cff;\">proteger y prevenir la violaci&oacute;n de derechos humanos de la poblaci&oacute;n migrante venezolana en Colombia,</strong> as&iacute; como mejorar la cohesi&oacute;n comunitaria y la seguridad ciudadana. Entre las poblaciones priorizadas se encuentran, mujeres, ni&ntilde;as,&nbsp; ni&ntilde;os, j&oacute;venes y adolescentes&nbsp;y poblaci&oacute;n LGBTIQ+. <br><br>El programa opera en 11 municipios caracterizados por tener una amplia poblaci&oacute;n migrante, estos son: Riohacha, Maicao, C&uacute;cuta, Bucaramanga, Santa Marta, Cartagena, Barranquilla, Cali, Medell&iacute;n, Bogot&aacute;, Pasto e Ipiales.</h5>', '/storage/casos/1690260583_grupo3.jpg', '/storage/casos/1690260583_grupo4.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/hhbq2GJ-0z4\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:46:42', '2023-07-25 04:49:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `orden` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `estado` tinyint DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `orden`, `estado`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, '/storage/clientes/clientes_logo1.svg', '2023-07-21 07:49:02', '2023-07-24 21:10:53', NULL),
(2, '2', 1, '/storage/clientes/1690233800_clientes_logo2.svg', '2023-07-21 07:51:27', '2023-07-24 21:23:20', NULL),
(3, '3', 1, '/storage/clientes/clientes_logo3.svg', '2023-07-21 07:52:45', '2023-07-21 07:52:45', NULL),
(4, '4', 1, '/storage/clientes/clientes_logo4.svg', '2023-07-21 07:52:55', '2023-07-21 07:52:55', NULL),
(5, '5', 1, '/storage/clientes/clientes_logo5.svg', '2023-07-21 07:53:03', '2023-07-21 07:53:03', NULL),
(6, '6', 1, '/storage/clientes/clientes_logo6.svg', '2023-07-21 07:53:13', '2023-07-21 07:53:13', NULL),
(7, '7', 1, '/storage/clientes/clientes_logo8.svg', '2023-07-21 07:53:35', '2023-07-21 07:53:35', NULL),
(8, '8', 1, '/storage/clientes/clientes_logo9.svg', '2023-07-21 07:53:45', '2023-07-21 07:53:45', NULL),
(9, '10', 1, '/storage/clientes/clientes_logo10.svg', '2023-07-21 07:53:57', '2023-07-21 07:53:58', NULL),
(10, '10', 1, '/storage/clientes/clientes_logo11.svg', '2023-07-21 07:54:17', '2023-07-21 07:59:10', NULL),
(11, '11', 1, '/storage/clientes/clientes_asset2.svg', '2023-07-21 07:59:34', '2023-07-21 07:59:34', NULL),
(12, '12', 1, '/storage/clientes/clientes_asset3.svg', '2023-07-21 07:59:49', '2023-07-21 07:59:49', NULL),
(13, '13', 1, '/storage/clientes/clientes_asset1.svg', '2023-07-21 08:00:31', '2023-07-21 08:00:31', NULL),
(14, '14', 1, '/storage/clientes/clientes_asset4.svg', '2023-07-21 08:01:07', '2023-07-21 08:01:07', NULL),
(15, '15', 1, '/storage/clientes/clientes_asset5.svg', '2023-07-21 08:01:17', '2023-07-21 08:01:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

DROP TABLE IF EXISTS `contenidos`;
CREATE TABLE IF NOT EXISTS `contenidos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_cards` bigint DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `imagen` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contenidos_cards1_idx` (`id_cards`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `id_cards`, `titulo`, `descripcion`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 3, 'ESTRATEGIA DE NEGOCIO', '<ul>\r\n<li>Definici&oacute;n de propuesta de valor</li>\r\n<li>Dise&ntilde;o de servicios</li>\r\n<li>Modelos de negocio</li>\r\n<li>Formulaci&oacute;n de OKRs</li>\r\n</ul>', '/storage/_contenidos/1692126871_negocio.jpg', 1, '2023-08-15 19:05:28', '2023-08-15 19:14:31'),
(2, 3, 'ESTRATEGIA DE COMUNICACIÓN', '<ul>\r\n<li>Posicionamiento de marca</li>\r\n<li>Arquitectura de marca</li>\r\n<li>Naming</li>\r\n<li>Experiencia de marca</li>\r\n</ul>', '/storage/_contenidos/1692127228_comunica.jpg', 2, '2023-08-15 19:20:28', '2023-08-15 19:20:28'),
(3, 3, 'ESTRATEGIA DE MARCA', '<ul>\r\n<li>Posicionamiento de marca</li>\r\n<li>Arquitectura de marca</li>\r\n<li>Naming</li>\r\n<li>Experiencia de marca</li>\r\n</ul>', '/storage/_contenidos/1692127249_estmarca.jpg', 3, '2023-08-15 19:20:49', '2023-08-15 19:20:49'),
(4, 4, 'IDENTIDAD DE MARCA', '<ul>\r\n<li>Identidad visual</li>\r\n<li>Despliegue de marca</li>\r\n<li>Piezas gr&aacute;ficas</li>\r\n<li>Sistemas de dise&ntilde;o</li>\r\n</ul>', '/storage/_contenidos/1692127896_marca.png', 1, '2023-08-15 19:31:36', '2023-08-15 19:31:36'),
(5, 4, 'DISEÑO WEB', '<ul>\r\n<li>Landings</li>\r\n<li>Arquitectura web</li>\r\n<li>Kits UI</li>\r\n<li>Prototipado</li>\r\n</ul>', '/storage/_contenidos/1692127922_dweb.png', 2, '2023-08-15 19:32:02', '2023-08-15 19:32:02'),
(6, 4, 'POP', '<ul>\r\n<li>Merch</li>\r\n<li>Vallas publicitarias</li>\r\n<li>Visual merchandising</li>\r\n<li>Stands comerciales</li>\r\n</ul>', '/storage/_contenidos/1692127939_pop.jpg', 3, '2023-08-15 19:32:19', '2023-08-15 19:32:19'),
(7, 4, 'ESTRATEGIA', '<div class=\"container_page px-4  mb-5 services_list\">\r\n<div class=\"row pt-5 justify-content-center\">\r\n<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<ul>\r\n<li>Estrategia de marca</li>\r\n<li>Arquitectura de marca</li>\r\n<li>Talleres de alineaci&oacute;n</li>\r\n<li>Conceptualizaci&oacute;n de campa&ntilde;as</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"py-5\">&nbsp;</div>', '/storage/_contenidos/1692127958_estrategia.png', 4, '2023-08-15 19:32:38', '2023-08-15 19:32:38'),
(8, 5, 'DOCUMENTALES', '<p>Investigamos, escribimos, producimos y editamos documentales de la m&aacute;s alta calidad para marcas que quieren&nbsp;<strong>contar historias y despertar emociones.</strong></p>', '/storage/_contenidos/1692128681_docs.jpg', 1, '2023-08-15 19:44:41', '2023-08-15 19:44:41'),
(9, 5, 'VIDEO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Nos inventamos historias incre&iacute;bles y llevamos las ideas de tu equipo hacia un producto que no solo&nbsp;<strong>emocione</strong>&nbsp;sino que&nbsp;<strong>cumpla los objetivos</strong> de tu marca.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128697_video.jpg', 2, '2023-08-15 19:44:57', '2023-08-15 19:44:57'),
(10, 5, 'CUBRIMIENTOS', '<p>&iquest;Qui&eacute;n dijo que un cubrimiento es aburrido? tenemos las mejores ideas para producir memorias audiovisuales fieles al&nbsp;<strong>esp&iacute;ritu de tu empresa.</strong></p>', '/storage/_contenidos/1692128713_cubrimien.jpg', 3, '2023-08-15 19:45:13', '2023-08-15 19:45:13'),
(11, 5, 'VIDEO PRODUCTO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p><strong>Destacamos lo mejor</strong> de tu producto para crear piezas que valga la pena repetir una y otra vez.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128730_producto.jpg', 4, '2023-08-15 19:45:30', '2023-08-15 19:45:30'),
(12, 5, 'INSTITUCIONAL', '<div class=\"container_page px-4  mb-lg-5 services_list\">\r\n<div class=\"row pt-5 justify-content-center\">\r\n<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Creamos contenido de valor para tu empresa, alineado con tu estrategia. Creamos comunidad,&nbsp;<strong>potenciamos las comunicaciones</strong>&nbsp;internas y externas, y construimos&nbsp;<strong>mensajes efectivos</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128745_institucion.jpg', 5, '2023-08-15 19:45:45', '2023-08-15 19:45:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `descripcion`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'MARIANA MONTOYA', 'CEO/FOUNDER', '/storage/multimedia/1690232624_equipo_img_profile1.png', 1, '2023-07-21 05:59:49', '2023-07-24 21:03:44'),
(2, 'JUAN DIEGO SANTOS', 'SENIOR CONTENT CREATOR', '/storage/multimedia/1690232850_equipo_img_profile2.png', 2, '2023-07-21 06:00:53', '2023-07-24 21:07:30'),
(3, 'SEBASTIÁN VITERI', 'SENIOR GRAPHIC DESIGNER', '/storage/multimedia/1690232858_equipo_img_profile3.png', 3, '2023-07-21 06:16:33', '2023-07-24 21:07:38'),
(4, 'DAVID RIVEROS', 'SENIOR CONTENT CREATOR', '/storage/multimedia/1690232871_equipo_img_profile4.png', 4, '2023-07-21 06:16:57', '2023-07-24 21:07:51'),
(5, 'CATALINA PÉREZ', 'STRATEGY LEAD', '/storage/multimedia/1690232880_equipo_img_profile5.png', 5, '2023-07-21 06:17:15', '2023-07-24 21:08:00'),
(6, 'CINDY PALACIO', 'SENIOR GRAPHIC DESIGNER', '/storage/multimedia/1690232889_equipo_img_profile6.png', 6, '2023-07-21 06:18:25', '2023-07-24 21:08:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `identificador` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_branding`
--

DROP TABLE IF EXISTS `imagenes_branding`;
CREATE TABLE IF NOT EXISTS `imagenes_branding` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `clase` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

DROP TABLE IF EXISTS `parametros`;
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `public_key` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `secret_key` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `from` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `to` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`id`, `public_key`, `secret_key`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 'a1dfcb610179145614f4843fb5e01a74', '39a4b7bb742597c3a6066c6a56f97727', 'acruz960720@gmail.com', 'cruzjonathan960720@gmail.com', NULL, '2023-07-21 07:16:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

DROP TABLE IF EXISTS `procesos`;
CREATE TABLE IF NOT EXISTS `procesos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_casos` bigint DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `texto` mediumtext COLLATE utf8mb4_general_ci,
  `img` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_procesos_casos1_idx` (`id_casos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

DROP TABLE IF EXISTS `redes`;
CREATE TABLE IF NOT EXISTS `redes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `enlace` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `clase` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `titulo`, `enlace`, `clase`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Instagram', 'https://www.instagram.com/sazu_lab/', 'icon-instagram', '2023-07-24 20:48:17', '2023-07-24 20:48:17', NULL),
(2, 'Tiktok', '#', 'icon-tiktok', '2023-07-24 20:48:29', '2023-07-24 20:49:10', NULL),
(3, 'Linkedin', 'https://www.linkedin.com/company/sazu', 'icon-linkedin', '2023-07-24 20:48:46', '2023-07-24 20:48:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

DROP TABLE IF EXISTS `resultados`;
CREATE TABLE IF NOT EXISTS `resultados` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_casos` bigint DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `texto` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resultados_casos1_idx` (`id_casos`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `id_casos`, `orden`, `estado`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '32 %', 'En reducción de accidentalidad.', '2023-07-25 05:11:52', '2023-07-25 05:11:52'),
(2, 1, 2, 1, '82 %', 'En reconocimiento sobre la campaña implementada.', '2023-07-25 05:16:07', '2023-07-25 05:16:07'),
(3, 1, 3, 1, '3 meses', 'Entre Bogotá y Cartagena sin un solo accidente en planta.', '2023-07-25 05:16:22', '2023-07-25 05:16:22'),
(94, 2, 1, 1, '$ 10.2 M', 'Gestionamos “Free-press” en medios digitales por valores equivalentes a más de 10 millones de pesos si hubieran sido pagos.', '2023-07-25 05:19:15', '2023-07-25 05:19:15'),
(95, 2, 2, 1, '8 talleres', 'Planeamos y lideramos con éxito más de 8 talleres de co-creación con socios estratégicos de la organización.', '2023-07-25 05:19:30', '2023-07-25 05:19:30'),
(96, 2, 3, 1, '78,000', 'Personas alcanzadas a través de “Free-press” en medios impresos, un equivalente a más de 30 millones de pesos si hubieran sido pagos.', '2023-07-25 05:19:44', '2023-07-25 05:19:44'),
(97, 2, 4, 1, '3 campañas', 'Creamos 3 campañas de comunicación orientadas a potenciar la protección de derechos de la población migrante venezolana en Colombia y mejorar la cohesión comunitaria y seguridad ciudadana.', '2023-07-25 05:19:58', '2023-07-25 05:19:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `rol` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'superadmin', '2023-01-01 00:00:00', '2023-01-01 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

DROP TABLE IF EXISTS `textos`;
CREATE TABLE IF NOT EXISTS `textos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `identificador` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `ubicacion`, `identificador`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', 'texto_superior', '<h4><strong>EN NUESTRO LAB,</strong></h4>\r\n<h1><strong>SOLUCIONAMOS<br>LOS </strong>RETOS <br>ESTRAT&Eacute;GICOS<br><strong> DE TU MARCA.</strong></h1>\r\n<h3><em><strong>CONSULTOR&Iacute;A Y PRODUCCI&Oacute;N</strong><br>DE COMUNICACIONES</em></h3>', '2023-06-01 19:17:39', '2023-07-24 17:42:05', NULL),
(2, 'frm_contacto', 'descripcion', '<h1>LET&acute;S MAKE IT <strong>HAPPEN!</strong></h1>\r\n<h5>Completa la siguiente informaci&oacute;n para empezar:</h5>', '2023-06-01 19:22:10', '2023-06-01 19:22:10', NULL),
(3, 'estrategia', 'texto_superior', '<h2><em>End to end</em></h2>\r\n<h1>ESTRATEGIA<br><em>+ EJECUCI&Oacute;N</em></h1>\r\n<h2><em>con metodolog&iacute;as de dise&ntilde;o para negocio, comunicaciones y marca.</em></h2>', '2023-06-01 19:23:15', '2023-08-11 20:29:46', NULL),
(4, 'home', 'manifiesto', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/bAb78BGLXK8\" width=\"100%\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-24 17:45:11', '2023-07-24 17:45:11', NULL),
(5, 'estrategia', 'marquee', '<h1>INVESTIGACI&Oacute;N - MODELOS DE NEGOCIO - PROPUESTA DE VALOR - PILARES DE COMUNICACI&Oacute;N - AGILE COACHIING -</h1>', '2023-08-11 20:32:02', '2023-08-11 20:34:41', NULL),
(6, 'estrategia', 'titulot1', '<h1>INNOVATION IS ABOUT SOLVING PROBLEMS</h1>', NULL, '2023-08-14 14:44:10', NULL),
(7, 'estrategia', 'text1', '<p>Usamos la estrategia como herramienta para potenciar <strong>la innovaci&oacute;n y la transformaci&oacute;n</strong> de las empresas.</p>', NULL, '2023-08-14 14:48:44', NULL),
(8, 'estrategia', 'text2', '<p><span class=\"number\">PROCESO CENTRADO</span></p>\r\n<h2>EN LAS PERSONAS</h2>', '2023-08-14 14:50:28', '2023-08-14 14:50:28', NULL),
(10, 'estrategia', 'text3', '<p><span class=\"number\">METODOLOG&Iacute;AS</span></p>\r\n<h2>DE INNOVACI&Oacute;N</h2>', '2023-08-14 14:58:25', '2023-08-14 14:58:25', NULL),
(13, 'estrategia', 'text4', '<p><span class=\"number\">RIGUROSIDAD</span></p>\r\n<h2>ANAL&Iacute;TICA</h2>', '2023-08-14 15:00:54', '2023-08-14 15:04:21', NULL),
(14, 'estrategia', 'text5', '<h2>NEGOCIO</h2>\r\n<p>Entendemos a profundidad las necesidades de tu empresa, de su audiencia y del mercado, para identificar los <strong>retos y oportunidades</strong> a los que se enfrenta, y as&iacute;, articular decisiones que <strong>transformen el negocio.</strong></p>', '2023-08-14 15:04:53', '2023-08-14 15:06:55', NULL),
(15, 'estrategia', 'text6', '<h2>COMUNICACIONES</h2>\r\n<p>Analizamos los comportamientos y creencias de la audiencia, identificando oportunidades de relacionamiento y estableciendo pilares de comunicaci&oacute;n que gu&iacute;en los puntos de contacto entre tu negocio y su p&uacute;blico de una forma <strong>coherente, clara y sobre todo, efectiva.</strong></p>', '2023-08-14 15:07:18', '2023-08-14 15:07:36', NULL),
(16, 'estrategia', 'text7', '<h2>MARCA</h2>\r\n<p>Extraemos la esencia del negocio y lo convertimos en experiencias relevantes para su p&uacute;blico. Desde la estrategia, definimos el prop&oacute;sito de la marca y trazamos un plan para posicionarla y convertirla en un <strong>activo valioso para sus clientes en un mercado competitivo.</strong></p>', '2023-08-14 15:09:22', '2023-08-14 15:09:22', NULL),
(17, 'estrategia', 'pietext', '<p>\"La estrategia se trata de <strong>tomar decisiones,</strong> hacer compromisos; se trata de elegir deliberadamente ser diferente\"</p>\r\n<p>Michael Porter</p>', '2023-08-14 15:11:02', '2023-08-14 15:12:28', NULL),
(18, 'estrategia', 'rueda', '<ul>\r\n<li>\r\n<h5>ENTENDER</h5>\r\n<p>Investigamos y escuchamos</p>\r\n</li>\r\n<li>\r\n<h5>ANALIZAR</h5>\r\n<p>Encontramos oportunidades</p>\r\n</li>\r\n<li>\r\n<h5>IDEAR</h5>\r\n<p>Generamos ideas</p>\r\n</li>\r\n<li>\r\n<h5>DEFINIR</h5>\r\n<p>Priorizamos y marcamos un <br>plan de acci&oacute;n</p>\r\n</li>\r\n<li>\r\n<h5>IMPLENTAR</h5>\r\n<p>Llevamos a la vida el plan</p>\r\n</li>\r\n</ul>', '2023-08-14 15:36:02', '2023-08-14 15:36:02', NULL),
(23, 'contenido', 'texto_superior', '<h2><em>Producimos</em></h2>\r\n<h1>CONTENIDO</h1>\r\n<h2>que construye<strong style=\"color: #5b4cff;\"> <em>relaciones reales</em></strong> <br>con tu audiencia, promoviendo <br>el <strong style=\"color: #5b4cff;\"> <em>crecimiento sostenible.</em></strong></h2>', '2023-08-15 21:17:29', '2023-08-15 21:17:29', NULL),
(26, 'contenido', 'marquee', '<h1>DOCUMENTALES - COMERCIALES - CAMPA&Ntilde;AS - RRSS - VIDEO/FOTO PRODUCTO - CASOS DE &Eacute;XITO - CORTOMETRAJES - ANIMACIONES -&nbsp;</h1>', '2023-08-15 21:33:58', '2023-08-15 21:33:58', NULL),
(27, 'contenido', 'vid1', '<h2 class=\"mb-0\"><em>Videos</em></h2>\r\n<p>que emocionan, enganchan <br>y &iexcl;llevan a la acci&oacute;n!</p>', '2023-08-15 21:36:55', '2023-08-15 21:36:55', NULL),
(31, 'contenido', 'vid2', '<h2>Guiones</h2>\r\n<p>que le dan vida a la ideas</p>', '2023-08-15 21:42:53', '2023-08-15 21:42:53', NULL),
(32, 'contenido', 'vid3', '<h2>Contenido</h2>\r\n<p>para redes sociales que llega donde tiene que llegar</p>', '2023-08-15 21:45:04', '2023-08-15 21:45:04', NULL),
(33, 'contenido', 'vid4', '<h2>Documentales</h2>\r\n<p>que despiertan emociones</p>', '2023-08-15 21:45:18', '2023-08-15 21:45:18', NULL),
(34, 'contenido', 'vid5', '<h2>Mensajes</h2>\r\n<p>poderosos que tocan fibras y son efectivos</p>', '2023-08-15 21:45:32', '2023-08-15 21:45:32', NULL),
(35, 'contenido', 'titulo2', '<h2>DETR&Aacute;S <strong>DE C&Aacute;MARAS</strong></h2>', '2023-08-15 21:46:48', '2023-08-15 21:48:11', NULL),
(36, 'branding', 'texto_superior', '<h2><em>Producimos</em></h2>\r\n<h1><em>ESTRATEGIA DE MARCA &amp;<br>IDENTIDAD VISUAL</em></h1>\r\n<h2><em>Para empresas que quieren <br><strong style=\"color: #5b4cff;\">impactar el mundo.</strong></em></h2>', '2023-08-16 00:41:22', '2023-09-05 18:41:34', NULL),
(37, 'branding', 'marquee', '<h1>IDENTIDAD DE MARCA - PACKAGING - POP - MERCH - ESTRATEGIA DE MARCA - REBRANDING</h1>', '2023-08-16 00:42:49', '2023-08-16 00:42:49', NULL),
(44, 'branding', 'titulo1', '<h2>PROCESO DE <strong>IDENTIDAD</strong></h2>\r\n<h4><em>&iquest;Qu&eacute; puedes esperar en un <br>proyecto como este?</em></h4>', '2023-08-16 00:53:59', '2023-08-16 00:53:59', NULL),
(45, 'branding', 'text1', '<h2>ENTENDIMIENTO</h2>\r\n<p>Entendemos el negocio a profundidad. Investigamos sus audiencias, entendemos las necesidades de negocio y analizamos el mercado para poder tomar decisiones estrat&eacute;gicas.</p>', '2023-08-16 01:07:09', '2023-08-16 01:07:09', NULL),
(46, 'branding', 'text2', '<h2>ESTRATEGIA</h2>\r\n<p>Facilitamos la toma de decisiones de estrategia de marca, ayudando a nuestros clientes a definir una posici&oacute;n &uacute;nica y valiosa en el mercado que les permita diferenciarse y potenciar su oferta de valor.</p>', '2023-08-16 01:07:53', '2023-08-16 01:07:53', NULL),
(47, 'branding', 'text3', '<h2>DISE&Ntilde;O</h2>\r\n<p>Dise&ntilde;amos una identidad visual poderosa; coherente con la estrategia y que se adapte a los espacios donde vivir&aacute; la marca.</p>', '2023-08-16 01:08:33', '2023-08-16 01:08:33', NULL),
(48, 'branding', 'text4', '<h2>IMPLEMENTACI&Oacute;N</h2>\r\n<p>Planeamos y ejecutamos el despliegue de la marca. Priorizamos canales, mensajes y contenido, para construir el posicionamiento estrat&eacute;gico deseado. Somos tus aliados en el proceso de desarrollar una marca potente y coherente.</p>', '2023-08-16 01:08:59', '2023-08-16 01:12:33', NULL),
(57, 'contacto', 'texto_superior', '<h1>LET&acute;S MAKE IT <strong>HAPPEN!</strong></h1>\r\n<h5><strong>&iexcl;Manos a la obra!</strong> Completa la siguiente informaci&oacute;n para empezar:</h5>', '2023-08-18 16:08:22', '2023-08-18 16:09:47', NULL),
(58, 'contacto', 'texto_superior1', '<h6>LL&Aacute;MANOS</h6>\r\n<p>Queremos o&iacute;r tu voz! Ya sea para agendar una cita, cotizar o saber m&aacute;s informaci&oacute;n sobre nosotros ll&aacute;manos al +573006568714 y conversemos un rato.</p>', '2023-08-18 16:09:05', '2023-08-18 16:09:05', NULL),
(59, 'contacto', 'texto_superior2', '<h6>VIS&Iacute;TANOS</h6>\r\n<p>&iexcl;Nuestras puertas est&aacute;n abiertas! Conoce d&oacute;nde generamos ideas, planteamos estrategias, organizamos talleres y tomamos bastante caf&eacute;.</p>', '2023-08-18 16:10:46', '2023-08-18 16:10:46', NULL),
(60, 'contacto', 'texto_superior3', '<h6>CHAT</h6>\r\n<p>&iquest;Prefieres escribirnos? Puedes hacerlo a nuestro whatsapp. +573006568714. Estamos esperando para responderte.</p>', '2023-08-18 16:11:35', '2023-08-18 16:12:11', NULL),
(61, 'contacto', 'titulo', '<h2 class=\"bw font-weight-bold\">TRABAJ&Eacute;MOS <br>JUNTOS.</h2>', '2023-08-18 16:13:28', '2023-08-18 16:14:25', NULL),
(66, 'home', 'header', '<ul>\r\n<li><a href=\"{{ url(\'/\') }}\">INICIO</a></li>\r\n<li><a href=\"{{ url(\'/estrategia\') }}\">ESTRATEGIA</a></li>\r\n<li><a href=\"{{ url(\'/contenido\') }}\">CONTENIDO</a></li>\r\n<li><a href=\"{{ url(\'/branding\') }}\">IDENTIDAD VISUAL</a></li>\r\n<li><a href=\"{{ url(\'/contacto\') }}\">CONT&Aacute;CTANOS</a></li>\r\n</ul>', '2023-08-18 16:42:54', '2023-08-23 19:37:53', NULL),
(67, 'home', 'footerc', '<h5>CONT&Aacute;CTANOS</h5>\r\n<p>Tel: 3006568714 <br>Mail: <a href=\"mailto:Comercial@sazulab.com\">mariana@sazulab.com</a><br>Dir: Cra 10 # 96 - 79</p>', '2023-08-18 16:56:21', '2023-08-18 16:57:50', NULL),
(68, 'home', 'footers', '<h5>SERVICIOS</h5>\r\n<ul>\r\n<li><a href=\"{{ url(\'/estrategia\') }}\">Estrategia</a></li>\r\n<li><a href=\"{{ url(\'/contenido\') }}\">Contenidos</a></li>\r\n<li><a href=\"{{ url(\'/branding\') }}\">Identidad Visual</a></li>\r\n</ul>', '2023-08-18 16:58:36', '2023-08-18 16:58:36', NULL),
(69, 'home', 'footerbtn', '<div class=\"text-center mt-lg-5 pt-5\"><a class=\"btn_outline\" href=\"{{ url(\'/contacto\') }}\">S&Eacute; NUESTRO CLIENTE</a></div>', '2023-08-18 18:02:23', '2023-08-18 18:02:23', NULL),
(71, 'contenido', 'audiovisual', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/zs8YasF82Vs\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\">\r\n          </iframe></p>', '2023-08-29 17:56:23', '2023-08-29 17:56:23', NULL),
(72, 'contenido', 'video', '<div class=\"c_video\"><iframe title=\"Porkcolombia\" src=\"https://www.youtube.com/embed/poKxWOP3vnE\" width=\"552\" height=\"982\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-29 18:03:13', '2023-08-29 18:09:02', NULL),
(73, 'contenido', 'video2', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/mX0oY4Ewcv0\" width=\"560\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-29 18:09:39', '2023-08-29 18:09:39', NULL),
(74, 'contenido', 'video3', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/XC5BA7xAzQk\" width=\"552\" height=\"982\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-29 18:11:52', '2023-08-29 18:11:52', NULL),
(75, 'contenido', 'video4', '<div class=\"c_video\"><iframe title=\"DEUNA I Checkout\" src=\"https://www.youtube.com/embed/njM_Rs-DAMs\" width=\"552\" height=\"982\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-29 18:12:37', '2023-08-29 18:12:37', NULL),
(76, 'contenido', 'video5', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/ZiUZ5fkuVkY\" width=\"560\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-29 18:13:01', '2023-08-29 18:13:01', NULL),
(77, 'contenido', 'video6', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/2kYFq7ciOd8\" width=\"560\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-29 18:13:32', '2023-08-29 18:13:32', NULL),
(78, 'home', 'mision', '<h4>NUESTRA MISI&Oacute;N</h4>\r\n<h5>Crear una <strong style=\"color: #5b4cff;\">estrategia de comunicaci&oacute;n robusta,</strong> coherente y consistente a trav&eacute;s de un <strong style=\"color: #5b4cff;\">entendimiento profundo de las necesidades y aspiraciones</strong> de los j&oacute;venes talentos tech en Colombia, para crear una oferta de valor atractiva como marca empleadora por medio de la <strong style=\"color: #5b4cff;\">implementaci&oacute;n de contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicaci&oacute;n establecidos.&nbsp;</h5>\r\n<p>&nbsp;</p>', '2023-08-30 15:38:54', '2023-08-30 15:38:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
CREATE TABLE IF NOT EXISTS `ubicaciones` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `pass`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin editado', 'admin@homesas.co', 'f50184a7d5e6b76ae307aef5fb128db5', '2022-07-25 05:48:37', '2023-03-14 20:40:30', NULL),
(2, 'Test v2', 'admin', '25d55ad283aa400af464c76d713c07ad', '2022-07-25 05:48:37', '2023-07-24 16:56:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_roles`
--

DROP TABLE IF EXISTS `usuarios_has_roles`;
CREATE TABLE IF NOT EXISTS `usuarios_has_roles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usuarios_id` bigint NOT NULL,
  `roles_id` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_has_roles_usuarios_idx` (`usuarios_id`),
  KEY `fk_usuarios_has_roles_roles1_idx` (`roles_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_has_roles`
--

INSERT INTO `usuarios_has_roles` (`id`, `usuarios_id`, `roles_id`) VALUES
(1, 1, 1),
(2, 2, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casos`
--
ALTER TABLE `casos`
  ADD CONSTRAINT `fk_casos_cards1` FOREIGN KEY (`id_cards`) REFERENCES `cards` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `fk_contenidos_cards1` FOREIGN KEY (`id_cards`) REFERENCES `cards` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD CONSTRAINT `fk_procesos_casos1` FOREIGN KEY (`id_casos`) REFERENCES `casos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `fk_resultados_casos1` FOREIGN KEY (`id_casos`) REFERENCES `casos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
  ADD CONSTRAINT `fk_usuarios_has_roles_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `fk_usuarios_has_roles_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
