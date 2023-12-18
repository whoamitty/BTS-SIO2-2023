-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 15 Avril 2020 à 12:45
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `stockges`
--

-- --------------------------------------------------------

--
-- Structure de la table `mouvmt`
--

CREATE TABLE IF NOT EXISTS `mouvmt` (
  `idmv` int(11) NOT NULL,
  `codeprd` varchar(10) NOT NULL,
  `quantite` int(11) NOT NULL,
  `nature` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`idmv`),
  KEY `fk1` (`codeprd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mouvmt`
--

INSERT INTO `mouvmt` (`idmv`, `codeprd`, `quantite`, `nature`, `date`) VALUES
(1, 'sv', 120, 'depot', '17-12-2020'),
(2, 'ncf', 60, 'depot', '04-06-2018'),
(3, 'nd', 45, 'depot', '23-10-2019'),
(4, 'sr', 30, 'depot', '11-11-2019'),
(5, 'sr', 2, 'Retrait', '06-09-2020'),
(6, 'sp', 80, 'depot', '08-07-2019'),
(7, 'sp', 4, 'Retrait', '17-09-2019');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `codeprod` varchar(10) NOT NULL,
  `nomprod` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`codeprod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`codeprod`, `nomprod`, `prix`) VALUES
('mayo', 'mayonnaise', 1300),
('ncf', 'nescafe', 750),
('nd', 'nido', 2750),
('scr', 'sucre en paquet', 1000),
('sp', 'spagueti', 500),
('sr', 'sardine', 500),
('sv', 'savon', 350),
('tmt', 'tomate en boite', 700);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vue1`
--
CREATE TABLE IF NOT EXISTS `vue1` (
`codeprod` varchar(10)
,`nomprod` varchar(100)
,`prix` int(11)
,`qte` bigint(12)
,`nature` varchar(20)
,`date` varchar(10)
);
-- --------------------------------------------------------

--
-- Structure de la vue `vue1`
--
DROP TABLE IF EXISTS `vue1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue1` AS select `produit`.`codeprod` AS `codeprod`,`produit`.`nomprod` AS `nomprod`,`produit`.`prix` AS `prix`,-(`mouvmt`.`quantite`) AS `qte`,`mouvmt`.`nature` AS `nature`,`mouvmt`.`date` AS `date` from (`produit` join `mouvmt` on((`produit`.`codeprod` = `mouvmt`.`codeprd`))) where (`mouvmt`.`nature` = 'retrait') union select `produit`.`codeprod` AS `codeprod`,`produit`.`nomprod` AS `nomprod`,`produit`.`prix` AS `prix`,`mouvmt`.`quantite` AS `qte`,`mouvmt`.`nature` AS `nature`,`mouvmt`.`date` AS `date` from (`produit` join `mouvmt` on((`produit`.`codeprod` = `mouvmt`.`codeprd`))) where (`mouvmt`.`nature` = 'depot');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `mouvmt`
--
ALTER TABLE `mouvmt`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`codeprd`) REFERENCES `produit` (`codeprod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
