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
  <html>
    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https:kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!--My Css -->
    <link rel="stylesheet" href="../css/reg.css">

</head>
<title>Registrasi</title>
<body>
  
<!--
<form action="" method="POST">
<h1>Registrasi</h1>
  <table>
    <tr>
      <p>Buat Username dan Passsword Baru</p>
    </tr>
    <tr>
      <td><label for="username"><span>Username</span></label></td>
      <td>:</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><label for="password"><span>Password</span></label></td>
      <td>:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <button type="submit" name="register">REGISTER</button>
  <div class="login">
    <p>Sudah punya akun ? Login <a href="login.php">Disini</a></p>
  </div>
</form>
-->

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Registrasi</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username">
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
              </div>
              <input type="submit" name="register" value="Registrasi" class="btn solid">
              <div class="login">
                <p>Sudah punya akun ? Login <a href="login.php">Disini</a></p>
              </div>
          </form>
        </div>
    </div>
  <img src="../assets/registrasi/reg.svg" class="image" alt="">
</div>

</body>
</html>