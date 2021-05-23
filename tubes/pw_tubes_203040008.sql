-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 06.14
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
  `stok` varchar(100) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `harga`, `gambar`, `categori`, `stok`, `deskripsi`) VALUES
(1, 'Jodoh Untuk Naina', 'Nima Mumtaz', 'Rp. 63.000,-', 'nima.jpg', 'Romance', 'Terbatas', 'Namanya Naina Humairah seorang wanita baru berusia 22 tahun. Belum lama lulus dari bangku kuliahnya, sudah mnjadi salah satu saf pengajar di sebuah taman kanak-kanak. Merupakan anak bungsu dari keluarganya. Sekarang hanya tinggal bersama abahnya, karena sang Ibu telah meninggal dunia. Kakak Muthia telah menikah dan telah memiliki anak-anak. Untuk kakak kedua bernama Salman sudah menikah. Naina mendengar kabar bahwa ada yang ingin melamar dirinya dari abahnya. Karena Naina sangat menyayangi sang abah, maka Naina menerima lamaran yang didengar oleh abah nya tersebut.\r\n\r\n\r\n'),
(2, 'The Chronicle Of A 35-Year-Old Woman', 'Kircirmainan', 'Rp. 91.000,-', 'kincir.jpg', 'Romance', 'Terbatas', 'Kikan, 35 tahun, seorang wanita karir yang molek dengan karakter work hard, play hard. Kikan masih melajang karena jera dengan hubungan asmaranya yang sudah-sudah, dan Andre \"Si Blasteran Siluman Anjing Pemburu\" adalah penyebabnya.\r\nBertahun-tahun Kikan tidak kunjung menemukan lelaki yang bisa mendapatkannya. Sampai tiba-tiba juniornya di kantor nekat melamar. Dialah Pras, lelaki introver yang usianya delapan tahun lebih muda darinya. Tapi, bersama dengan Pras belum meyakinkannya seratus persen. Ditambah urusan dengan mantannya yang belum tuntas.'),
(3, 'Memori Janji Es Krim', 'Nimas Aksan', 'Rp. 89.000,-', 'nimas.jpg', 'Romance', 'Banyak', '9 kali dipecat dari pekerjaan. 9 kali diputuskan pacar. Mia tidak ingin ada yang kesepuluh. Maka, dia mencari penyebab dari segala hal buruk yang menimpa hidupnya. Sampai kemudian, Dudi, sahabatnya, menyebut kalau sumber dari kesialannya berawal dari sebuah nazar. Saat SMA, Mia pernah berjanji mentraktir Dudi dan Karin semangkuk es krim Cinderellas Shoes. Untuk bisa menepati janji tersebut, Mia harus bertemu Karin, sahabatnya yang kaya raya, sombong, dan egois. Takdirentah baik atau burukjuga telah mempertemukan dia kembali dengan Gardi, seorang pria sejuta pesona yang ternyata calon suami sahabatnya. Ada begitu banyak drama yang harus dihadapi Mia untuk bisa menunaikan nazarnya. Berhasilkah Mia memutus tali kesepuluh kesialan dalam hidupnya?'),
(4, 'In A Blue Moon', 'Ilana Tan', 'Rp. 79.000,-', 'ilana.jpg', 'Romance', 'Terbatas', 'Sophie Wilson gadis cantik pandai membuat kue yang mempunyai masa lalu buruk dengan Lucas Ford. Tapi sialnya, kakek mereka yang kenal dekat bersepakat untuk menjodohkan mereka. Lucas Ford pertama kali bertemu dengan Sophie Wilson di bulan Desember pada tahun terakhir SMA-nya. Gadis itu membencinya, Lucas kembali bertemu dengan Sophie di bulan Desember sepuluh tahun kemudian di kota New York, Sophie masih membencinya.\r\n\r\nMasalah utamanya bukan itu, melainkan kenyataan bahwa gadis yang membencinya, kini ditetapkan sebagai tunangan Lucas oleh kakeknya yang suka ikut campur. Sophie tidak menerima keputusan kakeknya itu. Ia yang sangat membenci Lucas merasa hidupnya begitu hancur saat mendengar berita itu. Sampai mati pun, ia tidak mau dijodohkan dengan Lucas. Tapi sebaliknya, Lucas justru terlihat berminat, ia melakukan segala cara untuk bisa berdekatan dengan Sophie. Ia sama sekali tak merespon Miranda, yang mengejar-ngejar dirinya. Lucas mendekati Sophie bukan karena perintah kakeknya. Ia mendekati Sophie karena ingin mengubah pendapat Sophie tentang dirinya. Juga karena ia ingin Sophie menyukainya sebesar ia menyukai gadis itu. Dan, kadang-kadang hal tersebut sangat jarang terjadi, tentu saja kakeknya bisa mengambil keputusan yang sangat tepat.'),
(5, 'Stay With Me Tonight', 'Sofi Meloni', 'Rp. 82.000,-', 'sofi.jpg', 'Romance', 'Banyak', 'Novel ini menceritakan tentang Ayu yang seorang mahasiswi yang tidak segera menyelesaikan kuliah karena kondisi ekonomi keluarganya yang buruk. Pada akhirnya Ayu pun kerja part time. Ayu tinggal bersama ibu angkatnya yang akhir-akhir ini sakit sakitan. Hidupa Ayu dan Ibu angkatnya awanya bahagia sebelum ibu angkatnya menikah dengan sorang priayang suka berjudi dan serig menyiksa dan memaki ibu angkatnya tersebut. Sebenarnya  Ayu mengetahui bahwa ayah angkatnya itu memilikikepribadian yang buruk dan telah menjelaskannya pada ibu angkatnya tetang hal tersebut. ibu nya pun tidak akan meninggalkan suaminya tersebut karena telah terhalang oleh cinta.\r\n\r\nAyah angkat Ayu pun tega menjual Ayu kepada seorang lelaki. Lelaki tersebut memiliki wajahnya tampan dan juga memiliki cukup banyak uang. Ayu pun sering tidak pulang ke rumah setelah kerja part time berakhir. Ayu pergi ke apartemen di kawasan elite. Ternyata Ayu pergi ketempat apartemen laki-laki yag membeli dirinya dari ayah angkatnya tersebut. Nama laki-laki tersebut adalah Benny. Ayu pergi ke apartemen tersebut untuk memuaskan nafsu  orang yang telah membeli dirinya tersebut lalu mengambil uang yang di berikan dan kembali ke rumah ibu angkatnya seolah tidak terjadi apapun. Ayu mulai terbiasa dengan rutinitas pergi ke apartemen 1109 sekitar pukul 10 malam. Ayu memiliki kartu akses ke apartemen tersebut.\r\n\r\nAyu awalya tidak mengenal pria yang telah membelinya tersebut, mulai dari nama umur hingga pekerjaannya. Hingga Ayu mengetahui nama Benny tersebut dari benny sendiri. Tanpa diduga orang dari masa lalunya muncul kembali yaitu Ditto. Teman SMA  Ayu yang pernah memiliki rasa pada Ayu. Ditto pun ingin kembali kepada Ayu, tetapi Ayu tidak ingin kan.'),
(6, 'Ten Years Challenge', 'Mutiarini', 'Rp. 54.000,-', 'mutiarini.jpg', 'Romance', 'Banyak', 'Berkisah tentang Atya yang berumur 27 tahun. Ia diputuskan sepihak oleh Diga, pacarnya sejak SMA, dan Atya merasa hidupnya hancur. Reuni SMA yang diharapkannya bisa sedikit menghibur, malah berakhir d'),
(7, 'Bukan Cinderella', 'Deti Azmi', 'Rp. 70.000,-', 'dheti.jpg', 'Romance', 'Terbatas', 'Ini bukan kisah Cinderella yang kehilangan sepatu kaca, ketika sang pangeran menjemput sang putri dan memberikan sebelah sepatu yang tertinggal di pesta dansa. Namun, ini kisah Amora, yang kehilangan '),
(8, 'Resign!', 'Almira Bastari', 'Rp. 57.000,-', 'almira.jpg', 'Romance', 'Banyak', 'Buku ini menjadi karya romance yang paling banyak dibaca di Gramedia Digital. Kisah romansa seorang cungpret (kacung kampret) bernama Alranita dan bosnya bernama Tigran yang penuh gelagak.\r\n\r\nAlranita'),
(9, 'Not A Perfect Wedding', 'Asri Tahir', 'Rp. 150.000,-', 'asri.jpg', 'Romance', 'Terbatas', 'Raina Winatama harus menghadapi kenyataan bahwa ia kehilangan mempelai suaminya di hari pernikahannya. Sang suami bernama Prakarsa Dwi Rahardi harus pergi untuk selamanya.\r\n\r\nApakah pernikahan Raina t'),
(10, 'Daun Yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye', 'Rp. 137.000,-', 'terel.jpg', 'Romance', 'Banyak', 'Dia bagai malaikat bagi keluarga kami. Merengkuh aku, adikku, dan Ibu dari kehidupan jalanan yang miskin dan nestapa. Memberikan makan, tempat berteduh, sekolah, dan janji masa depan yang lebih baik. '),
(25, 'After Tunangan', 'Agnes Jessica', 'Rp. 59.000,-', 'agnes.jpg', 'Romance', 'Terbatas', 'Tere dan Opan mungkin bertunangan, tetapi tidak berarti hubungan mereka mulus-mulus saja. Seiring berjalannya waktu, Tere merasa mereka terlalu bertolak belakang. Semuanya semakin runyam setelah kedat'),
(27, 'Dialog Rindu', 'Rifani Aprilia', 'Rp. 79.000,-', 'rifani.jpg', 'Romance', 'Banyak', '“… aku sudah pergi dalam ribuan hari, melewati jalanan panjang untuk berbaur dengan ramainya dunia. Gemerlap malam berteman hiruk dalam empat musim yang aku lalui masih saja membenamku dalam dinginnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'fikri', '$2y$10$bsf6sx84uncqMvzVB/wxhuNm9/fVkPoU8Pbd7KRcbSlO9AB2dZ9Pu'),
(4, 'admin', '$2y$10$RRZYF6fErPaYIjVroHh5ouFZEjBFsbqnnz71gxt7reZ17Orb1B2tK'),
(8, 'ismail', '$2y$10$pA6HmPIdFYqD6q5MW42b3eXcVoWz26D8d5oWKyoIAgCKgh4nnlmDG'),
(9, 'ismailfikri', '$2y$10$R1I2.3PiTvQujesf5RUxsulhSt5wWY2VtpzG8CqGJkO.c0yNTuUe2'),
(10, 'mamah', '$2y$10$tvdt.GrjXCi6eUqHlrBAeOa8OsUUOh0ma29.6Ba5GqQ6n51Qsy.pK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
