-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2017 at 04:01 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `passcode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `passcode`) VALUES
('hod', 'V@rdhaman944');

-- --------------------------------------------------------

--
-- Table structure for table `staffid`
--

CREATE TABLE `staffid` (
  `staffname` varchar(35) DEFAULT NULL,
  `staffnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffid`
--

INSERT INTO `staffid` (`staffname`, `staffnumber`) VALUES
('Dr. N. Samba Shiva Rao', 'VAR123'),
(' Dr. S. Sai Satyanarayana Reddy', 'VAR124'),
('Dr. H. Venkateswara Reddy', 'VAR126'),
('Dr. D. Raman', 'VAR127'),
(' Dr. S. Nageswara Rao', 'VAR128'),
('Dr. Sagar Gujjunoori', 'VAR129'),
('Dr. V. Anandam', 'VAR130');

-- --------------------------------------------------------

--
-- Table structure for table `VAR570`
--

CREATE TABLE `VAR570` (
  `monday` varchar(15) DEFAULT NULL,
  `tuesday` varchar(15) DEFAULT NULL,
  `wednesday` varchar(15) DEFAULT NULL,
  `thursday` varchar(15) DEFAULT NULL,
  `friday` varchar(15) DEFAULT NULL,
  `saturday` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VAR570`
--

INSERT INTO `VAR570` (`monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
('CSE-A (dmdw) 4t', 'IT-A (OST) 3rd ', 'CSE-C(os) 2nd y', 'IT-A (OST) 3rd ', 'CSE-C (gla) 4th', 'CSE-B (dmdw) 4t'),
('FREE', 'CSE-B (dmdw) 4t', 'FREE', 'FREE', 'CSE-C (os) 2nd ', 'CSE-A (project)'),
('CSE-B (library)', 'CSE-C (gla) 4th', 'IT-A (dmdw) 4th', 'CSE-A (gla) 1st', 'IT-A (OST) 3rd ', 'CSE-A (project)'),
('FREE', 'FREE', 'CSE-B(gla) 4th ', 'CSE-B  (library', 'FREE', 'CSE-A (project)'),
('IT-A (dmdw) 4th', 'CSE-C (OS) 2nd ', 'FREE', 'CSE-D (dmdw) 4t', 'CSE-B (library)', 'FREE'),
('FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CSE-D (gla) 2nd');

-- --------------------------------------------------------

--
-- Table structure for table `VAR575`
--

CREATE TABLE `VAR575` (
  `monday` varchar(20) DEFAULT NULL,
  `tuesday` varchar(20) DEFAULT NULL,
  `wednesday` varchar(20) DEFAULT NULL,
  `thursday` varchar(20) DEFAULT NULL,
  `friday` varchar(20) DEFAULT NULL,
  `saturday` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VAR575`
--

INSERT INTO `VAR575` (`monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
('B', 'A', '', 'A', '4', '6'),
('5', '6', '', '5', '', '6'),
('', '', '65', '6', '6', '5'),
('6', '5', '5', '5', '9', ''),
('3', '5', '6', '5', '6', '5'),
('1', '6', 'h', 'yhv', 'k', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `VAR588`
--

CREATE TABLE `VAR588` (
  `monday` varchar(20) DEFAULT NULL,
  `tuesday` varchar(20) DEFAULT NULL,
  `wednesday` varchar(20) DEFAULT NULL,
  `thursday` varchar(20) DEFAULT NULL,
  `friday` varchar(20) DEFAULT NULL,
  `saturday` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VAR588`
--

INSERT INTO `VAR588` (`monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
('CSE-A (dmdw) 4th yr', 'IT-A (OST) 3rd yr', 'CSE-C(os) 2nd yr', 'IT-A (OST) 3rd yr', 'CSE-C (gla) 4thyr', 'CSE-B (dmdw) 4th yr'),
('FREE', 'CSE-B (dmdw) 4th yr', 'FREE', 'FREE', 'CSE-C (os) 2nd yr ', 'CSE-A (project) 4th '),
('CSE-B (library)  3rd', 'CSE-C (gla) 4thyr', 'IT-A (dmdw) 4th yr', 'CSE-A (gla) 1st yr', 'IT-A (OST) 3rd yr', 'CSE-A (project) 4th '),
('FREE', 'FREE', 'CSE-B(gla) 4th yr', 'CSE-B  (library) 2nd', 'FREE', 'CSE-A (project) 4th '),
('IT-A (dmdw) 4th yr', 'CSE-C (OS) 2nd yr', 'FREE', 'CSE-D (dmdw) 4th yr', 'CSE-B (library)  3rd', 'FREE'),
('FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CSE-D (gla) 2nd yr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `staffid`
--
ALTER TABLE `staffid`
  ADD PRIMARY KEY (`staffnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
