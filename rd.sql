-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rd`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuthn` varchar(100) NOT NULL,
  `tigathn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`no`, `nama`, `jenis`, `satuthn`, `tigathn`) VALUES
(1, 'Sucorinvest Money Market Fund', 'Pasar Uang', '4.59%', '17.84%'),
(2, 'Sucorinvest Sharia Money Market Fund', 'Pasar Uang', '4.19%', '16.97%'),
(3, 'Danamas Rupiah Plus', 'Pasar Uang', '3.74%', '14.98%');

-- --------------------------------------------------------

--
-- Table structure for table `listrd`
--

CREATE TABLE `listrd` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuthn` varchar(100) NOT NULL,
  `tigathn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listrd`
--

INSERT INTO `listrd` (`no`, `nama`, `jenis`, `satuthn`, `tigathn`) VALUES
(1, 'Sucorinvest Flexi Fund	', 'Campuran', '19.64%	', '38.17%	'),
(2, 'Sucorinvest Sharia Equity Fund	', 'Saham', '8.51%	', '18.61%	'),
(3, 'Sucorinvest Maxi Fund	', 'Saham', '23.27%		', '18.14%	'),
(4, 'Sucorinvest Equity Fund	', 'Saham	', '28.12%	', '31.18%	'),
(5, 'Danamasas Stabil', 'Obligasi', '5.32%', '22.05%');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `country_code`, `mobile`, `email`, `city`, `ip_address`, `created_at`, `updated_at`, `status`) VALUES
(1, 'tes', 'a', 'a', 'a', 'a', 'a', '2022-11-07 01:37:41', '2022-11-07 00:37:53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `listrd`
--
ALTER TABLE `listrd`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
