-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 16 Eki 2020, 11:35:16
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `admingiris`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'adminx', 'fe01ce2a7fbac8fafaed7c982a04e229');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `domainler`
--

DROP TABLE IF EXISTS `domainler`;
CREATE TABLE IF NOT EXISTS `domainler` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) NOT NULL,
  `k_tarih` varchar(255) NOT NULL,
  `b_tarih` varchar(255) NOT NULL,
  `s_tarih` varchar(255) NOT NULL,
  `durum` varchar(255) NOT NULL,
  `fiyat` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `domainler`
--

INSERT INTO `domainler` (`id`, `domain`, `k_tarih`, `b_tarih`, `s_tarih`, `durum`, `fiyat`) VALUES
(1, 'deneme.org', '2020-09-15', '2021-09-15', '2020-09-15', 'Pasif', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `license`
--

DROP TABLE IF EXISTS `license`;
CREATE TABLE IF NOT EXISTS `license` (
  `license_no` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `license`
--

INSERT INTO `license` (`license_no`, `domain`) VALUES
('ECT-305925665\r\n', 'localhost');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `fiyat` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `meta` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`id`, `title`, `meta`, `keywords`, `descp`, `theme`) VALUES
(1, 'Deneme Site', 'Denem sitesi test modu.', 'deneme, 123', 'deneme, 123', 'master');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
