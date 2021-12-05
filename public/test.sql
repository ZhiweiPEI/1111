-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： mysql
-- 生成日期： 2021-12-05 16:15:07
-- 服务器版本： 8.0.27
-- PHP 版本： 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2021-11-19 14:27:32', '2021-11-19 14:27:32'),
(2, 'Comedy', '2021-11-19 14:27:32', '2021-11-19 14:27:32'),
(3, 'Science Fiction', '2021-11-19 14:27:32', '2021-11-19 14:27:32'),
(4, 'Adventure', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(5, 'Drama', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(6, 'Horror', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(7, 'Fantasy', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(8, 'Romance', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(9, 'Animation', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(10, 'Thriller', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(11, 'Suspense', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(12, 'Musical', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(13, 'War Film', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(14, 'Western Film', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(15, 'Epic Film', '2021-12-05 15:19:07', '2021-12-05 15:19:07'),
(16, 'Historical Film', '2021-12-05 15:19:07', '2021-12-05 15:19:07');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `content` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `statut` int DEFAULT NULL,
  `create_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `content`, `user_id`, `film_id`, `statut`, `create_time`) VALUES
(1, 'this is a comment', 4, 1, 1, '2021-12-01'),
(2, 'nice', 1, 1, 1, '2021-12-02'),
(3, 'wonderful', 5, 1, 1, '2021-12-03'),
(4, 'amazing', 4, 1, 1, '2021-12-01'),
(5, 'perfect', 1, 1, 1, '2021-12-03'),
(16, '非常好看', 1, 2, 1, '2021-12-03'),
(17, '非常好', 1, 1, 1, '2021-12-05');

-- --------------------------------------------------------

--
-- 表的结构 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `film`
--

CREATE TABLE `film` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_visit` int DEFAULT NULL,
  `image` varchar(9999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(4500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `film`
--

INSERT INTO `film` (`id`, `created_at`, `updated_at`, `title`, `director`, `number_of_visit`, `image`, `actor`, `description`) VALUES
(1, '2021-11-19 13:51:30', '2021-11-19 13:52:52', 'Zootopia', 'Byron Howard，Rich Moore', 32415415, 'https://img9.doubanio.com/view/photo/l/public/p2325416438.webp', 'Judy Hopps，Nicholas P. \"Nick\" Wilde', '\"Animal City\" is a 3D computer animation action comedy adventure film produced by Walt Disney Animation Studios in the United States and released by Walt Disney Pictures. It is also the 55th Disney classic animation feature film.'),
(2, '2021-11-19 13:51:45', '2021-11-19 13:51:45', 'Titanic', 'James Cameron', 12342542, 'https://img9.doubanio.com/view/photo/l/public/p1416075538.webp', 'Leonardo DiCaprio，Kate Winslet', 'On April 10, 1912, the luxury passenger ship Titanic, known as the \"miracle in the history of the world\'s industrial history,\" began its maiden voyage, sailing from Southampton, England to New York, the United States. Rich girl Rose (Kate Winslet) sat in first class with her mother and fiance Carl; on the other side, the bohemian teenage painter Jack (Leonardo DiCaprio) was also in a gamble on the dock Won a ticket for the lower class.\n　　 Rose was tired of the hypocritical life of the upper class, unwilling to marry Karl, and planned to commit suicide at sea, but was rescued by Jack. Soon, the beautiful and lively Rose and the handsome and cheerful Jack fell in love. Jack took Rose to the dance party in the lower class and gave her a portrait. The relationship between the two gradually heated up.\n　　 April 14, 1912, Sunday night, a calm night. The Titanic crashed into an iceberg, the \"unsinkable\" Titanic faced the fate of a shipwreck, and the budding love between Rose and Jack would also experience the test of life and death.'),
(3, '2021-11-19 14:39:23', '2021-11-19 14:39:23', 'The Shawshank Redemption', ' Frank Darabont', 4325232, 'https://img9.doubanio.com/view/photo/l/public/p1189287866.webp', 'Tim Robbins，Morgan Freeman', 'A murder case brought the banker Andy (Tim Robbins) to jail. The charge of murdering his wife and his lover will imprison him for life. His first appearance in Shawshank Prison made the prison \"big brother\" Reid (Morgan Freeman Morgan Freeman) look at him differently. Reid helped him get a stone hammer and a female celebrity poster, and the two gradually became friends in need. Soon, Andy showed his talents in the prison, acting as a prison librarian, and using his financial knowledge to help prison officials avoid taxes. This attracted the attention of the warden and was led to help the warden launder money. By chance, he learned that a newly imprisoned thief was able to testify to help him get rid of the murder. With a glimmer of hope, Andy found the warden, hoping that he could help him reverse the case. The insidious and hypocritical warden pretended to agree to Andy, but sent someone behind him to kill the thief, so that his only hope of legally getting out of prison was wiped out. The frustrated Andy did not despair. On a stormy night with lightning and thunder, a prison escape plan hidden for decades allowed him to redeem himself and regain his freedom! With his encouragement and help, the old friend Reid also ran for freedom bravely.\n　　 The film was nominated for 10 Oscars in 1995, as well as multiple nominations for the Golden Globe and Saturn Awards.'),
(4, '2021-11-19 14:39:23', '2021-11-19 14:39:23', 'Forrest Gump', 'Robert Zemeckis', 3245363, 'https://img9.doubanio.com/view/photo/l/public/p510872831.webp', 'Tom Hanks，Robin Wright', 'Forrest Gump (Tom Hanks) was born in a small town in southern Alabama shortly after the end of World War II. He was born mentally handicapped and had an IQ of only 75. However, his mother was a strong woman. She often Encourage A-Gump to \"be stupid for stupid people\" and ask him to keep improving.\nA-Gump went to school like a normal child, and met her lifelong friend and beloved Jenny (Robin Wright Penn). Under the love of Jenny and her mother, A-Gump started her life with the \"scud\" given by God. Stopped running.\n　　 A-Gump became a rugby superstar, a hero in the Vietnam War, a diplomatic envoy of table tennis, and a billionaire, but he could never forget Jenny. Several hurried gatherings and partings deepened A-Gump\'s miss.\n　　 One day, A-Gump received a letter from Jenny, and they finally wanted to meet again...'),
(5, '2021-11-19 14:39:23', '2021-11-19 14:39:23', 'Coco', 'Lee Unkrich， Adrian Molina', 14325425, 'https://img9.doubanio.com/view/photo/l/public/p2592620634.webp', 'Miguel\n ，Héctor', 'Miguel, who loves music (voiced by Anthony Gonzalez), was unfortunately born into a big family that regards music as a scourge. The family only hopes that Miguel will grow up soon so that he can inherit the inheritance of the family. The shoe industry for generations. The annual Day of the Dead is approaching. Every time on this day, the souls of the deceased relatives can return to the present world and reunite the living with the pictures placed on the altar.\n　　 In an accident, Miguel actually crossed into the kingdom of the dead. Before the sun rises, he must be blessed by a relative, otherwise he will stay in this world forever. Miguel decided to find the late god of song Dracus (voiced by Benjamin Bratt), because he is likely to be his grandfather. On the way, Miguel met the down-and-out musician Hector (voiced by Gael García Bernal), and gradually discovered the secret that Dracus had hidden for a long time.'),
(6, '2021-11-23 14:13:21', '2021-11-23 14:13:21', 'Léon', 'Luc Besson', 54235342, 'https://img9.doubanio.com/view/photo/l/public/p1356579890.webp', 'Jean Reno，Natalie Portman', 'Leon (Jean Renault) is a lonely professional killer who is hired by others. One day, the little neighbor girl Matilda (Natalie Portman) knocked on his door and asked him to temporarily avoid murder. It turned out that the owner of the neighbor’s house was the eyeliner of the police anti-narcotics team. He was punished by the police (Gary Oldman) who killed the whole family for embezzling a small package of drugs. Matilda was rescued by Lyon, survived, and stayed there. Lyon teaches a little girl how to use guns. She teaches Lyon French. The two are getting closer and getting along with each other.\n　　 The girl wanted to get revenge, but was caught, Leon arrived in time to rescue the girl. The battle between good and evil, mixed with sorrow and hatred, is gradually escalating, and even greater conflicts are inevitable...'),
(7, '2021-11-23 14:13:21', '2021-11-23 14:13:21', 'The Truman Show', 'Peter Weir', 1414125125, 'https://img9.doubanio.com/view/photo/l/public/p479684033.webp', 'Jim Carrey，Laura Linney', 'Truman (Jim Carrey played by Kim Carrey) is a person who is too ordinary to be ordinary. Except for some strange experiences-his first love girlfriend suddenly disappeared and his drowned father suddenly appeared in front of him. He and Jue Most American men in their 30s are no different. This made him feel disappointed. He also tried to leave the place where he lived for many years, but he couldn\'t do it for various reasons.\n　　Until one day, he suddenly realized that he seemed to be being followed, no matter where he went or what he was doing. This feeling is getting stronger and stronger. Truman decided to escape the place where he had lived for more than 30 years at all costs to find his first girlfriend.\n　　 But he found that he couldn\'t escape in any way. The truth is cruel.'),
(8, '2021-11-23 14:13:21', '2021-11-23 14:13:21', 'Joker', 'Todd Phillips', 32652511, 'https://img9.doubanio.com/view/photo/l/public/p2567149614.webp', 'Joaquin Phoenix', 'In the cold and hopeless Gotham City, the humble Arthur Frank (played by Joaquin Phoenix) makes a living by playing the role of a clown. The mother who depended on him suffers from mental illness, and Arthur remembers his mother\'s teachings and smiles at life no matter what setbacks he suffers, but he puts himself under great pressure and is on the verge of collapse. He dreams of becoming a talk show actor, but his life will be disappointed again and again. Not only that, he lost his job accidentally, and occasionally caught a glimpse of his mother\'s secrets, which ignited an ardent desire in his heart for the father who had never met with him in a very different position. Fate has become accustomed to backfire. In the empty subway, sad clowns are killing themselves amidst uncontrollable mad laughter...\n　　 The film won the Golden Lion Award at the 76th Venice Film Festival.');

-- --------------------------------------------------------

--
-- 表的结构 `film_category_relation`
--

CREATE TABLE `film_category_relation` (
  `id` int NOT NULL,
  `film_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `film_category_relation`
--

INSERT INTO `film_category_relation` (`id`, `film_id`, `category_id`) VALUES
(1, 1, 3),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 4, 1),
(7, 5, 2),
(8, 6, 3),
(9, 7, 1),
(10, 8, 2),
(11, 4, 3),
(12, 5, 1),
(13, 6, 2),
(14, 7, 3),
(15, 8, 1);

-- --------------------------------------------------------

--
-- 表的结构 `film_playlist_relation`
--

CREATE TABLE `film_playlist_relation` (
  `id` int NOT NULL,
  `film_id` int NOT NULL,
  `playlist_id` int NOT NULL,
  `create_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `film_playlist_relation`
--

INSERT INTO `film_playlist_relation` (`id`, `film_id`, `playlist_id`, `create_time`) VALUES
(1, 8, 1, '2021-11-01'),
(2, 7, 2, '2021-11-10'),
(3, 2, 3, '2021-11-08'),
(4, 5, 4, '2021-11-18'),
(5, 5, 5, '2021-11-05'),
(6, 2, 5, '2021-11-07'),
(7, 2, 4, '2021-11-22'),
(8, 1, 3, '2021-11-16'),
(9, 4, 2, '2021-11-02'),
(10, 5, 1, '2021-11-25'),
(11, 6, 3, '2021-11-13'),
(12, 3, 2, '2021-11-24'),
(13, 8, 4, '2021-11-03'),
(14, 4, 5, '2021-11-14'),
(16, 1, 6, '2021-11-28'),
(17, 2, 6, '2021-11-16'),
(18, 3, 6, '2021-11-04'),
(19, 4, 7, '2021-11-28'),
(22, 1, 1, '2021-12-04');

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_27_073728_create_categories_table', 2),
(6, '2021_11_19_132719_create_film_table', 2),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(8, '2021_11_22_085813_create_sessions_table', 3);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `playlists`
--

CREATE TABLE `playlists` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `playlists`
--

INSERT INTO `playlists` (`id`, `name`) VALUES
(1, 'J\'aime'),
(2, 'History'),
(3, 'Lalala'),
(4, 'asia'),
(5, 'j\'ai vu'),
(6, 'new playlist');

-- --------------------------------------------------------

--
-- 表的结构 `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vUe1eVyDolGsGPVdvLje9f6P5TXkcZPbHDZ55taE', 1, '172.19.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWldYRE5RdFdoTmM3cnpVaFk0MEU1bzNoZ3R2NlhQVWoyTkU2VzQ1bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9qYWxvbjIvY2F0YWxvZ3VlL3B1YmxpYy9mYXZvcml0ZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRPVzhXaGJpZ0ZIRUZyTndiMUZXMzQuMllsWDFzUjNOZmhpZGlQLjQvVUZZejNyRXhURnZDVyI7fQ==', 1638720891);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nikename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `statut` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `nikename`, `email`, `avatar`, `statut`) VALUES
(1, 'Fan', 'FEI', 'Fanfan', '1@1.com', 'x', 0),
(2, 'Fan', 'FEI', 'Feifei', '2@2.com', 'xx', 2),
(3, 'Murray', ' Sapir', 'MS', '3@3.com', 'xxx', 1),
(4, 'Kerwin', 'Attlee', 'K.A', '4@4.com', 'xxx', 1),
(5, 'Linda', 'Rosalind', 'L.R', '5@5.com', 'xxxxx', 1),
(6, 'Alston', 'Ivan', 'A.I', '6@6.com', 'xxxxxx', 1),
(7, 'Queena', 'Patience', 'Q.P', '7@7.com', 'xxxxxxx', 1),
(8, 'Catherine', 'Robert', 'C.R', '8@8.com', 'xxxxxxxx', 1),
(9, 'Ella', 'Nehemiah', 'E.N', '9@9.com', 'xxxxxxxxx', 1),
(10, 'Monica', 'Galbraith', 'M.G', '10@10.com]', 'xxxxxxxxxx', 1);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zhiwei', 'frpeizhiwei@163.com', NULL, '$2y$10$OW8WhbigFHEFrNwb1FW34.2YlX1sR3NfhidiP.4/UFYz3rExTFvCW', NULL, NULL, '4bDCqrMleSFBkwGtUNpj6BJlgmB4AEt535QzzHr2fVCoKKmhs7mL87kGS5GO', '2021-11-22 15:55:09', '2021-11-22 15:55:09'),
(4, 'macpro', 'zhiwei.pei@outlook.com', NULL, '$2y$10$6lij1GMk.4X/HcS67tXuFOj4kYxKrC3gt6IKh/cwHNe8PX2WBtC7a', NULL, NULL, NULL, '2021-11-23 10:18:57', '2021-11-23 10:18:57'),
(5, 'macpro', 'T.Courtois@gmail.com', NULL, '$2y$10$T0Cn7w4zFOZGAfLEI0F/3O63HjKg25XDzEYl41gIA0mz2PWr41wgq', NULL, NULL, NULL, '2021-11-23 10:20:39', '2021-11-23 10:20:39');

-- --------------------------------------------------------

--
-- 表的结构 `user_playlist_relation`
--

CREATE TABLE `user_playlist_relation` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `playlist_id` int NOT NULL,
  `origin_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `user_playlist_relation`
--

INSERT INTO `user_playlist_relation` (`id`, `user_id`, `playlist_id`, `origin_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(7, 2, 1, 2),
(8, 2, 2, 2),
(9, 2, 3, 2);

--
-- 转储表的索引
--

--
-- 表的索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- 表的索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 表的索引 `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `film_category_relation`
--
ALTER TABLE `film_category_relation`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `film_playlist_relation`
--
ALTER TABLE `film_playlist_relation`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 表的索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 表的索引 `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 表的索引 `user_playlist_relation`
--
ALTER TABLE `user_playlist_relation`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `film`
--
ALTER TABLE `film`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `film_category_relation`
--
ALTER TABLE `film_category_relation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `film_playlist_relation`
--
ALTER TABLE `film_playlist_relation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `user_playlist_relation`
--
ALTER TABLE `user_playlist_relation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
