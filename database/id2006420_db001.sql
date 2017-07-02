-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 08:39 PM
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
-- Table structure for table `form_detail`
--

CREATE TABLE `form_detail` (
  `ID` int(11) NOT NULL,
  `formid` int(11) NOT NULL,
  `productid` varchar(32) NOT NULL,
  `Quantityinput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_info`
--

CREATE TABLE `form_info` (
  `ID` int(11) NOT NULL,
  `FormNo` int(11) NOT NULL,
  `Week` text NOT NULL,
  `Day` text NOT NULL,
  `Crtdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_info`
--

INSERT INTO `form_info` (`ID`, `FormNo`, `Week`, `Day`, `Crtdate`) VALUES
(1, 0, '2', '3', '0000-00-00'),
(2, 3, '4', '5', '0000-00-00');

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
(1, 'A001', 'Quinoa', '藜麦', 'bag', 0, '6', 'Superstore', 'Carbs', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_detail`
--
ALTER TABLE `form_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form_info`
--
ALTER TABLE `form_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_info`
--
ALTER TABLE `form_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pd_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
