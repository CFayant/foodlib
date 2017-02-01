-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.5.46-0ubuntu0.14.04.2 - (Ubuntu)
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour foodlib
CREATE DATABASE IF NOT EXISTS `foodlib` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `foodlib`;

-- Export de la structure de la table foodlib. bornes
CREATE TABLE IF NOT EXISTS `bornes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_borne` varchar(140) NOT NULL,
  `cp_borne` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Export de données de la table foodlib.bornes : ~7 rows (environ)
DELETE FROM `bornes`;
/*!40000 ALTER TABLE `bornes` DISABLE KEYS */;
INSERT INTO `bornes` (`id`, `adresse_borne`, `cp_borne`) VALUES
	(1, '82 av Denfert Rochereau', '75014'),
	(2, '15 rue Daguerre', '75014'),
	(3, '2 place d\'Italie', '75013'),
	(4, '6 rue des Saussaies', '75008'),
	(5, '38 rue des Abbesses', '75018'),
	(6, '33 rue de Maubeuge', '75009'),
	(7, '93 rue de Rivoli', '75001');
/*!40000 ALTER TABLE `bornes` ENABLE KEYS */;

-- Export de la structure de la table foodlib. donneurs
CREATE TABLE IF NOT EXISTS `donneurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wuser_id` int(11) NOT NULL,
  `type_donneur_id` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `denomination_sociale` varchar(80) DEFAULT NULL,
  `adresse_donneur` varchar(120) DEFAULT NULL,
  `cp_donneur` varchar(5) DEFAULT NULL,
  `mail` varchar(60) NOT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `acces` varchar(200) DEFAULT NULL,
  `horaires` varchar(150) DEFAULT NULL,
  `photo_profil` varchar(255) DEFAULT NULL,
  `commentaire` text,
  PRIMARY KEY (`id`),
  KEY `FK_donneurs_wusers` (`wuser_id`),
  CONSTRAINT `FK_donneurs_wusers` FOREIGN KEY (`wuser_id`) REFERENCES `wusers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Export de données de la table foodlib.donneurs : ~2 rows (environ)
DELETE FROM `donneurs`;
/*!40000 ALTER TABLE `donneurs` DISABLE KEYS */;
INSERT INTO `donneurs` (`id`, `wuser_id`, `type_donneur_id`, `nom`, `prenom`, `denomination_sociale`, `adresse_donneur`, `cp_donneur`, `mail`, `telephone`, `acces`, `horaires`, `photo_profil`, `commentaire`) VALUES
	(1, 6, 2, 'Martin', 'Marc', 'Restaurant Pizzeria Michel-Angelo', '4 rue de la Chine ', '75020', '', '0667980812', 'Métro Place des Fêtes', 'L 10h-17h, Ma 9h-18h', NULL, NULL),
	(2, 2, 3, 'Dupont', 'Luc', 'Resto du coeur Nation', '11 place de la Nation', '75011', '', '0102030405', 'RER A', 'L 9h-17h, Ma 9h-18h, Me 12h30-17h45', NULL, NULL);
/*!40000 ALTER TABLE `donneurs` ENABLE KEYS */;

-- Export de la structure de la table foodlib. dons
CREATE TABLE IF NOT EXISTS `dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donneur_id` int(11) DEFAULT NULL,
  `disponible` tinyint(4) DEFAULT '1',
  `enleve` tinyint(4) DEFAULT '0',
  `titre` varchar(500) NOT NULL,
  `date_consommation` date NOT NULL,
  `type_id` int(11) NOT NULL,
  `beneficiaire_id` int(11) DEFAULT NULL,
  `adresse_retrait` varchar(50) NOT NULL,
  `borne_id` int(5) DEFAULT NULL,
  `code_pin` varchar(4) DEFAULT NULL,
  `heure_resa` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `note` decimal(10,0) DEFAULT NULL,
  `signalement` tinyint(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dons_type_date` (`type_id`),
  KEY `FK_dons_donneurs` (`donneur_id`),
  KEY `FK_dons_wusers` (`beneficiaire_id`),
  KEY `FK_dons_bornes` (`borne_id`),
  CONSTRAINT `FK_dons_bornes` FOREIGN KEY (`borne_id`) REFERENCES `bornes` (`id`),
  CONSTRAINT `FK_dons_donneurs` FOREIGN KEY (`donneur_id`) REFERENCES `donneurs` (`id`),
  CONSTRAINT `FK_dons_type_date` FOREIGN KEY (`type_id`) REFERENCES `typeDates` (`id`),
  CONSTRAINT `FK_dons_wusers` FOREIGN KEY (`beneficiaire_id`) REFERENCES `wusers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Export de données de la table foodlib.dons : ~8 rows (environ)
DELETE FROM `dons`;
/*!40000 ALTER TABLE `dons` DISABLE KEYS */;
INSERT INTO `dons` (`id`, `donneur_id`, `disponible`, `enleve`, `titre`, `date_consommation`, `type_id`, `beneficiaire_id`, `adresse_retrait`, `borne_id`, `code_pin`, `heure_resa`, `note`, `signalement`, `image`) VALUES
	(3, 1, 1, 0, '2 parts d\'un framboisier fait maison', '2017-01-01', 1, NULL, '', 2, NULL, '2017-01-31 15:04:58', NULL, 0, 'framboisier.jpg'),
	(4, 2, 1, 0, '3 tomates', '2017-02-10', 2, NULL, '', 1, NULL, '2017-01-31 15:05:00', NULL, 0, 'tomates.jpg'),
	(6, 2, 1, 0, 'des oeufs', '2017-02-02', 2, NULL, '', 4, NULL, '2017-01-31 15:05:01', NULL, 0, 'oeufs.jpg'),
	(7, 1, 1, 0, 'du lait', '2017-02-03', 2, NULL, '', 3, NULL, '2017-01-31 15:05:02', NULL, 0, ''),
	(9, 1, 1, 0, 'patate', '2017-01-31', 2, NULL, 'borne', 2, NULL, '2017-01-31 15:24:23', NULL, 0, ''),
	(10, 1, 1, 0, 'fraise', '2017-02-15', 2, NULL, 'borne', 1, NULL, '2017-01-31 15:44:52', NULL, 0, '');
/*!40000 ALTER TABLE `dons` ENABLE KEYS */;

-- Export de la structure de la table foodlib. structures
CREATE TABLE IF NOT EXISTS `structures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_structure` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Export de données de la table foodlib.structures : ~4 rows (environ)
DELETE FROM `structures`;
/*!40000 ALTER TABLE `structures` DISABLE KEYS */;
INSERT INTO `structures` (`id`, `libelle_structure`) VALUES
	(1, 'particulier'),
	(2, 'restaurant'),
	(3, 'association'),
	(4, 'entreprise');
/*!40000 ALTER TABLE `structures` ENABLE KEYS */;

-- Export de la structure de la table foodlib. typeDates
CREATE TABLE IF NOT EXISTS `typeDates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_date` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table foodlib.typeDates : ~2 rows (environ)
DELETE FROM `typeDates`;
/*!40000 ALTER TABLE `typeDates` DISABLE KEYS */;
INSERT INTO `typeDates` (`id`, `libelle_date`) VALUES
	(1, 'Date limite de consommation (DLC) le'),
	(2, 'A consommer de préférence avant le (DLUO)');
/*!40000 ALTER TABLE `typeDates` ENABLE KEYS */;

-- Export de la structure de la table foodlib. wusers
CREATE TABLE IF NOT EXISTS `wusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Export de données de la table foodlib.wusers : ~12 rows (environ)
DELETE FROM `wusers`;
/*!40000 ALTER TABLE `wusers` DISABLE KEYS */;
INSERT INTO `wusers` (`id`, `username`, `password`, `email`, `role`) VALUES
	(1, 'mm', 'mm', '', ''),
	(2, 'ld', 'ld', '', ''),
	(6, 'faizan', '$2y$10$CZorFABp2Y8kCQYt0qmkzOStOhngedgEQO2Zgdj6F.Xj.tLuTmi4G', '', ''),
	(7, 'aboudou', '$2y$10$3YTyhvNKwbrcW8YlY2l5d.BD8QjHzRgwHK8LBQYL.c1GWjgBAH30q', '', ''),
	(8, 'doudlko', '$2y$10$mDylc0lVttDaKdHNCp0QaejB5/v./7RPzeKhF2GgTX7WkK0qRbH36', '', ''),
	(9, 'faizan', '$2y$10$QtkYT5vwFkJ0Ra9YBFk8D.JUPmc7evUh/Iu24Mlz2JK2B3ukzZY7y', '', ''),
	(10, 'hgvvjvhvgvjgc', '$2y$10$7zkJOHLrafDwmWR.bXPrh.pWT0ftE37PxpFVW.xxmMbsGbfsgb/oO', '', ''),
	(11, 'kbbfdvdv', '$2y$10$9Y13y0G9YbMeYRa44NpDFOjS82w8P.8kjcxxuB9P2Gv4G8QaKo.YS', '', ''),
	(12, 'zaaaaaaaaaaaaaaa', '$2y$10$h4znmpe4zPtNyKeNcVNL2OMvIkjgiYoMNEIEedFav7il0BAA1g3nC', '', ''),
	(13, 'zaaaaaaaaaaaaaaa', '$2y$10$UBkEGVnqvMKkyMK5RJfsguqM3iMrV.bQx1vGYPI9LOsB5Pis7RPmy', '', ''),
	(14, 'faizan', '$2y$10$hm4tV9e524Y2Xg50Xf99aO770P6RuJTYNJoWFHFXdcYyTTPb8ta.m', '', ''),
	(15, 'zaaaaaaaaaaaaaaa', '$2y$10$5SyxMAhLBdrCvdEuyAPOG.bmk922LzBASZpTmg4dycKn8acNw95da', '', ''),
	(16, 'zaaaaaaaaaaaaaaa', '$2y$10$.Ub3ulC32HhlWWHlUMPnCeaDorwsgpLEfvb2XLsUuyF2Zsi3HeEti', '', '');
/*!40000 ALTER TABLE `wusers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
