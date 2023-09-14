-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 09:41 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stdfac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `type`, `depart`, `year`, `subject`, `date`, `details`) VALUES
(1, 'Semester Exam', 'BCA', '1 year', 'computer', '2018-02-14', 'test'),
(2, 'Unit Exam', 'MCA', '3 Year', 'java', '2018-02-23', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `fees` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `type`, `depart`, `year`, `details`, `fees`) VALUES
(1, 'Semester Fees', 'BCA', '1 year', '1 semester', '10000'),
(2, 'Exam Fees', 'MCA', '3 Year', 'lab exam', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `regno` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `m1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `m2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `m3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `m4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `m5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `m6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`regno`, `s1`, `m1`, `s2`, `m2`, `s3`, `m3`, `s4`, `m4`, `s5`, `m5`, `s6`, `m6`) VALUES
('3333', 'ttt', '60', 'dd', '44', 'dd', '55', 'ff', '66', 'ww', '44', 'ee', '22');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `notification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `depart`, `year`, `notification`) VALUES
(1, 'BCA', '1 year', ''),
(2, 'MCA', '1 year', 'test'),
(3, 'MCA', '3 Year', 'Review Date');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `guide` varchar(50) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `depart`, `year`, `name`, `regno`, `title`, `domain`, `guide`, `mark`, `attendance`) VALUES
(1, 'MCA', '3 year', 'sundar', 'reg002', '1st review', 'Cloud', 'sundar', '50', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `depart`, `pnumber`, `email`, `qualification`, `address`, `uname`, `password`) VALUES
(1, 'sundar', 'male', 'BCA', '9976322008', 'sundarv06@gmail.com', 'bbbb', 'trichy', 'sundar', '123'),
(2, 'PRIYA', 'female', 'MCA', '9976388888', 'sundarv06@gmail.com', 'mca', 'trichy', 'p123', 'p123');

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

CREATE TABLE `ttable` (
  `id` int(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`id`, `day`, `dept`, `year`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'monday', 'MCA', '3 year', 'asdas', 'dasd', 'asdas', 'dasd', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `type`, `depart`, `year`, `subject`, `fname`) VALUES
(5, 'Question Paper', 'BCA', '1 year', 'tt', 'qrbank.sql'),
(6, 'Syllabus', 'MCA', '3 Year', 'java', 'code.docx');
