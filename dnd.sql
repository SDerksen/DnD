-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2014 at 10:19 AM
-- Server version: 10.0.13-MariaDB-log
-- PHP Version: 5.5.15

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
-- Table structure for table `armor`
--

CREATE TABLE IF NOT EXISTS `armor` (
`armor_id` int(11) NOT NULL,
  `armor_name` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `ac-bonus` int(11) NOT NULL,
  `max-dex` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  `spell-fail` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `special` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
`player_id` int(3) NOT NULL,
  `player_name` varchar(40) NOT NULL,
  `str` int(11) NOT NULL,
  `dex` int(11) NOT NULL,
  `con` int(11) NOT NULL,
  `intel` int(11) NOT NULL,
  `wis` int(11) NOT NULL,
  `cha` int(11) NOT NULL,
  `ecl` int(11) NOT NULL,
  `bab` int(11) NOT NULL,
  `class-levels` varchar(30) NOT NULL,
  `alignment` varchar(20) DEFAULT 'NG',
  `race` varchar(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `movement` int(11) NOT NULL,
  `init` int(11) NOT NULL,
  `fort` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `will` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `player_name`, `str`, `dex`, `con`, `intel`, `wis`, `cha`, `ecl`, `bab`, `class-levels`, `alignment`, `race`, `hp`, `movement`, `init`, `fort`, `ref`, `will`) VALUES
(1, 'Bayou', 10, 10, 10, 10, 10, 10, 6, 6, 'Rogue 6', 'TN', 'Halfling', 29, 20, 8, 6, 6, 6),
(3, 'Thorheim', 7, 7, 7, 7, 7, 7, 7, 7, 'Fighter 6', 'ce', '7', 7, 7, 7, 7, 7, 7),
(6, 'Joyce', 10, 10, 10, 10, 10, 10, 10, 10, 'Bard 10', 'CE', 'Human', 10, 10, 10, 10, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `armor`
--
ALTER TABLE `armor`
 ADD PRIMARY KEY (`armor_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `armor`
--
ALTER TABLE `armor`
MODIFY `armor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
MODIFY `player_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
