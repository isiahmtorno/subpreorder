-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 06:40 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subpreorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_category`
--

CREATE TABLE IF NOT EXISTS `sys_category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_category`
--

INSERT INTO `sys_category` (`id`, `name`) VALUES
(1, 'Bread'),
(2, 'Sauce'),
(3, 'Sandwich Type'),
(4, 'Cheese'),
(5, 'Veggies');

-- --------------------------------------------------------

--
-- Table structure for table `sys_products`
--

CREATE TABLE IF NOT EXISTS `sys_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_products`
--

INSERT INTO `sys_products` (`id`, `category_id`, `name`) VALUES
(1, 1, 'Whole Wheat'),
(2, 1, 'Italian Herb'),
(3, 1, 'Jalapeno Parmesan'),
(4, 2, 'Mayo'),
(5, 2, 'Mustard'),
(6, 2, 'Honey Mustard'),
(7, 2, 'Spicy Mayo'),
(8, 3, 'Turkey Bacon Club'),
(9, 3, 'Oven Roasted Turkey'),
(10, 3, 'Savory Ham'),
(11, 3, 'Italian (Salami, Ham, Pepperoni)'),
(12, 4, 'American'),
(13, 4, 'Swiss'),
(14, 4, 'Pepperjack'),
(15, 5, 'Cucumber'),
(16, 5, 'Lettuce'),
(17, 5, 'Peppers - Banana'),
(18, 5, 'Peppers - Jalapeno'),
(19, 5, 'Peppers - Green and Red'),
(20, 5, 'Pickles'),
(21, 5, 'Spinach'),
(22, 5, 'Tomato'),
(23, 5, 'Olives'),
(24, 5, 'Onions');

-- --------------------------------------------------------

--
-- Table structure for table `sys_salesdetails`
--

CREATE TABLE IF NOT EXISTS `sys_salesdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_order` varchar(50) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_salesheader`
--

CREATE TABLE IF NOT EXISTS `sys_salesheader` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sys_category`
--
ALTER TABLE `sys_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_products`
--
ALTER TABLE `sys_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_salesdetails`
--
ALTER TABLE `sys_salesdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_salesheader`
--
ALTER TABLE `sys_salesheader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sys_category`
--
ALTER TABLE `sys_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sys_products`
--
ALTER TABLE `sys_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sys_salesdetails`
--
ALTER TABLE `sys_salesdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sys_salesheader`
--
ALTER TABLE `sys_salesheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
