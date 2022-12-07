-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 05, 2021 at 12:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `email`, `password`) VALUES
(1, 'shimul', 'shimul@yahoo.com', '42347239'),
(2, 'lipi', 'lipi@yahoo.com', '42347239');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products name` varchar(25) DEFAULT NULL,
  `products type` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products name`, `products type`, `price`) VALUES
('Iphone11', 'Mobile', 12000),
('Skoda Fabia', 'Car', 200000),
('Lenovo', 'Laptop', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `name`, `category`, `description`, `image`, `price`) VALUES
(55, 'Ipad-Pro', 'laptop', 'ipad-Pro M10 (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/ipad-pro.jpg', 8500.00),
(56, 'Iphone-12', 'mobile', 'iphone-12 (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/iphone12.jpg', 100000.00),
(54, 'HP-Laptop', 'laptop', 'HP-Laptop (10 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/hp-laptop.jpg', 5500.00),
(49, 'Aser Laptop', 'laptop', 'Asus Laptop (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/aser-laptop.jpg', 5400.00),
(50, 'Asus Laptop', 'laptop', 'Asus Laptop Pro M10 (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/asus-laptop.jpg', 5600.00),
(51, 'Canon-Camera', 'camera', 'Canon Camera Pro (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/canon-camera.jpg', 8700.00),
(53, 'Headphone', 'headphone', 'Sony Headphone is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/headphone.jpg', 450.00),
(48, 'Apple-Mac-pro', 'laptop', 'Apple-Mac-Pro M10 (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/apple-macbook.jpg', 7500.00),
(57, 'Lenovo-Laptop', 'laptop', 'Lenovo Laptop M10 (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/lenovo-laptop.jpg', 4700.00),
(58, 'Lenovo-Tab', 'laptop', 'Lenovo Tab M10 (2 nd gen) is a great media tablet designed for the whole family. The tablet has a 10.1 \"HD screen, Android 10 operating system and wi-fi. For the 4G LTE connection, the tablet has a Nano-SIM card reader.', 'product_image/lenovo-tab.jpg', 850.00),
(59, 'Nikon-Camera', 'camera', 'Nikon Camera (10 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/nikon-camera.jpg', 10500.00),
(60, 'Nokia 3.4', 'mobile', 'Nokia 3.4 (2 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/nokia3.4.png', 4600.00),
(61, 'SamsungA32', 'mobile', 'Samsung A32(12 nd gen) is a great media tablet designed for the whole family and has a Nano-SIM card reader.', 'product_image/samsungA32.jpg', 2300.00),
(84, 'Aser Laptop', 'laptop', 'Lenovo Tab M10 (2 nd gen) is a great media tablet designed for the whole family. The tablet has a 10.1 \"HD screen, Android 10 operating system and wi-fi. For the 4G LTE connection, the tablet has a Nano-SIM card reader.', 'product_image/apple-macbook.jpg', 5600.00);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `task` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_completed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `parent_id`, `task`, `date_added`, `date_completed`) VALUES
(1, 0, 'Assignment1', '2021-10-06 08:14:48', '0000-00-00 00:00:00'),
(2, 0, 'Assignment1', '2021-10-06 08:22:57', '0000-00-00 00:00:00'),
(3, 0, 'Assignment2', '2021-10-06 08:23:08', '0000-00-00 00:00:00'),
(4, 0, 'Assignment1', '2021-10-06 20:27:29', '0000-00-00 00:00:00'),
(5, 0, 'Assignment1', '2021-10-23 07:37:21', '0000-00-00 00:00:00'),
(6, 0, 'shimul-assignment', '2021-10-23 08:52:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Dipen', 'Aradho'),
('Himen', 'Aradho1'),
('shimul', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `address`, `email`, `password`) VALUES
(14, 'shimul', '42347239', 'Rebæk søpark', 'shimul_ustc@yahoo.com', 'shimul'),
(15, 'himen', '42347239', 'Rebæk søpark', 'himen@yahoo.com', 'himen'),
(17, 'julia', '42347239', 'Rebæk søpark 25, 3TV 2650 Hvidovre, Denmark', 'shimul_ustc11@yahoo.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `parent` (`parent_id`),
  ADD KEY `added` (`date_added`),
  ADD KEY `completed` (`date_completed`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
