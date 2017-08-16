-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2017 at 03:17 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2573880_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_mallikarjuna`
--

CREATE TABLE `students_mallikarjuna` (
  `rollno` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_mallikarjuna`
--

INSERT INTO `students_mallikarjuna` (`rollno`, `name`, `mobile`, `email`, `cgpa`) VALUES
(1, 'Momin', '9177337898', 'momin@abc.com', 4.4),
(2, 'Pasha', '9949727199', 'pasha@abc.com', 7.7),
(3, 'Jade', '9090909090', 'jade@abc.com', 5.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_mallikarjuna`
--
ALTER TABLE `students_mallikarjuna`
  ADD PRIMARY KEY (`rollno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
