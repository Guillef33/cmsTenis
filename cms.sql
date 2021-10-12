-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-10-2021 a las 15:21:52
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `publicationDate`, `title`, `summary`, `content`, `category`, `author`, `image`) VALUES
(5, '2021-10-28', 'Murray juega con Alcaraz en Indian Wells', 'Murray juega con Alcaraz en Indian Wells', 'Murray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian Wells', 'Murray', 'fundacionbunge.webp', ''),
(6, '2021-10-28', 'Murray juega con Alcaraz en Indian Wells', 'Murray juega con Alcaraz en Indian Wells', 'Murray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian WellsMurray juega con Alcaraz en Indian Wells', 'Murray', 'Alcaraz', ''),
(2, '2021-10-22', 'Coria en exclusiva con El blog del tenis: La capitana me llega en un buen momento de mi vida', 'Guillermo Coria fue presentado como nuevo capitn argentino de Copa Davis y de esta manera se convierte en la trigsima primera persona en tomar dicho cargo. Tras la ceremonia, dialog en exclusiva con Diego Amuy para BATennis. ', 'Como objetivo principal al frente del seleccionado, el santafesino dejÃ³ en claro que mÃ¡s allÃ¡ de lo deportivo, para Ã©l serÃ¡ importante el afecto que entable con la gente: â€œQuisiera que el dÃ­a que me retire, la gente me aplauda y que me agradezcaâ€, sentenciÃ³ el finalista de Roland Garros 2004.\r\n\r\nCoria, que tiene una muy buena relaciÃ³n con todos los integrantes del Ãºltimo equipo que jugÃ³ contra Bielorrusia en la pasada serie por el repechaje, opinÃ³ sobre la sorpresiva caÃ­da de Diego Schwartzman en aquel primer punto. â€œA Diego le jugaron muchas cosas en contra. Primero se encontraba hÃ­per favorito, volvÃ­a a jugar de local con pÃºblico y entraba al Court Central, algo que significa mucho. AdemÃ¡s en frente tenÃ­a un chico que no tenÃ­a nada que perderâ€, remarcÃ³.', 'Blgo', 'Coria', ''),
(4, '2021-10-06', 'El increble rcord que Nadal ha conseguido retener en 2021', 'No ha sido una buena temporada para Rafael Nadal, muy mermado por las molestias fsicas y sin la capacidad para defender su corona en Pars, pero el espaol ha mantenido su nombres en lo ms alto de algunas clasificaciones histricas y una de ellas es la de ser el jugador que ms temporadas consecutivas acumula ganando ms de un ttulo. En este ao lo ha conseguido merced a sus triunfos en Barcelona y Roma, manteniendo esa tnica iniciada en 2005 y aventajando a Novak Djokovic en un ao.', 'No ha sido una buena temporada para Rafael Nadal, muy mermado por las molestias fÃ­sicas y sin la capacidad para defender su corona en ParÃ­s, pero el espaÃ±ol ha mantenido su nombres en lo mÃ¡s alto de algunas clasificaciones histÃ³ricas y una de ellas es la de ser el jugador que mÃ¡s temporadas consecutivas acumula ganando mÃ¡s de un tÃ­tulo. En este aÃ±o lo ha conseguido merced a sus triunfos en Barcelona y Roma, manteniendo esa tÃ³nica iniciada en 2005 y aventajando a Novak Djokovic en un aÃ±o.\r\n\r\nToni Nadal ha pasado por los micrÃ³fonos del podcast Tres Iguales, donde dejÃ³ interesantes reflexiones. Una de ellas vino al ser cuestionado sobre la razÃ³n por la que Novak Djokovic es visto por una parte importante del pÃºblico aficionado al tenis con mucho menos cariÃ±o que Roger Federer o Rafael Nadal. \"Le ha perjudicado llegar al circuito cuando ya habÃ­a una rivalidad muy marcada entre Roger y Rafa; eran dos estilos contrapuestos, dos trayectorias diferentes, y eso encandilÃ³ a la gente. TambiÃ©n considero que a Novak le ha traicionado el ego a la hora de tener algunos comportamientos en la pista incompatibles con el nÃºmero 1 que es\", comentÃ³ el tÃ©cnico espaÃ±ol, aclarando inmediatamente que tiene una buena relaciÃ³n con el balcÃ¡nico.', 'Carrizo', 'Pepe', ''),
(7, '2021-10-20', 'asdasd', 'asdasd', 'safasfdada', 'asdasd', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
