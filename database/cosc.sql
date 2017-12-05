-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 10:43 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cosc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failedlog`
--

CREATE TABLE IF NOT EXISTS `failedlog` (
  `address` text NOT NULL,
  `attemptTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `failedlog`
--

INSERT INTO `failedlog` (`address`, `attemptTime`) VALUES
('127.0.0.1', '2017-11-20 18:05:05'),
('127.0.0.1', '2017-11-20 18:05:30'),
('127.0.0.1', '2017-11-20 18:08:10'),
('127.0.0.1', '2017-11-20 18:09:17'),
('127.0.0.1', '2017-11-20 18:09:38'),
('127.0.0.1', '2017-11-20 18:09:40'),
('127.0.0.1', '2017-11-20 18:09:41'),
('127.0.0.1', '2017-11-20 18:09:41'),
('127.0.0.1', '2017-11-20 18:09:43'),
('127.0.0.1', '2017-11-20 18:11:05'),
('127.0.0.1', '2017-11-20 18:11:06'),
('127.0.0.1', '2017-11-20 18:12:18'),
('127.0.0.1', '2017-11-20 18:12:20'),
('127.0.0.1', '2017-11-20 18:13:50'),
('127.0.0.1', '2017-11-20 18:13:51'),
('127.0.0.1', '2017-11-20 18:13:51'),
('127.0.0.1', '2017-11-20 20:39:17'),
('127.0.0.1', '2017-11-20 20:39:56'),
('127.0.0.1', '2017-11-20 20:41:20'),
('127.0.0.1', '2017-11-20 21:05:33'),
('127.0.0.1', '2017-11-20 21:10:13'),
('127.0.0.1', '2017-11-20 21:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `logID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `state` varchar(100) NOT NULL,
  `activityTime` datetime NOT NULL,
  PRIMARY KEY (`logID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logID`, `username`, `state`, `activityTime`) VALUES
(2, 'saif', 'Login', '2017-11-01 17:56:42'),
(3, 'saif', 'Login', '2017-11-20 17:59:15'),
(4, 'saif', 'Logout', '2017-11-20 18:00:43'),
(5, 'admin', 'Login', '2017-11-20 19:16:32'),
(6, 'admin', 'Logout', '2017-11-20 19:17:36'),
(7, 'admin', 'Login', '2017-11-20 19:17:39'),
(8, 'admin', 'Logout', '2017-11-20 19:20:05'),
(9, 'admin', 'Login', '2017-11-20 19:20:08'),
(10, 'admin', 'Logout', '2017-11-20 19:20:39'),
(11, 'admin', 'Login', '2017-11-20 19:20:41'),
(12, 'admin', 'Logout', '2017-11-20 19:20:47'),
(13, 'saif', 'Login', '2017-11-20 19:22:39'),
(14, 'saif', 'Logout', '2017-11-20 19:22:45'),
(15, 'admin', 'Login', '2017-11-20 19:22:47'),
(16, 'admin', 'Logout', '2017-11-20 19:23:15'),
(17, 'admin', 'Login', '2017-11-20 19:23:17'),
(18, 'admin', 'Logout', '2017-11-20 19:25:48'),
(19, 'saif', 'Login', '2017-11-20 19:25:51'),
(20, 'saif', 'Logout', '2017-11-20 19:25:59'),
(21, 'admin', 'Login', '2017-11-20 19:27:34'),
(22, 'admin', 'Logout', '2017-11-20 19:28:19'),
(23, 'saif', 'Login', '2017-11-20 19:28:26'),
(24, 'saif', 'Logout', '2017-11-20 19:28:42'),
(25, 'saif', 'Login', '2017-11-20 19:29:34'),
(26, 'saif', 'Logout', '2017-11-20 19:29:36'),
(27, 'admin', 'Login', '2017-11-20 19:29:38'),
(28, 'admin', 'Logout', '2017-11-20 19:30:16'),
(29, 'admin', 'Login', '2017-11-20 19:30:18'),
(30, 'admin', 'Logout', '2017-11-20 19:30:45'),
(31, 'admin', 'Login', '2017-11-20 19:30:47'),
(32, 'admin', 'Logout', '2017-11-20 19:31:36'),
(33, 'admin', 'Login', '2017-11-20 19:31:39'),
(34, 'admin', 'Logout', '2017-11-20 19:31:50'),
(35, 'admin', 'Login', '2017-11-20 19:31:52'),
(36, 'admin', 'Logout', '2017-11-20 19:32:13'),
(37, 'saif', 'Login', '2017-11-20 19:32:15'),
(38, 'saif', 'Logout', '2017-11-20 19:32:17'),
(39, 'admin', 'Login', '2017-11-20 19:33:16'),
(40, 'admin', 'Logout', '2017-11-20 20:05:20'),
(41, 'admin', 'Login', '2017-11-20 20:05:22'),
(42, 'admin', 'Logout', '2017-11-20 21:00:07'),
(43, 'saif', 'Login', '2017-11-20 21:00:09'),
(44, 'saif', 'Logout', '2017-11-20 21:00:11'),
(45, 'saif', 'Login', '2017-11-20 21:07:06'),
(46, 'saif', 'Logout', '2017-11-20 21:27:12'),
(57, 'saif', 'Login', '2017-11-20 21:39:35'),
(58, 'saif', 'Logout', '2017-11-20 21:39:37'),
(65, 'admin', 'Login', '2017-11-20 22:07:50'),
(66, 'admin', 'Logout', '2017-11-20 22:08:01'),
(67, 'saif', 'Login', '2017-11-20 22:08:07'),
(68, 'saif', 'Logout', '2017-11-20 22:08:11'),
(69, 'faisal', 'Login', '2017-11-20 22:08:18'),
(70, 'faisal', 'Logout', '2017-11-20 22:08:21'),
(71, 'faisal', 'Login', '2017-11-20 22:10:27'),
(72, 'faisal', 'Logout', '2017-11-20 22:14:26'),
(73, 'saif', 'Login', '2017-11-20 22:14:30'),
(74, 'saif', 'Logout', '2017-11-20 22:26:05'),
(75, 'saif', 'Login', '2017-11-20 22:36:31'),
(76, 'saif', 'Logout', '2017-11-20 22:38:25'),
(77, 'admin', 'Login', '2017-11-20 22:38:31'),
(78, 'admin', 'Logout', '2017-11-20 22:38:50'),
(79, 'saif', 'Login', '2017-11-20 22:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `reminderID` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdDate` date NOT NULL,
  `username` varchar(500) NOT NULL,
  PRIMARY KEY (`reminderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`reminderID`, `subject`, `description`, `createdDate`, `username`) VALUES
(1, 'Alpha', '						 this is my first note		hi m description also				 ', '2017-11-30', 'saif'),
(5, 'beta', 'hiiiiiii', '2017-11-01', 'saif'),
(6, 'Gema', 'hiii this is me', '2017-11-01', 'faisal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `age`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 'saif', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(3, 'faisal', '827ccb0eea8a706c4c34a16891f84e7b', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
