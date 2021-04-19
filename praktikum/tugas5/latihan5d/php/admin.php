<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
    <style>
    section {
        min-height: 420px;
    }

    h1 {
        text-align: center;
    }

    span {
        font-family: arial;
        border: 1px solid black;
        padding: 5px;
        background-color: blue;
        font-weight: bold;
    }

    .add {
        border: 1px solid rgb(204, 204, 204);
        padding: 10px;
        width: 180px;
        text-align: justify;
        overflow: auto;
        background-color: #cfe2f3;
        margin-bottom: 15px;
    }
    </style>

    <title>My Shop</title>
</head>
<body>
        
    <h1>Online Shop Happy</h1>

    <div class="container">
        <div class="add">
            <a href="tambah.php">Tambah Data</a>
        </div>
    </div>

    <div class="container">
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>No</th>
                <th>#</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Categori</th>
                <th>Stok</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($buku as $bk) : ?>
            <tr>
                <td class="table-primary"><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $bk['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $bk ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td class="table-primary"><img src="../assets/img/<?= $bk['gambar']; ?>"></td>
                <td class="table"><?= $bk['judul']; ?></td>
                <td class="table-primary"><?= $bk['penulis']; ?></td>
                <td class="table"><?= $bk['harga']; ?></td>
                <td class="table-primary"><?= $bk['categori']; ?></td>
                <td class="table"><?= $bk['stok']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
