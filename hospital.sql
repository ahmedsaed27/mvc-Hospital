-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220902.0b5d7b67cf
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 10:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `Serial_Number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sendby` varchar(255) NOT NULL,
  `arrivalTime` varchar(255) NOT NULL,
  `roomNum` int(11) NOT NULL,
  `Notics` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `Serial_Number`, `name`, `job`, `date`, `address`, `sendby`, `arrivalTime`, `roomNum`, `Notics`, `age`) VALUES
(4, 366984594, 'MOHAMED', 'doctor', '2222-02-22', 'fisel', 'dad', '00:21', 2, 'no', 23),
(6, 693483130, 'ahmed saed', 'doctor', '2124-02-24', 'fisel', 'dad', '14:22', 2, 'no', 23),
(7, 335603963, 'ahmed saed', 'doctor', '2022-06-30', 'fisel', 'dad', '21:40', 2, 'no', 23),
(8, 35711329, 'A.mohamed.s', 'doctor', '2022-06-30', 'fisel', 'dad', '21:40', 2, 'no', 23),
(9, 1697001131, 'ahmed mohamed saed', 'doctor', '2022-06-30', 'fisel', '', '21:41', 2, 'no', 23),
(10, 1040029126, 'ahmed saed', 'doctor', '2022-06-30', 'fisel', '', '21:41', 2, 'no', 23),
(11, 760669405, 'ahmed saed', 'doctor', '2022-06-03', 'fisel', 'dad', '21:42', 2, 'no', 0),
(12, 2107856897, 'ahmed', 'doctor', '2022-06-25', 'fisel', 'dad', '21:48', 2, 'no', 23),
(16, 1669175827, 'ahmed mohamed saed', 'doctor', '2022-07-02', 'fisel', 'dad', '02:03', 2, 'no', 23),
(17, 449074800, '', '', '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `email`, `lastName`) VALUES
(1, 'Ahmed saed', '12345', 0, 'ahmed@gmail.com', 'saed'),
(2, 'AhmedM.Saed', '123456', 1, 'ahmed@yahoo.com', 'saed'),
(3, 'ahmed', '123', 0, 'aaboalala38@gmail.com', 'saed'),
(7, 'ahmedsaed', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'Saher@Gmail.Com', 'mohamed');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_list`
--

CREATE TABLE `waiting_list` (
  `id` int(11) NOT NULL,
  `Serial_Number` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sendby` varchar(255) NOT NULL,
  `arrivalTime` varchar(255) NOT NULL,
  `roomNum` int(11) NOT NULL,
  `Notics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waiting_list`
--

INSERT INTO `waiting_list` (`id`, `Serial_Number`, `date`, `name`, `age`, `job`, `address`, `sendby`, `arrivalTime`, `roomNum`, `Notics`) VALUES
(1, 319606486, '2022-06-30', 'ahmed', 23, 'doctor', 'fisel', 'dad', '20:00', 2, 'no'),
(2, 790638400, '2022-06-30', 'A.mohamed.s', 0, 'doctor', 'fisel', 'dad', '20:03', 2, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiting_list`
--
ALTER TABLE `waiting_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `waiting_list`
--
ALTER TABLE `waiting_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
