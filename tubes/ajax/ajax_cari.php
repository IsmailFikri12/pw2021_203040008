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
require '../php/functions.php';
$buku = cari($_GET['keyword']);

?>

<table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Categori</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            <?php if(empty($buku)) : ?>
                <tr>
                    <td colspan="8">
                        <p style="color: red; font-style:italic; text-align: center">Data Buku Tidak Ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?> 

            <?php $i = 1 ?>
            <?php foreach ($buku as $bk) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="../assets/img/<?= $bk['gambar']; ?>"></td>
                    <td><?= $bk['judul']; ?></td>
                    <td><?= $bk['penulis']; ?></td>
                    <td><?= $bk['harga']; ?></td>
                    <td><?= $bk['categori']; ?></td>
                    <td><?= $bk['stok']; ?></td>
                    <td>
                        <a href="../php/ubah.php?id=<?= $bk['id'] ?>"><button>Ubah</button></a>
                        <a href="../php/hapus.php?id=<?= $bk ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>