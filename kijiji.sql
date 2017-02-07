-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 07:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kijiji`
--
CREATE DATABASE IF NOT EXISTS `kijiji` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kijiji`;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `ad_id` varchar(255) DEFAULT NULL,
  `link` text,
  `postal_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `postal`
--

CREATE TABLE IF NOT EXISTS `postal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postal_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `postal`
--

INSERT INTO `postal` (`id`, `postal_code`) VALUES
(1, 'M4W 1J1'),
(2, 'M4X 1L7'),
(3, 'M4X 1M5'),
(4, 'M4X 1J7'),
(5, 'M4X 1N5'),
(6, 'M4X 1J8'),
(7, 'M4X 1K1'),
(8, 'M4X 1M4'),
(9, 'M4X 1J5'),
(10, 'M4X 1K7'),
(11, 'M4X 1J4'),
(12, 'M4X 1J6'),
(13, 'M4X 1R4'),
(14, 'M4X 1P1'),
(15, 'M4X 1J9'),
(16, 'M4X 1N4'),
(17, 'M4X 1G6'),
(18, 'M4X 1N3'),
(19, 'M4X 1M3'),
(20, 'M4X 1M2'),
(21, 'M4X 1N1'),
(22, 'M4X 1M1'),
(23, 'M4X 1W7'),
(24, 'M4X 1W5'),
(25, 'M4X 1R3'),
(26, 'M4X 1G7'),
(27, 'M4X 1G8'),
(28, 'M4X 1G2'),
(29, 'M4X 1L1'),
(30, 'M4W 1J1'),
(31, 'M4X 1L7'),
(32, 'M4X 1M5'),
(33, 'M4X 1J7'),
(34, 'M4X 1N5'),
(35, 'M4X 1J8'),
(36, 'M4X 1K1'),
(37, 'M4X 1M4'),
(38, 'M4X 1J5'),
(39, 'M4X 1K7'),
(40, 'M4X 1J4'),
(41, 'M4X 1J6'),
(42, 'M4X 1R4'),
(43, 'M4X 1P1'),
(44, 'M4X 1J9'),
(45, 'M4X 1N4'),
(46, 'M4X 1G6'),
(47, 'M4X 1N3'),
(48, 'M4X 1M3'),
(49, 'M4X 1M2'),
(50, 'M4X 1N1'),
(51, 'M4X 1M1'),
(52, 'M4X 1W7'),
(53, 'M4X 1W5'),
(54, 'M4X 1R3'),
(55, 'M4X 1G7'),
(56, 'M4X 1G8'),
(57, 'M4X 1G2'),
(58, 'M4X 1L1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
