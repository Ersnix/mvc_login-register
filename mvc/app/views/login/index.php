<?php
if (isset($_SESSION['register'])) {
    echo "<script>alert('register berhasil')</script>";

    unset($_SESSION['register']);
}
if (isset($_SESSION['status'])) {
    echo "<script>alert('username atau password salah!!')</script>";

    unset($_SESSION['status']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=BASEURL?>/css/style.css">
</head>

<body>
    <center>

        <h1>Login</h1>

        <form action="<?= BASEURL ?>/login/prosesLogin" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" autocomplete="off" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" autocomplete="off" required><br>
            <a href="<?= BASEURL ?>/register">belum punya akun? Register</a><br>

            <button type="submit">Login</button>
        </form>
    </center>
</body>

</html>