-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 05:42 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `idno` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idno`, `lname`, `fname`, `mname`, `course`, `sex`) VALUES
('15-037-056', 'Ancheta', 'Christian Daniel', 'Mozo', 'BSIT', ''),
('15-037-051', 'Bernabe', 'Geisher', 'Gonzalo', 'BSIT', ''),
('15-037-055', 'Rulona', 'Rhoei Vincent', 'Estacio', 'BSIT', ''),
('15-036-050', 'Waje', 'Kyla Louise', 'Pabillaran', 'BSCS', ''),
('15-037-040', 'Orias', 'Chesca', 'Cortez', 'BSIT', ''),
('15-036-051', 'Abendanio', 'Carlo', 'Consultado', 'BSIT', ''),
('15-037-059', 'Flormata', 'Allysa', 'Cruz', 'BSIT', ''),
('15-037-054', 'Reyes', 'Robby', 'Gomez', 'BSIT', ''),
('15-037-052', 'Gamban', 'Christopher', 'Lipnica', 'BSIT', ''),
('15-037-050', 'Waje', 'Audrey Noelle', 'Pabillaran', 'BSIT', ''),
('15-037-066', 'Reyes', 'Robby', 'Gomez', 'BSIT', ''),
('15-036-052', 'Vargas', 'Darwin', 'Villegas', 'BSCS', ''),
('15-037-057', 'Aberilla', 'Angelo', 'Jose', 'BSIT', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
