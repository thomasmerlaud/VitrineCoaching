-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 08 mai 2022 à 18:32
-- Version du serveur :  5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `id_membre` int(3) DEFAULT NULL,
  `montant` int(3) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detail_commande`
--

CREATE TABLE `detail_commande` (
  `id_details_commande` int(3) NOT NULL,
  `id_commande` int(3) DEFAULT NULL,
  `id_produit` int(3) DEFAULT NULL,
  `quantite` int(3) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detail_commande`
--

INSERT INTO `detail_commande` (`id_details_commande`, `id_commande`, `id_produit`, `quantite`, `prix`) VALUES
(1, NULL, 5, 1, 12),
(2, NULL, 5, 1, 12),
(3, NULL, 5, 1, 12),
(4, NULL, 5, 1, 12),
(5, NULL, 5, 1, 12),
(6, NULL, 5, 2, 12),
(7, NULL, 5, 1, 12),
(8, NULL, 5, 1, 12),
(9, NULL, 5, 1, 12),
(10, NULL, 5, 1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` varchar(15) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(3, 'zazie', 'zazie', 'zizizeezez', 'zeezzee', 'ezzeez@rererre', 'f', 'zzrrzrzz', 12221, 'ETTETETET', 0),
(4, 'admin', 'admin', 'admin', 'admin', 'nolan@gmail.com', 'm', 'admin', 0, 'admin', 0),
(5, 'nolancx', 'cx', 'nol', 'loll', 'nolan.cacheux@gmail.com', 'm', 'lollo', 12222, '12212121', 0),
(6, 'test', 'AfhKK@HG123', 'merlaud', 'thomas', 'thomasmerlaud@gmail.com', 'm', 'poitiers', 86000, '42 rue des potiers', 0),
(7, 'thomas33333', 'gdgVV667@@', 'Merlaud', 'Thomas', 'merlaud@gmail.com', 'm', 'poitiers', 36300, '45 Rue de Saint-Aigny', 0),
(8, 'mmm', 'GGGHHHgggg444#', 'Merlaud', 'Thomas', 'naturabrenn@gmail.com', 'm', 'poitiers', 36300, '45 Rue de Saint-Aigny', 0),
(9, 'test1', 'mxN4KDVUjSx339D', 'Merlo', 'Antoine', 'antoine.32Gh@gmail.com', 'm', 'Leblanc', 37300, '45 rue des potiers', 0),
(10, 'test2', 'mxN4KDVUjSx339D', 'nomtest', 'prenomtest', 'test@gmail.com', 'm', 'Lille', 59800, 'appt 301', 0),
(11, 'Henri22', 'ZKG3KfcgQ6FrHta', 'Boiron', 'Henri', 'henriboiron@gmail.com', 'm', 'Limoges', 87000, 'rue de la Poste', 0),
(12, 'Nathan_2', 'ZKG3KfcgQ6FrHta', 'Bibo', 'Nathan', 'nath.bibo@gmail.com', 'm', 'Bordeaux', 65000, 'rue Pasteur', 0),
(13, 'Nath45', 'ZKG3KfcgQ6FrHta', 'Bertrand', 'Nathalie', 'nath.bet@gmail.com', 'f', 'Cannes', 43000, '12 rue des Pigeons', 0),
(14, 'Fabi00', 'ZKG3KfcgQ6FrHta', 'Fabien', 'Kelowski', 'fab.kel@gmail.com', 'm', 'Paris', 93000, 'rue des Lumi&egrave;res', 0),
(15, 'LoloGYm', 'ZKG3KfcgQ6FrHta', 'Salba', 'Laura', 'laura.sab@gmail.com', 'f', 'Poitiers', 86000, '22 rue du Stade', 0),
(16, 'tetet', 'mxN4KDVUjSx339D', 'aiy', 'dkzjbe', 'dzvh@gmail.com', 'm', 'Lille', 37000, 'zfgevifevzfeizv', 0),
(17, 'coucou', 'mxN4KDVUjSx339D', 'fzrfa', 'fafzefzae', 'fezaaezfa@gmail.com', 'm', 'Lille', 90000, 'odihz', 0),
(18, 'Michel22', 'M7MtSuwPkA2caPh', 'Fibo', 'Michel', 'mich.fib@gmail.com', 'm', 'Cannes', 89000, '45 rue de Bois', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `description` text NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `taille` varchar(5) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL,
  `reference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `description`, `categorie`, `titre`, `couleur`, `taille`, `photo`, `prix`, `stock`, `reference`) VALUES
(5, 'Whey Isolate ', 'Compléments', 'Whey Isolate', 'Orange', '1kg', '/site/photo/whey.png', 12, 11, 'ABK8'),
(6, 'Acides aminés BCAA', 'Compléments', 'BCAA', 'Orange', '500g', '/site/photo/bcaa.png', 18, 23, 'EAA900'),
(7, 'Créatine creapure', 'Compléments ', 'Créatine', 'Orange', '1kg', '/site/photo/crea.png', 20, 31, 'CREA45B2'),
(9, 'Oméga 3 - Huile de poisson', 'Compléments', 'Oméga 3', 'Orange', '90u', '/site/photo/oil.png', 16, 22, 'FISHOIL90'),
(10, 'Casquette 100% coton bio. Parfait pour évacuer la transpiration !', 'Vêtements', 'Casquette NOMA Noire', '', '', '/site/photo/casquettenoire.png', 12, 34, 'CASQ88'),
(11, 'Casquette 100% coton bio. Parfait pour évacuer votre transpiration !', 'Vêtements', 'Casquette NOMA Blanche', 'Blanc', 'S', '/site/photo/casquetteblanc.png', 12, 22, 'CASQ98'),
(12, 'T-shirt 100% coton bio. Parfait absorber votre transpiration !', 'Vêtements', 'T-shirt NOMA Gris', 'Gris', 'M', '/site/photo/tshirtgris.png', 23, 21, 'TEE45'),
(13, 'T-shirt 100% coton bio. Parfait pour absorber votre transpiration !', 'Vêtements', 'T-shirt NOMA BW', 'BW', 'M', '/site/photo/tshirtblanc.png', 23, 12, 'TEE09'),
(14, 'Shaker en plastique 100% recyclé', 'Accessoires', 'Shaker NOMA', 'Noir', 'U', '/site/photo/shaker.png', 10, 22, 'SHAK77');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `detail_commande`
--
ALTER TABLE `detail_commande`
  ADD PRIMARY KEY (`id_details_commande`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detail_commande`
--
ALTER TABLE `detail_commande`
  MODIFY `id_details_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `membre` (`id_membre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
