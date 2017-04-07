-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 05:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE `care` (
  `ssn` int(10) DEFAULT NULL,
  `cid` varchar(13) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `bid` int(11) DEFAULT NULL,
  `massage` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_time` date DEFAULT NULL,
  `user` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `cid` varchar(13) COLLATE utf8_croatian_ci NOT NULL,
  `title` varchar(6) COLLATE utf8_croatian_ci DEFAULT NULL,
  `f_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_type` varchar(3) COLLATE utf8_croatian_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `job` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `disease` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`cid`, `title`, `f_name`, `l_name`, `blood_type`, `birth_date`, `address`, `job`, `email`, `disease`) VALUES
('1234567891018', 'Ms', 'ธิดา', 'ดวงเดือน', 'O-', '1989-07-15', 'สุเทพคอนโด', 'ค้าขาย', 'Thida@mail.com', 'ไม่มี'),
('6546454749854', 'Mr', 'ธงชัย', 'ใจดี', 'B-', '1889-12-11', 'กรุงเทพ', 'อื่นๆ', 'TT@mail.com', 'หอบหืด'),
('7894562159789', 'Ms', 'ศรีทา', 'กันทา', 'B-', '1996-11-08', ' ยะลา', 'พนักงานบริษัท,พนักงานรับจ้าง', 'Sri@mail.com', 'ไม่มี');

-- --------------------------------------------------------

--
-- Table structure for table `donor_donation`
--

CREATE TABLE `donor_donation` (
  `h_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cid` varchar(13) COLLATE utf8_croatian_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `vol_blood` float DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `date_time` date DEFAULT NULL,
  `ssn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_tel`
--

CREATE TABLE `donor_tel` (
  `cid` varchar(13) COLLATE utf8_croatian_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `donor_tel`
--

INSERT INTO `donor_tel` (`cid`, `tel`) VALUES
('1234567891018', '053648888'),
('6546454749854', '0822484165'),
('7894562159789', '0825478964');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `title` varchar(6) COLLATE utf8_croatian_ci NOT NULL,
  `sex` char(1) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`title`, `sex`) VALUES
('Miss', 'F'),
('Mr', 'M'),
('Ms', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A_vol` float DEFAULT NULL,
  `B_vol` float DEFAULT NULL,
  `O_vol` float DEFAULT NULL,
  `AB_vol` float DEFAULT NULL,
  `A_neg_vol` float DEFAULT NULL,
  `B_neg_vol` float DEFAULT NULL,
  `O_neg_vol` float DEFAULT NULL,
  `AB_neg_vol` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_name`, `A_vol`, `B_vol`, `O_vol`, `AB_vol`, `A_neg_vol`, `B_neg_vol`, `O_neg_vol`, `AB_neg_vol`) VALUES
('มหาราชนครเชียงใหม่', 15000, 15000, 30000, 10000, 9000, 9000, 9000, 9000),
('สภากาชาดไทย', 3000, 3000, 3000, 3000, 1000, 1000, 1000, 1000),
('เชียงใหม่ราม', 900, 900, 900, 900, 900, 800, 800, 700),
('แมคคอร์มิค', 800, 800, 800, 800, 500, 600, 400, 550);

-- --------------------------------------------------------

--
-- Table structure for table `manage_webboard`
--

CREATE TABLE `manage_webboard` (
  `h_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ssn` int(10) NOT NULL,
  `title` varchar(6) COLLATE utf8_croatian_ci NOT NULL,
  `f_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `h_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_tel`
--

CREATE TABLE `staff_tel` (
  `ssn` int(10) DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sender_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `recipient_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_time` date DEFAULT NULL,
  `blood_send` varchar(3) COLLATE utf8_croatian_ci DEFAULT NULL,
  `volume` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `h_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `h_name`) VALUES
('maharajcm', 'cm1234', 'มหาราชนครเชียงใหม่'),
('redcrossth', 'rc1234', 'สภากาชาดไทย'),
('cmram', 'cmram1234', 'เชียงใหม่ราม'),
('mccormick', 'mc1234', 'แมคคอร์มิค');

-- --------------------------------------------------------

--
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `bid` int(11) NOT NULL,
  `topic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD KEY `ssn` (`ssn`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `donor_donation`
--
ALTER TABLE `donor_donation`
  ADD KEY `ssn` (`ssn`),
  ADD KEY `cid` (`cid`),
  ADD KEY `h_name` (`h_name`);

--
-- Indexes for table `donor_tel`
--
ALTER TABLE `donor_tel`
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_name`);

--
-- Indexes for table `manage_webboard`
--
ALTER TABLE `manage_webboard`
  ADD KEY `bid` (`bid`),
  ADD KEY `h_name` (`h_name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ssn`),
  ADD KEY `title` (`title`),
  ADD KEY `h_name` (`h_name`);

--
-- Indexes for table `staff_tel`
--
ALTER TABLE `staff_tel`
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD KEY `sender_name` (`sender_name`),
  ADD KEY `recipient_name` (`recipient_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`,`password`),
  ADD KEY `h_name` (`h_name`);

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webboard`
--
ALTER TABLE `webboard`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `care`
--
ALTER TABLE `care`
  ADD CONSTRAINT `care_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `staff` (`ssn`),
  ADD CONSTRAINT `care_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `donor` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `webboard` (`bid`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`title`) REFERENCES `gender` (`title`);

--
-- Constraints for table `donor_donation`
--
ALTER TABLE `donor_donation`
  ADD CONSTRAINT `donor_donation_ibfk_3` FOREIGN KEY (`ssn`) REFERENCES `staff` (`ssn`),
  ADD CONSTRAINT `donor_donation_ibfk_4` FOREIGN KEY (`cid`) REFERENCES `donor` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donor_donation_ibfk_5` FOREIGN KEY (`h_name`) REFERENCES `hospital` (`h_name`);

--
-- Constraints for table `donor_tel`
--
ALTER TABLE `donor_tel`
  ADD CONSTRAINT `donor_tel_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `donor` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_webboard`
--
ALTER TABLE `manage_webboard`
  ADD CONSTRAINT `manage_webboard_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `webboard` (`bid`),
  ADD CONSTRAINT `manage_webboard_ibfk_3` FOREIGN KEY (`h_name`) REFERENCES `hospital` (`h_name`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`title`) REFERENCES `gender` (`title`),
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`h_name`) REFERENCES `hospital` (`h_name`);

--
-- Constraints for table `staff_tel`
--
ALTER TABLE `staff_tel`
  ADD CONSTRAINT `staff_tel_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `staff` (`ssn`);

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`sender_name`) REFERENCES `hospital` (`h_name`),
  ADD CONSTRAINT `transfer_ibfk_2` FOREIGN KEY (`recipient_name`) REFERENCES `hospital` (`h_name`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`h_name`) REFERENCES `hospital` (`h_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
