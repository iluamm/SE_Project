-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 09:11 PM
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
(30, 'insert', 'buffalo', '641c3f8da0088.jpg '),
(31, 'insert', 'orangecat', '641c3f9c4eff7.jpg '),
(32, 'insert', 'นกอีก๋อย', '641c3fd7d655d.jpg '),
(33, 'adhesive', 'uganda', '641c3fe86b289.jpg '),
(34, 'insert', 'sage meme', '641c3ff3909a3.jpg '),
(35, 'insert', 'arthur', '641c40443114a.jpg '),
(36, 'insert', 'chaleaw', '641c406485bbc.jpg '),
(38, 'insert', 'สุดหล่อ', '641c69a05c05f.jpg '),
(39, 'adhesive', 'banshee', '641c7597b0df6.jpg '),
(40, 'adhesive', 'chowder', '641ca3ad79741.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_no` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `o_date` date NOT NULL,
  `o_price` decimal(10,2) NOT NULL,
  `o_address` varchar(255) NOT NULL,
  `o_status` varchar(15) NOT NULL,
  `o_transcript` varchar(255) NOT NULL,
  `o_company` varchar(25) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_image`
--

CREATE TABLE `order_image` (
  `img_id` bigint(20) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `list_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `p_type` varchar(10) NOT NULL,
  `pic_size` varchar(10) NOT NULL,
  `pic_amount` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `p_type`, `pic_size`, `pic_amount`, `p_price`, `p_image`) VALUES
(1, 'adhesive', '3x2', 25, 500, '641ca4122e770.jpg '),
(2, 'adhesive', '3.5x2.5', 10, 900, '641ca782c1865.jpg '),
(4, 'adhesive', '3x2', 21, 42, '641caba9c8484.jpg '),
(5, 'adhesive', '4x6', 200, 500, '641cabbd52117.jpg '),
(6, 'adhesive', '3.5x2.5', 20, 150, '641cabde936e5.jpg '),
(7, 'insert', '3x2', 64, 279, '641cadbe690fd.jpg '),
(8, 'insert', '3x2', 50, 250, '641cade2b2356.jpg '),
(9, 'insert', '4x6', 64, 579, '641cadfb9e3b9.jpg '),
(10, 'insert', '3.5x2.5', 50, 259, '641cae116cb16.jpg '),
(11, 'insert', '4x6', 45, 759, '641cae2ca1b4a.jpg '),
(12, 'image', '9x5', 64, 500, '641caeadb488a.jpg '),
(13, 'image', '3x2', 100, 289, '641caec136fdf.jpg '),
(14, 'image', '3x2', 100, 500, '641caece6611f.jpg '),
(15, 'image', '3x2', 250, 500, '641caedc5d37c.jpg '),
(16, 'image', '3x2', 20, 500, '641caf21564e5.jpg ');

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
(0, 'admin', '1234', 'admin', 'admin', 'adminadminadmin'),
(1, 'kuy', '123', 'customer', 'yedped', 'yedped yedke'),
(2, 'name', '1234', 'customer', 'ลูกพี่เนม เทพซ่า', 'บ้านอยู่บางโพ โอ้โหโก้จริงๆ'),
(9, 'asad', 's', 'customer', 'asd', 'live from the moon'),
(10, 'tanawat', '12', 'customer', 'สุดหล่อ บ้านรวย', 'บ้านอยู่ที่ไหน แต่ใจอยู่ที่เธอ'),
(12, '0991450070', 'test', 'customer', 'ลูกพี่ทีม เทพซ่า', '12345 บ้านกกกอก คดีเด็ด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_no`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `order_image`
--
ALTER TABLE `order_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
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
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_image`
--
ALTER TABLE `order_image`
  MODIFY `img_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;