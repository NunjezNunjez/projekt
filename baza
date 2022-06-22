-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 22. jun 2022 ob 11.25
-- Različica strežnika: 10.4.22-MariaDB
-- Različica PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `projekt-pesmi`
--

-- --------------------------------------------------------

--
-- Struktura tabele `albumi`
--

CREATE TABLE `albumi` (
  `id` int(11) NOT NULL,
  `ime` char(50) NOT NULL,
  `leto_nastanka` timestamp NULL DEFAULT NULL,
  `st_skladb` int(11) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `id_slika` int(11) DEFAULT NULL,
  `id_zanri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `albumi`
--

INSERT INTO `albumi` (`id`, `ime`, `leto_nastanka`, `st_skladb`, `opis`, `id_slika`, `id_zanri`) VALUES
(2, 'STONEY', '2022-06-01 09:03:07', 23, 'fafadadada', 1, 1),
(3, 'A Night At the Opera - The Queen', '2022-01-01 10:03:07', 12, 'dadadadadada', 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabele `izvajalci`
--

CREATE TABLE `izvajalci` (
  `id` int(11) NOT NULL,
  `ime` char(20) NOT NULL,
  `datum_zacetka` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `izvajalci`
--

INSERT INTO `izvajalci` (`id`, `ime`, `datum_zacetka`) VALUES
(1, 'MISKA', NULL);

-- --------------------------------------------------------

--
-- Struktura tabele `izvajalec_skladba`
--

CREATE TABLE `izvajalec_skladba` (
  `id` int(11) NOT NULL,
  `id_izvajalec` int(11) DEFAULT NULL,
  `id_skladba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabele `priljubljenost`
--

CREATE TABLE `priljubljenost` (
  `id` int(11) NOT NULL,
  `mesto priljubljenosti` int(11) NOT NULL,
  `id_uporabnik` int(11) DEFAULT NULL,
  `id_skladba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabele `skladbe`
--

CREATE TABLE `skladbe` (
  `id` int(11) NOT NULL,
  `naslov_skladbe` char(100) NOT NULL,
  `leto_izvoda` timestamp NULL DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL,
  `mp3` varchar(200) DEFAULT 'music\\broken.mp3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `skladbe`
--

INSERT INTO `skladbe` (`id`, `naslov_skladbe`, `leto_izvoda`, `id_album`, `mp3`) VALUES
(1, 'Broken Whiskey Glass - Post Malone', '2015-06-22 09:14:51', 2, 'music\\broken.mp3'),
(2, 'Welcome to the jungle - The Queen', '2015-06-21 09:14:51', 3, 'music\\broken.mp3');

-- --------------------------------------------------------

--
-- Struktura tabele `slike`
--

CREATE TABLE `slike` (
  `id` int(11) NOT NULL,
  `ime` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `slike`
--

INSERT INTO `slike` (`id`, `ime`, `url`) VALUES
(1, 'no-image', 'https://www.gmt-sales.com/wp-content/uploads/2015/10/no-image-found.jpg');

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE `uporabniki` (
  `id` int(11) NOT NULL,
  `ime` char(20) NOT NULL,
  `priimek` char(20) NOT NULL,
  `datum_roj` timestamp NULL DEFAULT NULL,
  `mail` char(100) NOT NULL,
  `geslo` char(255) NOT NULL,
  `telefon` int(11) NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `ime`, `priimek`, `datum_roj`, `mail`, `geslo`, `telefon`, `admin`) VALUES
(1, 'admin', 'admin', '2022-06-01 08:58:39', 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 123123123, b'1');

-- --------------------------------------------------------

--
-- Struktura tabele `zanri`
--

CREATE TABLE `zanri` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `zanri`
--

INSERT INTO `zanri` (`id`, `ime`) VALUES
(1, 'HIPHOP'),
(2, 'ROCK');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `albumi`
--
ALTER TABLE `albumi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_album` (`id`),
  ADD KEY `IX_Relationship9` (`id_slika`),
  ADD KEY `IX_Relationship10` (`id_zanri`);

--
-- Indeksi tabele `izvajalci`
--
ALTER TABLE `izvajalci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_izvajalec` (`id`);

--
-- Indeksi tabele `izvajalec_skladba`
--
ALTER TABLE `izvajalec_skladba`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_izvajalec_skladba` (`id`),
  ADD KEY `IX_Relationship5` (`id_izvajalec`),
  ADD KEY `IX_Relationship6` (`id_skladba`);

--
-- Indeksi tabele `priljubljenost`
--
ALTER TABLE `priljubljenost`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_priljubljenos` (`id`),
  ADD KEY `IX_Relationship7` (`id_uporabnik`),
  ADD KEY `IX_Relationship8` (`id_skladba`);

--
-- Indeksi tabele `skladbe`
--
ALTER TABLE `skladbe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_skladba` (`id`),
  ADD KEY `IX_Relationship3` (`id_album`);

--
-- Indeksi tabele `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_uporabniki` (`id`);

--
-- Indeksi tabele `zanri`
--
ALTER TABLE `zanri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_zanr` (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `albumi`
--
ALTER TABLE `albumi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT tabele `izvajalci`
--
ALTER TABLE `izvajalci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabele `izvajalec_skladba`
--
ALTER TABLE `izvajalec_skladba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `priljubljenost`
--
ALTER TABLE `priljubljenost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `skladbe`
--
ALTER TABLE `skladbe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT tabele `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabele `zanri`
--
ALTER TABLE `zanri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `albumi`
--
ALTER TABLE `albumi`
  ADD CONSTRAINT `Relationship10` FOREIGN KEY (`id_zanri`) REFERENCES `zanri` (`id`),
  ADD CONSTRAINT `Relationship9` FOREIGN KEY (`id_slika`) REFERENCES `slike` (`id`);

--
-- Omejitve za tabelo `izvajalec_skladba`
--
ALTER TABLE `izvajalec_skladba`
  ADD CONSTRAINT `Relationship5` FOREIGN KEY (`id_izvajalec`) REFERENCES `izvajalci` (`id`),
  ADD CONSTRAINT `Relationship6` FOREIGN KEY (`id_skladba`) REFERENCES `skladbe` (`id`);

--
-- Omejitve za tabelo `priljubljenost`
--
ALTER TABLE `priljubljenost`
  ADD CONSTRAINT `Relationship7` FOREIGN KEY (`id_uporabnik`) REFERENCES `uporabniki` (`id`),
  ADD CONSTRAINT `Relationship8` FOREIGN KEY (`id_skladba`) REFERENCES `skladbe` (`id`);

--
-- Omejitve za tabelo `skladbe`
--
ALTER TABLE `skladbe`
  ADD CONSTRAINT `Relationship3` FOREIGN KEY (`id_album`) REFERENCES `albumi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
