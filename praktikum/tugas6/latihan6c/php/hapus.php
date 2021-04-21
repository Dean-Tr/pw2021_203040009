<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'admin.php';
            </script>";
} else {
    echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = 'admin.php';
            </script>";
}
?>