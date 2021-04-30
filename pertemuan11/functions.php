<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 11 - 01 Mei 2021
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
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);

}

function hapus($id) 
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM anime WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $gambar = htmlspecialchars($data['gambar']);
  $judul = htmlspecialchars($data['judul']);
  $produser = htmlspecialchars($data['produser']);
  $status = htmlspecialchars($data['status']);
  $total_episode = htmlspecialchars($data['total_episode']);
  $genre = htmlspecialchars($data['genre']);
  $studio = htmlspecialchars($data['studio']);

  $query = "UPDATE anime SET
              gambar = '$gambar',
              judul = '$judul',
              produser = '$produser',
              status = '$status',
              total_episode = '$total_episode',
              genre = '$genre',
              studio = '$studio'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);

}

function cari($keyword) 
{
  $conn = koneksi();

  $query = "SELECT * FROM anime
              WHERE 
            judul LIKE '%$keyword%' OR
            produser LIKE '%$keyword%' OR
            status LIKE '%$keyword%' OR
            total_episode LIKE '%$keyword%' OR
            genre LIKE '%$keyword%' OR
            studio LIKE '%$keyword%'   
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

?>