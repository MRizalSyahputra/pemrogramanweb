<?php
session_start(); //memulai session

    if (isset($_SESSION["login"])) { //jika belum ada session yang menandakan belum login
        header("Location: Site.php"); //kembalikan ke halaman login
        exit;
    }

    require 'function.php';

    if(isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        //koneksikan file dengan database
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        //jika username ditemukan
        if(mysqli_num_rows($result) === 1) {
            //ambil sebaris data dari username tersebut
            $row = mysqli_fetch_assoc($result);
            //verifikasikan password yang diinput dengan password yang ada di database
            if(password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                header("Location: Site.php"); //arahkan ke situs utama
                exit;
            }
        }
        //munculkan error jika tidak memenuhi kedua syarat di atas
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login page</title>
</head>

<body>
    <h1>Login di Sini</h1>

    <!--munculkan pesan error ketika error bernilai true-->
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username atau password yang anda masukkan salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <input type="text" id="username" name="username" placeholder="Username anda" required="" autocomplete="off"><br />
        <input type="password" id="password" name="password" placeholder="Password" required="" autocomplete="off"><br />
        <button type="submit" name="login">Login ke Menu</button>
    </form>
</body>

</html>