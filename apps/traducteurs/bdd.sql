-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 04 mai 2022 à 11:23
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `drapeau` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `libelle`, `drapeau`, `created`) VALUES
(1, 'français', 'fr.png', '2021-03-10 12:26:32'),
(2, 'anglais', 'en.png', '2021-03-10 12:26:32'),
(3, 'espagnol', 'es.png', '2021-03-12 10:30:12'),
(4, 'allemand', 'de.png', '2022-05-03 08:06:27'),
(5, 'autres', 'autres.png', '2022-05-03 08:06:27');

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id_p` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `id_langue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id_p`, `nom`, `prenom`, `age`, `telephone`, `email`, `image`, `description`, `created`, `id_langue`) VALUES
(1, 'Dupond', 'Thomas', 25, '06.00.00.00.00', 'dupond@gmail.com', 'thomas.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '2022-05-03 12:16:13', 3),
(2, 'Peter', 'Simon', 38, '00 00 00 00 00', 'peter@gmail.uk', 'peter.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '2022-05-03 12:16:13', 2),
(3, 'toto', 'titi', 25, '0600000000', 'toto@gmail.com', 'eloi.png', 'dfjlvhjedhvilerlhirv pij be rbhe', '2022-05-04 09:20:55', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `fk` (`id_langue`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `fk` FOREIGN KEY (`id_langue`) REFERENCES `langues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
