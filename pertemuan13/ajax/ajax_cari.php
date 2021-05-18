<?php
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 12 - 01 Mei 2021
Ajax_Cari.php
*/
?>


<?php
require '../functions.php';
$an = cari($_GET['keyword']);

?>

<table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>

            <?php if(empty($an)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color: red; font-style:italic;">Data Anime Tidak Ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?> 

            <?php $i = 1 ?>
            <?php foreach ($an as $a) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="img/<?= $a["gambar"]; ?>"></td>
                    <td><?= $a["judul"]; ?></td>
                    <td><a href="detail.php?id=<?= $a['id'] ?>">Lihat Detail</span></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>