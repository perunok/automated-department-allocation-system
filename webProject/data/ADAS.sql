-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2022 at 11:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ADAS`
--
CREATE DATABASE IF NOT EXISTS `ADAS` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ADAS`;

-- --------------------------------------------------------

--
-- Table structure for table `department_prefrence`
--

CREATE TABLE `department_prefrence` (
  `Username` varchar(300) NOT NULL,
  `Prefrence_1` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_2` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_3` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_4` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_5` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_6` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_7` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_8` varchar(300) NOT NULL DEFAULT 'none',
  `Prefrence_9` varchar(300) NOT NULL,
  `Prefrence_10` varchar(300) NOT NULL,
  `Prefrence_11` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_prefrence`
--

INSERT INTO `department_prefrence` (`Username`, `Prefrence_1`, `Prefrence_2`, `Prefrence_3`, `Prefrence_4`, `Prefrence_5`, `Prefrence_6`, `Prefrence_7`, `Prefrence_8`, `Prefrence_9`, `Prefrence_10`, `Prefrence_11`) VALUES
('Ramit/058/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/093/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/111/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/136/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/137/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/141/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1561/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1630/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/165/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1679/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1778/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1781/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1804/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1810/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1824/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1853/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/187/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1904/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1914/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/1956/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/2027/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/2028/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/2038/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/2053/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/317/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/340/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/377/31', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/379/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/387/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/408/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/446/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/479/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/532/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/567/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/592/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/612/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/670/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/733/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/739/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/746/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/776/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/776/45', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/813/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/843/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/973/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen'),
('Ramit/983/11', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen', 'notchoosen');

-- --------------------------------------------------------

--
-- Table structure for table `department_quota`
--

CREATE TABLE `department_quota` (
  `no` int(3) NOT NULL,
  `Department_name` varchar(50) NOT NULL,
  `Capacity` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_quota`
--

INSERT INTO `department_quota` (`no`, `Department_name`, `Capacity`) VALUES
(1, 'Software Engineering', 6),
(2, 'Computer Science', 8),
(3, 'IT', 5),
(4, 'Architecture and Urban planning', 3),
(5, 'Mechanical Enginnering', 10),
(6, 'Electrical Engineering', 10),
(7, 'Civil Engineering', 15),
(8, 'Water Supply', 20),
(9, 'Water Resource and Irrigation', 18),
(10, 'Hydrology', 18),
(11, 'Metheorology', 9);

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `#` int(11) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `CGPA` float NOT NULL,
  `Special_need` tinyint(1) NOT NULL DEFAULT 0,
  `Department` varchar(300) NOT NULL DEFAULT 'unallocated',
  `Holistic_point` int(30) NOT NULL DEFAULT 0,
  `Entrance_point` int(30) NOT NULL DEFAULT 0,
  `Developing_region` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`#`, `ID`, `Firstname`, `Lastname`, `Gender`, `CGPA`, `Special_need`, `Department`, `Holistic_point`, `Entrance_point`, `Developing_region`) VALUES
(288, 'Ramit/776/11', 'Abdi', 'wakjira', 'Male', 3.1, 0, 'unallocated', 50, 400, 0),
(289, 'Ramit/1561/11', 'sagni', 'samuel', 'Male', 3.1, 0, 'unallocated', 51, 401, 0),
(290, 'Ramit/1630/11', 'selemon', 'chebeson', 'Male', 3.2, 0, 'unallocated', 52, 402, 0),
(291, 'Ramit/1679/11', 'sisay', 'kebede', 'Male', 3.4, 0, 'unallocated', 53, 403, 0),
(292, 'Ramit/1781/11', 'Tesfahun ', 'Tariku', 'Male', 3.1, 0, 'unallocated', 54, 404, 1),
(293, 'Ramit/1853/11', 'Tsegaselssia', 'kndye', 'Male', 3.5, 0, 'unallocated', 55, 405, 0),
(294, 'Ramit/1904/11', 'Yabets', 'Tamitat', 'Male', 3.1, 0, 'unallocated', 30, 406, 0),
(295, 'Ramit/1914/11', 'Yakob', 'Sharbo', 'Male', 3.6, 0, 'unallocated', 57, 407, 0),
(296, 'Ramit/1956/11', 'Yesuf', 'Abdu', 'Male', 3.3, 0, 'unallocated', 58, 408, 0),
(297, 'Ramit/2027/11', 'Yosef', 'Sitot', 'Male', 3.4, 0, 'unallocated', 59, 409, 1),
(298, 'Ramit/058/11', 'Abebe', 'Asefa', 'Male', 3.7, 0, 'unallocated', 60, 410, 0),
(299, 'Ramit/093/11', 'Abebnezer', 'Tesema', 'Male', 3.1, 0, 'unallocated', 61, 411, 0),
(300, 'Ramit/111/11', 'Abrham', 'zeleke', 'Male', 3.11, 0, 'unallocated', 62, 412, 0),
(301, 'Ramit/136/11', 'Abush', 'Tamene', 'Male', 3.12, 0, 'unallocated', 63, 413, 1),
(302, 'Ramit/137/11', 'Adam', 'Gebreyohanes', 'Male', 3.7, 0, 'unallocated', 64, 414, 0),
(303, 'Ramit/141/11', 'Adane', 'Asaro ', 'Male', 3.69, 0, 'unallocated', 65, 415, 0),
(304, 'Ramit/165/11', 'Afework', 'zeleke', 'Male', 3.52, 0, 'unallocated', 66, 416, 0),
(305, 'Ramit/187/11', 'Alazer', 'Mandefro', 'Male', 3.6, 0, 'unallocated', 67, 417, 0),
(306, 'Ramit/317/11', 'Azmach ', 'Abrham', 'Male', 3.17, 1, 'unallocated', 68, 418, 0),
(307, 'Ramit/340/11', 'Baye', 'Wendmhunegn', 'Male', 4, 0, 'unallocated', 69, 419, 0),
(308, 'Ramit/377/31', 'Berket', 'Addo', 'Male', 3.2, 0, 'unallocated', 70, 420, 0),
(309, 'Ramit/379/11', 'Berket', 'Yosef', 'Male', 3.1, 0, 'unallocated', 71, 421, 0),
(310, 'Ramit/387/11', 'Berket ', 'Fekadu', 'Male', 3.17, 0, 'unallocated', 72, 422, 1),
(311, 'Ramit/408/11', 'Beteley', 'Melese ', 'Male', 3.5, 0, 'unallocated', 73, 423, 0),
(312, 'Ramit/446/11', 'Bineyam', 'Yohannes', 'Male', 3.4, 0, 'unallocated', 74, 424, 1),
(313, 'Ramit/479/11', 'Biruk', 'Teshome', 'Male', 3.7, 1, 'unallocated', 75, 425, 1),
(314, 'Ramit/532/11', 'Dagim', 'Yosef', 'Male', 3, 0, 'unallocated', 76, 426, 1),
(315, 'Ramit/567/11', 'Dawit ', 'Mandefro', 'Male', 2, 0, 'unallocated', 77, 427, 1),
(316, 'Ramit/592/11', 'Demoze', 'Dangura', 'Male', 4, 0, 'unallocated', 78, 428, 1),
(317, 'Ramit/612/11', 'Dessia', 'Fikir', 'Male', 3.5, 0, 'unallocated', 79, 429, 0),
(318, 'Ramit/670/11', 'Elias', 'Dengo', 'Male', 3.8, 0, 'unallocated', 80, 430, 0),
(319, 'Ramit/733/11', 'Eyob ', 'Gebeyehu', 'Male', 2.5, 0, 'unallocated', 81, 431, 0),
(320, 'Ramit/739/11', 'Eyob ', 'Mengesha', 'Male', 3.2, 0, 'unallocated', 82, 432, 0),
(321, 'Ramit/746/11', 'Eyosiyas', 'Belete', 'Male', 2.1, 0, 'unallocated', 83, 433, 0),
(322, 'Ramit/776/45', 'Fekad', 'Melaku', 'Male', 2.17, 0, 'unallocated', 84, 434, 0),
(323, 'Ramit/813/11', 'Francesco', 'Mesele', 'Male', 3.9, 0, 'unallocated', 85, 435, 0),
(324, 'Ramit/843/11', 'Gedamu', 'Atalele', 'Male', 2.85, 0, 'unallocated', 86, 436, 0),
(325, 'Ramit/973/11', 'Henok', 'Moltotal', 'Male', 3.2, 0, 'unallocated', 87, 437, 0),
(326, 'Ramit/983/11', 'Hereyaqos', 'Mola', 'Male', 2.9, 0, 'unallocated', 88, 438, 0),
(327, 'Ramit/1778/11', 'Tesfahun ', 'Megeze', 'Male', 3.9, 0, 'unallocated', 89, 439, 0),
(328, 'Ramit/1804/11', 'Tibebe', 'Feleke', 'Male', 2.5, 0, 'unallocated', 90, 440, 0),
(329, 'Ramit/1810/11', 'Tigist', 'Amakelew', 'Female ', 2.6, 0, 'unallocated', 91, 441, 0),
(330, 'Ramit/1824/11', 'Tihun', 'Abirham', 'Female ', 4, 0, 'unallocated', 92, 442, 0),
(331, 'Ramit/2028/11', 'yoseph', 'Daniel ', 'Male', 2.8, 0, 'unallocated', 93, 443, 0),
(332, 'Ramit/2038/11', 'Zekarias', 'Kaleb', 'Male', 2.9, 0, 'unallocated', 94, 444, 0),
(333, 'Ramit/2053/11', 'Zelalem', 'yohanies', 'Male', 3, 0, 'unallocated', 95, 445, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(3000) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Type` varchar(10) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='the login information on admin users';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Email`, `Type`) VALUES
('HenokM', '1a1dc91c907325c69271ddf0c944bc72', 'henok@gmail.com', 'admin'),
('Ramit/058/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/093/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/111/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/136/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/137/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/141/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1561/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1630/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/165/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1679/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1778/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1781/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1804/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1810/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1824/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1853/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/187/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1904/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1914/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/1956/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/2027/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/2028/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/2038/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/2053/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/317/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/340/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/377/31', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/379/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/387/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/408/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/446/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/479/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/532/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/567/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/592/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/612/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/670/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/733/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/739/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/746/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/776/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/776/45', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/813/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/843/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/973/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('Ramit/983/11', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'student'),
('sudo', 'd338b3f0f405eb5e51c8cc1e5ca66f02', 'sudo@gmail.com', 'su');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_prefrence`
--
ALTER TABLE `department_prefrence`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `department_quota`
--
ALTER TABLE `department_quota`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`#`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
