-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 06:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polaroid`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `a_type` varchar(10) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `a_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `a_type`, `a_name`, `a_image`) VALUES
(1, 'test', 'test', 'test'),
(2, 'test', 'test', 'test'),
(3, '1', '1', '????\0JFIF\0\0`\0`\0\0??\0;CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 75\n??\0C\0		\n\r\Z\Z $.\' \",#(7),01444\'9=82<.342??\0C			\r\r2!!22222222222222222222222222222222222222222222222222??\0f\"\0??\0\0\0\0\0\0');

-- --------------------------------------------------------

--
-- Table structure for table `prmotion`
--

CREATE TABLE `prmotion` (
  `promotion_id` varchar(3) NOT NULL,
  `p_type` varchar(10) NOT NULL,
  `pic_size` varchar(10) NOT NULL,
  `pic_amount` int(11) NOT NULL,
  `p_paper_type` varchar(50) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `user_type` varchar(8) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`) VALUES
(0, 'admin', '1234', 'admin'),
(1, 'kuy', '1234', 'customer'),
(2, 'name', '1234', 'customer'),
(9, 'asad', 's', 'customer'),
(10, 'tanawat', '12', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `prmotion`
--
ALTER TABLE `prmotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
