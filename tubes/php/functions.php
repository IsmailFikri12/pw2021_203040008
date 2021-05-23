<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040008");

    return $conn;
}

function query($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload() 
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // Ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //         alert('Pilih Gambar Terlebih Dahulu!');
    //       </script>"; 
    return 'nophoto.png';
  }

  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar');
           </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/jpg') {
    echo "<script>
            alert('yang anda pilih bukan gambar');
           </script>";
    return false;
  }
  // cek ukuran file
  // maksimal 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran file terlalu besar');
           </script>";
    return false;
  }
  // lolos pengecekan 
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);
  return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $harga = htmlspecialchars($data['harga']);
    // $gambar = htmlspecialchars($data['gambar']);
    // Upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $categori = htmlspecialchars($data['categori']);
    $stok = htmlspecialchars($data['stok']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "INSERT INTO buku
                    VALUES
                    ('', '$judul', '$penulis', '$harga', '$gambar', '$categori', '$stok', '$deskripsi)";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) 
{
    $conn = koneksi();
        // menghapus gambar di folder img
    $bk = query("SELECT * FROM anime WHERE id = $id");
    if ($bk['gambar'] != 'nophoto.png') {
        unlink('img/' . $bk['gambar']);
    }

    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $harga = htmlspecialchars($data['harga']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $categori = htmlspecialchars($data['categori']);
    $stok = htmlspecialchars($data['stok']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.png') {
        $gambar = $gambar_lama;
    }

    $query = "UPDATE buku 
                    SET 
                    judul='$judul',
                    penulis='$penulis',
                    harga='$harga',
                    gambar='$gambar',
                    categori='$categori',
                    stok='$stok',
                    deskripsi = '$deskripsi' 
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data) 
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

function cari($keyword) 
{
  $conn = koneksi();

  $query = "SELECT * FROM buku
              WHERE 
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            categori LIKE '%$keyword%' OR
            stok LIKE '%$keyword%'  
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}