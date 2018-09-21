-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-05-2016 a las 08:33:32
-- Versión del servidor: 5.5.47-0+deb8u1
-- Versión de PHP: 5.6.19-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id_fact_st` varchar(15) NOT NULL,
  `status_fact` varchar(25) NOT NULL,
  `deducible` int(15) NOT NULL,
  `deducible1` int(15) NOT NULL,
  `deducible2` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fact`
--

CREATE TABLE IF NOT EXISTS `tbl_fact` (
  `id_fact` varchar(15) NOT NULL,
  `fecha_fact` date NOT NULL,
  `razon_social` varchar(25) NOT NULL,
  `monto_fact` varchar(25) NOT NULL,
  `descrip` varchar(45) NOT NULL,
  `idprove` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_fact`
--

INSERT INTO `tbl_fact` (`id_fact`, `fecha_fact`, `razon_social`, `monto_fact`, `descrip`, `idprove`) VALUES
('0001', '2016-04-06', '', '440,000.00', 'prueba12', 'J-11111111-1 '),
('0006', '2015-09-04', '', '785.000,00', 'remodelacion ofic', 'J-12455-4567 '),
('0012', '2015-02-12', '', '7.663,62', 'asasas', 'G-01110-2222 '),
('0015-02', '2015-09-02', '', '1.665,45', 'sasas', 'J-12455-4567 '),
('0039', '2015-09-12', '', '2.330,00', 'la djdjjdjd', 'J-11111111-1 '),
('0095', '2016-05-03', '', '125,000.00', 'sdsds', 'J-22222222-4 '),
('0098', '2015-05-02', '', '001,500.80', 'hjvjhggj', 'J-22222222-4 '),
('0099', '2016-04-22', '', '001,500.50', 'PRUEBA', 'J-12455-4567 '),
('0100', '2106-04-02', '', '140,000.00', 'sas', 'G-01110-2222 '),
('0111', '2016-05-02', '', '125,000.50', 'asas', 'J-22222222-4 ');

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
('G-01110-2222 ', '0012'),
('G-01110-2222 ', '00013'),
('J-12455-4567 ', '0004-01'),
('J-12455-4567 ', '0015-02'),
('G-01110-2222 ', '0013-02'),
('J-12455-4567 ', '0006'),
('J-11111111-1 ', '0039'),
('N-12334444-4 ', '4454'),
('N-12334444-4 ', '4443'),
('J-12455-4567 ', '0099'),
('J-12455-4567 ', '0099'),
('J-11111111-1 ', '0001'),
('G-01110-2222 ', '0100'),
('G-01110-2222 ', '0100'),
('G-01110-2222 ', '0100'),
('G-01110-2222 ', '0100'),
('G-01110-2222 ', '0100'),
('G-01110-2222 ', '0100'),
('J-22222222-4 ', '0098'),
('J-22222222-4 ', '0098'),
('J-22222222-4 ', '0098'),
('J-22222222-4 ', '0098'),
('J-22222222-4 ', '0098'),
('J-22222222-4 ', '0098'),
('J-22222222-4 ', '0095'),
('J-22222222-4 ', '0111');

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
  `Email_prov` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_prov`
--

INSERT INTO `tbl_prov` (`prov_rif`, `razon_prov`, `dir1_prov`, `dir2_prov`, `repres_prov`, `lugar_prov`, `Tlf_prove`, `Email_prov`) VALUES
('G-01110-2222', 'Juan C.A ', 'la guarimba3', 'en la floresa3', 'Juan carlose', 'Portuguesa', '(555)-555.55.55', 'juan4@gmail.com'),
('J-11111111-1', 'LA cuenta C.A', 'dsdsdsd', 'sdsdsd', 'dsdsdsds', 'Aragua', '(344)-343.43.43', 'rah@yahoo.es'),
('J-12455-4567', 'La Julianna C.A', '', '', 'Jose perez', 'auditorlider', 'dsdsd', 'khshd@julinana.com'),
('J-22222222-4', 'Roberto', 'la misma', 'sss', 'roberto', 'Aragua', '(281)-333.33.33', 'roberto@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_citas`
--

CREATE TABLE IF NOT EXISTS `tb_citas` (
  `id_fact_cit` varchar(15) NOT NULL,
  `id_rprov_cit` varchar(15) NOT NULL,
  `fech_cita` date NOT NULL,
  `fech_fact` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_citas`
--

INSERT INTO `tb_citas` (`id_fact_cit`, `id_rprov_cit`, `fech_cita`, `fech_fact`) VALUES
('0039', 'J-11111111-1', '2016-04-26', '2015-09-12'),
('0095', 'J-22222222-4 ', '0000-00-00', '0000-00-00'),
('0098', 'J-22222222-4 ', '0000-00-00', '0000-00-00'),
('0099', 'J-12455-4567', '2016-04-25', '2016-04-22'),
('0100', 'G-01110-2222 ', '0000-00-00', '0000-00-00'),
('0111', 'J-22222222-4 ', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_retencion`
--

CREATE TABLE IF NOT EXISTS `tip_retencion` (
  `cod_ret` varchar(15) NOT NULL,
  `descr_tip_ret` varchar(25) NOT NULL,
  `VALOR` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tip_retencion`
--

INSERT INTO `tip_retencion` (`cod_ret`, `descr_tip_ret`, `VALOR`) VALUES
('1EA', 'Empresa para retencion', 75),
('A21', 'empresas privada', 2),
('EPS', 'empresas de  prod Social ', 1),
('Eps2', 'Empresa prod. Social 2', 10),
('M1', 'algo', 5);

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
  `fec_inin_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_audit`
--

INSERT INTO `user_audit` (`nomb_user`, `apel1_user`, `apel2_user`, `ini_nomb_user`, `category_user`, `perfil_user`, `cod_emplea_user`, `sex_user`, `alias_user`, `clav_user`, `fot_user`, `ver_clv_user`, `estado_user`, `fec_inin_user`) VALUES
('J-22222222-4', '', '', '', '', 'proveedor', 'J-22222222', '', 'J-22222222-4', 'J-F/j8TwxHF5s', '', '111111', 'activo', '0000-00-00'),
('Richard', 'Henriquez', 'solorzano', 'rh', 'tecnico', 'administrador', 'rah12345', 'man', 'admin', 'adpexzg3FUZAk', '', 'admin', 'activo', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `status_fact`
--
ALTER TABLE `status_fact`
 ADD PRIMARY KEY (`id_fact_st`);

--
-- Indices de la tabla `tbl_fact`
--
ALTER TABLE `tbl_fact`
 ADD PRIMARY KEY (`id_fact`);

--
-- Indices de la tabla `tbl_prov`
--
ALTER TABLE `tbl_prov`
 ADD PRIMARY KEY (`prov_rif`);

--
-- Indices de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
 ADD PRIMARY KEY (`id_fact_cit`);

--
-- Indices de la tabla `tip_retencion`
--
ALTER TABLE `tip_retencion`
 ADD PRIMARY KEY (`cod_ret`);

--
-- Indices de la tabla `user_audit`
--
ALTER TABLE `user_audit`
 ADD PRIMARY KEY (`cod_emplea_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
