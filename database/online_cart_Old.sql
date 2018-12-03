-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 05:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` longtext NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `name`, `type`, `phone_no`, `gender`, `address`, `dob`) VALUES
(1, 'karthick.tirunagari@gmail.com', '20c48c580d3ff57b61267f6e02cad81f', 'T A Karthik', 'user', 2147483647, 0, 'tedshxfb', '2018-11-21'),
(2, 'karthick.tirunagari@gmail.com', '20c48c580d3ff57b61267f6e02cad81f', 'T A Karthik', 'user', 2147483647, 0, 'tedshxfb', '2018-11-21'),
(3, 'karthick.tirunagari@gmail.com', '20c48c580d3ff57b61267f6e02cad81f', 'T A Karthik', 'user', 2147483647, 0, 'tedshxfb', '2018-11-21'),
(4, 'karthick.tirunagari@gmail.com', '20c48c580d3ff57b61267f6e02cad81f', 'T A Karthik', 'user', 2147483647, 0, 'tedshxfb', '2018-11-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
