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
    <link rel="stylesheet" href="../css/style.css">
    <title>Ubah Data</title>
</head>

<body class="bg-dark">
    <h3 class="text-white text-center p-3 pb-0">Ubah Data Game</h3>
    <div class="container">
        <form action="" method="POST" class="mx-3 mb-3 text-white row g-3" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $gm['id']; ?>">
            <div class="col-12">
                <label class="form-label">
                    Nama:
                    <input type="text" name="nama" id="nama" size="1000" required value="<?= $gm['nama']; ?>" class="form-control">
                </label>
            </div>

            <div class="col-md-6">
                <label class="form-label">
                    Developer:
                    <input type="text" name="developer" id="developer" size="100" required value="<?= $gm['developer']; ?>" class="form-control">
                </label>
            </div>

            <div class="col-md-6">
                <label class="form-label">
                    Publisher:
                    <input type="text" name="publisher" id="publisher" size="100" required value="<?= $gm['publisher']; ?>" class="form-control">
                </label>
            </div>

            <div class="col-12">
                <label class="form-label">
                    Genre:
                    <input type="text" name="genre" id="genre" size="1000" required value="<?= $gm['genre']; ?>" class="form-control">
                </label>
            </div>

            <div class="col-12">
                <label class="form-label">
                    Platform:
                    <input type="text" name="platform" id="platform" size="1000" required value="<?= $gm['platform']; ?>" class="form-control">
                </label>
            </div>

            <div class="col-12">
                <label class="form-label">
                    Tanggal Rilis:
                    <input type="date" name="tgl_rilis" id="tgl_rilis" size="100" required value="<?= $gm['tgl_rilis']; ?>" class="form-control">
                </label>
            </div>

            <div class="col-12">
                <input type="hidden" name="img_lama" value="<?= $gm['img']; ?>">
                <label class="form-label">
                    Gambar:
                    <input type="file" name="img" id="img" class="form-control gambar" onchange="previewImage()">
                </label>
                <img src="../assets/<?= $gm['img']; ?>" width="200" height="105" style="display: block;" class="img-preview">
            </div>

            <div class="col-12 mt-0">
                <br>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data!</button>
                <a href="admin.php"><button type="button" class="btn btn-success">Kembali</button></a>
            </div>
        </form>
    </div>

    <script>
        function previewImage() {
            const gambar = document.querySelector('.gambar');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
    </script>
</body>

</html>