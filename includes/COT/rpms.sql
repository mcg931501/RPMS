-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 07:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mtindicator_items_tbl`
--

CREATE TABLE `mtindicator_items_tbl` (
  `indicator_items_id` int(20) NOT NULL,
  `indicator_id` int(20) NOT NULL,
  `indicator_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mtindicator_tbl`
--

CREATE TABLE `mtindicator_tbl` (
  `indicator_id` int(11) NOT NULL,
  `indicator_no` int(20) NOT NULL,
  `indicator_name` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtindicator_tbl`
--

INSERT INTO `mtindicator_tbl` (`indicator_id`, `indicator_no`, `indicator_name`) VALUES
(1, 1, 'Apply knowledge of content within and across curriculum teaching areas.'),
(2, 2, 'Apply a range of teaching strategies to develop critical and creative thinking, as well as other higher-order thinking skills'),
(3, 3, 'Manage classroom structure to engage learners, individually or in groups, in meaningful exploration, discovery and hands-on activities within a range of physical learning environments'),
(4, 4, 'Manage learner behavior constructively by applying positive and non-violent discipline to ensure learning-focused environments'),
(6, 5, 'Plan, manage and implement developmentally sequenced teaching and learning processes to meet curriculum requirements and varied teaching contexts');

-- --------------------------------------------------------

--
-- Table structure for table `tblesatguide`
--

CREATE TABLE `tblesatguide` (
  `eguide_id` int(11) NOT NULL,
  `eguide_text1` text NOT NULL,
  `eguide_text2` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblesatguide`
--

INSERT INTO `tblesatguide` (`eguide_id`, `eguide_text1`, `eguide_text2`, `userid`) VALUES
(25, 'sdfdsf', 'sdfdf', 0),
(26, 'sdsdsd', 'sdsd', 0),
(27, 'tst', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tindicator_items_tbl`
--

CREATE TABLE `tindicator_items_tbl` (
  `indicator_items_id` int(20) NOT NULL,
  `indicator_id` int(20) NOT NULL,
  `indicator_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tindicator_tbl`
--

CREATE TABLE `tindicator_tbl` (
  `indicator_id` int(20) NOT NULL,
  `indicator_no` char(20) NOT NULL,
  `indicator_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindicator_tbl`
--

INSERT INTO `tindicator_tbl` (`indicator_id`, `indicator_no`, `indicator_name`) VALUES
(14, '1', 'Apply knowledge of content within and across curriculum teaching areas'),
(15, '2', 'Use a range of teaching strategies that enhance learner achievement in literacy and numeracy skills'),
(16, '3', 'Apply a range of teaching strategies to develop critical and creative thinking, as well as other higher-order thinking skills'),
(17, '4', 'Manage classroom structure to engage learners, individually or in groups, in meaningful exploration, discovery and hands-on activities within a range of physical learning environments'),
(18, '5', 'Manage learner behavior constructively by applying positive and non-violent discipline to ensure learning-focused environments\r\n'),
(20, '6', 'Use differentiated, developmentally appropriate learning experiences to address learnersâ€™ gender, needs, strengths, interests and experiences\r\n'),
(21, '7', 'Plan, manage and implement developmentally sequenced teaching and learning processes to meet curriculum requirements and varied teaching contexts'),
(22, '8', 'Select, develop, organize, and use appropriate teaching and learning resources, including ICT, to address learning goals\r\n'),
(23, '9', 'Design, select, organize, and use diagnostic, formative and summative assessment strategies consistent with curriculum requirements\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtindicator_items_tbl`
--
ALTER TABLE `mtindicator_items_tbl`
  ADD PRIMARY KEY (`indicator_items_id`),
  ADD UNIQUE KEY `indicator_id` (`indicator_id`);

--
-- Indexes for table `mtindicator_tbl`
--
ALTER TABLE `mtindicator_tbl`
  ADD PRIMARY KEY (`indicator_id`),
  ADD KEY `indicator_no` (`indicator_no`);

--
-- Indexes for table `tblesatguide`
--
ALTER TABLE `tblesatguide`
  ADD PRIMARY KEY (`eguide_id`);

--
-- Indexes for table `tindicator_items_tbl`
--
ALTER TABLE `tindicator_items_tbl`
  ADD PRIMARY KEY (`indicator_items_id`),
  ADD UNIQUE KEY `indicator_id` (`indicator_id`);

--
-- Indexes for table `tindicator_tbl`
--
ALTER TABLE `tindicator_tbl`
  ADD PRIMARY KEY (`indicator_id`),
  ADD KEY `indicator_name` (`indicator_name`),
  ADD KEY `indicator_no` (`indicator_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtindicator_items_tbl`
--
ALTER TABLE `mtindicator_items_tbl`
  MODIFY `indicator_items_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtindicator_tbl`
--
ALTER TABLE `mtindicator_tbl`
  MODIFY `indicator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblesatguide`
--
ALTER TABLE `tblesatguide`
  MODIFY `eguide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tindicator_items_tbl`
--
ALTER TABLE `tindicator_items_tbl`
  MODIFY `indicator_items_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tindicator_tbl`
--
ALTER TABLE `tindicator_tbl`
  MODIFY `indicator_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
