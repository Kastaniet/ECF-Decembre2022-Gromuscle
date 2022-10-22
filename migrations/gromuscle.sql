-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 oct. 2022 à 00:34
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gromuscle`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `rue` text NOT NULL,
  `codePostal` varchar(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `clientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `rue`, `codePostal`, `ville`, `clientId`) VALUES
(64, '965 Parker Loop', '59000', 'Lille', 3),
(169, '8973 Wuckert Coves Apt. 872', '53000', 'Laval', 4),
(258, '595 Timothy Landing', '45000', 'Orléans', 7),
(501, '38 avenue des fleurs', '75010', 'Paris 10', 2),
(503, '150 rue des pépins', '75014', 'Paris 14eme', 2),
(504, '14 rue cargo', '59140', 'Dunkerque', 1),
(505, '14 rue cargo', '13250', 'Laval', 4),
(506, '38 avenue des fleurs', '69000', 'Lyon', 1069),
(512, '150 rue des pépins', '29200', 'Brest', 1072);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `short_desciption` varchar(255) NOT NULL,
  `full_description` text NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `dpo` varchar(50) NOT NULL,
  `technical_contact` varchar(50) NOT NULL,
  `commercial_contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `email`, `active`, `short_desciption`, `full_description`, `logo_url`, `url`, `dpo`, `technical_contact`, `commercial_contact`) VALUES
(1, 'Dunkerque', 'gkoepp@example.org', 1, 'Salle de dunkerque', 'Integer interdum vitae ex eget cursus. Donec erat quam, semper sit amet nisl ac, pharetra hendrerit lorem. Sed malesuada dolor justo, vitae porttitor metus tempus id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin congue sapien ultricies metus eleifend porta. Phasellus maximus, felis ac blandit ornare, lacus felis vestibulum sem, ac dapibus urna diam eget enim. Maecenas quis dictum odio. Aliquam sed fermentum massa. Fusce eu lorem quis purus rhoncus convallis. Mauris ac convallis nisl, nec maximus ipsum. Proin molestie ornare tortor, et dictum purus pulvinar id. Suspendisse ultricies commodo turpis, ac venenatis odio elementum eget. ', '', '', '', 'gkoepp@example.org', ''),
(2, 'Paris', 'nrunolfsdottir@example.org', 1, 'Salle de Paris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quam posuere, pharetra tortor a, finibus tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam eget metus sed ipsum sollicitudin imperdiet. Etiam consectetur enim eu velit luctus accumsan. Cras in elit ut nibh tristique aliquam. Curabitur sodales leo in felis viverra sodales. Etiam semper tortor vitae ligula scelerisque, at ultricies ante aliquet. Sed augue nunc, vestibulum quis nunc in, ultrices congue felis. Suspendisse in imperdiet mauris. ', '', '', '', 'nrunolfsdottir@example.org', ''),
(3, 'Lille', 'lemuel67@example.org', 1, 'Salle de Lille', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quam posuere, pharetra tortor a, finibus tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam eget metus sed ipsum sollicitudin imperdiet. Etiam consectetur enim eu velit luctus accumsan. Cras in elit ut nibh tristique aliquam. Curabitur sodales leo in felis viverra sodales. Etiam semper tortor vitae ligula scelerisque, at ultricies ante aliquet. Sed augue nunc, vestibulum quis nunc in, ultrices congue felis. Suspendisse in imperdiet mauris. ', '', '', '', 'lemuel67@example.org', ''),
(4, 'Laval', 'araceli01@example.com', 1, 'Salle de Laval', 'Integer interdum vitae ex eget cursus. Donec erat quam, semper sit amet nisl ac, pharetra hendrerit lorem. Sed malesuada dolor justo, vitae porttitor metus tempus id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin congue sapien ultricies metus eleifend porta. Phasellus maximus, felis ac blandit ornare, lacus felis vestibulum sem, ac dapibus urna diam eget enim. Maecenas quis dictum odio. Aliquam sed fermentum massa. Fusce eu lorem quis purus rhoncus convallis. Mauris ac convallis nisl, nec maximus ipsum. Proin molestie ornare tortor, et dictum purus pulvinar id. Suspendisse ultricies commodo turpis, ac venenatis odio elementum eget. ', '', '', '', 'araceli01@example.com', ''),
(5, 'Marseille', 'oupton@example.org', 0, 'Salle de Marseille', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quam posuere, pharetra tortor a, finibus tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam eget metus sed ipsum sollicitudin imperdiet. Etiam consectetur enim eu velit luctus accumsan. Cras in elit ut nibh tristique aliquam. Curabitur sodales leo in felis viverra sodales. Etiam semper tortor vitae ligula scelerisque, at ultricies ante aliquet. Sed augue nunc, vestibulum quis nunc in, ultrices congue felis. Suspendisse in imperdiet mauris. ', '', '', '', 'oupton@example.org', ''),
(6, 'Metz', 'fadel.tamara@example.org', 0, 'Salle de Metz', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quam posuere, pharetra tortor a, finibus tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam eget metus sed ipsum sollicitudin imperdiet. Etiam consectetur enim eu velit luctus accumsan. Cras in elit ut nibh tristique aliquam. Curabitur sodales leo in felis viverra sodales. Etiam semper tortor vitae ligula scelerisque, at ultricies ante aliquet. Sed augue nunc, vestibulum quis nunc in, ultrices congue felis. Suspendisse in imperdiet mauris. ', '', '', '', 'fadel.tamara@example.org', ''),
(7, 'Orléans', 'kari96@example.org', 0, 'Salle d\'Orléans', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id quam posuere, pharetra tortor a, finibus tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam eget metus sed ipsum sollicitudin imperdiet. Etiam consectetur enim eu velit luctus accumsan. Cras in elit ut nibh tristique aliquam. Curabitur sodales leo in felis viverra sodales. Etiam semper tortor vitae ligula scelerisque, at ultricies ante aliquet. Sed augue nunc, vestibulum quis nunc in, ultrices congue felis. Suspendisse in imperdiet mauris. ', '', '', '', 'kari96@example.org', ''),
(1069, 'Lyon', 'louis@machin.com', 1, 'Salle de Lyon', '', '', '', '', '', ''),
(1072, 'Brest', 'machin@gmail.com', 0, 'Salle de Orléans', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `email`
--

INSERT INTO `email` (`id`, `sujet`, `contenu`) VALUES
(1, 'Email de confirmation', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor rhoncus felis, sed consequat ipsum vehicula venenatis. Donec ultricies mattis luctus. Quisque vitae tincidunt arcu, vitae bibendum justo. Quisque vel tincidunt elit. Fusce efficitur, lectus at varius scelerisque, sem arcu viverra magna, iaculis elementum risus nunc ut libero. Sed non vehicula erat. Nullam dictum fringilla euismod. Sed interdum vulputate nisi, vel scelerisque ipsum vulputate a. Aliquam tincidunt mi eu erat ultrices, a molestie est euismod. Mauris porta vitae turpis ac porttitor. Phasellus consequat accumsan pulvinar. Integer sollicitudin lacus viverra ligula placerat, ut consectetur tortor pretium. Proin eget fringilla nulla. Pellentesque porttitor et sapien eu laoreet.\r\n\r\nNullam suscipit lacus id nisi tristique luctus. In posuere pellentesque nibh ac placerat. Pellentesque magna ligula, laoreet ornare dui eu, fringilla tempus lacus. Donec volutpat libero vitae velit viverra, ultricies luctus velit ultrices. Nunc non suscipit eros. Mauris tempus urna a dolor tincidunt, eget finibus mi feugiat. Praesent sed mi congue, dapibus urna id, condimentum eros. ');

-- --------------------------------------------------------

--
-- Structure de la table `installation`
--

CREATE TABLE `installation` (
  `idProduit` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `installation`
--

INSERT INTO `installation` (`idProduit`, `idClient`, `date`) VALUES
(1, 1, '2022-10-22'),
(2, 4, '2022-10-22'),
(3, 4, '2022-10-22'),
(4, 2, '2022-10-22'),
(5, 3, '2022-10-22'),
(6, 5, '2022-10-22'),
(7, 5, '2022-10-22'),
(410, 1069, '2022-10-22'),
(412, 1072, '2022-10-22');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `members_read` int(11) NOT NULL DEFAULT 0,
  `members_write` int(11) NOT NULL DEFAULT 0,
  `members_add` int(11) NOT NULL DEFAULT 0,
  `members_product_add` int(11) NOT NULL DEFAULT 0,
  `members_payment_schedule_read` int(11) NOT NULL DEFAULT 0,
  `members_statistiques_read` int(11) NOT NULL DEFAULT 0,
  `members_subscription_read` int(11) NOT NULL DEFAULT 0,
  `payment_schedule_read` int(11) NOT NULL DEFAULT 0,
  `payment_schedule_write` int(11) NOT NULL DEFAULT 0,
  `payment_day_read` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `client_id`, `members_read`, `members_write`, `members_add`, `members_product_add`, `members_payment_schedule_read`, `members_statistiques_read`, `members_subscription_read`, `payment_schedule_read`, `payment_schedule_write`, `payment_day_read`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(410, 1069, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(412, 1072, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `roles`) VALUES
(7, 'Kevin', 'Machin', 'kevin.pellissard@gmail.com', '5070da9022cc3a82869511c63c48d87d38e36eed9e03c94c619680a0cdeffea0', 'admin'),
(23, 'Louis', 'Machin', 'Louis@machin.com', '9293e16b8e01ad50427ce2706a3389780559c1ccfe83ddb5a7fa27ff42dfcb5b', 'user'),
(24, 'Jean-baptiste', 'Lavisse', 'Jean-baptiste@lavisse.com', 'b1fcfc60c58f89562d2254c0c461dd5632f4e3d6af3032cf46558f400910e7b2', 'technicien');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clientId_adresse` (`clientId`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `installation`
--
ALTER TABLE `installation`
  ADD PRIMARY KEY (`idProduit`,`idClient`),
  ADD UNIQUE KEY `fk_idProduit` (`idProduit`),
  ADD KEY `fk_idClient` (`idClient`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_id` (`id`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1073;

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `fk_clientId_adresse` FOREIGN KEY (`clientId`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `installation`
--
ALTER TABLE `installation`
  ADD CONSTRAINT `fk_idClient` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idProduit` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
