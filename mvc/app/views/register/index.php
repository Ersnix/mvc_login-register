<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= BASEURL?>/css/style.css">
</head>

<body>
    <center>

        <h1>Register</h1>
        <form action="<?= BASEURL ?>/register/prosesRegister" method="post">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" autocomplete="off" required><br>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" autocomplete="off" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" autocomplete="off" required><br>
            <a class="kembali" href="<?= BASEURL ?>/Login">Kembali</a><br>

            <button type="submit">Register</button>
        </form>
    </center>
</body>

</html>