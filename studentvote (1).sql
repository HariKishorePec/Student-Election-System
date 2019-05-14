-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 09:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentvote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `voteCount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `contact`, `voteCount`) VALUES
(1, 'kishore', 'kishore@gmail.com', '1234567890', 7),
(2, 'kumar', 'kumar@gmail.com', '98654312', 3),
(3, 'harik', 'harik@dgmail.com', '987654', 1),
(4, 'Neelesh Plaparthy', 'neelu@gmail.com', '987654320', 15),
(5, 'len', 'len@gmail.com', '123457783', 1),
(6, 'len', 'len@gmail.com', '123457783', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studentId` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `voted` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `studentId`, `pass_word`, `mobileNumber`, `voted`) VALUES
(2, 'Hari', '16EI111', '12345', '9876543210', 1),
(3, 'kishore', '123', '1234', '1234567890', NULL),
(4, 'asdf', '321', 'asd', '987465', 1),
(5, 'asdf', '9874', '789987', '987465', 0),
(6, 'kumar', '3210', '12345', '987987', 1),
(7, 'new', 'new', '123', '987654', 1),
(8, 'harikishore', '45', '987', '98765465', 1),
(9, 'hari kishore', '16EI111', '1234', '8300496930', 1),
(10, 'gau', '16IT114', '120', '987456332', 1),
(11, '', '', '', '', 0),
(12, 'SJKASHKA', '16EC159', '123456', '48923409', 1),
(13, 'purushottam banerjee', '16CS138', '123', '12345', 1),
(14, 'subbu kona', '16CS123', '123', '9866441201', 1),
(15, '', '', '', '', 0),
(16, 'hello', '1234', '1234', '1234556776', 0),
(17, 'hello', '1234', '1234', '1234556776', 0),
(18, 'hello', '1234', '1234', '1234556776', 0),
(19, 'hello', '1234', '1234', '1234556776', 0),
(20, 'hello', '1234', '1234', '1234556776', 0),
(21, 'hello', '1234', '1234', '1234556776', 0),
(22, 'hello', '1234', '1234', '1234556776', 0),
(23, 'Raushan', '16EE139', '12345', '987654321', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
