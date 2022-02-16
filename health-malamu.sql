-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 16 fév. 2022 à 18:15
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `health-malamu`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_capture_apk`
--

CREATE TABLE `t_capture_apk` (
  `CodeCapture` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_capture_apk`
--

INSERT INTO `t_capture_apk` (`CodeCapture`, `Image`, `Created_on`) VALUES
(5, 'screen-img01.png', '2022-01-06 03:19:14'),
(6, 'screen-img02.png', '2022-01-06 03:19:19'),
(7, 'screen-img03.png', '2022-01-06 03:19:24');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_post`
--

CREATE TABLE `t_categorie_post` (
  `CodeCategorie` int(11) NOT NULL,
  `Categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_categorie_post`
--

INSERT INTO `t_categorie_post` (`CodeCategorie`, `Categorie`) VALUES
(1, 'slide'),
(2, 'presentation'),
(3, 'blog');

-- --------------------------------------------------------

--
-- Structure de la table `t_fonctionnalite`
--

CREATE TABLE `t_fonctionnalite` (
  `CodeFonctionnalite` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Detail` text NOT NULL,
  `Avatar` text NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_fonctionnalite`
--

INSERT INTO `t_fonctionnalite` (`CodeFonctionnalite`, `Titre`, `Detail`, `Avatar`, `Created_on`) VALUES
(1, 'Recensement des medecins', 'Nous recencons vos medecins', '', '2022-01-06 02:41:25'),
(2, 'Recensement des malades', 'Nous recensons aussi les malades', '', '2022-01-06 02:42:03'),
(3, 'Test ', 'Test', 'apw-Icon1.png', '2022-01-06 10:05:07');

-- --------------------------------------------------------

--
-- Structure de la table `t_information`
--

CREATE TABLE `t_information` (
  `CodeInformation` int(11) NOT NULL,
  `DesignationAPK` varchar(50) NOT NULL,
  `Abbreviation` varchar(15) NOT NULL,
  `Avatar` text NOT NULL,
  `Presentation` text NOT NULL,
  `Objectif` text NOT NULL,
  `VideoYoutube` text NOT NULL,
  `Adresse` text NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_information`
--

INSERT INTO `t_information` (`CodeInformation`, `DesignationAPK`, `Abbreviation`, `Avatar`, `Presentation`, `Objectif`, `VideoYoutube`, `Adresse`, `Telephone`, `Email`) VALUES
(1, 'Health-Malamu', 'HM', 'HEALTH-MALAMU.png', 'HEALTH-MALAMU est sous la forme d’un bracelet avec un QR-code, il est associé à une plateforme web et mobile qui permet à son propriétaire d’avoir sur lui et à tout moment ses données personnelles et médicales, ce qui facilite sa prise en charge et son suivi médical.\r\n', 'Notre objectif est de garantir votre bonne sante numérique ', 'https://www.youtube.com/watch?v=lcp2hrkWqVw', 'Goma/Mabanga/ n 12', '+2439977553723', 'esbarakabigega@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `t_membre`
--

CREATE TABLE `t_membre` (
  `CodeMembre` int(11) NOT NULL,
  `NomMembre` varchar(50) NOT NULL,
  `PostnomMembre` varchar(50) NOT NULL,
  `PrenomMembre` varchar(50) NOT NULL,
  `Fonction` varchar(200) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_membre`
--

INSERT INTO `t_membre` (`CodeMembre`, `NomMembre`, `PostnomMembre`, `PrenomMembre`, `Fonction`, `Telephone`, `Mail`, `Photo`) VALUES
(1, 'Baraka', 'Bigega', 'Espoir', 'CEO', '+2439977553723', 'esbarakabigega@gmail.com', 'IMG_20210107_182148819.jpg'),
(2, 'Akilimali', 'Baraka', 'Michael', 'Ceo', '+2439977553723', 'mich@gmail.com', 'IMG_2891.jpg'),
(3, 'Badesi ', 'Gulain ', 'Gulaon', 'CEO', '+243973448644', 'gulain@gmail.com', 'IMG_20211221_144832_096.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_partenaire`
--

CREATE TABLE `t_partenaire` (
  `CodePartenaire` int(11) NOT NULL,
  `NomPartenaire` varchar(200) NOT NULL,
  `Avatar` text NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `SiteWeb` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_partenaire`
--

INSERT INTO `t_partenaire` (`CodePartenaire`, `NomPartenaire`, `Avatar`, `Telephone`, `Mail`, `SiteWeb`) VALUES
(1, 'Hopital General', 'HEALTH-MALAMU.png', '+2439977553723', 'hg@gmail.com', 'http://www.hg.com'),
(2, 'Isig-goma', 'IMG_2513.JPG', '', '', ''),
(3, 'ISC', '01.jpg', '', '', ''),
(4, 'Unigom', '01.jpg', '', '', ''),
(5, 'UAGO', '03.jpg', '', '', ''),
(6, 'ISTM', '07.jpg', '', '', ''),
(7, 'ISESOD', '10.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_post`
--

CREATE TABLE `t_post` (
  `CodePost` int(11) NOT NULL,
  `Titre` varchar(150) NOT NULL,
  `Contenue` text NOT NULL,
  `Photo` text NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Created_by` int(11) NOT NULL,
  `CodeCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_post`
--

INSERT INTO `t_post` (`CodePost`, `Titre`, `Contenue`, `Photo`, `Created_on`, `Created_by`, `CodeCategorie`) VALUES
(1, 'rr', 'rr', '0', '2022-01-01 16:24:27', 1, 2),
(3, 'hfg', 'hghghg', 'IMG-20211010-WA0024.jpg', '2022-01-01 16:56:57', 1, 2),
(6, 'okkk', 'dsd', '_MG_0029.jpg', '2022-01-01 17:35:57', 1, 2),
(7, 'carnet de santé életronique', 'HEALTH-MALAMU est sous la forme d’un carte , bracelet avec un QR-code, il est associé à une plateforme web et mobile qui permet à son propriétaire d’avoir sur lui et à tout moment ses données personnelles et médicales, ce qui facilite sa prise en charge et son suivi médical.\r\n', 'docteur.png', '2022-01-06 15:08:46', 1, 1),
(8, 'Logo HM', 'Logo Health-Malamu', 'HEALTH-MALAMU.png', '2022-01-06 02:21:27', 1, 2),
(9, 'Logo ISIS', 'isig goma', '1526095425(1).jpg', '2022-01-06 02:23:24', 1, 2),
(10, 'Telephone', 'Telephone', 'mobile.png', '2022-01-06 02:23:49', 1, 2),
(11, 'Nouvelle promotion chez Health-malamu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'echeancier.jpg', '2022-01-06 07:21:31', 1, 3),
(12, 'Logo ISIG-GOMA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1526095425(1).jpg', '2022-01-06 07:26:59', 1, 3),
(13, 'Films', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'VUE.JPG', '2022-01-06 07:27:58', 1, 3),
(14, 'je facilite ma prise en charge ', 'l\'accompagnement proche de votre santé ', 'homepage-visuel3.png', '2022-01-06 09:21:35', 1, 3),
(15, 'je facilite ma prise en charge ', 'l\'accompagnement proche de votre santé ', 'homepage-visuel3.png', '2022-01-06 09:23:29', 1, 2),
(16, 'meilleur prise en charge ', 'avec mon passeport santé je facilite la meilleur prise en charge ', 'homepage-visuel2.png', '2022-01-06 10:09:32', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_question`
--

CREATE TABLE `t_question` (
  `CodeQuestion` int(11) NOT NULL,
  `Question` varchar(150) NOT NULL,
  `Reponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_question`
--

INSERT INTO `t_question` (`CodeQuestion`, `Question`, `Reponse`) VALUES
(1, 'Pourquoi utiliser Health-malamu', 'Nous sommes la solution à vos problèmes'),
(2, 'Comment ca fonctionne?', 'Suivez la video là haut');

-- --------------------------------------------------------

--
-- Structure de la table `t_temoignage`
--

CREATE TABLE `t_temoignage` (
  `CodeTemoignage` int(11) NOT NULL,
  `Auther` varchar(200) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Photo` text NOT NULL,
  `Temoignage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_temoignage`
--

INSERT INTO `t_temoignage` (`CodeTemoignage`, `Auther`, `Created_on`, `Photo`, `Temoignage`) VALUES
(1, 'Baraka Bigega', '2022-01-06 07:03:41', 'IMG_20210107_182148819.jpg', 'Je suis tellement satisfait par vos services'),
(2, 'Akilimali Baraka', '2022-01-01 15:42:55', 'IMG_2893.jpg', 'C\'est tellement génial'),
(4, 'Akilimali Badesi', '2022-01-06 07:04:59', 'IMG_2823.jpg', 'Merci beaucoup. je suis vraiment très satisfaint'),
(5, 'Luciana Watsongo', '2022-01-06 07:06:01', 'IMG_2884.jpg', 'Merci d\'exister pour nous');

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE `t_user` (
  `CodeUser` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_user`
--

INSERT INTO `t_user` (`CodeUser`, `Username`, `Mail`, `Password`, `Photo`) VALUES
(1, 'Espoir', 'esbarakabigega@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_visiteur`
--

CREATE TABLE `t_visiteur` (
  `CodeVisiteur` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_capture_apk`
--
ALTER TABLE `t_capture_apk`
  ADD PRIMARY KEY (`CodeCapture`);

--
-- Index pour la table `t_categorie_post`
--
ALTER TABLE `t_categorie_post`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Index pour la table `t_fonctionnalite`
--
ALTER TABLE `t_fonctionnalite`
  ADD PRIMARY KEY (`CodeFonctionnalite`);

--
-- Index pour la table `t_information`
--
ALTER TABLE `t_information`
  ADD PRIMARY KEY (`CodeInformation`);

--
-- Index pour la table `t_membre`
--
ALTER TABLE `t_membre`
  ADD PRIMARY KEY (`CodeMembre`);

--
-- Index pour la table `t_partenaire`
--
ALTER TABLE `t_partenaire`
  ADD PRIMARY KEY (`CodePartenaire`);

--
-- Index pour la table `t_post`
--
ALTER TABLE `t_post`
  ADD PRIMARY KEY (`CodePost`);

--
-- Index pour la table `t_question`
--
ALTER TABLE `t_question`
  ADD PRIMARY KEY (`CodeQuestion`);

--
-- Index pour la table `t_temoignage`
--
ALTER TABLE `t_temoignage`
  ADD PRIMARY KEY (`CodeTemoignage`);

--
-- Index pour la table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`CodeUser`);

--
-- Index pour la table `t_visiteur`
--
ALTER TABLE `t_visiteur`
  ADD PRIMARY KEY (`CodeVisiteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_capture_apk`
--
ALTER TABLE `t_capture_apk`
  MODIFY `CodeCapture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `t_categorie_post`
--
ALTER TABLE `t_categorie_post`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_fonctionnalite`
--
ALTER TABLE `t_fonctionnalite`
  MODIFY `CodeFonctionnalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_information`
--
ALTER TABLE `t_information`
  MODIFY `CodeInformation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `t_membre`
--
ALTER TABLE `t_membre`
  MODIFY `CodeMembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_partenaire`
--
ALTER TABLE `t_partenaire`
  MODIFY `CodePartenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `t_post`
--
ALTER TABLE `t_post`
  MODIFY `CodePost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `t_question`
--
ALTER TABLE `t_question`
  MODIFY `CodeQuestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `t_temoignage`
--
ALTER TABLE `t_temoignage`
  MODIFY `CodeTemoignage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `CodeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `t_visiteur`
--
ALTER TABLE `t_visiteur`
  MODIFY `CodeVisiteur` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
