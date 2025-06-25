-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2025 a las 05:45:21
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
-- Base de datos: `cybertel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `archivo_cv` varchar(255) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'pendiente',
  `fecha_postulacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulaciones`
--

INSERT INTO `postulaciones` (`id`, `usuario_id`, `area`, `telefono`, `fecha_nacimiento`, `archivo_cv`, `estado`, `fecha_postulacion`) VALUES
(2, 1, 'Marketing', '87654321', '2005-03-11', 'uploads/685a0cb05d2b4_PAPERDELPROYECTO-HidroSensoresparalosEstudiantesdelColegioSantoDomingo-Chorrillos-Lima2024.docx', 'aceptado', '2025-06-24 02:25:52'),
(3, 4, 'Marketing', '978654321', '2001-03-01', 'uploads/685a18af12262_MODELOMAYO2025.docx', 'rechazado', '2025-06-24 03:17:03'),
(4, 5, 'Marketing', '954786123', '2006-02-16', 'uploads/685a19d156bcc_DiseoeImplementacindeunCarroAutnomoparaExploracindeTerrenosconSistemaGPSIntegrad.docx', 'aceptado', '2025-06-24 03:21:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `password`, `rol`) VALUES
(1, 'Sebastian', 'Sebas123', 'sebir.ir@gmail.com', '$2y$10$Cm1st71s29Nw4GSA0qs.w.YnvwReOBGmB9LLcKAeVcb0vg9sipYK2', 'usuario'),
(2, 'Juan ', 'Juan123', 'Juan@gmail.com', '$2y$10$6.vS4CkB4iivPRga0Rxw0emCftToSCU9ixKc6rM8XIukD.ekZ9iJy', 'rrhh'),
(4, 'Andre Diego', 'Andre1234', 'Andre@gmail.com', '$2y$10$J.f1EY6CfKv39FT.J9uFhef.VehLETGUToE8nV9MBzic2Z9k2wkhO', 'usuario'),
(5, 'Pedro Jeremias', 'Pedro123', 'Pedro123@gmail.com', '$2y$10$UGqlFLQEElCx5p3ofkJk9upRMinx0p9Ratwcl8X85LFoWTbQ8ldnm', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD CONSTRAINT `postulaciones_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
