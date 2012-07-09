-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2012 at 10:10 PM
-- Server version: 5.0.24
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lull_a_buy_db`
--
CREATE DATABASE `lull_a_buy_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lull_a_buy_db`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `acc_id` varchar(100) NOT NULL,
  `user_ID` int(11) NOT NULL default '0',
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` int(11) NOT NULL,
  `civil_states` int(11) NOT NULL,
  `home_name` varchar(100) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(30) NOT NULL,
  `home_nu` int(10) default NULL,
  `mobile_nu` int(10) default NULL,
  PRIMARY KEY  (`acc_id`),
  KEY `FK_account_1` (`user_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `user_ID`, `first_name`, `last_name`, `gender`, `civil_states`, `home_name`, `street`, `city`, `district`, `home_nu`, `mobile_nu`) VALUES
('user1319183783', 17, 'Saman', 'Athukorala', 0, 0, '12', 'Church Rd', 'Hakmana', 'Mathara', 0, 717826318),
('admin1319180542', 16, 'Lahiru', 'Jayaratne', 0, 1, '56', 'Main Street', 'Kuruwita', 'Ratnapura', 452229536, 783586755),
('kamal841319388972', 18, 'Kamal', 'Fernando', 0, 0, '34', 'Elm Street', 'Dambulla', 'Mathale', 0, 723456789),
('fa1334902709', 19, 'sas', 'asa', 0, 1, 'asda', 'dsd', 'saa', 'Colombo', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL auto_increment,
  `brand_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Earth''s Best'),
(2, 'Plum Organics'),
(3, 'Rubies'),
(4, 'Disguies'),
(5, 'Carter''s'),
(6, 'Zutano'),
(7, 'Mega Bloks'),
(8, 'kettler'),
(9, 'VTech'),
(10, 'KidCo'),
(11, 'Munchkin'),
(12, 'Fisher Price'),
(13, 'Haba'),
(14, 'Ravensburger');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(11) NOT NULL auto_increment,
  `ses_id` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL default '0',
  `quantity` int(11) NOT NULL,
  PRIMARY KEY  (`cid`),
  KEY `FK_cart_1` USING BTREE (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL auto_increment,
  `cat_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(2, 'Garments'),
(1, 'Food'),
(3, 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `dis_ID` int(11) NOT NULL auto_increment,
  `dis_name` varchar(50) NOT NULL,
  `del_charge` int(11) NOT NULL,
  PRIMARY KEY  (`dis_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`dis_ID`, `dis_name`, `del_charge`) VALUES
(1, 'Ampara', 480),
(2, 'Anuradapura', 450),
(3, 'Badulla', 320),
(4, 'Batticaloa', 480),
(5, 'Galle', 280),
(6, 'Gampaha', 100),
(7, 'Hambanthota', 300),
(8, 'Jaffna', 780),
(9, 'Kaluthara', 100),
(10, 'Kandy', 230),
(11, 'Kegalle', 190),
(12, 'Kilinochchi', 710),
(13, 'Kurunagala', 300),
(14, 'Mannar', 580),
(15, 'Mathale', 240),
(16, 'Mathara', 290),
(17, 'Monaragala', 340),
(18, 'Mulathivu', 710),
(19, 'Nuwara Eliya', 230),
(20, 'Polonnaruwa', 420),
(21, 'Puttalam', 320),
(22, 'Ratnapura', 180),
(23, 'Trincomalee', 480),
(24, 'Vavuniya', 580),
(25, 'Colombo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL auto_increment,
  `pname` varchar(255) NOT NULL default '',
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `in_stock` int(11) NOT NULL,
  `price` double NOT NULL default '0',
  PRIMARY KEY  (`pid`),
  KEY `FK_products_1` (`brand_id`),
  KEY `FK_products_2` (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `brand_id`, `cat_id`, `image_path`, `description`, `in_stock`, `price`) VALUES
(1, 'pk - 4oz - 12 pk', 1, 1, 'images/products/baby food/eb-001.jpg', 'Food Variety', 186, 1206),
(4, 'pk - 4oz - 12pk', 1, 1, 'images/products/baby food/eb-002.jpg', 'Vegetable Variety', 189, 1206),
(2, 'pk - 4oz - 12 pk', 1, 1, 'images/products/baby food/eb-003.jpg', 'Dinner Variety', 193, 1206),
(5, '2.5 oz - 12 pk', 1, 1, 'images/products/baby food/eb-004.jpg', 'Starter Kit Vegetable', 193, 910),
(6, '2.5 oz - 12 pk', 1, 1, 'images/products/baby food/eb-005.jpg', 'Starter Kit Fruit', 194, 910),
(3, ' 6 pk', 2, 1, 'images/products/baby food/wq-028.jpg', 'Blends - Peach, Apricot, and Banana', 188, 910),
(7, '8 oz', 2, 1, 'images/products/baby food/eb-025.jpg', 'Rice Cereal', 193, 385),
(10, 'Alien kit', 4, 2, 'images/products/baby food/ws-009_med2a.jpg', 'Disney Pixar Toy Story Alien ', 193, 2400),
(11, 'Pumpkin ', 3, 2, 'images/products/baby food/vz-076_med2a.jpg', 'Pumpkin Bunting ', 144, 3200),
(12, 'Princess ', 3, 2, 'images/products/baby food/vz-061_med2a.jpg', 'Princess Leia ', 295, 2300),
(13, 'Bib ', 5, 2, 'images/products/baby food/ca-12100_med2a.jpg', 'Bib - My First Halloween', 84, 600),
(14, '3 Pack Teething Bibs ', 5, 2, 'images/products/baby food/ca-13847_med2a.jpg', '3 Pack Teething Bibs - Mommy Loves Me', 55, 1000),
(15, 'Jumpsuit ', 5, 2, 'images/products/baby food/ca-13198_med2a.jpg', 'Jumpsuit - Floral Owl', 45, 990.9),
(16, 'Piccadilly Cars ', 6, 2, 'images/products/baby food/zt-2072_med2a.jpg', 'Piccadilly Cars Coverall', 65, 2400),
(17, 'Moonflower ', 6, 2, 'images/products/baby food/zt-2069_med2a.jpg', 'Moonflower Coverall', 80, 2400),
(18, 'Cute & Comfy Combo ', 5, 2, 'images/products/baby food/ca-11612_med2a.jpg', 'Cute & Comfy Combo 2-Piece Set - Auntie Loves Me', 245, 950),
(19, 'Thomas & Bulstrode', 12, 3, 'images/products/baby food/fs-483_med2a.jpg', 'Thomas & Bulstrode Bath Buddies', 69, 950),
(20, 'Bath Storage', 10, 3, 'images/products/baby food/ko-080_med2a.jpg', 'Bath Storage Basket', 44, 1750),
(21, 'Disco ', 11, 3, 'images/products/baby food/mc-208_med2a.jpg', 'Disco Tub Lights', 54, 700),
(22, 'Caterpillar ', 11, 3, 'images/products/baby food/mc-210_med2a.jpg', 'Caterpillar Spillers', 50, 650),
(23, 'Walk with me', 8, 3, 'images/products/baby food/rf-017_med1a.jpg', 'Walk with me Wagon', 58, 8550),
(24, 'Puzzles-Farm', 13, 3, 'images/products/baby food/ha-119_med2a.jpg', 'Little Hand Puzzles-Farm', 80, 1500),
(25, 'Puzzles-Construction', 13, 3, 'images/products/baby food/ha-120_med2a.jpg', 'Little Hand Puzzles-Construction', 90, 1500),
(26, 'All Engines Floor Puzzle ', 14, 3, 'images/products/baby food/vr-044_med2a.jpg', 'Thomas Calling All Engines Floor Puzzle (24 pc)', 105, 1700),
(27, 'Count! - Numbers 1 to 10', 14, 3, 'images/products/baby food/vr-096_med2a.jpg', 'Ready, Set, Count! - Numbers 1 to 10', 48, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int(11) NOT NULL auto_increment,
  `user_level` int(1) NOT NULL default '2',
  `acc_id` varchar(100) NOT NULL default '0',
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_ID`),
  KEY `FK_users_1` USING BTREE (`acc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_level`, `acc_id`, `username`, `password`) VALUES
(17, 2, 'user1319183783', 'user', '02c75fb22c75b23dc963c7eb91a062cc'),
(16, 1, 'admin1319180542', 'admin', '2061bac208c7bdd2665fbf4b7067e468'),
(18, 2, 'kamal841319388972', 'kamal84', 'bcb759b5b8ab63b06295c7434345d7a5'),
(19, 2, 'fa1334902709', 'fa', '4d6d955ca289f82e3a6e1f52f40108f3');
