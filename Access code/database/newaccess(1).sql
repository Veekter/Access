-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2014 at 02:53 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newaccess`
--

-- --------------------------------------------------------

--
-- Table structure for table `backserv`
--

CREATE TABLE IF NOT EXISTS `backserv` (
  `serv_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` int(100) NOT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backserv`
--

INSERT INTO `backserv` (`serv_id`, `item`, `price`, `included`) VALUES
(1, '1', 65432, 65432);

-- --------------------------------------------------------

--
-- Table structure for table `backus`
--

CREATE TABLE IF NOT EXISTS `backus` (
  `usr_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` int(100) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backus`
--

INSERT INTO `backus` (`usr_id`, `item`, `price`, `included`) VALUES
(1, '1', 54321, 5432);

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `items` varchar(50) NOT NULL,
  `prices` int(50) NOT NULL,
  `net_id` int(10) NOT NULL,
  `web_id` int(10) NOT NULL,
  `host_id` int(10) NOT NULL,
  `eone_id` int(10) NOT NULL,
  `wall_id` int(10) NOT NULL,
  `wifi_id` int(10) NOT NULL,
  `lan_id` int(10) NOT NULL,
  `file_id` int(10) NOT NULL,
  `serv_id` int(10) NOT NULL,
  `usr_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `web_id` (`web_id`),
  KEY `host_id` (`host_id`),
  KEY `eone_id` (`eone_id`),
  KEY `wall_id` (`wall_id`),
  KEY `wifi_id` (`wifi_id`),
  KEY `lan_id` (`lan_id`),
  KEY `file_id` (`file_id`),
  KEY `serv_id` (`serv_id`),
  KEY `usr_id` (`usr_id`),
  KEY `net_id` (`net_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `items`, `prices`, `net_id`, `web_id`, `host_id`, `eone_id`, `wall_id`, `wifi_id`, `lan_id`, `file_id`, `serv_id`, `usr_id`) VALUES
(1, 'internet', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `eone`
--

CREATE TABLE IF NOT EXISTS `eone` (
  `eone_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` int(100) NOT NULL,
  PRIMARY KEY (`eone_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eone`
--

INSERT INTO `eone` (`eone_id`, `item`, `price`, `included`) VALUES
(1, 15, 675432, 65432),
(2, 30, 1245, 124325);

-- --------------------------------------------------------

--
-- Table structure for table `filesharing`
--

CREATE TABLE IF NOT EXISTS `filesharing` (
  `file_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` int(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `filesharing`
--

INSERT INTO `filesharing` (`file_id`, `item`, `price`, `included`) VALUES
(1, '1', 12532, 1356423);

-- --------------------------------------------------------

--
-- Table structure for table `firewall`
--

CREATE TABLE IF NOT EXISTS `firewall` (
  `wall_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`wall_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `firewall`
--

INSERT INTO `firewall` (`wall_id`, `item`, `price`) VALUES
(1, '1', 10500);

-- --------------------------------------------------------

--
-- Table structure for table `hostedmail`
--

CREATE TABLE IF NOT EXISTS `hostedmail` (
  `host_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` varchar(100) NOT NULL,
  PRIMARY KEY (`host_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hostedmail`
--

INSERT INTO `hostedmail` (`host_id`, `item`, `price`, `included`) VALUES
(1, '1', 1452, 'GB/mailbox');

-- --------------------------------------------------------

--
-- Table structure for table `internnet`
--

CREATE TABLE IF NOT EXISTS `internnet` (
  `nnet_id` int(50) NOT NULL AUTO_INCREMENT,
  `unit` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `included` int(50) NOT NULL,
  PRIMARY KEY (`nnet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `internnet`
--

INSERT INTO `internnet` (`nnet_id`, `unit`, `price`, `included`) VALUES
(1, 1, 15999, 35),
(2, 2, 160003, 323),
(3, 3, 1600066, 3266),
(4, 4, 0, 43256);

-- --------------------------------------------------------

--
-- Table structure for table `lan`
--

CREATE TABLE IF NOT EXISTS `lan` (
  `lan_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` int(100) NOT NULL,
  PRIMARY KEY (`lan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lan`
--

INSERT INTO `lan` (`lan_id`, `item`, `price`, `included`) VALUES
(1, '51', 432364, 8234),
(2, '101', 665763, 164367),
(3, '201', 12235, 3232463),
(4, 'more', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'Victor', 'muriithi', 'Victor.muriithi@gmail.com'),
(2, 'admin', 'adminadmin', ''),
(3, 'vic', 'vic', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `internet` int(20) NOT NULL,
  `webhosting` int(20) NOT NULL,
  `hostedemail` int(20) NOT NULL,
  `storage` int(20) NOT NULL,
  `eone` int(20) NOT NULL,
  `firewall` int(20) NOT NULL,
  `wifi` int(20) NOT NULL,
  `lan` int(20) NOT NULL,
  `filesharing` int(20) NOT NULL,
  `backserv` int(20) NOT NULL,
  `backusr` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `followup` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `phonenumber`, `company`, `email`, `internet`, `webhosting`, `hostedemail`, `storage`, `eone`, `firewall`, `wifi`, `lan`, `filesharing`, `backserv`, `backusr`, `total`, `followup`) VALUES
(2, 'Victor Muriithi', 715000280, 'Enterprise', 'victor.muriithi@gmail.com', 112000, 2000, 9620, 0, 18000, 10500, 85000, 40000, 5160, 157500, 84000, 523780, 'Yes'),
(3, 'saul njorogw', 713456782, 'Butchery', 'Butcher@njoro.com', 12213, 124312, 1345, 0, 1234, 123412, 1234213, 123, 1234, 1234, 1342, 1234, ''),
(4, 'qretewr', 43462324, 'dsgdser', 'qwqewe@sfgfsg.com', 0, 2000, 19980, 0, 18000, 10500, 65000, 40000, 5160, 90000, 84000, 334640, ''),
(5, 'vic', 456899342, 'saad corp', 'mail@gmail.com', 96000, 2000, 13690, 0, 18000, 10500, 85000, 40000, 9030, 90000, 84000, 448220, ''),
(6, 'vic', 456899342, 'saad corp', 'mail@gmail.com', 96000, 2000, 13690, 0, 18000, 10500, 85000, 40000, 9030, 90000, 84000, 448220, ''),
(7, 'vic', 456899342, 'saad corp', 'mail@gmail.com', 96000, 2000, 13690, 0, 18000, 10500, 85000, 40000, 9030, 90000, 84000, 448220, ''),
(8, 'vic', 1236768543, 'site', 'kamauann.njeri@gmail.com', 80000, 2000, 5550, 0, 18000, 10500, 85000, 40000, 5160, 90000, 84000, 429210, ''),
(9, 'vic', 1236768543, 'site', 'kamauann.njeri@gmail.com', 80000, 2000, 5550, 9000, 18000, 10500, 85000, 40000, 5160, 90000, 84000, 429210, ''),
(10, 'saul', 2147483647, 'newnew', 'newew@gmail.com', 180000, 2000, 18500, 10000, 18000, 10500, 65000, 40000, 5160, 90000, 84000, 523160, 'No'),
(11, 'saul', 2147483647, 'newnew', 'newew@gmail.com', 180000, 2000, 18500, 10000, 18000, 10500, 65000, 40000, 5160, 90000, 84000, 523160, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE IF NOT EXISTS `storage` (
  `str_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `included` int(50) NOT NULL,
  PRIMARY KEY (`str_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`str_id`, `item`, `price`, `included`) VALUES
(1, 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `webhosting`
--

CREATE TABLE IF NOT EXISTS `webhosting` (
  `web_id` int(50) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `included` int(100) NOT NULL,
  PRIMARY KEY (`web_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webhosting`
--

INSERT INTO `webhosting` (`web_id`, `item`, `price`, `included`) VALUES
(1, '1', 2234, 750);

-- --------------------------------------------------------

--
-- Table structure for table `wifi`
--

CREATE TABLE IF NOT EXISTS `wifi` (
  `wifi_id` int(20) NOT NULL AUTO_INCREMENT,
  `unit` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `include` varchar(100) NOT NULL,
  PRIMARY KEY (`wifi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wifi`
--

INSERT INTO `wifi` (`wifi_id`, `unit`, `price`, `include`) VALUES
(1, '1', 23456, 'Installation & Setup'),
(2, '2', 42535, 'Installation & Setup'),
(3, '3', 876543, 'Installation & Setup'),
(4, '4', 123655432, 'Installation & Setup'),
(5, '5', 543211, 'Installation & Setup'),
(6, 'more', 0, 'Bespoke solution');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
