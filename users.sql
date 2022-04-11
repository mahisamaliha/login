-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 12:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_no` varchar(191) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `dob`, `password`, `confirm_password`) VALUES
(1, 'Mahisa', 'Maliha', 'mahisa@gmail.com', '992', '2022-04-01', '123', '123'),
(39, 'Eka', 'Rashid', 'eka@gmail.com.', '12345', '2022-04-18', '123', '123'),
(40, 'Nishat', 'Prova', 'nishat@gmail.com.', '12833', '2000-01-02', '1234', '1234'),
(41, 'Nishat', 'Prova', 'nishat@gmail.com.', '12345555', '2022-04-20', '1234', '1234'),
(42, 'Nishat', 'Prova', 'nishat@gmail.com.', '12345555', '2022-04-20', '1234', '1234'),
(43, 'Maisha', 'Rashid', 'maisha123@gmail.com.', '1234556666', '2022-04-01', '12345', '12345'),
(44, 'eka', 'eka', 'mahisa@gmail.com.', '1255677', '2022-04-01', '12345', '12345'),
(45, 'qwe', 'qqq', 'qwe@gmail.com.', '12345', '2022-04-02', '123', '123'),
(46, '', '', '.', '', '0000-00-00', '0', '0'),
(47, '', '', '.', '', '0000-00-00', '0', '0'),
(48, 'qw', 'ww', 'ww@gmail.com.', '123', '2022-04-10', '$2y$10$Ls849/Zgt2/yBJKqMDc/zO3zO3YEMqqoCNAO893t36adl8z6u7isC', '123'),
(49, 'Mahisa', 'Maliha', 'asdf@gmail.com.', '123456789', '2022-04-10', '$2y$10$1sGpGZWi.n/PvdnReIALBOsw0ZjgHeBy8TeEJV/NKdhp88sJlhyj.', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
