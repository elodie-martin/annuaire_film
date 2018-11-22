-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 22 Novembre 2018 à 02:55
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Annuaire_Film`
--

-- --------------------------------------------------------

--
-- Structure de la table `Film`
--

CREATE TABLE `Film` (
  `ID` int(2) DEFAULT NULL,
  `Titre` varchar(19) DEFAULT NULL,
  `Description` varchar(942) DEFAULT NULL,
  `Sortie` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Film`
--

INSERT INTO `Film` (`ID`, `Titre`, `Description`, `Sortie`) VALUES
(1, 'interstellar', 'Dans un futur proche, la Terre est de moins en moins accueillante pour l\'humanité qui connaît une grave crise alimentaire. Le film raconte les aventures d\'un groupe d\'explorateurs qui utilise une faille récemment découverte dans l\'espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.', 2014),
(2, 'inception', 'Dom Cobb est un voleur expérimenté dans l\'art périlleux de `l\'extraction\' : sa spécialité consiste à s\'approprier les secrets les plus précieux d\'un individu, enfouis au plus profond de son subconscient, pendant qu\'il rêve et que son esprit est particulièrement vulnérable. Très recherché pour ses talents dans l\'univers trouble de l\'espionnage industriel, Cobb est aussi devenu un fugitif traqué dans le monde entier. Cependant, une ultime mission pourrait lui permettre de retrouver sa vie d\'avant.', 2010),
(3, 'inglorious basterds', 'Dans la France occupée de 1940, Shosanna Dreyfus assiste à l\'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s\'échappe de justesse et s\'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d\'une salle de cinéma. Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis.', 2009),
(4, 'la cité de la peur', 'Odile Deray, attachée de presse, vient au Festival de Cannes pour présenter le film `Red is Dead\'. Malheureusement, celui-ci est d\'une telle faiblesse que personne ne souhaite en faire l\'écho. Cependant, lorsque les projectionnistes du long-métrage en question meurent chacun leur tour dans d\'étranges circonstances, `Red is dead\' bénéficie d\'une incroyable publicité. Serge Karamazov est alors chargé de protéger le nouveau projectionniste du film.', 1994),
(5, 'là haut', 'Un vendeur de ballons un peu bougon de 78 ans, Carl Fredricksen, craint de perdre la maison qu\'il a lui-même construite. Pour y échapper, il réalise enfin le rêve de sa vie : attacher des milliers de ballons à sa maison et s\'envoler vers les régions sauvages de l\'Amérique du Sud.', 2009),
(6, 'fight club', 'Jack est un jeune expert en assurance insomniaque, désillusionné par sa vie personnelle et professionnelle. Lorsque son médecin lui conseille de suivre une thérapie afin de relativiser son mal-être, il rencontre dans un groupe d\'entraide Marla avec qui il parvient à trouver un équilibre.', 1999),
(7, 'aga', 'La cinquantaine, Nanouk et Sedna vivent harmonieusement le quotidien traditionnel d’un couple du Grand Nord. Jour après jour, le rythme séculaire qui ordonnait leur vie et celle de leurs ancêtres vacille. Nanouk et Sedna vont devoir se confronter à un nouveau monde qui leur est inconnu.', 2018),
(8, 'first man', 'Pilote jugé « un peu distrait » par ses supérieurs en 1961, Neil Armstrong sera, le 21 juillet 1969, le premier homme à marcher sur la lune. Durant huit ans, il subit un entraînement de plus en plus difficile, assumant courageusement tous les risques d’un voyage vers l’inconnu total. Meurtri par des épreuves personnelles qui laissent des traces indélébiles, Armstrong tente d’être un mari aimant auprès d’une femme qui l’avait épousé en espérant une vie normale.', 2018),
(9, 'millenium', 'Frans Balder, éminent chercheur suédois en intelligence artificielle fait appel à Lisbeth Salander afin de récupérer un logiciel qu\'il a créé et permettant de prendre le contrôle d\'armes nucléaires. Mais la NSA ainsi qu\'un groupe de terroristes mené par Jan Holster sont également sur la piste du logiciel. Traquée, Lisbeth va faire appel à son ami le journaliste Mikael Blomkvist qu\'elle n\'a pas vu depuis 3 ans.', 2018),
(10, 'Venom', 'L\'un des personnages les plus célèbres et les plus complexes de Marvel occupe le devant de la scène alors qu\'Eddie Brock (Tom Hardy) devient l\'hôte du symbiote alien Venom. En tant que journaliste, Eddie a essayé de faire tomber le célèbre fondateur de la Life Foundation, le génie Carlton Drake (Riz Ahmed) et cette obsession a ruiné sa carrière et sa relation avec sa petite amie, Anne Weying (Michelle Williams). En enquêtant sur l\'une des expériences de Drake, le Venin extraterrestre fusionne avec le corps d\'Eddie, et il a soudain de nouvelles superpuissances incroyables, ainsi que la chance de faire tout ce qu\'il veut. Sombre, imprévisible et alimenté par la rage, Venom laisse Eddie lutter pour contrôler des capacités dangereuses qu\'il trouve aussi stimulantes et enivrantes. Eddie et Venom ont besoin l\'un de l\'autre pour obtenir ce qu\'ils recherchent, ils s\'entremêlent de plus en plus. Où Eddie finit-il et Venom commence-t-il ?', 2018),
(11, 'Kimi no na wa', 'Mitsuha, adolescente coincée dans une famille traditionnelle, rêve de quitter ses montagnes natales pour découvrir la vie trépidante de Tokyo. Elle est loin d’imaginer pouvoir vivre l’aventure urbaine dans la peau de… Taki, un jeune lycéen vivant à Tokyo, occupé entre son petit boulot dans un restaurant italien et ses nombreux amis. À travers ses rêves, Mitsuha se voit littéralement propulsée dans la vie du jeune garçon au point qu’elle croit vivre la réalité... Tout bascule lorsqu’elle réalise que Taki rêve également d’une vie dans les montagnes, entouré d’une famille traditionnelle… dans la peau d’une jeune fille ! Une étrange relation s’installe entre leurs deux corps qu’ils accaparent mutuellement. Quel mystère se cache derrière ces rêves étranges qui unissent deux destinées que tout oppose et qui ne se sont jamais rencontrées ?', 2016),
(12, 'La Beuze', 'Alphonse Brown, fils caché de James Brown, et Scotch sont amis depuis l\'enfance. Ils vivent au Havre de petits deals minables jusqu\'au jour où Alphonse se fait serrer. Après un an de prison, il retrouve Scotch et la liberté avec la ferme intention de tirer un trait sur les galères du passé pour suivre les traces de son père dans la musique. Le soir de la libération d\'Alphonse, sa vie et celle de Scotch vont basculer quand ils découvrent dans un bunker, une vieille malle au contenu mystérieux. Alors qu\'ils débarquent à Paris dans l\'espoir d\'entamer une grande carrière dans la musique, ils vont vite se rendre compte que leur trésor est l\'objet de toutes les convoitises...', 2003);

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `Themes` varchar(40) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Genre`
--

INSERT INTO `Genre` (`Themes`, `ID`) VALUES
('Drame', 1),
('Thriller', 2),
('Action', 3),
('Comédie', 4),
('Fantaisie', 5),
('Horreur', 6),
('Science-Fiction', 7),
('Animation', 8),
('Fantastique', 9);

-- --------------------------------------------------------

--
-- Structure de la table `Liaison_ID_Genre_Film`
--

CREATE TABLE `Liaison_ID_Genre_Film` (
  `ID_Film` int(4) NOT NULL,
  `ID_Genre` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Liaison_ID_Genre_Film`
--

INSERT INTO `Liaison_ID_Genre_Film` (`ID_Film`, `ID_Genre`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 3),
(7, 1),
(8, 1),
(9, 2),
(10, 3),
(10, 6),
(10, 7),
(11, 8),
(11, 9),
(12, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Realisateur`
--

CREATE TABLE `Realisateur` (
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Realisateur`
--

INSERT INTO `Realisateur` (`Nom`, `Prenom`, `ID`) VALUES
('Nolan', 'Christopher', 1),
('Tarantino', 'Quentin', 2),
('Berberian', 'Alain', 3),
('Docter', 'Pete', 4),
('Fincher', 'David', 5),
('Lazarov', 'Milko', 6),
('Chazelle', 'Damien', 7),
('Alvarez', 'Fede', 8),
('Fleisher', 'Ruben', 9),
('Shinkai', 'Makoto', 10),
('Desagnat', 'François', 11);

-- --------------------------------------------------------

--
-- Structure de la table `Table_Liaison_ID_Film_Realisateur`
--

CREATE TABLE `Table_Liaison_ID_Film_Realisateur` (
  `ID_Film` int(11) NOT NULL,
  `ID_Realisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Table_Liaison_ID_Film_Realisateur`
--

INSERT INTO `Table_Liaison_ID_Film_Realisateur` (`ID_Film`, `ID_Realisateur`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 10),
(12, 11);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Realisateur`
--
ALTER TABLE `Realisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Realisateur`
--
ALTER TABLE `Realisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
