-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 07:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_ID` int(11) NOT NULL,
  `customer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_line` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `order_id` int(11) NOT NULL,
  `order_table` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `order_NET` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `time_enter` time NOT NULL,
  `time_exit` time NOT NULL,
  `customer_id` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` text COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listdetail`
--

CREATE TABLE `listdetail` (
  `detail_id` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_time` time NOT NULL,
  `detail_date` date NOT NULL,
  `product_id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_ID` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `product_detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_img` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `q`
--

CREATE TABLE `q` (
  `Q` int(4) NOT NULL,
  `queue` int(3) NOT NULL,
  `customer_ID` text COLLATE utf8_unicode_ci NOT NULL,
  `queue_date` datetime NOT NULL,
  `customer_quantity` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `q`
--

INSERT INTO `q` (`Q`, `queue`, `customer_ID`, `queue_date`, `customer_quantity`, `status`) VALUES
(80, 1, '', '2020-11-25 11:08:02', '3', ''),
(81, 2, '', '2020-11-24 11:08:57', '2222', ''),
(82, 3, '', '2020-11-25 11:13:52', '5', ''),
(83, 4, '', '2020-11-25 11:21:25', '4444', ''),
(84, 5, '', '2020-11-25 11:32:41', '555', ''),
(85, 0, '', '2020-11-25 11:34:34', '', ''),
(86, 7, '', '2020-11-25 11:34:43', '555', ''),
(87, 8, '', '2020-11-25 11:37:06', '3333', ''),
(88, 1, '', '2020-11-26 10:15:56', '1', ''),
(89, 2, '', '2020-11-26 10:19:44', '3', ''),
(90, 3, '', '2020-11-26 10:21:23', '4', ''),
(91, 4, '', '2020-11-26 10:31:28', '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `restuareant`
--

CREATE TABLE `restuareant` (
  `restaurant_ID` int(11) NOT NULL,
  `restaurant_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_ceo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_province` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_zipcode` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `q`
--
ALTER TABLE `q`
  ADD PRIMARY KEY (`Q`);

--
-- Indexes for table `restuareant`
--
ALTER TABLE `restuareant`
  ADD PRIMARY KEY (`restaurant_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `q`
--
ALTER TABLE `q`
  MODIFY `Q` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `restuareant`
--
ALTER TABLE `restuareant`
  MODIFY `restaurant_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
