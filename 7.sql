-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 08:32 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7`
--

-- --------------------------------------------------------

--
-- Table structure for table `act`
--

CREATE TABLE `act` (
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `act1`
--

CREATE TABLE `act1` (
  `aid` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `act1`
--

INSERT INTO `act1` (`aid`, `department`, `year`, `activities`, `date`, `time`) VALUES
(1, 'ece', 2, 'workshop(internal participant)', '2018-01-31', '12:59'),
(2, 'IT', 4, 'fdp(internal participant)', '2018-12-28', '22:01'),
(3, 'ece', 3, 'seminar(external participant)', '2018-12-30', '11:59'),
(4, 'civil', 3, 'seminar(external participant)', '1997-10-29', '12:59'),
(5, 'IT', 2, 'student Meeting with management', '1222-12-12', '00:02'),
(6, 'ece', 2, 'HOD meeting with management', '1222-12-12', '00:12'),
(7, 'IT', 2, 'mentor meeting with management', '1222-12-12', '00:12'),
(8, 'IT', 2, 'mentor meeting with management', '1222-12-12', '00:01'),
(9, 'cse', 1, 'mentor meeting with management', '0004-03-12', '12:33'),
(10, 'cse', 1, 'principal meeting with management', '0004-03-12', '12:23'),
(11, 'ece', 1, 'HOD meeting with management', '0046-03-12', '12:34'),
(12, 'cse', 1, 'HOD meeting with management', '0478-03-12', '12:34'),
(13, 'ece', 3, 'workshop(external participant)', '2017-11-30', '10:58'),
(14, 'ece', 3, 'workshop(external participant)', '2017-11-30', '10:58'),
(15, 'ece', 3, 'workshop(external participant)', '2017-11-30', '10:58'),
(16, 'ece', 3, 'workshop(external participant)', '2017-11-30', '10:58'),
(17, 'biotech', 4, 'fdp(internal participant)', '2016-10-29', '10:57'),
(18, 'biotech', 4, 'seminar(external participant)', '2016-10-28', '21:57'),
(19, 'cse', 1, 'seminar(external participant)', '0002-03-31', '00:12'),
(20, 'IT', 4, 'guest lecture', '2016-10-29', '16:56'),
(21, 'cse', 4, 'workshop(internal participant)', '2018-08-11', '10:30'),
(22, 'cse', 2, 'guest lecture', '2018-08-11', '09:00'),
(23, 'cse', 2, 'guest lecture', '2018-08-11', '09:00'),
(24, 'ece', 3, 'workshop(internal participant)', '2018-12-31', '12:00'),
(25, 'cse', 3, 'workshop(internal participant)', '2018-08-13', '09:00'),
(26, 'cse', 3, 'workshop(internal participant)', '0345-04-23', '03:04');

-- --------------------------------------------------------

--
-- Table structure for table `ca`
--

CREATE TABLE `ca` (
  `cid` int(190) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` int(100) NOT NULL,
  `centralized activities` varchar(40) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ca`
--

INSERT INTO `ca` (`cid`, `department`, `year`, `centralized activities`, `date`, `time`) VALUES
(1, 'cse', 2, '', '0015-12-12', '00:12'),
(2, 'cse', 3, 'edc', '12jan2018', '12-23pm'),
(3, 'ece', 2, 'seminar(internal participant)', '3333-03-01', '17:04'),
(4, 'cse', 1, 'workshop(external participant)', '2018-12-01', '12:23'),
(5, 'eee', 4, 'workshop(internal participant)', '2018-12-31', '12:59'),
(6, 'cse', 3, ' fdp(external participant)', '0012-12-12', '00:12');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hid` int(190) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `meeting scheduled for principal with management` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hid`, `department`, `year`, `meeting scheduled for principal with management`, `date`, `time`) VALUES
(56, 'cse', 3, '', '12jan2018', '12-23pm'),
(57, 'IT', 2, 'HOD meeting with management', '2016-10-29', '22:57'),
(58, 'cse', 2, 'principal meeting with management', '0122-12-12', '00:12'),
(59, 'IT', 3, 'student Meeting with management', '2018-02-14', '03:01');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `hr id` int(99) NOT NULL,
  `name of the hp` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`hr id`, `name of the hp`, `organization`, `date`) VALUES
(12, 'fghj', 'weth', ''),
(13, 'wertyghj', 'dsfgh', ''),
(14, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ind`
--

CREATE TABLE `ind` (
  `iid` int(50) NOT NULL,
  `department` varchar(200) NOT NULL,
  `year` int(20) NOT NULL,
  `number of students` int(20) NOT NULL,
  `organization/concern name` varchar(200) NOT NULL,
  `staff incharge` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind`
--

INSERT INTO `ind` (`iid`, `department`, `year`, `number of students`, `organization/concern name`, `staff incharge`, `time`, `date`) VALUES
(1, 'cse', 3, 4, 'hello', 'hii', '', ''),
(2, 'cse', 3, 4, 'hello', 'hii', '', ''),
(3, 'ece', 2, 8, 'system', 'mohan', '', ''),
(4, 'civil', 2, 7, 'bsnl', 'thambameshaah', '17:06', ''),
(563443, 'cse', 2, 6, 'bsnl', 'famitha', '12-23pm', ''),
(563444, 'cse', 1, 8, 'tyuhdfjhf', 'haritha', '17:06', ''),
(563445, 'cse', 1, 4, 'ryudhhfej', 'hindhu', '18:07', ''),
(563446, 'IT', 3, 99, 'cfgg', 'dff', '00:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `inplant`
--

CREATE TABLE `inplant` (
  `i id` int(123) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `no. of students` int(100) NOT NULL,
  `oraganization` varchar(123) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inplant`
--

INSERT INTO `inplant` (`i id`, `dept`, `no. of students`, `oraganization`, `date`) VALUES
(1, 'cse', 8, '', ''),
(122, 'cse', 12, '', ''),
(123, 'ece', 12, '', ''),
(124, 'cse', 67, 'sowmya', ''),
(125, 'cse', 123, 'rwsafsghj', ''),
(126, 'ece', 12, '123', ''),
(127, 'biotech', 12, 'sowmya', ''),
(128, 'cse', 4, 'ass', ''),
(129, 'cse', 5, 'pec', '');

-- --------------------------------------------------------

--
-- Table structure for table `mis`
--

CREATE TABLE `mis` (
  `ID` int(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `MEETINGS` varchar(100) NOT NULL,
  `YEAR` varchar(100) NOT NULL,
  `DATE` varchar(60) NOT NULL,
  `TIME` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis`
--

INSERT INTO `mis` (`ID`, `DEPARTMENT`, `MEETINGS`, `YEAR`, `DATE`, `TIME`) VALUES
(1, 'eee', 'subject teacher meeting', '2 ', '2017-11-30', '11:59'),
(2, 'eee', 'subject teacher meeting', '2 ', '2017-11-30', '11:59'),
(3, 'civil', 'technical club meeting', '3', '2018-09-29', '10:59'),
(4, 'biotech', 'subject teacher meeting', '2 ', '2018-12-31', '12:59'),
(5, 'cse', ' mini project/project meeting', '4', '2018-01-09', '09:09'),
(6, 'eee', 'class teacher meeting', '2 ', '2018-01-10', '12:59'),
(7, '', '', '', '', ''),
(8, 'cse', 'subject expert meeting', '2 ', '2018-01-01', '12:00'),
(9, 'ece', 'subject expert meeting', '2 ', '31233-02-12', '12:23'),
(10, 'ece', 'class teacher meeting', '3', '2018-12-11', '02:03'),
(11, 'biotech', 'subject expert meeting', '2 ', '2014-02-12', '00:12'),
(12, 'IT', 'ibm', '2 ', '0312-02-12', '12:03'),
(13, 'eee', 'wipro', '1 ', '2018-12-29', '12:58'),
(14, 'biotech', 'infosys', '3', '2018-11-26', '11:57'),
(15, 'eee', 'subject expert meeting', '3', '2018-12-31', '11:59'),
(16, 'biotech', 'subject expert meeting', '4', '2016-09-29', '10:57'),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, 'eee', 'department meeting with hod', '2 ', '0001-12-12', '00:12'),
(22, 'ece', 'hod meeting with students', '2 ', '2019-03-12', '03:04');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `pid` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(170) NOT NULL,
  `placements` varchar(122) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`pid`, `department`, `year`, `placements`, `date`, `time`) VALUES
(1, '', 2, '', '2018-12-31', '12:59'),
(2, '', 2, 'wipro', '2jan1999', '23:12am'),
(3, '', 4, 'ZOHO', '23JAN2018', '23:12am'),
(4, 'ece', 2, 'htc', '0412-03-12', '13:12'),
(5, 'cse', 2, '', '', '19:06'),
(6, 'IT', 1, '', '', '18:16'),
(7, 'IT', 1, '', '', '18:16'),
(8, 'IT', 1, '', '', '18:16'),
(9, 'cse', 3, 'htc', '0022-12-12', '00:12');

-- --------------------------------------------------------

--
-- Table structure for table `satff`
--

CREATE TABLE `satff` (
  `stfid` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `name of the programme` varchar(100) NOT NULL,
  `no of the staff` int(100) NOT NULL,
  `name of staff` varchar(100) NOT NULL,
  `name of oraganisation` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satff`
--

INSERT INTO `satff` (`stfid`, `department`, `year`, `name of the programme`, `no of the staff`, `name of staff`, `name of oraganisation`, `date`, `time`) VALUES
(1, 'jhn', 3, 'sowmya', 4, 'reddy', 'guduru', '27 jan 2018', '23:12am'),
(2, 'ece', 2, '2', 2, '2', '2', '0345-02-12', '12:34'),
(3, 'cse', 1, '3', 3, '3', '3', '4778-03-12', '14:01'),
(4, 'biotech', 2, 'qwertyuj', 2, 'qwrtyuif', 'ertyui', '0005-04-12', '12:34'),
(5, 'biotech', 2, 'qwertyuj', 2, 'qwrtyuif', 'ertyui', '0005-04-12', '12:34'),
(6, 'eee', 3, 'addggg', 2, 'asdfc', 'sdfg', '0002-12-12', '00:12'),
(7, 'IT', 4, 'siofjkkfjha', 6, 'HIUTFH', '30', '2016-10-28', '10:58');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
  `stuid` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `name of the event` varchar(100) NOT NULL,
  `number of student` int(100) NOT NULL,
  `name of organization` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`stuid`, `department`, `year`, `name of the event`, `number of student`, `name of organization`, `date`, `time`) VALUES
(123344, 'cse', 4, 'ooooo', 9, 'gdssgjj', '12jan2018', '12-23pm'),
(123345, 'biotech', 1, 'SOWMYA', 1, '28', '2018-12-31', '12:59'),
(123346, 'IT', 2, 'bhhj', 1, 'ass', '0003-02-12', '00:12');

-- --------------------------------------------------------

--
-- Table structure for table `subnotes`
--

CREATE TABLE `subnotes` (
  `id` int(11) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subnotes`
--

INSERT INTO `subnotes` (`id`, `dept`, `sem`, `sub`) VALUES
(3, 'cse', '3', 'View activities.pdf'),
(4, 'ece', '2', 'ip lab record.doc');

-- --------------------------------------------------------

--
-- Table structure for table `tc`
--

CREATE TABLE `tc` (
  `pid` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `technical club activities` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tc`
--

INSERT INTO `tc` (`pid`, `department`, `year`, `technical club activities`, `date`, `time`) VALUES
(1, 'IT', 1, '', '', ''),
(2, 'cse', 3, 'intenship', '2jan 2018', '12-23pm'),
(3, 'ece', 2, '', '0031-02-12', '12:23'),
(4, 'IT', 2, 'workshop', '0234-02-12', '12:33'),
(5, 'IT', 1, 'workshop', '0012-12-12', '00:12'),
(6, 'cse', 1, 'workshop', '0043-04-23', '23:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(40) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `pwd`, `role`) VALUES
('mohan', 'mohan', 'admin'),
('sow', 'sow', 'student'),
('hodcse', 'hodcse', 'hod'),
('swarna', 'swarna', 'staff'),
('mess', 'mess', 'mess'),
('transport', 'transport', 'transport'),
('principal', 'principal', 'principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `act`
--
ALTER TABLE `act`
  ADD PRIMARY KEY (`department`);

--
-- Indexes for table `act1`
--
ALTER TABLE `act1`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `ca`
--
ALTER TABLE `ca`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`hr id`);

--
-- Indexes for table `ind`
--
ALTER TABLE `ind`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `inplant`
--
ALTER TABLE `inplant`
  ADD PRIMARY KEY (`i id`);

--
-- Indexes for table `mis`
--
ALTER TABLE `mis`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `satff`
--
ALTER TABLE `satff`
  ADD PRIMARY KEY (`stfid`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`stuid`);

--
-- Indexes for table `subnotes`
--
ALTER TABLE `subnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc`
--
ALTER TABLE `tc`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `act1`
--
ALTER TABLE `act1`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `ca`
--
ALTER TABLE `ca`
  MODIFY `cid` int(190) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hid` int(190) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `hr id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ind`
--
ALTER TABLE `ind`
  MODIFY `iid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563447;
--
-- AUTO_INCREMENT for table `inplant`
--
ALTER TABLE `inplant`
  MODIFY `i id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `mis`
--
ALTER TABLE `mis`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `satff`
--
ALTER TABLE `satff`
  MODIFY `stfid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `stuid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123347;
--
-- AUTO_INCREMENT for table `subnotes`
--
ALTER TABLE `subnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tc`
--
ALTER TABLE `tc`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
