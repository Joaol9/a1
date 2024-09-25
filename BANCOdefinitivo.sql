-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Dez-2023 às 03:44
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `myspotify`
--
DROP DATABASE IF EXISTS `myspotify`;
CREATE DATABASE IF NOT EXISTS `myspotify` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myspotify`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `favourites`
--

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE IF NOT EXISTS `favourites` (
  `uid` int NOT NULL,
  `songID` int NOT NULL,
  PRIMARY KEY (`uid`,`songID`),
  KEY `favourites_ibfk_2` (`songID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Extraindo dados da tabela `favourites`
--

INSERT INTO `favourites` (`uid`, `songID`) VALUES
(10, 18),
(10, 28),
(10, 32),
(10, 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `groupName` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `groupName`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estrutura da tabela `singers`
--

DROP TABLE IF EXISTS `singers`;
CREATE TABLE IF NOT EXISTS `singers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `info` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Extraindo dados da tabela `singers`
--

INSERT INTO `singers` (`id`, `name`, `info`, `image`) VALUES
(1, 'Arch Tremors', 'Desconhecido.', 'images/singers/CANTOR.png'),
(2, 'Mitsaki', 'Criador de musicas remix do estilo Trap.', 'images/singers/mitsaki.png'),
(3, 'Luanzera', 'Produtor de musicas/Beats remix do estilo Trap ', 'images/singers/salveoc.png'),
(4, 'AERØHEAD', 'Ei! Meu nome é Ian, mas você provavelmente me conhece como AERØHEAD.\r\n\r\nSempre me interessei por música, mas só comecei na produção musical no verão de 2016, entre o primeiro e o segundo ano da faculdade. No entanto, a história começa um pouco antes disso', 'images/singers/17.PNG'),
(5, 'Carl Storm', 'Criador de musicas do meio oeste.', 'images/singers/10.PNG'),
(8, 'Th3 Darp', 'DJ/Produtor de Lisboa, Portugal ', 'images/singers/darp.png'),
(9, 'Desconhecido', 'Os mais bonitos sons', 'images/singers/lofi.jpg'),
(11, 'A Himitsu', 'just making some music https://jonaserixon.github.io/a-himitsu/', 'images/singers/himit.png'),
(12, 'Tobjan', 'Tobias Jansson \"Tobjan\" é um produtor independente sueco que faz música livre de royalties para vlogs, vídeos e outros conteúdos.   Contato: Tobjanmusic@gmail.com', 'images/singers/tt.png'),
(13, 'RYYZN', 'NADA', 'images/singers/0.PNG'),
(14, 'Mike Leite', 'ele é espanhol', 'images/singers/1.PNG'),
(15, 'Carl Storm', 'ele é bom', 'images/singers/3.PNG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `filePath` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `imgPath` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `singerID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `singerID` (`singerID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Extraindo dados da tabela `songs`
--

INSERT INTO `songs` (`id`, `title`, `filePath`, `imgPath`, `dateAdded`, `singerID`) VALUES
(14, 'Pixabay', 'music/pixabay.mp3', 'images/piano.jpg', '2021-06-03 10:38:34', 9),
(15, 'Midnight', 'music/midnight.mp3', 'images/Midnight_Mist.jpg', '2021-06-03 10:38:58', 9),
(16, 'Electronica', 'music/electronica.mp3', 'images/lofi.jpg', '2021-06-03 10:39:21', 9),
(18, 'Arch Tremors feat. Lollo Gardtman - Until The Worl', 'music/ROLO.mp3', 'images/CANTOR.png', '2023-09-23 00:23:12', 1),
(28, ' Hu Tao Theme ', 'music/Hutao.mp3', 'images/thumb.png', '2023-10-05 01:50:35', 2),
(29, 'Hino do Corinthians (TRAP REMIX)', 'music/hino.mp3', 'images/thuy.png', '2023-10-05 01:57:23', 3),
(30, 'HAVEN  ', 'music/Haven.mp3', 'images/17.PNG', '2023-11-20 05:10:04', 4),
(31, ' Lights Of Elysium', 'music/Lights Of Elysium.mp3', 'images/2.PNG', '2023-11-21 13:51:25', 4),
(32, 'Embrace', 'music/Embrace.mp3', 'images/4.PNG', '2023-11-21 13:53:17', 4),
(33, 'Wonderful', 'music/Wonderful.mp3', 'images/19.PNG', '2023-11-21 13:54:07', 4),
(34, 'Stay Here', 'music/Stay Here.mp3', 'images/11.PNG', '2023-11-21 14:00:45', 5),
(35, 'Thrills', 'music/Thrills.mp3', 'images/3.PNG', '2023-11-30 22:04:24', 8),
(36, 'I Should let you go', 'music/I Should Let You Go.mp3', 'images/12.PNG', '2023-11-30 22:05:58', 11),
(37, 'Failling', 'music/Falling.mp3', 'images/7.PNG', '2023-11-30 22:07:58', 12),
(38, 'Miss You Back', 'music/Miss You Back.mp3', 'images/14.PNG', '2023-11-30 22:09:08', 12),
(39, 'Jeans East', 'music/Jens East.mp3', 'images/16.PNG', '2023-11-30 22:09:55', 12),
(40, 'Type Beat Purple magic', 'music/purple magic', 'images/5.PNG', '2023-11-30 22:15:15', 2),
(41, ' 1nonly x Ciscaux Dance ', 'music/Dance', 'images/15.PNG', '2023-11-30 22:16:17', 2),
(42, 'New Jazz Type', 'music/new jazz type.mp3', 'images/18.PNG', '2023-11-30 22:24:18', 3),
(43, 'Misfits', 'music/Misfits.mp3', 'images/20.PNG', '2023-12-06 03:05:05', 13),
(44, 'Mamacita', 'music/Mamacita.mp3', 'images/6.PNG', '2023-12-06 03:06:26', 14),
(45, 'With You In The Morning', 'music/With You In The Morning.mp3', 'images/8.PNG', '2023-12-06 03:07:22', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `groupID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `groupID` (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `groupID`) VALUES
(10, 'joao', '6652a59337deaacd957f50a832eee631', 1),
(11, 'Jonnys', '9eee14e992238fd1c642fd160368b188', 1);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `songs` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`singerID`) REFERENCES `singers` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`groupID`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
