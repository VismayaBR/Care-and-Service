-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 04:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care_and_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `don_tb`
--

CREATE TABLE `don_tb` (
  `don_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `don_name` varchar(40) NOT NULL,
  `name_of_item` varchar(100) NOT NULL,
  `don_quandity` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `localbody` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `pal_log_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_tb`
--

INSERT INTO `don_tb` (`don_id`, `log_id`, `don_name`, `name_of_item`, `don_quandity`, `district`, `localbody`, `status`, `pal_log_id`) VALUES
(1, 2, 'akshaya', 'wheelchair', '3', 'Kozhikode', 'Vadakara', 'pending', 0),
(2, 3, 'sree', 'wheelchair', '3', 'Kottayam', 'Changanassery', 'pending', 0),
(3, 2, 'akshaya', 'bed', '1', 'Kozhikode', 'Vadakara', 'pending', 0),
(5, 2, 'sree', 'bed', '5', 'Kottayam', 'Changanassery', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'akshaya', '12345678', 'user'),
(3, 'sree', '12345678', 'user'),
(4, 'sss', '12345678', 'user'),
(5, 'nest', '00000000', 'paliative_unit'),
(6, 'abhaya', '00000000', 'paliative_unit');

-- --------------------------------------------------------

--
-- Table structure for table `pal_tb`
--

CREATE TABLE `pal_tb` (
  `pal_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `org_phn_no` varchar(40) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `localbody` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pal_tb`
--

INSERT INTO `pal_tb` (`pal_id`, `login_id`, `org_name`, `org_phn_no`, `logo`, `state`, `district`, `localbody`, `status`) VALUES
(1, 5, 'nest', '1234567890', '1772877485.jpg', 'Kerala', 'Kozhikode', 'Quilandy', 1),
(2, 6, 'ABHAYA', '8678676768', '819685670.jpg', 'Kerala', 'Kottayam', 'Changanassery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg_tb`
--

CREATE TABLE `reg_tb` (
  `reg_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `localbody` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_tb`
--

INSERT INTO `reg_tb` (`reg_id`, `login_id`, `Name`, `Email`, `Mobile`, `Address`, `state`, `district`, `localbody`, `image`) VALUES
(1, 2, 'akshaya', 'akshaya@gmail.com', '1234565215', 'dvbdgnhnf', 'Kerala', 'Kozhikode', 'Vadakara', '582601686.jpg'),
(2, 3, 'sree', 'sree@gmail.com', '2356897415', 'qwertyu', 'Kerala', 'Kottayam', 'Changanassery', '625303076.jpg'),
(3, 4, 'sabith', 's@gmail.com', '1234565215', 'qwertyuertg', 'Kerala', 'Trissur', 'Irinjalakuda', '2043624981.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `req_tb`
--

CREATE TABLE `req_tb` (
  `req_id` int(11) NOT NULL,
  `log_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phn_number` varchar(50) NOT NULL,
  `request` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `localbody` varchar(40) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `pal_log_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_tb`
--

INSERT INTO `req_tb` (`req_id`, `log_id`, `name`, `phn_number`, `request`, `district`, `localbody`, `status`, `pal_log_id`) VALUES
(1, '2', 'akshaya', '1234567890', 'bed', 'Kozhikode', 'Vadakara', 'pending', 0),
(2, '3', 'sree', '7418529630', 'wheelchair', 'Kottayam', 'Changanassery', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ser_tb`
--

CREATE TABLE `ser_tb` (
  `ser_id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ser_tb`
--

INSERT INTO `ser_tb` (`ser_id`, `service`, `description`, `image`) VALUES
(1, 'Ambulance', 'we are providing twenty four hours services ', '2029922031.jpg'),
(2, 'Medicine', 'It is time you save time and get medicines delivered at your doorstep ', '733770849.jpg'),
(3, 'Wheelchair', 'Wheelchair are most suitable for patients with paralysis or other patients', '1704498781.jpg'),
(4, 'Nurse service', 'Nursing service is  aims at satisfying the nursing needs of the patients/community.', '461207818.jpg'),
(5, 'Doctor support', ' Doctor service gives quick and easy access to anytime,', '1796747324.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `don_tb`
--
ALTER TABLE `don_tb`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `pal_tb`
--
ALTER TABLE `pal_tb`
  ADD PRIMARY KEY (`pal_id`);

--
-- Indexes for table `reg_tb`
--
ALTER TABLE `reg_tb`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `req_tb`
--
ALTER TABLE `req_tb`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `ser_tb`
--
ALTER TABLE `ser_tb`
  ADD PRIMARY KEY (`ser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `don_tb`
--
ALTER TABLE `don_tb`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pal_tb`
--
ALTER TABLE `pal_tb`
  MODIFY `pal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg_tb`
--
ALTER TABLE `reg_tb`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `req_tb`
--
ALTER TABLE `req_tb`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ser_tb`
--
ALTER TABLE `ser_tb`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
