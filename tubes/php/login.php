<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

session_start();
require 'functions.php';
if (isset ($_SESSION['username'])) {
    header ("Location: admin.php");
    exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// login
if(isset($_POST['submit'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION ['username'] = $_POST['username'];
            $_SESSION ['hash'] = hash('sha256', $row['id'], false);
        
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header ("Location: admin.php");
                die;
            }

            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
  <html>
    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https:kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
    <!--My Css -->
    <link rel="stylesheet" href="../css/log.css">

</head>
<title>Login</title>
<body>
    
<!--
        <form action="" method="post">
        <h1>LOGIN</h1>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style:italic;">Username atau Password Salah</p>
            <?php endif; ?>
            <table style="margin-left: 50px;">
            <h2>Masukan Username dan Passsword</h2>
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
            <div class="remember">
                <td>
                    <input type="checkbox" name="remember">
                    <label for="remember"><span">Remember me</span></label>
                </td>
            </div>
            <button type="submit" name="submit">Login</button>

            <div class="registrasi">
                <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
        </form>
-->

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="POST" class="sign-in-form">
                <h2 class="title">Sign In</h2>
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style:italic;">Username atau Password Salah</p>
                <?php endif; ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="remember">
                    <td>
                        <input type="checkbox" name="remember">
                        <label for="remember"><span">Remember me</span></label>
                    </td>
                </div>
                <input type="submit" name="submit" value="Login" class="btn solid">
                <div class="registrasi">
                    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                </div>
            </form>
        </div>
    </div>
    <img src="../assets/login/log.svg" class="image" alt="">
</div>

</body>
</html>