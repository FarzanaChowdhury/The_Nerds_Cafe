-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 02:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

USE schoolmsdb;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmsdb`
--

-- --------------------------------------------------------

--


-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('ad-123-0', 'Christen', '123', '2587416969', 'christen@example.com', '1993-11-20', '2016-01-01', 'US, Blkr St', 'female'),
('ad-123-1', 'Harry Den', '123', '7531596969', 'harryden@gmail.com', '1995-09-22', '2018-01-05', 'US, Fairview Drive', 'Male'),
('ad-123-2', 'Bucky Barnes', '123', '1969735220', 'barsmine@gmail.com', '1994-04-02', '2020-12-24', 'US, DownSt 12', 'Male'),
('ad-123-3', 'Steephen', '123', '9745452220', 'stephen@gmail.com', '1991-05-02', '2014-04-24', 'AU, Parmmiza Rd', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendedid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `attendedid`) VALUES
(18, '2016-05-04', 'te-123-1'),
(20, '2016-05-01', 'te-123-1'),
(21, '2016-04-12', 'te-123-1'),
(22, '2016-05-04', 'te-124-1'),
(23, '2016-04-19', 'te-124-1'),
(24, '2016-05-02', 'te-124-1'),
(25, '2016-05-04', 'sta-123-1'),
(26, '2016-05-05', 'sta-123-1'),
(27, '2016-04-04', 'sta-123-1'),
(28, '2016-04-05', 'sta-123-1'),
(29, '2021-04-06', 'te-123-1'),
(30, '2021-04-06', 'sta-123-1'),
(31, '2021-04-06', 'st-123-1'),
(32, '2021-04-06', 'st-124-1'),
(33, '2022-10-25', 'sta-123-1');

-- --------------------------------------------------------

--
-- Table structure for table `availablecourse`
--

CREATE TABLE `availablecourse` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `classid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availablecourse`
--

INSERT INTO `availablecourse` (`id`, `name`, `classid`) VALUES
(1, 'Bangla 1st', '1'),
(2, 'Bangla 1st', '2'),
(3, 'Bangla 1st', '3'),
(4, 'Bangla 1st', '4'),
(5, 'Bangla 1st', '5'),
(6, 'Bangla 1st', '6'),
(7, 'Bangla 1st', '7'),
(8, 'Bangla 1st', '8'),
(9, 'Bangla 1st', '9'),
(10, 'Bangla 1st', '10'),
(11, 'Bangla 2nd', '1'),
(12, 'Bangla 2nd', '2'),
(13, 'Bangla 2nd', '3'),
(14, 'Bangla 2nd', '4'),
(15, 'Bangla 2nd', '5'),
(16, 'Bangla 2nd', '6'),
(17, 'Bangla 2nd', '7'),
(18, 'Bangla 2nd', '8'),
(19, 'Bangla 2nd', '9'),
(20, 'Bangla 2nd', '10'),
(21, 'English 1st', '1'),
(22, 'English 1st', '2'),
(23, 'English 1st', '3'),
(24, 'English 1st', '4'),
(25, 'English 1st', '5'),
(26, 'English 1st', '6'),
(27, 'English 1st', '7'),
(28, 'English 1st', '8'),
(29, 'English 1st', '9'),
(30, 'English 1st', '10'),
(31, 'English 2nd', '1'),
(32, 'English 2nd', '2'),
(33, 'English 2nd', '3'),
(34, 'English 2nd', '4'),
(35, 'English 2nd', '5'),
(36, 'English 2nd', '6'),
(37, 'English 2nd', '7'),
(38, 'English 2nd', '8'),
(39, 'English 2nd', '9'),
(40, 'English 2nd', '10');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `room`, `section`) VALUES
('1A', 'One', '101', 'A'),
('1B', 'One', '101', 'B'),
('2A', 'Two', '201', 'A'),
('2B', 'Two', '202', 'B'),
('3A', 'Three', '301', 'A'),
('3B', 'Three', '302', 'B'),
('4A', 'Four', '401', 'A'),
('4B', 'Four', '402', 'B'),
('5A', 'Five', '501', 'A'),
('5B', 'Five', '502', 'B'),
('6A', 'Six', '601', 'A'),
('6B', 'Six', '602', 'B'),
('7A', 'Seven', '701', 'A'),
('7B', 'Seven', '702', 'B'),
('8A', 'Eight', '801', 'A'),
('8B', 'Eight', '802', 'B'),
('9A', 'Nine', '901', 'A'),
('9B', 'Nine', '902', 'B'),
('10S', 'Ten', '1001', 'Science'),
('10A', 'Ten', '1002', 'Arts'),
('10C', 'Ten', '1002', 'Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `teacherid`, `studentid`, `classid`) VALUES
('1', 'Bangla 1st', 'te-124-1', 'st-123-1', '1A'),
('1', 'Bangla 1st', 'te-124-1', 'st-124-1', '1A'),
('25', 'English 1st', 'SELECT AN OPTION', 'st-125-1', '5A'),
('1', 'Science', 'te-124-1', 's-123-1', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse123`
--

CREATE TABLE `cse123` (
  `Student_ID` varchar(50) DEFAULT NULL,
  `Quiz1` varchar(50) DEFAULT NULL,
  `Quiz2` varchar(50) DEFAULT NULL,
  `Quiz3` varchar(50) DEFAULT NULL,
  `Quiz4` varchar(50) DEFAULT NULL,
  `Mid_Semester` varchar(50) DEFAULT NULL,
  `Final_Semester` varchar(50) DEFAULT NULL,
  `Grade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse123`
--

INSERT INTO `cse123` (`Student_ID`, `Quiz1`, `Quiz2`, `Quiz3`, `Quiz4`, `Mid_Semester`, `Final_Semester`, `Grade`) VALUES
('1', '13', '12', '11', 'n/a', 'n/a', 'n/a', 'n/a'),
('2', '11', '9', '11', 'n/a', 'n/a', 'n/a', 'n/a'),
('st-124-1', '10', '8', '14', 'n/a', 'n/a', 'n/a', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `EventName` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Reminder` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` varchar(20) NOT NULL,
  `examdate` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `examdate`, `time`, `courseid`) VALUES
('145', '2016-05-06', '2:00-4:00', '1'),
('sh-10', '2021-04-06', '10:00 - 12:30', '4'),
('sh-20', '2021-04-06', '01:00 - 03:00', '2'),
('1234', '2022-11-14', '10:00-12:00', 'abc123'),
('1234', '2022-11-14', '10:00-12:00', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `q1` int(11) NOT NULL,
  `Quiz 2` int(11) NOT NULL,
  `Quiz 3` int(11) NOT NULL,
  `Quiz 4` int(11) NOT NULL,
  `Mid Semester` int(11) NOT NULL,
  `Final Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `studentid`, `grade`, `q1`, `Quiz 2`, `Quiz 3`, `Quiz 4`, `Mid Semester`, `Final Semester`) VALUES
(1, 'st-123-1', 'C', 15, 14, 13, 12, 45, 112),
(2, 'st-123-1', 'F', 12, 11, 9, 10, 25, 145),
(3, 'st-125-1', 'D+', 5, 5, 5, 5, 12, 111),
(4, 'st-123-1', 'D+', 12, 0, 0, 0, 0, 0),
(5, 'st-124-1', 'C+', 0, 0, 0, 0, 0, 0),
(6, 'st-124-1', 'A+', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `fatherphone` varchar(13) NOT NULL,
  `motherphone` varchar(13) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `password`, `fathername`, `mothername`, `fatherphone`, `motherphone`, `address`) VALUES
('pa-123-1', '123', 'Eric', 'Sophie', '01711000000', '01711000000', '4286  Raoul Wallenberg Place'),
('pa-124-1', '123', 'John', 'Riley', '01724242424', '01924242314', '2549  Simpson Avenue');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `amount` double NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `studentid`, `amount`, `month`, `year`) VALUES
(1, 'st-123-1', 500, '5', '2016'),
(2, 'st-123-1', 500, '4', '2016'),
(3, 'st-124-1', 500, '5', '2016'),
(4, 'st-123-1', 4500, 'March 10', '2021'),
(5, 'st-123-1', 4000, 'April 6', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportid` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `studentid`, `teacherid`, `message`, `courseid`) VALUES
(1, 'st-123-1', 'te-123-1', 'Good Boy', '790'),
(2, 'st-124-1', 'te-123-1', 'Good boy But not honest.', '790'),
(3, 'st-123-1', 'te-124-1', ' good', '1'),
(4, 'st-124-1', 'te-124-1', ' Good one, keep it up!', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `Student_ID` varchar(50) DEFAULT NULL,
  `Quiz1` varchar(50) DEFAULT NULL,
  `Quiz2` varchar(50) DEFAULT NULL,
  `Quiz3` varchar(50) DEFAULT NULL,
  `Quiz4` varchar(50) DEFAULT NULL,
  `Mid_Semester` varchar(50) DEFAULT NULL,
  `Final_Semester` varchar(50) DEFAULT NULL,
  `Grade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`Student_ID`, `Quiz1`, `Quiz2`, `Quiz3`, `Quiz4`, `Mid_Semester`, `Final_Semester`, `Grade`) VALUES
('1', '13', '12', '9', 'n/a', 'n/a', 'n/a', 'n/a'),
('2', '12', '11', '7', 'N/A', 'n/a', 'n/a', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `hiredate`, `address`, `salary`) VALUES
('sta-123-1', 'Scott', '123', '1597534568', 'scootpel@gmail.com', 'Male', '1980-11-08', '2015-10-15', '2333  Cody Ridge Road', 25000),
('sta-124-1', 'Patrick', '123', '7412531325', 'pforpat@school.com', 'Male', '1990-03-26', '2017-05-12', '321  McDonald Avenue', 19500),
('sta-125-1', 'Aaron', '123', '2587532224', 'aarontay@gmail.com', 'Male', '1992-08-19', '2010-05-29', '4927  Water Street', 31000),
('sta-126-1', 'Peterson', '123', '2574545888', 'peteson@gmail.com', 'Male', '2021-04-01', '2012-05-05', '2950  Parrill Court', 27000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `addmissiondate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `parentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `addmissiondate`, `address`, `parentid`, `classid`) VALUES
('st-124-1', 'Paul', '123', '4564564500', 'paul@gmail.com', 'Male', '2000-09-24', '2014-07-02', '1940  Prudence Street', 'pa-123-1', '1A'),
('st-125-1', 'Jacob', '123', '8520696964', 'jacodon@gmail.com', 'Male', '2001-12-12', '2014-12-06', '2549  Simpson Avenue', 'pa-124-1', '5A'),
('st-128-1', 'Pipipi', '128', '012345', 'pipipi@gmail.com', 'Male', '2000-02-29', '2022-11-12', 'Mars', 'pa-128-1', '3B'),
('st-129-1', 'asdf', '129', '123567', 'ssss@gmail.com', 'Male', '2000-02-29', '2022-11-12', 'asss', 'pa-129-1', 'acd');

-- --------------------------------------------------------

--
-- Table structure for table `takencoursebyteacher`
--

CREATE TABLE `takencoursebyteacher` (
  `id` int(11) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takencoursebyteacher`
--

INSERT INTO `takencoursebyteacher` (`id`, `courseid`, `teacherid`) VALUES
(1, '4', 'te-123-1'),
(2, '8', 'te-123-1'),
(3, '1', 'te-124-1'),
(4, '8', 'te-124-1'),
(5, '18', 'te-125-1'),
(6, '19', 'te-125-1'),
(7, '11', 'te-125-1'),
(8, '24', 'te-126-1'),
(9, '23', 'te-126-1'),
(10, '22', 'te-126-1'),
(11, '4', 'te-124-1'),
(12, '5', 'te-123-1'),
(13, '6', 'te-125-1'),
(14, '7', 'te-127-1'),
(15, '9', 'te-127-1'),
(16, '10', 'te-127-1'),
(17, '17', 'te-125-1'),
(18, '16', 'te-125-1'),
(19, '15', 'te-125-1'),
(20, '14', 'te-126-1'),
(21, '13', 'te-126-1'),
(22, '12', 'te-126-1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `password`, `phone`, `email`, `address`, `sex`, `dob`, `hiredate`, `salary`) VALUES
('123', '123', '123', '123', 'ddd@gmail.com', '123', 'Male', '1982-11-11', '2022-11-12', 2222),
('te-123-1', 'Liiam', '123', '1247965680', 'liam@gmail.com', '', 'Male', '1990-05-05', '2010-06-21', 36500),
('te-124-1', 'Robert', '124', '8520000012', 'robertj@gmail,com', '1022  Neuport Lane', 'Male', '1995-12-18', '2015-12-04', 36000),
('te-125-1', 'James Rhoades', '258', '3214569874', 'rhoadesj@gmail.com', '3464  Straford Park', 'Male', '1998-06-26', '2021-01-06', 21000),
('te-126-1', 'Maria', '258', '9103674540', 'mariahill@gmail.com', '833  Fulton Street', 'Female', '1996-04-06', '2019-12-24', 39000),
('te-127-1', 'Darlene', '123', '1379696969', 'darleeene@gmail.com', '2131  Glory Road', 'Female', '1994-12-25', '2017-05-25', 41000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`) VALUES
('123', '123', 'teacher'),
('ad-123-0', '123', 'admin'),
('ad-123-1', '123', 'admin'),
('ad-123-2', '123', 'admin'),
('ad-123-3', '123', 'admin'),
('pa-123-1', '123', 'parent'),
('pa-124-1', '123', 'parent'),
('st-124-1', '125', 'student'),
('st-125-1', '123', 'student'),
('st-128-1', '128', 'student'),
('st-129-1', '129', 'student'),
('sta-123-1', '123', 'staff'),
('sta-124-1', '123', 'staff'),
('sta-125-1', '123', 'staff'),
('sta-126-1', '123', 'staff'),
('te-123-1', '123', 'teacher'),
('te-124-1', '124', 'teacher'),
('te-125-1', '258', 'teacher'),
('te-126-1', '258', 'teacher'),
('te-127-1', '123', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablecourse`
--
ALTER TABLE `availablecourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `availablecourse`
--
ALTER TABLE `availablecourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
