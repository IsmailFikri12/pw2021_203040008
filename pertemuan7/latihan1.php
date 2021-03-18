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
// variabel Scope / Lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();
// ?>

<?php
// SUPERGLOBALS
// variabel global milik PHP
// merupakan array Associative
// echo $_SERVER["SERVER_NAME"];
?>

<?php
// $_GET
$anime = [
    [
        "judul" => "Go-Toubun no Hanayome", 
        "produser" => "DAX Production, Nichion",
        "status" => "On Going",
        "total-episode" => "12 Episode",
        "genre" => "Comedy, Romance, School, Shounen",
        "gambar" => "go.jpg",
        "studio" => "Bibury Animation Studios"
    ],
    [
        "judul" => "Jujutsu Kaisen",
        "produser" => "TOHO animation, Shueisha, dugout",
        "status" => "On Going",
        "total-episode" => "24 Episode",
        "genre" => "Action, Demons, Horror, School",
        "gambar" => "ju.jpeg",
        "studio" => "MAPPA"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Anime</h1>

    <ul>
    <?php foreach( $anime as $an ) : ?>
        <li>
            <a href="latihan2.php?judul=<?= $an["judul"]; ?>
            &produser=<?= $an["produser"]; ?>
            &status=<?= $an["status"]; ?>
            &total-episode=<?= $an["total-episode"]; ?>
            &genre=<?= $an["genre"]; ?>
            &gambar=<?= $an["gambar"]; ?>
            &studio=<?= $an["studio"]; ?>"><?= $an["judul"]; ?> </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>