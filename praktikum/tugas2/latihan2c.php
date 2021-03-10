<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
function tumpukanBola($tumpukan)
{
    for ($i = 1; $i <= $tumpukan; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<p class=lingkaran>$i</p>";
        }
        echo "<br>";
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .border {
            border: 2px solid black;
            width: fit-content;
            padding: 5px;
            padding-right: 40px;
            display: inline-block;
        }

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
    <div class="border">
        <?= tumpukanBola(5); ?>
    </div>
</body>

</html>