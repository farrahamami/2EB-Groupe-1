-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 12 mars 2023 à 16:16
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
-- Base de données : `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(3) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(67, 'rim', '123', 'abria', 'abria', 'rim@gmail.com', 'f', 'tunsi', 52158, 'rue', 0),
(64, 'farah', '123', 'farah', 'amami', 'farahamami@gmail.com', 'f', 'tunis', 12345, 'rue 231', 0),
(65, 'admin', '123', 'nour', 'nour', 'nourirmani@gmail.com', 'f', 'tunis', 10085, 'tunis somran', 1),
(66, 'ibtihel', '123', 'hamza', 'ibtihel', 'ibtihel@gmail.com', 'f', 'tunis', 12345, 'rue 231', 0),
(72, 'zaineb', '77', 'adem', 'zaineb', 'adem@gmail.com', 'm', 'soussa', 24244, 'soussa t12', 0),
(73, 'tahiya', '44', 'adem', 'jdj', 'adem@gmail.com', 'm', 'soussa', 24244, 'soussa t12', 0);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `titre` varchar(100) NOT NULL,
  `descriptionn` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`titre`, `descriptionn`, `photo`, `prix`) VALUES
('couple', 'white couple candel', 'couple candel.jpg', 0),
('couple', 'white couple candel', 'couple candel.jpg', 0),
('tishirt col v', 'bhnj,k', '264669219_239949931558460_4196137527046046757_n.jpg', 25),
('couple', 'white couple candel', 'couple candel.jpg', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('couple', 'white couple candel', 'couple candel.jpg', 0),
('tishirt col v', 'jujj', 'logo.jpg', 100),
('tishirt col v', 'jujj', 'logo.jpg', 100),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0),
('ladycandel', 'white lady candel', 'Ladycandle.jfif', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(3) NOT NULL AUTO_INCREMENT,
  `referance` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `descriptionn` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
