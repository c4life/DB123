-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 08:34 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2006420_db001`
--

-- --------------------------------------------------------

--
-- Table structure for table `billofmeal`
--

CREATE TABLE `billofmeal` (
  `id` int(11) NOT NULL,
  `mealid` int(11) NOT NULL,
  `mealname` text COLLATE utf8_unicode_ci NOT NULL,
  `productid` int(11) NOT NULL,
  `male_quantity` int(11) NOT NULL,
  `female_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_detail`
--

CREATE TABLE `form_detail` (
  `id` int(11) NOT NULL,
  `formid` int(11) NOT NULL,
  `productcd` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantityinput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_info`
--

CREATE TABLE `form_info` (
  `formno` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `editor` varchar(32) NOT NULL,
  `crtdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_info`
--

INSERT INTO `form_info` (`formno`, `week`, `day`, `editor`, `crtdate`) VALUES
(2, 1, 2, '3', '2017-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `pd_cd` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `targetlevel` int(11) NOT NULL,
  `onorder` int(11) NOT NULL,
  `minorderquantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `belowtargetlevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `pd_cd`, `targetlevel`, `onorder`, `minorderquantity`, `available`, `belowtargetlevel`) VALUES
(1, 'A001', 0, 8, 0, 30, 0),
(2, 'A009', 0, 7, 0, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mealplan`
--

CREATE TABLE `mealplan` (
  `id` int(11) NOT NULL,
  `weekno` int(11) NOT NULL,
  `dayno` int(11) NOT NULL,
  `mealplan` int(11) NOT NULL,
  `mealno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pd_id` int(4) NOT NULL,
  `pd_cd` varchar(30) NOT NULL,
  `pd_name` varchar(30) NOT NULL,
  `pd_zh` text NOT NULL,
  `pd_unit` varchar(10) NOT NULL,
  `pd_dis` tinyint(1) NOT NULL DEFAULT '0',
  `pd_cost` decimal(11,0) NOT NULL,
  `pd_supplier` varchar(30) NOT NULL,
  `pd_category` varchar(30) NOT NULL,
  `pd_descri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pd_id`, `pd_cd`, `pd_name`, `pd_zh`, `pd_unit`, `pd_dis`, `pd_cost`, `pd_supplier`, `pd_category`, `pd_descri`) VALUES
(1, 'A001', 'Quinoa', '藜麦', 'bag', 0, '6', 'Superstore', 'carbs', ''),
(2, 'A009', 'Bread Slices', '全麦面包', 'bag', 0, '0', 'superstore', 'carbs', ''),
(3, 'D001', 'egg liquid', '蛋液', 'box', 0, '0', 'superstore', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_detail`
--
ALTER TABLE `form_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_info`
--
ALTER TABLE `form_info`
  ADD PRIMARY KEY (`formno`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_detail`
--
ALTER TABLE `form_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `form_info`
--
ALTER TABLE `form_info`
  MODIFY `formno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pd_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
