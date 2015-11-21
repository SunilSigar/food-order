-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2015 at 04:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydbb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dboytable`
--

CREATE TABLE IF NOT EXISTS `dboytable` (
  `DeliveryBoyPNo` double(10,0) DEFAULT NULL,
  `DeliveryBoyName` varchar(30) DEFAULT NULL,
  `orderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dboytable`
--

INSERT INTO `dboytable` (`DeliveryBoyPNo`, `DeliveryBoyName`, `orderid`) VALUES
(0, 'asd', 0),
(2334, 'sf', 0),
(3333333333, 'asd', 1),
(1400000000, 'f', 17),
(9999999999, 'ram', 18);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `mobileno` double(10,0) DEFAULT NULL,
  `email` text NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `address`, `mobileno`, `email`, `age`) VALUES
('a', '1', '', NULL, '', 0),
('a', '1', '', NULL, '', 0),
('af', '23', 'asdf', 333444444, '', 0),
('a', '1', 's', 5, '', 0),
('a', '1', 'sd', 433, '', 0),
('a34', 'we', 'sadf', 5, '', 0),
('a324$#', 'd', 's', 5, '', 0),
('', '', '', 0, '', 0),
('', '', '', 0, '', 0),
('', '', '', 0, '', 0),
('', '', '', 0, '', 0),
('', '', '', 0, '', 0),
('sd23@@#', '3', 'f', 43, '', 0),
('', '', '', 0, '', 0),
('sd23@@#', '3', 'dsf', 34, '', 0),
('', '', '', 0, '', 0),
('a', 'e', 'sxzc', 34, '', 0),
('sdf', '3', 'sd', 34, '', 0),
('a', '4', 'asd', 34, '', 0),
('a', '4', 'dsf', 5, '', 0),
('', '3', 'f', 4, '', 0),
('df', '3', 'sdf', 43, '', 0),
('ssd', '3', 'f', 4, 'df@f.f', 0),
('df', '2', '2', 34, 'snlbishnoi3@gmail.com', 0),
('a', '3', 'dfa', 234, 'snlbishnoi3@gmail.com', 18),
('sd23@@#', '3', 'Enter Yourdf Current Address', 1400000000, 'snlbishnoi3@gmail.com', 18),
('a', '3', 'Enter Ysour Current Address', 1400000000, 'snlbishnoi3@gmail.com', 18),
('sunil', 'asdf', 'asdf asdf', 1400000000, 'snlbishnoi3@gmail.com', 21);

-- --------------------------------------------------------

--
-- Table structure for table `phptable2`
--

CREATE TABLE IF NOT EXISTS `phptable2` (
  `OrderDetails` varchar(80) DEFAULT NULL,
  `PaymentAmount` varchar(30) DEFAULT NULL,
  `CustomerAddress` varchar(80) DEFAULT NULL,
  `CustomerMobile` double(10,0) DEFAULT NULL,
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `phptable2`
--

INSERT INTO `phptable2` (`OrderDetails`, `PaymentAmount`, `CustomerAddress`, `CustomerMobile`, `orderid`, `email`) VALUES
('asdf', '1234', 'sdf', 9876543222, 1, ''),
('', '', '', 0, 2, ''),
('sdfsadf', '234', 'asdf', 3333333333, 3, ''),
('asdfdsf', '34', 'ASDFg', 1243134, 4, ''),
('asdf', '3124', 'asdf', 3333332222, 5, ''),
('asdf', '324', 'asf', 2333333333, 6, ''),
('s', '3', 'sadf', 2334444444, 7, ''),
('asdf', '234', 'asdf', 234324, 8, ''),
('assadf', '23', 'sd', 333, 9, ''),
('asdf', '34', 'r', 33, 10, ''),
('B+', '34', 'f', 333, 11, ''),
('B+', '43', 'hg', 4, 12, ''),
('A+', '34', 'sad', 54, 13, ''),
('A+', '', 'saf', 23453453, 14, ''),
('A+', '2', 'sad', 24234, 15, ''),
('A+', '1', 'sd', 1400000000, 16, ''),
('B+', '1', 'adw', 1400000000, 17, ''),
('Burger', '5', 'asdf asdf', 1400000000, 18, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
