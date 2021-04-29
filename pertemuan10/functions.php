<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 10 - 29 April 2021
Function.php 
*/
?> 


<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_203040008");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $judul = htmlspecialchars($data['judul']);
  $produser = htmlspecialchars($data['produser']);
  $status = htmlspecialchars($data['status']);
  $total_episode = htmlspecialchars($data['total_episode']);
  $genre = htmlspecialchars($data['genre']);
  $studio = htmlspecialchars($data['studio']);

  $query = "INSERT INTO anime
                    VALUES
                    ('','$judul','$produser','$status','$total_episode','$genre','$gambar','$studio')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}