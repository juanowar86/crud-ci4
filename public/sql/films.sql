-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2021 a las 20:10:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ci-four`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `films`
--

CREATE TABLE `films` (
  `id_film` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `director` varchar(120) DEFAULT NULL,
  `synopsis` varchar(2000) DEFAULT NULL,
  `year` year(4) NOT NULL,
  `cover` varchar(500) DEFAULT 'assets/img/common/item-imgx64.jpg',
  `stock` smallint(2) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_insert` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `films`
--

INSERT INTO `films` (`id_film`, `name`, `director`, `synopsis`, `year`, `cover`, `stock`, `status`, `date_insert`) VALUES
(1, 'Dune', 'Denis Villeneuve', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet rhoncus nibh, in consectetur ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur in massa congue, interdum felis id, finibus mauris. Vivamus vitae mi eros. Nunc nec placerat dolor. Aliquam maximus, mauris et rhoncus volutpat, elit nisi scelerisque arcu, a elementum tortor metus a augue. Curabitur eget lacus porta, faucibus turpis quis, molestie mauris. Etiam vestibulum et felis sit amet dapibus. Donec in velit lectus. Cras ac nibh et nisl eleifend vestibulum. Aliquam enim nisi, elementum ut fringilla id, tincidunt sed odio.\r\n\r\nMaecenas ullamcorper suscipit vehicula. Donec quis condimentum sapien. Fusce eu tortor vitae ante imperdiet placerat. Nunc quis sem id quam pretium egestas et a est. Fusce placerat dignissim ante vitae sollicitudin. Suspendisse iaculis pretium elit, sit amet blandit est auctor quis. Nunc ac molestie massa. Pellentesque placerat sem nec ris', 2021, 'assets/img/common/item-imgx64.jpg', 3, 1, NULL),
(2, 'spiderman - no way home', 'Jon Watts', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet rhoncus nibh, in consectetur ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur in massa congue, interdum felis id, finibus mauris. Vivamus vitae mi eros. Nunc nec placerat dolor. Aliquam maximus, mauris et rhoncus volutpat, elit nisi scelerisque arcu, a elementum tortor metus a augue. Curabitur eget lacus porta, faucibus turpis quis, molestie mauris. Etiam vestibulum et felis sit amet dapibus. Donec in velit lectus. Cras ac nibh et nisl eleifend vestibulum. Aliquam enim nisi, elementum ut fringilla id, tincidunt sed odio.\r\n\r\nMaecenas ullamcorper suscipit vehicula. Donec quis condimentum sapien. Fusce eu tortor vitae ante imperdiet placerat. Nunc quis sem id quam pretium egestas et a est. Fusce placerat dignissim ante vitae sollicitudin. Suspendisse iaculis pretium elit, sit amet blandit est auctor quis. Nunc ac molestie massa. Pellentesque placerat sem nec risus imperdiet efficitur. In hac habitasse platea dictumst. Suspendisse semper vitae erat eu finibus. Aliquam ultrices pharetra dapibus.\r\n\r\nSuspendisse dictum blandit rutrum. Maecenas pretium at ante id pretium. Nunc tempus ligula luctus ipsum mollis gravida. Nunc in tortor in urna mattis congue consequat quis urna. Morbi ante magna, tincidunt in risus id, bibendum interdum enim. Fusce condimentum ipsum et erat viverra imperdiet. Aenean sit amet odio eu ligula rhoncus dignissim. Quisque in nunc elit. Donec vel lacus vitae tellus fermentum pellentesque vel ac sem. In nibh sapien, sagittis eget dolor eget, elementum congue enim. ', 2021, 'assets/img/common/item-imgx64.jpg', 0, 1, NULL),
(3, 'Matrix', 'Lana Wachowski', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet rhoncus nibh, in consectetur ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur in massa congue, interdum felis id, finibus mauris. Vivamus vitae mi eros. Nunc nec placerat dolor. Aliquam maximus, mauris et rhoncus volutpat, elit nisi scelerisque arcu, a elementum tortor metus a augue. Curabitur eget lacus porta, faucibus turpis quis, molestie mauris. Etiam vestibulum et felis sit amet dapibus. Donec in velit lectus. Cras ac nibh et nisl eleifend vestibulum. Aliquam enim nisi, elementum ut fringilla id, tincidunt sed odio.\r\n\r\nMaecenas ullamcorper suscipit vehicula. Donec quis condimentum sapien. Fusce eu tortor vitae ante imperdiet placerat. Nunc quis sem id quam pretium egestas et a est. Fusce placerat dignissim ante vitae sollicitudin. Suspendisse iaculis pretium elit, sit amet blandit est auctor quis. Nunc ac molestie massa. Pellentesque placerat sem nec risus imperdiet efficitur. In hac habitasse platea dictumst. Suspendisse semper vitae erat eu finibus. Aliquam ultrices pharetra dapibus.\r\n\r\nSuspendisse dictum blandit rutrum. Maecenas pretium at ante id pretium. Nunc tempus ligula luctus ipsum mollis gravida. Nunc in tortor in urna mattis congue consequat quis urna. Morbi ante magna, tincidunt in risus id, bibendum interdum enim. Fusce condimentum ipsum et erat viverra imperdiet. Aenean sit amet odio eu ligula rhoncus dignissim. Quisque in nunc elit. Donec vel lacus vitae tellus fermentum pellentesque vel ac sem. In nibh sapien, sagittis eget dolor eget, elementum congue enim. ', 1999, 'assets/img/common/item-imgx64.jpg', 2, 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `films`
--
ALTER TABLE `films`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
