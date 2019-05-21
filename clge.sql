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
-- Database: `clge`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `event_id` varchar(100) NOT NULL,
  `b_venue` varchar(100) NOT NULL DEFAULT 'no',
  `b_quantity` varchar(100) NOT NULL DEFAULT 'no',
  `b_time` varchar(100) NOT NULL DEFAULT 'no',
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`event_id`, `b_venue`, `b_quantity`, `b_time`, `approve`) VALUES
('35336', 'seminar hall', '123', '03:04', 'no'),
('82306', 'seminar hall', '67876', '03:45', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `event_id` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`event_id`, `c_name`, `c_no`) VALUES
('11207', 'Mrs.Revathi', '9003398442'),
('35336', 'Mrs.Revathi', '9003344984'),
('82306', 'Mrs.Famitha', '9003398442');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `event_id` varchar(100) NOT NULL,
  `d_venue` varchar(1001) NOT NULL DEFAULT 'no',
  `d_quantity` varchar(100) NOT NULL DEFAULT 'no',
  `d_time` varchar(100) NOT NULL DEFAULT 'no',
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engagement`
--

CREATE TABLE `engagement` (
  `event_id` varchar(100) NOT NULL,
  `e_pre` varchar(100) NOT NULL,
  `e_on` varchar(100) NOT NULL,
  `e_post` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engagement`
--

INSERT INTO `engagement` (`event_id`, `e_pre`, `e_on`, `e_post`, `approve`) VALUES
('35336', 'no', 'no', 'no', 'no'),
('82306', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_no` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL DEFAULT 'no',
  `mapprove` varchar(100) NOT NULL DEFAULT 'no',
  `tapprove` varchar(100) NOT NULL DEFAULT 'no',
  `papprove` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `dept`, `name`, `club_name`, `date`, `time`, `venue`, `c_name`, `c_no`, `approve`, `mapprove`, `tapprove`, `papprove`) VALUES
(11207, 'CSE', 'Workshop', 'sss', '01/22/2019', '23:02', '3', 'Mrs.Revathi', '9003398442', 'no', 'no', 'no', 'no'),
(35336, 'CSE', 'Guest Lecture', 'ggg', '01/26/2019', '03:04', '3', 'Mrs.Revathi', '9003344984', 'yes', 'no', 'no', 'yes'),
(82306, 'IT', 'Industrial Expert Interaction', 'Mobile app', '01/16/2019', '23:04', '3', 'Mrs.Famitha', '9003398442', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `event_id` varchar(100) NOT NULL,
  `fb_pre` varchar(100) NOT NULL,
  `fb_on` varchar(100) NOT NULL,
  `fb_post` varchar(100) NOT NULL,
  `papprove` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`event_id`, `fb_pre`, `fb_on`, `fb_post`, `papprove`) VALUES
('35336', 'yes', 'yes', 'yes', 'yes'),
('82306', 'yes', 'yes', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `event_id` varchar(100) NOT NULL,
  `nog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`event_id`, `nog`) VALUES
('11207', '3'),
('35336', '5'),
('82306', '1');

-- --------------------------------------------------------

--
-- Table structure for table `g_detail`
--

CREATE TABLE `g_detail` (
  `event_id` varchar(100) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `desig` varchar(100) NOT NULL,
  `o_addr` varchar(100) NOT NULL,
  `g_no` varchar(100) NOT NULL,
  `g_email` varchar(100) NOT NULL,
  `g_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_detail`
--

INSERT INTO `g_detail` (`event_id`, `g_name`, `desig`, `o_addr`, `g_no`, `g_email`, `g_profile`) VALUES
('11207', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa'),
('11207', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb'),
('11207', 'ccc', 'ccc', 'ccc', 'ccc', 'ccc', 'ccc'),
('35336', '111', '111', '111', '111', '111', '111'),
('35336', '222', '222', '222', '222', '222', '222'),
('35336', '333', '333', '333', '333', '333', '333'),
('35336', '444', '444', '444', '444', '444', '444'),
('35336', '555', '555', '555', '555', '555', '555'),
('82306', 'mmm', 'mmm', 'mmm', 'mmm', 'mmm', 'mmm');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `event_id` varchar(100) NOT NULL,
  `l_venue` varchar(100) NOT NULL DEFAULT 'no',
  `l_quantity` varchar(100) NOT NULL DEFAULT 'no',
  `l_time` varchar(100) NOT NULL DEFAULT 'no',
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `event_id` varchar(100) NOT NULL,
  `m_pre` varchar(100) NOT NULL,
  `m_on` varchar(100) NOT NULL,
  `m_post` varchar(100) NOT NULL,
  `papprove` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`event_id`, `m_pre`, `m_on`, `m_post`, `papprove`) VALUES
('35336', 'no', 'no', 'no', 'yes'),
('82306', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `event_id` varchar(100) NOT NULL,
  `breakfast` varchar(100) NOT NULL,
  `lunch` varchar(100) NOT NULL,
  `dinner` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`event_id`, `breakfast`, `lunch`, `dinner`, `approve`) VALUES
('35336', 'yes', 'no', 'no', 'no'),
('82306', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `momento`
--

CREATE TABLE `momento` (
  `event_id` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `momento`
--

INSERT INTO `momento` (`event_id`, `quantity`, `cost`, `approve`) VALUES
('35336', '4', '123', 'no'),
('82306', '3', '39800', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `refreshment`
--

CREATE TABLE `refreshment` (
  `event_id` varchar(100) NOT NULL,
  `r_venue` varchar(100) NOT NULL DEFAULT 'no',
  `r_quantity` varchar(100) NOT NULL DEFAULT 'no',
  `r_time` varchar(100) NOT NULL DEFAULT 'no',
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `event_id` varchar(100) NOT NULL,
  `pick` varchar(100) NOT NULL,
  `drop` varchar(100) NOT NULL,
  `t_pick` varchar(100) NOT NULL,
  `t_drop` varchar(100) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `g_no` varchar(100) NOT NULL,
  `g_email` varchar(100) NOT NULL,
  `incharge` varchar(100) NOT NULL,
  `i_no` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`event_id`, `pick`, `drop`, `t_pick`, `t_drop`, `g_name`, `g_no`, `g_email`, `incharge`, `i_no`, `approve`) VALUES
('82306', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp`
--

CREATE TABLE `whatsapp` (
  `event_id` varchar(100) NOT NULL,
  `wa_pre` varchar(100) NOT NULL,
  `wa_on` varchar(100) NOT NULL,
  `wa_post` varchar(100) NOT NULL,
  `papprove` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatsapp`
--

INSERT INTO `whatsapp` (`event_id`, `wa_pre`, `wa_on`, `wa_post`, `papprove`) VALUES
('35336', 'yes', 'no', 'no', 'yes'),
('82306', 'no', 'yes', 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
