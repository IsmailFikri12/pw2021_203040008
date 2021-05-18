<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 13 - 01 Mei 2021
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

  // $gambar = htmlspecialchars($data['gambar']);
  // Upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
   }
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
  // menghapus gambar di folder img
  $an = query("SELECT * FROM anime WHERE id = $id");
  if ($an['gambar'] != 'nophoto.png') {
    unlink('img/' . $an['gambar']);
  }

  mysqli_query($conn, "DELETE FROM anime WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $judul = htmlspecialchars($data['judul']);
  $produser = htmlspecialchars($data['produser']);
  $status = htmlspecialchars($data['status']);
  $total_episode = htmlspecialchars($data['total_episode']);
  $genre = htmlspecialchars($data['genre']);
  $studio = htmlspecialchars($data['studio']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nophoto.png') {
    $gambar = $gambar_lama;
  }

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

function login($data) 
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // Cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username' ")) {
    // Cek password
    if (password_verify($password, $user['password'])) {
      // Set SESSION
    $_SESSION['login'] = true;
    header("Location: index.php");
    exit;
    }
  } 
  return [
    'error' => true,
    'pesan' => 'Username atau Password Salah!'
  ];
  
}

function registrasi($data) 
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data ['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // Jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username atau Password Tidak Boleh Kososng!');
            document.location.href = 'registrasi.php';
          </script>"; 
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('Username Sudah Terdaftar!');
            document.location.href = 'registrasi.php';
          </script>"; 
    return false;
  }

  // Jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Password Tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </script>"; 
    return false;
  }

  // Jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </script>"; 
    return false;
  }

  // Jika username dan password sudah sesuai
  // Enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // Insert ke Tabel
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

?>