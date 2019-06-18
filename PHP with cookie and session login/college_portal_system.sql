-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 06:55 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_portal_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SN` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CourseType` varchar(40) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `PicSource` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SN`, `Name`, `Username`, `Password`, `CourseType`, `Address`, `PicSource`) VALUES
(1, 'Rajiv Luitel', 'razivluitel@gmail.com', 'rajiv123', 'Computing', 'Kapan', 'rajiv.jpg'),
(2, 'Sonal Bhattrai', 'sonalbhattrai@gmail.com', 'sonal123', 'Computing', 'Gaurighat', 'sonal.jpg'),
(3, 'Diwash Uprety', 'diwashuprety@gmail.com', 'diwash123', 'Computing', 'Sukedhara', 'diwash.jpg'),
(4, 'Lovice Sunuwar', 'ok20@gmail.com', 'lovice4646', 'Computing', 'Hyattgate residence', 'lovice.jpg'),
(5, 'Eurashika Singh Maharjan', 'eurey@gmail.com', 'eurey123', 'Computing', 'kathmandu', 'eurashika.jpg'),
(6, 'Kristina Shrestha', 'kristinastha@gmail.com', 'kristina123', 'Computing', 'kathmandu', 'cristina.jpg'),
(7, 'Rohan Maharjan', 'rohanmaharjan@gmail.com', 'masterofhell', 'Computing', 'Tachal', 'rohan.jpg'),
(8, 'Bhabin Gurung', 'bhabingurung@gmail.com', 'bhotehomeronam', 'Networking', 'Kapan', 'bhabin.jpg'),
(9, 'Rabin Bika', 'rabinbika@gmail.com', 'lambewildparty', 'Computing', 'Kapan', 'rabin.jpg'),
(10, 'Slok Maharjan', 'slokmaharjan@gmail.com', 'slok1234', 'Computing', 'kathmandu', 'slok.jpg'),
(11, 'Eroj Manandhar', 'erojmanandhar@gmail.com', 'eroj123', 'Computing', 'kathmandu', 'eroj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `SN` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Salary` int(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `PicSource` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`SN`, `Name`, `Username`, `Password`, `Department`, `Salary`, `Address`, `PicSource`) VALUES
(1, 'Govinda Thapa', 'govindathapa@gmail.com', 'lalpur123', 'Computing', 1000000, 'Itahari', 'govinda sir.jpg'),
(2, 'Chirag Thapa', 'chiragthapa@gmail.com', 'javaisthebest', 'Computing', 100000, 'Itahari', 'chirag.jpg'),
(3, 'Ashim Pokharel', 'ashimpokharel@gmail.com', 'pythonisthebest', 'Networking', 100000, 'kathmandu', 'asim.jpg'),
(4, 'Puranjan Acharya', 'Puranjanacharya@gmail.com', 'hardwareiseasy', 'Multimedia', 100000, 'kamalpokhari', 'puranjan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
