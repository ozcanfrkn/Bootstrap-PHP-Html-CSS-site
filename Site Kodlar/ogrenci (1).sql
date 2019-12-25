-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3308
-- Üretim Zamanı: 19 Ara 2019, 20:53:45
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrenci`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odev`
--

DROP TABLE IF EXISTS `odev`;
CREATE TABLE IF NOT EXISTS `odev` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `cinsiyet` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `okulno` int(11) NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sehir` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bolumu` varchar(50) NOT NULL,
  `telefonno` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `odev`
--

INSERT INTO `odev` (`id`, `adi`, `soyadi`, `cinsiyet`, `okulno`, `eposta`, `sehir`, `bolumu`, `telefonno`) VALUES
(21, 'Özcan Furkan', 'Bıçakcı', 'Erkek', 170901010, 'korsan1146@gmail.com', 'Ordu', 'Bilgisayar Mühendisliği', 5378403488),
(22, 'Tunahan', 'Özdemir', 'Erkek', 150901010, 'tunahan@gmail.com', 'Antalya', 'Bilgisayar Mühendisliği', 5343931752),
(24, 'Arzu', 'Fidan', 'Kadın', 170901012, 'arzu@gmail.com', 'Trabzon', 'Hukuk', 5433933488),
(25, 'Polat', 'Bıçakcı', 'Erkek', 170910120, 'polat@gmail.com', 'Ordu', 'Bilgisayar Mühendisliği', 5433738585),
(26, 'Acun', 'Ilıcalı', 'Erkek', 180902020, 'acun@gmail.com', 'İstanbul', 'Gıda Mühendisliği', 5438679052),
(27, 'Mustafa', 'Bıçakcı', 'Erkek', 190901010, 'mustafa@gmail.com', 'Ordu', 'İnşaat Mühendisliği', 5324545584),
(28, 'Berçem', 'Elpe', 'Kadın', 170901015, 'bercem@gmail.com', 'İstanbul', 'Bilgisayar Mühendisliği', 5428453434),
(29, 'Berrin Beyza', 'Özen', 'Kadın', 170901001, 'berrinbeyza@gmail.com', 'Muş', 'Bilgisayar Mühendisliği', 5055890606),
(30, 'Gülçin', 'Kalafat', 'Kadın', 170901000, 'gülcinkalafat@gmail.com', 'Ordu', 'Beslenme ve Diyetetik Bölümü', 5428746363),
(31, 'Derya', 'Subaşı', 'Kadın', 170901004, 'deryasubasi@gmail.com', 'Muş', 'Bilgisayar Mühendisliği', 5055894949),
(32, 'Ceren', 'Kartepe', 'Kadın', 190902020, 'cerenkartepe@gmail.com', 'Amasya', 'Beslenme ve Diyetetik Bölümü', 5433937163);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
