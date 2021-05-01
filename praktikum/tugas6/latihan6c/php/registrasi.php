<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>My Shop</title>
</head>
<body>
        
<form action="" method="POST" style="margin-left: 25px;">
<h1 style="color: red; text-align: center;">Registrasi</h1>
  <table style="margin-left: 50px;">
    <tr>
      <p style="color: blue; font-size: 20px;">Buat Username dan Passsword Baru</p>
    </tr>
    <tr>
      <td><label for="username"><span class="badge bg-warning">Username</span></label></td>
      <td>:</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><label for="password"><span class="badge bg-warning">Password</span></label></td>
      <td>:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <button type="submit" name="register" style="margin-top: 15px;margin-left: 55px;" class="btn btn-primary">REGISTER</button>
  <div class="login">
    <p style="font-weight: bold;margin-top:15px;">Sudah punya akun ? Login <a href="login.php">Disini</a></p>
  </div>
</form>

</body>
</html>