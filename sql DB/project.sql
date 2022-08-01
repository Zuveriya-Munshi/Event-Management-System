-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2022 at 06:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `Bookingid` int(11) NOT NULL,
  `Bookingdate` date NOT NULL,
  `EventID` int(11) NOT NULL,
  `Eventname` varchar(50) NOT NULL,
  `Eventdate` date NOT NULL,
  `Performername` varchar(50) NOT NULL,
  `Clientname` varchar(40) NOT NULL,
  `Clientaddress` varchar(60) NOT NULL,
  `Clientphone` bigint(20) NOT NULL,
  `Clientmail` varchar(50) NOT NULL,
  `Faraskhana` varchar(10) NOT NULL,
  `FaraskhanaCode` varchar(10) NOT NULL,
  `Soundsys` varchar(10) NOT NULL,
  `soundSysCode` varchar(10) NOT NULL,
  `Lighting` varchar(10) NOT NULL,
  `PatternCode` varchar(10) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Starttime` time NOT NULL,
  `Endtime` time NOT NULL,
  `Permissionstatus` varchar(10) NOT NULL,
  `Instrumentstatus` varchar(10) NOT NULL,
  `InstrumentID` varchar(10) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  PRIMARY KEY (`Bookingid`),
  KEY `EventID` (`EventID`),
  KEY `FaraskhanaCode` (`FaraskhanaCode`),
  KEY `soundSysCode` (`soundSysCode`),
  KEY `PatternCode` (`PatternCode`),
  KEY `InstrumentID` (`InstrumentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Bookingid`, `Bookingdate`, `EventID`, `Eventname`, `Eventdate`, `Performername`, `Clientname`, `Clientaddress`, `Clientphone`, `Clientmail`, `Faraskhana`, `FaraskhanaCode`, `Soundsys`, `soundSysCode`, `Lighting`, `PatternCode`, `Venue`, `Starttime`, `Endtime`, `Permissionstatus`, `Instrumentstatus`, `InstrumentID`, `Advanceamount`) VALUES
(1, '2022-03-12', 1, 'Wedding', '2022-03-19', 'Ketan', 'zuvi', 'madvi', 3289478971, 'munshi@gmail.com', 'Yes', 'F001', 'Yes', 'S001', 'Yes', 'P001', 'Vadodara', '12:30:00', '18:30:00', '', 'Yes', 'I001', 7000),
(2, '2022-03-12', 1, 'Wedding', '2022-03-19', 'Ketan', 'Dhuruv', 'panigate', 675347638, 'shah@gmail.com', 'Yes', 'F002', 'Yes', 'S002', 'Yes', 'P002', 'Vadodara', '15:30:00', '12:30:00', '', 'Yes', 'I001', 7000),
(3, '2022-03-15', 2, 'Bhajans', '2022-03-22', 'Ketan Patel', 'dhruv', 'panigate', 1234567890, 'dhruvshah@gmail.com', 'No', 'F001', 'Yes', 'S002', 'Yes', 'P002', 'Vadodara', '22:55:00', '12:55:00', 'Yes', 'Yes', 'I001', 5000),
(4, '2022-03-10', 1, 'Wedding', '2022-03-19', 'Ketan', 'dhruv', 'waghodia', 1234567890, 'dhruv@gmail.com', 'Yes', 'F001', 'Yes', 'S001', 'Yes', 'P001', 'Vadodara', '19:30:00', '23:29:00', '', 'Yes', 'I002', 7000),
(5, '2022-03-15', 4, 'Sangeet', '2022-03-24', 'Ketan Patel', 'nbn', 'madvi', 3289478971, 'munshi@gmail.com', 'Yes', 'F002', 'Yes', 'S002', 'Yes', 'P002', 'hnjnnmn', '09:20:00', '03:20:00', 'Yes', 'Yes', 'I001', 3000),
(6, '2022-03-14', 1, 'Wedding', '2022-03-21', 'Ketan Patel', 'zuveriya', 'mandvi', 6352455052, 'munsgi30577@gmail.com', 'Yes', 'F001', 'No', 'S001', 'Yes', 'P001', 'Vadodara', '09:30:00', '02:30:00', 'Yes', 'No', 'I001', 7000),
(7, '2022-03-19', 2, 'Bhajans', '2022-03-22', 'Ketan Patel', 'zuvi', 'mandvi', 6352455052, 'munshi30577@gamil.com', 'No', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '14:50:00', '20:50:00', 'Yes', 'No', 'I001', 5000),
(8, '2022-03-12', 4, 'Sangeet', '2022-03-23', 'Ketan Patel', 'Priyanka', 'Chokhandi', 6353978097, 'dalwadipriyanka1727@gmail.com', 'Yes', 'F002', 'No', 'S001', 'No', 'P001', 'Vadodara', '14:00:00', '17:00:00', 'Yes', 'Yes', 'I002', 3000),
(9, '2022-03-05', 4, 'Sangeet', '2022-03-06', 'Ketan Patel', '78543', 'madvi', 3289478971, 'munshi@gmail.com', 'Yes', 'F001', 'Yes', 'S001', 'Yes', 'P001', 'Vadodara', '15:55:00', '20:55:00', 'Yes', 'Yes', 'I001', 3000),
(10, '2022-03-15', 3, 'Birthday', '2022-03-21', 'Ketan Patel', 'Maya Patel', 'VIP Road', 8347743879, 'mayapatel12@gmail.com', 'Yes', 'F001', 'No', 'S001', 'Yes', 'P001', 'Vadodara', '11:25:00', '04:25:00', 'Yes', 'No', 'I001', 7000),
(11, '2022-03-12', 1, 'Wedding', '2022-03-19', 'Ketan', 'zuvi', 'madvi', 3289478971, 'munshi@gmail.com', 'Yes', 'F001', 'Yes', 'S001', 'Yes', 'P001', 'Vadodara', '12:30:00', '18:30:00', '', 'Yes', 'I001', 7000),
(12, '2022-03-12', 1, 'Wedding', '2022-03-19', 'Ketan', 'Dhuruv', 'panigate', 675347638, 'shah@gmail.com', 'Yes', 'F002', 'Yes', 'S002', 'Yes', 'P001', 'Vadodara', '15:30:00', '12:30:00', '', 'Yes', 'I003', 7000),
(13, '2022-03-02', 4, 'Sangeet', '2022-03-16', 'Ketan Patel', 'zuvi', 'madvi', 3289478971, 'munshi@gmail.com', 'No', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '13:00:00', '18:00:00', 'Yes', 'No', 'I001', 3000),
(14, '2022-03-08', 2, 'Bhajans', '2022-03-24', 'Ketan Patel', 'zuveriya', 'madvi', 6352455052, 'munshi30577@gmail.com', 'Yes', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '13:00:00', '18:00:00', 'No', 'No', 'I001', 5000),
(15, '2022-03-01', 1, 'Wedding', '2022-03-02', 'Ketan', 'zuveriya', 'madvi', 6352455052, 'munshi30577@gmail.com', 'Yes', 'F002', 'Yes', 'S001', 'Yes', 'P001', 'Vadodara', '15:15:00', '20:15:00', 'Yes', 'Yes', 'I001', 7000),
(16, '2022-03-01', 2, 'Bhajans', '2022-03-15', 'Ketan Patel', 'dhruv', 'panigate', 1234567890, 'dhruvshah@gmail.com', 'No', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '15:20:00', '20:20:00', 'Yes', 'No', 'I001', 5000),
(17, '2022-03-03', 3, 'Birthday', '2022-03-05', 'Ketan Patel', 'Safiya', 'madvi', 8735009940, 'safiyamunshi@gmail.com', 'Yes', 'F003', 'No', 'S001', 'Yes', 'P003', 'Vadodara', '17:25:00', '22:25:00', 'Yes', 'No', 'I001', 7000),
(18, '2022-03-08', 4, 'Sangeet', '2022-03-09', 'Ketan Patel', 'Zenil', 'Chokhandi', 8729817621, 'zenil@gmail.com', 'No', 'F001', 'No', 'S001', 'Yes', 'P003', 'Vadodara', '17:35:00', '22:35:00', 'Yes', 'Yes', 'I002', 3000),
(19, '2022-03-02', 1, 'Wedding', '2022-03-03', 'Ketan', 'zuvi', 'madvi', 8200716313, 'munshi30577@gmail.com', 'No', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '21:20:00', '15:20:00', 'Yes', 'Yes', 'I002', 7000),
(20, '2022-03-02', 3, 'Birthday', '2022-03-09', 'Ketan Patel', 'Mahek', 'VIP Road', 9834902389, 'mahek@gmail.com', 'No', 'F001', 'Yes', 'S003', 'Yes', 'P003', 'Vadodara', '18:30:00', '12:30:00', 'Yes', 'No', 'I001', 7000),
(21, '2022-03-22', 4, 'Sangeet', '2022-03-30', 'Ketan Patel', 'Jay', 'Kareli baug', 8753479231, 'jayprajapati@gmail.com', 'No', 'F001', 'Yes', 'S003', 'No', 'P001', 'Vadodara', '10:35:00', '03:35:00', 'Yes', 'No', 'I001', 3000),
(22, '2022-03-15', 1, 'Wedding', '2022-03-23', 'Ketan', 'zuvi', 'madvi', 3289478971, 'munshi@gmail.com', 'No', 'F001', 'No', 'S001', 'Yes', 'P001', 'Vadodara', '13:10:00', '18:10:00', 'Yes', 'No', 'I001', 7000),
(23, '2022-03-02', 2, 'Bhajans', '2022-03-08', 'Ketan Patel', 'dhruv', 'panigate', 1234567890, 'munshi@gmail.com', 'No', 'F001', 'No', 'S001', 'Yes', 'P001', 'Vadodara', '14:20:00', '19:20:00', 'No', 'No', 'I001', 5000),
(24, '2022-03-16', 3, 'Birthday', '2022-03-23', 'Ketan Patel', 'Khushi', 'Waghodia', 1234567890, 'munshi@gmail.com', 'No', 'F001', 'No', 'S001', 'Yes', 'P003', 'Vadodara', '14:40:00', '19:40:00', '', 'No', 'I001', 7000),
(26, '2022-03-25', 2, 'Bhajans', '2022-03-26', 'Ketan Patel', 'Shabana', 'madvi', 8200716313, 'munshi30577@gmail.com', 'No', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '19:05:00', '12:05:00', 'Yes', 'Yes', 'I002', 5000),
(27, '2022-03-10', 2, 'Bhajans', '2022-03-17', 'Ketan Patel', 'zubiya', 'Wadi', 8743898432, 'zubiya123@gmail.com', 'No', 'F001', 'No', 'S001', 'No', 'P001', 'Vadodara', '06:45:00', '12:45:00', 'Yes', 'Yes', 'I002', 5000),
(28, '2022-03-02', 4, 'Sangeet', '2022-03-09', 'Ketan Patel', 'Tannu', 'Raopura', 8973289238, 'tannu67@gmail.com', 'No', 'F002', 'No', 'S002', 'No', 'P002', 'Vadodara', '06:55:00', '23:55:00', 'Yes', 'No', 'I002', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `YourName` varchar(40) NOT NULL,
  `EmailAddress` varchar(40) NOT NULL,
  `Message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`YourName`, `EmailAddress`, `Message`) VALUES
('zuveriya', 'munshi@gmail.com', 'nice'),
('Jaydeep Sharma', 'jaydeep12@gamail.com', 'This is good website\r\n'),
('safiya munshi', 'munshi30577@gmail.com', 'Work Properly\r\n'),
('Raj Vyas', 'vyasraj941@gmail.com', 'Good\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE IF NOT EXISTS `eventlist` (
  `Eventid` int(11) NOT NULL,
  `Eventname` varchar(40) NOT NULL,
  `Eventdate` date NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Performername` varchar(40) NOT NULL,
  `Startime` time NOT NULL,
  `Endtime` time NOT NULL,
  `Bookingid` int(20) NOT NULL,
  `Customername` varchar(40) NOT NULL,
  `Permissionstatus` varchar(20) NOT NULL,
  `Noofstaff` int(11) NOT NULL,
  `Instrumentstatus` varchar(20) NOT NULL,
  `Transporterid` varchar(20) NOT NULL,
  `Vehicleno` varchar(20) NOT NULL,
  `Nameoftransporter` varchar(40) NOT NULL,
  `Contactno` bigint(20) NOT NULL,
  KEY `Transporterid` (`Transporterid`),
  KEY `Eventid` (`Eventid`),
  KEY `Bookingid` (`Bookingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`Eventid`, `Eventname`, `Eventdate`, `Location`, `Performername`, `Startime`, `Endtime`, `Bookingid`, `Customername`, `Permissionstatus`, `Noofstaff`, `Instrumentstatus`, `Transporterid`, `Vehicleno`, `Nameoftransporter`, `Contactno`) VALUES
(1, 'Wedding', '2022-03-19', 'Vadodara', 'Ketan Patel', '12:30:00', '18:30:00', 1, 'zuvi', 'Yes', 10, 'Yes', '1', 'Gj06hjhs', 'zuveriya', 0),
(1, 'Wedding', '2022-03-19', 'Vadodara', 'Ketan Patel', '15:30:00', '12:30:00', 2, 'Dhuruv', 'Yes', 10, 'Yes', '2', 'GJ06MN8976', 'RakeshBhai', 2091829087),
(2, 'Bhajans', '2022-03-22', 'Vadodara', 'Ketan Patel', '22:55:00', '12:55:00', 3, 'dhruv', 'Yes', 10, 'Yes', '2', 'GJ06MN8976', 'RakeshBhai', 2091829087),
(4, 'Sangeet', '2022-03-09', 'Vadodara', 'Ketan Patel', '06:55:00', '23:55:00', 28, 'Tannu', 'Yes', 15, 'Yes', '7', 'GJ06PQ89', 'akash bhai', 1250025520);

-- --------------------------------------------------------

--
-- Table structure for table `eventmaster`
--

CREATE TABLE IF NOT EXISTS `eventmaster` (
  `Eventid` int(11) NOT NULL,
  `Eventname` varchar(50) NOT NULL,
  `Eventtype` varchar(15) NOT NULL,
  `Performername` varchar(50) NOT NULL,
  `Instrunment` varchar(10) NOT NULL,
  `Faraskhana` varchar(10) NOT NULL,
  `Soundsys` varchar(10) NOT NULL,
  `Lighting` varchar(10) NOT NULL,
  `Noofstaff` int(11) NOT NULL,
  `Eventcharges` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  PRIMARY KEY (`Eventid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventmaster`
--

INSERT INTO `eventmaster` (`Eventid`, `Eventname`, `Eventtype`, `Performername`, `Instrunment`, `Faraskhana`, `Soundsys`, `Lighting`, `Noofstaff`, `Eventcharges`, `Advanceamount`) VALUES
(1, 'Wedding', 'Local', 'Ketan', 'YES', 'YES', 'YES', 'YES', 20, 15000, 7000),
(2, 'Bhajans', 'Local', 'Ketan Patel', 'YES', 'NO', 'YES', 'NO', 10, 10000, 5000),
(3, 'Birthday', 'Local', 'Ketan Patel', 'NO', 'NO', 'YES', 'YES', 10, 20000, 7000),
(4, 'Sangeet', 'Local', 'Ketan', 'YES', 'NO', 'YES', 'YES', 5, 7000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `faraskhana`
--

CREATE TABLE IF NOT EXISTS `faraskhana` (
  `Faraskhanacode` varchar(10) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Vendorcode` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  PRIMARY KEY (`Faraskhanacode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faraskhana`
--

INSERT INTO `faraskhana` (`Faraskhanacode`, `Description`, `Vendorcode`, `Name`, `Mobile`, `Email`, `Price`, `Advanceamount`) VALUES
('F001', 'Faraskhana', 's001', 'Sana', 9835910805, 'shradhha98@gmail.com', 3000, 1000),
('F002', 'Faraskhana for  Bhajans', 'g002', 'Gauri Faraskhana ', 5476878909, 'gauri78@gmail.com', 2500, 500),
('F003', 'Faraskhana', 'd003', 'Deep Patel', 7885487990, 'deepfaras@gmail.com', 6000, 3000),
('F004', 'Faraskhana for Sngeet Sandhya', 'm004', 'Mukesh Sharma', 8384776620, 'mukesh@gmail.com', 1000, 0),
('F005', 'Faraskhana for Birthday', 'bd783', 'Mehul Pandey', 9853772991, 'mehul28@gmail.com', 6000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `faraskhanarent`
--

CREATE TABLE IF NOT EXISTS `faraskhanarent` (
  `FaraskhanaCode` varchar(10) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `BookingID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `Vendorcode` varchar(10) NOT NULL,
  `ClientName` varchar(40) NOT NULL,
  `ClientAddress` varchar(60) NOT NULL,
  `ClientMobNo` bigint(20) NOT NULL,
  `ClientEmail` varchar(50) NOT NULL,
  `DateFrom` date NOT NULL,
  `DateTo` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  KEY `FaraskhanaCode` (`FaraskhanaCode`),
  KEY `BookingID` (`BookingID`),
  KEY `EventID` (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faraskhanarent`
--

INSERT INTO `faraskhanarent` (`FaraskhanaCode`, `Description`, `BookingID`, `EventID`, `Vendorcode`, `ClientName`, `ClientAddress`, `ClientMobNo`, `ClientEmail`, `DateFrom`, `DateTo`, `Price`, `Advanceamount`) VALUES
('F001', 'Faraskhana', 9, 4, 's001', '78543', 'madvi', 3289478971, 'munshi@gmail.com', '2022-03-06', '2022-03-06', 3000, 1000),
('F001', 'Faraskhana', 10, 4, 's001', 'zuveriya', 'madvi', 328947, 'munshi@gmail.com', '2022-03-04', '2022-03-04', 3000, 1000),
('F001', 'Faraskhana', 12, 2, 's001', 'zuvi', 'chokhandi', 43543, 'mushi30577@gmail.com', '2022-03-17', '2022-03-17', 3000, 1000),
('F001', 'Faraskhana', 12, 2, 's001', 'zuvi', 'chokhandi', 43543, 'mushi30577@gmail.com', '2022-03-17', '2022-03-17', 3000, 1000),
('F001', 'Faraskhana', 10, 4, 's001', 'zuveriya', 'madvi', 328947, 'munshi@gmail.com', '2022-03-04', '2022-03-04', 3000, 1000),
('F002', 'Faraskhana for Bhajans', 15, 1, 'g002', 'zuvi', 'madvi', 6352455052, 'munshi30577@gmail.com', '2022-03-02', '2022-03-02', 2500, 500),
('F003', 'Faraskhana', 17, 3, 'd003', 'Safiya', 'madvi', 8735009940, 'safiyamunshi@gmail.com', '2022-03-05', '2022-03-05', 6000, 3000),
('F004', 'Faraskhana for  Sangeet Sandhya', 25, 3, 'm004', 'Narayan', 'Waghodia', 9409421602, 'narayanthakkar@gmail.com', '2022-03-25', '2022-03-25', 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Username` varchar(40) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Phonenumber` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comments` varchar(100) NOT NULL,
  KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instrumentrent`
--

CREATE TABLE IF NOT EXISTS `instrumentrent` (
  `InstrumentID` varchar(10) NOT NULL,
  `Instrumenname` varchar(20) NOT NULL,
  `BookingID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `Iclientname` varchar(40) NOT NULL,
  `Iclientaddress` varchar(40) NOT NULL,
  `Iclientmobileno` bigint(20) NOT NULL,
  `Iclientemail` varchar(20) NOT NULL,
  `IDatefrom` date NOT NULL,
  `IDateto` date NOT NULL,
  `Charges` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  KEY `InstrumentID` (`InstrumentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrumentrent`
--

INSERT INTO `instrumentrent` (`InstrumentID`, `Instrumenname`, `BookingID`, `EventID`, `Iclientname`, `Iclientaddress`, `Iclientmobileno`, `Iclientemail`, `IDatefrom`, `IDateto`, `Charges`, `Advanceamount`) VALUES
('I002', 'Guitar', 4, 1, 'dhruv', 'waghodia', 1234567890, 'dhruv@gmail.com', '0000-00-00', '2022-03-19', 10000, 2500),
('I002', 'Guitar', 4, 1, 'dhruv', 'waghodia', 1234567890, 'dhruv@gmail.com', '0000-00-00', '2022-03-19', 10000, 2500),
('I002', 'Guitar', 4, 1, 'dhruv', 'waghodia', 1234567890, 'dhruv@gmail.com', '0000-00-00', '2022-03-19', 10000, 2500),
('I001', 'Drum Set', 9, 4, '78543', 'madvi', 3289478971, 'munshi@gmail.com', '2022-03-06', '2022-03-06', 80000, 20000),
('I001', 'Drum', 10, 4, 'zuvi', 'panigate', 328947, 'munshi@gmail.com', '0000-00-00', '2022-03-04', 80000, 20000),
('I001', 'Drum', 15, 1, 'zuveriya', 'madvi', 6352455052, 'munshi30577@gmail.co', '2022-03-02', '2022-03-02', 80000, 20000),
('I002', 'Guitar', 18, 4, 'Zenil', 'Chokhandi', 8729817621, 'zenil@gmail.com', '2022-03-09', '2022-03-09', 10000, 2500),
('I002', 'Guitar', 19, 1, 'zuvi', 'madvi', 8200716313, 'munshi30577@gmail.co', '2022-03-03', '2022-03-03', 10000, 2500),
('I001', 'Drum', 25, 3, 'Narayan', 'Waghodia', 9409421602, 'narayanthakkar@gmail', '2022-03-25', '2022-03-25', 80000, 20000),
('I002', 'Guitar', 26, 2, 'Shabana', 'madvi', 8200716313, 'munshi30577@gmail.co', '2022-03-26', '2022-03-26', 10000, 2500),
('I002', 'Guitar', 26, 2, 'Shabana', 'madvi', 8200716313, 'munshi30577@gmail.co', '2022-03-26', '2022-03-26', 10000, 2500),
('I002', 'Guitar', 26, 2, 'Shabana', 'madvi', 8200716313, 'munshi30577@gmail.co', '2022-03-26', '2022-03-26', 10000, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `instrunmentmaster`
--

CREATE TABLE IF NOT EXISTS `instrunmentmaster` (
  `Id` varchar(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Company` varchar(40) NOT NULL,
  `Purchasedate` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `WG` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrunmentmaster`
--

INSERT INTO `instrunmentmaster` (`Id`, `Description`, `Company`, `Purchasedate`, `Quantity`, `Price`, `Advanceamount`, `Status`, `WG`) VALUES
('I001', 'Drum', 'Ronald', '2022-02-28', 1, 80000, 20000, 'Yes', '2'),
('I002', 'Guitar', 'Ronald', '2022-03-02', 2, 10000, 2500, 'Yes', '1'),
('I003', 'Casio', 'Ronald', '2022-03-03', 1, 100000, 0, 'Yes', '5'),
('I004', 'Tabla', 'Ronald', '2022-03-17', 2, 8000, 2000, 'Yes', '2 year');

-- --------------------------------------------------------

--
-- Table structure for table `lighting`
--

CREATE TABLE IF NOT EXISTS `lighting` (
  `Patterncode` varchar(10) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Vendorcode` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  PRIMARY KEY (`Patterncode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lighting`
--

INSERT INTO `lighting` (`Patterncode`, `Description`, `Vendorcode`, `Name`, `Mobile`, `Email`, `Price`, `Advanceamount`) VALUES
('P001', 'Lighting', 'p001', 'Prism', 9408405143, 'prismlight@gmail.com', 2000, 500),
('P002', 'Lighting', 'm002', 'Milan', 1278021150, 'milan12@gmail.com', 3000, 1000),
('P003', 'Background Lighting for Birthday', 't003', 'Tisva Lightingn Studio', 9898099036, 'tisva98@gmail.com', 3500, 1000),
('P004', 'Lighting', 'j004', 'Jay', 6553389802, 'jay434@gmail.com', 4000, 1000),
('P005', 'Lighting for Garba', 'gb984', 'Sahil Sharma', 9895488934, 'sahilsharma@gmail.com', 4000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `lightingrent`
--

CREATE TABLE IF NOT EXISTS `lightingrent` (
  `PatternCode` varchar(10) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `BookingID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `VendorCode` varchar(10) NOT NULL,
  `ClientName` varchar(40) NOT NULL,
  `ClientAddress` varchar(60) NOT NULL,
  `ClientMobNo` bigint(20) NOT NULL,
  `ClientEmail` varchar(50) NOT NULL,
  `DateFrom` date NOT NULL,
  `DateTo` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  KEY `PatternCode` (`PatternCode`),
  KEY `BookingID` (`BookingID`),
  KEY `EventID` (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lightingrent`
--

INSERT INTO `lightingrent` (`PatternCode`, `Description`, `BookingID`, `EventID`, `VendorCode`, `ClientName`, `ClientAddress`, `ClientMobNo`, `ClientEmail`, `DateFrom`, `DateTo`, `Price`, `Advanceamount`) VALUES
('P001', 'Lighting', 22, 1, 'p002', 'zuveriya', 'madvi', 3289478971, 'munshi@gmail.com', '2022-03-23', '2022-03-23', 2000, 500),
('P001', 'Lighting', 22, 1, 'p002', 'zuveriya', 'madvi', 3289478971, 'munshi@gmail.com', '2022-03-23', '2022-03-23', 2000, 500),
('P001', 'Lighting', 23, 2, 'p001', 'dhruvshah', 'panigate', 1234567890, 'munshi@gmail.com', '2022-03-08', '2022-03-08', 2000, 500),
('P003', 'Background Lighting for Birthday', 24, 3, 't003', 'Khushi', 'panigate', 1234567890, 'munshi@gmail.com', '2022-03-23', '2022-03-23', 3500, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE IF NOT EXISTS `loginform` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`Username`, `Password`) VALUES
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Jaydeep', '444444'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Raj', 'Raj123'),
('Zuveriya', '111111'),
('Raj', 'Raj123'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111'),
('Zuveriya', '111111'),
('Dhruv', '222222'),
('Zuveriya', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `PaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `Bookingid` int(11) NOT NULL,
  `InstrumentID` varchar(10) NOT NULL,
  `ICharges` int(11) NOT NULL,
  `IAdvamt` int(11) NOT NULL,
  `IAdvamtDate` date DEFAULT NULL,
  `IFinalPay` int(10) NOT NULL,
  `IFinalPayDate` date DEFAULT NULL,
  `Faraskhanacode` varchar(10) NOT NULL,
  `FPrice` int(11) NOT NULL,
  `FAdvamt` int(11) NOT NULL,
  `FAdvamtDate` date DEFAULT NULL,
  `FFinalPay` int(11) NOT NULL,
  `FFinalPayDate` date DEFAULT NULL,
  `Patterncode` varchar(10) NOT NULL,
  `PPrice` int(11) NOT NULL,
  `PAdvamt` int(11) NOT NULL,
  `PAdvamtDate` date DEFAULT NULL,
  `PFinalPay` int(11) NOT NULL,
  `PFinalPayDate` date DEFAULT NULL,
  `Soundsyscode` varchar(10) NOT NULL,
  `SPrice` int(11) NOT NULL,
  `SAdvamt` int(11) NOT NULL,
  `SAdvamtDate` date DEFAULT NULL,
  `SFinalPay` int(11) NOT NULL,
  `SFinalPayDate` date DEFAULT NULL,
  PRIMARY KEY (`PaymentID`),
  KEY `Bookingid` (`Bookingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`PaymentID`, `Bookingid`, `InstrumentID`, `ICharges`, `IAdvamt`, `IAdvamtDate`, `IFinalPay`, `IFinalPayDate`, `Faraskhanacode`, `FPrice`, `FAdvamt`, `FAdvamtDate`, `FFinalPay`, `FFinalPayDate`, `Patterncode`, `PPrice`, `PAdvamt`, `PAdvamtDate`, `PFinalPay`, `PFinalPayDate`, `Soundsyscode`, `SPrice`, `SAdvamt`, `SAdvamtDate`, `SFinalPay`, `SFinalPayDate`) VALUES
(1, 15, 'I001', 80000, 20000, '2022-03-21', 60000, '2022-03-21', 'F002', 2500, 500, '2022-03-21', 2000, '2022-03-21', 'P001', 2000, 500, '2022-03-21', 1500, '2022-03-21', 'S001', 3000, 1000, '2022-03-21', 2000, '2022-03-21'),
(2, 16, '', 0, 0, '2022-03-20', 0, '2022-03-20', '', 0, 0, '2022-03-20', 0, '2022-03-20', '', 0, 0, '2022-03-20', 0, '2022-03-20', '', 0, 0, '2022-03-20', 0, '2022-03-20'),
(3, 17, '', 0, 0, '2022-03-25', 0, '2022-03-25', 'F003', 6000, 3000, '2022-03-25', 3000, '2022-03-25', 'P003', 3500, 1000, '2022-03-25', 2500, '2022-03-25', '', 0, 0, '2022-03-25', 0, '2022-03-25'),
(4, 18, 'I002', 10000, 2500, '2022-03-25', 7500, '2022-03-16', '', 0, 0, '2022-03-01', 0, '2022-03-12', 'P003', 3500, 1000, '2022-03-23', 2500, '2022-03-24', '', 0, 0, '2022-03-12', 0, '2022-03-22'),
(5, 20, '', 0, 0, '2022-03-01', 0, '2022-03-01', '', 0, 0, '2022-03-01', 0, '2022-03-01', 'P003', 3500, 1000, '2022-03-01', 2500, '2022-03-01', 'S003', 8000, 2000, '2022-03-01', 6000, '2022-03-01'),
(6, 19, 'I002', 10000, 2500, '2022-03-01', 7500, '2022-03-01', '', 0, 0, '2022-03-02', 0, '2022-03-01', '', 0, 0, '2022-03-01', 0, '2022-03-01', '', 0, 0, '2022-03-02', 0, '2022-03-01'),
(31, 21, '', 0, 0, '2022-03-22', 0, '2022-03-22', '', 0, 0, '2022-03-22', 0, '2022-03-22', '', 0, 0, '2022-03-22', 0, '2022-03-22', 'S003', 8000, 2000, '2022-03-22', 0, '2022-03-22'),
(32, 24, '', 0, 0, '2022-03-24', 0, '2022-03-30', '', 0, 0, '2022-03-16', 0, '2022-03-23', 'P003', 3500, 1000, '2022-03-23', 2500, '2022-03-23', '', 0, 0, '2022-03-23', 0, '2022-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Usertype` varchar(20) NOT NULL,
  `Usercat` varchar(20) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Addr` varchar(50) NOT NULL,
  `Mobileno` bigint(20) NOT NULL,
  `SecQuetion` varchar(50) NOT NULL,
  `SecAnswer` varchar(50) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Usertype`, `Usercat`, `Username`, `Password`, `Emailid`, `Fullname`, `Addr`, `Mobileno`, `SecQuetion`, `SecAnswer`) VALUES
('User', 'USER', 'Dhruv', '222222', 'dhruvshah@gmail.com', 'Dhruv Shah', 'Panigate', 9824635458, 'What is Your Last 4 digits in your phone no.?', '5458'),
('GITAR', 'USER', 'Jaydeep', '444444', 'jaydeep12@gamail.com', 'Jaydeep Sharma', 'Moghal Wada', 8490328321, 'What is Your favourite color?', 'Yellow'),
('SINGER', 'USER', 'Raj', 'Raj123', 'vyasraj941@gmail.com', 'Raj Vyas', 'New sama road', 9723468853, 'What is Your last school?', 'bright'),
('User', 'USER', 'safiya', '333333', 'munshi30577@gmail.com', 'Safiya Munshi', 'madvi', 4564654540, 'What is Your last school?', 'Parth'),
('User', 'ADMIN', 'Zuveriya', '111111', 'munshi@gmail.com', 'Zuveriya', 'Mandvi', 6352455052, 'What is Your favourite color?', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `soundsyrent`
--

CREATE TABLE IF NOT EXISTS `soundsyrent` (
  `soundsysCode` varchar(10) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `BookingID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `VendorCode` varchar(10) NOT NULL,
  `ClientName` varchar(40) NOT NULL,
  `ClientAddress` varchar(60) NOT NULL,
  `ClientMobNo` bigint(20) NOT NULL,
  `ClientEmail` varchar(50) NOT NULL,
  `DateFrom` date NOT NULL,
  `DateTo` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Advanceamount` int(11) NOT NULL,
  KEY `soundsysCode` (`soundsysCode`),
  KEY `BookingID` (`BookingID`),
  KEY `EventID` (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soundsyrent`
--

INSERT INTO `soundsyrent` (`soundsysCode`, `Description`, `BookingID`, `EventID`, `VendorCode`, `ClientName`, `ClientAddress`, `ClientMobNo`, `ClientEmail`, `DateFrom`, `DateTo`, `Price`, `Advanceamount`) VALUES
('S001', 'Sound system for Wedding Anniversary', 4, 1, 'k001', 'dhruv', 'waghodia road', 1234567890, 'dhruv@gmail.com', '2022-03-19', '2022-03-19', 3000, 1000),
('S001', 'Sound system for Wedding Anniversary', 4, 1, 'k001', 'dhruv', 'waghodia road', 1234567890, 'dhruv@gmail.com', '2022-03-19', '2022-03-19', 3000, 1000),
('S001', 'Sound', 9, 4, 'k001', '78543', 'madvi', 3289478971, 'munshi@gmail.com', '2022-03-06', '2022-03-06', 3000, 1000),
('S001', 'Sound', 11, 1, 'k001', 'zuvi', 'panigate', 43453, 'munshi@gmail.com', '2022-03-16', '2022-03-16', 3000, 1000),
('S001', 'Sound', 10, 2, 'k001', 'zuvi', 'panigate', 1234568549, 'munshi', '2022-03-10', '2022-03-10', 3000, 1000),
('S002', 'Sound system for Bhajans', 12, 4, 'kr002', 'Nischal Patel', 'Chokhandi', 3698745120, 'nischal@gmail.com', '2022-03-26', '2022-03-26', 2000, 1000),
('S003', 'Sound', 20, 3, '9jkf', 'Mahek', 'VIP Road', 9834902389, 'mahek@gmail.com', '2022-03-09', '2022-03-09', 8000, 2000),
('S003', 'Sound', 21, 4, '9jkf', 'Jay', 'Kareli baug', 8753479231, 'jayprajapati@gmail.com', '2022-03-30', '2022-03-30', 8000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `soundsystem`
--

CREATE TABLE IF NOT EXISTS `soundsystem` (
  `Sys_Code` varchar(10) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Vendor_Code` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `AdvAmt` int(11) NOT NULL,
  PRIMARY KEY (`Sys_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soundsystem`
--

INSERT INTO `soundsystem` (`Sys_Code`, `Description`, `Vendor_Code`, `Name`, `Mobile`, `Email`, `Price`, `AdvAmt`) VALUES
('S001', 'Sound', 'k001', 'Ketul', 9825960647, 'ketul98@gmail.com', 3000, 1000),
('S002', 'Sound', 'kr002', 'Krish', 9998980394, 'krish@gmail.com', 2000, 1000),
('S003', 'Sound', '9jkf', 'YunusMunshi', 3289478971, 'munshi@gmail.com', 8000, 2000),
('S004', 'Sound', 'd004', 'DJ', 9974221055, 'dj_zeel@gmail.com', 1500, 0),
('S005', 'Sound', 'c005', 'Chander', 9503990043, 'chander@gmail.com', 3000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `staffmaster`
--

CREATE TABLE IF NOT EXISTS `staffmaster` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Skill` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Stafftype` varchar(15) NOT NULL,
  `Contactno` bigint(20) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffmaster`
--

INSERT INTO `staffmaster` (`Id`, `Name`, `Gender`, `Skill`, `Address`, `Stafftype`, `Contactno`, `Emailid`) VALUES
(1, 'Ketan Patel', 'MALE', 'SINGER', 'Vadodara', 'PERMANENT', 9638527410, 'ketan345@gmail.com'),
(2, 'Kinjal Patel', 'FEMALE', 'GITAR', 'Vadodara', 'CONTRACT', 8160624711, 'kinjal4711@gmail.com'),
(3, 'Keyur Patel', 'MALE', 'TABLE', 'Vadodara', 'PERMANENT', 6352986852, 'keyur852@gmail.com'),
(4, 'Rahul', 'MALE', 'SINGER', 'Vadodara', 'PERMANENT', 9662058818, 'rahul5656@gmail.com'),
(5, 'Jigar', 'MALE', 'CASIOPLAYER', 'Vadodara', 'PERMANENT', 9925525350, 'jigar5350@gmail.com'),
(6, 'Jay Sharma', 'MALE', 'DRUMSET', 'Chokhandi', 'PERMANENT', 8490328321, 'jay123@gamail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
  `StudioCode` varchar(10) NOT NULL,
  `StudioName` varchar(10) NOT NULL,
  `StudioAddress` varchar(40) NOT NULL,
  `OwnerName` varchar(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mobile_no` bigint(20) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `BookingPrice` int(11) NOT NULL,
  `Min_Advanceamount` int(11) NOT NULL,
  PRIMARY KEY (`StudioCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`StudioCode`, `StudioName`, `StudioAddress`, `OwnerName`, `Address`, `Mobile_no`, `EmailId`, `BookingPrice`, `Min_Advanceamount`) VALUES
('1', 'brhyms', 'Idk', 'Ketan', 'idk', 7682736738, 'ketan123@gmail.com', 2000, 1000),
('2', 'brymsStudi', 'rajuomlet', 'Ketan Pate', 'rajuomlet', 3289478971, 'ketan123@gmail.com', 20000, 2000),
('3', 'bryms stud', 'Apartment S, Mahalaxmi, 4, Muktanand Cir', 'Ketan Pate', 'Karelibagh, Vadodara,', 9727781727, 'ketan123@gmail.com', 20000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `studio_booking`
--

CREATE TABLE IF NOT EXISTS `studio_booking` (
  `StudioCode` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Recording_type` varchar(50) NOT NULL,
  `ClientName` varchar(40) NOT NULL,
  `ClientAddress` varchar(60) NOT NULL,
  `ClientMobile` bigint(20) NOT NULL,
  `ClientEmail` varchar(50) NOT NULL,
  `BookingDateFrom` time NOT NULL,
  `BookingDateTo` time NOT NULL,
  `TotalCharges` int(11) NOT NULL,
  `Advance_Amount` int(11) NOT NULL,
  `Payment_Mode` varchar(20) NOT NULL,
  KEY `StudioCode` (`StudioCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio_booking`
--

INSERT INTO `studio_booking` (`StudioCode`, `Date`, `Recording_type`, `ClientName`, `ClientAddress`, `ClientMobile`, `ClientEmail`, `BookingDateFrom`, `BookingDateTo`, `TotalCharges`, `Advance_Amount`, `Payment_Mode`) VALUES
('1', '2022-03-10', 'Album', 'zuveriya', 'madvi', 3289470985, 'zuveriya@gmail.com', '17:20:00', '22:20:00', 5000, 2000, 'Online'),
('1', '2022-03-16', 'CD', 'zuvi', 'mandvi', 3289478971, 'munshi30577@gmail.com', '17:35:00', '22:35:00', 15000, 5000, ''),
('2', '2022-03-21', 'CD', 'Mahesh', 'panigate', 1234567890, 'munshi@gmail.com', '00:00:00', '00:00:00', 20000, 2000, 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `transportermaster`
--

CREATE TABLE IF NOT EXISTS `transportermaster` (
  `Transporterid` varchar(20) NOT NULL,
  `Vehicleno` varchar(20) NOT NULL,
  `Vehicletype` varchar(20) NOT NULL,
  `Drivername` varchar(40) NOT NULL,
  `Contactno` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Charges` bigint(20) NOT NULL,
  PRIMARY KEY (`Transporterid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportermaster`
--

INSERT INTO `transportermaster` (`Transporterid`, `Vehicleno`, `Vehicletype`, `Drivername`, `Contactno`, `Email`, `Charges`) VALUES
('1', 'GJ06AD3532', 'Tampo', 'YogeshBhai', 9662058818, 'yogesh109@gmail.com', 1000),
('2', 'GJ06MN8976', 'Bus', 'RakeshBhai', 2091829087, 'rakesh20@gmail.com', 8000),
('3', 'GJ06PQ7453', 'BUSS', 'SanjayBhai', 7984915423, 'sanjay2987@gmail.com', 4000),
('4', 'GJ06FQ8753', 'Tampo', 'AkashBhai', 3981897024, 'akash810@gmail.com', 2000),
('5', 'GJ06ZB5672', 'Bus', 'RameshBhai', 1234820880, 'ramesh958@gmail.com', 10000),
('6', 'GJ06AM8790', 'Tampo', 'RahulBhai', 1234567890, 'rahul123@gmail.com', 2000),
('7', 'GJ06PQ89', 'Tampo', 'akash bhai', 1250025520, 'akash@gmail.com', 2000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_EventID` FOREIGN KEY (`EventID`) REFERENCES `eventmaster` (`Eventid`),
  ADD CONSTRAINT `fk_FCode` FOREIGN KEY (`FaraskhanaCode`) REFERENCES `faraskhana` (`Faraskhanacode`),
  ADD CONSTRAINT `fk_InstruID` FOREIGN KEY (`InstrumentID`) REFERENCES `instrunmentmaster` (`Id`),
  ADD CONSTRAINT `fk_PCode` FOREIGN KEY (`PatternCode`) REFERENCES `lighting` (`Patterncode`),
  ADD CONSTRAINT `fk_SCode` FOREIGN KEY (`soundSysCode`) REFERENCES `soundsystem` (`Sys_Code`);

--
-- Constraints for table `eventlist`
--
ALTER TABLE `eventlist`
  ADD CONSTRAINT `fk_BookID2` FOREIGN KEY (`Bookingid`) REFERENCES `booking` (`Bookingid`),
  ADD CONSTRAINT `fk_EventID2` FOREIGN KEY (`Eventid`) REFERENCES `booking` (`EventID`),
  ADD CONSTRAINT `fk_TransID` FOREIGN KEY (`Transporterid`) REFERENCES `transportermaster` (`Transporterid`);

--
-- Constraints for table `faraskhanarent`
--
ALTER TABLE `faraskhanarent`
  ADD CONSTRAINT `fk_EvID2` FOREIGN KEY (`EventID`) REFERENCES `eventmaster` (`Eventid`),
  ADD CONSTRAINT `fk_FarasCode` FOREIGN KEY (`FaraskhanaCode`) REFERENCES `faraskhana` (`Faraskhanacode`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_unm2` FOREIGN KEY (`Username`) REFERENCES `registration` (`Username`);

--
-- Constraints for table `instrumentrent`
--
ALTER TABLE `instrumentrent`
  ADD CONSTRAINT `fk_InstruID2` FOREIGN KEY (`InstrumentID`) REFERENCES `instrunmentmaster` (`Id`);

--
-- Constraints for table `lightingrent`
--
ALTER TABLE `lightingrent`
  ADD CONSTRAINT `fk_EvID` FOREIGN KEY (`EventID`) REFERENCES `eventmaster` (`Eventid`),
  ADD CONSTRAINT `fk_PCode1` FOREIGN KEY (`PatternCode`) REFERENCES `lighting` (`Patterncode`);

--
-- Constraints for table `loginform`
--
ALTER TABLE `loginform`
  ADD CONSTRAINT `fk_unm` FOREIGN KEY (`Username`) REFERENCES `registration` (`Username`);

--
-- Constraints for table `soundsyrent`
--
ALTER TABLE `soundsyrent`
  ADD CONSTRAINT `fk_EventID02` FOREIGN KEY (`EventID`) REFERENCES `eventmaster` (`Eventid`),
  ADD CONSTRAINT `fk_SCode02` FOREIGN KEY (`soundsysCode`) REFERENCES `soundsystem` (`Sys_Code`);

--
-- Constraints for table `studio_booking`
--
ALTER TABLE `studio_booking`
  ADD CONSTRAINT `fk_stcode` FOREIGN KEY (`StudioCode`) REFERENCES `studio` (`StudioCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
