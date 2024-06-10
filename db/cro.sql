-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 02 août 2023 à 14:30
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cro`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `idCandidat` int NOT NULL AUTO_INCREMENT,
  `nomCandidat` varchar(50) NOT NULL,
  `prenomCandidat` varchar(50) NOT NULL,
  `emailCandidat` varchar(100) NOT NULL,
  `telephon` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexeCandidat` varchar(45) NOT NULL,
  `ecoleCandidat` varchar(50) NOT NULL,
  `filiereCandidat` varchar(100) NOT NULL,
  `niveauEtudCandidat` varchar(45) NOT NULL,
  `cinCandidat` varchar(45) NOT NULL,
  `passwordCandidat` varchar(45) NOT NULL,
  `dateInscription` datetime NOT NULL,
  `TypeInscription` varchar(100) NOT NULL,
  PRIMARY KEY (`idCandidat`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`idCandidat`, `nomCandidat`, `prenomCandidat`, `emailCandidat`, `dateNaissance`, `sexeCandidat`, `ecoleCandidat`, `filiereCandidat`, `niveauEtudCandidat`, `cinCandidat`, `passwordCandidat`, `dateInscription`, `TypeInscription`) VALUES
(2, 'KOURAOGO', 'Josias', 'pawendtaorejosiask@gmail.com', '2023-07-20', 'Femme', 'Lycee Municipal de yagma', 'devellopement digital', 'Bac+2', 'CINlkjj', 'nnn', '2023-07-13 17:02:34', ''),
(3, 'KABOREhhhhhhhh', 'Simon', 'kaboresimon@gmail.com', '2023-07-15', 'Homme', 'Lycee Municipal de yagma', 'devellopement informatique', 'Bac+2', 'CIng56', 'vvv', '2023-07-13 17:20:33', ''),
(4, 'GAGRE', 'Adama', 'ada@gmail.com', '2023-07-06', 'Homme', 'Lycee Municipal de yagma', 'devellopement informatique', 'Bac+2', 'CIng56', 'S/j$+1xZ', '2023-07-13 17:39:52', ''),
(25, 'dad', 'dd', 'dd@gmail.com', '2023-07-13', 'Homme', 'Lycee Municipal de yagma', 'devellopement digital', 'Bac+1', 'CIMNV3', 'KAFANdo3&', '2023-07-26 19:39:43', ''),
(26, 'ddzd', 'cc', 'sssda@gmail.com', '2023-07-06', 'Femme', 'Lycee Municipal de yagma', 'devellopement digital', 'Bac+1', 'dhdjdj', 'KFFBZE8jj&', '2023-07-26 19:41:24', ''),
(29, 'KAFANDO', 'Relwendé Aime', 'kafandoaime017@gmail.com', '2003-02-06', 'Homme', 'ISTA Lazaret', 'Developpement web', 'bac+2', 'CYU7678', '%)709#$x', '2023-07-28 15:07:37', ''),
(30, 'NANA', 'Abou', 'nanaabou@gmail.com', '2023-08-16', 'Homme', 'ECOLE NATIONALE DES SCIENCES Appliquées', 'devellopement informatique', 'Bac+2', 'CIMNV3', 'G>8vCE)t', '2023-08-02 11:11:30', ''),
(31, 'GAGRE', 'Adama', 'gagreadamamarc@gmail.com', '2023-08-24', 'Homme', 'ECOLE NATIONALE DES SCIENCES Appliquées', 'genie informatique', 'Bac+2', 'CINlkjj', 'A-tC$Jnq', '2023-08-02 11:22:15', ''),
(32, 'KAFANDO', 'Relwendé Aimé', 'kafandoai17@gmail.com', '2023-08-17', 'Homme', 'ECOLE NATIONALE DES SCIENCES Appliquées', 'devellopement informatique', 'Bac+2', 'CINlkjj', 'E&y6R4sR', '2023-08-02 13:16:13', 'Administrateur'),
(33, 'KOURAOGO', 'Josias', 'pawendtaorejosi@gmail.com', '2023-08-09', 'Homme', 'ECOLE NATIONALE DES SCIENCES Appliquées', 'genie informatique', 'Bac+2', 'dhdjdj', 'Kafando00&', '2023-08-02 13:20:43', 'Candidat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
