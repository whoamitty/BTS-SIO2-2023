-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 22 Mars 2021 à 06:25
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `inscription_db`
--

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `frais_eleve`
--
CREATE TABLE IF NOT EXISTS `frais_eleve` (
`matricule` varchar(20)
,`prenom` varchar(80)
,`nom` varchar(80)
,`sexe` varchar(10)
,`dateNaissance` varchar(50)
,`classe` varchar(20)
,`montantPaye` decimal(8,2)
,`quartier` varchar(80)
,`contacTuteur` varchar(30)
,`situation_classe` varchar(30)
,`situation_ecole` varchar(30)
,`montant` decimal(8,2)
);
-- --------------------------------------------------------

--
-- Structure de la table `tbhistoriquepaie`
--

CREATE TABLE IF NOT EXISTS `tbhistoriquepaie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) DEFAULT NULL,
  `datePaie` datetime DEFAULT NULL,
  `montant` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk` (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `tbhistoriquepaie`
--

INSERT INTO `tbhistoriquepaie` (`id`, `matricule`, `datePaie`, `montant`) VALUES
(11, '2021E1', '2021-03-19 23:30:49', '45000.00'),
(12, '2021E2', '2021-03-19 23:38:21', '55000.00'),
(13, '2021E1', '2021-03-19 23:54:45', '15000.00'),
(14, '2021E4', '2021-03-22 03:53:35', '43000.00'),
(15, '2021E3', '2021-03-22 03:54:07', '48000.00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_eleve`
--

CREATE TABLE IF NOT EXISTS `tb_eleve` (
  `matricule` varchar(20) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `dateNaissance` varchar(50) DEFAULT NULL,
  `classe` varchar(20) NOT NULL,
  `montantPaye` decimal(8,2) DEFAULT NULL,
  `quartier` varchar(80) NOT NULL,
  `contacTuteur` varchar(30) NOT NULL,
  `situation_classe` varchar(30) NOT NULL,
  `situation_ecole` varchar(30) NOT NULL,
  PRIMARY KEY (`matricule`),
  KEY `fk2` (`classe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_eleve`
--

INSERT INTO `tb_eleve` (`matricule`, `prenom`, `nom`, `sexe`, `dateNaissance`, `classe`, `montantPaye`, `quartier`, `contacTuteur`, `situation_classe`, `situation_ecole`) VALUES
('2021E1', 'SOPHIA', 'ANGELA', 'FEMININ', '22-11-2006', '5eme', '60000.00', 'MOURSAL', '66090911', 'NOUVEAU/NOUVELLE', 'NOUVEAU/NOUVELLE'),
('2021E10', 'BLAISE', 'KAGOMBE', 'MASCULIN', '09-10-2005', '5eme', '0.00', 'ATRONE', '66010145', 'NOUVEAU/NOUVELLE', 'NOUVEAU/NOUVELLE'),
('2021E11', 'ALI', 'HAROUN', 'MASCULIN', '29-04-2001', 'TA', '0.00', 'FARCHA', '66234500', 'REDOUBLANT(E)', 'NOUVEAU/NOUVELLE'),
('2021E2', 'DJIME', 'IBET', 'MASCULIN', '20-08-2003', 'TA', '55000.00', 'CHAGOUA', '66010145', 'NOUVEAU/NOUVELLE', 'ANCIEN(NE)'),
('2021E3', 'ABDERAMAN', 'SENOUSSI', 'MASCULIN', '2007', '6eme', '48000.00', 'DIGUEL', '90914509', 'NOUVEAU/NOUVELLE', 'NOUVEAU/NOUVELLE'),
('2021E4', 'JUDITH', 'LARHIGAM', 'FEMININ', '2008', '6eme', '43000.00', 'MOURSAL', '60316628', 'NOUVEAU/NOUVELLE', 'NOUVEAU/NOUVELLE'),
('2021E5', 'CLEMANT', 'ASDE', 'MASCULIN', '12-08-2005', '6eme', '0.00', 'ABENA', '66060674', 'REDOUBLANT(E)', 'ANCIEN(NE)'),
('2021E6', 'ESTHER', 'NEPIDIMBAYE', 'FEMININ', '12-08-2008', '6eme', '0.00', 'ABENA', '63342167', 'NOUVEAU/NOUVELLE', 'NOUVEAU/NOUVELLE'),
('2021E7', 'MAHAMAT', 'ALI HISSEINE', 'MASCULIN', '02-07-2008', '6eme', '0.00', 'DEMBE', '66151718', 'NOUVEAU/NOUVELLE', 'NOUVEAU/NOUVELLE'),
('2021E8', 'ERNEST', 'NGARDIGUINA', 'MASCULIN', '02-11-2007', '6eme', '0.00', 'AMTOUKOUI', '60151718', 'REDOUBLANT(E)', 'NOUVEAU/NOUVELLE'),
('2021E9', 'AMINA', 'ABDOULAYE', 'FEMININ', '09-12-2006', '5eme', '0.00', 'MOURSAL', '99412454', 'NOUVEAU/NOUVELLE', 'ANCIEN(NE)');

-- --------------------------------------------------------

--
-- Structure de la table `tb_frais`
--

CREATE TABLE IF NOT EXISTS `tb_frais` (
  `classe` varchar(20) NOT NULL,
  `montant` decimal(8,2) NOT NULL,
  PRIMARY KEY (`classe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_frais`
--

INSERT INTO `tb_frais` (`classe`, `montant`) VALUES
('1ere L', '110000.00'),
('1ere S', '110000.00'),
('2dne S', '110000.00'),
('2nde L', '110000.00'),
('3eme', '95000.00'),
('4eme', '95000.00'),
('5eme', '95000.00'),
('6eme', '95000.00'),
('TA', '110000.00'),
('TC', '110000.00'),
('TD', '110000.00');

-- --------------------------------------------------------

--
-- Structure de la vue `frais_eleve`
--
DROP TABLE IF EXISTS `frais_eleve`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `frais_eleve` AS select `tb_eleve`.`matricule` AS `matricule`,`tb_eleve`.`prenom` AS `prenom`,`tb_eleve`.`nom` AS `nom`,`tb_eleve`.`sexe` AS `sexe`,`tb_eleve`.`dateNaissance` AS `dateNaissance`,`tb_eleve`.`classe` AS `classe`,`tb_eleve`.`montantPaye` AS `montantPaye`,`tb_eleve`.`quartier` AS `quartier`,`tb_eleve`.`contacTuteur` AS `contacTuteur`,`tb_eleve`.`situation_classe` AS `situation_classe`,`tb_eleve`.`situation_ecole` AS `situation_ecole`,`tb_frais`.`montant` AS `montant` from (`tb_eleve` join `tb_frais` on((`tb_eleve`.`classe` = `tb_frais`.`classe`)));

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tbhistoriquepaie`
--
ALTER TABLE `tbhistoriquepaie`
  ADD CONSTRAINT `fk` FOREIGN KEY (`matricule`) REFERENCES `tb_eleve` (`matricule`);

--
-- Contraintes pour la table `tb_eleve`
--
ALTER TABLE `tb_eleve`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`classe`) REFERENCES `tb_frais` (`classe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
