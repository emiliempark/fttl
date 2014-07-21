-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2014 at 11:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fttl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbBooking`
--

CREATE TABLE IF NOT EXISTS `tbBooking` (
  `BookingID` int(5) NOT NULL AUTO_INCREMENT,
  `ProductID` int(5) NOT NULL,
  `ItineraryID` int(5) NOT NULL,
  `BookingDate` date NOT NULL,
  PRIMARY KEY (`BookingID`),
  KEY `ProductID` (`ProductID`),
  KEY `ItineraryID` (`ItineraryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbCustomer`
--

CREATE TABLE IF NOT EXISTS `tbCustomer` (
  `CustomerID` int(5) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(500) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbCustomer`
--

INSERT INTO `tbCustomer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `Username`, `Password`) VALUES
(1, 'Cody', 'Lorenzini', 'CodyLorenzini@jourrapide.com', '132 Springs Road Hoon Hay Christchurch 8025', '0298006995', 'Sonnine51', 'iechu8thaiF'),
(2, 'Dylan', 'Mould', 'DylanMould@teleworm.us', '194 Batchelor Street Paparangi Wellington 6037', '0273641226', 'Emptiou', 'yee2aeDie2h'),
(3, 'Claude', 'Sirois', 'ClaudeSirois@jourrapide.com', '226 Reeves Place Morningside Whangarei 0110', '0224859411', 'Ankfand', 'aic5Il5su'),
(4, 'Luc', 'Bizier', 'LucBizier@dayrep.com', '2 Tenahaun Place Hornby South Christchurch 8042', '0267863901', 'Hiseed', 'ThieZ2ohp'),
(5, 'Shousei', 'Higuchi', 'ShouseiHiguchi@jourrapide.com', '9 Kelso Crescent Tisbury Invercargill 9812', '0269572956', 'Caments', 'quaghei9Ie'),
(6, 'Otoya', 'Niita', 'OtoyaNiita@teleworm.us', '23 Cotesmore Way Grafton Auckland 1010', '0287986590', 'Hadonse65', 'ii3AiZ1io2');

-- --------------------------------------------------------

--
-- Table structure for table `tbItinerary`
--

CREATE TABLE IF NOT EXISTS `tbItinerary` (
  `ItineraryID` int(5) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(5) NOT NULL,
  `TripDate` date NOT NULL,
  `NumOfPeople` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ItineraryID`),
  KEY `CustomerID` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbProduct`
--

CREATE TABLE IF NOT EXISTS `tbProduct` (
  `ProductID` int(5) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `HourlyPrice` double NOT NULL,
  `AvailableTime` varchar(50) NOT NULL,
  `PhotoPath` varchar(100) NOT NULL,
  `Promotion` tinyint(1) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbProduct`
--

INSERT INTO `tbProduct` (`ProductID`, `ProductName`, `Description`, `HourlyPrice`, `AvailableTime`, `PhotoPath`, `Promotion`, `Active`) VALUES
(1, 'Charters', 'An aircraft flight that has been arranged and paid for by an individual or group for a specific trip.\r\n', 149.99, 'Available for 24 hours', '', 0, 1),
(2, 'Skydiving', 'Skydiving is the action sport of exiting an aircraft and returning to Earth with the aid of gravity, then slowing down during the last part of the descent by using a parachute. It may or may not involve a certain amount of free-fall, a time during which the parachute has not been deployed and the body gradually accelerates to terminal velocity.', 430, 'Tuesday, Friday, Saturday, Sunday', '', 0, 1),
(3, 'Fly-in fly-out', 'This product needs description.', 0, 'Available for 24 hours', '', 0, 1),
(4, 'Drop offs', 'This product needs description.', 55, '7 days', '', 0, 1),
(5, 'Glider flights', 'Description', 300, '7 days', '', 0, 1),
(6, 'Heli skiing', 'Description', 300, '7 days', '', 0, 1),
(7, 'Mountain at sunset', 'description', 300, '7 days', '', 0, 1),
(8, 'Lake trip', 'Description', 300, '7days', '', 0, 1),
(9, 'Photographic flights', 'Description', 300, '7 days', '', 0, 1),
(10, 'Sightseeing - Fixed wing', 'description', 350, '7days', '', 0, 1),
(11, 'Sightseeing - Helicopter', 'Description', 450, '7 days', '', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
