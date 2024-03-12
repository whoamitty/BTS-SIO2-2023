-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 18 Avril 2021 à 18:54
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `biblio_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_livre`
--

CREATE TABLE IF NOT EXISTS `tb_livre` (
  `id_livre` int(11) NOT NULL AUTO_INCREMENT,
  `titre_livre` varchar(150) NOT NULL,
  `genre_livre` varchar(100) NOT NULL,
  `nom_auteur` varchar(150) NOT NULL,
  `pays_auteur` varchar(100) NOT NULL,
  `region_auteur` varchar(150) NOT NULL,
  `annee_sortie` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  PRIMARY KEY (`id_livre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `tb_livre`
--

INSERT INTO `tb_livre` (`id_livre`, `titre_livre`, `genre_livre`, `nom_auteur`, `pays_auteur`, `region_auteur`, `annee_sortie`, `nombre`) VALUES
(1, 'ETUDIANT DE SOWETO', 'ROMAN', 'MAWNDOE NAINDOUBA', 'TCHAD', 'AFRIQUE CENTRALE', 1998, 10),
(2, 'TRAGEDIE', 'PIECE', 'AIME CESAIRE', 'FRANCE', 'EUROPE', 1976, 10),
(3, 'GERMINALE', 'ROMAN', 'EMILE ZOLA', 'FRANCE', 'EUROPE', 1887, 10),
(4, 'SANG DE KOLA', 'ROMAN', 'NOEL NETONON', 'TCHAD', 'AFRIQUE CENTRALE', 2000, 10),
(5, 'AU TCHAD SOUS LES ETOILES', 'ROMAN', 'JOSEPH BRAHIM SEID', 'TCHAD', 'AFRIQUE CENTRALE', 1968, 10),
(6, 'O COMME OUBLIE', 'ROMAN', 'SUE GRAFTON', 'USA', 'AMERIQUE DU NORD', 1993, 10),
(7, 'LE FILS DU PAUVRE', 'ROMAN', 'MOULOUD FERAOUNE', 'ALGERIE', 'AFRIQUE DU NORD', 1976, 10),
(8, 'UNE VIE DE BOY', 'ROMAN', 'FERDINAND OYONO', 'CAMEROUN', 'AFRIQUE CENTRALE', 1988, 10),
(9, 'AVENTURE AMBIGUE', 'ROMAN', 'CHEIK AHMIDOU KHAN', 'SENEGAL', 'AFRIQUE OCCIDENTALE', 1989, 10),
(10, 'CAHIER DE RETOUR', 'POESIE', 'AIME CESAIRE', 'FRANCE', 'EUROPE', 1977, 15),
(12, 'F COMME FUGITIF', 'ROMAN', 'SUE GRAFTON', 'USA', 'AMERIQUE DU NORD', 2000, 10),
(13, 'REPUBLIQUE A VENDRE', 'PIECE', 'ISAAC TEDANGBE', 'TCHAD', 'AFRIQUE CENTRALE', 2000, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
