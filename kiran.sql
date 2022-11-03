-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 03:32 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Name`, `Email`, `Message`) VALUES
('KIRAN', 'kiran.kp2004@gmail.c', 'hello buddy I liked your Website '),
('KIRAN', 'kiran.kp2004@gmail.c', 'hello buddy I liked your Website '),
('KIRAN', 'kiran.kp2004@gmail.c', 'hello buddy I liked your Website '),
('dipak', 'dipak.patil@gmail.co', 'HIi Bro'),
('dipak', 'dipak.patil@gmail.co', 'HIi Bro'),
('dipak', 'dipak.patil@gmail.co', 'HIi Bro'),
('dipak', 'dipak.patil@gmail.co', 'HIi Bro'),
('kd', 'dipak.patil@gmail.co', 'hello php'),
('Kiran Patil', 'kiran.kp2004@gmail.c', 'hii buddy'),
('dipak patil', 'dipak.patil@gmail.co', 'hello'),
('dipak patil', 'dipak.dk@gmail.com', 'helio'),
('myname', 'abc@gmail.com', 'my message'),
('kiran', 'kiran.kp2004@gmail.c', 'this message is for test'),
('kiran', 'kiran.kp2004@gmail.c', 'hello buddy');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `Name` varchar(20) NOT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`Name`, `ID`) VALUES
('kp', 101),
('dk', 103),
('dipak', 102),
('kiran', 199),
('kiran', 99),
('DIPAK', 98);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('kiran', 'pass@123'),
('dipak', 'pass'),
('dkP', 'passds'),
('brother', '@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
