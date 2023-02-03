-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 03 fév. 2023 à 01:15
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `batman`
--

-- --------------------------------------------------------

--
-- Structure de la table `actors`
--

DROP TABLE IF EXISTS `actors`;
CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actors`
--

INSERT INTO `actors` (`id`, `name`, `image`) VALUES
(1, 'Christian Bale', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/qCpZn2e3dimwbryLnqxZuI88PTi.jpg'),
(2, 'Michael Caine', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hZruclwEPCKw3e83rnFSIH5sRFZ.jpg'),
(3, 'Gary Oldman', 'https://www.themoviedb.org/t/p/w138_and_h175_face/2v9FVVBUrrkW2m3QOcYkuhq9A6o.jpg'),
(4, 'Anne Hathaway', 'https://www.themoviedb.org/t/p/w138_and_h175_face/tLelKoPNiyJCSEtQTz1FGv4TLGc.jpg'),
(5, 'Tom Hardy', 'https://www.themoviedb.org/t/p/w138_and_h175_face/4CR1D9VLWZcmGgh4b6kKuY2NOel.jpg'),
(6, 'Marion Cotillard', 'https://www.themoviedb.org/t/p/w138_and_h175_face/zChwjQ9D90fxx6cgWz5mUWHNd5b.jpg'),
(7, 'Joseph Gordon-Levitt', 'https://www.themoviedb.org/t/p/w138_and_h175_face/lDlo5LFmrxrxa3iXqiwwNj1w52X.jpg'),
(8, 'Morgan Freeman', 'https://www.themoviedb.org/t/p/w138_and_h175_face/jPsLqiYGSofU4s6BjrxnefMfabb.jpg'),
(9, 'Matthew Modine', 'https://www.themoviedb.org/t/p/w138_and_h175_face/z974QEHL12qUvLyk6hlWGAmDgom.jpg'),
(10, 'Heath Ledger', 'https://www.themoviedb.org/t/p/w138_and_h175_face/5Y9HnYYa9jF4NunY9lSgJGjSe8E.jpg'),
(11, 'Aaron Eckhart', 'https://www.themoviedb.org/t/p/w138_and_h175_face/5EFQvRHlpP1Iaw2e6vjOaBny6DV.jpg'),
(12, 'Maggie Gyllenhaal', 'https://www.themoviedb.org/t/p/w138_and_h175_face/qxgM5LzzG4uWTprCL3gBVVJ2Q1K.jpg'),
(13, 'Nestor Carbonell', 'https://www.themoviedb.org/t/p/w138_and_h175_face/wAk4Me2INiNSpRvzU8K98743Uc1.jpg'),
(14, 'Monique Gabriela Curnen', 'https://www.themoviedb.org/t/p/w138_and_h175_face/lJgLQs7cfM49m8VzVviwxIByz76.jpg'),
(15, 'Liam Neeson', 'https://www.themoviedb.org/t/p/w138_and_h175_face/bboldwqSC6tdw2iL6631c98l2Mn.jpg'),
(16, 'Katie Holmes', 'https://www.themoviedb.org/t/p/w138_and_h175_face/xOrcQo5OP7JJ68MGT1k7gkWcXki.jpg'),
(17, 'Cillian Murphy', 'https://www.themoviedb.org/t/p/w138_and_h175_face/dm6V24NjjvjMiCtbMkc8Y2WPm2e.jpg'),
(18, 'Tom Wilkinson', 'https://www.themoviedb.org/t/p/w138_and_h175_face/d5yLk0PK8q7EKR3E3G2txO758IW.jpg'),
(19, 'Rutger Hauer', 'https://www.themoviedb.org/t/p/w138_and_h175_face/aNvyDYD0YscuwMfgy15wb5gRKph.jpg'),
(20, 'Ken Watanabe', 'https://www.themoviedb.org/t/p/w138_and_h175_face/w2t30L5Cmr34myAaUobLoSgsLfS.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `actor_movie`
--

DROP TABLE IF EXISTS `actor_movie`;
CREATE TABLE IF NOT EXISTS `actor_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `actor_id` (`actor_id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actor_movie`
--

INSERT INTO `actor_movie` (`id`, `name`, `actor_id`, `movie_id`) VALUES
(1, 'Bruce Wayne / Batman', 1, 1),
(2, 'Alfred Pennyworth', 2, 1),
(3, 'Bruce Wayne / Batman', 1, 2),
(4, 'Bruce Wayne / Batman', 1, 3),
(5, 'Henri Ducard / Ra\'s al Ghul', 15, 1),
(6, 'Rachel Dawes', 16, 1),
(7, 'James Gordon', 3, 1),
(8, 'Jonathan Crane / Scarecrow', 17, 1),
(9, 'Carmine \"The Roman\" Falcone', 18, 1),
(10, 'William Earle', 19, 1),
(11, 'Decoy Ra\'s al Ghul', 20, 1),
(12, 'Joker', 10, 3),
(13, 'Alfred Pennyworth', 2, 3),
(14, 'James Gordon', 3, 3),
(15, 'Harvey Dent / Two-Face', 11, 3),
(16, 'Rachel Dawes', 12, 3),
(17, 'Lucius Fox', 8, 3),
(18, 'Anthony Garcia', 13, 3),
(19, 'Anna Ramirez', 14, 3),
(20, 'Alfred Pennyworth', 2, 2),
(21, 'James Gordon', 3, 2),
(22, 'Selina Kyle / Catwoman', 4, 2),
(23, 'Bane', 5, 2),
(24, 'Miranda Tate / Talia al Ghul', 6, 2),
(25, 'John Blake', 7, 2),
(26, 'Lucius Fox', 8, 2),
(27, 'Peter Foley', 9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `link`, `movie_id`) VALUES
(1, 'https://www.themoviedb.org/t/p/original/Yrpb32j3eMpMVX7ND3TnOkHnbl.jpg', 2),
(2, 'https://www.themoviedb.org/t/p/original/rV8g8ATRPIwUHC1rKRXEXBjbclu.jpg', 2),
(3, 'https://www.themoviedb.org/t/p/original/y2DB71C4nyIdMrANijz8mzvQtk6.jpg', 2),
(4, 'https://www.themoviedb.org/t/p/original/8p1btPA5ME6OsfAmL3bcf7P2yoP.jpg', 2),
(5, 'https://www.themoviedb.org/t/p/original/dXbUVPZnvt4WcQHozLQ5MNXvtwV.jpg', 2),
(6, 'https://www.themoviedb.org/t/p/original/dWoKkgTis8pweSv7wihq03wPTKr.jpg', 2),
(7, 'https://www.themoviedb.org/t/p/original/zoczgOfzO1Cmgp6LnpVz3zQve0h.jpg', 2),
(8, 'https://www.themoviedb.org/t/p/original/tPZ8jxU2gy25zmpQd800rLr8m2p.jpg', 2),
(9, 'https://www.themoviedb.org/t/p/original/a912l9IcCxQFFTd4l6ZjFJsSvTx.jpg', 2),
(10, 'https://www.themoviedb.org/t/p/original/hQrHN6WXERVw6XUMpfCgLfvrh5V.jpg', 1),
(11, 'https://www.themoviedb.org/t/p/original/tsH7pRO24Fv6KFi4RjVus3zCBsh.jpg', 1),
(12, 'https://www.themoviedb.org/t/p/original/xqkWKkV22eKBD31cclV5DgyxcCB.jpg', 1),
(13, 'https://www.themoviedb.org/t/p/original/D4CWAeqKW2MiXRxbL8GebOAFkZ.jpg', 1),
(14, 'https://www.themoviedb.org/t/p/original/xqzilMDWLohLpAG5qkd7eVnbsjx.jpg', 1),
(15, 'https://www.themoviedb.org/t/p/original/30WsuJ0WNspTxMZ96YVzOhKceXC.jpg', 1),
(16, 'https://www.themoviedb.org/t/p/original/5GBwqLFWgqCJXrBTrbSJ9FOzeOG.jpg', 1),
(17, 'https://www.themoviedb.org/t/p/original/k3YHMA0zZfHR3Ep8MYlmLc0pawq.jpg', 1),
(18, 'https://www.themoviedb.org/t/p/original/3MEXbwZUTzzAYXZTsHiWNMSmAVW.jpg', 1),
(19, 'https://www.themoviedb.org/t/p/original/nMKdUUepR0i5zn0y1T4CsSB5chy.jpg', 3),
(20, 'https://www.themoviedb.org/t/p/original/cfT29Im5VDvjE0RpyKOSdCKZal7.jpg', 3),
(21, 'https://www.themoviedb.org/t/p/original/enNubozHn9pXi0ycTVYUWfpHZm.jpg', 3),
(22, 'https://www.themoviedb.org/t/p/original/pjyzrh1bdv1UTpDRHvM850TJAmT.jpg', 3),
(23, 'https://www.themoviedb.org/t/p/original/kxCRNTZ96dbftDPt7SQWA3LQCiK.jpg', 3),
(24, 'https://www.themoviedb.org/t/p/original/wdQ016RX0MpQjILr5xBnrocf6Pi.jpg', 3),
(25, 'https://www.themoviedb.org/t/p/original/3xyth9V7S3hQJeKtfbSgvVf0Pry.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `poster` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `tailer` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `story` text NOT NULL,
  `note` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `recipe` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `genres` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `date`, `poster`, `banner`, `tailer`, `synopsis`, `story`, `note`, `budget`, `recipe`, `time`, `genres`) VALUES
(1, 'Batman Begins', '2005-06-15', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/AdhhQHrgb9eWTcmBh7pThBzU0Ra.jpg', 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/ew5FcYiRhTYNJAkxoVPMNlCOdVn.jpg', 'https://youtu.be/jXrFsn9pcZY', 'Alors que le souvenir de ses parents assassinés le hante, Bruce Wayne, désemparé, erre à travers le monde cherchant les moyens de combattre l\'injustice et ses propres peurs. Avec l\'aide de son dévoué majordome et homme de confiance Alfred, de l\'inspecteur Jim Gordon et de son allié Lucius Fox, Wayne revient à Gotham City et révèle son alter ego: Batman, un justicier masqué qui utilise sa force, son intelligence et une batterie d\'armes high-tech pour combattre les forces sinistres qui menacent la ville…', 'Batman Begins est un film de super-héros américain réalisé par Christopher Nolan. Il s\'agit du premier volet de la trilogie de Nolan basée sur le personnage de Batman. Le film raconte l\'origine de Batman et comment Bruce Wayne, un jeune homme riche et privilégié, est devenu le justicier masqué de Gotham City.Après avoir assisté à la mort de ses parents alors qu\'il était enfant, Bruce Wayne quitte Gotham pour explorer le monde et trouver des moyens de lutter contre la criminalité. Il tombe sous l\'emprise d\'un groupe de criminels appelé les League of Shadows, dirigé par Ra\'s Al Ghul. Cependant, après avoir découvert les véritables intentions de la League, Bruce se rebelle et échappe à leur contrôle.De retour à Gotham, Bruce utilise ses connaissances acquises avec la League pour créer un costume et une identité secrète : Batman. Avec l\'aide du commissaire Gordon et du Dr Rachel Dawes, Bruce se met en quête de nettoyer les rues de Gotham de la criminalité et de vaincre le criminel Carmine Falcone.Batman Begins met en évidence les thèmes de la justice, de la peur et de la rédemption. Il montre comment Bruce Wayne est devenu Batman et comment il a utilisé ses peurs pour se battre contre le mal. Le film est un prologue essentiel à la trilogie de Nolan sur le personnage de Batman, en présentant les fondements de l\'univers de Gotham et les bases de l\'histoire de Batman.', 77, 150000000, 374218673, 140, '{}'),
(2, 'The Dark Knight Rises', '2012-07-25', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/ApcGBERN0p9I0nDOIwJeEmpnLU5.jpg', 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/Yrpb32j3eMpMVX7ND3TnOkHnbl.jpg', 'https://youtu.be/650196yFmyo', 'Afin que l\'image de l\'ex-procureur Harvey Dent reste un modèle du genre pour les citoyens de Gotham City, Batman a endossé les crimes de ce dernier et a été chassé de la ville par les autorités. Huit ans plus tard, alors que Gotham City est de nouveau sûre, le commissaire Gordon tombe sur un complot qui vise à détruire la ville de l\'intérieur. Il fait appel à Batman. Ce dernier devra faire face à la mystérieuse Selina Kyle et à Bane, un adversaire mortel, qui veut mettre en pièce le symbole Batman.', 'The Dark Knight Rises est un film de super-héros qui se déroule huit ans après les événements du film précédent, The Dark Knight. Batman a abandonné son costume depuis le procès de Harvey Dent et Gotham est en paix grâce à la loi Dent. Cependant, un nouveau criminel nommé Bane arrive à Gotham et prend la ville en otage, en faisant exploser une bombe dans un tunnel de métro. Alors que la police et l\'armée luttent pour reprendre le contrôle de la ville, Bane révèle ses véritables intentions : il a enlevé le milliardaire Bruce Wayne et l\'a laissé pour mort dans une prison inévitable.Pendant ce temps, un voleur nommé Selina Kyle se fraye un chemin dans la vie de Bruce Wayne et s\'implique dans la lutte pour sauver Gotham. Alors que Bruce se remet de ses blessures, il apprend la véritable identité de Bane et se met en quête de le vaincre. Il est aidé par son ancien allié, le commissaire Gordon, et par un nouveau venu à Gotham, John Blake, un jeune policier qui pense que Bruce est toujours en vie.Au cours de la bataille qui se déroule dans les rues de Gotham, Batman affronte Bane dans un duel final qui déterminera le sort de la ville. Après un long combat épique, Batman réussit à vaincre Bane et à neutraliser la bombe. Il disparaît ensuite, laissant croire à sa mort pour protéger son identité secrète et pour permettre à Gotham de continuer à vivre en paix.The Dark Knight Rises met en évidence les thèmes de la justice, de la rédemption et du sacrifice. Il montre comment Batman, malgré ses blessures et ses faiblesses, peut continuer à se battre pour ce qui est juste et comment les gens peuvent se rallier pour sauver leur ville. Le film conclut avec succès la trilogie de Nolan sur le personnage de Batman, en offrant une conclusion épique à l\'histoire de l\'homme masqué de Gotham.', 78, 250000000, 1081041287, 204, '{}'),
(3, 'The Dark Knight : Le Chevalier noir', '2008-08-13', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pdLAyRqMEnL6pzkVgYwMS0a3fEm.jpg', 'https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/pbEkjhdfP7yuDcMB78YEZwgD4IN.jpg', 'https://youtu.be/UMgb3hQCb08', 'La suite de Batman Begins, The Dark Knight, le réalisateur Christopher Nolan et l\'acteur Christian Bale, qui endosse à nouveau le rôle de Batman/Bruce Wayne dans sa guerre permanente contre le crime. Avec l\'aide du Lieutenant de Police Jim Gordon et du Procureur Harvey Dent, Batman entreprend de démanteler définitivement les organisations criminelles de Gotham. L\'association s\'avère efficace, mais le trio se heurte bientôt à un nouveau génie du crime, plus connu sous le nom du Joker, qui va plonger Gotham dans l\'anarchie et pousser Batman à la limite entre héros et assassin. Heath Ledger interprète Le Joker : le méchant suprême et Aaron Eckhart joue le rôle de Dent. Maggie Gyllenhaal complète le casting en tant que Rachel Dawes. De retour après Batman Begins, Gary Oldman est à nouveau Gordon, Michael Caine interprète Alfred, et Morgan Freeman est Lucius Fox.', 'The Dark Knight : Le Chevalier noir est un film de super-héros américain réalisé par Christopher Nolan. Il s\'agit du deuxième volet de la trilogie de Nolan sur le personnage de Batman. Le film se déroule à Gotham City, où Batman et le commissaire Gordon luttent contre un criminel en liberté, le Joker.Le Joker, un criminel sadique et imprévisible, sème la terreur à Gotham en commettant des actes de violence et en remettant en question les valeurs de la ville. Alors que Batman se bat pour arrêter le Joker, il doit également faire face à un autre défi : Harvey Dent, l\'adjoint du procureur, qui s\'efforce de nettoyer la ville de la criminalité.Alors que Batman et Dent travaillent ensemble pour vaincre le Joker, ce dernier révèle son véritable plan : semer le chaos dans Gotham en dévoilant la vraie nature des gens. Il réussit à diviser la ville et à pousser Dent à devenir son opposé, le criminel Two-Face.The Dark Knight : Le Chevalier noir est un film sombre et complexe qui aborde des thèmes tels que la justice, la morale et la loyauté. Il montre comment Batman doit faire des choix difficiles pour protéger la ville et comment le Joker peut pousser les gens à leur limite. Le film est considéré comme l\'un des meilleurs films de super-héros de tous les temps et est largement salué pour son histoire captivante, ses personnages complexes et ses performances exceptionnelles.', 85, 185000000, 1004558444, 153, '{}');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'lucas', '839e6a242e27de4f93c54005fcc7edcb0819b4ba95394884dd88b7b8dc9c93cb');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_movie_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
