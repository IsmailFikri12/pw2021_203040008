<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 13 - 01 Mei 2021
Registrasi.php
*/
?> 

<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('User Baru Berhasil Ditambahkan. Silahkan Login!');
            document.location.href = 'login.php';
          </script>"; 
    } else {
        echo 'User Gagal Ditambahkan';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    
    <h3>Form Registrasi</h3>

    <form action="" method="POST">
    <ul>
        <li>
            <label for="username">Username :</label>  
            <input type="text" name="username" autofocus autocomplete="off" required>
        </li>
        <li>
            <label for="password">Password :</label>  
            <input type="password" name="password1" required>
        </li>
        <li>
            <label for="password">Konfirmasi Password :</label>  
            <input type="password" name="password2" required>
        </li>
        <li>
            <button type="submit" name="registrasi">Registrasi</button>
        </li>
        <li>
            <a href="login.php">Kembali ke login</a>
        </li>
    </ul>
    </form>
</body>
</html>