-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2021 pada 10.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040008`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `produser` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `total_episode` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `studio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `judul`, `produser`, `status`, `total_episode`, `genre`, `gambar`, `studio`) VALUES
(1, 'Go-Toubun no Hanayome', 'DAX Production, Nichion', 'On Going', '12 Episode', 'Comedy, Romance, School, Shounen', 'go.jpg', 'Bibury Animation Studios'),
(2, 'Jujutsu Kaisen', 'TOHO animation, Shueisha, dugout', 'On Going', '24 Episode', 'Action, Demons, Horror, School', 'ju.jpeg', 'MAPPA'),
(3, 'Tonikaku Kawaii', 'Shogakukan-Shueisha Productions', 'Completed', '12 Episode', 'Comedy, Romance, Shounen', 'to.jpg', 'Seven Arcs'),
(4, 'Shingeki no Kyoujin Season 4', 'Pony Canyon, Techno Sound', 'On Going', '12 Episode', 'Action, Drama, Fantasy, Millitary', 'shi.jpg', 'MAPPA'),
(14, 'Horimiya', 'Aniplex', 'On Going', '12 Episode', 'Comedy, Romance, School, Shounen', 'hori.jpg', 'CloverWorks'),
(15, 'Yakusoku no Neverland Season 2', 'Aniplex, Shueisha', 'On Going', '12 Episode', 'Mystery, Psychological, Sci-Fi, Shounen', 'ya.jpg', 'CloverWorks'),
(16, 'Dr. Stone Season 2', 'Shueisha', 'On Going', '-', 'Adventure, Sci-Fi, Shounen', 'sto.jpg', 'TMS Entertainment'),
(17, 'Mushoku Tensei: Isekai Ittara Honki Dasu', 'Egg Firm', 'On Going', '-', 'Drama, Fantasy, Magic', 'mus.jpg', 'Winter 2021'),
(18, 'Black Clover', 'TV Tokyo, Avex Pictures, Shueisha', 'On Going', '-', 'Action, Comedy, Fantasy, Magic, Shounen', 'bla.jpg', 'Studio Pierrot'),
(19, 'Re:Zero Kara Hajimeru Isekai Seikatsu Season 2', 'AT-X, Memory-Tech', 'Completed', '25 Episode', 'Drama, Fantasy, Psychological, Thriller', 're.jpg', 'White Fox'),
(20, 'Osananajimi ga Zettai ni Makenai Love Comedy', 'Delfi Sound, Kadokawa', 'On Going', '12 Episode', 'Comedy, Harem, Romance, School,', 'osa.jpg', 'Doga Kobo'),
(21, 'Wonder Egg Priority', 'Aniplex, D.N. Dream Partners', 'Completed', '12 Episode', 'Drama, Fantasy, Psychological', 'won.jpg', 'CloverWorks');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
