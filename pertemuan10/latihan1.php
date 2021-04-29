<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?> 


<?php
// koneksi ke DB & Pilih Database
$conn = mysqli_connect("localhost", "root", "", "pw_203040008");

// Query isi tabel figure
$result = mysqli_query($conn, "SELECT * FROM anime");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result) // array numerik
// $row = mysqli_fetch_assoc($result) // array associative
// $row = mysqli_fetch_array($result) // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$anime = $rows;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Anime</title>
</head>

<body>

    <h1>Anime Jepang</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Produser</th>
            <th>Status</th>
            <th>Total Episode</th>
            <th>Studio</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($anime as $a) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $a["gambar"]; ?>"></td>
                <td><?= $a["judul"]; ?></td>
                <td><?= $a["produser"]; ?></td>
                <td><?= $a["status"]; ?></td>
                <td><?= $a["total_episode"]; ?></td>
                <td><?= $a["studio"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>