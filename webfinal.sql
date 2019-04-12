-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-03-2019 a las 12:05:34
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webfinal`
--
CREATE DATABASE IF NOT EXISTS `webfinal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webfinal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `img_dir` varchar(255) DEFAULT NULL,
  `fecha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `descripcion`, `img_dir`, `fecha`) VALUES
(10, 'NOTICIA DE PRUEBA', 'Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia Mensaje de prueba para la noticia', '../resources/5c8a31c55672a.jpg', 'Thursday 14th of March 2019'),
(14, 'Bugatti La Voiture Noire, un one off de 16,7 millones', 'Bugatti presentÃ³ en el reciente SalÃ³n de Ginebra 2019, su obra maestra. Una pieza Ãºnica, que es una reinterpretaciÃ³n del Type 57 SC Atlantic, uno de los vehÃ­culos mÃ¡s icÃ³nicos del fabricante italiano, que cumple 110 aÃ±os. El La Voiture Noire es deportivo espectacular que se convierte en el modelo de producciÃ³n mÃ¡s caro del mercado. En este vÃ­deo vas a poder enterarte de todos los detalles de su creaciÃ³n.', '../resources/5c8a34ea6de76.jpg', 'Thursday 14th of March 2019'),
(16, 'NOTICIA TEST3', 'testttttttttttttttttttttttttttttttt', '', '2019-03-15 11:36:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `pais`, `asunto`, `respuesta`) VALUES
(1, 'ivan', 'mas', 'espaÃ±a', 'dsddsda', ''),
(3, 'pepe', 'rodriguez', 'peru', 'tengo un problema con la pagina web', ''),
(4, 'Pedro', 'Pedrito', 'Peru', 'No puedo acceder', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `img_dir`, `uuid`) VALUES
(32, 'Porsche Carrera 997', '../resources/5c89335214c701.84900125.jpg', '5c89335214c70'),
(31, 'Porsche Macan S', '../resources/5c893319b36a16.69626494.jpg', '5c893319b36a1'),
(30, 'BMW M4', '../resources/5c8932d615bb44.10488930.jpg', '5c8932d615bb4'),
(29, 'BMW M2', '../resources/5c8932b396a503.57127536.jpg', '5c8932b396a50'),
(28, 'Jaguar F-Type', '../resources/5c89327fdf68b6.41591008.jpg', '5c89327fdf68b'),
(27, 'Mercedes A45 AMG', '../resources/5c8932551eac43.01476706.jpg', '5c8932551eac4'),
(26, 'Maserati Levante', '../resources/5c89321c014f95.36405051.jpg', '5c89321c014f9'),
(25, 'Lamborghini Huracan', '../resources/5c8931dc0e5571.67584692.jpg', '5c8931dc0e557'),
(23, 'Maserati SQ4', '../resources/5c8930bc8abcc7.59031151.jpg', '5c8930bc8abcc'),
(24, 'Porsche Cayenne', '../resources/5c89313b4825c0.53022707.jpg', '5c89313b4825c'),
(33, 'Nissan GTR', '../resources/5c89337922fea2.21266402.jpg', '5c89337922fea'),
(34, 'Mercedes A200 AMG', '../resources/5c8933a9a54fa2.25172120.jpg', '5c8933a9a54fa'),
(35, 'Porsche Carrera 997 S', '../resources/5c8934025dcbc5.36761295.jpg', '5c8934025dcbc'),
(36, 'BMW I8', '../resources/5c893432933423.38353854.jpg', '5c89343293342'),
(37, 'Porsche Panamera', '../resources/5c893467a19dd7.51006719.jpg', '5c893467a19dd'),
(38, 'Abarth 595', '../resources/5c89348d6bb353.84260492.jpg', '5c89348d6bb35'),
(39, 'Lamborghini Aventador', '../resources/5c8934afa8f857.63634553.jpg', '5c8934afa8f85'),
(40, 'Ford Mustang GT', '../resources/5c89350f8c8619.39273396.jpg', '5c89350f8c861'),
(41, 'Dodge Challenger', '../resources/5c89353658d1b3.28447879.jpg', '5c89353658d1b'),
(42, 'Ferrari 458 Italia', '../resources/5c8935a2d90b38.24302088.jpg', '5c8935a2d90b3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(17, 'dsadadsa@gmai.com'),
(16, 'priueba@gmail.com'),
(15, 'ttt@ggg.com'),
(14, 'dddd@gmial.com'),
(13, 'pepe@hotmail.com'),
(12, 'fdfs@gmail.com'),
(11, 'hola@gmail.com'),
(10, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombre`, `apellido`, `email`, `telefono`, `pais`, `direccion`, `referencia`) VALUES
(2, 'Ivan', 'Mas', 'ivanmas1998c@gmail.com', 5647646744, 'EspaÃ±a', 'direccion', '5c89350f8c861'),
(3, 'TEST', 'TEST', 'ivansadddadassadasdc@gmail.com', 564764674454, 'Andorra', 'direccion', 'gfhgdhgdhgfhf'),
(4, 'dsa', 'dsa', 'dsdsad@fdsfs.com', 5456464, 'suiza', 'direccion', '54356436554g'),
(5, 'fdsff', 'fdsfsdf', 'ivanmas1998c@gmail.com', 535657457, 'Andorra', 'direccion', '5645764gfd'),
(6, 'dsad', 'dsada', 'dsadd@fdsf.com', 56464764, 'francia', 'calle test n2', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
