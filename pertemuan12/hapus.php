<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 12 - 01 Mei 2021
Hapus.php 
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
if (hapus($id) > 0) {
    echo "<script>
                alert('Data Berhasil dihapus!');
                document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal dihapus!');
                document.location.href = 'index.php';
          </script>";
  }

?>