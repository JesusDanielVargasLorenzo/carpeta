-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2025 a las 01:49:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `id_edad` int(11) NOT NULL,
  `id_colonia` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `correo` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `alumnos` (`id`, `numero_control`, `nombre`, `apellido_paterno`, `apellido_materno`, `id_edad`, `id_colonia`, `id_especialidad`, `id_genero`, `correo`, `telefono`, `fecha_ingreso`) VALUES
(8, 'CETis', 'Carlos Uriel', 'Hernandez', 'Del Angel', 6, 13, 1, 1, 'cetis@cetis131.', '8999455848', '2017-03-22');

CREATE TABLE `colonias` (
  `id` int(11) NOT NULL,
  `nombre_colonia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `colonias` (`id`, `nombre_colonia`) VALUES
(8, 'Bugambilias'),
(11, 'Campestre'),
(5, 'Esfuerzo'),
(6, 'Freznos'),
(3, 'Granjas'),
(1, 'Jarachina Norte'),
(2, 'Jarachina Sur'),
(10, 'Loma Real'),
(7, 'Progreso'),
(13, 'San Valentin'),
(9, 'Ventura'),
(12, 'Vista Alta'),
(4, 'Vista Hermosa');


CREATE TABLE `edades` (
  `id` int(11) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `edades` (`id`, `edad`) VALUES
(1, 14),
(2, 15),
(3, 16),
(4, 17),
(5, 18),
(6, 19);



CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `nombre_especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




INSERT INTO `especialidades` (`id`, `nombre_especialidad`) VALUES
(4, 'Administracion De Recursos Humanos'),
(5, 'CiberSeguridad'),
(9, 'Comercio Internacional'),
(7, 'Construccion'),
(10, 'Hoteleria'),
(6, 'Logistica'),
(3, 'Mantenimiento De Computo'),
(2, 'Mantenimiento Industrial'),
(8, 'Mecatronica'),
(1, 'Programacion');




CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nombre_genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




INSERT INTO `generos` (`id`, `nombre_genero`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Otro');




ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_control` (`numero_control`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_edad` (`id_edad`),
  ADD KEY `id_colonia` (`id_colonia`),
  ADD KEY `id_especialidad` (`id_especialidad`),
  ADD KEY `id_genero` (`id_genero`);





ALTER TABLE `colonias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_colonia` (`nombre_colonia`);





ALTER TABLE `edades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `edad` (`edad`);




ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_especialidad` (`nombre_especialidad`);




ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_genero` (`nombre_genero`);




ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;






ALTER TABLE `colonias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;





ALTER TABLE `edades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;








ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;





ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;






ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_edad`) REFERENCES `edades` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`id_colonia`) REFERENCES `colonias` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);
COMMIT;


