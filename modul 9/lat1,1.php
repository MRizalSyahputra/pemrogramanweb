<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET method</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="get"> <!--nantinya hasil input dari form akan diproses di server sendiri, dan method yang digunakan adalah get-->
        <input type="text" input name="nama" placeholder="input your name here" /> <!--pengguna memasukkan nama-->
        <input type="password" input name="password" placeholder="password here" /> <!--pengguna memasukkan password-->
        <br />
        <input type="submit" value="ok" /> <!--tombol untuk mensubmit data yang telah dimasukkan-->
    </form>

    <?php
    if (isset($_GET["nama"])) { //jika data sudah dimasukkan
        echo "hello, " . $_GET["nama"]; //maka perintah akan dilakukan
    }
    ?>
</body>

</html>