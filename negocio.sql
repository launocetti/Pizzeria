-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 12:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negocio`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `dni` varchar(15) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `barrio` varchar(30) DEFAULT NULL,
  `localidad` varchar(30) DEFAULT NULL,
  `nro_tarjeta_debito` varchar(30) DEFAULT NULL,
  `nro_mercado_pago` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `dni`, `calle`, `altura`, `barrio`, `localidad`, `nro_tarjeta_debito`, `nro_mercado_pago`) VALUES
(2, 'ramiro', 'romero', '33454345', 'falsa', 3454, 'La hermandad', 'Lavallol', '343454545656', '234234'),
(5, 'Maira', 'Lara', '345345', 'falsa', 444, 'Bella Vista', 'Lavallol', '343454545656', '2342343'),
(6, 'Maria', 'Romero', '35604759', 'downstreet', 345435, 'La hermandad', 'asdasff', '3456-456-3455', '2342343'),
(7, 'Maria', 'Romero', '35604759', 'downstreet', 345435, 'La hermandad', 'asdasff', '3456-456-3455', '2342343'),
(9, 'Maria', 'Romero', '35604759', 'downstreet', 345435, 'La hermandad', 'asdasff', '3456-456-3455', '2342343'),
(10, 'Ramiro', '', '', '', 0, '', '', '', ''),
(12, 'Ramiro', 'Montoya', '35604759', 'falsa', 444, 'Bella Vista', 'San Miguel', '3456-456-3455', '234234'),
(13, 'MARCOS', 'TRUBBO', '44565464', 'VILLEGAS', 34534543, 'MORRIS', 'HURLING', '34534535', '345354'),
(14, 'Ramiro', 'Romero', '35604759', 'falsa', 444, 'Bella Vista', 'San Miguel', '3456-456-3455', '234234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
