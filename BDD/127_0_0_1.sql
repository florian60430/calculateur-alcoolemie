-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 19:47
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bddalcool`
--
CREATE DATABASE IF NOT EXISTS `bddalcool` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bddalcool`;

-- --------------------------------------------------------

--
-- Structure de la table `alcool`
--

DROP TABLE IF EXISTS `alcool`;
CREATE TABLE IF NOT EXISTS `alcool` (
  `id_Alcool` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `DegreAlcoolisation` varchar(50) NOT NULL,
  `dosage_bar` float NOT NULL,
  `dosage_maison` float NOT NULL,
  `dosage_fort` float NOT NULL,
  PRIMARY KEY (`id_Alcool`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `alcool`
--

INSERT INTO `alcool` (`id_Alcool`, `Nom`, `DegreAlcoolisation`, `dosage_bar`, `dosage_maison`, `dosage_fort`) VALUES
(171, 'Rhum', '40', 31.25, 35.1562, 46.875),
(170, 'Biere', '5', 250, 281.25, 375),
(166, 'Vin rouge', '11', 113.636, 127.841, 170.455),
(167, 'Vin blanc', '11', 113.636, 127.841, 170.455),
(168, 'Vodka', '37.5', 33.3333, 37.5, 50),
(169, 'Pastis', '45', 27.7778, 31.25, 41.6667),
(172, 'Whisky', '40', 31.25, 35.1562, 46.875);

-- --------------------------------------------------------

--
-- Structure de la table `conso`
--

DROP TABLE IF EXISTS `conso`;
CREATE TABLE IF NOT EXISTS `conso` (
  `id_conso` int(11) NOT NULL AUTO_INCREMENT,
  `id_alcool` int(11) NOT NULL,
  `verres` int(11) NOT NULL,
  `heure_premier_verre` time NOT NULL,
  `heure_dernier_verre` time NOT NULL,
  PRIMARY KEY (`id_conso`)
) ENGINE=MyISAM AUTO_INCREMENT=771 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conso`
--

INSERT INTO `conso` (`id_conso`, `id_alcool`, `verres`, `heure_premier_verre`, `heure_dernier_verre`) VALUES
(770, 165, 1, '04:40:00', '04:40:00');
--
-- Base de données :  `newtp`
--
CREATE DATABASE IF NOT EXISTS `newtp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `newtp`;

-- --------------------------------------------------------

--
-- Structure de la table `alcool`
--

DROP TABLE IF EXISTS `alcool`;
CREATE TABLE IF NOT EXISTS `alcool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `degre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alcool`
--

INSERT INTO `alcool` (`id`, `nom`, `degre`) VALUES
(1, 'matini', 15);
--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de données :  `test1`
--
CREATE DATABASE IF NOT EXISTS `test1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test1`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`) VALUES
(1, 'test'),
(2, 'oui'),
(3, 'lol'),
(4, 'aee'),
(5, 'koooloe'),
(6, 'etee'),
(7, 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
