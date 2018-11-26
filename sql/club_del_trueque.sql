-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 05:51:17
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `club_del_trueque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_calificacion` int(11) NOT NULL,
  `valor` int(2) NOT NULL,
  `id_propuesta` int(11) NOT NULL,
  `id_usuario_calificador` int(11) NOT NULL,
  `id_usuario_calificado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Cocina'),
(2, 'Baño'),
(3, 'Informática'),
(4, 'Hogar y Electrodomésticos'),
(5, 'Ropa'),
(6, 'Vehículos'),
(7, 'Muebles'),
(8, 'Herramientas'),
(9, 'Juguetes'),
(10, 'Misceláneo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_producto`
--

CREATE TABLE `estado_producto` (
  `id_estado_producto` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estado_producto`
--

INSERT INTO `estado_producto` (`id_estado_producto`, `nombre`) VALUES
(1, 'publico'),
(2, 'privado'),
(3, 'intercambiado'),
(4, 'dar de baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_propuesta`
--

CREATE TABLE `estado_propuesta` (
  `id_estado_propuesta` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estado_propuesta`
--

INSERT INTO `estado_propuesta` (`id_estado_propuesta`, `nombre`) VALUES
(1, 'en espera'),
(2, 'rechazada'),
(3, 'cancelada'),
(4, 'aceptada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `nombre`) VALUES
(1, 'ver perfil'),
(2, 'agregar producto'),
(3, 'ver historial'),
(4, 'generar propuesta'),
(5, 'rechazar propuesta'),
(6, 'ver producto privado'),
(7, 'editar perfil'),
(8, 'aceptar propuesta'),
(9, 'publicar producto'),
(10, 'editar producto'),
(11, 'borrar producto'),
(12, 'cerrar sesion'),
(13, 'ver perfil ajeno'),
(14, 'registrarse'),
(15, 'iniciar sesion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_rol`
--

CREATE TABLE `permisos_rol` (
  `id_permisos` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `permisos_rol`
--

INSERT INTO `permisos_rol` (`id_permisos`, `id_rol`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 2),
(15, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `intereses` text COLLATE utf8_bin,
  `imagen` text COLLATE utf8_bin,
  `id_estado_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `intereses`, `imagen`, `id_estado_producto`, `id_categoria`, `id_usuario`) VALUES
(2, 'Motorola Google Nexus 6 ', 'Nexus 6 Especificaciones\r\n\r\nSistema Operativo: Android 5, Lollipop®\r\n\r\nProcesador del sistema: Procesador Qualcomm® Snapdragon™ 805 con CPU quad-core de 2,7 GHz\r\n\r\nMemoria (RAM): 3 GB\r\n\r\nAlmacenamiento: 32 GB*', 'Acepto ropa elegante como camisas, corbata, saco, zapatos, etc.', 'https://chavixx.cl/wp-content/uploads/2017/12/Nexus_6_001sign.jpg35ff16d0-15f3-4793-8f59-aeb89128e281Original.jpg', 1, 3, 8),
(6, 'Playstation 4', 'Es la Playstation 4 original con 1TB de disco y un joystick original.', 'Acepto una Xbox One X o una PC Gamer.', 'https://i.imgur.com/oMeBGSk.jpg', 1, 3, 8),
(7, 'Celular Alcatel OneTouch POP 2', 'Es un celular de calidad media baja totalmente funcional y solo fue usado una vez.', 'Intercambio por Auriculares, zapatillas o alguna cosa de cocina.', 'https://http2.mlstatic.com/alcatel-one-touch-pop-2-casi-nuevo-bien-cuidado-D_NQ_NP_977579-MLA28218992144_092018-F.jpg', 2, 3, 8),
(9, 'La caja secreta', 'Es una caja misteriosa, quien sabe que contiene?\r\nSolo te podes arriesgar intercambiÃƒÂ¡ndola.', 'Intercambio por cosas de la categorÃƒÂ­a miscelÃƒÂ¡nea.', 'https://eldiadehoy.net/wp-content/uploads/2016/09/caja-simpsons.jpg', 2, 10, 8),
(10, 'Playstation 1', 'Es la Playstation 1 con un joystick original.', 'La cambio por una Playstation 2 que funcione.', 'https://static.alfabetajuega.com/abj_public_files/multimedia/imagenes/201605/150375.alfabetajuega-ps1.jpg', 1, 3, 8),
(11, 'Heladera Patrick', 'Es una heladera patrick del 2000 frio directo.', 'Acepto freezers portables.', 'https://http2.mlstatic.com/heladera-patrick-no-frost-D_NQ_NP_892321-MLA20738124980_052016-F.jpg', 1, 1, 11),
(12, 'Zapato Guante negro', 'Los clÃƒÂ¡sicos zapatos guante de color negro serie 31043.', 'Acepto chalecos de traje o camisas.', 'https://home.ripley.cl/store/Attachment/WOP/D311/2000323308874/2000323308874_2.jpg', 2, 5, 11),
(13, 'Bicicleta reclinada Hi Bent', 'Es la bicicleta reclinada Hi Bent MRacer Pro Travel en color blanco y amarillo.', 'Acepto cualquier cosa de la categorÃƒÂ­a informÃƒÂ¡tica.', 'https://www.hi-bent.com.ar/wp-content/uploads/2018/02/Bicicleta-Reclinada-Hi-Bent-MRacer-Pro-Travel-a-min.jpg', 1, 6, 11),
(14, 'Auriculares OMORC', 'Auriculares OMORC serie SX500, vienen color negro y con repuesto de cable.', 'Quiero un celular, escucho ofertas.', 'https://images-na.ssl-images-amazon.com/images/I/71dBCktsBgL._SX569_.jpg', 1, 3, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE `propuesta` (
  `id_propuesta` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizada` date DEFAULT NULL,
  `id_estado_propuesta` int(11) NOT NULL,
  `id_usuario_emisor` int(11) NOT NULL,
  `id_usuario_receptor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `propuesta`
--

INSERT INTO `propuesta` (`id_propuesta`, `fecha_inicio`, `fecha_finalizada`, `id_estado_propuesta`, `id_usuario_emisor`, `id_usuario_receptor`) VALUES
(1, '2018-11-26', NULL, 1, 8, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestas_productos`
--

CREATE TABLE `propuestas_productos` (
  `id_propuesta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `propuestas_productos`
--

INSERT INTO `propuestas_productos` (`id_propuesta`, `id_producto`) VALUES
(1, 2),
(1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'registrado'),
(2, 'no registrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuario`
--

CREATE TABLE `roles_usuario` (
  `id_rol` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `email` text COLLATE utf8_bin,
  `password` text COLLATE utf8_bin,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(20) DEFAULT NULL,
  `provincia` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `localidad` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `avatar` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `password`, `fecha_nacimiento`, `telefono`, `provincia`, `localidad`, `avatar`) VALUES
(8, 'Mateo', 'Calcagno', 'calcagno.mateo@gmail.com', 'password', '1995-02-23', 1131191742, 'Buenos Aires', 'Ezeiza', 'https://cdn1.iconfinder.com/data/icons/mix-color-4/502/Untitled-1-512.png'),
(9, 'nombre', 'apellido', 'mail@ejemplo.com', '1234', '2000-01-01', 1112345678, 'Rio negro', 'Mampo', 'asfaage.jpg'),
(10, 'Alejandro', 'Arrua', 'alejandro.arrua@gmail.com', '123456', '1994-04-05', 1158735832, 'Buenos Aires', 'Ezeiza', 'lazlopanaflex.jpg'),
(11, 'Marcelo', 'Leucca', 'marleucca@yahoo.com.ar', 'password', '1989-09-04', 1113238287, 'San Luis', 'Merlo', 'https://a20.t26.net/taringa/avatares/F/3/B/F/A/D/BieSlow/5EC.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `INDEX` (`id_propuesta`),
  ADD KEY `INDEX 2` (`id_usuario_calificador`),
  ADD KEY `INDEX 3` (`id_usuario_calificado`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `estado_producto`
--
ALTER TABLE `estado_producto`
  ADD PRIMARY KEY (`id_estado_producto`);

--
-- Indices de la tabla `estado_propuesta`
--
ALTER TABLE `estado_propuesta`
  ADD PRIMARY KEY (`id_estado_propuesta`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`);

--
-- Indices de la tabla `permisos_rol`
--
ALTER TABLE `permisos_rol`
  ADD KEY `INDEX` (`id_permisos`),
  ADD KEY `INDEX 2` (`id_rol`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `INDEX` (`id_estado_producto`),
  ADD KEY `INDEX 2` (`id_categoria`),
  ADD KEY `INDEX 3` (`id_usuario`);

--
-- Indices de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD PRIMARY KEY (`id_propuesta`),
  ADD KEY `INDEX` (`id_estado_propuesta`),
  ADD KEY `INDEX 2` (`id_usuario_emisor`),
  ADD KEY `INDEX 3` (`id_usuario_receptor`);

--
-- Indices de la tabla `propuestas_productos`
--
ALTER TABLE `propuestas_productos`
  ADD KEY `INDEX` (`id_propuesta`),
  ADD KEY `INDEX 2` (`id_producto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  ADD KEY `INDEX` (`id_rol`),
  ADD KEY `INDEX 2` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estado_producto`
--
ALTER TABLE `estado_producto`
  MODIFY `id_estado_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_propuesta`
--
ALTER TABLE `estado_propuesta`
  MODIFY `id_estado_propuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  MODIFY `id_propuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_usuario_calificador`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`id_usuario_calificado`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `calificacion_ibfk_3` FOREIGN KEY (`id_propuesta`) REFERENCES `propuesta` (`id_propuesta`);

--
-- Filtros para la tabla `permisos_rol`
--
ALTER TABLE `permisos_rol`
  ADD CONSTRAINT `permisos_rol_ibfk_1` FOREIGN KEY (`id_permisos`) REFERENCES `permisos` (`id_permisos`),
  ADD CONSTRAINT `permisos_rol_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_estado_producto`) REFERENCES `estado_producto` (`id_estado_producto`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD CONSTRAINT `propuesta_ibfk_1` FOREIGN KEY (`id_estado_propuesta`) REFERENCES `estado_propuesta` (`id_estado_propuesta`),
  ADD CONSTRAINT `propuesta_ibfk_3` FOREIGN KEY (`id_usuario_emisor`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `propuesta_ibfk_4` FOREIGN KEY (`id_usuario_receptor`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `propuestas_productos`
--
ALTER TABLE `propuestas_productos`
  ADD CONSTRAINT `propuestas_productos_ibfk_1` FOREIGN KEY (`id_propuesta`) REFERENCES `propuesta` (`id_propuesta`),
  ADD CONSTRAINT `propuestas_productos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  ADD CONSTRAINT `roles_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `roles_usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
