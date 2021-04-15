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

$id = $_GET['id'];
$gm = query("SELECT * FROM game WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah!');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Ubah Data</title>
</head>

<body class="bg-dark">
    <h3 class="text-white">Form Ubah Data Game</h3>
    <form action="" method="POST" class="mb-3 text-white">
        <input type="hidden" name="id" id="id" value="<?= $gm['id']; ?>">
        <ul>
            <li>
                <label class="form-label">
                    Gambar:
                    <input type="text" name="img" id="img" required value="<?= $gm['img']; ?>" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Nama:
                    <input type="text" name="nama" id="nama" required value="<?= $gm['nama']; ?>" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Tanggal Rilis:
                    <input type="date" name="tgl_rilis" id="tgl_rilis" required value="<?= $gm['tgl_rilis']; ?>" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Developer:
                    <input type="text" name="developer" id="developer" required value="<?= $gm['developer']; ?>" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Publisher:
                    <input type="text" name="publisher" id="publisher" required value="<?= $gm['publisher']; ?>" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Genre:
                    <input type="text" name="genre" id="genre" required value="<?= $gm['genre']; ?>" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Platform:
                    <input type="text" name="platform" id="platform" required value="<?= $gm['platform']; ?>" class="form-control">
                </label>
            </li>
            <br>
            <button type="submit" name="ubah" class="btn btn-primary">Ubah Data!</button>
            <a href="index.php"><button type="submit" class="btn btn-success">Kembali</button></a>
        </ul>
    </form>
</body>

</html>