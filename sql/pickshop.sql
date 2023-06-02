-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 05:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pdtTitle` varchar(255) NOT NULL,
  `pdtPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `img`, `pdtTitle`, `pdtPrice`) VALUES
(15, '642b46855c29a.jpg', 'Multicolor Casual Polo Shirt ', 250),
(17, '642b46a0485ea.jpg', 'Waterproof  laptop backpack', 895),
(19, '6459b05925998.jpg', 'Bangladesh Cricket Short sleeve', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_user`, `admin_pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_priceBD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_image`, `p_title`, `p_price`, `p_priceBD`) VALUES
(6, '642b46a0485ea.jpg', 'Waterproof  laptop backpack', 895, 1300),
(7, '642b46aaf3684.jpg', 'Lotto Super Light Running Shoe', 2796, 3290),
(8, '642b46b4adb9a.jpg', 'Vikan 32 Inch Hd Led Tv 4k', 9699, 12000),
(9, '642b46bee7689.jpg', 'iPhone 14 pro max 256 GB ', 189990, 224990),
(10, '6459b05925998.jpg', 'Bangladesh Cricket Short sleeve', 1300, 1200),
(11, '642b46e2504e2.jpg', 'Dynabook (Toshiba) Satellite Pro', 30500, 33640);

-- --------------------------------------------------------

--
-- Table structure for table `signup_info`
--

CREATE TABLE `signup_info` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT 'asset/Profile_Picturs/avatar.png',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_info`
--

INSERT INTO `signup_info` (`id`, `user_name`, `email`, `phone`, `password`, `profile`, `status`) VALUES
(1, 'Rasel Ahammed', 'raselahommed2002@gmail.com', 1308022388, '12345', 'asset/Profile_Picturs/6458a4fa29783.jpg', 1),
(2, 'Rahul Biswas', 'rahul@gmail.com', 1752865852, '15242', 'asset/Profile_Picturs/avatar.png', 1),
(3, 'Tamal Dhali', 'tamal@gmail.com', 1854246541, '145875', 'asset/Profile_Picturs/avatar.png', 1),
(4, 'Samir Khan', 'samir@gmail.com', 1752458658, '12548', 'asset/Profile_Picturs/avatar.png', 1),
(5, 'Suma Dhali', 'suma@gmail.com', 1865425854, '36548', 'asset/Profile_Picturs/avatar.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_info`
--
ALTER TABLE `signup_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup_info`
--
ALTER TABLE `signup_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
