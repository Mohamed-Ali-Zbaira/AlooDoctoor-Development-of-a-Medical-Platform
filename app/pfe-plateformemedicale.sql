-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 juin 2024 à 13:31
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe-plateformemedicale`
--

-- --------------------------------------------------------

--
-- Structure de la table `cliniques`
--

CREATE TABLE `cliniques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero_telephone` varchar(255) NOT NULL,
  `localisation_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cliniques`
--

INSERT INTO `cliniques` (`id`, `nom`, `user_id`, `ville`, `email`, `numero_telephone`, `localisation_link`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Clinique LA MEDINA', 5, 'Sfax', 'clinique_b@example.com', '22016013', 'https://maps.app.goo.gl/SfDHMSJmdswz6gdd9', 'https://www.sanitaire-social.com/media/cache/photo_fiche/images/photo/clinique-du-sport-de-bordeaux-merignac-merignac-33700-33-7477_PF1.jpg', 'La Polyclinique Sfax Medina est une nouvelle structure médicochirurgicale qui a ouvert ses portes depuis Octobre 2011 et qui allie technicité,modernisme et compétence.\r\nElle regroupe la plus part des spécialités médicales .\r\nLa Polyclinique Sfax Medina est dotée d’équipements de la toute dernière génération, d’une infrastructure moderne et fiable, et d’une équipe de professionnels spécialisés\r\net hautement qualifiés pour assurer une prise en charge de qualité.\r\nLa Polyclinique Sfax Medina se veut la clinique partenaire de votre santé', '2024-05-22 12:14:41', '2024-05-22 16:08:43'),
(2, 'clinique les oliviers', 5, 'Sousse', 'renseignement@cliniquelesoliviers.net', '+216 73 242 711', 'https://maps.app.goo.gl/f2ZCXvgR89LVQyu2A', 'https://www.sanitaire-social.com/media/cache/photo_fiche/images/photo/maison-de-sante-protestante-de-bordeaux-bagatelle-talence-33400-33-7584_PF1.jpg', 'Depuis sa création en 1976, la Clinique Les Oliviers 1ère clinique historique dans la région, s\'est engagée dans la qualité des prestations offertes à ses patients.\r\n\r\nRéputée pour le corps médical qui s\'y exerce ainsi que pour les investissements en terme d\'équipements et de matériels de pointe, la Clinique Les Oliviers se positionne aujourd\'hui parmi les établissements de santé références en Tunisie.\r\n\r\nSigne des efforts d\'amélioration en continu, la Clinique Les Oliviers a entamé des travaux d\'extension et de rénovation de ses locaux qui s\'achèveront en 2018.', NULL, NULL),
(3, 'POLYCLINIQUE TAOUFIK', 6, 'Tunisie', 'contact@hosgan.com', '+216 29 484 831', 'https://maps.app.goo.gl/97cwt9YzJAiTbLmi7', 'https://www.sanitaire-social.com/media/cache/photo_fiche/images/photo/maison-de-sante-d-epinay-lna-sante-epinay-sur-seine-93800-93-24880_PF1.jpg', 'À la clinique Tawfik, nous offrons uniquement des traitements que notre équipe croissante de médecins et de chirurgiens se spécialise comme l’ophtalmologie, la cardiologie, la chirurgie bariatrique et l’orthopédie. Ils sont parmi les plus expérimentés dans leur domaine et vous pouvez être assuré que vous êtes offert des conseils honnêtes et le traitement le plus approprié.\r\n\r\nNous utilisons des technologies de pointe et les techniques les plus avancées pour obtenir les meilleurs résultats avec le moins de perturbations possible dans votre vie quotidienne. Lorsque cela est approprié, nous effectuons des interventions qui ne nécessitent pas d’anesthésie générale ou de longues périodes de récupération. Nous sommes conscients que les traitements que nous proposons sont des interventions électives et pour cette raison, nous estimons qu’il est encore plus important d’adopter une approche conservatrice. Il est de notre devoir de protéger nos patients et de veiller à ce que leur expérience soit positive.', NULL, NULL),
(10, 'clinique Enour', 6, 'ariana', 'selecawic@mailinator.com', '+1 (583) 422-9792', 'Repellendus Aut et', 'https://www.sanitaire-social.com/media/cache/photo_fiche/images/photo/clinique-du-sport-de-bordeaux-merignac-merignac-33700-33-7477_PF1.jpg', 'Reprehenderit sed u', '2024-05-22 16:14:32', '2024-05-22 16:14:32'),
(11, 'clinique Enour', 6, 'sfax', 'repeky@mailinator.com', '55555', 'mahres', 'https://www.sanitaire-social.com/media/cache/photo_fiche/images/photo/clinique-du-sport-de-bordeaux-merignac-merignac-33700-33-7477_PF1.jpg', 'Natus et et ex imped', '2024-05-22 16:42:43', '2024-05-23 16:37:57'),
(12, 'clinique  Tawfik', 6, 'Mednine', 'latukoq@mailinator.com', '+1 (205) 244-9157', 'Rerum voluptatem si', 'https://www.sanitaire-social.com/media/cache/photo_fiche/images/photo/clinique-du-sport-de-bordeaux-merignac-merignac-33700-33-7477_PF1.jpg', 'Et necessitatibus re', '2024-05-23 16:38:06', '2024-05-23 16:38:06');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'ahmed', 'ahmed.bensalah@gmail.com', 'probleme technique', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, '2024-05-24 19:47:55', '2024-05-24 19:47:55'),
(5, 'ala', 'ala@gmailcom', 'probleme de rendez-Vous', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 19, '2024-05-24 19:49:11', '2024-05-24 19:49:11');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `filename`, `type`, `size`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Verification.pdf', 'pdf', '39743', 6, '2024-05-07 05:16:35', '2024-05-07 05:16:35'),
(2, 'Verification 2.pdf', 'pdf', '39743', 6, '2024-05-07 05:16:59', '2024-05-07 05:16:59'),
(3, 'Cv.pdf', 'pdf', '231756', 20, '2024-05-25 21:09:43', '2024-05-25 21:09:43'),
(5, 'pageegardeee.pdf', 'pdf', '109620', 24, '2024-06-10 18:17:06', '2024-06-10 18:17:06');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(37, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2024_03_11_212112_create_posts_table', 1),
(40, '2024_03_11_212329_create_comments_table', 1),
(41, '2024_03_13_232420_create_contacts_table', 1),
(42, '2024_03_26_212407_create_operations_table', 1),
(43, '2024_03_28_032049_create_rendezvous_table', 1),
(44, '2024_04_07_020541_create_documents_table', 1),
(45, '2024_04_19_170023_create_rendezvous_operations_table', 1),
(46, '2024_04_19_170914_add_operation_id_to_rendezvous_operations_table', 1),
(47, '2024_05_22_144451_create_cliniques_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

CREATE TABLE `operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tarifs` double(8,2) NOT NULL,
  `date` datetime NOT NULL,
  `duree` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `medecin` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `etablissement_medical` varchar(255) NOT NULL,
  `numero_chambre` int(11) DEFAULT NULL,
  `statut` varchar(255) NOT NULL,
  `complications` text DEFAULT NULL,
  `preparatifs_pre_operatoires` text DEFAULT NULL,
  `suivi_post_operatoire` text DEFAULT NULL,
  `documents_associes` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `operations`
--

INSERT INTO `operations` (`id`, `nom`, `ville`, `tarifs`, `date`, `duree`, `description`, `medecin`, `image`, `etablissement_medical`, `numero_chambre`, `statut`, `complications`, `preparatifs_pre_operatoires`, `suivi_post_operatoire`, `documents_associes`, `notes`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Chirurgie du genou', 'Tunis', 5000.00, '2024-04-05 00:00:00', '3 heures', 'Réparation du ligament croisé', 'Dr. Ahmed Ben Salah', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1716586752/latest%20PFE/Operation/gallery-1_neix9t.jpg', 'Clinique Tunisienne', 0, 'En cours', 'Hypotension pendant l\'intervention', 'Arrêt de l\'alimentation et de l\'eau 8 heures avant la chirurgie', 'Consultation de suivi une semaine après la chirurgie', 'Résultats de l\'IRM, consentement éclairé', 'Pas de complications notables', 1, '2024-04-04 17:43:35', '2024-04-04 17:43:35'),
(2, ' genou', 'sfax', 8000.00, '2024-04-05 00:00:00', '3 heures', 'Réparation du ligament croisé', 'Dr. Ahmed Ben Salah', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1716586752/latest%20PFE/Operation/gallery-8_owdnjb.jpg', 'Clinique Ennour', 0, 'En cours', 'Hypotension pendant l\'intervention', 'Arrêt de l\'alimentation et de l\'eau 8 heures avant la chirurgie', 'Consultation de suivi une semaine après la chirurgie', 'Résultats de l\'IRM, consentement éclairé', 'Pas de complications notables', 1, '2024-04-04 17:43:35', '2024-04-04 17:43:35'),
(3, 'Appendicectomie', 'monastir', 9000.00, '2024-04-05 00:00:00', '3 heures', 'Réparation du ligament croisé', 'Dr. Ahmed Ben Salah', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1716586751/latest%20PFE/Operation/gallery-7_hhixtx.jpg', 'Clinique Tunisienne', 0, 'En cours', 'Hypotension pendant l\'intervention', 'Arrêt de l\'alimentation et de l\'eau 8 heures avant la chirurgie', 'Consultation de suivi une semaine après la chirurgie', 'Résultats de l\'IRM, consentement éclairé', 'Pas de complications notables', 6, '2024-04-04 17:43:35', '2024-04-04 17:43:35');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 19, 'authToken', '721a34d5a8913f469ef7d0abc624241f182e90d4598a180db2bf3a457b7f4a1c', '[\"*\"]', NULL, NULL, '2024-05-24 19:48:27', '2024-05-24 19:48:27'),
(2, 'App\\Models\\User', 20, 'authToken', 'ece0f379c2d40f080d9294844cf39bf9b83066f51f6d6a038facb1150d2a79c6', '[\"*\"]', NULL, NULL, '2024-05-25 21:09:25', '2024-05-25 21:09:25'),
(3, 'App\\Models\\User', 22, 'authToken', 'e3b56b21c1ba46cc15915b649d13c0383700d3e92f94075778b6816f127edf98', '[\"*\"]', NULL, NULL, '2024-05-31 18:53:28', '2024-05-31 18:53:28'),
(4, 'App\\Models\\User', 23, 'authToken', '224f49014c71cdae831ead4f57a31b1546fa6eb104718d9628f4e97ca7460f15', '[\"*\"]', NULL, NULL, '2024-05-31 18:57:05', '2024-05-31 18:57:05'),
(5, 'App\\Models\\User', 24, 'authToken', 'aa4a7faeae954a8345bf145532cd16a42d7e9e05c90ee7a462e9c0331ed6ea3d', '[\"*\"]', NULL, NULL, '2024-06-10 18:16:44', '2024-06-10 18:16:44'),
(6, 'App\\Models\\User', 25, 'authToken', '8a2b66bcc9220e911af9f926078ea11cd5bd35a8d04d9d3f4f4475ade1f0de05', '[\"*\"]', NULL, NULL, '2024-06-11 09:22:54', '2024-06-11 09:22:54'),
(7, 'App\\Models\\User', 26, 'authToken', 'c23cc8b92c095a4988fb0b8d060456a73b931d350d0d24b2187138c5b505b927', '[\"*\"]', NULL, NULL, '2024-06-11 20:10:29', '2024-06-11 20:10:29');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `category`, `body`, `image`, `created_at`, `updated_at`) VALUES
(2, 6, 'Régime végétarien', 'NUTRITION', 'Suivre un régime végétarien peut être bénéfique pour la santé, mais il est important de s\'assurer d\'obtenir tous les nutriments essentiels pour éviter les carences. Nos médecins généralistes vous conseillent si vous envisagez d’adopter un régime sans protéines animales.\n\nRégime végétarien : qu’est-ce que c’est ?\nLe régime végétarien est un mode alimentaire qui exclut la consommation de viande et de poisson. Les végétariens se nourrissent principalement de produits d\'origine végétale tels que les fruits, les légumes, les céréales, les légumineuses, les noix et les graines. Il existe différentes formes de végétarisme :\n\nLacto-ovo-végétarisme : les personnes qui suivent ce régime excluent la viande et le poisson, mais consomment des produits laitiers (lacto) et des œufs (ovo) ;\nLacto-végétarisme : les adeptes de ce régime évitent la viande, le poisson et les œufs, mais incluent les produits laitiers tels que les yaourts ou le fromage ;\nOvo-végétarisme : les personnes ovo-végétariennes évitent la viande, le poisson et les produits laitiers, mais consomment des œufs ;\nVégétalisme : aussi connu sous le nom de régime végane, il exclut complètement tous les produits d\'origine animale, y compris la viande, le poisson, les produits laitiers, les œufs et le miel. Les véganes se nourrissent uniquement d’aliments d\'origine végétale.\nLes raisons de choisir un régime végétarien peuvent varier selon les individus, allant des préoccupations concernant la santé aux convictions éthiques ou environnementales.\n\nQuels sont les bienfaits du régime végétarien ?\nLe régime végétarien offre de nombreux bienfaits pour la santé, notamment :\n\nMeilleure santé cardiaque : en général, les régimes végétariens sont associés à un risque réduit de maladies cardiovasculaires. Ils sont souvent riches en fibres, en antioxydants et en acides gras insaturés, ce qui peut contribuer à abaisser le taux de cholestérol et à améliorer la santé du cœur et des vaisseaux sanguins ;\nContrôle du poids : un régime végétarien équilibré et riche en aliments à base de végétaux tend à être plus faible en calories et en gras saturés, ce qui peut aider à maintenir un poids santé ;\nMeilleure gestion du diabète de type 2 : des études suggèrent que les régimes végétariens peuvent aider à contrôler la glycémie et à améliorer la sensibilité à l\'insuline chez les personnes atteintes de diabète de type 2 ;\nRéduction du risque de certains cancers : les régimes végétariens riches en fruits, légumes, fibres et phytonutriments peuvent être associés à un risque réduit de certains cancers, notamment le cancer colorectal ;\nDigestion améliorée : les régimes végétariens riches en fibres provenant des fruits, légumes, légumineuses et céréales complètes peuvent favoriser une meilleure digestion et réduire les problèmes gastro-intestinaux ;\nDurabilité environnementale : le régime végétarien permet de réduire son impact environnemental en réduisant la consommation de ressources telles que l\'eau et en diminuant les émissions de gaz à effet de serre associées à l\'élevage intensif animal.\nPour bénéficier pleinement des avantages d\'un régime végétarien, il est essentiel de planifier son alimentation de manière à obtenir tous les nutriments nécessaires. Il est recommandé de consulter un diététicien ou un nutritionniste pour des conseils adaptés à vos besoins.\n\nQuels sont les risques du régime végétarien ?\nAdopter un régime végétarien présente plusieurs avantages pour la santé, mais il est également important de connaître les risques potentiels associés à ce type d\'alimentation :\n\nCarence en certains nutriments : un régime végétarien mal planifié peut entraîner des carences en certains nutriments essentiels comme la vitamine B12, le fer, le calcium et les acides gras oméga-3. Cependant, ces carences peuvent être évitées en planifiant son alimentation et en choisissant judicieusement ses aliments ;\nBesoins accrus en fer : le fer non héminique (présent dans les végétaux) est moins facilement assimilé par l\'organisme que le fer héminique (présent dans la viande). Les végétariens doivent donc veiller à consommer suffisamment de sources de fer et à l\'associer à de la vitamine C pour améliorer son absorption ;\nDépendance excessive à certains aliments : les personnes adoptant un régime végétarien peuvent avoir tendance à se tourner vers certains aliments comme les produits transformés riches en glucides simples ou les substituts de viande ultra-transformés, aliments néfastes pour la santé ;\nRisque de choix alimentaires déséquilibrés : certaines personnes peuvent adopter un régime végétarien peu varié, ce qui peut entraîner une insuffisance en certains nutriments ou une consommation excessive d\'autres nutriments ;\nImpact social : dans certaines situations sociales, comme les repas en famille ou les sorties entre amis, il peut être difficile de trouver des options végétariennes car le végétarisme n’est pas toujours bien perçu ou compris, ce qui peut créer des situations inconfortables.\nComment éviter les carences quand on adopte un régime végétarien ?\nPour éviter les carences lors d’un régime végétarien, assurez-vous d\'obtenir tous les nutriments essentiels au bon fonctionnement de l’organisme. Voici quelques conseils :\n\nProtéines : inclure des sources de protéines végétales telles que les légumineuses (lentilles, pois chiches, haricots), le tofu, le tempeh, les produits à base de soja et les céréales complètes ;\nFer : consommer des aliments riches en fer comme les légumes verts (épinards, kale), les légumineuses, les graines de citrouille, les fruits secs et les céréales complètes. Pour une meilleure absorption du fer, combinez ces aliments avec ceux riches en vitamine C comme les agrumes, les poivrons ou les tomates ;\nCalcium : les produits laitiers pouvant être exclus de certains régimes végétariens, optez pour des alternatives riches en calcium comme le lait de soja enrichi, les légumes verts à feuilles, le tofu préparé avec du calcium, les fruits à coque (amandes, noix) et les graines de sésame ;\nVitamine B12 : cette vitamine se trouve uniquement dans les produits d’origine animale (viande, poisson, produits laitiers et œufs). Les personnes suivant un régime végétalien doivent impérativement consommer des compléments alimentaires ou des aliments enrichis en B12 (laits végétaux par exemple) ;\nOméga-3 : optez pour des sources végétales d\'oméga-3 comme les graines de lin, les noix, l\'huile de lin et les algues pour maintenir un bon équilibre en acides gras essentiels ;\nIode : assurez-vous d\'inclure du sel iodé dans votre alimentation ou consommez des algues marines, qui sont une bonne source d\'iode.\nSi malgré une alimentation équilibrée et variée vous faites face à des carences nutritionnelles, n’hésitez pas à vous faire accompagner par un professionnel de santé.\n\nÀ qui s’adresse le régime végétarien ?\nEn principe, la plupart des gens peuvent adopter un régime végétarien s\'ils planifient soigneusement leur alimentation pour s\'assurer d\'obtenir tous les nutriments essentiels. Cependant, il est important de prendre en compte certains aspects :\n\nÉtat de santé : dans certaines situations, un régime végétarien peut nécessiter une attention particulière. Par exemple, les femmes enceintes, les enfants en pleine croissance ou les personnes ayant des besoins nutritionnels spéciaux doivent être particulièrement vigilants pour obtenir tous les nutriments nécessaires ;\nPréférences alimentaires et culturelles : les préférences individuelles et les habitudes alimentaires peuvent rendre plus ou moins facile l\'adoption d\'un régime végétarien. Certaines personnes peuvent trouver la transition plus simple que d\'autres ;\nPlanification et connaissance nutritionnelle : bien planifier son alimentation est crucial pour éviter les carences nutritionnelles. Comprendre les sources de protéines végétales, les nutriments clés et comment équilibrer les repas est indispensable pour un régime végétarien réussi.\nEn général, avec une planification adéquate et une attention portée à la variété des aliments consommés, la plupart des individus peuvent adopter un régime végétarien sans problèmes majeurs. Cependant, il est toujours conseillé de consulter un professionnel de santé avant de faire des changements importants dans son alimentation, surtout si des préoccupations particulières sont présentes.\n\nComment se faire accompagner quand on souhaite devenir végétarien ?\nIl existe plusieurs moyens de se faire accompagner lorsque l\'on souhaite devenir végétarien :\n\nConsultation avec un professionnel de santé : un nutritionniste ou un diététicien peut offrir des conseils personnalisés en élaborant un plan alimentaire adapté à vos besoins nutritionnels spécifiques. Ils peuvent vous aider à éviter les carences tout en adoptant un régime végétarien équilibré ;\nRecherche et documentation : des livres, des sites web, et des ressources spécialisées peuvent fournir des informations détaillées sur le végétarisme, les nutriments essentiels et des recettes équilibrées pour un régime végétarien ;\nCommunauté et groupes de soutien : rejoindre des groupes de soutien en ligne ou en présentiel peut être bénéfique. Ils offrent un espace pour poser des questions, partager des expériences et trouver du soutien auprès de personnes partageant les mêmes envies et objectifs.\nCuisiner et expérimenter : apprendre de nouvelles recettes et faire de nouvelles expériences culinaires peut rendre la transition plus intéressante et agréable. Des cours de cuisine végétarienne peuvent également être disponibles localement ou en ligne ;\nApplications et outils : des applications et des outils en ligne sont facilement accessibles et peuvent vous aider à planifier les repas, suivre l\'apport nutritionnel et découvrir de nouvelles recettes adaptées au végétarisme.\nEn combinant ces ressources et en étant ouvert à l\'apprentissage et à l\'exploration de nouvelles options alimentaires, il est possible de faire une transition en douceur vers un régime végétarien tout en maintenant une alimentation équilibrée et nutritive.\n\nSi vous avez des questions concernant votre situation ou si vous souhaitez obtenir davantage de conseils quant à la mise en place d’un régime végétarien ou végétalien n’hésitez pas à vous rapprocher de votre médecin traitant, d’un nutritionniste ou d’un diététicien. Sur Livi, nos médecins généralistes sont en mesure de vous apporter des réponses tous les jours, de 6h à minuit en téléconsultation.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-2_gslnhz.jpg', '2024-03-24 21:07:23', '2024-03-24 21:07:23'),
(3, 6, 'Café ', 'MÉDECINE GÉNÉRALE\n\n\n', 'Le café est bien plus qu\'une simple boisson quotidienne pour beaucoup, c\'est une expérience délectable qui stimule les sens et offre une multitude d\'avantages pour la santé si consommé avec modération. Savouré quotidiennement par des millions de personnes à travers le monde, le café est une boisson appréciée pour son goût riche et ses propriétés revitalisantes.\n\nQu’est-ce que le café ?\nLa caféine est une molécule contenue dans le café, qui peut être catégorisée comme “psychotrope”, c’est-à-dire qu’elle agit directement sur le système nerveux central, pouvant entraîner des effets psychologiques et physiologiques. La caféine est un stimulant qui peut augmenter la vigilance, améliorer la concentration et même induire une sensation de bien-être chez certaines personnes. Cependant, à des doses trop élevées, elle peut également causer de l\'anxiété, des palpitations cardiaques et des troubles du sommeil.\n\nQuels sont les bienfaits du café ?\nLe café offre plusieurs bienfaits pour la santé lorsqu\'il est consommé raisonnablement. Il pourrait même offrir une certaine protection contre certaines maladies. Voici quelques-uns de ses avantages :\n\nSource d\'antioxydants : le café est riche en antioxydants, aidant à lutter contre un vieillissement prématuré de la peau ;\nAmélioration des fonctions cérébrales : la caféine peut augmenter la concentration et stimuler la mémoire et les fonctions cognitives ;\nProtection contre certaines maladies : des études ont suggéré que la consommation modérée de café pourrait modérément réduire le risque de maladies comme le diabète de type 2 en influençant positivement la régulation du sucre dans le sang, les maladies cardiaques grâce aux antioxydants présents dans le café qui contribuent à protéger le cœur, voire certains types de cancers comme le cancer colorectal et le cancer du foie. Les antioxydants et d\'autres composés présents dans le café pourraient jouer un rôle protecteur ;\nSoutien pour la santé métabolique : la caféine peut stimuler le métabolisme, favorisant ainsi la combustion des graisses et améliorant parfois les performances physiques ;\nEffet positif sur certaines conditions neurologiques : certaines études encore en cours et donc à prendre avec précaution, montrent que la consommation de café pourrait être associée à un moindre risque de maladies neurodégénératives telles que la maladie de Parkinson ou la maladie d\'Alzheimer. Les mécanismes exacts ne sont pas totalement compris, mais les antioxydants et d\'autres composés bioactifs pourraient avoir un effet protecteur sur le cerveau.\nIl est cependant crucial de consommer du café avec modération, car une consommation excessive peut entraîner des effets indésirables. De plus, les réponses individuelles à la caféine varient, donc il est conseillé d’adapter sa consommation en fonction de sa tolérance, afin d’éviter l’apparition d’effets secondaires potentiels.\n\nNutriments contenus dans le café\nLe café est consommé le plus souvent comme une boisson, et les quantités ingérées ne contiennent pas une quantité significative de nutriments. Cependant, il renferme des antioxydants et quelques minéraux bénéfiques pour la santé. Les principaux nutriments que l\'on peut trouver dans le café sont :\n\nles antioxydants : le café est une source importante d\'antioxydants tels que les acides chlorogéniques. Ces composés aident à neutraliser les radicaux libres dans le corps et peuvent contribuer à réduire les dommages causés par ces substances nocives ;\nles vitamines et minéraux : bien que présents en quantités relativement modestes, le café contient certaines vitamines et des minéraux, notamment du magnésium, du potassium, de la riboflavine (vitamine B2) et de la niacine (vitamine B3).\nQuelle quantité de café boire pour profiter de ses bienfaits ?\nLa quantité de café nécessaire pour profiter de ses bienfaits varie d\'une personne à l\'autre en raison de la tolérance individuelle à la caféine et d\'autres facteurs. Généralement, la plupart des études suggèrent que la consommation modérée de café est bénéfique pour la santé.\n\nEn général, une consommation modérée est considérée comme étant de 3 à 4 tasses de café par jour, ce qui équivaut à environ 300 à 400 milligrammes de caféine. Cependant, il est important de noter que la teneur en caféine varie selon le type de café et la méthode de préparation : 4 expressos ne valent pas 4 tasses de café filtre par exemple.\n\nIl est nécessaire de se renseigner sur les méthodes de réalisation de café qui engendre un plus fort taux de caféine en fonction de la méthode utilisée pour réaliser un café. Par exemple, les méthodes qui entraînent une infusion du café (exemple french press), vont donner un café bien plus fort en caféine qu’une méthode de filtration.\n\nIl est aussi essentiel de surveiller sa propre tolérance à la caféine, car certaines personnes peuvent ressentir des effets indésirables même avec de petites quantités de café. Des effets tels que l\'anxiété, les palpitations cardiaques, les troubles du sommeil ou les problèmes gastro-intestinaux peuvent se manifester chez certaines personnes sensibles à la caféine.\n\nLa clé pour profiter des bienfaits du café est de le consommer avec modération et de surveiller comment votre corps réagit à la caféine. Si vous avez des préoccupations concernant votre consommation de café, il est recommandé de consulter un professionnel de santé pour des conseils personnalisés. Sur Livi, vous pouvez consulter un médecin généraliste ou un gastro-entérologue 7j/7 de 6h à minuit.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-1_bzpdxg.jpg', '2024-03-24 21:07:23', '2024-03-24 21:07:23'),
(5, 5, 'Régime végétarien', 'NUTRITION', 'Suivre un régime végétarien peut être bénéfique pour la santé, mais il est important de s\'assurer d\'obtenir tous les nutriments essentiels pour éviter les carences. Nos médecins généralistes vous conseillent si vous envisagez d’adopter un régime sans protéines animales.\n\nRégime végétarien : qu’est-ce que c’est ?\nLe régime végétarien est un mode alimentaire qui exclut la consommation de viande et de poisson. Les végétariens se nourrissent principalement de produits d\'origine végétale tels que les fruits, les légumes, les céréales, les légumineuses, les noix et les graines. Il existe différentes formes de végétarisme :\n\nLacto-ovo-végétarisme : les personnes qui suivent ce régime excluent la viande et le poisson, mais consomment des produits laitiers (lacto) et des œufs (ovo) ;\nLacto-végétarisme : les adeptes de ce régime évitent la viande, le poisson et les œufs, mais incluent les produits laitiers tels que les yaourts ou le fromage ;\nOvo-végétarisme : les personnes ovo-végétariennes évitent la viande, le poisson et les produits laitiers, mais consomment des œufs ;\nVégétalisme : aussi connu sous le nom de régime végane, il exclut complètement tous les produits d\'origine animale, y compris la viande, le poisson, les produits laitiers, les œufs et le miel. Les véganes se nourrissent uniquement d’aliments d\'origine végétale.\nLes raisons de choisir un régime végétarien peuvent varier selon les individus, allant des préoccupations concernant la santé aux convictions éthiques ou environnementales.\n\nQuels sont les bienfaits du régime végétarien ?\nLe régime végétarien offre de nombreux bienfaits pour la santé, notamment :\n\nMeilleure santé cardiaque : en général, les régimes végétariens sont associés à un risque réduit de maladies cardiovasculaires. Ils sont souvent riches en fibres, en antioxydants et en acides gras insaturés, ce qui peut contribuer à abaisser le taux de cholestérol et à améliorer la santé du cœur et des vaisseaux sanguins ;\nContrôle du poids : un régime végétarien équilibré et riche en aliments à base de végétaux tend à être plus faible en calories et en gras saturés, ce qui peut aider à maintenir un poids santé ;\nMeilleure gestion du diabète de type 2 : des études suggèrent que les régimes végétariens peuvent aider à contrôler la glycémie et à améliorer la sensibilité à l\'insuline chez les personnes atteintes de diabète de type 2 ;\nRéduction du risque de certains cancers : les régimes végétariens riches en fruits, légumes, fibres et phytonutriments peuvent être associés à un risque réduit de certains cancers, notamment le cancer colorectal ;\nDigestion améliorée : les régimes végétariens riches en fibres provenant des fruits, légumes, légumineuses et céréales complètes peuvent favoriser une meilleure digestion et réduire les problèmes gastro-intestinaux ;\nDurabilité environnementale : le régime végétarien permet de réduire son impact environnemental en réduisant la consommation de ressources telles que l\'eau et en diminuant les émissions de gaz à effet de serre associées à l\'élevage intensif animal.\nPour bénéficier pleinement des avantages d\'un régime végétarien, il est essentiel de planifier son alimentation de manière à obtenir tous les nutriments nécessaires. Il est recommandé de consulter un diététicien ou un nutritionniste pour des conseils adaptés à vos besoins.\n\nQuels sont les risques du régime végétarien ?\nAdopter un régime végétarien présente plusieurs avantages pour la santé, mais il est également important de connaître les risques potentiels associés à ce type d\'alimentation :\n\nCarence en certains nutriments : un régime végétarien mal planifié peut entraîner des carences en certains nutriments essentiels comme la vitamine B12, le fer, le calcium et les acides gras oméga-3. Cependant, ces carences peuvent être évitées en planifiant son alimentation et en choisissant judicieusement ses aliments ;\nBesoins accrus en fer : le fer non héminique (présent dans les végétaux) est moins facilement assimilé par l\'organisme que le fer héminique (présent dans la viande). Les végétariens doivent donc veiller à consommer suffisamment de sources de fer et à l\'associer à de la vitamine C pour améliorer son absorption ;\nDépendance excessive à certains aliments : les personnes adoptant un régime végétarien peuvent avoir tendance à se tourner vers certains aliments comme les produits transformés riches en glucides simples ou les substituts de viande ultra-transformés, aliments néfastes pour la santé ;\nRisque de choix alimentaires déséquilibrés : certaines personnes peuvent adopter un régime végétarien peu varié, ce qui peut entraîner une insuffisance en certains nutriments ou une consommation excessive d\'autres nutriments ;\nImpact social : dans certaines situations sociales, comme les repas en famille ou les sorties entre amis, il peut être difficile de trouver des options végétariennes car le végétarisme n’est pas toujours bien perçu ou compris, ce qui peut créer des situations inconfortables.\nComment éviter les carences quand on adopte un régime végétarien ?\nPour éviter les carences lors d’un régime végétarien, assurez-vous d\'obtenir tous les nutriments essentiels au bon fonctionnement de l’organisme. Voici quelques conseils :\n\nProtéines : inclure des sources de protéines végétales telles que les légumineuses (lentilles, pois chiches, haricots), le tofu, le tempeh, les produits à base de soja et les céréales complètes ;\nFer : consommer des aliments riches en fer comme les légumes verts (épinards, kale), les légumineuses, les graines de citrouille, les fruits secs et les céréales complètes. Pour une meilleure absorption du fer, combinez ces aliments avec ceux riches en vitamine C comme les agrumes, les poivrons ou les tomates ;\nCalcium : les produits laitiers pouvant être exclus de certains régimes végétariens, optez pour des alternatives riches en calcium comme le lait de soja enrichi, les légumes verts à feuilles, le tofu préparé avec du calcium, les fruits à coque (amandes, noix) et les graines de sésame ;\nVitamine B12 : cette vitamine se trouve uniquement dans les produits d’origine animale (viande, poisson, produits laitiers et œufs). Les personnes suivant un régime végétalien doivent impérativement consommer des compléments alimentaires ou des aliments enrichis en B12 (laits végétaux par exemple) ;\nOméga-3 : optez pour des sources végétales d\'oméga-3 comme les graines de lin, les noix, l\'huile de lin et les algues pour maintenir un bon équilibre en acides gras essentiels ;\nIode : assurez-vous d\'inclure du sel iodé dans votre alimentation ou consommez des algues marines, qui sont une bonne source d\'iode.\nSi malgré une alimentation équilibrée et variée vous faites face à des carences nutritionnelles, n’hésitez pas à vous faire accompagner par un professionnel de santé.\n\nÀ qui s’adresse le régime végétarien ?\nEn principe, la plupart des gens peuvent adopter un régime végétarien s\'ils planifient soigneusement leur alimentation pour s\'assurer d\'obtenir tous les nutriments essentiels. Cependant, il est important de prendre en compte certains aspects :\n\nÉtat de santé : dans certaines situations, un régime végétarien peut nécessiter une attention particulière. Par exemple, les femmes enceintes, les enfants en pleine croissance ou les personnes ayant des besoins nutritionnels spéciaux doivent être particulièrement vigilants pour obtenir tous les nutriments nécessaires ;\nPréférences alimentaires et culturelles : les préférences individuelles et les habitudes alimentaires peuvent rendre plus ou moins facile l\'adoption d\'un régime végétarien. Certaines personnes peuvent trouver la transition plus simple que d\'autres ;\nPlanification et connaissance nutritionnelle : bien planifier son alimentation est crucial pour éviter les carences nutritionnelles. Comprendre les sources de protéines végétales, les nutriments clés et comment équilibrer les repas est indispensable pour un régime végétarien réussi.\nEn général, avec une planification adéquate et une attention portée à la variété des aliments consommés, la plupart des individus peuvent adopter un régime végétarien sans problèmes majeurs. Cependant, il est toujours conseillé de consulter un professionnel de santé avant de faire des changements importants dans son alimentation, surtout si des préoccupations particulières sont présentes.\n\nComment se faire accompagner quand on souhaite devenir végétarien ?\nIl existe plusieurs moyens de se faire accompagner lorsque l\'on souhaite devenir végétarien :\n\nConsultation avec un professionnel de santé : un nutritionniste ou un diététicien peut offrir des conseils personnalisés en élaborant un plan alimentaire adapté à vos besoins nutritionnels spécifiques. Ils peuvent vous aider à éviter les carences tout en adoptant un régime végétarien équilibré ;\nRecherche et documentation : des livres, des sites web, et des ressources spécialisées peuvent fournir des informations détaillées sur le végétarisme, les nutriments essentiels et des recettes équilibrées pour un régime végétarien ;\nCommunauté et groupes de soutien : rejoindre des groupes de soutien en ligne ou en présentiel peut être bénéfique. Ils offrent un espace pour poser des questions, partager des expériences et trouver du soutien auprès de personnes partageant les mêmes envies et objectifs.\nCuisiner et expérimenter : apprendre de nouvelles recettes et faire de nouvelles expériences culinaires peut rendre la transition plus intéressante et agréable. Des cours de cuisine végétarienne peuvent également être disponibles localement ou en ligne ;\nApplications et outils : des applications et des outils en ligne sont facilement accessibles et peuvent vous aider à planifier les repas, suivre l\'apport nutritionnel et découvrir de nouvelles recettes adaptées au végétarisme.\nEn combinant ces ressources et en étant ouvert à l\'apprentissage et à l\'exploration de nouvelles options alimentaires, il est possible de faire une transition en douceur vers un régime végétarien tout en maintenant une alimentation équilibrée et nutritive.\n\nSi vous avez des questions concernant votre situation ou si vous souhaitez obtenir davantage de conseils quant à la mise en place d’un régime végétarien ou végétalien n’hésitez pas à vous rapprocher de votre médecin traitant, d’un nutritionniste ou d’un diététicien. Sur Livi, nos médecins généralistes sont en mesure de vous apporter des réponses tous les jours, de 6h à minuit en téléconsultation.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-1_bzpdxg.jpg', '2024-03-24 21:07:23', '2024-06-09 09:00:57'),
(6, 5, 'Café ', 'MÉDECINE GÉNÉRALE\n\n\n', 'Le café est bien plus qu\'une simple boisson quotidienne pour beaucoup, c\'est une expérience délectable qui stimule les sens et offre une multitude d\'avantages pour la santé si consommé avec modération. Savouré quotidiennement par des millions de personnes à travers le monde, le café est une boisson appréciée pour son goût riche et ses propriétés revitalisantes.\n\nQu’est-ce que le café ?\nLa caféine est une molécule contenue dans le café, qui peut être catégorisée comme “psychotrope”, c’est-à-dire qu’elle agit directement sur le système nerveux central, pouvant entraîner des effets psychologiques et physiologiques. La caféine est un stimulant qui peut augmenter la vigilance, améliorer la concentration et même induire une sensation de bien-être chez certaines personnes. Cependant, à des doses trop élevées, elle peut également causer de l\'anxiété, des palpitations cardiaques et des troubles du sommeil.\n\nQuels sont les bienfaits du café ?\nLe café offre plusieurs bienfaits pour la santé lorsqu\'il est consommé raisonnablement. Il pourrait même offrir une certaine protection contre certaines maladies. Voici quelques-uns de ses avantages :\n\nSource d\'antioxydants : le café est riche en antioxydants, aidant à lutter contre un vieillissement prématuré de la peau ;\nAmélioration des fonctions cérébrales : la caféine peut augmenter la concentration et stimuler la mémoire et les fonctions cognitives ;\nProtection contre certaines maladies : des études ont suggéré que la consommation modérée de café pourrait modérément réduire le risque de maladies comme le diabète de type 2 en influençant positivement la régulation du sucre dans le sang, les maladies cardiaques grâce aux antioxydants présents dans le café qui contribuent à protéger le cœur, voire certains types de cancers comme le cancer colorectal et le cancer du foie. Les antioxydants et d\'autres composés présents dans le café pourraient jouer un rôle protecteur ;\nSoutien pour la santé métabolique : la caféine peut stimuler le métabolisme, favorisant ainsi la combustion des graisses et améliorant parfois les performances physiques ;\nEffet positif sur certaines conditions neurologiques : certaines études encore en cours et donc à prendre avec précaution, montrent que la consommation de café pourrait être associée à un moindre risque de maladies neurodégénératives telles que la maladie de Parkinson ou la maladie d\'Alzheimer. Les mécanismes exacts ne sont pas totalement compris, mais les antioxydants et d\'autres composés bioactifs pourraient avoir un effet protecteur sur le cerveau.\nIl est cependant crucial de consommer du café avec modération, car une consommation excessive peut entraîner des effets indésirables. De plus, les réponses individuelles à la caféine varient, donc il est conseillé d’adapter sa consommation en fonction de sa tolérance, afin d’éviter l’apparition d’effets secondaires potentiels.\n\nNutriments contenus dans le café\nLe café est consommé le plus souvent comme une boisson, et les quantités ingérées ne contiennent pas une quantité significative de nutriments. Cependant, il renferme des antioxydants et quelques minéraux bénéfiques pour la santé. Les principaux nutriments que l\'on peut trouver dans le café sont :\n\nles antioxydants : le café est une source importante d\'antioxydants tels que les acides chlorogéniques. Ces composés aident à neutraliser les radicaux libres dans le corps et peuvent contribuer à réduire les dommages causés par ces substances nocives ;\nles vitamines et minéraux : bien que présents en quantités relativement modestes, le café contient certaines vitamines et des minéraux, notamment du magnésium, du potassium, de la riboflavine (vitamine B2) et de la niacine (vitamine B3).\nQuelle quantité de café boire pour profiter de ses bienfaits ?\nLa quantité de café nécessaire pour profiter de ses bienfaits varie d\'une personne à l\'autre en raison de la tolérance individuelle à la caféine et d\'autres facteurs. Généralement, la plupart des études suggèrent que la consommation modérée de café est bénéfique pour la santé.\n\nEn général, une consommation modérée est considérée comme étant de 3 à 4 tasses de café par jour, ce qui équivaut à environ 300 à 400 milligrammes de caféine. Cependant, il est important de noter que la teneur en caféine varie selon le type de café et la méthode de préparation : 4 expressos ne valent pas 4 tasses de café filtre par exemple.\n\nIl est nécessaire de se renseigner sur les méthodes de réalisation de café qui engendre un plus fort taux de caféine en fonction de la méthode utilisée pour réaliser un café. Par exemple, les méthodes qui entraînent une infusion du café (exemple french press), vont donner un café bien plus fort en caféine qu’une méthode de filtration.\n\nIl est aussi essentiel de surveiller sa propre tolérance à la caféine, car certaines personnes peuvent ressentir des effets indésirables même avec de petites quantités de café. Des effets tels que l\'anxiété, les palpitations cardiaques, les troubles du sommeil ou les problèmes gastro-intestinaux peuvent se manifester chez certaines personnes sensibles à la caféine.\n\nLa clé pour profiter des bienfaits du café est de le consommer avec modération et de surveiller comment votre corps réagit à la caféine. Si vous avez des préoccupations concernant votre consommation de café, il est recommandé de consulter un professionnel de santé pour des conseils personnalisés. Sur Livi, vous pouvez consulter un médecin généraliste ou un gastro-entérologue 7j/7 de 6h à minuit.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-1_bzpdxg.jpg', '2024-03-24 21:07:23', '2024-03-24 21:07:23'),
(7, 6, 'Régime végétarien', 'NUTRITION', 'Suivre un régime végétarien peut être bénéfique pour la santé, mais il est important de s\'assurer d\'obtenir tous les nutriments essentiels pour éviter les carences. Nos médecins généralistes vous conseillent si vous envisagez d’adopter un régime sans protéines animales.\n\nRégime végétarien : qu’est-ce que c’est ?\nLe régime végétarien est un mode alimentaire qui exclut la consommation de viande et de poisson. Les végétariens se nourrissent principalement de produits d\'origine végétale tels que les fruits, les légumes, les céréales, les légumineuses, les noix et les graines. Il existe différentes formes de végétarisme :\n\nLacto-ovo-végétarisme : les personnes qui suivent ce régime excluent la viande et le poisson, mais consomment des produits laitiers (lacto) et des œufs (ovo) ;\nLacto-végétarisme : les adeptes de ce régime évitent la viande, le poisson et les œufs, mais incluent les produits laitiers tels que les yaourts ou le fromage ;\nOvo-végétarisme : les personnes ovo-végétariennes évitent la viande, le poisson et les produits laitiers, mais consomment des œufs ;\nVégétalisme : aussi connu sous le nom de régime végane, il exclut complètement tous les produits d\'origine animale, y compris la viande, le poisson, les produits laitiers, les œufs et le miel. Les véganes se nourrissent uniquement d’aliments d\'origine végétale.\nLes raisons de choisir un régime végétarien peuvent varier selon les individus, allant des préoccupations concernant la santé aux convictions éthiques ou environnementales.\n\nQuels sont les bienfaits du régime végétarien ?\nLe régime végétarien offre de nombreux bienfaits pour la santé, notamment :\n\nMeilleure santé cardiaque : en général, les régimes végétariens sont associés à un risque réduit de maladies cardiovasculaires. Ils sont souvent riches en fibres, en antioxydants et en acides gras insaturés, ce qui peut contribuer à abaisser le taux de cholestérol et à améliorer la santé du cœur et des vaisseaux sanguins ;\nContrôle du poids : un régime végétarien équilibré et riche en aliments à base de végétaux tend à être plus faible en calories et en gras saturés, ce qui peut aider à maintenir un poids santé ;\nMeilleure gestion du diabète de type 2 : des études suggèrent que les régimes végétariens peuvent aider à contrôler la glycémie et à améliorer la sensibilité à l\'insuline chez les personnes atteintes de diabète de type 2 ;\nRéduction du risque de certains cancers : les régimes végétariens riches en fruits, légumes, fibres et phytonutriments peuvent être associés à un risque réduit de certains cancers, notamment le cancer colorectal ;\nDigestion améliorée : les régimes végétariens riches en fibres provenant des fruits, légumes, légumineuses et céréales complètes peuvent favoriser une meilleure digestion et réduire les problèmes gastro-intestinaux ;\nDurabilité environnementale : le régime végétarien permet de réduire son impact environnemental en réduisant la consommation de ressources telles que l\'eau et en diminuant les émissions de gaz à effet de serre associées à l\'élevage intensif animal.\nPour bénéficier pleinement des avantages d\'un régime végétarien, il est essentiel de planifier son alimentation de manière à obtenir tous les nutriments nécessaires. Il est recommandé de consulter un diététicien ou un nutritionniste pour des conseils adaptés à vos besoins.\n\nQuels sont les risques du régime végétarien ?\nAdopter un régime végétarien présente plusieurs avantages pour la santé, mais il est également important de connaître les risques potentiels associés à ce type d\'alimentation :\n\nCarence en certains nutriments : un régime végétarien mal planifié peut entraîner des carences en certains nutriments essentiels comme la vitamine B12, le fer, le calcium et les acides gras oméga-3. Cependant, ces carences peuvent être évitées en planifiant son alimentation et en choisissant judicieusement ses aliments ;\nBesoins accrus en fer : le fer non héminique (présent dans les végétaux) est moins facilement assimilé par l\'organisme que le fer héminique (présent dans la viande). Les végétariens doivent donc veiller à consommer suffisamment de sources de fer et à l\'associer à de la vitamine C pour améliorer son absorption ;\nDépendance excessive à certains aliments : les personnes adoptant un régime végétarien peuvent avoir tendance à se tourner vers certains aliments comme les produits transformés riches en glucides simples ou les substituts de viande ultra-transformés, aliments néfastes pour la santé ;\nRisque de choix alimentaires déséquilibrés : certaines personnes peuvent adopter un régime végétarien peu varié, ce qui peut entraîner une insuffisance en certains nutriments ou une consommation excessive d\'autres nutriments ;\nImpact social : dans certaines situations sociales, comme les repas en famille ou les sorties entre amis, il peut être difficile de trouver des options végétariennes car le végétarisme n’est pas toujours bien perçu ou compris, ce qui peut créer des situations inconfortables.\nComment éviter les carences quand on adopte un régime végétarien ?\nPour éviter les carences lors d’un régime végétarien, assurez-vous d\'obtenir tous les nutriments essentiels au bon fonctionnement de l’organisme. Voici quelques conseils :\n\nProtéines : inclure des sources de protéines végétales telles que les légumineuses (lentilles, pois chiches, haricots), le tofu, le tempeh, les produits à base de soja et les céréales complètes ;\nFer : consommer des aliments riches en fer comme les légumes verts (épinards, kale), les légumineuses, les graines de citrouille, les fruits secs et les céréales complètes. Pour une meilleure absorption du fer, combinez ces aliments avec ceux riches en vitamine C comme les agrumes, les poivrons ou les tomates ;\nCalcium : les produits laitiers pouvant être exclus de certains régimes végétariens, optez pour des alternatives riches en calcium comme le lait de soja enrichi, les légumes verts à feuilles, le tofu préparé avec du calcium, les fruits à coque (amandes, noix) et les graines de sésame ;\nVitamine B12 : cette vitamine se trouve uniquement dans les produits d’origine animale (viande, poisson, produits laitiers et œufs). Les personnes suivant un régime végétalien doivent impérativement consommer des compléments alimentaires ou des aliments enrichis en B12 (laits végétaux par exemple) ;\nOméga-3 : optez pour des sources végétales d\'oméga-3 comme les graines de lin, les noix, l\'huile de lin et les algues pour maintenir un bon équilibre en acides gras essentiels ;\nIode : assurez-vous d\'inclure du sel iodé dans votre alimentation ou consommez des algues marines, qui sont une bonne source d\'iode.\nSi malgré une alimentation équilibrée et variée vous faites face à des carences nutritionnelles, n’hésitez pas à vous faire accompagner par un professionnel de santé.\n\nÀ qui s’adresse le régime végétarien ?\nEn principe, la plupart des gens peuvent adopter un régime végétarien s\'ils planifient soigneusement leur alimentation pour s\'assurer d\'obtenir tous les nutriments essentiels. Cependant, il est important de prendre en compte certains aspects :\n\nÉtat de santé : dans certaines situations, un régime végétarien peut nécessiter une attention particulière. Par exemple, les femmes enceintes, les enfants en pleine croissance ou les personnes ayant des besoins nutritionnels spéciaux doivent être particulièrement vigilants pour obtenir tous les nutriments nécessaires ;\nPréférences alimentaires et culturelles : les préférences individuelles et les habitudes alimentaires peuvent rendre plus ou moins facile l\'adoption d\'un régime végétarien. Certaines personnes peuvent trouver la transition plus simple que d\'autres ;\nPlanification et connaissance nutritionnelle : bien planifier son alimentation est crucial pour éviter les carences nutritionnelles. Comprendre les sources de protéines végétales, les nutriments clés et comment équilibrer les repas est indispensable pour un régime végétarien réussi.\nEn général, avec une planification adéquate et une attention portée à la variété des aliments consommés, la plupart des individus peuvent adopter un régime végétarien sans problèmes majeurs. Cependant, il est toujours conseillé de consulter un professionnel de santé avant de faire des changements importants dans son alimentation, surtout si des préoccupations particulières sont présentes.\n\nComment se faire accompagner quand on souhaite devenir végétarien ?\nIl existe plusieurs moyens de se faire accompagner lorsque l\'on souhaite devenir végétarien :\n\nConsultation avec un professionnel de santé : un nutritionniste ou un diététicien peut offrir des conseils personnalisés en élaborant un plan alimentaire adapté à vos besoins nutritionnels spécifiques. Ils peuvent vous aider à éviter les carences tout en adoptant un régime végétarien équilibré ;\nRecherche et documentation : des livres, des sites web, et des ressources spécialisées peuvent fournir des informations détaillées sur le végétarisme, les nutriments essentiels et des recettes équilibrées pour un régime végétarien ;\nCommunauté et groupes de soutien : rejoindre des groupes de soutien en ligne ou en présentiel peut être bénéfique. Ils offrent un espace pour poser des questions, partager des expériences et trouver du soutien auprès de personnes partageant les mêmes envies et objectifs.\nCuisiner et expérimenter : apprendre de nouvelles recettes et faire de nouvelles expériences culinaires peut rendre la transition plus intéressante et agréable. Des cours de cuisine végétarienne peuvent également être disponibles localement ou en ligne ;\nApplications et outils : des applications et des outils en ligne sont facilement accessibles et peuvent vous aider à planifier les repas, suivre l\'apport nutritionnel et découvrir de nouvelles recettes adaptées au végétarisme.\nEn combinant ces ressources et en étant ouvert à l\'apprentissage et à l\'exploration de nouvelles options alimentaires, il est possible de faire une transition en douceur vers un régime végétarien tout en maintenant une alimentation équilibrée et nutritive.\n\nSi vous avez des questions concernant votre situation ou si vous souhaitez obtenir davantage de conseils quant à la mise en place d’un régime végétarien ou végétalien n’hésitez pas à vous rapprocher de votre médecin traitant, d’un nutritionniste ou d’un diététicien. Sur Livi, nos médecins généralistes sont en mesure de vous apporter des réponses tous les jours, de 6h à minuit en téléconsultation.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-2_gslnhz.jpg', '2024-03-24 21:07:23', '2024-03-24 21:07:23'),
(8, 6, 'Café ', 'MÉDECINE GÉNÉRALE\n\n\n', 'Le café est bien plus qu\'une simple boisson quotidienne pour beaucoup, c\'est une expérience délectable qui stimule les sens et offre une multitude d\'avantages pour la santé si consommé avec modération. Savouré quotidiennement par des millions de personnes à travers le monde, le café est une boisson appréciée pour son goût riche et ses propriétés revitalisantes.\n\nQu’est-ce que le café ?\nLa caféine est une molécule contenue dans le café, qui peut être catégorisée comme “psychotrope”, c’est-à-dire qu’elle agit directement sur le système nerveux central, pouvant entraîner des effets psychologiques et physiologiques. La caféine est un stimulant qui peut augmenter la vigilance, améliorer la concentration et même induire une sensation de bien-être chez certaines personnes. Cependant, à des doses trop élevées, elle peut également causer de l\'anxiété, des palpitations cardiaques et des troubles du sommeil.\n\nQuels sont les bienfaits du café ?\nLe café offre plusieurs bienfaits pour la santé lorsqu\'il est consommé raisonnablement. Il pourrait même offrir une certaine protection contre certaines maladies. Voici quelques-uns de ses avantages :\n\nSource d\'antioxydants : le café est riche en antioxydants, aidant à lutter contre un vieillissement prématuré de la peau ;\nAmélioration des fonctions cérébrales : la caféine peut augmenter la concentration et stimuler la mémoire et les fonctions cognitives ;\nProtection contre certaines maladies : des études ont suggéré que la consommation modérée de café pourrait modérément réduire le risque de maladies comme le diabète de type 2 en influençant positivement la régulation du sucre dans le sang, les maladies cardiaques grâce aux antioxydants présents dans le café qui contribuent à protéger le cœur, voire certains types de cancers comme le cancer colorectal et le cancer du foie. Les antioxydants et d\'autres composés présents dans le café pourraient jouer un rôle protecteur ;\nSoutien pour la santé métabolique : la caféine peut stimuler le métabolisme, favorisant ainsi la combustion des graisses et améliorant parfois les performances physiques ;\nEffet positif sur certaines conditions neurologiques : certaines études encore en cours et donc à prendre avec précaution, montrent que la consommation de café pourrait être associée à un moindre risque de maladies neurodégénératives telles que la maladie de Parkinson ou la maladie d\'Alzheimer. Les mécanismes exacts ne sont pas totalement compris, mais les antioxydants et d\'autres composés bioactifs pourraient avoir un effet protecteur sur le cerveau.\nIl est cependant crucial de consommer du café avec modération, car une consommation excessive peut entraîner des effets indésirables. De plus, les réponses individuelles à la caféine varient, donc il est conseillé d’adapter sa consommation en fonction de sa tolérance, afin d’éviter l’apparition d’effets secondaires potentiels.\n\nNutriments contenus dans le café\nLe café est consommé le plus souvent comme une boisson, et les quantités ingérées ne contiennent pas une quantité significative de nutriments. Cependant, il renferme des antioxydants et quelques minéraux bénéfiques pour la santé. Les principaux nutriments que l\'on peut trouver dans le café sont :\n\nles antioxydants : le café est une source importante d\'antioxydants tels que les acides chlorogéniques. Ces composés aident à neutraliser les radicaux libres dans le corps et peuvent contribuer à réduire les dommages causés par ces substances nocives ;\nles vitamines et minéraux : bien que présents en quantités relativement modestes, le café contient certaines vitamines et des minéraux, notamment du magnésium, du potassium, de la riboflavine (vitamine B2) et de la niacine (vitamine B3).\nQuelle quantité de café boire pour profiter de ses bienfaits ?\nLa quantité de café nécessaire pour profiter de ses bienfaits varie d\'une personne à l\'autre en raison de la tolérance individuelle à la caféine et d\'autres facteurs. Généralement, la plupart des études suggèrent que la consommation modérée de café est bénéfique pour la santé.\n\nEn général, une consommation modérée est considérée comme étant de 3 à 4 tasses de café par jour, ce qui équivaut à environ 300 à 400 milligrammes de caféine. Cependant, il est important de noter que la teneur en caféine varie selon le type de café et la méthode de préparation : 4 expressos ne valent pas 4 tasses de café filtre par exemple.\n\nIl est nécessaire de se renseigner sur les méthodes de réalisation de café qui engendre un plus fort taux de caféine en fonction de la méthode utilisée pour réaliser un café. Par exemple, les méthodes qui entraînent une infusion du café (exemple french press), vont donner un café bien plus fort en caféine qu’une méthode de filtration.\n\nIl est aussi essentiel de surveiller sa propre tolérance à la caféine, car certaines personnes peuvent ressentir des effets indésirables même avec de petites quantités de café. Des effets tels que l\'anxiété, les palpitations cardiaques, les troubles du sommeil ou les problèmes gastro-intestinaux peuvent se manifester chez certaines personnes sensibles à la caféine.\n\nLa clé pour profiter des bienfaits du café est de le consommer avec modération et de surveiller comment votre corps réagit à la caféine. Si vous avez des préoccupations concernant votre consommation de café, il est recommandé de consulter un professionnel de santé pour des conseils personnalisés. Sur Livi, vous pouvez consulter un médecin généraliste ou un gastro-entérologue 7j/7 de 6h à minuit.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-1_bzpdxg.jpg', '2024-03-24 21:07:23', '2024-03-24 21:07:23');
INSERT INTO `posts` (`id`, `user_id`, `title`, `category`, `body`, `image`, `created_at`, `updated_at`) VALUES
(9, 6, 'Régime végétarien', 'NUTRITION', 'Suivre un régime végétarien peut être bénéfique pour la santé, mais il est important de s\'assurer d\'obtenir tous les nutriments essentiels pour éviter les carences. Nos médecins généralistes vous conseillent si vous envisagez d’adopter un régime sans protéines animales.\n\nRégime végétarien : qu’est-ce que c’est ?\nLe régime végétarien est un mode alimentaire qui exclut la consommation de viande et de poisson. Les végétariens se nourrissent principalement de produits d\'origine végétale tels que les fruits, les légumes, les céréales, les légumineuses, les noix et les graines. Il existe différentes formes de végétarisme :\n\nLacto-ovo-végétarisme : les personnes qui suivent ce régime excluent la viande et le poisson, mais consomment des produits laitiers (lacto) et des œufs (ovo) ;\nLacto-végétarisme : les adeptes de ce régime évitent la viande, le poisson et les œufs, mais incluent les produits laitiers tels que les yaourts ou le fromage ;\nOvo-végétarisme : les personnes ovo-végétariennes évitent la viande, le poisson et les produits laitiers, mais consomment des œufs ;\nVégétalisme : aussi connu sous le nom de régime végane, il exclut complètement tous les produits d\'origine animale, y compris la viande, le poisson, les produits laitiers, les œufs et le miel. Les véganes se nourrissent uniquement d’aliments d\'origine végétale.\nLes raisons de choisir un régime végétarien peuvent varier selon les individus, allant des préoccupations concernant la santé aux convictions éthiques ou environnementales.\n\nQuels sont les bienfaits du régime végétarien ?\nLe régime végétarien offre de nombreux bienfaits pour la santé, notamment :\n\nMeilleure santé cardiaque : en général, les régimes végétariens sont associés à un risque réduit de maladies cardiovasculaires. Ils sont souvent riches en fibres, en antioxydants et en acides gras insaturés, ce qui peut contribuer à abaisser le taux de cholestérol et à améliorer la santé du cœur et des vaisseaux sanguins ;\nContrôle du poids : un régime végétarien équilibré et riche en aliments à base de végétaux tend à être plus faible en calories et en gras saturés, ce qui peut aider à maintenir un poids santé ;\nMeilleure gestion du diabète de type 2 : des études suggèrent que les régimes végétariens peuvent aider à contrôler la glycémie et à améliorer la sensibilité à l\'insuline chez les personnes atteintes de diabète de type 2 ;\nRéduction du risque de certains cancers : les régimes végétariens riches en fruits, légumes, fibres et phytonutriments peuvent être associés à un risque réduit de certains cancers, notamment le cancer colorectal ;\nDigestion améliorée : les régimes végétariens riches en fibres provenant des fruits, légumes, légumineuses et céréales complètes peuvent favoriser une meilleure digestion et réduire les problèmes gastro-intestinaux ;\nDurabilité environnementale : le régime végétarien permet de réduire son impact environnemental en réduisant la consommation de ressources telles que l\'eau et en diminuant les émissions de gaz à effet de serre associées à l\'élevage intensif animal.\nPour bénéficier pleinement des avantages d\'un régime végétarien, il est essentiel de planifier son alimentation de manière à obtenir tous les nutriments nécessaires. Il est recommandé de consulter un diététicien ou un nutritionniste pour des conseils adaptés à vos besoins.\n\nQuels sont les risques du régime végétarien ?\nAdopter un régime végétarien présente plusieurs avantages pour la santé, mais il est également important de connaître les risques potentiels associés à ce type d\'alimentation :\n\nCarence en certains nutriments : un régime végétarien mal planifié peut entraîner des carences en certains nutriments essentiels comme la vitamine B12, le fer, le calcium et les acides gras oméga-3. Cependant, ces carences peuvent être évitées en planifiant son alimentation et en choisissant judicieusement ses aliments ;\nBesoins accrus en fer : le fer non héminique (présent dans les végétaux) est moins facilement assimilé par l\'organisme que le fer héminique (présent dans la viande). Les végétariens doivent donc veiller à consommer suffisamment de sources de fer et à l\'associer à de la vitamine C pour améliorer son absorption ;\nDépendance excessive à certains aliments : les personnes adoptant un régime végétarien peuvent avoir tendance à se tourner vers certains aliments comme les produits transformés riches en glucides simples ou les substituts de viande ultra-transformés, aliments néfastes pour la santé ;\nRisque de choix alimentaires déséquilibrés : certaines personnes peuvent adopter un régime végétarien peu varié, ce qui peut entraîner une insuffisance en certains nutriments ou une consommation excessive d\'autres nutriments ;\nImpact social : dans certaines situations sociales, comme les repas en famille ou les sorties entre amis, il peut être difficile de trouver des options végétariennes car le végétarisme n’est pas toujours bien perçu ou compris, ce qui peut créer des situations inconfortables.\nComment éviter les carences quand on adopte un régime végétarien ?\nPour éviter les carences lors d’un régime végétarien, assurez-vous d\'obtenir tous les nutriments essentiels au bon fonctionnement de l’organisme. Voici quelques conseils :\n\nProtéines : inclure des sources de protéines végétales telles que les légumineuses (lentilles, pois chiches, haricots), le tofu, le tempeh, les produits à base de soja et les céréales complètes ;\nFer : consommer des aliments riches en fer comme les légumes verts (épinards, kale), les légumineuses, les graines de citrouille, les fruits secs et les céréales complètes. Pour une meilleure absorption du fer, combinez ces aliments avec ceux riches en vitamine C comme les agrumes, les poivrons ou les tomates ;\nCalcium : les produits laitiers pouvant être exclus de certains régimes végétariens, optez pour des alternatives riches en calcium comme le lait de soja enrichi, les légumes verts à feuilles, le tofu préparé avec du calcium, les fruits à coque (amandes, noix) et les graines de sésame ;\nVitamine B12 : cette vitamine se trouve uniquement dans les produits d’origine animale (viande, poisson, produits laitiers et œufs). Les personnes suivant un régime végétalien doivent impérativement consommer des compléments alimentaires ou des aliments enrichis en B12 (laits végétaux par exemple) ;\nOméga-3 : optez pour des sources végétales d\'oméga-3 comme les graines de lin, les noix, l\'huile de lin et les algues pour maintenir un bon équilibre en acides gras essentiels ;\nIode : assurez-vous d\'inclure du sel iodé dans votre alimentation ou consommez des algues marines, qui sont une bonne source d\'iode.\nSi malgré une alimentation équilibrée et variée vous faites face à des carences nutritionnelles, n’hésitez pas à vous faire accompagner par un professionnel de santé.\n\nÀ qui s’adresse le régime végétarien ?\nEn principe, la plupart des gens peuvent adopter un régime végétarien s\'ils planifient soigneusement leur alimentation pour s\'assurer d\'obtenir tous les nutriments essentiels. Cependant, il est important de prendre en compte certains aspects :\n\nÉtat de santé : dans certaines situations, un régime végétarien peut nécessiter une attention particulière. Par exemple, les femmes enceintes, les enfants en pleine croissance ou les personnes ayant des besoins nutritionnels spéciaux doivent être particulièrement vigilants pour obtenir tous les nutriments nécessaires ;\nPréférences alimentaires et culturelles : les préférences individuelles et les habitudes alimentaires peuvent rendre plus ou moins facile l\'adoption d\'un régime végétarien. Certaines personnes peuvent trouver la transition plus simple que d\'autres ;\nPlanification et connaissance nutritionnelle : bien planifier son alimentation est crucial pour éviter les carences nutritionnelles. Comprendre les sources de protéines végétales, les nutriments clés et comment équilibrer les repas est indispensable pour un régime végétarien réussi.\nEn général, avec une planification adéquate et une attention portée à la variété des aliments consommés, la plupart des individus peuvent adopter un régime végétarien sans problèmes majeurs. Cependant, il est toujours conseillé de consulter un professionnel de santé avant de faire des changements importants dans son alimentation, surtout si des préoccupations particulières sont présentes.\n\nComment se faire accompagner quand on souhaite devenir végétarien ?\nIl existe plusieurs moyens de se faire accompagner lorsque l\'on souhaite devenir végétarien :\n\nConsultation avec un professionnel de santé : un nutritionniste ou un diététicien peut offrir des conseils personnalisés en élaborant un plan alimentaire adapté à vos besoins nutritionnels spécifiques. Ils peuvent vous aider à éviter les carences tout en adoptant un régime végétarien équilibré ;\nRecherche et documentation : des livres, des sites web, et des ressources spécialisées peuvent fournir des informations détaillées sur le végétarisme, les nutriments essentiels et des recettes équilibrées pour un régime végétarien ;\nCommunauté et groupes de soutien : rejoindre des groupes de soutien en ligne ou en présentiel peut être bénéfique. Ils offrent un espace pour poser des questions, partager des expériences et trouver du soutien auprès de personnes partageant les mêmes envies et objectifs.\nCuisiner et expérimenter : apprendre de nouvelles recettes et faire de nouvelles expériences culinaires peut rendre la transition plus intéressante et agréable. Des cours de cuisine végétarienne peuvent également être disponibles localement ou en ligne ;\nApplications et outils : des applications et des outils en ligne sont facilement accessibles et peuvent vous aider à planifier les repas, suivre l\'apport nutritionnel et découvrir de nouvelles recettes adaptées au végétarisme.\nEn combinant ces ressources et en étant ouvert à l\'apprentissage et à l\'exploration de nouvelles options alimentaires, il est possible de faire une transition en douceur vers un régime végétarien tout en maintenant une alimentation équilibrée et nutritive.\n\nSi vous avez des questions concernant votre situation ou si vous souhaitez obtenir davantage de conseils quant à la mise en place d’un régime végétarien ou végétalien n’hésitez pas à vous rapprocher de votre médecin traitant, d’un nutritionniste ou d’un diététicien. Sur Livi, nos médecins généralistes sont en mesure de vous apporter des réponses tous les jours, de 6h à minuit en téléconsultation.', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710281491/PFE/Aloodoctoor/Recente%20post/pic-2_gslnhz.jpg', '2024-03-24 21:07:23', '2024-03-24 21:07:23');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Patient_id` bigint(20) UNSIGNED NOT NULL,
  `medecin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'en_attente',
  `duration` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `reminder_sent` tinyint(1) NOT NULL DEFAULT 0,
  `payment_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `Patient_id`, `medecin_id`, `date`, `time`, `note`, `status`, `duration`, `location`, `reason`, `reminder_sent`, `payment_status`, `created_at`, `updated_at`, `user_name`, `user_email`, `user_phone`) VALUES
(1, 17, 6, '2001-11-18', '17:15:00', 'Eos fugit mollitia', 'accepted', NULL, 'Optio lorem adipisc', NULL, 0, 'paid', '2024-05-07 06:34:25', '2024-06-06 16:41:24', 'waqovytisu', 'tekugubege@mailinator.com', '+1 (229) 485-8454'),
(2, 18, 4, '2024-05-14', '10:00:00', NULL, 'accepted', NULL, 'Mahres', NULL, 0, NULL, '2024-05-14 08:56:54', '2024-05-14 08:56:54', 'mohamed', 'mohamedalizbaira@gmail.com', '22016178'),
(3, 22, 6, '2024-06-14', '08:15:00', 'inshallah valide avec 18', 'rejected', NULL, 'Mehres', NULL, 0, 'unpaid', '2024-05-31 19:14:44', '2024-06-06 16:41:45', 'mohamed', 'zbairamohamedAli@gmail.com', '22016178'),
(4, 25, 6, '2024-06-11', '10:00:00', NULL, 'accepted', NULL, 'Mehres', NULL, 0, 'paid', '2024-06-11 09:27:14', '2024-06-11 09:29:19', 'Oumaima', 'Oumaima@gmail.com', '22016178'),
(5, 26, 6, '2024-06-12', '10:00:00', NULL, 'accepted', NULL, 'sfax', NULL, 0, 'paid', '2024-06-11 20:14:55', '2024-06-11 20:16:02', 'Akram', 'Akram@gmail.com', '78745632');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous_operations`
--

CREATE TABLE `rendezvous_operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED NOT NULL,
  `medecin_id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `etat` varchar(255) NOT NULL DEFAULT 'planned',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rendezvous_operations`
--

INSERT INTO `rendezvous_operations` (`id`, `patient_id`, `operation_id`, `medecin_id`, `date`, `note`, `status`, `payment_status`, `user_name`, `user_email`, `user_phone`, `etat`, `created_at`, `updated_at`) VALUES
(5, 19, 3, 24, '2024-06-06 00:00:00', NULL, 'pending', 'unpaid', 'ala', 'ala@gmailcom', '22016178', 'planned', '2024-06-06 16:43:35', '2024-06-06 16:43:35'),
(6, 19, 3, 6, '2024-06-11 00:00:00', NULL, 'rejected', 'unpaid', 'ala', 'ala@gmailcom', '22016199', 'planned', '2024-06-11 09:19:49', '2024-06-11 20:22:37'),
(7, 25, 3, 6, '2024-06-11 00:00:00', 'Il faut que le patient ait jeûné depuis au moins 12 heures.', 'accepted', 'paid', 'Oumaima', 'Oumaima@gmail.com', '22016199', 'planned', '2024-06-11 09:23:25', '2024-06-11 10:33:50'),
(8, 26, 1, 1, '2024-06-12 00:00:00', NULL, 'pending', 'unpaid', 'Akram', 'Akram@gmail.com', '74521365', 'planned', '2024-06-11 20:21:22', '2024-06-11 20:21:22'),
(9, 26, 3, 6, '2024-06-12 00:00:00', 'Il faut que le patient ait jeûné depuis au moins 12 heures.', 'accepted', 'unpaid', 'Akram', 'Akram@gmail.com', '74521365', 'planned', '2024-06-11 20:22:53', '2024-06-11 20:23:21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `NomClinic` varchar(255) DEFAULT NULL,
  `statut` varchar(255) NOT NULL DEFAULT 'connecter',
  `numero_telephone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `etat` varchar(255) NOT NULL DEFAULT 'inverifier',
  `speciality` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `localisation_link` varchar(255) DEFAULT NULL,
  `langue_parles` varchar(255) DEFAULT NULL,
  `temps` varchar(255) DEFAULT NULL,
  `tarifs` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `google_id`, `password`, `role`, `NomClinic`, `statut`, `numero_telephone`, `image`, `adresse`, `etat`, `speciality`, `document`, `description`, `localisation_link`, `langue_parles`, `temps`, `tarifs`, `created_at`, `updated_at`) VALUES
(1, 'Medali Zbaira', '', 'medalizbaira@gmail.com', NULL, NULL, 'user', NULL, 'connecter', NULL, NULL, NULL, 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-06 19:46:55', '2024-05-06 19:46:55'),
(4, 'Ahmed', 'Ahmed', 'ahmed.bensalah@gmail.com', NULL, '$2y$12$Zq0V8dRFI1Ph/fl.wuWjHOWY4wo785AdEG8doiSIk3zrywsStETAi', 'medecin', 'Cabinet Ahmed', 'connecter', '213654789', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1717185348/latest%20PFE/medecin/doctors-3_mr8jiy.jpg', 'Sousse , Rue ghazala', 'verifier', 'Hematology', NULL, 'En tant que spécialiste renommé en médecine interne, ce professionnel incarne l\'excellence dans la fourniture de soins médicaux complets et personnalisés. Avec une expertise avérée dans le diagnostic et le traitement des affections internes les plus compl', NULL, 'Français', 'Mon-Fri: 9am-6pm', '90', '2024-05-05 10:00:38', '2024-05-05 10:01:42'),
(5, 'Mohamed', 'Mohamed', 'mohamedalizbaira@admin.com', NULL, '$2y$12$BDiLNjqAnT2qVFnEWB7fLOUFdTbmWehpJ3UYwodhbx5X8KtEI61be', 'superadmin', NULL, 'connecter', '22016178', 'https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg', NULL, 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-05 08:28:44', '2024-06-12 10:18:48'),
(6, 'Asma', 'Asma', 'AsmaBenMohamed@gmail.com', NULL, '$2y$12$DGtyBCcLZw3kv3gL11Gz5erfE6SrBH/FWc20Ej6YW/0Oy2mG0zKZm', 'medecin', 'cabinet Asma', 'connecter', '24547895', 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1717185546/latest%20PFE/medecin/doctors-2_pksftv.jpg', 'rue ibn khaldoun tunis', 'verifier', 'psychiatrie', NULL, 'En tant que discipline médicale spécialisée, la psychiatrie se consacre à l\'étude, au diagnostic et au traitement des troubles mentaux et émotionnels. Elle explore les manifestations cliniques de ces troubles, allant des troubles anxieux et de l\'humeur', NULL, 'Français, Anglais', 'Mon-Fri: 9am-6pm', '80', '2024-05-05 08:37:03', '2024-05-22 13:53:58'),
(7, 'med', 'med', 'med@gmail.com', NULL, '$2y$12$IGMfnPaNy7f67dZnZddGauTMW/7RVFNc1ja1lFLT4bfn8pp1TmGuy', 'user', NULL, 'connecter', '22016178', 'https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg', 'Rue ibn El moukafaa mahres', 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-05 08:19:19', '2024-05-25 10:31:56'),
(12, 'Amen Béja', 'Amen Béja', 'contact@martinclinic.com', NULL, 'hashed_password_here', 'clinic', 'Amen Béja', 'active', '(+216) 78 443 443', 'https://www.servicemedicalprive.com/files/2/IMG_2134_2017-04-07-12-58.jpg', 'Béja', 'verifier', 'PLURIDISCIPLINAIRE', NULL, 'La Clinique Amen Béja est une clinique pluridisciplinaire à la ville de Béja, carrefour du Nord-Ouest Tunisien, à 3 heures de route d’Annaba.\n\nD’accès facile, la clinique se situe à l’entrée de la ville dans environnement verdoyant et agréable.\n\nLa cliniq', 'clinic_location_link_here', 'English, French', 'Mon-Fri: 9am-6pm', '$80 per consultation', '2024-04-18 07:28:59', '2024-04-18 07:28:59'),
(13, 'Clinique MOURALI', 'clinique_tunis', 'clinique@example.com', NULL, 'mot_de_passe_hashé', 'clinic', 'Clinique Tunis', 'active', '+216XXXXXXXX', 'https://www.servicemedicalprive.com/files/2/IMG_2134_2017-04-07-12-58.jpg', 'Sousse', 'ouvert', 'Spécialités offertes', 'document', 'Description de la clinique', 'lien_de_localisation', 'français, arabe', '24/7', 'tarifs', '2024-04-18 08:01:40', '2024-04-18 08:01:40'),
(14, 'Clinique LA MEDINA', 'clinique_b_tunis', 'clinique_b@example.com', NULL, 'mot_de_passe_hashé', 'clinic', 'Clinique B Tunis', 'active', '+216YYYYYYYY', 'https://www.servicemedicalprive.com/files/2/IMG_2134_2017-04-07-12-58.jpg', 'Mahdia', 'ouvert', 'Spécialités offertes pour la clinique B', 'document', 'Description de la clinique B', 'lien_de_localisation_B', 'français, arabe', '24/7', 'tarifs_B', '2024-04-18 08:02:36', '2024-04-18 08:02:36'),
(15, 'Clinique MONTPLAISIR', 'clinique_d_tunis', 'clinique_d@example.com', NULL, 'mot_de_passe_hashé', 'clinic', 'Clinique D Tunis', 'https://beja.amensante.com/Fr/', '+216WWWWWWWW', 'https://www.servicemedicalprive.com/files/2/IMG_2134_2017-04-07-12-58.jpg', 'Tunis', 'ouvert', 'Spécialités offertes pour la clinique D', 'document', 'Description de la clinique D', 'lien_de_localisation_D', 'français, arabe', '24/7', 'tarifs_D', '2024-04-18 08:04:49', '2024-04-18 08:04:49'),
(17, 'Ranyym Ranyym', '', 'ranyym77@gmail.com', NULL, NULL, 'user', NULL, 'connecter', NULL, NULL, NULL, 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-07 06:23:06', '2024-05-07 06:23:06'),
(18, 'mohamed Ali', 'Mohamed Ali', 'mohamedalizbaira@gmail.com', NULL, '$2y$12$NZsx6Mv2jcz6ssZXYUAjZOTZzp8zeMWUWAUWf9oKEzxTXek4BFLFW', 'user', NULL, 'connecter', '22016178', 'https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg', 'Rue ibn El moukafaa mahres', 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 08:54:06', '2024-05-14 09:08:32'),
(19, 'Ala', 'Ala', 'ala@gmailcom', NULL, '$2y$12$sJeHW2JpedIZcP8FjL4fqO57M9brO1ceJHEG6AbO3vTIi1qf2F6Nq', 'user', NULL, 'connecter', NULL, NULL, NULL, 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-24 19:48:27', '2024-05-24 19:48:27'),
(20, 'Tawfik', 'Zbaira', 'TawfikZbaira@gmail.com', NULL, '$2y$12$iKMCxoyjJm8AjmrOHysGEOq.x93pUYXCZXpaAl7LlGmvSdX/VPV.u', 'medecin', NULL, 'connecter', NULL, 'https://res.cloudinary.com/dkrfmqbj1/image/upload/v1717185378/latest%20PFE/medecin/doctors-1_krpjwx.jpg', 'Rue ibn El moukafaa mahres', 'verifier', 'chirurgien général', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-25 21:09:25', '2024-05-25 21:10:06'),
(22, 'mohamed', 'Ali', 'zbairamohamedAli@gmail.com', NULL, '$2y$12$A2SmF5QV4mRdlxpmNw4BG.nIDHxjNeKRH7oa5mJeHrZ8ISzbNUT3y', 'user', NULL, 'connecter', '22016178', 'https://www.missnumerique.com/blog/wp-content/uploads/photo-de-profil-pour-les-reseaux-sociaux-joseph-gonzalez.jpg', 'Rue ibn El moukafaa mahres', 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-31 18:53:28', '2024-05-31 19:10:02'),
(24, 'Kmar', 'Kmar', 'Kmar@gmail.com', NULL, '$2y$12$vM5zc8jHfPoHz.cCmxchj.plB9lgMW45249rxP4gCE6gV.4OUT0gu', 'medecin', NULL, 'connecter', NULL, NULL, NULL, 'verifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-10 18:16:44', '2024-06-10 18:17:25'),
(25, 'Oumaima', 'Oumaima', 'Oumaima@gmail.com', NULL, '$2y$12$lQrhWlRQS30COaN88m47uuJ4KhVEaDn3LUYDoSCYWNJu4yPkp79ie', 'user', NULL, 'connecter', '22016199', NULL, 'Rue ibn El moukafaa mahres', 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-11 09:22:54', '2024-06-11 09:24:52'),
(26, 'Akram', 'Akram', 'Akram@gmail.com', NULL, '$2y$12$JGH6IDR80IOY2xquqQypSubWkbsRfY2DS327xplP7SOB9Y3B9Jy8C', 'user', NULL, 'connecter', '24547895', NULL, 'sfax', 'inverifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-11 20:10:29', '2024-06-11 20:24:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cliniques`
--
ALTER TABLE `cliniques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliniques_user_id_foreign` (`user_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operations_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rendezvous_patient_id_foreign` (`Patient_id`),
  ADD KEY `rendezvous_medecin_id_foreign` (`medecin_id`);

--
-- Index pour la table `rendezvous_operations`
--
ALTER TABLE `rendezvous_operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rendezvous_operations_medecin_id_foreign` (`medecin_id`),
  ADD KEY `rendezvous_operations_patient_id_foreign` (`patient_id`),
  ADD KEY `rendezvous_operations_operation_id_foreign` (`operation_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cliniques`
--
ALTER TABLE `cliniques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rendezvous_operations`
--
ALTER TABLE `rendezvous_operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cliniques`
--
ALTER TABLE `cliniques`
  ADD CONSTRAINT `cliniques_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_medecin_id_foreign` FOREIGN KEY (`medecin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rendezvous_patient_id_foreign` FOREIGN KEY (`Patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rendezvous_operations`
--
ALTER TABLE `rendezvous_operations`
  ADD CONSTRAINT `rendezvous_operations_medecin_id_foreign` FOREIGN KEY (`medecin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rendezvous_operations_operation_id_foreign` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rendezvous_operations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
