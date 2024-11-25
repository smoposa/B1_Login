-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 02:31:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_utpl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `usuario`) VALUES
(4, 'smoposa@sepcomtic.com', '$2y$10$l3sTy27ZqfhUBNMD8MGAAeEakLLNRYynaNP5jWGP0Yc4kp2oOyDO6', 'def', 'def'),
(5, 'sdmcompu@hotmail.com', '$2y$10$FnNVwNjQRdzD3RtgLvX/0u.epnZq0Bas6W0EDcjAZx8i3qBHF18R2', 'JUAN', 'JUAN'),
(33, 'jperezdemoposa@gmail.com', '$2y$10$8umqDUQIoInFapOJPz3qfOmOxhVmpcpepvyzMUjTYogoeVns181Ru', 'Jessenia', 'Esther'),
(34, 'daniel@daniel.com', '$2y$10$o3g6WHlQh3YIHxn/O/yDz./OOe82SgRFKbIPmo6SwcNSOm0JyR/.G', 'daniel', 'dmoposa'),
(35, 'josue@utpl.edu.ec', '$2y$10$7QvM69iMThsUW5AIzqum6u.CxRPs9TgeckqOeqhuruLSQA5pldqCC', 'Josue Moposa', 'jmoposa'),
(38, 'prueba@prueba.com', '$2y$10$ub9KJMPiepBTs1a.l4eW0O5/FDRcBjmTW8yVZob/UTaqGii8H6yBC', 'prueba', 'prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
