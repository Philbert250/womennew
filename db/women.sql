-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 12:46 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `women`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `phone`, `password`, `role`) VALUES
(1, 'phil', 'ndzphilbert@gmail.com', '0785339987', 'phil123', 'admin'),
(5, 'kenny', 'kennyrugaba@gmail.com', '0786450098', 'phil123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adversor`
--

CREATE TABLE `adversor` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `location` text NOT NULL,
  `role` text NOT NULL,
  `cell` text NOT NULL,
  `village` text NOT NULL,
  `hospital` varchar(111) NOT NULL,
  `password` varchar(222) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adversor`
--

INSERT INTO `adversor` (`id`, `firstname`, `lastname`, `email`, `phone`, `location`, `role`, `cell`, `village`, `hospital`, `password`, `admin_id`) VALUES
(4, 'Kwizera', 'Emile', 'kwizeraemile125@gmail.com', '+250787621709', 'Rusatira', 'adversor', 'qq', 'ds', '1', 'mnb', 0),
(5, 'sonia', 'kenny', 'kennyrugaba@gmail.com', '434', 'Gishamvu', 'adversor', 'dhj', 'fdhj', '1', 'jh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `locaction` varchar(255) NOT NULL,
  `role` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `registertime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `phone` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `dob` varchar(22) NOT NULL,
  `healthcenter` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `gender`, `phone`, `email`, `dob`, `healthcenter`, `password`, `registtime`) VALUES
(2, 'solange', 'Female', '07438732', 'soso@gmail.com', '2022-01-01', 1, 'mnb', '2022-12-01 22:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `woman` text NOT NULL,
  `treat` varchar(222) NOT NULL,
  `dose` varchar(222) NOT NULL,
  `advice` text NOT NULL,
  `period` varchar(222) NOT NULL,
  `nextperiod` varchar(222) NOT NULL,
  `comment` text NOT NULL,
  `adversor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `woman`, `treat`, `dose`, `advice`, `period`, `nextperiod`, `comment`, `adversor_id`) VALUES
(4, '9', 'dd', '3', 'd', '2022-01-01', '2022-02-01', 'fdf\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `healthcenter`
--

CREATE TABLE `healthcenter` (
  `id` int(11) NOT NULL,
  `centername` text NOT NULL,
  `location` text NOT NULL,
  `address` varchar(222) NOT NULL,
  `registdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthcenter`
--

INSERT INTO `healthcenter` (`id`, `centername`, `location`, `address`, `registdate`) VALUES
(1, 'Mbazi sector', 'Mukura', 'mbazicenter@gmail.com', '2022-12-01 22:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `address` varchar(222) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notication`
--

CREATE TABLE `notication` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `reciver` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `child` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `timesent` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cell` text NOT NULL,
  `village` text NOT NULL,
  `hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `location`, `timesent`, `cell`, `village`, `hospital`) VALUES
(9, 'philbetr', 'Male', '2022-12-13', 'ndzphilbert@fgm.com', '0785600822', 'Gishamvu', '2022-12-01 23:36:45', 'fdf', 'fdf', 1),
(10, 'Kwizera Emile', 'Male', '', 'kwizeraemile125@gmail.com', '+250787621709', 'Gishamvu', '2022-12-02 01:20:57', 'dsd', 'dff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tranfer`
--

CREATE TABLE `tranfer` (
  `id` int(11) NOT NULL,
  `woman` text NOT NULL,
  `sponsor` text NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `deseases` text NOT NULL,
  `Comments` text NOT NULL,
  `timesent` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tranfer`
--

INSERT INTO `tranfer` (`id`, `woman`, `sponsor`, `hospital`, `deseases`, `Comments`, `timesent`, `admin_id`) VALUES
(5, '9', 'widiu', 'Hospital', 'sdfjhdfh', 'fhdjf', '2022-12-02 00:27:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transferhealth`
--

CREATE TABLE `transferhealth` (
  `id` int(11) NOT NULL,
  `woman` text NOT NULL,
  `hospital` text NOT NULL,
  `problem` text NOT NULL,
  `Comments` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferhealth`
--

INSERT INTO `transferhealth` (`id`, `woman`, `hospital`, `problem`, `Comments`, `admin_id`) VALUES
(1, '9', 'Hospital', 'hjfdhfbjh', 'bdjhdf\r\n\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `woman` varchar(222) NOT NULL,
  `vaccine` text NOT NULL,
  `dose` text NOT NULL,
  `period` varchar(222) NOT NULL,
  `nextperiod` varchar(222) NOT NULL,
  `comment` text NOT NULL,
  `timesent` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `woman`, `vaccine`, `dose`, `period`, `nextperiod`, `comment`, `timesent`, `admin_id`) VALUES
(4, '9', 'dsd', '32', '2023-01-01', '2022-01-01', 'chhjcb', '2022-12-02 00:08:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adversor`
--
ALTER TABLE `adversor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `healthcenter` (`healthcenter`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adversor_id` (`adversor_id`);

--
-- Indexes for table `healthcenter`
--
ALTER TABLE `healthcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notication`
--
ALTER TABLE `notication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital` (`hospital`);

--
-- Indexes for table `tranfer`
--
ALTER TABLE `tranfer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `transferhealth`
--
ALTER TABLE `transferhealth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adversor`
--
ALTER TABLE `adversor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `healthcenter`
--
ALTER TABLE `healthcenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notication`
--
ALTER TABLE `notication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tranfer`
--
ALTER TABLE `tranfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transferhealth`
--
ALTER TABLE `transferhealth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
