<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefilling Text Field</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" input name="nama" placeholder="input your name here" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" /> <!--penambahan value agar setelah diisi, nama tidak langsung hilang-->
        <input type="password" input name="password" placeholder="password here" /> <!--sebaiknya jangan terlalu gegabah menambahkan prefilling text field di password-->
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