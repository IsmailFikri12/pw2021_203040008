<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/detail.css">

    <title>My Shop</title>
</head>
<body>
        
    <h1>Online Shop Happy</h1>
    
    <div class="container">
       <div class="gambar">
            <img src="../assets/img/<?= $buku["gambar"]; ?>" alt="">
       </div>
       <div class="keterangan">
           <p class="table-primary"><?= $buku["judul"]; ?></p>
           <p class="table-primary"><?= $buku["penulis"]; ?></p>
           <p class="table-primary"><?= $buku["harga"]; ?></p>
           <p class="table-primary"><?= $buku["categori"]; ?></p>
           <p class="table-primary"><?= $buku["stok"]; ?></p>
       </div>

       <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>