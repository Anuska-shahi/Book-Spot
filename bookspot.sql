-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 01:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '12345 ', NULL, NULL),
(2, 'sappywithmatherz@gmail.com', 'sovia', '$2y$10$MGLDWeEKfLRjmO5bcuItCOPyJjzjSIjsR.K/bY1NLZnDpnrgwx.LS', '2022-05-28 10:58:50', '2022-05-28 10:58:50'),
(4, 'max@gmail.com', 'max', '$2y$10$H9yWScXEqfhaZm8xgmNoNON1XrPevuYrUz19e6GEh93UKUNPrEsVS', '2022-05-28 11:00:09', '2022-05-28 11:00:09'),
(5, 'smriti@gmail.com', 'smriti', '$2y$10$Ie/cASnhqtICq9nGnvMlmu8jteTy0u40TidJMRFmFRUnSEI8lEAfq', '2022-05-28 11:00:54', '2022-05-28 11:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pen_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `middle_name`, `last_name`, `pen_name`, `created_at`, `updated_at`) VALUES
(1, 'Joanne', 'Kathleen', 'Rowling', 'J.K. Rowling', NULL, NULL),
(2, 'Yuval  ', 'Noah', 'Harari', 'Yuval Noah Harari', NULL, NULL),
(3, 'Alex', '', 'Michaelides ', 'Alex Michaelides ', NULL, NULL),
(4, 'Michelle', '', 'Obama', 'Michelle Obama', NULL, NULL),
(5, 'Stephen', 'Edwin', ' King', 'Stephen  King', NULL, NULL),
(6, 'John', 'Ronald Reuel', 'Tolkien', 'J.R.R.Tolkien', '2022-05-30 00:55:54', '2022-05-30 00:55:54'),
(7, 'Jay ', '', 'Shetty', 'Jay Shetty', NULL, NULL),
(8, 'Colleen ', '', 'Hoover ', 'Colleen Hoover ', NULL, NULL),
(9, 'Barack ', '', 'Obama', ' Barack Obama', NULL, NULL),
(10, ' Bill', '', ' Bryson', ' Bill Bryson', NULL, NULL),
(11, 'Susan ', '', 'Cain', 'Susan Cain', NULL, NULL),
(12, 'Jon', '', 'Krakauer', 'Jon Krakauer\r\n', NULL, NULL),
(13, 'Karen', 'M.', 'McManus', 'Karen M. McManus', '2022-06-03 05:50:01', '2022-06-03 05:50:01'),
(14, 'Gillian', '-', 'Flynn', 'Gillian Flynn', '2022-06-03 06:03:38', '2022-06-03 06:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `edition`, `author_id`, `category_id`, `publisher_id`, `location_id`, `stock`, `image`, `status`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Harry Potter and the Philosopher\'s Stone ', 'First', 1, 1, 1, 1, 4, 'hp1.jpg\r\n', 'Available', NULL, NULL, 'It is a story about Harry Potter, an orphan brought up by his aunt and uncle because his parents were killed when he was a baby. Harry is unloved by his uncle and aunt but everything changes when he is invited to join Hogwarts School of Witchcraft and Wizardry and he finds out he\'s a wizard.'),
(2, 'Harry Potter and the Chamber of Secrets', 'First', 1, 1, 1, 1, 3, 'hp2.jpg', 'Available', NULL, NULL, 'The plot follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school\'s corridors warn that the \"Chamber of Secrets\" has been opened and that the \"heir of Slytherin\" would kill all pupils who do not come from all-magical families.'),
(3, 'Sapiens: A Brief History of Humankind', 'Paperback', 2, 2, 2, 2, 2, 'Sapiens.jpg', 'Available', NULL, NULL, '100,000 years ago, at least six human species inhabited the earth. Today there is just one. Us. Homo sapiens.'),
(4, 'Harry Potter and the Prisoner of Azkaban\r\n\r\n', 'Hardback', 1, 1, 1, 1, 2, 'hp3.jpg\r\n', 'Available', NULL, NULL, 'Harry, Ron and Hermoine return to Hogwarts just as they learn about Sirius Black and his plans to kill Harry. However, when Harry runs into him, he learns that the truth is far from reality.'),
(5, 'The Silent Patient', 'Hardback', 3, 3, 3, 3, 6, 'silent.jpg', 'Available', NULL, NULL, '\r\nThe Silent Patient is a shocking psychological thriller of a woman’s act of violence against her husband—and of the therapist obsessed with uncovering her motive.'),
(6, 'Becoming', 'Paperback', 4, 4, 4, 1, 2, 'becoming.jpg', 'Available', NULL, NULL, 'Michelle Obama invites readers into her world, chronicling the experiences that have shaped her—from her childhood on the South Side of Chicago to her years as an executive balancing the demands of motherhood and work, to her time spent at the world’s most famous address.'),
(7, 'It', 'Hardback', 5, 5, 5, 2, 6, 'it.jpg', 'Available', NULL, NULL, 'The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears of its victims to disguise itself while hunting its prey.'),
(8, 'The Shining', 'Paperback', 5, 5, 5, 3, 1, 'shining.jpg', 'Available', NULL, NULL, 'As the harsh winter weather sets in, the idyllic location feels ever more remote...and more sinister. And the only one to notice the strange and terrible forces gathering around the Overlook is Danny Torrance, a uniquely gifted five-year-old.'),
(9, 'Harry Potter and the Goblet of Fire', 'Paperback', 1, 1, 1, 2, 4, 'hp4.jpg', 'available', NULL, NULL, 'It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the mystery surrounding the entry of Harry\'s name into the Triwizard Tournament, in which he is forced to compete. The book was published in the United Kingdom by Bloomsbury and in the United States by Scholastic.'),
(10, 'The Fellowship of the Ring', 'Paperback', 6, 1, 1, 3, 2, 'lotr1.jpg', 'available', NULL, NULL, 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.'),
(11, 'The Return of the King ', 'Paperback', 6, 1, 1, 3, 4, 'lotr3.jpg', 'available', NULL, NULL, 'The Return of the King\" presents the final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits Frodo and Sam reach Mordor in their quest to destroy the `one ring\', while Aragorn leads the forces of good against Sauron\'s evil army at the stone city of Minas Tirith.'),
(12, 'The Two Towers', 'Paperback', 6, 1, 1, 1, 4, 'lotr2.jpg', 'available', NULL, NULL, 'Frodo and his Companions of the Ring have been beset by danger during their quest to prevent the Ruling Ring from falling into the hands of the Dark Lord by destroying it in the Cracks of Doom. They have lost the wizard, Gandalf, in a battle in the Mines of Moria. And Boromir, seduced by the power of the Ring, tried to seize it by force. '),
(13, 'Think Like A Monk', 'Paperback', 7, 2, 4, 1, 1, 'monk.jpg', 'available', NULL, NULL, 'The lessons monks learn are profound but often abstract. Shetty transforms them into advice and exercises we can all apply to reduce stress, improve focus, improve relationships, identify our hidden abilities, increase self-discipline and give the gifts we find in ourselves to the world. Shetty proves that everyone can – and should – think like a monk.'),
(14, 'A Promised Land', 'Paperback', 9, 4, 2, 2, 1, 'obama.jpg', 'available', NULL, NULL, 'A riveting, deeply personal account of history in the making-from the president who inspired us to believe in the power of democracy In the stirring, highly anticipated first volume of his presidential memoirs, Barack Obama tells the story of his improbable odyssey from young man searching for his identity to leader of the free world, describing in strikingly personal detail both his political education and the landmark moments of the first term of his historic presidency-a time of dramatic transformation and turmoil.'),
(15, 'It Ends With Us', 'Paperback', 8, 1, 2, 2, 4, 'ends.jpg', 'available', NULL, NULL, 'Lily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town in Maine where she grew up—she graduated from college, moved to Boston, and started her own business. So when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life suddenly seems almost too good to be true.'),
(16, 'Verity', 'paperback', 8, 1, 3, 1, 3, 'verity.jpg', 'available', NULL, NULL, 'Lowen Ashleigh is a struggling writer on the brink of financial ruin when she accepts the job offer of a lifetime. Jeremy Crawford, husband of bestselling author Verity Crawford, has hired Lowen to complete the remaining books in a successful series his injured wife is unable to finish.'),
(17, 'Homo Deus', 'Paperback', 2, 2, 2, 3, 1, 'deus.jpg', 'Unvailable', NULL, NULL, 'As with its predecessor, Sapiens: A Brief History of Humankind, Harari recounts the course of history while describing events and the individual human experience, along with ethical issues in relation to his historical survey. However, Homo Deus (from Latin \"Homo\" meaning man or human and \"Deus\" meaning God) deals more with the abilities acquired by humans (Homo sapiens) throughout their existence, and their evolution as the dominant species in the world.'),
(18, '21 Lessons for the 21st Century', 'Paperback', 2, 2, 2, 3, 4, '21.jpg', 'available', NULL, NULL, 'In a world deluged by irrelevant information, clarity is power. Censorship works not by blocking the flow of information, but rather by flooding people with disinformation and distractions. 21 Lessons for the 21st Century cuts through these muddy waters and confronts some of the most urgent questions on today’s global agenda.'),
(19, 'Into Thin Air', 'Paperback', 12, 2, 5, 2, 1, 'air.jpg', 'Unvailable', NULL, NULL, 'Into Thin Air: A Personal Account of the Mt. Everest Disaster is a 1997 bestselling nonfiction book written by Jon Krakauer. It details Krakauer\'s experience in the 1996 Mount Everest disaster, in which eight climbers were killed and several others were stranded by a storm'),
(20, 'A Short History of Nearly Everything', 'Hardback', 10, 2, 3, 1, 4, 'ashort.jpg', 'available', NULL, NULL, 'A Short History of Nearly Everything by American-British author Bill Bryson is a popular science book that explains some areas of science, using easily accessible language that appeals more to the general public than many other books dedicated to the subject.'),
(21, 'Quiet: The Power of Introverts in a World That Can\'t Stop Talking', 'Paperback', 11, 2, 1, 1, 1, 'quiet.jpg', 'available', NULL, NULL, 'The book presents a history of how Western culture transformed from a culture of character to a culture of personality in which an \"extrovert ideal\" dominates and introversion is viewed as inferior or even pathological. Adopting scientific definitions of introversion and extroversion as preferences for different levels of stimulation, Quiet outlines the advantages and disadvantages of each temperament, emphasizing the myth of the extrovert ideal that has dominated in the West since the early twentieth century. '),
(22, 'One of Us Is Lying', 'Paperback', 13, 3, 5, 3, 2, 'onelying.jpg', 'Available', NULL, NULL, 'Pay close attention and you might solve this.\r\nOn Monday afternoon, five students at Bayview High walk into detention.\r\nBronwyn, the brain, is Yale-bound and never breaks a rule.\r\nAddy, the beauty, is the picture-perfect homecoming princess.\r\nNate, the criminal, is already on probation for dealing.\r\nCooper, the athlete, is the all-star baseball pitcher.\r\nAnd Simon, the outcast, is the creator of Bayview High\'s notorious gossip app.'),
(23, 'One of Us Is Next', 'Paperback', 13, 3, 2, 3, 1, 'onenext.jpg', 'Unvailable', NULL, NULL, 'The sequel to the international bestseller One of Us is Lying. Welcome back to Bayview High . . .It\'s been a year since the events of One Of Us Is Lying. But nothing has settled for the residents of Bayview. Not now someone has started playing a sinister game of Truth or Dare. Choose truth? '),
(24, 'Two Can Keep a Secret', 'Paperback', 13, 3, 2, 2, 2, 'twosecret.jpg', 'available', NULL, NULL, 'A perfect town is hiding secrets. Secrets that somebody would kill to keep hidden.\r\n\r\nEllery\'s never been to Echo Ridge, but she\'s heard all about it.\r\n\r\nIt\'s where her aunt went missing at age sixteen, never to return. Where a Homecoming Queen\'s murder five years ago made national news.'),
(25, 'You\'ll Be the Death of Me', 'Paperback', 13, 3, 2, 3, 5, 'deathofme.jpg', 'available', NULL, NULL, 'Ivy, Mateo and Cal used to be close - best friends back in middle school.\r\n\r\nNow all they have in common is a bad day. So for old time\'s sake they skip school together - one last time.\r\n\r\nBut when the trio spot Brian \'Boney\' Mahoney ditching class too, they follow him - right into a murder scene.\r\n\r\nThey all have a connection to the victim. And they\'re ALL hiding something.'),
(26, 'The Cousins', 'Paperback', 13, 3, 4, 3, 0, 'cousins.jpg', 'available', NULL, NULL, 'Milly, Aubrey, and Jonah Story are cousins, but they barely know each another, and they\'ve never even met their grandmother. Rich and reclusive, she disinherited their parents before they were born. So when they each receive a letter inviting them to work at her island resort for the summer, they\'re surprised . . . and curious.'),
(27, 'Gone Girl', 'Paperback', 14, 3, 3, 3, 2, 'gonegirl.jpg', 'available', NULL, NULL, 'On a warm summer morning in North Carthage, Missouri, it is Nick and Amy Dunne’s fifth wedding anniversary. Presents are being wrapped and reservations are being made when Nick’s clever and beautiful wife disappears from their rented McMansion on the Mississippi River. Husband-of-the-Year Nick isn’t doing himself any favors with cringe-worthy daydreams about the slope and shape of his wife’s head, but passages from Amy\'s diary reveal the alpha-girl perfectionist could have put anyone dangerously on edge.');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_records`
--

CREATE TABLE `borrow_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `issued_date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'processing',
  `returned_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrow_records`
--

INSERT INTO `borrow_records` (`id`, `book_id`, `user_id`, `issued_date`, `due_date`, `status`, `returned_date`, `created_at`, `updated_at`) VALUES
(1, 15, 3, '2022-05-31 10:59:44', '2022-06-07 10:59:44', 'processing', '2022-06-05 10:59:44', NULL, NULL),
(2, 2, 8, '2022-05-05 15:22:01', '2022-06-02 15:22:01', 'processing', '2022-06-01 15:22:01', NULL, NULL),
(3, 9, 8, '2022-06-02 15:23:45', '2022-06-09 15:23:45', 'processing', '2022-06-07 15:23:45', NULL, NULL),
(4, 15, 9, '2022-05-30 12:16:17', '2022-06-06 12:16:17', 'Completed', '2022-06-01 12:16:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Fiction', NULL, NULL),
(2, 'Non-Fiction', NULL, NULL),
(3, 'Thriller', NULL, NULL),
(4, 'Biography', NULL, NULL),
(5, 'Horror\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `created_at`, `updated_at`, `block`) VALUES
(1, NULL, NULL, ''),
(2, NULL, NULL, ''),
(3, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_12_071530_create_categories_table', 1),
(6, '2022_05_12_073438_create_publications_table', 1),
(7, '2022_05_12_073630_create_authors_table', 1),
(8, '2022_05_12_073825_create_locations_table', 1),
(9, '2022_05_12_074504_create_books_table', 1),
(10, '2022_05_12_092500_create_borrow_records_table', 1),
(11, '2022_05_14_151851_add_description_to_books_table', 2),
(12, '2022_05_15_131206_create_admins_table', 3),
(13, '2022_06_01_084508_remove_language_column_from_books', 4),
(14, '2022_06_01_093336_remove_publication_date_column_from_books', 4),
(15, '2022_06_01_102616_remove_row_no_column_from_locations', 4),
(16, '2022_06_01_102643_remove_shelf_no_column_from_locations', 4),
(17, '2022_06_01_103149_add_block_to_locations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bloomsbury Publishing (UK)', NULL, NULL),
(2, 'Dvir Publishing House Ltd.', NULL, NULL),
(3, 'Celadon Books', NULL, NULL),
(4, 'Crown', NULL, NULL),
(5, 'New English Library', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `address`, `phone_no`, `dob`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'sovia', 'sovia', 'manandhar', 'sappywithmatherz@gmail.com', NULL, 'eyJpdiI6IjFOQ1kvelNpRE11ZDZ6NzRQbUdFL3c9PSIsInZhbHVlIjoiZllOemQyaFBhUDFWZEhvTDZJVXc0UT09IiwibWFjIjoiMGMyNDY5MDJjODA1YTBmMTUxZWIwMGFhNmQxYjk0ZTIwZDBhYWQ2ZWJiNzcwYmM1M2FjMTgzNzM0ZjczZmNhMCIsInRhZyI6IiJ9', 'Gongabu', '9811111111', '2022-05-10 00:00:00', 'no', NULL, '2022-05-28 04:04:15', '2022-05-28 04:04:15'),
(3, 'smriti', 'Smriti', 'Thapa', 'smriti@gmail.com', NULL, 'eyJpdiI6ImxlTU43bDMvRjJxL05EZFJKMmFCV0E9PSIsInZhbHVlIjoidjcwMVJEd283UWtkMTJYZmFsT1VqZz09IiwibWFjIjoiN2UzYzZhNjNlNjI2ZWZhYjc1MDJlYTc2YTNhYzJmMjkxMDM2NDgyNGMwMjkyNTUyN2Q5MzcxZjVlZjIzMjU1NiIsInRhZyI6IiJ9', 'Kalanki', '9822222222', '2022-06-01 00:00:00', 'no', NULL, '2022-05-28 04:26:35', '2022-05-28 04:26:35'),
(5, 'saloni', 'saloni', 'shrestha', 'saloni@gmail.com', NULL, 'eyJpdiI6Imw1VXVpY0dKZmRyQjRuL2gxK0c2K2c9PSIsInZhbHVlIjoiREtpYXhCZEU2U0RsSDZoUlA4bDRmQT09IiwibWFjIjoiYjU1MmYzYzcxMDkwNjExODgxODk0ZmU2MzM0NGRiMjcyZDkzYTBjZTMxZWFmNzM1MjlmYzJhMGVlZDIwMmM0YiIsInRhZyI6IiJ9', 'balaju', '9833333333', '2022-05-25 00:00:00', 'no', NULL, '2022-05-28 04:28:20', '2022-05-28 04:28:20'),
(6, 'max', 'maxim', 'mouse', 'max@gmail.com', NULL, 'eyJpdiI6InN0YnpvdklTanhJRDZmcEV2VGoyanc9PSIsInZhbHVlIjoibVAxU29JVWdqRUQ1VTl4Yk8wWE1uQT09IiwibWFjIjoiZThmNzkyNzM0Y2RjNjg4ZjFmOTdiMGQzYjFlMjk3OTY2MjRkMDU2ZTg0ZjRmMjMyNjg2MGMzYTBlZmUzYWRhZSIsInRhZyI6IiJ9', 'lele', '9844444444', '2022-05-24 00:00:00', 'no', NULL, '2022-05-28 04:29:05', '2022-05-28 04:29:05'),
(7, 'Tim', 'Timothee', 'Chalamet', 'chalmal@gmail.com', NULL, 'eyJpdiI6ImhsSUxHS05vbjN3QlJEcHV5djg2VVE9PSIsInZhbHVlIjoiV0xicXkwaUJGS3cxN1plLzZGbmVSQT09IiwibWFjIjoiODFmMGQyNzUwMTUxYWEzN2QxNzliOWNmOWJiZTc1NTcyZDJhN2M5N2UxOGE4OTc0YWRmZjE4YzNjN2FlMWQ4MiIsInRhZyI6IiJ9', 'California', '9811223344', '2022-05-04 00:00:00', 'no', NULL, '2022-05-29 03:26:39', '2022-05-29 03:26:39'),
(8, 'MoonKnight', 'Moon', 'Knight', 'moony@gmail.com', NULL, '$2y$10$5A6eN2XVqJrPySkfHMBMIegusCA5EAd68JO4U7yv217Skw.OwMsMC', 'Pokhara', '9811223344', '2022-06-21 00:00:00', 'no', NULL, '2022-06-02 02:33:31', '2022-06-02 02:33:31'),
(9, 'HStyle', 'Harry', 'Styles', 'sty@gmail.com', NULL, '$2y$10$VlxW2.jwN8vctSb5BDoPWOHgI/n2Taz2/jgAk0sJ1TynUJl146bE6', 'Thamel', '9811223344', '2022-06-14 00:00:00', 'no', NULL, '2022-06-03 00:45:25', '2022-06-03 00:45:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_category_id_foreign` (`category_id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_location_id_foreign` (`location_id`);

--
-- Indexes for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrow_records_book_id_foreign` (`book_id`),
  ADD KEY `borrow_records_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `borrow_records`
--
ALTER TABLE `borrow_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publications` (`id`);

--
-- Constraints for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD CONSTRAINT `borrow_records_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `borrow_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
