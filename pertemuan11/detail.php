<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 11 - 01 Mei 2021
Detail.php 
*/
?> 


<?php

require 'functions.php';

$id = $_GET['id'];
$a = query("SELECT * FROM anime WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
</head>

<body>
    <h1>Daftar Anime Jepang</h1>
    <ul>
        <li><img src="img/<?= $a["gambar"]; ?>"></li>
        <li><?= $a["judul"]; ?></li>
        <li><?= $a["produser"]; ?></li>
        <li><?= $a["status"]; ?></li>
        <li><?= $a["total_episode"]; ?></li>
        <li><?= $a["genre"]; ?></li>
        <li><?= $a["studio"]; ?></li>
        <li><a href="ubah.php?id=<?= $a['id']; ?>">ubah</a> || <a href="hapus.php?id=<?= $a['id']; ?>" onclick="return confirm 
        ('Apakah Anda Yakin?');">hapus</a>
        <li><a href="index.php">Kembali ke Daftar Anime</a></li>
        </li>
    </ul>
</body>

</html>