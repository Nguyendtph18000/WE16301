-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 01:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `id_tour` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `start_day` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deposit` decimal(10,0) DEFAULT 0,
  `cmnd` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `id_tour`, `tour_name`, `name`, `email`, `phone`, `people`, `start_day`, `total`, `status`, `deposit`, `cmnd`) VALUES
(6, 0, 2, 'Đà nẵng', 'Quân Nguyễn Trung ddax update', 'ntq25012002@gmail.com', 964540635, 7, '0000-00-00', '8400000', 2, '0', 1203434744),
(11, 0, 24, 'Quy Nhơn', 'Quân Nguyễn Trung', 'ntq25012002@gmail.com', 964540635, 11, '2021-11-21', '33000000', 2, NULL, NULL),
(12, 0, 22, 'Hạ Long', 'Quân Nguyễn Trung', 'ntq25012002@gmail.com', 964540635, 1, '2021-12-05', '1100000', 1, '1', 0),
(20, 0, 22, 'Hạ Long', 'Quân Nguyễn Trung', 'ntq25012002@gmail.com', 964540635, 5, '2021-11-23', '5500000', 0, '0', 1203434744);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_tour_bill` (`id_tour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_tour_bill` FOREIGN KEY (`id_tour`) REFERENCES `tours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
