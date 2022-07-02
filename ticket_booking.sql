-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 07:59 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `booked_seat` int(11) NOT NULL,
  `bill_price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cust_id`, `bus_id`, `booked_seat`, `bill_price`) VALUES
(55, 8, 13, 2, '400'),
(56, 8, 14, 2, '1000'),
(57, 8, 15, 1, '500'),
(58, 17, 13, 2, '400');

-- --------------------------------------------------------

--
-- Table structure for table `bus_detail`
--

CREATE TABLE `bus_detail` (
  `bus_id` int(11) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `source_station` varchar(30) NOT NULL,
  `destination_station` varchar(30) NOT NULL,
  `s_time` time NOT NULL,
  `d_time` time NOT NULL,
  `bus_date` date NOT NULL,
  `max_seat` int(2) NOT NULL,
  `price` varchar(10) NOT NULL,
  `bus_detail` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_detail`
--

INSERT INTO `bus_detail` (`bus_id`, `bus_no`, `source_station`, `destination_station`, `s_time`, `d_time`, `bus_date`, `max_seat`, `price`, `bus_detail`, `datetime`) VALUES
(13, 43, 'surat', 'rajkot', '02:43:00', '00:00:00', '2020-06-30', 30, '200', 'sleeper', '2020-06-29 11:40:22'),
(14, 8980, 'rajkot', 'surat', '21:00:00', '00:00:00', '2020-07-03', 46, '500', 'surat to rajkot express', '2020-07-02 16:29:03'),
(15, 9173, 'surat', 'rajkot', '22:00:00', '06:00:00', '2020-07-03', 55, '500', 'surat to rajkot express ', '2020-07-02 16:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `city`, `date_time`) VALUES
(1, 'surat', '2020-03-13 19:50:58'),
(2, 'rajkot', '2020-03-13 19:52:06'),
(3, 'bhavnagar', '2020-03-13 19:52:26'),
(4, 'junagadh', '2020-03-13 19:52:34'),
(5, 'ahemdabad', '2020-03-13 19:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `email`, `password`, `phone`, `gender`, `address`, `date_time`, `role`) VALUES
(1, 'urvish', 'urvish@gmail.com', '123', '7575828979', 'male', 'surat', '2020-02-05 18:26:26', 'admin'),
(8, 'maulik', 'maulik@gmail.com', '123', '1234567890', 'male', 'rajkot', '2020-02-20 19:05:30', 'customer'),
(16, 'kano', 'kano@gmail.com', '123', '8140624082', 'male', 'surat', '2020-07-02 16:41:32', 'customer'),
(17, 'Shani', 'shani@gmail.com', '123', '7600064504', 'male', 'Surat', '2021-10-08 23:00:55', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `cust_name`, `email`, `phone`, `message`, `datetime`) VALUES
(1, 'm', 'maulik@gmail.com', '123', 'xcmmzxk', '2020-03-14 09:57:53'),
(2, 'maulik', 'maulik@gmail.com', '7575828979', 'aaaaaa', '2020-03-14 10:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_point_master`
--

CREATE TABLE `pickup_point_master` (
  `pp_id` int(11) NOT NULL,
  `pickup_point_name` varchar(20) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_point_master`
--

INSERT INTO `pickup_point_master` (`pp_id`, `pickup_point_name`, `city_id`) VALUES
(1, 'navjivan hotel', 1),
(2, 'katargam', 1),
(3, 'kamrej chowkdi', 1),
(4, 'zoo', 1),
(5, 'greenlend chowkdi', 2),
(6, 'kkv hall', 2),
(7, 'gondal chowkdi', 2),
(8, 'kalupur', 5),
(9, 'bapunagar', 5),
(10, 'vadal bus stand', 4),
(11, 'kalva chowk', 4),
(12, 'majevdi gate', 4),
(15, 'RTO Circle', 3),
(16, 'Bhagvati circle - ka', 3),
(17, 'water tank', 3),
(18, 'nari chowkdi', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `bus_detail`
--
ALTER TABLE `bus_detail`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_point_master`
--
ALTER TABLE `pickup_point_master`
  ADD PRIMARY KEY (`pp_id`),
  ADD KEY `pickup_point_master` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `bus_detail`
--
ALTER TABLE `bus_detail`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pickup_point_master`
--
ALTER TABLE `pickup_point_master`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`bus_id`) REFERENCES `bus_detail` (`bus_id`);

--
-- Constraints for table `pickup_point_master`
--
ALTER TABLE `pickup_point_master`
  ADD CONSTRAINT `pickup_point_master` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
