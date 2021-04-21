<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 12 - 6 Mei 2021
Mempelajari mengenai Login & Registrasi
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>