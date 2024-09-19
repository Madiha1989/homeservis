-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 07:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `A_id` int(11) NOT NULL,
  `A_name` varchar(255) DEFAULT NULL,
  `A_email` varchar(255) DEFAULT NULL,
  `A_contact` varchar(255) DEFAULT NULL,
  `A_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`A_id`, `A_name`, `A_email`, `A_contact`, `A_password`) VALUES
(1, 'Azam', 'azam@gmail.com', '0312494756', 'abc'),
(2, 'Azam', 'azam@gmail.com', '', 'abcd'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `C_id` int(11) NOT NULL,
  `C_name` varchar(255) DEFAULT NULL,
  `C_email` varchar(255) DEFAULT NULL,
  `C_contact` varchar(255) DEFAULT NULL,
  `C_message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `Q_id` int(11) NOT NULL,
  `Q_name` varchar(255) DEFAULT NULL,
  `Q_email` varchar(255) DEFAULT NULL,
  `Q_contact` varchar(50) DEFAULT NULL,
  `Q_service` varchar(255) DEFAULT 'Electrician',
  `Q_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`Q_id`, `Q_name`, `Q_email`, `Q_contact`, `Q_service`, `Q_address`) VALUES
(1, 'Aliya', 'aliya@gmail.com', '031982738172', 'Plumbing', 'abc road nazimabad'),
(2, 'Zohaib', 'aliya@gmail.com', '031245978', '', 'abc road Gulshan'),
(3, 'Aliya', 'aliya@gmail.com', '03192873198', '6', 'abc road Gulshan'),
(4, 'Aliya', 'aliya@gmail.com', '03190873192', '6', 'Abc Road Gulshan'),
(5, 'Aliya', 'aliya@gmail.com', '789627471', '5', 'Abc Road Gulshan'),
(6, 'Aliya', 'aliya@gmail.com', '789627471', '5', 'Abc Road Gulshan');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `S_id` int(11) NOT NULL,
  `S_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`S_id`, `S_name`) VALUES
(4, 'Plumbing work'),
(5, 'Electronic Repairing'),
(6, 'Wood Working');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `U_id` int(11) NOT NULL,
  `U_name` varchar(255) DEFAULT NULL,
  `U_email` varchar(255) DEFAULT NULL,
  `U_password` varchar(255) DEFAULT NULL,
  `u_contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`U_id`, `U_name`, `U_email`, `U_password`, `u_contact`) VALUES
(1, 'Daniyal', 'daniyal@gamil.com', 'dani', NULL),
(2, 'Daniyal', 'daniyal@gamil.com', 'dani', NULL),
(3, 'Azam', 'azam@gamil.com', '111a', NULL),
(5, 'Bushra', 'bushra@gmail.com', 'b000', NULL),
(6, 'Bushra', 'bushra@gmail.com', 'b11', NULL),
(7, 'Bushra', 'bushra@gmail.com', 'b11', '038-162-371');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`Q_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `Q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
