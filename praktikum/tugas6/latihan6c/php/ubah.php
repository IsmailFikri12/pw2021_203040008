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
    </style>

    <title>My Shop</title>
</head>
<body>
    <div class="container">

        <h3>Form Ubah Data Buku</h3>

        <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
            <ul>
                <li>
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" require value="<?= $buku['gambar']; ?>">><br><br>
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
                <br>
                <button type="submit" name="ubah">Ubah Data !</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>

</body>
</html>