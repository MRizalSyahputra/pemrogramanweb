<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel dalam PHP</title>
</head>
<body>
    <?php
    $bil = 3.69; //untuk membuat variabel, gunakan $(nama variabel)
    var_dump($bil); //dump variabel tidak memerlukan echo
    echo "<br/>"; //ini untuk ganti baris, dan tetap memerlukan echo
    $kata = "asam garam kecut"; //untuk memasukkan data dengan tipe string memerlukan ""
    var_dump($kata);
    echo "<br/>";
    $kosong = NULL;
    var_dump($kosong);
    ?>
</body>
</html>