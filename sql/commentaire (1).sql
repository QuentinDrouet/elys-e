-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2021 at 09:26 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commentaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`) VALUES
(18, 'Emmanuel Macron receives Edgar Morin at the Elysée for his 100th birthday', '<p>Emmanuel Macron receives this Thursday the philosopher <u>Edgar Morin</u>, the day of his 100th birthday. It is a question of paying homage to a man to the one who does \"the honor of France\", with a reception in the presence of a hundred guests, announced the Elysee, the seat of the presidency of the Republic. . [LE MONDE]<br></p>', 'https://s.france24.com/media/display/35888982-da3c-11eb-aa13-005056bf30b7/w:1280/p:16x9/fe55675cf6dac94e0b698ea1c50c5495395a27f6.webp'),
(19, 'The President of the Republic plans to address the French, on Monday evening 8 p.m., from the Elysee.', '<p>Is France heading towards new health restrictions? The Head of State will address the French on Monday evening during a televised address scheduled for 8 p.m. from the Elysee Palace, we learned this Friday from a presidential source. During this speech which had been scheduled for several days, Emmanuel Macron should discuss the health situation and in particular the rapid spread of the Delta variant on the territory. [BFMTV]<br></p>', 'https://img-4.linternaute.com/h4d2amto3M52AH5_zNhJGCynJcw=/1500x/smart/adaa012d3a0a4926b0e8a1fc3b66f0e8/ccmcms-linternaute/26085776.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `ID` int(11) NOT NULL,
  `commentaire` varchar(300) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`ID`, `commentaire`, `pseudo`, `date`) VALUES
(24, 'INCROYABLE', 'Quentin Drouet', '2021-07-09 21:06:48'),
(25, 'belles images', 'Jean', '2021-07-09 21:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `message`) VALUES
(10, 'Quentin Drouet', 'quentin.drouet109@gmail.com', 'bonjour'),
(11, 'Nicolas DROUET', 'nicolas@greenet.io', 'beau design de site'),
(12, 'Béatrice DROUET', 'bea.drouet@yahoo.fr', 'contactez moi au plus vite');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(12, 'Quentin Drouet', 'quentin.drouet109@gmail.com', '$2y$10$MSS4Qo5BCErcM6cYj6Bxl.KCfZ2zv0fuDdFKH28FbARevn0nSFhRm', 1),
(13, 'Nicolas DROUET', 'nicolas@greenet.io', '$2y$10$29np/i80vPh88xzX599ya.zyijPViD.dC9HbGerBQ5cZCGuwRlfp2', 0),
(14, 'Béatrice Drouet', 'bea.drouet@yahoo.fr', '$2y$10$oBJexy.A1t0Jnnr50mklAuVCWiMiMTvdooA6RRfcGN3ErJZeqbvc6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
