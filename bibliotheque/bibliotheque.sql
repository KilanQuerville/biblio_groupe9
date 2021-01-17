-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 17 jan. 2021 à 10:30
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
(1, '9782070584642 ', 1),
(1, '9782070584628', 1),
(1, '9782070584925', 1),
(1, '9782070585212', 1),
(1, '9782070585229', 1),
(1, '9782070585205', 1),
(1, '9782070615360', 1),
(1, '9782075121385', 1),
(1, '9782075110709', 1),
(1, '9782070625178', 1);

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
  `resume` varchar(1500) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `nbpages`, `resume`) VALUES
('9782070584628', 'Harry Potter a l\'Ecole des Sorciers', 1, 1997, 2, 308, 'Potter est orphelin. Il mène une vie bien monotone chez son oncle et sa tante et leur horrible fils. Le jour de ses onze ans, son existence bascule : un géant vient le chercher pour l\'emmener dans une école de sorciers où une place l\'attend depuis toujours. Quel mystère entoure sa naissance? Et qui est l\'effroyable mage dont personne n\'aime prononcer le nom? Harry intègre le collège Poudlard et s\'y plaît aussitôt. Voler à cheval sur des balais, jeter des sorts, devenir champion de Quidditch (une sorte de football pour sorciers), combattre les trolls: Harry Potter se révèle un sorcier vraiment doué. Il semble pourtant que tout le monde ne l\'apprécie pas...'),
('9782070584642', 'Harry Potter et La Chambre des Secrets', 1, 1997, 2, 368, ' Harry Potter fait une deuxième rentrée fracassante en voiture volante à l\'école des sorciers. Cette deuxième année ne s\'annonce pas de tout repos... surtout depuis qu\'une étrange malédiction s\'est abattue sur les élèves. Entre les cours de potion magique, les matchs de Quidditch et les combats de mauvais sorts, Harry trouvera-t-il le temps de percer le mystère de la Chambre des Secrets?\r\n            Un livre magique pour sorciers et sorcières confirmés!'),
('9782070584925', 'Harry Potter et le Prisonnier d\'Azkaban', 1, 1999, 2, 448, 'Harry Potter a treize ans. Apres des vacances insupportables chez les horribles Dursley, il retrouve ses fideles amis, Ron et Hermione, pour prendre le train qui les ramene au college Poudlard. Le monde des gens ordinaires, les Moldus, comme celui des sorciers, est en emoi : aux dernières nouvelles, Sirius Black, un dangereux criminel proche de Voldemort, s\'est échappe de la prison d\'Azkaban. Les redoutables gardiens de la prison assureront la sécurite du college Poudlard, car le prisonnier evade recherche Harry Potter, responsable de l\'elimination de son maître. C\'est donc sous bonne garde que l\'apprenti sorcier fait sa troisieme rentree. Au programme : des cours de divination, la fabrication d\'une potion de ratatinage, le dressage des hippogriffes... Mais Harry est-il vraiment à l\'abri du danger qui le menace?'),
('9782070585205', 'Harry Potter et la Coupe de Feu', 1, 2000, 2, 656, 'Potter est orphelin. Il mene une vie bien monotone chez son oncle et sa tante et leur horrible fils. Le jour de ses onze ans, son existence bascule : un geant vient le chercher pour l\'emmener dans une école de sorciers où une place l\'attend depuis toujours. Quel mystere entoure sa naissance? Et qui est l\'effroyable mage dont personne n\'aime prononcer le nom? Harry intègre le college Poudlard et s\'y plaît aussitôt. Voler à cheval sur des balais, jeter des sorts, devenir champion de Quidditch (une sorte de football pour sorciers), combattre les trolls: Harry Potter se révèle un sorcier vraiment doue. Il semble pourtant que tout le monde ne l\'apprecie pas...'),
('9782070585212', 'Harry Potter et l\'Ordre du Phenix', 1, 2003, 2, 1040, 'A quinze ans, Harry entre en cinquième annee a Poudlard, mais il n’a jamais ete si anxieux. L’adolescence, la perspective des examens et ces etranges cauchemars… Car Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom est de retour. Le ministere de la Magie semble ne pas prendre cette menace au sérieux, contrairement à Dumbledore. La resistance s’organise alors autour de Harry qui va devoir compter sur le courage et la fidelite de ses amis de toujours…'),
('9782070585229', 'Harry Potter et le Prince de Sang-Mele', 1, 2005, 2, 752, 'Dans un monde de plus en plus inquietant, Harry se prepare a retrouver Ron et Hermione. Bientôt, ce sera la rentree à Poudlard, avec les autres etudiants de sixieme année. Mais pourquoi Dumbledore vient-il en personne chercher Harry chez les Dursley ? Dans quels extraordinaires voyages au cœur de la memoire va-t-il l\'entraîner ?\r\n       '),
('9782075121385', 'Les Animaux Fantastiques', 1, 2001, 2, 384, 'Il est rare qu\'une maison de sorciers ne compte pas dans sa bibliotheque un exemplaire des \"Animaux fantastiques\". Désormais et pour une periode limitee dans le temps, les Moldus vont avoir a leur tour la possibilite d\'apprendre ou vit le Quintaped, ce que mange le Puffskein et pourquoi il vaut mieux ne pas laisser dans le jardin une soucoupe de lait destinée à un Knarl…'),
('9782075110709', ' Les Crimes de Grindelwald', 1, 2018, 2, 320, 'Quelques mois apres sa capture, le celebre sorcier Gellert Grindelwald s\'evade comme il l\'avait promis et de façon spectaculaire. Reunissant de plus en plus de partisans, il est a l\'origine d\'attaque d\'humains normaux par des sorciers et seul celui qu\'il considerait autrefois comme un ami, Albus Dumbledore, semble capable de l\'arrêter.'),
('9782070625178', 'Le Quidditch a travers les ages', 1, 2001, 2, 160, 'Les regles du jeu, l\'apparition du Vif d\'or, l\'evolution des balais, les equipes mythiques du monde entier et les matchs qui ont fait l\'histoire : «Le Quidditch a travers les âges» est un ouvrage incontournable de la Bibliotheque de Poudlard.\r\n\r\n            Les droits d\'auteur de ce livre seront reverses à l\'organisation caritative anglaise Comic Relief qui utilisera les sommes recueillies pour ameliorer et changer des vies,une action encore plus importante et plus extraordinaire que la capture du Vif d\'or en trois secondes et demie par Roderick Plumpton en 1921.'),
('9782070615360', 'Harry Potter et les Reliques de la Mort', 1, 2007, 2, 816, 'Cette annee, Harry a dix-sept ans et ne retourne pas a Poudlard. Avec Ron et Hermione, il se consacre a la dernière mission confiee par Dumbledore. Mais le Seigneur des Ténèbres règne en maître. Traques, les trois fideles amis sont contraints à la clandestinite. D\'épreuves en revelations, le courage, les choix et les sacrifices de Harry seront déterminants dans la lutte contre les forces du Mal.\r\n\r\n        Découvrez le dernier tome des aventures de Harry Potter, lu avec talent par Dominique Collignon-Maurin. Le comedien prête a chaque personnage une voix propre. Un magnifique jeu d\'acteur.');

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
(1, 'Rowling', 'Joanne'),
(2, 'Ménard', 'Jean-François'),
(3, 'Walcker', 'Emily'),
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
(1, 'Ecrivain'),
(2, 'Traducteur'),
(3, 'Illustrateur'),
(4, 'Préface');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
