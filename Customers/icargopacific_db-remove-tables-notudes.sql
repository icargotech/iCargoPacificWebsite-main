-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 08:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icargopacific_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_log`
--

CREATE TABLE `attendance_log` (
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_log`
--

INSERT INTO `attendance_log` (`email`, `first_name`, `last_name`, `action`, `date`) VALUES
('123@123.com', 'test first', 'test last', 'Time-in', 'Apr 09, 2022 17:15'),
('bugcrowdninja@wearehackerone.com', 'Mark Ivan', 'David', 'Time-out', 'Apr 09, 2022 17:19'),
('123@123.com', 'test first', 'test last', 'Time-out', 'Apr 09, 2022 17:20');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `cargo_type` varchar(200) NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `kilometer_kilo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `service`, `service_type`, `cargo_type`, `vehicle_type`, `kilometer_kilo`) VALUES
(1, 'other', '', 'box', 'Small Pickup', '1'),
(2, 'Standard shipping', '', 'box', 'Small Pickup', '11'),
(3, 'Containers', '', 'bag', '6w Fwd Truck', '1'),
(4, 'Standard shipping', '', 'box', 'Small Pickup', '1'),
(5, 'Standard shipping', '', 'box', 'Small Pickup', '2'),
(6, 'Crate', '', 'create', 'Pickup Truck', '123123123'),
(7, 'Standard shipping', '', 'box', 'Small Pickup', '1312'),
(8, 'Standard shipping', '', 'box', 'Small Pickup', '5'),
(9, 'Aircraft', '', 'pallet', 'Pickup Truck', '69'),
(10, 'Standard shipping', '', 'box', 'Small Pickup', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(1, 'vzTL0PqMogyOWhF', 'Branch 1 St., Quiapo', 'Manila', 'Metro Manila', '1001', 'Philippines', '+2 123 455 623', '2020-11-26 11:21:41'),
(3, 'KyIab3mYBgAX71t', 'SAmple', 'Cebu', 'Cebu', '6000', 'Philippines', '+1234567489', '2020-11-26 16:45:05'),
(4, 'dIbUK5mEh96f0Zc', 'Sample', 'Sample', 'Sample', '123456', 'Philippines', '123456', '2020-11-27 13:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `item_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `name` int(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id_driver` varchar(200) NOT NULL,
  `driver_id` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fleet_staff`
--

CREATE TABLE `fleet_staff` (
  `name` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `ID` varchar(200) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fleet_staff`
--

INSERT INTO `fleet_staff` (`name`, `role`, `ID`, `number`, `country_code`) VALUES
('1', '1', '1', NULL, NULL),
('123', '123', '123', '1231231231', '+63'),
('123123', '123131', '123123', '9185272613', '+63'),
('11qqq', 'driver', '12321312', '1231231231', '+63 '),
('qweqe', 'qweqeq', 'qweqwe', '9185276132', '+63');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `tracking_number` varchar(200) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `sender_no` int(11) NOT NULL,
  `sender_note` varchar(200) DEFAULT NULL,
  `recipient` varchar(200) NOT NULL,
  `recipient_no` varchar(200) NOT NULL,
  `recipient_note` varchar(200) NOT NULL,
  `date_of_delivery` varchar(200) NOT NULL,
  `date_booked` date NOT NULL,
  `date_delivered` varchar(200) NOT NULL,
  `date_cancel` varchar(200) DEFAULT NULL,
  `time_deliver` varchar(200) NOT NULL,
  `tracking_type` varchar(200) NOT NULL,
  `pick_up_point` varchar(200) NOT NULL,
  `drop_off_point` varchar(200) NOT NULL,
  `cargo_type` varchar(200) NOT NULL,
  `cargo_service` varchar(200) NOT NULL,
  `driver` varchar(200) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `distance` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `dimension` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `Reason` varchar(200) DEFAULT NULL,
  `mode_of_pay` varchar(200) DEFAULT NULL,
  `ac_dc_stat` varchar(200) DEFAULT NULL,
  `part_comp_name` varchar(200) DEFAULT NULL,
  `pick_up_time` varchar(200) DEFAULT NULL,
  `MOP` varchar(200) DEFAULT NULL,
  `time` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `vehicle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `tracking_number`, `sender`, `sender_no`, `sender_note`, `recipient`, `recipient_no`, `recipient_note`, `date_of_delivery`, `date_booked`, `date_delivered`, `date_cancel`, `time_deliver`, `tracking_type`, `pick_up_point`, `drop_off_point`, `cargo_type`, `cargo_service`, `driver`, `total_amount`, `distance`, `weight`, `dimension`, `status`, `Reason`, `mode_of_pay`, `ac_dc_stat`, `part_comp_name`, `pick_up_time`, `MOP`, `time`, `date`, `vehicle`) VALUES
(1, 'x501-200', 'david', 123456, 'fragile', 'balais', '654321', 'not fragile', '03/15/2022', '0000-00-00', '03/20/2022', '', '3:30', 'drone', 'manila', 'pampanga', 'Box', 'Standard shipping', 'manong jeep', 500, '50km', '5', '5', 'Delivered', 'gusto ko lang mag padala', 'paypal', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'x501-201', 'balais', 53451, 'fragile', 'tuprio', '1233123', 'not fragile', '02/15/2022', '0000-00-00', '02/20/2022', '', '4:30', 'QR code', 'cavite', 'bagiuo', 'Bag', 'Trucks', 'Team A', 5000, '5km', '7', '7', 'In-transit', 'gusto ko lang mag padala', 'paypal', 'accepted', NULL, NULL, NULL, '08:01', '2022-03-29', NULL),
(3, 'x501-203', 'tuprio', 980456, 'fragile', 'namuco', '3123', 'not fragile', '02/20/2022', '0000-00-00', '02/20/2022', '', '5:30', 'QR code', 'bolinao', 'clark', 'pallet', 'containers', 'Team B', 5, '10km', '8', '8', 'packed', 'gusto ko lang mag padala', 'gcash', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'x501-204', 'namuco', 944446, 'fragile', 'delivios', '31123523', 'not fragile', '02/25/2022', '0000-00-00', '02/25/2022', '', '6:30', 'QR code', 'bulacan', 'valenzuela', 'crate', 'Aircraft', 'Team C', 1123, '500km', '1', '3', 'Ordered', 'gusto ko lang mag padala', 'gcash', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'x501-204', 'delivios', 946, 'fragile', 'david', '3523', 'not fragile', '03/01/2022', '0000-00-00', '03/01/2022', '', '7:30', 'QR code', 'caloocan', 'DRT', 'Roll', 'others', 'Team D', 11123, '100km', '14', '34', 'Pending', 'gusto ko lang mag padala', 'paymaya', 'pending', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'x501-2066', 'del6ivios', 9466, 'fragi6le', 'davi6d', '35263', 'not6 fragile', '03/24/2022', '0000-00-00', '03/24/2022', '', '76:30', 'Q6R code', 'caloocan', 'DRT', 'Roll', 'others', 'Team D', 11123, '100km', '14', '34', 'Cancelled', 'gusto ko lang mag padala', 'paymaya', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'x501-2066', 'del6ivios', 9466, 'fragi6le', 'davi6d', '35263', 'not6 fragile', '03/23/2022', '0000-00-00', '03/23/2022', '', '76:30', 'Q6R code', 'caloocan', 'DRT', 'Roll', 'others', 'Team D', 11123, '100km', '14', '34', 'Delivered', 'gusto ko lang mag padala', 'master card', 'declined', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `sender_contact` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 = Deliver, 2=Pickup',
  `from_branch_id` varchar(30) NOT NULL,
  `to_branch_id` varchar(30) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `width`, `length`, `price`, `status`, `date_created`) VALUES
(1, '201406231415', 'John Smith', 'Sample', '+123456', 'Claire Blake', 'Sample', 'Sample', 1, '1', '0', '30kg', '12in', '12in', '15in', 2500, 7, '2020-11-26 16:15:46'),
(2, '117967400213', 'John Smith', 'Sample', '+123456', 'Claire Blake', 'Sample', 'Sample', 2, '1', '3', '30kg', '12in', '12in', '15in', 2500, 1, '2020-11-26 16:46:03'),
(3, '983186540795', 'John Smith', 'Sample', '+123456', 'Claire Blake', 'Sample', 'Sample', 2, '1', '3', '20Kg', '10in', '10in', '10in', 1500, 2, '2020-11-26 16:46:03'),
(4, '514912669061', 'Claire Blake', 'Sample', '+123456', 'John Smith', 'Sample Address', '+12345', 2, '4', '1', '23kg', '12in', '12in', '15in', 1900, 0, '2020-11-27 13:52:14'),
(5, '897856905844', 'Claire Blake', 'Sample', '+123456', 'John Smith', 'Sample Address', '+12345', 2, '4', '1', '30kg', '10in', '10in', '10in', 1450, 0, '2020-11-27 13:52:14'),
(6, '505604168988', 'John Smith', 'Sample', '+123456', 'Sample', 'Sample', '+12345', 1, '1', '0', '23kg', '12in', '12in', '15in', 2500, 1, '2020-11-27 14:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `partner_verify`
--

CREATE TABLE `partner_verify` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `comp_addr` varchar(200) DEFAULT NULL,
  `company_email` varchar(200) NOT NULL,
  `company_no` varchar(200) NOT NULL,
  `uplidtype` varchar(200) DEFAULT NULL,
  `id_no` varchar(200) DEFAULT NULL,
  `picpath` varchar(200) DEFAULT NULL,
  `permit_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_verify`
--

INSERT INTO `partner_verify` (`ID`, `company_name`, `comp_addr`, `company_email`, `company_no`, `uplidtype`, `id_no`, `picpath`, `permit_no`) VALUES
(1, 'test name', 'ttest addr', 'test@email.com', '09123123', 'Birth Certificate', '12308123', 'bc8c6014f0ff79f6377b34f3823554a0-zeroe.PNG', 123123),
(3, 'test comp 2', 'test addr2', 'ttesad123@123.com', '09123128376', 'Driver\'s License', '8737468', '0a2e6010f7ad025f1b32d10591d9aea5-per.PNG', 123987),
(4, 'last test', 'last company address', 'lastcomp@email.com', '123987985236090909', 'UMID', '0909090909', 'dcab90ed95f5ccf8ac5a07d07aa84683-pc repair.jpg', 2147483647),
(5, 'qeqewqe', 'qeqweq', 'qeqeq', '1313123', 'Birth Certificate', '123123', '74ebd0e96f74d353b3316bfee2210d19-impo.PNG', 12313123);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `ID` int(11) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `recipient_name` varchar(200) NOT NULL,
  `sender_address` varchar(200) NOT NULL,
  `recipient_address` varchar(200) NOT NULL,
  `parcel_weight` varchar(200) NOT NULL,
  `parcel_length` varchar(200) NOT NULL,
  `parcel_width` varchar(200) NOT NULL,
  `parcel_height` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_areas`
--

CREATE TABLE `service_areas` (
  `ID` int(11) NOT NULL,
  `point1` varchar(200) NOT NULL,
  `point2` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_areas`
--

INSERT INTO `service_areas` (`ID`, `point1`, `point2`, `region`) VALUES
(2, '324324', '234324', 'Region VI'),
(3, '123', '123', 'Region II'),
(4, '1', '1', 'Region I'),
(5, '131', '123', 'Region I');

-- --------------------------------------------------------

--
-- Table structure for table `signup_partners_users`
--

CREATE TABLE `signup_partners_users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_addr` varchar(200) NOT NULL,
  `conact_no` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `bio` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_partners_users`
--

INSERT INTO `signup_partners_users` (`id`, `firstname`, `lastname`, `email`, `password`, `company_name`, `company_addr`, `conact_no`, `date_created`, `bio`, `Image`, `role`) VALUES
(1, 'test first', 'test last', '123@123.com', '123', 'test company', 'company addr', '093452', '2022-03-20 06:57:11', 'qweqeqwe', '730-after_hoverstate.png', 1),
(2, '123', '123', '123', '123', '123', '123', '123', '2022-03-20 06:58:32', NULL, NULL, NULL),
(3, '1', '3', '4', '5', '6', '7', '8', '2022-03-21 12:09:01', NULL, NULL, NULL),
(4, '1', '1', '11@123.com', '123Passord*', '1', '1', '1', '2022-03-21 09:14:34', NULL, NULL, NULL),
(5, '123', '333', '123@111.com', '123Abc@@123', '123', '123', '123', '2022-03-21 09:19:29', NULL, NULL, NULL),
(6, 'test123', 'last name', 'test@wqe.com', '123Strong123*', 'tanduay', 'manila', '09012312312', '2022-04-05 09:25:11', NULL, NULL, NULL),
(7, '123123', '123123', '123123', '123123', '', '', '123123', '2022-04-05 09:33:28', NULL, NULL, 3),
(8, 'Mark Ivan', 'David', 'bugcrowdninja@wearehackerone.com', '123', '', '', '123123123', '2022-04-05 09:34:51', NULL, NULL, 2),
(9, 'last ', 'last', 'last', 'last', '', '', 'last', '2022-04-05 09:47:53', NULL, NULL, NULL),
(10, 'qeqwe', 'qeqweqeqwe', '1231231@123.com', 'qweQwwe123.', '', '', '6309123123123', '2022-04-09 06:46:03', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` int(30) NOT NULL,
  `staff_role` varchar(200) NOT NULL,
  `employee_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(1, 'Administrator13333', '\"/> <script>alert(1);</script>', 'admin@admin.com', 'd41d8cd98f00b204e9800998ecf8427e', 1, 0, '2020-11-26 10:57:04'),
(2, 'John', 'Smith', 'jsmith@sample.com', '202cb962ac59075b964b07152d234b70', 2, 1, '2020-11-26 11:52:04'),
(3, 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', 2, 4, '2020-11-27 13:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `conditionss` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`ID`, `name`, `type`, `status`, `conditionss`) VALUES
(2, '34234', 'Closed Van', 'Available', '123123'),
(3, '13', 'Closed Van', 'Under Maintenance', '123123'),
(4, '1', 'Closed Van', '', '1'),
(5, '1231', 'Small Pickup', '', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fleet_staff`
--
ALTER TABLE `fleet_staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_verify`
--
ALTER TABLE `partner_verify`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service_areas`
--
ALTER TABLE `service_areas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup_partners_users`
--
ALTER TABLE `signup_partners_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partner_verify`
--
ALTER TABLE `partner_verify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_areas`
--
ALTER TABLE `service_areas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup_partners_users`
--
ALTER TABLE `signup_partners_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
