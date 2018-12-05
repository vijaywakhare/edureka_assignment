-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 11:19 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `pimg` varchar(500) NOT NULL,
  `pbrand` varchar(500) NOT NULL,
  `pcost` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pimg`, `pbrand`, `pcost`) VALUES
(1, 'Xiaomi Mi 8 Pro ', 'x1.jpg', 'Xiaomi', '10000'),
(2, 'Xiaomi Mi8', 'x2.jpg', 'Xiaomi', '11000'),
(3, 'Xiaomi Mi Mix 2S', 'x3.jpg', 'Xiaomi', '12000'),
(4, 'Xiaomi Pocophone F1', 'x4.jpg', 'Xiaomi', '13000'),
(5, 'Xiaomi Mi 8 Lite', 'x5.jpg', 'Xiaomi ', '14000'),
(6, 'Samsung Galaxy S9', 's1.jpg', 'Samsung', '50000'),
(7, 'Samsung Galaxy S8', 's2.jpg', 'Samsung', '51000'),
(8, 'Samsung Galaxy A9', 's3.jpg', 'Samsung', '52000'),
(9, 'Vivo V7+ (Gold, 64 GB)', 'v1.jpg', 'Vivo', '20000'),
(10, 'Vivo V5s Perfect Selfie (Crown Gold, 64 GB)', 'v2.jpg', 'Vivo', '21000'),
(11, 'Vivo V5 Plus (Gold, 64 GB)', 'v3.jpg', 'Vivo', '22000'),
(12, 'Oppo Find X', 'o1.jpg', 'Oppo', '30000'),
(13, 'Oppo F7', 'o2.jpg', 'Oppo', '31000'),
(14, 'Oppo F5', 'o3.jpg', 'Oppo', '32000'),
(15, 'Huawei P20 Pro.', 'h1.jpg', 'Honor (Huawei)', '40000'),
(16, 'Huawei Honor 8.', 'h2.jpg', 'Honor (Huawei)', '41000'),
(17, 'Huawei Google Nexus 6P.', 'h3.jpg', 'Honor (Huawei)', '42000'),
(18, 'Apple iPhone XR.', 'i1.jpg', 'Apple (iphone)', '60000'),
(19, 'Apple iPhone 8.', 'i2.jpg', 'Apple (iphone)', '61000'),
(20, 'Apple iPhone XS.', 'i3.jpg', 'Apple (iphone)', '62000');

-- --------------------------------------------------------

--
-- Table structure for table `shopuer`
--

CREATE TABLE IF NOT EXISTS `shopuer` (
`id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shopuer`
--

INSERT INTO `shopuer` (`id`, `name`, `email`, `mobile`, `pass`, `dates`) VALUES
(1, 'Vijay Wakhare', 'vijay.wakhare@gmail.com', '9561327247', '7¸ó1äÅ‹é®ŒLñ­ïv', '2018-12-05 08:33:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopuer`
--
ALTER TABLE `shopuer`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `shopuer`
--
ALTER TABLE `shopuer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
