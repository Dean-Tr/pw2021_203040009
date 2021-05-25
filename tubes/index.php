<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

$game = query("SELECT * FROM game");

if (isset($_POST['cari'])) {
    $game = cari($_POST['keyword']);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index1.css">
    <title>Everyday Game</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-light bg-Secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white ms-5 ps-5" href="index.php"><strong>EG</strong></a>
            <a href="php/login.php" class="me-5 pe-5">
                <button type="button" class="btn btn-primary mb-2 mx-2">Admin</button>
            </a>
        </div>
    </nav>

    <div class="img d-flex align-items-center justify-content-center center">
        <h1 class="d-flex text-white justify-content-center title">Everyday Game</h1>
    </div>

    <div class="d-flex justify-content-center m-3">
        <div class="d-flex">
            <form action="" method="POST" class="d-flex mb-2">
                <input type="text" name="keyword" autofocus placeholder="cari" autocomplete="off" class="keyword input-group input-group-sm form-control">
                <button type="submit" name="cari" class="btn btn-outline-info tombol-cari">Cari!</button>
            </form>
        </div>
    </div>

    <div class="container">
        <?php if (empty($game)) : ?>
            <h2 class="text-center text-danger p-3">Data tidak ditemukan</h2>
        <?php else : ?>
            <div class="d-flex m-5 my-2 bd-highlight flex-wrap align-items-center justify-content-center">
                <?php foreach ($game as $gm) : ?>
                    <div class="border border-3 border-white rounded p-4 pb-1 m-2 bd-highlight col-auto mr-auto">
                        <img src="assets/<?= $gm["img"]; ?>" width="310" height="163">
                        <p class="text-center m-1 text-decoration-none text-white"><?= $gm["nama"]; ?></p>
                        </p>
                        <a href="php/detail.php?id=<?= $gm["id"] ?>">
                            <button type="submit" class="btn btn-primary">Detail</button>
                        </a>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <footer class="text-center text-white bg-Secondary mt-3">
        <div class="text-center p-2">
            <p>© 2021 Copyright: Dean Tirta Santika</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>