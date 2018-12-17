-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2018 at 06:52 AM
-- Server version: 8.0.12
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--
CREATE DATABASE IF NOT EXISTS `tubes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `tubes`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Gempa Bumi'),
(2, 'Longsor');

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE `disaster` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `disaster`
--

INSERT INTO `disaster` (`id`, `title`, `description`, `category_id`, `user_id`, `deadline`, `created_at`, `file_name`) VALUES
(6, 'Bantu saudara kita di palu(1)', 'lorem ipsum', 1, 5, '2018-12-19', '2018-12-04 10:43:01', ''),
(7, 'Longsor di tanah jua(2)', 'lorem ipsum dolor sit amet', 2, 5, '2018-12-26', '2018-12-04 10:43:01', ''),
(8, 'Longsor di tanah jua(3)', 'lorem ipsum dolor sit amet', 2, 5, '2018-12-26', '2018-12-04 10:43:01', ''),
(9, 'Longsor di tanah jua(4)', 'lorem ipsum dolor sit amet', 2, 5, '2018-12-26', '2018-12-04 10:43:01', ''),
(10, 'Longsor di tanah jua(5)', 'lorem ipsum dolor sit amet', 2, 5, '2018-12-26', '2018-12-04 10:43:01', ''),
(11, 'Gempa di timur timur(6)', 'lorem ipsum dolor sit amet', 1, 5, '2018-12-20', '2018-12-04 10:43:01', ''),
(12, 'gempa di selat maluku(7)', 'lorem ipsum dolor sit amet', 1, 5, '2018-12-29', '2018-12-04 10:43:01', ''),
(13, 'gempa di selat maluku(8)', 'lorem ipsum dolor sit amettt', 1, 5, '2018-12-15', '2018-12-04 10:43:01', ''),
(14, 'gempa di selat maluku(9)', 'lorem ipsum dolor sit amet', 1, 5, '2018-12-22', '2018-12-04 10:43:01', ''),
(15, 'Gempa 5.5 SR (10)', 'lorem ipsum dolor', 1, 5, '2019-01-26', '2018-12-04 10:43:57', ''),
(16, 'longsor baru(11)', 'lorem ipsum', 2, 5, '2018-12-20', '2018-12-05 05:39:58', ''),
(17, 'verita baru(12)', 'lorem ipsum', 1, 5, '2018-12-14', '2018-12-06 14:35:44', 'logo.png'),
(18, 'Buat Website(13)', 'ssa', 1, 5, '2019-01-04', '2018-12-06 14:38:38', 'syamil.jpg'),
(19, 'Buat Website(14)', 'ssa', 1, 5, '2019-01-04', '2018-12-06 14:39:37', 'syamil.jpg'),
(20, 'Buat Website(15)', 'ssa', 1, 5, '2019-01-04', '2018-12-06 14:39:48', 'syamil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `address` text NOT NULL,
  `status` enum('pending','schedule','completed') NOT NULL,
  `disaster_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `donate_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('donatur','petugas','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('inactive','active') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `status`, `address`, `phone`) VALUES
(1, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active', 'jalan kaliurang km 14.5', '087765433231'),
(5, 'Nasution mbojo ketiga', 'nas123', '202cb962ac59075b964b07152d234b70', 'petugas', 'active', 'jakal', '00088867888811'),
(12, 'syamil bisyir', 'syam', 'c0f6a2e6136ff3eb7d37b7a292e06174', 'petugas', 'active', 'jakal km7', '082323202244'),
(13, 'test dulu', 'tes', 'd41d8cd98f00b204e9800998ecf8427e', 'donatur', 'active', 'concat', '08776542311'),
(15, ' ', 'bos', 'd41d8cd98f00b204e9800998ecf8427e', 'donatur', 'active', 'jakal', '087764256233'),
(16, ' ', '123', '202cb962ac59075b964b07152d234b70', 'donatur', 'active', 'Jkal 7', '092291992129219');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disaster`
--
ALTER TABLE `disaster`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donate_ibfk_2` (`disaster_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donate_id` (`donate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disaster`
--
ALTER TABLE `disaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disaster`
--
ALTER TABLE `disaster`
  ADD CONSTRAINT `disaster_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disaster_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_2` FOREIGN KEY (`disaster_id`) REFERENCES `disaster` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donate_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`donate_id`) REFERENCES `donate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
