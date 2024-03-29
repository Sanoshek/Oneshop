-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 09 juil. 2019 à 17:35
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `type`, `description`) VALUES
(2, 'Vêtements', 'Ce sont des vêtements');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_clients` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_clients`, `name`, `email`, `password`, `adress`, `tel`) VALUES
(8, 'Maxime', 'm.drelon1@groupeonepoint.com', 'Test', '14 rue des Glycines', '0767720433'),
(14, 'Thomas', 't.raveneau@groupeonepoint.com', '123', '59 route des fusillés de la résistance', '0655658547'),
(15, 'Odilon', 'o.hema@groupeonepoint.com', '123', '58 rue des fleurs', '0987767');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `mode` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `command_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `name`, `price`, `description`, `photo`, `category_id`) VALUES
(11, 'Pull', 25, 'The pull you need.', 'goodies/hoodieone.png', 2),
(12, 'T-shirt One', 12, 'A simple t-shirt.', 'goodies/tshirtone.png', 2),
(13, 'Mug', 17, 'A nice onepoint mug.', 'goodies/mugone.png', 2),
(14, 'Mugs', 7, 'A 3 mug pack.', 'goodies/mug.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `product_command`
--

CREATE TABLE `product_command` (
  `id_command` int(11) NOT NULL,
  `clients_id_clients` int(11) NOT NULL,
  `produit_id_product` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product_command`
--

INSERT INTO `product_command` (`id_command`, `clients_id_clients`, `produit_id_product`, `quantity`, `date`) VALUES
(4, 14, '11;12', '15;16', '2019-07-09'),
(19, 14, '11;12', '1;1', '2019-07-09'),
(20, 14, '11;12', '1;1', '2019-07-09'),
(21, 14, '12', '1', '2019-07-09');

-- --------------------------------------------------------

--
-- Structure de la table `shipping`
--

CREATE TABLE `shipping` (
  `id_livraison` int(11) NOT NULL,
  `mode` varchar(45) NOT NULL,
  `shipping_date` datetime NOT NULL,
  `payment_id_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_clients`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`,`command_id`),
  ADD KEY `fk_paiement_produit_commande1_idx` (`command_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_category_id_product_idx` (`category_id`);

--
-- Index pour la table `product_command`
--
ALTER TABLE `product_command`
  ADD PRIMARY KEY (`id_command`,`clients_id_clients`,`produit_id_product`),
  ADD KEY `fk_clients_has_produit_clients` (`clients_id_clients`),
  ADD KEY `fk_clients_has_produit_produit1` (`produit_id_product`);

--
-- Index pour la table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_livraison`,`payment_id_payment`),
  ADD KEY `fk_livraison_paiement1_idx` (`payment_id_payment`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_clients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `product_command`
--
ALTER TABLE `product_command`
  MODIFY `id_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id_livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_paiement_produit_commande1` FOREIGN KEY (`command_id`) REFERENCES `product_command` (`id_command`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product_command`
--
ALTER TABLE `product_command`
  ADD CONSTRAINT `fk_clients_has_produit_clients` FOREIGN KEY (`clients_id_clients`) REFERENCES `clients` (`id_clients`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `fk_livraison_paiement1` FOREIGN KEY (`payment_id_payment`) REFERENCES `payment` (`id_payment`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
