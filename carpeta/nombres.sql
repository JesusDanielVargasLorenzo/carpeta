-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2025 a las 21:49:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `nombres` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidop` varchar(25) NOT NULL,
  `apellidom` varchar(25) NOT NULL,
  `edad` int(9) NOT NULL,
  `numerofav` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `nombres` (`id`, `nombre`, `apellidop`, `apellidom`, `edad`, `numerofav`) VALUES
(1, 'Jesus Daniel', 'Vargas', 'Lorenzo', 18, 9),
(2, 'Moncerrat', 'Garcia', 'Torres', 16, 5),
(3, 'Alberto Rafael', 'Galicia', 'Ticante', 16, 18),
(4, 'Ximena', 'Hernandez', 'Santiago', 16, 4),
(5, 'David ', 'Marin', 'Cleto', 17, 2),
(6, 'Carlos Uriel', 'Hernandez', 'Del Angel', 16, 78),
(7, 'Abner Axel', 'Salazar', 'Niño', 16, 6),
(8, 'Nancy Nahomy', 'Sanchez', 'Cervantes', 16, 1),
(9, 'Valeria', 'De Los Santos', 'Torres', 17, 7),
(10, 'Luis Uriel', 'Luna', 'Jimenez', 16, 1500),
(11, 'david', 'perez', 'hernandez', 16, 45),
(12, 'Paola', 'viveros', 'tejeda', 16, 65),
(13, 'Carlos Daniel', 'Barrientos ', 'Vazquez', 16, 76),
(14, 'Luis Alonzo', 'Briones', 'Rodriguez', 17, 33),
(15, 'Keila Zeret', 'Hernandez', 'Leon', 16, 12),
(16, 'Victor Manuel', 'Vidal ', 'Resendiz', 16, 4321),
(17, 'Angel Eduardo', 'Vazquez', 'Lopez', 12, 76),
(18, 'Justin Alexis', 'Villa', 'Perez', 23, 1),
(19, 'Andy Dayanna', 'Tamez', 'Balleza', 15, 8),
(20, 'Joshua Tadeo', 'Rodrigues', 'Lopez', 17, 656);


ALTER TABLE `nombres`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `nombres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
