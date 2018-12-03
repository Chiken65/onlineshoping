-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 06:14 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
-- Table structure for table `available_items`
--

CREATE TABLE `available_items` (
  `aid` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `owner` varchar(50) NOT NULL COMMENT 'who made the item',
  `item_available` int(11) NOT NULL COMMENT 'no of items',
  `no_of_days_to_make` date NOT NULL COMMENT 'no of days to create the item',
  `cost` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_images`
--

CREATE TABLE `item_images` (
  `imgid` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `aid` int(11) NOT NULL COMMENT 'id from available_items',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `oid` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `itemid` int(11) NOT NULL COMMENT 'from available_items ',
  `quantity` int(11) NOT NULL COMMENT 'no of items (1 or 2 or 3..)',
  `address` longtext NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '0 requested, 1 accepted, 2 rejected',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `phone_no` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` longtext NOT NULL,
  `dob` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `name`, `type`, `phone_no`, `gender`, `address`, `dob`, `created_at`, `updated_at`) VALUES
(1, 'karthick.tirunagari@gmail.com', '20c48c580d3ff57b61267f6e02cad81f', 'T A Karthik', 'user', '2147483647', 'Male', 'tedshxfb', '2018-11-21', '2018-12-03 10:44:13', NULL),
(2, 'rajarohit.in@gmail.com', '20c48c580d3ff57b61267f6e02cad81f', 'A Rohith', 'user', '8374384580', 'Male', 'D.No :8-181/1, Tailors colon, Gopalapatnam, Vsk', '2018-11-21', '2018-12-03 10:44:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_items`
--
ALTER TABLE `available_items`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `item_images`
--
ALTER TABLE `item_images`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_items`
--
ALTER TABLE `available_items`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
