<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 11 - 29 April 2021
Mempelajari mengenai Delete, Update Data & Searching Data
*/
?>
<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
} else {
    echo "data gagal dihapus!";
}
?>