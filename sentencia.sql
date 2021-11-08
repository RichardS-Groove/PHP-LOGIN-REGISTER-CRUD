create database tp_grupal;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `stock`) VALUES
(null, 'papa en baston x 2,5 kg', 825, 100),
(null, 'acelga en hojas cortadas', 455, 100),
(null, 'arveja x kilo', 455, 100),
(null, 'batata en cubos', 460, 100),
(null, 'Mix Tacos', 540, 100),
(null, 'Wok de vegetales', 570, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `email` varchar(250) NOT NULL,
  `rol` varchar(80) NOT NULL DEFAULT "Cliente",
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `rol`, `password`) VALUES
('maxi', 'ajsaj', null, null),
('MaxPower', 'Maxi Carrion', 'administrador', null);




https://freefrontend.com/bootstrap-login-forms/

https://bbbootstrap.com/snippets/animated-login-form-95290954