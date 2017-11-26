-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 12:20 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `DepartmentID` int(7) NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(50) NOT NULL,
  `PersonNumber` int(7) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  PRIMARY KEY (`DepartmentID`),
  UNIQUE KEY `PersonNumber` (`PersonNumber`),
  UNIQUE KEY `Manager` (`Manager`),
  UNIQUE KEY `DepartmentName` (`DepartmentName`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DepartmentID`, `DepartmentName`, `PersonNumber`, `Manager`) VALUES
(1, 'Human Resources', 9, 'Manager6 Moto'),
(2, 'HRADAR', 8, 'Manager5 Moto'),
(3, 'Workforce and Assignment', 7, 'manager4 Moto'),
(4, 'Recruitment and Onboarding', 6, 'manager3 Moto'),
(5, 'Service Desk', 5, 'Manager2 Moto'),
(6, 'Finance', 4, 'Manager1 Moto');

-- --------------------------------------------------------

--
-- Table structure for table `educinfo`
--

DROP TABLE IF EXISTS `educinfo`;
CREATE TABLE IF NOT EXISTS `educinfo` (
  `ApplicantNumber` int(11) NOT NULL,
  `Tschool` varchar(11) NOT NULL,
  `Tdegree` varchar(11) NOT NULL,
  `Tfrom` int(11) NOT NULL,
  `Tto` int(11) NOT NULL,
  `Tgraduated` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`ApplicantNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educinfo`
--

INSERT INTO `educinfo` (`ApplicantNumber`, `Tschool`, `Tdegree`, `Tfrom`, `Tto`, `Tgraduated`, `date_added`) VALUES
(1, 'smnd', 'nmff', 878, 98980, '', '2017-10-04'),
(2, 'shdjsn', '8hsndn', 990, 9808, '', '2017-10-04'),
(7, 'fhjdfh', 'hsjdh', 87987, 0, '', '2017-10-05'),
(8, 'TIP', 'FMA', 2014, 2018, '', '2017-10-05'),
(9, 'TUP', 'bsis', 2014, 2018, 'graduated', '2017-10-05'),
(10, 'TUP', 'BSIS', 2014, 2018, '', '2017-10-06'),
(11, 'FEU', 'Tourism', 2012, 2016, 'graduated', '2017-11-14'),
(12, 'San Beda', 'HRM', 2000, 2014, 'graduated', '2017-11-14'),
(13, 'TIP', 'Finacne', 2010, 2014, 'graduated', '2017-11-15'),
(14, 'FEU', 'Tambay', 2000, 2017, 'graduated', '2017-11-15'),
(17, 'TIP', 'HRM', 2000, 2004, 'graduated', '2017-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `PersonNumber` int(7) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `WorkEmail` varchar(50) NOT NULL,
  `First` varchar(50) NOT NULL,
  `Middle` varchar(50) NOT NULL,
  `Last` varchar(50) NOT NULL,
  `AssignStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`PersonNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`PersonNumber`, `Username`, `Password`, `usertype`, `WorkEmail`, `First`, `Middle`, `Last`, `AssignStatus`) VALUES
(1, 'tintin', 'welcome04', 'employee', 'tintin.canimo@pearson.com', 'Tintin', 'Vera', 'Canimo', 'Active'),
(2, 'ucanich', 'welcome', 'admin', 'tintin@gmail.com', 'Christine', 'Veracruz', 'Canimo', 'Active'),
(3, 'employee', 'emp', 'employee', 'emploee@gmail.com', 'Employ', 'Emp', 'Employee', 'Active'),
(4, 'manager1', 'manager1', 'employee', 'manager1@pearson.com', 'Manage 1', 'One', 'Manager1', 'Active'),
(5, 'manager2', 'manager2', 'employee', 'manager2@pearson.com', 'Manage 2', 'two', 'Manager2', 'Active'),
(6, 'manager3', 'manager3', 'employee', 'manager3@pearson.com', 'Manage 3', 'three', 'Manager3', 'Active'),
(7, 'manager4', 'manager4', 'employee', 'manager4@pearson.com', 'Manage 4', 'four', 'Manager4', 'Active'),
(8, 'manager5', 'manager5', 'employee', 'manager5', 'Manage 5', 'five', 'Manager5', 'Active'),
(9, 'manager6', 'manager6', 'employee', 'manager6@pearson.com', 'Manage 6', 'six', 'Manager6', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(5) NOT NULL AUTO_INCREMENT,
  `PersonNumber` int(7) NOT NULL,
  `date_login` datetime NOT NULL,
  `date_logout` datetime NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `PersonNumber`, `date_login`, `date_logout`) VALUES
(20, 1, '2017-10-04 01:09:00', '2017-10-04 01:19:42'),
(21, 1, '2017-10-04 01:19:49', '2017-10-04 01:21:47'),
(23, 1, '2017-10-04 01:41:12', '2017-10-04 02:41:44'),
(24, 3, '2017-10-04 02:42:44', '2017-10-04 05:06:52'),
(25, 3, '2017-10-04 05:07:09', '2017-10-04 05:16:39'),
(26, 3, '2017-10-04 05:16:59', '2017-10-04 06:12:07'),
(27, 3, '2017-10-04 06:12:13', '2017-10-04 06:31:40'),
(29, 3, '2017-10-05 01:45:26', '2017-10-05 07:33:34'),
(30, 1, '2017-10-05 07:34:05', '2017-10-05 07:34:48'),
(31, 1, '2017-10-05 07:34:55', '2017-10-05 08:00:52'),
(32, 1, '2017-10-05 08:00:58', '2017-10-06 02:43:43'),
(33, 2, '2017-11-14 05:37:24', '2017-11-14 05:37:52'),
(34, 1, '2017-11-14 05:38:05', '0000-00-00 00:00:00'),
(35, 4, '2017-11-14 11:46:39', '2017-11-15 06:42:53'),
(36, 5, '2017-11-15 06:43:02', '0000-00-00 00:00:00'),
(37, 9, '2017-11-19 12:24:22', '0000-00-00 00:00:00'),
(38, 6, '2017-11-22 07:42:35', '0000-00-00 00:00:00'),
(39, 7, '2017-11-23 10:44:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `initialresult`
--

DROP TABLE IF EXISTS `initialresult`;
CREATE TABLE IF NOT EXISTS `initialresult` (
  `InterviewID` int(7) NOT NULL AUTO_INCREMENT,
  `ApplicantNumber` int(7) NOT NULL,
  `ApplicantName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ReferredBy` varchar(50) NOT NULL,
  `Interviewer` varchar(50) NOT NULL,
  `Comments` varchar(50) NOT NULL,
  `Result` varchar(50) NOT NULL,
  `DepartmentName` varchar(50) DEFAULT NULL,
  `Manager` varchar(50) DEFAULT NULL,
  `AssignedPosition` varchar(50) DEFAULT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`InterviewID`),
  UNIQUE KEY `ApplicantName` (`ApplicantName`),
  UNIQUE KEY `ApplicantNumber` (`ApplicantNumber`,`ApplicantName`,`Gender`,`Contact`,`ReferredBy`,`Interviewer`) USING BTREE,
  KEY `Interviewer` (`Interviewer`),
  KEY `ReferredBy` (`ReferredBy`),
  KEY `initialresult_ibfk_2` (`Gender`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `initialresult`
--

INSERT INTO `initialresult` (`InterviewID`, `ApplicantNumber`, `ApplicantName`, `Gender`, `Contact`, `Email`, `Birthday`, `Address`, `ReferredBy`, `Interviewer`, `Comments`, `Result`, `DepartmentName`, `Manager`, `AssignedPosition`, `date_added`) VALUES
(3, 1, 'unajddmfn', 'Male', '983948098', 'nsdmd@nsd.com', '2722-08-09', 'jnmfsjddn', 'Christine Canimo', 'Employee Employ', '', 'Passed', 'HRADAR', 'Manager5 Moto', 'Manager', '2017-10-05'),
(11, 2, 'second jsksd', 'Female', '2392328', 'tintin@gmail.com', '1998-06-07', 'jsdkdjCaloocan', '', 'Tintin Canimo', '', 'Failed', '', '', '', '2017-10-05'),
(12, 8, 'camille canimo', 'Female', '09266363323', 'camille@yahoo.com', '1995-09-22', 'tahimik stQC', '', 'Tintin Canimo', '', 'Passed', 'Finance', 'Manager1 Moto', 'Associate', '2017-10-05'),
(14, 9, 'khym panuelos', 'Male', '09123456789', 'khym@yahoo.com', '1997-02-07', 'kagandahantondo', 'Manager1 Moto', 'Employee Employ', '', 'Passed', 'Workforce and Assignment', 'manager4 Moto', 'Administrator', '2017-10-06'),
(15, 11, 'new monica', 'Female', '09266363323', 'sjdskdj@sddjs.com', '1995-02-23', 'QCQC', 'Manager6 Moto', 'Manager1 Moto', '', 'Passed', 'Service Desk', 'Manager2 Moto', 'Senior Advisor', '2017-11-15'),
(17, 12, 'aries canimo', 'Male', '09123456789', 'areis@dfns.com', '1990-10-15', 'AlabatQuezon', '', 'Manager1 Moto', '', 'Passed', 'Workforce and Assignment', 'manager4 Moto', 'Associate', '2017-11-15'),
(18, 7, 'ryee msnd', 'Male', '82738247', 'nsdmd@nsd.com', '1997-11-14', 'nsmdnsmdnd', 'Tintin Canimo', 'Manager1 Moto', '', 'Failed', '', '', '', '2017-11-15'),
(19, 10, 'christine canimo', 'Female', '09266363323', 'christine@yahoo.com', '1998-02-04', 'tahimik stCaloocan', 'manager3 Moto', 'Manager1 Moto', '', 'Passed', 'HRADAR', 'Manager5 Moto', 'Associate', '2017-11-15'),
(20, 13, 'mille monica', 'Female', '123456789', 'millse@gmail.com', '1995-09-22', '116CAloocan', 'Christine Canimo', 'Manager1 Moto', '', 'Passed', 'Finance', 'Manager1 Moto', 'Administrator', '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

DROP TABLE IF EXISTS `interview`;
CREATE TABLE IF NOT EXISTS `interview` (
  `ApplicantNumber` int(7) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `AddressLine` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Desired` varchar(50) NOT NULL,
  `Referred` tinyint(1) NOT NULL,
  `Employee` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date_added` datetime NOT NULL,
  PRIMARY KEY (`ApplicantNumber`),
  UNIQUE KEY `Gender` (`Gender`,`Contact`,`Birthday`,`Employee`,`Date_added`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`ApplicantNumber`, `FirstName`, `MiddleName`, `LastName`, `AddressLine`, `City`, `Email`, `Gender`, `Contact`, `Birthday`, `Desired`, `Referred`, `Employee`, `Status`, `Date_added`) VALUES
(1, 'una', 'sdjh', 'jddmfn', 'jnmf', 'sjddn', 'nsdmd@nsd.com', 'Male', '983948098', '2722-08-09', '', 1, 'Christine Canimo', 'Final Interview', '2017-10-04 00:00:00'),
(2, 'second', 'smd', 'jsksd', 'jsdkdj', 'Caloocan', 'tintin@gmail.com', 'Female', '2392328', '1998-06-07', '', 0, '', 'Initial Interview', '2017-10-04 00:00:00'),
(7, 'ryee', 'qt', 'msnd', 'nsmdn', 'smdnd', 'nsdmd@nsd.com', 'Male', '82738247', '1997-11-14', 'sa puso mo', 1, 'Tintin Canimo', 'Initial Interview', '2017-10-05 00:00:00'),
(8, 'camille', 'veracruz', 'canimo', 'tahimik st', 'QC', 'camille@yahoo.com', 'Female', '09266363323', '1995-09-22', 'manager', 1, '', 'Final Interview', '2017-10-05 00:00:00'),
(9, 'khym', 'tyan', 'panuelos', 'kagandahan', 'tondo', 'khym@yahoo.com', 'Male', '09123456789', '1997-02-07', 'Senior Manager', 1, 'Manager1 Moto', 'Final Interview', '2017-10-05 00:00:00'),
(10, 'christine', 'veracruz', 'canimo', 'tahimik st', 'Caloocan', 'christine@yahoo.com', 'Female', '09266363323', '1998-02-04', 'haha', 1, 'manager3 Moto', 'Initial Interview', '2017-10-06 00:00:00'),
(11, 'new', 'new', 'monica', 'QC', 'QC', 'sjdskdj@sddjs.com', 'Female', '09266363323', '1995-02-23', 'Senior Administrator', 0, 'Manager6 Moto', 'Initial Interview', '2017-11-14 00:00:00'),
(12, 'aries', 'dsnds', 'canimo', 'Alabat', 'Quezon', 'areis@dfns.com', 'Male', '09123456789', '1990-10-15', 'Intern', 0, '', 'Initial Interview', '2017-11-14 00:00:00'),
(13, 'mille', 'ate', 'monica', '116', 'CAloocan', 'millse@gmail.com', 'Female', '123456789', '1995-09-22', 'Senior Administrator', 1, 'Christine Canimo', 'Final Interview', '2017-11-15 00:00:00'),
(14, 'Blabla', 'bleble', 'vlovlo', 'tabi tabi st. brgy.uno', 'QC', 'blable@hehe.com', 'Female', '09123456789', '1992-07-16', 'Intern', 1, 'manager3 Moto', 'For initial', '2017-11-15 00:00:00'),
(17, 'shey', 'villa', 'calzado', '14 angelo', 'QC', 'shey@gh.com', 'Female', '09175578453', '1994-04-12', 'manager', 1, 'Manage 4 Manager4', 'For initial', '2017-11-24 12:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `pendingapplicants`
--

DROP TABLE IF EXISTS `pendingapplicants`;
CREATE TABLE IF NOT EXISTS `pendingapplicants` (
  `FinalInterviewID` int(7) NOT NULL AUTO_INCREMENT,
  `ApplicantNumber` int(11) NOT NULL,
  `ApplicantName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ReferredBy` varchar(50) NOT NULL,
  `Initialinterviewer` varchar(50) NOT NULL,
  `Finalinterviewer` varchar(50) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `FinalResult` varchar(50) NOT NULL,
  `DepartmentName` varchar(50) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  `AssignedPosition` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`FinalInterviewID`),
  UNIQUE KEY `ApplicantNumber` (`ApplicantNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingapplicants`
--

INSERT INTO `pendingapplicants` (`FinalInterviewID`, `ApplicantNumber`, `ApplicantName`, `Gender`, `Contact`, `Email`, `Birthday`, `Address`, `ReferredBy`, `Initialinterviewer`, `Finalinterviewer`, `Comment`, `FinalResult`, `DepartmentName`, `Manager`, `AssignedPosition`, `Status`, `date_added`) VALUES
(7, 8, 'camille canimo', 'Female', '09266363323', 'camille@yahoo.com', '1995-09-22', 'tahimik stQC', '', 'Tintin Canimo', 'Manager1 Moto', 'hihihi', 'Passed', 'Finance', 'Manager1 Moto', 'Associate', 'Pending', '2017-10-05'),
(8, 1, 'una jddmfn', 'Male', '983948098', 'nsdmd@nsd.com', '2722-08-09', 'jnmfsjddn', 'Christine Canimo', 'Employee Employ', 'Manager5 Moto', 'Ikaw na! ;)', 'Passed', 'HRADAR', 'Manager5 Moto', 'Manager', 'Pending', '2017-10-06'),
(9, 9, 'khym panuelos', 'Male', '09123456789', 'khym@yahoo.com', '1997-02-07', 'kagandahantondo', 'Manager1 Moto', 'Employee Employ', 'manager4 Moto', '', 'Passed', 'Workforce and Assignment', 'manager4 Moto', 'Administrator', 'Pending', '2017-11-15'),
(11, 13, 'mille monica', 'Female', '123456789', 'millse@gmail.com', '1995-09-22', '116CAloocan', 'Christine Canimo', 'Manager1 Moto', 'Manager1 Moto', 'hehe ate', 'Passed', 'Finance', 'Manager1 Moto', 'Administrator', 'Pending', '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `prevemploy`
--

DROP TABLE IF EXISTS `prevemploy`;
CREATE TABLE IF NOT EXISTS `prevemploy` (
  `ApplicantNumber` int(7) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `NoExperience` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ApplicantNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prevemploy`
--

INSERT INTO `prevemploy` (`ApplicantNumber`, `Company`, `Job`, `Duration`, `NoExperience`) VALUES
(1, 'dito', 'wala', '2 weeks', ''),
(2, '', '', '', ''),
(7, 'hehehe', '', '', ''),
(8, 'Hexagon', 'Accountacy', '2 years', ''),
(9, 'None', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', 'No Experience'),
(12, '', '', '', 'No Experience'),
(13, 'Hexagon', 'Assistant', '1 year', NULL),
(14, '', '', '', 'No Experience'),
(17, '', '', '', 'No Experience');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
CREATE TABLE IF NOT EXISTS `referrals` (
  `ReferralID` int(7) NOT NULL AUTO_INCREMENT,
  `JobTitle` varchar(50) NOT NULL,
  `Grade` varchar(5) NOT NULL,
  `Referral Incentive` varchar(50) NOT NULL,
  PRIMARY KEY (`ReferralID`),
  UNIQUE KEY `JobTitle` (`JobTitle`,`Grade`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`ReferralID`, `JobTitle`, `Grade`, `Referral Incentive`) VALUES
(1, 'Associate', 'B1', '15,000.00'),
(2, 'Administrator', 'B2', '15,000.00'),
(3, 'Senior Administrartor', 'B3', '15,000.00'),
(4, 'Advisor', 'C1', '15,000.00'),
(5, 'Senior Advisor', 'C2', '20,000.00'),
(6, 'Manager', 'D1', '40,000.00'),
(7, 'Senior Manager', 'D2', '50,000.00'),
(8, 'Intern', 'A', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`PersonNumber`) REFERENCES `employees` (`PersonNumber`);

--
-- Constraints for table `initialresult`
--
ALTER TABLE `initialresult`
  ADD CONSTRAINT `initialresult_ibfk_1` FOREIGN KEY (`ApplicantNumber`) REFERENCES `interview` (`ApplicantNumber`);

--
-- Constraints for table `pendingapplicants`
--
ALTER TABLE `pendingapplicants`
  ADD CONSTRAINT `pendingapplicants_ibfk_1` FOREIGN KEY (`ApplicantNumber`) REFERENCES `initialresult` (`ApplicantNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
