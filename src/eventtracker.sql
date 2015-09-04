-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2015 at 03:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventtracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `org_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `event_name` varchar(30) DEFAULT NULL,
  `event_date` varchar(30) DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_venue` varchar(100) DEFAULT NULL,
  `event_detail` varchar(500) DEFAULT NULL,
  `event_ispopular` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  KEY `org_id` (`org_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`org_id`, `category_id`, `event_id`, `event_name`, `event_date`, `event_time`, `event_venue`, `event_detail`, `event_ispopular`) VALUES
(NULL, NULL, 0, 'blood donation', '2015-09-09', '12:59:00', 'sifal', 'blood jaodfaojasjfa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `orgname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_role` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `orgname`, `email`, `password`, `user_role`, `user_id`) VALUES
('Sameer', 'Shrestha', NULL, 'nicksamie@gmail.com', 'aaa', 'normaluser', 1),
(NULL, NULL, 'ddd ', 'abc@gmail.com', 'aaa', 'organizer', 2),
('admin', 'admin', NULL, 'admin@admin.com', 'admin', 'admin', 3),
(NULL, NULL, 'Leaffrog ', 'leaffrog@gmail.com', 'aaa', 'organizer', 4),
(NULL, NULL, 'Leaffrog ', 'leaffrog@gmail.com', 'aaa', 'organizer', 5),
(NULL, NULL, 'Deerwalk', 'leaffrog@gmail.com', 'aaa', 'organizer', 6),
(NULL, NULL, 'adfadf', 'deer@d.com', 'aaa', 'organizer', 7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
