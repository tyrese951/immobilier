-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 mai 2022 à 17:06
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(227) NOT NULL AUTO_INCREMENT,
  `titre` varchar(227) NOT NULL,
  `adresse` varchar(227) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `cp` int(8) NOT NULL,
  `surface` varchar(5) NOT NULL,
  `prix` int(9) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `typee` enum('location','Vente') NOT NULL,
  `descriptif` text NOT NULL,
  PRIMARY KEY (`id_logement`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `typee`, `descriptif`) VALUES
(2, 'Duplex', '120 avenue du 8 mai 1945', 'Paris', 75008, '80', 900000, NULL, 'location', ''),
(3, 'Maison', '55 avenue des champs Elysee.  ', 'Paris', 75008, '100', 1000000, NULL, 'Vente', 'Trop beau.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
