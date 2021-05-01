<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $buku = query("SELECT * FROM buku WHERE
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            categori LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' ");
} else {
    $buku = query("SELECT * FROM buku");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">

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
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <form action="" method="get">
            <input class="search" type="text" name="keyword" autofocus>
            <button class="button" type="submit" name="cari">Cari!</button>
        </form>
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

            <?php if (empty($buku)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Buku Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
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
            <?php endif; ?>
        </table>

    </div>
</body>
</html>
