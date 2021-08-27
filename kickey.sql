-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 août 2021 à 10:13
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kickey`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `com_contenu` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_utilisateurs` int(25) NOT NULL,
  `cur_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `com_contenu`, `id_post`, `id_utilisateurs`, `cur_date`) VALUES
(8, 'beqrhgrqhg', 16, 4, '2021-03-17 13:45:10'),
(9, 'greqrgerg', 16, 4, '2021-03-17 13:45:12'),
(10, 'dfhbdf', 16, 4, '2021-03-17 13:45:25'),
(11, 'dfhbdf', 16, 4, '2021-03-17 13:45:49'),
(12, 'erqb', 16, 4, '2021-03-17 13:45:51'),
(13, 'erqb', 16, 4, '2021-03-17 13:48:37'),
(14, 'erqb', 16, 4, '2021-03-17 13:50:15'),
(15, 'erqb', 16, 4, '2021-03-17 13:50:26'),
(16, 'erqb', 16, 4, '2021-03-17 13:51:00'),
(17, 'tkjteduyj', 17, 3, '2021-03-19 09:57:56'),
(18, 'aaaaaaaaa', 12, 3, '2021-03-19 09:59:12'),
(19, 'eeee', 17, 3, '2021-03-19 10:01:57'),
(20, 'ytrheytnhn', 17, 3, '2021-03-19 10:03:33'),
(22, 'dfbsb', 17, 3, '2021-03-19 10:20:51'),
(23, 'je(ye', 28, 3, '2021-03-19 10:25:00'),
(24, 'ik;-sus-(u(u', 28, 3, '2021-03-19 10:28:58'),
(25, 'tyjtdyjyte', 28, 3, '2021-03-19 13:28:55'),
(26, 'ebrdb', 28, 3, '2021-03-25 10:35:01'),
(27, 'aaaaa', 29, 3, '2021-03-25 10:35:32'),
(28, 'EEFREZFR', 32, 3, '2021-03-25 10:55:22'),
(29, 'frsgjhsfgjnhfg', 34, 3, '2021-03-26 13:54:03'),
(30, 'uyfdoyuttuof', 37, 4, '2021-04-02 09:03:11'),
(31, 'aaaaaaa', 38, 4, '2021-04-02 09:06:26'),
(32, '((rjytyterzj', 38, 4, '2021-04-02 09:51:29'),
(33, '((rjytyterzj', 38, 4, '2021-04-02 09:51:59'),
(34, 'TYUJTEEYJYJ', 74, 4, '2021-04-02 11:24:18'),
(35, 'nhgfdws', 43, 4, '2021-04-07 06:51:23'),
(36, 'ttrzsnt', 43, 4, '2021-04-07 06:51:27'),
(37, 'frwgjgffsqn', 76, 4, '2021-04-07 08:48:41'),
(38, 'qrhtgtrfd', 76, 4, '2021-04-07 08:48:43'),
(39, 'tnqnrsgnb', 76, 4, '2021-04-07 08:48:44'),
(40, 'rangtragnrngrzsn', 76, 4, '2021-04-07 08:48:46'),
(41, 'rtntrqnnantrqgdngdn', 76, 4, '2021-04-07 08:48:52'),
(42, 'hqeht', 76, 4, '2021-04-07 09:36:47'),
(43, 'k;dugtkfdukd', 76, 4, '2021-04-07 09:49:15'),
(44, 'dngfgfrsg', 43, 4, '2021-04-12 08:51:06'),
(45, 'gfngfdsgfnf', 79, 4, '2021-04-12 08:51:38'),
(46, 'rzytjytjjh', 70, 4, '2021-04-13 14:22:28'),
(47, 'rzytjytrjhjh', 70, 4, '2021-04-13 14:22:29'),
(48, 'ytrzjterzyjyterzjhytrj', 70, 4, '2021-04-13 14:22:30'),
(49, 'ytrzjterzyjyterzjhytrj', 70, 4, '2021-04-13 14:23:37'),
(50, 'ryo_u', 84, 4, '2021-04-14 06:45:28'),
(51, 'frsgjhsfgjnhfg', 84, 5, '2021-04-14 06:53:56'),
(52, 'fxgnfrxsjg', 87, 4, '2021-04-15 07:25:34'),
(53, 'aaa', 98, 4, '2021-04-16 07:23:53'),
(54, 'zz', 101, 4, '2021-04-19 07:03:43'),
(55, 'SRJYTJRYTJH', 102, 4, '2021-04-19 07:53:30'),
(56, 'wewewe', 110, 4, '2021-04-19 11:51:45'),
(57, 'çèpmà', 118, 4, '2021-04-20 07:53:18'),
(58, 'kuyu', 134, 4, '2021-04-21 12:47:26'),
(59, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere expedita possimus vitae unde. Deserunt numquam modi tempore dolore illo eaque iste laudantium ullam, eum qui nam saepe impedit sit in.', 137, 4, '2021-04-23 07:21:25'),
(60, 'Lorem, ipsum dolorimpedit sit in.', 137, 7, '2021-04-23 07:22:11'),
(61, 'Lorem, ipsum dolor sit amet co', 137, 10, '2021-04-23 07:24:10'),
(62, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere expedita possimus vitae unde. Deserunt numquam modi tempore dolore illo eaque iste laudantium ullam, eum qui nam saepe impedit sit in.', 137, 10, '2021-04-23 07:24:24'),
(63, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere ', 137, 7, '2021-04-23 07:25:16'),
(64, 'h;vfuyj;f', 137, 4, '2021-04-23 08:16:43'),
(65, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere expedita possimus vitae unde. Deserunt numquam modi tempore dolore illo eaque iste laudantium ullam, eum qui nam saepe impedit sit in.', 48, 4, '2021-04-26 11:50:26'),
(66, 'eqrged', 152, 4, '2021-05-07 07:44:47'),
(67, 'fqbvfdqfb', 147, 4, '2021-05-07 14:00:19'),
(68, '*snpµRNPERNPEN', 147, 12, '2021-05-28 08:33:17'),
(69, 'dfhtststhstq', 147, 8, '2021-06-13 11:08:50'),
(70, 'irgjqerùpoierùpovù', 147, 4, '2021-07-16 14:25:37'),
(0, 'yyy', 150, 1, '2021-08-20 11:53:59'),
(0, 'knoikn', 70, 1, '2021-08-20 11:54:48'),
(0, 'ml,m', 65, 1, '2021-08-20 11:55:09'),
(0, 'mknknùk ù', 147, 4, '2021-08-24 14:27:29'),
(0, 'erqrhweeje', 147, 8, '2021-08-25 10:28:16');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_contenu` text DEFAULT NULL,
  `cur_date` datetime DEFAULT NULL,
  `id_jeux` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `post_contenu`, `cur_date`, `id_jeux`, `id_utilisateurs`) VALUES
(11, 'eeee', '2021-02-05 07:54:55', 9, 3),
(12, 'rhtrzhzt', '2021-03-17 12:45:47', 9, 3),
(28, 'aliiiiiii', '2021-03-19 10:23:21', 9, 3),
(27, 'styjjy', '2021-03-19 10:23:14', 9, 3),
(16, 'g\'(r(re(rg', '2021-03-17 12:56:07', 9, 4),
(17, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus ', '2021-03-19 09:23:40', 9, 3),
(138, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupt', '2021-04-21 13:57:58', 26, 7),
(23, 'fjnfsn', '2021-03-19 10:22:27', 9, 3),
(24, 'rhrstrt', '2021-03-19 10:22:34', 9, 3),
(25, 'eniiiii', '2021-03-19 10:22:42', 9, 3),
(26, 'eniiiii', '2021-03-19 10:22:48', 9, 3),
(29, 'd&lt;bffdqb', '2021-03-25 10:34:55', 9, 3),
(30, 'tykjtejjy', '2021-03-25 10:38:53', 9, 3),
(31, 'cvnbcnbgcv', '2021-03-25 10:39:12', 9, 3),
(32, 'AAAA', '2021-03-25 10:52:47', 9, 3),
(33, 'eee', '2021-03-25 14:38:09', 9, 3),
(34, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium optio voluptatum facilis. Id laudantium laborum ipsum ipsam. Commodi molestiae quo adipisci, minima rem ex, asperiores quod dolore eum quia facere.', '2021-03-26 13:49:47', 9, 3),
(35, 'régrt', '2021-03-30 07:25:18', 9, 3),
(36, '\'tyttyty-uyj-j', '2021-03-30 07:35:55', 9, 3),
(37, 'srtjrjytsrjjzytj', '2021-04-02 08:59:57', 9, 4),
(38, 'aaaaaaaaaaa', '2021-04-02 09:05:26', 9, 4),
(39, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:11', 26, 4),
(40, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:15', 43, 4),
(41, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:17', 43, 3),
(42, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:20', 43, 2),
(43, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:22', 26, 4),
(44, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:31', 43, 4),
(45, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:35', 43, 4),
(46, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:36', 43, 4),
(47, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:37', 43, 4),
(48, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:38', 43, 4),
(49, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:39', 43, 4),
(50, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:40', 43, 4),
(51, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:40', 43, 4),
(52, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:41', 43, 4),
(53, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:42', 43, 4),
(54, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:49', 16, 4),
(55, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:50', 16, 4),
(56, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:51', 16, 4),
(57, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:51', 16, 4),
(58, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:52', 16, 4),
(59, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:52', 16, 4),
(60, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:53', 16, 4),
(61, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:53', 16, 4),
(62, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:53', 16, 4),
(63, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:54', 16, 4),
(64, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:54', 16, 4),
(65, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:28:55', 16, 4),
(66, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:02', 19, 4),
(67, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:03', 19, 4),
(68, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:03', 19, 4),
(69, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:03', 19, 4),
(70, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:04', 19, 4),
(71, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:04', 19, 4),
(72, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:04', 19, 4),
(73, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-02 09:29:04', 19, 4),
(74, 'TSYJTYJTEYUJYTEJ', '2021-04-02 11:24:14', 9, 4),
(75, '                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, laboriosam! Nesciunt voluptate, illum commodi minima delectus laboriosam modi impedit sit.', '2021-04-02 11:51:52', 9, 4),
(80, 'gbsdfgdgf', '2021-04-12 08:57:53', 26, 5),
(81, 'çèlçàçà', '2021-04-12 09:18:31', 26, 5),
(82, 'çèlçàçà', '2021-04-12 09:18:59', 26, 5),
(135, 'sgfnnytfrnnzytrn', '2021-04-21 12:55:29', 26, 8),
(140, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-23 08:22:23', 40, 11),
(85, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-14 06:53:37', 9, 5),
(86, 'qui pour ranked diamant?', '2021-04-14 07:02:44', 9, 5),
(88, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-15 07:52:45', 9, 3),
(89, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-15 07:52:47', 9, 3),
(90, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-15 07:52:48', 9, 3),
(91, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-15 07:52:49', 9, 3),
(92, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-15 07:52:51', 9, 3),
(93, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus repudiandae voluptates, labore delectus aut architecto illum? Aliquam autem incidunt nostrum explicabo necessitatibus?', '2021-04-15 07:52:56', 9, 3),
(94, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus repudiandae voluptates, labore delectus aut architecto illum? Aliquam autem incidunt nostrum explicabo necessitatibus?', '2021-04-15 07:53:21', 9, 3),
(95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus repudiandae voluptates, labore delectus aut architecto illum? Aliquam autem incidunt nostrum explicabo necessitatibus?', '2021-04-15 07:53:32', 9, 3),
(96, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus repudiandae voluptates, labore delectus aut architecto illum? Aliquam autem incidunt nostrum explicabo necessitatibus?', '2021-04-15 07:54:51', 9, 3),
(97, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus repudiandae voluptates, labore delectus aut architecto illum? Aliquam autem incidunt nostrum explicabo necessitatibus?', '2021-04-15 07:55:00', 9, 3),
(159, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, dicta.', '2021-05-17 06:50:14', 43, 8),
(160, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facilis fuga alias veritatis ab odio possimus necessitatibus repudiandae voluptates, labore delectus aut architecto illum? Aliquam autem incidunt nostrum explicabo necessitatibus?', '2021-05-17 06:50:18', 43, 8),
(161, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, dicta.', '2021-05-17 06:50:22', 43, 8),
(136, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, dicta.', '2021-04-21 13:26:52', 26, 9),
(137, '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias incidunt nisi cupiditate eaque quo similique totam eligendi sit inventore sapiente voluptas aspernatur odit quas quaerat dolor sunt aliquid laborum dignissimos officiis illo, hic veniam accusamus? Deleniti iste, incidunt inventore a placeat dignissimos sunt quae ad eius iusto similique sit praesentium.', '2021-04-21 13:28:09', 26, 10),
(147, 'aaaaaaaah la ranked', '2021-04-29 06:59:39', 26, 4),
(153, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, dicta.', '2021-05-11 06:49:54', 43, 8),
(150, 'Mael C un noob', '2021-04-29 11:53:02', 9, 4),
(154, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, dicta.', '2021-05-11 06:49:57', 43, 8),
(0, 'azzddaz', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `type_jeux`
--

CREATE TABLE `type_jeux` (
  `id_jeux` int(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nom_jeux` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_jeux`
--

INSERT INTO `type_jeux` (`id_jeux`, `image`, `nom_jeux`) VALUES
(9, 'apex.png', 'Apex'),
(16, 'destiny.png', 'Destiny'),
(18, 'gta_PNG15.png', 'GTA V'),
(19, 'fifa.png', 'FIFA 20'),
(23, 'titan.png', 'Titanfall 2'),
(24, 'nba.png', 'NBA 2K20'),
(26, 'reve.png', 'Anthem'),
(31, 'mh.png', 'Monster Hunter'),
(32, 'wi.png', 'the witcher'),
(39, '4.png', 'Watch Dogs Legion'),
(40, 'doom.png', 'Eternal Doom'),
(43, 'battlefield_PNG2.png', 'Battlefield I');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_inscription` int(11) DEFAULT NULL,
  `type_user` text NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='type_user';

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `date_inscription`, `type_user`, `avatar`) VALUES
(1, 'aaa', 'aaa@aaa.com', '$2y$12$AKAadVaLmczkUx3TaHPLQ.I8OBfUkFfHujRXmqvdlzlVq0LKoQN.a', NULL, 'utilisateur', 'adidas.png'),
(4, 'admin', 'admin@admin.com', '$2y$12$AKAadVaLmczkUx3TaHPLQ.I8OBfUkFfHujRXmqvdlzlVq0LKoQN.a', NULL, 'admin', 'pp.jpg'),
(8, 'cozylicius', 'wewe@wewe.com', '$2y$12$AXQ513hb1esb9sg8Ub294.JpywP.V0maYcNzQOr7rzwCBKfYUsnd2', NULL, 'utilisateur', 'wrait.PNG'),
(10, 'horizon', 'horizon@horizon.com', '$2y$12$mXvdXvOIB2ORG5aDU2z0T.CRvkusidHki1Bev3fjpzFihq0TZLspS', NULL, 'utilisateur', 'horizon.PNG'),
(12, 'aijijj', 'zzz@zzz.com', '$2y$12$bj7ZOHJoxZ5e2FOvEnAWH.MUc3cn4TBflvu7NLc7sj6t4ygT0jKr.', NULL, 'utilisateur', 'fifa.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `type_jeux`
--
ALTER TABLE `type_jeux`
  ADD PRIMARY KEY (`id_jeux`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `type_jeux`
--
ALTER TABLE `type_jeux`
  MODIFY `id_jeux` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
