<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 12 - 01 Mei 2021
Tambah.php 
*/
?> 


<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal ditambahkan!');
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
  <title>Tambah Data Anime</title>
</head>
<body>
  
<h3>Form Tambah Data Anime</h3>
<form action="" method="POST">
  <div class="container">
    <ul>
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="file" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="judul">Judul </label><br>
        <input type="text" name="judul" id="judul" required><br><br>
      </li>
      <li>
        <label for="produser">Produser </label><br>
        <input type="text" name="produser" id="produser" required><br><br>
      </li>
      <li>
        <label for="status">Status </label><br>
        <select name="status" id="status" required>
          <option value="">-----Status-----</option>
          <option value="On Going">On Going</option>
          <option value="Completed">Completed</option>
        </select>
      </li>
      <br>
      <li>
        <label for="total_episode">Total Episode </label><br>
        <input type="text" name="total_episode" id="total_episode" required><br><br>
      </li>
      <li>
        <label for="genre">Genre </label><br>
        <input type="text" name="genre" id="genre" required><br><br>
      </li>
      <li>
        <label for="studio">Studio </label><br>
        <input type="text" name="studio" id="studio" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="latihan3.php">Kembali</a>
      </button>
    </ul>
  </div>
</form>

</body>
</html>