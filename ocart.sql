-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 12:38 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `b_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pswrd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`b_id`, `name`, `email`, `mobile`, `address`, `pswrd`) VALUES
(1, 'admin', 'm.s.chaithanya1997@gmail.com', '7032566047', 'localhost', '$2y$10$wQfmNl4OAWN0lyCjkc3zXOTAb3KPoQon8oCccF7X2hfQn1/2CVo0W'),
(4, 'sai', 'efgh@g.com', '8648223594', 'localhost', '$2y$10$wQfmNl4OAWN0lyCjkc3zXOTAb3KPoQon8oCccF7X2hfQn1/2CVo0W'),
(5, 'priti', 'abc@gmail.com', '1134567890', '7-12-105/9,14TH WARD,KANAGALA VARI STREET,UPPUDI', '$2y$10$Smu6QtTyC60fRjnRwRkeCuU4vc6HXjPYim74RBQWxhXezsnspxrMq');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(11) NOT NULL,
  `buy` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `buy`, `p_id`, `quantity`, `size`, `color`, `b_id`) VALUES
(1, '1', 5, 2, '10', 'white', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `b_id`, `p_id`, `cart_id`) VALUES
(1, 5, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sizes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `colors` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `s_id`, `category`, `subcat`, `image`, `title`, `brand`, `details`, `quantity`, `list_price`, `price`, `sizes`, `colors`) VALUES
(1, 4, 'men', 'shirts', '../img/5b507912e0b8c7.75964568.jpg', 'Levis Shirt', 'Levis', 'Featuring the same 1902 Sunset pocket shape as shirts from the Levi\'sÂ® archives, our Sunset One Pocket is as timeless as it is versatile. This button-up staple has a classic look that works with just about any denim in your closet.', 15, '6.79', '5.98', '', ''),
(2, 5, 'electronics', 'mobiles', '../img/5b515d95a19891.27944815.png', 'Iphone-X', 'Apple', 'Apple\'s vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a r', 15, '1005.00', '999.00', '', ''),
(3, 5, 'electronics', 'accesories', '../img/5b51644f038107.04904444.png', 'HBS Smart Watch', 'HBS', 'This watch has two working mode. One is company mode(Bluetooth), It enable to make call or receive call or send or get message via Bluetooth. The other one is Network mode(Sim Card inserted) It enable to make call or receive call and send or get message v', 10, '12.00', '11.50', '', ''),
(4, 4, 'men', 'accesories', '../img/5b5164a27b6c65.01973732.jpeg', 'Hidelink Wallet', 'Hidelink', 'Crafted from genuine leather, this Hidelink wallet not only has a classy finish, but also has stitch detailing to add to its overall look.', 15, '4.67', '3.54', '', ''),
(5, 4, 'men', 'shoes', '../img/5b5164e48c4769.98680303.jpeg', 'Reebok Shoes', 'Reebok', 'New Reebok light-weight shoes for casual wear, very attractive and cheap.', 20, '20.13', '18.26', '', ''),
(6, 4, 'sports_books', 'accesories', '../img/5b5165329a9bf0.69476067.jpg', 'Puma Travel Bag', 'Puma', 'New Puma Sports and Gym Bag. Very attractive and very light in weight.', 12, '6.79', '5.98', '', ''),
(7, 5, 'sports_books', 'sports', '../img/5b5165a6d1aaa9.83264326.jpg', 'Basketball', 'Spalding', 'The basketball is a very long-lasting equipment owing to its ultra durable rubber covering which provides superior performance on both wooden and concrete courts.The ball has a wide channel design on its rubber covering which gives it a tenacious grip, ow', 15, '4.67', '3.20', '', ''),
(8, 5, 'sports_books', 'gaming', '../img/5b5165ead9dbc5.65967756.jpeg', 'Xbox-360', 'Microsoft', 'Xbox 360 E Console Features Apps like Netflix and HBO GO, Fable Anniversary Features Vivid Graphics and Remastered Audio, Features a 30 Foot Range for Gaming and Upto 40 hrs of Playing Time with the Wireless Controller, Built-in Wi-Fi Helps to Connect to ', 5, '422.60', '420.54', '', ''),
(9, 5, 'men', 'accesories', '../img/5b516632e7f1b9.47512099.jpg', 'Woodland Sandals', 'Woodland', 'An epitome of \'looks can be deceiving\', this casual looking sandal will effortlessly pulverize the urban terrains that you regularly tread on. The rugged upper takes on the rough environment head on while the rubber sole grips even in wet conditions.', 10, '37.45', '36.70', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `s_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pswrd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`s_id`, `name`, `email`, `mobile`, `address`, `pswrd`) VALUES
(1, 'admin', 'm.s.chaithanya1997@gmail.com', '7032566047', 'localhost', '$2y$10$.GAUFKCw94VqSnUdBFMgE.PWRy6qU8JvDu8.AecBv6s7ZLwTqOVca'),
(4, 'sai', 'abcd@g.com', '8648223594', 'localhost', '$2y$10$.GAUFKCw94VqSnUdBFMgE.PWRy6qU8JvDu8.AecBv6s7ZLwTqOVca'),
(5, 'chai', 'efgh@g.com', '8007128048', '7-12-105/9,14TH WARD,KANAGALA VARI STREET,UPPUDI', '$2y$10$g4.cPlo8ucUHPi3HqIXIC.qUwoyNshHJlWLK.H2r7fgasakIv2OR2'),
(6, 'priti', 'kumaripritijsr007@gmail.com', '1234567890', '7-12-105/9,14TH WARD,KANAGALA VARI STREET,UPPUDI', '$2y$10$8R3PPhq5HkobaYyw4F5sL.RJQf/8U/ZRSYbl6qgJ7pBXuhsiVqf.W');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `b_id` (`b_id`,`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_id` (`p_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sub_id` (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `buyers` (`b_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `buyers` (`b_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `sellers` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
