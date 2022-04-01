-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 01 avr. 2022 à 20:14
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `commentaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_img` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_img`, `img`) VALUES
(1, '1.jpeg'),
(2, '2.jpeg'),
(3, '3.jpeg'),
(4, '4.jpeg'),
(7, '5.jpeg'),
(8, '6.jpeg'),
(9, '7.jpeg'),
(10, '8.jpeg'),
(11, '9.jpeg'),
(12, '10.jpeg'),
(14, 'affichev1_1 copie.jpg'),
(15, 'Capture d’écran 2022-04-01 à 21.44.41.png');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `titres` text NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `titres`, `messages`) VALUES
(1, 'Evénements Pokémon Go le 1er Avril', 'Une grande raison à cette fidélité réside dans les nombreux événements du jeu organisés par Niantic. De l’Heure vedette à la Journée Communauté en passant par des célébrations thématiques, près d’une dizaine d’events ont lieu chaque mois.\r\n d’avril 2022 sur le jeu mobile.\r\n<br>\r\nPoissuspens… d’avril 2022 (1er avril)\r\nPour débuter ce nouveau mois, un événement spécial d’une journée est prévu pour le traditionnel poisson d’avril lors du premier jour du mois. Cependant, Niantic n’a encore rien révélé sur les détails de ce rendez-vous mystérieux pour les joueurs.\r\n'),
(2, 'La recette de feuilleté basque à l\'Ossau-Iraty\r\n', 'Ingrédients :\r\n- 2 pâtes feuilletées <br>\r\n- 200 gr d’Ossau-Iraty <br>\r\n- 1 chorizo <br>\r\n- 1 poivron <br>\r\n- 1 pincée de piment d’Espelette <br>\r\n- 1 oignon <br>\r\n- 1 œuf <br>\r\nCouper l’oignon <br>\r\nle poivron et le chorizo en petits dés <br>\r\nFaire revenir le tout une dizaine de minute avec une pincée de piment d’Espelette <br>\r\nTailler l’Ossau-Iray en petits dés <br>\r\nCouper des ronds de pâte feuillée et les farcir en ajoutant le fromage encore cru <br>\r\nFermer et souder les bords <br>\r\nBadigeonner avec l’œuf battu <br>\r\nEnfourner 20 minutes à 200°C'),
(4, 'Three.js : c’est quoi ?', 'Three.js est une bibliothèque JavaScript pour créer des scènes 3D dans un navigateur web. Elle utilise WebGL. Elle peut être utilisée avec la balise canvas du HTML5 sans avoir besoin d’un plugin. Le code source est hébergé sur le GitHub de son créateur mrDoob.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
