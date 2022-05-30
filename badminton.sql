-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 mai 2022 à 17:51
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
-- Base de données : `badminton`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `MatriculeADH` int(11) NOT NULL AUTO_INCREMENT,
  `nomAdh` varchar(40) NOT NULL,
  `prenomAdh` varchar(40) NOT NULL,
  `adresseAdh` varchar(40) NOT NULL,
  `VilleAdh` varchar(40) NOT NULL,
  `cpAdh` int(20) NOT NULL,
  `NiveauAdh` varchar(40) NOT NULL,
  `TypeAdh` varchar(40) NOT NULL,
  PRIMARY KEY (`MatriculeADH`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`MatriculeADH`, `nomAdh`, `prenomAdh`, `adresseAdh`, `VilleAdh`, `cpAdh`, `NiveauAdh`, `TypeAdh`) VALUES
(5, 'Rivière', 'Theo', '1 Rue des Lilas', 'Houilles', 78800, 'Expert', 'Retraité'),
(26, 'Enzo', 'Mezza', '1 rouge de lille', 'Paris', 75001, 'Confirmé', 'Etudiant'),
(18, 'Lamic', 'Guillaume', '31 Rue Gambetta', 'Carrières Sur Seine', 78420, 'Debutant', 'Etudiant'),
(28, 'Antoine', 'Lambard', '1 rue des Lilas', 'Paris', 75001, 'Confirmé', 'Salarié'),
(16, 'David', 'Noa', '68 Rue Condorcet', 'Houilles', 78800, 'Expert', 'Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `matriculeUsers` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  PRIMARY KEY (`matriculeUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`matriculeUsers`, `nom`, `mdp`) VALUES
(1, 'admin', 'mdp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
