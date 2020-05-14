-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2020, 16:28:12
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `otelsite`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_contact`
--

INSERT INTO `tbl_contact` (`Id`, `Name`, `Surname`, `Email`, `Subject`, `Message`) VALUES
(1, 'ömer', 'Ekinci', 'omrekinci5@gmail.com', 'dsadsa', 'dsadsadsa'),
(2, 'Yusuf', 'Ekicni', 'yusuf@gmail.com', 'deneme', 'dsadsadsads'),
(3, 'Elif', 'Daldaban', 'elif@gmail.com', 'peüzük', 'nabeeerrrsss'),
(4, 'Engin', 'Cindoruk', 'engin.cindoruk0@gmail.com', 'Sealms', 'Kolay gelsin hacı abi'),
(5, 'Ömer', 'ekincş', 'omer.ekinci@proceedit.com', 'deneme', 'deneme'),
(6, 'Sean', 'Candemir', 'sena@gmail.com', 'deneme', 'selams');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_person`
--

CREATE TABLE `tbl_person` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_person`
--

INSERT INTO `tbl_person` (`Id`, `Name`, `Surname`, `Phone`, `Email`, `Password`, `Password2`) VALUES
(1, 'Ömer ', 'Ekinci', '2514852145', 'omrekinci5@gmail.com', '123', '123'),
(2, 'Engin', 'Cindoruk', '4468474186', 'engin.cindoruk0@gmail.com', '123', '123'),
(3, 'Elif', 'Daldaban', '4468474186', 'elif@gmail.com', 'elif', 'elif'),
(4, 'Ramazan', 'Mailmail', '4468474186', 'ramo@gmail.com', 'ramo', 'ramo'),
(5, 'Sena', 'Candemir', '4468474186', 'sena@gmail.com', '123', '123'),
(6, 'Yaren', 'Aydın', '5646489', 'yaren@gmail.com', '123', '123'),
(7, 'Ömer ', 'Ekinci', '45613546', 'omrekinci5@gmail.com', '123', '123'),
(8, 'Ömer ', 'Ekinci', '29429848', 'omrekinci5@gmail.com', '123', '123'),
(9, 'Ömer ', 'Ekinci', '4468474186', 'omrekinci5@gmail.com', 'asd', 'asd'),
(10, 'Ömer ', 'Ekinci', '2514852145', 'omrekinci5@gmail.com', 'asd', 'asd'),
(11, 'Ömer ', 'Ekinci', '2514852145', 'omrekinci5@gmail.com', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `EnterDate` date NOT NULL,
  `LeaveDate` date NOT NULL,
  `Adult` int(10) NOT NULL,
  `Children` int(10) NOT NULL,
  `Package` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`Id`, `Name`, `Surname`, `Email`, `EnterDate`, `LeaveDate`, `Adult`, `Children`, `Package`) VALUES
(1, 'ömer ekinci', 'USLU', 'omer.ekinci@proceedit.com', '2020-05-14', '2020-05-15', 1, 0, '1'),
(2, 'Melike', 'Ekinci', 'melikeekinci697@gmail.com', '2020-05-14', '2020-05-15', 1, 0, '1'),
(3, 'ömer', 'Ekinci', 'omrekinci5@gmail.com', '2020-05-14', '2020-05-15', 1, 0, '1'),
(4, 'Nurullah', 'Ekinci', 'omer@gmail.com', '2020-05-13', '2020-05-14', 1, 0, '1'),
(5, 'Asiye', 'Ekinci', 'asiye@hotmail.com', '2020-05-14', '2020-05-15', 1, 0, '1'),
(6, 'Zahra', 'Elmi', 'zahra@gmil.com', '2020-05-14', '2020-05-15', 1, 0, '1'),
(7, 'Yaren', 'Aydın', 'yaren@gmail.com', '2020-05-14', '2020-05-15', 1, 0, '1'),
(8, 'Ramazan', 'Mailmail', 'raramazmazan@ramazan.com', '2020-05-14', '2020-05-15', 1, 5, '1'),
(9, 'ömer ekinci', 'USLU', 'omrekinci5@gmail.com', '2020-05-14', '2020-05-14', 1, 3, '1'),
(10, 'ömer ekinci', 'USLU', 'omrekinci5@gmail.com', '2020-05-14', '2020-05-15', 1, 0, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `tbl_person`
--
ALTER TABLE `tbl_person`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_person`
--
ALTER TABLE `tbl_person`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
