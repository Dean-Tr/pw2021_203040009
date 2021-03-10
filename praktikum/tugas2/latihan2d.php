<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
function hitungDeterminan($a, $b, $c, $d)
{
    echo "<table class = border cellspacing = 5 cellpadding = 5>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
        </table>";
    $det = ($a * $d) - ($b * $c);
    echo "<p><strong>Determinan dari matriks tersebut adalah $det</strong></p>";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>
    <style>
        .border {
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
    </style>
</head>

<body>
    <?= hitungDeterminan(1, 2, 3, 4); ?>
</body>

</html>