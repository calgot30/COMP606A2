-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 03:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safetrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area`) VALUES
(1, 'Northland'),
(2, 'Auckland'),
(3, 'Waikato'),
(4, 'Bay of Plenty'),
(5, 'Gisborne'),
(6, 'Hawke\'s Bay'),
(7, 'Taranaki'),
(8, 'Whanganui'),
(9, 'Manawatu'),
(10, 'Wairarapa'),
(11, 'Wellington'),
(12, 'Nelson Bays'),
(13, 'Marlborough'),
(14, 'West Coast'),
(15, 'Canterbury'),
(16, 'Timaru'),
(17, 'Oamaru'),
(18, 'Otago'),
(19, 'Southland');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_password` varchar(255) NOT NULL,
  `cust_number` int(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `estimate_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `tradesman_id` int(11) NOT NULL,
  `total_cost` double NOT NULL,
  `cost_parts` varchar(255) NOT NULL,
  `estimate_expiry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `trade_name` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `preferred_cost` double NOT NULL,
  `date_needed` date NOT NULL,
  `offer_end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `trade_id` int(11) NOT NULL,
  `trade_name` varchar(255) NOT NULL,
  `trade_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`trade_id`, `trade_name`, `trade_desc`) VALUES
(1, 'Building & carpentry', 'Carpenters work mainly with wood to repair or install foundations, walls, roofs, windows and doors in buildings.'),
(2, 'Electrician', 'Electricians install, maintain and repair electrical systems and equipment.'),
(3, 'Glazier', 'Glaziers install or replace glass or mirrors in buildings, vehicles or boats and may create decorative glass features.'),
(4, 'Handy-persons', 'Handy-persons do anything and everything around the house and property that you can\'t or won\'t do - even just changing that light bulb in the foyer.'),
(5, 'Painting', 'Painters and decorators apply decorative and protective finishes to interior and exterior walls, doors, windows and other surfaces of buildings.'),
(6, 'Plumber, gasfitter and drainlayer', 'Plumbers, gasfitters and drainlayers assemble, install and repair pipes, drains and fixtures and fittings that supply water and gas or remove waste.'),
(7, 'Roofer', 'Roofers repair or install roofs using materials such as roofing iron, tiles and shingles.');

-- --------------------------------------------------------

--
-- Table structure for table `tradesman`
--

CREATE TABLE `tradesman` (
  `tradesman_id` int(11) NOT NULL,
  `tradesman_name` varchar(255) NOT NULL,
  `tradesman_email` varchar(255) NOT NULL,
  `tradesman_password` varchar(255) NOT NULL,
  `tradesman_number` int(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `trade_name` varchar(30) NOT NULL,
  `job_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area`),
  ADD UNIQUE KEY `area_id` (`area_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `area` (`area`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`estimate_id`),
  ADD UNIQUE KEY `trades_id` (`tradesman_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `area` (`area`),
  ADD KEY `trade_name` (`trade_name`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`trade_name`),
  ADD KEY `trade_id` (`trade_id`);

--
-- Indexes for table `tradesman`
--
ALTER TABLE `tradesman`
  ADD PRIMARY KEY (`tradesman_id`),
  ADD KEY `area` (`area`),
  ADD KEY `quote_id` (`quote_id`),
  ADD KEY `trade_name` (`trade_name`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `estimate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `trade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tradesman`
--
ALTER TABLE `tradesman`
  MODIFY `tradesman_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`area`) REFERENCES `area` (`area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `estimate`
--
ALTER TABLE `estimate`
  ADD CONSTRAINT `estimate_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `estimate_ibfk_2` FOREIGN KEY (`tradesman_id`) REFERENCES `tradesman` (`tradesman_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`trade_name`) REFERENCES `trade` (`trade_name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`area`) REFERENCES `area` (`area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `job_ibfk_3` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `job_ibfk_4` FOREIGN KEY (`job_id`) REFERENCES `tradesman` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tradesman`
--
ALTER TABLE `tradesman`
  ADD CONSTRAINT `tradesman_ibfk_1` FOREIGN KEY (`area`) REFERENCES `area` (`area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tradesman_ibfk_2` FOREIGN KEY (`trade_name`) REFERENCES `trade` (`trade_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;