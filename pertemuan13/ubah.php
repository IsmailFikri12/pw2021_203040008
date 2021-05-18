<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 13 - 01 Mei 2021
Ubah.php 
*/
?> 


<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
    header ("Location: index.php");
    exit;
}

// Mengambil id dari url
$id = $_GET['id'];

// Query Anime berdasarkan id
$a = query("SELECT * FROM anime WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'index.php';
          </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Anime</title>
</head>
<body>
    
<h3>Form Ubah Data Anime</h3>
<form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $a['id']; ?>">
  <div class="container">
    <ul>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $a["gambar"]; ?>">
        <label for="gambar">Gambar </label><br>
        <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
        <img src="img/<?= $f["gambar"]; ?>" width="120" style="display: block;" class="img-preview" alt="">
      </li>
      <li>
        <label for="judul">Judul </label><br>
        <input type="text" name="judul" id="judul" autofocus required value="<?= $a['judul']; ?>"><br><br>
      </li>
      <li>
        <label for="produser">Produser </label><br>
        <input type="text" name="produser" id="produser" autofocus required value="<?= $a['produser']; ?>"><br><br>
      </li>
      <li>
        <label for="status">Status </label><br>
        <select name="status" id="status" autofocus required value="<?= $a['status']; ?>">
          <option value="">-----Status-----</option>
          <option value="On Going">On Going</option>
          <option value="Completed">Completed</option>
        </select>
      </li>
      <br>
      <li>
        <label for="total_episode">Total Episode </label><br>
        <input type="text" name="total_episode" id="total_episode" autofocus required value="<?= $a['total_episode']; ?>"><br><br>
      </li>
      <li>
        <label for="genre">Genre </label><br>
        <input type="text" name="genre" id="genre" autofocus required value="<?= $a['genre']; ?>"><br><br>
      </li>
      <li>
        <label for="studio">Studio </label><br>
        <input type="text" name="studio" id="studio" autofocus required value="<?= $a['studio']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php">Kembali</a>
      </button>
    </ul>
  </div>
</form>

<script src="js/script.js"></script>
</body>
</html>