<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
function gantiStyle($tulisan, $style1, $style2)
{
    return "<div class = $style1>
                <p class = $style2>$tulisan</p>
            </div>";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>

    <style>
        .style1 {
            width: 50%;
            border: 2px solid black;
            box-shadow: 0 0 15px #000;
            border-radius: 5px;
        }

        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <?= gantiStyle("Selamat datang di praktikum PW", "style1", "style2"); ?>
</body>

</html>