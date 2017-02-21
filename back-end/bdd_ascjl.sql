-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 21 Février 2017 à 16:06
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ascjl`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `civilite` varchar(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sejour`
--

CREATE TABLE `sejour` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sejour`
--

INSERT INTO `sejour` (`id`, `nom`, `prenom`, `age`, `sexe`) VALUES
(1, 'HAMDAOUI', 'Assia', 16, 'feminin'),
(2, 'HAMDAOUI', 'Assia', 16, 'feminin'),
(3, 'HAMDAOUI', 'Assia', 16, 'feminin'),
(4, 'HAMDAOUI', 'Assia', 16, 'feminin'),
(5, 'HAM', 'Ass', 16, 'feminin'),
(6, 'HAAA', 'Ahah', 15, 'feminin'),
(7, 'KAL', 'Assia', 12, 'feminin'),
(8, 'ASS', 'Ass', 12, 'feminin'),
(9, 'A', 'A', 12, 'feminin'),
(10, 'KABYLE', 'Nehneh', 12, 'feminin'),
(11, 'BIP', 'Bop', 12, 'feminin'),
(12, 'TUT', 'Tit', 19, 'feminin'),
(13, 'TRUC', 'Bidule', 20, 'feminin'),
(14, 'TRUC', 'Bidule', 21, 'masculin'),
(15, 'BOB', 'L\'éponge', 2, 'feminin'),
(16, 'BOB', 'L\'éponge', 12, 'feminin'),
(17, 'A', 'A', 12, 'masculin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sejour`
--
ALTER TABLE `sejour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;