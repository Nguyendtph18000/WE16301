-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 01:54 AM
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
  `id_category` int(11) NOT NULL,
  `destination` varchar(225) NOT NULL,
  `people` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `title` varchar(225) NOT NULL,
  `description` text DEFAULT NULL,
  `detail_photo` varchar(225) NOT NULL,
  `start_day` date DEFAULT NULL,
  `end_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `id_category`, `destination`, `people`, `days`, `nights`, `price`, `discount`, `image`, `status`, `title`, `description`, `detail_photo`, `start_day`, `end_day`) VALUES
(2, 0, 'Đà nẵng', 12, 3, 3, '1200000', 10, 'img5.jpg', 0, 'Cảnh hoàng hôn của cư dân ven hồ xinh đẹp', 'Đây là mô tả ngắn cho tour du lịch này', 'img31.jpg', NULL, NULL),
(7, 0, 'Hạ Long', 15, 5, 4, '1500000', 10, 'img9.jpg', 1, 'Cảnh đẹp thiên nhiên', 'Mô tả cảnh đẹp thiên nhiên Hạ Long', 'img26.jpg', NULL, NULL),
(10, 0, 'SaPa', 15, 3, 2, '1100000', 10, 'img51.jpg', 0, 'Vẻ đẹp núi SaPa', 'Mô tả vẻ đẹp núi SaPa', 'img3.jpg', NULL, NULL),
(15, 0, 'aaaaa', 12, 7, 7, '1100000', 0, 'gallery-3.jpg', 1, 'Hết hạn', 'Hạn', 'img25.jpg', NULL, NULL),
(16, 0, 'quân', 11, 2, 1, '1111111', 15, 'gallery-5.jpg', 2, 'quân', 'quann qquana', '', NULL, NULL),
(22, 0, 'Hạ Long', 15, 14, 14, '1100000', 0, 'img9.jpg', 0, 'HẠ LONG NGÀY MỚI', 'MÔ TẢ CẢNH ĐẸP VỊNH HẠ LONG NGÀY MỚI', 'img3.jpg', '2021-12-05', '0000-00-00'),
(24, 0, 'Quy Nhơn', 21, 7, 7, '3000000', 0, 'gallery-1.jpg', 0, 'Biển Quy Nhơn', 'Mô tả biển Quy Nhơn', 'img6.jpg', '2021-11-21', '2021-11-28'),
(26, 0, 'Nha Trang', 11, 4, 4, '1500000', 0, 'img9.jpg', 0, 'Vẻ đẹp biển Nha Trang', 'Mô tả vẻ đẹp biển Nha Tang', 'img3.jpg', '2021-11-18', '2021-11-22'),
(27, 0, 'Hạ Long', 15, 2, 2, '1100000', 0, 'gallery-3.jpg', 0, 'VẺ ĐẸP NÚI SAPA', 'Mô tả vẻ đẹp núi SaPa', 'img35.jpg', '2021-11-24', '2021-11-27'),
(28, 0, 'Hạ Long', 15, 2, 2, '1100000', 0, 'gallery-3.jpg', 0, 'VẺ ĐẸP NÚI SAPA', 'Mô tả vẻ đẹp núi SaPa', 'img35.jpg', '2021-11-24', '2021-11-27'),
(30, 0, 'đa', 12, 4, 4, '1500000', 10, 'img10.jpg', 0, 'ádasd', 'adsads', 'img5.jpg', '2021-11-22', '2021-11-26'),
(38, 0, 'Thêm mới', 0, 0, 0, '0', 0, '', 0, 'Thêm mới', '', '', '0000-00-00', '0000-00-00'),
(39, 0, '', 0, 0, 0, '0', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00'),
(40, 0, '', 0, 0, 0, '0', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00'),
(41, 0, '', 0, 0, 0, '0', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00'),
(42, 0, '', 0, 0, 0, '0', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
