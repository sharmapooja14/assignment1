-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2019 at 11:00 AM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pass`) VALUES
(1, 'pooja', '123'),
(2, 'puja', '1234'),
(3, 'ahan', '123'),
(4, 'ahan', '123'),
(5, 'aaa', '123'),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

DROP TABLE IF EXISTS `registration_form`;
CREATE TABLE IF NOT EXISTS `registration_form` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `fname`, `lname`, `gender`, `pic`, `dob`, `resume`, `address`, `country`, `city`, `hobbies`) VALUES
(1, 'pooja', 'sharma', 'female', 'image.jpg', '14/09/91', 'abc.pdf', 'frogner vg', 'norway', 'skien', 'cooking'),
(2, 'Amarjeet', 'kaur', 'female', 'Array', '2019-10-16', 'Array', 'dsdfsdgd               \r\n                ', 'INDIA', 'Phagwara', 'cooking'),
(5, 'aman', 'deep', 'male', 'Array', '2019-11-20', 'Array', '   jghjhjhg            \r\n                ', 'INDIA', '', 'Reading books ,Cooking,Driving'),
(10, 'gdfgdfg', 'fghfghf', 'female', 'image (1).png', '2019-11-05', 'image (1).png', '         gfhgfhgf      \r\n                ', 'INDIA', 'Delhi', 'Driving'),
(7, 'dgdfgbd', 'gfdghf', 'female', 'pic.png', '2019-10-08', 'pic.png', '      gjghjgh         \r\n                ', 'INDIA', 'Delhi', 'Reading books '),
(8, 'aman', 'deep', 'female', 'Meta-data of product.PNG', '2019-10-01', 'Meta-data of product.PNG', ' phg          \r\n                ', 'INDIA', 'Jalandhar', 'Reading books '),
(9, 'Tanu', 'sharma', 'female', 'image (2).png', '2019-11-05', 'image (2).png', '  ldh             \r\n                ', 'INDIA', 'Jalandhar', 'Reading books ,Cooking,Driving'),
(11, 'gdfgdfg', 'fghfghf', 'female', 'image (1).png', '2019-11-05', 'image (1).png', '         gfhgfhgf      \r\n                ', 'INDIA', 'Delhi', 'Driving');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
