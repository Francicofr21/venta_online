-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2024 a las 07:02:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL DEFAULT 0,
  `usuario_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `usuario_id`, `producto_id`, `cantidad`) VALUES
(0, 1, 7, 16),
(0, 1, 5, 12),
(0, 1, 8, 4),
(0, 1, 3, 4),
(0, 1, 4, 2),
(0, 1, 9, 2),
(0, 1, 1, 3),
(0, 1, 6, 1),
(0, 1, 2, 1),
(0, 1, 2, 10),
(0, 1, 7, 1),
(0, 1, 2, 1),
(0, 1, 7, 1),
(0, 2, 1, 1),
(0, 2, 2, 1),
(0, 3, 2, 1),
(0, 3, 7, 2),
(0, 3, 1, 2),
(0, 9, 9, 1),
(0, 9, 3, 1),
(0, 9, 5, 1),
(0, 9, 7, 1),
(0, 9, 10, 1),
(0, 9, 10, 2),
(0, 8, 2, 1),
(0, 8, 5, 1),
(0, 8, 10, 2),
(0, 8, 7, 1),
(0, 8, 1, 1),
(0, 8, 8, 2),
(0, 8, 2, 1),
(0, 8, 8, 1),
(0, 8, 6, 1),
(0, 8, 9, 2),
(0, 1, 2, 8),
(0, 1, 7, 3),
(0, 10, 5, 1),
(0, 10, 6, 1),
(0, 10, 8, 1),
(0, 10, 9, 2),
(0, 1, 2, 1),
(0, 1, 7, 1),
(0, 1, 1, 2),
(0, 8, 2, 1),
(0, 8, 7, 2),
(0, 8, 1, 3),
(0, 8, 7, 1),
(0, 1, 5, 1),
(0, 1, 8, 1),
(0, 1, 1, 1),
(0, 1, 8, 1),
(0, 13, 7, 2),
(0, 13, 2, 1),
(0, 13, 1, 2),
(0, 13, 8, 1),
(0, 13, 1, 1),
(0, 13, 4, 5),
(0, 14, 2, 1),
(0, 14, 1, 3),
(0, 14, 7, 1),
(0, 14, 4, 4),
(0, 9, 1, 1),
(0, 9, 7, 2),
(0, 14, 5, 1),
(0, 14, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `imagen`, `estado`) VALUES
(1, 'Cámaras de seguridad inteligentes', 500.00, 20, 'l3.jpg', ''),
(2, 'Cargador', 10.00, 100, 'l1.jpg', ''),
(3, 'Cargador inalámbrico', 20.00, 10, 'l8.jpg', ''),
(4, 'Combo de teclado y mouse para videojuegos 60', 40.00, 10, 'l7.jpg', ''),
(5, 'Computadoras gamer', 1500.00, 5, 'l5.jpg', ''),
(6, 'Consolas de videojuego', 500.00, 10, 'l6.jpg', ''),
(7, 'Smartwatches', 90.00, 100, 'l2.jpg', ''),
(8, 'Teclado', 500.00, 10, 'l4.jpg', ''),
(9, 'Teclado y mouse inalámbricos RGB retroiluminados para juegos', 35.00, 10, 'l9.jpg', ''),
(10, 'Smart Watch 2', 30.00, 1, 'l2.jpg', ''),
(11, 'ROUTER2', 40.00, 5, NULL, ''),
(12, 'mouse', 5.00, 0, NULL, ''),
(13, 'router', 15.00, 5, NULL, ''),
(14, 'hub', 40.00, 0, NULL, ''),
(15, 'swith 1', 20.00, 0, NULL, ''),
(16, 'swith 2', 40.00, 0, NULL, ''),
(17, 'swith 3', 60.00, 0, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `correo`, `contrasenia`) VALUES
(1, 'Alexis4', 'aivega2@espe.edu.ec', '$2y$10$yjRHWuqej7SwJrGzN.UC0ORQ7UNmr0uKgbsqigwH8c2FpPv72aTwm'),
(8, 'Edison', 'edyunaucho76@gmail.com', '$2y$10$8SfO5kNi3Ru1sVf/nR9BlOjw6TfJHwPpzZWon5M8LksQkwF0zeyJ6'),
(9, 'Fernando', 'romelquinapallo12@gmail.com', '$2y$10$PZpXY7/4MjADl7P7.KG4.OORShxengZBpFBK.gbaj2WXI8kKDM5pW'),
(10, 'Edwin2', 'egunaucho1@espe.edu.ec', '$2y$10$43WE6DOP0JkvMEA38uST.OdIzE39n/7sF9DFq1amIzt08uKz7x762'),
(11, 'Pepe', 'pepe@gmail.com', '1234'),
(12, 'Edison10', 'edyunaucho76@gmail.com', '$2y$10$ne5M8Xfi5in8YZS1ptRlf.dFNnN75pcIH9Ip2UXY8qhdzjIe9KkoS'),
(13, 'Joseue', 'juniorbmorales@gmail.com', '$2y$10$x9XxuIhBVvrgtNI8Lvaze.g9Ko/tG4B4ISSwZ0S.2tV4OIHdpJVqa'),
(14, 'Francisco Quinapallo', 'rolyldu@hotmail.com', '$2y$10$HvC/6JuKon/fwKG1ePvw/.P9mBzSfM8Q7QBqzy0bLjqe28Pk0oyB.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`,`producto_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
