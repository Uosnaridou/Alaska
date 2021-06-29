-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 avr. 2019 à 15:45
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `date`, `categorie`, `message`) VALUES
(1, 'Donec eu.', '2019-02-18', 'Jour', 'Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra modum, quam Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam mortalis, inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui paulatim eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes, adfectati regni vel artium nefandarum calumnias insontibus adfligebant.'),
(2, 'In mi.', '2019-02-18', 'Nuit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec vestibulum turpis. Quisque vulputate porta odio eget molestie. Integer ac nisi porta quam suscipit viverra. Nulla velit ipsum, mattis at dignissim ac, venenatis id enim. Mauris at auctor lacus. Quisque sed enim elit. Aliquam vel suscipit sapien. Donec pharetra mauris quis ligula mattis sagittis.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `signalement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_article`, `pseudo`, `commentaire`, `signalement`) VALUES
(1, 1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus ex at efficitur ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur eleifend eros sit amet lacus tristique, quis luctus nunc rhoncus. Etiam vel interdum ex. Quisque elit tortor, facilisis et ullamcorper ac, commodo ut mi.', 14),
(2, 1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue gravida ligula ut rhoncus. Nunc tempus mollis faucibus. Integer ut accumsan diam. Maecenas in urna in ligula aliquam euismod. Pellentesque et quam ut lectus aliquam hendrerit', 2),
(3, 2, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo, velit ut aliquet tincidunt, neque nulla dignissim lectus, quis suscipit lorem massa et massa.', 10),
(4, 2, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel purus in est facilisis pharetra quis sed ipsum. Nullam a lobortis dolor, at fringilla eros. Donec vel elit eu sapien elementum consectetur. ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '89e495e7941cf9e40e6980d14a16bf023ccd4c91');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
