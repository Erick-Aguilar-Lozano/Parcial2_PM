-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 21:02:16
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flujo-m`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_banco`
--

CREATE TABLE `cuenta_banco` (
  `id` int(10) NOT NULL,
  `nro_cuenta` int(50) NOT NULL,
  `monto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta_banco`
--

INSERT INTO `cuenta_banco` (`id`, `nro_cuenta`, `monto`) VALUES
(1, 2147483647, '500'),
(3, 2147483647, '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `id` int(5) NOT NULL,
  `codFlujo` varchar(10) NOT NULL,
  `codProceso` varchar(10) NOT NULL,
  `codProcesoSiguiente` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `Pantalla` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id`, `codFlujo`, `codProceso`, `codProcesoSiguiente`, `tipo`, `rol`, `Pantalla`) VALUES
(1, 'F1', 'P1', 'P2', 'Inicio', 'Usuario', 'listadoNecesidad.php'),
(2, 'F1', 'P2', 'P3', 'Proceso', 'Negociador', 'negociacion.php'),
(3, 'F1', 'P3', 'P4', 'Proceso', 'Negociador', 'elegirProveedor.php'),
(4, 'F1', 'P4', 'P5', 'Proceso', 'Usuario', 'pedido.php'),
(5, 'F1', 'P5', 'P6', 'Proceso', 'Negociador', 'ordenCompra.php'),
(6, 'F1', 'P6', 'P7', 'Proceso', 'Proveedor', 'entregaPedido.php'),
(7, 'F1', 'P7', 'P8', 'Proceso', 'Usuario', 'verificaPedido.php'),
(8, 'F1', 'P8', 'Null', 'Fin', 'Negociador', 'pagoProveedor.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ci` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `ci`) VALUES
(1, 'Erick Aguilar Lozano', '6893912');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuenta_banco`
--
ALTER TABLE `cuenta_banco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuenta_banco`
--
ALTER TABLE `cuenta_banco`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
