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
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `destination` varchar(225) NOT NULL,
  `people` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `title` varchar(225) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `detail_photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `destination`, `people`, `days`, `nights`, `price`, `discount`, `image`, `status`, `title`, `description`, `detail_photo`) VALUES
(2, 'Đà nẵng', 12, 3, 3, 1200000, 10, 'img10.jpg', 0, 'Cảnh hoàng hôn của cư dân ven hồ xinh đẹp', 'Đây là mô tả ngắn cho tour du lịch này', ''),
(7, 'Hạ Long', 15, 5, 4, 1500000, 10, 'gallery-3.jpg', 1, 'Cảnh đẹp thiên nhiên', 'Mô tả cảnh đẹp thiên nhiên Hạ Long', ''),
(10, 'SaPa', 15, 3, 2, 1100000, 10, 'img51.jpg', 0, 'Vẻ đẹp núi SaPa', 'Mô tả vẻ đẹp núi SaPa', ''),
(14, 'SaPa', 40, 3, 3, 1100000, 10, 'gallery-3.jpg', 0, 'sgss', 'wwwwwww', '404-img.jpg'),
(15, 'aaaaa', 12, 7, 7, 1100000, 0, 'gallery-1.jpg', 0, 'gsgwe', 'egee', '404-img.jpg'),
(16, 'quân', 11, 2, 1, 1111111, 15, 'gallery-5.jpg', 0, 'quân', 'quann qquana', ''),
(17, 'quân', 11, 2, 1, 1111111, 15, 'gallery-5.jpg', 0, 'quân', 'quann qquana', 'img28.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
