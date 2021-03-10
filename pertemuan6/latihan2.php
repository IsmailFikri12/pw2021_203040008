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
    ],
    [
        "judul" => "Shingeki no Kyoujin Season 4", 
        "produser" => "Pony Canyon, Techno Sound",
        "status" => "On Going",
        "total episode" => "Unknown",
        "genre" => "Action, Drama, Fantasy, Millitary",
        "gambar" => "shi.jpg",
        "studio" => "MAPPA"
    ],
    [
        "judul" => "Yakusoku no Neverland Season 2", 
        "produser" => "Aniplex, Shueisha",
        "status" => "On Going",
        "total episode" => "Unknown",
        "genre" => "Mystery, Psychological, Sci-Fi, Shounen",
        "gambar" => "ya.jpg",
        "studio" => "CloverWorks"
    ],
    [
        "judul" => "Dr. Stone Season 2", 
        "produser" => "Shueisha",
        "status" => "On Going",
        "total episode" => "Unknown",
        "genre" => "Adventure, Sci-Fi, Shounen",
        "gambar" => "sto.jpg",
        "studio" => "TMS Entertainment"
    ],
    [
        "judul" => "Horimiya", 
        "produser" => "Aniplex",
        "status" => "On Going",
        "total episode" => "12 Episode",
        "genre" => "Comedy, Romance, School, Shounen",
        "gambar" => "hori.jpg",
        "studio" => "CloverWorks"
    ],
    [
        "judul" => "Mushoku Tensei: Isekai Ittara Honki Dasu", 
        "produser" => "Egg Firm",
        "status" => "On Going",
        "total episode" => "Unknown",
        "genre" => "Drama, Fantasy, Magic",
        "gambar" => "mus.jpg",
        "studio" => "Winter 2021"
    ],
    [
        "judul" => "Black Clover", 
        "produser" => "TV Tokyo, Avex Pictures, Shueisha",
        "status" => "On Going",
        "total episode" => "-",
        "genre" => "Action, Comedy, Fantasy, Magic, Shounen",
        "gambar" => "bla.jpg",
        "studio" => "Studio Pierrot"
    ],
    [
        "judul" => "Re:Zero Kara Hajimeru Isekai Seikatsu Season 2", 
        "produser" => "AT-X, Memory-Tech",
        "status" => "On Going",
        "total episode" => "-",
        "genre" => "Drama, Fantasy, Psychological, Thriller",
        "gambar" => "re.jpg",
        "studio" => "White Fox"
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
