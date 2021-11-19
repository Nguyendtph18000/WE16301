-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 03:13 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `cmnd` int(12) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `phone`, `email`, `address`, `cmnd`, `image`, `role`) VALUES
(1, 'quanntph18231', '', 'NTQ2002222', 964540635, 'qnt@gmail.com', 'Canh Nậu Thạch Thất Hà Nội', 123456789, 'testi-img3-150x150.jpg', 0),
(26, 'storeomo', '', 'Quân Nguyễn Trung', 964540635, 'ntq25012002@gmail.com', 'Vietnam', 1203434744, 'testi-img1-150x150.jpg', 0),
(27, 'storeomo', '$2y$10$nx34jPoe9MXE4VMm75vxkOARaugHTbdUrjde6Ahw.ElWeALNVBr3m', 'Quân Nguyễn Trung', 964540635, 'ntq25012002@gmail.com', 'Vietnam', 111111111, 'bg.jpg', 1),
(33, 'storeomo', '$2y$10$9iSk./k5EVO9KiqThbFBeu5ZME1BL.FR9BZH5fylh9WCjEKkiIPkS', 'Quân Nguyễn Trung', 964540635, 'ntq25012002@gmail.com', 'Vietnam', 1203434744, 'testi-img1-150x150.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
