-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2016 at 02:36 PM
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
(2, 'U', 'Xavier David', 'Maranga', 'Male', 15, '2016-12-10', 'Programmer', 'David', 'xdmaranga@gmail.com', '(+12) 312-321-3213', '', 'Gwapo ko Gwapo koGwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko Gwapo ko', 'media/profile-pictures/David.png', '123', 'David'),
(3, 'U', 'Roxette', 'Silaya', 'Female', 18, '2016-12-13', 'Programmer', 'Roxette', 'roxe@gmail.com', '(+63) 933-312-3213', '241-2421', 'I am a pretty girl.', '', '1234', 'Roxette'),
(4, 'A', 'Tantine', 'Maranga', 'Male', 19, '2016-12-13', 'CEO', 'Tan', 'tan@gmail.com', '(+63) 931-242-1421', '412-4141', '', 'media/profile-pictures/test.png', '123', 'test'),
(5, 'U', 'Cymmer John', 'Maranga', 'Male', 16, '2016-12-19', 'Programmer', 'John', 'cymmer@gmail.com', '(+53) 553-253-2432', '414-1421', 'Just another user.', '', '123', 'John');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
