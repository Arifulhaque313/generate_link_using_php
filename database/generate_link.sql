-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2022 at 07:22 PM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generate_link`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(355) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(355) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `title`, `link`) VALUES
(1, 7, 'Omnis dolor ut id no', 'Quia accusantium ill'),
(2, 7, 'Eligendi rerum qui a', 'Qui velit est accusa'),
(3, 7, 'Obcaecati id adipis', 'Harum voluptate occa'),
(4, 8, 'Expedita nihil optio', 'Laudantium ex exerc'),
(5, 8, 'Mollitia illum est ', 'https://google.com'),
(6, 8, 'Aspernatur sed do et', 'Nisi quia non corpor'),
(7, 9, 'Repellendus Numquam', 'https://google.com'),
(8, 9, 'Repellendus Numquam', 'https://google.com'),
(9, 9, 'Hello', 'https://google.com'),
(10, 10, 'Ad recusandae Quae ', 'Non laudantium qui '),
(11, 10, 'Veritatis magnam qua', 'Perspiciatis except'),
(12, 10, 'new link', 'https://fast.com'),
(13, 10, 'hello', 'https://google.com'),
(14, 10, 'halhsdlkf', 'ALKSJDLKFJLKAS'),
(15, 10, 'SADJFLKJLAKSL', 'AKLJSDKLFJLA'),
(17, 11, 'sdasd', 'asdasd'),
(18, 11, 'hello world', 'https://fast.com'),
(19, 11, 'Hello', 'https://google.com'),
(20, 11, 'Modi soluta rerum so', 'https://google.com'),
(21, 11, 'google', 'https://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `limit` int NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `limit`, `email`, `phone`, `whatsapp`, `password`) VALUES
(7, 'Ariful Haque', 1, 'ariful@gmail.com', '01622319160', '01622319160', '$2y$10$RE3UA8it8ZTg5UvT89Sv2OqS0aZ18.awY.PMvPshx/4FlacE1nhp6'),
(8, 'Motu', 1, 'motu@gmail.com', '+1 (707) 368-5243', '209', '$2y$10$kbDntEfOkFhS9Mq0d/h..e2o4Mmq6XcfoBzng/tazvPaXw47Fg40K'),
(9, 'emma ', 1, 'emmawatson@gmail.com', '+1 (786) 939-1661', '405', '$2y$10$LQSFJrus94j9JHnRcXwNuuFjcbV4Em6xRqjeXL26wLUqSM.RXXLb6'),
(10, 'Ibnul ashir', 5, 'ibnul@gmail.com', '+1 (512) 957-4127', '59', '$2y$10$KUZT3UhB1hqgr4cXBN86NuZh0uaqETLz57ewt8leIGEqyGoSSrPVq'),
(11, 'sinbad', 10, 'sinbad@gmail.com', '01231654789', '01231654789', '$2y$10$.B7yIz9y7k8guAGXHNrCA.z57Mthp6srilxNmr1LnjR7Hq.tPbyDy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
