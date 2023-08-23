-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2023 a las 15:54:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` varchar(3) NOT NULL,
  `cantidad_min` int(11) NOT NULL,
  `categorias` varchar(50) NOT NULL,
  `imagen` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` varchar(3) NOT NULL,
  `cantidad_min` int(11) NOT NULL,
  `categorias` varchar(50) NOT NULL,
  `imagen` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL COMMENT '\r\n',
  `registro` timestamp NULL DEFAULT current_timestamp() COMMENT 'CURRENT_TIMESTAMP'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `correo`, `password`, `telefono`, `registro`) VALUES
(1, 'Priscafer Emmanuel', 'andydzulchan02@gmail.com', '54321', '45885544444444', '2021-06-13 17:08:46'),
(2, 'Priscafer Emmanuel', 'mugarte5672@gmail.com', '12345', '9981571220', '2021-06-13 17:13:22'),
(3, 'ernesto', 'usuario@gmail.com', '147852', '9900258789', '2021-06-13 17:13:36'),
(4, 'Rodolfo', 'rodo.mugarte@gmail.com', '888888', '1234567891', '2021-06-13 17:14:56'),
(5, 'Priscafer', 'Priscafer@gmail.com', '123456', '9987568921', '2021-06-13 17:17:36'),
(6, 'Mugarte', 'mugarte@gmail.com', '2001145', '9911165670', '2021-06-13 17:21:38'),
(8, 'Emma14', 'Emma23@gmail.com', '123456', '9987582563', '2021-06-13 17:29:13'),
(9, 'Jose Alejandro', 'me@gmail.com', '12345', '9981276091', '2021-06-13 20:41:46');



--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `correo` (`correo`);


--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
