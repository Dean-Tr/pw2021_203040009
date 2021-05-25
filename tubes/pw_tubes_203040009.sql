-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 01:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040009`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `developer` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `img`, `nama`, `tgl_rilis`, `developer`, `publisher`, `genre`, `platform`) VALUES
(1, '609906c57286c.jpeg', 'Apex Legends', '2019-02-04', 'Respawn Entertainment', 'Electronic Arts', 'Battle Royale, Multiplayer, Shooter', 'PlayStation 4, Nintendo Switch, Xbox One, Microsoft Windows'),
(2, '609906e4f0421.jpeg', 'Minecraft', '2011-11-18', 'Mojang', 'Mojang, Microsoft Studios, Sony Interactive Entertainment', 'Sandbox, survival', 'PC, smartphone, PlayStation 4, Nintendo Switch, Xbox'),
(3, '609906ed9d0ab.jpeg', 'Genshin Impact', '2020-09-28', 'Mihoyo, Shanghai Miha Touring Film Technology Co., Ltd.', 'Mihoyo', 'Action role-playing', 'PlayStation 4, Nintendo Switch, iOS, Android, Microsoft Windows'),
(4, '609906f6b20c9.jpeg', 'Final Fantasy VII Remake', '2020-04-10', 'Square Enix', 'Square Enix', 'Action role-playing', 'PlayStation 4, PlayStation 5'),
(5, '609907009d619.jpeg', 'Ghost of Tsushima', '2020-07-17', 'Sucker Punch Productions', 'Sony Interactive Entertainment', 'Action-adventure, stealth', 'PlayStation 4'),
(6, '6099070a6d1a5.jpeg', 'God of War', '2018-04-20', 'Santa Monica Studio', 'Sony Interactive Entertainment', 'Action-adventure, hack and slash', 'PlayStation 4'),
(7, '609907163daab.jpeg', 'Monster Hunter Rise', '2021-03-26', 'Capcom', 'Capcom', 'Action role-playing', 'Nintendo Switch'),
(8, '6099071f495f5.jpeg', 'Mario Kart 8 Deluxe', '2017-04-27', 'Nintendo', 'Nintendo', 'Kart racing', 'Nintendo Switch'),
(9, '6099074460188.jpeg', 'Super Smash Bros. Ultimate', '2018-12-07', 'Bandai Namco Studios Sora Ltd.', 'Nintendo', 'Fighting', 'Nintendo Switch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'dean', '$2y$10$bvwb0AeQNFLb5G9nL9yh2.k5VUEFOL31.WXcfFshjXnMZJZSeUg/m'),
(4, 'admin', '$2y$10$G26BsTDUWRZsEsUNX.p/i.o9Bqn8O53LAAE58eDYhKrQfyNV1BMUO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
