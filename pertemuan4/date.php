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
// date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("d M Y", time()-60*60*24*100);

// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0)
// Jam, Menit, Detik, Bulan, Tanggal, Tahun
// echo date("l", mktime(0,0,0,1,28,2002));

// strtotime
echo date("l", strtotime("28 jan 2002"));
?>