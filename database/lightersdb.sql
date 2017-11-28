-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 03:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lightersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'aaaa', 'aaa', 'aaa', 'aa@aa.com', 'abcde12345'),
(2, 'hello97', 'Hello', 'World', 'helloworld97@gmail.com', 'hello97'),
(3, 'ozq97', 'zack', 'qqqqq', 'a@a.com', 'abcde123'),
(4, 'abc98', 'abc', 'def', 'abcdef@gmail.com', 'abcde12345'),
(5, 'hooligan', 'hoo', 'ligan', 'hooligan@hlg.com', 'hooligan');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `customer_name` varchar(1000) NOT NULL,
  `customer_contact` varchar(1000) NOT NULL,
  `customer_address` varchar(1000) NOT NULL,
  `item_id` int(255) NOT NULL,
  `item_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `user_id`, `customer_name`, `customer_contact`, `customer_address`, `item_id`, `item_quantity`) VALUES
(16, 2, 'aa', '123', 'aa', 4, 2),
(17, 2, 'aa', '123', 'aa', 19, 3),
(18, 2, 'a', 'a', 'a', 17, 0),
(19, 2, 'a', 'a', 'a', 17, 2),
(20, 2, 'a', 'a', 'a', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_category` varchar(1000) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_quantity`, `product_price`, `product_img`) VALUES
(1, 'MEN Fleece Lined Relaxed Pants', 'pants', 10, 149, 'pants1.jpg'),
(2, 'MEN Jogger Pants', 'pants', 10, 129, 'pants2.jpg'),
(3, 'MEN Sweat Pants', 'pants', 10, 99, 'pants3.jpg'),
(4, 'MEN Dry Comfort Shirt Collar Polo Shirt', 'polot', 10, 39, 'polot1.jpg'),
(5, 'MEN Dry-EX Short Sleeve Polo Shirt', 'polot', 10, 79, 'polot2.jpg'),
(6, 'MEN Dry Pique Design Short Sleeve Polo Shirt', 'polot', 10, 59, 'polot3.jpg'),
(7, 'Star Wars T-Shirt', 'tshirt', 9, 59, 'starwars.jpg'),
(8, 'Brown Crew Neck T-Shirt', 'tshirt', 10, 59, 'brownt.jpg'),
(9, 'Grey Crew Neck T-Shirt', 'tshirt', 10, 59, 'greyt.jpg'),
(10, 'Red Crew Neck T-Shirt', 'tshirt', 10, 59, 'redt.jpg'),
(11, 'MEN Italian Bridle Leather Belt', 'belt', 10, 99, 'belt1.jpg'),
(12, 'MEN Italian Leather Suede Belt', 'belt', 10, 99, 'belt2.jpg'),
(13, 'MEN Italian Saddle Leather Belt', 'belt', 10, 99, 'belt3.jpg'),
(14, 'Axel RFID Flip ID BiFold', 'wallet', 10, 35, 'wallet1.jfif'),
(15, 'BO RFID BiFold', 'wallet', 10, 35, 'wallet2.jfif'),
(16, 'Oliver RFID Flip ID BiFold', 'wallet', 10, 35, 'wallet3.jfif'),
(17, 'MEN Woven Checked Trunks', 'underwear', 8, 19, 'underwear1.jpg'),
(18, 'MEN Knit Trunks', 'underwear', 10, 19, 'underwear2.jpg'),
(19, 'MEN Woven Printed Trunks', 'underwear', 7, 19, 'underwear3.jpg'),
(20, 'MEN Pile Line Half Socks', 'socks', 10, 13, 'socks1.jpg'),
(21, 'MEN Pile Rib Socks', 'socks', 10, 13, 'socks2.jpg'),
(22, 'MEN HEATTECH Short Socks', 'socks', 10, 19, 'socks3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
