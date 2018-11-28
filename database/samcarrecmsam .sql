-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 28 nov. 2018 à 09:41
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `samcarrecmsam`
--

-- --------------------------------------------------------

--
-- Structure de la table `faience`
--

DROP TABLE IF EXISTS `faience`;
CREATE TABLE IF NOT EXISTS `faience` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `url_faience` longtext NOT NULL,
  `prix_faience` float NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faience`
--

INSERT INTO `faience` (`id`, `url_faience`, `prix_faience`) VALUES
(1, '/images/carrelage/mural/0005.png', 10),
(2, '/images/carrelage/mural/0007.png', 10),
(3, '/images/carrelage/mural/0009.png', 10),
(4, '/images/carrelage/mural/0010.png', 10),
(5, '/images/carrelage/mural/0011.png', 10),
(6, '/images/carrelage/mural/0012.png', 10),
(7, '/images/carrelage/mural/00121.png', 10),
(8, '/images/carrelage/mural/0013.png', 10),
(9, '/images/carrelage/mural/0014.png', 10),
(10, '/images/carrelage/mural/0015.png', 10),
(11, '/images/carrelage/mural/00153.png', 10),
(12, '/images/carrelage/mural/0016.png', 10),
(13, '/images/carrelage/mural/0017.png', 10),
(14, '/images/carrelage/mural/0018.png', 10),
(15, '/images/carrelage/mural/0019.png', 10),
(16, '/images/carrelage/mural/0020.png', 10),
(17, '/images/carrelage/mural/0021.png', 10),
(18, '/images/carrelage/mural/0022.png', 10),
(19, '/images/carrelage/mural/0023.png', 10),
(20, '/images/carrelage/mural/0024.png', 10),
(21, '/images/carrelage/mural/0025.png', 10),
(22, '/images/carrelage/mural/0026.png', 10),
(23, '/images/carrelage/mural/0027.png', 10),
(24, '/images/carrelage/mural/0028.png', 10),
(25, '/images/carrelage/mural/0029.png', 10),
(26, '/images/carrelage/mural/0030.png', 10),
(27, '/images/carrelage/mural/0031.png', 10),
(28, '/images/carrelage/mural/0032.png', 10),
(29, '/images/carrelage/mural/0033.png', 10),
(30, '/images/carrelage/mural/0035.png', 10),
(31, '/images/carrelage/mural/00355.png', 10),
(32, '/images/carrelage/mural/0036.png', 10),
(33, '/images/carrelage/mural/0037.png', 10),
(34, '/images/carrelage/mural/0038.png', 10),
(35, '/images/carrelage/mural/0039.png', 10),
(36, '/images/carrelage/mural/0040.png', 10),
(37, '/images/carrelage/mural/0041.png', 10),
(38, '/images/carrelage/mural/0043.png', 10),
(39, '/images/carrelage/mural/0047.png', 10),
(40, '/images/carrelage/mural/0049.png', 10),
(41, '/images/carrelage/mural/0051.png', 10),
(42, '/images/carrelage/mural/00517.png', 10),
(43, '/images/carrelage/mural/00519.png', 10),
(44, '/images/carrelage/mural/0052.png', 10),
(45, '/images/carrelage/mural/00525.png', 10),
(46, '/images/carrelage/mural/00529.png', 10),
(47, '/images/carrelage/mural/0053.png', 10),
(48, '/images/carrelage/mural/00531.png', 10),
(49, '/images/carrelage/mural/00537.png', 10),
(50, '/images/carrelage/mural/0054.png', 10),
(51, '/images/carrelage/mural/0055.png', 10),
(52, '/images/carrelage/mural/00553.png', 10),
(53, '/images/carrelage/mural/00555.png', 10),
(54, '/images/carrelage/mural/0057.png', 10),
(55, '/images/carrelage/mural/0059.png', 10),
(56, '/images/carrelage/mural/00595.png', 10),
(57, '/images/carrelage/mural/0061.png', 10),
(58, '/images/carrelage/mural/0063.png', 10),
(59, '/images/carrelage/mural/0064.png', 10),
(60, '/images/carrelage/mural/0068.png', 10),
(61, '/images/carrelage/mural/0071.png', 10),
(62, '/images/carrelage/mural/0072.png', 10),
(63, '/images/carrelage/mural/0073.png', 10),
(64, '/images/carrelage/mural/0075.png', 10),
(65, '/images/carrelage/mural/0078.png', 10),
(66, '/images/carrelage/mural/0086.png', 10),
(67, '/images/carrelage/mural/0087.png', 10),
(68, '/images/carrelage/mural/0094.png', 10),
(69, '/images/carrelage/mural/0095.png', 10),
(70, '/images/carrelage/mural/0103.png', 10),
(71, '/images/carrelage/mural/0127.png', 10),
(72, '/images/carrelage/mural/0145.png', 10),
(73, '/images/carrelage/mural/0146.png', 10),
(74, '/images/carrelage/mural/0147.png', 10),
(75, '/images/carrelage/mural/0148.png', 10),
(76, '/images/carrelage/mural/0149.png', 10),
(77, '/images/carrelage/mural/0150.png', 10),
(78, '/images/carrelage/mural/0151.png', 10),
(79, '/images/carrelage/mural/0152.png', 10),
(80, '/images/carrelage/mural/0153.png', 10),
(81, '/images/carrelage/mural/0154.png', 10),
(82, '/images/carrelage/mural/0155.png', 10),
(83, '/images/carrelage/mural/0156.png', 10),
(84, '/images/carrelage/mural/0157.png', 10),
(85, '/images/carrelage/mural/0158.png', 10),
(86, '/images/carrelage/mural/0159.png', 10),
(87, '/images/carrelage/mural/0160.png', 10),
(88, '/images/carrelage/mural/0161.png', 10),
(89, '/images/carrelage/mural/0162.png', 10),
(90, '/images/carrelage/mural/0163.png', 10),
(91, '/images/carrelage/mural/05023.png', 10),
(92, '/images/carrelage/mural/890.png', 10),
(93, '/images/carrelage/mural/89010.png', 10),
(94, '/images/carrelage/mural/89011.png', 10),
(95, '/images/carrelage/mural/890113.png', 10),
(96, '/images/carrelage/mural/89012.png', 10),
(97, '/images/carrelage/mural/89013.png', 10),
(98, '/images/carrelage/mural/89014.png', 10),
(99, '/images/carrelage/mural/89015.png', 10),
(100, '/images/carrelage/mural/89016.png', 10),
(101, '/images/carrelage/mural/89017.png', 10),
(102, '/images/carrelage/mural/89018.png', 10),
(103, '/images/carrelage/mural/89019.png', 10),
(104, '/images/carrelage/mural/8902.png', 10),
(105, '/images/carrelage/mural/89020.png', 10),
(106, '/images/carrelage/mural/89021.png', 10),
(107, '/images/carrelage/mural/89022.png', 10),
(108, '/images/carrelage/mural/89023.png', 10),
(109, '/images/carrelage/mural/89024.png', 10),
(110, '/images/carrelage/mural/89025.png', 10),
(111, '/images/carrelage/mural/89026.png', 10),
(112, '/images/carrelage/mural/89027.png', 10),
(113, '/images/carrelage/mural/89028.png', 10),
(114, '/images/carrelage/mural/89029.png', 10),
(115, '/images/carrelage/mural/8903.png', 10),
(116, '/images/carrelage/mural/89030.png', 10),
(117, '/images/carrelage/mural/89031.png', 10),
(118, '/images/carrelage/mural/89032.png', 10),
(119, '/images/carrelage/mural/89033.png', 10),
(120, '/images/carrelage/mural/89034.png', 10),
(121, '/images/carrelage/mural/89035.png', 10),
(122, '/images/carrelage/mural/89036.png', 10),
(123, '/images/carrelage/mural/89037.png', 10),
(124, '/images/carrelage/mural/89038.png', 10),
(125, '/images/carrelage/mural/89039.png', 10),
(126, '/images/carrelage/mural/8904.png', 10),
(127, '/images/carrelage/mural/89040.png', 10),
(128, '/images/carrelage/mural/89041.png', 10),
(129, '/images/carrelage/mural/89042.png', 10),
(130, '/images/carrelage/mural/89043.png', 10),
(131, '/images/carrelage/mural/89044.png', 10),
(132, '/images/carrelage/mural/89045.png', 10),
(133, '/images/carrelage/mural/89046.png', 10),
(134, '/images/carrelage/mural/89047.png', 10),
(135, '/images/carrelage/mural/89048.png', 10),
(136, '/images/carrelage/mural/89049.png', 10),
(137, '/images/carrelage/mural/8905.png', 10),
(138, '/images/carrelage/mural/89050.png', 10),
(139, '/images/carrelage/mural/89051.png', 10),
(140, '/images/carrelage/mural/89052.png', 10),
(141, '/images/carrelage/mural/89053.png', 10),
(142, '/images/carrelage/mural/89055.png', 10),
(143, '/images/carrelage/mural/89056.png', 10),
(144, '/images/carrelage/mural/89057.png', 10),
(145, '/images/carrelage/mural/89058.png', 10),
(146, '/images/carrelage/mural/89059.png', 10),
(147, '/images/carrelage/mural/8906.png', 10),
(148, '/images/carrelage/mural/89060.png', 10),
(149, '/images/carrelage/mural/89061.png', 10),
(150, '/images/carrelage/mural/89062.png', 10),
(151, '/images/carrelage/mural/89063.png', 10),
(152, '/images/carrelage/mural/89064.png', 10),
(153, '/images/carrelage/mural/89065.png', 10),
(154, '/images/carrelage/mural/89066.png', 10),
(155, '/images/carrelage/mural/89067.png', 10),
(156, '/images/carrelage/mural/89068.png', 10),
(157, '/images/carrelage/mural/89069.png', 10),
(158, '/images/carrelage/mural/8907.png', 10),
(159, '/images/carrelage/mural/89070.png', 10),
(160, '/images/carrelage/mural/8908.png', 10),
(161, '/images/carrelage/mural/8909.png', 10);

-- --------------------------------------------------------

--
-- Structure de la table `mosaique`
--

DROP TABLE IF EXISTS `mosaique`;
CREATE TABLE IF NOT EXISTS `mosaique` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `url_mosaique` longtext NOT NULL,
  `prix_mosaique` float NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mosaique`
--

INSERT INTO `mosaique` (`id`, `url_mosaique`, `prix_mosaique`) VALUES
(1, '/images/mosaic/0012.png', 10),
(2, '/images/mosaic/0013.png', 10),
(3, '/images/mosaic/0015.png', 10),
(4, '/images/mosaic/0017.png', 10),
(5, '/images/mosaic/0018.png', 10),
(6, '/images/mosaic/0019.png', 10),
(7, '/images/mosaic/0020.png', 10),
(8, '/images/mosaic/0021.png', 10),
(9, '/images/mosaic/0022.png', 10),
(10, '/images/mosaic/0024.png', 10),
(11, '/images/mosaic/0026.png', 10),
(12, '/images/mosaic/0027.png', 10),
(13, '/images/mosaic/0028.png', 10),
(14, '/images/mosaic/0029.png', 10),
(15, '/images/mosaic/0030.png', 10),
(16, '/images/mosaic/0031.png', 10),
(17, '/images/mosaic/0032.png', 10),
(18, '/images/mosaic/0033.png', 10),
(19, '/images/mosaic/0035.png', 10),
(20, '/images/mosaic/0036.png', 10),
(21, '/images/mosaic/0038.png', 10),
(22, '/images/mosaic/0039.png', 10),
(23, '/images/mosaic/0040.png', 10),
(24, '/images/mosaic/0041.png', 10),
(25, '/images/mosaic/0042.png', 10),
(26, '/images/mosaic/0043.png', 10),
(27, '/images/mosaic/0044.png', 10),
(28, '/images/mosaic/0045.png', 10),
(29, '/images/mosaic/0047.png', 10),
(30, '/images/mosaic/0048.png', 10),
(31, '/images/mosaic/0049.png', 10),
(32, '/images/mosaic/0050.png', 10),
(33, '/images/mosaic/0051.png', 10),
(34, '/images/mosaic/0052.png', 10),
(35, '/images/mosaic/0054.png', 10),
(36, '/images/mosaic/0055.png', 10),
(37, '/images/mosaic/0056.png', 10),
(38, '/images/mosaic/0057.png', 10),
(39, '/images/mosaic/0059.png', 10),
(40, '/images/mosaic/0060.png', 10),
(41, '/images/mosaic/0061.png', 10),
(42, '/images/mosaic/0062.png', 10),
(43, '/images/mosaic/0063.png', 10),
(44, '/images/mosaic/0064.png', 10),
(45, '/images/mosaic/0078.png', 10),
(46, '/images/mosaic/0081.png', 10);

-- --------------------------------------------------------

--
-- Structure de la table `piscine`
--

DROP TABLE IF EXISTS `piscine`;
CREATE TABLE IF NOT EXISTS `piscine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_piscine` longtext NOT NULL,
  `prix_piscine` float NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piscine`
--

INSERT INTO `piscine` (`id`, `url_piscine`, `prix_piscine`) VALUES
(1, '/images/piscine/0007.png', 10),
(2, '/images/piscine/0009.png', 10),
(3, '/images/piscine/0010.png', 10),
(4, '/images/piscine/0011.png', 10),
(5, '/images/piscine/0012.png', 10),
(6, '/images/piscine/0013.png', 10),
(7, '/images/piscine/0015.png', 10),
(8, '/images/piscine/0016.png', 10),
(9, '/images/piscine/0017.png', 10),
(10, '/images/piscine/0018.png', 10),
(11, '/images/piscine/0019.png', 10),
(12, '/images/piscine/0020.png', 10),
(13, '/images/piscine/0021.png', 10),
(14, '/images/piscine/0023.png', 10),
(15, '/images/piscine/0025.png', 10),
(16, '/images/piscine/0026.png', 10),
(17, '/images/piscine/0027.png', 10),
(18, '/images/piscine/0028.png', 10),
(19, '/images/piscine/0030.png', 10),
(20, '/images/piscine/0031.png', 10),
(21, '/images/piscine/0032.png', 10),
(22, '/images/piscine/0034.png', 10),
(23, '/images/piscine/0036.png', 10),
(24, '/images/piscine/0037.png', 10),
(25, '/images/piscine/0039.png', 10),
(26, '/images/piscine/0040.png', 10),
(27, '/images/piscine/0042.png', 10),
(28, '/images/piscine/0043.png', 10),
(29, '/images/piscine/0044.png', 10),
(30, '/images/piscine/0045.png', 10),
(31, '/images/piscine/0046.png', 10),
(32, '/images/piscine/0047.png', 10),
(33, '/images/piscine/0048.png', 10),
(34, '/images/piscine/0049.png', 10),
(35, '/images/piscine/0052.png', 10),
(36, '/images/piscine/0053.png', 10),
(37, '/images/piscine/0054.png', 10),
(38, '/images/piscine/0056.png', 10),
(39, '/images/piscine/0057.png', 10);

-- --------------------------------------------------------

--
-- Structure de la table `salle_de_bain`
--

DROP TABLE IF EXISTS `salle_de_bain`;
CREATE TABLE IF NOT EXISTS `salle_de_bain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` longtext NOT NULL,
  `prix` float NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle_de_bain`
--

INSERT INTO `salle_de_bain` (`id`, `url`, `prix`) VALUES
(1, '/images/salle_de_bain/0040.png', 10),
(2, '/images/salle_de_bain/0042.png', 10),
(3, '/images/salle_de_bain/00435.png', 10),
(4, '/images/salle_de_bain/0054.png', 10),
(5, '/images/salle_de_bain/00585.png', 10),
(6, '/images/salle_de_bain/0064.png', 10),
(7, '/images/salle_de_bain/0082.png', 10),
(8, '/images/salle_de_bain/0086.png', 10),
(9, '/images/salle_de_bain/0094.png', 10),
(10, '/images/salle_de_bain/0098.png', 10),
(11, '/images/salle_de_bain/0100.png', 10),
(12, '/images/salle_de_bain/0106.png', 10),
(13, '/images/salle_de_bain/0108.png', 10),
(14, '/images/salle_de_bain/0110.png', 10),
(15, '/images/salle_de_bain/0114.png', 10),
(16, '/images/salle_de_bain/0116.png', 10),
(17, '/images/salle_de_bain/0118.png', 10),
(18, '/images/salle_de_bain/0120.png', 10),
(19, '/images/salle_de_bain/0122.png', 10),
(20, '/images/salle_de_bain/0124.png', 10),
(21, '/images/salle_de_bain/0126.png', 10),
(22, '/images/salle_de_bain/0128.png', 10),
(23, '/images/salle_de_bain/0130.png', 10),
(24, '/images/salle_de_bain/0132.png', 10),
(25, '/images/salle_de_bain/0134.png', 10),
(26, '/images/salle_de_bain/0136.png', 10),
(27, '/images/salle_de_bain/0138.png', 10),
(28, '/images/salle_de_bain/0140.png', 10),
(29, '/images/salle_de_bain/0142.png', 10),
(30, '/images/salle_de_bain/0144.png', 10),
(31, '/images/salle_de_bain/0146.png', 10),
(32, '/images/salle_de_bain/0148.png', 10),
(33, '/images/salle_de_bain/0152.png', 10),
(34, '/images/salle_de_bain/0154.png', 10),
(35, '/images/salle_de_bain/0160.png', 10),
(36, '/images/salle_de_bain/0246.png', 10),
(37, '/images/salle_de_bain/0248.png', 10),
(38, '/images/salle_de_bain/0250.png', 10),
(39, '/images/salle_de_bain/0252.png', 10),
(40, '/images/salle_de_bain/0254.png', 10),
(41, '/images/salle_de_bain/0256.png', 10),
(42, '/images/salle_de_bain/0258.png', 10),
(43, '/images/salle_de_bain/0260.png', 10),
(44, '/images/salle_de_bain/0308.png', 10),
(45, '/images/salle_de_bain/0309.png', 10),
(46, '/images/salle_de_bain/0318.png', 10),
(47, '/images/salle_de_bain/0319.png', 10),
(48, '/images/salle_de_bain/0418.png', 10),
(49, '/images/salle_de_bain/0419.png', 10),
(50, '/images/salle_de_bain/0420.png', 10),
(51, '/images/salle_de_bain/0421.png', 10),
(52, '/images/salle_de_bain/0425.png', 10),
(53, '/images/salle_de_bain/0428.png', 10),
(54, '/images/salle_de_bain/0429.png', 10),
(55, '/images/salle_de_bain/0440.png', 10),
(56, '/images/salle_de_bain/0444.png', 10),
(57, '/images/salle_de_bain/0448.png', 10),
(58, '/images/salle_de_bain/0450.png', 10),
(59, '/images/salle_de_bain/0472.png', 10),
(60, '/images/salle_de_bain/0474.png', 10);

-- --------------------------------------------------------

--
-- Structure de la table `sol_exterieur`
--

DROP TABLE IF EXISTS `sol_exterieur`;
CREATE TABLE IF NOT EXISTS `sol_exterieur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_sol_ext` longtext NOT NULL,
  `prix_sol_ext` float NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sol_exterieur`
--

INSERT INTO `sol_exterieur` (`id`, `url_sol_ext`, `prix_sol_ext`) VALUES
(1, '/images/carrelage/sol_exterieur/0065.png', 10),
(2, '/images/carrelage/sol_exterieur/0066.png', 10),
(3, '/images/carrelage/sol_exterieur/0137.png', 10),
(4, '/images/carrelage/sol_exterieur/0138.png', 10),
(5, '/images/carrelage/sol_exterieur/0139.png', 10),
(6, '/images/carrelage/sol_exterieur/0140.png', 10),
(7, '/images/carrelage/sol_exterieur/89071.png', 10),
(8, '/images/carrelage/sol_exterieur/89072.png', 10),
(9, '/images/carrelage/sol_exterieur/89073.png', 10),
(10, '/images/carrelage/sol_exterieur/89074.png', 10),
(11, '/images/carrelage/sol_exterieur/89075.png', 10);

-- --------------------------------------------------------

--
-- Structure de la table `sol_interieur`
--

DROP TABLE IF EXISTS `sol_interieur`;
CREATE TABLE IF NOT EXISTS `sol_interieur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_sol_int` longtext NOT NULL,
  `prix_sol_int` float NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sol_interieur`
--

INSERT INTO `sol_interieur` (`id`, `url_sol_int`, `prix_sol_int`) VALUES
(1, '/images/carrelage/sol_interieur/0097.png', 10),
(2, '/images/carrelage/sol_interieur/0098.png', 10),
(3, '/images/carrelage/sol_interieur/0101.png', 10),
(4, '/images/carrelage/sol_interieur/0102.png', 10),
(5, '/images/carrelage/sol_interieur/0104.png', 10),
(6, '/images/carrelage/sol_interieur/0105.png', 10),
(7, '/images/carrelage/sol_interieur/0108.png', 10),
(8, '/images/carrelage/sol_interieur/0109.png', 10),
(9, '/images/carrelage/sol_interieur/0110.png', 10),
(10, '/images/carrelage/sol_interieur/0111.png', 10),
(11, '/images/carrelage/sol_interieur/0112.png', 10),
(12, '/images/carrelage/sol_interieur/0114.png', 10),
(13, '/images/carrelage/sol_interieur/0115.png', 10),
(14, '/images/carrelage/sol_interieur/0119.png', 10),
(15, '/images/carrelage/sol_interieur/0120.png', 10),
(16, '/images/carrelage/sol_interieur/0121.png', 10),
(17, '/images/carrelage/sol_interieur/0122.png', 10),
(18, '/images/carrelage/sol_interieur/0123.png', 10),
(19, '/images/carrelage/sol_interieur/0124.png', 10),
(20, '/images/carrelage/sol_interieur/0125.png', 10),
(21, '/images/carrelage/sol_interieur/0126.png', 10),
(22, '/images/carrelage/sol_interieur/0128.png', 10),
(23, '/images/carrelage/sol_interieur/0129.png', 10),
(24, '/images/carrelage/sol_interieur/0131.png', 10),
(25, '/images/carrelage/sol_interieur/0132.png', 10),
(26, '/images/carrelage/sol_interieur/0133.png', 10),
(27, '/images/carrelage/sol_interieur/0134.png', 10),
(28, '/images/carrelage/sol_interieur/890100.png', 10),
(29, '/images/carrelage/sol_interieur/890111.png', 10),
(30, '/images/carrelage/sol_interieur/890112.png', 10),
(31, '/images/carrelage/sol_interieur/89076.png', 10),
(32, '/images/carrelage/sol_interieur/89077.png', 10),
(33, '/images/carrelage/sol_interieur/89078.png', 10),
(34, '/images/carrelage/sol_interieur/89079.png', 10),
(35, '/images/carrelage/sol_interieur/89080.png', 10),
(36, '/images/carrelage/sol_interieur/89081.png', 10),
(37, '/images/carrelage/sol_interieur/89082.png', 10),
(38, '/images/carrelage/sol_interieur/89083.png', 10),
(39, '/images/carrelage/sol_interieur/89084.png', 10),
(40, '/images/carrelage/sol_interieur/89085.png', 10),
(41, '/images/carrelage/sol_interieur/89086.png', 10),
(42, '/images/carrelage/sol_interieur/89087.png', 10),
(43, '/images/carrelage/sol_interieur/89088.png', 10),
(44, '/images/carrelage/sol_interieur/89089.png', 10),
(45, '/images/carrelage/sol_interieur/89090.png', 10),
(46, '/images/carrelage/sol_interieur/89091.png', 10),
(47, '/images/carrelage/sol_interieur/89092.png', 10),
(48, '/images/carrelage/sol_interieur/89093.png', 10),
(49, '/images/carrelage/sol_interieur/89094.png', 10),
(50, '/images/carrelage/sol_interieur/89095.png', 10),
(51, '/images/carrelage/sol_interieur/89096.png', 10),
(52, '/images/carrelage/sol_interieur/89097.png', 10),
(53, '/images/carrelage/sol_interieur/89098.png', 10),
(54, '/images/carrelage/sol_interieur/89099.png', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
