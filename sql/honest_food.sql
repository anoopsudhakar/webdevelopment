-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2019 at 03:07 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honest_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

DROP TABLE IF EXISTS `address_book`;
CREATE TABLE IF NOT EXISTS `address_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `coordinates` varchar(255) NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_book`
--

INSERT INTO `address_book` (`id`, `name`, `address`, `coordinates`, `date_created`, `date_updated`, `status`) VALUES
(1, 'Kreuzgasse 54 (Luciano)', 'Kreuzgasse 54 (Luciano)\r\n#icon-1899-0288D1-nodesc', '16.3356131,48.224525,0', '2019-03-30 12:29:12', '2019-03-30 12:29:12', 1),
(2, 'au_vienna_kreuzgasse', '#poly-0288D1-1200-77-nodesc', '16.3307481,48.241138,0', '2019-03-30 12:30:02', '2019-03-30 12:30:02', 1),
(3, 'au_vienna_schoenbrunnerstr', 'au_vienna_schoenbrunnerstr\r\n#poly-0288D1-1200-77-nodesc', ' 16.3156304,48.1712003,0', '2019-03-30 12:30:38', '2019-03-30 12:30:38', 1),
(4, 'Maurer Hauptpl. 2 (Il Gabbiano) Kreuzgasse ', 'Maurer Hauptpl. 2 (Il Gabbiano)\r\n#icon-1899-0288D1-nodesc', '16.2685701,48.1508934,0', '2019-03-30 12:31:03', '2019-03-30 12:31:03', 1),
(5, 'Wallensteinstraße 5 (Own)', 'Wallensteinstraße 5 (Own)\r\n#icon-1899-000000-nodesc', '16.3667181000001,48.2280211,0', '2019-03-30 12:31:45', '2019-03-30 12:31:45', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
