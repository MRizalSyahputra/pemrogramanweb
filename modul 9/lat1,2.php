<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST method</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post"> <!--sama saja dengan yang satunya, bedanya ini menggunakan metode post yang tidak mengirimkan data menuju URL, sehingga password lebih aman-->
        <input type="text" input name="nama" placeholder="input your name here" />
        <input type="password" input name="password" placeholder="password here" />
        <br />
        <input type="submit" value="ok" />
    </form>

    <?php
    if (isset($_POST["nama"])) {
        echo "hello, " . $_POST["nama"];
    }
    ?>
</body>

</html>