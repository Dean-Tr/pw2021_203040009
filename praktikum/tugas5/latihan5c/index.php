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

// malakukan query
$game = query("SELECT * FROM game");

$no = 1;
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark">
    <h1 class="text-center text-white p-3">GAME</h1>

    <div class="d-flex m-5 my-2 bd-highlight flex-wrap align-items-center justify-content-center">
        <?php foreach ($game as $gm) : ?>
            <div class="border border-3 border-white rounded p-4 pb-1 bd-highlight col-auto mr-auto">
                <a class="text-decoration-none text-white" href="php/detail.php?id=<?= $gm["id"] ?>">
                    <img src="assets/<?= $gm["img"]; ?>" alt="">
                    <p class="text-center m-1"><?= $gm["nama"]; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>