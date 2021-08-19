-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2021 at 10:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_no` varchar(30) DEFAULT NULL,
  `room_type` varchar(30) DEFAULT NULL,
  `room_price` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Un Book'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_no`, `room_type`, `room_price`, `status`) VALUES
(14, '100', 'Standard Deluxe Room', '₹ 5,000', 'Un Book'),
(15, '101', 'Semi Deluxe Room', '₹ 3,000', 'Un Book'),
(16, '102', 'Window View Semi Deluxe Room', '₹ 8,000', 'Un Book'),
(17, '103', 'Single Bedroom', '₹ 2,000', 'Un Book'),
(18, '104', 'Double Bedroom', '₹ 4,000', 'Un Book'),
(19, '105', 'Execuitive Suite', '₹ 15,000', 'Un Book'),
(20, '106', 'Luxury Suite', '₹ 18,000', 'Un Book'),
(21, '107', 'King Suite', '₹ 20,000', 'Un Book'),
(22, '108', 'Queen Suite', '₹ 25,000', 'Un Book'),
(23, '109', 'Presedential Suite', '₹ 33,000', 'Un Book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
