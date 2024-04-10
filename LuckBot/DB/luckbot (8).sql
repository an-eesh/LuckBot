-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2023 at 08:47 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luckbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `category`) VALUES
(1, 'Mobile'),
(2, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `clrid` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`clrid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`clrid`, `color`) VALUES
(1, 'Black'),
(2, 'Blue'),
(3, 'Gold'),
(4, 'pink'),
(5, 'Glowing black'),
(6, 'Glowing Green'),
(7, 'Sunset orange'),
(8, 'Cosmic Black');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `comid` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  PRIMARY KEY (`comid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`comid`, `company`) VALUES
(1, 'Sony'),
(15, 'Vivo'),
(3, 'Redmi'),
(4, 'realme'),
(5, 'Samsung'),
(6, 'Oppo'),
(7, 'LG'),
(8, 'Moto'),
(9, 'Nokia'),
(10, 'Infinix'),
(11, 'HP'),
(12, 'Acer'),
(13, 'Dell'),
(14, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`coid`, `country`) VALUES
(1, 'India'),
(2, 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cuid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `house` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `coid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `paid` int(11) NOT NULL,
  `post` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`cuid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cuid`, `name`, `gender`, `house`, `place`, `coid`, `did`, `sid`, `paid`, `post`, `phone`, `email`, `user`, `password`, `uid`) VALUES
(1, 'fahad shabeeb', 'Male', 'edathodi', '', 0, 1, '3', 1, 'Mandad', '9745413456', 'fahadshabeeb80@gmail.com', 'fahad', 'fahad', 2),
(2, 'Aneesh G', 'Male', 'Girish bhavan', '', 0, 1, '3', 2, 'kuppadi', '8848138934', 'aneeshg1125@gmail.com', 'aneesh', 'aneesh', 3),
(3, 'Nidhin', 'Male', 'puthoor', 'naykketti', 0, 3, '3', 4, '', '', '', 'nidhin', 'nidhin', 4),
(4, 'subin', 'Male', 'kidangil house', 'bather', 0, 8, '10', 7, '', '', '', 'subin', 'subin', 5),
(5, 'ajith', 'Male', 'Meethal', 'bathery', 1, 8, '3', 7, 'kuppadi', '8822947434', 'ajith@gmail.com', 'ajith', 'ajith', 6),
(6, 'unni krishnan', 'Male', 'house', 'pulppalli', 1, 8, '10', 7, 'pulppalli', '', '', 'unni', 'unni', 7);

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

DROP TABLE IF EXISTS `deliver`;
CREATE TABLE IF NOT EXISTS `deliver` (
  `delid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`delid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `did` int(50) NOT NULL AUTO_INCREMENT,
  `sid` int(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`did`, `sid`, `district`) VALUES
(1, 1, 'Kasaragod'),
(2, 2, 'Kannur'),
(3, 3, 'Wayanad'),
(4, 4, 'Kozhikode'),
(5, 5, 'Malappuram'),
(6, 6, 'Palakkad'),
(7, 7, 'Thrissur'),
(8, 8, 'Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `joint_table`
--

DROP TABLE IF EXISTS `joint_table`;
CREATE TABLE IF NOT EXISTS `joint_table` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `lkoid` int(11) NOT NULL,
  `oaid` int(11) NOT NULL,
  `tcid` int(11) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luckbot`
--

DROP TABLE IF EXISTS `luckbot`;
CREATE TABLE IF NOT EXISTS `luckbot` (
  `lkid` int(11) NOT NULL AUTO_INCREMENT,
  `product` int(100) NOT NULL,
  `lkprice` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  PRIMARY KEY (`lkid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luckbotorderaddress`
--

DROP TABLE IF EXISTS `luckbotorderaddress`;
CREATE TABLE IF NOT EXISTS `luckbotorderaddress` (
  `oaid` int(11) NOT NULL AUTO_INCREMENT,
  `lkoid` int(11) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `disprice` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `clrid` int(11) NOT NULL,
  `siid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `eddate` date NOT NULL,
  `house` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `coid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `post` varchar(100) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `landmark` varchar(150) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`oaid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luckbotorderaddress`
--

INSERT INTO `luckbotorderaddress` (`oaid`, `lkoid`, `lkpid`, `uid`, `disprice`, `cid`, `clrid`, `siid`, `odate`, `eddate`, `house`, `place`, `coid`, `sid`, `did`, `paid`, `post`, `pin`, `landmark`, `status`) VALUES
(1, 1, 1, 2, 2000, 2, 2, 5, '2023-03-05', '2023-01-03', 'Edathody', 'Muttil', 0, 3, 1, 1, 'Mandad', '623177', 'hhnjgf', 'N'),
(2, 2, 1, 3, 2000, 2, 2, 5, '2023-03-05', '2023-01-03', 'mylakkal', 'Muttil', 0, 3, 1, 2, 'Kuppadi', '5467', 'hhnjgf', 'N'),
(3, 3, 5, 5, 300, 2, 8, 6, '2023-03-06', '2023-03-13', 'kidangil house', 'bathery', 0, 10, 8, 7, '', '', '', 'N'),
(4, 4, 5, 3, 300, 2, 8, 6, '2023-03-06', '2023-03-13', 'an', '', 1, 10, 8, 7, '', '', '', 'N'),
(5, 5, 7, 3, 2000, 2, 8, 6, '2023-03-06', '2023-03-13', '', '', 2, 11, 8, 7, '', '', '', 'N'),
(6, 6, 7, 3, 2000, 2, 8, 6, '2023-03-06', '2023-03-13', '', '', 2, 11, 8, 7, '', '', '', 'N'),
(7, 7, 7, 3, 2000, 2, 8, 6, '2023-03-06', '2023-03-13', '', '', 2, 11, 8, 7, '', '', '', 'N'),
(8, 8, 7, 3, 2000, 2, 8, 6, '2023-03-06', '2023-03-13', '', '', 2, 11, 8, 7, '', '', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `luckbotorders`
--

DROP TABLE IF EXISTS `luckbotorders`;
CREATE TABLE IF NOT EXISTS `luckbotorders` (
  `lkoid` int(11) NOT NULL AUTO_INCREMENT,
  `lkpid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`lkoid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luckbotorders`
--

INSERT INTO `luckbotorders` (`lkoid`, `lkpid`, `uid`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 5, 5),
(4, 5, 3),
(5, 7, 3),
(6, 7, 3),
(7, 7, 3),
(8, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `luckbotproducts`
--

DROP TABLE IF EXISTS `luckbotproducts`;
CREATE TABLE IF NOT EXISTS `luckbotproducts` (
  `lkpid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `slots` int(11) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `comid` varchar(100) NOT NULL,
  `clrid` varchar(100) NOT NULL,
  `siid` varchar(100) NOT NULL,
  `others` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`lkpid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luckbotproducts`
--

INSERT INTO `luckbotproducts` (`lkpid`, `name`, `price`, `slots`, `cid`, `comid`, `clrid`, `siid`, `others`, `description`, `photo`) VALUES
(2, 'Mobile', 42000, 5, '2', '2', '2', '5', 'sdfghjk', 'uidfghj', 'mb2.jpg'),
(3, 'Oppo A12', 120000, 10, '1', '6', '1', '5', 'rtyhj', 'rdfghj', 'mb2.jpg'),
(4, 'InBook X2 plus', 15000, 5, '2', '14', '8', '5', '15.6 INCH FHD Display', 'HELLO', 'lap3.jpg'),
(6, 'hi', 300, 10, '2', '14', '8', '6', '', '', 'bg-slider.png'),
(7, '', 2000, 1, '2', '14', '8', '6', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `luckbotproductsbackup`
--

DROP TABLE IF EXISTS `luckbotproductsbackup`;
CREATE TABLE IF NOT EXISTS `luckbotproductsbackup` (
  `lkbk_id` int(11) NOT NULL AUTO_INCREMENT,
  `lkpid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`lkbk_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luckbotproductsbackup`
--

INSERT INTO `luckbotproductsbackup` (`lkbk_id`, `lkpid`, `name`, `price`) VALUES
(1, 1, 'Watch', 2000),
(2, 2, 'Mobile', 42000),
(3, 3, 'Oppo A12', 120000),
(4, 4, 'InBook X2 plus', 15000),
(5, 5, 'Pendrive', 300),
(6, 6, 'hi', 300),
(7, 7, '', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `prize` float NOT NULL,
  `discount` float NOT NULL,
  `cid` int(11) NOT NULL,
  `clrid` int(11) NOT NULL,
  `siid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `odate` date NOT NULL,
  `eddate` date NOT NULL,
  `house` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `coid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `paid` int(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `netamount` float NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `pid`, `prize`, `discount`, `cid`, `clrid`, `siid`, `quantity`, `odate`, `eddate`, `house`, `place`, `coid`, `sid`, `did`, `paid`, `post`, `pin`, `landmark`, `amount`, `netamount`, `status`) VALUES
(1, 3, 2, 35000, 2000, 2, 8, 6, 1, '2023-03-06', '2023-03-13', 'n', '', 1, 10, 8, 7, '', '', '', 35000, 33000, 'N'),
(2, 3, 5, 10000, 0, 1, 8, 6, 1, '2023-03-06', '2023-03-13', 'ewty', '', 1, 10, 8, 7, '', '', '', 10000, 10000, 'N'),
(3, 3, 2, 35000, 0, 2, 8, 6, 1, '2023-03-06', '2023-03-13', 'erfr', '', 1, 10, 8, 7, '', '', '', 35000, 35000, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `panchayath`
--

DROP TABLE IF EXISTS `panchayath`;
CREATE TABLE IF NOT EXISTS `panchayath` (
  `paid` int(50) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL,
  `panchayath` varchar(50) NOT NULL,
  PRIMARY KEY (`paid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panchayath`
--

INSERT INTO `panchayath` (`paid`, `did`, `panchayath`) VALUES
(1, 1, 'Muttil'),
(2, 2, 'Kuppadi'),
(3, 3, 'Lakkidi'),
(4, 4, 'Kalpetta'),
(5, 5, 'Beenachi'),
(6, 6, 'Mananthavady'),
(7, 7, 'Vythiri');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `pprize` int(50) NOT NULL,
  `comid` int(11) NOT NULL,
  `clrid` int(11) NOT NULL,
  `siid` int(11) NOT NULL,
  `others` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `cid`, `pprize`, `comid`, `clrid`, `siid`, `others`, `description`, `photo`) VALUES
(1, 'LapTop', 2, 32000, 14, 8, 5, 'rtyu', 'fgh', 'lap3.jpg'),
(2, 'Camera', 2, 35000, 14, 8, 5, 'fghj', 'ertyui', 'camera'),
(3, 'Mobile', 2, 25000, 14, 8, 5, 'fghjkm', 'e45tygh', 'mb2.jpg'),
(4, 'Watch', 2, 13000, 14, 8, 5, 'iytr', 'werty', 'd_w_1.jpg'),
(5, 'Vivo Y11', 1, 10000, 15, 6, 5, 'drfghjk', 'rtyui', 'mb2.jpg'),
(6, 'Redmi ', 1, 25000, 3, 5, 5, 'rtyuik', 'rftgyuhj', 'mb2.jpg'),
(7, 'Samsung Galaxy A51', 1, 32000, 5, 6, 5, 'rdyftgfh', 't5trdytfygjh', 'mb2.jpg'),
(8, 'Redmi Note 12 Pro 5G', 1, 25000, 3, 7, 5, '6 Gb RAM 128Gb ROM', '6.65 inch Display', '-original-imaghkvuhzwge3za.webp'),
(9, 'Infinix Hot 12 Play', 1, 10000, 10, 1, 5, '4 GB RAM  64 GB ROM', '6.82 inch HD Display', '-original-imagkgrxwg386pjk.webp'),
(10, 'vivo T1 Pro 5G', 1, 24999, 14, 8, 5, ' 128 GB 8 GB RAM', '', '12'),
(11, 'OPPO F19 Pro  5G', 1, 23999, 6, 8, 3, 'Fluid Black  128 GB', '8 GB RAM', 'f19-pro-5g-'),
(12, 'MOTOROLA g52', 2, 22999, 8, 8, 5, 'Charcoal Grey 128 GB', '6 GB RAM', 'M3');

-- --------------------------------------------------------

--
-- Table structure for table `select`
--

DROP TABLE IF EXISTS `select`;
CREATE TABLE IF NOT EXISTS `select` (
  `selid` int(11) NOT NULL AUTO_INCREMENT,
  `lkoid` int(11) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`selid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `siid` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL,
  PRIMARY KEY (`siid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`siid`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `sid` int(50) NOT NULL AUTO_INCREMENT,
  `coid` int(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`sid`, `coid`, `state`) VALUES
(1, 1, 'Andhra Pradesh'),
(2, 2, 'Panjab'),
(3, 3, 'Kerala'),
(4, 4, 'Karnataka'),
(5, 5, 'Assam'),
(6, 6, 'Sikkim'),
(7, 7, 'Tamil Nadu'),
(8, 8, 'Bihar'),
(9, 9, 'Haryana'),
(10, 10, 'Punjab'),
(11, 2, 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `temporder`
--

DROP TABLE IF EXISTS `temporder`;
CREATE TABLE IF NOT EXISTS `temporder` (
  `tcid` int(11) NOT NULL AUTO_INCREMENT,
  `lkoid` int(11) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `lkbk_id` int(11) NOT NULL,
  `oaid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`tcid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporder`
--

INSERT INTO `temporder` (`tcid`, `lkoid`, `lkpid`, `lkbk_id`, `oaid`, `uid`) VALUES
(5, 5, 7, 7, 5, 3),
(2, 2, 1, 1, 2, 3),
(4, 4, 5, 5, 4, 3),
(6, 6, 7, 7, 6, 3),
(7, 7, 7, 7, 7, 3),
(8, 8, 7, 7, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tempselection1`
--

DROP TABLE IF EXISTS `tempselection1`;
CREATE TABLE IF NOT EXISTS `tempselection1` (
  `tsid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `lkoid` int(11) NOT NULL,
  `oaid` int(11) NOT NULL,
  `tcid` int(11) NOT NULL,
  PRIMARY KEY (`tsid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempselection2`
--

DROP TABLE IF EXISTS `tempselection2`;
CREATE TABLE IF NOT EXISTS `tempselection2` (
  `ts2id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `lkoid` int(11) NOT NULL,
  `oaid` int(11) NOT NULL,
  `tsid` int(11) NOT NULL,
  `tcid` int(11) NOT NULL,
  PRIMARY KEY (`ts2id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user`, `password`, `utype`) VALUES
(1, 'admin', 'admin', 'A'),
(2, 'fahad', 'fahad', 'C'),
(3, 'aneesh', 'aneesh', 'C'),
(4, 'nidhin', 'nidhin', 'C'),
(5, 'subin', 'subin', 'C'),
(6, 'ajith', 'ajith', 'C'),
(7, 'unni', 'unni', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

DROP TABLE IF EXISTS `winner`;
CREATE TABLE IF NOT EXISTS `winner` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(100) NOT NULL,
  `lkpid` int(11) NOT NULL,
  `oaid` int(11) NOT NULL,
  `tcid` int(11) NOT NULL,
  `lkoid` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`wid`, `date`, `time`, `name`, `lkpid`, `oaid`, `tcid`, `lkoid`, `jid`, `uid`) VALUES
(1, '2023-03-05', '12:58:28', 'fahad shabeeb', 1, 1, 1, 1, 1, 2),
(2, '2023-03-06', '09:25:30', 'subin', 5, 3, 3, 3, 1, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
