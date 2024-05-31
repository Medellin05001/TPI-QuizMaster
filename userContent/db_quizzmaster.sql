
-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20240309.f380b01d44
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Ven. 31 Mai 2024 à 06:24
-- Version du serveur : 11.3.2-MariaDB
-- Version de PHP : 8.3.4

-- Add these lines to create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS db_quizzmaster;
USE db_quizzmaster;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20240309.f380b01d44
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Ven. 31 Mai 2024 à 06:24
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
(99, 'Quelle est la capitale de la France ?', 73),
(100, 'Quel est le plus grand océan du monde ?', 73),
(101, 'ombien de continents y a-t-il sur Terre ?', 73),
(102, 'Quelle est la plus grande planète de notre système solaire ?', 73),
(103, 'Qui a écrit \"Le Petit Prince\" ?', 73),
(104, 'Quel pays a remporté la Coupe du Monde de la FIFA en 2018 ?', 74),
(105, 'Qui est le joueur ayant gagné le plus de Ballons d\'Or ?', 74),
(106, 'Quel club a remporté le plus de Ligues des Champions de l\'UEFA ?', 74),
(107, 'Qui est le meilleur buteur de tous les temps de la Ligue des Champions de l\'UEFA ?', 74),
(108, 'Quel joueur a marqué le but décisif en finale de la Coupe du Monde 2014 ?', 74),
(109, 'Quel est le système d\'exploitation développé par Microsoft ?', 75),
(110, 'Qui est le co-fondateur de Microsoft aux côtés de Bill Gates ?', 75),
(111, 'Quel est le langage de programmation principalement utilisé pour le développement d\'applications web côté serveur, souvent associé à une base de données MySQL ?', 75),
(112, 'Quel est le nom du moteur de recherche le plus utilisé au monde ?', 75),
(113, 'Quelle est la société qui a créé le premier microprocesseur commercial, l\'Intel 4004, en 1971 ?', 75),
(114, 'Quelle est la capitale de la Suisse ?', 76),
(115, 'Quel est le principal produit exporté par la Suisse ?', 76),
(116, 'Quel lac est partagé entre la Suisse, la France et l\'Italie ?', 76),
(117, 'Quel pays a remporté le plus de médailles aux Jeux Olympiques d\'été ?', 77),
(118, 'Quel est le seul joueur de tennis à avoir remporté 20 titres du Grand Chelem ?', 77),
(119, 'Quel est le sport le plus pratiqué au monde ?', 77),
(120, 'Quel athlète détient le record du monde du 100 mètres ?', 77),
(121, 'Quelle équipe de basket-ball a remporté le plus de titres NBA ?', 77);

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
(73, 'Culture générale', 76),
(74, 'Football', 76),
(75, 'Informatique', 76),
(76, 'Suisse', 76),
(77, 'Sport', 76);

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
(80, 'Paris', 99),
(81, 'L\'océan Pacifique', 100),
(82, '7', 101),
(83, 'Jupiter', 102),
(84, 'Antoine de Saint-Exupéry', 103),
(85, 'La France', 104),
(86, 'Lionel Messi', 105),
(87, 'Real Madrid', 106),
(88, 'Cristiano Ronaldo', 107),
(89, 'Mario Götze', 108),
(90, 'Windows', 109),
(91, 'Paul Allen', 110),
(92, 'PHP', 111),
(93, 'Google', 112),
(94, 'Intel', 113),
(95, 'Berne', 114),
(96, 'Les montres', 115),
(97, 'Le lac Léman', 116),
(98, 'Les États-Unis', 117),
(99, 'Roger Federer', 118),
(100, 'Le football', 119),
(101, 'Usain Bolt', 120),
(102, 'Les Boston Celtics', 121);

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
  `utiDroits` varchar(20) NOT NULL DEFAULT 'utilisateur',
  `utiScore` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`idUtilisateurs`, `utiNomUtilisateur`, `utiMotDePasse`, `utiNom`, `utiPrenom`, `utiDroits`, `utiScore`) VALUES
(76, 'Admin', '07480fb9e85b9396af06f006cf1c95024af2531c65fb505cfbd0add1e2f31573', 'Admin', 'Admin', 'admin', 0),
(77, 'alefernandes', '07480fb9e85b9396af06f006cf1c95024af2531c65fb505cfbd0add1e2f31573', 'Alexandre', 'Fernandes', 'utilisateur', 23),
(78, 'kinjano', '07480fb9e85b9396af06f006cf1c95024af2531c65fb505cfbd0add1e2f31573', 'Kinan', 'Jano', 'utilisateur', 29);

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
  MODIFY `idQuestions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT pour la table `t_quizz`
--
ALTER TABLE `t_quizz`
  MODIFY `idQuizz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `t_reponses`
--
ALTER TABLE `t_reponses`
  MODIFY `idReponses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
