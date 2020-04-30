-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `who` varchar(255) NOT NULL,
  `timein` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `timeout` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `name`, `purpose`, `who`, `timein`, `timeout`) VALUES
(2, 'es', 'To visit my uncle', 'who', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Mr Abubakar', 'Came to check client', 'The CEO', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'Mary', 'to talk', 'My boss', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(6, 'Ayomikun', 'Came to check client', 'My honourablr', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
