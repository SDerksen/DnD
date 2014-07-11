-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2014 at 01:36 PM
-- Server version: 5.5.37-MariaDB-log
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
`player_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `str` int(11) NOT NULL,
  `dex` int(11) NOT NULL,
  `con` int(11) NOT NULL,
  `intel` int(11) NOT NULL,
  `wis` int(11) NOT NULL,
  `cha` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `hp` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `movement` int(11) NOT NULL,
  `initiative` int(11) NOT NULL,
  `batt` int(11) NOT NULL,
  `fort` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `will` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `name`, `level`, `str`, `dex`, `con`, `intel`, `wis`, `cha`, `class`, `hp`, `ac`, `movement`, `initiative`, `batt`, `fort`, `ref`, `will`) VALUES
(1, 'Thorheim', 6, 8, 12, 10, 10, 10, 9, 'Fighter', 39, 21, 30, 6, 6, 6, 2, 4),
(2, 'Bayou', 6, 0, 0, 0, 0, 0, 0, 'Rogue 6', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
