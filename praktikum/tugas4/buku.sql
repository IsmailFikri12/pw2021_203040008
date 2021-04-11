-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2021 pada 01.13
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
-- Database: `pw_tubes_203040008`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `categori` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `harga`, `gambar`, `categori`, `stok`) VALUES
(1, 'Konspirasi Alam Semesta', 'Fiersa Besari', 'Rp. 63.000,-', 'fiersa.jpg', 'Romance', 'Terbatas'),
(2, 'Tidak Ada New York Hari Ini', 'Aan Mansyur', 'Rp. 91.000,-', 'aan.jpg', 'Romance', 'Terbatas'),
(3, 'Angan Senja Senyum Pagi', 'Fahd Pahdephie', 'Rp. 89.000,-', 'fahd.jpg', 'Romance', 'Banyak'),
(4, 'Critical Eleven', 'Ika Natassa', 'Rp. 79.000,-', 'ikka.jpg', 'Romance', 'Terbatas'),
(5, 'Bad Romance', 'Equita Millianda', 'Rp. 82.000,-', 'equita.jpg', 'Romance', 'Banyak'),
(6, 'Sebuah Usaha Melupakan', 'Boy Chandra', 'Rp. 54.000,-', 'boy.jpg', 'Romance', 'Banyak'),
(7, 'Rindu', 'Tere Liye', 'Rp. 70.000,-', 'tere.jpg', 'Romance', 'Terbatas'),
(8, 'Frined Zone', 'Vanesa Marcella', 'Rp. 57.000,-', 'friend.jpg', 'Romance', 'Banyak'),
(9, 'The Book of Forbidden Feelings', 'Lala Bohang', 'Rp. 150.000,-', 'lala.jpg', 'Romance', 'Terbatas'),
(10, 'Untuk Matamu', 'Kharisma Pangeran Lanang', 'Rp. 137.000,-', 'khris.jpg', 'Romance', 'Banyak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
