-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 04 Septembre 2017 à 00:30
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
-- Structure de la table `annonce_`
--

CREATE TABLE IF NOT EXISTS `annonce_` (
  `idAnnonce` int(30) NOT NULL AUTO_INCREMENT,
  `annoncePic` varchar(200) DEFAULT NULL,
  `annonceContent` text NOT NULL,
  `dateCreation` date NOT NULL,
  `prix` int(11) NOT NULL,
  `nombreDeVues` int(30) NOT NULL,
  `durreeValidite` int(30) NOT NULL,
  `idUser` int(30) NOT NULL,
  PRIMARY KEY (`idAnnonce`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `annonce_`
--

INSERT INTO `annonce_` (`idAnnonce`, `annoncePic`, `annonceContent`, `dateCreation`, `prix`, `nombreDeVues`, `durreeValidite`, `idUser`) VALUES
(1, '', 'Modèle:Dell inspiron Processeur: i5 RAM:4GB Système d''exploi', '2017-09-03', 51000, 0, 3, 1),
(2, '', 'Modèle:Lenovo  G50 Processeur: i7 RAM:8GB Système d''exploita', '2017-09-03', 70000, 0, 5, 1),
(3, '', 'Modèle:Mac pro Processeur: i7 RAM:16GB Système d''exploitation:Mac OS Anciennete: Entre 2  et 5 ans Durée de validité:7 Detail:xxxxxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbnnnnnnnnnnnnnnnnnnnnnnnnnnnrrrrrrrrrrrrrrrrrrrrrrtttttttttt', '0000-00-00', 187000, 0, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `client_`
--

CREATE TABLE IF NOT EXISTS `client_` (
  `idUser` int(30) NOT NULL,
  `ccpUser` int(20) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client_`
--

INSERT INTO `client_` (`idUser`, `ccpUser`) VALUES
(0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demande_`
--

CREATE TABLE IF NOT EXISTS `demande_` (
  `idDemande` int(30) NOT NULL AUTO_INCREMENT,
  `idClient` int(30) NOT NULL,
  `modelePc` varchar(100) NOT NULL,
  `processeur` varchar(60) DEFAULT NULL,
  `ramPc` varchar(60) DEFAULT NULL,
  `osPc` varchar(60) DEFAULT NULL,
  `ancientePc` varchar(255) DEFAULT NULL,
  `intitulePanne` varchar(255) NOT NULL,
  `typePanne` char(1) DEFAULT NULL,
  `descriptionPanne` longtext NOT NULL,
  `pannePic` varchar(60) DEFAULT NULL,
  `idReparateur` int(30) DEFAULT NULL,
  `dateCreation` date NOT NULL,
  `etatDemande` varchar(60) NOT NULL,
  `tauxAvancement` decimal(2,2) NOT NULL,
  `prixAnnonce` int(11) DEFAULT NULL,
  `discussionId` int(30) DEFAULT NULL,
  PRIMARY KEY (`idDemande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `discussion_`
--

CREATE TABLE IF NOT EXISTS `discussion_` (
  `idDiscussion` int(60) NOT NULL AUTO_INCREMENT,
  `idUser1` int(30) NOT NULL,
  `idUser2` int(30) NOT NULL,
  `listeMessages` text NOT NULL,
  PRIMARY KEY (`idDiscussion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message_`
--

CREATE TABLE IF NOT EXISTS `message_` (
  `idmessage` int(60) NOT NULL AUTO_INCREMENT,
  `idDiscussion` int(30) NOT NULL,
  `dateMessage` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`idmessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reparateur_`
--

CREATE TABLE IF NOT EXISTS `reparateur_` (
  `idUser` int(30) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `classement` int(20) DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  `biography` longtext,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_`
--

CREATE TABLE IF NOT EXISTS `user_` (
  `idUser` int(30) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(30) NOT NULL,
  `prenomUser` varchar(30) NOT NULL,
  `mailUser` varchar(30) DEFAULT NULL,
  `pswdUser` varchar(255) NOT NULL,
  `statusAcount` char(1) NOT NULL,
  `profilePicUser` varchar(60) DEFAULT NULL,
  `telUser` int(20) DEFAULT NULL,
  `dateNaissUser` date DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `mailUser` (`mailUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user_`
--

INSERT INTO `user_` (`idUser`, `nomUser`, `prenomUser`, `mailUser`, `pswdUser`, `statusAcount`, `profilePicUser`, `telUser`, `dateNaissUser`, `dateInscription`) VALUES
(1, 'Mokhtari', 'Fahima', 'df_mokhtari@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 'C', './img/Profiles/default-user.png', NULL, NULL, '2017-09-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
