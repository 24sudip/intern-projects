-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `third_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogger_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_photo` varchar(255) DEFAULT NULL,
  `blog_intro` varchar(255) NOT NULL,
  `blog_detail` longtext NOT NULL,
  `blog_icon` varchar(255) DEFAULT NULL,
  `banner_theme` int(11) NOT NULL DEFAULT 0,
  `page_view` int(11) NOT NULL DEFAULT 0,
  `feature_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogger_id`, `category_id`, `blog_title`, `blog_photo`, `blog_intro`, `blog_detail`, `blog_icon`, `banner_theme`, `page_view`, `feature_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '5 Easy Ways You Can Turn Future Into Success', '20240331201351-1.jpg', 'The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc.', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">Everyone realizes why a new common language would be desirable: </span></p><p><span style=\"color: rgb(112, 122, 136);\">one could refuse to pay expensive translators. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>To achieve this, it&nbsp;</span>would be<span style=\"color: rgb(112, 122, 136);\">&nbsp;necessary to have uniform grammar, pronunciation and more common words.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 'icon-camrecorder', 0, 8, 0, '2024-03-31 14:13:51', '2024-04-06 04:23:25'),
(2, 1, 3, 'Master The Art Of Nature With These 7 Tips', '20240402125339-1.jpg', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">The European languages are members of the same family. </span></p><p><span style=\"color: rgb(112, 122, 136);\">Their separate existence is a myth. </span></p><p><span style=\"color: rgb(112, 122, 136);\">For science, music, sport, etc. </span></p><p><span style=\"color: rgb(112, 122, 136);\">Europe uses the same&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">vocabulary</a><span style=\"color: rgb(112, 122, 136);\">. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>The languages only differ in their grammar, their pronunciation and their most common words</span>.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 'icon-picture', 0, 18, 0, '2024-04-01 10:18:11', '2024-04-06 08:58:32'),
(4, 2, 8, '3 Easy Ways To Make Your iPhone Faster', '20240403151719-2.jpg', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">The languages only differ in their grammar, their pronunciation and their most common words. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>Everyone realizes why a new common language would be desirable.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 1, 2, 0, '2024-04-03 09:17:19', '2024-04-20 05:44:16'),
(5, 2, 2, 'Important Thing You Need To Know About Swim', '20240403152546-2.jpg', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">One could refuse to pay expensive translators. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 4, 0, '2024-04-03 09:25:46', '2024-04-16 08:31:14'),
(6, 2, 3, 'How To Become Better With Building In 1 Month', '20240403153019-2.jpg', 'Quaerat rerum conseq', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. </span></p><p><span style=\"color: rgb(112, 122, 136);\">The new common language will be more simple and regular than the existing&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">European languages</a><span style=\"color: rgb(112, 122, 136);\">. </span></p><p><span style=\"color: rgb(112, 122, 136);\">It will be as simple as Occidental; in fact, it will be Occidental.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 0, 0, '2024-04-03 09:30:19', '2024-04-04 06:35:01'),
(7, 2, 4, 'The Secrets To Finding Class Tools For Your Dress', '20240403153302-2.jpg', 'Ex facere quia sit u', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">A collection of textile samples lay spread out on the table -</span></p><p><span style=\"color: rgb(112, 122, 136);\">Samsa was a travelling salesman - </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 1, 0, '2024-04-03 09:33:02', '2024-04-06 09:25:26'),
(8, 3, 7, 'An Incredibly Easy Method That Works For All', '20240404125231-3.jpg', 'Quod excepteur ipsum', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h4>I should be incapable of drawing a single stroke</h4><ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li></ul><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 0, 0, '2024-04-04 06:52:31', '2024-04-04 06:52:31'),
(9, 3, 8, '10 Ways To Immediately Start Selling Furniture', '20240404125619-3.jpg', 'Repellendus Sunt co', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><ul><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li>Gregor Samsa woke from troubled dreams</li></ul><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 0, 0, '2024-04-04 06:56:19', '2024-04-04 06:56:22'),
(10, 3, 3, '15 Unheard Ways To Achieve Greater Walker', '20240418120942-2.jpg', 'Saepe eius ut est q', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">To an English person, it will seem like simplified&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">English</a><span style=\"color: rgb(112, 122, 136);\">, as a skeptical Cambridge friend of mine told me what Occidental is. </span></p><p><span style=\"color: rgb(112, 122, 136);\">The European languages are members of the same family. </span></p><p><span style=\"color: rgb(112, 122, 136);\">Their separate existence is a myth.</span></p><p><span style=\"color: rgb(112, 122, 136);\">﻿ For science, music, sport, etc, Europe uses the same vocabulary</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 'icon-earphones', 0, 0, 0, '2024-04-04 07:01:05', '2024-04-18 06:09:44'),
(11, 4, 4, 'Facts About Business That Will Help You Success', '20240404140231-4.jpg', 'Quaerat rerum conseq', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">The European languages are members of the same family. </span></p><p><span style=\"color: rgb(112, 122, 136);\">Their separate existence is a myth. For science, music, sport, etc, </span></p><p><span style=\"color: rgb(112, 122, 136);\">Europe uses the same&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">vocabulary</a><span style=\"color: rgb(112, 122, 136);\">. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>The languages only differ in their grammar, their pronunciation and their most common words</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 1, 1, '2024-04-04 08:02:31', '2024-04-18 06:46:59'),
(12, 4, 5, 'Here Are 8 Ways To Success Faster', '20240404140852-4.jpg', 'Ex facere quia sit u', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">Everyone realizes why a new common language would be desirable: </span></p><p><span style=\"color: rgb(112, 122, 136);\">one could refuse to pay expensive translators. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>To achieve this, it&nbsp;</span>would be<span style=\"color: rgb(112, 122, 136);\">&nbsp;necessary to have uniform grammar, pronunciation and more common words</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 19, 0, '2024-04-04 08:08:52', '2024-04-04 08:08:52'),
(13, 4, 2, 'Want To Have A More Appealing Tattoo?', '20240404141730-4.jpg', 'Quod excepteur ipsum', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">The languages only differ in their grammar, </span></p><p><span style=\"color: rgb(112, 122, 136);\">their pronunciation and their most common words. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>Everyone realizes why a new common language would be desirable</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 0, 0, '2024-04-04 08:17:30', '2024-04-04 08:17:30'),
(14, 5, 2, 'Feel Like A Pro With The Help Of These 7 Tips', '20240404142221-5.jpg', 'Repellendus Sunt co', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">One could refuse to pay expensive translators. </span></p><p><span style=\"color: rgb(112, 122, 136);\">To achieve this, it would be necessary to have uniform grammar, </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>pronunciation and more common words</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 1, 0, '2024-04-04 08:22:21', '2024-04-23 06:13:31'),
(15, 5, 5, 'Your Light Is About To Stop Being Relevant', '20240404142513-5.jpg', 'Saepe eius ut est q', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. </span></p><p><span style=\"color: rgb(112, 122, 136);\">The new common language will be more simple and regular than the existing&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">European languages</a><span style=\"color: rgb(112, 122, 136);\">. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>It will be as simple as Occidental; in fact, it will be Occidental.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 0, 0, '2024-04-04 08:25:13', '2024-04-04 08:25:13'),
(16, 5, 6, 'The Next 60 Things To Immediately Do About Building', '20240404144241-5.jpg', 'Saepe eius ut est q', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">A collection of textile samples lay spread out on the table - </span></p><p><span style=\"color: rgb(112, 122, 136);\">Samsa was a travelling salesman - </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 20, 0, '2024-04-04 08:42:41', '2024-04-04 08:42:41'),
(17, 5, 6, 'Most Burning Questions About Light Lamp', '20240404144517-5.jpg', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h4>I should be incapable of drawing a single stroke</h4><ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li></ul><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 0, 0, '2024-04-04 08:45:17', '2024-04-04 08:45:17'),
(18, 1, 3, '9 Most Awesome Blue Lake With Snow Mountain', '20240404144849-1.jpg', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><ul><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li>Gregor Samsa woke from troubled dreams</li></ul><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 4, 0, '2024-04-04 08:48:49', '2024-04-26 08:19:56'),
(19, 1, 8, 'Open The Gates For Chair By Using These Tips', '20240404145118-1.jpg', 'Quaerat rerum conseq', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">To an English person, it will seem like simplified&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">English</a><span style=\"color: rgb(112, 122, 136);\">, as a skeptical Cambridge friend of mine told me what Occidental is. </span></p><p><span style=\"color: rgb(112, 122, 136);\">The European languages are members of the same family. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 10, 0, '2024-04-04 08:51:18', '2024-04-23 10:01:34'),
(20, 3, 3, 'How I Improved My Fashion Style In One Day', '20240404145454-3.jpg', 'Ex facere quia sit u', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">The European languages are members of the same family. </span></p><p><span style=\"color: rgb(112, 122, 136);\">Their separate existence is a myth. For science, music, sport, etc, </span></p><p><span style=\"color: rgb(112, 122, 136);\">Europe uses the same&nbsp;</span><a href=\"about:blank\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(254, 79, 112);\">vocabulary</a><span style=\"color: rgb(112, 122, 136);\">.</span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>The languages only differ in their grammar, their pronunciation and their most common words.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 21, 0, '2024-04-04 08:54:54', '2024-04-04 08:54:54'),
(21, 4, 4, 'Wondering How To Make Your Hair Style Rock?', '20240404150001-4.jpg', 'Quod excepteur ipsum', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(112, 122, 136);\">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. </span></p><p><span style=\"color: rgb(112, 122, 136);\"><span class=\"ql-cursor\">﻿</span>To achieve this, it&nbsp;</span>would be<span style=\"color: rgb(112, 122, 136);\">&nbsp;necessary to have uniform grammar, pronunciation and more common words.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', NULL, 0, 13, 0, '2024-04-04 09:00:01', '2024-04-24 08:23:05'),
(22, 1, 8, 'How To Make More Construction By Doing Less', '20240421110658-1.jpg', 'Laboris qui fugit f', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>Far far away, behind the word mountains, </p><p>far from the countries Vokalia and Consonantia, </p><p>there live the blind texts. </p><p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><p>Consequuntur qui omn.Consectetur voluptat.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 'icon-camrecorder', 0, 0, 0, '2024-04-21 05:06:58', '2024-04-21 05:06:59'),
(24, 6, 5, 'Dignissimos unde por', '20240421154119-6.jpg', 'Et consequuntur repr', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>Tempor esse incididu.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\">Magna ab accusamus a.</div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 'icon-earphones', 0, 0, 0, '2024-04-21 09:41:18', '2024-04-21 09:41:20'),
(25, 7, 6, 'Dolore distinctio C', '20240423121115-7.webp', 'Nam at quae et odit', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>Minima in culpa tota.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\">Voluptate totam accu.</div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 'icon-earphones', 1, 6, 0, '2024-04-23 06:11:15', '2024-04-27 07:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `page_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `page_status`, `created_at`, `updated_at`) VALUES
(2, 'Inspiration', 1, '2024-03-29 08:25:11', '2024-03-29 09:26:27'),
(3, 'Lifestyle', 1, '2024-03-29 08:51:22', '2024-03-29 09:28:05'),
(4, 'Fashion', 1, '2024-03-29 09:33:01', NULL),
(5, 'Politic', 1, '2024-03-29 09:33:22', NULL),
(6, 'Trending', 1, '2024-03-29 09:33:52', NULL),
(7, 'Culture', 1, '2024-03-29 09:34:14', NULL),
(8, 'How To', 1, '2024-04-03 08:29:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment_text` varchar(255) NOT NULL,
  `commentor_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reading_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment_text`, `commentor_id`, `created_at`, `updated_at`, `reading_status`) VALUES
(1, 2, 'Aut maxime iusto ut', 2, '2024-04-06 05:25:14', '2024-04-26 06:24:38', 1),
(2, 2, 'Tempora nulla alias', 3, '2024-04-06 05:28:14', NULL, 0),
(3, 5, 'Incidunt aut ut qui\r\nsusepuke mailinator com', 1, '2024-04-06 09:01:28', NULL, 0),
(4, 19, 'Pariatur Occaecat d', 2, '2024-04-23 09:58:56', '2024-04-26 06:28:24', 1),
(5, 19, 'Deleniti aliquam hic', 2, '2024-04-23 10:00:26', NULL, 0),
(6, 19, 'Animi error omnis e', 2, '2024-04-23 10:00:36', '2024-04-27 05:43:02', 1),
(7, 19, 'Non error aut qui do', 2, '2024-04-23 10:00:45', NULL, 0),
(8, 21, 'Sapiente ab ut facer', 1, '2024-04-24 06:24:30', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `group_inventories`
--

CREATE TABLE `group_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_inventories`
--

INSERT INTO `group_inventories` (`id`, `blog_id`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 6, 'Minimal', '2024-04-04 05:44:07', NULL),
(2, 6, 'Classic', '2024-04-04 05:55:36', NULL),
(5, 5, 'Personal-Slider', '2024-04-04 06:06:02', NULL),
(6, 5, 'Classic-Slider', '2024-04-04 06:06:22', NULL),
(7, 4, 'Editors-Pick', '2024-04-04 06:11:53', NULL),
(8, 21, 'Minimal', '2024-04-04 09:11:42', NULL),
(9, 19, 'Personal-Slider', '2024-04-04 09:13:51', NULL),
(10, 18, 'Personal-Slider', '2024-04-04 09:15:05', NULL),
(11, 18, 'Classic-Slider', '2024-04-04 09:15:46', NULL),
(12, 17, 'Personal-Slider', '2024-04-04 09:17:44', NULL),
(13, 17, 'Minimal', '2024-04-04 09:18:03', NULL),
(14, 15, 'Personal-Slider', '2024-04-04 09:21:28', NULL),
(15, 15, 'Classic', '2024-04-04 09:22:26', NULL),
(16, 14, 'Personal-Slider', '2024-04-04 09:24:17', NULL),
(17, 10, 'Editors-Pick', '2024-04-04 09:29:46', NULL),
(18, 9, 'Editors-Pick', '2024-04-04 09:31:11', NULL),
(19, 9, 'Classic', '2024-04-04 09:31:38', NULL),
(20, 8, 'Editors-Pick', '2024-04-04 09:32:33', NULL),
(21, 7, 'Minimal', '2024-04-04 09:34:46', NULL),
(22, 19, 'Celebration', '2024-04-19 08:09:31', NULL),
(23, 12, 'Celebration', '2024-04-19 08:10:08', NULL),
(24, 8, 'Celebration', '2024-04-19 08:11:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"f97bd09f-99d4-4133-9528-3cc43a6f2df2\",\"displayName\":\"App\\\\Mail\\\\SubscriberMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:23:\\\"App\\\\Mail\\\\SubscriberMail\\\":4:{s:30:\\\"\\u0000App\\\\Mail\\\\SubscriberMail\\u0000title\\\";s:25:\\\"New Blog Post Has Arrived\\\";s:29:\\\"\\u0000App\\\\Mail\\\\SubscriberMail\\u0000body\\\";s:82:\\\"Visit Katen Website For New Blog Related Information. Thank you for participating!\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"saha.sagari.123@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1713676020, 1713676020);

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_links`
--

CREATE TABLE `media_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogger_id` int(11) NOT NULL,
  `link_icon` varchar(255) NOT NULL,
  `following_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_links`
--

INSERT INTO `media_links` (`id`, `blogger_id`, `link_icon`, `following_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'fab fa-facebook-f', 'https://www.facebook.com/', '2024-04-24 04:49:05', NULL),
(2, 1, 'fab fa-twitter', 'https://twitter.com/?lang=en', '2024-04-24 04:58:39', '2024-04-24 06:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_27_082116_add_profile_photo_to_users', 1),
(5, '2024_03_28_084235_create_categories_table', 1),
(6, '2024_03_28_093420_add_role_to_users', 1),
(9, '2024_03_29_154603_create_blogs_table', 2),
(10, '2024_04_02_144037_create_tags_table', 3),
(11, '2024_04_03_111323_create_tag_inventories_table', 4),
(12, '2024_04_03_154059_create_group_inventories_table', 5),
(13, '2024_04_06_103443_create_comments_table', 6),
(14, '2024_04_06_114629_create_replies_table', 7),
(15, '2024_04_20_143156_create_subscribers_table', 8),
(17, '2024_04_23_150801_create_media_links_table', 9),
(18, '2024_04_24_125402_create_second_replies_table', 10),
(19, '2024_04_26_121056_add_reading_status_to_comments_table', 11),
(20, '2024_04_27_100508_create_send_subscribers_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_text` varchar(255) NOT NULL,
  `replier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `reply_text`, `replier_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Eos irure provident', 4, '2024-04-06 08:25:14', NULL),
(2, 1, 'It is a Test.', 5, '2024-04-06 08:53:19', NULL),
(3, 4, 'Reprehenderit ut su', 2, '2024-04-23 10:00:14', NULL),
(4, 6, 'In voluptatem conse', 2, '2024-04-23 10:01:12', NULL),
(5, 6, 'Suscipit anim proide', 2, '2024-04-23 10:01:33', NULL),
(6, 8, 'Deserunt asperiores', 1, '2024-04-24 06:24:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `second_replies`
--

CREATE TABLE `second_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reply_id` int(11) NOT NULL,
  `second_reply_text` varchar(255) NOT NULL,
  `second_replier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `second_replies`
--

INSERT INTO `second_replies` (`id`, `reply_id`, `second_reply_text`, `second_replier_id`, `created_at`, `updated_at`) VALUES
(1, 6, 'Aut dolor id velit', 1, '2024-04-24 08:03:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `send_subscribers`
--

CREATE TABLE `send_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_total_blog` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_subscribers`
--

INSERT INTO `send_subscribers` (`id`, `last_total_blog`, `created_at`, `updated_at`) VALUES
(1, '21', '2024-03-27 04:25:40', '2024-04-21 05:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RcxqDJJ1GwKE3nS7dTfNmsX9aT8UGobpFiHEhjvq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieTY1UUtjRFdMMkVORFFsVjdyUlBCTDY3Z0FxRUV1Sk1ESnVUS1ZseSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zb2NpYWwvbGluayI7fXM6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxNDIwMTcyMDt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1714205652);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `subscriber_email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `user_id`, `subscriber_email`, `created_at`, `updated_at`) VALUES
(1, 1, 'saha.sagari.123@gmail.com', '2024-04-20 08:53:01', NULL),
(2, 3, 'rajib.cit.bd@gmail.com', '2024-04-21 05:14:12', NULL),
(4, 2, 'alamin.cit.bd@gmail.com', '2024-04-27 04:26:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, '#Trending', '2024-04-02 09:18:28', NULL),
(2, '#Video', '2024-04-02 09:26:28', NULL),
(3, '#Featured', '2024-04-02 09:27:01', NULL),
(4, '#Gallery', '2024-04-02 09:27:33', NULL),
(5, '#Celebrities', '2024-04-02 09:28:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag_inventories`
--

CREATE TABLE `tag_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_inventories`
--

INSERT INTO `tag_inventories` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '2024-04-03 06:25:01', NULL),
(3, 1, 2, '2024-04-03 06:45:00', NULL),
(4, 1, 5, '2024-04-03 06:46:47', NULL),
(5, 2, 3, '2024-04-03 06:57:32', NULL),
(6, 21, 5, '2024-04-06 03:10:59', NULL),
(7, 20, 4, '2024-04-06 03:12:21', NULL),
(8, 8, 1, '2024-04-18 09:01:11', NULL),
(9, 2, 1, '2024-04-18 09:01:46', NULL),
(10, 12, 1, '2024-04-18 09:02:46', NULL),
(11, 11, 1, '2024-04-18 09:03:40', NULL),
(12, 4, 1, '2024-04-18 09:04:31', NULL),
(13, 19, 3, '2024-04-23 09:52:30', NULL),
(14, 19, 4, '2024-04-23 09:52:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'blogger'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_photo`, `role`) VALUES
(1, 'Noelle Padilla', 'zehafuk@mailinator.com', NULL, '$2y$12$5VbBN0KpZcPf8vVj2zT2Oe7vwOztWWwxKMjEPHnDLFnMCGPjVmCxO', '5dCktZSpfOVtPAYfB7t1ldZEppnbxN4qY0uooBKNHiE864ALAWciG6MVy7Ia', '2024-03-28 10:12:45', '2024-03-29 01:47:38', '1.jpg', 'blogger'),
(2, 'Clementine Marshall', 'remupypozy@mailinator.com', NULL, '$2y$12$jAkMWzhEtI1U6zVuciXUPumJ95sAPqY3.ONbhW5GNWmdU0JTe2OE.', '7EV0fIUVJvmPjKEH8yrxuSy0vylM4y3RZQrqWmaOdLEbXH13WfPI7HDLlhzG', '2024-03-28 10:13:32', '2024-04-04 08:14:19', '2.jpg', 'admin'),
(3, 'Simon Blankenship', 'qotohemu@mailinator.com', NULL, '$2y$12$aig7MCIbO8l5Ndp4OZkTG.k0k.pn6tSAj35B1MdaHMMdmVHvj/iKS', 'VWPc2PKacGiQRf15Ptf7WrqVBbfufvTKukXu4IciCe69ggTpCIAJeXNFYAtG', '2024-04-01 08:50:32', '2024-04-04 06:46:48', '3.jpg', 'blogger'),
(4, 'Aladdin Oliver', 'tyqaj@mailinator.com', NULL, '$2y$12$2p9h/n4VfKHrtf0j2yKBseT8IILFArZhj2dpecVS6jDN8.DXuw2YG', 'cw7LxlvrZBB2lf7dJHbsg2PmXwzsG0xUR95RvfICddhCPpgIY5Iu6H9Y4reU', '2024-04-01 08:51:27', '2024-04-04 07:58:18', '4.jpg', 'blogger'),
(5, 'Melyssa Baker', 'dukeloz@mailinator.com', NULL, '$2y$12$kPbOMRMoTIDO6Ak4co3mR.HVNJ.tGhkPdlvN2AUMQYOIr.Do7fD9W', NULL, '2024-04-03 08:26:56', '2024-04-03 08:26:56', NULL, 'blogger'),
(6, 'Meredith Shaw', 'sofagixyro@mailinator.com', NULL, '$2y$12$UEuoX9yPHz9p9JTVu6yD0uao1/0AvcVhbu6.5GETSnVH81DUMyFc.', 'wAmPuEY5imUApbbWGsKTnd19XDmWfA9Gw48YH8gwCYvPGBsIPVNLz3474Xfk', '2024-04-21 09:29:58', '2024-04-21 09:43:39', NULL, 'blocked'),
(7, 'Xaviera Larsen', 'gebesimaki@mailinator.com', NULL, '$2y$12$EIoYUz.lckILDVjzEaHMSOzFBdfmTOBKn.hJpIBgZZzAfrXFDJnci', NULL, '2024-04-23 06:09:21', '2024-04-23 06:09:21', NULL, 'blogger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `group_inventories`
--
ALTER TABLE `group_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_links`
--
ALTER TABLE `media_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second_replies`
--
ALTER TABLE `second_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_subscribers`
--
ALTER TABLE `send_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_inventories`
--
ALTER TABLE `tag_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_inventories`
--
ALTER TABLE `group_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_links`
--
ALTER TABLE `media_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `second_replies`
--
ALTER TABLE `second_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_subscribers`
--
ALTER TABLE `send_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tag_inventories`
--
ALTER TABLE `tag_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
