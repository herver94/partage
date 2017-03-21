-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Mars 2017 à 12:44
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `partage`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `IDCATEGORIE` int(3) NOT NULL,
  `LIBELLECATEGORIE` varchar(50) NOT NULL,
  `ROUTECATEGORIE` varchar(50) NOT NULL,
  `PHOTOCATEGORIE` varchar(50) NOT NULL,
  `CHEMIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`IDCATEGORIE`, `LIBELLECATEGORIE`, `ROUTECATEGORIE`, `PHOTOCATEGORIE`, `CHEMIN`) VALUES
(1, 'Expériences de vie', 'partages/experiences', '', 'experiences'),
(2, 'Anecdotes', 'partages/anecdotes', '', 'anecdotes'),
(3, 'Avis', 'partages/avis', '', 'avis'),
(4, 'Conseils aux futures générations', 'partages/conseils', '', 'conseils');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `IDCOMMENTAIRE` int(3) NOT NULL,
  `IDUSER` int(3) NOT NULL,
  `IDPARTAGE` int(3) NOT NULL,
  `CONTENUCOMMENTAIRE` text NOT NULL,
  `DATECOMMENTAIRE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `partages`
--

CREATE TABLE `partages` (
  `IDPARTAGE` int(3) NOT NULL,
  `IDCATEGORIE` int(3) NOT NULL,
  `IDUSER` int(3) NOT NULL,
  `TITREPARTAGE` varchar(100) NOT NULL,
  `CONTENUPARTAGE` text NOT NULL,
  `DATEPARTAGE` date NOT NULL,
  `PHOTOPARTAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `partages`
--

INSERT INTO `partages` (`IDPARTAGE`, `IDCATEGORIE`, `IDUSER`, `TITREPARTAGE`, `CONTENUPARTAGE`, `DATEPARTAGE`, `PHOTOPARTAGE`) VALUES
(1, 1, 1, 'Qu’est-ce qui fait courir les seniors?', 'omment expliquer cette course que les seniors semblent avoir autant de plaisir à réaliser quotidiennement?\r\n\r\nJean-Charles Zerbib, qui possède une longue carrière de cadre communautaire en France et en Israël, nous répond. Les seniors, ils les côtoient, et son tempérament de militant insatiable l’aide aussi à mieux les comprendre.\r\n\r\nLe P’tit Hebdo: Les seniors israéliens sont-ils plus dynamiques que leurs homologues français?\r\n\r\nJean-Charles Zerbib: En Israël, le système de cotisation pour les retraites est assez récent. Ainsi, il est courant de voir des personnes d’un certain âge encore dans la vie active et ce, bien souvent pour des raisons financières. Il y a ici une culture différente, une approche particulière aux tranches d’âge plus avancées.\r\n\r\nAujourd’hui on entend parler ici aussi de limitation du temps de travail. Quoi qu’il en soit, ici et en France, l’allongement de l’espérance de vie fait qu’à plus de 65 ans, on se sent encore jeunes et actifs!\r\n\r\n \r\n\r\nLph: Comment expliquez-vous que tant de seniors s’impliquent dans la vie associative?\r\n\r\nJ-C.Z.: Deux profils se distinguent. Ceux qui ont toujours été actifs dans leur communauté ou déjà au sein d’associations, pour la plupart, vont poursuivre cet engagement une fois à la retraite. D’autres se découvrent soudain une fibre associative parce qu’ils ont maintenant le temps de s’y intéresser et qu’ils souhaitent mettre leurs compétences acquises au cours de leur vie, au service des autres.', '2016-12-12', '1.jpg'),
(2, 2, 2, 'Quels sont les atouts des seniors qui séduisent les entreprises?', 'Même s\'ils sont plus chers, les recruteurs privilégient les cadres expérimentés quand il s\'agit d\'assurer le développement de leur activité. Ils apprécient aussi le fait que les seniors soient immédiatement opérationnels, met en avant une étude réalisée par l\'Apec.\r\n\r\nIls savent faire preuve de patience, se maîtriser, ont la capacité à prendre du recul et à relativiser. Voici quelques-unes des qualités que les employeurs attribuent volontiers aux cadres ayant plus de 45 ans, selon une étude réalisée par l\'Apec. Pourtant la concurrence est forte avec les profils plus jeunes, aux prétentions salariales moins élevées. L\'association des cadres a donc interrogé les entreprises pour savoir dans quelles circonstances elles donnaient la préférence aux profils expérimentés.', '2016-09-17', '2.jpg'),
(3, 3, 3, 'Conseils', 'Les seniors étant trop souvent les victimes de la lâcheté et de la ruse de certains agresseurs, cette rubrique a été créée pour vous apporter quelques conseils pratiques.\r\nDes règles simples de vie en société permettent de se prémunir contre les actes malveillants.\r\nLes collectivités locales, les partenaires associatifs mais aussi les policiers et les gendarmes sont vos interlocuteurs privilégiés. N\'hésitez pas à leur faire part des situations qui vous semblent inhabituelles. Ils sont là pour vous écouter, vous conseiller et vous aider.\r\nL\'isolement est un facteur d\'insécurité. Adhérez à la vie locale et associative de votre commune. Rencontrez d\'autres personnes susceptibles de vous assister dans vos démarches quotidiennes.', '2016-12-02', '3.jpg'),
(4, 3, 4, 'Questions retraites', 'Dans la réalité, un retraité peut toucher le différentiel entre ce qu’il touche en ayant cotisé à des régimes de retraite et le montant maximum de l’ASPA qui est de 800€.\r\nAlors si on prend que les personnes ont cotisé en moyenne pendant 11 ans et à ce titre ils ont droit à une retraite de 400€, l’ASPA va leur verser donc 400€. Donc 400€ x 25167 personnes x 12 mois = 120 801 600 €. La moyenne perçue par cette population étrangère ne serait plus que 120 Millions d’euro. La réalité puisque l’on a pas voulu nous communiquer le montant est surement comprise entre 120 et 241 millions d’euros ! Ce qui n’est pas une paille néanmoins !\r\n\r\nNous avons essayé de faire une enquête la plus objective possible. Alors à vous de juger si c’est une information ou une intox ? Qu’en pensez-vous ? ', '2016-12-11', '4.jpg'),
(5, 4, 4, 'Peut-on manger du beurre périmé ?', 'Tous les jours c’est pareil, nous ouvrons le frigo et nous regardons les dates des produits et souvent elles sont dépassées. Ainsi, il faut savoir que chaque français gaspille chaque année plus de 7 kilos de nourriture encore sous l’emballage ! Au total cela fait 25 kilos jetés par personne soit une perte de près de 600€ ! En plus les dates ne veulent rien dire: les yaourts doivent être consommés en 30 jours dans l’héxagone et dans 55 jours en Outre-mer! Allez comprendre ! Alors nous allons vous aider à faire le tri et à voir ce qui peut être consommé même si la date limite est dépassée :', '2016-12-05', '5.jpg'),
(6, 2, 6, 'La retraite des parlementaires: Notre enquête explosive !', 'En ce moment, l’ennemi ce n’est plus la finance, ce sont les retraités! En 1993, les gouvernements avaient pris l’engagement solennel de garantir dans la durée le pouvoir d’achat des retraités. Mais en gelant les retraites jusqu’en octobre 2017, le gouvernement a brisé ce tabou. Cependant, la retraite peut être rose si vous êtes parlementaire! Découvrez notre enquête sur le régime des parlementaires tant décrié. Lisez notre enquête remplie de révélations: ', '2016-09-14', '6.jpg'),
(7, 1, 4, 'A 70 ans, Elle court 7 marathons sur 7 continents en 7 jours !', 'Chau Smith, une américaine de 70 ans est incroyable. En 7 jours, elle a couru 7 marathons sur 7 continents ! Voilà son périple: Perth en Australie, Singapour, Le Caire, Amsterdam, New York,  le Chili, et  l’Antarctique pour finir! Cette senior en forme continue de travailler plus de 10 heures par jour et court les marathons uniquement pour se déstresser de sa vie professionnelle très prenante. En outre, la notoriété incroyable aux USA de cette dame incroyable lui permet de récolter des fonds contre la leucémie. Sa devise est assez simple “Je cherche toujours à former dans mon esprit des bonnes choses”', '2016-11-17', '7.jpg'),
(8, 1, 7, 'Lettre ouverte d’un “petit” retraité aux candidats à la présidentielle !', 'Madame et messieurs les candidats, les élections présidentielles auront lieu dans 70 jours et je me permets de vous écrire une lettre que vous lirez peut-être si vous avez le temps. Depuis quelques jours, vous multipliez les propositions en faveur de la jeunesse. C’est très bien mais il ne faudrait pas oublier les 16 millions de retraités dans vos discours et dans vos projets. La situation des aînés en France n’est pas non plus enviable et je me permets de vous rappeler quelques chiffres douloureux :  7,9% des retraités sont pauvres soit 1 078 000 retraités  pauvres et 7% des bénéficiaires des Restos du cœur ont plus de 65 ans. Alors Madame et messieurs les candidats, je vous pose une question simple: Quand donc allez-vous prendre conscience des difficultés que rencontrent des millions de retraités? ', '2016-09-13', '8.jpg'),
(9, 2, 2, 'Comment vivre décemment avec une petite retraite ?', 'Quand on a travaillé toute sa vie, souvent on se retrouve avec, ce que les experts nomment avec mépris, une “petite” retraite. Mais comment vivre, vieillir avec 1000€ par mois? La solidarité nationale est la seule solution, car on peut s’en sortir à 20 ans mais à 85 ans c’est beaucoup plus difficile. Cette question devrait être au centre de tous les programmes des candidats mais personne n’en parle…D’ailleurs pour qui vont voter ces “petits” retraités ?', '2016-11-20', '9.jpg'),
(10, 2, 6, 'La 1/2 part fiscale doit être rétablie pour les veuves !', 'Il faut rétablir la demi-part fiscale pour les veuves,  c’est une vraie question de justice sociale car, que nous sachions, personne ne décide d’être veuve! En 2008, le gouvernement Fillon a décidé la suppression progressive de la demi-part de quotient familial accordée aux parents isolés (appelée “demi-part des veuves”) destinée aussi bien aux parents veufs, divorcés ou célibataires. De 855€ d’avantage fiscal en 2010, la réduction d’impôt a disparu en 2014.', '2016-04-19', '10.jpg'),
(11, 3, 6, 'Découvrez la première télé de Johnny Hallyday', 'Johnny a annoncé qu’il souffrait d’un cancer et nous a donné des nouvelles encourageantes”Alors je vous rassure, je vais très bien et je suis en bonne forme physique. On m’a effectivement dépisté il y a quelques mois des cellules cancéreuses pour lesquelles je suis actuellement traité”. Souvenez vous de sa première apparition télé, c’était avec sa marraine Line Renaud, et l’on pouvait voir un tout jeune homme de 17 ans, intimidé par les caméras. C’était il y a…57 ans ! ', '2016-01-13', '11.jpg'),
(12, 3, 7, 'Découvrez cet incroyable monsieur de 103 ans !', 'Chaque jour, Louis Souchon fait des altères, marche une heure par jour et rédige ses mémoires. Rien d’extraordinaire me direz-vous, sauf que ce monsieur a …103 ans et se porte comme un charme ! Il habite seul dans sa maison et déclare ” Je veux garder mon autonomie, pour moi le pire qui pourrait m’arriver ce serait de la perdre et non pas de mourir” Quel magnifique exemple !', '2016-11-24', '12.jpg'),
(13, 4, 8, 'A 81 ans, cette dame crée une application pour Iphone !', 'Depuis seulement 20 ans, à l’âge de la retraite, Masako Wakamiya une japonaise de 81 ans se passionne pour l’informatique. D’ailleurs, cette dame a constaté que peu d’applications pour les téléphones étaient destinées à un public senior. Alors avec beaucoup de travail et 6 mois d’abnégation, Masako a crée une application qui permet de mieux comprendre les coutumes japonaises traditionnelles mais aussi d’habiller virtuellement des poupées avec des costumes traditionnels du Japon. L’application remporte un énorme succès au Japon ! Et si nos seniors français se mettaient aussi à créer des applications pour les retraités ?', '2016-11-06', '13.jpg'),
(14, 4, 4, 'A 92 ans, il prend tranquillement l’autoroute en…fauteuil électrique !', 'Il parait que les voyages forment la jeunesse! Les conducteurs de l’autoroute reliant l’Angleterre à l’Ecosse ont cru avoir des hallucinations : un retraité de 92 ans circulait tranquillement sur cet axe routier très fréquenté avec son fauteuil roulant ! La police l’a reconduit à son domicile sans dresser de procès verbal. Erreur d’inattention surement ?', '2016-12-21', '13.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `IDUSER` int(3) NOT NULL,
  `PRENOMUSER` varchar(20) NOT NULL,
  `NOMUSER` varchar(20) NOT NULL,
  `ROLE` varchar(20) NOT NULL,
  `DATEDENAISSANCEUSER` date NOT NULL,
  `SEXEUSER` enum('Femme','Homme') NOT NULL,
  `MOTDEPASSEUSER` varchar(128) NOT NULL,
  `EMAILUSER` varchar(35) NOT NULL,
  `CPUSER` int(3) NOT NULL,
  `PHOTOUSER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`IDUSER`, `PRENOMUSER`, `NOMUSER`, `ROLE`, `DATEDENAISSANCEUSER`, `SEXEUSER`, `MOTDEPASSEUSER`, `EMAILUSER`, `CPUSER`, `PHOTOUSER`) VALUES
(1, 'Francois', 'Defalque', 'admin', '1989-05-04', 'Homme', 'eb7abf5f00d2dd1678fd3763b90d5ea7', 'fdefalque@gmail.com', 94000, ''),
(2, 'Arno', 'Reboul', 'admin', '1974-06-24', 'Homme', '43ce4351981eb9a7d8feb3a6ab68a893', 'arno.reboul@gmail.com', 75011, ''),
(3, 'Laurent', 'Blanc', 'user', '1960-03-08', 'Homme', '03f023c39a8c0f50d35a60537863970e', 'laurentblanc@psg.com', 75016, ''),
(4, 'Mathieu', 'Kassowitz', 'user', '1971-03-17', 'Homme', '98a25598d0c33f288a581f2d4eb42c87', 'mathieukassowitz@lahaine.fr', 75, ''),
(5, 'Audrey', 'Pulvar', 'user', '1970-03-23', 'Femme', '3f0e57152eac96133d49387a0e64ab5e', 'audreypulvar@gmail.com', 75, ''),
(6, 'Alessandra', 'Sublet', 'user', '1979-03-08', 'Femme', 'f685e3382d0c5bb5b7dd351424d968b8', 'alessandrasublet@yahoo.fr', 75, ''),
(7, 'Laurent', 'Ruquier', 'user', '1962-03-12', 'Homme', '9262591c655ffd505039a52788928aa6', 'larentruquier@france2.fr', 75, ''),
(8, 'Bernard', 'Tapie', 'user', '1954-01-10', 'Homme', '2e330d81e98d41a0c3e103ca1f7e5efc', 'bernardtapie@caramail.fr', 13, '');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `view_partage`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `view_partage` (
`IDPARTAGE` int(3)
,`IDUSER` int(3)
,`IDCATEGORIE` int(3)
,`LIBELLECATEGORIE` varchar(50)
,`CHEMIN` varchar(50)
,`TITREPARTAGE` varchar(100)
,`CONTENUPARTAGE` text
,`PHOTOPARTAGE` varchar(50)
,`DATEPARTAGE` date
,`NOMUSER` varchar(20)
,`PRENOMUSER` varchar(20)
,`EMAILUSER` varchar(35)
);

-- --------------------------------------------------------

--
-- Structure de la vue `view_partage`
--
DROP TABLE IF EXISTS `view_partage`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_partage`  AS  select `partages`.`IDPARTAGE` AS `IDPARTAGE`,`partages`.`IDUSER` AS `IDUSER`,`partages`.`IDCATEGORIE` AS `IDCATEGORIE`,`categories`.`LIBELLECATEGORIE` AS `LIBELLECATEGORIE`,`categories`.`CHEMIN` AS `CHEMIN`,`partages`.`TITREPARTAGE` AS `TITREPARTAGE`,`partages`.`CONTENUPARTAGE` AS `CONTENUPARTAGE`,`partages`.`PHOTOPARTAGE` AS `PHOTOPARTAGE`,`partages`.`DATEPARTAGE` AS `DATEPARTAGE`,`users`.`NOMUSER` AS `NOMUSER`,`users`.`PRENOMUSER` AS `PRENOMUSER`,`users`.`EMAILUSER` AS `EMAILUSER` from ((`partages` join `users`) join `categories`) where ((`partages`.`IDUSER` = `users`.`IDUSER`) and (`partages`.`IDCATEGORIE` = `categories`.`IDCATEGORIE`)) ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`IDCATEGORIE`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`IDCOMMENTAIRE`),
  ADD KEY `IDUSER` (`IDUSER`),
  ADD KEY `IDPARTAGE` (`IDPARTAGE`);

--
-- Index pour la table `partages`
--
ALTER TABLE `partages`
  ADD PRIMARY KEY (`IDPARTAGE`),
  ADD KEY `IDCATEGORIE` (`IDCATEGORIE`),
  ADD KEY `IDUSER` (`IDUSER`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `IDCATEGORIE` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `IDCOMMENTAIRE` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `partages`
--
ALTER TABLE `partages`
  MODIFY `IDPARTAGE` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `IDUSER` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`IDUSER`) REFERENCES `users` (`IDUSER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`IDPARTAGE`) REFERENCES `partages` (`IDPARTAGE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `partages`
--
ALTER TABLE `partages`
  ADD CONSTRAINT `partages_ibfk_1` FOREIGN KEY (`IDCATEGORIE`) REFERENCES `categories` (`IDCATEGORIE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `partages_ibfk_2` FOREIGN KEY (`IDUSER`) REFERENCES `users` (`IDUSER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
