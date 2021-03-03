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
    <style>
    .lingkaran {
    margin: 3px;
    display: inline-block;
    width: 50px;
    height: 50px;
    background-color: salmon;
    line-height: 50px;
    text-align: center;
    font-size: 25px;
    border-radius: 50%;
    border: 3px solid black;
    }    
    </style>
</head>
<body>
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <?php for ($j = 1; $j <= $i; $j++) : ?>
                <p class="lingkaran"><?= $i; ?></p>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
</body>
</html>