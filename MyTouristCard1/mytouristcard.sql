-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 03:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytouristcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `prepaidcard`
--

CREATE TABLE IF NOT EXISTS `prepaidcard` (
  `id` int(11) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `place` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prepaidcard`
--

INSERT INTO `prepaidcard` (`id`, `amount`, `city`, `place`) VALUES
(1, '50', 'Βόρεια Προάστια', '0'),
(2, '50', 'Δυτική Αττική', 'Τριών Ιεραρχών 115 & Ιωνών 18, Αθήνα'),
(3, '100', 'Αθήνα', 'Λεωφόρος Αλεξάνδρας 100 & Τρικούπη Χαρίλαου, Αθήνα'),
(4, '50', 'Ανατολική Αττική', 'Τριών Ιεραρχών 115 & Ιωνών 18, Αθήνα'),
(5, '', 'Αθήνα', 'Λεωφόρος Μαραθώνος 13, Άγιος Στέφανος'),
(6, '350', 'Κηφισιά', 'Σπέτσες, Σπέτσες - Άγιος Μάμας'),
(7, '400', 'Ίλιον', 'Λεωφόρος Μαραθώνος 13, Άγιος Στέφανος');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `age` varchar(12) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `country` varchar(32) NOT NULL,
  `zipcode` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `ibank` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `gender`, `country`, `zipcode`, `email`, `ibank`) VALUES
(7, 'John Doe', '22', 'Αρσενικό', 'United Kingdom', 'G156TY', 'orestis.pantazos@gmail.com', 'GR1234567890'),
(8, 'χριστόφορος φίκας', '19', 'άντρας', 'γερμανία', '', 'carlemakias1926@gmail.com', 'GR1234567890'),
(9, 'John Doe', '22', 'Αρσενικό', 'United Kingdom', 'G156TY', 'orestis.pantazos@gmail.com', 'GR1234567890'),
(10, 'John Doe', '22', 'Αρσενικό', 'Ελλάδα', 'G156TY', 'orestis.pantazos@gmail.com', 'GR1234567890'),
(11, 'John Doe', '22', 'Αρσενικό', 'Μεγάλη Βρετανία', 'G156TY', 'futuregalaxyplus@gmail.com', 'GR1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prepaidcard`
--
ALTER TABLE `prepaidcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
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
-- AUTO_INCREMENT for table `prepaidcard`
--
ALTER TABLE `prepaidcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
