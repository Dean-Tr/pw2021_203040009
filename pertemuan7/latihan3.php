<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai GET & POST
*/
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo Selamat Datang <?= $_POST["nama"]; ?>!</h1>
    <?php endif; ?>

    <form action="" method="POST">
        Masukan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>