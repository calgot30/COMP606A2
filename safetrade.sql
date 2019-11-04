-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 10:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_password`, `cust_number`, `area`, `job_id`) VALUES
(3, 'c', 'c@c.com', '$2y$10$tIQ9xpz..4Zyy9IalsxR3Ob/dQNHX.rtmnlHAprlEgH6Wi4pbPtsi', 456789123, 'Bay of Plenty', 0),
(2, 'mark', 'mark@mark.com', 'mark', 789456123, 'Waikato', 0),
(4, 'peter', 'parker@peter.com', '$2y$10$rHWfYHIACoi7xivTg/pjSOTx.KvFtIBuqM3t2V3EwJkozBwoXwyGG', 800838383, 'Auckland', 0),
(1, 'test', 'test@test.com', '$2y$10$dYYsMef4BV4THqPojHX3v.ebCgOKEml/nGRs5xyHzAXeavDv1eiUW', 211234567, 'Waikato', 0);

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `estimate_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `tradesman_email` varchar(255) NOT NULL,
  `total_cost` double NOT NULL,
  `cost_parts` varchar(255) NOT NULL,
  `estimate_expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `trade_name` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `preferred_cost` int(11) NOT NULL,
  `date_needed` date NOT NULL,
  `offer_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `job_desc`, `cust_email`, `trade_name`, `area`, `preferred_cost`, `date_needed`, `offer_end_date`) VALUES
(1, 'need roof', 'need roof', 'test@test.com', 'Roofer', 'Taranaki', 5, '2019-11-18', '2019-11-11'),
(2, 'need roof', 'need roof', 'test@test.com', 'Roofer', 'Taranaki', 5, '2019-11-18', '2019-11-11'),
(3, 'need loo', 'loo broke too much poo', 'test@test.com', 'Plumber, gasfitter and drainla', 'Marlborough', 50, '2019-11-13', '2019-11-20'),
(4, 'jobby', 'job', 'bob@thebuilder.com', 'Building & carpentry', 'Hawke\'s Bay', 4, '2021-01-01', '2022-01-01'),
(5, 'q', 'q', 'bob@thebuilder.com', 'Building & carpentry', 'Auckland', 5, '2019-01-01', '2019-01-01'),
(6, 'r', 'r', 'bob@thebuilder.com', 'Building & carpentry', 'Auckland', 9, '2019-01-01', '2019-01-01'),
(7, 'fix my drywall', 'Kyle punched a hole in my drywall', 'c@c.com', 'Painting', 'West Coast', 20, '2019-12-11', '2019-12-18'),
(8, 'paint my fence', 'some kids tagged my fence, I need someone to paint it for me', 'c@c.com', 'Painting', 'Whanganui', 400, '2019-12-25', '2019-12-26'),
(9, 'Help me fix the city', 'Some guy dressed as a spider broke a hole in some ladies wall (not my aunt) I can\'t pay much. Please I deliver pizzas for a living.', 'parker@peter.com', 'Building & carpentry', 'Auckland', 20, '2020-01-10', '2020-01-18');

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
-- Dumping data for table `tradesman`
--

INSERT INTO `tradesman` (`tradesman_id`, `tradesman_name`, `tradesman_email`, `tradesman_password`, `tradesman_number`, `area`, `trade_name`, `job_id`, `quote_id`) VALUES
(2, 'bob', 'bob@thebuilder.com', '$2y$10$VEtSk4jJ4TAMUSB19viRtu5Gy5IbYHwmqJyIyD0YU/KbLgM.rOieC', 789456123, 'Gisborne', 'Building & carpentry', 0, 0),
(1, 'test', 'test@test.com', '$2y$10$KOI1oaP0wKJr6uP9vF3XTOa2/Z95Bq/v9PLW3zQpacu3VIbSGVSl2', 2147483647, 'Canterbury', 'Handy-persons', 0, 0);

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
  ADD PRIMARY KEY (`cust_email`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`estimate_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

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
  ADD PRIMARY KEY (`tradesman_email`),
  ADD KEY `tradesman_id` (`tradesman_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `estimate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tradesman`
--
ALTER TABLE `tradesman`
  MODIFY `tradesman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
