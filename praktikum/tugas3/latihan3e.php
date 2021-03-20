<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
$action = [
    [
        "judul" => "Konspirasi Alam Semesta",
        "penulis" => "Fiersa Besari",
        "harga" => "Rp. 63.000,-",
        "gambar" => "fiersa.jpg",
        "categori" => "Romance" ,
        "stok" => "Terbatas"
    ],
    [
        "judul" => "Tidak Ada New York Hari",
        "penulis" => "Aan Mansyur",
        "harga" => "Rp. 91.000,-",
        "gambar" => "aan.jpg",
        "categori" => "Romance",
        "stok" => "Terbatas"
    ],
    [
        "judul" => "Angan Senja Senyum Pagi",
        "penulis" => "Fahd Pahdephie",
        "harga" => "Rp. 89.000,-",
        "gambar" => "fahd.jpg",
        "categori" => "Romance",
        "stok" => "Banyak"
    ],
    [
        "judul" => "Critical Eleven",
        "penulis" => "Ika Natassa",
        "harga" => "Rp. 79.000,-",
        "gambar" => "ikka.jpg",
        "categori" => "Romance",
        "stok" => "Terbatas"
    ],
    [
        "judul" => "Bad Romance",
        "penulis" => "Equita Millianda",
        "harga" => "Rp. 82.000,-",
        "gambar" => "equita.jpg",
        "categori" => "Romance",
        "stok" => "Banyak"
    ],
    [
        "judul" => "Sebuah Usaha Melupakan",
        "penulis" => "Boy Chandra",
        "harga" => "Rp. 54.000,-",
        "gambar" => "boy.jpg",
        "categori" => "Romance",
        "stok" => "Banyak"
    ],
    [
        "judul" => "Rindu",
        "penulis" => "Tere Liye",
        "harga" => "Rp. 70.000,-",
        "gambar" => "tere.jpg",
        "categori" => "Romance",
        "stok" => "Terbatas"
    ],
    [
        "judul" => "Frined Zone",
        "penulis" => "Vanesa Marcella",
        "harga" => "Rp. 57.000,-",
        "gambar" => "friend.jpg",
        "categori" => "Romance",
        "stok" => "Banyak"
    ],
    [
        "judul" => "The Book of Forbidden Feelings",
        "penulis" => "Lala Bohang",
        "harga" => "Rp. 150.000,-",
        "gambar" => "lala.jpg",
        "categori" => "Romance",
        "stok" => "Terbatas"
    ],
    [
        "judul" => "Untuk Matamu",
        "penulis" => "Kharisma Pangeran Lanang",
        "harga" => "Rp. 137.000,-",
        "gambar" => "khris.jpg",
        "categori" => "Romance",
        "stok" => "Banyak"
    ],
   
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        section {
            min-height: 420px;
        }
        h1 {
            text-align: center;
        }
        span {
            ont-family: arial;
            border: 1px solid black;
            padding: 5px;
            background-color: blue;
            font-weight: bold;
        }
    </style>

    <title>My Shop</title>
</head>
<body>
        
    <h1>Online Shop Happy</h1>
    <div class="table-responsive">
        <table class="table">
            <tr class="table-primary">
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Type</th>
                <th>Stok</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ( $action as $ac ) : ?>
                <tr>
                    <td class="table-succes"><?= $i; ?></td>
                    <td><img src="img/<?= $ac["gambar"]; ?>" alt=""></td>
                    <td class="table-primary"><?= $ac["judul"]; ?></td>
                    <td><?= $ac["penulis"]; ?></td>
                    <td class="table-primary"><?= $ac["harga"]; ?></td>
                    <td id="type"><span><?= $ac["categori"]; ?></span></td>
                    <td class="table-primary"><?= $ac["stok"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>