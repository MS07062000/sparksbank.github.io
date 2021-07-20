-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 02:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `Sr.No.` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email-ID` varchar(50) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`Sr.No.`, `Name`, `Email-ID`, `Amount`) VALUES
(1, 'Murali', 'singhmurali.19@gmail.com', 1000000),
(2, 'Akshad', 'akshad.17@gmail.com', 231864),
(3, 'Aman', 'aman.25@gmail.com', 2656751),
(4, 'Vedant', 'vedant.75@gmail.com', 1625656),
(5, 'Balaji', 'balaji.45@gmail.com', 273000),
(6, 'Shivam', 'shivam.95@gmail.com', 5142126),
(7, 'Aditya', 'aditya.58@gmail.com', 232650),
(8, 'Manoj', 'manoj.466@gmail.com', 165135),
(9, 'Krishna', 'krishna.369@gmail.com', 465668),
(10, 'Yuvraj', 'yuvraj.489@gmail.com', 149065);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Sr.No.` int(11) NOT NULL,
  `SENDER` varchar(50) NOT NULL,
  `RECIEVER` varchar(50) NOT NULL,
  `AMOUNT` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`Sr.No.`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Sr.No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `Sr.No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `Sr.No.` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
