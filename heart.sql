-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 09:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heart`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Heart', '4568', 'heart@gmail.com'),
(34, 'Raisul', '743c41a921516b04afde48bb48e28ce6', 'raisul@hotmail.com'),
(37, 'Heart', 'bcfa8a783aaf938cdef361634d5f9289', 'heart@gmail.com'),
(52, 'Hridoy', 'd93591bdf7860e1e4ee2fca799911215', 'hr@hk.nk'),
(53, 'Alex', '6562c5c1f33db6e05a082a88cddab5ea', 'as@hk.bkm'),
(72, 'Saif', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'saif@live.com'),
(77, 'Jamil', '81dc9bdb52d04dc20036dbd8313ed055', 'jamil@gmail.com'),
(89, 'Faruk', 'd93591bdf7860e1e4ee2fca799911215', 'faruk@yahoo.com'),
(90, 'Faruk', 'd93591bdf7860e1e4ee2fca799911215', 'faruk@yahoo.com'),
(91, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(92, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(93, 'hrid', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'hrid@live.com'),
(94, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(95, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(96, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(97, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(98, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(99, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(101, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(102, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(103, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(104, '', 'd41d8cd98f00b204e9800998ecf8427e', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
