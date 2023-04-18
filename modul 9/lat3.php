<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        Kecacatan yang dimiliki :
        <br />
        <input type="radio" name="Disability" value="Tidak Ada" />Tidak ada/normal <br />
        <input type="radio" name="Disability" value="Tuna Netra" />Tuna Netra <br />
        <input type="radio" name="Disability" value="Tuna Daksa" />Tuna Daksa <br />
        <input type="radio" name="Disability" value="Tuna Wicara" />Tuna Wicara <br />
        <input type="radio" name="Disability" value="Tuna Rungu" />Tuna Rungu<br />

        <input type="submit" value="ok" />
    </form>
    <?php
    if (isset($_POST["Disability"])) { //jika data sudah diisi
        if ($_POST["Disability"] == "Tidak Ada") { //jika pengguna memilih tidak ada atau normal, maka perintah berikut akan dijalankan
            echo "Sepertinya kamu tidak memiliki kecacatan, syukurlah.";
        } else { //jika pengguna memilih pilihan yang lain, perintah berikut akan dijalankan
            echo "Maaf soal itu, ternyata anda menderita ";
            echo $_POST["Disability"];
        }
    }
    ?>
</body>

</html>