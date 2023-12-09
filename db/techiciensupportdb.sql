-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techiciensupportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customertb`
--

CREATE TABLE `customertb` (
  `customerid` int(11) NOT NULL,
  `customernames` varchar(100) NOT NULL,
  `customerphone` varchar(50) NOT NULL,
  `customeremail` varchar(100) NOT NULL,
  `customerpassw` varchar(100) NOT NULL,
  `customeraddress` varchar(255) NOT NULL,
  `addedon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customertb`
--

INSERT INTO `customertb` (`customerid`, `customernames`, `customerphone`, `customeremail`, `customerpassw`, `customeraddress`, `addedon`) VALUES
(1, 'Murungi Ange', '0789990785', 'customerone@gmail.com', '1234567', 'Nyabihu,Mukamira', '2022-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `managertb`
--

CREATE TABLE `managertb` (
  `managerid` int(11) NOT NULL,
  `managernames` varchar(100) NOT NULL,
  `manageremail` varchar(100) NOT NULL,
  `managerphone` varchar(20) NOT NULL,
  `managerpass` varchar(100) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managertb`
--

INSERT INTO `managertb` (`managerid`, `managernames`, `manageremail`, `managerphone`, `managerpass`, `doneon`) VALUES
(1, 'Mubaraka Janvier', 'manager@gmail.com', '0789990784', '1234567', '2022-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `messagetb`
--

CREATE TABLE `messagetb` (
  `messageid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `technicieid` int(11) NOT NULL,
  `techName` varchar(100) NOT NULL,
  `sentsms` varchar(255) NOT NULL,
  `receivedsms` varchar(255) NOT NULL,
  `techrepliestat` varchar(80) NOT NULL,
  `sentontime` varchar(255) NOT NULL,
  `sentondate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagetb`
--

INSERT INTO `messagetb` (`messageid`, `customerid`, `customername`, `technicieid`, `techName`, `sentsms`, `receivedsms`, `techrepliestat`, `sentontime`, `sentondate`) VALUES
(1, 1, 'Murungi Ange', 1, 'Muhire Damascene', 'hello bro', 'its oky we are going to reply you on call', 'replied', '18:46', '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `technicientb`
--

CREATE TABLE `technicientb` (
  `technicienid` int(11) NOT NULL,
  `techniciennames` varchar(100) NOT NULL,
  `technicienphone` varchar(100) NOT NULL,
  `technicienemail` varchar(100) NOT NULL,
  `technicieaddress` varchar(255) NOT NULL,
  `techniciepass` varchar(100) NOT NULL,
  `technicienspecial` varchar(100) NOT NULL,
  `techniciendescrip` varchar(255) NOT NULL,
  `technicienphoto` varchar(255) NOT NULL,
  `technicienstatus` varchar(80) NOT NULL,
  `technicienrequest` varchar(80) NOT NULL,
  `viewstat` varchar(80) NOT NULL,
  `techcertifi` varchar(100) NOT NULL,
  `addedon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicientb`
--

INSERT INTO `technicientb` (`technicienid`, `techniciennames`, `technicienphone`, `technicienemail`, `technicieaddress`, `techniciepass`, `technicienspecial`, `techniciendescrip`, `technicienphoto`, `technicienstatus`, `technicienrequest`, `viewstat`, `techcertifi`, `addedon`) VALUES
(1, 'Muhire Damascene', '0789990785', 'technicienone@gmail.com', 'Rubavu Mbugangari', '1234567', 'IT', 'programming is my industry', 'imagefive.jpg', 'Active', 'Verfied', 'Offline', '', '2022-08-02'),
(2, 'Mujawimana Eme', '0788993171', 'technicientwo@gmail.com', 'Rubavu Mbugangari', '1234567', 'IT', 'am good in IT and  am good also I can hep more', 'imagefour.jpeg', 'Active', 'Verfied', 'Offline', 'Tecno_camon_xc.JPG', '2022-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customertb`
--
ALTER TABLE `customertb`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `managertb`
--
ALTER TABLE `managertb`
  ADD PRIMARY KEY (`managerid`);

--
-- Indexes for table `messagetb`
--
ALTER TABLE `messagetb`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `technicientb`
--
ALTER TABLE `technicientb`
  ADD PRIMARY KEY (`technicienid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customertb`
--
ALTER TABLE `customertb`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managertb`
--
ALTER TABLE `managertb`
  MODIFY `managerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messagetb`
--
ALTER TABLE `messagetb`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technicientb`
--
ALTER TABLE `technicientb`
  MODIFY `technicienid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
