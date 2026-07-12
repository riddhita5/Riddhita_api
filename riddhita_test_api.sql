-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2026 at 04:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riddhita_test_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `riddhita_data_info`
--

CREATE TABLE `riddhita_data_info` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pdes` varchar(50) NOT NULL,
  `pfeatures` varchar(50) NOT NULL,
  `pimage` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riddhita_data_info`
--

INSERT INTO `riddhita_data_info` (`id`, `pname`, `pprice`, `pdes`, `pfeatures`, `pimage`) VALUES
(1, 'mobile', 20000, 'samsung s20 ultra', '16 gb RAM 255gb Storage', NULL),
(2, 'Laptop', 70000, 'Dell', '7th Generation', NULL),
(4, 'mobile2', 200000, 'samsung s20 ultra pro', '16 gb RAM 255gb Storage1', NULL),
(5, 'mobile2', 200000, 'samsung s20 ultra pro', '16 gb RAM 255gb Storage1', NULL),
(6, 'mobile2', 200000, 'samsung s20 ultra pro', '16 gb RAM 255gb Storage1', ''),
(7, 'mobile2', 200000, 'samsung s20 ultra pro', '16 gb RAM 255gb Storage1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoBvsY');

-- --------------------------------------------------------

--
-- Table structure for table `riddhita_user_info`
--

CREATE TABLE `riddhita_user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riddhita_user_info`
--

INSERT INTO `riddhita_user_info` (`id`, `name`, `surname`, `mobile`, `gender`, `email`, `password`) VALUES
(1, 'riddhita', 'gosai', 2147483647, 'Female', 'r1@gmail.com', '1234'),
(2, 'jay', 'der', 2147483647, 'Male', 'j1@gmail.com', '123456'),
(4, 'a', 'a2', 973883247, 'Male', 'a1@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riddhita_data_info`
--
ALTER TABLE `riddhita_data_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riddhita_user_info`
--
ALTER TABLE `riddhita_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riddhita_data_info`
--
ALTER TABLE `riddhita_data_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riddhita_user_info`
--
ALTER TABLE `riddhita_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
