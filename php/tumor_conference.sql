-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2013 at 03:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tumor_conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '4d3e3c81f13840b45f6fd1517e6bb205');

-- --------------------------------------------------------

--
-- Table structure for table `picture_attachments`
--

CREATE TABLE IF NOT EXISTS `picture_attachments` (
  `pic_id` int(20) NOT NULL AUTO_INCREMENT,
  `hn_user` varchar(20) COLLATE utf8_bin NOT NULL,
  `saved_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `real_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `size` int(20) NOT NULL,
  `catagory_picture` varchar(15) COLLATE utf8_bin NOT NULL,
  `sub_catagory_picture` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`pic_id`),
  UNIQUE KEY `size` (`size`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `picture_attachments`
--

INSERT INTO `picture_attachments` (`pic_id`, `hn_user`, `saved_name`, `real_name`, `size`, `catagory_picture`, `sub_catagory_picture`) VALUES
(1, 'awfawfaw', 'awfawfaw_colorscheme.png', 'colorscheme.png', 11626, 'Radiographic', 'XRAY'),
(2, 'awfawfaw', 'awfawfaw_database.png', 'database.png', 7597, 'Radiographic', 'XRAY'),
(3, '', '_clean-backgrounds-for-powerpo', 'clean-backgrounds-for-powerpoi', 98084, 'Radiographic', 'CT Chest'),
(4, '', '_377709_414934218602166_970630', '377709_414934218602166_9706300', 61518, 'Radiographic', 'XRAY');

-- --------------------------------------------------------

--
-- Table structure for table `tumor_data`
--

CREATE TABLE IF NOT EXISTS `tumor_data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `slideno` varchar(20) COLLATE utf8_bin NOT NULL,
  `hn` varchar(20) COLLATE utf8_bin NOT NULL,
  `date_biopsy` date NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `age` int(2) NOT NULL,
  `site` varchar(5) COLLATE utf8_bin NOT NULL,
  `region_of_lesion` varchar(30) COLLATE utf8_bin NOT NULL,
  `location` varchar(20) COLLATE utf8_bin NOT NULL,
  `dianosis` varchar(20) COLLATE utf8_bin NOT NULL,
  `catagory` varchar(15) COLLATE utf8_bin NOT NULL,
  `sub_catagory` varchar(15) COLLATE utf8_bin NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tumor_data`
--

INSERT INTO `tumor_data` (`id`, `slideno`, `hn`, `date_biopsy`, `name`, `age`, `site`, `region_of_lesion`, `location`, `dianosis`, `catagory`, `sub_catagory`, `status`) VALUES
(1, '241412', '25522/242', '2013-05-23', 'FAWF', 23, 'none', 'afawf', 'awfwafaw', 'AFAWF', 'benign', 'Osteoma', 6),
(2, '2424', '2424', '0000-00-00', 'FAWF', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(3, 'awfa', '24241', '0000-00-00', 'wafaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(4, 'WAR', '41422', '0000-00-00', 'à¹„à¸”à¸Ÿà¸”à¹„à¹„à¸Ÿ', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(5, '2142', 'à¹„à¸Ÿà¹„à¸”à¸Ÿ', '0000-00-00', '2414', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(6, 'à¸Ÿà¹„à¸”à¸Ÿà¹„', 'à¸Ÿà¹„à¸”à¸Ÿà¹„', '0000-00-00', 'afawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(7, 'à¸‰à¹ˆà¸­à¸¢', 'à¸‰à¹ˆà¸­à¸¢', '0000-00-00', 'à¸‰à¹ˆà¸­à¸¢', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(8, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(9, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(10, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(11, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(12, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(13, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(14, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(15, 'awfawf', 'awfawfwa', '0000-00-00', 'fwafawfaf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(16, 'wafaf', 'awfaf', '0000-00-00', 'awfafa', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(17, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(18, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(19, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(20, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(21, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(22, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(23, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(24, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6),
(25, 'awfawf', 'awfawfaw', '0000-00-00', 'awfafawf', 0, 'none', '', '', '', 'benign', 'Osteoma', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
