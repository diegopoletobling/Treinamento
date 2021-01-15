-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2021 at 11:47 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki_carros`
--

-- --------------------------------------------------------

--
-- Table structure for table `carros`
--

CREATE TABLE `carros` (
  `id` int NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `codigoRenavam` varchar(11) NOT NULL,
  `anoModelo` int NOT NULL,
  `anoFabricacao` int NOT NULL,
  `cor` varchar(20) NOT NULL,
  `km` int NOT NULL,
  `marca` varchar(20) NOT NULL,
  `preco` float NOT NULL,
  `precoFipe` float NOT NULL,
  `arCondicionado` tinyint(1) DEFAULT NULL,
  `airBag` tinyint(1) DEFAULT NULL,
  `cdPlayer` tinyint(1) DEFAULT NULL,
  `direcaoHidraulica` tinyint(1) DEFAULT NULL,
  `vidroEletrico` tinyint(1) DEFAULT NULL,
  `travaEletrica` tinyint(1) DEFAULT NULL,
  `cambioAutomatico` tinyint(1) DEFAULT NULL,
  `rodasLiga` tinyint(1) DEFAULT NULL,
  `alarme` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carros`
--

INSERT INTO `carros` (`id`, `descricao`, `placa`, `codigoRenavam`, `anoModelo`, `anoFabricacao`, `cor`, `km`, `marca`, `preco`, `precoFipe`, `arCondicionado`, `airBag`, `cdPlayer`, `direcaoHidraulica`, `vidroEletrico`, `travaEletrica`, `cambioAutomatico`, `rodasLiga`, `alarme`) VALUES
(26, 'abvz', 'aaaaaaa', 'aaaaaaaaaaa', 2222, 2222, 'aaaaaaa', 123, 'aaaaaaa', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'aaaaabvz', 'aaaaaaa', 'aaaaaaaaaaa', 2222, 2000, 'aaaaaaa', 123, 'aaaaaaa', 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(32, 'aaaaabvznnnn', 'aaaaaaa', 'aaaaaaaaaaa', 2222, 2222, 'aaaaaaa', 123, 'aaaaaaa', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'aaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaaa', 2111, 2111, 'aaaaaa', 123, 'aa', 123, 1223, 0, 1, 1, 1, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
