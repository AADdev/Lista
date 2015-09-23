-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2015 a las 09:19:51
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Listas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE IF NOT EXISTS `lista` (
  `id_lista` int(4) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_lista`),
  KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`id_lista`, `Nombre`) VALUES
(1, '0'),
(2, 'a'),
(14, 'aitor'),
(17, 'anthony'),
(7, 'c'),
(16, 'cole'),
(15, 'compra'),
(4, 'correr'),
(5, 'correr'),
(6, 'correr2'),
(8, 'davi'),
(12, 'davis'),
(13, 'davis'),
(3, 'nadar'),
(10, 'qwe'),
(9, 'redgsfh '),
(11, 'zxc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
  `id_tarea` int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(300) NOT NULL,
  `id_lista` int(4) NOT NULL,
  PRIMARY KEY (`id_tarea`),
  UNIQUE KEY `descripcion` (`descripcion`),
  KEY `id_tarea` (`id_tarea`),
  KEY `id_lista` (`id_lista`),
  KEY `id_lista_2` (`id_lista`),
  KEY `id_lista_3` (`id_lista`),
  KEY `id_lista_4` (`id_lista`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id_tarea`, `descripcion`, `id_lista`) VALUES
(1, 'compra tomate', 1),
(14, 'davis1', 12),
(15, 'davis2', 12),
(16, 'davis3', 12),
(17, 'davis5', 12),
(18, '', 12),
(19, 'aitor1', 14),
(20, 'aitor2', 14),
(21, 'aitor3', 14),
(22, 'aitor5', 14),
(24, 'leche', 15),
(25, 'azucar', 15),
(26, 'limon', 15),
(29, 'progra', 16),
(30, 'acesso', 16),
(31, 'desarrolo', 16),
(32, 'pene ', 16),
(33, 'ansoni', 16),
(34, 'anthony1', 17),
(35, 'anthony2', 17),
(36, 'anthony3', 17),
(37, 'anthony4', 17),
(38, 'anthony5', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id_usuario` int(100) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id_usuario`, `Usuario`, `Nombre`, `pass`) VALUES
(1, 'e', '', '3'),
(2, 'ant', '', '12345'),
(3, 'ait', 'aitor', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_lista`
--

CREATE TABLE IF NOT EXISTS `usuario_lista` (
  `id_usuario_lista` int(100) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(100) NOT NULL,
  `id_lista` int(4) NOT NULL,
  PRIMARY KEY (`id_usuario_lista`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_lista` (`id_lista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_lista`) REFERENCES `lista` (`id_lista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_lista`
--
ALTER TABLE `usuario_lista`
  ADD CONSTRAINT `usuario_lista_ibfk_2` FOREIGN KEY (`id_lista`) REFERENCES `lista` (`id_lista`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_lista_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
