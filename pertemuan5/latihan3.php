<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 5 - 2 Maret 2021
mempelajari mengenai sintaks PHP 
Array
*/
?> 

<?php
$mahasiswa = [
    ["Ismail Fikri", "203040008", "Teknik Informatika", "203040008@mail.unpas.ac.id"],
    ["Ismail", "203040000", "Teknik Industri", "203040000@mail.unpas.ac.id"],
    ["Fikri", "200000000", "Teknik Planologi", "200000000@mail.unpas.ac.id"]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>


<?php foreach( $mahasiswa as $mhs ) : ?>   
<ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html> 