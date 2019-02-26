-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 10:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing-hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID_C` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `CompanyRegNo` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `AccountPassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_reviews`
--

CREATE TABLE `company_reviews` (
  `ID_CR` int(6) NOT NULL,
  `ID_C` int(6) NOT NULL,
  `ID_M` int(6) NOT NULL,
  `Grade` float NOT NULL,
  `Review` varchar(500) DEFAULT NULL,
  `ReviewDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `ID_P` int(6) NOT NULL,
  `ID_M` int(6) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID_M` int(6) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `CNP` varchar(13) NOT NULL,
  `PhotoLink` varchar(80) NOT NULL,
  `AccountPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID_M`, `Firstname`, `Lastname`, `Email`, `PhoneNo`, `CNP`, `PhotoLink`, `AccountPassword`) VALUES
(1, 'Ovidiu', 'Gheorghe', 'gheorgheovidu@gmail.com', '0720603967', '1234567890123', 'aa', '1234'),
(3, 'Stefan', 'Buzoianu', 'buzoFaneVTM@inima-mea.ro', '07noi2', '1234', 'ab', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `member_reviews`
--

CREATE TABLE `member_reviews` (
  `ID_MR` int(6) NOT NULL,
  `ID_C` int(6) NOT NULL,
  `ID_M` int(6) NOT NULL,
  `Grade` float NOT NULL,
  `Review` varchar(500) DEFAULT NULL,
  `ReviewDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID_P` int(6) NOT NULL,
  `ID_C` int(6) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(1300) DEFAULT NULL,
  `HourlyPay` float NOT NULL,
  `Location` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `StartDate` date NOT NULL,
  `FinishDate` date NOT NULL,
  `Hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID_C`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `CompanyRegNo` (`CompanyRegNo`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `PhoneNo` (`PhoneNo`);

--
-- Indexes for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD PRIMARY KEY (`ID_CR`),
  ADD KEY `ID_C` (`ID_C`),
  ADD KEY `ID_M` (`ID_M`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD KEY `ID_P` (`ID_P`),
  ADD KEY `ID_M` (`ID_M`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID_M`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `CNP` (`CNP`),
  ADD UNIQUE KEY `PhotoLink` (`PhotoLink`);

--
-- Indexes for table `member_reviews`
--
ALTER TABLE `member_reviews`
  ADD PRIMARY KEY (`ID_MR`),
  ADD KEY `ID_C` (`ID_C`),
  ADD KEY `ID_M` (`ID_M`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID_P`),
  ADD KEY `ID_C` (`ID_C`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID_C` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_reviews`
--
ALTER TABLE `company_reviews`
  MODIFY `ID_CR` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID_M` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_reviews`
--
ALTER TABLE `member_reviews`
  MODIFY `ID_MR` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID_P` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD CONSTRAINT `company_reviews_ibfk_1` FOREIGN KEY (`ID_C`) REFERENCES `companies` (`ID_C`),
  ADD CONSTRAINT `company_reviews_ibfk_2` FOREIGN KEY (`ID_M`) REFERENCES `members` (`ID_M`);

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_ibfk_1` FOREIGN KEY (`ID_P`) REFERENCES `posts` (`ID_P`),
  ADD CONSTRAINT `job_applications_ibfk_2` FOREIGN KEY (`ID_M`) REFERENCES `members` (`ID_M`);

--
-- Constraints for table `member_reviews`
--
ALTER TABLE `member_reviews`
  ADD CONSTRAINT `member_reviews_ibfk_1` FOREIGN KEY (`ID_C`) REFERENCES `companies` (`ID_C`),
  ADD CONSTRAINT `member_reviews_ibfk_2` FOREIGN KEY (`ID_M`) REFERENCES `members` (`ID_M`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `ID_C` FOREIGN KEY (`ID_C`) REFERENCES `companies` (`ID_C`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
