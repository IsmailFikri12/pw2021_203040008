<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
	$pesepakbola = [
	    "Mohammad Salah",
	    "Cristiano Ronaldo",
	    "Lionel Messi",
	    "Zlatan Ibrahimovic",
	    "Neymar Jr"
	];
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Latihan3 B</title>
	</head>
	<body>
	    <h2>Daftar pemain bola terkenal</h2>
	    <ol>
	        <?php foreach($pesepakbola as $pebola) : ?>
	            <li><?= $pebola ?></li>
	        <?php endforeach; ?>
	    </ol>
	

	    <?php
	    array_push($pesepakbola,"Luca Modric","Sadio Mane");
	    sort($pesepakbola);
	    ?>
	

	    <h2>Daftar pemain bola terkenal baru</h2>
	    <ol>
	        <?php foreach($pesepakbola as $pebola) : ?>
	            <li><?= $pebola ?></li>
	        <?php endforeach; ?>
	    </ol>
	</body>
	</html>
