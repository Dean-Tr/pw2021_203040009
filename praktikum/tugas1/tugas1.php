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
    .tabel {
        padding: 5px 15px 15px 5px;
    }

    .salmon {
        width: 50px;
        height: 50px;
        background-color: salmon;
        font-size: 0px;
    }

    .lightblue {
        width: 50px;
        height: 50px;
        background-color: lightblue;
        font-size: 0px;
    }
    </style>
</head>
<body>
    <table class="tabel" border="2" cellspacing="5" cellpadding="0">
        <?php for ($j=1; $j <= 6; $j++) : ?>
            <tr>
                <?php for ($a=1; $a <= 6; $a++) : ?>
                    <?php if (($j % 2 != 0) && ($a % 2 != 0)) : ?>
                        <td class="lightblue"> <?= $j . $a; ?> </td>
                    <?php elseif (($j % 2 != 0) && ($a % 2 == 0)) : ?>
                        <td class="salmon"> <?= $j . $a; ?> </td>
                    <?php elseif (($j % 2 == 0) && ($a % 2 != 0)) : ?>
                        <td class="salmon"> <?= $j . $a; ?> </td>
                    <?php elseif (($j % 2 == 0) && ($a % 2 == 0)) : ?>
                        <td class="lightblue"> <?= $j . $a; ?> </td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>