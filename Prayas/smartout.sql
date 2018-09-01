-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 12:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartout`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaurdlogin`
--

CREATE TABLE `gaurdlogin` (
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaurdlogin`
--

INSERT INTO `gaurdlogin` (`user_name`, `user_pass`) VALUES
('gaurd001', 'gaurd');

-- --------------------------------------------------------

--
-- Table structure for table `logincred`
--

CREATE TABLE `logincred` (
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logincred`
--

INSERT INTO `logincred` (`user_name`, `user_pass`) VALUES
('A20405215038', 'qwerty'),
('A20405215048', 'shub@200'),
('A22205215001', 'diifirence@123'),
('A22205215023', 'harsh123');

-- --------------------------------------------------------

--
-- Table structure for table `outpass`
--

CREATE TABLE `outpass` (
  `outpassNo` int(10) NOT NULL,
  `enrollmentNo` varchar(12) NOT NULL,
  `outpassDate` date NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpass`
--

INSERT INTO `outpass` (`outpassNo`, `enrollmentNo`, `outpassDate`, `purpose`, `status`) VALUES
(1000001, 'A22205215001', '2018-04-12', 'bfb', 'pending'),
(1000002, 'A22205215001', '2018-04-12', 'bfb', 'pending'),
(1000003, 'A22205215001', '2018-04-12', 'bfb', 'pending'),
(1000004, 'A20405215038', '2018-04-12', 'Maa chudaa', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `EnrollmentNo` varchar(20) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Age` int(3) NOT NULL,
  `Programme` varchar(30) NOT NULL,
  `Semester` int(2) NOT NULL,
  `HostelBlock` int(1) NOT NULL,
  `Wing` varchar(1) NOT NULL,
  `FloorNo` int(1) NOT NULL,
  `FlatNo` int(3) NOT NULL,
  `RoomNo` varchar(1) NOT NULL,
  `ParentName` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNoSelf` bigint(10) NOT NULL,
  `ContactNoParent` bigint(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`EnrollmentNo`, `FirstName`, `LastName`, `Age`, `Programme`, `Semester`, `HostelBlock`, `Wing`, `FloorNo`, `FlatNo`, `RoomNo`, `ParentName`, `Address`, `ContactNoSelf`, `ContactNoParent`, `email`, `reg_date`) VALUES
('A20405215038', 'Mayur', 'Arya', 20, 'B.Tech(CSE)', 6, 3, 'B', 1, 1, '1', 'Anoop Arya', 'Dayanand Bhawan, Matawali Gali, Gwalior', 9755466123, 9425118666, 'mayurarya4@gmail.com', '2018-04-10 20:21:17'),
('A20405215048', 'shubham ', 'saluja', 21, 'B.Tech(CSE)', 6, 3, 'B', 4, 7, '3', 'Mr.shankar saluja', 'near gurudwara ,suriya,jharkhand', 7297947781, 9102109257, 'shubham.saluja21@gmail.com', '2018-04-10 21:12:07'),
('A22205215001', 'Prayas', 'Mittal', 20, 'B.Tech(CSE)', 6, 3, 'B', 4, 7, '3', 'Anand Mittal', 'Gwalior', 9425650856, 9425050170, 'prayas.mittal@gmail.com', '2018-04-10 21:15:52'),
('A22205215023', 'Harsh', 'Agrawal', 20, 'B.Tech', 6, 3, 'B', 4, 7, '1', 'Anil Agrawal', '166, Jawahar Marg', 8890860558, 9009502258, 'agrawalharsh891@gmail.com', '2018-04-09 19:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `wardenlogin`
--

CREATE TABLE `wardenlogin` (
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wardenlogin`
--

INSERT INTO `wardenlogin` (`user_name`, `user_pass`) VALUES
('warden001', 'waeden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaurdlogin`
--
ALTER TABLE `gaurdlogin`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `logincred`
--
ALTER TABLE `logincred`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `outpass`
--
ALTER TABLE `outpass`
  ADD PRIMARY KEY (`outpassNo`);

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `wardenlogin`
--
ALTER TABLE `wardenlogin`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
