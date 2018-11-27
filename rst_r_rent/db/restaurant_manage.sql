-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 03:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_data`
--

CREATE TABLE IF NOT EXISTS `category_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category_data`
--

INSERT INTO `category_data` (`id`, `cat_name`) VALUES
(1, 'Chinese'),
(2, 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `chair_data`
--

CREATE TABLE IF NOT EXISTS `chair_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tabl_id` int(11) NOT NULL,
  `typ_id` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `chair_data`
--

INSERT INTO `chair_data` (`id`, `tabl_id`, `typ_id`, `st`) VALUES
(1, 1, 1, 0),
(2, 1, 1, 0),
(3, 1, 1, 0),
(4, 1, 1, 0),
(5, 1, 1, 0),
(6, 1, 1, 0),
(7, 2, 1, 0),
(8, 2, 1, 0),
(9, 2, 1, 0),
(10, 2, 1, 0),
(11, 2, 1, 0),
(12, 2, 1, 0),
(13, 3, 1, 0),
(14, 3, 1, 0),
(15, 3, 1, 0),
(16, 3, 1, 0),
(17, 3, 1, 0),
(18, 3, 1, 0),
(19, 4, 1, 0),
(20, 4, 1, 0),
(21, 4, 1, 0),
(22, 4, 1, 0),
(23, 4, 1, 0),
(24, 4, 1, 0),
(25, 5, 2, 1),
(26, 5, 2, 1),
(27, 5, 2, 1),
(28, 5, 2, 1),
(29, 6, 2, 1),
(30, 6, 2, 1),
(31, 6, 2, 1),
(32, 6, 2, 1),
(33, 7, 3, 1),
(34, 7, 3, 1),
(35, 8, 3, 0),
(36, 8, 3, 0),
(37, 9, 3, 0),
(38, 9, 3, 0),
(39, 10, 3, 0),
(40, 10, 3, 0),
(41, 11, 3, 0),
(42, 11, 3, 0),
(43, 12, 3, 0),
(44, 12, 3, 0),
(45, 13, 3, 0),
(46, 13, 3, 0),
(47, 14, 3, 0),
(48, 14, 3, 0),
(49, 15, 3, 0),
(50, 15, 3, 0),
(51, 16, 3, 0),
(52, 16, 3, 0),
(53, 17, 4, 0),
(54, 17, 4, 0),
(55, 17, 4, 0),
(56, 17, 4, 0),
(57, 18, 4, 0),
(58, 18, 4, 0),
(59, 18, 4, 0),
(60, 18, 4, 0),
(61, 19, 2, 0),
(62, 19, 2, 0),
(63, 19, 2, 0),
(64, 19, 2, 0),
(65, 20, 2, 0),
(66, 20, 2, 0),
(67, 20, 2, 0),
(68, 20, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item_data`
--

CREATE TABLE IF NOT EXISTS `item_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `item_nme` varchar(150) NOT NULL,
  `amt` float NOT NULL,
  `pic` varchar(10) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `item_data`
--

INSERT INTO `item_data` (`id`, `cat_id`, `item_nme`, `amt`, `pic`, `st`) VALUES
(1, 2, 'Chicken Biryani', 130, '0.jpg', 1),
(2, 2, 'Beef Biryani', 100, '1.jpg', 1),
(3, 2, 'Egg Biryani', 85, '2.jpg', 1),
(4, 2, 'Vegetable Biryani ', 70, '3.jpg', 1),
(5, 1, 'Noodles', 75, '4.jpg', 1),
(6, 1, 'Rice Noodles', 100, '5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_chair`
--

CREATE TABLE IF NOT EXISTS `order_chair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(20) NOT NULL,
  `tb_id` varchar(10) NOT NULL,
  `ch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `order_chair`
--

INSERT INTO `order_chair` (`id`, `order_id`, `tb_id`, `ch_id`) VALUES
(1, '3', '5', 25),
(3, '3', '5', 26),
(4, '3', '5', 27),
(5, '3', '5', 28),
(6, '4', '1', 1),
(7, '4', '1', 2),
(8, '4', '1', 3),
(9, '4', '1', 4),
(10, '4', '1', 5),
(11, '5', '1', 1),
(12, '5', '1', 2),
(13, '5', '1', 4),
(14, '5', '1', 5),
(15, '6', '5', 25),
(16, '6', '5', 26),
(17, '6', '5', 27),
(18, '6', '5', 28),
(19, '6', '6', 29),
(20, '6', '6', 30),
(21, '6', '6', 31),
(22, '6', '6', 32),
(23, '7', '7', 33),
(24, '7', '7', 34),
(25, '8', '1', 1),
(26, '8', '1', 2),
(27, '8', '1', 3),
(28, '8', '1', 4),
(29, '8', '1', 5),
(30, '8', '1', 6),
(31, '9', '1', 1),
(32, '9', '1', 2),
(33, '9', '1', 3),
(34, '9', '1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE IF NOT EXISTS `order_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_nme` varchar(150) NOT NULL,
  `tot_set` int(11) NOT NULL,
  `cont` varchar(12) NOT NULL,
  `dt` date NOT NULL,
  `st` int(11) NOT NULL,
  `ordr_by` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`id`, `cus_nme`, `tot_set`, `cont`, `dt`, `st`, `ordr_by`) VALUES
(1, 'Vineeth', 4, '9446563005', '2018-11-11', 0, ''),
(2, 'PHP Internship', 5, '9995114948', '2018-11-11', 0, ''),
(3, 'qwe', 4, '2123', '2018-11-16', 1, ''),
(4, 'test', 5, '12345', '2018-11-16', 1, ''),
(5, 'Pavanayi', 4, '9446563005', '2018-11-17', 1, ''),
(6, 'Pinu', 8, '22112211', '2018-11-17', 0, ''),
(7, 'dasan', 2, '324234', '2018-11-17', 0, 'name'),
(8, 'rajeev', 6, '9995114948', '2018-11-17', 1, 'name'),
(9, 'Rajesh', 4, '9995114948', '2018-11-22', 1, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `itm` int(11) NOT NULL,
  `rate` float NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `cat`, `itm`, `rate`, `qty`, `amt`) VALUES
(1, 3, 2, 1, 130, 2, 260),
(2, 3, 1, 5, 75, 1, 75),
(3, 4, 1, 5, 75, 5, 375),
(4, 5, 2, 1, 130, 2, 260),
(5, 5, 2, 3, 85, 1, 85),
(6, 5, 1, 5, 75, 1, 75),
(7, 7, 2, 2, 100, 2, 200),
(8, 8, 2, 1, 130, 4, 520),
(9, 8, 1, 5, 75, 2, 150),
(10, 9, 1, 5, 75, 2, 150),
(11, 9, 2, 2, 100, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE IF NOT EXISTS `staff_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(50) NOT NULL,
  `con` varchar(15) NOT NULL,
  `addr` text NOT NULL,
  `uid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff_data`
--

INSERT INTO `staff_data` (`id`, `nme`, `con`, `addr`, `uid`) VALUES
(1, 'Babu', '9446563005', 'trivandrum\r\nkerala', 'b@123');

-- --------------------------------------------------------

--
-- Table structure for table `subjct_assign`
--

CREATE TABLE IF NOT EXISTS `subjct_assign` (
  `assignid` int(11) NOT NULL AUTO_INCREMENT,
  `stf_nme` varchar(150) NOT NULL,
  `stf_id` varchar(50) NOT NULL,
  `crs` int(11) NOT NULL,
  `dep` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `subnme` varchar(20) NOT NULL,
  `subid` varchar(125) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`assignid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `subjct_assign`
--

INSERT INTO `subjct_assign` (`assignid`, `stf_nme`, `stf_id`, `crs`, `dep`, `sem`, `subnme`, `subid`, `st`) VALUES
(1, 'Gayathri', 'lbs102', 1, 1, 1, 'Operating System', 'CS103', 1),
(3, 'Gopalakrishnan Nair', 'lbs101', 1, 1, 1, 'Computer Fundamental', 'CS101', 1),
(4, 'Gopalakrishnan Nair', 'lbs101', 1, 1, 1, 'C Programming', 'CS104', 1),
(5, 'Gopalakrishnan Nair', 'lbs101', 1, 1, 1, 'C Programming LAB', 'CS107', 1),
(6, '', '', 1, 1, 1, 'Computer Fundamental', 'CS101', 1),
(7, '', '', 1, 1, 1, 'C Programming', 'CS104', 1),
(8, 'Rajagopal', 'lbs1121', 1, 1, 1, 'Computer Fundamental', 'CS101', 1),
(10, 'Gayathri', 'lbs102', 1, 1, 1, 'Introduction to Java', 'CS106', 1),
(11, 'Gayathri', 'lbs102', 1, 1, 1, 'C Programming LAB', 'CS107', 1),
(12, 'Gayathri', 'lbs102', 1, 2, 1, 'Computer Networks', 'CS102', 1),
(15, 'Rajagopal', 'hod', 1, 2, 1, 'Computer Fundamental', 'CS101', 1),
(16, 'Rajagopal', 'hod', 1, 2, 1, 'C Programming', 'CS103', 1),
(17, 'Gayathri', 'adv', 1, 2, 1, 'Operating System', 'CS105', 1),
(18, 'Gayathri', 'adv', 1, 2, 1, 'Computer Graphics', 'CS106', 1),
(19, 'Gopalakrishnan Nair', 'lbs10212', 1, 2, 1, 'Computer Networks', 'CS102', 1),
(21, 'Gopalakrishnan Nair', 'lbs10212', 1, 2, 1, 'Computer Graphics', 'CS106', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_data`
--

CREATE TABLE IF NOT EXISTS `table_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tbl_cat` varchar(50) NOT NULL,
  `cnt` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_data`
--

INSERT INTO `table_data` (`id`, `tbl_cat`, `cnt`, `st`) VALUES
(1, '6', 4, 1),
(2, '4', 2, 1),
(3, '2', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_details`
--

CREATE TABLE IF NOT EXISTS `table_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_id` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `table_details`
--

INSERT INTO `table_details` (`id`, `typ_id`, `st`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 2, 1),
(6, 2, 1),
(7, 3, 1),
(8, 3, 1),
(9, 3, 1),
(10, 3, 1),
(11, 3, 1),
(12, 3, 1),
(13, 3, 1),
(14, 3, 1),
(15, 3, 1),
(16, 3, 1),
(19, 2, 1),
(20, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL,
  `pas` varchar(15) NOT NULL,
  `typ` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `uid`, `pas`, `typ`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'b@123', 'asd', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
