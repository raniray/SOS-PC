-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 17 Septembre 2017 à 17:06
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sospc`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis_`
--

CREATE TABLE IF NOT EXISTS `avis_` (
  `idAvis` int(30) NOT NULL AUTO_INCREMENT,
  `idUser` int(30) NOT NULL,
  `contenuAvis` text NOT NULL,
  PRIMARY KEY (`idAvis`),
  KEY `idUser` (`idUser`),
  KEY `idUser_2` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `avis_`
--

INSERT INTO `avis_` (`idAvis`, `idUser`, `contenuAvis`) VALUES
(11, 12, 'Bonne idée,bonne continuation :)'),
(12, 12, 'Bonne idée,bonne continuation :)'),
(13, 12, 'Hello wonderful world!Hello wonderful world!Hello wonderful world!Hello wonderful world!Hello wonderful world!Hello wond');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avis_`
--
ALTER TABLE `avis_`
  ADD CONSTRAINT `avis__ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user_` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
