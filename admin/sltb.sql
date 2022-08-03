-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2020 at 12:57 PM
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
-- Database: `sltb`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_booking`
--

DROP TABLE IF EXISTS `b_booking`;
CREATE TABLE IF NOT EXISTS `b_booking` (
  `p_name` varchar(255) NOT NULL,
  `p_mobile` int(11) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_buses`
--

DROP TABLE IF EXISTS `b_buses`;
CREATE TABLE IF NOT EXISTS `b_buses` (
  `availbility` varchar(255) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_ID` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roots`
--

DROP TABLE IF EXISTS `roots`;
CREATE TABLE IF NOT EXISTS `roots` (
  `root_ID` varchar(255) NOT NULL,
  `Godagama` int(11) NOT NULL,
  `Palatuwa` int(11) NOT NULL,
  `Malimbada` int(11) NOT NULL,
  `Kirimatimulla` int(11) NOT NULL,
  `Telijjawila` int(11) NOT NULL,
  `Dampalle` int(11) NOT NULL,
  `Paraduwa` int(11) NOT NULL,
  `Akurassa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg`
--

DROP TABLE IF EXISTS `stu_reg`;
CREATE TABLE IF NOT EXISTS `stu_reg` (
  `sid` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `school` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `root_no` varchar(255) NOT NULL,
  `issued_data` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
