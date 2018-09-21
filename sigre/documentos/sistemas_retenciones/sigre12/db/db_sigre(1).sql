-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-08-2015 a las 16:27:17
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.4.36-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_sigre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_user`
--

CREATE TABLE IF NOT EXISTS `perfiles_user` (
  `cod_perfil_user` varchar(15) NOT NULL,
  `Desc_perfil_user` varchar(45) NOT NULL,
  `modulo_permisos` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_fact`
--

CREATE TABLE IF NOT EXISTS `status_fact` (
  `id_fact` varchar(15) NOT NULL,
  `status_fact` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fact`
--

CREATE TABLE IF NOT EXISTS `tbl_fact` (
  `id_fact` varchar(15) NOT NULL,
  `fecha_fact` date NOT NULL,
  `razon_social` varchar(25) NOT NULL,
  `monto_fact` decimal(12,0) NOT NULL,
  `descrip` varchar(45) NOT NULL,
  `idprove` varchar(15) NOT NULL,
  PRIMARY KEY (`id_fact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_fact`
--

INSERT INTO `tbl_fact` (`id_fact`, `fecha_fact`, `razon_social`, `monto_fact`, `descrip`, `idprove`) VALUES
('0001', '2015-02-12', '', 12544, '', 'G-01110-2222 '),
('00015', '2015-02-15', '', 255, 'asdsd', 'G-01110-2222 '),
('0012', '2015-02-12', '', 155, 'asasas', 'G-01110-2222 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factprov`
--

CREATE TABLE IF NOT EXISTS `tbl_factprov` (
  `idprov` varchar(15) NOT NULL,
  `idfact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_factprov`
--

INSERT INTO `tbl_factprov` (`idprov`, `idfact`) VALUES
('G-01110-2222 ', '0012');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prov`
--

CREATE TABLE IF NOT EXISTS `tbl_prov` (
  `prov_rif` varchar(15) NOT NULL,
  `razon_prov` varchar(45) NOT NULL,
  `dir1_prov` varchar(45) NOT NULL,
  `dir2_prov` varchar(45) NOT NULL,
  `repres_prov` varchar(45) NOT NULL,
  `lugar_prov` varchar(35) NOT NULL,
  `Tlf_prove` varchar(15) NOT NULL,
  `Email_prov` varchar(25) NOT NULL,
  PRIMARY KEY (`prov_rif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_prov`
--

INSERT INTO `tbl_prov` (`prov_rif`, `razon_prov`, `dir1_prov`, `dir2_prov`, `repres_prov`, `lugar_prov`, `Tlf_prove`, `Email_prov`) VALUES
('G-01110-2222', 'Juan C.A', '', '', 'Juan carlos', 'administrador', '4444444', 'juan@gmail.com'),
('J-12455-4567', 'La Julianna C.A', '', '', 'Jose perez', 'auditorlider', 'dsdsd', 'khshd@julinana.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_audit`
--

CREATE TABLE IF NOT EXISTS `user_audit` (
  `nomb_user` varchar(50) NOT NULL,
  `apel1_user` varchar(25) NOT NULL,
  `apel2_user` varchar(25) NOT NULL,
  `ini_nomb_user` varchar(2) NOT NULL,
  `category_user` varchar(10) NOT NULL,
  `perfil_user` varchar(35) NOT NULL,
  `cod_emplea_user` varchar(10) NOT NULL,
  `sex_user` varchar(10) NOT NULL,
  `alias_user` varchar(30) NOT NULL,
  `clav_user` varchar(30) NOT NULL,
  `fot_user` varchar(60) NOT NULL,
  `ver_clv_user` varchar(30) NOT NULL,
  `estado_user` varchar(30) NOT NULL,
  `fec_inin_user` date NOT NULL,
  PRIMARY KEY (`cod_emplea_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_audit`
--

INSERT INTO `user_audit` (`nomb_user`, `apel1_user`, `apel2_user`, `ini_nomb_user`, `category_user`, `perfil_user`, `cod_emplea_user`, `sex_user`, `alias_user`, `clav_user`, `fot_user`, `ver_clv_user`, `estado_user`, `fec_inin_user`) VALUES
('Richard', 'Henriquez', 'Solorzano', 'RH', 'tecnico', 'administrador', '001', 'man', 'rasta77', 'ral7gku4rfhLk', '', '12345', 'activo', '0000-00-00'),
('anonimos', 'anonimos', '', 'an', 'licenciado', 'administrador', '002', 'No definid', 'admin', 'adpliAB3dA.06', '', '12345', 'activo', '0000-00-00'),
('prueba', 'prueba', '', 'pr', 'licenciado', 'auditorlider', '003', 'Girl', 'usuario', 'us6O9pMmhTyt.', '', '12345', 'activo', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
