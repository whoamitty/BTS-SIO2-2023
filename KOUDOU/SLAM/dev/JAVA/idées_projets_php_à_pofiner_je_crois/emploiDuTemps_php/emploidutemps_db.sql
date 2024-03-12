-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 28 Mars 2021 à 08:50
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `emploidutemps_db`
--

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `enseignant_cours`
--
CREATE TABLE IF NOT EXISTS `enseignant_cours` (
`matricule` varchar(20)
,`nom` varchar(150)
,`contact` varchar(50)
,`id` int(11)
,`classe` varchar(30)
,`matiere` varchar(80)
,`num_jour` smallint(6)
,`jour` varchar(20)
,`heure` varchar(20)
);
-- --------------------------------------------------------

--
-- Structure de la table `tb_cours`
--

CREATE TABLE IF NOT EXISTS `tb_cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe` varchar(30) NOT NULL,
  `matiere` varchar(80) NOT NULL,
  `num_jour` smallint(6) DEFAULT NULL,
  `Jour` varchar(20) NOT NULL,
  `heure` varchar(20) NOT NULL,
  `matricule_ens` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk` (`matricule_ens`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `tb_cours`
--

INSERT INTO `tb_cours` (`id`, `classe`, `matiere`, `num_jour`, `Jour`, `heure`, `matricule_ens`) VALUES
(7, '6eme', 'MATH', 1, 'LUNDI', '1ere et 2eme H', 'ens2'),
(8, '6eme', 'FRAN', 1, 'LUNDI', '3eme  et 4eme H', 'ens1'),
(9, '6eme', 'SVT', 1, 'LUNDI', '5eme et 6eme H', 'ens5'),
(10, '6eme', 'PC', 2, 'MARDI', '1ere et 2eme H', 'ens7'),
(11, '6eme', 'MATH', 2, 'MARDI', '3eme  et 4eme H', 'ens2'),
(12, '6eme', 'IC', 2, 'MARDI', '5eme H', 'ens8'),
(13, '6eme', 'MATH', 3, 'MERCREDI', '1ere H', 'ens2'),
(14, '6eme', 'SVT', 3, 'MERCREDI', '2eme H', 'ens5'),
(15, '6eme', 'FRAN', 3, 'MERCREDI', '3eme  et 4eme H', 'ens1'),
(16, '6eme', 'FRAN', 4, 'JEUDI', '1ere et 2eme H', 'ens1'),
(17, '6eme', 'PC', 4, 'JEUDI', '3eme  et 4eme H', 'ens7'),
(18, '6eme', 'ANG', 3, 'MERCREDI', '5eme et 6eme H', 'ens6'),
(19, '6eme', 'ANG', 5, 'VENDREDI', '1ere H', 'ens6'),
(20, '5eme', 'FRAN', 1, 'LUNDI', '1ere et 2eme H', 'ens1'),
(21, '5eme', 'MATH', 1, 'LUNDI', '3eme  et 4eme H', 'ens2'),
(22, '5eme', 'IC', 1, 'LUNDI', '5eme H', 'ens8'),
(23, '5eme', 'MATH', 2, 'MARDI', '1ere et 2eme H', 'ens2'),
(25, '5eme', 'FRAN', 2, 'MARDI', '5eme et 6eme H', 'ens1'),
(26, '5eme', 'ANG', 3, 'MERCREDI', '1ere et 2eme H', 'ens6'),
(27, '5eme', 'MATH', 3, 'MERCREDI', '3eme H', 'ens2'),
(28, '5eme', 'IC', 3, 'MERCREDI', '4eme H', 'ens8'),
(29, '5eme', 'SVT', 4, 'JEUDI', '1ere et 2eme H', 'ens5'),
(30, '5eme', 'FRAN', 4, 'JEUDI', '3eme  et 4eme H', 'ens1'),
(31, '5eme', 'SVT', 2, 'MARDI', '3eme H', 'ens5');

-- --------------------------------------------------------

--
-- Structure de la table `tb_enseignant`
--

CREATE TABLE IF NOT EXISTS `tb_enseignant` (
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_enseignant`
--

INSERT INTO `tb_enseignant` (`matricule`, `nom`, `contact`) VALUES
('ens1', 'SIGNABE JEROME', '66891219'),
('ens2', 'CEPHAS DIGBE', '66214512'),
('ens3', 'AHMAT IDRISS', '66420833 / 99541240'),
('ens4', 'NOUBATA BLAISE', '66014345'),
('ens5', 'DOUMDE RODRIGUE', '62080911'),
('ens6', 'ALLASRA NESTOR', '60990909'),
('ens7', 'TOMTE FERDINAND', '66478901'),
('ens8', 'ALLADOUM CHRISTOPHE', '66801717');

-- --------------------------------------------------------

--
-- Structure de la vue `enseignant_cours`
--
DROP TABLE IF EXISTS `enseignant_cours`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `enseignant_cours` AS select `tb_enseignant`.`matricule` AS `matricule`,`tb_enseignant`.`nom` AS `nom`,`tb_enseignant`.`contact` AS `contact`,`tb_cours`.`id` AS `id`,`tb_cours`.`classe` AS `classe`,`tb_cours`.`matiere` AS `matiere`,`tb_cours`.`num_jour` AS `num_jour`,`tb_cours`.`Jour` AS `jour`,`tb_cours`.`heure` AS `heure` from (`tb_enseignant` join `tb_cours` on((`tb_enseignant`.`matricule` = `tb_cours`.`matricule_ens`)));

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tb_cours`
--
ALTER TABLE `tb_cours`
  ADD CONSTRAINT `fk` FOREIGN KEY (`matricule_ens`) REFERENCES `tb_enseignant` (`matricule`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
