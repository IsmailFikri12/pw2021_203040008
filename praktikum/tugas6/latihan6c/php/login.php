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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>My Shop</title>
</head>
<body>
    
        <form action="" method="post" style="margin-left: 25px;">
        <h1 style="color: red; text-align: center;">LOGIN</h1>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style:italic;">Username atau Password Salah</p>
            <?php endif; ?>
            <table style="margin-left: 50px;">
            <h2 style="color: blue;">Masukan Username dan Passsword</h2>
                <tr>
                    <td><label for="username"><span class="badge bg-warning">Username</span></label></td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password" <span class="badge bg-warning">Password</span></label></td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <div class="remember">
                <td>
                    <input type="checkbox" name="remember">
                    <label for="remember"><span style="font-weight: bold;">Remember me</span></label>
                </td>
            </div>
            <button style="margin-top: 15px;margin-left: 55px;" class="btn btn-dark" type="submit" name="submit">Login</button>

            <div class="registrasi">
                <p style="font-weight: bold;margin-top:15px;">Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
        </form>

</body>
</html>