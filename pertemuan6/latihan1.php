<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 6 - 9 Maret 2021
mempelajari mengenai sintaks PHP 
ASSOCIATIVE Array
*/
?> 

<?php
// array
// membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", "true"];
// menampilkan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// menampilkan 1 elemen pada array
// echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>


<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?php echo $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>


</body>
</html>