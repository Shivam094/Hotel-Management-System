-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2021 at 08:50 AM
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
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola||hi||hello||hola', 'Hello good morning sir , welcome to the White Star Groups of Hotel how may i assist you'),
(2, 'how to book hotel rooms||what are the procedure for booking||how to book hotel room', 'It\'s very easy just fill in the below details & click on check status button to book rooms.'),
(3, 'what is your name||whats your name', 'My name is Admin Bot'),
(4, 'can i cancel my booking after my booking confirmation', 'yeah , sure u can but the registration fees u paid while booking is non-refundable.'),
(5, 'where are your from||where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day||bye', 'Sad to see you are going. Have a nice day'),
(7, 'is there any outdoor pool', 'we have an outdoor and indoor pool'),
(8, 'do you offer breakfast', 'yes we offer breakfast *standard charges applied.'),
(9, 'i wanted to enquire about the room reservation', 'yes plz when you are planning to visit sir'),
(10, 'tomorrow||today', 'a room for two sir'),
(11, 'yes', 'sir would you prefer with two twin bed or a double bed'),
(12, 'no', 'ok sir no problem , you can book your room and select the various add ons manually.'),
(13, 'either of them would do', 'and sir the accomodation is for how many days'),
(14, '1 night||2 night||3 night||4 night||5 night||6 night||7 night', 'sir what kind of rooms will you prefer deluxe or semi-deluxe'),
(15, 'what are the prices for both', 'sir deluxe is 5000 Rs and semi-deluxe is 3000 Rs'),
(16, 'i would prefer a deluxe room', 'ok sir thank you'),
(17, 'i would prefer a semi-deluxe room', 'ok sir thank you'),
(18, 'have you booked the room', 'No sir , you have to do it manually but your response is recorded.Thanks for your valuable time !'),
(19, '', ''),
(20, '', ''),
(21, '', ''),
(22, '', ''),
(23, '', ''),
(24, '', ''),
(25, '', ''),
(26, 'Bye||See you later||Have a Good Day||bye', 'Sad to see you are going. Have a nice day'),
(27, 'Bye||See you later||Have a Good Day||bye', 'Sad to see you are going. Have a nice day'),
(28, 'Bye||See you later||Have a Good Day||bye', 'Sad to see you are going. Have a nice day');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(11, 'hi', '2021-05-03 12:20:14', 'user'),
(12, 'Hello, how are you.', '2021-05-03 12:20:14', 'bot'),
(13, 'bye', '2021-05-03 12:20:18', 'user'),
(14, 'Sad to see you are going. Have a nice day', '2021-05-03 12:20:18', 'bot'),
(15, 'hi', '2021-05-21 10:42:11', 'user'),
(16, 'Hello, how are you.', '2021-05-21 10:42:11', 'bot'),
(17, 'bye', '2021-05-21 10:42:17', 'user'),
(18, 'Sad to see you are going. Have a nice day', '2021-05-21 10:42:17', 'bot'),
(19, 'hi', '2021-05-22 01:26:52', 'user'),
(20, 'Hello, how are you.', '2021-05-22 01:26:52', 'bot'),
(21, 'bye', '2021-05-22 01:27:00', 'user'),
(22, 'Sad to see you are going. Have a nice day', '2021-05-22 01:27:00', 'bot'),
(23, 'hi', '2021-05-29 02:09:57', 'user'),
(24, 'Hello, how are you.', '2021-05-29 02:09:57', 'bot'),
(25, 'bye', '2021-05-29 02:10:01', 'user'),
(26, 'Sad to see you are going. Have a nice day', '2021-05-29 02:10:01', 'bot'),
(27, 'hi', '2021-05-30 02:15:37', 'user'),
(28, 'Hello, how are you.', '2021-05-30 02:15:37', 'bot'),
(29, 'bye', '2021-05-30 02:15:41', 'user'),
(30, 'Sad to see you are going. Have a nice day', '2021-05-30 02:15:41', 'bot'),
(31, 'hi', '2021-05-30 03:14:38', 'user'),
(32, 'Hello, how are you.', '2021-05-30 03:14:38', 'bot'),
(33, 'bye', '2021-05-30 03:14:58', 'user'),
(34, 'Sad to see you are going. Have a nice day', '2021-05-30 03:14:58', 'bot'),
(35, 'hi', '2021-05-30 03:15:22', 'user'),
(36, 'Hello, how are you.', '2021-05-30 03:15:22', 'bot'),
(37, 'bye', '2021-05-30 03:15:30', 'user'),
(38, 'Sad to see you are going. Have a nice day', '2021-05-30 03:15:30', 'bot'),
(39, 'hi', '2021-05-30 09:32:09', 'user'),
(40, 'Hello, how are you.', '2021-05-30 09:32:09', 'bot'),
(41, 'how to book hotel', '2021-05-30 09:32:17', 'user'),
(42, 'bye', '2021-05-30 09:32:25', 'user'),
(43, 'Sad to see you are going. Have a nice day', '2021-05-30 09:32:25', 'bot'),
(44, 'hi', '2021-06-05 12:20:23', 'user'),
(45, 'Hello, how are you.', '2021-06-05 12:20:23', 'bot'),
(46, 'bye', '2021-06-05 12:20:28', 'user'),
(47, 'Sad to see you are going. Have a nice day', '2021-06-05 12:20:28', 'bot'),
(48, 'hi', '2021-06-06 02:49:54', 'user'),
(49, 'Hello, how are you.', '2021-06-06 02:49:54', 'bot'),
(50, 'how to book hotel rooms', '2021-06-06 02:50:03', 'user'),
(51, 'bye', '2021-06-06 02:50:15', 'user'),
(52, 'Sad to see you are going. Have a nice day', '2021-06-06 02:50:15', 'bot'),
(53, 'hi', '2021-06-19 12:43:55', 'user'),
(54, 'Hello, how are you.', '2021-06-19 12:43:55', 'bot'),
(55, 'bye', '2021-06-19 12:43:59', 'user'),
(56, 'Sad to see you are going. Have a nice day', '2021-06-19 12:43:59', 'bot'),
(57, 'hi', '2021-06-20 10:51:02', 'user'),
(58, 'Hello, how are you.', '2021-06-20 10:51:02', 'bot'),
(59, 'bye', '2021-06-20 10:51:06', 'user'),
(60, 'Sad to see you are going. Have a nice day', '2021-06-20 10:51:06', 'bot'),
(61, 'hi', '2021-06-26 12:52:26', 'user'),
(62, 'Hello, how are you.', '2021-06-26 12:52:26', 'bot'),
(63, 'bye', '2021-06-26 12:52:30', 'user'),
(64, 'Sad to see you are going. Have a nice day', '2021-06-26 12:52:30', 'bot'),
(65, 'hi', '2021-06-27 10:18:35', 'user'),
(66, 'Hello, how are you.', '2021-06-27 10:18:35', 'bot'),
(67, 'bye', '2021-06-27 10:18:40', 'user'),
(68, 'Sad to see you are going. Have a nice day', '2021-06-27 10:18:40', 'bot'),
(69, 'how to book hotel room', '2021-06-27 10:18:50', 'user'),
(70, 'hi', '2021-06-27 10:54:34', 'user'),
(71, 'Hello, how are you.', '2021-06-27 10:54:34', 'bot'),
(72, 'how to book hotel rooms', '2021-06-27 10:54:47', 'user'),
(73, 'why', '2021-06-27 10:55:04', 'user'),
(74, 'Sorry not be able to understand you', '2021-06-27 10:55:04', 'bot'),
(75, 'bye', '2021-06-27 10:55:12', 'user'),
(76, 'Sad to see you are going. Have a nice day', '2021-06-27 10:55:12', 'bot'),
(77, 'hi', '2021-07-04 03:06:43', 'user'),
(78, 'Hello good morning sir , welcome to the White Star Groups of Hotel how may i assist you', '2021-07-04 03:06:43', 'bot'),
(79, 'hi good morning', '2021-07-04 03:07:04', 'user'),
(80, 'Sorry not be able to understand you', '2021-07-04 03:07:04', 'bot'),
(81, 'hi goodmorning', '2021-07-04 03:07:13', 'user'),
(82, 'Sorry not be able to understand you', '2021-07-04 03:07:13', 'bot'),
(83, 'i wanted to enquire about the room reservation', '2021-07-04 03:07:48', 'user'),
(84, 'yes plz when you are planning to visit sir', '2021-07-04 03:07:48', 'bot'),
(85, 'today', '2021-07-04 03:07:57', 'user'),
(86, 'a room for two sir', '2021-07-04 03:07:57', 'bot'),
(87, 'yes', '2021-07-04 03:08:04', 'user'),
(88, 'sir would you prefer with two twin bed or a double bed', '2021-07-04 03:08:04', 'bot'),
(89, 'either of them would do', '2021-07-04 03:08:25', 'user'),
(90, 'and sir the accomodation is for how many days', '2021-07-04 03:08:25', 'bot'),
(91, '3 nights', '2021-07-04 03:08:32', 'user'),
(92, 'Sorry not be able to understand you', '2021-07-04 03:08:32', 'bot'),
(93, '3 night', '2021-07-04 03:08:37', 'user'),
(94, 'sir what kind of rooms will you prefer deluxe or semi-deluxe', '2021-07-04 03:08:37', 'bot'),
(95, 'what are the prices for both', '2021-07-04 03:08:59', 'user'),
(96, 'sir deluxe is 5000 Rs and semi-deluxe is 3000 Rs', '2021-07-04 03:08:59', 'bot'),
(97, 'i would prefer a deluxe room', '2021-07-04 03:09:22', 'user'),
(98, 'ok sir thank you', '2021-07-04 03:09:22', 'bot'),
(99, 'have you booked the room', '2021-07-04 03:09:33', 'user'),
(100, 'No sir , you have to do it manually but your response is recorded.Thanks for your valuable time !', '2021-07-04 03:09:33', 'bot'),
(101, 'no', '2021-07-04 03:09:45', 'user'),
(102, 'ok sir no problem , you can book your room and select the various add ons manually.', '2021-07-04 03:09:45', 'bot'),
(103, 'bye', '2021-07-04 03:09:55', 'user'),
(104, 'Sad to see you are going. Have a nice day', '2021-07-04 03:09:55', 'bot'),
(105, 'hi', '2021-07-04 07:41:58', 'user'),
(106, 'Hello good morning sir , welcome to the White Star Groups of Hotel how may i assist you', '2021-07-04 07:41:58', 'bot'),
(107, 'hi good morning', '2021-07-04 07:42:34', 'user'),
(108, 'Sorry not be able to understand you', '2021-07-04 07:42:34', 'bot'),
(109, 'hi goodmorning', '2021-07-04 07:42:45', 'user'),
(110, 'Sorry not be able to understand you', '2021-07-04 07:42:45', 'bot'),
(111, 'how to book hotel rooms', '2021-07-04 07:43:56', 'user'),
(112, 'hi', '2021-07-09 04:02:53', 'user'),
(113, 'Hello good morning sir , welcome to the White Star Groups of Hotel how may i assist you', '2021-07-09 04:02:53', 'bot'),
(114, 'h', '2021-07-09 04:03:11', 'user'),
(115, 'Hello good morning sir , welcome to the White Star Groups of Hotel how may i assist you', '2021-07-09 04:03:11', 'bot'),
(116, 'is', '2021-07-09 04:03:18', 'user'),
(117, 'My name is Admin Bot', '2021-07-09 04:03:18', 'bot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
