<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
require 'functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('Registrasi Gagal');
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
    <title>Registrasi</title>
</head>

<body class="bg-dark">


    <form action="" method="POST" class="d-flex justify-content-center p-5">
        <ul class="text-white border border-light rounded p-3 no-bullets border-4">
            <h3 class="text-white text-center">Registrasi</h3>
            <li>
                <label class="form-label">
                    Username : <br>
                    <input type="text" name="username" autocomplete="off" class="form-control">
                </label>
            </li>

            <li>
                <label class="form-label">
                    Password : <br>
                    <input type="password" name="password" autocomplete="off" class="form-control">
                </label>
            </li>

            <button type="submit" name="register" class="btn btn-primary m-1">Register</button>
        </ul>
    </form>
</body>

</html>