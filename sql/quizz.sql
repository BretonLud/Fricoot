-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 21 juil. 2021 à 15:52
-- Version du serveur :  10.3.29-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `reponses_1` varchar(250) NOT NULL,
  `reponses_2` varchar(250) NOT NULL,
  `reponses_3` varchar(250) NOT NULL,
  `reponses_4` varchar(250) NOT NULL,
  `reponse_bonne` varchar(250) NOT NULL,
  `points` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `reponses_1`, `reponses_2`, `reponses_3`, `reponses_4`, `reponse_bonne`, `points`) VALUES
(1, 'Capitale de la France', 'Lyon', 'Lure', 'Paris', 'Tours', '3', 20),
(2, 'De quel couleur est le cheval blanc de Henry ', 'Rose', 'Bleu', 'Noir', 'Blanc', '4', 20),
(3, 'J\'aime pas la viande, j\'aime le vélo, j’ai 25 ans, j\'aime la bière, qui suis-je', 'Vincent', 'Manu', 'Floriane', 'Cyril', '1', 99);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(120) NOT NULL,
  `code_pin` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `code_pin`) VALUES
(30, 'laurent', 0),
(31, 'laurent', 666),
(32, 'laurent', 666),
(33, 'laurent', 666);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
