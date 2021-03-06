<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 13 - 01 Mei 2021
Koneksi DB & Insert Data
Live Searching AJAX dan Upload Gambar
Index.php
*/
?> 


<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$an = query("SELECT * FROM anime");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $an = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Anime</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <br>
    <h1>Anime Jepang</h1>

    <a href="tambah.php">Tambah Data Anime</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword Perncarian....." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <br>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>

            <?php if(empty($an)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color: red; font-style:italic;">Data Anime Tidak Ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?> 

            <?php $i = 1 ?>
            <?php foreach ($an as $a) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="img/<?= $a["gambar"]; ?>"></td>
                    <td><?= $a["judul"]; ?></td>
                    <td><a href="detail.php?id=<?= $a['id'] ?>">Lihat Detail</span></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>

    <script src="js/script.js"></script>
</body>

</html>