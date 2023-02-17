-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 fév. 2023 à 15:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet-blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `author` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `title`, `content`, `date`, `author`, `image`) VALUES
(8, 'The Perfect Lens for Your Landscape Photography Composition', 'One of the more common questions I’ve heard recently has to do with the deciding factors that should be accounted for when determining which lens is best for a particular composition. I think as landscape photographers we all generally fall into one of the following two categories, we’re either the single composition or multi-composition type of photographer. If you’re the single composition kind you’re the type that gets on-location, identifies the composition, sets up the shot and waits for the conditions to be best ultimately walking away with a series of images of the same exact composition with the only difference being the conditions. Or, if you’re the multi-composition kind, then you’re the type that gets on-location, settles on a composition, grabs a couple of images and moves on looking for additional compositions within the scene. ', '2023-02-01 00:00:00', 'googo', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1598901562644-Y42CWHHIONSBNSNUDJKU/The+Perfect+Lens+Blog.jpg'),
(9, '5 BEGINNER LANDSCAPE PHOTOGRAPHY MISTAKES TO AVOID', 'Making mistakes when starting something new is a common part of the learning process, and the sooner you can identify and fix them, the faster you’ll progress within your new endeavor. When I first started in landscape photography I certainly made my fair share of errors, but I didn’t realize it at the time, so I ended up repeating them over and over again. In this 20 minute video, I discuss the five biggest landscape photography mistakes I made when I was starting out, in hopes that you can relate to at least one of these and correct it much faster than I did. ', '2023-01-01 00:00:00', 'celine', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1551972011574-QM6SJNPAOM7468PJ9F15/5+BEGINNER+LANDSCAPE+PHOTOGRAPHY+MISTAKES+TO+AVOID?format=2500w'),
(10, 'The Issue with Winter Landscape Photography', 'One of the most difficult yet rewarding seasons for outdoor and landscape photography is during the winter months. It’s tough to beat the look of a freshly fallen blanket of snow. It has a way of simplifying a scene thus creating a very minimalistic composition, but it’s not all roses. Winter photography comes with a unique set of challenges that you have to solve for in order to capture these beautifully frosty images. ', '2023-02-01 00:00:00', 'celine', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1579100566529-PFBSEN130Y5VAVIYHBRV/Winter+Landscape+Photography+Tips?format=2500w'),
(11, 'The Issue with Winter Landscape Photography', 'One of the most difficult yet rewarding seasons for outdoor and landscape photography is during the winter months. It’s tough to beat the look of a freshly fallen blanket of snow. It has a way of simplifying a scene thus creating a very minimalistic composition, but it’s not all roses. Winter photography comes with a unique set of challenges that you have to solve for in order to capture these beautifully frosty images. ', '2023-02-01 00:00:00', 'celine', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1579100566529-PFBSEN130Y5VAVIYHBRV/Winter+Landscape+Photography+Tips?format=2500w'),
(12, 'Wide Angle Lenses - 5 Challenges To Overcome', 'When it comes to landscape and outdoor photography a wide angle lens is by far the most popular tool. Wide angle lenses are great for capturing grand sweeping vistas, getting up close and exaggerating foreground elements, and just an all around great tool for exploring your creative side. But, it’s not all roses, there are certainly a few things you want to be aware of when it comes to shooting and post processing your wide angle images.', '2023-02-05 00:00:00', 'gloria', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1553029258465-N93ZHS9OT4OXKZ0CO21E/Wide+Angle+Lenses+-+5+Challenges+To+Overcome?format=2500w'),
(13, 'Wide Angle Lenses - 5 Challenges To Overcome', 'When it comes to landscape and outdoor photography a wide angle lens is by far the most popular tool. Wide angle lenses are great for capturing grand sweeping vistas, getting up close and exaggerating foreground elements, and just an all around great tool for exploring your creative side. But, it’s not all roses, there are certainly a few things you want to be aware of when it comes to shooting and post processing your wide angle images.', '2023-02-05 00:00:00', 'gloria', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1553029258465-N93ZHS9OT4OXKZ0CO21E/Wide+Angle+Lenses+-+5+Challenges+To+Overcome?format=2500w'),
(14, 'test', 'sdgwdfghwdfh', '2023-02-01 00:00:00', 'caroline', 'https://images.squarespace-cdn.com/content/v1/568fc93e841abaff890947fc/1586961711150-8O56J2MQMPJ0FS74GBKF/The+Best+Composition+Advice+I+Ever+Heard+For+Creating+Powerful+Landscape+Photos?format=2500w');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id_membre` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
