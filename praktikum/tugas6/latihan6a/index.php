<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->


<?php 
require 'php/functions.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../latihan6c/css/style.css">
    <title>My Shop</title>
</head>
<body>
        
    
    
        

    <div class="container">
        <a href="php/login.php">
            <button type="">Admin</button>
        </a>
        <h1>Online Shop Happy</h1>
        <?php foreach ($buku as $bk) :?>
            <p class="nama">
                <table class="table">
                    <tr>
                    <td class="table-info"><a style="text-decoration:none" href="php/detail.php?id=<?= $bk['id'] ?>"><span><?= $bk["penulis"]; ?></span></a></td>
                    </tr>
                </table>
            </p>
        <?php endforeach; ?>
    </div>
    
    

</body>
</html>