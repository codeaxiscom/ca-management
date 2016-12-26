-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 03:29 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Message` text,
  `Subject` varchar(50) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `viewed` bit(1) DEFAULT b'0',
  `senderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `UserID`, `Message`, `Subject`, `date`, `viewed`, `senderID`) VALUES
(3, 2, 'Message', 'Subject', '2016-12-26 01:14:54', b'0', 1),
(4, 2, 'kaon na didto oy nimal', 'Kaon na', '2016-12-26 09:31:04', b'0', 1),
(5, 2, 'Tuon na didto oy nimal', 'Tuon na', '2016-12-26 09:31:16', b'0', 1),
(6, 2, 'Ngano weak kayka oyy zzz sohai la', 'Weak', '2016-12-26 09:31:28', b'0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserType` char(1) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `MembershipDate` date NOT NULL,
  `Position` varchar(20) NOT NULL,
  `NickName` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `TelephoneNumber` varchar(15) NOT NULL,
  `BiographicalInfo` text NOT NULL,
  `ProfilePicture` tinytext NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserType`, `FirstName`, `LastName`, `Gender`, `Age`, `MembershipDate`, `Position`, `NickName`, `Email`, `PhoneNumber`, `TelephoneNumber`, `BiographicalInfo`, `ProfilePicture`, `Password`, `UserName`) VALUES
(1, 'A', 'Jemar Jude', 'Maranga', 'Male', 19, '2016-11-22', 'CEO', 'Jemar', 'jjmaranga05@gmail.com', '(+63) 933-515-5741', '414-5649', 'I am a handsome boy.', 'media/profile-pictures/jude.png', '123', 'jude'),
(2, 'U', 'Xavier David', 'Maranga', 'Male', 15, '2016-12-10', 'Programmer', 'David', 'xdmaranga@gmail.com', '(+12) 312-321-3213', '', 'Gwapo ko Gwapo koGwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko hehe', 'media/profile-pictures/no-image.png', '123', 'David'),
(5, 'U', 'Cymmer John', 'Maranga', 'Male', 16, '2016-12-19', 'Programmer', 'John', 'cymmer@gmail.com', '(+53) 553-253-2432', '414-1421', 'Just another user.', '', '123', 'John');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageID`),
  ADD KEY `user_fk` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
