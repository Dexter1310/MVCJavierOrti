-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2020 a las 18:39:44
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclubjavi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nomPeli` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `director` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `ano` int(11) NOT NULL,
  `poster` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(10000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nomPeli`, `director`, `ano`, `poster`, `descripcion`) VALUES
(25, 'Pinocho', ' Matteo Garrone', 2020, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ3pbIXcdrBTgjPMLGpON9_YY__9wVu_xZyBHfTgBAlkZWW0goF', 'Adaptación en vivo de la clásica historia de una marioneta de madera llamada Pinocho que cobra vida y se convierte en un niño de verdad.'),
(27, 'el pianista', ' Roman Polański', 2002, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTuLYK843W-Xi7akWLnT-5k337R71TYFJNLKgaQPgTgFupIv-Rg', 'Un judío polaco, pianista profesional, lucha por la supervivencia en Varsovia frente a la invasión nazi. Después de, gracias a unos amigos, haber evitado la deportación, el pianista debe vivir oculto y constantemente expuesto al peligro.'),
(28, 'La mecánica naranja', '1971', 0, 'https://es.web.img3.acsta.net/pictures/14/03/26/13/26/223510.jpg', 'Un criminal en la Inglaterra del futuro pasa una serie de procesos experimentales para corregir sus impulsos violentos.'),
(29, 'Robocop', ' Paul Verhoeven, Fred Dekker, Irvin Kershner', 1987, 'https://vignette.wikia.nocookie.net/robocop/images/0/0f/RoboCop_3_poster.jpg/revision/latest?cb=20180804003844', 'RoboCop is a 1987 American science fiction action film directed by Paul Verhoeven and written by Edward Neumeier and Michael Miner. The film stars Peter Weller, Nancy Allen, Dan O\'Herlihy, Kurtwood Smith, Miguel Ferrer, and Ronny Cox.\r\n\r\nSet in a crime-ridden Detroit, Michigan, in the near future, RoboCop centers on police officer Alex Murphy (Weller) who is murdered by a gang of criminals and subsequently revived by the megacorporation Omni Consumer Products as the superhuman cyborg law enforcer RoboCop.'),
(30, 'El muñeco diabólico', ' Lars Klevberg', 2019, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBw_I9LE03y6Yq5hxX9DPiAA50UHvKPscqtC7oYbZtFJbBa8VI', 'Después de mudarse a una ciudad nueva, Karen le regala a su hijo Andy un muñeco que se convierte en el mejor amigo del niño. Lo que ellos desconocían es que el muñeco es un ser maligno que tiene vida propia. Andy deberá aliarse con otros niños vecinos para detener a esta diabólica criatura que está provocando muertes en la ciudad.'),
(31, '101 dálmatas', ' Wolfgang Reitherman, Clyde Geronimi, Hamilton Luske', 1961, 'https://images-na.ssl-images-amazon.com/images/I/51dWzJCZUjL._SY445_.jpg', 'Dos perros británicos tratan de rescatar a sus cachorros que fueron secuestrados por Cruella de Ville.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
