-- Adminer 4.8.1 MySQL 10.5.15-MariaDB-0+deb11u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `aganda`;
CREATE TABLE `aganda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horaire` varchar(30) NOT NULL,
  `date` varchar(40) NOT NULL,
  `cours` varchar(200) NOT NULL,
  `prof` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `aganda` (`id`, `horaire`, `date`, `cours`, `prof`) VALUES
(9,	'midi',	'2022-10-30',	'Harmonisation',	'Granet'),
(10,	'matin',	'2022-10-31',	'Harmonisation',	'Kubwiman'),
(11,	'midi',	'2022-10-31',	'Harmonisation',	'Kubwiman');

DROP TABLE IF EXISTS `Eleves`;
CREATE TABLE `Eleves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `parcours` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Eleves` (`id`, `nom`, `prenom`, `mail`, `password`, `tel`, `parcours`) VALUES
(1,	'TOUATI',	'Yossef',	'yosseftouati26@gmail.com',	'yossef',	'',	'SISR'),
(2,	'Sroussi',	'Nathan',	'Nathansroussi@gmail.com',	'Nathan55@',	'0766522116',	'SISR'),
(7,	'TOUATI',	'Dan',	'dantouati18@gmail.com',	'dan',	'0783580482',	'SLAM'),
(8,	'Abecassis',	'Orel',	'orelabk6.oa.oa@gmail.com',	'orel',	'0781622357',	'SLAM'),
(9,	'ASSOULINE',	'ILAN',	'ilan_assouline@hotmail.fr',	'Ilan55',	'0766522116',	'SLAM'),
(10,	'Felouss',	'DAVID',	'fellousdavid95200@gmail.com',	'David55',	'06 95 13 13 63',	'SLAM'),
(11,	'DADOUN',	'ANAIA',	'anaiadadoun3@gmail.com',	'Anaia01',	'07 71 66 63 37',	'SLAM'),
(12,	'Dorigo',	'Jason',	'jason.dorigo.france@gmail.com',	'jason01',	'06 30 78 05 37',	'SISR'),
(13,	'Attali',	'Yohann',	'attaliyohann@gmail.com',	'yohan01',	'07 80 40 54 00',	'SISR'),
(14,	'Guetta',	'Aaron',	'aaron.guetta27@gmail.com',	'guetta01',	'07 78 02 24 15',	'SISR'),
(15,	'Ibgui',	'Nathan',	'ibguinathan@gmail.com',	'Nathan01',	'06 18 85 20 10',	'SLAM'),
(16,	'Laifer',	'Isaac',	'laiferisaac@gmail.com',	'isaac01',	'06 95 92 29 75',	'SLAM'),
(17,	'Cardoso',	'Yonathan',	'yonathancardoso@outlook.fr',	'cardozo01',	'06 01 01 68 48',	'SLAM'),
(18,	'Suliman Zada',	'Avraham',	'avi.sulivan@gmail.com',	'suliman01',	'07 71 55 46 21',	'SISR'),
(19,	'Hayat',	'Jordan',	'jhayat@sfr.fr',	'jordna01',	'06 43 93 13 60',	'SISR'),
(20,	'Sillam',	'Noa',	'noasillam@gmail.com',	'noa01',	'07 50 26 61 66',	'SLAM'),
(21,	'Derhy',	'Benjamin',	'benjaminderhy@outlook.fr',	'beinj.d',	'06 50 28 69 40',	'SISR');

DROP TABLE IF EXISTS `integration`;
CREATE TABLE `integration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `choix` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `integration` (`id`, `nom`, `choix`) VALUES
(4,	'Nathansroussi@gmail.com',	'Paintball'),
(5,	'yosseftouati26@gmail.com',	'EVA'),
(6,	'fellousdavid95200@gmail.com',	'EVA'),
(7,	'aaron.guetta27@gmail.com',	'Paintball'),
(8,	'anaiadadoun3@gmail.com',	'Paintball'),
(9,	'jhayat@sfr.fr',	'Escape Game'),
(10,	'laiferisaac@gmail.com',	'EVA'),
(11,	'jason.dorigo.france@gmail.com',	'Paintball'),
(12,	'attaliyohann@gmail.com',	'EVA'),
(13,	'ibguinathan@gmail.com',	'EVA'),
(14,	'benjaminderhy@outlook.fr',	'Escape Game'),
(15,	'orelabk6.oa.oa@gmail.com',	'Escape Game'),
(16,	'ilan_assouline@hotmail.fr',	'EVA'),
(17,	'avi.sulivan@gmail.com',	'Paintball');

DROP TABLE IF EXISTS `prof`;
CREATE TABLE `prof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `prof` (`id`, `nom`, `prenom`, `mail`, `password`, `tel`) VALUES
(1,	'Robert',	'benoit',	'benoit.robert@ortmontreuil.fr',	'robert',	'682571624'),
(2,	'Soudry',	'Daniel',	'soudry.daniel99@gmail.com',	'soudry',	'783849684'),
(3,	'Kubwiman',	'Lionel',	'lionel.kubwimana@gmail.com',	'Lionel',	'614442922 '),
(4,	'Granet',	'Catherine',	'Granet@3il.fr',	'granet',	'681326434'),
(5,	'Labulle',	'Florimond',	'florimond.labulle@ortmontreuil.fr',	'labulle',	'33660954947');

-- 2022-11-01 18:25:36