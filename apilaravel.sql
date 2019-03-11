-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Mar 11, 2019 alle 20:27
-- Versione del server: 10.1.37-MariaDB-0+deb9u1
-- Versione PHP: 7.3.3-1+0~20190307202245.32+stretch~1.gbp32ebb2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apilaravel`
--
CREATE DATABASE IF NOT EXISTS `apilaravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `apilaravel`;

-- --------------------------------------------------------

--
-- Struttura della tabella `categories`
--
-- Creazione: Mar 11, 2019 alle 19:10
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Libri',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Libri',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '', 'Libri', 'Libri', NULL, NULL),
(2, '', 'Abbigliamento', 'Abbigliamento', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--
-- Creazione: Mar 11, 2019 alle 19:10
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_02_142246_create_posts_table', 1),
(2, '2019_03_04_150011_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--
-- Creazione: Mar 11, 2019 alle 19:10
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `title`, `cover`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Conversazione su Tiresia', '9159907_3731487.jpg', '«Chiamatemi Tiresia. Per dirla alla maniera dello scrittore Melville, quello di Moby Dick. Oppure Tiresia sono, per dirla alla maniera di qualcun altro…». Questo l’inizio folgorante della Conversazione su Tiresia, un racconto articolato che ricostruisce la storia del celebre indovino attraverso i secoli, con 63 versioni del mito declinato in età antica e moderna da scrittori, poeti, filosofi, drammaturghi. E discorrendo dell’indovino cieco Camilleri si abbandona al racconto, narra di miti e di dèi, di libri e scrittori, di uomini e donne, di teatro e personaggi, di sé e dell’oggi, di cecità e preveggenza, e lo fa nel modo mirabile che i lettori gli conoscono. Il destino di un protagonista letterario si snoda dalla tragedia greca - ben quattro raccontano la storia di Tiresia - a Omero, Dante, Eliot, Apollinaire, Primo Levi e tanti altri; persino Woody Allen lo fa apparire in un suo film.', 'Libri', '2019-03-11 18:11:15', '2019-03-11 18:11:15'),
(2, 'Il decamerone la novella che non fu mai scritta', '9024257_3569678.jpg', 'Una novella di Giovanni Boccaccio idealmente dedicata a Giovanni Bovara, studioso del \"Decamerone\", che poco prima di morire (1916) a causa delle ferite riportate durante la Prima guerra mondiale, scoprì fortunosamente uno scritto sconosciuto del Boccaccio. Questa novella fu poi nuovamente dimenticata per essere poi pubblicata, per la prima volta. È altamente probabile che la novella fosse stata portata al Nord dallo stesso Boccaccio per donarla a qualcuno quando, nel 1351, fu inviato in Tirolo come \"ambaxiator solemnis\" di Firenze.', 'Libri', '2019-03-11 18:23:14', '2019-03-11 18:23:14'),
(3, 'Nike Air Max Zero Essential', 'download.png', 'Dettagli prodotto per Nike Air Max Zero Essential - Uomo Scarpe\r\nColore: White-Cool Grey-Pure Platinum\r\nColore: White-Cool Grey-Pure Platinum\r\nMateriale: Rete/Sintetico\r\nCodice prodotto: 314211413704', 'Abbigliamento', '2019-03-11 18:25:34', '2019-03-11 18:25:34');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
