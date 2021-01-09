-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 09 jan. 2021 à 17:35
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(1, '9782070584628', 1),
(1, '9782070584642', 1),
(1, '9782070584925', 1),
(1, '9782070585205', 1),
(1, '9782070585212', 1),
(1, '9782070585229', 1),
(1, '9782070615360', 1),
(1, '9782070625178', 1),
(1, '9782075110709', 1),
(1, '9782075121385', 1);

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id`, `libelle`) VALUES
(1, 'Gallimard Jeunesse');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`genre`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(2, 'Roman Fantastique');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL,
  `lien` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `nbpages`, `lien`, `image`) VALUES
('9782070584628', 'Harry Potter a l\'Ecole des Sorciers', 1, 1997, 2, 308, '9782070584628.php', 'Imgbiblio/tome1.jpg'),
('9782070584642', 'Harry Potter et La Chambre des Secrets', 1, 1997, 2, 368, '9782070584642.php', 'Imgbiblio/tome2.jpg'),
('9782070584925', 'Harry Potter et le Prisonnier d\'Azkaban', 1, 1999, 2, 448, '9782070584925.php', 'Imgbiblio/tome3.jpg'),
(' 9782070585205', 'Harry Potter et la Coupe de Feu', 1, 2000, 2, 784, '9782070585205.php', 'Imgbiblio/tome4.png'),
('9782070585212', 'Harry Potter et l\'Ordre du Phenix', 1, 2003, 2, 1040, '9782070585212.php', 'Imgbiblio/tome5.jpg'),
('9782070585229', 'Harry Potter et le Prince de Sang-Mele', 1, 2005, 2, 752, '9782070585229.php', 'Imgbiblio/tome6.jpg'),
(' 9782070615360', 'Harry Potter et les Reliques de la Mort', 1, 2007, 2, 896, '9782070615360.php', 'Imgbiblio/tome7.jpg'),
('9782075121385', 'Les Animaux Fantastiques', 1, 2001, 2, 384, '9782075121385.php', 'Imgbiblio/tome1animauxfant.png'),
('9782075110709', ' Les Crimes de Grindelwald', 1, 2018, 2, 320, '9782075110709.php', 'Imgbiblio/tome2animauxfant.png'),
('9782070625178', 'Le Quidditch a travers les ages', 1, 2001, 2, 160, '9782070625178.php', 'Imgbiblio/quidditch.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Potter', 'Harry'),
(2, 'Granger', 'Hermione'),
(3, 'Weasley', 'Ron'),
(4, 'Dumbledore', 'Albus'),
(5, 'Jedusor', 'Tom'),
(6, 'Dragonneau', 'Norbert'),
(7, 'Waterston', 'Katherine'),
(8, 'Sudol', 'Alison'),
(9, 'Fogler', 'Dan'),
(10, 'Ejogo ', 'Carmen'),
(11, 'Farrell', '');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `libelle`) VALUES
(1, 'Ecrivain');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
