-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 28 aug 2014 om 13:39
-- Serverversie: 10.0.13-MariaDB-log
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `dnd`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `players`
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
  `alignment` varchar(20) NOT NULL,
  `race` varchar(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `movement` int(11) NOT NULL,
  `init` int(11) NOT NULL,
  `fort` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `will` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `players`
--

INSERT INTO `players` (`player_id`, `player_name`, `str`, `dex`, `con`, `intel`, `wis`, `cha`, `ecl`, `bab`, `class-levels`, `alignment`, `race`, `hp`, `movement`, `init`, `fort`, `ref`, `will`) VALUES
(1, 'Bayou', 10, 10, 10, 10, 10, 10, 6, 6, 'Rogue 6', 'TN', 'Halfling', 29, 20, 8, 6, 6, 6),
(3, 'Thorheim', 6, 6, 6, 6, 6, 6, 6, 6, '6', '6', '6', 6, 6, 6, 6, 6, 6);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `players`
--
ALTER TABLE `players`
MODIFY `player_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
