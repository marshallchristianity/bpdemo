-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2014 at 07:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bigperlt_bpearl`
--

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `stud_faculty` varchar(15) DEFAULT NULL,
  `sem` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `college_name` varchar(200) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `sex`, `stud_faculty`, `sem`, `phone`, `email`, `college_name`, `course`, `duration`, `created_date`, `updated_date`) VALUES
(7, 'vijethal', 'male', 'student', '6', '78877878', 'lvijetha90@gmai', 'DR.AIT', 'BE', '4', '0000-00-00', '0000-00-00'),
(8, 'ghghgh', 'male', 'student', '6', '78788', 'admin@discountb', 'gh', 'h', 'bh', '2014-08-13', '2014-08-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
