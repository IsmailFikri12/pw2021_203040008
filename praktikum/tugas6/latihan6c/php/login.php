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

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);

    if($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if(isset($_POST['submit'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

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
    <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
    <style>
    section {
        min-height: 420px;
    }

    span {
        font-family: arial;
        border: 1px solid black;
        padding: 5px;
        background-color: blue;
        font-weight: bold;
    }

    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
    }

    body{
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background: url("../assets/background/login.jpg")
    }

    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 500px;
        background-color: rgba(0,0,0,.7);
        box-shadow: 0 0 10px rgba(255,255,255,.3);
    }

    .container h1{
        text-align: center;
        color: #fafafa;
        margin-bottom: 30px;
        text-transform: uppercase;
        border-bottom: 4px solid #2979ff;
    }

    .container label{
        color: #90caf9;
    }

    .container form input{
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #2979ff;
        color: #fff;
        font-size: 20px;
    }

    .container form button{
        width: 100%;
        padding: 5px 0;
        border: none;
        background-color:#2979ff;
        font-size: 18px;
        color: #fafafa;
    }

    .container .remember-label {
        text-align: center;
    }

    .container .registrasi p {
        text-align: center;
    }

    </style>

    <title>My Shop</title>
</head>
<body>
    
    <div class="container">
        <h1>LOGIN</h1>
        <form action="" method="post">
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username atau Password Salah</p>
            <?php endif; ?>
            <table>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <div class="remember">
                <input type="checkbox" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" name="submit">Login</button>

            <div class="registrasi">
                <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
        </form>
    </div>

</body>
</html>