-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2021 at 10:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fikaep_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE `tbl_guest` (
  `ID` int(11) NOT NULL,
  `FULLNAME` varchar(100) DEFAULT NULL,
  `WISH` varchar(255) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `OTHER` varchar(255) DEFAULT NULL,
  `DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`ID`, `FULLNAME`, `WISH`, `STATUS`, `OTHER`, `DATE`) VALUES
(1, 'Ujang Candy', 'Selamat', 'hadir', 'Teman Temanan', '2021-04-06 17:46:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
