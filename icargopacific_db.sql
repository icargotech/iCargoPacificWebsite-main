-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2022 at 07:09 AM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `timeid` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_log`
--

INSERT INTO `attendance_log` (`timeid`, `email`, `first_name`, `last_name`, `action`, `date`) VALUES
(150, '123@123.com', 'polo', 'mendoza', 'Time-in', 'May 14, 2022 08:33 PM'),
(151, '123@123.com', 'polo', 'mendoza', 'Time-out', 'May 14, 2022 09:53 PM'),
(153, '123@123.com', 'polo', 'mendoza', 'Time-in', 'May 17, 2022 10:31 AM'),
(155, '123@123.com', 'polo', 'mendoza', 'Time-out', 'May 22, 2022 02:10 PM'),
(156, '123@123.com', 'polo', 'mendoza', 'Time-in', 'May 22, 2022 02:10 PM');

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
(5, 'Standard shipping', '', 'box', 'Small Pickup', '3'),
(8, 'Standard shipping', '', 'box', 'Small Pickup', '5'),
(9, 'Aircraft', '', 'pallet', 'Pickup Truck', '69'),
(10, 'Standard shipping', '', 'box', 'Small Pickup', '12312'),
(11, 'Standard shipping', '', 'box', 'Small Pickup', '1'),
(14, 'Trucks', '', 'Pallet', 'Small Pickup', '1000');

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
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(1, 'vzTL0PqMogyOWhF', 'Branch 1 St., Quiapo', 'Manila', 'Metro Manila', '1001', 'Philippines', '+2 123 455 623', '2020-11-26 11:21:41'),
(3, 'KyIab3mYBgAX71t', 'SAmple', 'Cebu', 'Cebu', '6000', 'Philippines', '+1234567489', '2020-11-26 16:45:05'),
(4, 'dIbUK5mEh96f0Zc', 'Sample', 'Sample', 'Sample', '123456', 'Philippines', '123456', '2020-11-27 13:31:49'),
(5, 'hzeD5HOBNbIgYkx', 'Lot 4, Blk 8 Country Homes, Bagong Silangan', 'Quezon City', 'NCR', '1119', 'Philippines', '09152565555', '2021-05-14 18:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi|HI|Hello|hello|HELLO|hey|HEY|Hey', 'Hello there!'),
(2, 'What is your name? | what is your name', 'My name is chatbot'),
(3, 'bye|by|good bye|good by', 'Ok bye, See you soon.');

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
  `driver_id` mediumblob
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
('12333', '333', '123333', '0000000000', '+63'),
('123', '123333', '13', '0000000000', '+63');

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
  `date` date DEFAULT NULL,
  `vehicle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `tracking_number`, `sender`, `sender_no`, `sender_note`, `recipient`, `recipient_no`, `recipient_note`, `date_of_delivery`, `date_booked`, `date_delivered`, `date_cancel`, `time_deliver`, `tracking_type`, `pick_up_point`, `drop_off_point`, `cargo_type`, `cargo_service`, `driver`, `total_amount`, `distance`, `weight`, `dimension`, `status`, `Reason`, `mode_of_pay`, `ac_dc_stat`, `part_comp_name`, `pick_up_time`, `MOP`, `time`, `date`, `vehicle`) VALUES
(1, 'x501-200', 'david', 123456, 'fragile', 'balais', '654321', 'not fragile', '03/15/2022', '2022-04-15', '03/20/2022', '', '3:30', 'drone', 'manila', 'pampanga', 'Box', 'Standard shipping', 'manong jeep', 500, '50km', '5', '5', 'Delivered', 'gusto ko lang mag padala', 'paypal', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'x501-201', 'balais', 53451, 'fragile', 'tuprio', '1233123', 'not fragile', '02/15/2022', '2022-04-14', '02/20/2022', '', '4:30', 'QR code', 'cavite', 'bagiuo', 'Bag', 'Trucks', 'Team A', 5000, '5km', '7', '7', 'In-transit', 'gusto ko lang mag padala', 'paypal', 'declined', NULL, NULL, NULL, '', '0000-00-00', NULL),
(3, 'x501-203', 'tuprio', 980456, 'fragile', 'namuco', '3123', 'not fragile', '02/20/2022', '2022-03-20', '02/20/2022', '', '5:30', 'QR code', 'bolinao', 'clark', 'pallet', 'containers', 'Team B', 5, '10km', '8', '8', 'In-transit', 'gusto ko lang mag padala', 'gcash', 'accepted', NULL, NULL, NULL, '', '0000-00-00', NULL),
(4, 'x501-204', 'namuco', 944446, 'fragile', 'delivios', '31123523', 'not fragile', '02/25/2022', '2022-04-20', '02/25/2022', '', '6:30', 'QR code', 'bulacan', 'valenzuela', 'crate', 'Aircraft', 'Team C', 1123, '500km', '1', '3', 'Pending', 'gusto ko lang mag padala', 'gcash', 'pending', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'x501-205', 'delivios', 946, 'fragile', 'david', '3523', 'not fragile', '03/01/2022', '2022-03-23', '03/01/2022', '', '7:30', 'QR code', 'caloocan', 'DRT', 'Roll', 'others', '', 11123, '100km', '14', '34', 'Cancelled', 'gusto ko lang mag padala', 'paymaya', 'accepted', NULL, NULL, NULL, '', '0000-00-00', '34234'),
(6, 'x501-206', 'del6ivios', 9466, 'fragi6le', 'davi6d', '35263', 'not6 fragile', '03/24/2022', '2022-04-01', '03/24/2022', '', '76:30', 'Q6R code', 'caloocan', 'DRT', 'Roll', 'others', 'Team D', 11123, '100km', '14', '34', 'Cancelled', 'gusto ko lang mag padala', 'paymaya', 'pending', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'x501-207', 'del6ivios', 9466, 'fragi6le', 'davi6d', '35263', 'not6 fragile', '03/23/2022', '2022-04-20', '03/23/2022', '', '76:30', 'Q6R code', 'caloocan', 'DRT', 'Roll', 'others', 'Team D', 11123, '100km', '14', '34', 'Delivered', 'gusto ko lang mag padala', 'master card', 'declined', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `status` int(2) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `brand_name` varchar(30) NOT NULL,
  `brand_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `width`, `length`, `price`, `status`, `date_created`, `brand_name`, `brand_price`) VALUES
(14, '143657264444', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes', '0915651999', 'Roderick Patrolla', '', '09158820292', 1, '2', '1', '15', '16', '13', '4', 5, 6, '2021-06-05 03:30:11', '', ''),
(25, '398514411183', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes, Bagong Silangan, Quezon City', '0915651999', 'Roderick Patrolla', 'Saint Anthony Academy of Quezon City, Himlayan Road, Tandang Sora, Quezon City', '09158820292', 1, '2', '1', '15', '15', '15', '4', 5, 6, '2021-06-16 02:05:22', 'lbc', ' 228 '),
(28, '487110387700', 'Justin San', 'manila', '09123', 'Eric Yuan', 'califronia', '091234', 1, '2', '1', '10', '20', '10', '4', 5, 6, '2021-06-16 23:27:25', 'fedex', ' 209'),
(29, '422965061318', 'justin san', 'Manila', '1234', 'Eric Yuan', 'califtonia', '8123', 1, '2', '1', '10', '20', '10', '4', 5, 6, '2021-06-16 23:39:13', 'fedex', ' 209'),
(30, '012701432865', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes, Bagong Silangan, Quezon City', '0915651999', 'Roderick Patrolla', 'Saint Anthony Academy of Quezon City, Himlayan Road, Tandang Sora, Quezon City', '09158820292', 1, '2', '1', '15', '15', '15', '4', 5, 6, '2021-06-18 06:51:26', 'fedex', ' 234'),
(31, '807117844871', 'justin', 'cebu', 'sa', 'asd', 'manila', 'das', 1, '2', '1', '100', '100', '100', '4', 5, 6, '2021-06-18 09:08:38', 'transportify', ' 10002'),
(32, '725008072157', 'AWESOME', 'Awesome', '213123123', 'AWESOME', 'Cool place', '123123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:27:39', 'fedex', ' 153'),
(33, '339250237305', 'AWESOME', 'Awesome', '213123123', 'AWESOME', 'Cool place', '123123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:27:54', 'fedex', ' 153'),
(34, '275021233768', 'AWESOME', 'Awesome', '213123123', 'AWESOME', 'Cool place', '123123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:31:50', 'fedex', ' 153'),
(35, '806038962035', 'AWESOME', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:34:53', 'lbc', ' 147 '),
(36, '430715710836', 'AWESOME', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:34:54', 'lbc', ' 147 '),
(37, '197537073932', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', '213123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:41:23', 'jrs', ' 152'),
(38, '155657378637', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', '213123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:48:17', 'jrs', ' 152'),
(39, '535937400710', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', '213123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 17:59:32', 'jrs', ' 152'),
(40, '647938014722', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', 'Awesome place', '213123', 1, '2', '1', '12', '12', '12', '4', 5, 6, '2021-06-18 18:01:05', 'jrs', ' 152'),
(41, '000252102621', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes, Bagong Silangan, Quezon City', '0915651999', 'Roderick Patrolla', 'Saint Anthony Academy of Quezon City, Himlayan Road, Tandang Sora, Quezon City', '09158820292', 1, '2', '1', '15', '15', '15', '4', 5, 6, '2021-06-19 19:17:08', 'capex', ' 232'),
(42, '632752211215', 'justin', 'manila', 'sana', 'kiskls', 'cebu', 'asd', 1, '2', '1', '23', '21', '21', '4', 5, 6, '2021-06-20 23:24:11', 'lbc', ' 486 '),
(43, '776858116901', 'justin san', 'manila', '09176924203', 'edward', 'cebu', '3291312', 1, '2', '1', '100', '100', '100', '4', 5, 6, '2021-06-21 06:14:45', 'fedex', ' 10009'),
(45, '288163034247', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes, Bagong Silangan, Quezon City', '0915651999', 'Roderick Patrolla', 'Saint Anthony Academy of Quezon City, Himlayan Road, Tandang Sora, Quezon City', '09158820292', 1, '2', '1', '20', '20', '20', '4', 5, 6, '2021-06-22 06:31:20', 'transportify', ' 402'),
(46, '873118544329', 'justin san', 'davao', '091231', 'edward tan', 'manila', '091213', 1, '2', '1', '32', '21', '21', '4', 5, 6, '2021-06-22 06:51:45', 'apcargo', ' 677'),
(47, '418419288519', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes, Bagong Silangan, Quezon City', '0915651999', 'Roderick Patrolla', 'Saint Anthony Academy of Quezon City, Himlayan Road, Tandang Sora, Quezon City', '09158820292', 1, '2', '1', '15', '15', '15', '4', 5, 5, '2021-06-23 21:01:57', 'apcargo', ' 230'),
(48, '747311327632', 'Clark', '11-2-2 Teacher Bliss Compound, Kalayaan Village Pasay City.', 'Maks ', 'Maks', 'F1 Hotel, 32nd St. 7th Ave, BGC', '09997882021', 1, '2', '1', '100', '100', '100', '4', 5, 6, '2021-07-02 02:33:09', 'fedex', ' 10009'),
(49, '933835136849', 'Justin San', 'Manila', '09176924203', 'Edward Tan', 'Cebu', '09123459', 1, '2', '1', '10', '30', '10', '4', 5, 6, '2021-09-26 04:50:39', 'lbc', ' 303 '),
(50, '152099505081', '', '', '', '', '', '', 1, '2', '1', '', '', '', '4', 5, 6, '2021-09-26 05:01:02', '', ''),
(51, '768268739952', 'Justin San', 'Manila', '09183214', 'Dennis Uy', 'Cebu', '09131456', 1, '2', '1', '50', '30', '50', '4', 5, 6, '2021-09-26 05:04:33', 'fedex', ' 1509'),
(52, '834850797584', 'qw', 'mannil', 'qew', 'ewq', 'cebu', 'ewq', 1, '2', '1', '13', '12', '213', '4', 5, 6, '2021-10-23 03:34:59', 'transportify', ' 158'),
(53, '413190612981', 'wqee', 'df', 'qw', 'eq', 'hjds', 'ewe', 1, '2', '1', '21', '324', '23', '4', 5, 6, '2022-01-17 05:30:34', 'apcargo', ' 6809'),
(54, '147473030037', 'adfasdf', 'asdfadfa', 'asdfasdf', 'dfadf', 'qqweqweqwe', 'asdfasf', 1, '2', '1', '176', '123', '123', '4', 5, 6, '2022-03-13 23:46:18', 'jrs', ' 21656'),
(55, '573574959379', 'annie valer', 'pasg city', '0945576588', 'alisaha', 'quezon city', '09487754854', 1, '2', '1', '6', '8', '4', '4', 5, 6, '2022-03-21 03:30:19', 'fedex', ' 57'),
(56, '704555502092', 'das', 'f', 'dsa', 'd', 'f', 'd', 1, '2', '1', '12', '21', '21', '4', 5, 6, '2022-03-29 07:42:58', 'capex', ' 259'),
(57, '186670273352', 'Danilo Jr. Briones Patrolla', 'Lot 4 Blk 8 Country Homes, Bagong Silangan, Quezon City', '09550172153', 'Mark Cloyd Ubias', 'Lot 8 Blk 7 Country homes, Bagong Silangan, Quezon City', '09550172153', 1, '2', '1', '15', '15', '15', '4', 5, 6, '2022-04-08 20:21:13', 'fedex', ' 234');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(10, 6, 1, '2020-11-27 14:06:57'),
(11, 20, 1, '2021-06-14 23:20:49'),
(12, 47, 5, '2021-06-23 21:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (	
  `user_id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passwordRepeat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`user_id`, `firstName`, `lastName`, `email`, `contact`, `companyName`, `password`, `passwordRepeat`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, 'Kang', 'Seulgi', 'ks@gmail.com', '95612345', 'SM Ent', '123', ''),
(6, '', '', '', '', '', '', '');

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
  `permit_no` int(11) DEFAULT NULL,
  `verify` varchar(255) DEFAULT 'In-progress',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_verify`
--

INSERT INTO `partner_verify` (`ID`, `company_name`, `comp_addr`, `company_email`, `company_no`, `uplidtype`, `id_no`, `picpath`, `permit_no`, `verify`, `status`) VALUES
(1, 'test name', 'manila', '123@123.com', '09123123', 'Birth Certificate', '12308123', 'bc8c6014f0ff79f6377b34f3823554a0-zeroe.PNG', 123123, 'Verified', 2),
(3, 'test comp 2', 'pasay', '11@123.com', '09123128376', 'Driver\'s License', '8737468', '0a2e6010f7ad025f1b32d10591d9aea5-per.PNG', 123987, 'Verified', 2),
(4, 'last test', 'last company address', 'test@wqe.com', '123987985236090909', 'UMID', '0909090909', 'dcab90ed95f5ccf8ac5a07d07aa84683-pc repair.jpg', 2147483647, 'Verified', 1),
(5, 'qeqewqe', 'qeqweq', 'bugcrowdninja@wearehackerone.com', '1313123', 'Birth Certificate', '123123', '74ebd0e96f74d353b3316bfee2210d19-impo.PNG', 12313123, 'Denied', 2),
(6, 'test', '123', '123@123.com', '123', 'Birth Certificate', '123', 'e14d0b3d348d55be42da205c056f018e-after_hoverstate.png', 123, 'Verified', 1);

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
(1, '123', '123', 'Visayas'),
(2, 'manila', 'bulacan', 'Metro Manila'),
(3, 'Manila', 'Quezon City', 'Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `signup_customers_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `signup_merchants_users`
--

CREATE TABLE `signup_merchants_users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `businessName` varchar(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_merchants_users`
--

INSERT INTO `signup_merchants_users` (`user_id`, `firstName`, `lastName`, `businessName`, `contact`, `email`, `password`) VALUES
(1, 'first', 'ako', 'First Test', '1234567', 'first@gmail.com', 'firstako'),
(2, 'Second', 'Twos', 'Secondary', '12344', 'Second@gmail.com', 'second123');

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
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bio` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_partners_users`
--

INSERT INTO `signup_partners_users` (`id`, `firstname`, `lastname`, `email`, `password`, `company_name`, `company_addr`, `conact_no`, `date_created`, `bio`, `Image`, `role`, `token`) VALUES
(1, 'first nameqweqwe', 'alert(1);', '123@123.com', '123', 'test company', 'company addr', '093452', '2022-03-20 06:57:11', 'about', '650-61bb224e83f35.jpg', 1, NULL),
(6, 'test123', 'last name', 'test@wqe.com', '123Strong123*', 'tanduay', 'manila', '09012312312', '2022-04-05 09:25:11', NULL, NULL, NULL, NULL);

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
-- Table structure for table `staff_users`
--

CREATE TABLE `staff_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(200) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_users`
--

INSERT INTO `staff_users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `status`) VALUES
(1, 'polo', 'mendoza', '123@123.com', '123', '1', '1'),
(13, 'staff', 'qwe', 'staff@icargopacific.com', 'Test123.qwe', '2', '1');

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
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, 0, '2020-11-26 10:57:04'),
(2, 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 2, 1, '2020-11-26 11:52:04'),
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
(2, '34234', 'Closed Van', 'On Transit', '123123'),
(3, '13', 'Closed Van', 'Under Maintenance', '123123'),
(4, '1', 'Closed Van', '', '1'),
(6, 'a', 'Unset', '', 'asd213'),
(7, '213', 'Closed Van', '', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_log`
--
ALTER TABLE `attendance_log`
  ADD PRIMARY KEY (`timeid`);

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
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `signup_customers_users`
--
ALTER TABLE `signup_customers_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `signup_merchants_users`
--
ALTER TABLE `signup_merchants_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `signup_partners_users`
--
ALTER TABLE `signup_partners_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_users`
--
ALTER TABLE `staff_users`
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
-- AUTO_INCREMENT for table `attendance_log`
--
ALTER TABLE `attendance_log`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partner_verify`
--
ALTER TABLE `partner_verify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_areas`
--
ALTER TABLE `service_areas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup_customers_users`
--
ALTER TABLE `signup_customers_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup_merchants_users`
--
ALTER TABLE `signup_merchants_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup_partners_users`
--
ALTER TABLE `signup_partners_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `staff_users`
--
ALTER TABLE `staff_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
