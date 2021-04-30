<?php 
/*
Ismail Fikri
203040008
https://github.com/IsmailFikri12/pw2021_203040008
pertemuan 12 - 01 Mei 2021
Logout.php
*/
?> 


<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>