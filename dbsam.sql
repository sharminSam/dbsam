-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 07:31 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsam`
--
CREATE DATABASE IF NOT EXISTS `dbsam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbsam`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'sharmin', '123456'),
(12, '12', '12'),
(46, 'Rossi', '4646');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(250) NOT NULL,
  `supp_name` varchar(50) NOT NULL,
  `product_price_per_unit` decimal(15,2) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `supp_name`, `product_price_per_unit`, `product_quantity`, `dt_created`) VALUES
(12, 'Proton Saga', 'more mileage with less fuel consumption ', 'Mark', '150.00', 5, '2017-07-22 00:36:25'),
(13, 'Perdua Myvi', 'more mileage with less fuel consumption ', 'Mark', '150.00', 2, '2017-07-22 00:36:54'),
(14, 'Lamborghini Garllado', 'Beauty is here', 'John', '1500.00', 1, '2017-07-22 00:37:41'),
(15, 'Porshe Camaro ss', 'Available here', 'Sam Raj', '1500.00', 1, '2017-07-22 00:38:21'),
(16, 'Honda Civic turbo', 'High speed cost less fuel turbo', 'Rio Demark turbo', '400.00', 4, '2017-07-22 00:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_city` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_city`) VALUES
(7, 'Jason', 'Decell', 'Langkawi'),
(12, 'SHARMINDRAN ', 'MANY', 'BANDAR BARU AYER ITAM'),
(16, 'Shashi', 'singh', 'Paris Germany');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
