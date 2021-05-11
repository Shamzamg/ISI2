-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 avr. 2020 à 08:59
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
-- Base de données :  `manga`
--

-- --------------------------------------------------------
use manga;
--
-- Structure de la table `dessinateur`
--

DROP TABLE IF EXISTS `dessinateur`;
CREATE TABLE IF NOT EXISTS `dessinateur` (
  `id_dessinateur` int(11) NOT NULL,
  `nom_dessinateur` varchar(50) DEFAULT NULL,
  `prenom_dessinateur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dessinateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dessinateur`
--

INSERT INTO `dessinateur` (`id_dessinateur`, `nom_dessinateur`, `prenom_dessinateur`) VALUES
(1, 'TITE', 'Kubo'),
(2, 'ONE', ''),
(3, 'TORIYAMA', 'Akira'),
(4, 'YUSUKE', 'Murata'),
(5, 'OBA', 'TSUGUMI'),
(6, 'IWAAKI', 'Hitoshi'),
(7, 'OBATA', 'Takeshi'),
(8, 'TOGASHI', 'Yoshihiro');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL,
  `lib_genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `lib_genre`) VALUES
(1, 'Aventure'),
(2, 'Tanche-de-vie'),
(3, 'Action'),
(4, 'Science-Fiction'),
(5, 'Suspense'),
(6, 'Policier'),
(7, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id_manga` int(11) NOT NULL,
  `id_dessinateur` int(11) DEFAULT NULL,
  `id_scenariste` int(11) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `couverture` varchar(50) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_manga`),
  KEY `id_dessinateur` (`id_dessinateur`),
  KEY `id_scenariste` (`id_scenariste`),
  KEY `id_genre` (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id_manga`, `id_dessinateur`, `id_scenariste`, `prix`, `titre`, `couverture`, `id_genre`) VALUES
(1, 1, 1, '12.50', 'Akatsuki Vol.2', 'akatsuki-o2.jpg', 1),
(2, 2, 2, '10.90', 'College Fou Fou Fou (le)', 'college-fou-fou-fou.jpg', 2),
(3, 3, 4, '8.75', 'Yu-Gi-Oh ! 5D\"s Vol.9', 'yu-gi-oh-5d-jp-9_m.jpg', 1),
(4, 5, 6, '9.90', 'Hack - Le bracelet du crepuscule', 'hack_01_m.jpg', 1),
(5, 7, 8, '12.25', '7 Yakuzas', '7yakuzas_m.jpg', 3),
(6, 3, 8, '11.78', '7 millards d\'aiguilles', '7-milliards-aiguilles.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `scenariste`
--

DROP TABLE IF EXISTS `scenariste`;
CREATE TABLE IF NOT EXISTS `scenariste` (
  `id_scenariste` int(11) NOT NULL,
  `nom_scenariste` varchar(50) DEFAULT NULL,
  `prenom_scenariste` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_scenariste`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scenariste`
--

INSERT INTO `scenariste` (`id_scenariste`, `nom_scenariste`, `prenom_scenariste`) VALUES
(1, 'TITE', 'Kubo'),
(2, 'ONE', ''),
(3, 'TORIYAMA', 'Akira'),
(4, 'YUSUKE', 'Murata'),
(5, 'OBA', 'TSUGUMI'),
(6, 'IWAAKI', 'Hitoshi'),
(7, 'OBATA', 'Takeshi'),
(8, 'TOGASHI', 'Yoshihiro');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `manga_ibfk_1` FOREIGN KEY (`id_dessinateur`) REFERENCES `dessinateur` (`id_dessinateur`),
  ADD CONSTRAINT `manga_ibfk_2` FOREIGN KEY (`id_scenariste`) REFERENCES `scenariste` (`id_scenariste`),
  ADD CONSTRAINT `manga_ibfk_3` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
