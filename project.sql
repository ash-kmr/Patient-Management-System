-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 01:46 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `appoint_id` int(11) NOT NULL,
  `P_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `Time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`appoint_id`, `P_id`, `doctor_id`, `slot_id`, `Time`) VALUES
(1, 4, 2, 1, '2012-02-16 11:16:05'),
(2, 1, 6, 2, '2012-12-05 04:19:07'),
(3, 1, 5, 3, '2012-08-26 07:43:52'),
(4, 2, 2, 4, '2012-01-05 17:01:42'),
(5, 5, 3, 5, '2012-09-29 07:29:58'),
(6, 8, 6, 6, '2012-01-28 21:53:39'),
(7, 8, 2, 7, '2012-01-12 03:47:32'),
(8, 8, 1, 8, '2012-02-16 17:00:58'),
(9, 1, 1, 9, '2012-03-28 15:49:59'),
(10, 3, 6, 10, '2012-08-15 21:49:12'),
(11, 2, 6, 11, '2012-02-09 02:25:58'),
(12, 5, 1, 12, '2012-12-07 01:47:52'),
(13, 5, 6, 13, '2012-08-05 04:41:34'),
(14, 3, 6, 14, '2012-09-30 13:13:31'),
(15, 7, 2, 15, '2012-03-07 05:36:55'),
(16, 6, 1, 16, '2012-12-14 23:42:21'),
(17, 1, 2, 17, '2012-02-28 14:19:55'),
(18, 6, 6, 18, '2012-11-10 13:35:19'),
(19, 2, 1, 19, '2012-07-12 10:50:32'),
(20, 7, 1, 20, '2012-08-26 23:01:39'),
(21, 5, 1, 21, '2012-08-07 10:59:13'),
(22, 5, 1, 22, '2012-09-08 09:11:15'),
(23, 3, 5, 23, '2012-06-09 11:22:37'),
(24, 8, 3, 24, '2012-02-12 22:31:28'),
(25, 3, 3, 25, '2012-04-23 16:01:28'),
(26, 5, 6, 26, '2012-03-15 20:09:04'),
(27, 4, 2, 27, '2012-12-22 21:33:17'),
(28, 4, 2, 28, '2012-08-30 11:14:26'),
(29, 4, 1, 29, '2012-09-07 18:25:15'),
(30, 7, 2, 30, '2012-01-25 00:39:42'),
(31, 1, 1, 31, '2012-06-24 01:06:40'),
(32, 7, 1, 32, '2012-11-27 16:18:32'),
(33, 8, 2, 33, '2012-11-02 05:43:00'),
(34, 2, 3, 34, '2012-04-04 09:48:28'),
(35, 5, 1, 35, '2012-02-27 12:32:13'),
(36, 2, 2, 36, '2012-07-29 17:40:38'),
(37, 5, 3, 37, '2012-01-23 01:56:18'),
(38, 1, 6, 38, '2012-04-17 04:02:50'),
(39, 6, 1, 39, '2012-04-06 12:02:19'),
(40, 6, 4, 40, '2012-01-14 15:22:13'),
(41, 6, 2, 41, '2012-03-06 08:47:30'),
(42, 4, 3, 42, '2012-05-10 00:11:13'),
(43, 8, 4, 43, '2012-03-26 19:46:35'),
(44, 3, 4, 44, '2012-04-18 00:06:44'),
(45, 3, 3, 45, '2012-02-05 16:46:19'),
(46, 4, 2, 46, '2012-06-28 06:14:19'),
(47, 7, 3, 47, '2012-11-18 22:36:31'),
(48, 4, 4, 48, '2012-12-31 13:50:03'),
(49, 1, 4, 49, '2012-05-08 17:39:05'),
(50, 3, 2, 50, '2012-01-30 08:28:21'),
(51, 6, 4, 51, '2012-03-08 16:40:22'),
(52, 4, 1, 52, '2012-10-25 20:47:51'),
(53, 2, 2, 53, '2012-02-26 01:08:45'),
(54, 2, 1, 54, '2012-08-04 04:25:40'),
(55, 1, 5, 55, '2012-06-21 17:41:23'),
(56, 7, 4, 56, '2012-05-21 06:45:44'),
(57, 7, 4, 57, '2012-06-22 16:22:50'),
(58, 3, 3, 58, '2012-10-12 23:36:38'),
(59, 2, 3, 59, '2012-11-04 05:58:38'),
(60, 5, 4, 60, '2012-12-09 14:50:21'),
(61, 4, 1, 61, '2012-12-30 19:06:23'),
(62, 7, 3, 62, '2012-05-20 16:02:40'),
(63, 6, 1, 63, '2012-06-16 06:42:55'),
(64, 7, 3, 64, '2012-08-10 16:21:41'),
(65, 1, 2, 65, '2012-04-29 16:26:56'),
(66, 7, 3, 66, '2012-07-13 13:48:36'),
(67, 2, 4, 67, '2012-12-13 18:06:05'),
(68, 5, 3, 68, '2012-05-18 03:19:08'),
(69, 2, 6, 69, '2012-10-04 10:17:45'),
(70, 3, 6, 70, '2012-01-24 18:08:45'),
(71, 3, 2, 71, '2012-07-27 18:36:10'),
(72, 8, 6, 72, '2012-08-07 11:35:55'),
(73, 2, 6, 73, '2012-12-23 04:15:37'),
(74, 1, 2, 74, '2012-03-22 18:39:02'),
(75, 8, 1, 75, '2012-10-31 09:35:47'),
(76, 1, 1, 76, '2012-01-15 05:28:44'),
(77, 1, 4, 77, '2012-07-20 21:28:56'),
(78, 4, 2, 78, '2012-02-09 03:34:11'),
(79, 5, 1, 79, '2012-05-19 13:15:14'),
(80, 3, 6, 80, '2012-05-29 01:31:51'),
(81, 7, 6, 81, '2012-10-02 01:21:49'),
(82, 3, 6, 82, '2012-09-28 03:06:30'),
(83, 6, 2, 83, '2012-07-09 03:37:39'),
(84, 5, 2, 84, '2012-06-16 20:16:34'),
(85, 2, 2, 85, '2012-03-10 10:39:14'),
(86, 5, 2, 86, '2012-07-13 17:09:46'),
(87, 1, 6, 87, '2012-04-20 21:26:58'),
(88, 7, 4, 88, '2012-10-16 18:39:49'),
(89, 3, 6, 89, '2012-02-10 18:08:16'),
(90, 6, 1, 90, '2012-05-26 02:48:56'),
(91, 4, 5, 91, '2012-06-12 10:14:51'),
(92, 8, 6, 92, '2012-08-28 03:37:16'),
(93, 4, 2, 93, '2012-08-23 06:29:51'),
(94, 4, 6, 94, '2012-11-18 23:23:48'),
(95, 3, 2, 95, '2012-04-20 20:57:24'),
(96, 5, 2, 96, '2012-03-19 08:38:56'),
(97, 3, 1, 97, '2012-03-05 05:45:42'),
(98, 4, 5, 98, '2012-02-04 21:51:37'),
(99, 1, 4, 99, '2012-01-16 20:16:57'),
(100, 3, 6, 100, '2012-11-29 19:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `Auth_doctor`
--

CREATE TABLE `Auth_doctor` (
  `auth_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Auth_patient`
--

CREATE TABLE `Auth_patient` (
  `auth_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `P_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Auth_patient`
--

INSERT INTO `Auth_patient` (`auth_id`, `email`, `password`, `P_id`) VALUES
(1, 'sanket@gmail.com', 'sanket123', 1),
(2, 'mohan@gmail.com', 'mohan123', 2),
(3, 'ravi@gmail.com', 'ravi123', 3),
(4, 'prasad@gmail.com', 'prasad123', 4),
(5, 'siddharth@gmail.com', 'siddharth123', 5),
(6, 'john@gmail.com', 'john123', 6),
(7, 'ankan@gmail.com', 'ankan123', 7),
(8, 'sahil@gmail.com', 'sahil123', 8),
(9, 'priynaka@gmail.com', 'priynaka123', 9),
(10, 'satwika@gmail.com', 'satwika123', 10);

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `av_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Bill_details`
--

CREATE TABLE `Bill_details` (
  `bill_det_id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bill_details`
--

INSERT INTO `Bill_details` (`bill_det_id`, `bill_id`, `type`, `reason`) VALUES
(1, 1, 'Emergency', 'Un-disclosed'),
(2, 2, 'Med', 'pain'),
(3, 3, 'ICU', 'Un-disclosed'),
(4, 4, 'Med', 'pain'),
(5, 5, 'Emergency', 'pain'),
(6, 6, 'Med', 'Un-disclosed'),
(7, 7, 'regular', 'Un-disclosed'),
(8, 8, 'check-up', 'pain'),
(9, 9, 'check-up', 'Un-disclosed'),
(10, 10, 'ICU', 'Un-disclosed'),
(11, 11, 'Emergency', 'pain'),
(12, 12, 'Med', 'Un-disclosed'),
(13, 13, 'regular', 'Un-disclosed'),
(14, 14, 'regular', 'pain'),
(15, 15, 'delivery', 'pain'),
(16, 16, 'delivery', 'Un-disclosed'),
(17, 17, 'delivery', 'pain'),
(18, 18, 'check-up', 'pain'),
(19, 19, 'Med', 'pain'),
(20, 20, 'regular', 'Un-disclosed'),
(21, 21, 'ICU', 'pain'),
(22, 22, 'Med', 'Un-disclosed'),
(23, 23, 'Med', 'pain'),
(24, 24, 'ICU', 'Un-disclosed'),
(25, 25, 'ICU', 'Un-disclosed'),
(26, 26, 'delivery', 'pain'),
(27, 27, 'regular', 'Un-disclosed'),
(28, 28, 'delivery', 'pain'),
(29, 29, 'delivery', 'Un-disclosed'),
(30, 30, 'check-up', 'Un-disclosed'),
(31, 31, 'Emergency', 'Un-disclosed'),
(32, 32, 'check-up', 'pain'),
(33, 33, 'Med', 'Un-disclosed'),
(34, 34, 'check-up', 'pain'),
(35, 35, 'ICU', 'Un-disclosed'),
(36, 36, 'Emergency', 'Un-disclosed'),
(37, 37, 'check-up', 'pain'),
(38, 38, 'ICU', 'Un-disclosed'),
(39, 39, 'Emergency', 'Un-disclosed'),
(40, 40, 'Emergency', 'Un-disclosed'),
(41, 41, 'Emergency', 'pain'),
(42, 42, 'delivery', 'Un-disclosed'),
(43, 43, 'regular', 'pain'),
(44, 44, 'delivery', 'pain'),
(45, 45, 'Emergency', 'pain'),
(46, 46, 'ICU', 'Un-disclosed'),
(47, 47, 'delivery', 'Un-disclosed'),
(48, 48, 'check-up', 'Un-disclosed'),
(49, 49, 'delivery', 'Un-disclosed'),
(50, 50, 'Emergency', 'Un-disclosed'),
(51, 51, 'Emergency', 'Un-disclosed'),
(52, 52, 'regular', 'Un-disclosed'),
(53, 53, 'check-up', 'Un-disclosed'),
(54, 54, 'ICU', 'Un-disclosed'),
(55, 55, 'delivery', 'pain'),
(56, 56, 'Med', 'Un-disclosed'),
(57, 57, 'Emergency', 'Un-disclosed'),
(58, 58, 'check-up', 'Un-disclosed'),
(59, 59, 'Med', 'Un-disclosed'),
(60, 60, 'ICU', 'pain'),
(61, 61, 'delivery', 'pain'),
(62, 62, 'Emergency', 'pain'),
(63, 63, 'delivery', 'pain'),
(64, 64, 'delivery', 'Un-disclosed'),
(65, 65, 'regular', 'Un-disclosed'),
(66, 66, 'Emergency', 'pain'),
(67, 67, 'Emergency', 'pain'),
(68, 68, 'regular', 'Un-disclosed'),
(69, 69, 'regular', 'pain'),
(70, 70, 'delivery', 'Un-disclosed'),
(71, 71, 'ICU', 'pain'),
(72, 72, 'Med', 'pain'),
(73, 73, 'Med', 'pain'),
(74, 74, 'Med', 'Un-disclosed'),
(75, 75, 'check-up', 'Un-disclosed'),
(76, 76, 'Med', 'pain'),
(77, 77, 'check-up', 'Un-disclosed'),
(78, 78, 'Emergency', 'Un-disclosed'),
(79, 79, 'regular', 'pain'),
(80, 80, 'Emergency', 'Un-disclosed'),
(81, 81, 'Emergency', 'pain'),
(82, 82, 'Med', 'Un-disclosed'),
(83, 83, 'regular', 'pain'),
(84, 84, 'delivery', 'Un-disclosed'),
(85, 85, 'delivery', 'Un-disclosed'),
(86, 86, 'regular', 'Un-disclosed'),
(87, 87, 'regular', 'pain'),
(88, 88, 'Emergency', 'Un-disclosed'),
(89, 89, 'Emergency', 'pain'),
(90, 90, 'Med', 'pain'),
(91, 91, 'ICU', 'Un-disclosed'),
(92, 92, 'regular', 'pain'),
(93, 93, 'Med', 'Un-disclosed'),
(94, 94, 'check-up', 'pain'),
(95, 95, 'Emergency', 'pain'),
(96, 96, 'Emergency', 'Un-disclosed'),
(97, 97, 'Med', 'Un-disclosed'),
(98, 98, 'delivery', 'pain'),
(99, 99, 'Emergency', 'pain'),
(100, 100, 'check-up', 'pain');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `doctor_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`doctor_id`, `first_name`, `last_name`, `rating`) VALUES
(1, 'Dr. Praveen', 'Kumar', '5.0'),
(2, 'Dr. Rahul', 'Lahane', '5.0'),
(3, 'Dr. Sachin', 'singh', '4.5'),
(4, 'Dr. Aishwariya', 'Rai', '3.0'),
(5, 'Dr. Raju', 'reddy', '4.2'),
(6, 'Dr. Deepak', 'munjal', '4.9'),
(7, 'Dr.Yash', 'singh', '3.7'),
(8, 'Dr. Katrina', 'kafe', '4.1');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor_department`
--

CREATE TABLE `Doctor_department` (
  `dp_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `dept_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Med_Bills`
--

CREATE TABLE `Med_Bills` (
  `bill_id` int(11) NOT NULL,
  `P_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Med_Bills`
--

INSERT INTO `Med_Bills` (`bill_id`, `P_id`, `amount`) VALUES
(1, 4, 268),
(2, 1, 1116),
(3, 1, 1843),
(4, 2, 208),
(5, 5, 1935),
(6, 8, 578),
(7, 8, 1216),
(8, 8, 165),
(9, 1, 1693),
(10, 3, 29),
(11, 2, 1775),
(12, 5, 1693),
(13, 5, 1756),
(14, 3, 409),
(15, 7, 1174),
(16, 6, 865),
(17, 1, 36),
(18, 6, 1576),
(19, 2, 1470),
(20, 7, 92),
(21, 5, 122),
(22, 5, 722),
(23, 3, 1047),
(24, 8, 604),
(25, 3, 515),
(26, 5, 292),
(27, 4, 947),
(28, 4, 1688),
(29, 4, 555),
(30, 7, 840),
(31, 1, 107),
(32, 7, 968),
(33, 8, 586),
(34, 2, 282),
(35, 5, 1792),
(36, 2, 876),
(37, 5, 379),
(38, 1, 1427),
(39, 6, 1334),
(40, 6, 1500),
(41, 6, 1089),
(42, 4, 551),
(43, 8, 524),
(44, 3, 358),
(45, 3, 1536),
(46, 4, 1137),
(47, 7, 1240),
(48, 4, 301),
(49, 1, 1228),
(50, 3, 711),
(51, 6, 891),
(52, 4, 870),
(53, 2, 1481),
(54, 2, 800),
(55, 1, 9),
(56, 7, 1398),
(57, 7, 743),
(58, 3, 170),
(59, 2, 506),
(60, 5, 63),
(61, 4, 1984),
(62, 7, 1681),
(63, 6, 489),
(64, 7, 640),
(65, 1, 1256),
(66, 7, 1089),
(67, 2, 1984),
(68, 5, 1027),
(69, 2, 1144),
(70, 3, 405),
(71, 3, 1719),
(72, 8, 969),
(73, 2, 1761),
(74, 1, 976),
(75, 8, 1151),
(76, 1, 58),
(77, 1, 1568),
(78, 4, 609),
(79, 5, 1591),
(80, 3, 144),
(81, 7, 1339),
(82, 3, 109),
(83, 6, 1857),
(84, 5, 1450),
(85, 2, 239),
(86, 5, 1004),
(87, 1, 954),
(88, 7, 981),
(89, 3, 1500),
(90, 6, 1662),
(91, 4, 173),
(92, 8, 142),
(93, 4, 1895),
(94, 4, 1183),
(95, 3, 123),
(96, 5, 1196),
(97, 3, 1619),
(98, 4, 1741),
(99, 1, 1248),
(100, 3, 1138);

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `P_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(52) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`P_id`, `first_name`, `last_name`, `address`, `gender`, `phone`, `email`) VALUES
(1, 'sanket', 'Nyaydhish', 'auranagbad', 'male', '8796754775', 'sanket@gmail.com'),
(2, 'mohan', 'singh', 'ropar', 'male', '6546754775', 'mohan@gmail.com'),
(3, 'ravi', 'datane', 'auranagbad', 'male', '9896754775', 'ravi12@gmail.com'),
(4, 'prasad', 'Khsirsagar', 'delhi', 'male', '8795664775', 'prasada11@gmail.com'),
(5, 'siddharth', 'Nahar', 'auranagbad', 'male', '7895754775', 'siddhart56h@gmail.com'),
(6, 'john', 'matthews', 'new york', 'male', '8796754566', 'john34@gmail.com'),
(7, 'ankan', 'bal', 'kota', 'male', '9796854775', 'ankan@gmail.com'),
(8, 'sahil', 'kumar', 'patna', 'male', '9226754775', 'sahil@gmail.com'),
(9, 'priyanka', 'Rotte', 'auranagbad', 'female', '9196754775', 'rotte@gmail.com'),
(10, 'satwika', 'nyaydhish', 'auranagbad', 'female', '4596754775', 'ilove_sanket@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Patient_department`
--

CREATE TABLE `Patient_department` (
  `pd_id` int(11) NOT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `P_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Patient_Doctor`
--

CREATE TABLE `Patient_Doctor` (
  `pat_doc_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `P_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient_Doctor`
--

INSERT INTO `Patient_Doctor` (`pat_doc_id`, `doctor_id`, `P_id`) VALUES
(1, 2, 4),
(2, 6, 1),
(3, 5, 1),
(4, 2, 2),
(5, 3, 5),
(6, 6, 8),
(7, 2, 8),
(8, 1, 8),
(9, 1, 1),
(10, 6, 3),
(11, 6, 2),
(12, 1, 5),
(13, 6, 5),
(14, 6, 3),
(15, 2, 7),
(16, 1, 6),
(17, 2, 1),
(18, 6, 6),
(19, 1, 2),
(20, 1, 7),
(21, 1, 5),
(22, 1, 5),
(23, 5, 3),
(24, 3, 8),
(25, 3, 3),
(26, 6, 5),
(27, 2, 4),
(28, 2, 4),
(29, 1, 4),
(30, 2, 7),
(31, 1, 1),
(32, 1, 7),
(33, 2, 8),
(34, 3, 2),
(35, 1, 5),
(36, 2, 2),
(37, 3, 5),
(38, 6, 1),
(39, 1, 6),
(40, 4, 6),
(41, 2, 6),
(42, 3, 4),
(43, 4, 8),
(44, 4, 3),
(45, 3, 3),
(46, 2, 4),
(47, 3, 7),
(48, 4, 4),
(49, 4, 1),
(50, 2, 3),
(51, 4, 6),
(52, 1, 4),
(53, 2, 2),
(54, 1, 2),
(55, 5, 1),
(56, 4, 7),
(57, 4, 7),
(58, 3, 3),
(59, 3, 2),
(60, 4, 5),
(61, 1, 4),
(62, 3, 7),
(63, 1, 6),
(64, 3, 7),
(65, 2, 1),
(66, 3, 7),
(67, 4, 2),
(68, 3, 5),
(69, 6, 2),
(70, 6, 3),
(71, 2, 3),
(72, 6, 8),
(73, 6, 2),
(74, 2, 1),
(75, 1, 8),
(76, 1, 1),
(77, 4, 1),
(78, 2, 4),
(79, 1, 5),
(80, 6, 3),
(81, 6, 7),
(82, 6, 3),
(83, 2, 6),
(84, 2, 5),
(85, 2, 2),
(86, 2, 5),
(87, 6, 1),
(88, 4, 7),
(89, 6, 3),
(90, 1, 6),
(91, 5, 4),
(92, 6, 8),
(93, 2, 4),
(94, 6, 4),
(95, 2, 3),
(96, 2, 5),
(97, 1, 3),
(98, 5, 4),
(99, 4, 1),
(100, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Prescription`
--

CREATE TABLE `Prescription` (
  `pres_id` int(11) NOT NULL,
  `P_id` int(11) DEFAULT NULL,
  `Doctor_id` int(11) DEFAULT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `Symptoms` text,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Prescription`
--

INSERT INTO `Prescription` (`pres_id`, `P_id`, `Doctor_id`, `bill_id`, `amount`, `time`, `Symptoms`, `Diagnosis`) VALUES
(1, 4, 2, 1, 268, '2012-02-16 11:49:28', '    Cancer of the Pleura (Mesothelioma)', '    AAA (Abdominal Aortic Aneurysm)'),
(2, 1, 6, 2, 1116, '2012-12-05 04:52:30', '    Back Surgery (Minimally Invasive Lumbar Spinal Fusion)', '    Cancer of the Brain (Brain Cancer)'),
(3, 1, 5, 3, 1843, '2012-08-26 08:17:15', '    Aches, Pain, Fever', '    Bartonella henselae Infection (Cat Scratch Disease)'),
(4, 2, 2, 4, 208, '2012-01-05 17:35:05', 'Ear Ache (Ear Infection)', '    Dental Lasers (Lasers in Dental Care)'),
(5, 5, 3, 5, 1935, '2012-09-29 08:03:21', '    Detecting Hearing Loss in Children', '    Cancer Of The Uterus (Uterine Cancer)'),
(6, 8, 6, 6, 578, '2012-01-28 22:27:02', '    Deglutition (Swallowing)', '    Degenerative Joint Disease (Osteoarthritis)'),
(7, 8, 2, 7, 1216, '2012-01-12 04:20:55', '    Benign Brain Lesions (Brain Lesions (Lesions on the Brain))', '    Cardiac Stress Test (Exercise Stress Test)'),
(8, 8, 1, 8, 165, '2012-02-16 17:34:21', '    Cancer of the Colon (Colon Cancer)', '    Cat Scratch Disease'),
(9, 1, 1, 9, 1693, '2012-03-28 16:23:22', '    Actinic Keratosis', '    Canavan Disease'),
(10, 3, 6, 10, 29, '2012-08-15 22:22:35', '    Cancer of the Thyroid (Thyroid Cancer)', '    Carcinoembryonic Antigen'),
(11, 2, 6, 11, 1775, '2012-02-09 02:59:21', '    Acquired Brain Injury (Brain Damage: Symptoms, Causes, Treatment)', '    Cancer of the Sympathetic Nervous System (Neuroblastoma)'),
(12, 5, 1, 12, 1693, '2012-12-07 02:21:15', '    Date Rape Drugs', '    Back Pain (Low Back Pain)'),
(13, 5, 6, 13, 1756, '2012-08-05 05:14:57', '    Bell\'s Palsy (Facial Nerve Problems)', '    Acid Reflux (Gastroesophageal Reflux Disease (GERD))'),
(14, 3, 6, 14, 409, '2012-09-30 13:46:54', '    Battered Women (Domestic Violence)', ''),
(15, 7, 2, 15, 1174, '2012-03-07 06:10:18', '    Barlow\'s Syndrome (Mitral Valve Prolapse)', '    Cancer of the Gallbladder (Gallbladder Cancer)'),
(16, 6, 1, 16, 865, '2012-12-15 00:15:44', '    B, Hemophilia (Hemophilia)', '    Cancer Of The Breast (Breast Cancer (Facts, Stages))'),
(17, 1, 2, 17, 36, '2012-02-28 14:53:18', '    Acute Compartment Syndrome (Compartment Syndrome)', '    Cancer Of The Bone (Bone Cancer Overview)'),
(18, 6, 6, 18, 1576, '2012-11-10 14:08:42', '    Deep Skin Infection (Cellulitis)', '    Cancer of the Colon (Colon Cancer)'),
(19, 2, 1, 19, 1470, '2012-07-12 11:23:55', '    Cancer Of The Blood (Leukemia)', '    Acne Cystic (Boils)'),
(20, 7, 1, 20, 92, '2012-08-26 23:35:02', '    Achalasia', '    Cancer of the Testis (Testicular Cancer)'),
(21, 5, 1, 21, 122, '2012-08-07 11:32:36', '    B, Hemophilia (Hemophilia)', '    Decalcification (Heart Valve Disease Treatment)'),
(22, 5, 1, 22, 722, '2012-09-08 09:44:38', '    Abuse, Child (Child Abuse Facts)', '    Caring for Teeth With Braces or Retainers'),
(23, 3, 5, 23, 1047, '2012-06-09 11:56:00', 'E. Coli (E. Coli 0157:H7)', '    Cancer Prevention'),
(24, 8, 3, 24, 604, '2012-02-12 23:04:51', '    Dental Crowns', '    AATD (Alpha 1 Antitrypsin Deficiency)'),
(25, 3, 3, 25, 515, '2012-04-23 16:34:51', '    Date Rape Drugs', '    Cancer of the Colon (Colon Cancer)'),
(26, 5, 6, 26, 292, '2012-03-15 20:42:27', '    Cardiac Catheterization', '    Carcinoma of the Larynx (Larynx Cancer)'),
(27, 4, 2, 27, 947, '2012-12-22 22:06:40', '    Calcium, Elevated (Hypercalcemia)', '    Cataracts'),
(28, 4, 2, 28, 1688, '2012-08-30 11:47:49', '    Barber Itch (Ringworm)', '    Depression in Children'),
(29, 4, 1, 29, 555, '2012-09-07 18:58:38', '    Cancer of Lung (Lung Cancer)', '    Cancer Of The Bladder (Bladder Cancer)'),
(30, 7, 2, 30, 840, '2012-01-25 01:13:05', '    Cavities', '    Carcinoid Syndrome'),
(31, 1, 1, 31, 107, '2012-06-24 01:40:03', '    Acid Reflux in Infants and Children (GERD in Infants and Children)', '    Balloon Enteroscopy (Balloon Endoscopy)'),
(32, 7, 1, 32, 968, '2012-11-27 16:51:55', '    Cancer Of The Blood (Leukemia)', '    Barber Itch (Ringworm)'),
(33, 8, 2, 33, 586, '2012-11-02 06:16:23', '    Abscessed Tooth Guide', '    CA 125'),
(34, 2, 3, 34, 282, '2012-04-04 10:21:51', '    Dental Surgery (Oral Surgery)', '    Abscessed Tooth Guide'),
(35, 5, 1, 35, 1792, '2012-02-27 13:05:36', '    Carotid Artery Disease', '    Dementia Pugilistica (Dementia)'),
(36, 2, 2, 36, 876, '2012-07-29 18:14:01', '    CA 125', '    Beuren Syndrome (Williams Syndrome)'),
(37, 5, 3, 37, 379, '2012-01-23 02:29:41', '    Cancer of the Cervix (Cervical Cancer)', '    Cancer Of The Kidney (Kidney Cancer)'),
(38, 1, 6, 38, 1427, '2012-04-17 04:36:13', '    Cancer Of The Endometrium (Uterine Cancer)', '    Cancer of the Head and Neck (Head and Neck Cancer)'),
(39, 6, 1, 39, 1334, '2012-04-06 12:35:42', '    Deafness', '    Baby Bottle Tooth Decay (Oral Health Problems in Children)'),
(40, 6, 4, 40, 1500, '2012-01-14 15:55:36', '    Delerium Psychosis (ICU Psychosis)', '    Cancer Of Lymph Glands (Non-Hodgkins Lymphomas)'),
(41, 6, 2, 41, 1089, '2012-03-06 09:20:53', '    A, Hepatitis (Hepatitis A)', '    Achilles Tendon Rupture'),
(42, 4, 3, 42, 551, '2012-05-10 00:44:36', '    C Diff (Clostridium Difficile Colitis)', '    Acute Intermittent Porphyria (Porphyria)'),
(43, 8, 4, 43, 524, '2012-03-26 20:19:58', '    Aches (Aches, Pain, Fever)', '    Acid Reflux in Infants and Children (GERD in Infants and Children)'),
(44, 3, 4, 44, 358, '2012-04-18 00:40:07', '    CAD (Heart Disease (Coronary Artery Disease))', '    Benign Prostatic Hypertrophy (Benign Prostatic Hyperplasia)'),
(45, 3, 3, 45, 1536, '2012-02-05 17:19:42', '    AAT (Alpha 1 Antitrypsin Deficiency)', '    Basal Cell Carcinoma (Skin Cancer Overview)'),
(46, 4, 2, 46, 1137, '2012-06-28 06:47:42', '    Abuse, Child (Child Abuse Facts)', '    Acetaminophen Liver Damage (Tylenol Liver Damage)'),
(47, 7, 3, 47, 1240, '2012-11-18 23:09:54', '    Calicivirus Infection (Norovirus Infection)', '    B, Hemophilia (Hemophilia)'),
(48, 4, 4, 48, 301, '2012-12-31 14:23:26', '    Behcet\'s Syndrome', '    Abscessed Tooth Guide'),
(49, 1, 4, 49, 1228, '2012-05-08 18:12:28', '    Balloon Mitral Valve (Mitral Valve Prolapse)', '    Behcet Syndrome (Behcet\'s Syndrome)'),
(50, 3, 2, 50, 711, '2012-01-30 09:01:44', '    Devic\'s Syndrome (Devic\'s Syndrome)', '    Delivery of a Baby (Labor and Delivery)'),
(51, 6, 4, 51, 891, '2012-03-08 17:13:45', '    B, Hemophilia (Hemophilia)', '    Bedwetting'),
(52, 4, 1, 52, 870, '2012-10-25 21:21:14', '    Cancer Fatigue', '    Caring for an Alzheimer\'s Patient (Alzheimer\'s Disease Patient Caregiver Guide)'),
(53, 2, 2, 53, 1481, '2012-02-26 01:42:08', '    Balloon Enteroscopy (Balloon Endoscopy)', '    Cancer of the Testis (Testicular Cancer)'),
(54, 2, 1, 54, 800, '2012-08-04 04:59:03', '    Cardiomyopathy (Dilated)', '    AAA (Abdominal Aortic Aneurysm)'),
(55, 1, 5, 55, 9, '2012-06-21 18:14:46', 'EAggEC (Enterovirulent E. Coli (EEC))', '    Abnormal Liver Enzymes (Liver Blood Tests)'),
(56, 7, 4, 56, 1398, '2012-05-21 07:19:07', '    Canavan Disease', '    Delivery of a Baby (Labor and Delivery)'),
(57, 7, 4, 57, 743, '2012-06-22 16:56:13', '    Cancer of Lung (Lung Cancer)', '    Cataract Surgery'),
(58, 3, 3, 58, 170, '2012-10-13 00:10:01', '    Cancer Of The Uterus (Uterine Cancer)', '    Degenerative Joint Disease (Osteoarthritis)'),
(59, 2, 3, 59, 506, '2012-11-04 06:32:01', '    Cancer Of The Ovary (Ovarian Cancer)', '    Carotid Artery Disease'),
(60, 5, 4, 60, 63, '2012-12-09 15:23:44', '    Death, Sudden Cardiac (Sudden Cardiac Death)', '    Barrett Esophagus (Barrett\'s Esophagus)'),
(61, 4, 1, 61, 1984, '2012-12-30 19:39:46', '    Becoming Pregnant (Trying to Conceive)', '    Cancer of the Thyroid (Thyroid Cancer)'),
(62, 7, 3, 62, 1681, '2012-05-20 16:36:03', '    Capsule Endoscopy', '    Depression During Holidays (Holiday Depression And Stress)'),
(63, 6, 1, 63, 489, '2012-06-16 07:16:18', '    Causalgia (Reflex Sympathetic Dystrophy Syndrome)', '    Barium Enema'),
(64, 7, 3, 64, 640, '2012-08-10 16:55:04', '    Date Rape Drugs', '    Candida Vaginitis (Yeast Infection in Women and Men)'),
(65, 1, 2, 65, 1256, '2012-04-29 17:00:19', '    Carcinoma of the Larynx (Larynx Cancer)', '    Deep Skin Infection (Cellulitis)'),
(66, 7, 3, 66, 1089, '2012-07-13 14:21:59', '    Cancer of the Peritoneum (Mesothelioma)', '    Depression'),
(67, 2, 4, 67, 1984, '2012-12-13 18:39:28', '    Cancer of the Sympathetic Nervous System (Neuroblastoma)', '    Candida Vaginitis (Yeast Infection in Women and Men)'),
(68, 5, 3, 68, 1027, '2012-05-18 03:52:31', '    Catha.i (Khat)', 'E. Coli 0157:H7'),
(69, 2, 6, 69, 1144, '2012-10-04 10:51:08', '    Bell\'s Palsy (Facial Nerve Problems)', '    CAT Scan'),
(70, 3, 6, 70, 405, '2012-01-24 18:42:08', '    Dandy Fever (Dengue Fever)', '    Barber Itch (Ringworm)'),
(71, 3, 2, 71, 1719, '2012-07-27 19:09:33', '    Abnormal Liver Enzymes (Liver Blood Tests)', '    Abuse, Steroid (Anabolic Steroid Abuse)'),
(72, 8, 6, 72, 969, '2012-08-07 12:09:18', '    Acute Compartment Syndrome (Compartment Syndrome)', '    Abdominal Cramps (Heat Cramps)'),
(73, 2, 6, 73, 1761, '2012-12-23 04:49:00', '    Beta-Globin Type Methemoglobinemia (Methemoglobinemia)', '    Cancer of the Thyroid (Thyroid Cancer)'),
(74, 1, 2, 74, 976, '2012-03-22 19:12:25', '    Basal Cell Carcinoma (Skin Cancer Overview)', '    Abdominal Hernia (Hernia Overview)'),
(75, 8, 1, 75, 1151, '2012-10-31 10:09:10', '    CABG (Coronary Artery Bypass Graft)', '    Depression in Children'),
(76, 1, 1, 76, 58, '2012-01-15 06:02:07', '    Cancer of the Testis (Testicular Cancer)', '    Absorbent Products Incontinence (Urinary Incontinence Products for Men)'),
(77, 1, 4, 77, 1568, '2012-07-20 22:02:19', '    Cancer Of The Esophagus (Esophageal Cancer)', '    Absorbent Products Incontinence (Urinary Incontinence Products for Men)'),
(78, 4, 2, 78, 609, '2012-02-09 04:07:34', '    Candida Vaginitis (Yeast Infection in Women and Men)', '    Benign Essential Tremor (Tremor)'),
(79, 5, 1, 79, 1591, '2012-05-19 13:48:37', '    Carcinoma of the Thyroid (Thyroid Cancer)', '    Bee and Wasp Sting'),
(80, 3, 6, 80, 144, '2012-05-29 02:05:14', '    Abscessed Tooth Guide', '    Deep Vein Thrombosis'),
(81, 7, 6, 81, 1339, '2012-10-02 01:55:12', '    Actinic Keratosis', '    Carcinoma of the Larynx (Larynx Cancer)'),
(82, 3, 6, 82, 109, '2012-09-28 03:39:53', '    Dermabrasion', '    Acetaminophen Liver Damage (Tylenol Liver Damage)'),
(83, 6, 2, 83, 1857, '2012-07-09 04:11:02', '    Dental Lasers (Lasers in Dental Care)', '    Behcet Syndrome (Behcet\'s Syndrome)'),
(84, 5, 2, 84, 1450, '2012-06-16 20:49:57', '    Baclofen Pump Therapy', 'E. Coli 0157:H7'),
(85, 2, 2, 85, 239, '2012-03-10 11:12:37', '    Absorbent Products Incontinence (Urinary Incontinence Products for Men)', '    Behcet Syndrome (Behcet\'s Syndrome)'),
(86, 5, 2, 86, 1004, '2012-07-13 17:43:09', '    Dandy Fever (Dengue Fever)', '    Baby Movement Week-by-Week (Fetal Movement: Feeling Baby Kick Week-by-Week)'),
(87, 1, 6, 87, 954, '2012-04-20 22:00:21', 'Ear, Cosmetic Surgery (Otoplasty)', '    C-Section (Cesarean Birth)'),
(88, 7, 4, 88, 981, '2012-10-16 19:13:12', '    Calcific Bursitis', '    Bacterial Arthritis (Septic Arthritis)'),
(89, 3, 6, 89, 1500, '2012-02-10 18:41:39', '    Causalgia (Reflex Sympathetic Dystrophy Syndrome)', 'Ear Cracking Sounds (Eustachian Tube Problems)'),
(90, 6, 1, 90, 1662, '2012-05-26 03:22:19', '    Acid Reflux (Gastroesophageal Reflux Disease (GERD))', '    Benign Essential Tremor (Tremor)'),
(91, 4, 5, 91, 173, '2012-06-12 10:48:14', '    Benign Intracranial Hypertension (Pseudotumor Cerebri)', '    Cancer Of The Testicle (Testicular Cancer)'),
(92, 8, 6, 92, 142, '2012-08-28 04:10:39', '    Dental Injuries', '    Cardiomyopathy (Restrictive)'),
(93, 4, 2, 93, 1895, '2012-08-23 07:03:14', '    Dermatitis (Eczema Facts)', '    Benign Essential Tremor (Tremor)'),
(94, 4, 6, 94, 1183, '2012-11-18 23:57:11', '    Absence of Menstrual Periods (Amenorrhea)', '    Dermabrasion'),
(95, 3, 2, 95, 123, '2012-04-20 21:30:47', '', '    Decalcification (Heart Valve Disease Treatment)'),
(96, 5, 2, 96, 1196, '2012-03-19 09:12:19', '    Calcium Pyrophosphate Deposition Disease (Pseudogout)', '    Acquired Immunodeficiency Syndrome (AIDS)'),
(97, 3, 1, 97, 1619, '2012-03-05 06:19:05', '    Catha.i (Khat)', '    Benign Prostatic Hypertrophy (Benign Prostatic Hyperplasia)'),
(98, 4, 5, 98, 1741, '2012-02-04 22:25:00', '    Cancer of the Nasopharynx (Nasopharyngeal Cancer)', '    Acute Valley Fever (Valley Fever)'),
(99, 1, 4, 99, 1248, '2012-01-16 20:50:20', '    Bed Bugs', '    Dermatomyositis (Polymyositis)'),
(100, 3, 6, 100, 1138, '2012-11-29 20:10:22', '    Acquired Brain Injury (Brain Damage: Symptoms, Causes, Treatment)', '    Cancer Causes');

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `review_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` int(11) NOT NULL,
  `time_start` datetime DEFAULT NULL,
  `time_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `time_start`, `time_end`) VALUES
(1, '2012-02-16 11:49:25', '2012-02-16 11:49:27'),
(2, '2012-12-05 04:52:27', '2012-12-05 04:52:29'),
(3, '2012-08-26 08:17:12', '2012-08-26 08:17:14'),
(4, '2012-01-05 17:35:02', '2012-01-05 17:35:04'),
(5, '2012-09-29 08:03:18', '2012-09-29 08:03:20'),
(6, '2012-01-28 22:26:59', '2012-01-28 22:27:01'),
(7, '2012-01-12 04:20:52', '2012-01-12 04:20:54'),
(8, '2012-02-16 17:34:18', '2012-02-16 17:34:20'),
(9, '2012-03-28 16:23:19', '2012-03-28 16:23:21'),
(10, '2012-08-15 22:22:32', '2012-08-15 22:22:34'),
(11, '2012-02-09 02:59:18', '2012-02-09 02:59:20'),
(12, '2012-12-07 02:21:12', '2012-12-07 02:21:14'),
(13, '2012-08-05 05:14:54', '2012-08-05 05:14:56'),
(14, '2012-09-30 13:46:51', '2012-09-30 13:46:53'),
(15, '2012-03-07 06:10:15', '2012-03-07 06:10:17'),
(16, '2012-12-15 00:15:41', '2012-12-15 00:15:43'),
(17, '2012-02-28 14:53:15', '2012-02-28 14:53:17'),
(18, '2012-11-10 14:08:39', '2012-11-10 14:08:41'),
(19, '2012-07-12 11:23:52', '2012-07-12 11:23:54'),
(20, '2012-08-26 23:34:59', '2012-08-26 23:35:01'),
(21, '2012-08-07 11:32:33', '2012-08-07 11:32:35'),
(22, '2012-09-08 09:44:35', '2012-09-08 09:44:37'),
(23, '2012-06-09 11:55:57', '2012-06-09 11:55:59'),
(24, '2012-02-12 23:04:48', '2012-02-12 23:04:50'),
(25, '2012-04-23 16:34:48', '2012-04-23 16:34:50'),
(26, '2012-03-15 20:42:24', '2012-03-15 20:42:26'),
(27, '2012-12-22 22:06:37', '2012-12-22 22:06:39'),
(28, '2012-08-30 11:47:46', '2012-08-30 11:47:48'),
(29, '2012-09-07 18:58:35', '2012-09-07 18:58:37'),
(30, '2012-01-25 01:13:02', '2012-01-25 01:13:04'),
(31, '2012-06-24 01:40:00', '2012-06-24 01:40:02'),
(32, '2012-11-27 16:51:52', '2012-11-27 16:51:54'),
(33, '2012-11-02 06:16:20', '2012-11-02 06:16:22'),
(34, '2012-04-04 10:21:48', '2012-04-04 10:21:50'),
(35, '2012-02-27 13:05:33', '2012-02-27 13:05:35'),
(36, '2012-07-29 18:13:58', '2012-07-29 18:14:00'),
(37, '2012-01-23 02:29:38', '2012-01-23 02:29:40'),
(38, '2012-04-17 04:36:10', '2012-04-17 04:36:12'),
(39, '2012-04-06 12:35:39', '2012-04-06 12:35:41'),
(40, '2012-01-14 15:55:33', '2012-01-14 15:55:35'),
(41, '2012-03-06 09:20:50', '2012-03-06 09:20:52'),
(42, '2012-05-10 00:44:33', '2012-05-10 00:44:35'),
(43, '2012-03-26 20:19:55', '2012-03-26 20:19:57'),
(44, '2012-04-18 00:40:04', '2012-04-18 00:40:06'),
(45, '2012-02-05 17:19:39', '2012-02-05 17:19:41'),
(46, '2012-06-28 06:47:39', '2012-06-28 06:47:41'),
(47, '2012-11-18 23:09:51', '2012-11-18 23:09:53'),
(48, '2012-12-31 14:23:23', '2012-12-31 14:23:25'),
(49, '2012-05-08 18:12:25', '2012-05-08 18:12:27'),
(50, '2012-01-30 09:01:41', '2012-01-30 09:01:43'),
(51, '2012-03-08 17:13:42', '2012-03-08 17:13:44'),
(52, '2012-10-25 21:21:11', '2012-10-25 21:21:13'),
(53, '2012-02-26 01:42:05', '2012-02-26 01:42:07'),
(54, '2012-08-04 04:59:00', '2012-08-04 04:59:02'),
(55, '2012-06-21 18:14:43', '2012-06-21 18:14:45'),
(56, '2012-05-21 07:19:04', '2012-05-21 07:19:06'),
(57, '2012-06-22 16:56:10', '2012-06-22 16:56:12'),
(58, '2012-10-13 00:09:58', '2012-10-13 00:10:00'),
(59, '2012-11-04 06:31:58', '2012-11-04 06:32:00'),
(60, '2012-12-09 15:23:41', '2012-12-09 15:23:43'),
(61, '2012-12-30 19:39:43', '2012-12-30 19:39:45'),
(62, '2012-05-20 16:36:00', '2012-05-20 16:36:02'),
(63, '2012-06-16 07:16:15', '2012-06-16 07:16:17'),
(64, '2012-08-10 16:55:01', '2012-08-10 16:55:03'),
(65, '2012-04-29 17:00:16', '2012-04-29 17:00:18'),
(66, '2012-07-13 14:21:56', '2012-07-13 14:21:58'),
(67, '2012-12-13 18:39:25', '2012-12-13 18:39:27'),
(68, '2012-05-18 03:52:28', '2012-05-18 03:52:30'),
(69, '2012-10-04 10:51:05', '2012-10-04 10:51:07'),
(70, '2012-01-24 18:42:05', '2012-01-24 18:42:07'),
(71, '2012-07-27 19:09:30', '2012-07-27 19:09:32'),
(72, '2012-08-07 12:09:15', '2012-08-07 12:09:17'),
(73, '2012-12-23 04:48:57', '2012-12-23 04:48:59'),
(74, '2012-03-22 19:12:22', '2012-03-22 19:12:24'),
(75, '2012-10-31 10:09:07', '2012-10-31 10:09:09'),
(76, '2012-01-15 06:02:04', '2012-01-15 06:02:06'),
(77, '2012-07-20 22:02:16', '2012-07-20 22:02:18'),
(78, '2012-02-09 04:07:31', '2012-02-09 04:07:33'),
(79, '2012-05-19 13:48:34', '2012-05-19 13:48:36'),
(80, '2012-05-29 02:05:11', '2012-05-29 02:05:13'),
(81, '2012-10-02 01:55:09', '2012-10-02 01:55:11'),
(82, '2012-09-28 03:39:50', '2012-09-28 03:39:52'),
(83, '2012-07-09 04:10:59', '2012-07-09 04:11:01'),
(84, '2012-06-16 20:49:54', '2012-06-16 20:49:56'),
(85, '2012-03-10 11:12:34', '2012-03-10 11:12:36'),
(86, '2012-07-13 17:43:06', '2012-07-13 17:43:08'),
(87, '2012-04-20 22:00:18', '2012-04-20 22:00:20'),
(88, '2012-10-16 19:13:09', '2012-10-16 19:13:11'),
(89, '2012-02-10 18:41:36', '2012-02-10 18:41:38'),
(90, '2012-05-26 03:22:16', '2012-05-26 03:22:18'),
(91, '2012-06-12 10:48:11', '2012-06-12 10:48:13'),
(92, '2012-08-28 04:10:36', '2012-08-28 04:10:38'),
(93, '2012-08-23 07:03:11', '2012-08-23 07:03:13'),
(94, '2012-11-18 23:57:08', '2012-11-18 23:57:10'),
(95, '2012-04-20 21:30:44', '2012-04-20 21:30:46'),
(96, '2012-03-19 09:12:16', '2012-03-19 09:12:18'),
(97, '2012-03-05 06:19:02', '2012-03-05 06:19:04'),
(98, '2012-02-04 22:24:57', '2012-02-04 22:24:59'),
(99, '2012-01-16 20:50:17', '2012-01-16 20:50:19'),
(100, '2012-11-29 20:10:19', '2012-11-29 20:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `unavailable`
--

CREATE TABLE `unavailable` (
  `unav_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unavailable`
--

INSERT INTO `unavailable` (`unav_id`, `doctor_id`, `slot_id`, `day`) VALUES
(1, 2, 1, NULL),
(2, 6, 2, NULL),
(3, 5, 3, NULL),
(4, 2, 4, NULL),
(5, 3, 5, NULL),
(6, 6, 6, NULL),
(7, 2, 7, NULL),
(8, 1, 8, NULL),
(9, 1, 9, NULL),
(10, 6, 10, NULL),
(11, 6, 11, NULL),
(12, 1, 12, NULL),
(13, 6, 13, NULL),
(14, 6, 14, NULL),
(15, 2, 15, NULL),
(16, 1, 16, NULL),
(17, 2, 17, NULL),
(18, 6, 18, NULL),
(19, 1, 19, NULL),
(20, 1, 20, NULL),
(21, 1, 21, NULL),
(22, 1, 22, NULL),
(23, 5, 23, NULL),
(24, 3, 24, NULL),
(25, 3, 25, NULL),
(26, 6, 26, NULL),
(27, 2, 27, NULL),
(28, 2, 28, NULL),
(29, 1, 29, NULL),
(30, 2, 30, NULL),
(31, 1, 31, NULL),
(32, 1, 32, NULL),
(33, 2, 33, NULL),
(34, 3, 34, NULL),
(35, 1, 35, NULL),
(36, 2, 36, NULL),
(37, 3, 37, NULL),
(38, 6, 38, NULL),
(39, 1, 39, NULL),
(40, 4, 40, NULL),
(41, 2, 41, NULL),
(42, 3, 42, NULL),
(43, 4, 43, NULL),
(44, 4, 44, NULL),
(45, 3, 45, NULL),
(46, 2, 46, NULL),
(47, 3, 47, NULL),
(48, 4, 48, NULL),
(49, 4, 49, NULL),
(50, 2, 50, NULL),
(51, 4, 51, NULL),
(52, 1, 52, NULL),
(53, 2, 53, NULL),
(54, 1, 54, NULL),
(55, 5, 55, NULL),
(56, 4, 56, NULL),
(57, 4, 57, NULL),
(58, 3, 58, NULL),
(59, 3, 59, NULL),
(60, 4, 60, NULL),
(61, 1, 61, NULL),
(62, 3, 62, NULL),
(63, 1, 63, NULL),
(64, 3, 64, NULL),
(65, 2, 65, NULL),
(66, 3, 66, NULL),
(67, 4, 67, NULL),
(68, 3, 68, NULL),
(69, 6, 69, NULL),
(70, 6, 70, NULL),
(71, 2, 71, NULL),
(72, 6, 72, NULL),
(73, 6, 73, NULL),
(74, 2, 74, NULL),
(75, 1, 75, NULL),
(76, 1, 76, NULL),
(77, 4, 77, NULL),
(78, 2, 78, NULL),
(79, 1, 79, NULL),
(80, 6, 80, NULL),
(81, 6, 81, NULL),
(82, 6, 82, NULL),
(83, 2, 83, NULL),
(84, 2, 84, NULL),
(85, 2, 85, NULL),
(86, 2, 86, NULL),
(87, 6, 87, NULL),
(88, 4, 88, NULL),
(89, 6, 89, NULL),
(90, 1, 90, NULL),
(91, 5, 91, NULL),
(92, 6, 92, NULL),
(93, 2, 93, NULL),
(94, 6, 94, NULL),
(95, 2, 95, NULL),
(96, 2, 96, NULL),
(97, 1, 97, NULL),
(98, 5, 98, NULL),
(99, 4, 99, NULL),
(100, 6, 100, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`appoint_id`),
  ADD KEY `P_id` (`P_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `slot_id` (`slot_id`);

--
-- Indexes for table `Auth_doctor`
--
ALTER TABLE `Auth_doctor`
  ADD PRIMARY KEY (`auth_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `Auth_patient`
--
ALTER TABLE `Auth_patient`
  ADD PRIMARY KEY (`auth_id`),
  ADD KEY `P_id` (`P_id`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`av_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `slot_id` (`slot_id`);

--
-- Indexes for table `Bill_details`
--
ALTER TABLE `Bill_details`
  ADD PRIMARY KEY (`bill_det_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `Doctor_department`
--
ALTER TABLE `Doctor_department`
  ADD PRIMARY KEY (`dp_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `Med_Bills`
--
ALTER TABLE `Med_Bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `P_id` (`P_id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `Patient_department`
--
ALTER TABLE `Patient_department`
  ADD PRIMARY KEY (`pd_id`),
  ADD KEY `P_id` (`P_id`);

--
-- Indexes for table `Patient_Doctor`
--
ALTER TABLE `Patient_Doctor`
  ADD PRIMARY KEY (`pat_doc_id`),
  ADD KEY `P_id` (`P_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `Prescription`
--
ALTER TABLE `Prescription`
  ADD PRIMARY KEY (`pres_id`),
  ADD KEY `Doctor_id` (`Doctor_id`),
  ADD KEY `P_id` (`P_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `unavailable`
--
ALTER TABLE `unavailable`
  ADD PRIMARY KEY (`unav_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `slot_id` (`slot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `Auth_doctor`
--
ALTER TABLE `Auth_doctor`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Auth_patient`
--
ALTER TABLE `Auth_patient`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `av_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Bill_details`
--
ALTER TABLE `Bill_details`
  MODIFY `bill_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Med_Bills`
--
ALTER TABLE `Med_Bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Patient_department`
--
ALTER TABLE `Patient_department`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Patient_Doctor`
--
ALTER TABLE `Patient_Doctor`
  MODIFY `pat_doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `Prescription`
--
ALTER TABLE `Prescription`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `unavailable`
--
ALTER TABLE `unavailable`
  MODIFY `unav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `Appointments_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `Patient` (`P_id`),
  ADD CONSTRAINT `Appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`),
  ADD CONSTRAINT `Appointments_ibfk_3` FOREIGN KEY (`slot_id`) REFERENCES `slots` (`slot_id`);

--
-- Constraints for table `Auth_doctor`
--
ALTER TABLE `Auth_doctor`
  ADD CONSTRAINT `Auth_doctor_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`);

--
-- Constraints for table `Auth_patient`
--
ALTER TABLE `Auth_patient`
  ADD CONSTRAINT `Auth_patient_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `Patient` (`P_id`);

--
-- Constraints for table `available`
--
ALTER TABLE `available`
  ADD CONSTRAINT `available_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`),
  ADD CONSTRAINT `available_ibfk_2` FOREIGN KEY (`slot_id`) REFERENCES `slots` (`slot_id`);

--
-- Constraints for table `Bill_details`
--
ALTER TABLE `Bill_details`
  ADD CONSTRAINT `Bill_details_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `Med_Bills` (`bill_id`);

--
-- Constraints for table `Doctor_department`
--
ALTER TABLE `Doctor_department`
  ADD CONSTRAINT `Doctor_department_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`);

--
-- Constraints for table `Med_Bills`
--
ALTER TABLE `Med_Bills`
  ADD CONSTRAINT `Med_Bills_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `Patient` (`P_id`);

--
-- Constraints for table `Patient_department`
--
ALTER TABLE `Patient_department`
  ADD CONSTRAINT `Patient_department_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `Patient` (`P_id`);

--
-- Constraints for table `Patient_Doctor`
--
ALTER TABLE `Patient_Doctor`
  ADD CONSTRAINT `Patient_Doctor_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `Patient` (`P_id`),
  ADD CONSTRAINT `Patient_Doctor_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`);

--
-- Constraints for table `Prescription`
--
ALTER TABLE `Prescription`
  ADD CONSTRAINT `Prescription_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `Doctor` (`doctor_id`),
  ADD CONSTRAINT `Prescription_ibfk_2` FOREIGN KEY (`P_id`) REFERENCES `Patient` (`P_id`),
  ADD CONSTRAINT `Prescription_ibfk_3` FOREIGN KEY (`bill_id`) REFERENCES `Med_Bills` (`bill_id`);

--
-- Constraints for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `Reviews_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`);

--
-- Constraints for table `unavailable`
--
ALTER TABLE `unavailable`
  ADD CONSTRAINT `unavailable_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `Doctor` (`doctor_id`),
  ADD CONSTRAINT `unavailable_ibfk_2` FOREIGN KEY (`slot_id`) REFERENCES `slots` (`slot_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
