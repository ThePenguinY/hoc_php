-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 11:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storemanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `productType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `productType`) VALUES
(1, 'DH00152', 950000, 'UploadImg/damNgan1.png', 'damNgan'),
(2, 'DH00151', 890000, 'UploadImg/damNgan2.png', 'damNgan'),
(3, 'DH00153', 950000, 'UploadImg/damNgan3.png', 'damNgan'),
(4, 'DH00150', 890000, 'UploadImg/damNgan4.png', 'damNgan'),
(5, 'DH00133', 2390000, 'UploadImg/damDai1.png', 'damDai'),
(6, 'DH00138', 3490000, 'UploadImg/damDai2.png', 'damDai'),
(7, 'DH00137', 2490000, 'UploadImg/damDai3.png', 'damDai'),
(8, 'DH00143', 2490000, 'UploadImg/damDai4.png', 'damDai'),
(12, 'DH00144', 1590000, 'UploadImg/damRen1.png', 'damRen'),
(13, 'DH00139', 1490000, 'UploadImg/damRen2.png', 'damRen'),
(14, 'DH00141', 2490000, 'UploadImg/damRen3.png', 'damRen'),
(15, 'DH00136', 4590000, 'UploadImg/damRen4.png', 'damRen'),
(16, 'AD0009', 1790000, 'UploadImg/aoDai1.png', 'aoDai'),
(17, 'AD00015', 1390000, 'UploadImg/aoDai2.png', 'aoDai'),
(18, 'AD00012', 1490000, 'UploadImg/aoDai3.png', 'aoDai'),
(19, 'AD00011', 1990000, 'UploadImg/aoDai4.png', 'aoDai'),
(20, 'DH00152', 950000, 'UploadImg/damNgan1.png', 'home'),
(21, 'DH00133', 2390000, 'UploadImg/aoDai1.png', 'home'),
(22, 'DH00144', 1590000, 'UploadImg/damRen1.png', 'home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
