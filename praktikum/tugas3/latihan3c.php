<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
	$pesepakbola = [
	    "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Ral Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "AC Milan"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan3 C</title>
    <style>
    .kotak {
        font-size: 20px;
        border: 2px solid black;
        padding: 10px;
        width: 50%;
        font-family: arial;
    }
    </style>
</head>
<body>

    <div class="kotak">
        <h2>Daftar pemain bola terkenal Dan Clubnya</h2>
        <table>
            <?php foreach($pesepakbola as $pebola=> $club) : ?>
                <td><b><?= $pebola; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>