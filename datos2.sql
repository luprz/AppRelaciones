-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2013 a las 19:02:59
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datos2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`) VALUES
(1, 'Madrid'),
(2, 'Lima'),
(3, 'Buenos Aires'),
(4, 'Quito'),
(5, 'Caracas'),
(6, 'Barranquilla'),
(7, 'Manizales'),
(8, 'Cali'),
(9, 'Medellin'),
(10, 'Cúcuta'),
(11, 'Manizales'),
(12, 'Armenia'),
(13, 'Tunja'),
(14, 'Punto Fijo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE IF NOT EXISTS `estudios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(100) unsigned NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `anio_graduacion` int(4) unsigned NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estudios_FKIndex1` (`usuarios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `usuarios_id`, `institucion`, `anio_graduacion`, `titulo`) VALUES
(2, 1, 'UNEFM', 2005, 'Ingeniería Industrial'),
(3, 2, 'UBV', 2011, 'Abogado');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia`
--

CREATE TABLE IF NOT EXISTS `experiencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(100) unsigned NOT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `inicio` date DEFAULT NULL,
  `finalizacion` date DEFAULT NULL,
  `jefe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `experiencia_FKIndex1` (`usuarios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `experiencia`
--

INSERT INTO `experiencia` (`id`, `usuarios_id`, `empresa`, `inicio`, `finalizacion`, `jefe`) VALUES
(1, 1, 'Empresa 1', '0000-00-00', '0000-00-00', 'El señor pacho'),
(2, 1, 'Empresa 2', '0000-00-00', '0000-00-00', 'El señor pedro'),
(3, 1, 'Empresa 2', '2012-03-08', '2012-03-10', 'Mi grandioso jefe je je'),
(4, 1, 'Adidas', '2013-05-16', '2013-05-03', 'luis'),
(6, 3, 'H&M Consulting', '2012-02-01', '2013-05-04', 'Jose Mavarez;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folio`
--

CREATE TABLE IF NOT EXISTS `folio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(100) unsigned NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `psicologica` int(10) unsigned DEFAULT NULL,
  `tecnica` int(10) unsigned DEFAULT NULL,
  `entrevista` int(10) unsigned DEFAULT NULL,
  `puntaje` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folio_FKIndex1` (`usuarios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `folio`
--

INSERT INTO `folio` (`id`, `usuarios_id`, `lugar`, `psicologica`, `tecnica`, `entrevista`, `puntaje`) VALUES
(1, 1, 'B-3', 3, 4, 3, 2),
(2, 2, 'B-3', 4, 6, 8, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `ciudad_id` int(100) unsigned NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `identificacion` int(100) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `estado` tinyint(1) unsigned DEFAULT NULL,
  `genero` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_FKIndex1` (`ciudad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `ciudad_id`, `nombres`, `identificacion`, `email`, `estado`, `genero`) VALUES
(1, 1, 'Pedro Gonsalez', 123456789, 'manuel@gmail.com', 0, 'M'),
(2, 5, 'Jorge Gomez', 987654321, 'jorge@gmail.com', 1, 'M'),
(3, 6, 'Maria Salgado', 4294967295, 'gsalgadotoledo@yahoo.com', 1, 'F'),
(5, 3, 'Guillermina Villalba', 1234587, 'Gv@localhost', 1, 'F'),
(6, 4, 'Frida Carrizo', 3545435, 'fidra.ca@gmail.com', 0, 'F'),
(7, 8, 'Jose Jaramillo', 76785675, 'jj_millo@gmail.com', 0, 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE IF NOT EXISTS `vacantes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Vavante 1', 'jhttrreyjet et er ery'),
(2, 'Vacante 2', ' rehtyer ute ueru eru erut er ueru');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes_usuarios`
--

CREATE TABLE IF NOT EXISTS `vacantes_usuarios` (
  `vacantes_id` int(100) NOT NULL,
  `usuarios_id` int(100) unsigned NOT NULL,
  KEY `vacantes_usuarios_FKIndex1` (`usuarios_id`),
  KEY `vacantes_usuarios_FKIndex2` (`vacantes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacantes_usuarios`
--

INSERT INTO `vacantes_usuarios` (`vacantes_id`, `usuarios_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
