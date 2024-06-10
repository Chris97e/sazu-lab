-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-11-2023 a las 17:01:25
-- Versión del servidor: 10.6.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u968270747_sazulab_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `img_listado` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `es_caso` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `titulo`, `orden`, `url`, `descripcion`, `img_listado`, `estado`, `es_caso`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CASO TEKNIPLEX', 1, 'casetekniplex', 'Reducir la alta accidentalidad de uno de los líderes en fabricación de empaques por medio de una estrategia de comunicación.', '/storage/cards/1692820785_slider2.png', 1, 1, '2023-07-25 01:10:48', '2023-08-23 19:59:45', NULL),
(2, 'CASO CCD', 2, 'caseccd', 'Proteger los derechos de la población migrante venezolana y promover su integración e inclusión\r\n          social en el territorio colombiano.', '/storage/cards/1692820997_slider3.png', 1, 1, '2023-07-25 01:28:01', '2023-08-23 20:03:17', NULL),
(3, 'BOSQUENIBLE', 3, 'estrategia', 'Definir una propuesta de valor y un modelo de negocio viable en el ecosistema de consultoría en\r\n          sostenibilidad.', '/storage/cards/1692821113_slider4.jpg', 1, 1, '2023-07-25 01:28:51', '2023-08-23 20:05:13', NULL),
(4, 'ORIGO PRODUCTIONS', 4, 'branding', 'Estrategia de marca, proceso de naming y una identidad visual para una empresa de entretenimiento cultural.', '/storage/cards/1692821197_slider5.jpg', 1, 1, '2023-07-25 01:29:26', '2023-08-23 20:06:37', NULL),
(5, 'PERNOD RICARD', 5, 'contenido', 'Diseñamos experiencias a partir de productos para que acompañen al público en sus mejores momentos.', '/storage/cards/1692821218_slider6.jpg', 1, 1, '2023-07-25 01:30:27', '2023-08-23 20:06:58', NULL),
(6, 'Trabajo de prueba', -10, 'url-ejemplo-caso-prueba', 'Mi descripción inicial', '/storage/cards/1699974781_bananas-01.jpg', 1, 1, '2023-11-14 15:13:01', '2023-11-14 15:41:33', '2023-11-14 15:41:33'),
(7, 'Caso de prueba', -10, 'caso-de-prueba', 'Descripcióin del caso de prueba para el HOME', '/storage/cards/1700148969_1692820785_slider2.png', 1, 1, '2023-11-16 15:36:09', '2023-11-16 15:41:24', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE `casos` (
  `id` bigint(20) NOT NULL,
  `id_cards` bigint(20) DEFAULT NULL,
  `imagen_background` varchar(255) DEFAULT NULL,
  `header` mediumtext DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` mediumtext DEFAULT NULL,
  `col1` mediumtext DEFAULT NULL,
  `col2` mediumtext DEFAULT NULL,
  `col3` mediumtext DEFAULT NULL,
  `contexto` mediumtext DEFAULT NULL,
  `img_left` varchar(255) DEFAULT NULL,
  `img_right` varchar(255) DEFAULT NULL,
  `iframe` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`id`, `id_cards`, `imagen_background`, `header`, `titulo`, `texto`, `col1`, `col2`, `col3`, `contexto`, `img_left`, `img_right`, `iframe`, `created_at`, `updated_at`) VALUES
(1, 1, '/storage/casos/1692822156_tekni.jpg', '<h2><span style=\"color: rgb(236, 240, 241);\"><em>Caso de estudio</em></span></h2>\r\n<h1><span style=\"color: rgb(236, 240, 241);\"><strong>TEKNIPLEX / PHOENIX</strong></span></h1>\r\n<h2><span style=\"color: rgb(236, 240, 241);\"><em>Reducir la alta accidentalidad de uno de los l&iacute;deres en fabricaci&oacute;n de empaques por medio de una estrategia de comunicaci&oacute;n.</em></span></h2>', 'TEKNIPLEX / PHOENIX', '<h2><em>Caso de estudio</em></h2>\r\n<h1><strong>TEKNIPLEX / PHOENIX</strong></h1>\r\n<h2><em>Reducir la alta accidentalidad de uno de los l&iacute;deres en fabricaci&oacute;n de empaques por medio de una estrategia de comunicaci&oacute;n.</em></h2>', '<p><img class=\"mb-3\" src=\"../../assets/front/images/phoenix.svg\" alt=\"\"> <img src=\"../../assets/front/images/teknilogo.svg\" alt=\"\" width=\"296\" height=\"59\"></p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Empaques</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Bogot&aacute; y Cartagena,<br>Colombia</p>', '<p>Estrategia de comunicaci&oacute;n <br>Creaci&oacute;n de campa&ntilde;a <br>Contenido audiovisual <br>Contenido gr&aacute;fico <br>Intervenci&oacute;n de espacios</p>', '<h4>CONTEXTO</h4>\r\n<h5>Tekniplex, l&iacute;der en el dise&ntilde;o, fabricaci&oacute;n y comercializaci&oacute;n de empaques en Am&eacute;rica ten&iacute;a un reto: <strong style=\"color: #5b4cff;\">reducir la accidentalidad en sus f&aacute;bricas de Colombia.</strong> <br><br>&iquest;La causa? Una alta rotaci&oacute;n del personal dificultaba la transmisi&oacute;n y apropiaci&oacute;n de cultura de seguridad y cuidado personal.</h5>', '/storage/casos/1692820863_grupo1tek.jpg', '/storage/casos/1692820863_grupo2tek.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/PF9pso5AAFk\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:17:06', '2023-08-23 20:22:36'),
(2, 2, '/storage/casos/1692822220_ccd.jpg', '<h2><span style=\"color: rgb(86, 128, 222);\"><em>Caso de estudio</em></span></h2>\r\n<h1><span style=\"color: rgb(86, 128, 222);\"><strong>CCD/PACT</strong></span></h1>\r\n<h2><span style=\"color: rgb(86, 128, 222);\"><em>Visibilizar las iniciativas del programa Conectando Caminos por los Derechos de Pact. Para proteger los derechos de la poblaci&oacute;n migrante venezolana y promover su integraci&oacute;n e inclusi&oacute;n social en el territorio colombiano. </em></span></h2>', 'CCD/PACT', 'Visibilizar las iniciativas del programa Conectando Caminos por los Derechos de Pact. Para proteger los derechos de la población migrante venezolana y promover su integración e inclusión social en el territorio colombiano.', '<p><img src=\"../../assets/front/images/logopact.svg\" alt=\"\"></p>\r\n<div class=\"mt-3 c_resplandor_f\">\r\n<h5><strong>Estatus:</strong> Finalizado</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Organizaci&oacute;n internacional sin &aacute;nimo de lucro.</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Colombia</p>', '<h5>SERVICIO</h5>\r\n<p>Estrategia de comunicaci&oacute;n. <br>Producci&oacute;n de contenido <br>audiovisual y gr&aacute;fico. <br>Relaciones p&uacute;blicas. <br>Gesti&oacute;n en prensa.</p>', '<h4>CONTEXTO</h4>\r\n<h5>Conectando Caminos por los Derechos (CCD) es uno de los programas de PACT. Este busca <strong style=\"color: #5b4cff;\">proteger y prevenir la violaci&oacute;n de derechos humanos de la poblaci&oacute;n migrante venezolana en Colombia,</strong> as&iacute; como mejorar la cohesi&oacute;n comunitaria y la seguridad ciudadana. Entre las poblaciones priorizadas se encuentran, mujeres, ni&ntilde;as,&nbsp; ni&ntilde;os, j&oacute;venes y adolescentes&nbsp;y poblaci&oacute;n LGBTIQ+. <br><br>El programa opera en 11 municipios caracterizados por tener una amplia poblaci&oacute;n migrante, estos son: Riohacha, Maicao, C&uacute;cuta, Bucaramanga, Santa Marta, Cartagena, Barranquilla, Cali, Medell&iacute;n, Bogot&aacute;, Pasto e Ipiales.</h5>', '/storage/casos/1692822220_grupo3.jpg', '/storage/casos/1692822220_grupo4.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/hhbq2GJ-0z4\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:46:42', '2023-08-23 20:23:40'),
(3, 7, '/storage/casos/1700149213_bananas-01.jpg', '<h2><span style=\"color: rgb(236, 240, 241);\"><em>Caso de estudio de prueba</em></span></h2>\r\n<h1><span style=\"color: rgb(236, 240, 241); font-size: 18pt;\"><strong><span style=\"color: rgb(224, 62, 45);\">DEFECTO de prueba / EJEMPLO de </span>prueba</strong></span></h1>\r\n<h2><span style=\"color: rgb(236, 240, 241);\"><em>Texto de pruiebaLorem Ipsum es</em> simplemente <em>el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500.</em></span></h2>', 'DEFECTO / EJEMPLO', '<h2><em>Caso de estudio</em></h2>\r\n        <h1><strong>DEFECTO / EJEMPLO</strong></h1>\r\n        <h2><em>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</em></h2>', '<p><img class=\"mb-3\" src=\"../../assets/front/images/phoenix.svg\" alt=\"\"> <img src=\"../../assets/front/images/teknilogo.svg\" alt=\"\" width=\"296\" height=\"59\"></p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Empaques de prueba</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Bogot&aacute; y Cartagena,<br>Colombia, prueba</p>', '<p>Estrategia de comunicaci&oacute;n <br>Creaci&oacute;n de campa&ntilde;a <br>Contenido audiovisual <br>Contenido gr&aacute;fico <br>Intervenci&oacute;n de espacios prueba</p>', '<h4>CONTEXTO</h4>\r\n<h5>Prueba Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto:&nbsp;<strong style=\"color: #5b4cff;\">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</strong> <br><br>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</h5>', '/storage/casos/1700149213_imgleft.jpg', '/storage/casos/1700149213_imgrig.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/PF9pso5AAFk\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-11-16 15:36:48', '2023-11-16 15:40:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) NOT NULL,
  `orden` varchar(255) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `orden`, `estado`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, '/storage/clientes/clientes_logo1.svg', '2023-07-21 07:49:02', '2023-07-24 21:10:53', NULL),
(2, '2', 1, '/storage/multimedia/clientes/1695747598_clientes_LOGO ML.svg', '2023-07-21 07:51:27', '2023-09-26 16:59:58', NULL),
(3, '3', 1, '/storage/clientes/clientes_logo3.svg', '2023-07-21 07:52:45', '2023-07-21 07:52:45', NULL),
(4, '4', 1, '/storage/clientes/clientes_logo4.svg', '2023-07-21 07:52:55', '2023-07-21 07:52:55', NULL),
(5, '5', 1, '/storage/clientes/clientes_logo5.svg', '2023-07-21 07:53:03', '2023-07-21 07:53:03', NULL),
(6, '6', 1, '/storage/clientes/clientes_logo6.svg', '2023-07-21 07:53:13', '2023-07-21 07:53:13', NULL),
(7, '7', 1, '/storage/clientes/clientes_logo8.svg', '2023-07-21 07:53:35', '2023-07-21 07:53:35', NULL),
(8, '8', 1, '/storage/clientes/clientes_logo9.svg', '2023-07-21 07:53:45', '2023-07-21 07:53:45', NULL),
(9, '10', 1, '/storage/clientes/clientes_logo10.svg', '2023-07-21 07:53:57', '2023-07-21 07:53:58', NULL),
(10, '10', 1, '/storage/clientes/clientes_logo11.svg', '2023-07-21 07:54:17', '2023-07-21 07:59:10', NULL),
(11, '11', 1, '/storage/multimedia/clientes/1695747043_clientes_Logo PACT@2x.png', '2023-07-21 07:59:34', '2023-09-26 16:50:43', NULL),
(12, '12', 1, '/storage/clientes/clientes_asset3.svg', '2023-07-21 07:59:49', '2023-07-21 07:59:49', NULL),
(13, '13', 1, '/storage/multimedia/clientes/1695747136_clientes_Logo GIZ@2x.png', '2023-07-21 08:00:31', '2023-09-26 16:52:16', NULL),
(14, '14', 1, '/storage/clientes/clientes_asset4.svg', '2023-07-21 08:01:07', '2023-07-21 08:01:07', NULL),
(15, '15', 1, '/storage/clientes/clientes_asset5.svg', '2023-07-21 08:01:17', '2023-07-21 08:01:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` bigint(20) NOT NULL,
  `id_cards` bigint(20) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `id_cards`, `titulo`, `descripcion`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 3, 'ESTRATEGIA DE NEGOCIO', '<ul>\r\n<li>Definici&oacute;n de propuesta de valor</li>\r\n<li>Dise&ntilde;o de servicios</li>\r\n<li>Modelos de negocio</li>\r\n<li>Formulaci&oacute;n de OKRs</li>\r\n</ul>', '/storage/_contenidos/1692126871_negocio.jpg', 1, '2023-08-15 19:05:28', '2023-08-15 19:14:31'),
(2, 3, 'ESTRATEGIA DE COMUNICACIÓN', '<ul>\r\n<li>Entendimiento de audiencia</li>\r\n<li>Pilares de comunicaci&oacute;n</li>\r\n<li>Estrategia de contenido</li>\r\n<li>Plan de distribuci&oacute;n</li>\r\n</ul>', '/storage/_contenidos/1692127228_comunica.jpg', 2, '2023-08-15 19:20:28', '2023-08-16 04:42:44'),
(3, 3, 'ESTRATEGIA DE MARCA', '<ul>\r\n<li>Posicionamiento de marca</li>\r\n<li>Arquitectura de marca</li>\r\n<li>Naming</li>\r\n<li>Experiencia de marca</li>\r\n</ul>', '/storage/_contenidos/1692127249_estmarca.jpg', 3, '2023-08-15 19:20:49', '2023-08-15 19:20:49'),
(4, 4, 'BRANDING', '<ul>\r\n<li>Identidad visual</li>\r\n<li>Despliegue de marca</li>\r\n<li>Piezas gr&aacute;ficas</li>\r\n<li>Sistemas de dise&ntilde;o</li>\r\n</ul>', '/storage/_contenidos/1692127896_marca.png', 1, '2023-08-15 19:31:36', '2023-09-19 14:22:45'),
(5, 4, 'DISEÑO WEB', '<ul>\r\n<li>Landings</li>\r\n<li>Arquitectura web</li>\r\n<li>Kits UI</li>\r\n<li>Prototipado</li>\r\n</ul>', '/storage/_contenidos/1692127922_dweb.png', 2, '2023-08-15 19:32:02', '2023-08-15 19:32:02'),
(6, 4, 'POP', '<ul>\r\n<li>Merch</li>\r\n<li>Vallas publicitarias</li>\r\n<li>Visual merchandising</li>\r\n<li>Stands comerciales</li>\r\n</ul>', '/storage/_contenidos/1692821741_pop.jpg', 3, '2023-08-15 19:32:19', '2023-08-23 20:15:41'),
(7, 4, 'ESTRATEGIA', '<ul>\r\n<li>Estrategia de marca</li>\r\n<li>Arquitectura de marca</li>\r\n<li>Talleres de alineaci&oacute;n</li>\r\n<li>Conceptualizaci&oacute;n de campa&ntilde;as</li>\r\n</ul>', '/storage/_contenidos/1692127958_estrategia.png', 4, '2023-08-15 19:32:38', '2023-08-16 04:46:02'),
(8, 5, 'DOCUMENTALES', '<p>Investigamos, escribimos, producimos y editamos documentales de la m&aacute;s alta calidad para marcas que quieren&nbsp;<strong>contar historias y despertar emociones.</strong></p>', '/storage/_contenidos/1692128681_docs.jpg', 1, '2023-08-15 19:44:41', '2023-08-15 19:44:41'),
(9, 5, 'VIDEO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Nos inventamos historias incre&iacute;bles y llevamos las ideas de tu equipo hacia un producto que no solo&nbsp;<strong>emocione</strong>&nbsp;sino que&nbsp;<strong>cumpla los objetivos</strong> de tu marca.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128697_video.jpg', 2, '2023-08-15 19:44:57', '2023-08-15 19:44:57'),
(10, 5, 'CUBRIMIENTOS', '<p>&iquest;Qui&eacute;n dijo que un cubrimiento es aburrido? tenemos las mejores ideas para producir memorias audiovisuales fieles al&nbsp;<strong>esp&iacute;ritu de tu empresa.</strong></p>', '/storage/_contenidos/1692128713_cubrimien.jpg', 3, '2023-08-15 19:45:13', '2023-08-15 19:45:13'),
(11, 5, 'VIDEO PRODUCTO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p><strong>Destacamos lo mejor</strong> de tu producto para crear piezas que valga la pena repetir una y otra vez.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128730_producto.jpg', 4, '2023-08-15 19:45:30', '2023-08-15 19:45:30'),
(12, 5, 'INSTITUCIONAL', '<div class=\"container_page px-4  mb-lg-5 services_list\">\r\n<div class=\"row pt-5 justify-content-center\">\r\n<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Creamos contenido de valor para tu empresa, alineado con tu estrategia. Creamos comunidad,&nbsp;<strong>potenciamos las comunicaciones</strong>&nbsp;internas y externas, y construimos&nbsp;<strong>mensajes efectivos</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128745_institucion.jpg', 5, '2023-08-15 19:45:45', '2023-08-15 19:45:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `descripcion`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'MARIANA MONTOYA', 'CEO/FOUNDER', '/storage/multimedia/1692832762_equipo_img_profile1.png', 1, '2023-07-21 05:59:49', '2023-08-23 23:19:22'),
(2, 'EMILIO CORTÉS', 'CONTENT CREATOR', '/storage/multimedia/1695747953_equipo_Silueteado Emilio.png', 6, '2023-07-21 06:00:53', '2023-09-26 17:06:15'),
(3, 'SEBASTIÁN VITERI', 'SENIOR GRAPHIC DESIGNER', '/storage/multimedia/1692832806_equipo_img_profile3.png', 3, '2023-07-21 06:16:33', '2023-08-23 23:20:06'),
(4, 'DAVID RIVEROS', 'SENIOR CONTENT CREATOR', '/storage/multimedia/1692832823_equipo_img_profile4.png', 4, '2023-07-21 06:16:57', '2023-08-23 23:20:23'),
(5, 'CATALINA PÉREZ', 'STRATEGY LEAD', '/storage/multimedia/1692832843_equipo_img_profile5.png', 2, '2023-07-21 06:17:15', '2023-09-26 17:03:25'),
(6, 'CINDY PALACIO', 'GRAPHIC DESIGNER', '/storage/multimedia/1692832856_equipo_img_profile6.png', 5, '2023-07-21 06:18:25', '2023-09-26 17:06:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` bigint(20) NOT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `identificador` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ubicacion`, `identificador`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'contenidos', 'img_left', '/storage/imagenes/1692821678_grupocon1.jpg', '2023-08-15 21:27:49', '2023-08-23 20:14:38', NULL),
(2, 'contenidos', 'img_der', '/storage/imagenes/1692821694_grupocon2.jpg', '2023-08-15 23:06:04', '2023-08-23 20:14:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_branding`
--

CREATE TABLE `imagenes_branding` (
  `id` bigint(20) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `orden` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes_branding`
--

INSERT INTO `imagenes_branding` (`id`, `descripcion`, `clase`, `orden`, `imagen`, `created_at`, `updated_at`) VALUES
(1, '<h5>TESSERA:</h5>\r\n<p>Estrategia de negocio, branding y desarrollo de contenido.</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n publicitaria.</p>\r\n<p>Dise&ntilde;amos la estrategia de negocio de la marca, como norte para la creaci&oacute;n de una identidad visual coherente con su prop&oacute;sito y visi&oacute;n: Materializar las ideas que tocan la vida de sus clientes.</p>\r\n<p><span style=\"text-decoration: underline;\">Bogot&aacute;, Colombia</span></p>', 'i1', '1', '/storage/imagenes/1692159654_padd_sec1[1].png', '2023-08-16 03:52:14', '2023-09-19 15:12:33'),
(2, '<h5>ORIGO PRODUCTIONS</h5>\r\n<p>Estrategia de negocio, naming &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n de eventos culturales.</p>\r\n<p>Dise&ntilde;amos su propuesta de valor e identidad de marca. Priorizamos sus audiencias y entregamos un universo visual que potenciara sus objetivos de negocio y resonara con su prop&oacute;sito:&nbsp;<em>To bring happiness by connecting people with their roots.</em></p>\r\n<p><span style=\"text-decoration: underline;\">Chicago, ILL</span></p>', 'i2', '2', '/storage/imagenes/1692159682_padd_sec3[1].jpg', '2023-08-16 04:04:04', '2023-09-19 15:42:31'),
(3, '<h5>MIM (Make it matter fest)</h5>\r\n<p>Indentidad Visual</p>\r\n<p>Dise&ntilde;amos un sistema visual bajo la sombrilla de la marca de Saz&uacute; para el desarrollo de eventos para compartir, aprender y conectar con nuevas ideas de dise&ntilde;o y conocimiento empresarial.</p>\r\n<p><span style=\"text-decoration: underline;\">Colombia</span></p>', 'i1', '3', '/storage/imagenes/1695139709_PANELISTAS_MIM-02.jpg', '2023-08-16 04:04:36', '2023-09-19 16:08:29'),
(4, '<h5>CONVERS&Aacute;POLIS</h5>\r\n<p>Estrategia de marca &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Difusi&oacute;n de medios para la sostenibilidad GIZ.</p>\r\n<p>Dise&ntilde;amos la estrategia de la marca por medio de talleres de cocreaci&oacute;n con el equipo de la GIZ. Desarrollamos su identidad visual y elaboramos elementos interactivos a partir de bloques y figuras personalizadas.</p>\r\n<p><span style=\"text-decoration: underline;\">Bogot&aacute;, Colombia</span></p>', 'i1', '4', '/storage/imagenes/1692159733_padd_sec6[1].jpg', '2023-08-16 04:05:05', '2023-09-19 15:58:43'),
(5, '<h5>TRI LATAM</h5>\r\n<p>Estrategia de marca &amp; Branding</p>\r\n<h5>Industria:</h5>\r\n<p>Consultor&iacute;a Organizacional</p>\r\n<p>Definimos una estrategia de marca s&oacute;lida que reflejara la esencia &uacute;nica de la empresa. Redise&ntilde;amos su identidad visual, aline&aacute;ndola a su prop&oacute;sito y objetivos de negocio.</p>\r\n<p><span style=\"text-decoration: underline;\">Colombia</span></p>', 'i1', '5', '/storage/imagenes/1695140762_Carrusel TRI v2-01.jpg', '2023-08-16 04:07:19', '2023-09-19 16:26:02'),
(6, '<h5>ERNESTO</h5>\r\n<p>Estrategia de marca, Naming, Branding</p>\r\n<h5>Industria:</h5>\r\n<p>Restaurantes</p>\r\n<h5>Lugar:</h5>\r\n<p>Bogot&aacute;, Colombia</p>\r\n<p>Dise&ntilde;amos una estrategia de marca para crear una identidad visual poderosa y coherente con los objetivos de negocio de Ernesto, permiti&eacute;ndonos llegar m&aacute;s efectivamente al &ldquo;Top of mind&rdquo; de la audiencia y posicionarnos asertivamente.</p>', 'i3', '6', '/storage/imagenes/1692159783_padd_sec5[1].jpg', '2023-08-16 04:07:47', '2023-08-16 04:23:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `id` bigint(20) NOT NULL,
  `public_key` varchar(255) DEFAULT NULL,
  `secret_key` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`id`, `public_key`, `secret_key`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 'a1dfcb610179145614f4843fb5e01a74', '39a4b7bb742597c3a6066c6a56f97727', 'acruz960720@gmail.com', 'cruzjonathan960720@gmail.com', NULL, '2023-07-21 07:16:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` bigint(20) NOT NULL,
  `id_casos` bigint(20) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `texto` mediumtext DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `id_casos`, `titulo`, `orden`, `texto`, `img`, `created_at`, `updated_at`) VALUES
(2, 1, 'ESTRATEGIA', 1, '<p>Partimos de un diagn&oacute;stico para entender <strong>el contexto laboral, las necesidades, dolores y motivaciones</strong> tanto del personal administrativo como de los operarios. A partir de estos hallazgos, trabajamos en sesiones de an&aacute;lisis que nos permitieron <strong>encontrar patrones de comportamiento</strong> para identificar las principales necesidades de los trabajadores y as&iacute; llegar a una estrategia de comunicaci&oacute;n que impacte<strong> la cultura de la oraganizaci&oacute;n.</strong></p>', '/storage/procesos/1692144470_estrategiatek.jpg', '2023-08-15 23:56:22', '2023-09-26 16:39:25'),
(3, 1, 'UNIVERSO VISUAL', 2, '<p>A partir de los hallazgos y mensajes identificados, desarrollamos un sistema gr&aacute;fico para la campa&ntilde;a, buscando&nbsp;<strong>llamar la atenci&oacute;n del p&uacute;blico y as&iacute; generar mayor impacto entre los trabajadores.</strong> Esto a trav&eacute;s del dise&ntilde;o gr&aacute;fico, implementaci&oacute;n en planta f&iacute;sica y se&ntilde;alizaci&oacute;n de los espacios.</p>', '/storage/procesos/1692821525_visualtek.jpg', '2023-08-16 00:16:16', '2023-09-26 16:34:21'),
(4, 1, 'GESTIÓN Y PRODUCCIÓN DE CONTENIDO', 3, '<p>A trav&eacute;s de la creaci&oacute;n de contenido gr&aacute;fico, audiovisual y editorial, desarrollamos productos para miembros de la empresa, <strong>logrando as&iacute; una apropiaci&oacute;n de buenas pr&aacute;cticas y como consecuencia, menos accidentes.</strong></p>\r\n<p><br>El prop&oacute;sito de la campa&ntilde;a se bas&oacute; en <strong>sensibilizar y generar cambios</strong> en la audiencia desde la emoci&oacute;n, el aprendizaje y la concientizaci&oacute;n.</p>', '/storage/procesos/1692821545_producctek.jpg', '2023-08-16 00:19:33', '2023-09-26 16:44:40'),
(5, 1, 'INTERVENCIÓN DE ESPACIOS', 4, '<p>Conocer a fondo las din&aacute;micas, los espacios y la cultura empresarial frente a la seguridad, para encontrar oportunidades de implementar la se&ntilde;alizaci&oacute;n y as&iacute; optimizar el impacto de la campa&ntilde;a.&nbsp;Dise&ntilde;amos, produjimos e instalamos piezas bidimensionales&nbsp;<strong>para generar cambios e impacto en los espacios de trabajo,</strong> redise&ntilde;ando tambi&eacute;n algunas zonas clave al interior de las plantas.&nbsp;</p>', '/storage/procesos/1692821577_espacitek.jpg', '2023-08-16 00:20:06', '2023-08-23 20:12:57'),
(6, 1, 'EVENTO DE LANZAMIENTO CAMPAÑA', 5, '<p>Planeamos y ejecutamos el d&iacute;a cero de la campa&ntilde;a de comunicaci&oacute;n, creando una experiencia memorable para los m&aacute;s de 2000 empleados de las plantas de producci&oacute;n. Por medio de una actividad l&uacute;dica introdujimos al equipo a los <strong>conceptos claves de la campa&ntilde;a de seguridad premiando su compromiso y actitud positiva.</strong></p>', '/storage/procesos/1692821597_campatek.jpg', '2023-08-16 00:20:32', '2023-09-26 17:10:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `enlace` varchar(255) DEFAULT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `titulo`, `enlace`, `clase`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Instagram', 'https://www.instagram.com/sazu_lab/', 'icon-instagram', '2023-07-24 20:48:17', '2023-07-24 20:48:17', NULL),
(2, 'Tiktok', 'https://www.tiktok.com/@sazulab', 'icon-tiktok', '2023-07-24 20:48:29', '2023-09-26 16:25:03', NULL),
(3, 'Linkedin', 'https://www.linkedin.com/company/sazu', 'icon-linkedin', '2023-07-24 20:48:46', '2023-07-24 20:48:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` bigint(20) NOT NULL,
  `id_casos` bigint(20) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `id_casos`, `orden`, `estado`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 1, '82 %', 'En reconocimiento sobre la campaña implementada.', '2023-07-25 05:16:07', '2023-07-25 05:16:07'),
(3, 1, 3, 1, '3 meses', 'Entre Bogotá y Cartagena sin un solo accidente en planta.', '2023-07-25 05:16:22', '2023-07-25 05:16:22'),
(94, 2, 1, 1, '$ 10.2 M', 'Gestionamos “Free-press” en medios digitales por valores equivalentes a más de 10 millones de pesos si hubieran sido pagos.', '2023-07-25 05:19:15', '2023-07-25 05:19:15'),
(95, 2, 2, 1, '8 talleres', 'Planeamos y lideramos con éxito más de 8 talleres de co-creación con socios estratégicos de la organización.', '2023-07-25 05:19:30', '2023-07-25 05:19:30'),
(96, 2, 3, 1, '78,000', 'Personas alcanzadas a través de “Free-press” en medios impresos, un equivalente a más de 30 millones de pesos si hubieran sido pagos.', '2023-07-25 05:19:44', '2023-07-25 05:19:44'),
(97, 2, 4, 1, '3 campañas', 'Creamos 3 campañas de comunicación orientadas a potenciar la protección de derechos de la población migrante venezolana en Colombia y mejorar la cohesión comunitaria y seguridad ciudadana.', '2023-07-25 05:19:58', '2023-07-25 05:19:58'),
(98, 1, 4, 1, '32%', 'Reducción de accidentalidad', '2023-08-22 21:39:36', '2023-09-22 14:13:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'superadmin', '2023-01-01 00:00:00', '2023-01-01 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` bigint(20) NOT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `identificador` varchar(255) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(18, 'estrategia', 'rueda', '<ul>\r\n<li>\r\n<h5>ENTENDER</h5>\r\n<p>Investigamos y escuchamos</p>\r\n</li>\r\n<li>\r\n<h5>ANALIZAR</h5>\r\n<p>Encontramos oportunidades</p>\r\n</li>\r\n<li>\r\n<h5>IDEAR</h5>\r\n<p>Generamos ideas</p>\r\n</li>\r\n<li>\r\n<h5>DEFINIR</h5>\r\n<p>Priorizamos y marcamos un <br>plan de acci&oacute;n</p>\r\n</li>\r\n<li>\r\n<h5>IMPLEMENTAR</h5>\r\n<p>Llevamos a la vida el plan</p>\r\n</li>\r\n</ul>', '2023-08-14 15:36:02', '2023-08-22 21:50:57', NULL),
(23, 'contenido', 'texto_superior', '<h2><em>Producimos</em></h2>\r\n<h1>CONTENIDO</h1>\r\n<h2>que construye<strong style=\"color: #5b4cff;\"> <em>relaciones reales</em></strong> <br>con tu audiencia, promoviendo <br>el <strong style=\"color: #5b4cff;\"> <em>crecimiento sostenible.</em></strong></h2>', '2023-08-15 21:17:29', '2023-08-15 21:17:29', NULL),
(26, 'contenido', 'marquee', '<h1>DOCUMENTALES - COMERCIALES - CAMPA&Ntilde;AS - RRSS - VIDEO/FOTO PRODUCTO - CASOS DE &Eacute;XITO - CORTOMETRAJES - ANIMACIONES -&nbsp;</h1>', '2023-08-15 21:33:58', '2023-08-15 21:33:58', NULL),
(27, 'contenido', 'vid1', '<h2 class=\"mb-0\"><em>Videos</em></h2>\r\n<p>que emocionan, enganchan <br>y &iexcl;llevan a la acci&oacute;n!</p>', '2023-08-15 21:36:55', '2023-08-15 21:36:55', NULL),
(28, 'contenido', 'textvid1', '<h6 class=\"to_viewleft to_viewReset\">Storytelling</h6>', '2023-08-15 21:38:59', '2023-08-15 21:38:59', NULL),
(29, 'contenido', 'textvid2', '<h6 class=\"to_viewleft to_viewReset\">Comerciales</h6>\r\n<h6 class=\"to_viewleft to_viewReset\">Casos de &eacute;xito</h6>', '2023-08-15 21:40:50', '2023-08-15 21:40:50', NULL),
(30, 'contenido', 'textvid3', '<h6 class=\"to_viewleft to_viewReset\">Animaci&oacute;n</h6>\r\n<h6 class=\"to_viewleft to_viewReset\">Producci&oacute;n</h6>', '2023-08-15 21:41:49', '2023-08-15 21:41:49', NULL),
(31, 'contenido', 'vid2', '<h2>Guiones</h2>\r\n<p>que le dan vida a la ideas</p>', '2023-08-15 21:42:53', '2023-08-15 21:42:53', NULL),
(32, 'contenido', 'vid3', '<h2>Contenido</h2>\r\n<p>para redes sociales que llega donde tiene que llegar</p>', '2023-08-15 21:45:04', '2023-08-15 21:45:04', NULL),
(33, 'contenido', 'vid4', '<h2>Documentales</h2>\r\n<p>que despiertan emociones</p>', '2023-08-15 21:45:18', '2023-08-15 21:45:18', NULL),
(34, 'contenido', 'vid5', '<h2>Mensajes</h2>\r\n<p>poderosos que tocan fibras y son efectivos</p>', '2023-08-15 21:45:32', '2023-08-15 21:45:32', NULL),
(35, 'contenido', 'titulo2', '<h2>DETR&Aacute;S <strong>DE C&Aacute;MARAS</strong></h2>', '2023-08-15 21:46:48', '2023-08-15 21:48:11', NULL),
(36, 'branding', 'texto_superior', '<h2><em>Dise&ntilde;amos</em></h2>\r\n<h1>LA ESTRATEGIA Y LA IDENTIDAD VISUAL</h1>\r\n<h2><em>de marcas excepcionales,&nbsp;<br>para que sean inolvidables.</em></h2>', '2023-08-16 00:41:22', '2023-09-19 14:28:48', NULL),
(37, 'branding', 'marquee', '<h1>IDENTIDAD DE MARCA&nbsp;- ESTRATEGIA DE MARCA -&nbsp;BRANDING - PACKAGING - NAMING - MERCH - REBRANDING -&nbsp;</h1>', '2023-08-16 00:42:49', '2023-09-19 14:30:22', NULL),
(38, 'branding', 'textlog1', '<h4>Estrategia de Negocio e Identidad Visual</h4>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n publicitaria.</p>\r\n<h5>Lugar:</h5>\r\n<p>Bogot&aacute;, Colombia</p>\r\n<p>Dise&ntilde;amos la estrategia de negocio de la marca, como norte para la creaci&oacute;n de una identidad visual coherente con su prop&oacute;sito y visi&oacute;n.</p>', '2023-08-16 00:44:24', '2023-09-19 14:51:08', NULL),
(39, 'branding', 'textlog2', '<h5>ORIGO PRODUCTIONS</h5>\r\n<p>Estrategia de marca, Naming &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n de eventos culturales.</p>\r\n<h5>Lugar:</h5>\r\n<p>Chicago, ILL</p>\r\n<p>Prop&oacute;sito de Origo; traer felicidad conectando a las personas con sus ra&iacute;ces. Dise&ntilde;amos la identidad visual, priorizamos audiencias y creamos un universo visual que los ayude a alcanzar sus obejtivos de negocio.&nbsp;</p>', '2023-08-16 00:45:14', '2023-09-19 15:01:45', NULL),
(40, 'branding', 'textlog3', '<h5>CCD</h5>\r\n<p>Estrategia de comunicaci&oacute;n</p>\r\n<h5>Industria:</h5>\r\n<p>ONG</p>\r\n<h5>Lugar:</h5>\r\n<p>Colombia</p>\r\n<p>Dise&ntilde;amos una estrategia de comunicaci&oacute;n para visibilizar los derechos de la poblaci&oacute;n migrante venezolana y promover su integraci&oacute;n e inclusi&oacute;n en Colombia.</p>', '2023-08-16 00:45:44', '2023-08-16 00:45:44', NULL),
(41, 'branding', 'textlog4', '<h5>CCD</h5>\r\n<p>Estrategia de comunicaci&oacute;n</p>\r\n<h5>Industria:</h5>\r\n<p>ONG</p>\r\n<h5>Lugar:</h5>\r\n<p>Colombia</p>\r\n<p>Dise&ntilde;amos una estrategia de comunicaci&oacute;n para visibilizar los derechos de la poblaci&oacute;n migrante venezolana y promover su integraci&oacute;n e inclusi&oacute;n en Colombia.</p>', '2023-08-16 00:46:15', '2023-08-16 00:46:15', NULL),
(42, 'branding', 'textlog5', '<h5>ORIGO PRODUCTIONS</h5>\r\n<p>Estrategia de marca, Naming &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n de eventos culturales.</p>\r\n<h5>Lugar:</h5>\r\n<p>Chicago, ILL</p>\r\n<p>Ayudamos a encontrar el prop&oacute;sito de Origo, traer felicidad conectando a las personas con sus ra&iacute;ces. Dise&ntilde;amos la identidad visual, la cual deb&iacute;a apelar al p&uacute;blico latino, usando los colores primarios como simbol&iacute;smo del origen.</p>', '2023-08-16 00:47:03', '2023-08-16 00:47:03', NULL),
(43, 'branding', 'textlog6', '<h5>CONVERS&Aacute;POLIS</h5>\r\n<p>Estrategia de marca &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Difusi&oacute;n de medios para la sostenibilidad</p>\r\n<h5>Lugar:</h5>\r\n<p>Bogot&aacute;, Colombia</p>\r\n<p>Planteamos la estrategia de marca a seguir por medio de talleres y dise&ntilde;amos a partir de esta una identidad visual. Se le dio una personalidad amigable para las tem&aacute;ticas que distribuyen y se elabor&oacute; una ciudad hecha de bloques que representa el poder que todos tenemos para generar cambio.</p>', '2023-08-16 00:47:34', '2023-08-16 00:47:34', NULL),
(44, 'branding', 'titulo1', '<h2>PROCESO DE <strong>IDENTIDAD</strong></h2>\r\n<h4><em>&iquest;Qu&eacute; puedes esperar en un <br>proyecto como este?</em></h4>', '2023-08-16 00:53:59', '2023-08-16 00:53:59', NULL),
(45, 'branding', 'text1', '<h2>ENTENDIMIENTO</h2>\r\n<p>Entendemos el negocio a profundidad. Investigamos sus audiencias, entendemos las necesidades de negocio y analizamos el mercado para poder tomar decisiones estrat&eacute;gicas.</p>', '2023-08-16 01:07:09', '2023-08-16 01:07:09', NULL),
(46, 'branding', 'text2', '<h2>ESTRATEGIA</h2>\r\n<p>Facilitamos la toma de decisiones de estrategia de marca, ayudando a nuestros clientes a definir una posici&oacute;n &uacute;nica y valiosa en el mercado que les permita diferenciarse y potenciar su oferta de valor.</p>', '2023-08-16 01:07:53', '2023-08-16 01:07:53', NULL),
(47, 'branding', 'text3', '<h2>DISE&Ntilde;O</h2>\r\n<p>Dise&ntilde;amos una identidad visual poderosa; coherente con la estrategia y que se adapte a los espacios donde vivir&aacute; la marca.</p>', '2023-08-16 01:08:33', '2023-08-16 01:08:33', NULL),
(48, 'branding', 'text4', '<h2>IMPLEMENTACI&Oacute;N</h2>\r\n<p>Planeamos y ejecutamos el despliegue de la marca. Priorizamos canales, mensajes y contenido, para construir el posicionamiento estrat&eacute;gico deseado. Somos tus aliados en el proceso de desarrollar una marca potente y coherente.</p>', '2023-08-16 01:08:59', '2023-08-16 01:12:33', NULL),
(49, 'contenido', 'video', '<div class=\"c_video\"><iframe title=\"Porkcolombia\" src=\"https://www.youtube.com/embed/poKxWOP3vnE\" width=\"552\" height=\"982\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-30 16:28:51', '2023-08-30 16:28:51', NULL),
(50, 'contenido', 'video2', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/mX0oY4Ewcv0\" width=\"560\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-30 16:29:25', '2023-08-30 16:29:25', NULL),
(51, 'contenido', 'video3', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/XC5BA7xAzQk\" width=\"552\" height=\"982\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-30 16:29:41', '2023-08-30 16:29:54', NULL),
(52, 'contenido', 'video4', '<div class=\"c_video\"><iframe title=\"DEUNA I Checkout\" src=\"https://www.youtube.com/embed/njM_Rs-DAMs\" width=\"552\" height=\"982\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-30 16:30:15', '2023-08-30 16:30:15', NULL),
(53, 'contenido', 'video5', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/ZiUZ5fkuVkY\" width=\"560\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-30 16:30:36', '2023-08-30 16:30:36', NULL),
(54, 'contenido', 'video6', '<div class=\"c_video\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/2kYFq7ciOd8\" width=\"560\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></div>', '2023-08-30 16:30:57', '2023-08-30 16:30:57', NULL),
(56, 'home', 'footerc', '<h5>CONT&Aacute;CTANOS</h5>\r\n<p>rn</p>\r\n<p>Tel: 3006568714 <br>Mail: <a href=\"mailto:Comercial@sazulab.com\">mariana@sazulab.com</a><br>Dir: Cra 10 # 96 - 79</p>', '2023-08-30 16:32:46', '2023-08-30 16:32:46', NULL),
(57, 'home', 'footers', '<h5>SERVICIOS</h5>\r\n<p>rn</p>\r\n<ul>\r\n<li>rn</li>\r\n<li><a href=\"{{ url(\'/estrategia\') }}\">Estrategia</a></li>\r\n<li>rn</li>\r\n<li><a href=\"{{ url(\'/contenido\') }}\">Contenidos</a></li>\r\n<li>rn</li>\r\n<li><a href=\"{{ url(\'/branding\') }}\">Identidad Visual</a></li>\r\n<li>rn</li>\r\n</ul>', '2023-08-30 16:33:11', '2023-08-30 16:33:11', NULL),
(58, 'home', 'footerbtn', '<p>Cont&aacute;ctanos</p>', '2023-08-30 16:33:37', '2023-09-22 14:09:15', NULL),
(59, 'home', 'mision', '<h4>NUESTRA MISI&Oacute;N</h4>\r\n<p>rn</p>\r\n<h5>Crear una <strong style=\"color: #5b4cff;\">estrategia de comunicaci&oacute;n robusta,</strong> coherente y consistente a trav&eacute;s de un <strong style=\"color: #5b4cff;\">entendimiento profundo de las necesidades y aspiraciones</strong> de los j&oacute;venes talentos tech en Colombia, para crear una oferta de valor atractiva como marca empleadora por medio de la <strong style=\"color: #5b4cff;\">implementaci&oacute;n de contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicaci&oacute;n establecidos.&nbsp;</h5>\r\n<p>rn</p>\r\n<p>&nbsp;</p>', '2023-08-30 16:34:08', '2023-08-30 16:34:08', NULL),
(60, 'contacto', 'texto_superior', '<h1>LET&acute;S MAKE IT <strong>HAPPEN!</strong></h1>\r\n<h5>Completa la siguiente informaci&oacute;n para empezar:</h5>', '2023-08-30 16:37:16', '2023-09-26 16:25:24', NULL),
(61, 'contacto', 'texto_superior1', '<h6>LL&Aacute;MANOS</h6>\r\n<p>Ya sea para agendar una cita o conocer m&aacute;s sobre nosotros ll&aacute;manos al +573006568714.</p>', '2023-08-30 16:37:41', '2023-09-26 16:26:37', NULL),
(62, 'contacto', 'texto_superior2', '<h6>VIS&Iacute;TANOS</h6>\r\n<p>&iexcl;Nuestras puertas est&aacute;n abiertas! Conoce d&oacute;nde generamos ideas, planteamos estrategias, organizamos talleres y tomamos bastante caf&eacute;.</p>', '2023-08-30 16:38:01', '2023-09-26 16:26:56', NULL),
(63, 'contacto', 'texto_superior3', '<h6>CHAT</h6>\r\n<p>&iquest;Prefieres escribirnos? Puedes hacerlo a nuestro whatsapp.<strong> <a href=\"https://wa.me/573006568714\" target=\"_blank\" rel=\"noopener\">+57 3006568714&nbsp;</a></strong></p>', '2023-08-30 16:38:30', '2023-09-26 16:29:28', NULL),
(64, 'contacto', 'titulo', '<h2 class=\"bw font-weight-bold\">TRABAJEMOS <br>JUNTOS.</h2>', '2023-08-30 16:38:52', '2023-09-26 16:27:57', NULL),
(65, 'contenido', 'audiovisual', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/zs8YasF82Vs\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\">rn          </iframe></p>', '2023-08-30 16:40:44', '2023-08-30 16:40:44', NULL),
(66, 'contacto', 'titulo_formulario', '<h2><strong>CONT&Aacute;CTANOS</strong></h2>', '2023-11-16 13:56:45', '2023-11-16 13:56:45', NULL),
(67, 'contacto', 'nuestra_mision', '<h5>Crear una&nbsp;<strong style=\"color: #5b4cff;\">estrategia de comunicaci&oacute;n robusta,</strong> coherente y consistente a trav&eacute;s de un <strong style=\"color: #5b4cff;\">entendimiento profundo de las necesidades y aspiraciones</strong> de los j&oacute;venes talentos tech en Colombia, para crear una oferta de valor atractiva como marca empleadora por medio de la <strong style=\"color: #5b4cff;\">implementaci&oacute;n de contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicaci&oacute;n establecidos.&nbsp;</h5>', '2023-11-16 13:56:45', '2023-11-16 16:58:53', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `pass`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin editado', 'admin@homesas.co', 'f50184a7d5e6b76ae307aef5fb128db5', '2022-07-25 05:48:37', '2023-03-14 20:40:30', NULL),
(2, 'Admin', 'admin@sazulab.com', '25d55ad283aa400af464c76d713c07ad', '2022-07-25 05:48:37', '2023-07-24 16:56:30', NULL),
(3, 'admin@sazulab.com', 'admasdasdsdin@saasdasdzulab.com', '25d55ad283aa400af464c76d713c07ad', '2023-08-22 23:01:17', '2023-08-22 23:01:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_roles`
--

CREATE TABLE `usuarios_has_roles` (
  `id` bigint(20) NOT NULL,
  `usuarios_id` bigint(20) NOT NULL,
  `roles_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_has_roles`
--

INSERT INTO `usuarios_has_roles` (`id`, `usuarios_id`, `roles_id`) VALUES
(1, 1, 1),
(2, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_casos_cards1_idx` (`id_cards`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contenidos_cards1_idx` (`id_cards`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_branding`
--
ALTER TABLE `imagenes_branding`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_procesos_casos1_idx` (`id_casos`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_resultados_casos1_idx` (`id_casos`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuarios_has_roles_usuarios_idx` (`usuarios_id`),
  ADD KEY `fk_usuarios_has_roles_roles1_idx` (`roles_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `casos`
--
ALTER TABLE `casos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes_branding`
--
ALTER TABLE `imagenes_branding`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `parametros`
--
ALTER TABLE `parametros`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `fk_usuarios_has_roles_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_roles_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
