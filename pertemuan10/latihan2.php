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

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Produser</th>
            <th>Status</th>
            <th>Total Episode</th>
            <th>Studio</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($an as $a) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $a["gambar"]; ?>"></td>
                <td><?= $a["judul"]; ?></td>
                <td><?= $a["produser"]; ?></td>
                <td><?= $a["status"]; ?></td>
                <td><?= $a["total_episode"]; ?></td>
                <td><?= $a["studio"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>>


</body>

</html>