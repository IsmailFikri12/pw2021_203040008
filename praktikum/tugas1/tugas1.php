<!-- 
Nama : Ismail Fikri
NRP : 203040008
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <style>
        .warna-baris-1 {
            background-color: salmon;
        }
        .warna-baris-2 {
            background-color: lightblue;
        }
    </style>
</head>

<body> 
        <table border="1" cellpadding="20" cellspacing="10">
            <?php for( $i = 1; $i <= 6; $i++ ) : ?>
                <?php if( $i % 2 == 0 ) : ?>
                    <tr class="warna-baris-1"> 
                <?php elseif ( $i % 2 == 1 ) : ?>
                    <tr class="warna-baris-2">
            <?php endif; ?>
            <?php for ( $j = 1; $j <= 3; $j++ ) : ?>
                    <td><?php "$i,$j"; ?></td>
                <?php if( $i % 2 == 1) : ?>
                    <td class="warna-baris-1">
                <?php elseif ( $i % 2 == 0) : ?>
                    <td class="warna-baris-2">
                    <?php endif; ?> </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>       
        </table>

</body>
</html>