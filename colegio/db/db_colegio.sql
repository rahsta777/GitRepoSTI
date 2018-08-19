-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2014 a las 04:51:19
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_colegio`
--
CREATE DATABASE IF NOT EXISTS `db_colegio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_colegio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab2_inscrip`
--

CREATE TABLE IF NOT EXISTS `tab2_inscrip` (
  `nomb_a` varchar(45) NOT NULL,
  `apell_alumn` varchar(45) NOT NULL,
  `ced_a` varchar(15) NOT NULL,
  `edad_alumn` varchar(2) NOT NULL,
  `nac_alumn` varchar(35) NOT NULL,
  `foto_alumno` varchar(100) NOT NULL,
  `id_alumn` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `correo_alumn` varchar(60) NOT NULL,
  `fech_alumn` date NOT NULL,
  `niv_alumn` varchar(4) NOT NULL,
  `direc_alumn` varchar(45) NOT NULL,
  `tlf_alumn` varchar(20) NOT NULL,
  PRIMARY KEY (`ced_a`),
  UNIQUE KEY `id_alumn` (`id_alumn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tab2_inscrip`
--

INSERT INTO `tab2_inscrip` (`nomb_a`, `apell_alumn`, `ced_a`, `edad_alumn`, `nac_alumn`, `foto_alumno`, `id_alumn`, `correo_alumn`, `fech_alumn`, `niv_alumn`, `direc_alumn`, `tlf_alumn`) VALUES
('angels', 'del Cielo', 'V-11.111.111', '12', 'venezolana', 'imagenes/colash_fabi.png', 6, 'rasssQ@comi.com', '2014-02-12', '', 'el paraiso dek¡l señor', '(232)323-3233'),
('Roberto', 'Ray', 'V-12.111.111', '11', 'chino', 'imagenes/8590935-una-ilustracia-n-vectorial-de-dibujos-animados-de-diferentes-animales-salvajes.jpg', 10, 'wqwqwq@yahoo.es', '2014-03-18', '', 'wewewwe', '(222)222-2222'),
('rUBEN', 'MENDOZA', 'v-13.123.123', '14', 'chino', 'imagenes/caricaturas-de-animales-vectorizados.jpg', 3, 'RUBEMA@HOTMAIL.COM', '0000-00-00', '', 'ASASA', '(212)121-2121'),
('dospetra', 'gonzalez', 'V-5.432.123', '12', 'venezolana', 'imagenes/41YFBiQWQoL._SX160_.jpg', 4, 'ñlkñlñlk@yyy.com', '2014-02-19', '', 'kjjllk', '(232)323-2323'),
('Marisol', 'hansun', 'V-5.732.123', '12', 'chino', 'imagenes/Screen_20131225_092956.jpg', 7, 'lañs@yha.com', '2014-02-27', '', 'jmlkjklkl', '(712)871-8718'),
('Maria G.', 'Solorzano S.', 'V-8.205.709', '14', 'chino', 'imagenes/icone_etudiant.jpg', 5, 'RUBEMA@HOTMAIL.COM', '2014-02-12', '', 'El limon,maracay', '(121)212-1212'),
('nina', 'ramirez', 'V-9.999.999', '12', 'chino', 'imagenes/animales-marinos-infantiles-23295.jpg', 9, 'nina@yahoo.es', '2014-03-18', '', '23232323', '(323)232-3232');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab3_inscrip`
--

CREATE TABLE IF NOT EXISTS `tab3_inscrip` (
  `ide_doc` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ced` varchar(15) NOT NULL,
  `nomb` varchar(45) NOT NULL,
  `Apell_doc` varchar(45) NOT NULL,
  `Direcc_doc` varchar(45) NOT NULL,
  `fech_doc` date NOT NULL,
  `correo_doc` varchar(100) NOT NULL,
  `tlf_doc` varchar(15) NOT NULL,
  `foto_doc` varchar(100) DEFAULT NULL,
  `nivl` varchar(20) NOT NULL,
  `nacionalid_doc` varchar(40) NOT NULL,
  PRIMARY KEY (`ced`),
  UNIQUE KEY `ide_doc` (`ide_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tab3_inscrip`
--

INSERT INTO `tab3_inscrip` (`ide_doc`, `ced`, `nomb`, `Apell_doc`, `Direcc_doc`, `fech_doc`, `correo_doc`, `tlf_doc`, `foto_doc`, `nivl`, `nacionalid_doc`) VALUES
(10, 'V-19.123.123', 'yaya YUya', 'tampo', 'caña de azucar', '2014-02-05', 'ras@yahoo.es', '(213)321-3213', 'imagenes/cartoon,animalitos,cartoonz,animales,caricaturas-8f5855ea7359e46b0e681e6477063ea3_h.jpg', '23', ''),
(12, 'V-6.444.666', 'MArta', 'Sanches', '2323232', '2014-02-25', 'martah@yahoo.es', '(232)323-2323', 'imagenes/icone_etudiant.jpg', '1', ''),
(11, 'V-6.666.666', 'Temay tayamo', 'Monede namey', 'el castaño', '2014-02-22', 'tamy123@yahoo.es', '(223)232-3232', 'imagenes/7_736_3_003-g.jpg', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab23`
--

CREATE TABLE IF NOT EXISTS `tab23` (
  `id_alum` varchar(15) NOT NULL,
  `id_docen` varchar(25) NOT NULL,
  PRIMARY KEY (`id_alum`),
  KEY `id_docen` (`id_docen`),
  KEY `id_docen_2` (`id_docen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab23`
--

INSERT INTO `tab23` (`id_alum`, `id_docen`) VALUES
('V-9.999.999', 'V-6.666.666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_inscrip`
--

CREATE TABLE IF NOT EXISTS `tab_inscrip` (
  `ide_inscr` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ced_represent` varchar(15) NOT NULL,
  `Nomb_represent` varchar(45) NOT NULL,
  `Apell_represent` varchar(45) NOT NULL,
  `Direcc_represent` varchar(45) NOT NULL,
  `fech_insc` date NOT NULL,
  `correo_represent` varchar(45) NOT NULL,
  `tlf_represent` varchar(15) NOT NULL,
  `foto_repr` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ced_represent`),
  UNIQUE KEY `ide_inscr` (`ide_inscr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tab_inscrip`
--

INSERT INTO `tab_inscrip` (`ide_inscr`, `ced_represent`, `Nomb_represent`, `Apell_represent`, `Direcc_represent`, `fech_insc`, `correo_represent`, `tlf_represent`, `foto_repr`) VALUES
(5, 'V-10.111.222', 'Roberto', 'rOLO', 'LA CALMA', '2014-02-19', 'RAAA@YAHOO.ES', '(232)323-2323', 'imagenes/51ekp1rdxOL._SX160_.jpg'),
(4, 'V-11.123.123', 'Maria', 'Solorzano', 'caña de azucar', '2014-02-19', 'mara@yahoo.com', '(232)322-3232', 'imagenes/IMG0035A.jpg'),
(9, 'V-5.743.222', 'asasasasa', 'asas', 'aqwqwq', '2014-02-27', 'qwqwq@sdsd.com', '(223)232-3232', 'imagenes/Screen_20131225_092956.jpg'),
(6, 'V-6.123.123', 'dosMaria', 'shan', 'el pelon ', '2014-02-19', 'eeee@yahoo.es', '(323)232-3232', 'imagenes/41JF9uznn5L._SX160_.jpg'),
(10, 'V-6.222.223', 'Marosa', 'ching', 'sdsdsdssd', '2014-02-27', 'wqwqwq@yyy.com', '(112)332-2233', 'imagenes/php.gif'),
(3, 'V-8.205.709', 'Maria G', 'Solorzano', '2322323', '2014-02-11', '2322@yahoo.es', '(232)323-2323', 'imagenes/colash_fab_movili.jpg'),
(2, 'V-9.668.179', 'Richard alberto', 'Henriquez', 'sdsdsds', '2014-01-29', 'rafa@hotmail.com', '(565)465-4654', 'imagenes/4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_plan`
--

CREATE TABLE IF NOT EXISTS `tab_plan` (
  `id_docent` varchar(25) NOT NULL,
  `contenido1` varchar(100) NOT NULL,
  `contenido2` varchar(100) NOT NULL,
  `contenido3` varchar(100) NOT NULL,
  `contenido4` varchar(100) NOT NULL,
  `contenido5` varchar(100) NOT NULL,
  `contenido6` varchar(100) NOT NULL,
  `niv_doc` varchar(100) NOT NULL,
  PRIMARY KEY (`id_docent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_plan`
--

INSERT INTO `tab_plan` (`id_docent`, `contenido1`, `contenido2`, `contenido3`, `contenido4`, `contenido5`, `contenido6`, `niv_doc`) VALUES
('V-19.123.123', 'images/Grado1.gif', 'images/Grado2.gif', 'images/Grado3.gif', '', '', '', '1'),
('V-6.444.666', 'images/Grado4.gif', 'images/Grado5.gif', '', '', '', '', '2'),
('V-6.666.666', 'images/Grado5.gif', 'images/Grado6.gif', '', '', '', '', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(100) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `permisos` int(1) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `clave`, `nombre`, `usuario`, `pass`, `permisos`, `imagen`, `fecha`, `status`) VALUES
(2, '', 'admin', 'administrador', '12345', NULL, NULL, NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
