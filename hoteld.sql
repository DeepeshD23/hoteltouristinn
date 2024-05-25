-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteld`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `btot`, `noofdays`) VALUES
(36, 'Mr.', 'Deepesh ', 'Dagar', 'Single Room', 1, '2023-01-16', '2023-01-17', 1100.00, 1100.00, 0.00, 0.00, 1),
(37, 'Mr.', 'harshit', 'agarwal', 'Family Room', 2, '2023-01-16', '2023-01-17', 2800.00, 2800.00, 0.00, 0.00, 1),
(38, 'Mr.', 'havik', 'agrawal', 'Deluxe Room', 2, '2023-01-16', '2023-01-18', 6800.00, 6800.00, 0.00, 0.00, 2),
(41, 'Prof.', 'df', 'jj', 'Single Room', 1, '0000-00-00', '0000-00-00', 0.00, 0.00, 0.00, 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `place`, `cusid`) VALUES
(60, 'Single Room', 'NotFree', 31),
(62, 'Single Room', 'NotFree', 31),
(63, 'Single Room', 'NotFree', 31),
(66, 'Family Room', 'NotFree', 34),
(67, 'Family Room', 'NotFree', 34),
(68, 'Family Room', 'NotFree', 34),
(69, 'Family Room', 'NotFree', 34),
(70, 'Deluxe Room', 'NotFree', 33),
(71, 'Deluxe Room', 'NotFree', 33),
(73, 'Deluxe Room', 'NotFree', 33),
(75, 'Deluxe Room', 'Free', 33),
(76, 'Single Room', 'NotFree', 31),
(77, 'Single Room', 'NotFree', 31),
(78, 'Deluxe Room', 'NotFree', 33),
(79, 'Deluxe Room', 'NotFree', 33),
(80, 'Family Room', 'NotFree', 34);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `male` varchar(11) DEFAULT NULL,
  `female` varchar(11) DEFAULT NULL,
  `child` varchar(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `tin` time DEFAULT NULL,
  `tout` time DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `male`, `female`, `child`, `Email`, `National`, `Phone`, `TRoom`, `NRoom`, `cin`, `cout`, `tin`, `tout`, `stat`, `nodays`) VALUES
(39, 'Mr.', 'xyz', 'zxy', '2', '2', '4', 'info.acpsabr@gmail.com', 'Indian', '45678', 'Single Room', '1', '2023-01-18', '2023-01-19', '17:56:00', '14:56:00', 'Not Confirm', 1),
(40, 'Mr.', 'sun', 'nny', '1', '1', '1', 'sun@gmail.com', 'Indian', '', 'Family Room', '2', '2023-01-17', '2023-01-17', '21:02:00', '22:03:00', 'Not Confirm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
