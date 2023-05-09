<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user = 'Mahmud Ibnu' && $pass = 'nguwawor123') {
        $_SESSION['login'] = $user;
        echo "<h2>Selamat, anda berhasil login</h2>";
        echo "<h3>Klik <a href='sesi2.php'>di sini</a> untuk memeriksa sesi login anda</h3>";
    }
} else {
?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login lurd</title>
    </head>

    <body>
        <form action="" method="post">
            <h2>Monggo login</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="login" value="login">
        </form>
    </body>

    </html>
<?php }
?>