-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 09:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techquest`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name_1` varchar(50) NOT NULL,
  `name_2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` varchar(15) NOT NULL,
  `college` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `presentazion` varchar(40) DEFAULT NULL,
  `progetto` varchar(40) DEFAULT NULL,
  `unlink1337` varchar(40) DEFAULT NULL,
  `questionario` varchar(40) DEFAULT NULL,
  `angry_bird` varchar(50) DEFAULT NULL,
  `codemet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `events` text NOT NULL,
  `name_1` varchar(50) NOT NULL,
  `name_2` varchar(50) NOT NULL,
  `ph` varchar(15) NOT NULL,
  `college` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(50) NOT NULL,
  `psswd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
