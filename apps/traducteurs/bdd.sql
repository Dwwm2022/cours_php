-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 mai 2022 à 10:03
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
(5, 'toto', 'titi', 25, '060000000', 'toto2@gmail.com', 'cathy.jpg', ' it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-05-04 13:16:58', 3),
(6, 'Cathy', 'mimi', 24, '0600000000', 'cathy@yahoo.fr', 'simone.jpg', ' it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-05-04 21:56:09', 2),
(7, 'Raphael', 'Gregoire', 48, '06.00.00.00.00', 'raphael@gmail.com', 'raphael.png', ' it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-05-05 21:32:45', 4),
(8, 'Antony', 'Louis', 25, '00 00 00 00 00', 'louis@gmail.com', 'antony.png', ' it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-05-05 21:32:45', 1),
(9, 'Simon', 'Antoine', 45, '0600000000', 'simn@gmail.com', 'simon.png', ' it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-05-07 14:43:14', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `pass`, `adresse`, `role`, `created`) VALUES
(1, 'David', 'Roger', 'user@gmail.com', '$2y$10$Eg6ue6jqqFzf0z7dgAALmeqXk.5oArhg.14ZGnwD9bqzgcBdxUS8y', 'Paris', 0, '2022-05-04 22:40:59'),
(2, 'Dupond', 'Thomas', 'admin@gmail.com', '$2y$10$VxEJCNsiIwWJHaL7fFrGb.FDNPdlxR8AVpTPSXmhbPGngTUinwLKG', 'Créteil', 1, '2022-05-04 22:40:59'),
(5, 'PEHOUNDE', 'ADIMI', 'adiminico@yahoo.fr', '$2y$10$/c1qMtlLWH2pgjSkWtWBTe3PCNMpWnr73IC4CiLPdyYaasjNwVhma', '70 Rue Bernard Palissy', 1, '2022-05-05 21:14:31');

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
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
