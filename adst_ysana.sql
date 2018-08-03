-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2018 a las 15:46:24
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database adst_ysana;
use adst_ysana;

--
-- Base de datos: `adst_ysana_lang`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_articulos`
--

CREATE TABLE `adst_ysana_articulos` (
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `deleted` tinyint(1) UNSIGNED NOT NULL,
  `stock` tinyint(4) UNSIGNED NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_articulos`
--

INSERT INTO `adst_ysana_articulos` (`id_articulo`, `deleted`, `stock`, `visible`, `create_at`) VALUES
(1, 0, 12, 1, '2018-08-03 11:33:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_articulos_favoritos`
--

CREATE TABLE `adst_ysana_articulos_favoritos` (
  `id_usuario` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_articulos_lang`
--

CREATE TABLE `adst_ysana_articulos_lang` (
  `id` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `id_lang` tinyint(4) UNSIGNED NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_articulos_lang`
--

INSERT INTO `adst_ysana_articulos_lang` (`id`, `id_articulo`, `id_lang`, `visible`, `nombre`, `descripcion`) VALUES
(1, 1, 1, 1, 'Producto1 Ysana', 'Descripción del producto 1 de ysana en multilenguaje CAST'),
(2, 1, 2, 1, 'Product1 Ysana', 'Descripcion 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_aviso_stock`
--

CREATE TABLE `adst_ysana_aviso_stock` (
  `id_aviso` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_carrito_compra`
--

CREATE TABLE `adst_ysana_carrito_compra` (
  `id_usuario` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_categorias`
--

CREATE TABLE `adst_ysana_categorias` (
  `id_categoria` tinyint(6) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `descripcion_categoria` varchar(100) DEFAULT NULL,
  `imagen_categoria` varchar(100) DEFAULT NULL,
  `deleted_categoria` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_categorias`
--

INSERT INTO `adst_ysana_categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `imagen_categoria`, `deleted_categoria`) VALUES
(1, 'adelgaYsana', 'Categoría de prueba de Ysana1', NULL, 0),
(2, 'Eficaps', 'Categoría de prueba de ysana2', NULL, 0),
(3, 'Freenose', 'Categoría de prueba de ysana3', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_categorias_articulo`
--

CREATE TABLE `adst_ysana_categorias_articulo` (
  `id_categoria` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_categorias_articulo`
--

INSERT INTO `adst_ysana_categorias_articulo` (`id_categoria`, `id_articulo`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_consejo_articulo`
--

CREATE TABLE `adst_ysana_consejo_articulo` (
  `id_consejo` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `lang` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_consejo_articulo`
--

INSERT INTO `adst_ysana_consejo_articulo` (`id_consejo`, `id_articulo`, `titulo`, `descripcion`, `lang`) VALUES
(2, 1, 'Consejo 1', 'Descripcion consejo 1', 1),
(3, 1, 'Consejo 2', 'Descripcion consejo 2', 1),
(4, 1, 'Consejo 1', 'Descripcion consejo 1 cat', 2),
(5, 1, 'Consejo 2', 'Descripcion consejo 2 cat', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_imgs_articulo`
--

CREATE TABLE `adst_ysana_imgs_articulo` (
  `id_img` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `url_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_imgs_articulo`
--

INSERT INTO `adst_ysana_imgs_articulo` (`id_img`, `id_articulo`, `url_img`) VALUES
(1, 1, 'https://image.promofarma.com/p/73109_1-z/ysana-free-nose-antialergico-20ml.jpg'),
(2, 1, 'https://image.promofarma.com/p/73109_1-z/ysana-free-nose-antialergico-20ml.jpg'),
(3, 1, 'https://image.promofarma.com/p/73109_1-z/ysana-free-nose-antialergico-20ml.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_informacion_articulo`
--

CREATE TABLE `adst_ysana_informacion_articulo` (
  `id_informacion` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `lang` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_informacion_articulo`
--

INSERT INTO `adst_ysana_informacion_articulo` (`id_informacion`, `id_articulo`, `titulo`, `descripcion`, `lang`) VALUES
(1, 1, 'Informacion 1 de articulo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tincidunt ipsum, ac laoreet diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse commodo turpis at malesuada maximus. Pellentesque mollis ligula ex, at scelerisque metus suscipit ultricies. Donec nulla urna, egestas at porta nec, condimentum eu nunc. Integer posuere cursus sem. Phasellus porttitor odio porttitor nibh pell', 1),
(2, 1, 'Informacion 1 de articulo cat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tincidunt ipsum, ac laoreet diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse commodo turpis at malesuada maximus. Pellentesque mollis ligula ex, at scelerisque metus suscipit ultricies. Donec nulla urna, egestas at porta nec, condimentum eu nunc. Integer posuere cursus sem. Phasellus porttitor odio porttitor nibh pell', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_lang`
--

CREATE TABLE `adst_ysana_lang` (
  `id_lang` tinyint(4) UNSIGNED NOT NULL,
  `code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_lang`
--

INSERT INTO `adst_ysana_lang` (`id_lang`, `code`) VALUES
(1, 'cast'),
(2, 'cat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_precio_articulo`
--

CREATE TABLE `adst_ysana_precio_articulo` (
  `id_precio_articulo` int(10) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `descuento_porcentaje` tinyint(2) DEFAULT NULL,
  `descuento` tinyint(1) UNSIGNED NOT NULL,
  `fecha_inicio_descuento` date DEFAULT NULL,
  `fecha_fin_descuento` date DEFAULT NULL,
  `precio` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_precio_articulo`
--

INSERT INTO `adst_ysana_precio_articulo` (`id_precio_articulo`, `id_articulo`, `fecha`, `descuento_porcentaje`, `descuento`, `fecha_inicio_descuento`, `fecha_fin_descuento`, `precio`) VALUES
(1, 1, '2018-08-01', 0, 0, '0000-00-00', '0000-00-00', 12.9),
(2, 1, '2018-08-02', NULL, 0, NULL, NULL, 14.9),
(3, 1, '2018-08-03', 20, 1, '2018-08-03', '2018-08-07', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_preguntas_articulo`
--

CREATE TABLE `adst_ysana_preguntas_articulo` (
  `id_valoracion` smallint(5) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `id_usuario` tinyint(6) UNSIGNED NOT NULL,
  `puntuacion` tinyint(2) UNSIGNED NOT NULL,
  `fecha_valoracion` date NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_tags`
--

CREATE TABLE `adst_ysana_tags` (
  `id_tag` tinyint(6) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_tag_articulo`
--

CREATE TABLE `adst_ysana_tag_articulo` (
  `id_tag` tinyint(6) NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_uso_articulo`
--

CREATE TABLE `adst_ysana_uso_articulo` (
  `id_uso` tinyint(6) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `lang` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_uso_articulo`
--

INSERT INTO `adst_ysana_uso_articulo` (`id_uso`, `id_articulo`, `titulo`, `descripcion`, `lang`) VALUES
(1, 1, 'Prueba uso 1', 'Descripcion prueba uso 1', 1),
(2, 1, 'Prueba uso 2', 'Descripcion prueba uso 2', 1),
(3, 1, 'Prueba uso 3', 'Descripcion prueba uso 3', 1),
(4, 1, 'Prueba uso 1 cat', 'Descripcion prueba uso 1 cat', 2),
(5, 1, 'Prueba uso 2 cat', 'Descripcion prueba uso 2 cat', 2),
(6, 1, 'Prueba uso 3 cat', 'Descripcion prueba uso 3 cat', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_usuarios`
--

CREATE TABLE `adst_ysana_usuarios` (
  `id_usuario` tinyint(6) UNSIGNED NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `password` varchar(72) NOT NULL,
  `id_tipo_usuario` tinyint(4) NOT NULL,
  `deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `nombre_usuario` varchar(64) NOT NULL,
  `apellidos_usuario` varchar(100) NOT NULL,
  `direccion_entrega` varchar(255) NOT NULL,
  `direccion_facturacion` varchar(255) NOT NULL,
  `edad_usuario` int(11) NOT NULL,
  `pais_usuario` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `terminos_legales` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_usuarios`
--

INSERT INTO `adst_ysana_usuarios` (`id_usuario`, `email_usuario`, `password`, `id_tipo_usuario`, `deleted`, `nombre_usuario`, `apellidos_usuario`, `direccion_entrega`, `direccion_facturacion`, `edad_usuario`, `pais_usuario`, `sexo`, `terminos_legales`) VALUES
(1, 'dmartinezh97@gmail.com', '1234', 10, 0, 'Dani', 'Martínez Hernandez', 'C/ cantabria nº45', 'C/ cantabria nº45', 20, 'España', 'Hombre', 0),
(2, 'beta@adstorm.es', '1234', 10, 0, 'Desarrollo', 'AdStorm', 'C/ adstorm', 'C/ adstorm', 20, 'España', 'Hombre', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adst_ysana_valoracion_articulo`
--

CREATE TABLE `adst_ysana_valoracion_articulo` (
  `id_valoracion` smallint(5) UNSIGNED NOT NULL,
  `id_articulo` tinyint(6) UNSIGNED NOT NULL,
  `id_usuario` tinyint(6) UNSIGNED NOT NULL,
  `puntuacion` tinyint(2) UNSIGNED NOT NULL,
  `fecha_valoracion` date NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adst_ysana_valoracion_articulo`
--

INSERT INTO `adst_ysana_valoracion_articulo` (`id_valoracion`, `id_articulo`, `id_usuario`, `puntuacion`, `fecha_valoracion`, `descripcion`, `titulo`) VALUES
(4, 1, 1, 5, '2018-08-03', 'Muy buen producto, en tan solo dos semanas he perdido dos semanas! Amazing!', 'Increible!!'),
(5, 1, 2, 10, '2018-08-03', 'Increible, he recuperado la vista', '10/10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adst_ysana_articulos`
--
ALTER TABLE `adst_ysana_articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_articulos_favoritos`
--
ALTER TABLE `adst_ysana_articulos_favoritos`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_articulos_lang`
--
ALTER TABLE `adst_ysana_articulos_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_lang` (`id_lang`);

--
-- Indices de la tabla `adst_ysana_aviso_stock`
--
ALTER TABLE `adst_ysana_aviso_stock`
  ADD PRIMARY KEY (`id_aviso`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_carrito_compra`
--
ALTER TABLE `adst_ysana_carrito_compra`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_categorias`
--
ALTER TABLE `adst_ysana_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `adst_ysana_categorias_articulo`
--
ALTER TABLE `adst_ysana_categorias_articulo`
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `adst_ysana_consejo_articulo`
--
ALTER TABLE `adst_ysana_consejo_articulo`
  ADD PRIMARY KEY (`id_consejo`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `lang` (`lang`);

--
-- Indices de la tabla `adst_ysana_imgs_articulo`
--
ALTER TABLE `adst_ysana_imgs_articulo`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_informacion_articulo`
--
ALTER TABLE `adst_ysana_informacion_articulo`
  ADD PRIMARY KEY (`id_informacion`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_lang`
--
ALTER TABLE `adst_ysana_lang`
  ADD PRIMARY KEY (`id_lang`);

--
-- Indices de la tabla `adst_ysana_precio_articulo`
--
ALTER TABLE `adst_ysana_precio_articulo`
  ADD PRIMARY KEY (`id_precio_articulo`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_preguntas_articulo`
--
ALTER TABLE `adst_ysana_preguntas_articulo`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `adst_ysana_tags`
--
ALTER TABLE `adst_ysana_tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indices de la tabla `adst_ysana_tag_articulo`
--
ALTER TABLE `adst_ysana_tag_articulo`
  ADD KEY `id_tag` (`id_tag`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_uso_articulo`
--
ALTER TABLE `adst_ysana_uso_articulo`
  ADD PRIMARY KEY (`id_uso`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `adst_ysana_usuarios`
--
ALTER TABLE `adst_ysana_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `adst_ysana_valoracion_articulo`
--
ALTER TABLE `adst_ysana_valoracion_articulo`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adst_ysana_articulos`
--
ALTER TABLE `adst_ysana_articulos`
  MODIFY `id_articulo` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_articulos_lang`
--
ALTER TABLE `adst_ysana_articulos_lang`
  MODIFY `id` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_aviso_stock`
--
ALTER TABLE `adst_ysana_aviso_stock`
  MODIFY `id_aviso` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_categorias`
--
ALTER TABLE `adst_ysana_categorias`
  MODIFY `id_categoria` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_consejo_articulo`
--
ALTER TABLE `adst_ysana_consejo_articulo`
  MODIFY `id_consejo` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_imgs_articulo`
--
ALTER TABLE `adst_ysana_imgs_articulo`
  MODIFY `id_img` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_informacion_articulo`
--
ALTER TABLE `adst_ysana_informacion_articulo`
  MODIFY `id_informacion` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_lang`
--
ALTER TABLE `adst_ysana_lang`
  MODIFY `id_lang` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_precio_articulo`
--
ALTER TABLE `adst_ysana_precio_articulo`
  MODIFY `id_precio_articulo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_preguntas_articulo`
--
ALTER TABLE `adst_ysana_preguntas_articulo`
  MODIFY `id_valoracion` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_tags`
--
ALTER TABLE `adst_ysana_tags`
  MODIFY `id_tag` tinyint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_uso_articulo`
--
ALTER TABLE `adst_ysana_uso_articulo`
  MODIFY `id_uso` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_usuarios`
--
ALTER TABLE `adst_ysana_usuarios`
  MODIFY `id_usuario` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `adst_ysana_valoracion_articulo`
--
ALTER TABLE `adst_ysana_valoracion_articulo`
  MODIFY `id_valoracion` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adst_ysana_articulos_favoritos`
--
ALTER TABLE `adst_ysana_articulos_favoritos`
  ADD CONSTRAINT `adst_ysana_articulos_favoritos_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_articulos_favoritos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `adst_ysana_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `adst_ysana_articulos_lang`
--
ALTER TABLE `adst_ysana_articulos_lang`
  ADD CONSTRAINT `adst_ysana_articulos_lang_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_articulos_lang_ibfk_2` FOREIGN KEY (`id_lang`) REFERENCES `adst_ysana_lang` (`id_lang`);

--
-- Filtros para la tabla `adst_ysana_aviso_stock`
--
ALTER TABLE `adst_ysana_aviso_stock`
  ADD CONSTRAINT `adst_ysana_aviso_stock_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`);

--
-- Filtros para la tabla `adst_ysana_carrito_compra`
--
ALTER TABLE `adst_ysana_carrito_compra`
  ADD CONSTRAINT `adst_ysana_carrito_compra_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_carrito_compra_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `adst_ysana_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `adst_ysana_categorias_articulo`
--
ALTER TABLE `adst_ysana_categorias_articulo`
  ADD CONSTRAINT `adst_ysana_categorias_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_categorias_articulo_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `adst_ysana_categorias` (`id_categoria`);

--
-- Filtros para la tabla `adst_ysana_consejo_articulo`
--
ALTER TABLE `adst_ysana_consejo_articulo`
  ADD CONSTRAINT `adst_ysana_consejo_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`);

--
-- Filtros para la tabla `adst_ysana_imgs_articulo`
--
ALTER TABLE `adst_ysana_imgs_articulo`
  ADD CONSTRAINT `adst_ysana_imgs_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`);

--
-- Filtros para la tabla `adst_ysana_informacion_articulo`
--
ALTER TABLE `adst_ysana_informacion_articulo`
  ADD CONSTRAINT `adst_ysana_informacion_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`);

--
-- Filtros para la tabla `adst_ysana_precio_articulo`
--
ALTER TABLE `adst_ysana_precio_articulo`
  ADD CONSTRAINT `adst_ysana_precio_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`);

--
-- Filtros para la tabla `adst_ysana_preguntas_articulo`
--
ALTER TABLE `adst_ysana_preguntas_articulo`
  ADD CONSTRAINT `adst_ysana_preguntas_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_preguntas_articulo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `adst_ysana_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `adst_ysana_tag_articulo`
--
ALTER TABLE `adst_ysana_tag_articulo`
  ADD CONSTRAINT `adst_ysana_tag_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_tag_articulo_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `adst_ysana_tags` (`id_tag`);

--
-- Filtros para la tabla `adst_ysana_uso_articulo`
--
ALTER TABLE `adst_ysana_uso_articulo`
  ADD CONSTRAINT `adst_ysana_uso_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`);

--
-- Filtros para la tabla `adst_ysana_valoracion_articulo`
--
ALTER TABLE `adst_ysana_valoracion_articulo`
  ADD CONSTRAINT `adst_ysana_valoracion_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `adst_ysana_articulos` (`id_articulo`),
  ADD CONSTRAINT `adst_ysana_valoracion_articulo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `adst_ysana_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
