<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?> 


<?php

require 'functions.php';
$an = query("SELECT * FROM anime");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Anime</title>
</head>

<body>

    <h1>Anime Jepang</h1>
    <a href="tambah.php">Tambah Data Anime</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>

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


</body>

</html>