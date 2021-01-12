-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 09:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sompod-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `cnf` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `code` int(15) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `attach_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `mname`, `lname`, `pwd`, `cnf`, `mail`, `number`, `sex`, `address`, `code`, `city`, `country`, `skills`, `attach_file`) VALUES
(25, 'MD.', 'Nur', 'Islam', '12345', '', '', '', '', '', 0, '', '', '', ''),
(26, 'MD.', 'Nasir', 'Uddin', '12345', '', '', '', '', '', 0, '', '', '', ''),
(27, 'MD.', 'Hasan', 'Tarek', '12345', '', '', '', '', '', 0, '', '', '', ''),
(28, 'MD.', 'Kawsar', 'Hasan', '123456', '', '', '', '', '', 0, '', '', '', ''),
(29, 'MD', 'Sujon', 'Ali', '54321', '', '', '', '', '', 0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
