-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 28 nov. 2023 à 15:44
-- Version du serveur : 10.4.28-MariaDB-log
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `foodly`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliment`
--

CREATE TABLE `aliment` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `sucre` float DEFAULT NULL,
  `calories` int(11) NOT NULL,
  `graisses` float DEFAULT NULL,
  `proteines` float DEFAULT NULL,
  `bio` tinyint(1) DEFAULT 0,
  `vitamines_c` float DEFAULT NULL,
  `famille_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `aliment`
--

INSERT INTO `aliment` (`id`, `nom`, `marque`, `sucre`, `calories`, `graisses`, `proteines`, `bio`, `vitamines_c`, `famille_id`) VALUES
(1, 'pomme', 'sans marque', 19.1, 72, 0.2, 0.4, 0, NULL, NULL),
(2, 'poire', 'sans marque', 27.5, 134, 0.2, 1.1, 1, NULL, NULL),
(3, 'banane', 'chiquita', 24, 101, 0.3, 1.1, 0, NULL, NULL),
(4, 'jambon', 'herta', 0.2, 34, 0.8, 6.6, 0, NULL, NULL),
(5, 'compote', 'andros', 11, 51, 0, 0.5, 0, NULL, NULL),
(6, 'steak haché', 'charal', 0.8, 68, 4.8, 4.8, 0, NULL, NULL),
(7, 'saumon', 'guyader', 0, 206, 12.3, 22.1, 0, NULL, NULL),
(8, 'haricots verts', 'bonduelle', 5.8, 25, 0.1, 1.5, 0, NULL, NULL),
(9, 'riz', 'oncle benz', 28.2, 130, 0.3, 2.7, 0, NULL, NULL),
(10, 'pâtes completes', 'barilla', 64, 353, 2.7, 14, 1, NULL, NULL),
(11, 'blanc de dinde', 'père dodu', 0.6, 98, 0.9, 22, 0, NULL, NULL),
(12, 'filet de poulet', 'le gaulois', 0, 121, 1.8, 26.2, 0, NULL, NULL),
(13, 'muesli', 'bjorg', 26.5, 170, 5, 3.5, 1, NULL, NULL),
(14, 'café', 'carte noire', 0, 0, 0, 0, 0, NULL, NULL),
(15, 'jus d\'orange', 'innocent', 16, 74, 0, 1.6, 0, NULL, NULL),
(16, 'jus de pomme', 'andros', 24, 100, 0.2, 0.2, 1, NULL, NULL),
(17, 'pomme de terre', 'doréac', 21.1, 104, 0.2, 2.8, 0, NULL, NULL),
(18, 'oeuf', 'naturalia', 0.4, 74, 5.1, 6.5, 1, NULL, NULL),
(19, 'baguette', 'sans marque', 36.1, 185, 1.2, 7.5, 0, NULL, NULL),
(20, 'lait d\'amande', 'bjorg', 6.1, 80, 5.3, 1.5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `aliments_non_bio_vw`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `aliments_non_bio_vw` (
`id` int(11)
,`nom` varchar(100)
,`marque` varchar(100)
,`sucre` float
,`calories` int(11)
,`graisses` float
,`proteines` float
,`bio` tinyint(1)
);

-- --------------------------------------------------------

--
-- Structure de la table `aliment_lieu`
--

CREATE TABLE `aliment_lieu` (
  `aliment_id` int(11) NOT NULL,
  `lieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `aliment_lieu`
--

INSERT INTO `aliment_lieu` (`aliment_id`, `lieu_id`) VALUES
(11, 1);

-- --------------------------------------------------------

--
-- Structure de la table `appareil`
--

CREATE TABLE `appareil` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `nom`) VALUES
(1, 'légumes'),
(2, 'fruits');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `french_user_gmail_vw`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `french_user_gmail_vw` (
`id` int(11)
,`nom` varchar(100)
,`prenom` varchar(100)
,`email` varchar(255)
,`langue_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `nom`) VALUES
(1, 'français'),
(2, 'anglais');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `nom`, `type`) VALUES
(1, 'Carrefour City', 'supermarché');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `langue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `langue_id`) VALUES
(1, 'durantay', 'quentin', 'qentin@gmail.com', 1),
(2, 'dupont', 'marie', 'marie@hotmail.fr', 1),
(3, 'miller', 'vincent', 'vm@yahoo.com', 2),
(4, 'zuckerberg', 'marc', 'marc@gmail.com', 2),
(5, 'paul', 'pierre', 'pp@orange.fr', 1),
(6, 'de vauclerc', 'lisa', 'lisadv@gmail.com', 1),
(7, 'gluntig', 'éléonore', 'glunt@sfr.com', 1),
(8, 'cavill', 'henry', 'henry@outlook.fr', 2),
(9, 'hopper', 'lionel', 'hpp@gmail.com', 2),
(10, 'tember', 'fabienne', 'fabienne@yopmail.com', 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `utilisateurs_gmail_vw`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `utilisateurs_gmail_vw` (
`id` int(11)
,`nom` varchar(100)
,`prenom` varchar(100)
,`email` varchar(255)
,`langue_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_aliment`
--

CREATE TABLE `utilisateur_aliment` (
  `utilisateur_id` int(11) NOT NULL,
  `aliment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur_aliment`
--

INSERT INTO `utilisateur_aliment` (`utilisateur_id`, `aliment_id`) VALUES
(1, 7),
(1, 3),
(1, 5),
(2, 2),
(2, 19),
(2, 14),
(3, 4),
(3, 15),
(3, 12),
(1, 17),
(4, 5),
(4, 4),
(4, 7),
(5, 1),
(5, 18),
(5, 3),
(6, 2),
(6, 12),
(6, 6),
(7, 16),
(7, 19),
(7, 1),
(8, 3),
(8, 5),
(9, 18),
(9, 9),
(9, 14),
(10, 16),
(10, 3);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `utilisateur_gmail_vw`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `utilisateur_gmail_vw` (
`id` int(11)
,`nom` varchar(100)
,`prenom` varchar(100)
,`email` varchar(255)
,`langue_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la vue `aliments_non_bio_vw`
--
DROP TABLE IF EXISTS `aliments_non_bio_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `aliments_non_bio_vw`  AS   (select `aliment`.`id` AS `id`,`aliment`.`nom` AS `nom`,`aliment`.`marque` AS `marque`,`aliment`.`sucre` AS `sucre`,`aliment`.`calories` AS `calories`,`aliment`.`graisses` AS `graisses`,`aliment`.`proteines` AS `proteines`,`aliment`.`bio` AS `bio` from `aliment` where `aliment`.`bio` = 0 order by `aliment`.`proteines` desc)  ;

-- --------------------------------------------------------

--
-- Structure de la vue `french_user_gmail_vw`
--
DROP TABLE IF EXISTS `french_user_gmail_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `french_user_gmail_vw`  AS   (select `utilisateur`.`id` AS `id`,`utilisateur`.`nom` AS `nom`,`utilisateur`.`prenom` AS `prenom`,`utilisateur`.`email` AS `email`,`utilisateur`.`langue_id` AS `langue_id` from `utilisateur` where `utilisateur`.`email` like '%@gmail.com' and `utilisateur`.`langue_id` = '1' order by `utilisateur`.`id` desc)  ;

-- --------------------------------------------------------

--
-- Structure de la vue `utilisateurs_gmail_vw`
--
DROP TABLE IF EXISTS `utilisateurs_gmail_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `utilisateurs_gmail_vw`  AS SELECT `utilisateur`.`id` AS `id`, `utilisateur`.`nom` AS `nom`, `utilisateur`.`prenom` AS `prenom`, `utilisateur`.`email` AS `email`, `utilisateur`.`langue_id` AS `langue_id` FROM `utilisateur` WHERE `utilisateur`.`email` like '%gmail.com' ;

-- --------------------------------------------------------

--
-- Structure de la vue `utilisateur_gmail_vw`
--
DROP TABLE IF EXISTS `utilisateur_gmail_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `utilisateur_gmail_vw`  AS SELECT `utilisateur`.`id` AS `id`, `utilisateur`.`nom` AS `nom`, `utilisateur`.`prenom` AS `prenom`, `utilisateur`.`email` AS `email`, `utilisateur`.`langue_id` AS `langue_id` FROM `utilisateur` WHERE `utilisateur`.`email` like '%@gmail.com' ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aliment_lieu`
--
ALTER TABLE `aliment_lieu`
  ADD PRIMARY KEY (`aliment_id`,`lieu_id`),
  ADD KEY `lieu_id` (`lieu_id`);

--
-- Index pour la table `appareil`
--
ALTER TABLE `appareil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `langue_id` (`langue_id`);

--
-- Index pour la table `utilisateur_aliment`
--
ALTER TABLE `utilisateur_aliment`
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `aliment_id` (`aliment_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aliment`
--
ALTER TABLE `aliment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `appareil`
--
ALTER TABLE `appareil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aliment_lieu`
--
ALTER TABLE `aliment_lieu`
  ADD CONSTRAINT `aliment_lieu_ibfk_1` FOREIGN KEY (`aliment_id`) REFERENCES `aliment` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `aliment_lieu_ibfk_2` FOREIGN KEY (`lieu_id`) REFERENCES `lieu` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur_aliment`
--
ALTER TABLE `utilisateur_aliment`
  ADD CONSTRAINT `utilisateur_aliment_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_aliment_ibfk_2` FOREIGN KEY (`aliment_id`) REFERENCES `aliment` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
