-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : sam. 13 août 2022 à 18:20
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `jeux-videos`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `detail` varchar(2000) NOT NULL,
  `prix_ttc` decimal(10,2) NOT NULL,
  `id_tva` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie` (`id_categorie`),
  KEY `fk_tva` (`id_tva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `reference`, `libelle`, `id_categorie`, `detail`, `prix_ttc`, `id_tva`, `image`) VALUES
(2, 'JSI010', 'Sims 4', 1, 'Simulation de vie humaine', '31.69', 3, 'sims4.jpg'),
(3, 'JSI015', 'Cooking Simulator', 1, 'Devenez le chef de cuisine', '41.00', 3, 'cooking.jpg'),
(4, 'JSI100', 'Farming Simulator', 1, 'Apprenez a gérer votre ferme', '34.92', 3, 'farming22.jpg'),
(5, 'JSI120', 'Trackmania', 1, 'Simulation de Formule 1', '36.61', 3, 'trackmania.jpg'),
(6, 'JSI150', 'Jurassic world evolution', 1, 'Admirez les plus beaux dinosaures', '33.27', 3, 'jurassic.jpg'),
(7, 'JSI025', 'Euro Truck Simulator 2', 1, 'Devenez un vrai routier', '41.55', 3, 'eurotruck2.jpg'),
(9, 'JA15322', 'Yoshi s Island', 3, 'Aidez bébé Mario a survivre', '39.99', 3, 'yoshis-island.jpg'),
(10, 'JA534352', 'Luigi s Mansion', 3, 'Ghostbuster pour Luigi', '41.17', 3, 'luigis.jpg'),
(17, 'JC015', 'Fortnite', 2, 'Battle Royal colore', '40.89', 3, 'fortnite.jpg'),
(18, 'JC100', 'Street Fighter', 2, 'Combats pour les nostalgiques', '35.93', 3, 'street-fighter.jpg'),
(19, 'JC120', 'Mortal Combat', 2, 'Combats pour les nostalgiques qui aiment le sang', '41.99', 3, 'mortal-combat.jpg'),
(20, 'JC150', 'Battlefield 2', 2, 'FPS réaliste', '42.13', 3, 'battlefield2.jpg'),
(21, 'JC010', 'Super Smash Bros', 2, 'Incarnez vos personnages préférés', '39.72', 3, 'super-smash-bros.jpg'),
(22, 'JC200', 'PUBG', 2, 'Battle Royal moins colore', '42.18', 3, 'pubg.jpg'),
(23, 'JC020', 'CS:GO', 2, 'Infiltrez-vous en tant que terroriste ou militaire', '31.76', 3, 'csgo.jpg'),
(24, 'JC300', 'APEX Legends', 2, 'Battle Royal avec des super pouvoirs', '32.24', 3, 'apex.jpg'),
(25, 'JC030', 'League of legends', 2, 'Affrontez-vous dans l\'arène pour la gloire', '35.95', 3, 'league-of-legends.jpg'),
(26, 'JC040', 'World of Tanks', 2, 'Battez-vous avec des tanks de toutes les époques', '37.99', 3, 'world-of-tanks.jpg'),
(30, 'JA1532', 'Rayman Legends', 3, 'Jeux de plateforme en nature', '37.14', 3, 'rayman.jpg'),
(31, 'JA53435', 'Super Mario 64', 3, 'Allez sauver Peach', '41.69', 3, 'super-mario64.jpg'),
(32, 'JA534125', 'Unravel', 3, 'Résolvez les énigmes sur votre chemin', '37.07', 3, 'unravel.jpg'),
(33, 'JA34', 'Minecraft', 3, 'Le monde des blocs', '30.26', 3, 'minecraft.jpg'),
(35, 'JA55', 'The legend of Zelda ', 3, 'Allez sauver Zelda', '40.07', 3, 'zelda.jpg'),
(36, 'JA959', 'GTA', 3, 'Découvrez le monde des malfrats', '34.59', 3, 'gta.jpg'),
(37, 'JSP415', 'Wii Sport', 4, 'Le multisport en famille', '37.76', 3, 'wii-sports.jpg'),
(38, 'JSP773505', 'Rocket league', 4, 'Le football en voiture', '39.99', 3, 'rocket-league.jpg'),
(39, 'JSP773506', 'FIFA 22', 4, 'Le football réaliste', '41.70', 3, 'fifa22.jpg'),
(40, 'JSP773507', 'Rugby 22', 4, 'Le rugby réaliste', '43.53', 3, 'rugby22.jpg'),
(41, 'JSP773508', 'NBA 2K22', 4, 'Le basketball réaliste', '32.54', 3, 'nba2k22.jpg'),
(42, 'JSP773503', 'Golf Impact', 4, 'Le golf réaliste', '32.12', 3, 'golf.jpg'),
(43, 'JSP773504', 'Mario Tennis', 4, 'Le tennis avec Mario', '32.98', 3, 'mario-tennis.jpg'),
(44, 'JSP773509', 'Mario Kart', 4, 'Course de voiture dans le monde de Mario', '38.52', 3, 'mario-kart.jpg'),
(46, 'JH10130', 'Five Night At Freedy', 5, 'Pointer-and-clicker de survit', '33.67', 3, 'freddys.jpg'),
(47, 'JH10080', 'Dead by Daylight', 5, 'Survit en multijoueur', '37.80', 3, 'dead-by-daylight.jpg'),
(48, 'JH10100', 'Resident Evil', 5, 'jeux vidéo d aventure, action et réflexion de type survival horror', '42.99', 3, 'resident-evil.jpg'),
(49, 'JH101302', 'Phasmophobia', 5, 'Elucidez les mysteres des morts', '41.56', 3, 'phasmophobia.jpg'),
(50, 'JH100802', 'The Conjuring House', 5, 'Essayez de ne pas mourir', '33.80', 3, 'the-conjuring-house.jpg'),
(51, 'JH101002', 'Friday 13', 5, 'Echappez a Jason', '44.34', 3, 'friday13.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `ordre_affichage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `image`, `ordre_affichage`) VALUES
(1, 'simulation', 'volant.gif', 10),
(2, 'combat', 'epees.gif', 20),
(3, 'aventure', 'panneaux.gif', 30),
(4, 'sport', 'alterophile.gif', 40),
(5, 'horreur', 'tete_de_mort.gif', 50);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valide` enum('O','N') NOT NULL DEFAULT 'N' COMMENT 'indique si le compte est validé (=O) ou non (=N)',
  `cle_activation` varchar(50) NOT NULL COMMENT 'clé d''activation du compte (envoyée par mail dans le lien d''activation)',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `adresse1` varchar(38) DEFAULT NULL,
  `adresse2` varchar(38) DEFAULT NULL,
  `adresse3` varchar(38) DEFAULT NULL,
  `adresse4` varchar(38) DEFAULT NULL,
  `code_postal` varchar(5) NOT NULL,
  `localite` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `valide`, `cle_activation`, `nom`, `prenom`, `mail`, `pwd`, `adresse1`, `adresse2`, `adresse3`, `adresse4`, `code_postal`, `localite`) VALUES
(1, 'N', '', 'Dupont', 'Pierre', 'pierre.dupont@truc.fr', '', NULL, NULL, 'Campus des Cézeaux', NULL, '63170', 'AUBIERE');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_client` int(11) NOT NULL,
  `id_session` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `date_creation`, `id_client`, `id_session`) VALUES
(1, '2014-12-27 16:55:22', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier_article`
--

DROP TABLE IF EXISTS `panier_article`;
CREATE TABLE IF NOT EXISTS `panier_article` (
  `id_panier` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_ht` decimal(10,2) NOT NULL,
  `prix_tva` decimal(10,2) NOT NULL,
  `prix_ttc` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_panier`,`id_article`),
  KEY `fk_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

DROP TABLE IF EXISTS `tva`;
CREATE TABLE IF NOT EXISTS `tva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taux` decimal(10,2) NOT NULL,
  `date_debut` date DEFAULT '2099-12-31',
  `date_fin` date DEFAULT '2099-12-31',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tva`
--

INSERT INTO `tva` (`id`, `taux`, `date_debut`, `date_fin`) VALUES
(1, '0.00', '2014-01-01', '2099-12-31'),
(2, '5.00', '2014-01-01', '2099-12-31'),
(3, '20.00', '2014-01-01', '2099-12-31');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `fk_tva` FOREIGN KEY (`id_tva`) REFERENCES `tva` (`id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `panier_article`
--
ALTER TABLE `panier_article`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `fk_panier` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id`);
COMMIT;
