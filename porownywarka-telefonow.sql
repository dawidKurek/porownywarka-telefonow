-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 13 Lut 2019, 10:26
-- Wersja serwera: 10.3.12-MariaDB
-- Wersja PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `id8717095_porownywarkatelefonow`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `brand` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `brand`
--

INSERT INTO `brand` (`id_brand`, `brand`) VALUES
(2, 'Xiaomi'),
(3, 'Huawei'),
(4, 'iPhone'),
(5, 'Samsung');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spec`
--

CREATE TABLE `spec` (
  `id_spec` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `display` text COLLATE utf8_polish_ci NOT NULL,
  `camera_back_1` text COLLATE utf8_polish_ci NOT NULL,
  `camera_back_2` text COLLATE utf8_polish_ci NOT NULL,
  `camera_back_3` text COLLATE utf8_polish_ci NOT NULL,
  `camera_back_4` text COLLATE utf8_polish_ci NOT NULL,
  `camera_front_1` text COLLATE utf8_polish_ci NOT NULL,
  `camera_front_2` text COLLATE utf8_polish_ci NOT NULL,
  `camera_front_3` text COLLATE utf8_polish_ci NOT NULL,
  `unlock_1` text COLLATE utf8_polish_ci NOT NULL,
  `unlock_2` text COLLATE utf8_polish_ci NOT NULL,
  `unlock_3` text COLLATE utf8_polish_ci NOT NULL,
  `chip` text COLLATE utf8_polish_ci NOT NULL,
  `ram` text COLLATE utf8_polish_ci NOT NULL,
  `waterproof` text COLLATE utf8_polish_ci NOT NULL,
  `waterproof_desc` text COLLATE utf8_polish_ci NOT NULL,
  `wireless_charging` text COLLATE utf8_polish_ci NOT NULL,
  `pic1` text COLLATE utf8_polish_ci NOT NULL,
  `pic2` text COLLATE utf8_polish_ci NOT NULL,
  `pic3` text COLLATE utf8_polish_ci NOT NULL,
  `memory_1` text COLLATE utf8_polish_ci NOT NULL,
  `memory_2` text COLLATE utf8_polish_ci NOT NULL,
  `memory_3` text COLLATE utf8_polish_ci NOT NULL,
  `display_spec_1` text COLLATE utf8_polish_ci NOT NULL,
  `display_spec_2` text COLLATE utf8_polish_ci NOT NULL,
  `display_spec_3` text COLLATE utf8_polish_ci NOT NULL,
  `chip_spec_1` text COLLATE utf8_polish_ci NOT NULL,
  `chip_spec_2` text COLLATE utf8_polish_ci NOT NULL,
  `chip_spec_3` text COLLATE utf8_polish_ci NOT NULL,
  `chip_spec_4` text COLLATE utf8_polish_ci NOT NULL,
  `size` text COLLATE utf8_polish_ci NOT NULL,
  `weight` text COLLATE utf8_polish_ci NOT NULL,
  `battery` text COLLATE utf8_polish_ci NOT NULL,
  `sim` text COLLATE utf8_polish_ci NOT NULL,
  `premiere` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `spec`
--

INSERT INTO `spec` (`id_spec`, `id_type`, `display`, `camera_back_1`, `camera_back_2`, `camera_back_3`, `camera_back_4`, `camera_front_1`, `camera_front_2`, `camera_front_3`, `unlock_1`, `unlock_2`, `unlock_3`, `chip`, `ram`, `waterproof`, `waterproof_desc`, `wireless_charging`, `pic1`, `pic2`, `pic3`, `memory_1`, `memory_2`, `memory_3`, `display_spec_1`, `display_spec_2`, `display_spec_3`, `chip_spec_1`, `chip_spec_2`, `chip_spec_3`, `chip_spec_4`, `size`, `weight`, `battery`, `sim`, `premiere`) VALUES
(1, 2, '5.70\"', '13MP x2', '', '', '', '4MP', '', '', 'Odcisk palca', 'Twarz', '', 'Snapdragon 821', '4GB, 6GB', '-', 'Wodoodporność', '-', '1549967995pic1.png', '1549967995pic2.png', '1549967995pic3.png', '64GB', '128GB', '', 'IPS', '1080x1920 px', '386 ppi', 'Qualcomm Snapdragon 821', 'Zegar procesora: 2.35 GHz', 'Liczba rdzeni: 4', 'GPU: Adreno 530', '154.60 x 77.70 x 7.95 mm', '168.00 g', '3800 mAh', 'dual standby nanoSIM', 'III kwartał‚ 2016'),
(2, 3, '5.20\"', '13MP', '', '', '', '8MP', '', '', 'Odcisk palca', '', '', 'Kirin 650', '2GB, 3GB', '-', 'Wodoodporność', '-', '1549968980pic1.png', '1549968980pic2.png', '1549968980pic3.png', '16GB', '', '', 'IPS', '1080 x 1920 px', '424 ppi', 'HiSilicon Kirin 650', 'Zegar procesora: 2.00 GHz', 'Liczba rdzeni: 8', 'GPU: ARM Mali-T830 MP2', '146.80 x 72.60 x 7.50 mm', '147.00 g', '3000 mAh', 'nanoSIM', 'II kwartał‚ 2016'),
(3, 4, '5.15\"', '12MP x2', '', '', '', '8MP', '', '', 'Odcisk palca', '', '', 'Snapdragon 835', '4GB, 6GB', '-', 'Wodoodporność', '-', '1549970044mi61.png', '1549970044mi62.png', '1549970044mi63.png', '64GB', '128GB', '', 'IPS', '1080 x 1920 px', '428 ppi', 'Qualcomm Snapdragon 835', 'Zegar procesora: 2.45 GHz', 'Liczba rdzeni: 8', 'GPU: Adreno 540', '145.17 x 70.49 x 7.45 mm', '168.00 g', '3350 mAh', 'dual standby nanoSIM', 'II kwartał‚ 2017'),
(4, 5, '5.99\"', '12MP', '5MP', '', '', '20MP', '', '', 'Odcisk palca', '', '', 'Snapdragon 636', '3GB, 4GB, 6GB', '-', 'Wodoodporność', '-', '1549971384redminote5pro1.png', '1549971384redminote5pro2.png', '1549971384redminote5pro3.png', '32GB', '64GB', '', 'IPS', '1080 x 2160 px', '403 ppi', 'Qualcomm Snapdragon 636', 'Zegar procesora: 1.80 GHz', 'Liczba rdzeni: 8', 'GPU: Adreno 509', '158.60 x 75.40 x 8.05 mm', '181.00 g', '4000 mAh', 'dual standby nanoSIM', 'I kwartał‚ 2018'),
(5, 6, '5.80\"', '12MP x2', '', '', '', '7MP', '', '', 'Twarz', '', '', 'A11', '3GB', 'IP67', 'Wodoodporność na głębokości maks. 1 m do 30 minut', 'Qi', '1549972489x1.png', '1549972489x2.png', '1549972489x3.png', '64GB', '256GB', '', 'OLED', '1125 x 2436 px', '463 ppi', 'Apple A11', 'Zegar procesora: 2 x 2.53GHz', '& 4 x 1.42 GHz', '', '143.60 x 70.90 x 7.70 mm', '174.00 g', '2716 mAh', 'nanoSIM', 'III kwartał‚ 2017'),
(6, 7, '6.20\"', '12MP x2', '', '', '', '8MP', '', '', 'Odcisk palca', 'Tęczówka oka', '', 'Exynos 9810', '6GB', 'IP68', 'Wodoodporność na głębokości maks. 1,5 m do 30 minut', 'Qi', '1549980477s9plus-1.png', '1549980477s9plus-2.png', '1549980477s9plus-3.png', '64GB', '128GB', '256GB', 'Super AMOLED', '1440 x 2960 px', '531 ppi', 'Samsung Exynos 9810', 'Zegar procesora: 2.90 GHz', 'Liczba rdzeni: 8', 'GPU: ARM Mali-G72 MP18', '158.10 x 73.80 x 8.50 mm', '189.00 g', '3500 mAh', 'nanoSIM', 'I kwartał 2018');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `type`
--

INSERT INTO `type` (`id_type`, `id_brand`, `type`) VALUES
(2, 2, 'Mi5s Plus'),
(3, 3, 'P9 Lite'),
(4, 2, 'Mi6'),
(5, 2, 'Redmi Note 5 Pro'),
(6, 4, 'X'),
(7, 5, 'Galaxy S9+');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeksy dla tabeli `spec`
--
ALTER TABLE `spec`
  ADD PRIMARY KEY (`id_spec`);

--
-- Indeksy dla tabeli `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `spec`
--
ALTER TABLE `spec`
  MODIFY `id_spec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
