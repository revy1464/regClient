-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2020 a las 07:21:08
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clienteproimpo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `numero_documento` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellido`, `tipo_documento`, `numero_documento`, `telefono`, `correo`, `contraseña`) VALUES
(11, 'David', 'Conde', 'CC', '111518932', '3201256', 'david@hotmail.com', '$2y$10$ZImcQn5F1MpYah2di/F1T.2Y5RegHBJbuqyUoexik9U7D6YPBzg1O'),
(16, 'Diana', 'Lopez Zapata', 'CC', '11191235', '3177498512', 'diana@gmail.com', '$2y$10$tdfqfogGBYtGNWA0hiiGlenLh8ir4hCmNo.NzVpX0tL2ymt6Nyv5O'),
(18, 'cliente', 'escobar', 'CC', '00000000002', '3000000000', 'cliente@cliente.com', '$2y$10$5KEGPefbdcwT6ss6nACiRes7NUtxiOjgO85GLkN5zk2l1RKrRlQhC'),
(19, 'Administrador', 'Conde', 'CC', '1114819324', '3177498512', 'admin@admin.com', '$2y$10$TTo4becza8e..W6sXGZkY.y4v9wetc145aaFPnpK/swF/BqB7kA7K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
