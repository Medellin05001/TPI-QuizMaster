-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20240309.f380b01d44
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 15 Mai 2024 à 13:13
-- Version du serveur : 11.3.2-MariaDB
-- Version de PHP : 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_quizzmaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_questions`
--

CREATE TABLE `t_questions` (
  `idQuestions` int(11) NOT NULL,
  `queTexte` varchar(255) NOT NULL,
  `fkQuizz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `t_questions`
--

INSERT INTO `t_questions` (`idQuestions`, `queTexte`, `fkQuizz`) VALUES
(15, 'En quelle année BMW a-t-elle été créée ?', 7),
(16, 'Qui est le fondateur de BMW ?', 7),
(21, 'Quel est le pays d\'origine de BMW ?', 7),
(22, 'Quel est le slogan de BMW ?', 7),
(40, 'asd', 40),
(41, '1', 41),
(42, '1', 41),
(43, 'as', 42);

-- --------------------------------------------------------

--
-- Structure de la table `t_quizz`
--

CREATE TABLE `t_quizz` (
  `idQuizz` int(11) NOT NULL,
  `quiTitre` varchar(50) NOT NULL,
  `fkUtilisateurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `t_quizz`
--

INSERT INTO `t_quizz` (`idQuizz`, `quiTitre`, `fkUtilisateurs`) VALUES
(7, 'BMW', 8),
(40, 'asd', 8),
(41, 'test', 8),
(42, 'as', 8);

-- --------------------------------------------------------

--
-- Structure de la table `t_reponses`
--

CREATE TABLE `t_reponses` (
  `idReponses` int(11) NOT NULL,
  `repTexte` varchar(255) NOT NULL,
  `fkQuestions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `t_reponses`
--

INSERT INTO `t_reponses` (`idReponses`, `repTexte`, `fkQuestions`) VALUES
(12, '1916', 15),
(13, 'Karl Friedrich Rapp', 16),
(14, 'Allemagne', 21),
(15, 'Le plaisir de conduire', 22),
(21, 'asd', 40),
(22, '2', 41),
(23, '', 42),
(24, 'as', 43);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateurs`
--

CREATE TABLE `t_utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL,
  `utiNomUtilisateur` varchar(20) NOT NULL,
  `utiMotDePasse` varchar(64) NOT NULL,
  `utiNom` varchar(50) NOT NULL,
  `utiPrenom` varchar(35) NOT NULL,
  `utiDroits` varchar(255) NOT NULL DEFAULT 'utilisateur',
  `utiScore` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`idUtilisateurs`, `utiNomUtilisateur`, `utiMotDePasse`, `utiNom`, `utiPrenom`, `utiDroits`, `utiScore`) VALUES
(8, 'fa1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Fernandes', 'Alexandre', 'admin', 33),
(9, 'jk1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Jano', 'Kinan', 'utilisateur', 20),
(10, 'gf1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Gelsomino', 'Fabrice', 'utilisateur', 15),
(11, 'iy1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Imperadori', 'Yann', 'utilisateur', 14),
(12, 'ak1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Avdylaj', 'Kevin', 'utilisateur', 0),
(13, 'ra1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Roger', 'Antoine', 'utilisateur', 0),
(14, 'pby1', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Pena-Bustabad', 'Yannick', 'utilisateur', 0),
(16, 'Pelo', 'b428fd6b33559ba36a54e17282ba3bbee4c86d1343f35dee7653266dfb15554a', 'Pelo', 'Pelo', 'utilisateur', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_questions`
--
ALTER TABLE `t_questions`
  ADD PRIMARY KEY (`idQuestions`),
  ADD KEY `idQuizz` (`fkQuizz`);

--
-- Index pour la table `t_quizz`
--
ALTER TABLE `t_quizz`
  ADD PRIMARY KEY (`idQuizz`),
  ADD KEY `idUtilisateurs` (`fkUtilisateurs`);

--
-- Index pour la table `t_reponses`
--
ALTER TABLE `t_reponses`
  ADD PRIMARY KEY (`idReponses`),
  ADD KEY `idQuestions` (`fkQuestions`);

--
-- Index pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  ADD PRIMARY KEY (`idUtilisateurs`),
  ADD UNIQUE KEY `utiNomUtilisateur` (`utiNomUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_questions`
--
ALTER TABLE `t_questions`
  MODIFY `idQuestions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `t_quizz`
--
ALTER TABLE `t_quizz`
  MODIFY `idQuizz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `t_reponses`
--
ALTER TABLE `t_reponses`
  MODIFY `idReponses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_questions`
--
ALTER TABLE `t_questions`
  ADD CONSTRAINT `t_questions_ibfk_1` FOREIGN KEY (`fkQuizz`) REFERENCES `t_quizz` (`idQuizz`);

--
-- Contraintes pour la table `t_quizz`
--
ALTER TABLE `t_quizz`
  ADD CONSTRAINT `t_quizz_ibfk_1` FOREIGN KEY (`fkUtilisateurs`) REFERENCES `t_utilisateurs` (`idUtilisateurs`);

--
-- Contraintes pour la table `t_reponses`
--
ALTER TABLE `t_reponses`
  ADD CONSTRAINT `t_reponses_ibfk_1` FOREIGN KEY (`fkQuestions`) REFERENCES `t_questions` (`idQuestions`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
