<?php 
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i=1; $i <= 5 ; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($j=1; $j <= 5; $j++) : ?>
            <tr>
                <th>Baris <?= $j; ?></th>
                <?php for ($a=1; $a <= 5; $a++) : ?>
                    <td>Baris <?= $j; ?>, Kolom <?= $a; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>