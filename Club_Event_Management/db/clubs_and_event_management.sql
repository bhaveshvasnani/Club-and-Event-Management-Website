-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2016 at 12:41 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clubs_and_event_management`
--
CREATE DATABASE IF NOT EXISTS `clubs_and_event_management` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clubs_and_event_management`;

-- --------------------------------------------------------

--
-- Table structure for table `brings`
--

CREATE TABLE IF NOT EXISTS `brings` (
  `Student_ID` int(10) NOT NULL,
  `Sponsor_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_details`
--

CREATE TABLE IF NOT EXISTS `club_details` (
  `Club_ID` int(10) NOT NULL,
  `Club_name` varchar(20) NOT NULL,
  `Foundation_Date` date NOT NULL,
  PRIMARY KEY (`Club_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_management`
--

CREATE TABLE IF NOT EXISTS `club_management` (
  `Club_ID` int(10) NOT NULL,
  `Faculty_ID` int(10) NOT NULL,
  `President_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE IF NOT EXISTS `event_details` (
  `Event_ID` int(10) NOT NULL,
  `Event_name` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_indulged`
--

CREATE TABLE IF NOT EXISTS `faculty_indulged` (
  `Faculty_ID` int(10) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Mid_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Ph_number` int(10) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `School_ID` int(10) NOT NULL,
  PRIMARY KEY (`Faculty_ID`),
  UNIQUE KEY `Ph_number` (`Ph_number`,`Email_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE IF NOT EXISTS `has` (
  `Team_ID` int(10) NOT NULL,
  `Club_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE IF NOT EXISTS `host` (
  `Event_ID` int(10) NOT NULL,
  `Venue_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE IF NOT EXISTS `manages` (
  `Student_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizes`
--

CREATE TABLE IF NOT EXISTS `organizes` (
  `Event_ID` int(10) NOT NULL,
  `Club_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `Student_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_ID` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price` int(5) NOT NULL,
  `Discount(%)` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `School_ID` int(10) NOT NULL,
  `School_name` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  PRIMARY KEY (`School_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsored`
--

CREATE TABLE IF NOT EXISTS `sponsored` (
  `Sponsor_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_contact`
--

CREATE TABLE IF NOT EXISTS `sponsor_contact` (
  `Sponsor_ID` int(10) NOT NULL,
  `First_name` int(20) NOT NULL,
  `Mid_name` int(20) NOT NULL,
  `Last_name` int(20) NOT NULL,
  `Ph_number` int(10) NOT NULL,
  PRIMARY KEY (`Sponsor_ID`),
  UNIQUE KEY `Ph_number` (`Ph_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Student_ID` int(10) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Mid_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Ph_number` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  PRIMARY KEY (`Student_ID`),
  UNIQUE KEY `Ph_number` (`Ph_number`,`Email_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_ID` int(10) NOT NULL,
  `First_name` int(20) NOT NULL,
  `Mid_name` int(20) NOT NULL,
  `Last_name` int(20) NOT NULL,
  `Ph_number` int(10) NOT NULL,
  `Address` int(50) NOT NULL,
  PRIMARY KEY (`Supplier_ID`),
  UNIQUE KEY `Ph_number` (`Ph_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE IF NOT EXISTS `supplies` (
  `Supplier_ID` int(10) NOT NULL,
  `Venue_ID` int(10) NOT NULL,
  `Product_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE IF NOT EXISTS `team_details` (
  `Team_ID` int(10) NOT NULL,
  `Ph_number` int(10) NOT NULL,
  `Team_name` int(20) NOT NULL,
  PRIMARY KEY (`Team_ID`),
  UNIQUE KEY `Ph_number` (`Ph_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `usertype`) VALUES
(1, 'rakshit', 'h123', 'admin'),
(2, 'rka', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `Venue_ID` int(10) NOT NULL,
  `Venue_location` varchar(50) NOT NULL,
  PRIMARY KEY (`Venue_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `works_for`
--

CREATE TABLE IF NOT EXISTS `works_for` (
  `Student_ID` int(10) NOT NULL,
  `Team_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
