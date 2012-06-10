-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2012 at 02:37 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grim0035`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` year(4) NOT NULL,
  `director` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `release_date`, `director`) VALUES
(1, 'Raiders of the Lost Ark', 1981, 'Steven Spielberg'),
(2, 'American Graffiti', 1973, 'George Lucas'),
(3, 'Star Wars', 1977, 'George Lucas'),
(4, 'Air Force One', 1997, 'Wolfgang Petersen'),
(5, 'Patriot Games', 1992, 'Phillip Noyce'),
(6, 'Firewall ', 2006, 'Richard Loncraine'),
(7, 'The Devil''s Own', 1997, 'Alan J. Pakula'),
(8, 'Clear and Present Danger', 1994, 'Phillip Noyce'),
(9, 'Apocalypse How?', 1979, 'Scott Grimes'),
(10, 'Regarding Henry ', 1991, 'Mike Nichols');
