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

require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ubah.css">

    <title>My Shop</title>
</head>
<body>
    <div class="container">

        <h3>Form Ubah Data Buku</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
            <ul>
                <li>
                    <input type="hidden" name="gambar_lama" value="<?= $a["gambar"]; ?>">
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
                    <img src="img/<?= $buku["gambar"]; ?>" width="120" style="display: block;" class="img-preview" alt="">
                </li>
                <li>
                    <label for="judul">Judul :</label><br>
                    <input type="text" name="judul" id="judul" require value="<?= $buku['judul']; ?>">><br><br>
                </li>
                <li>
                    <label for="penulis">Penulis :</label><br>
                    <input type="text" name="penulis" id="penulis" require value="<?= $buku['penulis']; ?>">><br><br>
                </li>
                <li>
                    <label for="harga">Harga :</label><br>
                    <input type="text" name="harga" id="harga" require value="<?= $buku['harga']; ?>">><br><br>
                </li>
                <li>
                    <label for="categori">Categori :</label><br>
                    <input type="text" name="categori" id="categori" require value="<?= $buku['categori']; ?>">><br><br>
                </li>
                <li>
                    <label for="stok">Stok :</label><br>
                    <input type="text" name="stok" id="stok" require value="<?= $buku['stok']; ?>">><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi :</label><br>
                    <input type="text" name="deskripsi" id="deskripsi" require value="<?= $buku['deskripsi']; ?>">><br><br>
                </li>
                <br>
                <button type="submit" name="ubah">Ubah Data !</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>



    
<script src="../js/script.js"></script>
</body>
</html>