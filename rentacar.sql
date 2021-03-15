-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 09:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobilat`
--

CREATE TABLE `automobilat` (
  `automobiliid` int(11) NOT NULL,
  `kategoriaid` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `nrregjsitrimi` varchar(30) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `pershkrimi` text NOT NULL,
  `cmimi` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automobilat`
--

INSERT INTO `automobilat` (`automobiliid`, `kategoriaid`, `emri`, `nrregjsitrimi`, `foto`, `pershkrimi`, `cmimi`) VALUES
(1, 1, 'BMW', '01-456-EH', 'bmwm5.jpg', 'BMW M5 makine sportive ', 25),
(2, 1, 'Mercedes-Benz', '01-123-KP', 'cclass.jpg', 'Mercedes-Benz C-Class', 20),
(3, 1, 'Mercedes-Benz', '01-729-ON', 'cls.jpg', 'Mercedes-Benz Cls-Class', 30),
(4, 2, 'Toyota', '01-997-TY', 'rav4.jpg', 'Toyota RAV4 makine familjare', 20),
(5, 2, 'Ford', '01-781-KK', 'focus.jpg', 'Ford Focus makine familjare', 15),
(6, 3, 'BMW', '01-991-IT', 'bmw3.jpg', 'BMW 3 Series 2020 ', 30),
(7, 3, 'Lexus', '01-233-JS', 'lexus.jpg', 'Lexus LC 2020 Coupe', 25),
(8, 4, 'Audi', '01-444-BN', 'audia6.jpg', 'Audi A6 2020 ', 35),
(9, 5, 'Mercedes-Benz', '01-776-WK', 'eqv.jpg', 'Mercedes-Benz EQV elektrik', 40),
(11, 2, 'Mercedes', '01-333-AA', 'gls.jpg', 'Mercedes GLS', 100),
(12, 2, 'Mercedes', '01-111-KS', 'gle.jpg', 'Mercedes GLE', 80);

-- --------------------------------------------------------

--
-- Table structure for table `huat`
--

CREATE TABLE `huat` (
  `huajaid` int(11) NOT NULL,
  `automobiliid` int(11) NOT NULL,
  `klientiid` int(11) NOT NULL,
  `komente` text DEFAULT NULL,
  `kosto` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `huat`
--

INSERT INTO `huat` (`huajaid`, `automobiliid`, `klientiid`, `komente`, `kosto`) VALUES
(1, 1, 1, 'Makina eshte ne rregull', '900.00'),
(2, 4, 6, 'Makina eshte kthyer me vonese', '745.00'),
(3, 6, 8, 'Makina eshte ne rregull', '980.00'),
(4, 3, 2, 'Makina eshte kthyer me vonese', '800.00'),
(5, 2, 9, 'Makina eshte ne rregull', '880.00'),
(6, 5, 11, 'Makina eshte ne rregull', '930.00'),
(7, 8, 10, 'Makina eshte demtuar', '990.00'),
(8, 9, 4, 'Makina eshte ne rregull', '300.00'),
(9, 7, 5, 'Makina eshte demtuar', '460.00'),
(52, 1, 4, NULL, '25.00'),
(53, 9, 4, NULL, '40.00'),
(54, 1, 4, NULL, '25.00'),
(55, 2, 3, NULL, '20.00'),
(56, 1, 3, NULL, '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `kategoriaid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `pershkrimi` text DEFAULT NULL,
  `kostoja` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`kategoriaid`, `emri`, `pershkrimi`, `kostoja`) VALUES
(1, 'Sportive', 'Makine Sportive me 500+ HP', '600.00'),
(2, 'Familjare', 'Makine Familjare per udhetime', '200.00'),
(3, 'Coupe', 'Makine dydyershe me 300+ HP', '400.00'),
(4, 'Cabriolet', 'Makine me kulm te hapur', '180.00'),
(5, 'Van', 'Furgon i cili ka perdorime te ndryshme', '230.00');

-- --------------------------------------------------------

--
-- Table structure for table `klientet`
--

CREATE TABLE `klientet` (
  `klientiid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefoni` varchar(50) NOT NULL,
  `nrpersonal` int(50) DEFAULT NULL,
  `adresa` varchar(50) NOT NULL,
  `password` int(11) DEFAULT NULL,
  `roli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientet`
--

INSERT INTO `klientet` (`klientiid`, `emri`, `mbiemri`, `email`, `telefoni`, `nrpersonal`, `adresa`, `password`, `roli`) VALUES
(1, 'Gerti', 'Thaqi', 'gerti@gmail.com', '044137503', 2147483647, 'Ulpiana E-30', 12345678, 1),
(2, 'Erodit', 'Mehmeti', 'erodit@gmail.com', '044532377', 2147483647, 'Dardani', 123456, 1),
(3, 'Lorik', 'Kastrati', 'lorik@gmail.com', '045436665', 137932794, 'Bregu i Diellit', 123456, 1),
(4, 'Amar', 'Munoglu', 'amar@gmail.com', '044725258', 1914519905, 'Tokbashqe', 123456, 0),
(5, 'Glauk', 'Aliu', 'glauk@gmail.com', '049284137', 2147483647, 'Bregu i Diellit', 123456, 0),
(6, 'Leke', 'Krasniqi', 'leke@gmail.com', '044979374', 1315080192, 'Lipjan', 123456, 0),
(7, 'Leon', 'Svirca', 'leon@gmail.com', '045507008', 2147483647, 'Aktash', 123456, 0),
(8, 'Bleon', 'Ahmeti', 'bleon@gmail.com', '049749769', 2147483647, 'Ulpiane', 123456, 0),
(9, 'Arben', 'Thaqi', 'arben@gmail.com', '044595201', 2147483647, 'Dardani', 123456, 0),
(10, 'Mehmet', 'Asllani', 'mehmet@gmail.com', '049221889', 2147483647, 'Fushe Kosove', 123456, 0),
(11, 'Loreta', 'Celina', 'loreta@gmail.com', '044222111', 2133214522, 'Dragodan', 123456, 0),
(12, 'Ledri', 'Ahmeti', 'ledri@gmail.com', '044442892', 2147483647, 'Ulpiane', 123456, 0),
(21, 'Cristiano', 'Ronaldo', 'cr7@gmail.com', '0441111111', 2147483647, 'Italy,Torino', 123456, NULL),
(22, 'Filan', 'Fisteku', 'filan@gmail.com', '123213213', 4444444, 'Pr', 123456, NULL),
(26, 'gert', 'thaqi', 'thaqigerti1@gmail.com', '049159300', 123123123, 'Ulpiane', 0, 0),
(27, 'germany', 'marbach', 'grm@gmail.com', '044233123', 889112332, 'germany', 1234567890, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobilat`
--
ALTER TABLE `automobilat`
  ADD PRIMARY KEY (`automobiliid`),
  ADD KEY `kategoriaid` (`kategoriaid`);

--
-- Indexes for table `huat`
--
ALTER TABLE `huat`
  ADD PRIMARY KEY (`huajaid`),
  ADD KEY `automobiliid` (`automobiliid`),
  ADD KEY `klientiid` (`klientiid`);

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`kategoriaid`);

--
-- Indexes for table `klientet`
--
ALTER TABLE `klientet`
  ADD PRIMARY KEY (`klientiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobilat`
--
ALTER TABLE `automobilat`
  MODIFY `automobiliid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `huat`
--
ALTER TABLE `huat`
  MODIFY `huajaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `kategoriaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `klientet`
--
ALTER TABLE `klientet`
  MODIFY `klientiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `automobilat`
--
ALTER TABLE `automobilat`
  ADD CONSTRAINT `automobilat_ibfk_1` FOREIGN KEY (`kategoriaid`) REFERENCES `kategorite` (`kategoriaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `huat`
--
ALTER TABLE `huat`
  ADD CONSTRAINT `huat_ibfk_1` FOREIGN KEY (`automobiliid`) REFERENCES `automobilat` (`automobiliid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `huat_ibfk_2` FOREIGN KEY (`klientiid`) REFERENCES `klientet` (`klientiid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
