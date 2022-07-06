-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 09:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doentes`
--

-- --------------------------------------------------------

--
-- Table structure for table `doentes`
--

CREATE TABLE `doentes` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(30) DEFAULT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Sintomas` tinytext DEFAULT NULL,
  `Diagnostico` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doentes`
--

INSERT INTO `doentes` (`ID`, `Nome`, `Idade`, `Sintomas`, `Diagnostico`) VALUES
(1, 'Antonio', 120, 'Dor de Cabeca', 'Malaria'),
(3, 'Tomas', 100, 'Dor de estomago', 'Colera'),
(4, 'Mambo', 100, 'Dificuldades de respiracao', 'Covid-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doentes`
--
ALTER TABLE `doentes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Nome` (`Nome`),
  ADD UNIQUE KEY `Nome_2` (`Nome`);

  

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doentes`
--
ALTER TABLE `doentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
