-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 09:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgpdso_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agentCode` int(11) NOT NULL,
  `agentLastname` varchar(100) NOT NULL,
  `agentFirstname` varchar(100) NOT NULL,
  `agentMiddlename` varchar(100) NOT NULL,
  `agentBirthdate` date NOT NULL,
  `agentApptDate` date NOT NULL,
  `agentTeam` int(11) NOT NULL,
  `agentPosition` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agentCode`, `agentLastname`, `agentFirstname`, `agentMiddlename`, `agentBirthdate`, `agentApptDate`, `agentTeam`, `agentPosition`) VALUES
(32432432, 'weweqweq', 'weewwqe', 'eqwqw', '2018-07-25', '2018-07-30', 0, 'qweqw'),
(98, 'poi', 'poiu', 'poiuyt', '2018-07-31', '2018-07-31', 6, 'Mananagat'),
(567, 'erty', 'dfgh', 'sdfg', '2018-07-28', '2018-07-31', 3, 'qwertyu'),
(111, 'Loppy', 'Lumpy', 'O', '2018-07-12', '2018-07-31', 2, 'NCA'),
(9022, 'Yolly', 'Jompy', 'A', '2018-07-18', '2018-07-31', 0, 'Any');

-- --------------------------------------------------------

--
-- Table structure for table `agentstraining`
--

CREATE TABLE `agentstraining` (
  `ATagentTrainingID` int(50) NOT NULL,
  `ATagentID` varchar(50) NOT NULL,
  `ATagentName` varchar(20) NOT NULL,
  `ATtrainingName` varchar(20) NOT NULL,
  `ATrequiredPosition` varchar(20) NOT NULL,
  `ATdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agentstraining`
--

INSERT INTO `agentstraining` (`ATagentTrainingID`, `ATagentID`, `ATagentName`, `ATtrainingName`, `ATrequiredPosition`, `ATdate`) VALUES
(2, 'gagu, puta ', '123', 'A2', '7', '0000-00-00'),
(3, 'Gropo, Haime', '9884', 'A3', 'NCA', '0000-00-00'),
(4, 'Gropo, Haime', '9884', 'A3', 'NCA', '0000-00-00'),
(5, 'Gropo, Haime', '9884', 'A3', 'NCA', '0000-00-00'),
(6, 'Gropo, Haime', '9884', 'A3', 'NCA', '2018-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `bene_ID` int(50) NOT NULL,
  `bene_policyNo` text NOT NULL,
  `bene_lastName` text NOT NULL,
  `bene_firstName` text NOT NULL,
  `bene_middleName` text NOT NULL,
  `bene_birthDate` date NOT NULL,
  `bene_address` text NOT NULL,
  `bene_contactNo` text NOT NULL,
  `bene_relationShip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`bene_ID`, `bene_policyNo`, `bene_lastName`, `bene_firstName`, `bene_middleName`, `bene_birthDate`, `bene_address`, `bene_contactNo`, `bene_relationShip`) VALUES
(20, '3421', 'asas', 'asas', 'asas', '0000-00-00', 'asas', 'asas', 'asas'),
(21, '353533', 'fred', 'ca', 'mm', '2018-09-17', 'bbb', '9090', 'mother'),
(22, '60013', 'mnmnm', 'nmnmn', 'mnmnmnm', '2018-09-25', 'nmnm', '2352352', 'mother'),
(23, '88000', '89999', '45555', '4555', '0000-00-00', '4555', '455', '4555'),
(24, '684774', 'mn', 'mn', 'mn', '2018-09-25', 'mn', '89', 'mother'),
(26, '2477222', 'nmmmn', 'mnmnm', 'nmnm', '2018-09-02', 'nmnmn', 'nmnmn', 'nmnm');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(50) NOT NULL,
  `cFirstname` varchar(50) NOT NULL,
  `cLastname` varchar(50) NOT NULL,
  `cMiddlename` varchar(50) NOT NULL,
  `cBirthdate` date NOT NULL,
  `cAddress` varchar(50) NOT NULL,
  `cCellno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientID`, `cFirstname`, `cLastname`, `cMiddlename`, `cBirthdate`, `cAddress`, `cCellno`) VALUES
(85860, 'Marvelrb12', 'Bartar12', 'Ar12', '2018-08-13', 'Sitio Atis Baniladr12', '8736458764312'),
(85864, 'xzczx', 'zxcxc', 'zxcxc', '2018-07-07', 'zxcxc', '00002222'),
(85865, 'asdsad', 'sdasd', 'sadsd', '2018-07-25', 'asdsda', 'asdsd'),
(85866, 'asssssqqq', 'ffffffqqq', 'ddddd', '2018-07-19', 'zcxvzx', '67858'),
(85867, 'nmvbmbv', 'fdgf', 'xcvcv', '2018-07-29', 'zxcxcz', 'ccc333'),
(85868, 'dfdf', 'dfd', 'dfd', '2018-08-02', 'sdfdsf', '4323423'),
(85869, 'here', 'here', 'here', '2018-08-04', 'here', 'herer'),
(85870, 'hellop12', 'hello12', 'hello12', '2018-08-23', 'hello12', '34534512'),
(85871, 'as', 'ss', 'sa', '2018-08-11', 'ss', '1414'),
(85872, 'mm12', 'mm12', 'mm', '2018-08-20', 'Sitio12', '2222'),
(85873, 'Marvel', 'Barte', 'A', '2018-09-28', 'Sitio Atis', '092415551');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `fundID` int(11) NOT NULL,
  `fundName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`fundID`, `fundName`) VALUES
(123, 'yaya'),
(321, 'pipi'),
(322, 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `insuredpolicy`
--

CREATE TABLE `insuredpolicy` (
  `pol` int(11) NOT NULL,
  `insured_policyNo` text NOT NULL,
  `insured_lastName` text NOT NULL,
  `insured_firstName` text NOT NULL,
  `insured_middleName` text NOT NULL,
  `insured_birthdate` date NOT NULL,
  `insured_address` text NOT NULL,
  `insured_contactNo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insuredpolicy`
--

INSERT INTO `insuredpolicy` (`pol`, `insured_policyNo`, `insured_lastName`, `insured_firstName`, `insured_middleName`, `insured_birthdate`, `insured_address`, `insured_contactNo`) VALUES
(3, '3421', 'ffffffqqq', 'asssssqqq', 'ddddd', '2018-07-19', 'zcxvzx', '67858'),
(4, 'W100411', 'mm12', 'mm12', 'mm', '2018-08-20', 'Sitio12', '2222'),
(5, '353533', 'Bartar', 'Marvelrb', 'Ar', '2018-08-13', 'Sitio Atis Baniladr', '87364587643'),
(6, '60013', 'Bartar', 'Marvelrb', 'Araa', '2018-08-13', 'Sitio Atis Baniladr', '87364587643'),
(11, '65767', '', '', '', '0000-00-00', '', ''),
(12, '764756', 'Bartar', 'Marvelrb', 'Ar', '2018-08-13', 'Sitio Atis Baniladr', '87364587643'),
(13, '909888', 'Bartar', 'Marvelrb', 'Ar', '2018-08-13', 'Sitio Atis Baniladr', '87364587643'),
(14, '838582', '', '', '', '0000-00-00', '', ''),
(15, '9898383', '', '', '', '0000-00-00', '', ''),
(16, '8838822', '', '', '', '0000-00-00', '', ''),
(17, '70000', 'Bartar', 'Marvelrb', 'Ar', '2018-08-13', 'Sitio Atis Baniladr', '87364587643'),
(18, '79797', '', '', '', '0000-00-00', '', ''),
(19, '9938773', '', '', '', '0000-00-00', '', ''),
(20, '8000', '', '', '', '0000-00-00', '', ''),
(21, '909568', '', '', '', '0000-00-00', '', ''),
(22, '980808080w', '', '', '', '0000-00-00', '', ''),
(23, '68684658', '', '', '', '0000-00-00', '', ''),
(24, '8849939', '', '', '', '0000-00-00', '', ''),
(25, '9009000', '', '', '', '0000-00-00', '', ''),
(26, '5777', '', '', '', '0000-00-00', '', ''),
(27, '2331', '', '', '', '0000-00-00', '', ''),
(28, '124134', '', '', '', '0000-00-00', '', ''),
(29, '79979797', '', '', '', '0000-00-00', '', ''),
(30, '9090', 'Bartar12', 'Marvelrb12', 'Ar12', '2018-08-13', 'Sitio Atis Baniladr12', '8736458764312'),
(31, '137336', 'sdasd', 'asdsad', 'sadsd', '2018-07-25', 'asdsda', 'asdsd'),
(32, '88000', 'ffffffqqq', 'asssssqqq', 'ddddd', '2018-07-19', 'zcxvzx', '67858'),
(33, '684774', 'Bartar12', 'Marvelrb12', 'Ar12', '2018-08-13', 'Sitio Atis Baniladr12', '8736458764312'),
(34, '', '', '', '', '0000-00-00', '', ''),
(35, '', '', '', '', '0000-00-00', '', ''),
(36, '', '', '', '', '0000-00-00', '', ''),
(37, 'dfdfdf', 'Bartar12', 'Marvelrb12', 'Ar12', '2018-08-13', 'Sitio Atis Baniladr12', '8736458764312'),
(38, '2477222', 'Barte', 'Marvel', 'A', '2018-09-28', 'Sitio Atis', '092415551');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` int(50) NOT NULL,
  `payment_policyNo` text NOT NULL,
  `payment_Amount` text NOT NULL,
  `payment_issueDate` date NOT NULL,
  `payment_MOP` text NOT NULL,
  `payment_transDate` date NOT NULL,
  `payment_OR` text NOT NULL,
  `payment_APR` text NOT NULL,
  `payment_dueDate` text NOT NULL,
  `payment_nextDue` date NOT NULL,
  `payment_soaDate` text NOT NULL,
  `payment_remarks` text NOT NULL,
  `payment_remarks_year` text NOT NULL,
  `payment_remarks_month` text NOT NULL,
  `payment_latest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_ID`, `payment_policyNo`, `payment_Amount`, `payment_issueDate`, `payment_MOP`, `payment_transDate`, `payment_OR`, `payment_APR`, `payment_dueDate`, `payment_nextDue`, `payment_soaDate`, `payment_remarks`, `payment_remarks_year`, `payment_remarks_month`, `payment_latest`) VALUES
(261, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-02-11', '2018-03-11', '2018-09', 'New', '1', '1', '0'),
(262, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-03-11', '2018-04-11', '', 'New', '1', '2', '0'),
(263, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-04-11', '2018-04-11', '', 'New', '1', '3', '0'),
(264, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-04-11', '2018-05-11', '', 'New', '1', '4', '0'),
(265, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-05-11', '2018-06-11', '', 'New', '1', '5', '0'),
(266, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-06-11', '2018-06-11', '', 'New', '1', '6', '0'),
(269, '2477222', '200,000', '2018-02-11', 'Quarterly', '2018-09-14', '23552', '', '2018-06-11', '2018-09-11', '2018-09', 'New', '1', '9', '0'),
(270, '2477222', '200,000', '2018-02-11', 'Quarterly', '2018-09-14', '23552', '', '2018-09-11', '2018-09-11', '', 'New', '1', '12', '0'),
(275, '2477222', '200,000', '2018-02-11', 'Quarterly', '2018-09-14', '23552', '', '2018-09-11', '2018-12-11', '', 'New', '2', '1', '0'),
(276, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2018-12-11', '2019-01-11', '2018-09', 'New', '2', '2', '0'),
(277, 'dfdfdf', '41,424,133', '2018-09-17', 'Monthly', '2018-09-20', '23231', '', '2018-09-17', '2018-10-17', '2018-09', 'New', '1', '1', ''),
(278, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2019-01-11', '2019-02-11', '', 'New', '2', '3', '0'),
(279, '2477222', '200,000', '2018-02-11', 'Monthly', '2018-09-14', '23552', '', '2019-02-11', '2019-03-11', '', 'New', '2', '4', '1'),
(285, '684774', '2,444,140', '2018-09-20', 'Monthly', '2018-10-28', '47774', '', '2018-09-20', '2018-10-20', '', 'New', '1', '1', '0'),
(286, '684774', '2,444,140', '2018-09-20', 'Monthly', '2018-10-28', '47774', '', '2018-10-20', '2018-11-20', '', 'New', '1', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `planID` int(11) NOT NULL,
  `planCode` varchar(20) NOT NULL,
  `planDesc` varchar(150) NOT NULL,
  `planRate` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`planID`, `planCode`, `planDesc`, `planRate`) VALUES
(84, 'B100', 'Holder', '80%'),
(85, 'Y200', 'Insurance', '90%'),
(86, 'K100', 'Money', '60%'),
(83, 'W100', 'Financing', '90%');

-- --------------------------------------------------------

--
-- Table structure for table `policyfund`
--

CREATE TABLE `policyfund` (
  `polFund_policyNo` text NOT NULL,
  `polFund_fund` text NOT NULL,
  `polFund_rate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policyfund`
--

INSERT INTO `policyfund` (`polFund_policyNo`, `polFund_fund`, `polFund_rate`) VALUES
('684774', '321', '80'),
('684774', '322', '20'),
('dfdfdf', '321', '100'),
('2477222', '321', '80'),
('2477222', '322', '20');

-- --------------------------------------------------------

--
-- Table structure for table `policystatus`
--

CREATE TABLE `policystatus` (
  `policyID` int(11) NOT NULL,
  `policyStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policystatus`
--

INSERT INTO `policystatus` (`policyID`, `policyStatus`) VALUES
(1, 'Unissued'),
(2, 'Active'),
(3, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionID` int(11) NOT NULL,
  `positionName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionID`, `positionName`) VALUES
(1, 'NCA'),
(3, 'Janitor'),
(4, 'Junior'),
(5, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `prodID` int(11) NOT NULL,
  `transDate` text NOT NULL,
  `prodclientID` text NOT NULL,
  `policyNo` text NOT NULL,
  `plan` text NOT NULL,
  `premium` text NOT NULL,
  `receiptNo` text,
  `faceAmount` text NOT NULL,
  `rate` text NOT NULL,
  `FYC` text NOT NULL,
  `modeOfPayment` text NOT NULL,
  `issuedDate` text,
  `SOAdate` text,
  `agent` text NOT NULL,
  `remarks` text NOT NULL,
  `policyStat` text NOT NULL,
  `dueDate` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`prodID`, `transDate`, `prodclientID`, `policyNo`, `plan`, `premium`, `receiptNo`, `faceAmount`, `rate`, `FYC`, `modeOfPayment`, `issuedDate`, `SOAdate`, `agent`, `remarks`, `policyStat`, `dueDate`) VALUES
(279, '2018-09-28', '', '124134', '85', '3453', '4555', '4000', '', '8100', 'Monthly', '2018-09-18', NULL, '111', 'New', '2', '2018-10-18'),
(291, '2018-09-14', '85873', '2477222', '85', '900,000', '23552', '200,000', '90%', '810,000', 'Monthly', '2018-02-11', '2018-09', '567', 'New', '2', '2019-03-11'),
(287, '2018-10-28', '85860', '684774', '83', '900,000', '47774', '2,444,140', '90%', '810,000', 'Monthly', '2018-09-20', NULL, '98', 'New', '2', '2018-11-20'),
(290, '2018-09-20', '85860', 'dfdfdf', '83', '20,000', '23231', '41,424,133', '90%', '1,207,297,009.8', 'Monthly', '2018-09-17', NULL, '567', 'New', '2', '2018-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `RequirementsNo` int(11) NOT NULL,
  `RagentCode` int(11) NOT NULL,
  `Rrequirements` varchar(50) NOT NULL,
  `RProdID` int(11) NOT NULL,
  `RtransDate` date NOT NULL,
  `SubmitDate` date NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`RequirementsNo`, `RagentCode`, `Rrequirements`, `RProdID`, `RtransDate`, `SubmitDate`, `Status`) VALUES
(0, 2, 'NSO', 90, '2018-08-09', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `soa`
--

CREATE TABLE `soa` (
  `SOA_num` int(50) NOT NULL,
  `SOA_ID` text NOT NULL,
  `SOA_transDate` text NOT NULL,
  `SOA_policyOwner` text NOT NULL,
  `SOA_policyNo` text NOT NULL,
  `SOA_paymentMode` text NOT NULL,
  `SOA_premium` text NOT NULL,
  `SOA_rate` text NOT NULL,
  `SOA_commission` text NOT NULL,
  `SOA_agent` text NOT NULL,
  `SOA_date` text NOT NULL,
  `SOA_dueDate` text NOT NULL,
  `SOA_selectMonth` text NOT NULL,
  `SOA_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soa`
--

INSERT INTO `soa` (`SOA_num`, `SOA_ID`, `SOA_transDate`, `SOA_policyOwner`, `SOA_policyNo`, `SOA_paymentMode`, `SOA_premium`, `SOA_rate`, `SOA_commission`, `SOA_agent`, `SOA_date`, `SOA_dueDate`, `SOA_selectMonth`, `SOA_plan`) VALUES
(25, '261', '2018-09-14', '85873', '2477222', 'Monthly', '900,000', '90%', '810,000', '567', '2018-09', '2018-02-11', 'Mid Month', ''),
(26, '269', '2018-09-14', '85873', '2477222', 'Quarterly', '900,000', '90%', '810,000', '567', '2018-09', '2018-06-11', 'Mid Month', '86'),
(27, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '277', '2018-09-20', '85860', 'dfdfdf', 'Monthly', '20,000', '90%', '1,207,297,009.8', '567', '2018-09', '2018-09-17', 'Month End', ''),
(29, '276', '2018-09-14', '85873', '2477222', 'Monthly', '900,000', '90%', '810,000', '567', '2018-09', '2018-12-11', 'Mid Month', '85'),
(30, '', '2018-09-14', '85873', '2477222', 'Monthly', '900,000', '90%', '810,000', '567', '2018-09', '2018-12-11', 'Mid Month', '85');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `teamName`) VALUES
(2, 'Kauswagan'),
(3, 'Kamatayon'),
(4, 'Kabigti-on'),
(5, 'Biga-on'),
(6, 'Luspad'),
(7, 'Bayot');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `trainingNo` int(50) NOT NULL,
  `trainingName` varchar(20) NOT NULL,
  `trainingRequired` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`trainingNo`, `trainingName`, `trainingRequired`) VALUES
(5, 'A1', 'Junior'),
(7, 'A2', 'Senior'),
(8, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trainingqualifications`
--

CREATE TABLE `trainingqualifications` (
  `trainingID` varchar(50) NOT NULL,
  `trainingQName` varchar(50) NOT NULL,
  `trainingQualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainingqualifications`
--

INSERT INTO `trainingqualifications` (`trainingID`, `trainingQName`, `trainingQualification`) VALUES
('5', 'A1', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unitID` int(11) NOT NULL,
  `unitName` varchar(100) NOT NULL,
  `unitManager` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ufirstname` varchar(50) NOT NULL,
  `ulastname` varchar(50) NOT NULL,
  `umiddlename` varchar(50) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `ucontactno` varchar(50) NOT NULL,
  `uusertype` varchar(50) NOT NULL,
  `uteam` varchar(50) NOT NULL,
  `ugender` varchar(6) NOT NULL,
  `userID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `ufirstname`, `ulastname`, `umiddlename`, `uaddress`, `ucontactno`, `uusertype`, `uteam`, `ugender`, `userID`) VALUES
('123', '7619', '123', '123', '123', '123', '123', 'administrator', 'none', 'female', 1),
('marckoy', '123', 'Marc', 'Famador', 'A', 'Pit-os Cebu City', '092013443212', 'Secretary', 'Kauswagan', 'male', 4),
('asd', 'qwertyuiasdfghj', 'asd', 'assad', 'asd', 'sad', '23123123', 'Adminstrator', 'Kauswagan', 'female', 5),
('ERTYUI', '1736', 'qwerty', 'WQERTYU', 'WERTY', 'WERTYUI', 'WERTYU', 'Secretary', 'Luspad', 'male', 6),
(';lkjhgf', '00909090909', 'oiuytr', 'oiuytr', 'oiuytre', 'oiuytrfed', '123456789', 'Secretary', 'Bayot', 'female', 7),
('coroyoy', '123', 'Marvelb1', 'Barteb', 'Alesnab', 'Sitio Atis Banilad', '09201148116', 'Sales Manager', 'Kauswagan', 'male', 8),
('coroyoy2', '123', 'Noel', 'Barte', 'A', 'Sitio Atis', '092184811', 'Adminstrator', 'Kauswagan', 'male', 9),
('111', '111', 'Ako', 'Ni', 'Marvel', 'Sitio Atis', '09282841', 'Secretary', 'Luspad', 'male', 10),
('coroyoy4', '90000', 'Umpoy', 'Jolk', 'Y', 'Cebu City', '4375989888', 'Secretary', 'Biga-on', 'male', 11);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `usertypeID` int(10) NOT NULL,
  `usertypeName` varchar(50) NOT NULL,
  `usertypeStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`usertypeID`, `usertypeName`, `usertypeStatus`) VALUES
(1, 'Adminstrator', 'no'),
(2, 'Sales Manager', 'no'),
(3, 'Secretary', 'yes'),
(4, 'Temporary', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agentCode`);

--
-- Indexes for table `agentstraining`
--
ALTER TABLE `agentstraining`
  ADD PRIMARY KEY (`ATagentTrainingID`);

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`bene_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`fundID`);

--
-- Indexes for table `insuredpolicy`
--
ALTER TABLE `insuredpolicy`
  ADD PRIMARY KEY (`pol`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`planID`);

--
-- Indexes for table `policystatus`
--
ALTER TABLE `policystatus`
  ADD PRIMARY KEY (`policyID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionID`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`prodID`);

--
-- Indexes for table `soa`
--
ALTER TABLE `soa`
  ADD PRIMARY KEY (`SOA_num`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trainingNo`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unitID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`usertypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentstraining`
--
ALTER TABLE `agentstraining`
  MODIFY `ATagentTrainingID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `bene_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85874;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `insuredpolicy`
--
ALTER TABLE `insuredpolicy`
  MODIFY `pol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `planID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=843;

--
-- AUTO_INCREMENT for table `policystatus`
--
ALTER TABLE `policystatus`
  MODIFY `policyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `prodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `soa`
--
ALTER TABLE `soa`
  MODIFY `SOA_num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `trainingNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unitID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
