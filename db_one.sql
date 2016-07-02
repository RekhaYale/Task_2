-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 11:34 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `Name` varchar(25) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `level` int(1) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`level`, `question`, `answer`) VALUES
(1, 'Who is the author of the book ''Mahashwetha''?', 'Sudha Murty'),
(2, 'A person who loves or collects books is called ?', 'Bibliophile'),
(3, 'Name the author of the book "The Alchemist".', 'Paulo Coelho');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`) VALUES
('devdikshit@gmail.com', 'Dev', 'dev'),
('manu@gmail.com', 'Manu', 'manu'),
('neha@gmail.com', 'Neha', 'neha'),
('nikki@gmail.com', 'Nikki', 'nikki'),
('prerna@gmail.com', 'Prerna', 'prerna'),
('priya@gmail.com', 'Priya', 'priya'),
('radha@gmail.com', 'Radha', 'radha'),
('ramya@gmail.com', 'Ramya', 'ramya'),
('rathi@gmail.com', 'Rathi', 'rathi'),
('ygrekha96@gmail.com', 'RekhaYale', 'rekha'),
('rekhs@gmail.com', 'Rekhs', 'rekha'),
('rooneyw452@gmail.com', 'Rooney', 'rooney'),
('rupa@gmail.com', 'Rupa', 'rupa'),
('sona@gmail.com', 'Sonakshi', 'sonakshi'),
('tejas@gmail.com', 'TejasYale', 'tejas'),
('uma@gmail.com', 'Uma', 'uma');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
