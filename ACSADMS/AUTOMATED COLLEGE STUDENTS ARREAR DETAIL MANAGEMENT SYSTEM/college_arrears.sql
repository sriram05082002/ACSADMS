-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2022 at 01:23 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_arrears`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `arrear`
--

CREATE TABLE `arrear` (
  `reg` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrear`
--

INSERT INTO `arrear` (`reg`, `dept`, `no`, `sub`, `amnt`, `status`) VALUES
('UG1902', 'Bsc phy', '1', 'maths', '200', 'paid'),
('UG1901', 'Bsc cs', '2', 'maths,science', '400', 'paid'),
('UG1906', 'Bsc cs', '3', 'maths,science,physics', '600', 'paid'),
('UG1905', 'Bsc phy', '2', 'english,french', '400', 'paid'),
('UG19010', 'Bsc math', '2', 'Hostel timing', '600', 'paid'),
('UG1907', 'Bca', '2', 'maths,science', '400', 'paid'),
('UG19012', 'Bsc che', '3', 'maths,science,physics', '600', 'paid'),
('UG1901', 'Bsc cs', '2', 'maths,science', '400', 'paid'),
('UG19014', 'Bsc math', '1', 'java', '200', 'paid'),
('UG1907', 'Bca', '2', 'maths,science', '400', 'paid'),
('UG19012', 'Bsc che', '', '', '', ''),
('UG19018', 'Bsc cs', '2', 'cs,As', '400', ''),
('UG19019', 'Bsc cs', '3', 'Digital Electronics, Mathematics, English ', '600', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept`) VALUES
('Bsc cs'),
('Bsc che'),
('Bsc phy'),
('Bsc math'),
('Bca'),
('commerce'),
('BA');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(10) NOT NULL auto_increment,
  `regno` varchar(100) NOT NULL,
  `marksheets` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `regno`, `marksheets`, `status`) VALUES
(1, 'UG19018', '1.sql', '2'),
(2, 'UG19019', '1.sql', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `sname` varchar(20) NOT NULL,
  `id` int(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `reg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`sname`, `id`, `gender`, `dob`, `dept`, `year`, `reg`) VALUES
('prasanth', 1, 'male', '23-03-1999', 'Bsc cs', '3rd year', 'UG1901'),
('vinayak', 2, 'male', '23-03-1999', 'Bsc phy', '3rd year', 'UG1902'),
('kalai', 3, 'female', '23-03-1999', 'BA', '3rd year', 'UG1903'),
('krish', 4, 'male', '23-03-1999', 'Bsc math', '3rd year', 'UG1904'),
('ram', 5, 'male', '23-03-1999', 'Bsc phy', '3rd year', 'UG1905'),
('sekar', 6, 'male', '23-03-1999', 'Bsc cs', '3rd year', 'UG1906'),
('arun', 7, 'male', '23-03-1999', 'Bca', '3rd year', 'UG1907'),
('jay', 8, 'male', '23-03-1999', 'commerce', '3rd year', 'UG1908'),
('shakthi', 9, 'male', '23-03-1999', 'Bsc phy', '3rd year', 'UG1909'),
('velmurugan', 10, 'male', '23-03-1999', 'Bsc math', '3rd year', 'UG19010'),
('selvam', 11, 'male', '23-03-1999', 'Bsc cs', '3rd year', 'UG19011'),
('dinesh', 12, 'male', '23-03-1999', 'Bsc che', '3rd year', 'UG19012'),
('admin', 13, 'male', '23-03-1999', 'Bsc che', '2019', 'UG19013'),
('vinoth', 14, 'male', '23-03-1999', 'Bsc math', '2019', 'UG19014'),
('ram', 15, 'male', '23-03-1999', 'Bsc phy', '2019', 'UG19015'),
('admin', 16, 'female', '23-03-1999', 'commerce', '2019', 'UG19016'),
('raman', 17, 'male', '23-03-1999', 'BA', '2019', 'UG19017'),
('Sankar', 18, 'male', '11-11-2000', 'Bsc cs', '1st year', 'UG19018'),
('Jhon', 19, 'male', '12-10-2001', 'Bsc cs', '1st year', 'UG19019');
