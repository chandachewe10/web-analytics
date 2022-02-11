-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 07:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipman`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` int(11) NOT NULL COMMENT 'Auto Increment ',
  `country_name` varchar(200) NOT NULL COMMENT 'country name of the vistor',
  `country_code` varchar(200) NOT NULL COMMENT 'country_code of the visitor',
  `region_name` varchar(200) NOT NULL COMMENT 'Region name of the visitor',
  `region_code` varchar(200) NOT NULL COMMENT 'Region code of the visitor',
  `country_city` varchar(200) NOT NULL COMMENT 'country city of the visitor',
  `zip_code` varchar(200) DEFAULT NULL COMMENT 'zip code of the country of the visitor',
  `latitude` varchar(200) NOT NULL COMMENT 'latitude of the visitor',
  `longitude` varchar(200) NOT NULL COMMENT 'longitude of the country visitor',
  `timezone` varchar(200) NOT NULL COMMENT 'vistors current location timezone',
  `ipv4` varchar(200) NOT NULL COMMENT 'Internet protocal version 4',
  `visited_at` timestamp NULL DEFAULT current_timestamp(),
  `month` varchar(50) NOT NULL COMMENT 'months in human readable formats',
  `year` varchar(50) NOT NULL COMMENT 'year in human readable format '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `country_name`, `country_code`, `region_name`, `region_code`, `country_city`, `zip_code`, `latitude`, `longitude`, `timezone`, `ipv4`, `visited_at`, `month`, `year`) VALUES
(23, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-03-07 20:34:25', '', ''),
(24, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:37', '', ''),
(25, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:40', '', ''),
(26, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:42', '', ''),
(27, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:44', '', ''),
(28, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:46', '', ''),
(29, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:47', '', ''),
(30, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:49', '', ''),
(31, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:51', '', ''),
(32, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:54', '', ''),
(33, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-07 23:19:57', '', ''),
(34, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-08 00:25:02', '', ''),
(35, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-08 00:25:04', '', ''),
(36, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-08 00:46:37', '', ''),
(37, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-08 01:10:55', '', ''),
(38, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-09 19:43:49', '', ''),
(39, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 18:59:59', '', ''),
(40, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 19:00:15', '', ''),
(41, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 19:18:57', 'February', '2021'),
(42, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 19:19:03', 'February', '2021'),
(43, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 19:19:07', 'March', '2022'),
(44, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 19:25:34', 'February', '2022'),
(45, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 19:31:32', 'February', '2022'),
(46, 'Zambia', 'ZM', 'Lusaka Province', '09', 'Lusaka', '12', '-15.4183', '28.287', 'Africa/Lusaka', '165.56.184.54', '2022-02-10 22:15:24', 'January', '1970');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto Increment ', AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
