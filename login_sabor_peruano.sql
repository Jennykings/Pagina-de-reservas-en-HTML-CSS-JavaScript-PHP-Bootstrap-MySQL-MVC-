-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 23:27:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_sabor_peruano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `correo`, `password`) VALUES
(1, 'Camilo Casas', 'CamiloCasas@gmail.com	', '321'),
(2, 'Carlos Sanchez', 'CarlosSanchez@gmail.com', '123'),
(3, 'Emilio Castañeda', 'EmilioCastañeda@gmailcom', '147');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(6) NOT NULL,
  `personas` int(3) NOT NULL,
  `pedido` varchar(200) NOT NULL,
  `detalle` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `nombre`, `email`, `fecha`, `hora`, `personas`, `pedido`, `detalle`, `estado`) VALUES
(1, 'Susana Campos', 'SusanaCampos@gmail.com', '2022-06-23', '12:20:00.000000', 2, 'Causa Rellena', NULL, 'En proceso'),
(2, 'Juan Flores', 'JuanFlores@gmail.com', '2022-06-22', '13:10:00.000000', 1, 'Ceviche', NULL, 'En proceso'),
(3, 'Luis Garcia', 'LuisGarcia@gmail.com', '2022-06-22', '14:52:00.000000', 1, 'Lomo Saltado', NULL, 'En proceso'),
(4, 'Juan Perez', 'JuanPerez@gmail.com', '2022-06-30', '14:32:00.000000', 2, 'Causa Rellena', NULL, 'En proceso'),
(5, 'Carla Soto', 'CarlaSoto@gmail.com', '2022-06-28', '19:20:00.000000', 1, 'Lomo Saltado\r\n', NULL, 'En proceso'),
(6, 'Martin Castro', 'MartinCastro@gmail.com', '2022-06-20', '17:48:00.000000', 3, 'Arroz Chaufa\r\n', NULL, 'En proceso'),
(7, 'Mario Velasquez', 'MarioVelasquez@gmail.com', '2022-06-24', '19:30:00.000000', 1, 'Ceviche', NULL, 'En proceso'),
(8, 'Carla Soto', 'CarlaSoto@gmail.com', '2022-06-29', '20:25:00.000000', 1, 'Arroz Chaufa', NULL, 'En proceso'),
(9, 'Rosa Medina', 'RosaMedina@gmail.com', '2022-06-27', '13:11:00.000000', 2, 'Ceviche', NULL, 'En proceso'),
(10, 'Juan Perez', 'JuanPerez@gmail.com', '2022-07-05', '18:51:00.000000', 2, 'Ceviche', 'Agregarle bastante limón', 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `correo`, `password`) VALUES
(1, 'Luis Garcia', 'LuisGarcia@gmail.com', '753'),
(2, 'Juan Flores', 'JuanFlores@gmail.com', '159'),
(3, 'Maria Gonzales', 'MariaGonzales@gmail.com', '741'),
(4, 'Martin Castro', 'MartinCastro@gmail.com', '456'),
(5, 'Carla Soto', 'CarlaSoto@gmail.com', '753'),
(6, 'Juan Perez', 'JuanPerez@gmail.com', '147'),
(7, 'Patricio Fernandez', 'PatricioFernandez@gmail.com', '369'),
(8, 'Susana Campos', 'SusanaCampos@gmail.com', '789'),
(9, 'Mario Velasquez', 'MarioVelasquez@gmail.com', '258'),
(10, 'Rosa Medina', 'RosaMedina@gmail.com', '789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
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
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
