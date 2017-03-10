-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 09 Mars 2017 à 11:07
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ascjl`
--

-- --------------------------------------------------------

--
-- Structure de la table `seminaire`
--

CREATE TABLE `seminaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `seminaire`
--
ALTER TABLE `seminaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `seminaire`
--
ALTER TABLE `seminaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;