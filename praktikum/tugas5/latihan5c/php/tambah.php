<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h3>Form Tambah Data Game</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Gambar: <br>
                    <input type="text" name="img" id="img" required> <br><br>
                </label>
            </li>

            <li>
                <label>
                    Nama: <br>
                    <input type="text" name="nama" id="nama" required> <br><br>
                </label>
            </li>

            <li>
                <label>
                    Tanggal Rilis: <br>
                    <input type="date" name="tgl_rilis" id="tgl_rilis" required> <br><br>
                </label>
            </li>

            <li>
                <label>
                    Developer: <br>
                    <input type="text" name="developer" id="developer" required> <br><br>
                </label>
            </li>

            <li>
                <label>
                    Publisher: <br>
                    <input type="text" name="publisher" id="publisher" required> <br><br>
                </label>
            </li>

            <li>
                <label>
                    Genre: <br>
                    <input type="text" name="genre" id="genre" required> <br><br>
                </label>
            </li>

            <li>
                <label>
                    Platform: <br>
                    <input type="text" name="platform" id="platform" required> <br>
                </label>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <a href="index.php"><button type="submit">Kembali</button></a>
        </ul>
    </form>
</body>

</html>