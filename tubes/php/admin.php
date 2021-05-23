<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require '../php/functions.php';

$buku = query("SELECT * FROM buku");

// if (isset($_GET['cari'])) {
//     $keyword = $_GET['keyword'];
//     $buku = query("SELECT * FROM buku WHERE
//             judul LIKE '%$keyword%' OR
//             penulis LIKE '%$keyword%' OR
//             harga LIKE '%$keyword%' OR
//             categori LIKE '%$keyword%' OR
//             stok LIKE '%$keyword%' ");
// } else {
//     $buku = query("SELECT * FROM buku");
// }
?>


<!--       
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
                <th>Deskripsi</th>
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
                <td class="table"><?= $bk['deskripsi']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>

    </div>   
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    

<input type="checkbox" name="" id="check">
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Dash<span>board</span></h3>
    </div>
    <div class="right-area">
        <a href="./logout.php" class="logout_btn">Logout</a>
    </div>
</header>

<div class="sidebar">
    <center>
        <img src="../assets/me/log.jpg" class="profile_image" alt="">
        <h1>Ismail</h1>
    </center>
    <a href="./admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="./tambah.php"><i class="fas fa-cogs"></i><span>Tambah Data</span></a>
    <a href="https://ismailfikri12.github.io/ITW_T3_203040008/"><i class="fas fa-info-circle"></i><span>About</span></a>
</div>


    
<div class="content">
    <br><br><br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword Perncarian....." autocomplete="off" autofocus class="keyword"> 
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>

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
                <th>Deskripsi</th>
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
                <td><img src="../assets/img/<?= $bk['gambar']; ?>"></td>
                <td><?= $bk['judul']; ?></td>
                <td><?= $bk['penulis']; ?></td>
                <td><?= $bk['harga']; ?></td>
                <td><?= $bk['categori']; ?></td>
                <td><?= $bk['stok']; ?></td>
                <td><?= $bk['deskripsi']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

</div>

<script src="../js/script.js"></script>
</body>
</html>