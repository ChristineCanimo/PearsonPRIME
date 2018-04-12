-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 02:20 PM
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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `CourseID` int(10) NOT NULL AUTO_INCREMENT,
  `Course` varchar(100) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `Course`) VALUES
(1, 'Agro-Forestry'),
(2, 'Veterinatry Medicine\r\n'),
(3, 'Agribusiness/Management\r\n'),
(4, 'Agriculture\r\n'),
(5, 'Fisheries'),
(6, 'BS Food Technology\r\n'),
(7, 'Mechanical Engineering'),
(8, 'Electronics Engineering'),
(9, 'Communication Engineering'),
(10, 'Metallurgical/Mining Engineering'),
(11, 'Computer Engineering'),
(12, 'Electrical Engineering'),
(13, 'Sanitary Engineering'),
(14, 'Chemical Engineering'),
(15, 'Industrial Engineering'),
(16, 'Civil Engineering'),
(17, 'Electronics and Communication Engineering'),
(18, 'BS Mathematics'),
(19, 'BS Physics'),
(20, 'BS Biology'),
(21, 'BS Chemistry'),
(22, 'BS Marine Biology/Science'),
(23, 'BS Earth Science\r\n'),
(24, 'BS Statistics/Applied Statistics'),
(25, 'Environmental Science\r\n'),
(26, 'Information Technology and Computing Studies'),
(27, 'Computer Science'),
(28, 'Information System Management'),
(29, 'Bachelor in Library Science & Information System Major in System Analysis'),
(30, 'Education'),
(31, 'Pharmacy'),
(32, 'Radiology Technology'),
(33, 'Medical Technology'),
(34, 'Physical Therapy'),
(35, 'Creative and Performing Arts\r\n'),
(36, 'BS Religious Education\r\n'),
(37, 'BS Philosophy\r\n'),
(38, 'BS Psychology\r\n'),
(39, 'Human Development\r\n'),
(40, 'BS Accountancy\r\n'),
(41, 'Business Data Outsourcing\r\n'),
(42, 'Business Process Outsourcing\r\n'),
(43, 'Tourism'),
(44, 'BS Architecture\r\n'),
(45, 'Interior Design\r\n'),
(46, 'Fine Arts\r\n'),
(47, 'BS Marine Transportation\r\n'),
(48, 'BA Communication\r\n'),
(49, 'BA Journalism\r\n'),
(50, 'BA Broadcasting\r\n');

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
(1, 'Human Resources', 9, 'Manage 6 Manager6'),
(2, 'HRADAR', 8, 'Manage 5 Manager5'),
(3, 'Workforce and Assignment', 7, 'Manage 4 Manager4'),
(4, 'Recruitment and Onboarding', 6, 'Manage 3 Manager3'),
(5, 'Service Desk', 5, 'Manage 2 Manager2\n'),
(6, 'Finance', 3, 'Employ Employee');

-- --------------------------------------------------------

--
-- Table structure for table `educinfo`
--

DROP TABLE IF EXISTS `educinfo`;
CREATE TABLE IF NOT EXISTS `educinfo` (
  `ApplicantNumber` int(11) NOT NULL,
  `Tschool` varchar(100) DEFAULT NULL,
  `Tdegree` varchar(100) DEFAULT NULL,
  `Tfrom` year(4) NOT NULL,
  `Tto` year(4) NOT NULL,
  `Tgraduated` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`ApplicantNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educinfo`
--

INSERT INTO `educinfo` (`ApplicantNumber`, `Tschool`, `Tdegree`, `Tfrom`, `Tto`, `Tgraduated`, `date_added`) VALUES
(42, 'Technological Institute of the Philippines', 'Information System Management', 2014, 2018, '', '2018-03-09'),
(43, 'Far Eastern University', 'BS Food Technology', 2010, 2014, 'Graduated', '2018-03-10'),
(44, 'Technological Institute of the Philippines', 'BS Accountancy\r\n', 2011, 2015, 'Graduated', '2018-03-10'),
(45, 'Jose Rizal University', 'Industrial Engineering', 2002, 2018, 'Graduated', '2018-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `PersonNumber` int(7) NOT NULL AUTO_INCREMENT,
  `AppNumber` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `WorkEmail` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `First` varchar(50) NOT NULL,
  `Middle` varchar(50) NOT NULL,
  `Last` varchar(50) NOT NULL,
  `EAddressLine` varchar(50) NOT NULL,
  `ECity` varchar(50) NOT NULL,
  `EEmail` varchar(50) NOT NULL,
  `EGender` varchar(50) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Referrer` varchar(50) NOT NULL,
  `HireDate` date NOT NULL,
  `AssignStatus` varchar(50) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Tertiary` varchar(50) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `EdFrom` varchar(50) NOT NULL,
  `EdTo` varchar(50) NOT NULL,
  `EStatus` varchar(50) NOT NULL,
  `ECompany` varchar(50) NOT NULL,
  `EmJob` varchar(50) NOT NULL,
  `EmDuration` varchar(50) NOT NULL,
  `EDepartment` varchar(50) NOT NULL,
  `EManager` varchar(50) NOT NULL,
  `Date_added` date NOT NULL,
  PRIMARY KEY (`PersonNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`PersonNumber`, `AppNumber`, `Username`, `Password`, `usertype`, `WorkEmail`, `FullName`, `First`, `Middle`, `Last`, `EAddressLine`, `ECity`, `EEmail`, `EGender`, `ContactNumber`, `JobTitle`, `Referrer`, `HireDate`, `AssignStatus`, `DateofBirth`, `Tertiary`, `Degree`, `EdFrom`, `EdTo`, `EStatus`, `ECompany`, `EmJob`, `EmDuration`, `EDepartment`, `EManager`, `Date_added`) VALUES
(1, 100, 'tintin', 'welcome04', 'employee', 'tintin.canimo@pearson.com', 'Tintin Canimo', 'Tintin', 'Vera', 'Canimo', '', '', '', '', '', 'Associate', 'Manage 4 Manager4', '2017-10-17', 'Active', '1990-03-24', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(2, 101, 'ucanich', 'welcome', 'admin', 'tintin@gmail.com', 'Christine Canimo', 'Christine', 'Veracruz', 'Canimo', '', '', '', '', '', 'Senior Advisor', 'Employ Employee', '2017-11-27', 'Active', '1990-06-20', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(3, 102, 'employee', 'emp', 'employee', 'emploee@gmail.com', 'Employ Employee', 'Employ', 'Emp', 'Employee', '', '', '', '', '', 'Associate', '', '2017-12-17', 'Active', '1993-06-24', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(4, 103, 'manager1', 'manager1', 'admin', 'manager1@pearson.com', 'Manage 1 Manager1', 'Manage 1', 'One', 'Manager1', '', '', '', '', '', 'Senior Advisor', '', '2017-10-20', 'Active', '1989-02-19', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(5, 104, 'manager2', 'manager2', 'employee', 'manager2@pearson.com', 'Manage 2 Manager2', 'Manage 2', 'two', 'Manager2', '', '', '', '', '', 'Administrator', '', '2017-11-07', 'Active', '1994-03-24', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(6, 105, 'manager3', 'manager3', 'employee', 'manager3@pearson.com', 'Manage 3 Manager3', 'Manage 3', 'three', 'Manager3', '', '', '', '', '', 'Administrator', '', '2017-12-17', 'Active', '1990-11-03', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(7, 106, 'manager4', 'manager4', 'employee', 'manager4@pearson.com', 'Manage 4 Manager4', 'Manage 4', 'four', 'Manager4', '', '', '', '', '', 'Associate', '', '2018-01-17', 'Active', '1989-02-24', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(8, 107, 'manager5', 'manager5', 'employee', 'manager5', 'Manage 5 Manager5', 'Manage 5', 'five', 'Manager5', '', '', '', '', '', 'Administrator', 'Manage 4 Manager4', '2018-02-17', 'Active', '1987-04-24', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(9, 108, 'manager6', 'manager6', 'employee', 'manager6@pearson.com', 'Manage 6 Manager6', 'Manage 6', 'six', 'Manager6', '', '', '', '', '', 'Manager', '', '2018-01-17', 'Active', '1990-03-03', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(20, 42, 'sheyshey', 'janeh', 'admin', 'Sherry.Calzado@pearson.com', 'Sherry Calzado', 'Sherry', 'Villarivera', 'Calzado', '14G Angelo Street Laloma', 'Quezon City', 'sherrycalzado27@yahoo.com', 'Female', '09174958496', 'Senior Manager', 'Christine Canimo', '2017-12-19', 'Active', '1997-10-27', 'Technological Institute of the Philippines', 'Information System Management', '2014', '2018', 'Not Graduated', '', '', '', 'Human Resources', 'Manage 6 Manager6', '2018-03-11'),
(25, 43, 'tinjoy', 'jenny', 'employee', 'Christine Joy.Corpuz@pearson.com', 'Christine Joy Corpuz', 'Christine Joy', 'De Guzman', 'Corpuz', '14G Angelo Street Laloma', 'Quezon City', 'christinejoy.corpuz@tup.edu.ph', 'Male', '09174958496', 'Administrator', 'Christine Canimo', '2017-12-04', 'Active', '1997-12-24', 'Far Eastern University', 'BS Food Technology', '2010', '2014', 'Graduated', 'Hexagon', 'Accountant', '3 years', 'Workforce and Assignment', 'Manage 4 Manager4', '2018-03-11'),
(26, 0, 'sadfsa', 'fasdfsa', 'employee', 'sdfsdf@fsf.csd', 'fsafdasd', 'fasdfsa', 'fasdf', 'asfsaf', 'asf', 'safsadf', 'sdsa@dsds.sdd', 'Female', '09123456789', 'Associate', 'Sherry Calzado', '2018-03-16', 'Inactive', '1994-03-23', 'Angelicum College', 'Industrial Engineering', '2003', '2010', 'Graduated', '', '', '', 'Finance', '', '2018-03-12'),
(27, 45, 'steph.dunno@pearson.com', 'stepy', 'employee', 'Steph.Rojas@pearson.com', 'Steph Rojas', 'Steph', 'Dunno', 'Rojas', '32 Brgy. Camagong', 'Alabat, Quezon', 'stephrojas@gmai.com', 'Female', '09127653478', 'Associate', 'Christine Canimo', '2018-04-10', 'Active', '1990-04-25', 'Jose Rizal University', 'Industrial Engineering', '2002', '2018', 'Graduated', 'Hexagon', 'Encoder', '2 years', 'Finance', 'Employ Employee', '2018-03-30');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `PersonNumber`, `date_login`, `date_logout`) VALUES
(1, 4, '2018-03-10 03:28:13', '0000-00-00 00:00:00'),
(2, 4, '2018-03-10 12:33:42', '0000-00-00 00:00:00'),
(3, 9, '2018-03-10 01:52:21', '0000-00-00 00:00:00'),
(4, 7, '2018-03-10 11:32:25', '0000-00-00 00:00:00'),
(5, 4, '2018-03-11 09:41:43', '0000-00-00 00:00:00'),
(6, 9, '2018-03-11 11:23:49', '0000-00-00 00:00:00'),
(7, 4, '2018-06-11 09:06:38', '0000-00-00 00:00:00'),
(8, 4, '2018-03-12 02:14:41', '0000-00-00 00:00:00'),
(9, 4, '2018-08-12 02:16:27', '0000-00-00 00:00:00'),
(10, 4, '2018-09-12 02:19:39', '0000-00-00 00:00:00'),
(11, 4, '2018-03-12 12:24:43', '0000-00-00 00:00:00'),
(12, 4, '2018-03-13 02:48:55', '2018-03-13 02:49:12'),
(13, 5, '2018-03-13 02:49:19', '2018-03-13 02:50:07'),
(14, 4, '2018-03-13 02:50:16', '0000-00-00 00:00:00'),
(15, 4, '2018-03-14 11:38:22', '0000-00-00 00:00:00'),
(16, 3, '2018-03-15 12:05:57', '2018-03-15 02:38:35'),
(17, 5, '2018-03-15 12:25:44', '0000-00-00 00:00:00'),
(18, 4, '2018-03-30 07:19:45', '2018-03-30 07:36:46'),
(19, 3, '2018-03-30 07:37:27', '2018-03-30 07:38:24'),
(20, 4, '2018-03-30 07:38:33', '0000-00-00 00:00:00'),
(21, 3, '2018-03-30 07:39:22', '0000-00-00 00:00:00'),
(22, 4, '2018-04-12 10:15:10', '2018-04-12 10:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `incentives`
--

DROP TABLE IF EXISTS `incentives`;
CREATE TABLE IF NOT EXISTS `incentives` (
  `IncentiveID` int(11) NOT NULL AUTO_INCREMENT,
  `IncenReferrer` varchar(50) NOT NULL,
  `NumberReferred` int(11) NOT NULL,
  `Jobtitle` varchar(50) NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `FirstHalfAmount` float NOT NULL,
  `SecondHalfAmount` float NOT NULL,
  `zero` int(2) NOT NULL,
  PRIMARY KEY (`IncentiveID`),
  UNIQUE KEY `NumberReferred` (`NumberReferred`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incentives`
--

INSERT INTO `incentives` (`IncentiveID`, `IncenReferrer`, `NumberReferred`, `Jobtitle`, `Grade`, `FirstHalfAmount`, `SecondHalfAmount`, `zero`) VALUES
(3, 'Christine Canimo', 25, 'Administrator', 'B2', 7500, 7500, 0),
(4, 'Christine Canimo', 20, 'Senior Manager', 'D2', 25000, 25000, 0),
(5, 'Manage 4 Manager4', 1, 'Associate', 'B1', 7500, 7500, 0),
(6, 'Manage 4 Manager4', 8, 'Administrator', 'B2', 7500, 7500, 0),
(7, 'Employ Employee', 2, 'Senior Advisor', 'C2', 10000, 10000, 0);

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
  `ManagerNumber` int(10) NOT NULL,
  `Manager` varchar(50) DEFAULT NULL,
  `AssignedPosition` varchar(50) DEFAULT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`InterviewID`),
  UNIQUE KEY `ApplicantName` (`ApplicantName`),
  UNIQUE KEY `ApplicantNumber` (`ApplicantNumber`,`ApplicantName`,`Gender`,`Contact`,`ReferredBy`,`Interviewer`) USING BTREE,
  KEY `Interviewer` (`Interviewer`),
  KEY `ReferredBy` (`ReferredBy`),
  KEY `initialresult_ibfk_2` (`Gender`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `initialresult`
--

INSERT INTO `initialresult` (`InterviewID`, `ApplicantNumber`, `ApplicantName`, `Gender`, `Contact`, `Email`, `Birthday`, `Address`, `ReferredBy`, `Interviewer`, `Comments`, `Result`, `DepartmentName`, `ManagerNumber`, `Manager`, `AssignedPosition`, `date_added`) VALUES
(3, 42, 'Sherry Calzado', 'Female', '09174958496', 'sherrycalzado27@yahoo.com', '1997-10-27', '14G Angelo Street Laloma, Quezon City', 'Christine Canimo', 'Manage 1 Manager1', 'Good Com skills and proper grammar', 'Passed', 'Human Resources', 9, 'Manage 6 Manager6', 'Senior Manager', '2018-03-10'),
(5, 43, 'Christine Joy Corpuz', 'Male', '09174958496', 'christinejoy.corpuz@tup.edu.ph', '1997-12-24', '14G Angelo Street Laloma, Quezon City', 'Christine Canimo', 'Manage 1 Manager1', 'Cute mo kasi e', 'Passed', 'Workforce and Assignment', 7, 'Manage 4 Manager4', 'Administrator', '2018-03-10'),
(7, 44, 'Camille Canimo', 'Female', '09275874009', 'camillecanimo@gmail.com', '1995-09-22', '116 Tahimik St Brgy. 125, Caloocan City', 'Christine Canimo', 'Manage 1 Manager1', 'Proper english and good coms skills', 'Passed', 'Finance', 3, 'Employ Employee', 'Associate', '2018-03-15'),
(8, 45, 'Steph Rojas', 'Female', '09127653478', 'stephrojas@gmai.com', '1990-04-25', '32 Brgy. Camagong, Alabat, Quezon', 'Christine Canimo', 'Manage 1 Manager1', 'Good Technical and communication skills', 'Passed', 'Finance', 3, 'Employ Employee', 'Associate', '2018-03-30');

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
  `Date_added` date NOT NULL,
  PRIMARY KEY (`ApplicantNumber`),
  UNIQUE KEY `Gender` (`Gender`,`Contact`,`Birthday`,`Employee`,`Date_added`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`ApplicantNumber`, `FirstName`, `MiddleName`, `LastName`, `AddressLine`, `City`, `Email`, `Gender`, `Contact`, `Birthday`, `Desired`, `Referred`, `Employee`, `Status`, `Date_added`) VALUES
(42, 'Sherry', 'Villarivera', 'Calzado', '14G Angelo Street Laloma', 'Quezon City', 'sherrycalzado27@yahoo.com', 'Female', '09174958496', '1997-10-27', 'Manager', 1, 'Christine Canimo', 'Hired', '2018-03-09'),
(43, 'Christine Joy', 'De Guzman', 'Corpuz', '14G Angelo Street Laloma', 'Quezon City', 'christinejoy.corpuz@tup.edu.ph', 'Male', '09174958496', '1997-12-24', 'Administrator', 0, 'Christine Canimo', 'Hired', '2018-03-10'),
(44, 'Camille', 'Veracruz', 'Canimo', '116 Tahimik St Brgy. 125', 'Caloocan City', 'camillecanimo@gmail.com', 'Female', '09275874009', '1995-09-22', 'Associate', 0, 'Christine Canimo', 'Final Interview', '2018-03-10'),
(45, 'Steph', 'Dunno', 'Rojas', '32 Brgy. Camagong', 'Alabat, Quezon', 'stephrojas@gmai.com', 'Female', '09127653478', '1990-04-25', 'Advisor', 1, 'Christine Canimo', 'Hired', '2018-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `jobopenings`
--

DROP TABLE IF EXISTS `jobopenings`;
CREATE TABLE IF NOT EXISTS `jobopenings` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `JobTitle` varchar(50) NOT NULL,
  `DepartmentID` int(10) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `DateCreated` varchar(50) NOT NULL,
  `NoNeeded` varchar(7) NOT NULL,
  `DateOccupied` varchar(50) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobopenings`
--

INSERT INTO `jobopenings` (`JobId`, `JobTitle`, `DepartmentID`, `Department`, `DateCreated`, `NoNeeded`, `DateOccupied`) VALUES
(1, 'Senior Administrator', 1, 'Human Resources', '2017-10-05', '2', ''),
(3, 'Manager', 4, 'Recruitment and Onboarding', '2017-1-21', '0', ''),
(5, 'Intern', 3, 'Workforce and Assignment', '2017-09-12', '14', ''),
(6, 'Senior Manager', 1, 'Human Resources', '2018-01-20', '2', ''),
(24, 'Senior Administrator', 0, 'Workforce and Assignment', '2018-03-11', '2', ''),
(25, 'Advisor', 4, 'Recruitment and Onboarding', '2018-03-30', '6', '');

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
  `ManagerNo` int(5) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  `AssignedPosition` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`FinalInterviewID`),
  UNIQUE KEY `ApplicantNumber` (`ApplicantNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingapplicants`
--

INSERT INTO `pendingapplicants` (`FinalInterviewID`, `ApplicantNumber`, `ApplicantName`, `Gender`, `Contact`, `Email`, `Birthday`, `Address`, `ReferredBy`, `Initialinterviewer`, `Finalinterviewer`, `Comment`, `FinalResult`, `DepartmentName`, `ManagerNo`, `Manager`, `AssignedPosition`, `Status`, `date_added`) VALUES
(18, 43, 'Christine Joy Corpuz', 'Male', '09174958496', 'christinejoy.corpuz@tup.edu.ph', '1997-12-24', '14G Angelo Street LalomaQuezon City', 'Christine Canimo', 'Manage 1 Manager1', 'Manage 4 Manager4', 'napakahusay', 'Passed', 'Workforce and Assignment', 7, 'Manage 4 Manager4', 'Administrator', 'Hired', '2018-03-11'),
(19, 42, 'Sherry Calzado', 'Female', '09174958496', 'sherrycalzado27@yahoo.com', '1997-10-27', '14G Angelo Street LalomaQuezon City', 'Christine Canimo', 'Manage 1 Manager1', 'Manage 6 Manager6', 'hmm pwede na ;)', 'Passed', 'Human Resources', 9, 'Manage 6 Manager6', 'Senior Manager', 'Hired', '2018-03-11'),
(20, 44, 'Camille Canimo', 'Female', '09275874009', 'camillecanimo@gmail.com', '1995-09-22', '116 Tahimik St Brgy. 125Caloocan City', 'Christine Canimo', 'Manage 1 Manager1', 'Employ Employee', 'berigud. cute skills', 'Passed', 'Finance', 4, 'Employ Employee', 'Associate', 'For Assessing', '2018-03-15'),
(21, 45, 'Steph Rojas', 'Female', '09127653478', 'stephrojas@gmai.com', '1990-04-25', '32 Brgy. CamagongAlabat, Quezon', 'Christine Canimo', 'Manage 1 Manager1', 'Employ Employee', 'Very humble and willing to learn obviously.', 'Passed', 'Finance', 3, 'Employ Employee', 'Associate', 'Hired', '2018-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `prevemploy`
--

DROP TABLE IF EXISTS `prevemploy`;
CREATE TABLE IF NOT EXISTS `prevemploy` (
  `ApplicantNumber` int(7) NOT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `Job` varchar(50) DEFAULT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `NoExperience` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ApplicantNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prevemploy`
--

INSERT INTO `prevemploy` (`ApplicantNumber`, `Company`, `Job`, `Duration`, `NoExperience`) VALUES
(42, '', '', '', 'No Experience'),
(43, 'Hexagon', 'Accountant', '3 years', NULL),
(44, 'Jollibee', 'Clerk', '5 months', NULL),
(45, 'Hexagon', 'Encoder', '2 years', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
CREATE TABLE IF NOT EXISTS `referrals` (
  `ReferralID` int(7) NOT NULL AUTO_INCREMENT,
  `JobTitle` varchar(50) NOT NULL,
  `Grade` varchar(5) NOT NULL,
  `ReferralIncentive` float NOT NULL,
  PRIMARY KEY (`ReferralID`),
  UNIQUE KEY `JobTitle` (`JobTitle`,`Grade`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`ReferralID`, `JobTitle`, `Grade`, `ReferralIncentive`) VALUES
(1, 'Associate', 'B1', 15000),
(2, 'Administrator', 'B2', 15000),
(3, 'Senior Administrator', 'B3', 15000),
(4, 'Advisor', 'C1', 15000),
(5, 'Senior Advisor', 'C2', 20000),
(6, 'Manager', 'D1', 40000),
(7, 'Senior Manager', 'D2', 50000),
(8, 'Intern', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

DROP TABLE IF EXISTS `universities`;
CREATE TABLE IF NOT EXISTS `universities` (
  `UnivID` int(10) NOT NULL AUTO_INCREMENT,
  `University` varchar(100) NOT NULL,
  PRIMARY KEY (`UnivID`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`UnivID`, `University`) VALUES
(1, 'Abada Colleges'),
(2, 'ABE International College of Business and Accountancy'),
(3, 'Abra Valley Colleges '),
(4, 'Academia de Davao College (ADDC)'),
(5, 'Access Computer College'),
(6, 'ACSI College'),
(7, 'ACTS Computer College'),
(8, 'Adamson University'),
(9, 'Adventist International Institute of Advanced Studies '),
(10, 'Adventist University of the Philippines'),
(11, 'Agusan del Sur College'),
(12, 'AIE COLLEGE'),
(13, 'Aklan Polytechnic College'),
(14, 'Aklan State University'),
(15, 'Alpha Centauri Educational System'),
(16, 'AMA Computer University'),
(17, 'Angelicum College'),
(18, 'Aquinas University of Legazpi'),
(19, 'Araullo University'),
(20, 'Arellano University'),
(21, 'Asia Pacific College'),
(22, 'Asian College of Technology'),
(23, 'Asian Institute of Computer Studies (AICS)'),
(24, 'Assumption College'),
(25, 'Ateneo de Manila University'),
(26, 'Baguio Central University'),
(27, 'Bataan Peninsula State University'),
(28, 'Bataan State College'),
(29, 'Batangas State University'),
(30, 'Benguet State University'),
(31, 'Bicol University'),
(32, 'Bohol Institute of Technology'),
(33, 'Bohol Island State University'),
(34, 'Bukidnon State University'),
(35, 'Bulacan State University'),
(36, 'Cagayan State University'),
(37, 'Camarines Norte State College'),
(38, 'Capiz State University'),
(39, 'Caraga State University'),
(40, 'Catanduanes State University'),
(41, 'Cavite State University'),
(42, 'Cebu Eastern College'),
(43, 'Central Bicol State University of Agriculture'),
(44, 'Central Colleges of the Philippines'),
(45, 'Central Luzon State University'),
(46, 'Central Mindanao University'),
(47, 'Centro Escolar University'),
(48, 'Chinese General Hospital Colleges'),
(49, 'CIIT College of Arts and Technology'),
(50, 'City College of Calamba'),
(51, 'Colegio San Agustin'),
(52, 'College of San Benildo'),
(53, 'Davao del Norte State College'),
(54, 'Davao Oriental State College of Science and Technology'),
(55, 'De La Salle Araneta University'),
(56, 'De La Salle-College of Saint Benilde'),
(57, 'De La Salle John Bosco College'),
(58, 'Eastern Luzon Colleges'),
(59, 'Eastern Samar State University'),
(60, 'Eastern Visayas State University'),
(61, 'Emilio Aguinaldo College'),
(62, 'Eulogio "Amang" Rodriguez Institute of Science and Technology (EARIST)'),
(63, 'Far East Asia Pacific Institute of Tourism Science and Technology, Inc. (Feapitsat Colleges)'),
(64, 'Far Eastern University'),
(65, 'FEATI University'),
(66, 'Fernandez College of Arts and Technology'),
(67, 'Filamer Christian University'),
(68, 'First Asia Institute of Technology and Humanities'),
(69, 'Fr. Saturnino Urios University'),
(70, 'Garcia College of Technology'),
(71, 'Gateways Institute of Science and Technology'),
(72, 'Global City Innovative College'),
(73, 'Guzman College of Science and Technology'),
(74, 'Holy Trinity College'),
(75, 'Holy Angel University'),
(76, 'Holy Child College of Davao'),
(77, 'ICCT Colleges'),
(78, 'Ifugao State University'),
(79, 'Iligan Medical Center College'),
(80, 'Ilocos Sur Polytechnic State College'),
(81, 'Ilocos Polytechnic State College'),
(82, 'Iloilo State College of Fisheries'),
(83, 'Immaculate Conception International'),
(84, 'Immaculate Heart of Mary College'),
(85, 'Information and Communications Technology Academy'),
(86, 'Interface Computer College'),
(87, 'International School of Asia and the Pacific '),
(88, 'Isabela State University'),
(89, 'Jamiatu Muslim Mindanao'),
(90, 'John B. Lacson Foundation Maritime University'),
(91, 'Jose Rizal Memorial State University'),
(92, 'Jose Rizal University'),
(93, 'Kalayaan College'),
(94, 'La Consolacion College'),
(95, 'La Consolacion University Philippines'),
(96, 'La Verdad Christian College'),
(97, 'Laguna College'),
(98, 'Laguna State Polytechnic University'),
(99, 'La Salle College Antipolo'),
(100, 'La Salle University'),
(101, 'Leyte Institute of Technology'),
(102, 'Liceo de Cagayan University'),
(103, 'Lyceum of the Philippines University'),
(104, 'Malayan Colleges Laguna'),
(105, 'Manila Adventist Medical Center and Colleges'),
(106, 'Manila Business College'),
(107, 'Manila Central University'),
(108, 'Manuel S. Enverga University Foundation'),
(109, 'Mapúa Institute of Technology'),
(110, 'Marikina Polytechnic College'),
(111, 'Marinduque State College'),
(112, 'Medina College Inc.'),
(113, 'Metropolitan Hospital College of Nursing'),
(114, 'Mindanao Polytechnic College'),
(115, 'Miriam College'),
(116, 'Montessori Professional College International (MPCI)'),
(117, 'Mount Carmel College'),
(118, 'Northeastern College'),
(119, 'Northwestern Visayan Colleges'),
(120, 'Nueva Vizcaya State University'),
(121, 'National College of Business and Arts'),
(122, 'National Teachers College'),
(123, 'National University'),
(124, 'Negros Oriental State University'),
(125, 'New Era University'),
(126, 'Olivarez College'),
(127, 'Our Lady of Assumption College'),
(128, 'Our Lady of Fatima University'),
(129, 'Our Lady of Perpetual Succor College'),
(130, 'Pamantasan ng Lungsod ng Maynila'),
(131, 'Pangasinan State University'),
(132, 'Partido State University'),
(133, 'PATTS College of Aeronautics'),
(134, 'Philippine Cambridge School'),
(135, 'Philippine Christian University'),
(136, 'Philippine College of Technology'),
(137, 'Philippine Normal University'),
(138, 'Philippine School of Business Administration'),
(139, 'Philippine State College of Aeronautics'),
(140, 'Philippine Women''s University'),
(141, 'Philtech Institute of Arts and Technology Inc.'),
(142, 'PMI Colleges'),
(143, 'Polytechnic University of the Philippines'),
(144, 'Quezon City Polytechnic University'),
(145, 'Quirino State University'),
(146, 'Ramon Magsaysay Technological University'),
(147, 'Riverside College'),
(148, 'Rizal Technological University'),
(149, 'Romblon State University'),
(150, 'Roosevelt College'),
(151, 'Sacred Heart College'),
(152, 'St. Dominic College of Asia'),
(153, 'Saint Jude College'),
(154, 'Saint Louis University'),
(155, 'Saint Mary''s University'),
(156, 'St. Paul College'),
(157, 'St. Peter''s College'),
(158, 'St. Scholastica''s College Manila'),
(159, 'San Beda University '),
(160, 'San Sebastian College'),
(161, 'Santa Isabel College'),
(162, 'Southern Leyte State University'),
(163, 'Southern Luzon State University'),
(164, 'STI College'),
(165, 'Systems Plus Computer College'),
(166, 'Surigao del Norte State University'),
(167, 'Tarlac State University'),
(168, 'Technological Institute of the Philippines'),
(169, 'Technological University of the Philippines'),
(170, 'Tomas del Rosario College'),
(171, 'Trinity University of Asia'),
(172, 'Universidad de Manila'),
(173, 'University of Antique'),
(174, 'University of Bohol'),
(175, 'University of Batangas'),
(176, 'University of Cebu'),
(177, 'University of the East'),
(178, 'University of Eastern Philippines'),
(179, 'University of La Salette'),
(180, 'University of Mindanao '),
(181, 'University of Perpetual Help'),
(182, 'University of the Samar Island Archipelag'),
(183, 'University of San Carlos'),
(184, 'University of the Visayas'),
(185, 'University of Santo Tomas'),
(186, 'Visayas State University'),
(187, 'West Negros University'),
(188, 'West Bay College'),
(189, 'Western Mindanao State University'),
(190, 'Zamboanga City State Polytechnic College'),
(191, '\r\nZamboanga State College of Marine Sciences and Technology'),
(192, 'other univ'),
(193, 'other univ'),
(194, 'other univ'),
(195, 'other univ'),
(196, 'other univ'),
(197, 'other univ1'),
(198, 'other univ2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incentives`
--
ALTER TABLE `incentives`
  ADD CONSTRAINT `incentives_ibfk_1` FOREIGN KEY (`NumberReferred`) REFERENCES `employees` (`PersonNumber`);

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
