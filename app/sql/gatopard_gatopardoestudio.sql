-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-02-2020 a las 22:21:23
-- Versión del servidor: 5.6.32-78.1
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gatopard_gatopardoestudio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int (11) AUTO_INCREMENT,
  `category_titulo` varchar(60) NOT NULL,
  `icono` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE `content` (
  `id` int (11) AUTO_INCREMENT,
  `content_titulo` varchar(60) NOT NULL,
  `cuerpo` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `creador` varchar(60) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `imagen` longblob,
  `slider` boolean DEFAULT NULL,
  `bloque1` boolean DEFAULT NULL,
  `bloque2` boolean DEFAULT NULL,
  `bloque3` boolean DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `content`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` mediumint(9) NOT NULL,
  `email` varchar(60) NOT NULL,
  `rol` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `visitaip`(
  `id` mediumint(9) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;