<?php
session_start(); //memulai session

if (isset($_SESSION["login"])) { //jika belum ada session yang menandakan belum login
    header("Location: Site.php"); //kembalikan ke halaman login
    exit;
}

require 'function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    //koneksikan file dengan database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //jika username ditemukan
    if (mysqli_num_rows($result) === 1) {
        //ambil sebaris data dari username tersebut
        $row = mysqli_fetch_assoc($result);
        //verifikasikan password yang diinput dengan password yang ada di database
        if (password_verify($password, $row["password"])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        header {
            background: rgb(34, 193, 195);
            background: linear-gradient(41deg, rgba(109, 148, 201, 100) 0%, rgba(9, 9, 121, 100) 35%, rgba(2, 197, 224, 100) 65%, rgba(0, 255, 218, 100) 96%);
        }

        body {
            background-image: url(bec.png);
        }
    </style>
</head>

<body>
    <header>
        <br />
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div style="background: whitesmoke; border-radius: 30px;">
                        <h1>
                            <p style="text-align: center;">Login Administrator</p>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div style="background-color: white; border-radius: 30px; padding: 20px; margin-top: 170px;">
                    <h1>
                        <p style="text-align: center;">Login di Sini</p>
                    </h1>
                    <!--munculkan pesan error ketika error bernilai true-->
                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style:italic;">Username atau password yang anda masukkan salah!</p>
                    <?php endif; ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" id="username" name="username" placeholder="Username anda" size="45" required="" autocomplete="off"><br />
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password" size="45" required="" autocomplete="off"><br />
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login ke Menu</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>

</html>