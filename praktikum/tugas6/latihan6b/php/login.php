<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakuakan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
        }
        if (hash('sha256', $row['id'] == $_SESSION['hash'])) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
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
    <title>Login</title>
</head>

<body class="bg-dark">

    <form action="" method="POST" class="d-flex justify-content-center p-5">

        <ul class="text-white border border-light rounded p-3 no-bullets border-4">
            <h3 class="text-white text-center">Login</h3>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username / Password salah</p>
            <?php endif; ?>
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

            <input type="checkbox" name="remember" class="form-check-input">
            <label for="remember" class="form-check-label">Remember Me</label>
            <br>
            <button type="submit" name="submit" class="btn btn-primary m-1">login</button>

            <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
        </ul>
    </form>
</body>

</html>