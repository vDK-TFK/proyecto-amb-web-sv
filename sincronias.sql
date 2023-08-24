-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 00:57:18
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
-- Base de datos: `sincronias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', '72833483', 'admin@gmail.com', '2022-02-17 08:21:25', '2018-02-17 08:21:25', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mensaje` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `usuario`, `email`, `mensaje`) VALUES
(1, 'der', 'derek04@gmail.com', 'dsadadsa'),
(2, 'kendal', 'kendall@gmail.com', 'faagfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `comentario`, `fecha`) VALUES
(12, 'cocacola', 'hola', '2023-08-24 10:50:36'),
(13, 'cocacola', 'si', '2023-08-24 10:50:44'),
(14, 'cocacola', 'no', '2023-08-24 10:50:48'),
(15, 'cocacola', 'we', '2023-08-24 10:50:51'),
(16, 'cocacola', 'rt', '2023-08-24 10:50:59'),
(17, 'cocacola', '1', '2023-08-24 10:51:05'),
(18, 'cocacola', '2', '2023-08-24 10:51:09'),
(19, 'cocacola', '3', '2023-08-24 10:51:12'),
(20, 'cocacola', '4', '2023-08-24 10:51:14'),
(21, 'cocacola', '5', '2023-08-24 10:51:16'),
(22, 'cocacola', '6', '2023-08-24 11:01:47'),
(23, 'cocacola', '7', '2023-08-24 11:01:54'),
(24, 'cocacola', '8', '2023-08-24 11:01:58'),
(25, 'cocacola', '9', '2023-08-24 11:02:01'),
(26, 'cocacola', '10', '2023-08-24 11:02:04'),
(0, 'Derek', 'a', '2023-08-24 15:13:31'),
(0, 'Derek', 'aaa', '2023-08-24 19:07:03'),
(0, 'David', 'si', '2023-08-24 20:48:35'),
(0, 'David', 'a', '2023-08-24 20:49:08'),
(0, 'David', 'h', '2023-08-24 20:51:17'),
(0, 'David', 'etre', '2023-08-24 20:52:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(6, 1, 25.00, '2022-06-12 12:46:58', '2022-06-12 12:46:58', '1'),
(7, 1, 40.00, '2022-06-12 13:08:08', '2022-06-12 13:08:08', '1'),
(8, 1, 21500.00, '2023-08-03 18:25:03', '2023-08-03 18:25:03', '1'),
(9, 1, 21500.00, '2023-08-03 18:25:28', '2023-08-03 18:25:28', '1'),
(10, 1, 21500.00, '2023-08-03 18:25:56', '2023-08-03 18:25:56', '1'),
(11, 1, 25500.00, '2023-08-03 18:46:35', '2023-08-03 18:46:35', '1'),
(12, 1, 25500.00, '2023-08-03 18:49:24', '2023-08-03 18:49:24', '1'),
(13, 1, 25500.00, '2023-08-03 19:46:51', '2023-08-03 19:46:51', '1'),
(14, 1, 25500.00, '2023-08-03 19:47:46', '2023-08-03 19:47:46', '1'),
(15, 1, 68000.00, '2023-08-03 21:17:55', '2023-08-03 21:17:55', '1'),
(16, 1, 25500.00, '2023-08-06 19:17:01', '2023-08-06 19:17:01', '1'),
(17, 1, 42500.00, '2023-08-21 13:14:28', '2023-08-21 13:14:28', '1'),
(18, 1, 25500.00, '2023-08-21 16:32:01', '2023-08-21 16:32:01', '1'),
(19, 1, 25500.00, '2023-08-21 17:35:57', '2023-08-21 17:35:57', '1'),
(20, 1, 25500.00, '2023-08-21 17:54:01', '2023-08-21 17:54:01', '1'),
(21, 1, 25500.00, '2023-08-21 17:54:07', '2023-08-21 17:54:07', '1'),
(22, 1, 25500.00, '2023-08-21 17:54:52', '2023-08-21 17:54:52', '1'),
(23, 1, 25500.00, '2023-08-21 21:00:48', '2023-08-21 21:00:48', '1'),
(24, 1, 25500.00, '2023-08-22 02:21:04', '2023-08-22 02:21:04', '1'),
(25, 1, 20000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(26, 1, 40000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(27, 1, 504444.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(28, 1, 115000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(29, 1, 115000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(30, 1, 25000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(31, 1, 25000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(32, 1, 44000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(33, 1, 103000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(34, 7, 7035.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(35, 7, 2345.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(36, 7, 2345.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(37, 7, 2345.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_articulos`
--

INSERT INTO `orden_articulos` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(22, 25, 25, 1),
(23, 26, 27, 1),
(24, 27, 27, 1),
(25, 27, 26, 1),
(26, 27, 25, 1),
(27, 29, 28, 1),
(28, 29, 29, 5),
(29, 30, 27, 1),
(30, 30, 29, 1),
(31, 31, 29, 1),
(32, 32, 30, 1),
(33, 33, 29, 1),
(34, 33, 30, 2),
(35, 34, 32, 3),
(36, 35, 32, 1),
(37, 36, 32, 1),
(38, 37, 32, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT 'Pago Seguro',
  `apellidos` varchar(255) DEFAULT 'Pago Seguro',
  `direccion` varchar(255) NOT NULL DEFAULT 'Pago Seguro',
  `correo` varchar(255) NOT NULL DEFAULT 'Pago Seguro',
  `numero_cuenta` varchar(255) NOT NULL DEFAULT 'Paypal',
  `fecha_vencimiento` varchar(250) NOT NULL DEFAULT 'Paypal',
  `titular` varchar(255) NOT NULL DEFAULT 'Paypal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `nombre`, `apellidos`, `direccion`, `correo`, `numero_cuenta`, `fecha_vencimiento`, `titular`) VALUES
(12, 'Derek', 'Qurios', 'ccccccccccc', 'derek04@gmail.com', '1111111111111111111', '2023-08-24', 'derek castillo'),
(13, 'Derek', 'Castillo Quirós', '20105', 'derek04@gmail.com', '1111111111111111111', '2023-08-23', 'derek castillo'),
(14, 'asdf', 'jklñ', 'rrrrrr', 'ffsfsg@gmail.com', '5555555555555', '2023-09-01', 'derek castillo'),
(15, 'llllllllll', 'lllllllllll', 'llllllllllll', 'lllll@gmail.com', '77777777', '2023-08-25', 'derek castillo'),
(16, 'bbbbb', 'bbbbb', 'bbbbb', 'fgsdf@gsdf.com', '333333333333333333', '2023-08-24', 'derek castillo'),
(17, 'Derek', 'Castillo Quirós', '20105', 'derek04@gmail.com', '1111111111111111111', '2023-08-24', 'derek castillo'),
(18, 'Derek', 'Qurios', 'ccccccccccc', 'fgsdf@gsdf.com', '444444444444444444444', '2023-08-19', 'derek castillo'),
(19, 'aaaa', 'aaa', 'aaaa', 'me@gmail.com', '5555555555555', '2023-09-03', 'derek castillo'),
(20, 'Derek', 'Castillo Quirós', '20105', 'me@gmail.com', '333333333333333333', '2023-09-01', 'derek castillo'),
(21, 'Derek', 'Castillo Quirós', '20105', 'derek04@gmail.com', '2222222222222222222', '2023-08-25', 'derek castillo'),
(22, '', '', '', '', '', '0000-00-00', ''),
(23, '', '', '', '', '', '', ''),
(24, 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(25, 'Pago Seguro', 'Pago Seguro', 'Pago Seguro', 'Pago Seguro', 'Paypal', 'Paypal', 'Paypal');

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
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `productos` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `ubicacion`, `productos`, `cantidad`, `fecha`) VALUES
(5, 'sir', 'san jose', 'camisas y pantalones', 3, '2023-08-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_hombre`
--

CREATE TABLE `pro_hombre` (
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
-- Estructura de tabla para la tabla `pro_mujer`
--

CREATE TABLE `pro_mujer` (
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
-- Estructura de tabla para la tabla `pro_niño`
--

CREATE TABLE `pro_niño` (
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
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `roles`) VALUES
(1, 'usuario'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL COMMENT '\r\n',
  `registro` timestamp NULL DEFAULT current_timestamp() COMMENT 'CURRENT_TIMESTAMP',
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `correo`, `password`, `telefono`, `registro`, `rol_id`) VALUES
(1, 'Priscafer Emmanuel', 'andydzulchan02@gmail.com', '54321', '45885544444444', '2021-06-13 17:08:46', 0),
(2, 'Priscafer Emmanuel', 'mugarte5672@gmail.com', '12345', '9981571220', '2021-06-13 17:13:22', 0),
(3, 'ernesto', 'usuario@gmail.com', '147852', '9900258789', '2021-06-13 17:13:36', 0),
(4, 'Rodolfo', 'rodo.mugarte@gmail.com', '888888', '1234567891', '2021-06-13 17:14:56', 0),
(5, 'Priscafer', 'Priscafer@gmail.com', '123456', '9987568921', '2021-06-13 17:17:36', 0),
(6, 'Mugarte', 'mugarte@gmail.com', '2001145', '9911165670', '2021-06-13 17:21:38', 0),
(8, 'Emma14', 'Emma23@gmail.com', '123456', '9987582563', '2021-06-13 17:29:13', 0),
(9, 'Jose Alejandro', 'me@gmail.com', '12345', '9981276091', '2021-06-13 20:41:46', 0),
(11, 'Admin', 'admin@gmail.com', '123456', '85324888', '2023-08-24 08:54:30', 0),
(12, 'Joel', 'joel@gmail.com', '789', '85324888', '2023-08-24 13:56:14', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `usuario`, `phone`, `address`, `rol_id`) VALUES
(1, 'derek04@gmail.com', '$2y$10$oDkNkm7wXULqeKghUtYsWuVrCQOrop4/MUhQqkt3E6hKnkQUjF/.O', 'Derek', '85324288', 'Guacima Abajo', 0),
(3, 'joel04@gmail.com', '$2y$10$.2vk7ALE2XHzsMREk8safuJYLw.qZ6dXdyFFdvQrKYSqUCyflZWDy', 'joel', '85324288', 'Guacima Abajo', 0),
(6, 'castillo@gmail.com', '$2y$10$Af/SIxrgixAuN7aOcKSKQeLZC2qJDq40nSb7yEPOY5tGtNvziHXaO', 'Castillo', '85324888', 'Guácima Abajo', 0),
(7, '1@gmail.com', '$2y$10$KYE.PZUCUTCVr.DmDKizf.DkDRECaE6mcIFjM1ZzaDbTYxX5MqGkS', 'David', '1232323213', '1212312', 0),
(11, 'kendall@gmail.com', '$2y$10$UfRrO4xl8Sz2vxrmq96iXO/OCZrFXNDJhFW91QE6/Yg2nJB73pEpy', 'Kendall', '88888888', 'aaaa', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pro_hombre`
--
ALTER TABLE `pro_hombre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `pro_mujer`
--
ALTER TABLE `pro_mujer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `pro_niño`
--
ALTER TABLE `pro_niño`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pro_hombre`
--
ALTER TABLE `pro_hombre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `pro_mujer`
--
ALTER TABLE `pro_mujer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `pro_niño`
--
ALTER TABLE `pro_niño`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
