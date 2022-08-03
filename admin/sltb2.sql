-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2020 at 04:08 AM
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
-- Database: `sltb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `em`
--

DROP TABLE IF EXISTS `em`;
CREATE TABLE IF NOT EXISTS `em` (
  `emp_ID` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

DROP TABLE IF EXISTS `receipt`;
CREATE TABLE IF NOT EXISTS `receipt` (
  `rid` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_mobile` int(11) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rootcharges`
--

DROP TABLE IF EXISTS `rootcharges`;
CREATE TABLE IF NOT EXISTS `rootcharges` (
  `charge_ID` varchar(255) NOT NULL,
  `root_no` varchar(255) NOT NULL,
  `root_start` varchar(255) NOT NULL,
  `monthly_price` int(11) NOT NULL,
  PRIMARY KEY (`charge_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `stu_ID` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `school` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `root_no` varchar(255) NOT NULL,
  `issued_date` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

DROP TABLE IF EXISTS `times`;
CREATE TABLE IF NOT EXISTS `times` (
  `times_id` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`times_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
