-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 août 2020 à 00:47
-- Version du serveur :  10.4.11-MariaDB
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
-- Base de données : `jstore_ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Talons femmes'),
(2, 'Robes femmes'),
(3, 'Pantalons femmes'),
(4, 'Chemises femmes'),
(5, 'Bon plan femmes'),
(6, 'Woman Wraps & Scarves'),
(7, 'Hijab'),
(8, 'Sacs femmes'),
(9, 'Poignets'),
(10, 'African Dress');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `sexe` int(11) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `adresse_facturation` varchar(255) NOT NULL,
  `adresse_livraison` varchar(255) NOT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `sexe`, `pseudo`, `firstname`, `lastname`, `description`, `adresse_facturation`, `adresse_livraison`, `tel`, `email`, `password`) VALUES
(1, 1, 'Baye', 'MLKµK', '', 'jmjkù', 'malika', 'malika', '997698', 'bayesabarane@gmail.com', '39d4d8878a0988758f8d4b7183007b606bef6504'),
(2, 0, 'Amina', '', '', '', '', '', NULL, 'amina@gmail.com', '3f30db01e2177425634786f3f0c9a920dc57abac'),
(3, 0, 'Nicolas', '', '', '', '', '', NULL, 'nicolas@tmail.com', '0e1700f6866a12406f7a3210633c73e12aa21ebe'),
(6, 0, 'Amina', '', '', '', '', '', NULL, 'amina2018@gmail.com', '5b501be0f1fc10a26b7bc95fdb599158469505bd'),
(7, 0, '', '', '', '', '', '', NULL, NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(8, 0, '', '', '', '', '', '', NULL, NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(9, 0, '', '', '', '', '', '', NULL, NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(10, 0, 'Mara', '', '', '', '', '', NULL, 'mara@tmail.com', 'abfb9c197c72db935a4a3046375d91c48bb835a8'),
(11, 0, '', '', '', '', '', '', NULL, NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(13, 0, '', '', '', '', '', '', NULL, NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(15, 0, 'Nicolas2', '', '', '', '', '', NULL, 'niicolas@tmail.com', '0e1700f6866a12406f7a3210633c73e12aa21ebe'),
(16, 0, 'Nicolas', '', '', '', '', '', NULL, 'nicolas2@tmail.com', '0e1700f6866a12406f7a3210633c73e12aa21ebe'),
(20, 0, 'S@ps', '', '', '', '', '', NULL, 'bayesabarane@tmail.com', '39d4d8878a0988758f8d4b7183007b606bef6504'),
(22, 0, 'S@ps', '', '', '', '', '', NULL, 'bayesabarane@ggmail.com', '39d4d8878a0988758f8d4b7183007b606bef6504'),
(24, 0, 'ibou', '', '', '', '', '', NULL, 'ibou@gmail.com', '39d4d8878a0988758f8d4b7183007b606bef6504'),
(25, 0, 'Ami', '', '', '', '', '', NULL, 'ami@tmail.com', '519902d4d850872cb6d6a04745c6ffea91721740'),
(26, NULL, 'boris', '', '', '', '', '', NULL, 'boris@gmail.com', 'bcf22dfc6fb76b7366b1f1675baf2332a0e6a7ce'),
(27, NULL, 'Saps', '', '', '', '', '', NULL, 'mamae@gmail.com', '99df988b77e60a1718e9e6fecdaf22552047be28');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_customers` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `created-at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `id_customers`, `id_product`, `quantity`, `price`, `created-at`) VALUES
(1, 1, NULL, 1, NULL, '2020-08-11 01:20:13'),
(2, 1, NULL, 1, NULL, '2020-08-11 01:20:13'),
(3, 1, NULL, 1, NULL, '2020-08-11 01:20:13'),
(4, 1, NULL, 1, NULL, '2020-08-11 01:20:13'),
(5, 1, NULL, 1, NULL, '2020-08-11 01:20:13'),
(6, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(7, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(8, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(9, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(10, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(11, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(12, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(13, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(14, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(15, 1, NULL, 1, NULL, '2020-08-11 01:20:14'),
(16, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(17, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(18, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(19, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(20, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(21, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(22, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(23, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(24, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(25, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(26, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(27, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(28, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(29, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(30, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(31, 1, NULL, 1, NULL, '2020-08-11 01:20:15'),
(32, 1, 78, 1, 23.98, '2020-08-12 00:39:14'),
(33, 1, NULL, 1, NULL, '2020-08-12 00:39:14'),
(34, 1, NULL, 1, NULL, '2020-08-12 00:39:14'),
(35, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(36, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(37, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(38, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(39, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(40, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(41, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(42, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(43, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(44, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(45, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(46, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(47, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(48, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(49, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(50, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(51, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(52, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(53, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(54, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(55, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(56, 1, NULL, 1, NULL, '2020-08-12 00:39:15'),
(57, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(58, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(59, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(60, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(61, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(62, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(63, 1, NULL, 1, NULL, '2020-08-12 00:39:16'),
(64, 1, 75, 1, 78.98, '2020-08-12 00:43:53'),
(65, 1, NULL, 1, NULL, '2020-08-12 00:43:53'),
(66, 1, NULL, 1, NULL, '2020-08-12 00:43:53'),
(67, 1, NULL, 1, NULL, '2020-08-12 00:43:53'),
(68, 1, NULL, 1, NULL, '2020-08-12 00:43:53'),
(69, 1, NULL, 1, NULL, '2020-08-12 00:43:53'),
(70, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(71, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(72, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(73, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(74, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(75, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(76, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(77, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(78, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(79, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(80, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(81, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(82, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(83, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(84, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(85, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(86, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(87, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(88, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(89, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(90, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(91, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(92, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(93, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(94, 1, NULL, 1, NULL, '2020-08-12 00:43:54'),
(95, 1, NULL, 1, NULL, '2020-08-12 00:43:55'),
(96, 1, 76, 1, 78.98, '2020-08-12 16:15:46'),
(97, 1, 76, 1, 78.98, '2020-08-12 16:15:46'),
(98, 1, 76, 1, 78.98, '2020-08-12 16:15:46'),
(99, 1, 76, 1, 78.98, '2020-08-12 16:15:46'),
(100, 1, 76, 1, 78.98, '2020-08-12 16:15:47');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `created-at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(150) DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stock`, `created-at`, `image`, `category`) VALUES
(75, 'talons hauts', 'SARAIRIS 2020 mode été plate-forme talons hauts compensés décontracté confortable lumière loisirs chaussures femme sandales femmes chaussures femme', 78.98, 200, '2020-04-16 00:00:00', 'b4.png', 1),
(76, 'sandales compensées', 'DAHOOD sandales compensées pour femme mi-talon été sans lacet boucle dames chaussures artificiel bout ouvert décontracté pompes de mariage femmes Sandalias', 78.98, 200, '2020-03-20 16:56:47', 'b3.png', 1),
(77, 'chaussures à semelles', 'INS loisirs grande taille 43 femmes confortables chaussures à semelles compensées 2020 en Stock été sandales femme plate-forme talons hauts chaussures femme', 23.98, 200, '2020-03-20 16:57:53', 'b1.png', 1),
(78, 'Sandales femmes', 'Sandales femmes nouvelles chaussures d\'été femme grande taille 46 talons sandales pour chaussures à semelles compensées femme chaussures décontractées gladiateur Sandalias Mujer', 23.98, 200, '2020-03-20 16:57:53', 'b2.png', 1),
(79, 'Direct talons bas', 'Usine Direct talons bas sandales femmes bride à la cheville chaussures d\'été femme grande taille 43 bloc talons femmes chaussures 2019 sandales décontractées', 23.89, NULL, '2020-03-22 15:17:02', 'b5.png', 1),
(80, 'sandales plates', 'Femmes 2020 été sandales plates décontractées grande taille tongs femme troupeau métal décoration fermeture éclair cheville Wrap chaussures loisirs chaussures', 67.99, NULL, '2020-03-22 15:17:02', 'b6.png', 1),
(81, 'sandales grande taille', 'Usine Direct femmes sandales grande taille 43 gladiateur sandales pour plage plat d\'été Chaussures Femme Zip livraison directe Chaussures Femme', 89.99, 200, '2020-03-22 15:30:57', 'b7.png', 1),
(82, 'femmes Slingback', '2020 été élégant femmes Slingback sandales blanc noir argent bas talons hauts fermé orteil sandales décontracté bureau dame chaussures de fête', 88.99, 200, '2020-03-22 15:30:57', 'b8.png', 1),
(83, 'Sexy mince talons', 'Sarairis 2020 nouvelle mode grande taille 43 Sexy mince talons hauts d\'été sandales femme chaussures bout pointu mélange couleur chaussures femmes', 34.99, 500, '2020-03-22 15:30:57', 'b9.png', 1),
(84, 'femmes sandales', 'Été femmes sandales bride à la cheville treillis dames épais talons hauts chaussures femme croix bout ouvert couverture talons femme sandales 2020', 56.99, 200, '2020-03-22 15:30:57', 'b10.png', 1),
(85, 'Élégant robe longue', 'Élégant robe longue femmes printemps Plaid imprimer robe de soirée irrégulière Vintage robes dames bouton a-ligne 2020 nouvelle robe de mode', 54.99, 200, '2020-03-24 21:15:47', 'c2.png', 2),
(86, 'robe de bureau Sexy', 'Grande taille 2019 mode été Patchwork pli travail robe de bureau Sexy moulante sans manches femmes décontracté tenue de fête robe de fête', 34.99, 500, '2020-03-24 21:15:47', 'c3.png', 2),
(87, 'Bandage moulante à manches', 'Recherché nouveau femmes Bandage moulante à manches courtes robe de soirée Midi', 56.99, 200, '2020-03-24 21:15:47', 'c4.png', 2),
(88, 'mode femmes Sexy dames', 'Marque nouvelle mode femmes Sexy dames o-cou robe noire pansement moulante à manches longues soirée Cocktail courte Mini robe', 165.99, 200, '2020-03-24 21:15:47', 'c5.png', 2),
(89, 'Robe femmes grande', 'Robe femmes grande taille 3XL 11 couleur Sexy col en v solide paillettes couture brillant Club gaine', 29.99, 100, '2020-03-24 21:15:47', 'c7.png', 2),
(90, 'brillant Club gaine', 'Robe femmes grande taille 3XL 11 couleur Sexy col en v solide paillettes couture brillant Club gaine\r\n4.', 23.8, 20, '2020-03-24 21:20:54', 'c8.png', 2),
(91, 'mode femmes Sexy', 'Marque nouvelle mode femmes Sexy dames o-cou robe noire pansement moulante à manches longues soirée Cocktail courte Mini robe', 23.8, NULL, '2020-03-24 21:23:24', 'c6.png', 2),
(92, 'Robe femmes bureau', 'Robe de bureau femmes élégantes femmes bureau dame Sexy solide col rabattu à manches longues boutons moulante travail robe formelle', 89.99, 100, '2020-03-26 14:57:08', 'c9.png', 2),
(93, 'Robe élégante femmes', 'Bureau dames robe élégante femmes mode jaune à manches courtes grande taille moulante taille haute grandes tailles travail Sexy robe Midi femme', 99.99, 200, '2020-03-26 14:58:48', 'c10.png', 2),
(94, 'cuir pantalon noir', 'Pantalon femmes taille haute PU cuir pantalon noir Leggings femme brillant Stretch crayon pantalon élastique pantalon femme vêtements', 45.9, 150, '2020-04-01 10:36:57', 'p4.png', 3),
(95, 'pantalon large jambe', 'Toplook Neon pantalon large jambe 2019 été femmes taille haute Streetwear Festival pantalon lâche noir vêtements bureau dames ceinture', 78.9, 255, '2020-04-01 10:36:57', 'p2.png', 3),
(96, 'Flare pantalon femme', 'Taille haute décontracté Flare pantalon femme mode nouveau pantalon femmes cheville-longueur femmes vêtements 2018', 67.89, 300, '2020-04-01 10:36:57', 'p3.png', 3),
(97, 'Skinny Slim pantalon', 'Femmes Stretch taille haute Jegging Denim Jeans Skinny Slim pantalon pantalons Leggings décontracté quotidien vêtements Skinny crayon', 78.99, 500, '2020-04-01 10:36:57', 'p1.png', 3),
(98, 'Rayonne tricoté Sexy', 'couleurs de haute qualité crayon femmes pantalon rayonne tricoté Sexy & Club pantalon de pansement vêtements de fête', 67.99, 444, '2020-04-01 10:36:57', 'p5.png', 3),
(99, 'Pantalon élastique', 'Grande taille femmes pantalon élastique taille haute pantalon femmes pantalon Patchwork Capris pantalons de survêtement Joggers mode décontracté femmes vêtements', 56.99, 500, '2020-04-01 10:36:57', 'p6.png', 3),
(100, 'chauve-souris aile', 'Été chauve-souris aile haut femmes avant lacé Blouse dame dentelle à manches courtes tunique dente chemise femme t-shirt blusas mujer nouveau', 56.99, 200, '2020-04-01 10:50:39', 'f1.png', 4),
(101, 'Rayures irrégulières', 'Automne à manches longues col en V chemise à rayures irrégulières femmes décontracté hauts et chemisiers chemise femme camisas mujer femmes blouses', 76.99, 455, '2020-04-01 10:50:39', 'f2.png', 4),
(102, 'Blouse à manches courtes', 'Femmes 2019 été Blouse à manches courtes à bretelles blusas chemise femme chemise élégante femme moulante hauts ShirtDorp', 89.99, 444, '2020-04-01 10:50:39', 'f3.png', 4),
(103, 'vêtements décontracté', '4xl grande taille femmes vêtements décontracté col en v femmes Blouses à manches courtes imprimé Chemise Femme taille ceinture haut pour Femme Chemise Femme', 56.99, 555, '2020-04-01 10:50:39', 'f4.png', 4),
(104, 'Chemises À Carreaux', '2019 Printemps Chemises À Carreaux Femmes Batwing Manches En Mousseline De Soie Blouses décontracté Nuisette Femme hauts grande taille Tartan Blusas Mujer M-4XL', 65.88, 222, '2020-04-01 10:50:39', 'f5.png', 4),
(105, 'Mode Vintage imprimé', 'Mode Vintage imprimé Floral Blouse Chemise 2019 été sans manches en mousseline de soie Blouse Sexy col en V femmes chemises décontractées amples Chemise', 56.99, 444, '2020-04-01 10:50:39', 'f6.png', 4),
(106, 'baskets maille respirant', 'Femmes baskets maille respirant plate-forme talons compensés chaussures de sport d\'été chaussures plates Zapatillas Deportivas Mujer', 299.99, 200, '2020-04-01 11:13:38', 'm2.png', 5),
(107, 'chaussures de course', 'Nouveau élégant femme chaussures de course augmentant 6CM INS haut talon baskets femmes hauteur plate-forme respirant sport marche filles', 188.99, 444, '2020-04-01 11:13:38', 'm3.png', 5),
(108, 'Doux décontracté', 'Doux décontracté épais Sneaker plate-forme été respirant maille chaussures pour femmes plat décontracté jaune chaussures de sport femme Orange 2020', 499.99, 222, '2020-04-01 11:13:38', 'm4.png', 5),
(109, 'baskets légères', 'Mode femmes baskets légères chaussures de sport femmes chaussures respirant confort plate-forme chaussures pour dames Basket Femme formateurs', 666.99, 889, '2020-04-01 11:13:38', 'm5.png', 5),
(110, 'baskets blanc noir', 'Femmes baskets blanc noir chaussures de créateur femme automne hiver grosses baskets mode lumière papa chaussures dames plate-forme chaussures', 788.99, 333, '2020-04-01 11:13:38', 'm6.png', 5),
(111, 'baskets femmes hauteur', 'nouveau élégant femme chaussures de course augmentant 6CM INS haut talon baskets femmes hauteur plate-forme respirant sport marche filles', 568.99, 222, '2020-04-01 11:13:38', 'm7.png', 5),
(112, 'Head Wrap Styles', 'Head Wrap Styles That Can Turn Any Bad Hair Day Into A Day Of Glam', 78.98, 100, '2020-04-16 00:00:00', 'w1.png', 6),
(113, 'African kente head wraps', 'Head Wrap Styles That Can Turn Any Bad Hair Day Into A Day Of Glam', 78.98, 100, '2020-04-16 00:00:00', 'w2.png', 6),
(114, 'afro wraps', 'Head Wrap Styles That Can Turn Any Bad Hair Day Into A Day Of Glam', 78.98, 100, '2020-04-16 00:00:00', 'w3.png', 6),
(115, 'Ankara Collections wraps', 'Head Wrap Styles That Can Turn Any Bad Hair Day Into A Day Of Glam', 78.98, 100, '2020-04-16 00:00:00', 'w4.png', 6),
(116, 'beauty and hair', 'Head Wrap Styles That Can Turn Any Bad Hair Day Into A Day Of Glam', 78.98, 100, '2020-04-16 00:00:00', 'w5.png', 6),
(117, 'Multicolor Scarf', '100% Real Natural Silk Scarf for Women', 38.98, 100, '2020-04-16 00:00:00', 'w6.png', 6),
(118, 'Natural Silk Scarf', '100% Real Natural Silk Scarf for Women - Aqua Blue, 175x55cm', 38.98, 100, '2020-04-16 00:00:00', 'w7.png', 6),
(119, 'Warm Square Scarves', 'Warm Square Scarves for Women - A, China', 38.98, 100, '2020-04-16 00:00:00', 'w8.png', 6),
(120, 'Square Small Neck Scarfs', 'US $1_85 _Square Silk Scarf Women Fashion Print Small Neck Scarfs Office Lady Hair Band Foulard Hand Kerchief Female Bandana Shawl 2020_Women', 38.98, 100, '2020-04-16 00:00:00', 'w9.png', 6),
(121, 'Long Shawl Hijab', 'Basic Bubble Chiffon Long Shawl Hijab Scarf', 38.98, 100, '2020-04-16 00:00:00', 'w10.png', 6),
(122, 'Robe Muslim flour', 'Robe Muslim flour', 48.98, 100, '2020-04-16 00:00:00', 'h1.png', 7),
(123, 'Robe Muslim ', 'Robe Muslim flour Color grey', 48.98, 100, '2020-04-16 00:00:00', 'h2.png', 7),
(124, 'Muslim Robe', 'Muslim Robe color bordo', 48.98, 100, '2020-04-16 00:00:00', 'h3.png', 7),
(125, 'BellanBlue women fashion ', 'BellanBlue women fashion styli', 48.98, 100, '2020-04-16 00:00:00', 'h4.png', 7),
(126, 'BellanPink women fashion', 'BellanPink women fashion Styli', 48.98, 100, '2020-04-16 00:00:00', 'h5.png', 7),
(127, 'BellanWight women fashion', 'BellanPink women fashion Modest & chik', 48.98, 100, '2020-04-16 00:00:00', 'h6.png', 7),
(128, 'Neva Style Muslim Dress', 'Neva Style Muslim Dress Origin Turk', 48.98, 100, '2020-04-16 00:00:00', 'h7.png', 7),
(129, 'Mark Kombin Muslim Dress', 'Mark Kombin Muslim Dress Origin Turk', 48.98, 100, '2020-04-16 00:00:00', 'h8.png', 7),
(130, 'Tesettür İstanbul Muslim Dress', 'Tesettür İstanbul Muslim Dress', 48.98, 100, '2020-04-16 00:00:00', 'h9.png', 7),
(131, 'Tesettür Kombin Muslim Dress', 'Tesettür Kombin Muslim Dress Origin Turk', 48.98, 100, '2020-04-16 00:00:00', 'h10.png', 7),
(132, 'Sac 1', 'Robe Muslim flour', 48.98, 100, '2020-04-16 00:00:00', 's1.png', 8),
(133, 'Sac 2', 'Alexander Mcqueen Spring 2020 Fashion', 48.98, 100, '2020-04-16 00:00:00', 's2.png', 8),
(134, 'Sac 3', 'Hairball women luxury shoulder handbags', 48.98, 100, '2020-04-16 00:00:00', 's3.png', 8),
(135, 'Sac 4', 'Numéro Un Mini - Terre de Sienne - Polène', 48.98, 100, '2020-04-16 00:00:00', 's4.png', 8),
(136, 'Sac 5', 'Sacs de Designers pour Femme _ Simons Canada', 48.98, 100, '2020-04-16 00:00:00', 's5.png', 8),
(137, 'Sac 6', 'Sac Rouge', 48.98, 100, '2020-04-16 00:00:00', 's6.png', 8),
(138, 'Sac 7', 'sac noir', 48.98, 100, '2020-04-16 00:00:00', 's7.png', 8),
(139, 'Sac 8', 'Women bags', 48.98, 100, '2020-04-16 00:00:00', 's8.png', 8),
(140, 'Montre argenté', 'Le tourbillon, nouveau terrain de jeu de l horlogerie féminine', 48.98, 100, '2020-04-16 00:00:00', 't1.png', 9),
(141, 'Gold Dial Wristwatch', 'Leather Casual Gold Dial Wristwatch', 48.98, 100, '2020-04-16 00:00:00', 't2.png', 9),
(142, 'Magnet Quartz Wristwatch', 'Magnet Buckle Simple Strap Quartz Wristwatch Woman 2020 Summer', 48.98, 100, '2020-04-16 00:00:00', 't3.png', 9),
(143, 'Montre de Luxe Femme', 'Montre de Luxe Femme', 48.98, 100, '2020-04-16 00:00:00', 't4.png', 9),
(144, 'MONTRE EMIR WATCH ', 'MONTRE EMIR WATCH _CREATIVE_', 48.98, 100, '2020-04-16 00:00:00', 't5.png', 9),
(145, 'Olivia Burton Under the Sea Collection ?✨', 'Olivia Burton Under the Sea Collection ?✨', 48.98, 100, '2020-04-16 00:00:00', 't6.png', 9),
(146, 'SK Fashion Luxury 2019 Female Clock relogio', 'SK Fashion Luxury Brand Women Quartz Watch Creative Thin Ladies Wrist Watch For Montre Femme 2019 Female Clock relogio feminino', 48.98, 100, '2020-04-16 00:00:00', 't7.png', 9),
(147, 'Watch Montre Femme Reloj Mujer', '2019 Relogio Feminino Watch Women Casual Quartz Leather Band New Strap Watch Analog Wrist Watch Montre Femme Reloj Mujer', 48.98, 100, '2020-04-16 00:00:00', 't8.png', 9),
(148, 'Clock relogio feminino montre femme', 'Luxury Luminous Women Watches Starry Sky Magnetic Female Wristwatch Waterproof Rhinestone Clock relogio feminino montre femme _ Aalamey Shop', 48.98, 100, '2020-04-16 00:00:00', 't9.png', 9),
(149, 'Personality Woman Watch', 'With Calendar Personality Woman Watch', 48.98, 100, '2020-04-16 00:00:00', 't10.png', 9),
(150, 'hexnut bracelet', 'string & hexnut bracelet', 48.98, 100, '2020-04-16 00:00:00', 'n1.png', 9),
(151, 'Bracelet Laurier - Or Rose', 'Bracelet Laurier - Or Rose', 48.98, 100, '2020-04-16 00:00:00', 'n2.png', 9),
(152, 'Beaded Word Bracelets', 'DIY Adjustable Beaded Word Bracelets', 48.98, 100, '2020-04-16 00:00:00', 'n3.png', 9),
(153, 'Green Glass Wire Wrapped Bracelet', 'Green Glass Wire Wrapped Bracelet With Swarovski Crystals', 48.98, 100, '2020-04-16 00:00:00', 'n4.png', 9),
(154, 'Heart Forever Love Bracelet', 'Heart Forever Love Charm Bracelet - Buy Today 15% Off - Bizzoby', 48.98, 100, '2020-04-16 00:00:00', 'n5.png', 9),
(155, 'Seed Bead Bracelets ', 'How to Make Super Trendy Seed Bead Bracelets in Minutes', 48.98, 100, '2020-04-16 00:00:00', 'n6.png', 9),
(156, 'Knotted Round Shape Bracelet', 'Knotted Round Shape Bracelet Set', 48.98, 100, '2020-04-16 00:00:00', 'n7.png', 9),
(157, 'Spring Fling 2020 Jewelry', 'Spring Fling 2020 30% Off Jewelry Sale _ Spilled Glitter', 48.98, 100, '2020-04-16 00:00:00', 'n8.png', 9),
(158, 'Multi Beaded Bracelet', 'The Best Part Light Green Multi Beaded Bracelet Set', 48.98, 100, '2020-04-16 00:00:00', 'n9.png', 9),
(159, 'African Wear', 'Latest Ankara Styles by Roselyn @roselynfelli - African Wear', 48.98, 100, '2020-04-16 00:00:00', 'a1.png', 10),
(160, 'African Wear', 'Latest Ankara Styles by Roselyn @roselynfelli - African Wear', 48.98, 100, '2020-04-16 00:00:00', 'a2.png', 10),
(161, 'African clothing', 'African clothing and Ankara dresses for women all over the world', 48.98, 100, '2020-04-16 00:00:00', 'a3.png', 10),
(162, 'Ankara Collections', 'Ankara Collections Ankara Style', 48.98, 100, '2020-04-16 00:00:00', 'a4.png', 10),
(163, 'Wax African Dress', 'Wax African Dress', 48.98, 100, '2020-04-16 00:00:00', 'a5.png', 10),
(164, 'Wax African Dress', 'Wax African Dress Green Color', 48.98, 100, '2020-04-16 00:00:00', 'a6.png', 10),
(165, 'Wax African Dress', 'Wax African Dress Color Blue', 48.98, 100, '2020-04-16 00:00:00', 'a7.png', 10),
(166, 'Nigerian Women Gele Styles', 'Nigerian Women Gele Styles', 48.98, 100, '2020-04-16 00:00:00', 'a8.png', 10),
(167, 'African Wear 2020', ' Latest Ankara Styles and Design (2020)', 48.98, 100, '2020-04-16 00:00:00', 'a9.png', 10),
(168, 'Winter Party Dress Outfits New Arrivals', 'Winter Party Dress Outfits New Arrivals', 48.98, 100, '2020-04-16 00:00:00', 'a10.png', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customers_index` (`id_customers`),
  ADD KEY `id_product_index` (`id_product`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_index` (`category`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_customers`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
