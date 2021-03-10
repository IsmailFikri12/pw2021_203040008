<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 6 - 9 Maret 2021
mempelajari mengenai sintaks PHP 
ASSOCIATIVE Array
*/
?> 

<?php
// $mahasiswa = [
//     ["Ismail Fikri", "203040008", "203040008@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Ismail", "203040000", "203040000@mail.unpas.ac.id", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$anime = [
    [
        "judul" => "Go-Toubun no Hanayome", 
        "produser" => "DAX Production, Nichion",
        "status" => "On Going",
        "total episode" => "12 Episode",
        "genre" => "Comedy, Romance, School, Shounen",
        "gambar" => "go.jpg",
        "studio" => "Bibury Animation Studios"
    ],
    [
        "judul" => "Jujutsu Kaisen",
        "produser" => "TOHO animation, Shueisha, dugout",
        "status" => "On Going",
        "total episode" => "24 Episode",
        "genre" => "Action, Demons, Horror, School",
        "gambar" => "ju.jpeg",
        "studio" => "MAPPA"
    ],
    [
        "judul" => "Tonikaku Kawaii",
        "produser" => "Shogakukan-Shueisha Productions, ",
        "status" => "Completed",
        "total episode" => "12 Episode",
        "genre" => "Comedy, Romance, Shounen",
        "gambar" => "to.jpg",
        "studio" => "Seven Arcs"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anime</title>
</head>
<body>
    
    <h1>Daftar Anime</h1>

    <?php foreach( $anime as $an ) : ?>
    <ul>
        <li>
            <img src="img/<?= $an["gambar"]; ?>">
        </li>
        <li>Judul : <?php echo $an["judul"]; ?></li>
        <li>Produser : <?php echo $an["produser"]; ?></li>
        <li>Status : <?php echo $an["status"]; ?></li>
        <li>Total Episode : <?php echo $an["total episode"]; ?></li>
        <li>Studio : <?php echo $an["studio"]; ?></li>
        <li>Genre : <?php echo $an["genre"]; ?></li>
    </ul>
    <?php endforeach; ?>


</body>
</html>
