-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 06:08 PM
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
(1, '1', '2', 'buffalo'),
(2, '2', '3', '0-Shark2'),
(3, 'test', 'uganda', '1eJ1q0V'),
(4, 'test', '3123', '4dba8bb0f57b4e55f5d2df2bc7ba7d6f'),
(9, 'insert', 'ก้อง', '7'),
(12, 'insert', 'สุดหล่อ', '240973451_375757430733563_9219492440027951805_n'),
(13, 'insert', 'นกอีก๋อย', '0UqKmn4D_400x400'),
(14, 'insert', '', '');

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
  `user_type` varchar(8) NOT NULL DEFAULT 'customer',
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`, `user_name`, `user_address`) VALUES
(0, 'admin', '1234', 'admin', '', ''),
(1, 'kuy', '1234', 'customer', '', ''),
(2, 'name', '1234', 'customer', 'ลูกพี่เนม เทพซ่า', 'บ้านอยู่บางโพ โอ้โหโก้จริงๆ'),
(9, 'asad', 's', 'customer', '', ''),
(10, 'tanawat', '12', 'customer', '', '');

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
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;