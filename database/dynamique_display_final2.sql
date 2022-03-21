-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 17:04
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dynamique_display_final2`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecran`
--

CREATE TABLE `ecran` (
  `IdEcran` int(11) NOT NULL,
  `AdressMac` varchar(17) NOT NULL,
  `NomEcran` varchar(50) NOT NULL,
  `Etat` enum('active','desactive') NOT NULL,
  `IdMessage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ecran`
--

INSERT INTO `ecran` (`IdEcran`, `AdressMac`, `NomEcran`, `Etat`, `IdMessage`) VALUES
(1, '12:bb:3c:ff:14:vc', 'Samsung', 'active', 1),
(2, '14:cc:2f:fs:cc:12', 'LG', 'active', 2),
(3, '15:vv:ff:14:12:nb', 'Xiaomi', 'active', 3);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `IdMessage` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `DateDebut` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `IdService` int(11) NOT NULL,
  `IdType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`IdMessage`, `Titre`, `DateDebut`, `DateFin`, `IdService`, `IdType`) VALUES
(1, 'First Message Table Message', '2021-06-04 15:41:27', '2021-06-05 15:41:27', 1, 1),
(2, 'Second Message Table Message', '2021-06-11 15:42:55', '2021-06-15 15:42:55', 1, 2),
(3, 'Therd Message Table Message', '2021-06-13 15:44:27', '2021-06-15 15:44:27', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `IdService` int(11) NOT NULL,
  `NomService` varchar(100) NOT NULL,
  `Etat` enum('active','desactive') NOT NULL DEFAULT 'active',
  `IdUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`IdService`, `NomService`, `Etat`, `IdUtilisateur`) VALUES
(1, 'Informatique', 'active', 2),
(2, 'Restoration', 'active', 3);

-- --------------------------------------------------------

--
-- Structure de la table `typem`
--

CREATE TABLE `typem` (
  `IdType` int(11) NOT NULL,
  `Msg_txt` varchar(1000) DEFAULT NULL,
  `Msg_img` varchar(300) DEFAULT NULL,
  `Msg_video` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typem`
--

INSERT INTO `typem` (`IdType`, `Msg_txt`, `Msg_img`, `Msg_video`) VALUES
(1, 'First Message', 'conception-de-logo-vecteur-service-d-informatique-moniteur-écran-112718772-1622742199.jpg', 'crud-application-b-vuejs-php-part-1.mp4'),
(2, 'Seconde Message', 'couleur-logo-mcdonalds-1622337168.jpg', 'video.mp4'),
(3, 'Therd Message', 'img-1622309716.jpg', 'c-tutorial-live-charts-foxlearn (1).mp4');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(11) NOT NULL,
  `NomUtilisateur` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Role` enum('user','admin') NOT NULL DEFAULT 'user',
  `ChangePwd` enum('oui','non') NOT NULL DEFAULT 'oui',
  `Etat` enum('active','desactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `NomUtilisateur`, `Password`, `Email`, `Name`, `Role`, `ChangePwd`, `Etat`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'email@gmail.com', 'Ahmed', 'admin', 'oui', 'active'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'Smail', 'user', 'oui', 'active'),
(3, 'user2', '81dc9bdb52d04dc20036dbd8313ed055', 'test@gmail.com', 'CHerdal', 'user', 'oui', 'desactive');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ecran`
--
ALTER TABLE `ecran`
  ADD PRIMARY KEY (`IdEcran`),
  ADD KEY `Ecran_Message_FK` (`IdMessage`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`IdMessage`),
  ADD KEY `Message_Service_FK` (`IdService`),
  ADD KEY `Message_TypeM0_FK` (`IdType`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`IdService`),
  ADD KEY `Service_Utilisateur_FK` (`IdUtilisateur`);

--
-- Index pour la table `typem`
--
ALTER TABLE `typem`
  ADD PRIMARY KEY (`IdType`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ecran`
--
ALTER TABLE `ecran`
  MODIFY `IdEcran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `IdMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `IdService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typem`
--
ALTER TABLE `typem`
  MODIFY `IdType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ecran`
--
ALTER TABLE `ecran`
  ADD CONSTRAINT `Ecran_Message_FK` FOREIGN KEY (`IdMessage`) REFERENCES `message` (`IdMessage`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `Message_Service_FK` FOREIGN KEY (`IdService`) REFERENCES `service` (`IdService`),
  ADD CONSTRAINT `Message_TypeM0_FK` FOREIGN KEY (`IdType`) REFERENCES `typem` (`IdType`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `Service_Utilisateur_FK` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
