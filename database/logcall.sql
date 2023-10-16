-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 08:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logcall`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `loginId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`loginId`, `email`, `password`) VALUES
(1, 'mthova.hp@gmail.com', 'Mh@0765'),
(2, 'mh@gmail.com', 'mtho@66');

-- --------------------------------------------------------

--
-- Table structure for table `logform`
--

CREATE TABLE `logform` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logform`
--

INSERT INTO `logform` (`id`, `location`, `street_address`, `city`, `zip_code`, `description`) VALUES
(0, 'b', 'b', 'h', 0, 'gg'),
(0, 'b', 'b', 'h', 0, 'gg'),
(0, 'bgh', 'bhhy', 'hjh', 0, 'gg'),
(0, 'bgh', 'bhhy', 'hjh', 0, 'gg'),
(0, 'bgh', 'bhhy', 'hjh', 0, 'gg'),
(0, 'hhhhh', 'jugflkjk', 'hjgfd', 6666, 'jkuyhgf'),
(0, 'hhhhh', 'jugflkjk', 'hjgfd', 6666, 'jkuyhgf'),
(0, 'hhhhh', 'jugflkjk', 'hjgfd', 6666, 'jkuyhgf'),
(0, 'gg', 'h', 'jhu', 0, 'h'),
(0, 'gg', 'h', 'jhu', 0, 'h');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `UserID` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`UserID`, `first_name`, `last_name`, `email`, `phone_number`, `password`) VALUES
(3, 'Dawn', ' e', 'eded@G.D', 832701011, 'WEW'),
(4, 'Dawn', ' e', 'eded@G.D', 832701011, 'WEW'),
(5, 'Dawn', ' e', 'eded@G.D', 832701011, 'WEW'),
(6, 'Dawn', ' e', 'eded@G.D', 832701011, 'WEW'),
(7, 'Dawn', ' e', 'eded@G.D', 832701011, 'WEW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
