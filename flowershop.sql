-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2020 at 11:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `country` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL,
  `building` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`country`, `city`, `street`, `building`) VALUES
('Jordan', 'Amman', 'Mecca Street', '7'),
('Jordan', 'Amman', 'Mecca Street', '7'),
('Jordan', 'Amman', '4', '2'),
('Jordan', 'Amman', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(7, 'Naser', 'nedaa@yahoo.com', '1111'),
(8, 'Nedaa', 'Nedaa@gmail.com', '1197');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) NOT NULL,
  `category_image` varchar(250) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(8, 'White Box', 'box2.jpg'),
(9, 'Black Box', 'box.jpg'),
(10, 'Turquoise Box', 'box3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `first_name`, `last_name`, `email`, `message`) VALUES
(3, 'Ahmad ', 'Ali', 'ahmad_33@hotmail.com', 'Do I Have To Order Beforehand On Special Days?'),
(4, 'Mohammad', 'Alnadi', 'm.alnadi.199@gmail.com', 'Will Shared Photos Be The Same Product?'),
(5, 'Amal', 'Ahmad', 'amal_98@gmail.com', 'Which Locations Are We Delivering?'),
(6, 'Noor', 'Naser', 'noornasser93@yahoo.com', 'What Time Do You Deliver?');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(3) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `cust_phone` varchar(250) CHARACTER SET latin1 NOT NULL,
  `cust_pass` varchar(250) NOT NULL,
  `cust_email` varchar(250) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cust_name`, `cust_phone`, `cust_pass`, `cust_email`) VALUES
(12, 'nedaa', '0799825616', '777', 'nedaa.naser@yahoo.com'),
(13, 'naser', '123456789', '1122', 'naser@yahoo.com'),
(17, 'ahmad', '0788454542', '4444', 'ahmad@gmail.com'),
(20, 'noor', '079123456', '123456', 'noor.naser@yahoo.com'),
(23, 'yasmen', '123456789', '22525', 'yasmeen@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

DROP TABLE IF EXISTS `gallary`;
CREATE TABLE IF NOT EXISTS `gallary` (
  `gallary_id` int(3) NOT NULL AUTO_INCREMENT,
  `gallary_image` varchar(250) NOT NULL,
  PRIMARY KEY (`gallary_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`gallary_id`, `gallary_image`) VALUES
(1, 'bbb.jpg'),
(11, 'newpro.jpg'),
(3, 'mnmn.jpg'),
(4, 'mnm.jpg'),
(5, 'mn.jpg'),
(6, 'back9.jpg'),
(10, 'back3.jpg'),
(9, 'back2.jpg'),
(12, 'back.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(3) NOT NULL AUTO_INCREMENT,
  `customer_id` int(3) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`) VALUES
(1, 12),
(2, 13),
(3, 17),
(4, 20),
(5, 23);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(3) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(250) NOT NULL,
  `pro_price` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `pro_image` varchar(250) NOT NULL,
  `pro_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `pro_name`, `pro_price`, `category_id`, `pro_image`, `pro_desc`) VALUES
(10, 'Red Flowers', 175, 8, 'box2.jpg', '5 Set Red Sherose; The white box with carefully selected red roses offers a spectacular appearance in a single color crimson. The appearance in sight is the same and consists of 5 rows of red beauties. Each time 8 or 9 red roses due to the change in size of rose flower are present in the box in total of 40 to 45 adept red glaze.'),
(11, 'White Flowers', 175, 8, 'white flower.jpg', '5 Set White Rose; The white box, made up of carefully chosen White roses, offers a spectacular image in a single color. The visual appearance is the same and consists of 5 rows of white beauties. It is 8 or 9 White roses in total due to the variation of rose flower sizes in each row, and it consists of 40 to 45 adobe white blossoms in the box in total.'),
(12, 'Deep Pink Flowers', 175, 8, 'deepPink flower.jpg', '5 Set Pink Rose; The white box, made of carefully chosen pink roses, offers a magnificent image of a single color palette. The visual appearance is the same and the 5 rows are made of pink fun. Each time 8 or 9 pink roses due to the change in size of rose flowers, 40 to 45 in total in the box is made of pink roses.'),
(13, 'Rosy Brown Flowers', 175, 8, 'rosyBrown.jpg', '5 Set Purple Rose; The white box, made of carefully selected Purple roses, offers a spectacular image of a single color mosmor. The visual appearance is the same, with 5 rows of purple delight. 8 or 9 purple roses in total due to the change in size of rose flower in each order, and in total 40 to 45 are composed of pure pink purple.'),
(14, 'Orange Red Flowers', 175, 8, 'orangeRed flower.jpg', '5 Set Orange Rose; The white box of carefully selected orange roses offers a spectacular image of a single color tup. The visual appearance is the same, with 5 rows of Orange fun. Each time 8 or 9 orange roses due to the variation of rose flower sizes, 40 45 in total in the box is made of advent orange.'),
(15, 'Salmon Pink Flowers', 175, 8, 'tomato flower.jpg', '5 Set Salmon Pink Rose; The white box consists of carefully selected salmon colored roses and the single color salmon gives a magnificent image. The appearance is similar to that of the eyes and consists of 5 rows of salmon colored coins. Due to the change in size of rose flowers every time, 8 or 9 salmon colored roses, 40 to 45 from adette Salmon It is made of lotus delicacies.'),
(16, 'Red Flowers', 175, 9, 'box.jpg', '5 Set Red Rose; The black box with carefully selected red roses presents a magnificent image of a single color crimson. It has the same appearance as the eyes and has 5 rows of red beads. Each time 8 or 9 red roses due to the change in size of rose flower are present in the box in total of 40-45 adept red glaze.'),
(17, 'White Flowers', 175, 9, 'BW5.jpg', '5 Set White Rose; The black box, made up of carefully selected White roses, offers a spectacular image in a single color. The visual appearance is the same and consists of 5 rows of white beauties. It is 8 or 9 White roses in total due to the variation of rose flower sizes in each row, and it consists of 40 to 45 adobe white blossoms in the box in total.'),
(18, 'Deep Pink Flowers', 175, 9, 'BP.jpg', '5 Set Pink Rose; The black box, consisting of carefully chosen pink roses, offers a magnificent image of a single color palette. The visual appearance is the same and the 5 rows are made of pink fun. Each time 8 or 9 pink roses due to the change in size of rose flowers, 40 to 45 in total in the box is made of pink roses.'),
(19, 'Rosy Brown Flowers', 175, 9, 'BPP.jpg', '5 Set Purple Rose; The black box, made of carefully selected Purple roses, offers a spectacular image of a single color mosmor. The visual appearance is the same, with 5 rows of purple delight. 8 or 9 purple roses in total due to the change in size of rose flower in each order, and in total 40 to 45 are composed of pure pink purple.'),
(20, 'Orange Red Flowers', 175, 9, 'BO.jpg', '5 Set Orange Rose; The black box of carefully selected orange roses offers a spectacular image of a single color tup. The visual appearance is the same, with 5 rows of Orange fun. Each time 8 or 9 orange roses due to the variation of rose flower sizes, 40 45 in total in the box is made of advent orange.'),
(21, 'Salmon Pink  Flowers', 175, 9, 'BPL.jpg', '5 Set Salmon Pink Rose; The black box is made of carefully selected salmon colored roses, and the single color salmon gives a magnificent image. The appearance is the same as that of the eyes, and the 5 rows are composed of the salmon colored coins. Because of the change in the size of rose flowers every time, 8 or 9 pieces of salmon colored rose, 40 - 45 from adette Salmon It is made of lotus delicacies.'),
(22, 'Red Flowers', 175, 10, 'box3.jpg', '5 Set Red Sherose; The turquoise box consists of carefully chosen red roses and presents a magnificent image of a single color crimson in the box. It has the same appearance as the sight and has 5 rows of red beans. Each time 8 or 9 red roses due to the change in size of rose flower are present in the box in total of 40-45 adept red glaze.'),
(23, 'White Flowers', 175, 10, 'WT.jpg', '5 Set White Rose; The turquoise box, made up of carefully chosen White roses, offers a spectacular image in a single color. The visual appearance is the same and consists of 5 rows of white beauties. It is 8 or 9 White roses in total due to the variation of rose flower sizes in each row, and it consists of 40 to 45 adobe white blossoms in the box in total.'),
(24, 'Deep Pink Flowers', 175, 10, 'WP.jpg', '5 Set Pink Rose; The turquoise box, consisting of carefully chosen pink roses, offers a magnificent image of a single color palette. The visual appearance is the same and the 5 rows are made of pink fun. Each time 8 or 9 pink roses due to the change in size of rose flowers, 40 to 45 in total in the box is made of pink roses.'),
(25, 'Rosy Brown Flowers', 175, 10, 'WB.jpg', '5 Set Purple Rose; The turquoise box, made of carefully selected Purple roses, offers a spectacular image of a single color mosmor. The visual appearance is the same, with 5 rows of purple delight. 8 or 9 purple roses in total due to the change in size of rose flower in each order, and in total 40 to 45 are composed of pure pink purple.'),
(26, 'Orange Red Flowers', 175, 10, 'WO.jpg', '5 Set Orange Rose; The turquoise box, made of carefully selected orange roses, offers a spectacular image of a single color tup. The visual appearance is the same, with 5 rows of Orange fun. Each time 8 or 9 orange roses due to the variation of rose flower sizes, 40 to 45 in total in the box is made of advent orange.'),
(27, 'Salmon Pink  Flowers', 175, 10, 'WTO.jpg', '5 Set Salmon Pink Rose; The turquoise box is made of carefully selected salmon colored roses, and the single color salmon gives a magnificent image. The appearance is similar to that of the eyes and consists of 5 rows of salmon colored coins. Due to the change in size of rose flowers every time 8 or 9 pieces of salmon colored rose, 40 to 45 from adette Salmon It is made of lotus delicacies.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
