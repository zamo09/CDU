-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2019 a las 00:24:21
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlunidades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` int(11) NOT NULL COMMENT 'Clave Primaria',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre de la actividad',
  `descripcion` varchar(255) NOT NULL COMMENT 'Descripcion de la actividad',
  `activo` tinyint(1) NOT NULL COMMENT 'Estado de la actividad',
  `id_usuario` int(11) NOT NULL COMMENT 'Usuario que lo agrego'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividad`, `nombre`, `descripcion`, `activo`, `id_usuario`) VALUES
(1, 'Ruta', 'Salida A Rutas', 1, 1),
(2, 'Asigancion', 'Movimiento para usuarios Asignados', 1, 1),
(3, 'Promotoria', 'Salida para usuarios de promotoria', 1, 1),
(4, 'Atencion a Clientes', 'Revisar Fechas de frescura', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_conductor` int(11) NOT NULL COMMENT 'Clave Primaria',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del conductor',
  `activo` tinyint(1) NOT NULL COMMENT 'Estado del conductor',
  `departamento` varchar(200) NOT NULL COMMENT 'Departamento al que pertenece',
  `id_ruta` int(11) DEFAULT NULL COMMENT 'Id de la ruta asignada',
  `empresa` varchar(3) NOT NULL COMMENT 'Empresa a la que pertenece',
  `id_usuario` int(11) NOT NULL COMMENT 'Usuario que lo agrego',
  `fecha` date NOT NULL COMMENT 'Fecha y hora en que se agrego',
  `tipolic` varchar(3) NOT NULL COMMENT 'Tipo de licencia del conductor',
  `fechalic` date NOT NULL COMMENT 'Fecha en la que vence la licencia',
  `id_unidad` int(11) NOT NULL COMMENT 'Unidad asignada',
  `estado` tinyint(3) DEFAULT '0' COMMENT 'Estado del conductor con respecto a salidas.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_conductor`, `nombre`, `activo`, `departamento`, `id_ruta`, `empresa`, `id_usuario`, `fecha`, `tipolic`, `fechalic`, `id_unidad`, `estado`) VALUES
(1, 'Sin Conductor', 1, 'Sin Departamento', 1, 'Sin', 1, '0000-00-00', 'X', '0000-00-00', 1, 1),
(3, 'Prueba', 1, '1', 2, 'CBA', 1, '2019-08-14', 'B', '2019-08-15', 2, 1),
(5, 'RAYMUNDO PAZ ONOFRE', 1, '2', 6, 'CBA', 3, '2019-08-20', 'B', '2020-11-15', 11, 0),
(6, 'JUAN MIGUEL NIEVA', 1, '2', 1, 'CBA', 3, '2019-08-20', 'B', '0000-00-00', 1, 0),
(7, 'JOSE MARCOS VAZQUEZ', 1, '2', 8, 'CBA', 3, '2019-08-20', 'B', '2019-09-06', 1, 0),
(8, 'IVAN BRITO', 1, '2', 4, 'CBA', 3, '2019-08-20', 'B', '2022-06-24', 1, 0),
(9, 'JESUS ARMANDO HERNANDEZ', 1, '2', 3, 'CBC', 3, '2019-08-20', 'B', '2021-06-28', 1, 1),
(10, 'JOSE RICARDO PEREZ', 1, '2', 7, 'CBA', 3, '2019-08-20', 'B', '2019-09-06', 1, 0),
(11, 'JUAN PABLO MORALES', 1, '2', 5, 'CBA', 3, '2019-08-20', 'B', '2019-12-02', 3, 0),
(12, 'Jonathan Giles Tinoco', 1, '2', 1, 'CBA', 3, '2019-10-17', 'B', '0000-00-00', 1, 1),
(13, 'ABDON DOMINGUEZ PALACIOS', 1, '2', 1, 'CBA', 4, '2019-10-25', 'B', '2021-11-09', 1, 0),
(14, 'ALICIA LOPEZ AGUILAR', 1, '3', 1, 'CBA', 4, '2019-10-25', 'B', '2021-05-16', 1, 0),
(15, 'ANGELICA MORENO CONTRERAS', 1, '1', 1, 'CBA', 4, '2019-10-25', 'B', '2022-03-15', 1, 0),
(16, 'EDER SIDARTHA LOPEZ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2020-01-05', 1, 0),
(17, 'GERSON ZILLI', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2020-01-25', 1, 0),
(18, 'GUSTAVO HUERTA ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-12-24', 1, 0),
(19, 'HECTOR BARRERA EZQUIVEL', 1, '2', 1, 'CBA', 4, '2019-10-26', 'A', '2021-09-29', 1, 0),
(20, 'HUMBERTO MARTINEZ SALINAS', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-10-15', 1, 0),
(21, 'ISAAC JOSUE GONZALEZ GRANADOS', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-11-29', 1, 0),
(22, 'JESUS FERNANDO ALCANTARA RODRIGUEZ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-04-22', 1, 0),
(23, 'JSOUE ALBERTO REYES DE LOS SANTOS', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-11-12', 1, 0),
(24, 'JOSE IGNACIO PEÑA PEREZ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-02-21', 1, 0),
(25, 'JUAN CARLOS JIMENEZ VELEZ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-10-18', 1, 0),
(26, 'LUIS DANIEL BOLAÑOS AGUIRRE', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-04-16', 1, 0),
(27, 'MARCOS SOLIS HERNANDEZ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-03-08', 1, 0),
(28, 'MARIANO ALBERTO DIAZ EUGENIO', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-08-15', 1, 0),
(29, 'MARTIN SEGURA MENDOZA', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-06-10', 1, 0),
(30, 'NOE GOMEZ APARICIO', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-05-27', 1, 0),
(31, 'OSCAR GUTIERREZ TAGLE ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-10-04', 1, 0),
(32, 'PEDRO JUAREZ SANCHEZ ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-02-06', 1, 0),
(33, 'PROSPERO LUNA UBERA', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2022-10-08', 1, 0),
(34, 'RAUL SOSA ALEMAN', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2020-04-25', 1, 0),
(35, 'RENE ANTONIO GARCIA VAZQUEZ', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-01-18', 1, 0),
(36, 'ADRIAN VICTORIA ILLESCAS', 1, '2', 1, 'CBC', 4, '2019-10-26', 'B', '2021-06-11', 1, 0),
(37, 'AGUSTIN ORDUÑA MARTINEZ', 1, '2', 1, 'CBC', 4, '2019-10-26', 'B', '2020-02-22', 1, 0),
(38, 'ELISEO DIMAS MENDOZA', 1, '2', 1, 'CBC', 4, '2019-10-26', 'B', '2022-01-18', 1, 0),
(39, 'GUILLERMO DOMINGUEZ MEDINA ', 1, '2', 1, 'CBC', 4, '2019-10-26', 'B', '2021-01-18', 1, 0),
(40, 'JOSE LUIS ALTAMIRA CUE', 1, '2', 1, 'CBC', 4, '2019-10-26', 'B', '2022-04-08', 1, 0),
(41, 'NATALY MUÑOZ GALICIA', 1, '2', 1, 'CBC', 4, '2019-10-26', 'B', '2022-08-07', 1, 0),
(42, 'BALTASAR SANCHEZ REGULES', 1, '2', 1, 'CBA', 4, '2019-10-26', 'B', '2021-09-10', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL COMMENT 'Clave Primaria',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre de la unidad',
  `activo` tinyint(1) NOT NULL COMMENT 'Estado de la unidad',
  `id_usuario` int(11) NOT NULL COMMENT 'Usuario que lo agrego'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`, `activo`, `id_usuario`) VALUES
(1, 'Sistemas', 1, 1),
(2, 'Ventas', 1, 1),
(3, 'Contabilidad', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_movimiento` int(11) NOT NULL COMMENT 'Clave Primaria',
  `id_usuario` int(11) NOT NULL COMMENT 'Usuario que lo agrego',
  `id_unidad` int(11) NOT NULL COMMENT 'unidad que se utilizo',
  `id_conductor` int(11) NOT NULL COMMENT 'Conductor que utilizo la unidad',
  `id_actividad` int(11) NOT NULL COMMENT 'Tipo de actividad que se realiza',
  `hora_salida` datetime NOT NULL COMMENT 'Fecha y hora de la salida',
  `hora_retorno` datetime NOT NULL COMMENT 'Fecha y hora de la salida',
  `km_salida` varchar(255) NOT NULL COMMENT 'Kilometraje con el que salio',
  `km_retorno` varchar(255) NOT NULL COMMENT 'Kilometraje con el que regreso',
  `activo` tinyint(1) NOT NULL COMMENT 'Saber si es considerado o no',
  `estado` tinyint(1) NOT NULL COMMENT 'Estado del movimiento',
  `ubicacion` varchar(255) NOT NULL COMMENT 'Lugar donde se encuentra la unidad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `id_usuario`, `id_unidad`, `id_conductor`, `id_actividad`, `hora_salida`, `hora_retorno`, `km_salida`, `km_retorno`, `activo`, `estado`, `ubicacion`) VALUES
(1, 1, 3, 11, 1, '2019-10-02 14:25:00', '2019-10-02 14:34:00', '1500', '1542', 1, 0, 'Bodega'),
(8, 1, 3, 11, 1, '2019-10-03 18:21:36', '2019-10-11 17:54:11', '1542', '1555', 1, 0, 'Bodega'),
(9, 1, 2, 3, 1, '2019-10-11 12:53:04', '0000-00-00 00:00:00', '15000', '', 1, 1, 'Bodega'),
(10, 1, 3, 11, 1, '2019-10-14 17:23:23', '2019-10-14 17:25:12', '1555', '1560', 1, 0, 'Bodega'),
(11, 1, 3, 11, 1, '2019-10-14 17:26:13', '2019-10-14 17:25:12', '1560', '1565', 1, 0, 'Bodega'),
(12, 1, 3, 11, 1, '2019-10-14 17:31:10', '2019-10-14 17:25:12', '1565', '1567', 1, 0, 'Bodega'),
(13, 1, 3, 11, 1, '2019-10-14 17:35:05', '2019-10-14 17:35:40', '1567', '1568', 1, 0, 'Bodega'),
(14, 1, 3, 11, 1, '2019-10-14 17:36:21', '2019-10-14 17:35:40', '1568', '1569', 1, 0, 'Bodega'),
(15, 1, 3, 11, 1, '2019-10-14 17:37:47', '2019-10-14 17:35:40', '1569', '1575', 1, 0, 'Bodega'),
(16, 1, 3, 11, 1, '2019-10-14 17:39:26', '2019-10-14 17:35:40', '1575', '1579', 1, 0, 'Bodega'),
(17, 1, 3, 11, 1, '2019-10-14 17:40:33', '2019-10-14 17:40:38', '1579', '1584', 1, 0, 'Bodega'),
(18, 1, 8, 9, 1, '2019-10-16 17:14:36', '2019-10-18 11:37:40', '106834', '106890', 1, 0, 'Bodega'),
(19, 1, 3, 11, 1, '2019-10-21 09:44:59', '2019-10-21 17:22:25', '1584', '1589', 1, 1, 'Bodega'),
(20, 1, 13, 12, 4, '2019-10-21 09:52:46', '0000-00-00 00:00:00', '170721', '', 1, 1, 'Bodega'),
(21, 1, 8, 9, 1, '2019-10-21 17:07:29', '0000-00-00 00:00:00', '106890', '', 1, 1, 'Bodega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL COMMENT 'Clave Primaria',
  `nombre` varchar(55) NOT NULL COMMENT 'Nombre de la ruta',
  `descripcion` varchar(255) NOT NULL COMMENT 'Descripcion de la ruta',
  `activo` tinyint(1) NOT NULL COMMENT 'Estado de la ruta',
  `asignacion` tinyint(1) NOT NULL COMMENT 'Usuario Asiganada',
  `disponible` tinyint(1) NOT NULL COMMENT 'Saber si esta asiganada o no',
  `id_usuario` int(11) NOT NULL COMMENT 'usuario que agrego la ruta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `nombre`, `descripcion`, `activo`, `asignacion`, `disponible`, `id_usuario`) VALUES
(1, 'Sin Ruta', 'Ruta creada por el sistema para usuarios sin asignacion', 1, 1, 0, 1),
(2, 'R011', 'RUTA PUEBLA', 1, 3, 1, 3),
(3, 'R012', 'RUTA CORDOBA', 1, 9, 1, 3),
(4, 'R013', 'RUTA CORDOBA', 1, 8, 1, 3),
(5, 'R014', 'RUTA LOCAL', 1, 11, 1, 3),
(6, 'R015', 'RUTA LOCAL', 1, 5, 1, 3),
(7, 'R016', 'RUTA LOCAL', 1, 10, 1, 3),
(8, 'R017', 'RUTA LOCAL', 1, 7, 0, 3),
(9, 'R018', 'RUTA LOCAL', 1, 1, 0, 3),
(10, 'R018', 'RUTA LOCAL', 1, 1, 0, 3),
(11, 'R021', 'RUTA LOCAL', 1, 1, 0, 3),
(12, 'R022', 'RUTA LOCAL', 1, 1, 0, 3),
(13, 'R023', 'RUTA LOCAL', 1, 1, 0, 3),
(14, 'R024', 'RUTA LOCAL', 1, 1, 0, 3),
(15, 'R025', 'RUTA LOCAL', 1, 1, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id_unidad` int(11) NOT NULL COMMENT 'Clave Primaria',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre de la unidad',
  `activo` tinyint(1) NOT NULL COMMENT 'Estado de la unidad',
  `marca` varchar(255) NOT NULL COMMENT 'marca de la unidad',
  `modelo` varchar(255) NOT NULL COMMENT 'modelo de la unidad',
  `placas` varchar(255) NOT NULL COMMENT 'placas de la unidad',
  `año` int(11) NOT NULL COMMENT 'año de la unidad',
  `tipo` varchar(255) NOT NULL COMMENT 'tipo de la unidad',
  `id_usuario` int(11) NOT NULL COMMENT 'Usuario que lo agrego',
  `empresa` varchar(3) NOT NULL COMMENT 'Empresa a la que pertenece',
  `asignada` tinyint(1) NOT NULL COMMENT 'Si la unidad esta asignada o no',
  `numeromotor` varchar(255) NOT NULL COMMENT 'Numero del motor de la unidad',
  `numeropoliza` varchar(255) NOT NULL COMMENT 'Numero de poliza de la unidad',
  `fechapoliza` date NOT NULL COMMENT 'Fecha en que expira la poliza',
  `estado` tinyint(3) DEFAULT '0' COMMENT 'Estado de la unidad con respecto a las salidas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id_unidad`, `nombre`, `activo`, `marca`, `modelo`, `placas`, `año`, `tipo`, `id_usuario`, `empresa`, `asignada`, `numeromotor`, `numeropoliza`, `fechapoliza`, `estado`) VALUES
(1, 'Sin unidad', 1, 'Sin marca', 'Sin modelo', '0000', 0, 'Sin tipo', 1, 'CBA', 1, '0000', '0000', '0000-00-00', 1),
(2, '7', 1, 'NISSAN', 'URVAN', 'XW51312', 2016, 'VAN', 3, 'CBA', 3, 'QR25578404Q', 'HR110851', '2020-05-29', 1),
(3, 'Prueba', 1, 'Prueba', 'Prueba', 'Prueba', 0, 'Prueba', 1, 'CBA', 11, 'Prueba', 'Prueba', '2019-09-05', 0),
(4, '2', 1, 'NISSAN', 'PICKUP', 'XT40911', 2007, 'PICKUP', 3, 'CBA', 1, 'KA24311780A', 'P00-12107001', '2019-08-29', 0),
(5, '16', 1, 'NISSAN', 'MP300', 'XX17679', 2016, 'PICKUP', 3, 'CBA', 1, '1GCH635RY1103956', ' P0012107972', '2019-10-18', 0),
(6, '3', 1, 'NISSAN', 'PICKUP', 'XT40913', 2008, 'PICKUP', 3, 'CBA', 1, 'KA24356947A', 'P0012106509', '2019-09-06', 0),
(7, '29', 1, 'NISSAN', 'CHASIS', 'XU20097', 2009, 'PICKUP', 3, 'CBA', 1, 'KA24401092A', 'P0012106789', '2020-06-06', 0),
(8, '14', 1, 'NISSAN', 'D23', 'XW51554', 2016, 'VAN', 3, 'CBA', 1, 'QR25033512H', 'P0012000081449', '2020-08-26', 1),
(9, '5', 1, 'NISSAN', 'CHASIS', 'XV01934', 2009, 'PICKUP', 3, 'CBA', 1, '3N6DD25T9K014582', 'P0012106788', '2013-08-19', 0),
(10, '32', 1, 'NISSAN', 'CHASIS', 'XF1248A', 2018, 'PICKUP', 3, 'CBA', 1, 'QR25201889H', '4129868954', '2020-11-30', 0),
(11, '10', 1, 'NISSAN', 'CHASIS', 'XT37845', 2009, 'CHASIS', 3, 'CBA', 5, 'KA24432207A', 'P0012108803', '2020-02-10', 0),
(12, '4', 1, 'NISSAN', 'CHASIS', 'XT40790', 2009, 'PICKUP', 3, 'CBA', 1, '3N6DD25T89K038048', 'P0012109197', '2020-03-06', 0),
(13, '31', 1, 'NISSAN', 'PICKUP', 'XW65697', 2012, 'CHASIS', 3, 'CBA', 1, 'K424567682A', 'P0012-106967', '0000-00-00', 1),
(14, '1', 1, 'Nissan', 'NP300', 'XT37844', 2009, 'CHASIS', 4, 'CBA', 1, 'KA24435109A', 'P00-1-2-108804', '2020-02-10', 0),
(15, '6', 1, 'NISSAN', 'NP300', 'XT35541', 2011, 'CHASIS', 4, 'CBA', 1, 'KA24518429A', 'P00-1-2-110182', '2020-06-01', 0),
(16, '8', 1, 'NISSAN', 'MARCH ', 'XX32815', 2017, 'CARGO', 4, 'CBA', 1, 'HR16778922M', 'P00-1-2-110580', '2020-05-29', 0),
(17, '9', 1, 'NISSAN', 'MARCH', 'XX32816', 2017, 'CARGO', 4, 'CBA', 1, 'HR16776753M', 'P00-1-2-110581', '2020-05-29', 0),
(18, '11', 1, 'NISSAN', 'NP300', 'XT40915', 2011, 'CHASIS', 4, 'CBA', 1, 'KA24527514A', 'P00-1-2-110183', '2020-06-01', 0),
(19, '18', 1, 'NISSAN', 'MARCH', 'YAC358A', 2018, 'SEDAN', 4, 'CBA', 1, 'HR16441288T', '257985796', '2020-11-30', 0),
(20, '19', 1, 'NISSAN', 'MARCH', 'YAC359A', 2018, 'SEDAN', 4, 'CBA', 1, 'HR16773965P', '257985515', '2020-11-30', 0),
(21, '20', 1, 'TOYOTA', 'HIACE', 'YHA8719', 2008, 'VAN/PASAJEROS', 4, 'CBC', 1, '2TR8152286', 'P00-1-1-110644', '2020-07-08', 0),
(22, '21', 1, 'NISSAN', 'MARCH', 'YAC357A', 2018, 'SEDAN', 4, 'CBA', 1, 'HR16774149P', '257958622', '2020-11-30', 0),
(23, '22', 1, 'CHRYSLER ', 'SPIRIT', 'YHA1520', 1990, 'SEDAN', 4, 'CBC', 1, 'LS005251', 'P00-1-1-108498', '2020-01-06', 0),
(24, '23', 1, 'NISSAN', 'D-21', 'XT37033', 2007, 'CHASIS', 4, 'CBA', 1, 'KA24311779A', 'P00-1-2-111284', '2020-08-29', 0),
(25, '24', 1, 'NISSAN', 'NP300', 'XF37033', 2018, 'CHASIS', 4, 'CBA', 1, 'QR25195686H', '4129868914', '2020-11-30', 0),
(26, '25', 1, 'NISSAN', 'NP300', 'XJ0726A', 2019, 'DOBLE CABINA', 4, 'CBA', 1, 'QR25035805H', '320461155', '2022-03-28', 0),
(27, '26', 1, 'NISSAN', 'D-21', 'XT38193', 2008, 'DOBLE CABINA', 4, 'CBA', 1, 'KA24356371A', 'P00-1-2-110770', '2020-07-18', 0),
(28, '27', 1, 'NISSAN', 'D-21', 'XU20096', 2008, 'CHASIS', 4, 'CBA', 1, 'KA24358638A', 'P00-1-2-110772', '2020-07-17', 0),
(29, '28', 1, 'NISSAN', 'TSURU', 'YHA2642', 2007, 'SEDAN', 4, 'CBA', 1, 'GA16733022W', 'P00-1-1-110769', '2020-07-18', 0),
(30, '30', 1, 'NISSAN', 'CABSTAR', 'XT40791', 2008, 'CHASIS', 4, 'CBA', 1, 'YD25926174A', 'P00-1-2-111115', '2020-08-13', 0),
(31, '33', 1, 'NISSAN', 'NP300', 'XW53961', 2013, 'CHASIS', 4, 'CBA', 1, 'KA24588867A', 'P00-1-2-111099', '2020-08-05', 0),
(32, '34', 1, 'NISSAN', 'MARCH', 'XJ6385A', 2019, 'CARGO', 4, 'CBA', 1, 'HR16712234T', 'NRFM190120549', '2022-07-20', 0),
(33, '35', 1, 'NISSAN', 'MARCH', 'XJ6386A', 2019, 'CARGO', 4, 'CBA', 1, 'HR16711754T', 'NRFM190120457', '2022-07-20', 0),
(34, '36', 1, 'NISSAN', 'NP300', 'XJ6263A', 2019, 'PICK UP', 4, 'CBA', 1, 'QR25307346H', '340678465', '2022-07-18', 0),
(35, '37', 1, 'NISSAN', 'NP300', 'XJ6260A', 2019, 'DOBLE CABINA', 4, 'CBA', 1, 'QR25323029H', '340677327', '2022-07-18', 0),
(36, '13', 1, 'FORD', 'MYSTIQUE', 'YHS1521', 1997, 'SEDAN', 4, 'CBC', 1, 'S/N', 'P00-1-1-111816', '2020-10-04', 0),
(37, '15', 1, 'HONDA', 'FIT', 'YKN9599', 2015, 'SEDAN', 4, 'CBC', 1, 'L15B11020833', 'P00-1-1-111641', '2020-09-30', 0),
(38, '15-N', 1, 'HONDA', 'PILOT', 'YGJ6126', 2004, 'SUV', 4, 'CBC', 1, '1M08040CE', 'P00-1-1109897', '2020-05-15', 0),
(39, '17', 1, 'CHEVROLET', 'C-30', 'XU20562', 2000, 'CAMIONETA DOBLE RODADA', 4, 'CBC', 1, '1M08040CE', 'P00-1-2-109195', '2020-03-06', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL COMMENT 'Clave Primaria',
  `nombre` varchar(255) DEFAULT NULL COMMENT 'Nombre del usuario',
  `usuario` varchar(255) DEFAULT NULL COMMENT 'Usuario para logear',
  `contrasena` varchar(255) DEFAULT NULL COMMENT 'Contraseña del usuario',
  `activo` tinyint(1) DEFAULT NULL COMMENT 'Estado de la categoria',
  `tipo` varchar(100) DEFAULT NULL COMMENT 'Tipo de usuario que es'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `usuario`, `contrasena`, `activo`, `tipo`) VALUES
(1, 'Cesar Samuel Rodriguez Hernandez', 'zamo', '123', 1, 'root'),
(2, 'Angelica Moreno', 'angelica', '123', 1, 'root'),
(3, 'Sandra Rosas', 'Sandra', '123', 1, 'Admi'),
(4, 'Isac Gonzales', 'Isac', '123', 1, 'Admi'),
(5, 'Prueba', 'Prueba', '123', 1, 'User');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_conductor`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_ruta` (`id_ruta`),
  ADD KEY `id_unidad` (`id_unidad`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimiento`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_conductor` (`id_conductor`),
  ADD KEY `id_unidad` (`id_unidad`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id_unidad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_conductor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria', AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `conductor_ibfk_2` FOREIGN KEY (`id_ruta`) REFERENCES `rutas` (`id_ruta`),
  ADD CONSTRAINT `conductor_ibfk_3` FOREIGN KEY (`id_unidad`) REFERENCES `unidades` (`id_unidad`);

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`id_conductor`) REFERENCES `conductor` (`id_conductor`),
  ADD CONSTRAINT `movimientos_ibfk_3` FOREIGN KEY (`id_unidad`) REFERENCES `unidades` (`id_unidad`),
  ADD CONSTRAINT `movimientos_ibfk_4` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`);

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `rutas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
