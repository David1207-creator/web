-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2025 a las 21:21:59
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
-- Base de datos: `empresa2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`id`, `marca`, `modelo`, `precio`) VALUES
(1, 'Suzuki', 'Swift', '$15,000 - $20,000 USD'),
(2, 'Suzuki', 'Vitara', '$20,000 - $25,000 USD'),
(3, 'Suzuki', 'Jimny', '$22,000 - $27,000 USD'),
(4, 'Suzuki', 'Ertiga', '$18,000 - $23,000 USD'),
(5, 'Suzuki', 'Ciaz', '$17,000 - $22,000 USD'),
(6, 'Toyota', 'Supra', '$50,000 - $100,000 USD'),
(7, 'Toyota', 'Yaris', '$16,000 - $22,000 USD'),
(8, 'Toyota', 'Hilux', '$25,000 - $40,000 USD'),
(9, 'Toyota', 'Rav4', '$30,000 - $40,000 USD'),
(10, 'Toyota', 'Camry', '$27,000 - $35,000 USD'),
(11, 'Ford', 'Mustang', '$30,000 - $60,000 USD'),
(12, 'Ford', 'F-150', '$76,000 - $85,000 USD'),
(13, 'Ford', 'Explorer', '$47,000 - $55,000 USD'),
(14, 'Ford', 'Bronco', '$34,000 - $50,000 USD'),
(15, 'Ford', 'Focus', '$22,000 - $27,000 USD'),
(16, 'Honda', 'Civic', '$22,000 - $28,000 USD'),
(17, 'Honda', 'Accord', '$28,000 - $38,000 USD'),
(18, 'Honda', 'CR-V', '$32,000 - $40,000 USD'),
(19, 'Honda', 'HR-V', '$25,000 - $30,000 USD'),
(20, 'Honda', 'Pilot', '$38,000 - $50,000 USD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
