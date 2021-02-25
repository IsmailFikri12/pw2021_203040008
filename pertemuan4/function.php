<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 4 - 25 Februari 2021
mempelajari mengenai sintaks PHP 
Function
time()
date()
mktime()
strtotime()
*/
?> 

<?php
function salam($waktu = "Datang", $nama = "Admin!") {
    return "Selamat $waktu, $nama!";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Ismail"); ?></h1>
</body>
</html>