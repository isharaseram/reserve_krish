-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql.demo.vebdesign.biz
-- Generation Time: Oct 26, 2016 at 11:41 PM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_tution_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_registration`
--

CREATE TABLE `guest_registration` (
  `g_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contact_num` int(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest_registration`
--

INSERT INTO `guest_registration` (`g_id`, `title`, `fname`, `lname`, `address`, `city`, `country`, `mail`, `contact_num`, `password`) VALUES
(1, 'Mr', 'Ishara', 'Seram', 'kandana', 'kandana', 'Sri Lanka', 'seramishara@gmail.com', 7412588, '76d80224611fc919a5d54f0ff9fba446');

-- --------------------------------------------------------

--
-- Table structure for table `guest_registration_temp`
--

CREATE TABLE `guest_registration_temp` (
  `g_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contact_num` int(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest_registration_temp`
--

INSERT INTO `guest_registration_temp` (`g_id`, `title`, `fname`, `lname`, `address`, `city`, `country`, `mail`, `contact_num`, `password`) VALUES
(1, 'Mr', 'Ishara', 'Seram', 'kandana', 'kandana', 'Sri Lanka', 'seramishara@gmail.com', 7412588, '76d80224611fc919a5d54f0ff9fba446');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `hol_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `holiday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resereved`
--

CREATE TABLE `resereved` (
  `reserved_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `room1` varchar(20) NOT NULL,
  `room2` varchar(20) NOT NULL,
  `room3` varchar(25) NOT NULL,
  `room4` varchar(25) NOT NULL,
  `room5` varchar(25) NOT NULL,
  `banglow` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resereved`
--

INSERT INTO `resereved` (`reserved_id`, `date`, `room1`, `room2`, `room3`, `room4`, `room5`, `banglow`) VALUES
(1, '2012-08-12', '1', '1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(11) NOT NULL,
  `g_id` int(10) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `num_rooms` int(10) NOT NULL,
  `bk_bunglw` int(10) NOT NULL,
  `adult` int(10) NOT NULL,
  `child` int(10) NOT NULL,
  `excurtion_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_registration`
--
ALTER TABLE `guest_registration`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `guest_registration_temp`
--
ALTER TABLE `guest_registration_temp`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `resereved`
--
ALTER TABLE `resereved`
  ADD PRIMARY KEY (`reserved_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`),
  ADD KEY `g_id` (`g_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_registration`
--
ALTER TABLE `guest_registration`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guest_registration_temp`
--
ALTER TABLE `guest_registration_temp`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resereved`
--
ALTER TABLE `resereved`
  MODIFY `reserved_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `guest_registration` (`g_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
