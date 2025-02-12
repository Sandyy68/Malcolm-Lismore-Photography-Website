-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2023 at 02:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lismore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `enq_table`
--

CREATE TABLE `enq_table` (
  `enqid` int(11) NOT NULL,
  `u_id` int(3) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_tel` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `accepted_enq` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enq_table`
--

INSERT INTO `enq_table` (`enqid`, `u_id`, `u_email`, `u_tel`, `date`, `time`, `location`, `accepted_enq`) VALUES
(4, 1, 'uaer@gmail.com', 123456, '2023-10-18', '3am-2pm', 'badulla', 1),
(5, 1, 'uaer@gmail.com', 123456, '2023-10-24', '3am-2pm', 'gampaha', 0),
(7, 5, 'user@gmail.com', 2147483647, '2023-11-13', '9a.m-12pm', 'colombo', 0),
(8, 5, 'user11221@gmail.com', 2147483647, '2023-11-12', '3am-2pm', 'https://maps.app.goo.gl/WmAE4uGKuKc9qmvS6', 0),
(9, 5, 'user111@gmail.com', 2147483647, '2023-11-12', '3am-2pm', 'https://maps.app.goo.gl/WmAE4uGKuKc9qmvS6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed_table`
--

CREATE TABLE `feed_table` (
  `feed_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `feed_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_table`
--

CREATE TABLE `gallery_table` (
  `gal_id` int(11) NOT NULL,
  `gal_location` varchar(255) NOT NULL,
  `gal_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_table`
--

INSERT INTO `gallery_table` (`gal_id`, `gal_location`, `gal_type`) VALUES
(7, 'pic/WhatsApp Image 2023-11-13 at 13.51.29_7ecb548d.jpg', 'landscape'),
(8, 'pic/WhatsApp Image 2023-11-13 at 13.51.38_73e50904.jpg', 'landscape'),
(9, 'pic/WhatsApp Image 2023-11-13 at 13.52.19_2ec71ebd.jpg', 'landscape'),
(10, 'pic/WhatsApp Image 2023-11-13 at 13.52.28_a58542e9.jpg', 'landscape'),
(11, 'pic/WhatsApp Image 2023-11-13 at 13.52.49_38ad0106.jpg', 'landscape'),
(12, 'pic/WhatsApp Image 2023-11-13 at 13.53.46_31248cb1.jpg', 'landscape'),
(13, 'pic/WhatsApp Image 2023-11-13 at 13.54.25_035c2bf3.jpg', 'landscape'),
(14, 'pic/WhatsApp Image 2023-11-13 at 13.53.54_29abfefa.jpg', 'landscape'),
(15, 'pic/WhatsApp Image 2023-11-13 at 13.54.35_a432023c.jpg', 'landscape');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `u_id` int(3) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_psw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`u_id`, `u_name`, `u_psw`) VALUES
(1, 'admin', '123'),
(3, 'shakalya', '1234'),
(5, 'user1', '1234'),
(6, 'udara', '1234'),
(7, 'user4', '2222'),
(8, 'user3', '12345'),
(9, 'user1', '1234'),
(10, 'user3', '1234'),
(11, 'user3', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `packages-table`
--

CREATE TABLE `packages-table` (
  `pack_id` int(11) NOT NULL,
  `pack_Name` varchar(255) NOT NULL,
  `pack_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages-table`
--

INSERT INTO `packages-table` (`pack_id`, `pack_Name`, `pack_Price`) VALUES
(1, 'Wedding Package', 200),
(2, 'Portrait Package', 0),
(3, 'Event Package', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enq_table`
--
ALTER TABLE `enq_table`
  ADD PRIMARY KEY (`enqid`),
  ADD KEY `FK_enq_table_u_id` (`u_id`);

--
-- Indexes for table `feed_table`
--
ALTER TABLE `feed_table`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `gallery_table`
--
ALTER TABLE `gallery_table`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `packages-table`
--
ALTER TABLE `packages-table`
  ADD PRIMARY KEY (`pack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enq_table`
--
ALTER TABLE `enq_table`
  MODIFY `enqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feed_table`
--
ALTER TABLE `feed_table`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_table`
--
ALTER TABLE `gallery_table`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages-table`
--
ALTER TABLE `packages-table`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enq_table`
--
ALTER TABLE `enq_table`
  ADD CONSTRAINT `FK_enq_table_u_id` FOREIGN KEY (`u_id`) REFERENCES `login_table` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
