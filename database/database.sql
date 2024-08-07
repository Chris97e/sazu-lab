-- -------------------------------------------------------------
-- TablePlus 6.0.6(558)
--
-- https://tableplus.com/
--
-- Database: u968270747_sazulab_db
-- Generation Time: 2024-08-06 20:01:51.9810
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `cards`;
CREATE TABLE `cards` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `img_listado` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `es_caso` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `casos`;
CREATE TABLE `casos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_cards` bigint DEFAULT NULL,
  `imagen_background` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `header` mediumtext COLLATE utf8mb4_general_ci,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `texto` mediumtext COLLATE utf8mb4_general_ci,
  `col1` mediumtext COLLATE utf8mb4_general_ci,
  `col2` mediumtext COLLATE utf8mb4_general_ci,
  `col3` mediumtext COLLATE utf8mb4_general_ci,
  `contexto` mediumtext COLLATE utf8mb4_general_ci,
  `img_left` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_right` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `iframe` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `mision_img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mision_text` mediumtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`),
  KEY `fk_casos_cards1_idx` (`id_cards`),
  CONSTRAINT `fk_casos_cards1` FOREIGN KEY (`id_cards`) REFERENCES `cards` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `orden` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` tinyint DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `contenidos`;
CREATE TABLE `contenidos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_cards` bigint DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `imagen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contenidos_cards1_idx` (`id_cards`),
  CONSTRAINT `fk_contenidos_cards1` FOREIGN KEY (`id_cards`) REFERENCES `cards` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `identificador` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `imagenes_branding`;
CREATE TABLE `imagenes_branding` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `clase` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `parametros`;
CREATE TABLE `parametros` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `public_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `procesos`;
CREATE TABLE `procesos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_casos` bigint DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `texto` mediumtext COLLATE utf8mb4_general_ci,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_procesos_casos1_idx` (`id_casos`),
  CONSTRAINT `fk_procesos_casos1` FOREIGN KEY (`id_casos`) REFERENCES `casos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `redes`;
CREATE TABLE `redes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `clase` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `resultados`;
CREATE TABLE `resultados` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_casos` bigint DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `texto` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resultados_casos1_idx` (`id_casos`),
  CONSTRAINT `fk_resultados_casos1` FOREIGN KEY (`id_casos`) REFERENCES `casos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `rol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `textos`;
CREATE TABLE `textos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `identificador` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `ubicaciones`;
CREATE TABLE `ubicaciones` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `usuarios_has_roles`;
CREATE TABLE `usuarios_has_roles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usuarios_id` bigint NOT NULL,
  `roles_id` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_has_roles_usuarios_idx` (`usuarios_id`),
  KEY `fk_usuarios_has_roles_roles1_idx` (`roles_id`),
  CONSTRAINT `fk_usuarios_has_roles_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `fk_usuarios_has_roles_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cards` (`id`, `titulo`, `orden`, `url`, `descripcion`, `img_listado`, `estado`, `es_caso`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CASO TEKNIPLEX', 1, 'casetekniplex', 'Reducir la alta accidentalidad de uno de los líderes en fabricación de empaques por medio de una estrategia de comunicación.', '/storage/cards/1692820785_slider2.png', 1, 1, '2023-07-25 01:10:48', '2023-08-23 19:59:45', NULL),
(2, 'CASO CCD', 2, 'caseccd', 'Proteger los derechos de la población migrante venezolana y promover su integración e inclusión\r\n          social en el territorio colombiano.', '/storage/cards/1692820997_slider3.png', 1, 1, '2023-07-25 01:28:01', '2023-08-23 20:03:17', NULL),
(3, 'BOSQUENIBLE', 3, 'estrategia', 'Definir una propuesta de valor y un modelo de negocio viable en el ecosistema de consultoría en\r\n          sostenibilidad.', '/storage/cards/1692821113_slider4.jpg', 1, 1, '2023-07-25 01:28:51', '2024-02-13 16:07:47', NULL),
(4, 'ORIGO PRODUCTIONS', 4, 'branding', 'Estrategia de marca, proceso de naming y una identidad visual para una empresa de entretenimiento cultural.', '/storage/cards/1692821197_slider5.jpg', 1, 1, '2023-07-25 01:29:26', '2023-08-23 20:06:37', NULL),
(5, 'PERNOD RICARD', 5, 'estudio-creativo', 'Diseñamos experiencias a partir de productos para que acompañen al público en sus mejores momentos.', '/storage/cards/1692821218_slider6.jpg', 1, 1, '2023-07-25 01:30:27', '2023-08-23 20:06:58', NULL),
(8, 'CASO SCOTIATECH ', 6, 'scotiatech', 'Desarrollando y gestionando una marca empleadora que conquiste a los perfiles de tecnología en LATAM.', '/storage/cards/scoti_cover.png', 1, 1, '2023-07-25 01:10:48', '2023-08-23 19:59:45', NULL);

INSERT INTO `casos` (`id`, `id_cards`, `imagen_background`, `header`, `titulo`, `texto`, `col1`, `col2`, `col3`, `contexto`, `img_left`, `img_right`, `iframe`, `created_at`, `updated_at`, `mision_img`, `mision_text`) VALUES
(1, 1, '/storage/casos/1692822156_tekni.jpg', '<h2><span style=\"color: rgb(236, 240, 241);\"><em>Caso de estudio</em></span></h2>\r\n<h1><span style=\"color: rgb(236, 240, 241);\"><strong>TEKNIPLEX / PHOENIX</strong></span></h1>\r\n<h2><span style=\"color: rgb(236, 240, 241);\"><em>Reducir la alta accidentalidad de uno de los l&iacute;deres en fabricaci&oacute;n de empaques por medio de una estrategia de comunicaci&oacute;n.</em></span></h2>', 'TEKNIPLEX / PHOENIX', '<h2><em>Caso de estudio</em></h2>\r\n<h1><strong>TEKNIPLEX / PHOENIX</strong></h1>\r\n<h2><em>Reducir la alta accidentalidad de uno de los l&iacute;deres en fabricaci&oacute;n de empaques por medio de una estrategia de comunicaci&oacute;n.</em></h2>', '<p><img class=\"mb-3\" src=\"../../assets/front/images/phoenix.svg\" alt=\"\"> <img src=\"../../assets/front/images/teknilogo.svg\" alt=\"\" width=\"296\" height=\"59\"></p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Empaques</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Bogot&aacute; y Cartagena,<br>Colombia</p>', '<p>Estrategia de comunicaci&oacute;n <br>Creaci&oacute;n de campa&ntilde;a <br>Contenido audiovisual <br>Contenido gr&aacute;fico <br>Intervenci&oacute;n de espacios</p>', '<h4>CONTEXTO</h4>\r\n<h5>Tekniplex, l&iacute;der en el dise&ntilde;o, fabricaci&oacute;n y comercializaci&oacute;n de empaques en Am&eacute;rica ten&iacute;a un reto: <strong style=\"color: #5b4cff;\">reducir la accidentalidad en sus f&aacute;bricas de Colombia.</strong> <br><br>&iquest;La causa? Una alta rotaci&oacute;n del personal dificultaba la transmisi&oacute;n y apropiaci&oacute;n de cultura de seguridad y cuidado personal.</h5>', '/storage/casos/1692820863_grupo1tek.jpg', '/storage/casos/1692820863_grupo2tek.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/PF9pso5AAFk\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:17:06', '2023-08-23 20:22:36', '/assets/front/images/mision_img_3.svg', '<h5>Desarrollar una <strong style=\"color: #5b4cff;\">estrategia de comunicación</strong>  sólida y coherente basándonos en el contexto laboral y las necesidades de los empleados del Grupo Phoenix, con el objetivo de fomentar una cultura de seguridad y disminuir los incidentes en la planta de producción. </h5>'),
(2, 2, '/storage/casos/1692822220_ccd.jpg', '<h2><span style=\"color: rgb(86, 128, 222);\"><em>Caso de estudio</em></span></h2>\r\n<h1><span style=\"color: rgb(86, 128, 222);\"><strong>CCD/PACT</strong></span></h1>\r\n<h2><span style=\"color: rgb(86, 128, 222);\"><em>Visibilizar las iniciativas del programa Conectando Caminos por los Derechos de Pact. Para proteger los derechos de la poblaci&oacute;n migrante venezolana y promover su integraci&oacute;n e inclusi&oacute;n social en el territorio colombiano. </em></span></h2>', 'CCD/PACT', 'Visibilizar las iniciativas del programa Conectando Caminos por los Derechos de Pact. Para proteger los derechos de la población migrante venezolana y promover su integración e inclusión social en el territorio colombiano.', '<p><img src=\"../../assets/front/images/logopact.svg\" alt=\"\"></p>\r\n<div class=\"mt-3 c_resplandor_f\">\r\n<h5><strong>Estatus:</strong> Finalizado</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Organizaci&oacute;n internacional sin &aacute;nimo de lucro.</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Colombia</p>', '<h5>SERVICIO</h5>\r\n<p>Estrategia de comunicaci&oacute;n. <br>Producci&oacute;n de contenido <br>audiovisual y gr&aacute;fico. <br>Relaciones p&uacute;blicas. <br>Gesti&oacute;n en prensa.</p>', '<h4>CONTEXTO</h4>\r\n<h5>Conectando Caminos por los Derechos (CCD) es uno de los programas de PACT. Este busca <strong style=\"color: #5b4cff;\">proteger y prevenir la violaci&oacute;n de derechos humanos de la poblaci&oacute;n migrante venezolana en Colombia,</strong> as&iacute; como mejorar la cohesi&oacute;n comunitaria y la seguridad ciudadana. Entre las poblaciones priorizadas se encuentran, mujeres, ni&ntilde;as,&nbsp; ni&ntilde;os, j&oacute;venes y adolescentes&nbsp;y poblaci&oacute;n LGBTIQ+. <br><br>El programa opera en 11 municipios caracterizados por tener una amplia poblaci&oacute;n migrante, estos son: Riohacha, Maicao, C&uacute;cuta, Bucaramanga, Santa Marta, Cartagena, Barranquilla, Cali, Medell&iacute;n, Bogot&aacute;, Pasto e Ipiales.</h5>', '/storage/casos/1692822220_grupo3.jpg', '/storage/casos/1692822220_grupo4.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/hhbq2GJ-0z4\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:46:42', '2023-08-23 20:23:40', '/assets/front/images/mision_img_1.png', '<h5>Proponer <strong style=\"color: #5b4cff;\">una estrategia de comunicación y un plan de acción</strong> que acompañe la implementación de contenidos para <strong style=\"color: #5b4cff;\">potenciar</strong> la protección de derechos de la población migrante venezolana, <strong style=\"color: #5b4cff;\">la cohesión comunitaria y la seguridad ciudadana.</strong></h5>'),
(3, NULL, '/storage/casos/1700149213_bananas-01.jpg', '<h2><span style=\"color: rgb(236, 240, 241);\"><em>Caso de estudio de prueba</em></span></h2>\r\n<h1><span style=\"color: rgb(236, 240, 241); font-size: 18pt;\"><strong><span style=\"color: rgb(224, 62, 45);\">DEFECTO de prueba / EJEMPLO de </span>prueba</strong></span></h1>\r\n<h2><span style=\"color: rgb(236, 240, 241);\"><em>Texto de pruiebaLorem Ipsum es</em> simplemente <em>el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500.</em></span></h2>', 'DEFECTO / EJEMPLO', '<h2><em>Caso de estudio</em></h2>\r\n        <h1><strong>DEFECTO / EJEMPLO</strong></h1>\r\n        <h2><em>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</em></h2>', '<p><img class=\"mb-3\" src=\"../../assets/front/images/phoenix.svg\" alt=\"\"> <img src=\"../../assets/front/images/teknilogo.svg\" alt=\"\" width=\"296\" height=\"59\"></p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Empaques de prueba</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Bogot&aacute; y Cartagena,<br>Colombia, prueba</p>', '<p>Estrategia de comunicaci&oacute;n <br>Creaci&oacute;n de campa&ntilde;a <br>Contenido audiovisual <br>Contenido gr&aacute;fico <br>Intervenci&oacute;n de espacios prueba</p>', '<h4>CONTEXTO</h4>\r\n<h5>Prueba Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto:&nbsp;<strong style=\"color: #5b4cff;\">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</strong> <br><br>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</h5>', '/storage/casos/1700149213_imgleft.jpg', '/storage/casos/1700149213_imgrig.jpg', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/PF9pso5AAFk\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-11-16 15:36:48', '2023-11-16 15:40:13', '/assets/front/images/frase.svg', NULL),
(4, 3, '/storage/casos/1707164006_Fondo bosquenible.jpg', '<h2><span style=\"color: rgb(236, 240, 241);\"><em>Caso de estudio</em></span></h2>\r\n<h1><span style=\"color: rgb(236, 240, 241);\"><strong>Bosquenible</strong></span></h1>\r\n<h2 dir=\"ltr\"><span style=\"color: rgb(236, 240, 241); font-size: 14pt;\"><em>&iquest;Por qu&eacute; en Saz&uacute; no podemos empezar un proyecto de estrategia, sin antes tener una etapa de diagn&oacute;stico e investigaci&oacute;n?&nbsp;</em></span></h2>\r\n<h2 dir=\"ltr\"><span style=\"color: rgb(236, 240, 241); font-size: 14pt;\"><em>Hace unos meses Bosquenible lleg&oacute; a Saz&uacute; con el objetivo de conocer las necesidades y aspiraciones de las empresas colombianas para contar con un aliado que ofreciera servicios sostenibles y para crear una estrategia de comunicaci&oacute;n efectiva.</em></span></h2>', 'DEFECTO / EJEMPLO', '<h2><em>Caso de estudio</em></h2>\r\n        <h1><strong>DEFECTO / EJEMPLO</strong></h1>\r\n        <h2><em>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</em></h2>', '<p><strong><img src=\"data:image/png;base64,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\" width=\"198\" height=\"54\"></strong></p>\r\n<p>&nbsp;</p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Consultor&iacute;a / Sostenibilidad</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Colombia</p>', '<p>Investigaci&oacute;n&nbsp;<br>Estrategia de comunicaci&oacute;n<br>Contenido audiovisual <br>Contenido gr&aacute;fico</p>', '<h4>CONTEXTO</h4>\r\n<h5 dir=\"ltr\">Bosquenible llega a nosotros con la necesidad de plantear una estrategia de comunicaci&oacute;n que los ayude a <strong><span style=\"color: rgb(91, 76, 255);\">posicionarse y ser m&aacute;s asertivos a la hora de comunicarse con sus clientes</span></strong> potenciales.<strong id=\"docs-internal-guid-28300411-7fff-cc8c-698d-9f1b08b444b7\"></strong></h5>', '', '', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/1KTCSn0HjKI\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2024-01-29 19:08:41', '2024-02-13 16:07:01', '/assets/front/images/frase.svg', NULL),
(5, 8, '/storage/casos/cover_scotiabank.png', '<h2><span style=\"color: rgb(236, 240, 241);\"><em>Caso de estudio</em></span></h2>\r\n<h1><span style=\"color: rgb(236, 240, 241);\"><strong>SCOTIATECH / SCOTIABANK</strong></span></h1>\r\n<h2><span style=\"color: rgb(236, 240, 241);\"><em>Hacer de ScotiaTech una empresa atractiva y deseable para los perfiles Tech en Colombia.</em></span></h2>', 'SCOTIATECH / SCOTIABANK', '<h2><em>Caso de estudio</em></h2>\r\n<h1><strong>SCOTIATECH / SCOTIABANK</strong></h1>\r\n<h2><em>Hacer de ScotiaTech una empresa atractiva y deseable para los perfiles Tech en Colombia.</em></h2>', '<p><img class=\"mb-3\" src=\"../../assets/front/images/brand-scotia.png\" alt=\"\"> </p>\r\n<div class=\"mt-3 c_resplandor\">\r\n<h5><strong>Estatus:</strong> On going</h5>\r\n</div>', '<h5>INDUSTRIA</h5>\r\n<p>Fintech</p>\r\n<h5>UBICACI&Oacute;N</h5>\r\n<p>Bogot&aacute; y Cartagena,<br>Colombia</p>', '<p>Estrategia <br>Branding <br>Relacionamiento público <br>Creación de contenido <br>audiovisual y gráfico</p>', '<h4>CONTEXTO</h4>\r\n<h5>ScotiaTech es un hub de tecnología creado en 2018 y ubicado en Bogotá, Colombia, con el <strong style=\"color:#5B4CFF;\">propósito de brindar soporte y soluciones tecnológicas globales Scotiabank.</strong> <br><br> Además, ScotiaTech contribuye a la <strong style=\"color:#5B4CFF;\">empleabilidad diversa, bilingue y tecnológica de Colombia,</strong> por lo que llegó a competir en un entorno  y donde recientemente se han establecido más de 320 nuevas empresas tecnológicas, que buscan contratar el poco personal calificado del mercado laboral colombiano.</h4>', '/storage/casos/sco_left.png', '/storage/casos/sco_right.png', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/idVv-yXhZBM\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-25 04:17:06', '2023-08-23 20:22:36', '/assets/front/images/mision_img_2.png', '<h5>Crear una <strong style=\"color: #5b4cff;\">estrategia de comunicaci&oacute;n robusta,</strong> coherente y consistente a trav&eacute;s de un <strong style=\"color: #5b4cff;\">entendimiento profundo de las necesidades y aspiraciones</strong> de los j&oacute;venes talentos tech en Colombia, para crear una oferta de valor atractiva como marca empleadora por medio de la <strong style=\"color: #5b4cff;\">implementaci&oacute;n de contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicaci&oacute;n establecidos.&nbsp;</h5>');

INSERT INTO `clientes` (`id`, `orden`, `estado`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, '/storage/clientes/scotiabank.svg', '2023-07-21 07:49:02', '2024-06-19 18:56:27', NULL),
(2, '2', 1, '/storage/clientes/megalabs.svg', '2023-07-21 07:51:27', '2023-09-26 16:59:58', NULL),
(3, '12', 1, '/storage/clientes/falabella.svg', '2023-07-21 07:52:45', '2023-11-20 15:01:20', NULL),
(4, '4', 1, '/storage/clientes/boston.svg', '2023-07-21 07:52:55', '2023-07-21 07:52:55', NULL),
(5, '5', 1, '/storage/clientes/tekniplex.svg', '2023-07-21 07:53:03', '2023-07-21 07:53:03', NULL),
(6, '6', 1, '/storage/clientes/home.svg', '2023-07-21 07:53:13', '2023-07-21 07:53:13', NULL),
(7, '7', 1, '/storage/clientes/aristas.svg', '2023-07-21 07:53:35', '2023-07-21 07:53:35', NULL),
(8, '8', 1, '/storage/clientes/pola.svg', '2023-07-21 07:53:45', '2023-07-21 07:53:45', NULL),
(9, '10', 1, '/storage/clientes/colo.svg', '2023-07-21 07:53:57', '2023-11-20 15:35:43', NULL),
(10, '10', 1, '/storage/clientes/wbg.svg', '2023-07-21 07:54:17', '2023-11-20 14:22:17', NULL),
(11, '11', 1, '/storage/clientes/giz.svg', '2023-07-21 07:59:34', '2023-11-20 14:27:02', NULL),
(12, '3', 1, '/storage/clientes/zip_pak.svg', '2023-07-21 07:59:49', '2023-11-20 15:01:07', NULL),
(13, '13', 1, '/storage/clientes/flormorado.svg', '2023-07-21 08:00:31', '2023-11-20 14:15:15', NULL),
(14, '14', 1, '/storage/clientes/pact.svg', '2023-07-21 08:01:07', '2023-07-21 08:01:07', NULL),
(15, '15', 1, '/storage/clientes/naos.svg', '2023-07-21 08:01:17', '2023-07-21 08:01:17', NULL);

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
(10, 5, 'CUBRIMIENTOS', '<p>&iquest;Qui&eacute;n dijo que un cubrimiento es aburrido? tenemos las mejores ideas para producir memorias audiovisuales fieles al&nbsp;<strong>esp&iacute;ritu de tu empresa.</strong></p>', '/storage/_contenidos/1701813950_71ad6fa0-b4dd-4046-9ff5-8b3c63e13f43.JPG', 3, '2023-08-15 19:45:13', '2023-12-05 22:05:50'),
(11, 5, 'VIDEO PRODUCTO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p><strong>Destacamos lo mejor</strong> de tu producto para crear piezas que valga la pena repetir una y otra vez.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128730_producto.jpg', 4, '2023-08-15 19:45:30', '2023-08-15 19:45:30'),
(12, 5, 'INSTITUCIONAL', '<div class=\"container_page px-4  mb-lg-5 services_list\">\r\n<div class=\"row pt-5 justify-content-center\">\r\n<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Creamos contenido de valor para tu empresa, alineado con tu estrategia. Creamos comunidad,&nbsp;<strong>potenciamos las comunicaciones</strong>&nbsp;internas y externas, y construimos&nbsp;<strong>mensajes efectivos</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128745_institucion.jpg', 5, '2023-08-15 19:45:45', '2023-08-15 19:45:45'),
(13, 8, 'DOCUMENTALES', '<p>Investigamos, escribimos, producimos y editamos documentales de la m&aacute;s alta calidad para marcas que quieren&nbsp;<strong>contar historias y despertar emociones.</strong></p>', '/storage/_contenidos/1692128681_docs.jpg', 1, '2023-08-15 19:44:41', '2023-08-15 19:44:41'),
(14, 8, 'VIDEO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Nos inventamos historias incre&iacute;bles y llevamos las ideas de tu equipo hacia un producto que no solo&nbsp;<strong>emocione</strong>&nbsp;sino que&nbsp;<strong>cumpla los objetivos</strong> de tu marca.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128697_video.jpg', 2, '2023-08-15 19:44:57', '2023-08-15 19:44:57'),
(15, 8, 'CUBRIMIENTOS', '<p>&iquest;Qui&eacute;n dijo que un cubrimiento es aburrido? tenemos las mejores ideas para producir memorias audiovisuales fieles al&nbsp;<strong>esp&iacute;ritu de tu empresa.</strong></p>', '/storage/_contenidos/1701813950_71ad6fa0-b4dd-4046-9ff5-8b3c63e13f43.JPG', 3, '2023-08-15 19:45:13', '2023-12-05 22:05:50'),
(16, 8, 'VIDEO PRODUCTO', '<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p><strong>Destacamos lo mejor</strong> de tu producto para crear piezas que valga la pena repetir una y otra vez.</p>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128730_producto.jpg', 4, '2023-08-15 19:45:30', '2023-08-15 19:45:30'),
(17, 8, 'INSTITUCIONAL', '<div class=\"container_page px-4  mb-lg-5 services_list\">\r\n<div class=\"row pt-5 justify-content-center\">\r\n<div class=\"col-lg- to_view to_viewReset visible\">\r\n<div class=\"c_services_list\">\r\n<p>Creamos contenido de valor para tu empresa, alineado con tu estrategia. Creamos comunidad,&nbsp;<strong>potenciamos las comunicaciones</strong>&nbsp;internas y externas, y construimos&nbsp;<strong>mensajes efectivos</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '/storage/_contenidos/1692128745_institucion.jpg', 5, '2023-08-15 19:45:45', '2023-08-15 19:45:45');

INSERT INTO `equipo` (`id`, `nombre`, `descripcion`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'MARIANA MONTOYA', 'CEO/FOUNDER', '/storage/multimedia/1692832762_equipo_img_profile1.png', 1, '2023-07-21 05:59:49', '2023-08-23 23:19:22'),
(2, 'EMILIO CORTÉS', 'CONTENT CREATOR', '/storage/multimedia/1695747953_equipo_Silueteado Emilio.png', 6, '2023-07-21 06:00:53', '2023-09-26 17:06:15'),
(3, 'SEBASTIÁN VITERI', 'SENIOR GRAPHIC DESIGNER', '/storage/multimedia/1692832806_equipo_img_profile3.png', 3, '2023-07-21 06:16:33', '2023-08-23 23:20:06'),
(4, 'DAVID RIVEROS', 'SENIOR CONTENT CREATOR', '/storage/multimedia/1692832823_equipo_img_profile4.png', 4, '2023-07-21 06:16:57', '2023-08-23 23:20:23'),
(5, 'CATALINA PÉREZ', 'STRATEGY LEAD', '/storage/multimedia/1692832843_equipo_img_profile5.png', 2, '2023-07-21 06:17:15', '2023-09-26 17:03:25'),
(6, 'CINDY PALACIO', 'GRAPHIC DESIGNER', '/storage/multimedia/1692832856_equipo_img_profile6.png', 5, '2023-07-21 06:18:25', '2023-09-26 17:06:30');

INSERT INTO `imagenes` (`id`, `ubicacion`, `identificador`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'contenidos', 'img_left', '/storage/imagenes/1692821678_grupocon1.jpg', '2023-08-15 21:27:49', '2023-08-23 20:14:38', NULL),
(2, 'contenidos', 'img_der', '/storage/imagenes/1692821694_grupocon2.jpg', '2023-08-15 23:06:04', '2023-08-23 20:14:54', NULL);

INSERT INTO `imagenes_branding` (`id`, `descripcion`, `clase`, `orden`, `imagen`, `created_at`, `updated_at`) VALUES
(1, '<h5>TESSERA:</h5>\r\n<p>Estrategia de negocio, branding y desarrollo de contenido.</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n publicitaria.</p>\r\n<p>Dise&ntilde;amos la estrategia de negocio de la marca, como norte para la creaci&oacute;n de una identidad visual coherente con su prop&oacute;sito y visi&oacute;n: Materializar las ideas que tocan la vida de sus clientes.</p>\r\n<p><span style=\"text-decoration: underline;\">Bogot&aacute;, Colombia</span></p>', 'i1', '1', '/storage/imagenes/1692159654_padd_sec1[1].png', '2023-08-16 03:52:14', '2023-09-19 15:12:33'),
(2, '<h5>ORIGO PRODUCTIONS</h5>\r\n<p>Estrategia de negocio, naming &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n de eventos culturales.</p>\r\n<p>Dise&ntilde;amos su propuesta de valor e identidad de marca. Priorizamos sus audiencias y entregamos un universo visual que potenciara sus objetivos de negocio y resonara con su prop&oacute;sito:&nbsp;<em>To bring happiness by connecting people with their roots.</em></p>\r\n<p><span style=\"text-decoration: underline;\">Chicago, ILL</span></p>', 'i2', '2', '/storage/imagenes/1692159682_padd_sec3[1].jpg', '2023-08-16 04:04:04', '2023-09-19 15:42:31'),
(3, '<h5>VENTO SPRITZER</h5>\r\n<p>Estrategia de marca - Naming - Branding</p>\r\n<h5>Industria:</h5>\r\n<p>Bebidas</p>\r\n<p>VENTO, que significa \'viento\' en italiano, captura la esencia de frescura y efervescencia de la bebida. Una identidad de marca que fusiona una paleta de colores vivos que evocan la espontaneidad de este producto.</p>\r\n<p><span style=\"text-decoration: underline;\">Colombia</span></p>', 'i1', '3', '/storage/imagenes/1704903510_Captura de Pantalla 2023-12-22 a la(s) 3.01.31 p.m..png', '2023-08-16 04:04:36', '2024-01-10 16:27:52'),
(4, '<h5>CONVERS&Aacute;POLIS</h5>\r\n<p>Estrategia de marca &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Difusi&oacute;n de medios para la sostenibilidad GIZ.</p>\r\n<p>Dise&ntilde;amos la estrategia de la marca por medio de talleres de cocreaci&oacute;n con el equipo de la GIZ. Desarrollamos su identidad visual y elaboramos elementos interactivos a partir de bloques y figuras personalizadas.</p>\r\n<p><span style=\"text-decoration: underline;\">Bogot&aacute;, Colombia</span></p>', 'i1', '4', '/storage/imagenes/1692159733_padd_sec6[1].jpg', '2023-08-16 04:05:05', '2023-09-19 15:58:43'),
(5, '<h5>TRI LATAM</h5>\r\n<p>Estrategia de marca &amp; Branding</p>\r\n<h5>Industria:</h5>\r\n<p>Consultor&iacute;a Organizacional</p>\r\n<p>Definimos una estrategia de marca s&oacute;lida que reflejara la esencia &uacute;nica de la empresa. Redise&ntilde;amos su identidad visual, aline&aacute;ndola a su prop&oacute;sito y objetivos de negocio.</p>\r\n<p><span style=\"text-decoration: underline;\">Colombia</span></p>', 'i1', '5', '/storage/imagenes/1695140762_Carrusel TRI v2-01.jpg', '2023-08-16 04:07:19', '2023-09-19 16:26:02'),
(6, '<h5>ERNESTO</h5>\r\n<p>Estrategia de marca, Naming, Branding</p>\r\n<h5>Industria:</h5>\r\n<p>Restaurantes</p>\r\n<h5>Lugar:</h5>\r\n<p>Bogot&aacute;, Colombia</p>\r\n<p>Dise&ntilde;amos una estrategia de marca para crear una identidad visual poderosa y coherente con los objetivos de negocio de Ernesto, permiti&eacute;ndonos llegar m&aacute;s efectivamente al &ldquo;Top of mind&rdquo; de la audiencia y posicionarnos asertivamente.</p>', 'i3', '6', '/storage/imagenes/1692159783_padd_sec5[1].jpg', '2023-08-16 04:07:47', '2023-08-16 04:23:03');

INSERT INTO `parametros` (`id`, `public_key`, `secret_key`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 'a1dfcb610179145614f4843fb5e01a74', '39a4b7bb742597c3a6066c6a56f97727', 'acruz960720@gmail.com', 'cruzjonathan960720@gmail.com', NULL, '2023-07-21 07:16:41');

INSERT INTO `procesos` (`id`, `id_casos`, `titulo`, `orden`, `texto`, `img`, `created_at`, `updated_at`) VALUES
(2, 1, 'ESTRATEGIA', 1, '<p>Partimos de un diagn&oacute;stico para entender <strong>el contexto laboral, las necesidades, dolores y motivaciones</strong> tanto del personal administrativo como de los operarios. A partir de estos hallazgos, trabajamos en sesiones de an&aacute;lisis que nos permitieron <strong>encontrar patrones de comportamiento</strong> para identificar las principales necesidades de los trabajadores y as&iacute; llegar a una estrategia de comunicaci&oacute;n que impacte<strong> la cultura de la organizaci&oacute;n.</strong></p>', '/storage/procesos/1692144470_estrategiatek.jpg', '2023-08-15 23:56:22', '2024-02-13 16:40:57'),
(3, 1, 'UNIVERSO VISUAL', 2, '<p>A partir de los hallazgos y mensajes identificados, desarrollamos un sistema gr&aacute;fico para la campa&ntilde;a, buscando&nbsp;<strong>llamar la atenci&oacute;n del p&uacute;blico y as&iacute; generar mayor impacto entre los trabajadores.</strong> Esto a trav&eacute;s del dise&ntilde;o gr&aacute;fico, implementaci&oacute;n en planta f&iacute;sica y se&ntilde;alizaci&oacute;n de los espacios.</p>', '/storage/procesos/1692821525_visualtek.jpg', '2023-08-16 00:16:16', '2023-09-26 16:34:21'),
(4, 1, 'GESTIÓN Y PRODUCCIÓN DE CONTENIDO', 3, '<p>A trav&eacute;s de la creaci&oacute;n de contenido gr&aacute;fico, audiovisual y editorial, desarrollamos productos para miembros de la empresa, <strong>logrando as&iacute; una apropiaci&oacute;n de buenas pr&aacute;cticas y como consecuencia, menos accidentes.</strong></p>\r\n<p><br>El prop&oacute;sito de la campa&ntilde;a se bas&oacute; en <strong>sensibilizar y generar cambios</strong> en la audiencia desde la emoci&oacute;n, el aprendizaje y la concientizaci&oacute;n.</p>', '/storage/procesos/1692821545_producctek.jpg', '2023-08-16 00:19:33', '2023-09-26 16:44:40'),
(5, 1, 'INTERVENCIÓN DE ESPACIOS', 4, '<p>Conocer a fondo las din&aacute;micas, los espacios y la cultura empresarial frente a la seguridad, para encontrar oportunidades de implementar la se&ntilde;alizaci&oacute;n y as&iacute; optimizar el impacto de la campa&ntilde;a.&nbsp;Dise&ntilde;amos, produjimos e instalamos piezas bidimensionales&nbsp;<strong>para generar cambios e impacto en los espacios de trabajo,</strong> redise&ntilde;ando tambi&eacute;n algunas zonas clave al interior de las plantas.&nbsp;</p>', '/storage/procesos/1692821577_espacitek.jpg', '2023-08-16 00:20:06', '2023-08-23 20:12:57'),
(6, 1, 'EVENTO DE LANZAMIENTO CAMPAÑA', 5, '<p>Planeamos y ejecutamos el d&iacute;a cero de la campa&ntilde;a de comunicaci&oacute;n, creando una experiencia memorable para los m&aacute;s de 2000 empleados de las plantas de producci&oacute;n. Por medio de una actividad l&uacute;dica introdujimos al equipo a los <strong>conceptos claves de la campa&ntilde;a de seguridad premiando su compromiso y actitud positiva.</strong></p>', '/storage/procesos/1692821597_campatek.jpg', '2023-08-16 00:20:32', '2023-09-26 17:10:19'),
(7, 3, 'estrategia', 1, '<p>Esta es la descripci&oacute;n de la estrategia implementada</p>', '/storage/procesos/1700154422_bananas-01.jpg', '2023-11-16 17:07:02', '2023-11-16 17:07:02'),
(8, 3, 'Ejecución', 2, '<p>Este es el texto del proceso n&uacute;mero 2.... Lorem ipsum.......</p>', '/storage/procesos/1700161613_bananas-01.jpg', '2023-11-16 19:06:53', '2023-11-16 19:06:53'),
(9, 4, 'ESTRATEGIA', 1, '<p>Plantear y ejecutar una <strong>estrategia de negocio</strong> que ayude a definir la propuesta de valor de Bosquenible</p>', '/storage/procesos/1707155512_IMG_5606.jpg', '2024-01-30 21:35:32', '2024-02-05 17:51:52'),
(10, 4, 'PRODUCCIÓN DE CONTENIDO AUDIOVISUAL', 2, '<p>Conocer a fondo las din&aacute;micas, los espacios y la cultura empresarial frente a la seguridad, para encontrar oportunidades de implementar se&ntilde;alizaci&oacute;n y as&iacute; optimizar el impacto de la campa&ntilde;a.***</p>', '/storage/procesos/1707155098__DSC0278.jpg', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(11, 2, 'ESTRATEGIA DE COMUNICACIÓN.', 1, '<p>Trabajamos en 3 grandes campañas. Partimos de organizar talleres de co-creación con socios estratégicos para definir productos y mensajes a comunicar. Definimos los contenidos, pilares y audiencia que respondieran a los objetivos de cada una de las campañas.</p>', '/storage/procesos/ccdestrate.jpg', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(12, 2, 'ESTRATEGIA DE <br>CONTENIDOS', 2, '<p>Realizamos 5 contenidos independientes que estuvieran orientados a cumplir y apoyar el propósito de la campaña, potenciar la cohesión comunitaria y la seguridad ciudadana.</p>', '/storage/procesos/ccdconten.jpg', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(13, 2, 'GESTIÓN Y PRODUCCIÓN<br> DE CONTENIDO.', 3, '<p>A través del diseño de piezas gráficas y de la producción audiovisual, desarrollamos e implementamos contenidos que respondieron a las 3 campañas y a los 5 contenidos independientes. Con esto, buscamos que la información técnica estuviera en un lenguaje cercano a la audiencia para facilitar su comprensión. Los formatos producciones fueron: infografías, videos motion graphics, afiches, videos, cuñas, material para rrss.</p>', '/storage/procesos/ccdproduc.jpg', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(14, 2, 'GESTIÓN EN <br> PRENSA', 4, '<p>Realizamos un mapeo de los principales medios de comunicación de los 11 municipios. Gestionamos con diferentes medios como Caracol Radio, RCN Radio, Canal Capital y W radio para publicar diferentes notas de prensa.</p>', '/storage/procesos/ccdtelefono.png', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(15, 2, 'PÁGINA WEB.', 5, '<p>Creamos contenido audiovisual y tipo blog para publicar en el micrositio de Pact. Publicamos y editamos entradas  en el micrositio que respondieran a los objetivos y al contenido propuesto en cada campaña  y contenido.</p>', '/storage/procesos/ccdpagina.jpg', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(16, 5, 'ESTRATEGIA.', 1, '<p>Usamos nuestra herramienta más asertiva para solucionar estos retos, el ‘Design Thinking’. En este proceso iniciamos con una investigación profunda donde entendimos el mercado laboral en Colombia, las aspiraciones, motivaciones y necesidades de los perfiles tech del país.  Con estos hallazgos  realizamos sesiones de ‘brainstorming’ para definir lineamientos de comunicación, retos y áreas de oportunidad, creamos perfiles para entender la audiencia, sus intereses y dolores.</p>', '/storage/procesos/sc_1.png', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(17, 5, 'BRANDING.', 2, '<p>Partiendo de los valores y la personalidad de la marca de ScotiaTech, construímos un ‘brand book’ que permite apoyar la identidad de ScotiaTech y reforzar las estrategias de comunicación y de marketing establecidas. \n\nCreamos una identidad visual y verbal, junto con sus aplicaciones en distintos medios.</p>', '/storage/procesos/sc_2.png', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(18, 5, 'ESTRATEGIA<br> DE CONTENIDO.', 3, '<p>Definimos una estrategia de contenido que contempla el tipo de publicaciones, los canales y los formatos a realizar, teniendo como prioridad el público objetivo al cual debemos comunicar  y considerando siempre la identidad corporativa definida en el proceso de estrategia y branding.</p>', '/storage/procesos/sc_3.png', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(19, 5, 'RELACIONAMIENTO <br> PÚBLICO (PR)', 4, '<p>Realizamos un mapeo de los principales medios de comunicación de los 11 municipios. Gestionamos con diferentes medios como Caracol Radio, RCN Radio, Canal Capital y W radio para publicar diferentes notas de prensa.</p>', '/storage/procesos/sc_4.png', '2024-01-30 21:39:25', '2024-02-05 17:44:58'),
(20, 5, 'EJECUCIÓN.', 5, '<p>Realizamos contenidos gráficos y audiovisuales, que comunican en dos sentidos: internamente para reforzar valores y sentido de pertenencia de los empleados con ScotiaTech. Externamente para atraer nuevos perfiles tech por medio de comunicaciones que visibilizan testimonios de empleados, el día a día laboral y los beneficios de hacer parte de ScotiaTech.</p>', '/storage/procesos/sc_5.png', '2024-01-30 21:39:25', '2024-02-05 17:44:58');

INSERT INTO `redes` (`id`, `titulo`, `enlace`, `clase`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Instagram', 'https://www.instagram.com/sazu_lab/', 'icon-instagram', '2023-07-24 20:48:17', '2023-07-24 20:48:17', NULL),
(2, 'Tiktok', 'https://www.tiktok.com/@sazulab', 'icon-tiktok', '2023-07-24 20:48:29', '2024-06-10 22:24:25', NULL),
(3, 'Linkedin', 'https://www.linkedin.com/company/sazu', 'icon-linkedin', '2023-07-24 20:48:46', '2023-07-24 20:48:46', NULL);

INSERT INTO `resultados` (`id`, `id_casos`, `orden`, `estado`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 1, '82 %', 'En reconocimiento sobre la campaña implementada.', '2023-07-25 05:16:07', '2023-07-25 05:16:07'),
(3, 1, 3, 1, '3 meses', 'Entre Bogotá y Cartagena sin un solo accidente en planta.', '2023-07-25 05:16:22', '2023-07-25 05:16:22'),
(94, 2, 1, 1, '$ 10.2 M', 'Gestionamos “Free-press” en medios digitales por valores equivalentes a más de 10 millones de pesos si hubieran sido pagos.', '2023-07-25 05:19:15', '2023-07-25 05:19:15'),
(95, 2, 2, 1, '8 talleres', 'Planeamos y lideramos con éxito más de 8 talleres de co-creación con socios estratégicos de la organización.', '2023-07-25 05:19:30', '2023-07-25 05:19:30'),
(96, 2, 3, 1, '78,000', 'Personas alcanzadas a través de “Free-press” en medios impresos, un equivalente a más de 30 millones de pesos si hubieran sido pagos.', '2023-07-25 05:19:44', '2023-07-25 05:19:44'),
(97, 2, 4, 1, '3 campañas', 'Creamos 3 campañas de comunicación orientadas a potenciar la protección de derechos de la población migrante venezolana en Colombia y mejorar la cohesión comunitaria y seguridad ciudadana.', '2023-07-25 05:19:58', '2023-07-25 05:19:58'),
(98, 1, 4, 1, '32%', 'Reducción de accidentalidad', '2023-08-22 21:39:36', '2023-09-22 14:13:20'),
(101, 3, 1, 1, '70%', 'Texto descripción del resultado editado', '2023-11-16 17:04:47', '2023-11-16 19:05:43'),
(102, 3, 2, 1, '95%', 'Efectividad de clics.....', '2023-11-16 19:05:12', '2023-11-16 19:05:12'),
(103, 5, 1, 1, '+39,000', 'De seguidores en LinkedIn y Facebook. Impulsamos la creación de comunidad alrededor de ScotiaTech.', '2023-11-16 19:05:12', '2023-11-16 19:05:12'),
(104, 5, 2, 1, '+450 Piezas', 'Piezas gráficas diseñadas con diferentes propósitos estratégicos.', '2023-11-16 19:05:12', '2023-11-16 19:05:12'),
(106, 5, 3, 1, 'Estrategia', 'Diseño de una estrategia de comunicación efectiva y el diseño de una identidad visual de marca.', '2023-11-16 19:05:12', '2023-11-16 19:05:12'),
(107, 5, 4, 1, '+30 Videos', 'Contenido audiovisual creado alineado con los objetivos de comunicación estratégica para ScotiaTech. ', '2023-11-16 19:05:12', '2023-11-16 19:05:12');

INSERT INTO `roles` (`id`, `rol`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'superadmin', '2023-01-01 00:00:00', '2023-01-01 00:00:00', NULL);

INSERT INTO `textos` (`id`, `ubicacion`, `identificador`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', 'texto_superior', '<h4 style=\"line-height: 1;\">EN NUESTRO LAB,</h4>\r\n<h3 style=\"line-height: 1.1; max-width:500px;\"><span style=\"font-size: 24pt;\"><strong>SOLUCIONAMOS LOS RETOS ESTRAT&Eacute;GICOS DE TU MARCA.</strong></span></h3>\r\n<h5 style=\"line-height: 1.3;\"><em>Consultor&iacute;a y producci&oacute;n&nbsp;<br>creativa de comunicaciones 🧚&zwj;♀️</em></h5>', '2023-06-01 19:17:39', '2024-02-26 14:37:56', NULL),
(2, 'frm_contacto', 'descripcion', '<h1>LET&acute;S MAKE IT <strong>HAPPEN!</strong></h1>\r\n<h5>Completa la siguiente informaci&oacute;n para empezar:</h5>', '2023-06-01 19:22:10', '2023-06-01 19:22:10', NULL),
(3, 'estrategia', 'texto_superior', '<h2><em>Full service</em></h2>\r\n<h1>ESTRATEGIA<br><em>+ EJECUCI&Oacute;N</em></h1>\r\n<h2><em>Dise&ntilde;o e Innovaci&oacute;n de Comunicaciones.</em></h2>', '2023-06-01 19:23:15', '2024-01-09 22:01:10', NULL),
(4, 'home', 'manifiesto', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/aCL4M_M-WJw?si=3YqPxJxzJaXylmfs\" width=\"100%\" height=\"315\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2023-07-24 17:45:11', '2024-02-26 17:18:25', NULL),
(5, 'estrategia', 'marquee', '<h1>RESEARCH - MODELOS DE NEGOCIO - PROPUESTA DE VALOR - PILARES DE COMUNICACI&Oacute;N - AGILE COACHING - ESTUDIO DE MERCADOS -</h1>', '2023-08-11 20:32:02', '2024-02-26 14:35:48', NULL),
(6, 'estrategia', 'titulot1', '<h1>INNOVATION IS ABOUT SOLVING PROBLEMS</h1>', NULL, '2023-08-14 14:44:10', NULL),
(7, 'estrategia', 'text1', '<p>La estrategia es nuestra herramienta para potenciar <strong>la innovaci&oacute;n y la transformaci&oacute;n</strong> de las empresas.</p>', NULL, '2023-12-18 14:55:04', NULL),
(8, 'estrategia', 'text2', '<h2 style=\"line-height: 1;\"><span class=\"number\">PROCESO CENTRADO</span></h2>\r\n<h2 style=\"line-height: 1;\">EN LAS PERSONAS</h2>', '2023-08-14 14:50:28', '2023-12-18 14:56:17', NULL),
(10, 'estrategia', 'text3', '<h2 style=\"line-height: 1;\"><span class=\"number\">METODOLOG&Iacute;AS</span></h2>\r\n<h2 style=\"line-height: 1;\">DE INNOVACI&Oacute;N</h2>', '2023-08-14 14:58:25', '2023-12-18 14:56:40', NULL),
(13, 'estrategia', 'text4', '<h2 style=\"line-height: 1;\"><span class=\"number\">RIGUROSIDAD</span></h2>\r\n<h2 style=\"line-height: 1;\">ANAL&Iacute;TICA</h2>', '2023-08-14 15:00:54', '2023-12-18 14:57:06', NULL),
(14, 'estrategia', 'text5', '<h2>NEGOCIO</h2>\r\n<p>Entendemos a profundidad las necesidades de tu empresa, de su audiencia y del mercado, para identificar los <strong>retos y oportunidades</strong> a los que se enfrenta, y as&iacute;, articular decisiones que <strong>transformen el negocio.</strong></p>', '2023-08-14 15:04:53', '2023-08-14 15:06:55', NULL),
(15, 'estrategia', 'text6', '<h2>COMUNICACIONES</h2>\r\n<p>Analizamos los comportamientos y creencias de la audiencia, identificando oportunidades de relacionamiento y estableciendo pilares de comunicaci&oacute;n que gu&iacute;en los puntos de contacto entre tu negocio y su p&uacute;blico de una forma <strong>coherente, clara y sobre todo, efectiva.</strong></p>', '2023-08-14 15:07:18', '2023-08-14 15:07:36', NULL),
(16, 'estrategia', 'text7', '<h2>MARCA</h2>\r\n<p>Extraemos la esencia del negocio y lo convertimos en experiencias relevantes para su p&uacute;blico. Desde la estrategia, definimos el prop&oacute;sito de la marca y trazamos un plan para posicionarla y convertirla en un <strong>activo valioso para sus clientes en un mercado competitivo.</strong></p>', '2023-08-14 15:09:22', '2023-08-14 15:09:22', NULL),
(17, 'estrategia', 'pietext', '<p>\"La estrategia se trata de <strong>tomar decisiones,</strong> hacer compromisos; se trata de elegir deliberadamente ser diferente\"</p>\r\n<p>Michael Porter</p>', '2023-08-14 15:11:02', '2023-08-14 15:12:28', NULL),
(18, 'estrategia', 'rueda', '<ul>\r\n<li>\r\n<h5>ENTENDER</h5>\r\n<p>Investigamos y escuchamos</p>\r\n</li>\r\n<li>\r\n<h5>ANALIZAR</h5>\r\n<p>Encontramos oportunidades</p>\r\n</li>\r\n<li>\r\n<h5>IDEAR</h5>\r\n<p>Generamos ideas</p>\r\n</li>\r\n<li>\r\n<h5>DEFINIR</h5>\r\n<p>Priorizamos y marcamos un <br>plan de acci&oacute;n</p>\r\n</li>\r\n<li>\r\n<h5>IMPLEMENTAR</h5>\r\n<p>Llevamos a la vida el plan</p>\r\n</li>\r\n</ul>', '2023-08-14 15:36:02', '2023-08-22 21:50:57', NULL),
(23, 'contenido', 'texto_superior', '<h2><em>No existe un problema</em></h2>\r\n<h1>QUE LA CREATIVIDAD</h1>\r\n<h1>NO PUEDA <em>RESOLVER</em></h1>\r\n<p><span style=\"font-size: 18pt;\"><em>y a nosotros, nos encantan los problemas.&nbsp;</em></span></p>', '2023-08-15 21:17:29', '2024-01-09 22:21:25', NULL),
(26, 'contenido', 'marquee', '<h1>DOCUMENTALES - COMERCIALES - CAMPA&Ntilde;AS CREATIVAS - CASOS DE &Eacute;XITO - CORTOMETRAJES - ANIMACIONES -&nbsp;</h1>', '2023-08-15 21:33:58', '2023-12-18 21:37:45', NULL),
(27, 'contenido', 'vid1', '<h2 style=\"line-height: 1;\">Manifiesto Sazú</h2>\r\n<p style=\"line-height: 1;\">Pisamos tierra, para conectar los puntos que solo unidos le dan significado a tu historia, esa que lleva tus ideas a dónde quieres que lleguen.</p>', '2023-08-15 21:36:55', '2023-12-18 21:18:40', NULL),
(28, 'contenido', 'textvid2', '<p>Storytelling</p>', '2023-08-15 21:38:59', '2023-12-18 21:10:32', NULL),
(29, 'contenido', 'textvid2', '<h6 class=\"to_viewleft to_viewReset\">Comerciales</h6>\r\n<h6 class=\"to_viewleft to_viewReset\">Casos de &eacute;xito</h6>', '2023-08-15 21:40:50', '2023-08-15 21:40:50', NULL),
(30, 'contenido', 'textvid3', '<h6 class=\"to_viewleft to_viewReset\">PRODUCCI&Oacute;N</h6>\r\n<h6 class=\"to_viewleft to_viewReset\">ANIMACI&Oacute;N</h6>', '2023-08-15 21:41:49', '2023-12-18 21:41:34', NULL),
(31, 'contenido', 'vid2', '<h2 style=\"line-height: 1;\">Pola del pub</h2><p style=\"line-height: 1;\">Resaltar los hitos en la historia de las empresas es uno de nuestros retos favoritos. Una pieza donde converge la investigación, el storytelling y la producción audiovisual.</p>', '2023-08-15 21:42:53', '2023-12-18 21:36:05', NULL),
(32, 'contenido', 'vid3', '<h2 style=\"line-height: 1;\">Colo Coffee</h2>\r\n<p style=\"line-height: 1;\">Junto a Colo Coffee creamos una pieza documental que resalta la fusión de la tradición cafetera junto con la tecnología para crear el nuevo Cold Brew.</p>', '2023-08-15 21:45:04', '2023-12-18 21:16:42', NULL),
(33, 'contenido', 'vid4', '<h2 style=\"line-height: 1;\">Germania</h2>\r\n<p style=\"line-height: 1;\">Las bienvenidas son más emocionantes cuando se trata de un regreso. Creamos esta pieza que nos recuerda los buenos momentos que la cerveza Germania nos regaló a los Bogotanos.</p>', '2023-08-15 21:45:18', '2023-12-19 00:50:28', NULL),
(34, 'contenido', 'vid5', '<h2 style=\"line-height: 1;\">Tekniplex</h2><p style=\"line-height: 1;\">Creemos en el poder transformador de la comunicación innovadora. Este proyecto es un testimonio de cómo nuestras soluciones pueden cambiar vidas.</p>', '2023-08-15 21:45:32', '2023-12-18 22:22:16', NULL),
(35, 'contenido', 'titulo2', '<h2>DETR&Aacute;S <strong>DE C&Aacute;MARAS</strong></h2>', '2023-08-15 21:46:48', '2023-08-15 21:48:11', NULL),
(36, 'branding', 'texto_superior', '<h2 style=\"line-height: 1;\"><em>Dise&ntilde;amos</em></h2>\r\n<h1 style=\"line-height: 1;\"><span >LA ESTRATEGIA</span></h1>\r\n<h1 style=\"line-height: 1;\"><span >Y LA IDENTIDAD VISUAL</span></h1>\r\n<h2 style=\"line-height: 1;\"><em>de marcas excepcionales,&nbsp;<br>para que sean inolvidables.</em></h2>', '2023-08-16 00:41:22', '2023-12-19 21:32:16', NULL),
(37, 'branding', 'marquee', '<h1>IDENTIDAD DE MARCA&nbsp;- ESTRATEGIA DE MARCA -&nbsp;BRANDING - PACKAGING - NAMING - MERCH - REBRANDING -&nbsp;</h1>', '2023-08-16 00:42:49', '2023-09-19 14:30:22', NULL),
(38, 'branding', 'textlog1', '<h4>Estrategia de Negocio e Identidad Visual</h4>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n publicitaria.</p>\r\n<h5>Lugar:</h5>\r\n<p>Bogot&aacute;, Colombia</p>\r\n<p>Dise&ntilde;amos la estrategia de negocio de la marca, como norte para la creaci&oacute;n de una identidad visual coherente con su prop&oacute;sito y visi&oacute;n.</p>', '2023-08-16 00:44:24', '2023-09-19 14:51:08', NULL),
(39, 'branding', 'textlog2', '<h5>ORIGO PRODUCTIONS</h5>\r\n<p>Estrategia de marca, Naming &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n de eventos culturales.</p>\r\n<h5>Lugar:</h5>\r\n<p>Chicago, ILL</p>\r\n<p>Prop&oacute;sito de Origo; traer felicidad conectando a las personas con sus ra&iacute;ces. Dise&ntilde;amos la identidad visual, priorizamos audiencias y creamos un universo visual que los ayude a alcanzar sus obejtivos de negocio.&nbsp;</p>', '2023-08-16 00:45:14', '2023-09-19 15:01:45', NULL),
(40, 'branding', 'textlog3', '<h5>CCD</h5>\r\n<p>Estrategia de comunicaci&oacute;n</p>\r\n<h5>Industria:</h5>\r\n<p>ONG</p>\r\n<h5>Lugar:</h5>\r\n<p>Colombia</p>\r\n<p>Dise&ntilde;amos una estrategia de comunicaci&oacute;n para visibilizar los derechos de la poblaci&oacute;n migrante venezolana y promover su integraci&oacute;n e inclusi&oacute;n en Colombia.</p>', '2023-08-16 00:45:44', '2023-08-16 00:45:44', NULL),
(41, 'branding', 'textlog4', '<h5>CCD</h5>\r\n<p>Estrategia de comunicaci&oacute;n</p>\r\n<h5>Industria:</h5>\r\n<p>ONG</p>\r\n<h5>Lugar:</h5>\r\n<p>Colombia</p>\r\n<p>Dise&ntilde;amos una estrategia de comunicaci&oacute;n para visibilizar los derechos de la poblaci&oacute;n migrante venezolana y promover su integraci&oacute;n e inclusi&oacute;n en Colombia.</p>', '2023-08-16 00:46:15', '2023-08-16 00:46:15', NULL),
(42, 'branding', 'textlog5', '<h5>ORIGO PRODUCTIONS</h5>\r\n<p>Estrategia de marca, Naming &amp; Branding</p>\r\n<h5>Industria:</h5>\r\n<p>Producci&oacute;n de eventos culturales.</p>\r\n<h5>Lugar:</h5>\r\n<p>Chicago, ILL</p>\r\n<p>Ayudamos a encontrar el prop&oacute;sito de Origo, traer felicidad conectando a las personas con sus ra&iacute;ces. Dise&ntilde;amos la identidad visual, la cual deb&iacute;a apelar al p&uacute;blico latino, usando los colores primarios como simbol&iacute;smo del origen.</p>', '2023-08-16 00:47:03', '2023-11-20 13:33:57', NULL),
(43, 'branding', 'textlog6', '<h5>CONVERS&Aacute;POLIS</h5>\r\n<p>Estrategia de marca &amp; Identidad Visual</p>\r\n<h5>Industria:</h5>\r\n<p>Difusi&oacute;n de medios para la sostenibilidad</p>\r\n<h5>Lugar:</h5>\r\n<p>Bogot&aacute;, Colombia</p>\r\n<p>Planteamos la estrategia de marca a seguir por medio de talleres y dise&ntilde;amos a partir de esta una identidad visual. Se le dio una personalidad amigable para las tem&aacute;ticas que distribuyen y se elabor&oacute; una ciudad hecha de bloques que representa el poder que todos tenemos para generar cambio.</p>', '2023-08-16 00:47:34', '2023-08-16 00:47:34', NULL),
(44, 'branding', 'titulo1', '<h2>PROCESO DE <strong>IDENTIDAD</strong></h2>\r\n<h4><em>&iquest;Qu&eacute; puedes esperar en un <br>proyecto como este?</em></h4>', '2023-08-16 00:53:59', '2023-08-16 00:53:59', NULL),
(45, 'branding', 'text1', '<h2>ENTENDIMIENTO</h2>\r\n<p>Entendemos el negocio a profundidad. Investigamos sus audiencias, entendemos las necesidades de negocio y analizamos el mercado para poder tomar decisiones estrat&eacute;gicas.</p>', '2023-08-16 01:07:09', '2023-08-16 01:07:09', NULL),
(46, 'branding', 'text2', '<h2>ESTRATEGIA</h2>\r\n<p>Facilitamos la toma de decisiones de estrategia de marca, ayudando a nuestros clientes a definir una posici&oacute;n &uacute;nica y valiosa en el mercado que les permita diferenciarse y potenciar su oferta de valor.</p>', '2023-08-16 01:07:53', '2023-08-16 01:07:53', NULL),
(47, 'branding', 'text3', '<h2>DISE&Ntilde;O</h2>\r\n<p>Dise&ntilde;amos una identidad visual poderosa; coherente con la estrategia y que se adapte a los espacios donde vivir&aacute; la marca.</p>', '2023-08-16 01:08:33', '2023-08-16 01:08:33', NULL),
(48, 'branding', 'text4', '<h2>IMPLEMENTACI&Oacute;N</h2>\r\n<p>Planeamos y ejecutamos el despliegue de la marca. Priorizamos canales, mensajes y contenido, para construir el posicionamiento estrat&eacute;gico deseado. Somos tus aliados en el proceso de desarrollar una marca potente y coherente.</p>', '2023-08-16 01:08:59', '2023-08-16 01:12:33', NULL),
(49, 'contenido', 'video', '<iframe title=\"Porkcolombia\" src=\"https://www.youtube.com/embed/bAb78BGLXK8?autoplay=0&showinfo=0&controls=0&modestbranding=1&showinfo=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe>', '2023-08-30 16:28:51', '2023-08-30 16:28:51', NULL),
(50, 'contenido', 'video2', '<iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/mX0oY4Ewcv0?autoplay=0&showinfo=0&controls=0&modestbranding=1&showinfo=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe>', '2023-08-30 16:29:25', '2023-12-05 22:02:25', NULL),
(51, 'contenido', 'video3', '<iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/fruE-Bct5oM?autoplay=0&showinfo=0&controls=0&modestbranding=1&showinfo=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe>', '2023-08-30 16:29:41', '2023-12-05 22:02:55', NULL),
(52, 'contenido', 'video4', '<iframe title=\"DEUNA I Checkout\" src=\"https://www.youtube.com/embed/U95ueuHZ2xw?autoplay=0&showinfo=0&controls=0&modestbranding=1&showinfo=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe>', '2023-08-30 16:30:15', '2023-12-05 21:56:27', NULL),
(53, 'contenido', 'video5', '<iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/PF9pso5AAFk?autoplay=0&showinfo=0&controls=0&modestbranding=1&showinfo=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe>', '2023-08-30 16:30:36', '2023-12-11 15:53:05', NULL),
(54, 'contenido', 'video6', '<iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/idVv-yXhZBM?autoplay=0&showinfo=0&controls=0&modestbranding=1&showinfo=0\" width=\"777\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\"></iframe>', '2023-08-30 16:30:57', '2023-12-11 15:53:20', NULL),
(56, 'home', 'footerc', '<h5>CONT&Aacute;CTANOS</h5>\r\n<p>rn</p>\r\n<p>Tel: 3006568714 <br>Mail: <a href=\"mailto:Comercial@sazulab.com\">mariana@sazulab.com</a><br>Dir: Cra 10 # 96 - 79</p>', '2023-08-30 16:32:46', '2023-08-30 16:32:46', NULL),
(57, 'home', 'footers', '<h5>SERVICIOS</h5>\r\n<p>rn</p>\r\n<ul>\r\n<li>rn</li>\r\n<li><a href=\"{{ url(\'/estrategia\') }}\">Estrategia</a></li>\r\n<li>rn</li>\r\n<li><a href=\"{{ url(\'/contenido\') }}\">Estudio Creativo</a></li>\r\n<li>rn</li>\r\n<li><a href=\"{{ url(\'/branding\') }}\">Branding</a></li>\r\n<li>rn</li>\r\n</ul>', '2023-08-30 16:33:11', '2023-12-19 21:24:27', NULL),
(58, 'home', 'footerbtn', '<p>Cont&aacute;ctanos</p>', '2023-08-30 16:33:37', '2023-09-22 14:09:15', NULL),
(59, 'home', 'mision', '<h4>NUESTRA MISI&Oacute;N</h4>\r\n<p>rn</p>\r\n<h5>Crear una <strong style=\"color: #5b4cff;\">estrategia de comunicaci&oacute;n robusta,</strong> coherente y consistente a trav&eacute;s de un <strong style=\"color: #5b4cff;\">entendimiento profundo de las necesidades y aspiraciones</strong> de los j&oacute;venes talentos tech en Colombia, para crear una oferta de valor atractiva como marca empleadora por medio de la <strong style=\"color: #5b4cff;\">implementaci&oacute;n de contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicaci&oacute;n establecidos.&nbsp;</h5>\r\n<p>rn</p>\r\n<p>&nbsp;</p>', '2023-08-30 16:34:08', '2023-08-30 16:34:08', NULL),
(60, 'contacto', 'texto_superior', '<h1>LET&acute;S MAKE IT&nbsp;<strong>HAPPEN!</strong></h1>\r\n<h5>Completa la siguiente informaci&oacute;n para empezar:</h5>', '2023-08-30 16:37:16', '2023-12-28 18:39:13', NULL),
(61, 'contacto', 'texto_superior1', '<h6>LL&Aacute;MANOS</h6>\r\n<p>Ya sea para agendar una cita o conocer m&aacute;s sobre nosotros ll&aacute;manos al +573006568714.</p>', '2023-08-30 16:37:41', '2023-09-26 16:26:37', NULL),
(62, 'contacto', 'texto_superior2', '<h6>VIS&Iacute;TANOS</h6>\r\n<p>&iexcl;Nuestras puertas est&aacute;n abiertas! Conoce d&oacute;nde generamos ideas, planteamos estrategias, organizamos talleres y tomamos bastante caf&eacute;.</p>', '2023-08-30 16:38:01', '2023-12-28 18:40:53', NULL),
(63, 'contacto', 'texto_superior3', '<h6>CHAT</h6>\r\n<p>&iquest;Prefieres escribirnos? Puedes hacerlo a nuestro whatsapp.<strong> <a href=\"https://wa.me/573006568714\" target=\"_blank\" rel=\"noopener\">+57 3006568714&nbsp;</a></strong></p>\r\n<h5 style=\"line-height: 1;\"><a href=\"https://www.designrush.com/agency/profile/sazu-lab\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.designrush.com/agency/profile/sazu-lab&amp;source=gmail&amp;ust=1703625928580000&amp;usg=AOvVaw28kPUUeQr8RL5-LZkCaqMY\">designrush.com/<wbr>agency/profile/sazu-lab</a></h5>', '2023-08-30 16:38:30', '2023-12-28 18:41:13', NULL),
(64, 'contacto', 'titulo', '<h2 class=\"bw font-weight-bold\">TRABAJEMOS <br>JUNTOS.</h2>', '2023-08-30 16:38:52', '2023-09-26 16:27:57', NULL),
(65, 'contenido', 'audiovisual', '<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/zs8YasF82Vs\" width=\"100%\" height=\"720\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"allowfullscreen\">rn          </iframe></p>', '2023-08-30 16:40:44', '2023-08-30 16:40:44', NULL),
(66, 'contacto', 'titulo_formulario', '<h2><strong>CONT&Aacute;CTANOS</strong></h2>', '2023-11-16 13:56:45', '2023-11-16 13:56:45', NULL),
(67, 'contacto', 'nuestra_mision', '<h5>Crear una <strong style=\"color: #5b4cff;\">estrategia de comunicaci&oacute;n robusta,</strong> coherente y consistente a trav&eacute;s de un <strong style=\"color: #5b4cff;\">entendimiento profundo de las necesidades y aspiraciones</strong> de los j&oacute;venes talentos tech en Colombia, para crear una oferta de valor atractiva como marca empleadora por medio de la <strong style=\"color: #5b4cff;\">implementaci&oacute;n de contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicaci&oacute;n establecidos.&nbsp;</h5>', '2023-11-16 13:56:45', '2024-01-30 21:27:59', NULL),
(68, 'contenido', 'vid6', '<h2 style=\"line-height: 1;\">Scotiatech</h2><p style=\"line-height: 1;\">Transformar oficinas en lugares que reflejan la identidad y el espíritu de los equipos fue una de nuestras misiones en Scotiatech. La combinación de estrategia, propósito y arte puede convertir cualquier espacio en una fuente de orgullo y motivación para tu empresa.</p>', '2023-08-15 21:45:32', '2023-12-18 22:22:16', NULL);

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `pass`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin editado', 'admin@homesas.co', 'f50184a7d5e6b76ae307aef5fb128db5', '2022-07-25 05:48:37', '2023-03-14 20:40:30', NULL),
(2, 'Admin', 'admin@sazulab.com', '25d55ad283aa400af464c76d713c07ad', '2022-07-25 05:48:37', '2023-07-24 16:56:30', NULL),
(3, 'admin@sazulab.com', 'admasdasdsdin@saasdasdzulab.com', '25d55ad283aa400af464c76d713c07ad', '2023-08-22 23:01:17', '2023-08-22 23:01:17', NULL);

INSERT INTO `usuarios_has_roles` (`id`, `usuarios_id`, `roles_id`) VALUES
(1, 1, 1),
(2, 2, 1);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;