-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 07:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(600) NOT NULL,
  `Password` varchar(600) NOT NULL,
  `ChatName` varchar(50) NOT NULL,
  `EmailConfirm` int(2) NOT NULL,
  `PremiumAccount` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Name`, `Email`, `Password`, `ChatName`, `EmailConfirm`, `PremiumAccount`) VALUES
(1, 'Cezar', 'ccatarau@gmail.com', '$2y$10$0xg8onYHuR0dG3tjCfdbF.QAadg0B2SYKCROFDilNpEvcCWExBfJ2', 'Cezar', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ID` int(20) NOT NULL,
  `Date_M` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ID`, `Date_M`, `Name`, `Message`) VALUES
(1, '2019/01/24', 'Cezar', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
