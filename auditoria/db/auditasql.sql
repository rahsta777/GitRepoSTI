-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2015 a las 20:11:03
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `auditasql`
--
CREATE DATABASE IF NOT EXISTS `auditasql` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `auditasql`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d001_programa_aud`
--

CREATE TABLE IF NOT EXISTS `d001_programa_aud` (
  `num_detalle` varchar(22) NOT NULL,
  `fe_fecha` date NOT NULL,
  `descrp_program` varchar(60) NOT NULL,
  `num_filial` varchar(15) NOT NULL,
  `num_cargo` varchar(4) NOT NULL,
  PRIMARY KEY (`num_detalle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `d001_programa_aud`
--

INSERT INTO `d001_programa_aud` (`num_detalle`, `fe_fecha`, `descrp_program`, `num_filial`, `num_cargo`) VALUES
('prg001', '2015-03-20', 'programacion de MODIFICADO', 'fl003', '003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d002t_detalle_plan`
--

CREATE TABLE IF NOT EXISTS `d002t_detalle_plan` (
  `num_plan` varchar(22) NOT NULL,
  `num_detalle` varchar(15) NOT NULL,
  `num_activi` varchar(15) NOT NULL,
  `num_requisito` varchar(15) NOT NULL,
  `num_cargo` varchar(15) NOT NULL,
  `num_unidaddelleplan` varchar(15) NOT NULL,
  `fecha_detall` date NOT NULL,
  `num_cedula` varchar(12) NOT NULL,
  PRIMARY KEY (`num_plan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `d002t_detalle_plan`
--

INSERT INTO `d002t_detalle_plan` (`num_plan`, `num_detalle`, `num_activi`, `num_requisito`, `num_cargo`, `num_unidaddelleplan`, `fecha_detall`, `num_cedula`) VALUES
('pl001', 'pl001d', 'acti002', 'rq002', 'crgo002', 'und002', '2015-04-25', '9668179    ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d003t_detalle_aud`
--

CREATE TABLE IF NOT EXISTS `d003t_detalle_aud` (
  `num_auditoria1` varchar(10) NOT NULL,
  `num_requisito` varchar(10) NOT NULL,
  `tex_Descrp` varchar(50) NOT NULL,
  `num_nivl` varchar(10) NOT NULL,
  `tex_nota` varchar(25) NOT NULL,
  PRIMARY KEY (`num_auditoria1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `d003t_detalle_aud`
--

INSERT INTO `d003t_detalle_aud` (`num_auditoria1`, `num_requisito`, `tex_Descrp`, `num_nivl`, `tex_nota`) VALUES
('au001', 'rq007 ', 'descripcion de au001', '12', 'debe tomasr not'),
('aud002', 'rq001 ', 'descripcion de au002', '5', 'si notas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d004t_nocomformidad`
--

CREATE TABLE IF NOT EXISTS `d004t_nocomformidad` (
  `num_audit` varchar(22) NOT NULL,
  `fech_audit_noconfom` date NOT NULL,
  `num_ced_proponente` varchar(45) NOT NULL,
  `text_estdo` varchar(45) NOT NULL,
  `text_descrip` varchar(45) NOT NULL,
  `text_clasificacion` varchar(45) NOT NULL,
  `text_tipificacion` varchar(45) NOT NULL,
  `text_tipo_nc` varchar(50) NOT NULL,
  `num_inidad_nocofor` varchar(45) NOT NULL,
  `num_requierent` varchar(20) NOT NULL,
  `text_recomendacion` varchar(45) NOT NULL,
  `num_ced_evaluador` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `d004t_nocomformidad`
--

INSERT INTO `d004t_nocomformidad` (`num_audit`, `fech_audit_noconfom`, `num_ced_proponente`, `text_estdo`, `text_descrip`, `text_clasificacion`, `text_tipificacion`, `text_tipo_nc`, `num_inidad_nocofor`, `num_requierent`, `text_recomendacion`, `num_ced_evaluador`) VALUES
('nc0001', '2015-03-20', 'V-10.111.123 ', '', 'por revicion de la directiva', 'sin clasificar', 'sin tipificar', 'tipnc001 ', 'und001 ', '001 ', 'Capacitacion', '10.101.123'),
('nc002', '2015-02-25', 'V-10.111.123 ', '', 'sin descripcion', 'sin clasificar', 'sin tipificar', 'tipnc002 ', 'und003 ', '002 ', 'mejora la infraectructuras', 'V-10.123.123 '),
('nc0003', '2015-02-25', 'V-9.668.179 ', '', 'sin descripcion', 'sin clasificar', 'sin tipificar', 'tipnc004 ', 'und006 ', '002 ', 'inveersio', 'V-10.123.123 '),
('nc0014', '0000-00-00', 'V-9.668.179 ', '', 'descripcion', 'clasificacion', 'tipificacion', 'nc001 ', '001 ', '001 ', 'recomendaciones', '9666666'),
('nc001', '0000-00-00', 'V-9.668.179 ', '', 'descripcion ninguna', 'ninguna clafificacion', 'ninguna tipificacion', 'nc001 ', '001 ', '001 ', 'ninguna reco', 'v-9668179'),
('nc002', '0000-00-00', 'V-9.668.179 ', '', 'no hay descripcion', 'ninguna clafificacion', 'ninguna tipificacion', 'nc001 ', '001 ', '001 ', 'ninguna reco', '9666666'),
('nc0015', '2015-12-12', 'V-12.123.123 ', '', 'ninguna Descripcion', 'ninguna clasificacion', 'ninguna tipificACION', 'nc001 ', '001 ', '001 ', 'NINGUNA', 'v00000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d005tacciones_correc_prev`
--

CREATE TABLE IF NOT EXISTS `d005tacciones_correc_prev` (
  `num_accion_corr_pre` varchar(25) NOT NULL,
  `descrip_accion_correc_prev` varchar(50) NOT NULL,
  `analis_accion_co_prev` varchar(60) NOT NULL,
  `metodolog_accion` varchar(60) NOT NULL,
  `herramientas` varchar(45) NOT NULL,
  `accion_aplicada` varchar(45) NOT NULL,
  `num_ced_proponente` varchar(15) NOT NULL,
  `fe_culmin` date NOT NULL,
  `co_aprob` varchar(45) NOT NULL,
  `comentario` varchar(45) NOT NULL,
  `co_cedula` varchar(15) NOT NULL,
  `fecha_entreg` date NOT NULL,
  `respseguimiento` varchar(45) NOT NULL,
  `cierre` varchar(45) NOT NULL,
  `co_ced_asegu_sgc` varchar(15) NOT NULL,
  `co_ced_representt_sgc` varchar(15) NOT NULL,
  PRIMARY KEY (`num_accion_corr_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `d005tacciones_correc_prev`
--

INSERT INTO `d005tacciones_correc_prev` (`num_accion_corr_pre`, `descrip_accion_correc_prev`, `analis_accion_co_prev`, `metodolog_accion`, `herramientas`, `accion_aplicada`, `num_ced_proponente`, `fe_culmin`, `co_aprob`, `comentario`, `co_cedula`, `fecha_entreg`, `respseguimiento`, `cierre`, `co_ced_asegu_sgc`, `co_ced_representt_sgc`) VALUES
('acc002', 'descriocion acciones preventicvas 002', 'sin analisis', 'sin metodologia no tiene soposrte tecnico', 'sin herramientas ', 'accion aplicar ninguna', 'V-12.123.123  ', '2015-05-01', '121212', 'sin comentario', '131313', '2015-03-30', '', '', '', ''),
('acci001', 'Descripcion de acc001', 'sin analisis', 'metodologia dea cc001 es metodo inductivo', 'sin herrranmientas', 'cambiar balbulas y aplicar normas covenin', 'V-10.111.123  ', '0000-00-00', '121212', '', '9', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i001t_requisitos`
--

CREATE TABLE IF NOT EXISTS `i001t_requisitos` (
  `num_requisito` varchar(15) NOT NULL,
  `descrip_requisito` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `i001t_requisitos`
--

INSERT INTO `i001t_requisitos` (`num_requisito`, `descrip_requisito`) VALUES
('rq001', 'este es un requisito 001'),
('rq002', 'un requrimiento rq002'),
('rq003', 'unrequisito rq003'),
('rq004', 'requisito rq004'),
('rq005', 'un requisito rq005'),
('rq006', 'lkskljjkldas'),
('rq007', '0007'),
('rq001', 'este es un requisito 001'),
('rq002', 'un requrimiento rq002'),
('rq003', 'unrequisito rq003'),
('rq004', 'requisito rq004'),
('rq005', 'un requisito rq005'),
('rq006', 'lkskljjkldas'),
('rq007', '0007');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i002t_cierre_no_c`
--

CREATE TABLE IF NOT EXISTS `i002t_cierre_no_c` (
  `co_cierre` varchar(15) NOT NULL,
  `descrip_co_cierre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i003_aprobador`
--

CREATE TABLE IF NOT EXISTS `i003_aprobador` (
  `num_ced_aprobador` varchar(15) NOT NULL,
  `descrip_aprobador` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i004t_personal`
--

CREATE TABLE IF NOT EXISTS `i004t_personal` (
  `num_ced_personal` varchar(15) NOT NULL,
  `nom_personal` varchar(45) NOT NULL,
  `num_cargo` varchar(15) NOT NULL,
  `text_indicador` varchar(45) NOT NULL,
  `num_gerencia` varchar(15) NOT NULL,
  `num_unidad` varchar(15) NOT NULL,
  `num_rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `i004t_personal`
--

INSERT INTO `i004t_personal` (`num_ced_personal`, `nom_personal`, `num_cargo`, `text_indicador`, `num_gerencia`, `num_unidad`, `num_rol`) VALUES
('V-9.668.179', 'Richard Henriquez', '020', 'nose', '002', '001', 'rol001'),
('V-10.111.123', 'Raul Velasco', 'fl001', '01', '001', '002', 'rol001'),
('V-9.668.179', 'Richard Henriquez', '020', 'nose', '002', '001', 'rol001'),
('V-12.123.123', 'Ricardo Perez', 'ing12', '12', '001', '001', '001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i005t_unidad`
--

CREATE TABLE IF NOT EXISTS `i005t_unidad` (
  `num_unidad` varchar(15) NOT NULL,
  `descrip_unidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `i005t_unidad`
--

INSERT INTO `i005t_unidad` (`num_unidad`, `descrip_unidad`) VALUES
('und001', 'Fraccionamiento'),
('und002', 'Almacenaje'),
('und003', 'TErminal Marino'),
('und004', 'Mantenimiento Operac'),
('und005', 'Gestion de Calidad'),
('und006', 'Bariven'),
('und007', 'Planta de Extraccion'),
('001', 'UNIDAD1'),
('002', 'descrip 002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i006t_cargo`
--

CREATE TABLE IF NOT EXISTS `i006t_cargo` (
  `num_cargos` varchar(15) NOT NULL,
  `descrip_cargos` varchar(45) NOT NULL,
  PRIMARY KEY (`num_cargos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `i006t_cargo`
--

INSERT INTO `i006t_cargo` (`num_cargos`, `descrip_cargos`) VALUES
('001', 'administradorn Junior'),
('crgo001', 'Contador'),
('crgo002', 'Contralor 1'),
('crgo003', 'contralor 2'),
('crgo004', 'Ingeniero'),
('crgo005', 'Ing. Civil'),
('f001', 'descri filia001'),
('fl001', 'descripcion f001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j001t_roles`
--

CREATE TABLE IF NOT EXISTS `j001t_roles` (
  `num_rol` varchar(15) NOT NULL,
  `descrp_rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j001t_roles`
--

INSERT INTO `j001t_roles` (`num_rol`, `descrp_rol`) VALUES
('001', 'liniero 1'),
('rol001', 'este es rol 0001'),
('001', 'liniero 1'),
('rol001', 'este es rol 0001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j0012t_despre_correc`
--

CREATE TABLE IF NOT EXISTS `j0012t_despre_correc` (
  `num_despre_corr` varchar(15) NOT NULL,
  `descrip_prev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j0013t_auditoria`
--

CREATE TABLE IF NOT EXISTS `j0013t_auditoria` (
  `num_auditoria` varchar(15) NOT NULL,
  `num_gerencia` varchar(15) NOT NULL,
  `tex_unidad` varchar(45) NOT NULL,
  `num_ced` varchar(15) NOT NULL,
  `fe_fecha` date NOT NULL,
  PRIMARY KEY (`num_auditoria`),
  UNIQUE KEY `num_gerencia` (`num_gerencia`,`tex_unidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j0013t_auditoria`
--

INSERT INTO `j0013t_auditoria` (`num_auditoria`, `num_gerencia`, `tex_unidad`, `num_ced`, `fe_fecha`) VALUES
('au001', '002 ', 'texto unidad modificado', 'V-9.755.555', '2015-01-23'),
('au003', '002', 'el texto unidad', 'V-10.000.000', '2015-02-23'),
('aud002', '003', 'texto de la unidad', 'V-9.755.555', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j0014t_detalle_programa`
--

CREATE TABLE IF NOT EXISTS `j0014t_detalle_programa` (
  `num_detall_program` varchar(15) NOT NULL,
  `num_gerencia` varchar(15) NOT NULL,
  `num_unidad` varchar(15) NOT NULL,
  `fe_mes` date NOT NULL,
  `num_estado` varchar(15) NOT NULL,
  PRIMARY KEY (`num_detall_program`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j0014t_detalle_programa`
--

INSERT INTO `j0014t_detalle_programa` (`num_detall_program`, `num_gerencia`, `num_unidad`, `fe_mes`, `num_estado`) VALUES
('prg001d', '002', 'und002', '2015-03-20', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j002t_activ_proc`
--

CREATE TABLE IF NOT EXISTS `j002t_activ_proc` (
  `num_activ` varchar(15) NOT NULL,
  `desc_nom_actvi` varchar(46) NOT NULL,
  PRIMARY KEY (`num_activ`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j002t_activ_proc`
--

INSERT INTO `j002t_activ_proc` (`num_activ`, `desc_nom_actvi`) VALUES
('act001', 'proceso de almacenamiento'),
('acti002', 'acitividades complementarias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j003t_detalle`
--

CREATE TABLE IF NOT EXISTS `j003t_detalle` (
  `num_detalle` varchar(15) NOT NULL,
  `descri_detalle` varchar(45) NOT NULL,
  PRIMARY KEY (`num_detalle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j004t_ced_evaluador`
--

CREATE TABLE IF NOT EXISTS `j004t_ced_evaluador` (
  `num_ced_evaluadr` varchar(15) NOT NULL,
  `descrp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j004t_ced_evaluador`
--

INSERT INTO `j004t_ced_evaluador` (`num_ced_evaluadr`, `descrp`) VALUES
('V-10.123.123', 'Pedro Perz'),
('eval001', 'sdsdsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j005t_planes`
--

CREATE TABLE IF NOT EXISTS `j005t_planes` (
  `num_planes` varchar(15) NOT NULL,
  `descrp_planes` varchar(45) NOT NULL,
  `fe_fecha_planes` date NOT NULL,
  PRIMARY KEY (`num_planes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j005t_planes`
--

INSERT INTO `j005t_planes` (`num_planes`, `descrp_planes`, `fe_fecha_planes`) VALUES
('pl001', 'descripcion del plan modificado    ', '2015-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j006t_filiales`
--

CREATE TABLE IF NOT EXISTS `j006t_filiales` (
  `num_filial` varchar(15) NOT NULL,
  `descrp_filial` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j006t_filiales`
--

INSERT INTO `j006t_filiales` (`num_filial`, `descrp_filial`) VALUES
('fl001', 'descriptcio fl001'),
('fl001', 'descriptcio fl001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j007t_gerencia`
--

CREATE TABLE IF NOT EXISTS `j007t_gerencia` (
  `num_gerencia` varchar(15) NOT NULL,
  `descrip` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j007t_gerencia`
--

INSERT INTO `j007t_gerencia` (`num_gerencia`, `descrip`) VALUES
('001', 'administracion'),
('002', 'contabilida'),
('003', 'personal'),
('001', 'administracion'),
('002', 'contabilida'),
('003', 'personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j008t_ced_proponente`
--

CREATE TABLE IF NOT EXISTS `j008t_ced_proponente` (
  `num_ced_proponente` varchar(15) NOT NULL,
  `descri_proponente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j008t_ced_proponente`
--

INSERT INTO `j008t_ced_proponente` (`num_ced_proponente`, `descri_proponente`) VALUES
('V-9.668.179 ', 'Richard Henriquez'),
('V-10.111.123 ', 'Raul Velasco'),
('10.123.123', 'Rosa Lopez'),
('12.123.123', 'Raul Velazquez'),
('V-12.123.123 ', 'Ricardo Perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j009t_tipo_nc`
--

CREATE TABLE IF NOT EXISTS `j009t_tipo_nc` (
  `num_tip_nc` varchar(15) NOT NULL,
  `descr_nc` varchar(45) NOT NULL,
  PRIMARY KEY (`num_tip_nc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j009t_tipo_nc`
--

INSERT INTO `j009t_tipo_nc` (`num_tip_nc`, `descr_nc`) VALUES
('nc001', 'ffggfgf'),
('tipnc001', 'Falla Repetitiva de Equipos'),
('tipnc002', 'Desviacion del plan'),
('tipnc003', 'Incumplimiento del Procedimiento'),
('tipnc004', 'Quejas del Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j010t_aprobar`
--

CREATE TABLE IF NOT EXISTS `j010t_aprobar` (
  `num_aprob` varchar(15) NOT NULL,
  `descrip_aprob` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j011t_requiere`
--

CREATE TABLE IF NOT EXISTS `j011t_requiere` (
  `num_requiere` varchar(15) NOT NULL,
  `descrip_requiere` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `j011t_requiere`
--

INSERT INTO `j011t_requiere` (`num_requiere`, `descrip_requiere`) VALUES
('001', 'Plan de acciones correctivas'),
('002', 'Correctivas inmediatas'),
('003', 'es el 0003'),
('001', 'Plan de acciones correctivas'),
('002', 'Correctivas inmediatas'),
('003', 'es el 0003');

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
('richard', 'Henriquez', '', 'rh', 'ingeniero', 'administrador', '00025', 'man', 'rahsta', 'ral7gku4rfhLk', '', '12345', 'activo', '0000-00-00'),
('anonimo', 'anonimo', '', '', 'ingeniero', 'administrador', '002', 'man', 'admin', 'adpliAB3dA.06', '', '12345', 'activo', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
