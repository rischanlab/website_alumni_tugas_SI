-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2012 at 10:27 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'babydoe', 'janedoe', 'lkjl', '2011-12-19 11:40:09', 1),
(2, 'janedoe', 'Kiki', 'chsdxfg', '2011-12-19 12:03:33', 0),
(3, 'janedoe', 'Kiki', 'ksm', '2011-12-19 12:25:02', 0),
(4, 'janedoe', 'Kiki', 'kk', '2011-12-19 12:27:00', 0),
(5, 'janedoe', 'Kiki', 'hh', '2011-12-19 12:32:19', 0),
(6, 'janedoe', 'Suparmi', 'bj', '2011-12-19 12:39:25', 0),
(7, 'janedoe', 'Suparmi', 'hre', '2011-12-19 13:43:46', 0),
(8, 'janedoe', 'Rischan', 'gopgogog', '2011-12-19 14:40:56', 0),
(9, 'janedoe', 'Rischan', 'heiiii', '2011-12-19 15:05:29', 0);
