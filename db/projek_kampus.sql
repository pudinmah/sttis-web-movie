-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 04:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_name`
--

CREATE TABLE `category_name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_name`
--

INSERT INTO `category_name` (`id`, `name`, `create_date`) VALUES
(3, 'horor', '2022-11-09 01:30:58'),
(4, 'tutorial', '2022-11-09 02:56:51'),
(5, 'standup', '2022-11-09 09:38:49'),
(7, 'musik', '2022-11-13 10:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL,
  `account_status` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `verif_code` text NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `photo`, `full_name`, `phone`, `email`, `address`, `username`, `password`, `status`, `account_status`, `date_of_birth`, `role_name`, `created_date`, `verif_code`, `is_verified`) VALUES
(34, '6360ab2a89980.jpg', 'Mahpudin', '3525235', 'pudinmah69@gmail.com', 'karawang', 'Mahpudin69', 'e73c5f82cd6d4ff00badecaf43ea4410', 'active', 'Mahasiswa', '2022-11-01', 'Uploader', '2022-11-01 12:14:18', 'd24c898977b0f89c86d0d7baf1809df9', 1),
(38, '6370618e85296.jpg', 'Mahpudin', '085155288364', 'pudinmah4@gmail.com', 'karawang', 'Mahpudin', 'dc43c730793d4ad2473a002dfdd8a6c7', 'active', 'Umum', '2022-11-13', 'Admin', '2022-11-13 10:16:30', 'f168963161972000389c85eac7b73e4e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_upload`
--

CREATE TABLE `video_upload` (
  `id` int(11) NOT NULL,
  `url_img` text NOT NULL,
  `url_video` text NOT NULL,
  `cast` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_category` int(11) NOT NULL,
  `visibility` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_name`
--
ALTER TABLE `category_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_upload`
--
ALTER TABLE `video_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_name`
--
ALTER TABLE `category_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `video_upload`
--
ALTER TABLE `video_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `video_upload`
--
ALTER TABLE `video_upload`
  ADD CONSTRAINT `video_to_category` FOREIGN KEY (`id_category`) REFERENCES `category_name` (`id`),
  ADD CONSTRAINT `video_to_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
