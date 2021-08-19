-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2021 at 10:33 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `Destination` varchar(40) DEFAULT NULL,
  `id_no` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `cidate` varchar(40) DEFAULT NULL,
  `codate` varchar(40) DEFAULT NULL,
  `pickup` varchar(30) NOT NULL,
  `member` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `Destination`, `id_no`, `address`, `city`, `district`, `state`, `email`, `cidate`, `codate`, `pickup`, `member`) VALUES
(18, 'Shivam Roy', NULL, '123095', 'asansol', 'Kolkata', 'Any Other District Within India', 'West Bengal', 'rickroy094@gmail.com', '2021-01-12', '2021-01-15', '', '4'),
(19, 'Shivam Roy', NULL, '123095', 'Kolkata', 'Bangalore', 'Mumbai', 'West Bengal', 'rickroy094@gmail.com', '2021-01-14', '2021-01-21', '', '4'),
(20, 'Shivam Roy', NULL, '123095', 'Kolkata', 'Mumbai', 'Mumbai', 'Maharashtra', 'rickroy094@gmail.com', '2021-01-20', '2021-01-27', '', '4'),
(21, 'raja', NULL, '123095', 'asansol', 'Mumbai', 'Bangalore', 'Maharashtra', 'raja123@gmail.com', '2021-01-13', '2021-01-17', '', '4'),
(22, 'Shivam Roy', NULL, '11123', 'Kolkata', '--Select--', '--Select--', '--Select--', 'roy38707@gmail.com', '2021-01-29', '2021-01-28', '', '2'),
(23, 'Shivam Roy', 'Vivanta Grand ,( Kolkata )', '123095', 'Kolkata', 'Kolkata', 'Kolkata', 'West Bengal', 'roy38707@gmail.com', '2021-01-21', '2021-01-25', '', '4'),
(24, 'rajiv', 'Grand ,( Mumbai )', '123095', 'Kolkata', 'Kolkata', 'Kolkata', 'West Bengal', 'roy38707@gmail.com', '2021-01-14', '2021-01-18', '', '4'),
(25, 'alex', 'Grand ,( Mumbai )', '56789', 'kolkata', 'Mumbai', 'Mumbai', 'Maharashtra', 'sam123@gmail.com', '2021-05-13', '2021-05-15', '', '2'),
(26, 'alex', 'Grand ,( Mumbai )', '56789', 'kolkata', 'Bangalore', 'Bangalore', 'Maharashtra', 'sam123@gmail.com', '2021-05-21', '2021-05-18', '', '2'),
(27, 'Sonali', 'Vivanta Grand ,( Kolkata )', '56789', 'kolkata', 'Mumbai', 'Mumbai', 'Maharashtra', 'sam123@gmail.com', '2021-05-11', '2021-05-15', '9:00 PM', '2'),
(28, 'Sonali', 'n', '5678998765', 'kolkata', 'Mumbai', 'Mumbai', 'Maharashtra', 'sam123@gmail.com', '2021-05-28', '2021-05-20', '10:00 AM', '2'),
(29, 'alex', 'n', '56789', 'kolkata', 'Bangalore', 'Mumbai', 'Andhra pradesh', 'sam123@gmail.com', '2021-05-13', '2021-05-06', '10:00 AM', '2'),
(30, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(31, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(32, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(33, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(34, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(35, 'ghulam', 'Grand ,( Mumbai )', '56789', 'kolkata', 'Mumbai', 'Mumbai', 'Maharashtra', 'sam123@gmail.com', '2021-05-20', '2021-05-20', '10:00 AM', '2'),
(36, 'ghulam', 'Grand ,( Mumbai )', '56789', 'kolkata', 'Mumbai', 'Mumbai', 'Maharashtra', 'sam123@gmail.com', '2021-05-20', '2021-05-20', '10:00 AM', '2'),
(37, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(38, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(39, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(40, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(41, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(42, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(43, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(44, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(45, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(46, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(47, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(48, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(49, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(50, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(51, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(52, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(53, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(54, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', ''),
(55, '', '', '', '', '--Select--', '--Select--', '--Select--', '', '', '', '--Select--', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
