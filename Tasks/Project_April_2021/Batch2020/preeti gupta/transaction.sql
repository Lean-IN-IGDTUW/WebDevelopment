-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 06:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Sender` varchar(20) NOT NULL,
  `Receiver` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Sender`, `Receiver`, `amount`) VALUES
('Mohan Sharma', 'Vivek Pal', 1000),
('Thina', 'Sohan ', 10000),
('NEHA', 'Sohan ', 12),
('Thina', 'Sohan ', 1000),
('Sourabh sahu ', 'Preeti', 12),
('Thina', 'Preeti', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Username`, `Email`, `Amount`) VALUES
(20201, 'Sohan ', 'sohan@gmail.com', 17012),
(20202, 'Mohan Sharma', 'mohansh123@gmail.com', 3000),
(20203, 'Thina', 'sh123s@gmail.com', 18000),
(20204, 'Reena ', 'reeyo34@gmail.com', 3000),
(20205, 'Sonu Singh ', 'singhsonu89@gmail.com', 5000),
(20206, 'Naveen Kr.', 'naveenkr@gmail.com', 5000),
(20207, 'Sourabh sahu ', 'sahukumar@666yahoo.com', 4988),
(20208, 'NEHA', 'nehuu67@gmail.com', 19988),
(20209, 'Laxmi', 'laxmiii12345@gmail.com', 5000),
(202010, 'Vivek Pal', 'pal@yahoo.com', 50000),
(202011, 'Preeti', 'gpreeti@gmail.com', 4012),
(202012, 'Sohan Kumar ', 'krsohan@gmail.com', 1000),
(202013, 'Shalinu', 'shalli@gmail.com', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
