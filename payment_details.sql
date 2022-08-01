-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2022 at 10:45 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
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
  `SFinalPayDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Bookingid`, `InstrumentID`, `ICharges`, `IAdvamt`, `IAdvamtDate`, `IFinalPay`, `IFinalPayDate`, `Faraskhanacode`, `FPrice`, `FAdvamt`, `FAdvamtDate`, `FFinalPay`, `FFinalPayDate`, `Patterncode`, `PPrice`, `PAdvamt`, `PAdvamtDate`, `PFinalPay`, `PFinalPayDate`, `Soundsyscode`, `SPrice`, `SAdvamt`, `SAdvamtDate`, `SFinalPay`, `SFinalPayDate`) VALUES
(45, 'I002', 10000, 2500, '2022-03-16', 7500, '2022-03-15', 'F002', 7000, 3000, '2022-03-15', 4000, '2022-03-15', 'P002', 8000, 3000, '0000-00-00', 5000, '2022-03-15', 'S002', 10000, 4000, '2022-03-15', 6000, '2022-03-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
