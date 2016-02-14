-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Feb 2016 um 17:46
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `id`, `modified`, `created`) VALUES
('A', 'A', 'A', 1, '2016-02-10 21:35:37', '2016-02-10 21:35:37'),
('A', 'A', 'A', 2, '2016-02-10 21:36:27', '2016-02-10 21:36:27'),
('pat', 'sdsd', 'pat', 3, '2016-02-10 21:37:17', '2016-02-10 21:37:17'),
('', '', '', 4, '2016-02-10 22:05:01', '2016-02-10 22:05:01'),
('', '', '', 5, '2016-02-10 22:05:22', '2016-02-10 22:05:22'),
('', '', '', 6, '2016-02-10 22:05:35', '2016-02-10 22:05:35'),
('pat', 'yxyx', 'pat', 7, '2016-02-10 22:05:43', '2016-02-10 22:05:43'),
('', '', '', 8, '2016-02-10 22:11:45', '2016-02-10 22:11:45'),
('pat', '', 'pat', 9, '2016-02-10 22:11:50', '2016-02-10 22:11:50'),
('pats', 'sdsd', 'pat', 10, '2016-02-10 22:13:27', '2016-02-10 22:13:27'),
('patiii', 'sxdsfdsf', 'pat', 11, '2016-02-10 22:15:18', '2016-02-10 22:15:18'),
('patoo', '', 'pat', 12, '2016-02-10 22:16:03', '2016-02-10 22:16:03'),
('patrrr', 'wewewe', 'pat', 13, '2016-02-10 22:18:45', '2016-02-10 22:18:45'),
('patrick', 'hello', '123', 14, '2016-02-10 22:43:04', '2016-02-10 22:43:04');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
