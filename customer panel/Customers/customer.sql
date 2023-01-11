-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 08:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `ID` int(11) NOT NULL,
  `sender` varchar(250) NOT NULL,
  `sender_no` int(11) NOT NULL,
  `sender_address` varchar(250) NOT NULL,
  `recipient` varchar(250) NOT NULL,
  `recipient_no` int(11) NOT NULL,
  `recipient_address` varchar(250) NOT NULL,
  `payer` varchar(250) NOT NULL,
  `payer_zip` int(10) NOT NULL,
  `payer_town` varchar(250) NOT NULL,
  `payer_address` varchar(250) NOT NULL,
  `payer_vat` int(100) NOT NULL,
  `payer_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`ID`, `sender`, `sender_no`, `sender_address`, `recipient`, `recipient_no`, `recipient_address`, `payer`, `payer_zip`, `payer_town`, `payer_address`, `payer_vat`, `payer_number`) VALUES
(1, 'juls', 2147483647, '1700 Roxas Boulevard, Tambo, Parañaque, Metro Manila, Philippines', 'Gwen', 2147483647, 'Gen trias Baclaran', 'Julian', 1702, 'Paranaque', '1701 M Roxas', 12321, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `cargo_info`
--

CREATE TABLE `cargo_info` (
  `ID` int(11) NOT NULL,
  `pallet` int(11) NOT NULL,
  `g_weight` int(11) NOT NULL,
  `length` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `cargo_type` varchar(250) DEFAULT NULL,
  `service` varchar(250) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `value` int(11) NOT NULL,
  `vehicle` varchar(250) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo_info`
--

INSERT INTO `cargo_info` (`ID`, `pallet`, `g_weight`, `length`, `width`, `height`, `weight`, `cargo_type`, `service`, `details`, `value`, `vehicle`, `image`) VALUES
(1, 12321, 12321, 123, 12321, 123, 12321, 'Crate', 'Customer Service', 'qwewq', 2147483647, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `ID` int(11) NOT NULL,
  `date_time` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `notes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`ID`, `date_time`, `name`, `email`, `notes`) VALUES
(1, '06/02/2022 02:14:16 PM', 'qwe', 'qqweqw', 'wqdqwe12313');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `ID` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `pickup` varchar(200) NOT NULL,
  `distance` varchar(200) NOT NULL,
  `fare` varchar(200) NOT NULL,
  `services` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `mop` varchar(200) NOT NULL,
  `signature` varchar(200) NOT NULL,
  `sender_address` varchar(200) NOT NULL,
  `recipient_address` varchar(200) NOT NULL,
  `response_pay` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `length` varchar(200) NOT NULL,
  `width` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `cargo_type` varchar(200) NOT NULL,
  `sched` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ID` int(11) NOT NULL,
  `sender_loc` varchar(200) NOT NULL,
  `recipient_loc` varchar(200) NOT NULL,
  `vehicle` varchar(200) NOT NULL,
  `length` varchar(200) NOT NULL,
  `width` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `cargo_type` varchar(200) NOT NULL,
  `sched` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cargo_info`
--
ALTER TABLE `cargo_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cargo_info`
--
ALTER TABLE `cargo_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pickup`
--
ALTER TABLE `pickup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
