-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 02:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayum`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SURYA` ()  SELECT * FROM data$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `adminpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `adminpassword`) VALUES
(0, 'surya@gmail.com', '123'),
(1, 'surya', '123'),
(3, 'SURYA', '123'),
(4, 'god', 'god');

-- --------------------------------------------------------

--
-- Table structure for table `backup_table`
--

CREATE TABLE `backup_table` (
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_table`
--

INSERT INTO `backup_table` (`subject_code`, `subject_name`) VALUES
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`subject_code`, `subject_name`) VALUES
('15CS51', 'DBMS'),
('15CS52', 'CN');

--
-- Triggers `data`
--
DELIMITER $$
CREATE TRIGGER `backup` AFTER INSERT ON `data` FOR EACH ROW INSERT INTO backup_table VALUES(subject_code,subject_name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `subject_code` varchar(20) NOT NULL,
  `m1` varchar(40) NOT NULL,
  `m2` varchar(40) NOT NULL,
  `m3` varchar(40) NOT NULL,
  `m4` varchar(40) NOT NULL,
  `m5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`subject_code`, `m1`, `m2`, `m3`, `m4`, `m5`) VALUES
('15CS51', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3'),
('15CS52', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3');

-- --------------------------------------------------------

--
-- Table structure for table `other_resources`
--

CREATE TABLE `other_resources` (
  `subject_code` varchar(20) NOT NULL,
  `video` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_resources`
--

INSERT INTO `other_resources` (`subject_code`, `video`) VALUES
('15CS51', 'https://www.youtube.com/'),
('15CS52', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

CREATE TABLE `question_papers` (
  `subject_code` varchar(20) NOT NULL,
  `june2018` varchar(40) NOT NULL,
  `jan2018` varchar(40) NOT NULL,
  `june2017` varchar(40) NOT NULL,
  `jan2017` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_papers`
--

INSERT INTO `question_papers` (`subject_code`, `june2018`, `jan2018`, `june2017`, `jan2017`) VALUES
('15CS51', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3'),
('15CS52', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3', 'https://drive.google.com/file/d/0BzfpGB3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `backup_table`
--
ALTER TABLE `backup_table`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`subject_code`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `other_resources`
--
ALTER TABLE `other_resources`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `question_papers`
--
ALTER TABLE `question_papers`
  ADD PRIMARY KEY (`subject_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `data` (`subject_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_resources`
--
ALTER TABLE `other_resources`
  ADD CONSTRAINT `other_resources_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `data` (`subject_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_papers`
--
ALTER TABLE `question_papers`
  ADD CONSTRAINT `question_papers_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `data` (`subject_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
