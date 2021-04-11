<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040008");
$result = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    section {
        min-height: 420px;
    }

    h1 {
        text-align: center;
    }

    span {
        font-family: arial;
        border: 1px solid black;
        padding: 5px;
        background-color: blue;
        font-weight: bold;
    }
    </style>

    <title>My Shop</title>
</head>
<body>
        
    <h1>Online Shop Happy</h1>
    <div class="table-responsive">
        <table class="table">
            <tr class="table-primary">
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Type</th>
                <th>Stok</th>
            </tr>
            <?php $i = 1 ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td class="table-succes"><?= $i; ?></td>
                    <td><img src="assets/img/<?= $row["gambar"]; ?>" alt=""></td>
                    <td class="table-primary"><?= $row["judul"]; ?></td>
                    <td><?= $row["penulis"]; ?></td>
                    <td class="table-primary"><?= $row["harga"]; ?></td>
                    <td id="type"><span><?= $row["categori"]; ?></span></td>
                    <td class="table-primary"><?= $row["stok"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
