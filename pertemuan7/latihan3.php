<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 7 - 18 Maret 2021
mempelajari mengenai sintaks PHP 
GET and POST
*/
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

    <form action="" method="post">
        Masukkan Nama :
        <input type="txt" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

</body>
</html>