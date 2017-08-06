-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 09:27 PM
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
  `mealid` varchar(11) NOT NULL,
  `productcd` varchar(30) NOT NULL,
  `male_quantity` int(11) NOT NULL,
  `female_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billofmeal`
--

INSERT INTO `billofmeal` (`id`, `mealid`, `productcd`, `male_quantity`, `female_quantity`) VALUES
(1, 'BF01', 'A001', 3, 2),
(2, 'BF01', 'A009', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_detail`
--

CREATE TABLE `form_detail` (
  `id` int(11) NOT NULL,
  `formid` int(11) NOT NULL,
  `productcd` varchar(30) NOT NULL,
  `quantityinput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_detail`
--

INSERT INTO `form_detail` (`id`, `formid`, `productcd`, `quantityinput`) VALUES
(88, 48, 'A001', 5),
(89, 48, 'A009', 4),
(90, 49, 'A001', 0),
(91, 49, 'A009', 0),
(92, 49, 'A001', 2),
(93, 49, 'A009', 3),
(94, 49, 'A001', 4),
(95, 49, 'A009', 5),
(96, 50, 'A001', 3),
(97, 50, 'A009', 4),
(98, 51, 'A001', -5),
(99, 51, 'A009', -5),
(100, 52, 'A001', 3),
(101, 52, 'A009', 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `pd_cd` varchar(30) NOT NULL,
  `targetlevel` decimal(11,2) NOT NULL,
  `onorder` decimal(11,2) NOT NULL,
  `minorderquantity` decimal(11,2) NOT NULL,
  `available` decimal(11,2) NOT NULL,
  `belowtargetlevel` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `pd_cd`, `targetlevel`, `onorder`, `minorderquantity`, `available`, `belowtargetlevel`) VALUES
(1, 'A001', '0.00', '8.00', '0.00', '57.00', '0.00'),
(2, 'A009', '0.00', '7.00', '0.00', '53.00', '0.00'),
(3, 'D001', '0.00', '0.00', '0.00', '4.00', '0.00'),
(4, '01', '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, 'V002', '0.00', '0.00', '0.00', '5.00', '0.00'),
(6, 'V003', '0.00', '0.00', '0.00', '7.20', '0.00'),
(7, 'V004', '0.00', '0.00', '0.00', '0.00', '0.00'),
(8, 'V005', '0.00', '0.00', '0.00', '0.00', '0.00'),
(9, 'V006', '0.00', '0.00', '0.00', '0.00', '0.00'),
(10, 'V007', '0.00', '0.00', '0.00', '0.00', '0.00'),
(11, 'V008', '0.00', '0.00', '0.00', '0.00', '0.00'),
(12, 'V009', '0.00', '0.00', '0.00', '0.00', '0.00'),
(13, 'V010', '0.00', '0.00', '0.00', '0.00', '0.00'),
(14, 'V011', '0.00', '0.00', '0.00', '0.00', '0.00'),
(15, 'V012', '0.00', '0.00', '0.00', '0.00', '0.00'),
(16, 'V013', '0.00', '0.00', '0.00', '0.00', '0.00'),
(17, 'V014', '0.00', '0.00', '0.00', '0.00', '0.00'),
(18, 'V015', '0.00', '0.00', '0.00', '0.00', '0.00'),
(19, 'V016', '0.00', '0.00', '0.00', '0.00', '0.00'),
(20, 'V017', '0.00', '0.00', '0.00', '0.00', '0.00'),
(21, 'V018', '0.00', '0.00', '0.00', '0.00', '0.00'),
(22, 'V019', '0.00', '0.00', '0.00', '0.00', '0.00'),
(23, 'F001', '0.00', '0.00', '0.00', '0.00', '0.00'),
(24, 'F002', '0.00', '0.00', '0.00', '0.00', '0.00'),
(25, 'F003', '0.00', '0.00', '0.00', '0.00', '0.00'),
(26, 'F004', '0.00', '0.00', '0.00', '0.00', '0.00'),
(27, 'M001', '0.00', '0.00', '0.00', '0.00', '0.00'),
(28, 'M002', '0.00', '0.00', '0.00', '0.00', '0.00'),
(29, 'M003', '0.00', '0.00', '0.00', '0.00', '0.00'),
(30, 'M004', '0.00', '0.00', '0.00', '0.00', '0.00'),
(31, 'M005', '0.00', '0.00', '0.00', '0.00', '0.00'),
(32, 'M006', '0.00', '0.00', '0.00', '0.00', '0.00'),
(33, 'M007', '0.00', '0.00', '0.00', '0.00', '0.00'),
(34, 'M008', '0.00', '0.00', '0.00', '0.00', '0.00'),
(35, 'S001', '0.00', '0.00', '0.00', '0.00', '0.00'),
(36, 'S002', '0.00', '0.00', '0.00', '0.00', '0.00'),
(37, 'S003', '0.00', '0.00', '0.00', '0.00', '0.00'),
(38, 'S004', '0.00', '0.00', '0.00', '0.00', '0.00'),
(40, 'D002', '0.00', '0.00', '0.00', '0.00', '0.00'),
(41, 'D003', '0.00', '0.00', '0.00', '0.00', '0.00'),
(42, 'D004', '0.00', '0.00', '0.00', '0.00', '0.00'),
(43, 'D005', '0.00', '0.00', '0.00', '0.00', '0.00'),
(44, 'O001', '0.00', '0.00', '0.00', '0.00', '0.00'),
(45, 'O002', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `mealplan`
--

CREATE TABLE `mealplan` (
  `id` int(11) NOT NULL,
  `weekno` int(11) NOT NULL,
  `dayno` int(11) NOT NULL,
  `mealid` varchar(11) NOT NULL,
  `MealPlan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mealplan`
--

INSERT INTO `mealplan` (`id`, `weekno`, `dayno`, `mealid`, `MealPlan`) VALUES
(0, 1, 1, 'BF01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pd_id` int(4) NOT NULL,
  `pd_cd` varchar(30) DEFAULT NULL,
  `pd_name` varchar(30) DEFAULT NULL,
  `pd_zh` text,
  `pd_unit` varchar(10) DEFAULT NULL,
  `pd_dis` tinyint(1) DEFAULT NULL,
  `pd_cost` decimal(11,2) DEFAULT NULL,
  `pd_supplier` varchar(30) DEFAULT NULL,
  `pd_category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pd_id`, `pd_cd`, `pd_name`, `pd_zh`, `pd_unit`, `pd_dis`, `pd_cost`, `pd_supplier`, `pd_category`) VALUES
(4, 'V001', 'Potato', '红土豆', '磅', 0, '0.00', '0.00', '蔬菜'),
(5, 'V002', 'Green Pepper', '青椒', '个', 0, '0.00', '', '蔬菜'),
(6, 'V003', 'Colored Pepper', '彩椒', '个', 0, '0.00', '', '蔬菜'),
(7, 'V004', 'Tomato', '番茄', '个', 0, '0.00', '', '蔬菜'),
(8, 'V005', 'Small Tomato', '小番茄', '盒', 0, '0.00', '', '蔬菜'),
(9, 'V006', 'Asparagus', '芦笋', '把', 0, '0.00', '', '蔬菜'),
(10, 'V007', 'mushroom', '蘑菇', '盒', 0, '0.00', '', '蔬菜'),
(11, 'V008', 'broccoli', '西蓝花', '颗', 0, '0.00', '', '蔬菜'),
(12, 'V009', 'Caluiflower', '花菜', '颗', 0, '0.00', '', '蔬菜'),
(13, 'V010', 'cucumber', '黄瓜', '条', 0, '0.00', '', '蔬菜'),
(14, 'V011', 'peas', '冻豆子', '包', 0, '0.00', '', '蔬菜'),
(15, 'V012', 'corns', '冻玉米', '包', 0, '0.00', '', '蔬菜'),
(16, 'V013', 'Zuchini', '毛瓜', '条', 0, '0.00', '', '蔬菜'),
(17, 'V014', 'zucchini', '绿豆芽', '磅', 0, '0.00', '', '蔬菜'),
(18, 'V015', 'Bean sprouts', '黄豆芽', '磅', 0, '0.00', '', '蔬菜'),
(19, 'V016', 'Purple potato', '紫薯', '磅', 0, '0.00', '', '蔬菜'),
(20, 'V017', 'Spanish', '菠菜', '包', 0, '0.00', '', '蔬菜'),
(21, 'V018', 'lettuce', '生菜', '颗', 0, '0.00', '', '蔬菜'),
(22, 'V019', 'sweet potato', '番薯', '磅', 0, '0.00', '', '水果'),
(23, 'F001', 'Water melon', '西瓜', '个', 0, '0.00', '', '水果'),
(24, 'F002', 'grape', '葡萄', '磅', 0, '0.00', '', '水果'),
(25, 'F003', 'orange', '橙子', '个', 0, '0.00', '', '水果'),
(26, 'F004', 'mango', '芒果', '个', 0, '0.00', '', '水果'),
(27, 'M001', 'sausage', '火鸡肉肠', '包', 0, '0.00', '', '新鲜肉类'),
(28, 'M002', 'chicken slice', '火鸡肉片', '片', 0, '0.00', '', '新鲜肉类'),
(29, 'M003', 'chicken breast', '鸡胸', '磅', 0, '0.00', '', '冷冻肉类'),
(30, 'M004', 'chicken thigh', '鸡腿', '磅', 0, '0.00', '', '冷冻肉类'),
(31, 'M005', 'beef shank', '牛腱', '磅', 0, '0.00', '', '冷冻肉类'),
(32, 'M006', 'pork', '猪肉', '磅', 0, '0.00', '', '冷冻肉类'),
(33, 'M007', 'minced beef', '牛肉末', '磅', 0, '0.00', '', '冷冻肉类'),
(34, 'M008', 'minced chicken', '鸡肉末', '磅', 0, '0.00', '', '冷冻肉类'),
(35, 'S001', 'shrimp', '虾', '磅', 0, '0.00', '', '海鲜'),
(36, 'S002', 'Scallop', '瑶柱', '磅', 0, '0.00', '', '海鲜'),
(37, 'S003', 'Basa', '龙利鱼', '条', 0, '0.00', '', '海鲜'),
(38, 'S004', 'egg', '鸡蛋', '条', 0, '0.00', '', '海鲜'),
(39, 'D001', 'egg liquid', '蛋液', '颗', 0, '0.00', '', '乳制品'),
(40, 'D002', 'egg white', '蛋白', '升', 0, '0.00', '', '乳制品'),
(41, 'D003', 'milk', '牛奶', '瓶', 0, '0.00', '', '乳制品'),
(42, 'D004', 'yogourt', '酸奶（原味）', '瓶', 0, '0.00', '', '乳制品'),
(43, 'D005', 'yogourt (vanila)', '酸奶（香草）', '瓶', 0, '0.00', '', '乳制品'),
(44, 'O001', 'almond', '杏仁', '包', 0, '0.00', '', '其他'),
(45, 'O002', 'water', '瓶装水', '瓶', 0, '0.00', '', '其他');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billofmeal`
--
ALTER TABLE `billofmeal`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `mealplan`
--
ALTER TABLE `mealplan`
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
-- AUTO_INCREMENT for table `billofmeal`
--
ALTER TABLE `billofmeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_detail`
--
ALTER TABLE `form_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `form_info`
--
ALTER TABLE `form_info`
  MODIFY `formno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
