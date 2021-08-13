-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 06:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `NID` int(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`name`, `email`, `password`, `mobile`, `NID`, `Type`) VALUES
('A. Malek', 'Amalek@gmail.com', '1212', '45454545', 78787878, 'User'),
('Arafat', 'arafat@gmail.com', '111', '010101101', 123123123, 'User'),
('Nasif', 'nasif009@gmail.com', '123', '767676867998', 9898, 'User'),
('saiful', 'saiful005@gmail.com', '456', '0132213', 133466, 'User'),
('Saiful Islam', 'saiful009@gmail.com', '9696', '01999019990', 2147483647, 'User'),
('Shihab', 'ahmedshihab009@gmail.com', '789', '123456', 321654, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `pharma`
--

CREATE TABLE `pharma` (
  `name` varchar(255) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `pharmacyName` varchar(200) DEFAULT NULL,
  `TIN` varchar(200) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharma`
--

INSERT INTO `pharma` (`name`, `email`, `password`, `mobile`, `pharmacyName`, `TIN`, `Type`) VALUES
('A.Malek', 'Amalek@gmail.com', '7878', '999999999', 'Khandakar Pharmacy', '456123789963778', 'Admin'),
('Nasif', 'nasif@gmail.com', '4545', '01521421344', 'Lazz Pharma LTD.', '123456789001', 'Admin'),
('Shihab', 'shihab@gmail.com', '1919', '555555', 'Naz Pharmacy', '111122223333', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacytable`
--

CREATE TABLE `pharmacytable` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `DrugsFor` varchar(255) DEFAULT NULL,
  `Manufacturer` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `By` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacytable`
--

INSERT INTO `pharmacytable` (`ID`, `Name`, `DrugsFor`, `Manufacturer`, `Price`, `By`) VALUES
(10001, 'Napa', 'Analgesics & Antipyretics', 'Beximco Pharmaceuticals Ltd.', '500s pack: 400.00 MRP', 'Lazz Pharma'),
(10002, 'Napa Extra', 'Analgesics & Antipyretics', 'Beximco Pharmaceuticals Ltd.', '200s pack: 380.00 MRP', 'Lazz Pharma'),
(10003, 'Seclo', 'Drugs for peptic ulcer', 'Square Pharmaceuticals Ltd.', '20mg x 96s pack: 384.00 MRP; 40mg x 30s pack: 210.00 MRP', 'Lazz Pharma'),
(10004, 'Amodis', 'Drugs for protozoal infections', 'Square Pharmaceuticals Ltd.', '400mg x 200s pack: 202.00 MRP', 'Lazz Pharma'),
(10005, 'Gastalfet', 'Drugs for peptic ulcer', 'Beximco Pharmaceuticals Ltd.', '100s pack: 402.00 IP', 'Lazz Pharma'),
(10006, 'Avomine', 'Drugs for nausea, vomiting & vertigo', 'Sanofi-aventis Bangladesh Ltd.', '500s pack: 290.00 MRP', 'Lazz Pharma'),
(10007, 'Tusca', 'Drugs for cough & cold', 'Square Pharmaceuticals Ltd.', '100ml bot: 35.00 MRP', 'Lazz Pharma'),
(10008, 'Ambrox Syrup', 'Drugs for cough & cold', 'Square Pharmaceuticals Ltd.', '100ml hot: 30.00 MRP', 'Lazz Pharma'),
(10009, 'Lactuloseh', 'Drugs for constipation', 'Hudson Pharmaceuticals Ltd.', '100ml bot: 60.00 MRP', 'Lazz Pharma'),
(10010, 'ORSaline-N', 'Drugs for diarrhea and dehydration', 'SMC Ltd.', '20s Pack : 90 MRP', 'Lazz Pharma'),
(10011, 'Universal Tasty Saline', 'Drugs for diarrhea and dehydration', 'Universal Food Ltd.', '20s Pack : 90 MRP', 'Lazz Pharma'),
(10015, 'Insulin Actrapid HM', 'Insulin preparations', 'Novo Nordisk/ Transcom', '40 i.u x 10ml vial: 232.00 MRP; 100 i.u x 10ml vial: 532.00 MRP', 'Lazz Pharma');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacytable2`
--

CREATE TABLE `pharmacytable2` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `DrugsFor` varchar(255) DEFAULT NULL,
  `Manufacturer` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `By` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacytable2`
--

INSERT INTO `pharmacytable2` (`ID`, `Name`, `DrugsFor`, `Manufacturer`, `Price`, `By`) VALUES
(20001, 'Napa', 'Analgesics & Antipyretics', 'Beximco Pharmaceuticals Ltd.', '500s pack: 400.00 MRP', 'Naz Pharmacy'),
(20002, 'Napa Extra', 'Analgesics & Antipyretics', 'Beximco Pharmaceuticals Ltd.', '200s pack: 380.00 MRP', 'Naz Pharmacy'),
(20003, 'Seclo', 'Drugs for peptic ulcer', 'Square Pharmaceuticals Ltd.', '20mg x 96s pack: 384.00 MRP; 40mg x 30s pack: 210.00 MRP', 'Naz Pharmacy'),
(20004, 'Amodis', 'Drugs for protozoal infections', 'Square Pharmaceuticals Ltd.', '400mg x 200s pack: 202.00 MRP', 'Naz Pharmacy'),
(20005, 'Gastalfet', 'Drugs for peptic ulcer', 'Beximco Pharmaceuticals Ltd.', '100s pack: 402.00 IP', 'Naz Pharmacy'),
(20006, 'Avomine', 'Drugs for nausea, vomiting & vertigo', 'Sanofi-aventis Bangladesh Ltd.', '500s pack: 290.00 MRP', 'Naz Pharmacy'),
(20007, 'Tusca', 'Drugs for cough & cold', 'Square Pharmaceuticals Ltd.', '100ml bot: 35.00 MRP', 'Naz Pharmacy'),
(20008, 'Ambrox Syrup', 'Drugs for cough & cold', 'Square Pharmaceuticals Ltd.', '100ml hot: 30.00 MRP', 'Naz Pharmacy'),
(20009, 'Lactuloseh', 'Drugs for constipation', 'Hudson Pharmaceuticals Ltd.', '100ml bot: 60.00 MRP', 'Naz Pharmacy'),
(20010, 'ORSaline-N', 'Drugs for diarrhea and dehydration', 'SMC Ltd.', '20s Pack : 90 MRP', 'Naz Pharmacy'),
(20011, 'Universal Tasty Saline', 'Drugs for diarrhea and dehydration', 'Universal Food Ltd.', '20s Pack : 90 MRP', 'Naz Pharmacy'),
(20012, 'Clofenac', 'Drugs for Inflammation and Rheumatic Diseases', 'Square Pharmaceuticals Ltd.', '25mg x 100s pack: 54.00 MRP ; 50mg x 200s pack: 176.00 MRP', 'Naz Pharmacy'),
(20013, 'Clofenac DT', 'Drugs for Inflammation and Rheumatic Diseases', 'Square Pharmaceuticals Ltd.', '100s pack: 300.00 MRP', 'Naz Pharmacy'),
(20014, 'Filwel Gold', 'High potency multivitamin & multimineral formulation comprising of 32 components from vitamin A to Zinc including the complete anti-oxidant group', 'Square Pharmaceuticals Ltd.', '15s pack: 90.00 MRP; 30s pack: 180.00 MRP', 'Naz Pharmacy'),
(20015, 'Insulin Actrapid HM', 'Insulin preparations', 'Novo Nordisk/ Transcom', '40 i.u x 10ml vial: 232.00 MRP; 100 i.u x 10ml vial: 532.00 MRP', 'Naz Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacytable3`
--

CREATE TABLE `pharmacytable3` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `DrugsFor` varchar(255) DEFAULT NULL,
  `Manufacturer` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `By` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacytable3`
--

INSERT INTO `pharmacytable3` (`ID`, `Name`, `DrugsFor`, `Manufacturer`, `Price`, `By`) VALUES
(30001, 'Napa', 'Analgesics & Antipyretics', 'Beximco Pharmaceuticals Ltd.', '500s pack: 400.00 MRP', 'Khandakar Pharma'),
(30002, 'Napa Extra', 'Analgesics & Antipyretics', 'Beximco Pharmaceuticals Ltd.', '200s pack: 380.00 MRP', 'Khandakar Pharma'),
(30003, 'Seclo', 'Drugs for peptic ulcer', 'Square Pharmaceuticals Ltd.', '20mg x 96s pack: 384.00 MRP; 40mg x 30s pack: 210.00 MRP', 'Khandakar Pharma'),
(30004, 'Amodis', 'Drugs for protozoal infections', 'Square Pharmaceuticals Ltd.', '400mg x 200s pack: 202.00 MRP', 'Khandakar Pharma'),
(30005, 'Gastalfet', 'Drugs for peptic ulcer', 'Beximco Pharmaceuticals Ltd.', '100s pack: 402.00 IP', 'Khandakar Pharma'),
(30006, 'Avomine', 'Drugs for nausea, vomiting & vertigo', 'Sanofi-aventis Bangladesh Ltd.', '500s pack: 290.00 MRP', 'Khandakar Pharma'),
(30007, 'Tusca', 'Drugs for cough & cold', 'Square Pharmaceuticals Ltd.', '100ml bot: 35.00 MRP', 'Khandakar Pharma'),
(30008, 'Ambrox Syrup', 'Drugs for cough & cold', 'Square Pharmaceuticals Ltd.', '100ml hot: 30.00 MRP', 'Khandakar Pharma'),
(30009, 'Lactuloseh', 'Drugs for constipation', 'Hudson Pharmaceuticals Ltd.', '100ml bot: 60.00 MRP', 'Khandakar Pharma'),
(30010, 'ORSaline-N', 'Drugs for diarrhea and dehydration', 'SMC Ltd.', '20s Pack : 90 MRP', 'Khandakar Pharma'),
(30011, 'Universal Tasty Saline', 'Drugs for diarrhea and dehydration', 'Universal Food Ltd.', '20s Pack : 90 MRP', 'Khandakar Pharma'),
(30012, 'Clofenac', 'Drugs for Inflammation and Rheumatic Diseases', 'Square Pharmaceuticals Ltd.', '25mg x 100s pack: 54.00 MRP ; 50mg x 200s pack: 176.00 MRP', 'Khandakar Pharma'),
(30013, 'Clofenac DT', 'Drugs for Inflammation and Rheumatic Diseases', 'Square Pharmaceuticals Ltd.', '100s pack: 300.00 MRP', 'Khandakar Pharma'),
(30014, 'Filwel Gold', 'High potency multivitamin & multimineral formulation comprising of 32 components from vitamin A to Zinc including the complete anti-oxidant group', 'Square Pharmaceuticals Ltd.', '15s pack: 90.00 MRP; 30s pack: 180.00 MRP', 'Khandakar Pharma'),
(30015, 'Insulin Actrapid HM', 'Insulin preparations', 'Novo Nordisk/ Transcom', '40 i.u x 10ml vial: 232.00 MRP; 100 i.u x 10ml vial: 532.00 MRP', 'Khandakar Pharma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `pharma`
--
ALTER TABLE `pharma`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `pharmacytable`
--
ALTER TABLE `pharmacytable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pharmacytable2`
--
ALTER TABLE `pharmacytable2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pharmacytable3`
--
ALTER TABLE `pharmacytable3`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
