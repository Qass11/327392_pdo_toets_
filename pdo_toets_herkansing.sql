-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mrt 2022 om 08:49
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_toets_herkansing`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `burrito`
--

DROP TABLE IF EXISTS `burrito`;
CREATE TABLE IF NOT EXISTS `burrito` (
  `id` int(20) UNSIGNED NOT NULL,
  `burritoformaat` int(20) NOT NULL,
  `saus` varchar(30) NOT NULL,
  `bonen` varchar(30) NOT NULL,
  `rijsten` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
