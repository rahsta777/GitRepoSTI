-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-01-2018 a las 10:32:24
-- Versión del servidor: 5.5.50-0+deb8u1
-- Versión de PHP: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_app_poa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_Direcciones`
--

CREATE TABLE IF NOT EXISTS `tb_Direcciones` (
`id_direcciones` int(11) NOT NULL,
  `nomb_direcciones` varchar(45) NOT NULL,
  `Alias` varchar(25) NOT NULL,
  `localizacion_direcciones` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_Direcciones`
--

INSERT INTO `tb_Direcciones` (`id_direcciones`, `nomb_direcciones`, `Alias`, `localizacion_direcciones`) VALUES
(3, 'Planificacion y Sistemas', 'DPYS', 'Piso 3 Contraloria del Edo. Anzoategui'),
(4, 'Atencion Ciudadana', 'DAC', 'Piso 3 Contraloria del Edo. Anzoategui'),
(5, 'Dir. adm y Central y otros poderes', 'DACOP', 'ces');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_direcc_funcnary`
--

CREATE TABLE IF NOT EXISTS `tb_direcc_funcnary` (
  `id_funcnary` int(10) NOT NULL,
  `id_direcc` int(10) NOT NULL,
  `id_directory` int(10) NOT NULL,
  `id_def_poa` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE IF NOT EXISTS `tb_productos` (
`id_prod` int(10) NOT NULL,
  `id_dir` int(11) NOT NULL,
  `nomb_produc` varchar(60) NOT NULL,
  `metas` varchar(60) NOT NULL,
  `indicador` varchar(10) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_cul` date NOT NULL,
  `fech_registro` date NOT NULL,
  `responsable_prod` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id_prod`, `id_dir`, `nomb_produc`, `metas`, `indicador`, `fecha_ini`, `fecha_cul`, `fech_registro`, `responsable_prod`) VALUES
(13, 3, 'Entrega de anteproyectos', 'Entrega de anteproyectos', '25', '2016-07-12', '2016-07-30', '2016-06-28', 'Rafael Silveira'),
(14, 5, 'Redaccion de manual instructivo ', 'Redaccion de manual instructiv', '20', '2016-07-11', '2017-12-10', '2017-12-10', 'anny rodriguez'),
(15, 4, 'Nueva Jornada de Reto al conocimiento Las comunas', 'Nueva Jornada de Reto al conocimiento Las comunas', '15', '2018-01-08', '2018-02-01', '2018-02-01', 'lilibeth rodrig'),
(16, 3, 'Desarrollo de APP movil ', 'Desarrollo de APP movil  para la declaracion jurada', '10', '2018-01-08', '2018-01-28', '2018-01-30', 'Richard Henriqu'),
(17, 4, 'Proyecto contralor va a la Escuela Version 2018', 'Proyecto contralor va a la Escuela Version 2018', '35', '2018-02-11', '2018-02-20', '2018-03-15', 'lilibeth rodrig'),
(18, 3, 'Entrega de anteproyectos', 'Entrega de anteproyectos', '25', '2016-07-12', '2016-07-30', '2016-06-28', 'Rafael Silveira'),
(19, 5, 'Redaccion de manual instructivo ', 'Redaccion de manual instructiv', '20', '2016-07-11', '2017-12-10', '2017-12-10', 'anny rodriguez'),
(20, 4, 'Nueva Jornada de Reto al conocimiento Las comunas', 'Nueva Jornada de Reto al conocimiento Las comunas', '15', '2018-01-08', '2018-02-01', '2018-02-01', 'lilibeth rodrig'),
(21, 3, 'Desarrollo de APP movil ', 'Desarrollo de APP movil  para la declaracion jurada', '10', '2018-01-08', '2018-01-28', '2018-01-30', 'Richard Henriqu'),
(22, 4, 'Proyecto contralor va a la Escuela Version 2018', 'Proyecto contralor va a la Escuela Version 2018', '35', '2018-02-11', '2018-02-20', '2018-03-15', 'lilibeth rodrig'),
(23, 3, 'Entrega de anteproyectos', 'Entrega de anteproyectos', '25', '2016-07-12', '2016-07-30', '2016-06-28', 'Rafael Silveira'),
(24, 5, 'Redaccion de manual instructivo ', 'Redaccion de manual instructiv', '20', '2016-07-11', '2017-12-10', '2017-12-10', 'anny rodriguez'),
(25, 4, 'Nueva Jornada de Reto al conocimiento Las comunas', 'Nueva Jornada de Reto al conocimiento Las comunas', '15', '2018-01-08', '2018-02-01', '2018-02-01', 'lilibeth rodrig'),
(26, 3, 'Desarrollo de APP movil ', 'Desarrollo de APP movil  para la declaracion jurada', '10', '2018-01-08', '2018-01-28', '2018-01-30', 'Richard Henriqu'),
(27, 4, 'Proyecto contralor va a la Escuela Version 2018', 'Proyecto contralor va a la Escuela Version 2018', '35', '2018-02-11', '2018-02-20', '2018-03-15', 'lilibeth rodrig');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_audit`
--

CREATE TABLE IF NOT EXISTS `user_audit` (
`id_user` int(10) NOT NULL,
  `nomb_user` varchar(50) NOT NULL,
  `apel1_user` varchar(25) NOT NULL,
  `apel2_user` varchar(25) NOT NULL,
  `category_user` varchar(10) NOT NULL,
  `perfil_user` varchar(35) NOT NULL,
  `alias_user` varchar(30) NOT NULL,
  `sex_user` varchar(10) NOT NULL,
  `clav_user` varchar(30) NOT NULL,
  `fot_user` varchar(60) NOT NULL,
  `vr_cluser` varchar(100) NOT NULL,
  `estado_user` varchar(30) NOT NULL,
  `fec_inin_user` date NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_audit`
--

INSERT INTO `user_audit` (`id_user`, `nomb_user`, `apel1_user`, `apel2_user`, `category_user`, `perfil_user`, `alias_user`, `sex_user`, `clav_user`, `fot_user`, `vr_cluser`, `estado_user`, `fec_inin_user`, `rating`) VALUES
(6, 'root', 'root', 'root', 'ingeniero', 'Administrador', 'root', 'masculino', 'roaH3a5VEAXGA', '', '', 'activo', '2016-07-29', 0),
(7, 'Richard', 'Henriquez', 'Solorzano', 'ingeniero', 'Funcionario', 'rahsta777', 'masculino', 'ral7gku4rfhLk', '', '', 'activo', '2016-08-05', 0),
(8, 'Yalile', 'Yalile', 'Yalile', 'licenciado', 'Director', 'yyalile', 'femenino', 'yyQ.HnQY9mFzY', '', '', 'activo', '2016-08-11', 0),
(9, 'Rafael', 'Silveira', 'aaa', 'ingeniero', 'Administrador', 'jsdsdjkljksd', 'masculino', 'jswYzfiLuljJ.', '', '', 'activo', '2017-01-17', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_Direcciones`
--
ALTER TABLE `tb_Direcciones`
 ADD PRIMARY KEY (`id_direcciones`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
 ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `user_audit`
--
ALTER TABLE `user_audit`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_Direcciones`
--
ALTER TABLE `tb_Direcciones`
MODIFY `id_direcciones` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
MODIFY `id_prod` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `user_audit`
--
ALTER TABLE `user_audit`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
