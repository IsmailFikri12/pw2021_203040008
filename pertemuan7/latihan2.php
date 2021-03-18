<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 7 - 18 Maret 2021
mempelajari mengenai sintaks PHP 
GET and POST
*/
?> 

<?php
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["judul"]) || 
        !isset($_GET["produser"]) || 
        !isset($_GET["status"]) || 
        !isset($_GET["total-episode"]) || 
        !isset($_GET["genre"]) || 
        !isset($_GET["gambar"]) ||
        !isset($_GET["studio"]) ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anime</title>
</head>
<body>
    
        <ul>
            <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
            <li><?= $_GET["judul"]; ?></li>
            <li><?= $_GET["produser"]; ?></li>
            <li><?= $_GET["status"]; ?></li>
            <li><?= $_GET["total-episode"]; ?></li>
            <li><?= $_GET["genre"]; ?></li>
            <li><?= $_GET["studio"]; ?></li>
        </ul>

        <a href="latihan1.php">Kembali ke Daftar Anime</a>
</body>
</html>